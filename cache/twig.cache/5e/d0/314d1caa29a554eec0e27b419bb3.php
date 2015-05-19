<?php

/* form_div_layout.html.twig */
class __TwigTemplate_5ed0314d1caa29a554eec0e27b419bb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base_form_div_layout.html.twig");

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_form_errors($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 12
            echo "    <ul>
        ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 14
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                // line 16
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 18
            echo "    </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 18,  34 => 12,  29 => 10,  26 => 9,  40 => 16,  33 => 12,  24 => 6,  17 => 1,  243 => 71,  240 => 70,  237 => 69,  230 => 67,  227 => 66,  222 => 61,  216 => 24,  210 => 23,  198 => 21,  192 => 20,  180 => 16,  174 => 15,  168 => 96,  155 => 85,  139 => 72,  136 => 69,  134 => 66,  128 => 62,  126 => 61,  119 => 56,  117 => 55,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  57 => 16,  53 => 15,  50 => 14,  47 => 13,  44 => 16,  41 => 14,  39 => 10,  28 => 1,  268 => 67,  265 => 66,  262 => 65,  259 => 64,  256 => 63,  245 => 54,  239 => 50,  233 => 68,  231 => 47,  226 => 45,  223 => 44,  221 => 43,  217 => 42,  212 => 40,  208 => 39,  204 => 22,  199 => 36,  195 => 35,  189 => 34,  186 => 19,  173 => 29,  163 => 28,  153 => 84,  143 => 26,  133 => 25,  123 => 24,  113 => 23,  103 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 24,  81 => 17,  73 => 14,  68 => 12,  65 => 11,  63 => 19,  58 => 9,  55 => 8,  49 => 6,  43 => 5,  37 => 13,  31 => 11,);
    }
}
