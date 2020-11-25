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

/* albums.html.twig */
class __TwigTemplate_1c6d37a7be558b40c0fcdfae110f3d29df07a93063235459de041abc21ff1a21 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "albums.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "albums.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "albums.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "\t<section class=\"page-top-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"page-info-box\">
\t\t\t\t<div class=\"page-info-icon\">
\t\t\t\t\t<i class=\"fa fa-headphones\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-info-text\">
\t\t\t\t\t<h2>Albums</h2>
\t\t\t\t\t<div class=\"site-breadcrumb\">
\t\t\t\t\t\t<a href=\"/\">Home</a>
\t\t\t\t\t\t<span>Albums</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"albums__page\">
\t\t<div class=\"container\">
\t\t\t<div class=\"albums__page__title\">
\t\t\t\t<h2>Discover our newest musicalbums and singles</h2>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 26
        $context["npag"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", [0 => "pg"], "method", false, false, false, 26);
        // line 27
        echo "\t\t\t\t";
        $context["lowerLimit"] = (((isset($context["npag"]) || array_key_exists("npag", $context) ? $context["npag"] : (function () { throw new RuntimeError('Variable "npag" does not exist.', 27, $this->source); })()) - 1) * (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 27, $this->source); })()));
        // line 28
        echo "\t\t\t\t";
        $context["upperLimit"] = (((isset($context["lowerLimit"]) || array_key_exists("lowerLimit", $context) ? $context["lowerLimit"] : (function () { throw new RuntimeError('Variable "lowerLimit" does not exist.', 28, $this->source); })()) + (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 28, $this->source); })())) + 1);
        // line 29
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new RuntimeError('Variable "contenido" does not exist.', 29, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "\t\t\t\t\t";
            if (((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30), (isset($context["lowerLimit"]) || array_key_exists("lowerLimit", $context) ? $context["lowerLimit"] : (function () { throw new RuntimeError('Variable "lowerLimit" does not exist.', 30, $this->source); })()))) && (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30), (isset($context["upperLimit"]) || array_key_exists("upperLimit", $context) ? $context["upperLimit"] : (function () { throw new RuntimeError('Variable "upperLimit" does not exist.', 30, $this->source); })()))))) {
                // line 31
                echo "\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t<div class=\"album_card\">
\t\t\t\t\t\t\t\t<div class=\"album__pic\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["i"], "imagen", [], "any", false, false, false, 34), "images_album"), "html", null, true);
                echo " \" alt=\"imagen album\">
\t\t\t\t\t\t\t\t\t<div class=\"album__title\">
\t\t\t\t\t\t\t\t\t\t<div class=\"album_title_inner\">
\t\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "titulo", [], "any", false, false, false, 37), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "genero", [], "any", false, false, false, 38), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"album__links\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("google-play.png", "images"), "html", null, true);
                echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("itune.png", "images"), "html", null, true);
                echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
\t\t\t\t";
        // line 51
        $context["gener"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "attributes", [], "any", false, false, false, 51), "get", [0 => "gen"], "method", false, false, false, 51);
        // line 52
        echo "\t\t\t\t<div class=\"site__pagination\">
\t\t\t\t\t";
        // line 53
        if ((0 !== twig_compare((isset($context["npag"]) || array_key_exists("npag", $context) ? $context["npag"] : (function () { throw new RuntimeError('Variable "npag" does not exist.', 53, $this->source); })()), 1))) {
            // line 54
            echo "\t\t\t\t\t\t<a href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos", ["gen" => (isset($context["gener"]) || array_key_exists("gener", $context) ? $context["gener"] : (function () { throw new RuntimeError('Variable "gener" does not exist.', 54, $this->source); })()), "pg" => ((isset($context["npag"]) || array_key_exists("npag", $context) ? $context["npag"] : (function () { throw new RuntimeError('Variable "npag" does not exist.', 54, $this->source); })()) - 1)]), "html", null, true);
            echo "' class=\"next-page\">Prev</a>
