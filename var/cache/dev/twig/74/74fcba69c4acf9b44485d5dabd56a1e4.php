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
class __TwigTemplate_b288b901716bc0b9d38241fac8773843 extends Template
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
    .pagination > .active > a {
        color: white;
        background: #afafaf;
    }
</style>

<div style=\"margin-top: 50px;\" class=\"container\">
    ";
        // line 16
        echo "

    <div style=\"margin-top: 100px; width: 80%; margin-bottom: 30px\" class=\"mx-auto\">
        <div style=\"text-align: center; margin-bottom: 50px\">
            <h3>Boutique</h3>
            ";
        // line 21
        if (((array_key_exists("search", $context)) ? (_twig_default_filter((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 21, $this->source); })()))) : (""))) {
            // line 22
            echo "            <p>Recherche les articles contenant : ";
            echo twig_escape_filter($this->env, (isset($context["string"]) || array_key_exists("string", $context) ? $context["string"] : (function () { throw new RuntimeError('Variable "string" does not exist.', 22, $this->source); })()), "html", null, true);
            echo " </p>
            ";
        }
        // line 24
        echo "        </div>
        <div class=\"row\">
            ";
        // line 26
        if (((array_key_exists("search", $context)) ? (_twig_default_filter((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 26, $this->source); })()))) : (""))) {
            // line 27
            echo "            <div class=\"mb-4\">
                <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
            echo "\">Retour à la boutique</a>
            </div>
            ";
        }
        // line 31
        echo "
            ";
        // line 32
        if ((((array_key_exists("string", $context)) ? (_twig_default_filter((isset($context["string"]) || array_key_exists("string", $context) ? $context["string"] : (function () { throw new RuntimeError('Variable "string" does not exist.', 32, $this->source); })()))) : ("")) &&  !((array_key_exists("search", $context)) ? (_twig_default_filter((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 32, $this->source); })()))) : ("")))) {
            // line 33
            echo "            <form method=\"GET\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche.categorie", ["name" => (isset($context["string"]) || array_key_exists("string", $context) ? $context["string"] : (function () { throw new RuntimeError('Variable "string" does not exist.', 33, $this->source); })())]), "html", null, true);
            echo "\">

            <div style=\"display: flex\">
            ";
            // line 36
            if (((isset($context["string"]) || array_key_exists("string", $context) ? $context["string"] : (function () { throw new RuntimeError('Variable "string" does not exist.', 36, $this->source); })()) == "T-shirts")) {
                // line 37
                echo "                ";
                $context["tailles"] = [0 => "XS", 1 => "S", 2 => "M", 3 => "L", 4 => "XL"];
                // line 38
                echo "            ";
            } else {
                // line 39
                echo "                ";
                $context["tailles"] = [0 => "38", 1 => "39", 2 => "40", 3 => "41", 4 => "42", 5 => "43", 6 => "44", 7 => "45", 8 => "46"];
                // line 40
                echo "            ";
            }
            echo "   

            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tailles"]) || array_key_exists("tailles", $context) ? $context["tailles"] : (function () { throw new RuntimeError('Variable "tailles" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["taille"]) {
                // line 43
                echo "            <div style=\"max-width: 100px\" class=\"input-group mb-3\">
                <div class=\"input-group-text\">
                    <label style=\"margin-right: 10px\">";
                // line 45
                echo twig_escape_filter($this->env, $context["taille"], "html", null, true);
                echo "</label>

                    <input name=\"tailles[]\" class=\"form-check-input mt-0\" type=\"checkbox\" value=\"";
                // line 47
                echo twig_escape_filter($this->env, $context["taille"], "html", null, true);
                echo "\" aria-label=\"Checkbox for following text input\">
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taille'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
            <div style=\"max-width: 100px\" class=\"input-group mb-3\">
                <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
            </div>         
            </div>
            </form>
            ";
        }
        // line 58
        echo "

            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 61
            echo "            <div class=\"col-4 mb-4\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <img class=\"card-img-top\" src=\"";
            // line 63
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "any", false, false, false, 63)), "html", null, true);
            echo "\" alt=\"Card image cap\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 65), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "method", false, false, false, 66), "html", null, true);
            echo "</p>
                        <p class=\"card-text\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 67), "html", null, true);
            echo " €</p>
                        <div style=\"display: grid\">
                        <span class=\"mb-2\">
                            Tailles : ";
            // line 70
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["product"], "getTailles", [], "any", false, false, false, 70), ", "), "html", null, true);
            echo "
                        </span>
                        <span>
                            ";
            // line 73
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["product"], "getKeyWords", [], "any", false, false, false, 73), ", "), "html", null, true);
            echo "
                        </span>                        
                        </div>

                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
        </div>
        ";
        // line 83
        if ( !((array_key_exists("tailles_filter", $context)) ? (_twig_default_filter((isset($context["tailles_filter"]) || array_key_exists("tailles_filter", $context) ? $context["tailles_filter"] : (function () { throw new RuntimeError('Variable "tailles_filter" does not exist.', 83, $this->source); })()))) : (""))) {
            // line 84
            echo "        ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 84, $this->source); })()));
            echo "
        ";
        }
        // line 86
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
        return array (  224 => 86,  218 => 84,  216 => 83,  212 => 81,  198 => 73,  192 => 70,  186 => 67,  182 => 66,  178 => 65,  173 => 63,  169 => 61,  165 => 60,  161 => 58,  152 => 51,  142 => 47,  137 => 45,  133 => 43,  129 => 42,  123 => 40,  120 => 39,  117 => 38,  114 => 37,  112 => 36,  105 => 33,  103 => 32,  100 => 31,  94 => 28,  91 => 27,  89 => 26,  85 => 24,  79 => 22,  77 => 21,  70 => 16,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<style>
    .pagination > .active > a {
        color: white;
        background: #afafaf;
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

            {% if (string|default and not search|default) %}
            <form method=\"GET\" action=\"{{ path('recherche.categorie', {name: string}) }}\">

            <div style=\"display: flex\">
            {% if string == \"T-shirts\" %}
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
            {% endif %}


            {% for product in products %}
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
            {% endfor %}

        </div>
        {% if not tailles_filter|default %}
        {{ knp_pagination_render(products) }}
        {% endif %}
    </div>


</div>

{% endblock %}", "shop.html.twig", "/Users/depairegabin/Documents/hellorse/test/exo-symfony/repository/templates/shop.html.twig");
    }
}
