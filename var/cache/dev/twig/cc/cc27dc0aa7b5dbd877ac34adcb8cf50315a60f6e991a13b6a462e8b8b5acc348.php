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

/* contact.html.twig */
class __TwigTemplate_503b0fcf6d95b51ab89cea651738f66ec0d77542add75905039611eeee84db46 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "contact.html.twig", 1);
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
\t\t\t\t\t<h2>Contact</h2>
\t\t\t\t\t<div class=\"site-breadcrumb\">
\t\t\t\t\t\t<a href=\"/\">Home</a>
\t\t\t\t\t\t<span>Contact</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"contact__page\">
\t\t<div class=\"container\">
\t\t\t<div class=\"contact-top\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"map\">
\t\t\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10784.188505644011!2d19.053119335158936!3d47.48899529453826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1543907528304\" style=\"border:0\" allowfullscreen></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"contact-text\">
\t\t\t\t\t\t\t<h3>Get in touch</h3>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan lacus vel facilisis ultrices gravida.</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>333 Middle Winchendon Rd, Rindge, NH 03461
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>125-711-811
\t\t\t\t\t\t\t\t\t<span>|</span>
\t\t\t\t\t\t\t\t\t125-668-886
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-headphones\"></i>Support.music@gmail.com
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"contact__social\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-youtube-play\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_start', ["attr" => ["class" => "contact-form", "method" => "POST"]]);
        echo "
\t\t\t<h3>Leave a Message</h3>
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "name", [], "any", false, false, false, 69), 'widget', ["attr" => ["placeholder" => "Name", "required" => ""]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), 'widget', ["attr" => ["placeholder" => "Email", "required" => ""]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "website", [], "any", false, false, false, 75), 'widget', ["attr" => ["placeholder" => "Website", "required" => ""]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "message", [], "any", false, false, false, 78), 'widget', ["attr" => ["placeholder" => "Message", "required" => "", "rows" => "5"]]);
        echo "
\t\t\t\t\t";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "send", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "site__btn", "value" => "Send"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        echo "
\t\t\t\t";
        // line 82
        if ((0 !== twig_compare((isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 82, $this->source); })()), ""))) {
            // line 83
            echo "\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\talert('Tu información ha sido enviada');
\t\t\t\t\t</script>
\t\t\t\t\t";
            // line 86
            $context["alert"] = "";
            // line 87
            echo "\t\t\t\t";
        }
        // line 88
        echo "\t\t\t</div>
\t\t</div>
\t</form>
</div></section>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 88,  179 => 87,  177 => 86,  172 => 83,  170 => 82,  166 => 81,  161 => 79,  157 => 78,  151 => 75,  145 => 72,  139 => 69,  131 => 64,  68 => 3,  58 => 2,  35 => 1,);
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
\t\t\t\t\t<h2>Contact</h2>
\t\t\t\t\t<div class=\"site-breadcrumb\">
\t\t\t\t\t\t<a href=\"/\">Home</a>
\t\t\t\t\t\t<span>Contact</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"contact__page\">
\t\t<div class=\"container\">
\t\t\t<div class=\"contact-top\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"map\">
\t\t\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10784.188505644011!2d19.053119335158936!3d47.48899529453826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1543907528304\" style=\"border:0\" allowfullscreen></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"contact-text\">
\t\t\t\t\t\t\t<h3>Get in touch</h3>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan lacus vel facilisis ultrices gravida.</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>333 Middle Winchendon Rd, Rindge, NH 03461
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>125-711-811
\t\t\t\t\t\t\t\t\t<span>|</span>
\t\t\t\t\t\t\t\t\t125-668-886
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-headphones\"></i>Support.music@gmail.com
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"contact__social\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-youtube-play\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{{ form_start(form, {'attr': {'class':'contact-form','method':'POST'}}) }}
\t\t\t<h3>Leave a Message</h3>
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t{{ form_widget(form.name,{'attr':{'placeholder':'Name','required':''}})}}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t{{ form_widget(form.email,{'attr':{'placeholder':'Email','required':''}})}}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t{{ form_widget(form.website,{'attr':{'placeholder':'Website','required':''}})}}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t{{ form_widget(form.message,{'attr':{'placeholder':'Message','required':'','rows':'5'}})}}
\t\t\t\t\t{{ form_widget(form.send,{'attr':{'class':'site__btn','value':'Send'}})}}
\t\t\t\t</div>
\t\t\t\t{{ form_end(form) }}
\t\t\t\t{% if alert != '' %}
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\talert('Tu información ha sido enviada');
\t\t\t\t\t</script>
\t\t\t\t\t{% set alert = '' %}
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</form>
</div></section>{% endblock %}
", "contact.html.twig", "C:\\Users\\botolo\\DAW2\\templates\\contact.html.twig");
    }
}
