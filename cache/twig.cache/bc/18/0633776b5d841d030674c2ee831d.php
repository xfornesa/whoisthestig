<?php

/* news_view.html.twig */
class __TwigTemplate_bc180633776b5d841d030674c2ee831d extends Twig_Template
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
            'share_page' => array($this, 'block_share_page'),
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
        echo twig_escape_filter($this->env, ($this->getContext($context, "someone") . " es el nuevo Stig"), "html", null, true);
    }

    // line 4
    public function block_meta_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Recientemente se ha descubierto la identidad del nuevo Stig, el hasta ahora de identidad desconocida y domador de coches oficial de Top Gear, su nombre es " . $this->getContext($context, "someone")), "html", null, true);
    }

    // line 6
    public function block_og_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($this->getContext($context, "someone") . " es el nuevo Stig"), "html", null, true);
    }

    // line 7
    public function block_og_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Recientemente se ha descubierto la identidad del nuevo Stig, el hasta ahora de identidad desconocida y domador de coches oficial de Top Gear, su nombre es " . $this->getContext($context, "someone")), "html", null, true);
    }

    // line 9
    public function block_share_page($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        $context["st_title"] = ($this->getContext($context, "someone") . " es el nuevo Stig");
        // line 11
        echo "\t";
        $context["st_url"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "uri");
        // line 12
        echo "\t";
        $context["st_summary"] = ("Recientemente se ha descubierto la identidad del nuevo Stig, el hasta ahora de identidad desconocida y domador de coches oficial de Top Gear, su nombre es " . $this->getContext($context, "someone"));
        // line 13
        echo "\t";
        $this->displayParentBlock("share_page", $context, $blocks);
        echo "
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "\t<div class=\"span5 left\">
\t\t<img class=\"right\" src=\"/img/top-gear-the-stig-reveals-on-video.jpg\" alt=\"Stig reveals his identity!\" />
\t\t<h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "someone"), "html", null, true);
        echo " es el domador de coches de Top Gear: Stig</h1>
\t\t<p>Según investigaciones a raíz de un descuido en la cuenta de Twitter de uno de los productores de Top Gear, apuntan a que el último Stig aparecido en el programa es realmente <b>";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "someone"), "html", null, true);
        echo "</b>.</p>
\t</div>
\t<div class=\"span3 right\">
\t\t<div class=\"banner\">
\t\t\t";
        // line 24
        $this->env->loadTemplate("_banner.html.twig")->display($context);
        // line 25
        echo "\t\t</div>
\t</div>
\t<div class=\"span2 left\">
\t\t<h2>El último Stig</h2>
\t   \t<p>
\t   \t\t<img class=\"left\" src=\"/img/jeremy-hamond-may-stig.png\" alt=\"Jeremy Clarkson, Richard Hamon, James May, The Stig\" />
\t   \t\tDesde que empezó TOP GEAR han pasado varios Stigs por el programa.
\t   \t</p>
\t   \t<p>El primer Stig que vestía de negro hasta que se ahogó terriblemente intentando coger un barco.</p>
\t   \t<a data-toggle=\"modal\" href=\"#last-stig-full-news\" class=\"btn btn-mini btn-primary\" title=\"Leer\"><span class=\"icon-eye-open\"></span>&nbsp;Leer &gt;</a>
\t</div>
\t<div class=\"span3 left\">
\t\t<h2>¿Quién es Stig?</h2>
\t   \t<p>
\t   \t\t<img class=\"right\" src=\"/img/who-is-the-stig.png\" alt=\"Who is The Stig?\" width=\"150\" />
\t   \t\tDesde que apareció este personaje el 2002 se ha especulado quién podía ser.
\t   \t</p>
\t   \t<p>
\t   \t\t<i>Hay quien dice que después de hacer el amor, Stig le arranca la cabeza de un bocado a su pareja, a lo mantis religiosa</i>
\t   \t</p>
\t   \t<a data-toggle=\"modal\" href=\"#who-is-the-stig-full-news\" class=\"btn btn-mini btn-primary\" title=\"Leer\"><span class=\"icon-eye-open\"></span>&nbsp;Leer &gt;</a>
\t</div>
\t<div class=\"span3 right\">
\t\t<h2>Yo soy the Stig</h2>
\t\t<p>¿Eres tú el verdadero Stig?</p>
\t\t<p><b>¡Reclama tu identidad!</b></p>
\t\t<a class=\"btn btn-mini btn-danger\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("whoIsTheStig"), "html", null, true);
        echo "\" title=\"Publicar noticia\"><span class=\"icon-share\"></span>&nbsp;Publicar noticia</a>
