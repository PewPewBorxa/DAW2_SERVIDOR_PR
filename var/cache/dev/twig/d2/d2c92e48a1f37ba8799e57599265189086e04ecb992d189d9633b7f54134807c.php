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

/* ticket.html.twig */
class __TwigTemplate_989bab5a7d9244020ba448af79c761715963a7e12d4bd31b748043bbea2c0ae2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">
<head>
\t<title>Hnband | Music Event HTML Template</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"description\" content=\"Hnband Music Event HTML Template\">
\t<meta name=\"keywords\" content=\"music, html\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<!-- Stylesheets -->
\t<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\"/>
\t<link rel=\"stylesheet\" href=\"css/font-awesome.min.css\"/>
\t<link rel=\"stylesheet\" href=\"css/slicknav.min.css\"/>
\t<link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\"/>

\t<!-- Main Stylesheets -->
\t<link rel=\"stylesheet\" href=\"css/style.css\"/>


\t<!--[if lt IE 9]>
\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t<![endif]-->

</head>
<body>
\t<!-- Page Preloder -->
\t<div id=\"preloder\">
\t\t<div class=\"loader\"></div>
\t</div>

\t<!-- Header Section -->
\t<header>
\t\t<div class=\"header__warp\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t<a href=\"/\" class=\"site__logo\">
\t\t\t\t\t\t<img src=\"img/logo.png\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<ul class=\"main__menu\">
\t\t\t\t\t\t<li><a href=\"/\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"/about\">About</a></li>
\t\t\t\t\t\t<li><a href=\"/albums\">Albums</a></li>
\t\t\t\t\t\t<li><a href=\"/tours\">Tours</a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"menu--active\">Pages</a>
\t\t\t\t\t\t\t<ul class=\"sub__menu\">
\t\t\t\t\t\t\t\t<li><a href=\"/gallery\">Gallery</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"/ticket\">Ticket</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"/albums_details\">Albums details</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"/sb\">Blog single</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"/blog\">Blog</a></li>
\t\t\t\t\t\t<li><a href=\"/contact\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 text-lg-right d-none d-lg-block\">
\t\t\t\t\t<a href=\"#\" class=\"site__btn\">Buy tickets</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>    
\t<!-- Header Section end -->

\t<!-- Page top section -->
\t<section class=\"page-top-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"page-info-box\">
\t\t\t\t<div class=\"page-info-icon\">
\t\t\t\t\t<i class=\"fa fa-headphones\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-info-text\">
\t\t\t\t\t<h2>Buy tickets</h2>
\t\t\t\t\t<div class=\"site-breadcrumb\">
\t\t\t\t\t\t<a href=\"/\">Home</a>
\t\t\t\t\t\t<span>Buy tickets</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Page top section end -->

