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

/* single-blog.html.twig */
class __TwigTemplate_a005ca887866552a0b900af90535142023396d9bf6caad4cf462666a906e53a5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "single-blog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "single-blog.html.twig"));

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
\t\t\t\t\t\t<li><a href=\"\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"/about\">About</a></li>
\t\t\t\t\t\t<li><a href=\"/albums\">Albums</a></li>
\t\t\t\t\t\t<li><a href=\"/tours\">Tours</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Pages</a>
\t\t\t\t\t\t\t<ul class=\"sub__menu\">
\t\t\t\t\t\t\t\t<li><a href=\"/gallery\">Gallery</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"/ticket\">Ticket</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"/albums_details\">Albums details</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"/sb\">Blog single</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"/blog\" class=\"menu--active\">Blog</a></li>
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
\t\t\t\t\t<h2>Single posts</h2>
\t\t\t\t\t<div class=\"site-breadcrumb\">
\t\t\t\t\t\t<a href=\"/\">Home</a>
\t\t\t\t\t\t<span>Single posts</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Page top section end -->

\t<!-- Blog page -->
\t<section class=\"blog_single_page\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 blog-details-warp\">
\t\t\t\t\t<div class=\"blog__details\">
\t\t\t\t\t\t<h2 class=\"blog__title\">FC Barcelona Inks a Joint Venture Deal With Sony Music Entertainment</h2>
\t\t\t\t\t\t<div class=\"blog_metas\">
\t\t\t\t\t\t\t<div class=\"blog_meta\">by <a href=\"#\">Admin</a></div>
\t\t\t\t\t\t\t<div class=\"blog_meta\">Aug,15, 2019</div>
\t\t\t\t\t\t\t<div class=\"blog_meta\">20 Comment</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"blog__thumb\">
\t\t\t\t\t\t\t<img src=\"img/blog/blog-big.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium. Excepteur sint occaecat cupidatat non proident sculpa consequat  anim id est laborum.</p>
\t\t\t\t\t\t<p>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
\t\t\t\t\t\t<h5>You Can Buy For Less Than A College Degree</h5>
\t\t\t\t\t\t<p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t<h6>Excepteur sint occaecat cupidatat non proident, sunt in. . Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</h6>
\t\t\t\t\t\t\t<p>MEIKE PETERS</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum felis ac, volutpat volutpat mi qui dolorem.</p>
\t\t\t\t\t\t<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t<div class=\"blog__tags\">
\t\t\t\t\t\t\t\t<a href=\"#\">Body buiding</a>
\t\t\t\t\t\t\t\t<a href=\"#\">Yoga</a>
\t\t\t\t\t\t\t\t<a href=\"#\">Weightloss</a>
\t\t\t\t\t\t\t\t<a href=\"#\">Streching</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t<div class=\"blog__share text-left text-md-right\">
\t\t\t\t\t\t\t\t<span>Share</span>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i>82</a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i>24</a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-envelope-o\"></i>08</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"author__card\">
\t\t\t\t\t\t<div class=\"author__card__text\">
\t\t\t\t\t\t\t<img src=\"img/blog/author.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>Lena Mollein.</h4>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
\t\t\t\t\t\t\t<div class=\"author__social\">
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"comment-warp\">
\t\t\t\t\t\t<h2 class=\"comment-title\">comment</h2>
\t\t\t\t\t\t<div class=\"comment-list\">
\t\t\t\t\t\t\t<div class=\"comment-item has__child__comment\">
\t\t\t\t\t\t\t\t<div class=\"comment-head\">
\t\t\t\t\t\t\t\t\t<img src=\"img/blog/comment-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Brandon Kelley</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-clock-o\"></i>Aug,15, 2019</div>
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-heart-o\"></i>Like</div>
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-share-square-o\"></i>Reply</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"comment-item reply__comment\">
\t\t\t\t\t\t\t\t<div class=\"comment-head\">
\t\t\t\t\t\t\t\t\t<img src=\"img/blog/comment-2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Brandon Kelley</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-clock-o\"></i>Aug,15, 2019</div>
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-heart-o\"></i>Like</div>
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-share-square-o\"></i>Reply</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"comment-item\">
\t\t\t\t\t\t\t\t<div class=\"comment-head\">
\t\t\t\t\t\t\t\t\t<img src=\"img/blog/comment-3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Brandon Kelley</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-clock-o\"></i>Aug,15, 2019</div>
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-heart-o\"></i>Like</div>
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-share-square-o\"></i>Reply</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h2 class=\"comment-title\">Leave a comment</h2>
\t\t\t\t\t\t<form class=\"comment-form\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Name\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<input type=\"url\" placeholder=\"Website\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<textarea placeholder=\"Comment\"></textarea>
\t\t\t\t\t\t\t\t\t<button class=\"site__btn\">Submit</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-8 sidebar\">
\t\t\t\t\t<div class=\"widget-item\">
\t\t\t\t\t\t<h4 class=\"widget-title\">Feature posts</h4>
\t\t\t\t\t\t<div class=\"feature-post-widget\">
\t\t\t\t\t\t\t<div class=\"fp-item\">
\t\t\t\t\t\t\t\t<img src=\"img/blog/blog-sidebar/1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"fp-text\">
\t\t\t\t\t\t\t\t\t<h6>A Monster Prom poster got hijacked for a Papa Roach concert...</h6>
\t\t\t\t\t\t\t\t\t<p>Aug,15, 2019</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fp-item\">
\t\t\t\t\t\t\t\t<img src=\"img/blog/blog-sidebar/2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"fp-text\">
\t\t\t\t\t\t\t\t\t<h6>Facebook wants to read your thoughts with its augmented...</h6>
\t\t\t\t\t\t\t\t\t<p>Aug,15, 2019</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fp-item\">
\t\t\t\t\t\t\t\t<img src=\"img/blog/blog-sidebar/3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"fp-text\">
\t\t\t\t\t\t\t\t\t<h6>This gaming laptop with a GTX 1660 Ti and 32GB of RAM is down...</h6>
\t\t\t\t\t\t\t\t\t<p>Aug,15, 2019</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fp-item\">
\t\t\t\t\t\t\t\t<img src=\"img/blog/blog-sidebar/4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"fp-text\">
\t\t\t\t\t\t\t\t\t<h6>Jalopy developer is making a game where you 'build stuff...</h6>
\t\t\t\t\t\t\t\t\t<p>Aug,15, 2019</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-item\">
\t\t\t\t\t\t<h4 class=\"widget-title\">Instagram</h4>
\t\t\t\t\t\t<div class=\"instagram-widget\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"img/blog/instagram/1.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"img/blog/instagram/2.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"img/blog/instagram/3.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"img/blog/instagram/4.jpg\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-item\">
\t\t\t\t\t\t<h4 class=\"widget-title\">Subscribe</h4>
\t\t\t\t\t\t<div class=\"subscribe-widget\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor.</p>
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Name\">
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t<button class=\"site__btn\">Subscribe</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Blog page end -->
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
        return "single-blog.html.twig";
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
\t\t\t\t\t\t<li><a href=\"\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"/about\">About</a></li>
\t\t\t\t\t\t<li><a href=\"/albums\">Albums</a></li>
\t\t\t\t\t\t<li><a href=\"/tours\">Tours</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Pages</a>
\t\t\t\t\t\t\t<ul class=\"sub__menu\">
\t\t\t\t\t\t\t\t<li><a href=\"/gallery\">Gallery</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"/ticket\">Ticket</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"/albums_details\">Albums details</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"/sb\">Blog single</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"/blog\" class=\"menu--active\">Blog</a></li>
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
\t\t\t\t\t<h2>Single posts</h2>
\t\t\t\t\t<div class=\"site-breadcrumb\">
\t\t\t\t\t\t<a href=\"/\">Home</a>
\t\t\t\t\t\t<span>Single posts</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Page top section end -->

