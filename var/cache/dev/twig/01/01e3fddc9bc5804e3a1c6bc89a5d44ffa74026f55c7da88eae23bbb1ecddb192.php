<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0a3939d3f8d3470150cc25c71e15114c4829ff76091ceb4c32d9c2a9dcb4ae20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_29ee3e631c59eb19980b6b1f4cad8da64612559e2cd035036d3fa664b42c3045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ee3e631c59eb19980b6b1f4cad8da64612559e2cd035036d3fa664b42c3045->enter($__internal_29ee3e631c59eb19980b6b1f4cad8da64612559e2cd035036d3fa664b42c3045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29ee3e631c59eb19980b6b1f4cad8da64612559e2cd035036d3fa664b42c3045->leave($__internal_29ee3e631c59eb19980b6b1f4cad8da64612559e2cd035036d3fa664b42c3045_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43205c0e18d27d21b512105349f6c0f05a6a5e7ecb3f486e6e7b571f11e0ff24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43205c0e18d27d21b512105349f6c0f05a6a5e7ecb3f486e6e7b571f11e0ff24->enter($__internal_43205c0e18d27d21b512105349f6c0f05a6a5e7ecb3f486e6e7b571f11e0ff24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_43205c0e18d27d21b512105349f6c0f05a6a5e7ecb3f486e6e7b571f11e0ff24->leave($__internal_43205c0e18d27d21b512105349f6c0f05a6a5e7ecb3f486e6e7b571f11e0ff24_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b0664711cc3f7a5a72bc66e3f042c626fde11bcba6a26a46920d76945b5d22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0664711cc3f7a5a72bc66e3f042c626fde11bcba6a26a46920d76945b5d22c->enter($__internal_2b0664711cc3f7a5a72bc66e3f042c626fde11bcba6a26a46920d76945b5d22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b0664711cc3f7a5a72bc66e3f042c626fde11bcba6a26a46920d76945b5d22c->leave($__internal_2b0664711cc3f7a5a72bc66e3f042c626fde11bcba6a26a46920d76945b5d22c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_30fd206ddfb737f4d3daba1633eea1966550c9e96342d3a0d977f0ff787b0c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30fd206ddfb737f4d3daba1633eea1966550c9e96342d3a0d977f0ff787b0c2c->enter($__internal_30fd206ddfb737f4d3daba1633eea1966550c9e96342d3a0d977f0ff787b0c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_30fd206ddfb737f4d3daba1633eea1966550c9e96342d3a0d977f0ff787b0c2c->leave($__internal_30fd206ddfb737f4d3daba1633eea1966550c9e96342d3a0d977f0ff787b0c2c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/Salon-modif/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
