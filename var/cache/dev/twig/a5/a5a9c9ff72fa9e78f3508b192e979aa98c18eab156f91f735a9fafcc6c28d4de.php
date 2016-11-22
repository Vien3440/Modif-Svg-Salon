<?php

/* SiteInternetBundle::contact.html.twig */
class __TwigTemplate_1b10ae227d79e3a12e3a117e387023c0fc151460c8bde59e24e84126a69ba738 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SiteInternetBundle::contact.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'nav' => array($this, 'block_nav'),
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
        $__internal_ef7aec90528f6afff39a04d68caf2a04bb4361b410160fac177b553b15b390c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7aec90528f6afff39a04d68caf2a04bb4361b410160fac177b553b15b390c8->enter($__internal_ef7aec90528f6afff39a04d68caf2a04bb4361b410160fac177b553b15b390c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteInternetBundle::contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef7aec90528f6afff39a04d68caf2a04bb4361b410160fac177b553b15b390c8->leave($__internal_ef7aec90528f6afff39a04d68caf2a04bb4361b410160fac177b553b15b390c8_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_317cf14413f741d35c0b25b63148999b5b5041cf314efa4f8c37cc10ec09d9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317cf14413f741d35c0b25b63148999b5b5041cf314efa4f8c37cc10ec09d9b1->enter($__internal_317cf14413f741d35c0b25b63148999b5b5041cf314efa4f8c37cc10ec09d9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_317cf14413f741d35c0b25b63148999b5b5041cf314efa4f8c37cc10ec09d9b1->leave($__internal_317cf14413f741d35c0b25b63148999b5b5041cf314efa4f8c37cc10ec09d9b1_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_38ede8f39f6f8b06fb2ae2151f7bdf56955f647501c35a74c9700d283ca91d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ede8f39f6f8b06fb2ae2151f7bdf56955f647501c35a74c9700d283ca91d83->enter($__internal_38ede8f39f6f8b06fb2ae2151f7bdf56955f647501c35a74c9700d283ca91d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_38ede8f39f6f8b06fb2ae2151f7bdf56955f647501c35a74c9700d283ca91d83->leave($__internal_38ede8f39f6f8b06fb2ae2151f7bdf56955f647501c35a74c9700d283ca91d83_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb7cf40af766c452452782b15412c1175ee47294b785974481a84be082f29538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7cf40af766c452452782b15412c1175ee47294b785974481a84be082f29538->enter($__internal_eb7cf40af766c452452782b15412c1175ee47294b785974481a84be082f29538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_eb7cf40af766c452452782b15412c1175ee47294b785974481a84be082f29538->leave($__internal_eb7cf40af766c452452782b15412c1175ee47294b785974481a84be082f29538_prof);

    }

    // line 8
    public function block_corp($context, array $blocks = array())
    {
        $__internal_f0dc6d95cb69bc775b3376b6165f454e50aaf376cd343303d75abd6b1c062d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0dc6d95cb69bc775b3376b6165f454e50aaf376cd343303d75abd6b1c062d19->enter($__internal_f0dc6d95cb69bc775b3376b6165f454e50aaf376cd343303d75abd6b1c062d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        // line 9
        echo "    <div class=\"container\">
        <h2 class=\"headerForm\">Contact</h2>
       
        <div class=\"col-lg-12 \">
             <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conta");
        echo "\" method=\"post\" class=\"col-sm-offset-2 col-sm-8\">
                            <div class=\"input-group\">
                            <span class=\"input-group-addon\">Nom</span>
                            <p><input type=\"input\" name=\"nom\" class=\"form-control\"></p>
                            </div>
                            <div class=\"input-group\">
                            <span class=\"input-group-addon\">Email</span>
                            <p><input type=\"input\" name=\"email\"class=\"form-control\" ></p>
                            </div>
                            <div class=\"input-group\">
                            <span class=\"input-group-addon\">En quoi puis-je vous être utile</span>
                            <p><textarea type=\"textarea\" name=\"corp\" class=\"form-control\"> </textarea></p>
                            </div>
                            <p><input type=\"submit\" class=\"btn btn-default btn-success col-xs-12\" value=\"Envoyer\"></p>
                        </form>
                            <div>
                            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"btn btn-danger col-xs-offset-3 col-xs-6 col-xs-offset-3\" role=\"button\"> Retour </a>
                            </div>
        </div>
    </div>
            
                

                     <div class=\"container  col-sm-offset-4 col-sm-4 \" >
                         
                         <div class=\"col-sm-6 \">
                             <a href=\"https://www.facebook.com/\" class=\"thumbnail twit\">
                                 <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./images/facebookLogo.png"), "html", null, true);
        echo "\" height=\"60\" width=\"60\" alt=\"logoFacebook\">
                             </a>
                         </div>
                         <div class=\"col-sm-6 \">
                             <a href=\"https://www.tripadvisor.fr/\" class=\"thumbnail fb \">
                                 <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./images/tripadvisorLogo.png"), "html", null, true);
        echo "\" height=\"60\" width=\"60\" alt=\"logoTripadvisor\">
                             </a>
                         </div>
                         <div class=\"col-sm-6 \">
                             <a href=\"https://www.instagram.com/\" class=\"thumbnail linke\">
                                 <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./images/instaLogo.png"), "html", null, true);
        echo "\" height=\"60\" width=\"60\" alt=\"logoInstagram\">
                             </a>
                         </div>
                         <div class=\"col-sm-6 \">
                             <a href=\"https://plus.google.com/\" class=\"thumbnail gmail\">
                                 <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./images/googelPlus.png"), "html", null, true);
        echo "\" height=\"60\" width=\"60\" alt=\"logoGoogelPlus\">
                             </a>
                         </div>
                             
                     </div>
                     

                
                            </div>
                            
                            ";
        
        $__internal_f0dc6d95cb69bc775b3376b6165f454e50aaf376cd343303d75abd6b1c062d19->leave($__internal_f0dc6d95cb69bc775b3376b6165f454e50aaf376cd343303d75abd6b1c062d19_prof);

    }

    public function getTemplateName()
    {
        return "SiteInternetBundle::contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 55,  133 => 50,  125 => 45,  117 => 40,  103 => 29,  84 => 13,  78 => 9,  72 => 8,  60 => 6,  49 => 5,  37 => 4,  11 => 1,);
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
{% block nav %}{% endblock %}
{% block body %}{{parent()}}{% endblock %}

{% block corp %}
    <div class=\"container\">
        <h2 class=\"headerForm\">Contact</h2>
       
        <div class=\"col-lg-12 \">
             <form action=\"{{path('conta')}}\" method=\"post\" class=\"col-sm-offset-2 col-sm-8\">
                            <div class=\"input-group\">
                            <span class=\"input-group-addon\">Nom</span>
                            <p><input type=\"input\" name=\"nom\" class=\"form-control\"></p>
                            </div>
                            <div class=\"input-group\">
                            <span class=\"input-group-addon\">Email</span>
                            <p><input type=\"input\" name=\"email\"class=\"form-control\" ></p>
                            </div>
                            <div class=\"input-group\">
                            <span class=\"input-group-addon\">En quoi puis-je vous être utile</span>
                            <p><textarea type=\"textarea\" name=\"corp\" class=\"form-control\"> </textarea></p>
                            </div>
                            <p><input type=\"submit\" class=\"btn btn-default btn-success col-xs-12\" value=\"Envoyer\"></p>
                        </form>
                            <div>
                            <a href=\"{{ path('home')}}\" class=\"btn btn-danger col-xs-offset-3 col-xs-6 col-xs-offset-3\" role=\"button\"> Retour </a>
                            </div>
        </div>
    </div>
            
                

                     <div class=\"container  col-sm-offset-4 col-sm-4 \" >
                         
                         <div class=\"col-sm-6 \">
                             <a href=\"https://www.facebook.com/\" class=\"thumbnail twit\">
                                 <img src=\"{{asset('./images/facebookLogo.png')}}\" height=\"60\" width=\"60\" alt=\"logoFacebook\">
                             </a>
                         </div>
                         <div class=\"col-sm-6 \">
                             <a href=\"https://www.tripadvisor.fr/\" class=\"thumbnail fb \">
                                 <img src=\"{{asset('./images/tripadvisorLogo.png')}}\" height=\"60\" width=\"60\" alt=\"logoTripadvisor\">
                             </a>
                         </div>
                         <div class=\"col-sm-6 \">
                             <a href=\"https://www.instagram.com/\" class=\"thumbnail linke\">
                                 <img src=\"{{asset('./images/instaLogo.png')}}\" height=\"60\" width=\"60\" alt=\"logoInstagram\">
                             </a>
                         </div>
                         <div class=\"col-sm-6 \">
                             <a href=\"https://plus.google.com/\" class=\"thumbnail gmail\">
                                 <img src=\"{{asset('./images/googelPlus.png')}}\" height=\"60\" width=\"60\" alt=\"logoGoogelPlus\">
                             </a>
                         </div>
                             
                     </div>
                     

                
                            </div>
                            
                            {%endblock%}", "SiteInternetBundle::contact.html.twig", "/var/www/html/Salon_De_Th-_Dynamic-master/src/SiteInternetBundle/Resources/views/contact.html.twig");
    }
}
