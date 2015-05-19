<?php

/* /who-is-the-stig.html.twig */
class __TwigTemplate_d32a739bfb4059e66add5803015c3fcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html.twig");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'og_title' => array($this, 'block_og_title'),
            'og_description' => array($this, 'block_og_description'),
            'content' => array($this, 'block_content'),
            'share_page' => array($this, 'block_share_page'),
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Tú también puedes ser Stig", array(), "messages");
    }

    // line 4
    public function block_meta_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Crea tu propia página -Yo soy Stig- con este generador de noticias", array(), "messages");
    }

    // line 5
    public function block_og_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Tú también puedes ser Stig", array(), "messages");
    }

    // line 6
    public function block_og_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Crea tu propia página -Yo soy Stig- con este generador de noticias", array(), "messages");
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "\t<h1>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Tú también puedes ser Stig", array(), "messages");
        echo "</h1>
";
        // line 10
        if ((!twig_test_empty($this->getContext($context, "url")))) {
            // line 11
            echo "\t<div>
\t\t<p>";
            // line 12
            echo $this->env->getExtension('translator')->getTranslator()->trans("Comparte esta dirección con quién y dónde tú quieras, y siéntete orgulloso de ser Stig!", array(), "messages");
            echo "</p>
\t\t<div class=\"alert alert-success\">
\t\t\t<b><a target=\"_blank\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
            echo "\" title=\"I am the Stig\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
            echo "</a></b>
\t\t</div>\t\t
\t\t<div>
\t\t\t";
            // line 17
            $context["st_title"] = $this->env->getExtension('translator')->trans("%name% es el nuevo Stig", array("%name%" => $this->getContext($context, "someone")));
            // line 18
            echo "\t\t\t";
            $context["st_url"] = $this->getContext($context, "url");
            // line 19
            echo "\t\t\t";
            $context["st_summary"] = $this->env->getExtension('translator')->trans("Recientemente se ha descubierto la identidad del nuevo Stig, el hasta ahora de identidad desconocida y domador de coches oficial de Top Gear, su nombre es %name%", array("%name%" => $this->getContext($context, "someone")));
            // line 20
            echo "\t\t\t";
            $context["st_image"] = (("http://" . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "host")) . "/img/i-am-the-stig.png");
            // line 21
            echo "\t\t\t<span class='st_sharethis_large' displayText='ShareThis' st_url=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_url"), "html", null, true);
            echo "\" st_title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_title"), "html", null, true);
            echo "\" st_image=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_image"), "html", null, true);
            echo "\" st_summary=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_summary"), "html", null, true);
            echo "\"></span>
\t\t\t<span class='st_facebook_large' displayText='Facebook' st_url=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getContext($context, "st_url"), "html", null, true);
            echo "\" st_title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_title"), "html", null, true);
            echo "\" st_image=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_image"), "html", null, true);
            echo "\" st_summary=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_summary"), "html", null, true);
            echo "\"></span>
\t\t\t<span class='st_twitter_large' displayText='Tweet' st_url=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "st_url"), "html", null, true);
            echo "\" st_title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_title"), "html", null, true);
            echo "\" st_image=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_image"), "html", null, true);
            echo "\" st_summary=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_summary"), "html", null, true);
            echo "\"></span>
\t\t\t<span class='st_pinterest_large' displayText='Pinterest' st_url=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "st_url"), "html", null, true);
            echo "\" st_title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_title"), "html", null, true);
            echo "\" st_image=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_image"), "html", null, true);
            echo "\" st_summary=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_summary"), "html", null, true);
            echo "\"></span>
\t\t\t<span class='st_googleplus_large' displayText='Google +' st_url=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getContext($context, "st_url"), "html", null, true);
            echo "\" st_title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_title"), "html", null, true);
            echo "\" st_image=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_image"), "html", null, true);
            echo "\" st_summary=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_summary"), "html", null, true);
            echo "\"></span>
\t\t\t<span class='st_linkedin_large' displayText='LinkedIn' st_url=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getContext($context, "st_url"), "html", null, true);
            echo "\" st_title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_title"), "html", null, true);
            echo "\" st_image=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_image"), "html", null, true);
            echo "\" st_summary=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_summary"), "html", null, true);
            echo "\"></span>
\t\t\t<span class='st_tumblr_large' displayText='Tumblr' st_url=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getContext($context, "st_url"), "html", null, true);
            echo "\" st_title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_title"), "html", null, true);
            echo "\" st_image=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_image"), "html", null, true);
            echo "\" st_summary=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_summary"), "html", null, true);
            echo "\"></span>
