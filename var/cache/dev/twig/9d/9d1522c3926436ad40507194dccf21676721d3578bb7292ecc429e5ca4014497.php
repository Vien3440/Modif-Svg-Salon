<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_28f9e7e11f42f32b0e2ad67016f9f1bda757157f233d69327f676abc6c7cd258 extends Twig_Template
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
        $__internal_3519bd7fa790b758b1b11f6812311d64099bc09b260c74b1447d1f7ae9d87881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3519bd7fa790b758b1b11f6812311d64099bc09b260c74b1447d1f7ae9d87881->enter($__internal_3519bd7fa790b758b1b11f6812311d64099bc09b260c74b1447d1f7ae9d87881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_3519bd7fa790b758b1b11f6812311d64099bc09b260c74b1447d1f7ae9d87881->leave($__internal_3519bd7fa790b758b1b11f6812311d64099bc09b260c74b1447d1f7ae9d87881_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/html/Salon-modif/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
