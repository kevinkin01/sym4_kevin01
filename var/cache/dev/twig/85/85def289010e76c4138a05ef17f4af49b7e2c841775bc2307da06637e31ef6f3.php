<?php

/* public/one_section.html.twig */
class __TwigTemplate_d2fb6b2e7c10faea66f0fd3a78a6e23c9f8d9ce5c3882c63891df42ef886f8a7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "public/one_section.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'stitre' => array($this, 'block_stitre'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/one_section.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/one_section.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new Twig_Error_Runtime('Variable "styles" does not exist.', 2, $this->source); })()), "getLestyles", array()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_titre($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $this->displayParentBlock("titre", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new Twig_Error_Runtime('Variable "styles" does not exist.', 4, $this->source); })()), "getLestyles", array()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stitre($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stitre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stitre"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new Twig_Error_Runtime('Variable "styles" does not exist.', 5, $this->source); })()), "getLadescription", array()), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 8
        echo "    <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Accueil
                <span class=\"sr-only\">(current)</span>
            </a>
        </li>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new Twig_Error_Runtime('Variable "styles" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["itemMenu"]) {
            // line 15
            echo "            ";
            // line 16
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["itemMenu"], "getIdstyles", array()) == twig_get_attribute($this->env, $this->source, (isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new Twig_Error_Runtime('Variable "styles" does not exist.', 16, $this->source); })()), "getIdstyles", array()))) {
                // line 17
                echo "                ";
                // line 18
                echo "                ";
                $context["forActive"] = "active";
                // line 19
                echo "            ";
            } else {
                // line 20
                echo "                ";
                $context["forActive"] = "";
                // line 21
                echo "            ";
            }
            // line 22
            echo "            <li class=\"nav-item ";
            echo twig_escape_filter($this->env, (isset($context["forActive"]) || array_key_exists("forActive", $context) ? $context["forActive"] : (function () { throw new Twig_Error_Runtime('Variable "forActive" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\">
                <a class=\"nav-link\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_section", array("id" => twig_get_attribute($this->env, $this->source, $context["itemMenu"], "getIdstyles", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itemMenu"], "getLestyles", array()), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemMenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        <!--<li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_index");
        echo "\">Admin</a></li>-->
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 31
        echo "    ";
        if (twig_test_empty((isset($context["lespots"]) || array_key_exists("lespots", $context) ? $context["lespots"] : (function () { throw new Twig_Error_Runtime('Variable "lespots" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "        <h3><small>Il n'y a pas encore d'article dans cette rubrique</small> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            echo "\">Retour à l'accueil</a></h3><hr>
    ";
        }
        // line 34
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesports"]) || array_key_exists("lesports", $context) ? $context["lesports"] : (function () { throw new Twig_Error_Runtime('Variable "lesports" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "        <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getLetitres", array()), "html", null, true);
            echo "</h2>
        <h3>
            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "getStylesstyles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["categ"]) {
                // line 38
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_section", array("id" => twig_get_attribute($this->env, $this->source, $context["categ"], "getIdstyles", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categ"], "getLestyles", array()), "html", null, true);
                echo "</a> |
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categ'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        </h3>
        <p>";
            // line 41
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getThetext", array()), 350, true), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_article", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "getIdlesports", array()))), "html", null, true);
            echo "\">Lire la suite</a></p>
        <h4>Par ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getLauteurlauteur", array()), "getLenomcomplet", array()), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getLadate", array()), "d/m/Y à H \\h i \\m"), "html", null, true);
            echo "</h4><hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/one_section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 42,  227 => 41,  224 => 40,  213 => 38,  209 => 37,  203 => 35,  198 => 34,  192 => 32,  189 => 31,  180 => 30,  166 => 26,  155 => 23,  150 => 22,  147 => 21,  144 => 20,  141 => 19,  138 => 18,  136 => 17,  133 => 16,  131 => 15,  127 => 14,  120 => 10,  116 => 8,  107 => 7,  88 => 5,  68 => 4,  48 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}
{% block title %}{{ parent() }} - {{ styles.getLestyles }}{% endblock %}

{% block titre %}{{ parent() }} - {{ styles.getLestyles }}{% endblock %}
{% block stitre %}{{ styles.getLadescription }} {% endblock %}

{% block menu %}
    <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path(\"accueil\") }}\">Accueil
                <span class=\"sr-only\">(current)</span>
            </a>
        </li>
        {% for itemMenu in styles %}
            {# if current section is selected on this loops'turn #}
            {% if(itemMenu.getIdstyles == styles.getIdstyles) %}
                {# create forActive Twig's local variable#}
                {% set forActive = \"active\" %}
            {% else %}
                {% set forActive = \"\" %}
            {% endif %}
            <li class=\"nav-item {{ forActive }}\">
                <a class=\"nav-link\" href=\"{{ path(\"detail_section\",{'id':itemMenu.getIdstyles}) }}\">{{ itemMenu.getLestyles }}</a>
            </li>
        {% endfor %}
        <!--<li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ path('articles_index')}}\">Admin</a></li>-->
    </ul>
{% endblock %}

{% block contenu %}
    {% if lespots is empty %}
        <h3><small>Il n'y a pas encore d'article dans cette rubrique</small> <a href=\"{{ path(\"accueil\") }}\">Retour à l'accueil</a></h3><hr>
    {% endif %}
    {% for item in lesports %}
        <h2>{{ item.getLetitres }}</h2>
        <h3>
            {% for categ in item.getStylesstyles %}
                <a href=\"{{ path(\"detail_section\",{\"id\":categ.getIdstyles}) }}\">{{ categ.getLestyles }}</a> |
            {% endfor %}
        </h3>
        <p>{{ item.getThetext|truncate(350,true) }} <a href=\"{{ path(\"detail_article\",{'id': item.getIdlesports}) }}\">Lire la suite</a></p>
        <h4>Par {{ item.getLauteurlauteur.getLenomcomplet }} le {{ item.getLadate|date(\"d/m/Y à H \\\\h i \\\\m\") }}</h4><hr>
    {% endfor %}
{% endblock %}

", "public/one_section.html.twig", "C:\\cf2m\\sym4_kevin\\templates\\public\\one_section.html.twig");
    }
}
