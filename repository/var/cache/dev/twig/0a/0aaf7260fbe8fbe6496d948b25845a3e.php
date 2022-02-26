<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* shop.html.twig */
class __TwigTemplate_4a911bb08440fd757e6a734390350739 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "shop.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<style>
    .pagination {
        justify-content: center;
    }

    .pagination > span {
        padding: 10px;
        background: #d5d3d3;
        margin: 14px;
    }

    .pagination > span.current {
        border: 1px solid;
    }

    .pagination > span > a {
        color: black;
        text-decoration: none;
    }

</style>

<div style=\"margin-top: 50px;\" class=\"container\">
    ";
        // line 31
        echo "

    <div style=\"margin-top: 100px; width: 80%; margin-bottom: 30px\" class=\"mx-auto\">
        <div style=\"text-align: center; margin-bottom: 50px\">
            <h3>Boutique</h3>
            ";
        // line 36
        if (((array_key_exists("search", $context)) ? (_twig_default_filter((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 36, $this->source); })()))) : (""))) {
            // line 37
            echo "            <p>Recherche les articles contenant : ";
            echo twig_escape_filter($this->env, (isset($context["string"]) || array_key_exists("string", $context) ? $context["string"] : (function () { throw new RuntimeError('Variable "string" does not exist.', 37, $this->source); })()), "html", null, true);
            echo " </p>
            ";
        }
        // line 39
        echo "        </div>
        <div class=\"row\">
            ";
        // line 41
        if (((array_key_exists("search", $context)) ? (_twig_default_filter((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 41, $this->source); })()))) : (""))) {
            // line 42
            echo "            <div class=\"mb-4\">
                <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
            echo "\">Retour à la boutique</a>
            </div>
            ";
        }
        // line 46
        echo "
            <form method=\"GET\" action=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche.categorie", ["name" => (isset($context["string"]) || array_key_exists("string", $context) ? $context["string"] : (function () { throw new RuntimeError('Variable "string" does not exist.', 47, $this->source); })())]), "html", null, true);
        echo "\">

            <div style=\"display: flex\">
            ";
        // line 50
        if (((isset($context["string"]) || array_key_exists("string", $context) ? $context["string"] : (function () { throw new RuntimeError('Variable "string" does not exist.', 50, $this->source); })()) == "Tee Shirt")) {
            // line 51
            echo "                ";
            $context["tailles"] = [0 => "XS", 1 => "S", 2 => "M", 3 => "L", 4 => "XL"];
            // line 52
            echo "            ";
        } else {
            // line 53
            echo "                ";
            $context["tailles"] = [0 => "38", 1 => "39", 2 => "40", 3 => "41", 4 => "42", 5 => "43", 6 => "44", 7 => "45", 8 => "46"];
            // line 54
            echo "            ";
        }
        echo "   

            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tailles"]) || array_key_exists("tailles", $context) ? $context["tailles"] : (function () { throw new RuntimeError('Variable "tailles" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["taille"]) {
            // line 57
            echo "            <div style=\"max-width: 100px\" class=\"input-group mb-3\">
                <div class=\"input-group-text\">
                    <label style=\"margin-right: 10px\">";
            // line 59
            echo twig_escape_filter($this->env, $context["taille"], "html", null, true);
            echo "</label>

                    <input name=\"tailles[]\" class=\"form-check-input mt-0\" type=\"checkbox\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $context["taille"], "html", null, true);
            echo "\" aria-label=\"Checkbox for following text input\">
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taille'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
            <div style=\"max-width: 100px\" class=\"input-group mb-3\">
                <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
            </div>         
            </div>
            </form>


            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 74
            echo "            ";
            if (((((array_key_exists("tailles_filter", $context)) ? (_twig_default_filter((isset($context["tailles_filter"]) || array_key_exists("tailles_filter", $context) ? $context["tailles_filter"] : (function () { throw new RuntimeError('Variable "tailles_filter" does not exist.', 74, $this->source); })()))) : ("")) && (twig_length_filter($this->env, twig_array_filter($this->env, (isset($context["tailles_filter"]) || array_key_exists("tailles_filter", $context) ? $context["tailles_filter"] : (function () { throw new RuntimeError('Variable "tailles_filter" does not exist.', 74, $this->source); })()), function ($__taille__) use ($context, $macros) { $context["taille"] = $__taille__; return twig_in_filter((isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () { throw new RuntimeError('Variable "taille" does not exist.', 74, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["product"], "getTailles", [], "any", false, false, false, 74)); })) > 0)) ||  !((array_key_exists("tailles_filter", $context)) ? (_twig_default_filter((isset($context["tailles_filter"]) || array_key_exists("tailles_filter", $context) ? $context["tailles_filter"] : (function () { throw new RuntimeError('Variable "tailles_filter" does not exist.', 74, $this->source); })()))) : ("")))) {
                // line 75
                echo "            <div class=\"col-4 mb-4\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <img class=\"card-img-top\" src=\"";
                // line 77
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "any", false, false, false, 77)), "html", null, true);
                echo "\" alt=\"Card image cap\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 79), "html", null, true);
                echo "</h5>
                        <p class=\"card-text\">";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "method", false, false, false, 80), "html", null, true);
                echo "</p>
                        <p class=\"card-text\">";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 81), "html", null, true);
                echo " €</p>
                        <div style=\"display: grid\">
                        <span class=\"mb-2\">
                            Tailles : ";
                // line 84
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["product"], "getTailles", [], "any", false, false, false, 84), ", "), "html", null, true);
                echo "
                        </span>
                        <span>
                            ";
                // line 87
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["product"], "getKeyWords", [], "any", false, false, false, 87), ", "), "html", null, true);
                echo "
                        </span>                        
                        </div>

                    </div>
                </div>
            </div>
            ";
            }
            // line 95
            echo "

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
        </div>
        ";
        // line 100
        if ( !((array_key_exists("tailles_filter", $context)) ? (_twig_default_filter((isset($context["tailles_filter"]) || array_key_exists("tailles_filter", $context) ? $context["tailles_filter"] : (function () { throw new RuntimeError('Variable "tailles_filter" does not exist.', 100, $this->source); })()))) : (""))) {
            // line 101
            echo "        ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 101, $this->source); })()));
            echo "
        ";
        }
        // line 103
        echo "    </div>


