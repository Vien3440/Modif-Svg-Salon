<?php

/* SiteInternetBundle::salondethe.html.twig */
class __TwigTemplate_d84d1c50cd54a62ec8f4ee8f9b23c97cebcfa76912c659820492ee81047c61a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SiteInternetBundle::salondethe.html.twig", 1);
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
        $__internal_94c55bb193c510b96ec0dd929c2c1f7dcf5b0edce828bcb8520310292c2dbb7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c55bb193c510b96ec0dd929c2c1f7dcf5b0edce828bcb8520310292c2dbb7c->enter($__internal_94c55bb193c510b96ec0dd929c2c1f7dcf5b0edce828bcb8520310292c2dbb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteInternetBundle::salondethe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94c55bb193c510b96ec0dd929c2c1f7dcf5b0edce828bcb8520310292c2dbb7c->leave($__internal_94c55bb193c510b96ec0dd929c2c1f7dcf5b0edce828bcb8520310292c2dbb7c_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_15d8caeb70df8e27ac44a63c9b73ec19c2f95754ae053dbc4eb80ef9c7122090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d8caeb70df8e27ac44a63c9b73ec19c2f95754ae053dbc4eb80ef9c7122090->enter($__internal_15d8caeb70df8e27ac44a63c9b73ec19c2f95754ae053dbc4eb80ef9c7122090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_15d8caeb70df8e27ac44a63c9b73ec19c2f95754ae053dbc4eb80ef9c7122090->leave($__internal_15d8caeb70df8e27ac44a63c9b73ec19c2f95754ae053dbc4eb80ef9c7122090_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_70dfba5e04b3c862369c9035488684c8b4da0ac9859b0d10728b27918c5a89e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70dfba5e04b3c862369c9035488684c8b4da0ac9859b0d10728b27918c5a89e4->enter($__internal_70dfba5e04b3c862369c9035488684c8b4da0ac9859b0d10728b27918c5a89e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_70dfba5e04b3c862369c9035488684c8b4da0ac9859b0d10728b27918c5a89e4->leave($__internal_70dfba5e04b3c862369c9035488684c8b4da0ac9859b0d10728b27918c5a89e4_prof);

    }

    // line 8
    public function block_corp($context, array $blocks = array())
    {
        $__internal_58da9e8fa0d97665c293eaac0f792a958a30309160d0fca186cd55d94981ecba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58da9e8fa0d97665c293eaac0f792a958a30309160d0fca186cd55d94981ecba->enter($__internal_58da9e8fa0d97665c293eaac0f792a958a30309160d0fca186cd55d94981ecba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        // line 9
        echo "    <div id=\"contSalon\" class=\"carouzel container-fluid\">
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
";
        // line 17
        echo "  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"item active\">
      <img src=\"../images/salon3.png\" alt=\"logo\" alt=\"...\">
      
    </div>
    <div class=\"item\">
      <img src=\"../images/salon4.png\" alt=\"logo\" alt=\"...\">
      
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
    <div class=\"container form\" id=\"containerSalon\">
        
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["poste"] ?? $this->getContext($context, "poste")));
        foreach ($context['_seq'] as $context["_key"] => $context["Salon"]) {
            // line 46
            echo "        
        <div id=\"thumbnailSalon\">
       <div class=\"col-lg-3 col-md-3\" >
    <div class=\"thumbnail\">
        <a class=\"hvr-curl-top-left\"><img src=\"";
            // line 50
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/") . $this->getAttribute($context["Salon"], "Photo", array())), "html", null, true);
            echo "\"></a>
      <div class=\"caption\">
        <h3>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["Salon"], "Nom", array()), "html", null, true);
            echo "</h3>
        <p>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["Salon"], "Prix", array()), "html", null, true);
            echo "€</p>
        <p>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["Salon"], "Type", array()), "html", null, true);
            echo "</p>
       
      </div>
    </div>
  </div>
        </div> 
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Salon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
</div>
";
        
        $__internal_58da9e8fa0d97665c293eaac0f792a958a30309160d0fca186cd55d94981ecba->leave($__internal_58da9e8fa0d97665c293eaac0f792a958a30309160d0fca186cd55d94981ecba_prof);

    }

    public function getTemplateName()
    {
        return "SiteInternetBundle::salondethe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 62,  127 => 54,  123 => 53,  119 => 52,  114 => 50,  108 => 46,  104 => 45,  74 => 17,  66 => 9,  60 => 8,  48 => 6,  36 => 4,  11 => 1,);
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
    <div id=\"contSalon\" class=\"carouzel container-fluid\">
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
{#    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"3\"></li>#}
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"item active\">
      <img src=\"../images/salon3.png\" alt=\"logo\" alt=\"...\">
      
    </div>
    <div class=\"item\">
      <img src=\"../images/salon4.png\" alt=\"logo\" alt=\"...\">
      
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
    <div class=\"container form\" id=\"containerSalon\">
        
    {% for Salon in poste %}
        
        <div id=\"thumbnailSalon\">
       <div class=\"col-lg-3 col-md-3\" >
    <div class=\"thumbnail\">
        <a class=\"hvr-curl-top-left\"><img src=\"{{asset('images/')~Salon.Photo}}\"></a>
      <div class=\"caption\">
        <h3>{{Salon.Nom}}</h3>
        <p>{{Salon.Prix}}€</p>
        <p>{{Salon.Type}}</p>
       
      </div>
    </div>
  </div>
        </div> 
    
    {% endfor %}

</div>
{% endblock %}

", "SiteInternetBundle::salondethe.html.twig", "/var/www/html/Salon-modif/src/SiteInternetBundle/Resources/views/salondethe.html.twig");
    }
}
