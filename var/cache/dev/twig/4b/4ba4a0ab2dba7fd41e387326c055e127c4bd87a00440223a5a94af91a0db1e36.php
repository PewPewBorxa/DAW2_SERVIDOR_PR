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

/* contacto/index.html.twig */
class __TwigTemplate_f6d8b593dce48fb7ac2b0c4bbdffd6beac5b0fea93db80518fba63f771c1a7a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layoutcrud.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacto/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacto/index.html.twig"));

        $this->parent = $this->loadTemplate("layoutcrud.html.twig", "contacto/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto index
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "\t<div style='margin-top:100px'>
\t\t<h1>Contacto index</h1>

\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<th>Email</th>
\t\t\t\t\t<th>Message</th>
\t\t\t\t\t<th>Website</th>
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contactos"]) || array_key_exists("contactos", $context) ? $context["contactos"] : (function () { throw new RuntimeError('Variable "contactos" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contacto"]) {
            // line 24
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contacto"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contacto"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contacto"], "email", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contacto"], "message", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contacto"], "website", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 30
            ((twig_get_attribute($this->env, $this->source, $context["contacto"], "date", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contacto"], "date", [], "any", false, false, false, 30), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacto_show", ["id" => twig_get_attribute($this->env, $this->source, $context["contacto"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacto_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["contacto"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"7\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contacto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t</tbody>
\t\t</table>

\t\t<a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacto_new");
        echo "\">Create new</a>
\t\t<a style='margin-left:30px' href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Back to admin</a>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contacto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 45,  167 => 44,  162 => 41,  153 => 37,  144 => 33,  140 => 32,  135 => 30,  131 => 29,  127 => 28,  123 => 27,  119 => 26,  115 => 25,  112 => 24,  107 => 23,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layoutcrud.html.twig' %}

{% block title %}Contacto index
{% endblock %}

{% block content %}
\t<div style='margin-top:100px'>
\t\t<h1>Contacto index</h1>

\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<th>Email</th>
\t\t\t\t\t<th>Message</th>
\t\t\t\t\t<th>Website</th>
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for contacto in contactos %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ contacto.id }}</td>
\t\t\t\t\t\t<td>{{ contacto.name }}</td>
\t\t\t\t\t\t<td>{{ contacto.email }}</td>
\t\t\t\t\t\t<td>{{ contacto.message }}</td>
\t\t\t\t\t\t<td>{{ contacto.website }}</td>
\t\t\t\t\t\t<td>{{ contacto.date ? contacto.date|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('contacto_show', {'id': contacto.id}) }}\">show</a>
\t\t\t\t\t\t\t<a href=\"{{ path('contacto_edit', {'id': contacto.id}) }}\">edit</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"7\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>

\t\t<a href=\"{{ path('contacto_new') }}\">Create new</a>
\t\t<a style='margin-left:30px' href=\"{{ path('admin') }}\">Back to admin</a>
\t</div>
{% endblock %}
", "contacto/index.html.twig", "C:\\Users\\botolo\\DAW2\\templates\\contacto\\index.html.twig");
    }
}