</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 103,  235 => 101,  233 => 100,  229 => 98,  221 => 95,  210 => 87,  204 => 84,  198 => 81,  194 => 80,  190 => 79,  185 => 77,  181 => 75,  178 => 74,  174 => 73,  164 => 65,  154 => 61,  149 => 59,  145 => 57,  141 => 56,  135 => 54,  132 => 53,  129 => 52,  126 => 51,  124 => 50,  118 => 47,  115 => 46,  109 => 43,  106 => 42,  104 => 41,  100 => 39,  94 => 37,  92 => 36,  85 => 31,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<style>
    .pagination {
        justify-content: center;
    }

    .pagination > span {
        padding: 10px;
        background: #d5d3d3;
        margin: 14px;
    }

    .pagination > span.current {
        border: 1px solid;
    }

    .pagination > span > a {
        color: black;
        text-decoration: none;
    }

</style>

<div style=\"margin-top: 50px;\" class=\"container\">
    {# <div style=\"text-align: center;\">
        <h2>Bienvenue</h2>
    </div> #}


    <div style=\"margin-top: 100px; width: 80%; margin-bottom: 30px\" class=\"mx-auto\">
        <div style=\"text-align: center; margin-bottom: 50px\">
            <h3>Boutique</h3>
            {% if (search|default) %}
            <p>Recherche les articles contenant : {{ string }} </p>
            {% endif %}
        </div>
        <div class=\"row\">
            {% if (search|default) %}
            <div class=\"mb-4\">
                <a href=\"{{ path('shop') }}\">Retour à la boutique</a>
            </div>
            {% endif %}

            <form method=\"GET\" action=\"{{ path('recherche.categorie', {name: string}) }}\">

            <div style=\"display: flex\">
            {% if string == \"Tee Shirt\" %}
                {% set tailles = ['XS', 'S', 'M', 'L' ,'XL'] %}
            {% else %}
                {% set tailles = ['38', '39', '40', '41', '42', '43', '44', '45', '46'] %}
            {% endif %}   

            {% for taille in tailles %}
            <div style=\"max-width: 100px\" class=\"input-group mb-3\">
                <div class=\"input-group-text\">
                    <label style=\"margin-right: 10px\">{{ taille }}</label>

                    <input name=\"tailles[]\" class=\"form-check-input mt-0\" type=\"checkbox\" value=\"{{ taille }}\" aria-label=\"Checkbox for following text input\">
                </div>
            </div>
            {% endfor %}

            <div style=\"max-width: 100px\" class=\"input-group mb-3\">
                <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
            </div>         
            </div>
            </form>


            {% for product in products %}
            {% if  tailles_filter|default and tailles_filter |filter((taille) => taille in product.getTailles) | length > 0 or not tailles_filter|default %}
            <div class=\"col-4 mb-4\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <img class=\"card-img-top\" src=\"{{ asset('uploads/') ~ product.getImage }}\" alt=\"Card image cap\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ product.getTitle() }}</h5>
                        <p class=\"card-text\">{{ product.getDescription() }}</p>
                        <p class=\"card-text\">{{ product.getPrice() }} €</p>
                        <div style=\"display: grid\">
                        <span class=\"mb-2\">
                            Tailles : {{ product.getTailles|join(', ') }}
                        </span>
                        <span>
                            {{ product.getKeyWords|join(', ') }}
                        </span>                        
                        </div>

                    </div>
                </div>
            </div>
            {% endif %}


            {% endfor %}

        </div>
        {% if not tailles_filter|default %}
        {{ knp_pagination_render(products) }}
        {% endif %}
    </div>


</div>

{% endblock %}", "shop.html.twig", "/Users/depairegabin/Documents/hellorse/exo-symfony/hellorse_exo/templates/shop.html.twig");
    }
}
