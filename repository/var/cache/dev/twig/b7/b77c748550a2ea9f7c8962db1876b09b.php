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

/* dashboard/productEdit.html.twig */
class __TwigTemplate_6d9c6b963eb569017e4b8d04c4c44640 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/productEdit.html.twig"));

        $this->parent = $this->loadTemplate("baseDash.html.twig", "dashboard/productEdit.html.twig", 1);
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
    <h3>Modifier le produit #";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "getId", [], "any", false, false, false, 8), "html", null, true);
        echo "<h3>

    <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard.edit", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 10, $this->source); })())]), "html", null, true);
        echo "\" enctype=\"multipart/form-data\" method=\"POST\">
        <div class=\"input-group mb-3\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">Titre</span>
            </div>
            <input type=\"text\" name=\"title\" class=\"form-control\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "getTitle", [], "any", false, false, false, 15), "html", null, true);
        echo "\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
        </div>

        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                <span style=\"height: 100%\" class=\"input-group-text\">Description</span>
            </div>
            <textarea name=\"description\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "getDescription", [], "any", false, false, false, 22), "html", null, true);
        echo "\" class=\"form-control\" aria-label=\"With textarea\"></textarea>
        </div>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            <img style=\"width: 50%; max-width: 150px\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "getImage", [], "any", false, false, false, 26)), "html", null, true);
        echo "\">

            <div class=\"input-group mb-3 p-4\">
                <input type=\"file\" class=\"form-control\" id=\"inputGroupFile02\">
                <label class=\"input-group-text\" for=\"inputGroupFile02\">Upload</label>
            </div>
        </div>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            <div class=\"input-group-prepend\">
                <span style=\"height: 100%\" class=\"input-group-text\">Categorie : ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "getCategorie", [], "any", false, false, false, 36), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            <div style=\"width: 100%\" class=\"input-group-prepend\">
                <span style=\"height: 100%\" class=\"input-group-text\">Taille :
                ";
        // line 43
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 43, $this->source); })()), "getTailles", [], "any", false, false, false, 43), ", "), "html", null, true);
        echo "
                </span>

                ";
        // line 47
        echo "            <select name=\"tailles[]\" class=\"form-select\" multiple aria-label=\"multiple select example\">
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sizes"]) || array_key_exists("sizes", $context) ? $context["sizes"] : (function () { throw new RuntimeError('Variable "sizes" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 49
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </select>
            
            </div>

        </div>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            <div style=\"width: 100%\" class=\"input-group-prepend\">
                <span style=\"height: 100%\" class=\"input-group-text\">Keywords :
                ";
        // line 60
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 60, $this->source); })()), "getKeywords", [], "any", false, false, false, 60), ", "), "html", null, true);
        echo "
                </span>

                <input name=\"tags\" placeholder=\"write some tags\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 63, $this->source); })()), "getKeywords", [], "any", false, false, false, 63), ", "), "html", null, true);
        echo "\">
            </div>

        </div>


        <button style=\"width: 100%\" type=\"submit\" class=\"btn btn-success mt-4\">Confirmer</button>
    </form>

</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 77
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 78
        echo "
<script>

    var input = document.querySelector('input[name=tags]'),

    tagify = new Tagify( input, {
        originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
    });

    var input_tailles = document.querySelector('input[name=tailles]'),

    tagify = new Tagify( input_tailles, {
        originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/productEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 78,  192 => 77,  172 => 63,  166 => 60,  155 => 51,  144 => 49,  140 => 48,  137 => 47,  131 => 43,  121 => 36,  108 => 26,  101 => 22,  91 => 15,  83 => 10,  78 => 8,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseDash.html.twig' %}

{% block title %}Hello DashboardController!{% endblock %}

{% block body %}

<div style=\"width: 50%; margin-top: 50px\" class=\"container\">
    <h3>Modifier le produit #{{ product.getId }}<h3>

    <form action=\"{{ path('dashboard.edit', {id: id}) }}\" enctype=\"multipart/form-data\" method=\"POST\">
        <div class=\"input-group mb-3\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"basic-addon1\">Titre</span>
            </div>
            <input type=\"text\" name=\"title\" class=\"form-control\" placeholder=\"{{ product.getTitle }}\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
        </div>

        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                <span style=\"height: 100%\" class=\"input-group-text\">Description</span>
            </div>
            <textarea name=\"description\" placeholder=\"{{ product.getDescription }}\" class=\"form-control\" aria-label=\"With textarea\"></textarea>
        </div>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            <img style=\"width: 50%; max-width: 150px\" src=\"{{ asset('uploads/') ~ product.getImage }}\">

            <div class=\"input-group mb-3 p-4\">
                <input type=\"file\" class=\"form-control\" id=\"inputGroupFile02\">
                <label class=\"input-group-text\" for=\"inputGroupFile02\">Upload</label>
            </div>
        </div>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            <div class=\"input-group-prepend\">
                <span style=\"height: 100%\" class=\"input-group-text\">Categorie : {{ product.getCategorie }}</span>
            </div>
        </div>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            <div style=\"width: 100%\" class=\"input-group-prepend\">
                <span style=\"height: 100%\" class=\"input-group-text\">Taille :
                {{ product.getTailles|join(', ') }}
                </span>

                {# <input name=\"tailles\" placeholder=\"write some tags\" value=\"{{ product.getTailles|join(', ') }}\"> #}
            <select name=\"tailles[]\" class=\"form-select\" multiple aria-label=\"multiple select example\">
                {% for size in sizes %}
                <option value=\"{{size}}\">{{size}}</option>
                {% endfor %}
            </select>
            
            </div>

        </div>

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

    var input = document.querySelector('input[name=tags]'),

    tagify = new Tagify( input, {
        originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
    });

    var input_tailles = document.querySelector('input[name=tailles]'),

    tagify = new Tagify( input_tailles, {
        originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
    });
</script>
{% endblock %}

", "dashboard/productEdit.html.twig", "/Users/depairegabin/Documents/hellorse/git/exo-symfony/repository/templates/dashboard/productEdit.html.twig");
    }
}
