<?php
// index.php
umask(0000);

require_once __DIR__.'/vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Validator\Constraints as Assert;
//use Silex\Provider\HttpCacheServiceProvider;
use Gedmo\Sluggable\Util\Urlizer; 

// for extracting translations messages
use Symfony\Component\Translation\MessageCatalogue,
    Symfony\Component\Translation\Writer\TranslationWriter;
use Symfony\Bridge\Twig\Translation\TwigExtractor;


//Request::trustProxyData();
$app = new Silex\Application();

// definitions
$app['email_from'] = 'noreply@isthestig.com';
$app['email_to'] = 'feedback@isthestig.com';
$app['email_host'] = 'mail.isthestig.com';
$app['email_username'] = 'noreply.isthestig';
$app['email_password'] = 's3reply78';
$app['session.default_locale'] = 'es';
$app['locales_available'] = 'es|en';

// Service providers
//$app->register(new HttpCacheServiceProvider(),array('http_cache.cache_dir'=>__DIR__.'/cache',));
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
    'twig.options' => array('cache' => __DIR__ . '/cache/twig.cache', 'strict_variables' => true),
));
$app->register(new Silex\Provider\FormServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());
$app->register(new Silex\Provider\SessionServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider(), array(
    'locale' => $app['session.default_locale'],
    'locale_fallback' => 'en',
    'translator.domains' => array(),
));
$app['translator']->addResource('xliff', __DIR__.'/translations/messages.es.xliff', 'es');
$app['translator']->addResource('xliff', __DIR__.'/translations/messages.en.xliff', 'en');

$app->register(new Silex\Provider\SwiftmailerServiceProvider(), array(
    'swiftmailer.options' => array(
                            'host' => $app['email_host'],
                            'username' => $app['email_username'],
                            'password' => $app['email_password'],
                            //'port' => 25, 'encryption' => null, 'auth_mode' => null,
                            ),
));

$app->error(function (\Exception $e, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // logic to handle the error and return a Response
    switch ($code) {
        case 404:
            $message = 'The requested page could not be found.';
            break;
        default:
            $message = 'We are sorry, but something went terribly wrong.';
    }

    return new Response($message, $code);    
});


$app->get('/{_locale}/{key}/news/{year}/{month}/{day}/{someone}-is-the-stig.html', function ($key, $year, $month, $day, $someone) use ($app) {
    $someone = base64_decode($key);
    $someone = trim($someone);
    $someone = ucwords($someone);

    return $app['twig']->render('news_view.html.twig', array(
        'someone' => $someone,
    ));
})
->value('_locale', 'es')
->value('year', date('Y'))
->value('month', date('m'))
->value('day', date('d'))
->assert('_locale', $app['locales_available'])
->assert('year', '\d{4}')
->assert('month', '\d{2}')
->assert('day', '\d{2}')
->assert('someone', '.*')
->bind('news_view');

$app->match('/{_locale}/contact.html', function (Request $request) use ($app) {
    $data = array (
        'name' => null,
        'email' => null,
        'comments' => null,
    );

    $form = $app['form.factory']->createBuilder('form', $data)
        ->add('name', 'text', array(
            'constraints' => array(new Assert\NotBlank(), new Assert\MinLength(3)),
            'required' => true,
        ))
        ->add('email', 'email', array(
            'constraints' => array(new Assert\NotBlank(), new Assert\MinLength(5), new Assert\Email()),
            'required' => true,
        ))
        ->add('comments', 'textarea', array(
            'constraints' => array(new Assert\NotBlank(), new Assert\MinLength(10)),
            'required' => true,
        ))
        ->getForm();
    if ('POST' == $request->getMethod()) {
        $form->bindRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();
            $email_body = $app['twig']->render('email_contact_content.html.twig', array(
                'data' => $data,
            ));

            $message = \Swift_Message::newInstance()
                    ->setSubject('[isthestig.com] Feedback')
                    ->setFrom(array($app['email_from']))
                    ->setTo(array($app['email_to']))
                    ->setBody($email_body);

            if ($app['debug'] || $app['mailer']->send($message))
                $app['session']->setFlash('success', 'Email enviado correctamente');
            else
                $app['session']->setFlash('error', 'Hubo un error enviando la información');

            return $app->redirect($app['url_generator']->generate('contact'));
        }
    }

    return $app['twig']->render('contact.html.twig', array(
        'form' => $form->createView(),
    ));

})
->value('_locale', 'es')
->assert('_locale', $app['locales_available'])
->bind('contact');

$app->match('/{_locale}/who-is-the-stig.html', function (Request $request) use ($app) {
    $data = array(
        'name' => null,
    );

    $url = null;
    $someone = null;
    $slug = null;
    $url_example = $app['url_generator']->generate('news_view', array(
                'someone' => Urlizer::urlize('Michael Schumacher', '-'),
                'key' => base64_encode('Michael Schumacher'),
            ));
    
    $form = $app['form.factory']->createBuilder('form', $data)
        ->add('name', 'text', array(
            'constraints' => array(new Assert\NotBlank(), new Assert\MinLength(5)),
            'required' => true,
        ))
        ->getForm();

    if ('POST' == $request->getMethod()) {
        $form->bindRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
            $someone_key = base64_encode($data['name']);

            // do something with the data
            $slug = Urlizer::urlize($data['name'], '-');
            $someone = $data['name'];
            $someone = ucwords($someone);

            $url = $app['url_generator']->generate('news_view', array(
                'someone' => $slug,
                'key' => $someone_key,
            ), true);

            // redirect somewhere
            //return $app->redirect($app['url_generator']->generate('whoIsTheStig'));
        }
    }    

    return $app['twig']->render('/who-is-the-stig.html.twig', array(
        'form' => $form->createView(),
        'url' => $url,
        'someone' => $someone,
        'url_example' => $url_example,
    ));
})
->value('_locale', 'es')
->assert('_locale', $app['locales_available'])
->bind('whoIsTheStig');

$app->get('/{_locale}', function (Request $request) use ($app) {

	// by default showing how to be the Stig
    return $app->redirect($app['url_generator']->generate('whoIsTheStig'));
    //return $app['twig']->render('homepage.html.twig', array());
})
->value('_locale', 'es')
->assert('_locale', $app['locales_available'])
->bind('homepage');

$app->before(function (Request $request) use ($app) {
    $app['session']->start();

    //$app['translator']->setLocale($app['session']->get('_locale'));
    $app['translator']->setLocale($app['request']->get('_locale'));

    if ($request->getClientIp() == '127.0.0.1') {
        $app['debug'] = true;
    }
        
});

$app->run();