\t</div>
\t<div class=\"span3 right\">
\t\t<h2>Stig's facts</h2>
\t  \t<div id=\"stig-facts-carousel\" class=\"carousel slide\">
\t\t\t<a class=\"carousel-control left hidden\" href=\"#stig-facts-carousel\" data-slide=\"prev\">&lsaquo;</a>
\t\t\t<a class=\"carousel-control right hidden\" href=\"#stig-facts-carousel\" data-slide=\"next\">&rsaquo;</a>\t\t   \t\t
\t   \t\t<ul class=\"facts carousel-inner unstyled\">
\t\t   \t\t\t<li class=\"item active\">Hay quien dice que después de hacer el amor, le arranca la cabeza de un bocado a su pareja, a lo mantis religiosa.</li>
\t\t   \t\t\t<li class=\"item\">También se dice que ha tenido que dejar de emborracharse de lo cara que está la bebida.</li>
\t\t   \t\t\t<li class=\"item\">Otros dicen que las uñas de sus pies tienen la misma forma que pezones de mujer, y que él piensa que \"credit-cruch\" (la crisis de los créditos basura) es un tipo de cereal de desayuno.</li>
\t\t   \t\t\t<li class=\"item\">También se comenta que sus excrementos se han encontrado incluso al norte de York, y que tiene un enorme tatuaje de su cara, en su cara.</li>
\t\t   \t\t\t<li class=\"item\">Se dice también que no le está permitido por ley estar a menos de 100 metros de Lorraine Kelly, y que nunca a visto un episodio de Top Gear, porque es un gran fan de otra serie inglesa llamada Midsomer Murders, que se emite a la misma hora.</li>
\t\t   \t\t\t<li class=\"item\">También se dice que le es imposible llevar calcetines, y que puede abrir botellas de cerveza con los testículos.</li>
\t\t   \t\t\t<li class=\"item\">Dicen que su sudor puede utilizarse para limpiar metales preciosos, y que su piel tiene la textura de la de los delfines.</li>
\t\t   \t\t\t<li class=\"item\">Afirman incluso que si sintonizas una radio en el 88.4 FM puedes oír sus pensamientos, y que no ve como las personas, si no que solo ve números en verde cayendo (como en Matrix).</li>
\t\t   \t\t\t<li class=\"item\">Dicen que no entiende las nubes, y que se confunde con las escaleras.</li>
\t\t   \t\t\t<li class=\"item\">También se dice que por naturaleza siempre apunta al polo norte magnético, y que está prohibido en 17 estados de los EE.UU., donde es perseguido por la CIA, porque Jimmy Carter lo quiere muerto.</li>
\t\t   \t\t\t<li class=\"item\">Algunos comentan que el latir de su corazón es como el de un reloj por su exactitud, que todas sus piernas son hidráulicas; además tiene un brazo biónico, y su cara es digital.</li>
\t\t   \t\t\t<li class=\"item\">Otros dicen que su aliento huele a magnesio, sus lágrimas son adhesivas, y puede coger peces con la lengua.</li>
\t\t   \t\t\t<li class=\"item\">También see cree que si se prendiera fuego, ardería durante cien días, y que tiene dos juegos de rodillas.</li>
\t\t   \t\t\t<li class=\"item\">Con respecto a los animales, dicen que su voz solo la puede oír los gatos, y que le aterrorizan los patos.</li>
\t\t   \t\t\t<li class=\"item\">Hay quien incluso afirma que su corazón y sus genitales está boca abajo, que sus dientes brillan en la oscuridad, y que tiene ácido en lugar de sangre.</li>
\t\t   \t\t\t<li class=\"item\">Se dice de él que el asfalto se funde cuando lo toca, y que no tiene raja del culo.</li>
\t\t   \t\t\t<li class=\"item\">Se comenta de él que ha puesto nombre a todas y cada una de las briznas de hierba del césped que rodea la pista de pruebas de Top Gear, y que si le importara, descifraría el código Da Vinci en 43 segundos.</li>
\t\t   \t\t\t<li class=\"item\">Otros dicen que no se puede lavar a máquina, que su casco está modelado a partir de la cabeza de Britney Spears, y que su escroto tiene su propio campo gravitacional.</li>
\t   \t\t</ul>
\t   \t</div>
\t   \t<p>
\t   \t\tLo único que es seguro es que se llama <b>Stig</b>.
\t   \t</p>
\t  \t<script type=\"text/javascript\">
\t\t\t\$(document).ready(function(){
\t\t\t\t\$('#stig-facts-carousel').carousel({
\t\t\t\t\tinterval: 4000,
\t\t\t\t\tpause: 'hover',
\t\t\t\t});
\t\t\t});\t\t  \t
\t  \t</script>
\t</div>
\t<div class=\"span3 left\">
\t\t<h2>La historia de Stig</h2>
\t\t<p>Muchos han sido los Stig que han pasado por el programa desde 2002.</p>
\t\t<a data-toggle=\"modal\" href=\"#stig-story-full-news\" class=\"btn btn-mini btn-primary\" title=\"Leer\"><span class=\"icon-eye-open\"></span>&nbsp;Leer &gt;</a>
\t</div>



