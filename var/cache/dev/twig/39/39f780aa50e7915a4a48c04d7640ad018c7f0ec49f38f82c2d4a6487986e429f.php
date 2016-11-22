<?php

/* SiteInternetBundle::home.html.twig */
class __TwigTemplate_2e5ede023376760a6351c915b573ae535feac0b7b7b2374d2034e01ac4755220 extends Twig_Template
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
        $__internal_ba70d2357cc2f99ab4c11ea96e5c5b6eacc0dd5a6d4e0d68e997dc2af6f1dac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba70d2357cc2f99ab4c11ea96e5c5b6eacc0dd5a6d4e0d68e997dc2af6f1dac5->enter($__internal_ba70d2357cc2f99ab4c11ea96e5c5b6eacc0dd5a6d4e0d68e997dc2af6f1dac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteInternetBundle::home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba70d2357cc2f99ab4c11ea96e5c5b6eacc0dd5a6d4e0d68e997dc2af6f1dac5->leave($__internal_ba70d2357cc2f99ab4c11ea96e5c5b6eacc0dd5a6d4e0d68e997dc2af6f1dac5_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_eea727fcc5fa507512cf6e03b274b2daa57f4256ebc85eea179a2cbcfcd6fc3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea727fcc5fa507512cf6e03b274b2daa57f4256ebc85eea179a2cbcfcd6fc3b->enter($__internal_eea727fcc5fa507512cf6e03b274b2daa57f4256ebc85eea179a2cbcfcd6fc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_eea727fcc5fa507512cf6e03b274b2daa57f4256ebc85eea179a2cbcfcd6fc3b->leave($__internal_eea727fcc5fa507512cf6e03b274b2daa57f4256ebc85eea179a2cbcfcd6fc3b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_305e8c4853c85624e6fcefc28b83daf0a7db4dea5fc023799b5d9acefb42c4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305e8c4853c85624e6fcefc28b83daf0a7db4dea5fc023799b5d9acefb42c4f6->enter($__internal_305e8c4853c85624e6fcefc28b83daf0a7db4dea5fc023799b5d9acefb42c4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_305e8c4853c85624e6fcefc28b83daf0a7db4dea5fc023799b5d9acefb42c4f6->leave($__internal_305e8c4853c85624e6fcefc28b83daf0a7db4dea5fc023799b5d9acefb42c4f6_prof);

    }

    // line 8
    public function block_corp($context, array $blocks = array())
    {
        $__internal_c67937954ccabc7c629919123a4351cf30daa87d644608c6dfd53b9a59a379b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67937954ccabc7c629919123a4351cf30daa87d644608c6dfd53b9a59a379b5->enter($__internal_c67937954ccabc7c629919123a4351cf30daa87d644608c6dfd53b9a59a379b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

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
        
        $__internal_c67937954ccabc7c629919123a4351cf30daa87d644608c6dfd53b9a59a379b5->leave($__internal_c67937954ccabc7c629919123a4351cf30daa87d644608c6dfd53b9a59a379b5_prof);

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

", "SiteInternetBundle::home.html.twig", "/var/www/html/Salon_De_Th-_Dynamic-master/src/SiteInternetBundle/Resources/views/home.html.twig");
    }
}
