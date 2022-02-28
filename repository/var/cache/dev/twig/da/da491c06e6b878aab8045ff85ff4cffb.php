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
class __TwigTemplate_05a03b11b26f0fa487afa46b137d6335 extends Template
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
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "getId", [], "any", false, false, false, 8)) {
            // line 9
            echo "    <h3>Modifier le produit #";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "getId", [], "any", false, false, false, 9), "html", null, true);
            echo "<h3>
    ";
        } else {
            // line 11
            echo "    <h3>Creer ue produit<h3>

    ";
        }
        // line 14
        echo "
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
    
        <div class=\"mt-4\" style=\"align-items: center;\">
            <label>Titre :</label>
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 19, $this->source); })()), "Title", [], "any", false, false, false, 19), 'widget');
        echo "
        </div>
        <div class=\"mt-4\" style=\"align-items: center;\">
            <label>Prix :</label>
            <select id=\"selectCategorie\" name=\"Categorie\" class=\"form-select\" aria-label=\"Default select example\">
                <option value=\"T-shirts\" selected>T-shirts</option>
                <option value=\"Chaussure\">Chaussure</option>
            </select>
        </div>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            <div style=\"width: 100%\" class=\"input-group-prepend\">
                <span style=\"height: 100%\" class=\"input-group-text\">Taille :
                ";
        // line 32
        if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getTailles", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getTailles", [], "any", false, false, false, 32))) : (""))) {
            // line 33
            echo "                ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "getTailles", [], "any", false, false, false, 33), ", "), "html", null, true);
            echo "
                ";
        }
        // line 35
        echo "                </span>

                <select id=\"sizeTeeShirt\" name=\"Tailles[]\" class=\"form-select\" multiple aria-label=\"multiple select example\">
                    <option value=\"XS\">XS</option>
                    <option value=\"S\">S</option>
                    <option value=\"M\">M</option>
                    <option value=\"L\">L</option>
                    <option value=\"XS\">XL</option>
                </select>

                <select id=\"sizeShoes\" name=\"Tailles[]\" style=\"display: none\" class=\"form-select\" multiple aria-label=\"multiple select example\">
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
            
            </div>

        </div>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            <div style=\"width: 100%\" class=\"input-group-prepend\">
                <span style=\"height: 100%\" class=\"input-group-text\">Keywords :
                ";
        // line 64
        if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getKeywords", [], "any", true, true, false, 64)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getKeywords", [], "any", false, false, false, 64))) : (""))) {
            // line 65
            echo "                ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 65, $this->source); })()), "getKeywords", [], "any", false, false, false, 65), ", "), "html", null, true);
            echo "
                ";
        }
        // line 67
        echo "                </span>

                <input name=\"Keywords\" placeholder=\"write some tags\" value=\"
                ";
        // line 70
        if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getKeywords", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getKeywords", [], "any", false, false, false, 70))) : (""))) {
            // line 71
            echo "                ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 71, $this->source); })()), "getKeywords", [], "any", false, false, false, 71), ", "), "html", null, true);
            echo "
                ";
        }
        // line 72
        echo "\">
            </div>

        </div>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            ";
        // line 78
        if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getImage", [], "any", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getImage", [], "any", false, false, false, 78))) : (""))) {
            // line 79
            echo "            <img style=\"width: 50%; max-width: 150px\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 79, $this->source); })()), "getImage", [], "any", false, false, false, 79)), "html", null, true);
            echo "\">
            ";
        }
        // line 81
        echo "
            <div class=\"input-group mb-3 p-4\">
                ";
        // line 83
        if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getImage", [], "any", true, true, false, 83)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getImage", [], "any", false, false, false, 83))) : (""))) {
            // line 84
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 84, $this->source); })()), "Image", [], "any", false, false, false, 84), 'widget', ["required" => false]);
            echo "
                ";
        } else {
            // line 86
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 86, $this->source); })()), "Image", [], "any", false, false, false, 86), 'widget', ["required" => true]);
            echo "
                ";
        }
        // line 88
        echo "            </div>
        </div>

        <div class=\"mt-4\" style=\"align-items: center;\">
        <label>Prix :</label>
        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 93, $this->source); })()), "Price", [], "any", false, false, false, 93), 'widget');
        echo "

        </div>

        <div class=\"mt-4\" style=\"align-items: center;\">
        <label>Description :</label>
        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 99, $this->source); })()), "Description", [], "any", false, false, false, 99), 'widget');
        echo "

        </div>

        <button style=\"width: 100%\" name=\"save\" type=\"submit\" class=\"btn btn-primary mt-4\">Confimer</button>

    ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 105, $this->source); })()), 'form_end');
        echo "