\t<div class=\"modal hide fade\" id=\"last-stig-full-news\">
\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t<h3>El último Stig: ";
        // line 102
        echo twig_escape_filter($this->env, $this->getContext($context, "someone"), "html", null, true);
        echo "</h3>
\t\t</div>
\t\t<div class=\"modal-body\">
\t\t\t<p>
\t\t   \t\t<img class=\"right\" src=\"/img/jeremy-hamond-may-stig.png\" alt=\"Jeremy Clarkson, Richard Hamon, James May, The Stig\"/>
\t\t   \t\tDesde que empezó TOP GEAR han pasado varios Stigs por el programa. El Stig de negro, el primer Stig Blanco que luego se autodescubrió en su biografía como Ben Collins, y el segundo Stig Blanco crecido en una granja de Stigs y del que hasta ahora desconocíamos su identidad.
\t\t   \t</p>
\t\t   \t<p>
\t\t   \t\tY unos días atrás por fin descubrimos quién se esconde tras la identidad del actual Stig: \"";
        // line 110
        echo twig_escape_filter($this->env, $this->getContext($context, "someone"), "html", null, true);
        echo "\".
\t\t   \t</p>
\t\t   \t<p>
\t\t   \t\tLamentablemente eso puede significar que en breve será despecido pues ningún Stig ha durado dos programas desde que se conoció su identidad. Desde la redacción le enviamos nuestro más sincero pésame.
\t\t   \t</p>
\t\t</div>
\t\t<div class=\"modal-footer\">
\t\t\t<a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Cerrar</a>
\t\t</div>
\t</div>

