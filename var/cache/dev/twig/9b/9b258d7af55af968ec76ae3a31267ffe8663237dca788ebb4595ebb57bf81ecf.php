<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_8583f13b029faf8be229b23222e6ad6623062b19e8a4b2af42749643e10b0b70 extends Twig_Template
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
        $__internal_37229412e9e7b6f423cbe6cead83ed88c2fbf635bf2ca9ab3a83d49d4774cba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37229412e9e7b6f423cbe6cead83ed88c2fbf635bf2ca9ab3a83d49d4774cba1->enter($__internal_37229412e9e7b6f423cbe6cead83ed88c2fbf635bf2ca9ab3a83d49d4774cba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_37229412e9e7b6f423cbe6cead83ed88c2fbf635bf2ca9ab3a83d49d4774cba1->leave($__internal_37229412e9e7b6f423cbe6cead83ed88c2fbf635bf2ca9ab3a83d49d4774cba1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/Salon-modif/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
