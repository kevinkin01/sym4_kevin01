<?php

/* template.html.twig */
class __TwigTemplate_837b675d21efca5bbf01c0d02f874922b613d19f68d0b6a1e63d144d902c77a7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("public/base.html.twig", "template.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'entete' => array($this, 'block_entete'),
            'menu' => array($this, 'block_menu'),
            'entete_bas' => array($this, 'block_entete_bas'),
            'accueil' => array($this, 'block_accueil'),
            'content' => array($this, 'block_content'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "public/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <body id=\"page-top\">

    ";
        // line 6
        $this->displayBlock('entete', $context, $blocks);
        // line 36
        echo "    ";
        $this->displayBlock('accueil', $context, $blocks);
        // line 51
        echo "


    ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "    <section id=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h2 class=\"section-heading\">Contact !</h2>

                    <p class=\"mb-5\"></p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 ml-auto text-center\">
                    <i class=\"fas fa-phone fa-3x mb-3 sr-contact-1\"></i>
                    <p>02/456.35.95</p>
                </div>
                <div class=\"col-lg-4 mr-auto text-center\">
                    <i class=\"fas fa-envelope fa-3x mb-3 sr-contact-2\"></i>
                    <p>
                        <a href=\"mailto:your-email@your-domain.com\">kevinkinanga41@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_entete($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 7
        echo "    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
        <div class=\"container\">
            <a class=\"navbar-brand js-scroll-trigger\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">les sport de combats</a>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            ";
        // line 13
        $this->displayBlock('menu', $context, $blocks);
        // line 30
        echo "              ";
        $this->displayBlock('entete_bas', $context, $blocks);
        // line 35
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 14
        echo "            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"#about\">About</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"#services\">Services</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"#portfolio\">Portfolio</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"#contact\">Contact</a>
                    </li>
                </ul>
             ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_entete_bas($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete_bas"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete_bas"));

        // line 31
        echo "            </div>
        </div>
    </nav>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        // line 37
        echo "    <header class=\"masthead text-center text-white d-flex\">
        <div class=\"container my-auto\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <h1 class=\"text-uppercase\">
                        <strong>Bienvenue !</strong>
                    </h1>

                </div>

            </div>
        </div>
    </header>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 55
        echo "    <section class=\"bg-dark text-white\">
        <div class=\"container text-center\">
            <h2 class=\"mb-4\">";
        // line 57
        $this->displayBlock('contenu', $context, $blocks);
        echo "</h2>
        </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 57,  240 => 55,  231 => 54,  208 => 37,  199 => 36,  186 => 31,  177 => 30,  152 => 14,  143 => 13,  133 => 35,  130 => 30,  128 => 13,  121 => 9,  117 => 7,  108 => 6,  75 => 61,  73 => 54,  68 => 51,  65 => 36,  63 => 6,  59 => 4,  50 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'public/base.html.twig' %}

{% block body %}
    <body id=\"page-top\">

    {% block entete %}
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
        <div class=\"container\">
            <a class=\"navbar-brand js-scroll-trigger\" href=\"{{ path(\"accueil\") }}\">les sport de combats</a>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            {% block menu %}
            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"#about\">About</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"#services\">Services</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"#portfolio\">Portfolio</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"#contact\">Contact</a>
                    </li>
                </ul>
             {% endblock %}
              {% block entete_bas %}
            </div>
        </div>
    </nav>
                {% endblock %}
    {% endblock %}
    {% block accueil %}
    <header class=\"masthead text-center text-white d-flex\">
        <div class=\"container my-auto\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto\">
                    <h1 class=\"text-uppercase\">
                        <strong>Bienvenue !</strong>
                    </h1>

                </div>

            </div>
        </div>
    </header>
    {% endblock %}



    {% block content %}
    <section class=\"bg-dark text-white\">
        <div class=\"container text-center\">
            <h2 class=\"mb-4\">{% block contenu %}{% endblock %}</h2>
        </div>
    </section>
    {% endblock %}
    <section id=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h2 class=\"section-heading\">Contact !</h2>

                    <p class=\"mb-5\"></p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 ml-auto text-center\">
                    <i class=\"fas fa-phone fa-3x mb-3 sr-contact-1\"></i>
                    <p>02/456.35.95</p>
                </div>
                <div class=\"col-lg-4 mr-auto text-center\">
                    <i class=\"fas fa-envelope fa-3x mb-3 sr-contact-2\"></i>
                    <p>
                        <a href=\"mailto:your-email@your-domain.com\">kevinkinanga41@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "template.html.twig", "C:\\cf2m\\sym4_kevin\\templates\\template.html.twig");
    }
}
