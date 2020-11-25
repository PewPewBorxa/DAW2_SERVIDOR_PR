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

/* albums-details.html.twig */
class __TwigTemplate_0bd5962c3e53349791e4ea9d6aab14a50b7829e8225f70086d23937b4821c913 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "albums-details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "albums-details.html.twig"));

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
\t\t\t\t\t\t<li><a href=\"/albums\" class=\"menu--active\">Albums</a></li>
\t\t\t\t\t\t<li><a href=\"/tours\">Tours</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Pages</a>
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
\t\t\t\t\t<h2>Detail Albums</h2>
\t\t\t\t\t<div class=\"site-breadcrumb\">
\t\t\t\t\t\t<a href=\"/\">Home</a>
\t\t\t\t\t\t<a href=\"/\">Albums</a>
\t\t\t\t\t\t<span>Sweet but psycho</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Page top section end -->

\t<!-- Albums page -->
\t<section class=\"albums__page\">
\t\t<div class=\"container\">
\t\t\t<div class=\"player-two-style\">
\t\t\t\t<div id=\"jquery_jplayer_2\" class=\"jp-jplayer\"></div>
\t\t\t\t<div id=\"jp_container_2\" class=\"jp-audio\" role=\"application\" aria-label=\"media player\">
\t\t\t\t\t<div class=\"jp-type-playlist\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6 pr-0\">
\t\t\t\t\t\t\t\t<div class=\"player_left\" id=\"player__thumb_two\">
\t\t\t\t\t\t\t\t\t<div class=\"player_left_inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"conterols\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-gui jp-interface\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-time-holder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">&nbsp;</div> /
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-duration\" role=\"timer\" aria-label=\"duration\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-previous\" role=\"button\" tabindex=\"0\"><i class=\"fa fa-step-backward\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-play\" role=\"button\" tabindex=\"0\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-next\" role=\"button\" tabindex=\"0\"><i class=\"fa fa-step-forward\" ></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-mute\" role=\"button\" tabindex=\"0\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-bar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-bar-value\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h3 class=\"player-title\">Track list</h3>
\t\t\t\t\t\t\t\t\t<div class=\"jp-playlist audio-playlist\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>&nbsp;</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"jp-no-solution\">
\t\t\t\t\t\t\t\t\t\t<span>Update Required</span>
\t\t\t\t\t\t\t\t\t\tTo play the media you will need to either update your browser to a recent version or update your <a href=\"http://get.adobe.com/flashplayer/\" target=\"_blank\">Flash plugin</a>.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<h3 class=\"album-title\">AVAILABLE ON</h3>
\t\t\t\t\t<div class=\"avablable__links\">
\t\t\t\t\t\t<a href=\"#\"><img src=\"img/itune.png\" alt=\"\"></a>
\t\t\t\t\t\t<a href=\"#\"><img src=\"img/google-play.png\" alt=\"\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"album-text\">
\t\t\t\t\t\t<h3 class=\"album-title\">ABOUT ALBUM</h3>
\t\t\t\t\t\t<p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in meis. Meis an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eiuser lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Measa facilisis urbanies tas moderatius id.</p>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"fa fa-star\"></i>David Wade</li>
\t\t\t\t\t\t\t<li><i class=\"fa fa-tag\"></i>Vibra Records</li>
\t\t\t\t\t\t\t<li><i class=\"fa fa-calendar\"></i>December 13, 2018</li>
\t\t\t\t\t\t\t<li><i class=\"fa fa-music\"></i>Electronic, Hip Hop, Indie, Rock</li>
\t\t\t\t\t\t\t<li><i class=\"fa fa-user\"></i>Jose Freeman, Brian Banks, William Curtis</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Albums page end -->

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

\t<!--====== Music Players ======-->
\t<script src=\"js/jquery.jplayer.min.js\"></script>
\t<script src=\"js/jplayer.playlist.min.js\"></script>
\t<script src=\"js/audioInit-2.js\"></script>

