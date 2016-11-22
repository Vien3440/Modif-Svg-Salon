<?php

/* SiteInternetBundle::home.html.twig */
class __TwigTemplate_531a65cb6130d90c98de126776bda1bd3f13b961a857a098472ff6e02967d3fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SiteInternetBundle::home.html.twig", 1);
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
        $__internal_90e7e6adb9aea7dbf6856bc2e6a7deeccec5fa98162bfdbba3ecd34b69f203a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e7e6adb9aea7dbf6856bc2e6a7deeccec5fa98162bfdbba3ecd34b69f203a3->enter($__internal_90e7e6adb9aea7dbf6856bc2e6a7deeccec5fa98162bfdbba3ecd34b69f203a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteInternetBundle::home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90e7e6adb9aea7dbf6856bc2e6a7deeccec5fa98162bfdbba3ecd34b69f203a3->leave($__internal_90e7e6adb9aea7dbf6856bc2e6a7deeccec5fa98162bfdbba3ecd34b69f203a3_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6b7a8baa284e98247c1138fc8e68c926f200f607a5f8130e01fdc4a5c9c502c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b7a8baa284e98247c1138fc8e68c926f200f607a5f8130e01fdc4a5c9c502c->enter($__internal_c6b7a8baa284e98247c1138fc8e68c926f200f607a5f8130e01fdc4a5c9c502c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_c6b7a8baa284e98247c1138fc8e68c926f200f607a5f8130e01fdc4a5c9c502c->leave($__internal_c6b7a8baa284e98247c1138fc8e68c926f200f607a5f8130e01fdc4a5c9c502c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f64c7105a4973e4f2956a3d5e26d0fcf448e4a44353020f6e6271b101d1325ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64c7105a4973e4f2956a3d5e26d0fcf448e4a44353020f6e6271b101d1325ca->enter($__internal_f64c7105a4973e4f2956a3d5e26d0fcf448e4a44353020f6e6271b101d1325ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_f64c7105a4973e4f2956a3d5e26d0fcf448e4a44353020f6e6271b101d1325ca->leave($__internal_f64c7105a4973e4f2956a3d5e26d0fcf448e4a44353020f6e6271b101d1325ca_prof);

    }

    // line 8
    public function block_corp($context, array $blocks = array())
    {
        $__internal_a2057ab9ef5d2245f9e32493bbff835a55a7a4e76e982c331f0e4d6e7b9b19bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2057ab9ef5d2245f9e32493bbff835a55a7a4e76e982c331f0e4d6e7b9b19bd->enter($__internal_a2057ab9ef5d2245f9e32493bbff835a55a7a4e76e982c331f0e4d6e7b9b19bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        // line 9
        echo "    <header id='headerHome'></header> 
    <section id=\"contHome\" class='container'>
        
        <div id=\"tof\" class=\"col-lg-6 col-md-6 \" >
            <div id=\"contantTof\">
                <h2>M dupont </h2>
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/Profil.jpg"), "html", null, true);
        echo "\" class=\"img-thumbnail\" alt=\"Photo M \" width=\"270\" height=\"300\">
            </div>            
        </div>
        <div id=\"text\" class=\"col-lg-6 col-md-6 \" >
            <div id=\"contantText\">
                <p>Au cœur de lunel</p> <sapn> 
 <p>Au centre historique de la ville de lunel 
C’est en xxxx que Mxxx ouvrent le restaurant / salon de the L’eldorado . Niché au cœur du village de Lunel , l’endroit se veut intimiste et rencontre un succès immédiat en proposant divers met marocaine ou européenne basée sur des recette simples et conviviaux.</p>
            </div>
        </div>
        

</section>
    <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/scriptHome.js"), "html", null, true);
        echo "\"></script> 
";
        
        $__internal_a2057ab9ef5d2245f9e32493bbff835a55a7a4e76e982c331f0e4d6e7b9b19bd->leave($__internal_a2057ab9ef5d2245f9e32493bbff835a55a7a4e76e982c331f0e4d6e7b9b19bd_prof);

    }

    public function getTemplateName()
    {
        return "SiteInternetBundle::home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  74 => 15,  66 => 9,  60 => 8,  48 => 6,  36 => 4,  11 => 1,);
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
    <header id='headerHome'></header> 
    <section id=\"contHome\" class='container'>
        
        <div id=\"tof\" class=\"col-lg-6 col-md-6 \" >
            <div id=\"contantTof\">
                <h2>M dupont </h2>
                <img src=\"{{asset(\"/images/Profil.jpg\")}}\" class=\"img-thumbnail\" alt=\"Photo M \" width=\"270\" height=\"300\">
            </div>            
        </div>
        <div id=\"text\" class=\"col-lg-6 col-md-6 \" >
            <div id=\"contantText\">
                <p>Au cœur de lunel</p> <sapn> 
 <p>Au centre historique de la ville de lunel 
C’est en xxxx que Mxxx ouvrent le restaurant / salon de the L’eldorado . Niché au cœur du village de Lunel , l’endroit se veut intimiste et rencontre un succès immédiat en proposant divers met marocaine ou européenne basée sur des recette simples et conviviaux.</p>
            </div>
        </div>
        

</section>
    <script type=\"text/javascript\" src=\"{{asset('./js/scriptHome.js')}}\"></script> 
{% endblock %}

", "SiteInternetBundle::home.html.twig", "/var/www/html/Salon-modif/src/SiteInternetBundle/Resources/views/home.html.twig");
    }
}
