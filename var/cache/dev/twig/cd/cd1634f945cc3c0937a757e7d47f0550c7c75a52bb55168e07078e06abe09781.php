<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0875cf618b09862e0821f0a92f50db5bf660897bd695d7c33ef900584261bfb7 extends Twig_Template
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
        $__internal_dde7857f666f36d6c368344d67f8737355c76c9eee4e42beed1a3c4a685a850b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde7857f666f36d6c368344d67f8737355c76c9eee4e42beed1a3c4a685a850b->enter($__internal_dde7857f666f36d6c368344d67f8737355c76c9eee4e42beed1a3c4a685a850b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde7857f666f36d6c368344d67f8737355c76c9eee4e42beed1a3c4a685a850b->leave($__internal_dde7857f666f36d6c368344d67f8737355c76c9eee4e42beed1a3c4a685a850b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6f3a39cfdf4fc9390382a803049a1769a25351d3e191a7c93ae52f57354cbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f3a39cfdf4fc9390382a803049a1769a25351d3e191a7c93ae52f57354cbef->enter($__internal_a6f3a39cfdf4fc9390382a803049a1769a25351d3e191a7c93ae52f57354cbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a6f3a39cfdf4fc9390382a803049a1769a25351d3e191a7c93ae52f57354cbef->leave($__internal_a6f3a39cfdf4fc9390382a803049a1769a25351d3e191a7c93ae52f57354cbef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a3d3f0dd4f6996a904db4792f04e4e97b6bf6cf7d55c4660d2f71d4e2f01b3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d3f0dd4f6996a904db4792f04e4e97b6bf6cf7d55c4660d2f71d4e2f01b3f6->enter($__internal_a3d3f0dd4f6996a904db4792f04e4e97b6bf6cf7d55c4660d2f71d4e2f01b3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a3d3f0dd4f6996a904db4792f04e4e97b6bf6cf7d55c4660d2f71d4e2f01b3f6->leave($__internal_a3d3f0dd4f6996a904db4792f04e4e97b6bf6cf7d55c4660d2f71d4e2f01b3f6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_25e8c2a9e3588add0e3a6a77a3d32579b09746b16cf234c8c7f19f22ec4f9efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e8c2a9e3588add0e3a6a77a3d32579b09746b16cf234c8c7f19f22ec4f9efe->enter($__internal_25e8c2a9e3588add0e3a6a77a3d32579b09746b16cf234c8c7f19f22ec4f9efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_25e8c2a9e3588add0e3a6a77a3d32579b09746b16cf234c8c7f19f22ec4f9efe->leave($__internal_25e8c2a9e3588add0e3a6a77a3d32579b09746b16cf234c8c7f19f22ec4f9efe_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Salon-modif/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
