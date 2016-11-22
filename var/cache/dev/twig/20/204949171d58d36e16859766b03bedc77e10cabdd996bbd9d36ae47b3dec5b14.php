<?php

/* AdminBundle::adminSalonAdd.html.twig */
class __TwigTemplate_f45bae2a91f1c79521372ed285fc37c63d8b38f1202848ae962a3d51e8c5edeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle::adminSalonAdd.html.twig", 1);
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
        $__internal_0b0813164534e928226604ab6a34e320cbb436086ee3e26f757d646c08d12161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0813164534e928226604ab6a34e320cbb436086ee3e26f757d646c08d12161->enter($__internal_0b0813164534e928226604ab6a34e320cbb436086ee3e26f757d646c08d12161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::adminSalonAdd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b0813164534e928226604ab6a34e320cbb436086ee3e26f757d646c08d12161->leave($__internal_0b0813164534e928226604ab6a34e320cbb436086ee3e26f757d646c08d12161_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_253b294e4f4d082d2a21eac037882ebb0106c66d7c1c575b1d8b2acfafe4da90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253b294e4f4d082d2a21eac037882ebb0106c66d7c1c575b1d8b2acfafe4da90->enter($__internal_253b294e4f4d082d2a21eac037882ebb0106c66d7c1c575b1d8b2acfafe4da90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_253b294e4f4d082d2a21eac037882ebb0106c66d7c1c575b1d8b2acfafe4da90->leave($__internal_253b294e4f4d082d2a21eac037882ebb0106c66d7c1c575b1d8b2acfafe4da90_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_dc59c8d0ec0d82d5424f2650fd18b1a4b57e5ec424b66c0e2a6f71ae9a864d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc59c8d0ec0d82d5424f2650fd18b1a4b57e5ec424b66c0e2a6f71ae9a864d50->enter($__internal_dc59c8d0ec0d82d5424f2650fd18b1a4b57e5ec424b66c0e2a6f71ae9a864d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_dc59c8d0ec0d82d5424f2650fd18b1a4b57e5ec424b66c0e2a6f71ae9a864d50->leave($__internal_dc59c8d0ec0d82d5424f2650fd18b1a4b57e5ec424b66c0e2a6f71ae9a864d50_prof);

    }

    // line 7
    public function block_corp($context, array $blocks = array())
    {
        $__internal_621daddab3476303a03275a695b84f37cf0df7e654c3a411dabce64967b4f8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621daddab3476303a03275a695b84f37cf0df7e654c3a411dabce64967b4f8c8->enter($__internal_621daddab3476303a03275a695b84f37cf0df7e654c3a411dabce64967b4f8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        // line 8
        echo " <h1 class=\"lienajout headerForm\">Ajouter Cocktail / Thé</h1>
                 <div class=\"col-lg-offset-2 col-lg-8 col-lg-offset-2 col-sm-offset-1 col-sm-10 col-sm-offset-1 \">

       
           
        ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formNews"] ?? $this->getContext($context, "formNews")), 'form_start', array("attr" => array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("valid"), "enctype" => "multipart/form-data")));
        echo "
                <div>
                        ";
        // line 15
        echo "  
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Nom</span>
                    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formNews"] ?? $this->getContext($context, "formNews")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " ";
        // line 19
        echo "                </div>
                ";
        // line 20
        echo " 
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Prix</span>
                    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formNews"] ?? $this->getContext($context, "formNews")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 25
        echo " 
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Photo</span>
                    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formNews"] ?? $this->getContext($context, "formNews")), "photo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 31
        echo "                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Description</span>
                    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formNews"] ?? $this->getContext($context, "formNews")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 36
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formNews"] ?? $this->getContext($context, "formNews")), "Valider", array()), 'widget', array("attr" => array("class" => "form-control btn-success")));
        echo "
            </div>
            <div>
                <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminSalon");
        echo "\" class=\"btn btn-danger col-xs-offset-3 col-xs-6 col-xs-offset-3\" role=\"button\"> Retour </a>
            </div>     
   ";
        
        $__internal_621daddab3476303a03275a695b84f37cf0df7e654c3a411dabce64967b4f8c8->leave($__internal_621daddab3476303a03275a695b84f37cf0df7e654c3a411dabce64967b4f8c8_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::adminSalonAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 39,  117 => 36,  112 => 33,  108 => 31,  103 => 28,  98 => 25,  93 => 23,  88 => 20,  85 => 19,  82 => 18,  77 => 15,  72 => 13,  65 => 8,  59 => 7,  48 => 5,  36 => 4,  11 => 1,);
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
 <h1 class=\"lienajout headerForm\">Ajouter Cocktail / Thé</h1>
                 <div class=\"col-lg-offset-2 col-lg-8 col-lg-offset-2 col-sm-offset-1 col-sm-10 col-sm-offset-1 \">

       
           
        {{form_start(formNews,{'attr':{'action':path('valid'),'enctype':'multipart/form-data'}})}}
                <div>
                        {#////// Nom  #}  
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Nom</span>
                    {{ form_widget(formNews.nom, { 'attr': {'class': 'form-control'} })}} {# Class Botstrap #}
                </div>
                {#////// Prix  #} 
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Prix</span>
                    {{ form_widget(formNews.prix, { 'attr': {'class': 'form-control'} })}}
                </div>
                {#////// Photo  #} 
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Photo</span>
                    {{ form_widget(formNews.photo, { 'attr': {'class': 'form-control'} })}}
                </div>
                {#////// Description  #}
                <div class=\"input-group formEvent\">
                    <span class=\"input-group-addon\" >Description</span>
                    {{ form_widget(formNews.type, { 'attr': {'class': 'form-control'} })}}
                </div>
                {#////// Valider  #}
                {{ form_widget(formNews.Valider, { 'attr': {'class': 'form-control btn-success'} })}}
            </div>
            <div>
                <a href=\"{{ path('adminSalon')}}\" class=\"btn btn-danger col-xs-offset-3 col-xs-6 col-xs-offset-3\" role=\"button\"> Retour </a>
            </div>     
   {% endblock %}
", "AdminBundle::adminSalonAdd.html.twig", "/var/www/html/Salon-modif/src/AdminBundle/Resources/views/adminSalonAdd.html.twig");
    }
}