\t<div class=\"modal hide fade\" id=\"who-is-the-stig-full-news\">
\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t<h3>Pero, ¿quién es Stig? El caso</h3>
\t\t</div>
\t\t<div class=\"modal-body\">
\t\t\t<p>
\t\t   \t\t<img class=\"right\" src=\"/img/who-is-the-stig.png\" alt=\"Who is The Stig?\" width=\"150\" />
\t\t   \t\tDesde que apareció este personaje el 2002 se ha especulado quién podía ser. <i>Hay quien dice que después de hacer el amor, Stig le arranca la cabeza de un bocado a su pareja, a lo mantis religiosa</i>, y por ello se pensó que podía ser Michael Schumacher, aunque actualmente Michael está casado y su mujer sigue viva, por lo que parece que estos indicios son falsos.
\t\t   \t</p>
\t\t   \t<p>
\t\t   \t\tA lo largo de esta última década se han avistado varios Stig en los lugares y ferias más recónditas. Es por ello que os damos unos consejos para que no os engañen con imitaciones:
\t\t   \t</p>
\t   \t\t<div id=\"accordion-questions\" class=\"collapse in\" style=\"height: auto;\">
\t   \t\t\t<div class=\"accordion-group\">
\t\t\t\t\t<div class=\"accordion-heading\">
\t\t\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion-questions\" href=\"#collapseOne\">
\t\t\t\t\t\t\t1.- ¿Es el sospechoso igual de alto que un niño pequeño?
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapseOne\" class=\"accordion-body collapse in\">
\t\t\t\t\t\t<div class=\"accordion-inner\">
\t\t\t\t\t\t\tSi el sospechoso es aproximadamente igual de alto que un niño pequeño, es muy posible que no sea the Stig. The Stig no es tan bajito. A no ser que lo estés mirando desde muy muy lejos o que seas Pau Gasol.
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t   \t\t\t</div>
\t   \t\t\t<div class=\"accordion-group\">
\t\t\t\t\t<div class=\"accordion-heading\">
\t\t\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion-questions\" href=\"#collapseTwo\">
\t\t\t\t\t\t\t2.- ¿El mono que lleva el sospechoso es como el de the Stig?
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapseTwo\" class=\"accordion-body collapse\">
\t\t\t\t\t\t<div class=\"accordion-inner\">
\t\t\t\t\t\t\tSi el mono de carreras del sospechoso parece diferente del que lleva el auténtico, es muy posible que no sea the Stig. El mono de the Stig es muy parecido al que lleva the Stig.
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t   \t\t\t</div>
\t   \t\t\t<div class=\"accordion-group\">
\t\t\t\t\t<div class=\"accordion-heading\">
\t\t\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion-questions\" href=\"#collapseThree\">
\t\t\t\t\t\t\t3.- ¿Te lo has encontrado en una estación de servicio al noroeste de Inglaterra?
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapseThree\" class=\"accordion-body collapse\">
\t\t\t\t\t\t<div class=\"accordion-inner\">
\t\t\t\t\t\t\tSi te encuentras en una estación de servicio al noroeste de Inglaterra, tienes muchos números de que no te hayas encontrado a the Stig. The Stig raramente visita estaciones de servicios en esa zona del país. Hay quien dice que es por razones religiosas y otros dicen que es porque su GPS no tiene cobertura fuera de Londres.
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t   \t\t\t</div>
\t   \t\t\t<div class=\"accordion-group\">
\t\t\t\t\t<div class=\"accordion-heading\">
\t\t\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion-questions\" href=\"#collapseFour\">
\t\t\t\t\t\t\t4.- ¿Te echa para atrás el inconfundible olor a carne de caballo cruda y aceite de motor caliente?
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapseFour\" class=\"accordion-body collapse\">
\t\t\t\t\t\t<div class=\"accordion-inner\">
\t\t\t\t\t\t\tSi el sospechoso suda con el típico olor humano -sudor, chocolate, Axe Marine- es muy posible que no sea the Stig. El olor de the Stig es único, inolvidable y ligeramente desgarrador.
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t   \t\t\t</div>
\t   \t\t\t<div class=\"accordion-group\">
\t\t\t\t\t<div class=\"accordion-heading\">
\t\t\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion-questions\" href=\"#collapseFive\">
\t\t\t\t\t\t\t5.- ¿Te encuentras sobreexcitado y algo corto de espíritu crítico, quizás como resultado de un golpe de calor?
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapseFive\" class=\"accordion-body collapse\">
\t\t\t\t\t\t<div class=\"accordion-inner\">
\t\t\t\t\t\t\tSi has pasado recientemente mucho tiempo al aire libre durante la última ola de calor, es posible que confundas a alguien que no se parece mucho a the Stig con el auténtico. Si éste es el caso, túmbate un rato en una habitación oscura.
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t   \t\t\t</div>
\t   \t\t\t&nbsp;
\t   \t\t</div>
\t\t   \t<script type=\"text/javascript\">
\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\$(\"#accordion-questions\").collapse({});
\t\t\t\t\t\$('#who-is-the-stig-full-news').on('show', function () {
  \t\t\t\t\t\t\$(\"#accordion-questions\").height('auto');
\t\t\t\t\t})
\t\t\t\t});\t\t  \t
\t\t  \t</script>
\t\t</div>
\t\t<div class=\"modal-footer\">
\t\t\t<a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Cerrar</a>
\t\t</div>
\t</div>

