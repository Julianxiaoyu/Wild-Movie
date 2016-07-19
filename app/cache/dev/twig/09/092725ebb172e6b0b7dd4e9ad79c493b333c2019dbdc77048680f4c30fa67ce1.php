<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1f53af8e2f776ae5c13c44a6c2f2c9c55b821b23736c491cc7f018e4cca6ea2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a441fd7335a0d945139952139294a78b8384b0ad3da1bcc7159c2504e24a63fc = $this->env->getExtension("native_profiler");
        $__internal_a441fd7335a0d945139952139294a78b8384b0ad3da1bcc7159c2504e24a63fc->enter($__internal_a441fd7335a0d945139952139294a78b8384b0ad3da1bcc7159c2504e24a63fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a441fd7335a0d945139952139294a78b8384b0ad3da1bcc7159c2504e24a63fc->leave($__internal_a441fd7335a0d945139952139294a78b8384b0ad3da1bcc7159c2504e24a63fc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_146a9222966b8bd92b6b4fad1670ce6b1c1ae3a66fa10ab99a6687d77fc5401a = $this->env->getExtension("native_profiler");
        $__internal_146a9222966b8bd92b6b4fad1670ce6b1c1ae3a66fa10ab99a6687d77fc5401a->enter($__internal_146a9222966b8bd92b6b4fad1670ce6b1c1ae3a66fa10ab99a6687d77fc5401a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_146a9222966b8bd92b6b4fad1670ce6b1c1ae3a66fa10ab99a6687d77fc5401a->leave($__internal_146a9222966b8bd92b6b4fad1670ce6b1c1ae3a66fa10ab99a6687d77fc5401a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0810684fcd9d2e43d370bcce7587222f7a87ebd2f915cf6ce9594220b9025471 = $this->env->getExtension("native_profiler");
        $__internal_0810684fcd9d2e43d370bcce7587222f7a87ebd2f915cf6ce9594220b9025471->enter($__internal_0810684fcd9d2e43d370bcce7587222f7a87ebd2f915cf6ce9594220b9025471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0810684fcd9d2e43d370bcce7587222f7a87ebd2f915cf6ce9594220b9025471->leave($__internal_0810684fcd9d2e43d370bcce7587222f7a87ebd2f915cf6ce9594220b9025471_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1656671981f113c8bbe8a828054d2af6f5e8a47e67f96d174157d9f95bc33209 = $this->env->getExtension("native_profiler");
        $__internal_1656671981f113c8bbe8a828054d2af6f5e8a47e67f96d174157d9f95bc33209->enter($__internal_1656671981f113c8bbe8a828054d2af6f5e8a47e67f96d174157d9f95bc33209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1656671981f113c8bbe8a828054d2af6f5e8a47e67f96d174157d9f95bc33209->leave($__internal_1656671981f113c8bbe8a828054d2af6f5e8a47e67f96d174157d9f95bc33209_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
