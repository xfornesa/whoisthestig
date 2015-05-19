<?php

/* contact.html.twig */
class __TwigTemplate_fd000783f51139a17af0c74360691def extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html.twig");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo "Contacta con nosotros y mejora I amb the Stig";
    }

    // line 4
    public function block_meta_description($context, array $blocks = array())
    {
        echo "Crea tu propia página 'Yo soy Stig' con este generador de noticias";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\t<h1>Contacta con nosotros</h1>
\t<div>
\t\t";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "success"), "method")) {
            // line 10
            echo "\t\t<div class=\"alert alert-success\">
\t\t\t\t<a class=\"close\" data-dismiss=\"alert\" href=\"#\">×</a>
\t\t\t<h4 class=\"alert-heading\">Consulta enviada satisfactoriamente</h4>
\t\t\tHemos recibido tus comentarios e intentaremos responderte en breve. Gracias por tu colaboración.
\t\t\t<!--";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "success"), "method"), "html", null, true);
            echo "-->
\t\t</div>
\t\t";
        }
        // line 17
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "error"), "method")) {
            // line 18
            echo "\t\t<div class=\"alert alert-error\">
\t\t\t\t<a class=\"close\" data-dismiss=\"alert\" href=\"#\">×</a>
\t\t\t<h4 class=\"alert-heading\">Hubo un error enviando la información</h4>
\t\t\tHemos tenido problemas para enviar tu consulta, por favor usa el email <a href=\"mailto:feedback@isthestig.com?subject=[Feedback]%20I%20am%20The%20Stig\">feedback@isthestig.com</a>
\t\t\t<!--";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo "-->
\t\t</div>
\t\t";
        }
        // line 25
        echo "\t\t<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact"), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "_token"));
        echo "
\t\t\t<fieldset>
\t\t\t\t<legend>Envíanos tus comentarios, dudas, mejoras o lo que quieras</legend>
\t\t\t\t<div class=\"control-group ";
        // line 30
        echo (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "name"), "vars"), "errors")) > 0)) ? ("error") : (""));
        echo "\">
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "name"), null, array("label" => "Nombre", "label_attr" => array("class" => "control-label")));
        echo "
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "name"), array("attr" => array("class" => "input-xlarge")));
        echo "
\t\t\t\t\t\t<span class=\"help-inline\">";
        // line 34
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "</span>
\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"control-group ";
        // line 38
        echo (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "email"), "vars"), "errors")) > 0)) ? ("error") : (""));
        echo "\">
\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "email"), null, array("label" => "Email", "label_attr" => array("class" => "control-label")));
        echo "
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "email"), array("attr" => array("class" => "input-xlarge")));
        echo "
\t\t\t\t\t\t<span class=\"help-inline\">";
        // line 42
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "</span>
\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"control-group ";
        // line 46
        echo (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "comments"), "vars"), "errors")) > 0)) ? ("error") : (""));
        echo "\">
\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "comments"), null, array("label" => "Commentarios", "label_attr" => array("class" => "control-label")));
        echo "
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "comments"), array("attr" => array("class" => "input-xlarge")));
        echo "
\t\t\t\t\t\t<span class=\"help-inline\">";
        // line 50
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "comments"));
        echo "</span>
\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enviar</button>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</form>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 50,  142 => 49,  137 => 47,  133 => 46,  126 => 42,  122 => 41,  117 => 39,  113 => 38,  106 => 34,  102 => 33,  97 => 31,  93 => 30,  87 => 27,  83 => 26,  76 => 25,  70 => 22,  64 => 18,  61 => 17,  55 => 14,  49 => 10,  47 => 9,  43 => 7,  40 => 6,  34 => 4,  28 => 3,);
    }
}
