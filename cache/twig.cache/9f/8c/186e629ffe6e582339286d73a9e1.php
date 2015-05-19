<?php

/* _navigation.html.twig */
class __TwigTemplate_9f8c186e629ffe6e582339286d73a9e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
<span class=\"icon-bar\"></span>
<span class=\"icon-bar\"></span>
<span class=\"icon-bar\"></span>
</a>
<a class=\"brand\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\"><img src=\"/img/i-am-the-stig.png\" width=\"83\" height=\"50\" alt=\"I am the Stig\" /></a>
<div class=\"nav-collapse\">
<ul class=\"nav\">
  <li class=\"active\"><h1>The Stig News</h1></li>
</ul>
<ul class=\"nav pull-right\">
  \t<li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact"), "html", null, true);
        echo "\" title=\"Contacto\">Contacto</a></li>
  \t<li class=\"dropdown\">
  \t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Idioma <b class=\"caret\"></b></a>
\t\t<ul class=\"dropdown-menu\">
\t\t\t<li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage", array("_locale" => "en")), "html", null, true);
        echo "\" title=\"English\">English</a></li>
\t\t\t<li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage", array("_locale" => "es")), "html", null, true);
        echo "\" title=\"Español\">Español</a></li>
\t\t</ul>
\t</li>
</ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 16,  33 => 12,  24 => 6,  17 => 1,  243 => 71,  240 => 70,  237 => 69,  230 => 67,  227 => 66,  222 => 61,  216 => 24,  210 => 23,  198 => 21,  192 => 20,  180 => 16,  174 => 15,  168 => 96,  155 => 85,  139 => 72,  136 => 69,  134 => 66,  128 => 62,  126 => 61,  119 => 56,  117 => 55,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  57 => 16,  53 => 15,  50 => 14,  47 => 13,  44 => 17,  41 => 11,  39 => 10,  28 => 1,  268 => 67,  265 => 66,  262 => 65,  259 => 64,  256 => 63,  245 => 54,  239 => 50,  233 => 68,  231 => 47,  226 => 45,  223 => 44,  221 => 43,  217 => 42,  212 => 40,  208 => 39,  204 => 22,  199 => 36,  195 => 35,  189 => 34,  186 => 19,  173 => 29,  163 => 28,  153 => 84,  143 => 26,  133 => 25,  123 => 24,  113 => 23,  103 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 24,  81 => 17,  73 => 14,  68 => 12,  65 => 11,  63 => 19,  58 => 9,  55 => 8,  49 => 6,  43 => 5,  37 => 4,  31 => 3,);
    }
}
