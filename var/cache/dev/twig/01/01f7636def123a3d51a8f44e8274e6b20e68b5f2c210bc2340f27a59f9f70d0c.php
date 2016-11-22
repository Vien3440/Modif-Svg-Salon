<?php

/* SiteInternetBundle::home.html.twig */
class __TwigTemplate_8e806b5cc15fdc28fa6dd883f8d9b3e5a88c78d5e1993dfdbfcaa2683e127743 extends Twig_Template
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
        $__internal_847c352031a56d81bdcf92924c2584acabfd76f33ff922b5d70a3292ce65b8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847c352031a56d81bdcf92924c2584acabfd76f33ff922b5d70a3292ce65b8d0->enter($__internal_847c352031a56d81bdcf92924c2584acabfd76f33ff922b5d70a3292ce65b8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteInternetBundle::home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_847c352031a56d81bdcf92924c2584acabfd76f33ff922b5d70a3292ce65b8d0->leave($__internal_847c352031a56d81bdcf92924c2584acabfd76f33ff922b5d70a3292ce65b8d0_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f2e177855f2e9a9a3c4291b646ee1bc0cb428a18542abed7baba7653b0ba167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2e177855f2e9a9a3c4291b646ee1bc0cb428a18542abed7baba7653b0ba167->enter($__internal_3f2e177855f2e9a9a3c4291b646ee1bc0cb428a18542abed7baba7653b0ba167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_3f2e177855f2e9a9a3c4291b646ee1bc0cb428a18542abed7baba7653b0ba167->leave($__internal_3f2e177855f2e9a9a3c4291b646ee1bc0cb428a18542abed7baba7653b0ba167_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d4a77b993853bc82bf053b65da8bed886b94029dc94db1ab65fa6e1b9c60a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4a77b993853bc82bf053b65da8bed886b94029dc94db1ab65fa6e1b9c60a95->enter($__internal_5d4a77b993853bc82bf053b65da8bed886b94029dc94db1ab65fa6e1b9c60a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_5d4a77b993853bc82bf053b65da8bed886b94029dc94db1ab65fa6e1b9c60a95->leave($__internal_5d4a77b993853bc82bf053b65da8bed886b94029dc94db1ab65fa6e1b9c60a95_prof);

    }

    // line 8
    public function block_corp($context, array $blocks = array())
    {
        $__internal_3666e6b47a5a709a87f9ac15b7fd822ee49bea3e0e9ee874718edc1f32205c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3666e6b47a5a709a87f9ac15b7fd822ee49bea3e0e9ee874718edc1f32205c7f->enter($__internal_3666e6b47a5a709a87f9ac15b7fd822ee49bea3e0e9ee874718edc1f32205c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

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
        
        $__internal_3666e6b47a5a709a87f9ac15b7fd822ee49bea3e0e9ee874718edc1f32205c7f->leave($__internal_3666e6b47a5a709a87f9ac15b7fd822ee49bea3e0e9ee874718edc1f32205c7f_prof);

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