\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t";
        $context["paginado"] = twig_round((twig_length_filter($this->env, (isset($context["contenido"]) || array_key_exists("contenido", $context) ? $context["contenido"] : (function () { throw new RuntimeError('Variable "contenido" does not exist.', 56, $this->source); })())) / 3), 0, "ceil");
        // line 57
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["paginado"]) || array_key_exists("paginado", $context) ? $context["paginado"] : (function () { throw new RuntimeError('Variable "paginado" does not exist.', 57, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 58
            echo "\t\t\t\t\t\t<a href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos", ["gen" => (isset($context["gener"]) || array_key_exists("gener", $context) ? $context["gener"] : (function () { throw new RuntimeError('Variable "gener" does not exist.', 58, $this->source); })()), "pg" => $context["i"]]), "html", null, true);
            echo "' ";
            if ((0 === twig_compare((isset($context["npag"]) || array_key_exists("npag", $context) ? $context["npag"] : (function () { throw new RuntimeError('Variable "npag" does not exist.', 58, $this->source); })()), $context["i"]))) {
                echo " class=\"active\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t\t\t";
        if ((0 !== twig_compare((isset($context["npag"]) || array_key_exists("npag", $context) ? $context["npag"] : (function () { throw new RuntimeError('Variable "npag" does not exist.', 60, $this->source); })()), (isset($context["paginado"]) || array_key_exists("paginado", $context) ? $context["paginado"] : (function () { throw new RuntimeError('Variable "paginado" does not exist.', 60, $this->source); })())))) {
            // line 61
            echo "\t\t\t\t\t\t<a href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos", ["gen" => (isset($context["gener"]) || array_key_exists("gener", $context) ? $context["gener"] : (function () { throw new RuntimeError('Variable "gener" does not exist.', 61, $this->source); })()), "pg" => ((isset($context["npag"]) || array_key_exists("npag", $context) ? $context["npag"] : (function () { throw new RuntimeError('Variable "npag" does not exist.', 61, $this->source); })()) + 1)]), "html", null, true);
            echo "' class=\"next-page\">Next</a>
\t\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"site__pagination\">
\t\t\t\t\t";
        // line 65
        $context["genres_length"] = (twig_length_filter($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 65, $this->source); })())) - 1);
        // line 66
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["genres_length"]) || array_key_exists("genres_length", $context) ? $context["genres_length"] : (function () { throw new RuntimeError('Variable "genres_length" does not exist.', 66, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 67
            echo "\t\t\t\t\t\t<a href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos", ["gen" => twig_get_attribute($this->env, $this->source, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 67, $this->source); })()), $context["i"], [], "array", false, false, false, 67)]), "html", null, true);
            echo "' ";
            if ((0 === twig_compare((isset($context["gener"]) || array_key_exists("gener", $context) ? $context["gener"] : (function () { throw new RuntimeError('Variable "gener" does not exist.', 67, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 67, $this->source); })()), $context["i"], [], "array", false, false, false, 67)))) {
                echo " class=\"active\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 67, $this->source); })()), $context["i"], [], "array", false, false, false, 67), "html", null, true);
            echo "</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t\t\t<a href='";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos", ["gen" => "all"]);
        echo "' ";
        if ((0 === twig_compare((isset($context["gener"]) || array_key_exists("gener", $context) ? $context["gener"] : (function () { throw new RuntimeError('Variable "gener" does not exist.', 69, $this->source); })()), "all"))) {
            echo " class=\"active\" ";
        }
        echo ">TODOS</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "albums.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 69,  230 => 67,  225 => 66,  223 => 65,  219 => 63,  213 => 61,  210 => 60,  195 => 58,  190 => 57,  187 => 56,  181 => 54,  179 => 53,  176 => 52,  174 => 51,  171 => 50,  157 => 49,  149 => 44,  145 => 43,  137 => 38,  133 => 37,  127 => 34,  122 => 31,  119 => 30,  101 => 29,  98 => 28,  95 => 27,  93 => 26,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block content %}
\t<section class=\"page-top-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"page-info-box\">
\t\t\t\t<div class=\"page-info-icon\">
\t\t\t\t\t<i class=\"fa fa-headphones\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-info-text\">
\t\t\t\t\t<h2>Albums</h2>
\t\t\t\t\t<div class=\"site-breadcrumb\">
\t\t\t\t\t\t<a href=\"/\">Home</a>
\t\t\t\t\t\t<span>Albums</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"albums__page\">
\t\t<div class=\"container\">
\t\t\t<div class=\"albums__page__title\">
\t\t\t\t<h2>Discover our newest musicalbums and singles</h2>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t{% set npag = app.request.attributes.get('pg') %}
\t\t\t\t{% set lowerLimit = (npag - 1) * items %}
\t\t\t\t{% set upperLimit = lowerLimit + items + 1 %}
\t\t\t\t{% for i in contenido %}
\t\t\t\t\t{% if loop.index > lowerLimit and loop.index < upperLimit %}
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t<div class=\"album_card\">
\t\t\t\t\t\t\t\t<div class=\"album__pic\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset(i.imagen, 'images_album') }} \" alt=\"imagen album\">
\t\t\t\t\t\t\t\t\t<div class=\"album__title\">
\t\t\t\t\t\t\t\t\t\t<div class=\"album_title_inner\">
\t\t\t\t\t\t\t\t\t\t\t<h4>{{i.titulo}}</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>{{i.genero}}</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"album__links\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{ asset('google-play.png', 'images') }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{ asset('itune.png', 'images') }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}

\t\t\t\t{% set gener = app.request.attributes.get('gen') %}
\t\t\t\t<div class=\"site__pagination\">
\t\t\t\t\t{% if npag != 1 %}
\t\t\t\t\t\t<a href='{{ path('productos',{ 'gen':gener, 'pg': npag - 1 }) }}' class=\"next-page\">Prev</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% set paginado = ((contenido|length)/3)|round(0,'ceil') %}
\t\t\t\t\t{% for i in 1.. paginado %}
\t\t\t\t\t\t<a href='{{ path('productos',{ 'gen':gener, 'pg': i }) }}' {% if npag == i %} class=\"active\" {% endif %}>{{i}}</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% if npag != paginado %}
\t\t\t\t\t\t<a href='{{ path('productos',{ 'gen':gener, 'pg': npag + 1 }) }}' class=\"next-page\">Next</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"site__pagination\">
\t\t\t\t\t{% set genres_length = (genres|length - 1 ) %}
\t\t\t\t\t{% for i in 0.. genres_length %}
\t\t\t\t\t\t<a href='{{ path('productos',{ 'gen': genres[i] }) }}' {% if gener == genres[i] %} class=\"active\" {% endif %}>{{genres[i]}}</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<a href='{{ path('productos',{ 'gen': 'all' }) }}' {% if gener == 'all' %} class=\"active\" {% endif %}>TODOS</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t{% endblock %}
", "albums.html.twig", "C:\\Users\\botolo\\DAW2\\templates\\albums.html.twig");
    }
}