\t<!-- Blog page -->
\t<section class=\"blog_single_page\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 blog-details-warp\">
\t\t\t\t\t<div class=\"blog__details\">
\t\t\t\t\t\t<h2 class=\"blog__title\">FC Barcelona Inks a Joint Venture Deal With Sony Music Entertainment</h2>
\t\t\t\t\t\t<div class=\"blog_metas\">
\t\t\t\t\t\t\t<div class=\"blog_meta\">by <a href=\"#\">Admin</a></div>
\t\t\t\t\t\t\t<div class=\"blog_meta\">Aug,15, 2019</div>
\t\t\t\t\t\t\t<div class=\"blog_meta\">20 Comment</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"blog__thumb\">
\t\t\t\t\t\t\t<img src=\"img/blog/blog-big.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium. Excepteur sint occaecat cupidatat non proident sculpa consequat  anim id est laborum.</p>
\t\t\t\t\t\t<p>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
\t\t\t\t\t\t<h5>You Can Buy For Less Than A College Degree</h5>
\t\t\t\t\t\t<p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t<h6>Excepteur sint occaecat cupidatat non proident, sunt in. . Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</h6>
\t\t\t\t\t\t\t<p>MEIKE PETERS</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum felis ac, volutpat volutpat mi qui dolorem.</p>
\t\t\t\t\t\t<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t<div class=\"blog__tags\">
\t\t\t\t\t\t\t\t<a href=\"#\">Body buiding</a>
\t\t\t\t\t\t\t\t<a href=\"#\">Yoga</a>
\t\t\t\t\t\t\t\t<a href=\"#\">Weightloss</a>
\t\t\t\t\t\t\t\t<a href=\"#\">Streching</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t<div class=\"blog__share text-left text-md-right\">
\t\t\t\t\t\t\t\t<span>Share</span>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i>82</a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i>24</a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-envelope-o\"></i>08</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"author__card\">
\t\t\t\t\t\t<div class=\"author__card__text\">
\t\t\t\t\t\t\t<img src=\"img/blog/author.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>Lena Mollein.</h4>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
\t\t\t\t\t\t\t<div class=\"author__social\">
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"comment-warp\">
\t\t\t\t\t\t<h2 class=\"comment-title\">comment</h2>
\t\t\t\t\t\t<div class=\"comment-list\">
\t\t\t\t\t\t\t<div class=\"comment-item has__child__comment\">
\t\t\t\t\t\t\t\t<div class=\"comment-head\">
\t\t\t\t\t\t\t\t\t<img src=\"img/blog/comment-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Brandon Kelley</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-clock-o\"></i>Aug,15, 2019</div>
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-heart-o\"></i>Like</div>
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-share-square-o\"></i>Reply</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"comment-item reply__comment\">
\t\t\t\t\t\t\t\t<div class=\"comment-head\">
\t\t\t\t\t\t\t\t\t<img src=\"img/blog/comment-2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Brandon Kelley</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-clock-o\"></i>Aug,15, 2019</div>
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-heart-o\"></i>Like</div>
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-share-square-o\"></i>Reply</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"comment-item\">
\t\t\t\t\t\t\t\t<div class=\"comment-head\">
\t\t\t\t\t\t\t\t\t<img src=\"img/blog/comment-3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t<h5>Brandon Kelley</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
\t\t\t\t\t\t\t\t<div class=\"comment-footer\">
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-clock-o\"></i>Aug,15, 2019</div>
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-heart-o\"></i>Like</div>
\t\t\t\t\t\t\t\t\t<div class=\"cf-item\"><i class=\"fa fa-share-square-o\"></i>Reply</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h2 class=\"comment-title\">Leave a comment</h2>
\t\t\t\t\t\t<form class=\"comment-form\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Name\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t<input type=\"url\" placeholder=\"Website\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<textarea placeholder=\"Comment\"></textarea>
\t\t\t\t\t\t\t\t\t<button class=\"site__btn\">Submit</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-8 sidebar\">
\t\t\t\t\t<div class=\"widget-item\">
\t\t\t\t\t\t<h4 class=\"widget-title\">Feature posts</h4>
\t\t\t\t\t\t<div class=\"feature-post-widget\">
\t\t\t\t\t\t\t<div class=\"fp-item\">
\t\t\t\t\t\t\t\t<img src=\"img/blog/blog-sidebar/1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"fp-text\">
\t\t\t\t\t\t\t\t\t<h6>A Monster Prom poster got hijacked for a Papa Roach concert...</h6>
\t\t\t\t\t\t\t\t\t<p>Aug,15, 2019</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fp-item\">
\t\t\t\t\t\t\t\t<img src=\"img/blog/blog-sidebar/2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"fp-text\">
\t\t\t\t\t\t\t\t\t<h6>Facebook wants to read your thoughts with its augmented...</h6>
\t\t\t\t\t\t\t\t\t<p>Aug,15, 2019</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fp-item\">
\t\t\t\t\t\t\t\t<img src=\"img/blog/blog-sidebar/3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"fp-text\">
\t\t\t\t\t\t\t\t\t<h6>This gaming laptop with a GTX 1660 Ti and 32GB of RAM is down...</h6>
\t\t\t\t\t\t\t\t\t<p>Aug,15, 2019</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"fp-item\">
\t\t\t\t\t\t\t\t<img src=\"img/blog/blog-sidebar/4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"fp-text\">
\t\t\t\t\t\t\t\t\t<h6>Jalopy developer is making a game where you 'build stuff...</h6>
\t\t\t\t\t\t\t\t\t<p>Aug,15, 2019</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-item\">
\t\t\t\t\t\t<h4 class=\"widget-title\">Instagram</h4>
\t\t\t\t\t\t<div class=\"instagram-widget\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"img/blog/instagram/1.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"img/blog/instagram/2.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"img/blog/instagram/3.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"img/blog/instagram/4.jpg\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-item\">
\t\t\t\t\t\t<h4 class=\"widget-title\">Subscribe</h4>
\t\t\t\t\t\t<div class=\"subscribe-widget\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor.</p>
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Name\">
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t<button class=\"site__btn\">Subscribe</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Blog page end -->
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
", "single-blog.html.twig", "C:\\Users\\botolo\\DAW2\\templates\\single-blog.html.twig");
    }
}
