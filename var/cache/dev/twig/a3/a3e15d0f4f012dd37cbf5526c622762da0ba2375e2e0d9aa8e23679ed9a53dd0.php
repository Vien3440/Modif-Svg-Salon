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
        $__internal_b34dbf0cb10891e33110b242b0e8927c4d41f23da04b6252b125d443b2a79a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34dbf0cb10891e33110b242b0e8927c4d41f23da04b6252b125d443b2a79a03->enter($__internal_b34dbf0cb10891e33110b242b0e8927c4d41f23da04b6252b125d443b2a79a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteInternetBundle::home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b34dbf0cb10891e33110b242b0e8927c4d41f23da04b6252b125d443b2a79a03->leave($__internal_b34dbf0cb10891e33110b242b0e8927c4d41f23da04b6252b125d443b2a79a03_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_b18a11073b35bdc074436778b503a935e6a288793cc960d612be3dace580fb35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18a11073b35bdc074436778b503a935e6a288793cc960d612be3dace580fb35->enter($__internal_b18a11073b35bdc074436778b503a935e6a288793cc960d612be3dace580fb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_b18a11073b35bdc074436778b503a935e6a288793cc960d612be3dace580fb35->leave($__internal_b18a11073b35bdc074436778b503a935e6a288793cc960d612be3dace580fb35_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d79ef20b5c9957b901c270e5a20dd06fee48da832761a8b2b15fb1403119d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d79ef20b5c9957b901c270e5a20dd06fee48da832761a8b2b15fb1403119d87->enter($__internal_1d79ef20b5c9957b901c270e5a20dd06fee48da832761a8b2b15fb1403119d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_1d79ef20b5c9957b901c270e5a20dd06fee48da832761a8b2b15fb1403119d87->leave($__internal_1d79ef20b5c9957b901c270e5a20dd06fee48da832761a8b2b15fb1403119d87_prof);

    }

    // line 8
    public function block_corp($context, array $blocks = array())
    {
        $__internal_dfd670b23a39611743fae04f241d2afade610a11dc1f76b83f29fbbeb0c661bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd670b23a39611743fae04f241d2afade610a11dc1f76b83f29fbbeb0c661bb->enter($__internal_dfd670b23a39611743fae04f241d2afade610a11dc1f76b83f29fbbeb0c661bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        // line 9
        echo "    <header id='headerHome'>
        <div id=\"blockLogo\">
            <img class=\"img-responsive\" alt=\"logo eldorado\"  src=\"../images/fullLogo4.png\" >
        </div>
    </header> 
    <section id=\"contHome\" class='container'>
        
        <div id=\"tof\" class=\"col-lg-6 col-md-6 \" >
            <div  id=\"contantTof\">
                <h2>M dupont </h2>
                <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/Profil.jpg"), "html", null, true);
        echo "\" class=\" img-thumbnail\" alt=\"Photo M \" width=\"270\" height=\"300\">
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
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/scriptHome.js"), "html", null, true);
        echo "\"></script> 
";
        
        $__internal_dfd670b23a39611743fae04f241d2afade610a11dc1f76b83f29fbbeb0c661bb->leave($__internal_dfd670b23a39611743fae04f241d2afade610a11dc1f76b83f29fbbeb0c661bb_prof);

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
        return array (  94 => 32,  78 => 19,  66 => 9,  60 => 8,  48 => 6,  36 => 4,  11 => 1,);
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
    <header id='headerHome'>
        <div id=\"blockLogo\">
            <img class=\"img-responsive\" alt=\"logo eldorado\"  src=\"../images/fullLogo4.png\" >
        </div>
    </header> 
    <section id=\"contHome\" class='container'>
        
        <div id=\"tof\" class=\"col-lg-6 col-md-6 \" >
            <div  id=\"contantTof\">
                <h2>M dupont </h2>
                <img src=\"{{asset(\"/images/Profil.jpg\")}}\" class=\" img-thumbnail\" alt=\"Photo M \" width=\"270\" height=\"300\">
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
