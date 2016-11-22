<?php

/* AdminBundle::adminLogin.html.twig */
class __TwigTemplate_b19beebb44ec6ef7d7695ef61c053eaa0aa38e1279e155e8da911834c55c86be extends Twig_Template
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
        $__internal_d2066f9ba1e9fc5db71d71f8be823ac37d4ddfcc0002191a1d8ab898bc0e2d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2066f9ba1e9fc5db71d71f8be823ac37d4ddfcc0002191a1d8ab898bc0e2d72->enter($__internal_d2066f9ba1e9fc5db71d71f8be823ac37d4ddfcc0002191a1d8ab898bc0e2d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::adminLogin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2066f9ba1e9fc5db71d71f8be823ac37d4ddfcc0002191a1d8ab898bc0e2d72->leave($__internal_d2066f9ba1e9fc5db71d71f8be823ac37d4ddfcc0002191a1d8ab898bc0e2d72_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bfe73de0821d4116f7fbed27a996aa6cf6ecf32da0d4d0c1194477050af5913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bfe73de0821d4116f7fbed27a996aa6cf6ecf32da0d4d0c1194477050af5913->enter($__internal_1bfe73de0821d4116f7fbed27a996aa6cf6ecf32da0d4d0c1194477050af5913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        
        $__internal_1bfe73de0821d4116f7fbed27a996aa6cf6ecf32da0d4d0c1194477050af5913->leave($__internal_1bfe73de0821d4116f7fbed27a996aa6cf6ecf32da0d4d0c1194477050af5913_prof);

    }

    // line 5
    public function block_corp($context, array $blocks = array())
    {
        $__internal_4237cad65ad5d8a2ef1faa065a042e81154e2b915f33f31612a1a79dfda1fb4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4237cad65ad5d8a2ef1faa065a042e81154e2b915f33f31612a1a79dfda1fb4b->enter($__internal_4237cad65ad5d8a2ef1faa065a042e81154e2b915f33f31612a1a79dfda1fb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

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
        
        $__internal_4237cad65ad5d8a2ef1faa065a042e81154e2b915f33f31612a1a79dfda1fb4b->leave($__internal_4237cad65ad5d8a2ef1faa065a042e81154e2b915f33f31612a1a79dfda1fb4b_prof);

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
", "AdminBundle::adminLogin.html.twig", "/var/www/html/Salon-modif/src/AdminBundle/Resources/views/adminLogin.html.twig");
    }
}
