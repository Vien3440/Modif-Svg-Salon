<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0124ca3f2c231fddaa2b72e4276b14ea25d80bdb53c92a671c6ec59b7881c8e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_81fb910c5d9ed3eae75492d2c64947b98e230b558c729043b39028a7bfd3f9e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81fb910c5d9ed3eae75492d2c64947b98e230b558c729043b39028a7bfd3f9e3->enter($__internal_81fb910c5d9ed3eae75492d2c64947b98e230b558c729043b39028a7bfd3f9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81fb910c5d9ed3eae75492d2c64947b98e230b558c729043b39028a7bfd3f9e3->leave($__internal_81fb910c5d9ed3eae75492d2c64947b98e230b558c729043b39028a7bfd3f9e3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b79c00efffbc087bb9b2ab21ea7eac4bceb398b01cb2a51ed366db8ecaf904ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79c00efffbc087bb9b2ab21ea7eac4bceb398b01cb2a51ed366db8ecaf904ae->enter($__internal_b79c00efffbc087bb9b2ab21ea7eac4bceb398b01cb2a51ed366db8ecaf904ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b79c00efffbc087bb9b2ab21ea7eac4bceb398b01cb2a51ed366db8ecaf904ae->leave($__internal_b79c00efffbc087bb9b2ab21ea7eac4bceb398b01cb2a51ed366db8ecaf904ae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d310f8c24e51862f5b3151beb90e5be875b3b9741af52917f12e9c9df8139580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d310f8c24e51862f5b3151beb90e5be875b3b9741af52917f12e9c9df8139580->enter($__internal_d310f8c24e51862f5b3151beb90e5be875b3b9741af52917f12e9c9df8139580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d310f8c24e51862f5b3151beb90e5be875b3b9741af52917f12e9c9df8139580->leave($__internal_d310f8c24e51862f5b3151beb90e5be875b3b9741af52917f12e9c9df8139580_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fce5353b78fef23e4a407997992b54e73d265b8fb144c861d4f7aa4ae436dcf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce5353b78fef23e4a407997992b54e73d265b8fb144c861d4f7aa4ae436dcf0->enter($__internal_fce5353b78fef23e4a407997992b54e73d265b8fb144c861d4f7aa4ae436dcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fce5353b78fef23e4a407997992b54e73d265b8fb144c861d4f7aa4ae436dcf0->leave($__internal_fce5353b78fef23e4a407997992b54e73d265b8fb144c861d4f7aa4ae436dcf0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/Salon-modif/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
