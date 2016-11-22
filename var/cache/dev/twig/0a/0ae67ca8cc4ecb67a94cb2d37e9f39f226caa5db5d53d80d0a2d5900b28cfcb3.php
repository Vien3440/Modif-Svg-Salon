<?php

/* base.html.twig */
class __TwigTemplate_726f8d0a4ec3b0b3d216b16dc031b38b9f1d88f04fa8841f259f8c5b6b5d1b39 extends Twig_Template
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
        $__internal_d891c65a4d19aa709633f84d7edf128094b79e0306a8d91274e260b843d084a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d891c65a4d19aa709633f84d7edf128094b79e0306a8d91274e260b843d084a2->enter($__internal_d891c65a4d19aa709633f84d7edf128094b79e0306a8d91274e260b843d084a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d891c65a4d19aa709633f84d7edf128094b79e0306a8d91274e260b843d084a2->leave($__internal_d891c65a4d19aa709633f84d7edf128094b79e0306a8d91274e260b843d084a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14f3714499fea1b29d9ce5d799d1b2ead5669f6cf26155625c47045a604c9f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f3714499fea1b29d9ce5d799d1b2ead5669f6cf26155625c47045a604c9f5a->enter($__internal_14f3714499fea1b29d9ce5d799d1b2ead5669f6cf26155625c47045a604c9f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_14f3714499fea1b29d9ce5d799d1b2ead5669f6cf26155625c47045a604c9f5a->leave($__internal_14f3714499fea1b29d9ce5d799d1b2ead5669f6cf26155625c47045a604c9f5a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_effd03ecb984fcc4266aa5c37705eb4e7f11806c7f7680b8ae5534c93aeb01a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effd03ecb984fcc4266aa5c37705eb4e7f11806c7f7680b8ae5534c93aeb01a3->enter($__internal_effd03ecb984fcc4266aa5c37705eb4e7f11806c7f7680b8ae5534c93aeb01a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "L'Eldorado";
        
        $__internal_effd03ecb984fcc4266aa5c37705eb4e7f11806c7f7680b8ae5534c93aeb01a3->leave($__internal_effd03ecb984fcc4266aa5c37705eb4e7f11806c7f7680b8ae5534c93aeb01a3_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e942c8e6f4633c520a3876e71b9e938da690fc2fb66f6cafd1cef7a4defb0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e942c8e6f4633c520a3876e71b9e938da690fc2fb66f6cafd1cef7a4defb0a9->enter($__internal_4e942c8e6f4633c520a3876e71b9e938da690fc2fb66f6cafd1cef7a4defb0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4e942c8e6f4633c520a3876e71b9e938da690fc2fb66f6cafd1cef7a4defb0a9->leave($__internal_4e942c8e6f4633c520a3876e71b9e938da690fc2fb66f6cafd1cef7a4defb0a9_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f98b64130870824775b4e010d622bcbde83939a1d77d50451604fe889766895c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98b64130870824775b4e010d622bcbde83939a1d77d50451604fe889766895c->enter($__internal_f98b64130870824775b4e010d622bcbde83939a1d77d50451604fe889766895c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f98b64130870824775b4e010d622bcbde83939a1d77d50451604fe889766895c->leave($__internal_f98b64130870824775b4e010d622bcbde83939a1d77d50451604fe889766895c_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_38af2db6fa451a279d69795c3ba9781a8d948c3c47368319ea1e55069053834a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38af2db6fa451a279d69795c3ba9781a8d948c3c47368319ea1e55069053834a->enter($__internal_38af2db6fa451a279d69795c3ba9781a8d948c3c47368319ea1e55069053834a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_38af2db6fa451a279d69795c3ba9781a8d948c3c47368319ea1e55069053834a->leave($__internal_38af2db6fa451a279d69795c3ba9781a8d948c3c47368319ea1e55069053834a_prof);

    }

    // line 51
    public function block_corp($context, array $blocks = array())
    {
        $__internal_3a4b4be78c311c28168142d153bfd37adec97dee9134cadad96bf83d208fe6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4b4be78c311c28168142d153bfd37adec97dee9134cadad96bf83d208fe6ce->enter($__internal_3a4b4be78c311c28168142d153bfd37adec97dee9134cadad96bf83d208fe6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        
        $__internal_3a4b4be78c311c28168142d153bfd37adec97dee9134cadad96bf83d208fe6ce->leave($__internal_3a4b4be78c311c28168142d153bfd37adec97dee9134cadad96bf83d208fe6ce_prof);

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
        <title>{% block title %}L'Eldorado{% endblock %}</title>
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
</html>", "base.html.twig", "/var/www/html/Salon_De_Th-_Dynamic-master/app/Resources/views/base.html.twig");
    }
}
