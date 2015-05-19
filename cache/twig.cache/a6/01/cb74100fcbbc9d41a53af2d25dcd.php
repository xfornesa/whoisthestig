<?php

/* email_contact_content.html.twig */
class __TwigTemplate_a601cb74100fcbbc9d41a53af2d25dcd extends Twig_Template
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
        echo "
<p>Has recibido un email de contacto de 'isthestig.com' con los datos:</p>
<ul>
\t<li>Nombre: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "name"), "html", null, true);
        echo "</li>
\t<li>Email: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "email"), "html", null, true);
        echo "</li>
\t<li>Comentarios: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "comments"), "html", null, true);
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "email_contact_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 5,  22 => 4,  17 => 1,);
    }
}
