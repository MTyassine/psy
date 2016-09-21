<?php

/* SmartPsyBundle:FrantOffice:menu.html.twig */
class __TwigTemplate_e8d6eef2dcf381ff21572fa66b98848ad13a9580cc76ed31a3765a5010561305 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "


    <div class=\"preloader\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/loader.gif"), "html", null, true);
        echo "\" alt=\"Preloader image\">
    </div>
    <nav class=\"navbar\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"><img src=\"img/logo.png\" data-active-url=\"img/logo-active.png\" alt=\"\"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right main-nav\">
                    <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("smart_psy_homepage");
        echo "\">Accueil</a></li>
                    <li><a href=\"#\">Article</a></li>
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("smart_psy_hometest");
        echo "\">Test</a></li>
                    <li><a href=\"#\">Contact</a></li>
                    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal1\" class=\"btn btn-blue\">Logout</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header id=\"intro\">
        <div class=\"container\">
            <div class=\"table\">
                <div class=\"header-text\">
                    <div class=\"row\">
                        <div class=\"col-md-12 text-center\">
                            <h3 class=\"light white\">Take care of your body.</h3>
                            <h1 class=\"white typed\">It's the only place you have to live.</h1>
                            <span class=\"typed-cursor\">|</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>




";
    }

    public function getTemplateName()
    {
        return "SmartPsyBundle:FrantOffice:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 24,  45 => 22,  25 => 5,  19 => 1,);
    }
}
/* */
/* */
/* */
/*     <div class="preloader">*/
/*         <img src="{{ asset('img/loader.gif')}}" alt="Preloader image">*/
/*     </div>*/
/*     <nav class="navbar">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav navbar-right main-nav">*/
/*                     <li><a href="{{ path('smart_psy_homepage') }}">Accueil</a></li>*/
/*                     <li><a href="#">Article</a></li>*/
/*                     <li><a href="{{ path('smart_psy_hometest') }}">Test</a></li>*/
/*                     <li><a href="#">Contact</a></li>*/
/*                     <li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Logout</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container-fluid -->*/
/*     </nav>*/
/*     <header id="intro">*/
/*         <div class="container">*/
/*             <div class="table">*/
/*                 <div class="header-text">*/
/*                     <div class="row">*/
/*                         <div class="col-md-12 text-center">*/
/*                             <h3 class="light white">Take care of your body.</h3>*/
/*                             <h1 class="white typed">It's the only place you have to live.</h1>*/
/*                             <span class="typed-cursor">|</span>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/* */
/* */
/* */
/* */
/* */