\t\t\t<span class='st_google_bmarks_large' displayText='Bookmarks' st_url=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getContext($context, "st_url"), "html", null, true);
            echo "\" st_title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_title"), "html", null, true);
            echo "\" st_image=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_image"), "html", null, true);
            echo "\" st_summary=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_summary"), "html", null, true);
            echo "\"></span>
\t\t\t<span class='st_email_large' displayText='Email' st_url=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getContext($context, "st_url"), "html", null, true);
            echo "\" st_title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_title"), "html", null, true);
            echo "\" st_image=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_image"), "html", null, true);
            echo "\" st_summary=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "st_summary"), "html", null, true);
            echo "\"></span>
\t\t</div>
\t</div>
";
        } else {
            // line 33
            echo "\t<div>
\t\t<form action=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("whoIsTheStig"), "html", null, true);
            echo "\" method=\"post\" class=\"form-horizontal\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
            echo ">
\t\t\t";
            // line 35
            echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
            echo "
\t\t\t";
            // line 36
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "_token"));
            echo "
\t\t\t<fieldset>
\t\t\t\t<legend>";
            // line 38
            echo $this->env->getExtension('translator')->getTranslator()->trans("Simplemente dínos quién quieres que sea Stig y generaremos una web con noticias para que la puedas compartir con tus amigos y familiares.", array(), "messages");
            echo "</legend>
\t\t\t\t<div class=\"control-group ";
            // line 39
            echo (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "name"), "vars"), "errors")) > 0)) ? ("error") : (""));
            echo "\">
\t\t\t\t\t";
            // line 40
            echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "name"), null, array("label" => "Nombre", "label_attr" => array("class" => "control-label")));
            echo "
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t";
            // line 42
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "name"), array("attr" => array("class" => "input-xlarge")));
            echo "
\t\t\t\t\t\t";
            // line 43
            $context["link_example"] = sprintf("<a href=\"%s\" target=\"_blank\" title=\"Michael Schumacher is The Stig\">Michael Schumacher</a>", $this->getContext($context, "url_example"));
            // line 44
            echo "\t\t\t\t\t\t<span class=\"help-inline\">
\t\t\t\t\t\t\t";
            // line 45
            echo $this->env->getExtension('translator')->trans("Por ejemplo: %link%", array("%link%" => $this->getContext($context, "link_example")));
            echo "
\t\t\t\t\t\t</span>
                \t\t";
            // line 47
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "name"), "vars"), "errors")) > 0)) {
                // line 48
                echo "\t\t\t\t\t\t\t<div class=\"help-block\">";
                echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "name"));
                echo "</div>
\t\t\t\t\t\t";
            }
            // line 50
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
            // line 54
            echo $this->env->getExtension('translator')->getTranslator()->trans("Generar periódico", array(), "messages");
            echo "</button>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</form>
\t</div>
";
        }
    }

    // line 63
    public function block_share_page($context, array $blocks = array())
    {
        // line 64
        echo "\t";
        if (twig_test_empty($this->getContext($context, "url"))) {
            // line 65
            echo "\t\t";
            $context["st_title"] = $this->env->getExtension('translator')->trans("Tú también puedes ser Stig");
            // line 66
            echo "\t\t";
            $context["st_summary"] = $this->env->getExtension('translator')->trans("Crea tu propia página Yo soy Stig con este generador de noticias");
            // line 67
            echo "\t\t";
            $this->displayParentBlock("share_page", $context, $blocks);
            echo "
\t";
        }
    }

    public function getTemplateName()
    {
        return "/who-is-the-stig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 67,  265 => 66,  262 => 65,  259 => 64,  256 => 63,  245 => 54,  239 => 50,  233 => 48,  231 => 47,  226 => 45,  223 => 44,  221 => 43,  217 => 42,  212 => 40,  208 => 39,  204 => 38,  199 => 36,  195 => 35,  189 => 34,  186 => 33,  173 => 29,  163 => 28,  153 => 27,  143 => 26,  133 => 25,  123 => 24,  113 => 23,  103 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  81 => 17,  73 => 14,  68 => 12,  65 => 11,  63 => 10,  58 => 9,  55 => 8,  49 => 6,  43 => 5,  37 => 4,  31 => 3,);
    }
}
