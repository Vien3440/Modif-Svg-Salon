<?php

/* SiteInternetBundle::restauration.html.twig */
class __TwigTemplate_38761013249f93270dfff810dd486209be87513395199cfa2d6a41dcc1debb7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SiteInternetBundle::restauration.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2e489c51b086a40d53831a1a40d8797fede0e8f42911c1157be1617b06da81ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e489c51b086a40d53831a1a40d8797fede0e8f42911c1157be1617b06da81ae->enter($__internal_2e489c51b086a40d53831a1a40d8797fede0e8f42911c1157be1617b06da81ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteInternetBundle::restauration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e489c51b086a40d53831a1a40d8797fede0e8f42911c1157be1617b06da81ae->leave($__internal_2e489c51b086a40d53831a1a40d8797fede0e8f42911c1157be1617b06da81ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f4a9d0d81fde776318905b76f020e3f887b6c12b54162b48352ecae06d8be9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4a9d0d81fde776318905b76f020e3f887b6c12b54162b48352ecae06d8be9a->enter($__internal_5f4a9d0d81fde776318905b76f020e3f887b6c12b54162b48352ecae06d8be9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_5f4a9d0d81fde776318905b76f020e3f887b6c12b54162b48352ecae06d8be9a->leave($__internal_5f4a9d0d81fde776318905b76f020e3f887b6c12b54162b48352ecae06d8be9a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_813b8c8f90819bce9da63413e58f4135f021474b125f1e9bb06605306b9e8e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813b8c8f90819bce9da63413e58f4135f021474b125f1e9bb06605306b9e8e47->enter($__internal_813b8c8f90819bce9da63413e58f4135f021474b125f1e9bb06605306b9e8e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_813b8c8f90819bce9da63413e58f4135f021474b125f1e9bb06605306b9e8e47->leave($__internal_813b8c8f90819bce9da63413e58f4135f021474b125f1e9bb06605306b9e8e47_prof);

    }

    // line 7
    public function block_corp($context, array $blocks = array())
    {
        $__internal_81fde243410a57a253a3d2e29de334a17c3fdddb71888ed5ec3d3fab21acb0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81fde243410a57a253a3d2e29de334a17c3fdddb71888ed5ec3d3fab21acb0e9->enter($__internal_81fde243410a57a253a3d2e29de334a17c3fdddb71888ed5ec3d3fab21acb0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        // line 8
        echo "    <div id=\"contSalon\" class=\"container-fluid\">
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"item active\">
      <img src=\"./../images/imgCarou1.png\" alt=\"logo\" alt=\"...\">
      
    </div>
    <div class=\"item\">
      <img src=\"./../images/imgCarou1.png\" alt=\"logo\" alt=\"...\">
      
    </div>
    
  </div>

  <!-- Controls -->
  <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
    </div>
    <div class=\"container\" id=\"containerSalon\">
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resto"] ?? $this->getContext($context, "resto")));
        foreach ($context['_seq'] as $context["_key"] => $context["Resto"]) {
            // line 43
            echo "        <div id=\"thumbnailSalon\">
       <div class=\"col-md-4\" >
    <div class=\"thumbnail\">
    <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/") . $this->getAttribute($context["Resto"], "Photo", array())), "html", null, true);
            echo "\">
      <div class=\"caption\">
        <h3>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["Resto"], "Nom", array()), "html", null, true);
            echo "</h3>
        <p>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["Resto"], "Prix", array()), "html", null, true);
            echo "€</p>
        <p>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["Resto"], "Type", array()), "html", null, true);
            echo "</p>
      </div>
    </div>
  </div>
        </div> 
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Resto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "<div/>
<div/>
";
        
        $__internal_81fde243410a57a253a3d2e29de334a17c3fdddb71888ed5ec3d3fab21acb0e9->leave($__internal_81fde243410a57a253a3d2e29de334a17c3fdddb71888ed5ec3d3fab21acb0e9_prof);

    }

    public function getTemplateName()
    {
        return "SiteInternetBundle::restauration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 57,  124 => 50,  120 => 49,  116 => 48,  111 => 46,  106 => 43,  102 => 42,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends \"base.html.twig\"%}

{% block head %}{{parent()}}{% endblock %}

{% block body %}{{parent()}}{% endblock %}

{% block corp %}
    <div id=\"contSalon\" class=\"container-fluid\">
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"item active\">
      <img src=\"./../images/imgCarou1.png\" alt=\"logo\" alt=\"...\">
      
    </div>
    <div class=\"item\">
      <img src=\"./../images/imgCarou1.png\" alt=\"logo\" alt=\"...\">
      
    </div>
    
  </div>

  <!-- Controls -->
  <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
    </div>
    <div class=\"container\" id=\"containerSalon\">
    {% for Resto in resto %}
        <div id=\"thumbnailSalon\">
       <div class=\"col-md-4\" >
    <div class=\"thumbnail\">
    <img src=\"{{asset('images/')~Resto.Photo}}\">
      <div class=\"caption\">
        <h3>{{Resto.Nom}}</h3>
        <p>{{Resto.Prix}}€</p>
        <p>{{Resto.Type}}</p>
      </div>
    </div>
  </div>
        </div> 
    
    {% endfor %}
<div/>
<div/>
{% endblock %}", "SiteInternetBundle::restauration.html.twig", "/var/www/html/Salon_De_Th-_Dynamic-master/src/SiteInternetBundle/Resources/views/restauration.html.twig");
    }
}