";
        // line 167
        echo "
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 173
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 174
        echo "
<script>

    \$('#selectCategorie').on('change', function() {
        if (this.value === \"T-shirts\") {
            \$('#sizeTeeShirt').show();
            \$('#sizeShoes').hide();
        } else {
            \$('#sizeTeeShirt').hide();
            \$('#sizeShoes').show();
        }
    });

    var input = document.querySelector('input[name=Keywords]'),

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
        return array (  258 => 174,  251 => 173,  240 => 167,  236 => 105,  227 => 99,  218 => 93,  211 => 88,  205 => 86,  199 => 84,  197 => 83,  193 => 81,  187 => 79,  185 => 78,  177 => 72,  171 => 71,  169 => 70,  164 => 67,  158 => 65,  156 => 64,  125 => 35,  119 => 33,  117 => 32,  101 => 19,  94 => 15,  91 => 14,  86 => 11,  80 => 9,  78 => 8,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseDash.html.twig' %}

{% block title %}Hello DashboardController!{% endblock %}

{% block body %}

<div style=\"width: 50%; margin-top: 50px\" class=\"container\">
    {% if product.getId %}
    <h3>Modifier le produit #{{product.getId}}<h3>
    {% else %}
    <h3>Creer ue produit<h3>

    {% endif %}

    {{ form_start(formProduct) }}
    
        <div class=\"mt-4\" style=\"align-items: center;\">
            <label>Titre :</label>
            {{ form_widget(formProduct.Title) }}
        </div>
        <div class=\"mt-4\" style=\"align-items: center;\">
            <label>Prix :</label>
            <select id=\"selectCategorie\" name=\"Categorie\" class=\"form-select\" aria-label=\"Default select example\">
                <option value=\"T-shirts\" selected>T-shirts</option>
                <option value=\"Chaussure\">Chaussure</option>
            </select>
        </div>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            <div style=\"width: 100%\" class=\"input-group-prepend\">
                <span style=\"height: 100%\" class=\"input-group-text\">Taille :
                {% if product.getTailles|default %}
                {{ product.getTailles|join(', ') }}
                {% endif %}
                </span>

                <select id=\"sizeTeeShirt\" name=\"Tailles[]\" class=\"form-select\" multiple aria-label=\"multiple select example\">
                    <option value=\"XS\">XS</option>
                    <option value=\"S\">S</option>
                    <option value=\"M\">M</option>
                    <option value=\"L\">L</option>
                    <option value=\"XS\">XL</option>
                </select>

                <select id=\"sizeShoes\" name=\"Tailles[]\" style=\"display: none\" class=\"form-select\" multiple aria-label=\"multiple select example\">
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
            
            </div>

        </div>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            <div style=\"width: 100%\" class=\"input-group-prepend\">
                <span style=\"height: 100%\" class=\"input-group-text\">Keywords :
                {% if product.getKeywords|default %}
                {{ product.getKeywords|join(', ') }}
                {% endif %}
                </span>

                <input name=\"Keywords\" placeholder=\"write some tags\" value=\"
                {% if product.getKeywords|default %}
                {{ product.getKeywords|join(', ') }}
                {% endif %}\">
            </div>

        </div>

        <div class=\"mt-4\" style=\"display: flex; align-items: center;\">
            {% if product.getImage|default %}
            <img style=\"width: 50%; max-width: 150px\" src=\"{{ asset('uploads/') ~ product.getImage }}\">
            {% endif %}

            <div class=\"input-group mb-3 p-4\">
                {% if product.getImage|default %}
                {{ form_widget(formProduct.Image, {\"required\": false}) }}
                {% else %}
                {{ form_widget(formProduct.Image, {\"required\": true}) }}
                {% endif %}
            </div>
        </div>

        <div class=\"mt-4\" style=\"align-items: center;\">
        <label>Prix :</label>
        {{ form_widget(formProduct.Price) }}

        </div>

        <div class=\"mt-4\" style=\"align-items: center;\">
        <label>Description :</label>
        {{ form_widget(formProduct.Description) }}

        </div>

        <button style=\"width: 100%\" name=\"save\" type=\"submit\" class=\"btn btn-primary mt-4\">Confimer</button>

    {{ form_end(formProduct) }}
{# 
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
    </form> #}

</div>


{% endblock %}

{% block script %}

<script>

    \$('#selectCategorie').on('change', function() {
        if (this.value === \"T-shirts\") {
            \$('#sizeTeeShirt').show();
            \$('#sizeShoes').hide();
        } else {
            \$('#sizeTeeShirt').hide();
            \$('#sizeShoes').show();
        }
    });

    var input = document.querySelector('input[name=Keywords]'),

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
