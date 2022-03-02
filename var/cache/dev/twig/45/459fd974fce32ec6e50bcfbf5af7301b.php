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

/* dashboard/index.html.twig */
class __TwigTemplate_def562f4d9a81056a42fc996854a42a4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseDash.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("baseDash.html.twig", "dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello DashboardController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

</style>

<div class=\"example-wrapper\">
    <h1>Catalogue produits ✅</h1>

    <div class=\"container\">
        <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard.create");
        echo "\">
            <button style=\"float: right\" type=\"button\" class=\"btn btn-success\">Ajouter</button>
        </a>

        <table class=\"table\">
        
        <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Image</th>
                <th scope=\"col\">Action</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 33
            echo "            <tr>
                <th scope=\"row\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 34), "html", null, true);
            echo "</th>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td><img style=\"width: 100%; max-width: 150px\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "any", false, false, false, 37)), "html", null, true);
            echo "\"></td>
                <td>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">
                        <button style=\"width: 100%\" type=\"button\" class=\"btn btn-primary\">Modifier</button>
                    </a>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">
                        <button style=\"width: 100%\" type=\"button\" class=\"btn btn-danger\">Supprimer</button>
                    </a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
        </tbody>
        </table>
    </div>



</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 48,  134 => 42,  128 => 39,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  108 => 33,  104 => 32,  85 => 16,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseDash.html.twig' %}

{% block title %}Hello DashboardController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

</style>

<div class=\"example-wrapper\">
    <h1>Catalogue produits ✅</h1>

    <div class=\"container\">
        <a href=\"{{ path('dashboard.create') }}\">
            <button style=\"float: right\" type=\"button\" class=\"btn btn-success\">Ajouter</button>
        </a>

        <table class=\"table\">
        
        <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Image</th>
                <th scope=\"col\">Action</th>
            </tr>
        </thead>
        <tbody>
            {% for product in products %}
            <tr>
                <th scope=\"row\">{{ product.getId }}</th>
                <td>{{ product.getTitle }}</td>
                <td>{{ product.getDescription}}</td>
                <td><img style=\"width: 100%; max-width: 150px\" src=\"{{ asset('uploads/') ~ product.getImage }}\"></td>
                <td>
                    <a href=\"{{ path('dashboard.edit', {id: product.getId}) }}\">
                        <button style=\"width: 100%\" type=\"button\" class=\"btn btn-primary\">Modifier</button>
                    </a>
                    <a href=\"{{ path('dashboard.delete', {id: product.getId}) }}\">
                        <button style=\"width: 100%\" type=\"button\" class=\"btn btn-danger\">Supprimer</button>
                    </a>
                </td>
            </tr>
            {% endfor %}

        </tbody>
        </table>
    </div>



</div>
{% endblock %}
", "dashboard/index.html.twig", "/Users/depairegabin/Documents/hellorse/test/exo-symfony/repository/templates/dashboard/index.html.twig");
    }
}
