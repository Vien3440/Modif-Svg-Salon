<?php

/* base.html.twig */
class __TwigTemplate_ec385ce855a2cfd1f05663a100304cd4f8c2836adefd3d8175e37f199e490d15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
            'corp' => array($this, 'block_corp'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3610d5dfa8e425b79550ecebc93445aa04c8f8dc8a9e02a790052ab3cc6fabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3610d5dfa8e425b79550ecebc93445aa04c8f8dc8a9e02a790052ab3cc6fabf->enter($__internal_c3610d5dfa8e425b79550ecebc93445aa04c8f8dc8a9e02a790052ab3cc6fabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "  
<body>
    ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "
</body>
</html>";
        
        $__internal_c3610d5dfa8e425b79550ecebc93445aa04c8f8dc8a9e02a790052ab3cc6fabf->leave($__internal_c3610d5dfa8e425b79550ecebc93445aa04c8f8dc8a9e02a790052ab3cc6fabf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_47704cde0932e82c69f91afdbc4b241fa7e1ae1aba2b5bd154cf0f42bd328eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47704cde0932e82c69f91afdbc4b241fa7e1ae1aba2b5bd154cf0f42bd328eb5->enter($__internal_47704cde0932e82c69f91afdbc4b241fa7e1ae1aba2b5bd154cf0f42bd328eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendor/twbs/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"> ";
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendor/fortawesome/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"> ";
        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./css/main.css"), "html", null, true);
        echo "\"> 
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_47704cde0932e82c69f91afdbc4b241fa7e1ae1aba2b5bd154cf0f42bd328eb5->leave($__internal_47704cde0932e82c69f91afdbc4b241fa7e1ae1aba2b5bd154cf0f42bd328eb5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a524aec654d00dec17dd4623f497ff2f6b1785c703acb5211a2d7270ecb68f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a524aec654d00dec17dd4623f497ff2f6b1785c703acb5211a2d7270ecb68f37->enter($__internal_a524aec654d00dec17dd4623f497ff2f6b1785c703acb5211a2d7270ecb68f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "L'Eldorado Modif";
        
        $__internal_a524aec654d00dec17dd4623f497ff2f6b1785c703acb5211a2d7270ecb68f37->leave($__internal_a524aec654d00dec17dd4623f497ff2f6b1785c703acb5211a2d7270ecb68f37_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_298427fe03ed6121ca4eea56e1e4307f639abcdb31b08156991a5ce2c8c77f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298427fe03ed6121ca4eea56e1e4307f639abcdb31b08156991a5ce2c8c77f61->enter($__internal_298427fe03ed6121ca4eea56e1e4307f639abcdb31b08156991a5ce2c8c77f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_298427fe03ed6121ca4eea56e1e4307f639abcdb31b08156991a5ce2c8c77f61->leave($__internal_298427fe03ed6121ca4eea56e1e4307f639abcdb31b08156991a5ce2c8c77f61_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ce228c2dd948efc202837c0206ad6b388266b7cb56c458488d1c58a3e456d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce228c2dd948efc202837c0206ad6b388266b7cb56c458488d1c58a3e456d82->enter($__internal_6ce228c2dd948efc202837c0206ad6b388266b7cb56c458488d1c58a3e456d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "        ";
        $this->displayBlock('nav', $context, $blocks);
        // line 47
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendor/twbs/bootstrap/js/tests/vendor/jquery.min.js"), "html", null, true);
        echo "\"></script> ";
        // line 49
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> ";
        // line 50
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/scriptNav.js"), "html", null, true);
        echo "\"></script>  
    ";
        // line 51
        $this->displayBlock('corp', $context, $blocks);
        echo " ";
        // line 52
        echo "
";
        
        $__internal_6ce228c2dd948efc202837c0206ad6b388266b7cb56c458488d1c58a3e456d82->leave($__internal_6ce228c2dd948efc202837c0206ad6b388266b7cb56c458488d1c58a3e456d82_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_c3d033e0a28ed07b7b3f8163c2cb20f83a5feff1dfad62a57a9115712a4160d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d033e0a28ed07b7b3f8163c2cb20f83a5feff1dfad62a57a9115712a4160d2->enter($__internal_c3d033e0a28ed07b7b3f8163c2cb20f83a5feff1dfad62a57a9115712a4160d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 15
        echo "            ";
        // line 16
        echo "            <nav class=\"nav1 navbar navbar-default navbar-fixed-top\">
                <button type=\"button\" class=\"navbar-toggle icon-bar fa fa-bars\" data-toggle=\"collapse\" id=\"inputResponsive\" data-target=\"#myNavbar\">

                </button>
                <header class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salon");
        echo "\">Bar Salon</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resto");
        echo "\">Restauration</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conta");
        echo "\">Contact</a></li>
                        ";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("loginOut");
            echo "\">Logout</a></li>
                            <br><li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminSalon");
            echo "\">Admin Bar Salon</a></li>
                          ";
            // line 29
            echo "                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminResto");
            echo "\">Admin Restauration</a></li>
                            ";
        } else {
            // line 31
            echo "                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login</a></li>
                            ";
        }
        // line 33
        echo "
                    </ul>
                </header>
                ";
        // line 36
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") == false)) {
            // line 37
            echo "                    <ul class=\"contact\">
                        <a class=\"nav-link\" href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><img id=\"logo\" src=\"./../images/large_fun-in-the-sun-title.png\" alt=\"logo\"></a>
                        <li><span class=\"fa fa-phone\"></span> 0612345678</li>
                        <li><span class=\"fa fa-street-view\"></span>  Rue de la paix</li>
                    </ul>
                ";
        }
        // line 43
        echo "            </nav>


        ";
        
        $__internal_c3d033e0a28ed07b7b3f8163c2cb20f83a5feff1dfad62a57a9115712a4160d2->leave($__internal_c3d033e0a28ed07b7b3f8163c2cb20f83a5feff1dfad62a57a9115712a4160d2_prof);

    }

    // line 51
    public function block_corp($context, array $blocks = array())
    {
        $__internal_59b6ac8bd960c599bc22b9a5f04d7cbd0cf1ee039c867c14b408c3af638a000b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b6ac8bd960c599bc22b9a5f04d7cbd0cf1ee039c867c14b408c3af638a000b->enter($__internal_59b6ac8bd960c599bc22b9a5f04d7cbd0cf1ee039c867c14b408c3af638a000b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        
        $__internal_59b6ac8bd960c599bc22b9a5f04d7cbd0cf1ee039c867c14b408c3af638a000b->leave($__internal_59b6ac8bd960c599bc22b9a5f04d7cbd0cf1ee039c867c14b408c3af638a000b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  219 => 51,  209 => 43,  201 => 38,  198 => 37,  196 => 36,  191 => 33,  185 => 31,  179 => 29,  175 => 27,  170 => 26,  168 => 25,  164 => 24,  160 => 23,  156 => 22,  148 => 16,  146 => 15,  140 => 14,  132 => 52,  129 => 51,  124 => 50,  120 => 49,  117 => 48,  114 => 47,  111 => 14,  105 => 13,  94 => 10,  82 => 6,  75 => 10,  70 => 9,  66 => 8,  63 => 7,  59 => 6,  55 => 4,  49 => 3,  40 => 54,  38 => 13,  34 => 11,  32 => 3,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    {% block head %}
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">
        <title>{% block title %}L'Eldorado Modif{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"{{ asset('../vendor/twbs/bootstrap/dist/css/bootstrap.min.css')}}\"> {# Import Bootstrap(Composeur#}
        <link rel=\"stylesheet\" href=\"{{ asset('../vendor/fortawesome/font-awesome/css/font-awesome.min.css')}}\"> {# Import Font-Awesome(Composeur#}
        <link rel=\"stylesheet\" href=\"{{ asset('./css/main.css')}}\"> 
    {% block stylesheets %}{% endblock %}
{% endblock %}  
<body>
    {% block body %}
        {% block nav %}
            {# Nav bar par default #}
            <nav class=\"nav1 navbar navbar-default navbar-fixed-top\">
                <button type=\"button\" class=\"navbar-toggle icon-bar fa fa-bars\" data-toggle=\"collapse\" id=\"inputResponsive\" data-target=\"#myNavbar\">

                </button>
                <header class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('salon')}}\">Bar Salon</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('resto')}}\">Restauration</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('conta')}}\">Contact</a></li>
                        {% if is_granted(\"ROLE_ADMIN\") %}
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('loginOut')}}\">Logout</a></li>
                            <br><li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('adminSalon')}}\">Admin Bar Salon</a></li>
                          {#  <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Admin Patisserie</a></li>#}
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('adminResto')}}\">Admin Restauration</a></li>
                            {% else %}
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('login')}}\">Login</a></li>
                            {% endif %}

                    </ul>
                </header>
                {% if is_granted(\"ROLE_ADMIN\") == false %}
                    <ul class=\"contact\">
                        <a class=\"nav-link\" href=\"{{path('home')}}\"><img id=\"logo\" src=\"./../images/large_fun-in-the-sun-title.png\" alt=\"logo\"></a>
                        <li><span class=\"fa fa-phone\"></span> 0612345678</li>
                        <li><span class=\"fa fa-street-view\"></span>  Rue de la paix</li>
                    </ul>
                {% endif %}
            </nav>


        {% endblock %}

        <script type=\"text/javascript\" src=\"{{asset('../vendor/twbs/bootstrap/js/tests/vendor/jquery.min.js')}}\"></script> {# Import jquery(Composeur#}
        <script type=\"text/javascript\" src=\"{{asset('../vendor/twbs/bootstrap/dist/js/bootstrap.min.js')}}\"></script> {# Import BootstrapJs(Composeur#}
        <script type=\"text/javascript\" src=\"{{asset('./js/scriptNav.js')}}\"></script>  
    {% block corp %}{% endblock %} {# Contenue changent  #}

{% endblock %}

</body>
</html>", "base.html.twig", "/var/www/html/Salon-modif/app/Resources/views/base.html.twig");
    }
}
