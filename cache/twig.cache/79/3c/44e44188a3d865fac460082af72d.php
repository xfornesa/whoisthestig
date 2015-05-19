<?php

/* layout.html.twig */
class __TwigTemplate_793c44e44188a3d865fac460082af72d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'og_title' => array($this, 'block_og_title'),
            'og_type' => array($this, 'block_og_type'),
            'og_url' => array($this, 'block_og_url'),
            'og_image' => array($this, 'block_og_image'),
            'og_description' => array($this, 'block_og_description'),
            'og_site_name' => array($this, 'block_og_site_name'),
            'content' => array($this, 'block_content'),
            'share_page' => array($this, 'block_share_page'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"es\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"es\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"es\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"es\"> <!--<![endif]-->
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

  ";
        // line 10
        $context["st_title"] = "Generador de noticias Yo soy Stig";
        // line 11
        echo "  ";
        $context["st_url"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "uri");
        // line 12
        echo "  ";
        $context["st_summary"] = "Crea tu propia página Yo soy Stig con este generador de noticias";
        // line 13
        echo "  ";
        $context["st_image"] = (("http://" . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "host")) . "/img/i-am-the-stig.png");
        // line 14
        echo "
  <title>";
        // line 15
        $this->displayBlock('meta_title', $context, $blocks);
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 16
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">
  <meta name=\"author\" content=\"Prunátic Consultoría Web\">

  <meta property=\"og:title\" content=\"";
        // line 19
        $this->displayBlock('og_title', $context, $blocks);
        echo "\" />
  <meta property=\"og:type\" content=\"";
        // line 20
        $this->displayBlock('og_type', $context, $blocks);
        echo "\" />
  <meta property=\"og:url\" content=\"";
        // line 21
        $this->displayBlock('og_url', $context, $blocks);
        echo "\" />
  <meta property=\"og:image\" content=\"";
        // line 22
        $this->displayBlock('og_image', $context, $blocks);
        echo "\" />
  <meta property=\"og:description\" content=\"";
        // line 23
        $this->displayBlock('og_description', $context, $blocks);
        echo "\" />
  <meta property=\"og:site_name\" content=\"";
        // line 24
        $this->displayBlock('og_site_name', $context, $blocks);
        echo "\" />


  <meta name=\"viewport\" content=\"width=device-width\">

  <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
  <style>
  body {
    padding-top: 60px;
    padding-bottom: 40px;
  }
  </style>
  <link rel=\"stylesheet\" href=\"/css/bootstrap-responsive.min.css\">
  <link rel=\"stylesheet\" href=\"/css/colorbox.css\">
  <link rel=\"stylesheet\" href=\"/css/style.css\">

  <script src=\"/js/libs/jquery-1.7.2.min.js\"></script>
  <script src=\"/js/libs/modernizr-2.5.3-respond-1.1.0.min.js\"></script>

  <script type=\"text/javascript\">var switchTo5x=true;</script>
  <script type=\"text/javascript\" src=\"http://w.sharethis.com/button/buttons.js\"></script>
  <script type=\"text/javascript\">stLight.options({publisher: \"7580c3f7-89dc-42ea-af93-1ce11d7cac16\"}); </script>
  
</head>
<body style=\"background-color: grey;\">
    <div class=\"container\">
      <div class=\"span8 offset2 newspaper\">
        <header class=\"span8\">
          <div class=\"navbar\">
            <div class=\"navbar-inner\">
              <div class=\"container\">
                  ";
        // line 55
        $this->env->loadTemplate("_navigation.html.twig")->display($context);
        // line 56
        echo "              </div>
            </div>
          </div>
        </header>
        <div class=\"span8\">
        ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "        </div>
        <hr class=\"span8\">
        <footer class=\"span8\">
          <div class=\"span8\">
            ";
        // line 66
        $this->displayBlock('share_page', $context, $blocks);
        // line 69
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "          </div>
        </footer>
      </div>
    </div> <!-- /container -->
  <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
  <script>window.jQuery || document.write('<script src=\"/js/libs/jquery-1.7.2.min.js\"><\\/script>')</script>

  <script src=\"/js/libs/bootstrap/bootstrap.min.js\"></script>
  <script src=\"/js/libs/jquery.colorbox-min.js\"></script>

  <script src=\"/js/plugins.js\"></script>
  <script src=\"/js/script.js\"></script>
  ";
        // line 84
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "clientip") != "127.0.0.1")) {
            // line 85
            echo "    <script type=\"text/javascript\">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-32793822-1']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>
  ";
        }
        // line 96
        echo "</body>
</html>
";
    }

    // line 15
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, "st_title"), "html", null, true);
    }

    // line 16
    public function block_meta_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, "st_summary"), "html", null, true);
    }

    // line 19
    public function block_og_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, "st_title"), "html", null, true);
    }

    // line 20
    public function block_og_type($context, array $blocks = array())
    {
        echo "News generator";
    }

    // line 21
    public function block_og_url($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, "st_url"), "html", null, true);
    }

    // line 22
    public function block_og_image($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, "st_image"), "html", null, true);
    }

    // line 23
    public function block_og_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, "st_summary"), "html", null, true);
    }

    // line 24
    public function block_og_site_name($context, array $blocks = array())
    {
        echo "I am The Stig";
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
    }

    // line 66
    public function block_share_page($context, array $blocks = array())
    {
        // line 67
        echo "              ";
        $this->env->loadTemplate("_sharethis.html.twig")->display($context);
        // line 68
        echo "            ";
    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        // line 70
        echo "              ";
        $this->env->loadTemplate("_footer.html.twig")->display($context);
        // line 71
        echo "            ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 71,  240 => 70,  237 => 69,  230 => 67,  227 => 66,  222 => 61,  216 => 24,  210 => 23,  198 => 21,  192 => 20,  180 => 16,  174 => 15,  168 => 96,  155 => 85,  139 => 72,  136 => 69,  134 => 66,  128 => 62,  126 => 61,  119 => 56,  117 => 55,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  57 => 16,  53 => 15,  50 => 14,  47 => 13,  44 => 12,  41 => 11,  39 => 10,  28 => 1,  268 => 67,  265 => 66,  262 => 65,  259 => 64,  256 => 63,  245 => 54,  239 => 50,  233 => 68,  231 => 47,  226 => 45,  223 => 44,  221 => 43,  217 => 42,  212 => 40,  208 => 39,  204 => 22,  199 => 36,  195 => 35,  189 => 34,  186 => 19,  173 => 29,  163 => 28,  153 => 84,  143 => 26,  133 => 25,  123 => 24,  113 => 23,  103 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 24,  81 => 17,  73 => 14,  68 => 12,  65 => 11,  63 => 19,  58 => 9,  55 => 8,  49 => 6,  43 => 5,  37 => 4,  31 => 3,);
    }
}
