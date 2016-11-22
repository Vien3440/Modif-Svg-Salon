<?php

/* AdminBundle::adminResto.html.twig */
class __TwigTemplate_27210da46b585859e67b2111c0ad1be4a63ab8be344e4164873d8c40ef4f645b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle::adminResto.html.twig", 1);
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
        $__internal_2e2003b47d77f87d3cd095a7a0745af7a03a49b882d39ec667c28d3fd79470d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2003b47d77f87d3cd095a7a0745af7a03a49b882d39ec667c28d3fd79470d1->enter($__internal_2e2003b47d77f87d3cd095a7a0745af7a03a49b882d39ec667c28d3fd79470d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::adminResto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e2003b47d77f87d3cd095a7a0745af7a03a49b882d39ec667c28d3fd79470d1->leave($__internal_2e2003b47d77f87d3cd095a7a0745af7a03a49b882d39ec667c28d3fd79470d1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_823d07eb6220bf25795dc55244dd884665db2ba2742f04c83df48c2e820646b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823d07eb6220bf25795dc55244dd884665db2ba2742f04c83df48c2e820646b5->enter($__internal_823d07eb6220bf25795dc55244dd884665db2ba2742f04c83df48c2e820646b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_823d07eb6220bf25795dc55244dd884665db2ba2742f04c83df48c2e820646b5->leave($__internal_823d07eb6220bf25795dc55244dd884665db2ba2742f04c83df48c2e820646b5_prof);

    }

    // line 7
    public function block_corp($context, array $blocks = array())
    {
        $__internal_c8a921d27ac936d3fa5ac0142226797a74dbe97d331492c65ed515eed6de610e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a921d27ac936d3fa5ac0142226797a74dbe97d331492c65ed515eed6de610e->enter($__internal_c8a921d27ac936d3fa5ac0142226797a74dbe97d331492c65ed515eed6de610e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        // line 8
        echo "        <div class=\"container admiSalon\">
        <h2 id=\"admiSalon\">Liste des Plats</h2>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRestoAdd");
        echo "\" class=\"btn btn-default col-xs-offset-3 col-xs-6 col-xs-offset-3\" role=\"button\"> Ajouter </a>
        </div>
        <div id=\"container\">
            
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resto"] ?? $this->getContext($context, "resto")));
        foreach ($context['_seq'] as $context["_key"] => $context["Resto"]) {
            // line 15
            echo "            <div class=\"col-sm-6 col-lg-4 col-md-4\">
         <div class=\"thumbnail\">
             <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../web/images/") . $this->getAttribute($context["Resto"], "Photo", array())), "html", null, true);
            echo "\">
           <h3>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["Resto"], "Nom", array()), "html", null, true);
            echo "</h3>
           <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["Resto"], "Prix", array()), "html", null, true);
            echo "€</p>
           <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["Resto"], "Type", array()), "html", null, true);
            echo "</p>
           <div>
               <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editResto", array("id" => $this->getAttribute($context["Resto"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\" role=\"button\">Modifier</a>
               <a href=\" ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suprResto", array("id" => $this->getAttribute($context["Resto"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\">Supprimer</a>
           </div>
         </div>
        </div>
    </div>       
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Resto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    ";
        
        $__internal_c8a921d27ac936d3fa5ac0142226797a74dbe97d331492c65ed515eed6de610e->leave($__internal_c8a921d27ac936d3fa5ac0142226797a74dbe97d331492c65ed515eed6de610e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::adminResto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 29,  93 => 23,  89 => 22,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 15,  64 => 14,  57 => 10,  53 => 8,  47 => 7,  35 => 4,  11 => 1,);
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
        <h2 id=\"admiSalon\">Liste des Plats</h2>
        <a href=\"{{ path('adminRestoAdd')}}\" class=\"btn btn-default col-xs-offset-3 col-xs-6 col-xs-offset-3\" role=\"button\"> Ajouter </a>
        </div>
        <div id=\"container\">
            
        {% for Resto in resto %}
            <div class=\"col-sm-6 col-lg-4 col-md-4\">
         <div class=\"thumbnail\">
             <img src=\"{{asset('../web/images/')~Resto.Photo}}\">
           <h3>{{Resto.Nom}}</h3>
           <p>{{Resto.Prix}}€</p>
           <p>{{Resto.Type}}</p>
           <div>
               <a href=\"{{ path('editResto',{'id':Resto.id})}}\" class=\"btn btn-success\" role=\"button\">Modifier</a>
               <a href=\" {{ path('suprResto', {'id':Resto.id})}}\" class=\"btn btn-danger\" role=\"button\">Supprimer</a>
           </div>
         </div>
        </div>
    </div>       
        {% endfor %}
    {% endblock %}", "AdminBundle::adminResto.html.twig", "/var/www/html/Salon_De_Th-_Dynamic-master/src/AdminBundle/Resources/views/adminResto.html.twig");
    }
}
