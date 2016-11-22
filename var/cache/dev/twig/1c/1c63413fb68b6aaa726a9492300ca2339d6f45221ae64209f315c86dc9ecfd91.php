<?php

/* AdminBundle::adminRestoModif.html.twig */
class __TwigTemplate_0808261002d8a8c2e9554983086e18bacc1a86c9b676a9cf91698d6151aa9cb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle::adminRestoModif.html.twig", 1);
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
        $__internal_03e87723c127a2bffafc28a46a504c23652a68bac6f32f27db5ef1baa069a88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e87723c127a2bffafc28a46a504c23652a68bac6f32f27db5ef1baa069a88a->enter($__internal_03e87723c127a2bffafc28a46a504c23652a68bac6f32f27db5ef1baa069a88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::adminRestoModif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03e87723c127a2bffafc28a46a504c23652a68bac6f32f27db5ef1baa069a88a->leave($__internal_03e87723c127a2bffafc28a46a504c23652a68bac6f32f27db5ef1baa069a88a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0eaaafc0eafb08f98196d89a9857c19c605736802c6c7f33a4198d573d14b6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eaaafc0eafb08f98196d89a9857c19c605736802c6c7f33a4198d573d14b6df->enter($__internal_0eaaafc0eafb08f98196d89a9857c19c605736802c6c7f33a4198d573d14b6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_0eaaafc0eafb08f98196d89a9857c19c605736802c6c7f33a4198d573d14b6df->leave($__internal_0eaaafc0eafb08f98196d89a9857c19c605736802c6c7f33a4198d573d14b6df_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_3e59b0ace68f3a05607eb4fe1ea74a879b05e6bbf2ca1d7a361f06d5fc00c29a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e59b0ace68f3a05607eb4fe1ea74a879b05e6bbf2ca1d7a361f06d5fc00c29a->enter($__internal_3e59b0ace68f3a05607eb4fe1ea74a879b05e6bbf2ca1d7a361f06d5fc00c29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_3e59b0ace68f3a05607eb4fe1ea74a879b05e6bbf2ca1d7a361f06d5fc00c29a->leave($__internal_3e59b0ace68f3a05607eb4fe1ea74a879b05e6bbf2ca1d7a361f06d5fc00c29a_prof);

    }

    // line 7
    public function block_corp($context, array $blocks = array())
    {
        $__internal_a3f4a0bf5a78161033b97a801d7f07e55b29d508f0bc00ee390e62c30b44618a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f4a0bf5a78161033b97a801d7f07e55b29d508f0bc00ee390e62c30b44618a->enter($__internal_a3f4a0bf5a78161033b97a801d7f07e55b29d508f0bc00ee390e62c30b44618a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        // line 8
        echo " <h1 class=\"lienajout headerForm\">Modification Plat</h1>
 <div class=\"container-fluid form\">
                 <div class=\"col-lg-offset-2 col-lg-8 col-lg-offset-2 col-sm-offset-1 col-sm-10 col-sm-offset-1 \">

       
        
     ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formResto"] ?? $this->getContext($context, "formResto")), 'form_start', array("attr" => array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifResto", array("id" => ($context["id"] ?? $this->getContext($context, "id")))))));
        echo "
     
     
        <div class=\"\">
                ";
        // line 18
        echo "  
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Nom</span>
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formResto"] ?? $this->getContext($context, "formResto")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formResto"] ?? $this->getContext($context, "formResto")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 28
        echo " 
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Photo</span>
                    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formResto"] ?? $this->getContext($context, "formResto")), "photo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 34
        echo "                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Description</span>
                    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formResto"] ?? $this->getContext($context, "formResto")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 39
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formResto"] ?? $this->getContext($context, "formResto")), "Valider", array()), 'widget', array("attr" => array("class" => "form-control btn-success")));
        echo "
                 </div>
     
     <div>             
                <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminResto");
        echo "\" class=\"btn btn-danger col-xs-offset-3 col-xs-6 col-xs-offset-3\" role=\"button\"> Retour </a>
                </div> 
                </div> 
           
           
  
     ";
        
        $__internal_a3f4a0bf5a78161033b97a801d7f07e55b29d508f0bc00ee390e62c30b44618a->leave($__internal_a3f4a0bf5a78161033b97a801d7f07e55b29d508f0bc00ee390e62c30b44618a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::adminRestoModif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  120 => 39,  115 => 36,  111 => 34,  106 => 31,  101 => 28,  96 => 26,  91 => 23,  88 => 22,  85 => 21,  80 => 18,  73 => 14,  65 => 8,  59 => 7,  48 => 5,  36 => 4,  11 => 1,);
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
 <h1 class=\"lienajout headerForm\">Modification Plat</h1>
 <div class=\"container-fluid form\">
                 <div class=\"col-lg-offset-2 col-lg-8 col-lg-offset-2 col-sm-offset-1 col-sm-10 col-sm-offset-1 \">

       
        
     {{form_start(formResto,{'attr':{'action':path('modifResto',{'id':id})}})}}
     
     
        <div class=\"\">
                {#////// Nom  #}  
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Nom</span>
                    {{ form_widget(formResto.nom, { 'attr': {'class': 'form-control'} })}} {# Class Botstrap #}
                </div>
                {#////// Prix  #} 
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Prix</span>
                    {{ form_widget(formResto.prix, { 'attr': {'class': 'form-control'} })}}
                </div>
                {#////// Photo  #} 
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Photo</span>
                    {{ form_widget(formResto.photo, { 'attr': {'class': 'form-control'} })}}
                </div>
                {#////// Description  #}
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Description</span>
                    {{ form_widget(formResto.type, { 'attr': {'class': 'form-control'} })}}
                </div>
                {#////// Valider  #}
                {{ form_widget(formResto.Valider, { 'attr': {'class': 'form-control btn-success'} })}}
                 </div>
     
     <div>             
                <a href=\"{{ path('adminResto')}}\" class=\"btn btn-danger col-xs-offset-3 col-xs-6 col-xs-offset-3\" role=\"button\"> Retour </a>
                </div> 
                </div> 
           
           
  
     {% endblock %}", "AdminBundle::adminRestoModif.html.twig", "/var/www/html/Salon-modif/src/AdminBundle/Resources/views/adminRestoModif.html.twig");
    }
}
