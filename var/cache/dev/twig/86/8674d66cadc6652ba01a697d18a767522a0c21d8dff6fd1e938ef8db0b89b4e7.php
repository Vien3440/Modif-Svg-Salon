<?php

/* base.html.twig */
class __TwigTemplate_503775897664e36473d1195e22c868e222ec530b30ff0e6889a14f2bd6bd7b66 extends Twig_Template
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
        $__internal_f93e0eedafb3ee5277460301afa1c9fd50428c6d026fdd6b85d1ab07b61b864b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93e0eedafb3ee5277460301afa1c9fd50428c6d026fdd6b85d1ab07b61b864b->enter($__internal_f93e0eedafb3ee5277460301afa1c9fd50428c6d026fdd6b85d1ab07b61b864b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "  
<body>
    ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "
</body>
</html>";
        
        $__internal_f93e0eedafb3ee5277460301afa1c9fd50428c6d026fdd6b85d1ab07b61b864b->leave($__internal_f93e0eedafb3ee5277460301afa1c9fd50428c6d026fdd6b85d1ab07b61b864b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_85b94ad6c78537852ac8ecf36dbbb9357d6066ae350d0adb43ff7525fd620abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b94ad6c78537852ac8ecf36dbbb9357d6066ae350d0adb43ff7525fd620abe->enter($__internal_85b94ad6c78537852ac8ecf36dbbb9357d6066ae350d0adb43ff7525fd620abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./css/hover-min.css"), "html", null, true);
        echo "\"> 
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./css/main.css"), "html", null, true);
        echo "\"> 
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_85b94ad6c78537852ac8ecf36dbbb9357d6066ae350d0adb43ff7525fd620abe->leave($__internal_85b94ad6c78537852ac8ecf36dbbb9357d6066ae350d0adb43ff7525fd620abe_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_85ac0c767ee21bf9faf63b86c7b1c6512b34610f493401ecf20049eda9c643e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ac0c767ee21bf9faf63b86c7b1c6512b34610f493401ecf20049eda9c643e4->enter($__internal_85ac0c767ee21bf9faf63b86c7b1c6512b34610f493401ecf20049eda9c643e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "L'Eldorado";
        
        $__internal_85ac0c767ee21bf9faf63b86c7b1c6512b34610f493401ecf20049eda9c643e4->leave($__internal_85ac0c767ee21bf9faf63b86c7b1c6512b34610f493401ecf20049eda9c643e4_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa0e96dde048d9cc028b2c45cf9b65e775ac2454af50e91ed222e3af2c2ab591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0e96dde048d9cc028b2c45cf9b65e775ac2454af50e91ed222e3af2c2ab591->enter($__internal_fa0e96dde048d9cc028b2c45cf9b65e775ac2454af50e91ed222e3af2c2ab591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fa0e96dde048d9cc028b2c45cf9b65e775ac2454af50e91ed222e3af2c2ab591->leave($__internal_fa0e96dde048d9cc028b2c45cf9b65e775ac2454af50e91ed222e3af2c2ab591_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_18532b74ebaa0635765f80eb9d168cf2ef59a1555b934bb5332a835401083de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18532b74ebaa0635765f80eb9d168cf2ef59a1555b934bb5332a835401083de8->enter($__internal_18532b74ebaa0635765f80eb9d168cf2ef59a1555b934bb5332a835401083de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "        ";
        $this->displayBlock('nav', $context, $blocks);
        // line 48
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendor/twbs/bootstrap/js/tests/vendor/jquery.min.js"), "html", null, true);
        echo "\"></script> ";
        // line 50
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> ";
        // line 51
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/scriptNav.js"), "html", null, true);
        echo "\"></script>  
    ";
        // line 52
        $this->displayBlock('corp', $context, $blocks);
        echo " ";
        // line 53
        echo "
";
        
        $__internal_18532b74ebaa0635765f80eb9d168cf2ef59a1555b934bb5332a835401083de8->leave($__internal_18532b74ebaa0635765f80eb9d168cf2ef59a1555b934bb5332a835401083de8_prof);

    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        $__internal_1c2547079284bfa80bb81457cd76804922ee91df44008977dc02f7a83cc27e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2547079284bfa80bb81457cd76804922ee91df44008977dc02f7a83cc27e5c->enter($__internal_1c2547079284bfa80bb81457cd76804922ee91df44008977dc02f7a83cc27e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 16
        echo "            ";
        // line 17
        echo "            <nav class=\"nav1 navbar navbar-default navbar-fixed-top\">
                <button type=\"button\" class=\"navbar-toggle icon-bar fa fa-bars\" data-toggle=\"collapse\" id=\"inputResponsive\" data-target=\"#myNavbar\">

                </button>
                <header class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"nav-item hvr-underline-from-left\"><a class=\"nav-link\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salon");
        echo "\">Bar Salon</a></li>
                        <li class=\"nav-item hvr-underline-from-left\"><a class=\"nav-link\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resto");
        echo "\">Restauration</a></li>
                        <li class=\"nav-item hvr-underline-from-left\"><a class=\"nav-link\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conta");
        echo "\">Contact</a></li>
                        ";
        // line 26
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 27
            echo "                            <li class=\"nav-item hvr-underline-from-left\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("loginOut");
            echo "\">Logout</a></li>
                            <br><li class=\"nav-item hvr-underline-from-left\"><a class=\"nav-link\" href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminSalon");
            echo "\">Admin Bar Salon</a></li>
                          ";
            // line 30
            echo "                            <li class=\"nav-item hvr-underline-from-left\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminResto");
            echo "\">Admin Restauration</a></li>
                            ";
        } else {
            // line 32
            echo "                            <li class=\"nav-item hvr-underline-from-left\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login</a></li>
                            ";
        }
        // line 34
        echo "
                    </ul>
                </header>
                ";
        // line 37
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") == false)) {
            // line 38
            echo "                    <ul class=\"contact\">
                        <a class=\"nav-link\" href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><img id=\"logo\" src=\"./../images/logoSimple.png\" alt=\"logo\"></a>
                        <li><span class=\" fa fa-phone\"></span> 0612345678</li>
                        <li><span class=\"fa fa-street-view\"></span>  Rue de la paix</li>
                    </ul>
                ";
        }
        // line 44
        echo "            </nav>


        ";
        
        $__internal_1c2547079284bfa80bb81457cd76804922ee91df44008977dc02f7a83cc27e5c->leave($__internal_1c2547079284bfa80bb81457cd76804922ee91df44008977dc02f7a83cc27e5c_prof);

    }

    // line 52
    public function block_corp($context, array $blocks = array())
    {
        $__internal_29712c604d270ca32e26f40ec4a5730d1b32c391fac658f19d84a0e48d7c4b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29712c604d270ca32e26f40ec4a5730d1b32c391fac658f19d84a0e48d7c4b72->enter($__internal_29712c604d270ca32e26f40ec4a5730d1b32c391fac658f19d84a0e48d7c4b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corp"));

        
        $__internal_29712c604d270ca32e26f40ec4a5730d1b32c391fac658f19d84a0e48d7c4b72->leave($__internal_29712c604d270ca32e26f40ec4a5730d1b32c391fac658f19d84a0e48d7c4b72_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  223 => 52,  213 => 44,  205 => 39,  202 => 38,  200 => 37,  195 => 34,  189 => 32,  183 => 30,  179 => 28,  174 => 27,  172 => 26,  168 => 25,  164 => 24,  160 => 23,  152 => 17,  150 => 16,  144 => 15,  136 => 53,  133 => 52,  128 => 51,  124 => 50,  121 => 49,  118 => 48,  115 => 15,  109 => 14,  98 => 11,  86 => 6,  79 => 11,  75 => 10,  70 => 9,  66 => 8,  63 => 7,  59 => 6,  55 => 4,  49 => 3,  40 => 55,  38 => 14,  34 => 12,  32 => 3,  28 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('./css/hover-min.css')}}\"> 
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
                        <li class=\"nav-item hvr-underline-from-left\"><a class=\"nav-link\" href=\"{{path('salon')}}\">Bar Salon</a></li>
                        <li class=\"nav-item hvr-underline-from-left\"><a class=\"nav-link\" href=\"{{path('resto')}}\">Restauration</a></li>
                        <li class=\"nav-item hvr-underline-from-left\"><a class=\"nav-link\" href=\"{{path('conta')}}\">Contact</a></li>
                        {% if is_granted(\"ROLE_ADMIN\") %}
                            <li class=\"nav-item hvr-underline-from-left\"><a class=\"nav-link\" href=\"{{path('loginOut')}}\">Logout</a></li>
                            <br><li class=\"nav-item hvr-underline-from-left\"><a class=\"nav-link\" href=\"{{path('adminSalon')}}\">Admin Bar Salon</a></li>
                          {#  <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Admin Patisserie</a></li>#}
                            <li class=\"nav-item hvr-underline-from-left\"><a class=\"nav-link\" href=\"{{path('adminResto')}}\">Admin Restauration</a></li>
                            {% else %}
                            <li class=\"nav-item hvr-underline-from-left\"><a class=\"nav-link\" href=\"{{path('login')}}\">Login</a></li>
                            {% endif %}

                    </ul>
                </header>
                {% if is_granted(\"ROLE_ADMIN\") == false %}
                    <ul class=\"contact\">
                        <a class=\"nav-link\" href=\"{{path('home')}}\"><img id=\"logo\" src=\"./../images/logoSimple.png\" alt=\"logo\"></a>
                        <li><span class=\" fa fa-phone\"></span> 0612345678</li>
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
