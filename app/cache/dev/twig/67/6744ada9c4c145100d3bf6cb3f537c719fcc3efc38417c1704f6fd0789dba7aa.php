<?php

/* FrontendBundle:Default:article.html.twig */
class __TwigTemplate_beeec3eeedc2b2054da273a27c02b04f504d304d38b2b30fd39694cd5610a6e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:article.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_747ccb41ece9af9a93ba7801a07b0bcbfe135fb9600980bb677b2d0f6d725ee3 = $this->env->getExtension("native_profiler");
        $__internal_747ccb41ece9af9a93ba7801a07b0bcbfe135fb9600980bb677b2d0f6d725ee3->enter($__internal_747ccb41ece9af9a93ba7801a07b0bcbfe135fb9600980bb677b2d0f6d725ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_747ccb41ece9af9a93ba7801a07b0bcbfe135fb9600980bb677b2d0f6d725ee3->leave($__internal_747ccb41ece9af9a93ba7801a07b0bcbfe135fb9600980bb677b2d0f6d725ee3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_35ad2b0b60003a821a4a0e04e77256106c30e664cb4b8d1cf6f19be71dd58bd4 = $this->env->getExtension("native_profiler");
        $__internal_35ad2b0b60003a821a4a0e04e77256106c30e664cb4b8d1cf6f19be71dd58bd4->enter($__internal_35ad2b0b60003a821a4a0e04e77256106c30e664cb4b8d1cf6f19be71dd58bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container_article\">
\t<h1>The \"Wild\", Bud Spencer, nous à quitté</h1>

\t<div class=\"row\">\t
\t\t<div class=\"col-md-8 block_left\">
\t\t\t<div class=\"block_left_img\">
\t\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bud.jpg"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"block_left_txt\">
\t\t\t\t<p>Son physique ne passait pas inaperçu... Avec ses 192 centimètres pour 130 kilos, il s'était taillé des rôles à sa mesure dans le cinéma italien. Cet ancien nageur qui fut le premier Italien à descendre sous la minute sur 100 mètres nage libre était devenu un acteur d'abord remarqué par sa stature. Au point d'être une légende du cinéma dès la fin des années 60. Bud Spencer, l'acteur italien de westerns spaghettis, connu pour ses duos au cinéma avec Terence Hill, est mort ce lundi à Rome. Il était âgé de 86 ans. « Nous avons la grande tristesse de vous annoncer que Bud s'est envolé pour son dernier voyage », a écrit lundi soir sur son compte Twitter la famille Pedersoli, le vrai nom de l'acteur né à Naples le 31 octobre 1929.</p>
\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4 block_right\">
\t\t\t<div class=\"autre_article\">
\t\t\t\t<div class=\"autre_article_photo\">
\t\t\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bud.jpg"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"autre_article_name\">
\t\t\t\t\t<p>Autre article1</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"autre_article\">
\t\t\t\t<div class=\"autre_article_img\">
\t\t\t\t\t<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bud.jpg"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"autre_article_name\">
\t\t\t\t\t<p>Autre article1</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"autre_article\">
\t\t\t\t<div class=\"autre_article_img\">
\t\t\t\t\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bud.jpg"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"autre_article_name\">
\t\t\t\t\t<p>Autre article1</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
</div>

";
        
        $__internal_35ad2b0b60003a821a4a0e04e77256106c30e664cb4b8d1cf6f19be71dd58bd4->leave($__internal_35ad2b0b60003a821a4a0e04e77256106c30e664cb4b8d1cf6f19be71dd58bd4_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 37,  73 => 29,  62 => 21,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="container_article">*/
/* 	<h1>The "Wild", Bud Spencer, nous à quitté</h1>*/
/* */
/* 	<div class="row">	*/
/* 		<div class="col-md-8 block_left">*/
/* 			<div class="block_left_img">*/
/* 				<img src="{{ asset('img/bud.jpg') }}">*/
/* 			</div>*/
/* 			<div class="block_left_txt">*/
/* 				<p>Son physique ne passait pas inaperçu... Avec ses 192 centimètres pour 130 kilos, il s'était taillé des rôles à sa mesure dans le cinéma italien. Cet ancien nageur qui fut le premier Italien à descendre sous la minute sur 100 mètres nage libre était devenu un acteur d'abord remarqué par sa stature. Au point d'être une légende du cinéma dès la fin des années 60. Bud Spencer, l'acteur italien de westerns spaghettis, connu pour ses duos au cinéma avec Terence Hill, est mort ce lundi à Rome. Il était âgé de 86 ans. « Nous avons la grande tristesse de vous annoncer que Bud s'est envolé pour son dernier voyage », a écrit lundi soir sur son compte Twitter la famille Pedersoli, le vrai nom de l'acteur né à Naples le 31 octobre 1929.</p>*/
/* 			*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-4 block_right">*/
/* 			<div class="autre_article">*/
/* 				<div class="autre_article_photo">*/
/* 					<img src="{{ asset('img/bud.jpg') }}">*/
/* 				</div>*/
/* 				<div class="autre_article_name">*/
/* 					<p>Autre article1</p>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="autre_article">*/
/* 				<div class="autre_article_img">*/
/* 					<img src="{{ asset('img/bud.jpg') }}">*/
/* 				</div>*/
/* 				<div class="autre_article_name">*/
/* 					<p>Autre article1</p>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="autre_article">*/
/* 				<div class="autre_article_img">*/
/* 					<img src="{{ asset('img/bud.jpg') }}">*/
/* 				</div>*/
/* 				<div class="autre_article_name">*/
/* 					<p>Autre article1</p>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* </div>*/
/* */
/* {% endblock %}*/
