<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_ba87b607dd92339bc56bd422af421156eb2f48b3b1d8c2cff88a4d22dc123eb6 extends Twig_Template
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
        $__internal_b08cf732c60fe34cef5569684c8f5c55d2663eb362b5fbc0285a6793486d68d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b08cf732c60fe34cef5569684c8f5c55d2663eb362b5fbc0285a6793486d68d9->enter($__internal_b08cf732c60fe34cef5569684c8f5c55d2663eb362b5fbc0285a6793486d68d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_b08cf732c60fe34cef5569684c8f5c55d2663eb362b5fbc0285a6793486d68d9->leave($__internal_b08cf732c60fe34cef5569684c8f5c55d2663eb362b5fbc0285a6793486d68d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/Salon-modif/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
