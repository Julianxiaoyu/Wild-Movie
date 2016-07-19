<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c54f550d70f53688a8dc4212494f020031dc427a530f319b951ae2d781c9a69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a89965ddc3090ba942709f9fd062a484f18ff322013ad8123e676aeaaba23152 = $this->env->getExtension("native_profiler");
        $__internal_a89965ddc3090ba942709f9fd062a484f18ff322013ad8123e676aeaaba23152->enter($__internal_a89965ddc3090ba942709f9fd062a484f18ff322013ad8123e676aeaaba23152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a89965ddc3090ba942709f9fd062a484f18ff322013ad8123e676aeaaba23152->leave($__internal_a89965ddc3090ba942709f9fd062a484f18ff322013ad8123e676aeaaba23152_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_02eede2958a8e0e54576f28f5733205036e76bfa870102179a0bd49ec5a4044d = $this->env->getExtension("native_profiler");
        $__internal_02eede2958a8e0e54576f28f5733205036e76bfa870102179a0bd49ec5a4044d->enter($__internal_02eede2958a8e0e54576f28f5733205036e76bfa870102179a0bd49ec5a4044d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_02eede2958a8e0e54576f28f5733205036e76bfa870102179a0bd49ec5a4044d->leave($__internal_02eede2958a8e0e54576f28f5733205036e76bfa870102179a0bd49ec5a4044d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_40cad56d0ea54e8fa5f3777efde41c01de485870ac63555b49bc54c6b63398ab = $this->env->getExtension("native_profiler");
        $__internal_40cad56d0ea54e8fa5f3777efde41c01de485870ac63555b49bc54c6b63398ab->enter($__internal_40cad56d0ea54e8fa5f3777efde41c01de485870ac63555b49bc54c6b63398ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_40cad56d0ea54e8fa5f3777efde41c01de485870ac63555b49bc54c6b63398ab->leave($__internal_40cad56d0ea54e8fa5f3777efde41c01de485870ac63555b49bc54c6b63398ab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6307ce53d6392c11382dfd162a79f045a2c7a1f25d6c556a5cbdbb9b4d90dff4 = $this->env->getExtension("native_profiler");
        $__internal_6307ce53d6392c11382dfd162a79f045a2c7a1f25d6c556a5cbdbb9b4d90dff4->enter($__internal_6307ce53d6392c11382dfd162a79f045a2c7a1f25d6c556a5cbdbb9b4d90dff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6307ce53d6392c11382dfd162a79f045a2c7a1f25d6c556a5cbdbb9b4d90dff4->leave($__internal_6307ce53d6392c11382dfd162a79f045a2c7a1f25d6c556a5cbdbb9b4d90dff4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