\t<div class=\"modal hide fade\" id=\"stig-story-full-news\">
\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t<h3>La historia de Stig</h3>
\t\t</div>
\t\t<div class=\"modal-body\">
\t\t\t<div class=\"left\">
\t\t\t  \t<h4>El Stig de negro</h4>
\t\t\t   \t<p>
\t\t\t   \t\t<img class=\"left\" src=\"/img/black-stig.jpg\" alt=\"Black Stig\" width=\"75\" />
\t\t\t   \t\tTambién conocido como Perry McCarthy, apareció el primer Stig vestido de negro allà el 2002 hasta finales del 2003. ¡Murió!
\t\t\t   \t</p>
\t\t\t   \t<p>Se comenta que su espíritu todavía ronda en las colas del INEM.</p>
\t\t\t</div>
\t\t\t<div class=\"left\">
\t\t\t  \t<h4>El primer Stig de blanco</h4>
\t\t\t   \t<p>
\t\t\t   \t\t<img class=\"left\" src=\"/img/first-white-stig.jpg\" alt=\"The First White Stig\" width=\"75\" />
\t\t\t   \t\tDesde que Ben Collins publicó su autobiografía en 2010 podemos poner nuevamente rostro, esta vez al primer Stig con caso y mono blanco. El domador de coches por excelencia de Top Gear dejó el programa allá el 2010 tras siete años siendo el centro de hasta entonces llamado \"Caso Stig\". 
\t\t\t   \t</p>
\t\t\t   \t<p>
\t\t\t   \t\tSe dice que uno de los productores le ofreció un vaso con agua y murió por gripar el motor.
\t\t\t   \t</p>
\t\t\t</div>
\t\t\t<div class=\"left\">
\t\t\t  \t<h4>El actual Stig</h4>
\t\t\t   \t<p>
\t\t\t   \t\t<img class=\"left\" src=\"/img/second-white-stig.jpg\" alt=\"The Second White Stig\" width=\"75\" />
\t\t\t   \t\tTras el cese del Stig blanco apareció este nuevo Stig para probar los supercoches presentados en el programa. Nacido en una granja de Stigs, criado e instruido en tiempo record para empezar la temporada de Top Gear conservó el color blanco y de nuevo provocó reabrir el caso Stig: <b>¿Quién podría ser el Nuevo Stig?</b>
\t\t\t   \t</p>
\t\t\t   \t<p>¿Y cuánto durará vivo?</p>
\t\t\t</div>
\t\t\t<div class=\"left\">
\t\t\t  \t<h4>Los primos de Stig</h4>
\t\t\t   \t<p>
\t\t\t   \t\t<img class=\"left\" src=\"/img/green-stig.jpg\" alt=\"The Stig's counsins\" width=\"75\" />
\t\t\t   \t\tEl primo americano de Stig, el primo camionero de Stig, el primo vegetariano de Stig son alguno de los familiares que han llegado a pasar por el programa cuando se han probado coches fuera del Reino Unido. Ninguno de ellos a la altura de Stig. Hay quien dice que se escaparon demasiado pronto de la granja, o que Stig los envió a los diferentes países para conquistar la Tierra... pero lo que sí sabemos es que son familia de Stig.
\t\t\t   \t</p>
\t\t\t</div>\t\t\t
\t\t</div>\t\t
\t\t<div class=\"modal-footer\">
\t\t\t<a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Cerrar</a>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "news_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 110,  176 => 102,  122 => 51,  94 => 25,  92 => 24,  85 => 20,  81 => 19,  77 => 17,  74 => 16,  67 => 13,  64 => 12,  61 => 11,  58 => 10,  55 => 9,  49 => 7,  43 => 6,  37 => 4,  31 => 3,);
    }
}
