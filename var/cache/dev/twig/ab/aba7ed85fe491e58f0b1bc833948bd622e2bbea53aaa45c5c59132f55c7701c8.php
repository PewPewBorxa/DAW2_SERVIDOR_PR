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

/* layoutlogin.html.twig */
class __TwigTemplate_123a4d9370a51adc123d2486544bf859c21d611cca83777bcff86b91fb990efd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'preloader' => [$this, 'block_preloader'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'scripts' => [$this, 'block_scripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layoutlogin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layoutlogin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layoutlogin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "\t<title>Hnband | Music Event HTML Template</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"description\" content=\"Hnband Music Event HTML Template\">
\t<meta name=\"keywords\" content=\"music, html\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap.min.css", "css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("font-awesome.min.css", "css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("slicknav.min.css", "css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("owl.carousel.min.css", "css"), "html", null, true);
        echo "\"/>


\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css", "css"), "html", null, true);
        echo "\"/>

\t<style>
\t\tbody{
\t\t\tbackground-color:black;
\t\t}
\t</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_preloader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preloader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preloader"));

        // line 26
        echo "
\t<div id=\"preloder\">
\t\t<div class=\"loader\"></div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "\t";
        $context["page"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "attributes", [], "any", false, false, false, 33), "get", [0 => "_route"], "method", false, false, false, 33);
        // line 34
        echo "\t<header>
\t\t<div class=\"header__warp\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t<a href=\"/\" class=\"site__logo\">
\t\t\t\t\t\t<img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png", "images"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 53
        echo "\t<footer class=\"footer__section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer__copyright__text\">
\t\t\t\t<p>Copyright &copy;
\t\t\t\t\t<script>
\t\t\t\t\t\tdocument.write(new Date().getFullYear());
\t\t\t\t\t</script>
\t\t\t\t\tAll rights reserved | This template is made with
\t\t\t\t\t<i class=\"fa fa-heart\" aria-hidden=\"true\"></i>
\t\t\t\t\tby
\t\t\t\t\t<a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
\t\t\t\t</p>
\t\t\t</div>

\t\t</div>
\t</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 73
        echo "
\t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-3.2.1.min.js", "js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery.slicknav.min.js", "js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("owl.carousel.min.js", "js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery.magnific-popup.min.js", "js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main.js", "js"), "html", null, true);
        echo "\"></script>


\t<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery.jplayer.min.js", "js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jplayer.playlist.min.js", "js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery.nicescroll.min.js", "js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("audioInit-1.js", "js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videoInit.js", "js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layoutlogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 85,  279 => 84,  275 => 83,  271 => 82,  267 => 81,  261 => 78,  257 => 77,  253 => 76,  249 => 75,  245 => 74,  242 => 73,  232 => 72,  206 => 53,  196 => 52,  178 => 48,  161 => 39,  154 => 34,  151 => 33,  141 => 32,  127 => 26,  117 => 25,  99 => 16,  93 => 13,  89 => 12,  85 => 11,  81 => 10,  73 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block head %}
\t<title>Hnband | Music Event HTML Template</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"description\" content=\"Hnband Music Event HTML Template\">
\t<meta name=\"keywords\" content=\"music, html\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t<link rel=\"stylesheet\" href=\"{{ asset('bootstrap.min.css', 'css') }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ asset('font-awesome.min.css', 'css') }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ asset('slicknav.min.css', 'css') }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ asset('owl.carousel.min.css', 'css') }}\"/>


\t<link rel=\"stylesheet\" href=\"{{ asset('style.css', 'css') }}\"/>

\t<style>
\t\tbody{
\t\t\tbackground-color:black;
\t\t}
\t</style>
{% endblock %}

{% block preloader %}

\t<div id=\"preloder\">
\t\t<div class=\"loader\"></div>
\t</div>
{% endblock %}

{% block header %}
\t{% set page = app.request.attributes.get('_route') %}
\t<header>
\t\t<div class=\"header__warp\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t<a href=\"/\" class=\"site__logo\">
\t\t\t\t\t\t<img src=\"{{ asset('logo.png', 'images') }}\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
{% endblock %}


{% block content %}
{% endblock %}


{% block footer %}
\t<footer class=\"footer__section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer__copyright__text\">
\t\t\t\t<p>Copyright &copy;
\t\t\t\t\t<script>
\t\t\t\t\t\tdocument.write(new Date().getFullYear());
\t\t\t\t\t</script>
\t\t\t\t\tAll rights reserved | This template is made with
\t\t\t\t\t<i class=\"fa fa-heart\" aria-hidden=\"true\"></i>
\t\t\t\t\tby
\t\t\t\t\t<a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
\t\t\t\t</p>
\t\t\t</div>

\t\t</div>
\t</footer>
{% endblock %}


{% block scripts %}

\t<script src=\"{{ asset('vendor/jquery-3.2.1.min.js', 'js') }}\"></script>
\t<script src=\"{{ asset('jquery.slicknav.min.js', 'js') }}\"></script>
\t<script src=\"{{ asset('owl.carousel.min.js', 'js') }}\"></script>
\t<script src=\"{{ asset('jquery.magnific-popup.min.js', 'js') }}\"></script>
\t<script src=\"{{ asset('main.js', 'js') }}\"></script>


\t<script src=\"{{ asset('jquery.jplayer.min.js', 'js') }}\"></script>
\t<script src=\"{{ asset('jplayer.playlist.min.js', 'js') }}\"></script>
\t<script src=\"{{ asset('jquery.nicescroll.min.js', 'js') }}\"></script>
\t<script src=\"{{ asset('audioInit-1.js', 'js') }}\"></script>
\t<script src=\"{{ asset('videoInit.js', 'js') }}\"></script>
{% endblock %}
", "layoutlogin.html.twig", "C:\\Users\\botolo\\DAW2\\templates\\layoutlogin.html.twig");
    }
}
