<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e905e11c712527f28990f60fd7031d638996b579997f882687a5d4e1d81ce8ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_36e484e90d79c58f0a107bdd64ce4ca8e941478ab2c9e820fb59cef58ea22a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e484e90d79c58f0a107bdd64ce4ca8e941478ab2c9e820fb59cef58ea22a82->enter($__internal_36e484e90d79c58f0a107bdd64ce4ca8e941478ab2c9e820fb59cef58ea22a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36e484e90d79c58f0a107bdd64ce4ca8e941478ab2c9e820fb59cef58ea22a82->leave($__internal_36e484e90d79c58f0a107bdd64ce4ca8e941478ab2c9e820fb59cef58ea22a82_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2c291424853c40fdf29a0ab3a40dd32a46b9847aa81e2f6d4d54d2aa4857430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c291424853c40fdf29a0ab3a40dd32a46b9847aa81e2f6d4d54d2aa4857430->enter($__internal_b2c291424853c40fdf29a0ab3a40dd32a46b9847aa81e2f6d4d54d2aa4857430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b2c291424853c40fdf29a0ab3a40dd32a46b9847aa81e2f6d4d54d2aa4857430->leave($__internal_b2c291424853c40fdf29a0ab3a40dd32a46b9847aa81e2f6d4d54d2aa4857430_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_21af24c8f5fe5e76a5c66a264f41ad280b73fe2d1131e177cada50208928bb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21af24c8f5fe5e76a5c66a264f41ad280b73fe2d1131e177cada50208928bb0e->enter($__internal_21af24c8f5fe5e76a5c66a264f41ad280b73fe2d1131e177cada50208928bb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_21af24c8f5fe5e76a5c66a264f41ad280b73fe2d1131e177cada50208928bb0e->leave($__internal_21af24c8f5fe5e76a5c66a264f41ad280b73fe2d1131e177cada50208928bb0e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/Salon-modif/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
