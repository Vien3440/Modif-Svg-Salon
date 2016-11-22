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
        $__internal_91eda37d106e197b5b7c1d2e4e5f3d52c98122ec4c9ca9d3ab0a625fdfec4a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91eda37d106e197b5b7c1d2e4e5f3d52c98122ec4c9ca9d3ab0a625fdfec4a1a->enter($__internal_91eda37d106e197b5b7c1d2e4e5f3d52c98122ec4c9ca9d3ab0a625fdfec4a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91eda37d106e197b5b7c1d2e4e5f3d52c98122ec4c9ca9d3ab0a625fdfec4a1a->leave($__internal_91eda37d106e197b5b7c1d2e4e5f3d52c98122ec4c9ca9d3ab0a625fdfec4a1a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11d56cbe68f8a374941dcc861aa3e2ecffcce8cfa0a7e59bf9ceb058fa068551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d56cbe68f8a374941dcc861aa3e2ecffcce8cfa0a7e59bf9ceb058fa068551->enter($__internal_11d56cbe68f8a374941dcc861aa3e2ecffcce8cfa0a7e59bf9ceb058fa068551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_11d56cbe68f8a374941dcc861aa3e2ecffcce8cfa0a7e59bf9ceb058fa068551->leave($__internal_11d56cbe68f8a374941dcc861aa3e2ecffcce8cfa0a7e59bf9ceb058fa068551_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ca11bd410b9292d19a38264a6f03f7a12d50d260941d79c6b3dddb96ff8b317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca11bd410b9292d19a38264a6f03f7a12d50d260941d79c6b3dddb96ff8b317->enter($__internal_5ca11bd410b9292d19a38264a6f03f7a12d50d260941d79c6b3dddb96ff8b317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ca11bd410b9292d19a38264a6f03f7a12d50d260941d79c6b3dddb96ff8b317->leave($__internal_5ca11bd410b9292d19a38264a6f03f7a12d50d260941d79c6b3dddb96ff8b317_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28afc695b11d26f9da9a26b5ce05f664e70fae237f9486b61317763c6313221f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28afc695b11d26f9da9a26b5ce05f664e70fae237f9486b61317763c6313221f->enter($__internal_28afc695b11d26f9da9a26b5ce05f664e70fae237f9486b61317763c6313221f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_28afc695b11d26f9da9a26b5ce05f664e70fae237f9486b61317763c6313221f->leave($__internal_28afc695b11d26f9da9a26b5ce05f664e70fae237f9486b61317763c6313221f_prof);

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