\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "albums-details.html.twig";
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
\t\t\t\t\t\t<li><a href=\"/albums\" class=\"menu--active\">Albums</a></li>
\t\t\t\t\t\t<li><a href=\"/tours\">Tours</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Pages</a>
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
\t\t\t\t\t<h2>Detail Albums</h2>
\t\t\t\t\t<div class=\"site-breadcrumb\">
\t\t\t\t\t\t<a href=\"/\">Home</a>
\t\t\t\t\t\t<a href=\"/\">Albums</a>
\t\t\t\t\t\t<span>Sweet but psycho</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Page top section end -->

\t<!-- Albums page -->
\t<section class=\"albums__page\">
\t\t<div class=\"container\">
\t\t\t<div class=\"player-two-style\">
\t\t\t\t<div id=\"jquery_jplayer_2\" class=\"jp-jplayer\"></div>
\t\t\t\t<div id=\"jp_container_2\" class=\"jp-audio\" role=\"application\" aria-label=\"media player\">
\t\t\t\t\t<div class=\"jp-type-playlist\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-6 pr-0\">
\t\t\t\t\t\t\t\t<div class=\"player_left\" id=\"player__thumb_two\">
\t\t\t\t\t\t\t\t\t<div class=\"player_left_inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"conterols\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-gui jp-interface\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-time-holder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">&nbsp;</div> /
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-duration\" role=\"timer\" aria-label=\"duration\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-previous\" role=\"button\" tabindex=\"0\"><i class=\"fa fa-step-backward\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-play\" role=\"button\" tabindex=\"0\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-next\" role=\"button\" tabindex=\"0\"><i class=\"fa fa-step-forward\" ></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-mute\" role=\"button\" tabindex=\"0\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-bar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-bar-value\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h3 class=\"player-title\">Track list</h3>
\t\t\t\t\t\t\t\t\t<div class=\"jp-playlist audio-playlist\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>&nbsp;</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"jp-no-solution\">
\t\t\t\t\t\t\t\t\t\t<span>Update Required</span>
\t\t\t\t\t\t\t\t\t\tTo play the media you will need to either update your browser to a recent version or update your <a href=\"http://get.adobe.com/flashplayer/\" target=\"_blank\">Flash plugin</a>.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<h3 class=\"album-title\">AVAILABLE ON</h3>
\t\t\t\t\t<div class=\"avablable__links\">
\t\t\t\t\t\t<a href=\"#\"><img src=\"img/itune.png\" alt=\"\"></a>
\t\t\t\t\t\t<a href=\"#\"><img src=\"img/google-play.png\" alt=\"\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"album-text\">
\t\t\t\t\t\t<h3 class=\"album-title\">ABOUT ALBUM</h3>
\t\t\t\t\t\t<p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in meis. Meis an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eiuser lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Measa facilisis urbanies tas moderatius id.</p>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><i class=\"fa fa-star\"></i>David Wade</li>
\t\t\t\t\t\t\t<li><i class=\"fa fa-tag\"></i>Vibra Records</li>
\t\t\t\t\t\t\t<li><i class=\"fa fa-calendar\"></i>December 13, 2018</li>
\t\t\t\t\t\t\t<li><i class=\"fa fa-music\"></i>Electronic, Hip Hop, Indie, Rock</li>
\t\t\t\t\t\t\t<li><i class=\"fa fa-user\"></i>Jose Freeman, Brian Banks, William Curtis</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Albums page end -->

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

\t<!--====== Music Players ======-->
\t<script src=\"js/jquery.jplayer.min.js\"></script>
\t<script src=\"js/jplayer.playlist.min.js\"></script>
\t<script src=\"js/audioInit-2.js\"></script>

\t</body>
</html>
", "albums-details.html.twig", "C:\\Users\\botolo\\DAW2\\templates\\albums-details.html.twig");
    }
}
