<?php

/* AdminBundle::adminLogin.html.twig */
class __TwigTemplate_ed41c0ffceae306770628bef549bca553e7aff7884a4f5e9083e6f3c52e7ffbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle::adminLogin.html.twig", 1);
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
        $__internal_901c268cd0412e459b2798f08a57a0b6930f813c60ad2f61e7db6074976d25d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901c268cd0412e459b2798f08a57a0b6930f813c60ad2f61e7db6074976d25d0->enter($__internal_901c268cd0412e459b2798f08a57a0b6930f813c60ad2f61e7db6074976d25d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::adminLogin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_901c268cd0412e459b2798f08a57a0b6930f813c60ad2f61e7db6074976d25d0->leave($__internal_901c268cd0412e459b2798f08a57a0b6930f813c60ad2f61e7db6074976d25d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5411900b4cbba689703db6eec084bf6e63d539f48fa8b327544b2b9d6b077ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5411900b4cbba689703db6eec084bf6e63d539f48fa8b327544b2b9d6b077ac->enter($__internal_d5411900b4cbba689703db6eec084bf6e63d539f48fa8b327544b2b9d6b077ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_d5411900b4cbba689703db6eec084bf6e63d539f48fa8b327544b2b9d6b077ac->leave($__internal_d5411900b4cbba689703db6eec084bf6e63d539f48fa8b327544b2b9d6b077ac_prof);

    }

    // line 5
    public function block_corp($context, array $blocks = array())
    {
        $__internal_a648e7ade3b3814d7811966d2f64d7d6c4c3fdfcfda9a9f0f0add25c1d58a6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a648e7ade3b3814d7811966d2f64d7d6c4c3fdfcfda9a9f0f0add25c1d58a6ac->enter($__internal_a648e7ade3b3814d7811966d2f64d7d6c4c3fdfcfda9a9f0f0add25c1d58a6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        // line 6
        echo "
    ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "
        
    ";
        } else {
            // line 11
            echo "    
        
        <div class=\"login\">
  <div class=\"login-triangle\"></div>
  
  <h2 class=\"login-header\">Bienvenue</h2>   
            <form action=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("loginCheck");
            echo "\" method=\"post\">
                <input type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Nom d'utilisateur\" value=\"\"/>
                <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\" value=\"\"/>
                <input type=\"submit\" value=\"se connecter\"/>
            </form>
        </div>
       
    
            ";
        }
        
        $__internal_a648e7ade3b3814d7811966d2f64d7d6c4c3fdfcfda9a9f0f0add25c1d58a6ac->leave($__internal_a648e7ade3b3814d7811966d2f64d7d6c4c3fdfcfda9a9f0f0add25c1d58a6ac_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::adminLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  63 => 11,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

    {% if is_granted(\"ROLE_ADMIN\") %}

        
    {% else %}
    
        
        <div class=\"login\">
  <div class=\"login-triangle\"></div>
  
  <h2 class=\"login-header\">Bienvenue</h2>   
            <form action=\"{{path('loginCheck')}}\" method=\"post\">
                <input type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Nom d'utilisateur\" value=\"\"/>
                <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\" value=\"\"/>
                <input type=\"submit\" value=\"se connecter\"/>
            </form>
        </div>
       
    
            {% endif %}
{% endblock %}
", "AdminBundle::adminLogin.html.twig", "/var/www/html/Salon_De_Th-_Dynamic-master/src/AdminBundle/Resources/views/adminLogin.html.twig");
    }
}
