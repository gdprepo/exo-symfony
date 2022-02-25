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

/* index.html.twig */
class __TwigTemplate_4ccbe5f90b24edf1efdecd878579a3fb extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
<div style=\"margin-top: 50px;\" class=\"container\">
    ";
        // line 9
        echo "

    <div style=\"margin-top: 100px; width: 80%; margin-bottom: 30px\" class=\"mx-auto\">
        <div style=\"text-align: center; margin-bottom: 50px\">
            <h3>Tee Shirt</h3>
        </div>
        <div class=\"row\">
            <ul style=\"list-style: none; display: flex; overflow-x: scroll;\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["teeShirts"]) || array_key_exists("teeShirts", $context) ? $context["teeShirts"] : (function () { throw new RuntimeError('Variable "teeShirts" does not exist.', 17, $this->source); })()), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "                <li class=\"col-4 mb-4\">
                    <div class=\"card\" style=\"width: 18rem;\">
                        <img class=\"card-img-top\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "any", false, false, false, 20), "html", null, true);
            echo "\" alt=\"Card image cap\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 22), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "method", false, false, false, 23), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 24), "html", null, true);
            echo " €</p>
                        </div>
                    </div>
                </li>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </ul>

            <div style=\"text-align: center;\">
                <button type=\"button\" class=\"btn btn-primary\">Tout les Tee Shirt</button>
            </div>

        </div>
    </div>

    <hr>

    <div style=\"margin-top: 100px; width: 80%\" class=\"mx-auto\">
        <div style=\"text-align: center; margin-bottom: 50px\">
            <h3>Chaussures</h3>
        </div>
        <div class=\"row\">
            <ul style=\"list-style: none; display: flex; overflow-x: scroll;\">
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["shoes"]) || array_key_exists("shoes", $context) ? $context["shoes"] : (function () { throw new RuntimeError('Variable "shoes" does not exist.', 47, $this->source); })()), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 48
            echo "                <li class=\"col-4 mb-4\">

                    <div class=\"card\" style=\"width: 18rem;\">
                        <img class=\"card-img-top\" src=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "any", false, false, false, 51), "html", null, true);
            echo "\" alt=\"Card image cap\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 53), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "method", false, false, false, 54), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </li>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </ul>

            <div style=\"text-align: center;\">
                <button type=\"button\" class=\"btn btn-primary\">Tout les Tee Shirt</button>
            </div>



        </div>


    </div>

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 60,  143 => 54,  139 => 53,  134 => 51,  129 => 48,  125 => 47,  106 => 30,  94 => 24,  90 => 23,  86 => 22,  81 => 20,  77 => 18,  73 => 17,  63 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div style=\"margin-top: 50px;\" class=\"container\">
    {# <div style=\"text-align: center;\">
        <h2>Bienvenue</h2>
    </div> #}


    <div style=\"margin-top: 100px; width: 80%; margin-bottom: 30px\" class=\"mx-auto\">
        <div style=\"text-align: center; margin-bottom: 50px\">
            <h3>Tee Shirt</h3>
        </div>
        <div class=\"row\">
            <ul style=\"list-style: none; display: flex; overflow-x: scroll;\">
                {% for product in teeShirts|slice(0, 5) %}
                <li class=\"col-4 mb-4\">
                    <div class=\"card\" style=\"width: 18rem;\">
                        <img class=\"card-img-top\" src=\"{{ product.getImage }}\" alt=\"Card image cap\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ product.getTitle() }}</h5>
                            <p class=\"card-text\">{{ product.getDescription() }}</p>
                            <p class=\"card-text\">{{ product.getPrice() }} €</p>
                        </div>
                    </div>
                </li>

                {% endfor %}
            </ul>

            <div style=\"text-align: center;\">
                <button type=\"button\" class=\"btn btn-primary\">Tout les Tee Shirt</button>
            </div>

        </div>
    </div>

    <hr>

    <div style=\"margin-top: 100px; width: 80%\" class=\"mx-auto\">
        <div style=\"text-align: center; margin-bottom: 50px\">
            <h3>Chaussures</h3>
        </div>
        <div class=\"row\">
            <ul style=\"list-style: none; display: flex; overflow-x: scroll;\">
                {% for product in shoes|slice(0, 5) %}
                <li class=\"col-4 mb-4\">

                    <div class=\"card\" style=\"width: 18rem;\">
                        <img class=\"card-img-top\" src=\"{{ product.getImage }}\" alt=\"Card image cap\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ product.getTitle() }}</h5>
                            <p class=\"card-text\">{{ product.getDescription() }}</p>
                        </div>
                    </div>
                </li>

                {% endfor %}
            </ul>

            <div style=\"text-align: center;\">
                <button type=\"button\" class=\"btn btn-primary\">Tout les Tee Shirt</button>
            </div>



        </div>


    </div>

</div>

{% endblock %}", "index.html.twig", "/Users/depairegabin/Documents/hellorse/hellorse_exo/templates/index.html.twig");
    }
}
