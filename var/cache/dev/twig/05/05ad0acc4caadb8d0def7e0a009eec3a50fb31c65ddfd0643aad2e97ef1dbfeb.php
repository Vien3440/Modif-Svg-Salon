<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0723254ff20ca5618811e794fe22a80611ddc2953ce84f11ca0dce5f6c64948a extends Twig_Template
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
        $__internal_132ee3a38241ad5b5d3e0b1c012303584b9ad0fbf4bf08fdbe49f92b27b0f0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132ee3a38241ad5b5d3e0b1c012303584b9ad0fbf4bf08fdbe49f92b27b0f0d7->enter($__internal_132ee3a38241ad5b5d3e0b1c012303584b9ad0fbf4bf08fdbe49f92b27b0f0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_132ee3a38241ad5b5d3e0b1c012303584b9ad0fbf4bf08fdbe49f92b27b0f0d7->leave($__internal_132ee3a38241ad5b5d3e0b1c012303584b9ad0fbf4bf08fdbe49f92b27b0f0d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/Salon-modif/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
