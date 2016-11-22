<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4520475e62e78a8fb05bdbd092b4f7404de39083954e1c287dfa7b609d8acc33 extends Twig_Template
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
        $__internal_37697d2dbde1ff6378bbb6c2e1d5dad910fa98c0e7ac47b2b63045ebda0b4a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37697d2dbde1ff6378bbb6c2e1d5dad910fa98c0e7ac47b2b63045ebda0b4a3c->enter($__internal_37697d2dbde1ff6378bbb6c2e1d5dad910fa98c0e7ac47b2b63045ebda0b4a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37697d2dbde1ff6378bbb6c2e1d5dad910fa98c0e7ac47b2b63045ebda0b4a3c->leave($__internal_37697d2dbde1ff6378bbb6c2e1d5dad910fa98c0e7ac47b2b63045ebda0b4a3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_752097ea0b20e442047cb27f99a6372ee09c8c9719b166a3e22e6bbf69979d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752097ea0b20e442047cb27f99a6372ee09c8c9719b166a3e22e6bbf69979d06->enter($__internal_752097ea0b20e442047cb27f99a6372ee09c8c9719b166a3e22e6bbf69979d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_752097ea0b20e442047cb27f99a6372ee09c8c9719b166a3e22e6bbf69979d06->leave($__internal_752097ea0b20e442047cb27f99a6372ee09c8c9719b166a3e22e6bbf69979d06_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6c3271f293e4b28cb8da79eccd97f14e29b8ae9f1cd83bd026eecab65e97a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c3271f293e4b28cb8da79eccd97f14e29b8ae9f1cd83bd026eecab65e97a56->enter($__internal_c6c3271f293e4b28cb8da79eccd97f14e29b8ae9f1cd83bd026eecab65e97a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c6c3271f293e4b28cb8da79eccd97f14e29b8ae9f1cd83bd026eecab65e97a56->leave($__internal_c6c3271f293e4b28cb8da79eccd97f14e29b8ae9f1cd83bd026eecab65e97a56_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b4b45adec83d9e8c7f90840b6be110a99836fb7e79d5078be5f4dc9c24a4612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4b45adec83d9e8c7f90840b6be110a99836fb7e79d5078be5f4dc9c24a4612->enter($__internal_0b4b45adec83d9e8c7f90840b6be110a99836fb7e79d5078be5f4dc9c24a4612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0b4b45adec83d9e8c7f90840b6be110a99836fb7e79d5078be5f4dc9c24a4612->leave($__internal_0b4b45adec83d9e8c7f90840b6be110a99836fb7e79d5078be5f4dc9c24a4612_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Salon-modif/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
