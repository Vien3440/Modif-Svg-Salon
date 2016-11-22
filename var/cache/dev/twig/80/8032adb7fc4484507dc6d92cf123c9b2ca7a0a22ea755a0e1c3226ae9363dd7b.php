<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_dfcc3d2c216ab553066c820e0c6daaa920e979b113220d7b7ce44790f4807cdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_044c4e0a5765d974fb7c1ad47a3f98107af92dc60698f7256d4c0c0b8d02e2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044c4e0a5765d974fb7c1ad47a3f98107af92dc60698f7256d4c0c0b8d02e2ce->enter($__internal_044c4e0a5765d974fb7c1ad47a3f98107af92dc60698f7256d4c0c0b8d02e2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_044c4e0a5765d974fb7c1ad47a3f98107af92dc60698f7256d4c0c0b8d02e2ce->leave($__internal_044c4e0a5765d974fb7c1ad47a3f98107af92dc60698f7256d4c0c0b8d02e2ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/Salon-modif/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
