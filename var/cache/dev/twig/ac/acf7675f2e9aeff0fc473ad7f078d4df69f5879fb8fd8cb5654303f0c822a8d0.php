<?php

/* AdminBundle::adminSalon.html.twig */
class __TwigTemplate_2f081f7bf137df859f814393dec8a812e6cec732a4d84b44e294c151e5ada3ed extends Twig_Template
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
        $__internal_028c53a8979ba2a10a4f4c0770f49f089146b73803ef81c8e805d4b1ece49c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028c53a8979ba2a10a4f4c0770f49f089146b73803ef81c8e805d4b1ece49c17->enter($__internal_028c53a8979ba2a10a4f4c0770f49f089146b73803ef81c8e805d4b1ece49c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::adminSalon.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_028c53a8979ba2a10a4f4c0770f49f089146b73803ef81c8e805d4b1ece49c17->leave($__internal_028c53a8979ba2a10a4f4c0770f49f089146b73803ef81c8e805d4b1ece49c17_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_810de1134de2315c14fc27e273cc8e15bfe2d712e7c9446eba2772b31382e623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_810de1134de2315c14fc27e273cc8e15bfe2d712e7c9446eba2772b31382e623->enter($__internal_810de1134de2315c14fc27e273cc8e15bfe2d712e7c9446eba2772b31382e623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_810de1134de2315c14fc27e273cc8e15bfe2d712e7c9446eba2772b31382e623->leave($__internal_810de1134de2315c14fc27e273cc8e15bfe2d712e7c9446eba2772b31382e623_prof);

    }

    // line 7
    public function block_corp($context, array $blocks = array())
    {
        $__internal_c6a65fbb55423114cd2eab7c1924dd1d8d17b6aeaa62fc80330158d4523d7633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a65fbb55423114cd2eab7c1924dd1d8d17b6aeaa62fc80330158d4523d7633->enter($__internal_c6a65fbb55423114cd2eab7c1924dd1d8d17b6aeaa62fc80330158d4523d7633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        // line 8
        echo "        <div class=\"container admiSalon\">
        <h2 >Liste des cocktails/Thé</h2>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminSalonAdd");
        echo "\" class=\"btn btn-default col-xs-offset-3 col-xs-6 col-xs-offset-3\" role=\"button\"> Ajouter </a>
        </div>
        <div id=\"container\">
            
            
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
        
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Salon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    ";
        
        $__internal_c6a65fbb55423114cd2eab7c1924dd1d8d17b6aeaa62fc80330158d4523d7633->leave($__internal_c6a65fbb55423114cd2eab7c1924dd1d8d17b6aeaa62fc80330158d4523d7633_prof);

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
        <div id=\"container\">
            
            
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
        
        </div>
        {% endfor %}
    {% endblock %}", "AdminBundle::adminSalon.html.twig", "/var/www/html/Salon_De_Th-_Dynamic-master/src/AdminBundle/Resources/views/adminSalon.html.twig");
    }
}
