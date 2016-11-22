<?php

/* AdminBundle::adminSalon.html.twig */
class __TwigTemplate_f5254638fa8cd5275a306b59e237c7c7e0ff4b38f144c8be3d8f6180c9e53208 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle::adminSalon.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'corp' => array($this, 'block_corp'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd4a2b43e0529ed2608cd45f732cf05c6521b69bc4353ed529223025b52572cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4a2b43e0529ed2608cd45f732cf05c6521b69bc4353ed529223025b52572cf->enter($__internal_cd4a2b43e0529ed2608cd45f732cf05c6521b69bc4353ed529223025b52572cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::adminSalon.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd4a2b43e0529ed2608cd45f732cf05c6521b69bc4353ed529223025b52572cf->leave($__internal_cd4a2b43e0529ed2608cd45f732cf05c6521b69bc4353ed529223025b52572cf_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fc68b0160d1edcdc4f1890254d5efd49cd8ab1da2cefc79162588943374ba93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc68b0160d1edcdc4f1890254d5efd49cd8ab1da2cefc79162588943374ba93->enter($__internal_8fc68b0160d1edcdc4f1890254d5efd49cd8ab1da2cefc79162588943374ba93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_8fc68b0160d1edcdc4f1890254d5efd49cd8ab1da2cefc79162588943374ba93->leave($__internal_8fc68b0160d1edcdc4f1890254d5efd49cd8ab1da2cefc79162588943374ba93_prof);

    }

    // line 7
    public function block_corp($context, array $blocks = array())
    {
        $__internal_4372fa7843efeb6a80419c16406351ecd2b6b58b5c148a4b848ecf012bb8e3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4372fa7843efeb6a80419c16406351ecd2b6b58b5c148a4b848ecf012bb8e3c0->enter($__internal_4372fa7843efeb6a80419c16406351ecd2b6b58b5c148a4b848ecf012bb8e3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        // line 8
        echo "        <div class=\"container admiSalon\">
        <h2 >Liste des cocktails/Thé</h2>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminSalonAdd");
        echo "\" class=\"btn btn-default col-xs-offset-3 col-xs-6 col-xs-offset-3\" role=\"button\"> Ajouter </a>
        </div>
        <div class=\"container-fluid adminEdit\">
            
            
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["salons"] ?? $this->getContext($context, "salons")));
        foreach ($context['_seq'] as $context["_key"] => $context["Salon"]) {
            // line 16
            echo "            <div class=\"col-sm-6 col-lg-4 col-md-4\">
   <div class=\"thumbnail\">
             <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../web/images/") . $this->getAttribute($context["Salon"], "Photo", array())), "html", null, true);
            echo "\">
           <h3>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["Salon"], "Nom", array()), "html", null, true);
            echo "</h3>
           <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["Salon"], "Prix", array()), "html", null, true);
            echo "€</p>
           <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["Salon"], "Type", array()), "html", null, true);
            echo "</p>
           <div>
               <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSalon", array("id" => $this->getAttribute($context["Salon"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\" role=\"button\">Modifier</a>
               <a href=\" ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suprSalon", array("id" => $this->getAttribute($context["Salon"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\">Supprimer</a>
           </div>
        </div>
        </div>
        
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Salon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
    ";
        
        $__internal_4372fa7843efeb6a80419c16406351ecd2b6b58b5c148a4b848ecf012bb8e3c0->leave($__internal_4372fa7843efeb6a80419c16406351ecd2b6b58b5c148a4b848ecf012bb8e3c0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::adminSalon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 31,  94 => 24,  90 => 23,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 16,  65 => 15,  57 => 10,  53 => 8,  47 => 7,  35 => 4,  11 => 1,);
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
    
    
    {% block corp %}
        <div class=\"container admiSalon\">
        <h2 >Liste des cocktails/Thé</h2>
        <a href=\"{{ path('adminSalonAdd')}}\" class=\"btn btn-default col-xs-offset-3 col-xs-6 col-xs-offset-3\" role=\"button\"> Ajouter </a>
        </div>
        <div class=\"container-fluid adminEdit\">
            
            
        {% for Salon in salons %}
            <div class=\"col-sm-6 col-lg-4 col-md-4\">
   <div class=\"thumbnail\">
             <img src=\"{{asset('../web/images/')~Salon.Photo}}\">
           <h3>{{Salon.Nom}}</h3>
           <p>{{Salon.Prix}}€</p>
           <p>{{Salon.Type}}</p>
           <div>
               <a href=\"{{ path('editSalon',{'id':Salon.id})}}\" class=\"btn btn-success\" role=\"button\">Modifier</a>
               <a href=\" {{ path('suprSalon', {'id':Salon.id})}}\" class=\"btn btn-danger\" role=\"button\">Supprimer</a>
           </div>
        </div>
        </div>
        
        
        {% endfor %}
        </div>
    {% endblock %}", "AdminBundle::adminSalon.html.twig", "/var/www/html/Salon-modif/src/AdminBundle/Resources/views/adminSalon.html.twig");
    }
}