\t<!-- Tickets page -->
\t<section class=\"tickets__page\">
\t\t<div class=\"container\">
\t\t\t<div class=\"show__item\">
\t\t\t\t<div class=\"show__date\">
\t\t\t\t\t<h2>16</h2>
\t\t\t\t\t<p>SEP</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__title\">
\t\t\t\t\t<h2>Sunburn Goa 2019</h2>
\t\t\t\t\t<p>EDM  |  English  |  Age 15+  |  8hrs</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__location\">
\t\t\t\t\t<p><i class=\"fa fa-map-marker\"></i> Vagator: Goa </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__time\">
\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i>09:00PM</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ticket-pic\">
\t\t\t\t<img src=\"img/ticket.jpg\" alt=\"\">
\t\t\t</div>
\t\t\t<div class=\"ticket-select\">
\t\t\t\t<div class=\"ticket-left pt-2\">
\t\t\t\t\t<h2>Your Selection</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"ticket-right\">
\t\t\t\t\t<div class=\"row m-0\">
\t\t\t\t\t\t<div class=\"col-lg-4 p-0\">
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option>Section</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 p-0\">
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option>Row</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 p-0\">
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option>Seat</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ticket-select\">
\t\t\t\t<div class=\"ticket-left\">
\t\t\t\t\t<h2>Tickets</h2>
\t\t\t\t\t<h6>£86.15 ea</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"ticket-right\">
\t\t\t\t\t<div class=\"row m-0\">
\t\t\t\t\t\t<div class=\"col-lg-4 p-0\">
\t\t\t\t\t\t\t<div class=\"quantity\">
\t\t\t\t\t\t\t\t<div class=\"pro-qty\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"1\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ticket-footer\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<h3>Full Price Ticket</h3>
\t\t\t\t\t\t<p>( Price Includes facility fee £1.75 )<br>( Price Includes service fee £9.40 </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 text-left text-md-center mb-3\">
\t\t\t\t\t\t<h6><i class=\"fa fa-ticket\"></i>×  86.15</h6>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 text-left text-md-right pt-3\">
\t\t\t\t\t\t<button class=\"site__btn\">Get tickets</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Tickets page end -->
\t
\t<!-- Footer Section -->
\t<footer class=\"footer__section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"row m-0\">
\t\t\t\t\t<div class=\"col-lg-8 p-0\">
\t\t\t\t\t\t<div class=\"footer-form-warp\">
\t\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t\t<div class=\"sub-title\">Contact us</div>
\t\t\t\t\t\t\t\t<h2>Got a Question?</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Name\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"E-mail\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t<textarea placeholder=\"Message\"></textarea>
\t\t\t\t\t\t\t\t\t\t<button class=\"site__btn\">Send Email</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 p-0\">
\t\t\t\t\t\t<img src=\"img/footer-img.jpg\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"info__box\">
\t\t\t\t\t\t<div class=\"info_icon\">
\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>333 Middle Winchendon Rd, <br> Rindge, NH 03461 </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"info__box info_box_center\">
\t\t\t\t\t\t<div class=\"info_icon\">
\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>125-711-811 | 125-668-886  <br> Support.music@gmail.com</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"footer__social\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t<div class=\"footer__copyright__text\">
\t\t\t\t<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a></p>
\t\t\t</div>
\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t</div>
\t</footer>
\t<!-- Footer Section end -->

\t<!--====== Javascripts & Jquery ======-->
\t<script src=\"js/vendor/jquery-3.2.1.min.js\"></script>
\t<script src=\"js/jquery.slicknav.min.js\"></script>
\t<script src=\"js/owl.carousel.min.js\"></script>
\t<script src=\"js/jquery.magnific-popup.min.js\"></script>
\t<script src=\"js/main.js\"></script>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ticket.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">
<head>
\t<title>Hnband | Music Event HTML Template</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"description\" content=\"Hnband Music Event HTML Template\">
\t<meta name=\"keywords\" content=\"music, html\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<!-- Stylesheets -->
\t<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\"/>
\t<link rel=\"stylesheet\" href=\"css/font-awesome.min.css\"/>
\t<link rel=\"stylesheet\" href=\"css/slicknav.min.css\"/>
\t<link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\"/>

\t<!-- Main Stylesheets -->
\t<link rel=\"stylesheet\" href=\"css/style.css\"/>


\t<!--[if lt IE 9]>
\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t<![endif]-->

</head>
<body>
\t<!-- Page Preloder -->
\t<div id=\"preloder\">
\t\t<div class=\"loader\"></div>
\t</div>

\t<!-- Header Section -->
\t<header>
\t\t<div class=\"header__warp\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t<a href=\"/\" class=\"site__logo\">
\t\t\t\t\t\t<img src=\"img/logo.png\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<ul class=\"main__menu\">
\t\t\t\t\t\t<li><a href=\"/\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"/about\">About</a></li>
\t\t\t\t\t\t<li><a href=\"/albums\">Albums</a></li>
\t\t\t\t\t\t<li><a href=\"/tours\">Tours</a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"menu--active\">Pages</a>
\t\t\t\t\t\t\t<ul class=\"sub__menu\">
\t\t\t\t\t\t\t\t<li><a href=\"/gallery\">Gallery</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"/ticket\">Ticket</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"/albums_details\">Albums details</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"/sb\">Blog single</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"/blog\">Blog</a></li>
\t\t\t\t\t\t<li><a href=\"/contact\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 text-lg-right d-none d-lg-block\">
\t\t\t\t\t<a href=\"#\" class=\"site__btn\">Buy tickets</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>    
\t<!-- Header Section end -->

\t<!-- Page top section -->
\t<section class=\"page-top-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"page-info-box\">
\t\t\t\t<div class=\"page-info-icon\">
\t\t\t\t\t<i class=\"fa fa-headphones\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-info-text\">
\t\t\t\t\t<h2>Buy tickets</h2>
\t\t\t\t\t<div class=\"site-breadcrumb\">
\t\t\t\t\t\t<a href=\"/\">Home</a>
\t\t\t\t\t\t<span>Buy tickets</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Page top section end -->

\t<!-- Tickets page -->
\t<section class=\"tickets__page\">
\t\t<div class=\"container\">
\t\t\t<div class=\"show__item\">
\t\t\t\t<div class=\"show__date\">
\t\t\t\t\t<h2>16</h2>
\t\t\t\t\t<p>SEP</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__title\">
\t\t\t\t\t<h2>Sunburn Goa 2019</h2>
\t\t\t\t\t<p>EDM  |  English  |  Age 15+  |  8hrs</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__location\">
\t\t\t\t\t<p><i class=\"fa fa-map-marker\"></i> Vagator: Goa </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__time\">
\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i>09:00PM</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ticket-pic\">
\t\t\t\t<img src=\"img/ticket.jpg\" alt=\"\">
\t\t\t</div>
\t\t\t<div class=\"ticket-select\">
\t\t\t\t<div class=\"ticket-left pt-2\">
\t\t\t\t\t<h2>Your Selection</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"ticket-right\">
\t\t\t\t\t<div class=\"row m-0\">
\t\t\t\t\t\t<div class=\"col-lg-4 p-0\">
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option>Section</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 p-0\">
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option>Row</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 p-0\">
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t<option>Seat</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ticket-select\">
\t\t\t\t<div class=\"ticket-left\">
\t\t\t\t\t<h2>Tickets</h2>
\t\t\t\t\t<h6>£86.15 ea</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"ticket-right\">
\t\t\t\t\t<div class=\"row m-0\">
\t\t\t\t\t\t<div class=\"col-lg-4 p-0\">
\t\t\t\t\t\t\t<div class=\"quantity\">
\t\t\t\t\t\t\t\t<div class=\"pro-qty\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"1\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ticket-footer\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<h3>Full Price Ticket</h3>
\t\t\t\t\t\t<p>( Price Includes facility fee £1.75 )<br>( Price Includes service fee £9.40 </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 text-left text-md-center mb-3\">
\t\t\t\t\t\t<h6><i class=\"fa fa-ticket\"></i>×  86.15</h6>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 text-left text-md-right pt-3\">
\t\t\t\t\t\t<button class=\"site__btn\">Get tickets</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Tickets page end -->
\t
\t<!-- Footer Section -->
\t<footer class=\"footer__section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"row m-0\">
\t\t\t\t\t<div class=\"col-lg-8 p-0\">
\t\t\t\t\t\t<div class=\"footer-form-warp\">
\t\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t\t<div class=\"sub-title\">Contact us</div>
\t\t\t\t\t\t\t\t<h2>Got a Question?</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Name\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"E-mail\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t<textarea placeholder=\"Message\"></textarea>
\t\t\t\t\t\t\t\t\t\t<button class=\"site__btn\">Send Email</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 p-0\">
\t\t\t\t\t\t<img src=\"img/footer-img.jpg\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"info__box\">
\t\t\t\t\t\t<div class=\"info_icon\">
\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>333 Middle Winchendon Rd, <br> Rindge, NH 03461 </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"info__box info_box_center\">
\t\t\t\t\t\t<div class=\"info_icon\">
\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>125-711-811 | 125-668-886  <br> Support.music@gmail.com</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"footer__social\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t<div class=\"footer__copyright__text\">
\t\t\t\t<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a></p>
\t\t\t</div>
\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t</div>
\t</footer>
\t<!-- Footer Section end -->

\t<!--====== Javascripts & Jquery ======-->
\t<script src=\"js/vendor/jquery-3.2.1.min.js\"></script>
\t<script src=\"js/jquery.slicknav.min.js\"></script>
\t<script src=\"js/owl.carousel.min.js\"></script>
\t<script src=\"js/jquery.magnific-popup.min.js\"></script>
\t<script src=\"js/main.js\"></script>

</body>
</html>
", "ticket.html.twig", "C:\\Users\\botolo\\DAW2\\templates\\ticket.html.twig");
    }
}
