<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_006314477293c5eab25e624b257948ab503da14c1a6f8d12a52e71ce2f97cf17 extends Twig_Template
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
        $__internal_0b2cf16a11a8e76a3f37ca87be3aefc6d6457b25adfafd3da8efea2296d07326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2cf16a11a8e76a3f37ca87be3aefc6d6457b25adfafd3da8efea2296d07326->enter($__internal_0b2cf16a11a8e76a3f37ca87be3aefc6d6457b25adfafd3da8efea2296d07326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0b2cf16a11a8e76a3f37ca87be3aefc6d6457b25adfafd3da8efea2296d07326->leave($__internal_0b2cf16a11a8e76a3f37ca87be3aefc6d6457b25adfafd3da8efea2296d07326_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Salon-modif/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
