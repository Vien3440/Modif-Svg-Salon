<?php

/* AdminBundle::adminRestoAdd.html.twig */
class __TwigTemplate_d3d93d1458f378fb47423afb81d6739d659f49faf810d182c5b51c0a24dc8a46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle::adminRestoAdd.html.twig", 1);
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
        $__internal_0df5ec31fab84d169ab252ab00e29d725f994af001f629f9cc6d0e1ae6d731af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df5ec31fab84d169ab252ab00e29d725f994af001f629f9cc6d0e1ae6d731af->enter($__internal_0df5ec31fab84d169ab252ab00e29d725f994af001f629f9cc6d0e1ae6d731af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::adminRestoAdd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0df5ec31fab84d169ab252ab00e29d725f994af001f629f9cc6d0e1ae6d731af->leave($__internal_0df5ec31fab84d169ab252ab00e29d725f994af001f629f9cc6d0e1ae6d731af_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3732d4968e8f2af8f34bfa9eeafbde3845a296ed3b914122a98b3871b9751cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3732d4968e8f2af8f34bfa9eeafbde3845a296ed3b914122a98b3871b9751cbf->enter($__internal_3732d4968e8f2af8f34bfa9eeafbde3845a296ed3b914122a98b3871b9751cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_3732d4968e8f2af8f34bfa9eeafbde3845a296ed3b914122a98b3871b9751cbf->leave($__internal_3732d4968e8f2af8f34bfa9eeafbde3845a296ed3b914122a98b3871b9751cbf_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b5e66581c36ff2dbef08349a75eefa5f8c5dc9baedf0074b101b0528d4c55bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e66581c36ff2dbef08349a75eefa5f8c5dc9baedf0074b101b0528d4c55bd6->enter($__internal_b5e66581c36ff2dbef08349a75eefa5f8c5dc9baedf0074b101b0528d4c55bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_b5e66581c36ff2dbef08349a75eefa5f8c5dc9baedf0074b101b0528d4c55bd6->leave($__internal_b5e66581c36ff2dbef08349a75eefa5f8c5dc9baedf0074b101b0528d4c55bd6_prof);

    }

    // line 7
    public function block_corp($context, array $blocks = array())
    {
        $__internal_c6e282df4e5825dcb12ab9baae204ddb0d818164e7061f5b55827656f1a7901d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e282df4e5825dcb12ab9baae204ddb0d818164e7061f5b55827656f1a7901d->enter($__internal_c6e282df4e5825dcb12ab9baae204ddb0d818164e7061f5b55827656f1a7901d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        // line 8
        echo "        
 <h1 class=\"lienajout headerForm\">Ajouter Plat</h1>
 <div class=\"container-fluid form\">
                 <div class=\"col-lg-offset-2 col-lg-8 col-lg-offset-2 col-sm-offset-1 col-sm-10 col-sm-offset-1 \">

       
           
        ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formResto"] ?? $this->getContext($context, "formResto")), 'form_start', array("attr" => array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validResto"), "enctype" => "multipart/form-data")));
        echo "
            
          <div>
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
            </div>
            <div>             
                <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminResto");
        echo "\" class=\"btn btn-danger col-xs-offset-3 col-xs-6 col-xs-offset-3\" role=\"button\"> Retour </a>
                </div> 
                </div> 
        ";
        
        $__internal_c6e282df4e5825dcb12ab9baae204ddb0d818164e7061f5b55827656f1a7901d->leave($__internal_c6e282df4e5825dcb12ab9baae204ddb0d818164e7061f5b55827656f1a7901d_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::adminRestoAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  120 => 39,  115 => 36,  111 => 34,  106 => 31,  101 => 28,  96 => 26,  91 => 23,  88 => 22,  85 => 21,  80 => 18,  74 => 15,  65 => 8,  59 => 7,  48 => 5,  36 => 4,  11 => 1,);
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
        
 <h1 class=\"lienajout headerForm\">Ajouter Plat</h1>
 <div class=\"container-fluid form\">
                 <div class=\"col-lg-offset-2 col-lg-8 col-lg-offset-2 col-sm-offset-1 col-sm-10 col-sm-offset-1 \">

       
           
        {{form_start(formResto,{'attr':{'action':path('validResto'),'enctype':'multipart/form-data'}})}}
            
          <div>
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
            </div>
            <div>             
                <a href=\"{{ path('adminResto')}}\" class=\"btn btn-danger col-xs-offset-3 col-xs-6 col-xs-offset-3\" role=\"button\"> Retour </a>
                </div> 
                </div> 
        {% endblock %}
", "AdminBundle::adminRestoAdd.html.twig", "/var/www/html/Salon-modif/src/AdminBundle/Resources/views/adminRestoAdd.html.twig");
    }
}
