<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_45680731d6edbb1117417ff95c6d1ea1621bc4917d5a9b6a2fa4a2725a7b4a42 extends Twig_Template
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
        $__internal_33a1d4e5986df9a1fe9590d8d12fdd894deac68f6bc3f992bf0e367707888bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a1d4e5986df9a1fe9590d8d12fdd894deac68f6bc3f992bf0e367707888bd0->enter($__internal_33a1d4e5986df9a1fe9590d8d12fdd894deac68f6bc3f992bf0e367707888bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_33a1d4e5986df9a1fe9590d8d12fdd894deac68f6bc3f992bf0e367707888bd0->leave($__internal_33a1d4e5986df9a1fe9590d8d12fdd894deac68f6bc3f992bf0e367707888bd0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/Salon-modif/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
