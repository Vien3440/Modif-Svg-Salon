<?php

/* AdminBundle::adminSalonModif.html.twig */
class __TwigTemplate_5d25726f5377027fb98b0ad2ea2d284cd9dd1785d1eb7070100da5e12cafd258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle::adminSalonModif.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
            'corp' => array($this, 'block_corp'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0eee5c648f2ab160d65ab23cd950f95be40449bfe13b8767096bc3c074f260f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eee5c648f2ab160d65ab23cd950f95be40449bfe13b8767096bc3c074f260f6->enter($__internal_0eee5c648f2ab160d65ab23cd950f95be40449bfe13b8767096bc3c074f260f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::adminSalonModif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0eee5c648f2ab160d65ab23cd950f95be40449bfe13b8767096bc3c074f260f6->leave($__internal_0eee5c648f2ab160d65ab23cd950f95be40449bfe13b8767096bc3c074f260f6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c71b05a12489ea370a81231064f7b9062e45399afcca5e9541b4244b2c8bc70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71b05a12489ea370a81231064f7b9062e45399afcca5e9541b4244b2c8bc70e->enter($__internal_c71b05a12489ea370a81231064f7b9062e45399afcca5e9541b4244b2c8bc70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_c71b05a12489ea370a81231064f7b9062e45399afcca5e9541b4244b2c8bc70e->leave($__internal_c71b05a12489ea370a81231064f7b9062e45399afcca5e9541b4244b2c8bc70e_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_2887a9328d41195016238e78572a3ef4a85fc5459651d8e9096065720f2ce7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2887a9328d41195016238e78572a3ef4a85fc5459651d8e9096065720f2ce7f8->enter($__internal_2887a9328d41195016238e78572a3ef4a85fc5459651d8e9096065720f2ce7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_2887a9328d41195016238e78572a3ef4a85fc5459651d8e9096065720f2ce7f8->leave($__internal_2887a9328d41195016238e78572a3ef4a85fc5459651d8e9096065720f2ce7f8_prof);

    }

    // line 7
    public function block_corp($context, array $blocks = array())
    {
        $__internal_7eedf0148271297b40f916ceec0676d51ed05e5e6077e6d7bd788fe5fc6a4e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eedf0148271297b40f916ceec0676d51ed05e5e6077e6d7bd788fe5fc6a4e55->enter($__internal_7eedf0148271297b40f916ceec0676d51ed05e5e6077e6d7bd788fe5fc6a4e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        // line 8
        echo " <h1 class=\"lienajout headerForm\">Modification Cocktail / Thé</h1>
 <div class=\"container-fluid form\">
                 <div class=\"col-lg-offset-2 col-lg-8 col-lg-offset-2 col-sm-offset-1 col-sm-10 col-sm-offset-1 \">

       
        
     ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formSalon"] ?? $this->getContext($context, "formSalon")), 'form_start', array("attr" => array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifSalon", array("id" => ($context["id"] ?? $this->getContext($context, "id")))))));
        echo "
     
     
        <div class=\"\">
                ";
        // line 18
        echo "  
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Nom</span>
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formSalon"] ?? $this->getContext($context, "formSalon")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " ";
        // line 22
        echo "                </div>
                ";
        // line 23
        echo " 
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Prix</span>
                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formSalon"] ?? $this->getContext($context, "formSalon")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 28
        echo " 
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Photo</span>
                    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formSalon"] ?? $this->getContext($context, "formSalon")), "photo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 34
        echo "                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Description</span>
                    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formSalon"] ?? $this->getContext($context, "formSalon")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 39
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formSalon"] ?? $this->getContext($context, "formSalon")), "Valider", array()), 'widget', array("attr" => array("class" => "form-control btn-success")));
        echo "
                 </div>
     ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formSalon"] ?? $this->getContext($context, "formSalon")), 'form_end');
        echo "
     <div>
      <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminSalon");
        echo "\" class=\"btn btn-danger col-xs-offset-3 col-xs-6 col-xs-offset-3\" role=\"button\"> Retour </a>
     </div>     
     </div>     
           
  
     ";
        
        $__internal_7eedf0148271297b40f916ceec0676d51ed05e5e6077e6d7bd788fe5fc6a4e55->leave($__internal_7eedf0148271297b40f916ceec0676d51ed05e5e6077e6d7bd788fe5fc6a4e55_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::adminSalonModif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 43,  126 => 41,  120 => 39,  115 => 36,  111 => 34,  106 => 31,  101 => 28,  96 => 26,  91 => 23,  88 => 22,  85 => 21,  80 => 18,  73 => 14,  65 => 8,  59 => 7,  48 => 5,  36 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}


{% block body %}{{parent()}}{% endblock %}
    {% block nav %}{% endblock %}
    
    {% block corp %}
 <h1 class=\"lienajout headerForm\">Modification Cocktail / Thé</h1>
 <div class=\"container-fluid form\">
                 <div class=\"col-lg-offset-2 col-lg-8 col-lg-offset-2 col-sm-offset-1 col-sm-10 col-sm-offset-1 \">

       
        
     {{form_start(formSalon,{'attr':{'action':path('modifSalon',{'id':id})}})}}
     
     
        <div class=\"\">
                {#////// Nom  #}  
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Nom</span>
                    {{ form_widget(formSalon.nom, { 'attr': {'class': 'form-control'} })}} {# Class Botstrap #}
                </div>
                {#////// Prix  #} 
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Prix</span>
                    {{ form_widget(formSalon.prix, { 'attr': {'class': 'form-control'} })}}
                </div>
                {#////// Photo  #} 
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Photo</span>
                    {{ form_widget(formSalon.photo, { 'attr': {'class': 'form-control'} })}}
                </div>
                {#////// Description  #}
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Description</span>
                    {{ form_widget(formSalon.type, { 'attr': {'class': 'form-control'} })}}
                </div>
                {#////// Valider  #}
                {{ form_widget(formSalon.Valider, { 'attr': {'class': 'form-control btn-success'} })}}
                 </div>
     {{form_end(formSalon)}}
     <div>
      <a href=\"{{ path('adminSalon')}}\" class=\"btn btn-danger col-xs-offset-3 col-xs-6 col-xs-offset-3\" role=\"button\"> Retour </a>
     </div>     
     </div>     
           
  
     {% endblock %}", "AdminBundle::adminSalonModif.html.twig", "/var/www/html/Salon-modif/src/AdminBundle/Resources/views/adminSalonModif.html.twig");
    }
}
