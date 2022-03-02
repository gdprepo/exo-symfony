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
class __TwigTemplate_5f5ba8b5f32de62cd01267ae0883f210 extends Template
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
            'script' => [$this, 'block_script'],
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
                <input name=\"image\" type=\"file\" class=\"form-control\" id=\"inputGroupFile02\">
                <label class=\"input-group-text\" for=\"inputGroupFile02\">Upload</label>
            </div>
        </div>

        <div class=\"input-group mb-3\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">Prix</span>
            </div>
            <input type=\"text\" name=\"price\" class=\"form-control\" placeholder=\"\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
        </div>

        <select id=\"selectCategorie\" name=\"categorie\" class=\"form-select\" aria-label=\"Default select example\">
            <option value=\"Tee Shirt\" selected>Tee Shirt</option>
            <option value=\"Chaussure\">Chaussure</option>
        </select>

        <label style=\"font-size: 14px\" class=\"mb-2 mt-4\">Tailles: </label>
        <select id=\"sizeTeeShirt\" name=\"tailleTeeShirt[]\" class=\"form-select\" multiple aria-label=\"multiple select example\">
            <option value=\"XS\">XS</option>
            <option value=\"S\">S</option>
            <option value=\"M\">M</option>
            <option value=\"L\">L</option>
            <option value=\"XS\">XL</option>
        </select>

        <select id=\"sizeShoes\" name=\"tailleShoes[]\" style=\"display: none\" class=\"form-select\" multiple aria-label=\"multiple select example\">
            <option value=\"38\">38</option>
            <option value=\"39\">39</option>
            <option value=\"40\">40</option>
            <option value=\"41\">41</option>
            <option value=\"42\">42</option>
            <option value=\"43\">43</option>
            <option value=\"44\">44</option>
            <option value=\"45\">45</option>
            <option value=\"46\">46</option>
        </select>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            <div style=\"width: 100%\" class=\"input-group-prepend\">
                <span style=\"height: 100%\" class=\"input-group-text\">Keywords :
                ";
        // line 68
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 68, $this->source); })()), "getKeywords", [], "any", false, false, false, 68), ", "), "html", null, true);
        echo "
                </span>

                <input name=\"tags\" placeholder=\"write some tags\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 71, $this->source); })()), "getKeywords", [], "any", false, false, false, 71), ", "), "html", null, true);
        echo "\">
            </div>

        </div>

        <button style=\"width: 100%\" type=\"submit\" class=\"btn btn-success mt-4\">Confirmer</button>
    </form>

</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 84
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 85
        echo "
<script>
    \$('#selectCategorie').on('change', function() {
        if (this.value === \"Tee Shirt\") {
            \$('#sizeTeeShirt').show();
            \$('#sizeShoes').hide();
        } else {
            \$('#sizeTeeShirt').hide();
            \$('#sizeShoes').show();
        }
    });

    var input = document.querySelector('input[name=tags]'),

    tagify = new Tagify( input, {
        originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
    });

</script>

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
        return array (  173 => 85,  166 => 84,  147 => 71,  141 => 68,  80 => 10,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
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
                <input name=\"image\" type=\"file\" class=\"form-control\" id=\"inputGroupFile02\">
                <label class=\"input-group-text\" for=\"inputGroupFile02\">Upload</label>
            </div>
        </div>

        <div class=\"input-group mb-3\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">Prix</span>
            </div>
            <input type=\"text\" name=\"price\" class=\"form-control\" placeholder=\"\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
        </div>

        <select id=\"selectCategorie\" name=\"categorie\" class=\"form-select\" aria-label=\"Default select example\">
            <option value=\"Tee Shirt\" selected>Tee Shirt</option>
            <option value=\"Chaussure\">Chaussure</option>
        </select>

        <label style=\"font-size: 14px\" class=\"mb-2 mt-4\">Tailles: </label>
        <select id=\"sizeTeeShirt\" name=\"tailleTeeShirt[]\" class=\"form-select\" multiple aria-label=\"multiple select example\">
            <option value=\"XS\">XS</option>
            <option value=\"S\">S</option>
            <option value=\"M\">M</option>
            <option value=\"L\">L</option>
            <option value=\"XS\">XL</option>
        </select>

        <select id=\"sizeShoes\" name=\"tailleShoes[]\" style=\"display: none\" class=\"form-select\" multiple aria-label=\"multiple select example\">
            <option value=\"38\">38</option>
            <option value=\"39\">39</option>
            <option value=\"40\">40</option>
            <option value=\"41\">41</option>
            <option value=\"42\">42</option>
            <option value=\"43\">43</option>
            <option value=\"44\">44</option>
            <option value=\"45\">45</option>
            <option value=\"46\">46</option>
        </select>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            <div style=\"width: 100%\" class=\"input-group-prepend\">
                <span style=\"height: 100%\" class=\"input-group-text\">Keywords :
                {{ product.getKeywords|join(', ') }}
                </span>

                <input name=\"tags\" placeholder=\"write some tags\" value=\"{{ product.getKeywords|join(', ') }}\">
            </div>

        </div>

        <button style=\"width: 100%\" type=\"submit\" class=\"btn btn-success mt-4\">Confirmer</button>
    </form>

</div>


{% endblock %}

{% block script %}

<script>
    \$('#selectCategorie').on('change', function() {
        if (this.value === \"Tee Shirt\") {
            \$('#sizeTeeShirt').show();
            \$('#sizeShoes').hide();
        } else {
            \$('#sizeTeeShirt').hide();
            \$('#sizeShoes').show();
        }
    });

    var input = document.querySelector('input[name=tags]'),

    tagify = new Tagify( input, {
        originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
    });

</script>

{% endblock %}

", "dashboard/productAdd.html.twig", "/Users/depairegabin/Documents/hellorse/rendu/exo-symfony/repository/templates/dashboard/productAdd.html.twig");
    }
}
