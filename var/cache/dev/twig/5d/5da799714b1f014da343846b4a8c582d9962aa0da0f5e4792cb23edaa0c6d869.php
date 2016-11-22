<?php

/* AdminBundle::adminHome.html.twig */
class __TwigTemplate_975b60aabb3666417fc1a2001be177d10e7ea1eb754527498efa4f46f890d2a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle::adminHome.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2490e90b869ed2117416edfdd99a5452c3fe82b485561b1d46d4513051c1b3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2490e90b869ed2117416edfdd99a5452c3fe82b485561b1d46d4513051c1b3cf->enter($__internal_2490e90b869ed2117416edfdd99a5452c3fe82b485561b1d46d4513051c1b3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::adminHome.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2490e90b869ed2117416edfdd99a5452c3fe82b485561b1d46d4513051c1b3cf->leave($__internal_2490e90b869ed2117416edfdd99a5452c3fe82b485561b1d46d4513051c1b3cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1b12fc979a40216cd2240752bc8664a31b3862c5c0514688befab40c1ff94c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b12fc979a40216cd2240752bc8664a31b3862c5c0514688befab40c1ff94c9->enter($__internal_a1b12fc979a40216cd2240752bc8664a31b3862c5c0514688befab40c1ff94c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_a1b12fc979a40216cd2240752bc8664a31b3862c5c0514688befab40c1ff94c9->leave($__internal_a1b12fc979a40216cd2240752bc8664a31b3862c5c0514688befab40c1ff94c9_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::adminHome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}{{parent()}}{% endblock %}", "AdminBundle::adminHome.html.twig", "/var/www/html/Salon-modif/src/AdminBundle/Resources/views/adminHome.html.twig");
    }
}
