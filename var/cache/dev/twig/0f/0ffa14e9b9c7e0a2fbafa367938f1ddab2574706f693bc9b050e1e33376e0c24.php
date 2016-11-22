<?php

/* SiteInternetBundle::contact.html.twig */
class __TwigTemplate_9920926b6c6ec34a5e1100ec00593bddd0b454c97a4d1d29e116ea90cd7bc97a extends Twig_Template
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
        $__internal_e860f3a5974cf9db181f585121792665ec4119a0f5d4b23b3bac257f4d112fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e860f3a5974cf9db181f585121792665ec4119a0f5d4b23b3bac257f4d112fb2->enter($__internal_e860f3a5974cf9db181f585121792665ec4119a0f5d4b23b3bac257f4d112fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteInternetBundle::contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e860f3a5974cf9db181f585121792665ec4119a0f5d4b23b3bac257f4d112fb2->leave($__internal_e860f3a5974cf9db181f585121792665ec4119a0f5d4b23b3bac257f4d112fb2_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_130494b35b94cb040d1b8335879064803a805236c7ef9cfbe8a6b764a63986a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130494b35b94cb040d1b8335879064803a805236c7ef9cfbe8a6b764a63986a3->enter($__internal_130494b35b94cb040d1b8335879064803a805236c7ef9cfbe8a6b764a63986a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_130494b35b94cb040d1b8335879064803a805236c7ef9cfbe8a6b764a63986a3->leave($__internal_130494b35b94cb040d1b8335879064803a805236c7ef9cfbe8a6b764a63986a3_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_2f5b39112477e2e3df7a465d1c6fc9813cc6311ba69ba8fff028a5fe87c5082e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5b39112477e2e3df7a465d1c6fc9813cc6311ba69ba8fff028a5fe87c5082e->enter($__internal_2f5b39112477e2e3df7a465d1c6fc9813cc6311ba69ba8fff028a5fe87c5082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_2f5b39112477e2e3df7a465d1c6fc9813cc6311ba69ba8fff028a5fe87c5082e->leave($__internal_2f5b39112477e2e3df7a465d1c6fc9813cc6311ba69ba8fff028a5fe87c5082e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2424ef1233b5e016318b3c4b9f718d1fa419e3e2a36163d44b75a3cdb39291e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2424ef1233b5e016318b3c4b9f718d1fa419e3e2a36163d44b75a3cdb39291e8->enter($__internal_2424ef1233b5e016318b3c4b9f718d1fa419e3e2a36163d44b75a3cdb39291e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_2424ef1233b5e016318b3c4b9f718d1fa419e3e2a36163d44b75a3cdb39291e8->leave($__internal_2424ef1233b5e016318b3c4b9f718d1fa419e3e2a36163d44b75a3cdb39291e8_prof);

    }

    // line 8
    public function block_corp($context, array $blocks = array())
    {
        $__internal_06774b788cb4b86b7b9a4aa609e58fd2f819d0396b2366b90405e02857b84bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06774b788cb4b86b7b9a4aa609e58fd2f819d0396b2366b90405e02857b84bec->enter($__internal_06774b788cb4b86b7b9a4aa609e58fd2f819d0396b2366b90405e02857b84bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        // line 9
        echo "    <div class=\"container\">
        <h2 class=\"headerForm\">Contact</h2>
        <div class=\"container-fluid form\">
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
                        <span class=\"input-group-addon\">Message</span>
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



            <div class=\"container logo col-xs-12 \" >

                <div class=\"col-sm-3 \">
                    <a href=\"https://www.facebook.com/\" class=\"thumbnail twit\">
                        <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./images/facebookLogo.png"), "html", null, true);
        echo "\" height=\"70\" width=\"70\" alt=\"logoFacebook\">
                    </a>
                </div>
                <div class=\"col-sm-3 \">
                    <a href=\"https://www.tripadvisor.fr/\" class=\"thumbnail fb \">
                        <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./images/tripadvisorLogo.png"), "html", null, true);
        echo "\" height=\"70\" width=\"70\" alt=\"logoTripadvisor\">
                    </a>
                </div>
                <div class=\"col-sm-3 \">
                    <a href=\"https://www.instagram.com/\" class=\"thumbnail linke\">
                        <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./images/instaLogo.png"), "html", null, true);
        echo "\" height=\"70\" width=\"70\" alt=\"logoInstagram\">
                    </a>
                </div>
                <div class=\"col-sm-3\">
                    <a href=\"https://plus.google.com/\" class=\"thumbnail gmail\">
                        <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./images/googelPlus.png"), "html", null, true);
        echo "\" height=\"70\" width=\"70\" alt=\"logoGoogelPlus\">
                    </a>
                </div>

            </div>
        </div>



    </div>

";
        
        $__internal_06774b788cb4b86b7b9a4aa609e58fd2f819d0396b2366b90405e02857b84bec->leave($__internal_06774b788cb4b86b7b9a4aa609e58fd2f819d0396b2366b90405e02857b84bec_prof);

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
        return array (  140 => 54,  132 => 49,  124 => 44,  116 => 39,  103 => 29,  84 => 13,  78 => 9,  72 => 8,  60 => 6,  49 => 5,  37 => 4,  11 => 1,);
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
        <div class=\"container-fluid form\">
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
                        <span class=\"input-group-addon\">Message</span>
                        <p><textarea type=\"textarea\" name=\"corp\" class=\"form-control\"> </textarea></p>
                    </div>
                    <p><input type=\"submit\" class=\"btn btn-default btn-success col-xs-12\" value=\"Envoyer\"></p>
                </form>
                <div>
                    <a href=\"{{ path('home')}}\" class=\"btn btn-danger col-xs-offset-3 col-xs-6 col-xs-offset-3\" role=\"button\"> Retour </a>
                </div>
            </div>



            <div class=\"container logo col-xs-12 \" >

                <div class=\"col-sm-3 \">
                    <a href=\"https://www.facebook.com/\" class=\"thumbnail twit\">
                        <img src=\"{{asset('./images/facebookLogo.png')}}\" height=\"70\" width=\"70\" alt=\"logoFacebook\">
                    </a>
                </div>
                <div class=\"col-sm-3 \">
                    <a href=\"https://www.tripadvisor.fr/\" class=\"thumbnail fb \">
                        <img src=\"{{asset('./images/tripadvisorLogo.png')}}\" height=\"70\" width=\"70\" alt=\"logoTripadvisor\">
                    </a>
                </div>
                <div class=\"col-sm-3 \">
                    <a href=\"https://www.instagram.com/\" class=\"thumbnail linke\">
                        <img src=\"{{asset('./images/instaLogo.png')}}\" height=\"70\" width=\"70\" alt=\"logoInstagram\">
                    </a>
                </div>
                <div class=\"col-sm-3\">
                    <a href=\"https://plus.google.com/\" class=\"thumbnail gmail\">
                        <img src=\"{{asset('./images/googelPlus.png')}}\" height=\"70\" width=\"70\" alt=\"logoGoogelPlus\">
                    </a>
                </div>

            </div>
        </div>



    </div>

{%endblock%}", "SiteInternetBundle::contact.html.twig", "/var/www/html/Salon-modif/src/SiteInternetBundle/Resources/views/contact.html.twig");
    }
}
