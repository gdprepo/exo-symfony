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
class __TwigTemplate_db65b829b7b545fe583917da0bf3c3f5 extends Template
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
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 48
            echo "            <div class=\"col-4 mb-4\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <img class=\"card-img-top\" src=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "any", false, false, false, 50), "html", null, true);
            echo "\" alt=\"Card image cap\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 52), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "method", false, false, false, 53), "html", null, true);
            echo "</p>
                        <p class=\"card-text\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 54), "html", null, true);
            echo " €</p>
                    </div>
                </div>
            </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
        </div>

        ";
        // line 63
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 63, $this->source); })()));
        echo "
    </div>


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
        return array (  156 => 63,  151 => 60,  139 => 54,  135 => 53,  131 => 52,  126 => 50,  122 => 48,  118 => 47,  115 => 46,  109 => 43,  106 => 42,  104 => 41,  100 => 39,  94 => 37,  92 => 36,  85 => 31,  59 => 4,  52 => 3,  35 => 1,);
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

            {% for product in products %}
            <div class=\"col-4 mb-4\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <img class=\"card-img-top\" src=\"{{ product.getImage }}\" alt=\"Card image cap\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ product.getTitle() }}</h5>
                        <p class=\"card-text\">{{ product.getDescription() }}</p>
                        <p class=\"card-text\">{{ product.getPrice() }} €</p>
                    </div>
                </div>
            </div>

            {% endfor %}

        </div>

        {{ knp_pagination_render(products) }}
    </div>


</div>

{% endblock %}", "shop.html.twig", "/Users/depairegabin/Documents/hellorse/hellorse_exo/templates/shop.html.twig");
    }
}
