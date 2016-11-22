<?php

/* SiteInternetBundle::salondethe.html.twig */
class __TwigTemplate_29bd4903a936f70b0924f6ddad60423c10589ec54671a42f726d68d6f4b7af13 extends Twig_Template
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
        $__internal_63a0f2806ca25cfe04d8ddec72a4d3733654f564849e6861e84c3f7b4824a62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a0f2806ca25cfe04d8ddec72a4d3733654f564849e6861e84c3f7b4824a62c->enter($__internal_63a0f2806ca25cfe04d8ddec72a4d3733654f564849e6861e84c3f7b4824a62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteInternetBundle::salondethe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63a0f2806ca25cfe04d8ddec72a4d3733654f564849e6861e84c3f7b4824a62c->leave($__internal_63a0f2806ca25cfe04d8ddec72a4d3733654f564849e6861e84c3f7b4824a62c_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_748cd14ccc30fd6721ab75c67bb6a8020f056154b970f01a1845135dc9f1d31a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748cd14ccc30fd6721ab75c67bb6a8020f056154b970f01a1845135dc9f1d31a->enter($__internal_748cd14ccc30fd6721ab75c67bb6a8020f056154b970f01a1845135dc9f1d31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_748cd14ccc30fd6721ab75c67bb6a8020f056154b970f01a1845135dc9f1d31a->leave($__internal_748cd14ccc30fd6721ab75c67bb6a8020f056154b970f01a1845135dc9f1d31a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_58df95c5a649cdf2453cb5cb374c36c6799ddaa28d7e60aa2cc23fe24c85dba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58df95c5a649cdf2453cb5cb374c36c6799ddaa28d7e60aa2cc23fe24c85dba6->enter($__internal_58df95c5a649cdf2453cb5cb374c36c6799ddaa28d7e60aa2cc23fe24c85dba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_58df95c5a649cdf2453cb5cb374c36c6799ddaa28d7e60aa2cc23fe24c85dba6->leave($__internal_58df95c5a649cdf2453cb5cb374c36c6799ddaa28d7e60aa2cc23fe24c85dba6_prof);

    }

    // line 8
    public function block_corp($context, array $blocks = array())
    {
        $__internal_f662cf49bf9096abd03421ce56277e318d34c2ef64f1e436726ff702c63ca81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f662cf49bf9096abd03421ce56277e318d34c2ef64f1e436726ff702c63ca81f->enter($__internal_f662cf49bf9096abd03421ce56277e318d34c2ef64f1e436726ff702c63ca81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        // line 9
        echo "    <div id=\"contSalon\" class=\"container-fluid\">
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
      <img src=\"../images/Salon2.png\" alt=\"logo\" alt=\"...\">
      
    </div>
    <div class=\"item\">
      <img src=\"../images/salon1.png\" alt=\"logo\" alt=\"...\">
      
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
        <div class=\"row\">
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["poste"] ?? $this->getContext($context, "poste")));
        foreach ($context['_seq'] as $context["_key"] => $context["Salon"]) {
            // line 46
            echo "        <div id=\"thumbnailSalon\">
       <div class=\"col-lg-3 col-md-3\" >
    <div class=\"thumbnail\">
    <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/") . $this->getAttribute($context["Salon"], "Photo", array())), "html", null, true);
            echo "\">
      <div class=\"caption\">
        <h3>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["Salon"], "Nom", array()), "html", null, true);
            echo "</h3>
        <p>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["Salon"], "Prix", array()), "html", null, true);
            echo "€</p>
        <p>";
            // line 53
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
        // line 61
        echo "</div>
</div>
";
        
        $__internal_f662cf49bf9096abd03421ce56277e318d34c2ef64f1e436726ff702c63ca81f->leave($__internal_f662cf49bf9096abd03421ce56277e318d34c2ef64f1e436726ff702c63ca81f_prof);

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
        return array (  140 => 61,  126 => 53,  122 => 52,  118 => 51,  113 => 49,  108 => 46,  104 => 45,  74 => 17,  66 => 9,  60 => 8,  48 => 6,  36 => 4,  11 => 1,);
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
{#    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"3\"></li>#}
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"item active\">
      <img src=\"../images/Salon2.png\" alt=\"logo\" alt=\"...\">
      
    </div>
    <div class=\"item\">
      <img src=\"../images/salon1.png\" alt=\"logo\" alt=\"...\">
      
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
        <div class=\"row\">
    {% for Salon in poste %}
        <div id=\"thumbnailSalon\">
       <div class=\"col-lg-3 col-md-3\" >
    <div class=\"thumbnail\">
    <img src=\"{{asset('images/')~Salon.Photo}}\">
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
</div>
{% endblock %}

", "SiteInternetBundle::salondethe.html.twig", "/var/www/html/Salon-modif/src/SiteInternetBundle/Resources/views/salondethe.html.twig");
    }
}
