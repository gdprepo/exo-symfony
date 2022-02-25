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

/* dashboard/productAdd.html.twig */
class __TwigTemplate_011183a4042d888b3caff316098a1e2d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/productAdd.html.twig"));

        $this->parent = $this->loadTemplate("baseDash.html.twig", "dashboard/productAdd.html.twig", 1);
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
        echo "
<div style=\"width: 50%; margin-top: 50px\" class=\"container\">
    <h3>Creer un produit<h3>

    <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard.create");
        echo "\" enctype=\"multipart/form-data\" method=\"POST\">
        <div class=\"input-group mb-3\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">Titre</span>
            </div>
            <input type=\"text\" name=\"title\" class=\"form-control\" placeholder=\"\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
        </div>

        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                <span style=\"height: 100%\" class=\"input-group-text\">Description</span>
            </div>
            <textarea name=\"description\" placeholder=\"\" class=\"form-control\" aria-label=\"With textarea\"></textarea>
        </div>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            <div class=\"input-group mb-3\">
                <input type=\"file\" class=\"form-control\" id=\"inputGroupFile02\">
                <label class=\"input-group-text\" for=\"inputGroupFile02\">Upload</label>
            </div>


        </div>




        <button style=\"width: 100%\" type=\"submit\" class=\"btn btn-success mt-4\">Confirmer</button>
    </form>

</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/productAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseDash.html.twig' %}

{% block title %}Hello DashboardController!{% endblock %}

{% block body %}

<div style=\"width: 50%; margin-top: 50px\" class=\"container\">
    <h3>Creer un produit<h3>

    <form action=\"{{ path('dashboard.create') }}\" enctype=\"multipart/form-data\" method=\"POST\">
        <div class=\"input-group mb-3\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">Titre</span>
            </div>
            <input type=\"text\" name=\"title\" class=\"form-control\" placeholder=\"\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
        </div>

        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                <span style=\"height: 100%\" class=\"input-group-text\">Description</span>
            </div>
            <textarea name=\"description\" placeholder=\"\" class=\"form-control\" aria-label=\"With textarea\"></textarea>
        </div>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            <div class=\"input-group mb-3\">
                <input type=\"file\" class=\"form-control\" id=\"inputGroupFile02\">
                <label class=\"input-group-text\" for=\"inputGroupFile02\">Upload</label>
            </div>


        </div>




        <button style=\"width: 100%\" type=\"submit\" class=\"btn btn-success mt-4\">Confirmer</button>
    </form>

</div>


{% endblock %}
", "dashboard/productAdd.html.twig", "/Users/depairegabin/Documents/hellorse/hellorse_exo/templates/dashboard/productAdd.html.twig");
    }
}
