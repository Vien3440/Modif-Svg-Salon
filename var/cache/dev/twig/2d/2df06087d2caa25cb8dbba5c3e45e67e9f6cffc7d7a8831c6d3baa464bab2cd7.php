<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3265e55f74fded8fc12be22c0d34e3d4910b1d7e0bcaf1ba5e4cef3d6ca74c17 extends Twig_Template
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
        $__internal_bb180004534d92736d03a0fff5cedbd04c5c37148dc44e73a3671564c7fa01b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb180004534d92736d03a0fff5cedbd04c5c37148dc44e73a3671564c7fa01b2->enter($__internal_bb180004534d92736d03a0fff5cedbd04c5c37148dc44e73a3671564c7fa01b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_bb180004534d92736d03a0fff5cedbd04c5c37148dc44e73a3671564c7fa01b2->leave($__internal_bb180004534d92736d03a0fff5cedbd04c5c37148dc44e73a3671564c7fa01b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/Salon-modif/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
