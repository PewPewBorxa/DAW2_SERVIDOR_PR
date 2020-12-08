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

/* bratan.html.twig */
class __TwigTemplate_cc39be9b83ce5be7edeabb957589db4ff61ed4d9d878e6a7086206dc82a42b75 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bratan.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bratan.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "bratan.html.twig", 1);
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
        echo "\t<section class=\"hero__section set-bg\" data-setbg=\"img/hero-bg.png\">
\t\t<div class=\"container text-white\">
\t\t\t<div class=\"hero__slider owl-carousel\">
\t\t\t\t<div class=\"hero__items\">
\t\t\t\t\t<span>The electro vibe</span>
\t\t\t\t\t<h2>Tailor Lachiri</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
\t\t\t\t\t<a href=\"#\" class=\"site__btn\">Buy tickets</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"hero__items\">
\t\t\t\t\t<span>The electro vibe</span>
\t\t\t\t\t<h2>Tailor Lachiri</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
\t\t\t\t\t<a href=\"#\" class=\"site__btn\">Buy tickets</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"about__section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<img src=\"img/about.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"about__text\">
\t\t\t\t\t\t<span>About us</span>
\t\t\t\t\t\t<h2>The electro vibe</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inc-ididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. lectus turpis sociis ut porttitor scelerisque amet ultrices placerat mid facilisis proin purus, cursus ridiculus nisi diam augue porta? Penatibus magna etiam, placerat dignissim.</p>
\t\t\t\t\t\t<a href=\"#\" class=\"site__btn\">Contact us</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<section class=\"discography__section set-bg\" data-setbg=\"img/discography-bg.png\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<div class=\"sub-title\">Our Discogaphy</div>
\t\t\t\t\t\t\t<h2>newest albums & singles.</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 text-left text-lg-right pt-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"site__btn mb-5\"><i class=\"fa fa-apple\"></i> Buy on itunes</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"album__card\">
\t\t\t\t\t\t\t<img src=\"img/members/1.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>I’m a mess</h4>
\t\t\t\t\t\t\t<p>Bebe Rexha</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"album__card\">
\t\t\t\t\t\t\t<img src=\"img/members/2.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>Natural</h4>
\t\t\t\t\t\t\t<p>Imagine Dragons</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"album__card\">
\t\t\t\t\t\t\t<img src=\"img/members/3.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>Sweet But Psycho</h4>
\t\t\t\t\t\t\t<p>Ava Max</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"album__card\">
\t\t\t\t\t\t\t<img src=\"img/members/4.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>Waiting For Love</h4>
\t\t\t\t\t\t\t<p>Avicii</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"album__card\">
\t\t\t\t\t\t\t<img src=\"img/members/5.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>So Am I</h4>
\t\t\t\t\t\t\t<p>Ava Max</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"album__card\">
\t\t\t\t\t\t\t<img src=\"img/members/6.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>Mamma Mia</h4>
\t\t\t\t\t\t\t<p>Hugel feat. Amber</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"album__card\">
\t\t\t\t\t\t\t<img src=\"img/members/7.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>Bad Guy</h4>
\t\t\t\t\t\t\t<p>Billie Eilish</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"album__card\">
\t\t\t\t\t\t\t<img src=\"img/members/8.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>Let me down slowly</h4>
\t\t\t\t\t\t\t<p>Alec Benjamin</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</section>
\t
\t<section class=\"player__section\">
\t\t<div class=\"container-fluid player-one-style p-0\">
\t\t\t<div id=\"jquery_jplayer_2\" class=\"jp-jplayer\"></div>
\t\t\t<div id=\"jp_container_2\" class=\"jp-audio\" role=\"application\" aria-label=\"media player\">
\t\t\t\t<div class=\"jp-type-playlist\">
\t\t\t\t\t<div class=\"row m-0\">
\t\t\t\t\t\t<div class=\"col-lg-6 p-0\">
\t\t\t\t\t\t\t<div class=\"player_left\" id=\"player__thumb\">
\t\t\t\t\t\t\t\t<div class=\"player_left_inner\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"track-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Sweet But Psycho</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Ava Max</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-7 col-sm-8 text-right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"conterols\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-gui jp-interface\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-shuffle\" tabindex=\"0\"><i class=\"fa fa-random\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-previous\" tabindex=\"0\"><i class=\"fa fa-step-backward\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-play\" tabindex=\"0\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-next\" tabindex=\"0\"><i class=\"fa fa-step-forward\" ></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-mute\" tabindex=\"0\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-bar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-bar-value\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-time-holder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">&nbsp;</div> /
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-duration\" role=\"timer\" aria-label=\"duration\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"jp-progress\">
\t\t\t\t\t\t\t\t\t\t<div class=\"jp-seek-bar\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-play-bar\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6  p-0\">
\t\t\t\t\t\t\t<div class=\"player_right\">
\t\t\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t\t\t<div class=\"sub-title\">Latest album</div>
\t\t\t\t\t\t\t\t\t<h2>WHEN WE ALL FALL ASLEEP</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"jp-playlist audio-playlist\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"jp-no-solution\">
\t\t\t\t\t\t\t\t\t<span>Update Required</span>
\t\t\t\t\t\t\t\t\tTo play the media you will need to either update your browser to a recent version or update your <a href=\"http://get.adobe.com/flashplayer/\" target=\"_blank\">Flash plugin</a>.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t
\t<section class=\"video__section set-bg\" data-setbg=\"img/video-overlay.png\">
\t\t<div class=\"container\">
\t\t\t<div class=\"section-title text-center pb-3\">
\t\t\t\t<div class=\"sub-title\">Our Videos</div>
\t\t\t\t<h2>newest albums & singles.</h2>
\t\t\t</div>
\t\t\t<div id=\"jp_container_1\" class=\"jp-video jp-video-270p\" role=\"application\" aria-label=\"media player\">
\t\t\t\t<div class=\"jp-type-playlist video-player\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-8 player-left-hover pr-0\">
\t\t\t\t\t\t\t<div id=\"jquery_jplayer_1\" class=\"jp-jplayer\"></div>
\t\t\t\t\t\t\t<h2 class=\"video-title\">Maroon 5 - Don't Wanna Know (Audio) ft. Kendrick Lamar</h2>
\t\t\t\t\t\t\t<div class=\"jp-gui\">
\t\t\t\t\t\t\t\t<div class=\"jp-video-play\">
\t\t\t\t\t\t\t\t\t<button class=\"jp-video-play-icon\" tabindex=\"0\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"jp-interface\">
\t\t\t\t\t\t\t\t<div class=\"jp-controls-holder\">
\t\t\t\t\t\t\t\t\t<div class=\"jp-controls\">
\t\t\t\t\t\t\t\t\t\t<button class=\"jp-previous\" tabindex=\"0\"><i class=\"fa fa-step-backward\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"jp-play\" tabindex=\"0\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"jp-next\" tabindex=\"0\"><i class=\"fa fa-step-forward\" ></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"jp-progress\">
\t\t\t\t\t\t\t\t\t\t<div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"jp-duration\" role=\"timer\" aria-label=\"duration\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"jp-seek-bar\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-play-bar\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-controls\">
\t\t\t\t\t\t\t\t\t\t<button class=\"jp-mute\" tabindex=\"0\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-bar\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-bar-value\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"jp-playlist video-playlist\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>&nbsp;</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"jp-no-solution\">
\t\t\t\t\t\t\t\t<span>Update Required</span>
\t\t\t\t\t\t\t\tTo play the media you will need to either update your browser to a recent version or update your <a href=\"http://get.adobe.com/flashplayer/\" target=\"_blank\">Flash plugin</a>.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"shows__section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t<div class=\"sub-title\">Upcoming Shows</div>
\t\t\t\t\t\t<h2>WHEN WE ALL FALL ASLEEP</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 text-left text-lg-right pt-2 mb-5\">
\t\t\t\t\t<a href=\"#\" class=\"site__btn\">View all </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"show__item\">
\t\t\t\t<div class=\"show__date\">
\t\t\t\t\t<h2>25</h2>
\t\t\t\t\t<p>aug</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__title\">
\t\t\t\t\t<h4>Sunburn Arena with Wiz Khalifa</h4>
\t\t\t\t\t<p>EDM, Pop, Rap  |  English  |  Age 15+  |  5hrs</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__location\">
\t\t\t\t\t<p><i class=\"fa fa-map-marker\"></i> Multiple Venues </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__time\">
\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i>02:00PM</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__btn\">
\t\t\t\t\t<a href=\"#\" class=\"site__btn sb--line \">Buy tickets</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"show__item\">
\t\t\t\t<div class=\"show__date\">
\t\t\t\t\t<h2>05</h2>
\t\t\t\t\t<p>SEP</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__title\">
\t\t\t\t\t<h4>Raymond MTV India Music</h4>
\t\t\t\t\t<p>Rock, Sufi   |  English, Hindi   |  Age 12+</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__location\">
\t\t\t\t\t<p><i class=\"fa fa-map-marker\"></i> The Fairmont Hotel: Jaipur </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__time\">
\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i>02:00PM</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__btn\">
\t\t\t\t\t<a href=\"#\" class=\"site__btn sb--line \">Buy tickets</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"show__item\">
\t\t\t\t<div class=\"show__date\">
\t\t\t\t\t<h2>16</h2>
\t\t\t\t\t<p>SEP</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__title\">
\t\t\t\t\t<h4>Sunburn Goa 2019</h4>
\t\t\t\t\t<p>EDM  |  English  |  Age 15+  |  8hrs</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__location\">
\t\t\t\t\t<p><i class=\"fa fa-map-marker\"></i> Vagator: Goa </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__time\">
\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i>02:00PM</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__btn\">
\t\t\t\t\t<a href=\"#\" class=\"site__btn sb--line \">Buy tickets</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"show__item\">
\t\t\t\t<div class=\"show__date\">
\t\t\t\t\t<h2>20</h2>
\t\t\t\t\t<p>SEP</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__title\">
\t\t\t\t\t<h4>The Piano Man presents Shockblast</h4>
\t\t\t\t\t<p>Jazz, Pop  |  English  |  3hrs</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__location\">
\t\t\t\t\t<p><i class=\"fa fa-map-marker\"></i> The Piano Man Jazz Club: Delhi</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__time\">
\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i>08:00PM</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__btn\">
\t\t\t\t\t<a href=\"#\" class=\"site__btn sb--line \">Buy tickets</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"show__item\">
\t\t\t\t<div class=\"show__date\">
\t\t\t\t\t<h2>14</h2>
\t\t\t\t\t<p>oct</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__title\">
\t\t\t\t\t<h4>Zangoora - Kingdom of Dreams</h4>
\t\t\t\t\t<p>EDM, Pop, Rap  |  English  |  Age 15+  |  5hrs</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__location\">
\t\t\t\t\t<p><i class=\"fa fa-map-marker\"></i> Kingdom Of Dreams: Gurgaon </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__time\">
\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i>09:00PM</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__btn\">
\t\t\t\t\t<a href=\"#\" class=\"site__btn sb--line \">Buy tickets</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 353
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 354
        echo "\t<footer class=\"footer__section\">
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
\t\t\t
\t\t\t<div class=\"footer__copyright__text\">
\t\t\t\t<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a></p>
\t\t\t</div>
\t\t
\t\t</div>
\t</footer>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bratan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 354,  427 => 353,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
\t{% block content %}
\t<section class=\"hero__section set-bg\" data-setbg=\"img/hero-bg.png\">
\t\t<div class=\"container text-white\">
\t\t\t<div class=\"hero__slider owl-carousel\">
\t\t\t\t<div class=\"hero__items\">
\t\t\t\t\t<span>The electro vibe</span>
\t\t\t\t\t<h2>Tailor Lachiri</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
\t\t\t\t\t<a href=\"#\" class=\"site__btn\">Buy tickets</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"hero__items\">
\t\t\t\t\t<span>The electro vibe</span>
\t\t\t\t\t<h2>Tailor Lachiri</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
\t\t\t\t\t<a href=\"#\" class=\"site__btn\">Buy tickets</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"about__section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<img src=\"img/about.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"about__text\">
\t\t\t\t\t\t<span>About us</span>
\t\t\t\t\t\t<h2>The electro vibe</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inc-ididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. lectus turpis sociis ut porttitor scelerisque amet ultrices placerat mid facilisis proin purus, cursus ridiculus nisi diam augue porta? Penatibus magna etiam, placerat dignissim.</p>
\t\t\t\t\t\t<a href=\"#\" class=\"site__btn\">Contact us</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<section class=\"discography__section set-bg\" data-setbg=\"img/discography-bg.png\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<div class=\"sub-title\">Our Discogaphy</div>
\t\t\t\t\t\t\t<h2>newest albums & singles.</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 text-left text-lg-right pt-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"site__btn mb-5\"><i class=\"fa fa-apple\"></i> Buy on itunes</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"album__card\">
\t\t\t\t\t\t\t<img src=\"img/members/1.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>I’m a mess</h4>
\t\t\t\t\t\t\t<p>Bebe Rexha</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"album__card\">
\t\t\t\t\t\t\t<img src=\"img/members/2.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>Natural</h4>
\t\t\t\t\t\t\t<p>Imagine Dragons</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"album__card\">
\t\t\t\t\t\t\t<img src=\"img/members/3.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>Sweet But Psycho</h4>
\t\t\t\t\t\t\t<p>Ava Max</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"album__card\">
\t\t\t\t\t\t\t<img src=\"img/members/4.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>Waiting For Love</h4>
\t\t\t\t\t\t\t<p>Avicii</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"album__card\">
\t\t\t\t\t\t\t<img src=\"img/members/5.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>So Am I</h4>
\t\t\t\t\t\t\t<p>Ava Max</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"album__card\">
\t\t\t\t\t\t\t<img src=\"img/members/6.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>Mamma Mia</h4>
\t\t\t\t\t\t\t<p>Hugel feat. Amber</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"album__card\">
\t\t\t\t\t\t\t<img src=\"img/members/7.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>Bad Guy</h4>
\t\t\t\t\t\t\t<p>Billie Eilish</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"album__card\">
\t\t\t\t\t\t\t<img src=\"img/members/8.jpg\" alt=\"\">
\t\t\t\t\t\t\t<h4>Let me down slowly</h4>
\t\t\t\t\t\t\t<p>Alec Benjamin</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</section>
\t
\t<section class=\"player__section\">
\t\t<div class=\"container-fluid player-one-style p-0\">
\t\t\t<div id=\"jquery_jplayer_2\" class=\"jp-jplayer\"></div>
\t\t\t<div id=\"jp_container_2\" class=\"jp-audio\" role=\"application\" aria-label=\"media player\">
\t\t\t\t<div class=\"jp-type-playlist\">
\t\t\t\t\t<div class=\"row m-0\">
\t\t\t\t\t\t<div class=\"col-lg-6 p-0\">
\t\t\t\t\t\t\t<div class=\"player_left\" id=\"player__thumb\">
\t\t\t\t\t\t\t\t<div class=\"player_left_inner\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"track-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Sweet But Psycho</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Ava Max</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-7 col-sm-8 text-right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"conterols\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-gui jp-interface\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-shuffle\" tabindex=\"0\"><i class=\"fa fa-random\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-previous\" tabindex=\"0\"><i class=\"fa fa-step-backward\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-play\" tabindex=\"0\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-next\" tabindex=\"0\"><i class=\"fa fa-step-forward\" ></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"jp-mute\" tabindex=\"0\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-bar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-bar-value\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-time-holder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">&nbsp;</div> /
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-duration\" role=\"timer\" aria-label=\"duration\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"jp-progress\">
\t\t\t\t\t\t\t\t\t\t<div class=\"jp-seek-bar\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-play-bar\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6  p-0\">
\t\t\t\t\t\t\t<div class=\"player_right\">
\t\t\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t\t\t<div class=\"sub-title\">Latest album</div>
\t\t\t\t\t\t\t\t\t<h2>WHEN WE ALL FALL ASLEEP</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"jp-playlist audio-playlist\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>&nbsp;</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"jp-no-solution\">
\t\t\t\t\t\t\t\t\t<span>Update Required</span>
\t\t\t\t\t\t\t\t\tTo play the media you will need to either update your browser to a recent version or update your <a href=\"http://get.adobe.com/flashplayer/\" target=\"_blank\">Flash plugin</a>.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t
\t<section class=\"video__section set-bg\" data-setbg=\"img/video-overlay.png\">
\t\t<div class=\"container\">
\t\t\t<div class=\"section-title text-center pb-3\">
\t\t\t\t<div class=\"sub-title\">Our Videos</div>
\t\t\t\t<h2>newest albums & singles.</h2>
\t\t\t</div>
\t\t\t<div id=\"jp_container_1\" class=\"jp-video jp-video-270p\" role=\"application\" aria-label=\"media player\">
\t\t\t\t<div class=\"jp-type-playlist video-player\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-8 player-left-hover pr-0\">
\t\t\t\t\t\t\t<div id=\"jquery_jplayer_1\" class=\"jp-jplayer\"></div>
\t\t\t\t\t\t\t<h2 class=\"video-title\">Maroon 5 - Don't Wanna Know (Audio) ft. Kendrick Lamar</h2>
\t\t\t\t\t\t\t<div class=\"jp-gui\">
\t\t\t\t\t\t\t\t<div class=\"jp-video-play\">
\t\t\t\t\t\t\t\t\t<button class=\"jp-video-play-icon\" tabindex=\"0\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"jp-interface\">
\t\t\t\t\t\t\t\t<div class=\"jp-controls-holder\">
\t\t\t\t\t\t\t\t\t<div class=\"jp-controls\">
\t\t\t\t\t\t\t\t\t\t<button class=\"jp-previous\" tabindex=\"0\"><i class=\"fa fa-step-backward\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"jp-play\" tabindex=\"0\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"jp-next\" tabindex=\"0\"><i class=\"fa fa-step-forward\" ></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"jp-progress\">
\t\t\t\t\t\t\t\t\t\t<div class=\"jp-current-time\" role=\"timer\" aria-label=\"time\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"jp-duration\" role=\"timer\" aria-label=\"duration\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"jp-seek-bar\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-play-bar\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-controls\">
\t\t\t\t\t\t\t\t\t\t<button class=\"jp-mute\" tabindex=\"0\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-bar\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"jp-volume-bar-value\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"jp-playlist video-playlist\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>&nbsp;</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"jp-no-solution\">
\t\t\t\t\t\t\t\t<span>Update Required</span>
\t\t\t\t\t\t\t\tTo play the media you will need to either update your browser to a recent version or update your <a href=\"http://get.adobe.com/flashplayer/\" target=\"_blank\">Flash plugin</a>.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"shows__section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t<div class=\"sub-title\">Upcoming Shows</div>
\t\t\t\t\t\t<h2>WHEN WE ALL FALL ASLEEP</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 text-left text-lg-right pt-2 mb-5\">
\t\t\t\t\t<a href=\"#\" class=\"site__btn\">View all </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"show__item\">
\t\t\t\t<div class=\"show__date\">
\t\t\t\t\t<h2>25</h2>
\t\t\t\t\t<p>aug</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__title\">
\t\t\t\t\t<h4>Sunburn Arena with Wiz Khalifa</h4>
\t\t\t\t\t<p>EDM, Pop, Rap  |  English  |  Age 15+  |  5hrs</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__location\">
\t\t\t\t\t<p><i class=\"fa fa-map-marker\"></i> Multiple Venues </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__time\">
\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i>02:00PM</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__btn\">
\t\t\t\t\t<a href=\"#\" class=\"site__btn sb--line \">Buy tickets</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"show__item\">
\t\t\t\t<div class=\"show__date\">
\t\t\t\t\t<h2>05</h2>
\t\t\t\t\t<p>SEP</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__title\">
\t\t\t\t\t<h4>Raymond MTV India Music</h4>
\t\t\t\t\t<p>Rock, Sufi   |  English, Hindi   |  Age 12+</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__location\">
\t\t\t\t\t<p><i class=\"fa fa-map-marker\"></i> The Fairmont Hotel: Jaipur </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__time\">
\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i>02:00PM</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__btn\">
\t\t\t\t\t<a href=\"#\" class=\"site__btn sb--line \">Buy tickets</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"show__item\">
\t\t\t\t<div class=\"show__date\">
\t\t\t\t\t<h2>16</h2>
\t\t\t\t\t<p>SEP</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__title\">
\t\t\t\t\t<h4>Sunburn Goa 2019</h4>
\t\t\t\t\t<p>EDM  |  English  |  Age 15+  |  8hrs</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__location\">
\t\t\t\t\t<p><i class=\"fa fa-map-marker\"></i> Vagator: Goa </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__time\">
\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i>02:00PM</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__btn\">
\t\t\t\t\t<a href=\"#\" class=\"site__btn sb--line \">Buy tickets</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"show__item\">
\t\t\t\t<div class=\"show__date\">
\t\t\t\t\t<h2>20</h2>
\t\t\t\t\t<p>SEP</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__title\">
\t\t\t\t\t<h4>The Piano Man presents Shockblast</h4>
\t\t\t\t\t<p>Jazz, Pop  |  English  |  3hrs</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__location\">
\t\t\t\t\t<p><i class=\"fa fa-map-marker\"></i> The Piano Man Jazz Club: Delhi</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__time\">
\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i>08:00PM</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__btn\">
\t\t\t\t\t<a href=\"#\" class=\"site__btn sb--line \">Buy tickets</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"show__item\">
\t\t\t\t<div class=\"show__date\">
\t\t\t\t\t<h2>14</h2>
\t\t\t\t\t<p>oct</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__title\">
\t\t\t\t\t<h4>Zangoora - Kingdom of Dreams</h4>
\t\t\t\t\t<p>EDM, Pop, Rap  |  English  |  Age 15+  |  5hrs</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__location\">
\t\t\t\t\t<p><i class=\"fa fa-map-marker\"></i> Kingdom Of Dreams: Gurgaon </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__time\">
\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i>09:00PM</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"show__btn\">
\t\t\t\t\t<a href=\"#\" class=\"site__btn sb--line \">Buy tickets</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}

{% block footer %}
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
\t\t\t
\t\t\t<div class=\"footer__copyright__text\">
\t\t\t\t<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a></p>
\t\t\t</div>
\t\t
\t\t</div>
\t</footer>
\t{% endblock %}
\t



", "bratan.html.twig", "C:\\Users\\Borja\\daw2\\templates\\bratan.html.twig");
    }
}
