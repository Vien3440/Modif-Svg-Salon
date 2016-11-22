<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e9fe299cc09fe95db395cf90b0fdb0c29b4c54dcc20a47a233c42af948f37ba9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6709e1e3af8c70f28789dc36e0c7c9104803f946c26385d12f781a503b88cf1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6709e1e3af8c70f28789dc36e0c7c9104803f946c26385d12f781a503b88cf1e->enter($__internal_6709e1e3af8c70f28789dc36e0c7c9104803f946c26385d12f781a503b88cf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6709e1e3af8c70f28789dc36e0c7c9104803f946c26385d12f781a503b88cf1e->leave($__internal_6709e1e3af8c70f28789dc36e0c7c9104803f946c26385d12f781a503b88cf1e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef14259080c3c8e4ba214a9e88b69886bee983428564efdc59c53ed1c4ba73fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef14259080c3c8e4ba214a9e88b69886bee983428564efdc59c53ed1c4ba73fc->enter($__internal_ef14259080c3c8e4ba214a9e88b69886bee983428564efdc59c53ed1c4ba73fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ef14259080c3c8e4ba214a9e88b69886bee983428564efdc59c53ed1c4ba73fc->leave($__internal_ef14259080c3c8e4ba214a9e88b69886bee983428564efdc59c53ed1c4ba73fc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/Salon-modif/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
