<?php

/* FrontendBundle:Default:show.html.twig */
class __TwigTemplate_f6a317ca4f97d8c494e75dc23948c17c289d2c3b02778a235969fb62a10ef4ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:show.html.twig", 1);
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
        $__internal_1d952f024e6e78f69948c969c9d368248d339a7ec83d5c9c0d80dc510e6245bf = $this->env->getExtension("native_profiler");
        $__internal_1d952f024e6e78f69948c969c9d368248d339a7ec83d5c9c0d80dc510e6245bf->enter($__internal_1d952f024e6e78f69948c969c9d368248d339a7ec83d5c9c0d80dc510e6245bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d952f024e6e78f69948c969c9d368248d339a7ec83d5c9c0d80dc510e6245bf->leave($__internal_1d952f024e6e78f69948c969c9d368248d339a7ec83d5c9c0d80dc510e6245bf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7aa6e3246aeb7251c66ace5786d196b1a3b7aac9c544bfd38bc23efc42be5276 = $this->env->getExtension("native_profiler");
        $__internal_7aa6e3246aeb7251c66ace5786d196b1a3b7aac9c544bfd38bc23efc42be5276->enter($__internal_7aa6e3246aeb7251c66ace5786d196b1a3b7aac9c544bfd38bc23efc42be5276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-5 col-md-offset-1 left\">
\t\t\t<img class=\"img-style-3\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("uploads/film/" . $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "folder", array())) . "")), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-5\">

\t\t\t<h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "titre", array()), "html", null, true);
        echo "</h2>
\t\t\t<hr>
\t\t\t<p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "description", array()), "html", null, true);
        echo "</p>
\t\t\t
\t\t</div>
\t</div>
\t<div class=\"col-md-10 col-md-offset-1\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Commentaires : </h2>
\t\t\t\t";
        // line 19
        if (array_key_exists("listcomments", $context)) {
            echo "\t
\t\t\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listcomments"]) ? $context["listcomments"] : $this->getContext($context, "listcomments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 21
                echo "\t\t\t\t\t<div class =\"commentaire\">
\t\t\t\t\t\t<h4><b>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "title", array()), "html", null, true);
                echo "</b> posté le <b>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "d-m-Y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "H:i:s"), "html", null, true);
                echo " par ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "name", array()), "html", null, true);
                echo "
\t\t\t\t\t\t <b></h4>
\t\t\t\t\t\t<p>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t\t\t";
        }
        // line 28
        echo "\t\t\t<hr>
\t\t\t<h2>Poster un commentaire : </h2>
\t\t\t";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        \t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        \t\t<input type=\"submit\" value=\"Envoyer\" />
    \t\t";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>

";
        
        $__internal_7aa6e3246aeb7251c66ace5786d196b1a3b7aac9c544bfd38bc23efc42be5276->leave($__internal_7aa6e3246aeb7251c66ace5786d196b1a3b7aac9c544bfd38bc23efc42be5276_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  108 => 31,  104 => 30,  100 => 28,  97 => 27,  88 => 24,  77 => 22,  74 => 21,  70 => 20,  66 => 19,  56 => 12,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="col-md-12">*/
/* 		<div class="col-md-5 col-md-offset-1 left">*/
/* 			<img class="img-style-3" src="{{ asset('uploads/film/' ~ movie.folder ~ '') }}">*/
/* 		</div>*/
/* 		<div class="col-md-5">*/
/* */
/* 			<h2>{{ movie.titre }}</h2>*/
/* 			<hr>*/
/* 			<p>{{ movie.description }}</p>*/
/* 			*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-10 col-md-offset-1">*/
/* 		<div class="col-md-12">*/
/* 			<h2>Commentaires : </h2>*/
/* 				{% if listcomments is defined %}	*/
/* 					{% for comment in listcomments %}*/
/* 					<div class ="commentaire">*/
/* 						<h4><b>{{ comment.title }}</b> posté le <b>{{ comment.date|date('d-m-Y') }} à {{ comment.date|date('H:i:s') }} par {{ comment.name }}*/
/* 						 <b></h4>*/
/* 						<p>{{ comment.content }}</p>*/
/* 					</div>*/
/* 					{% endfor %}*/
/* 				{% endif %}*/
/* 			<hr>*/
/* 			<h2>Poster un commentaire : </h2>*/
/* 			{{ form_start(form) }}*/
/*         		{{ form_widget(form) }}*/
/*         		<input type="submit" value="Envoyer" />*/
/*     		{{ form_end(form) }}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
