<?php

/* ::base.html.twig */
class __TwigTemplate_1f062fa03ccef582744b30a479b2268b64e8e4ca8f0a9aa2877f2d354bed9aa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic\" />
        <meta name=\"keywords\" content=\"html template, css, free, one page, gym, fitness, web design\" />
        <meta name=\"author\" content=\"Luka Cvetinovic for Codrops\" />
        <!-- Favicons (created with http://realfavicongenerator.net/)-->
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicons/apple-touch-icon-57x57.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicons/apple-touch-icon-60x60.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicons/favicon-32x32.png"), "html", null, true);
        echo "\" sizes=\"32x32\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicons/favicon-16x16.png"), "html", null, true);
        echo "\" sizes=\"16x16\">
        <link rel=\"manifest\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicons/manifest.json"), "html", null, true);
        echo "\">
        <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicons/favicon.ico"), "html", null, true);
        echo "\">
        <meta name=\"msapplication-TileColor\" content=\"#00a8ff\">
        <meta name=\"msapplication-config\" content=\"img/favicons/browserconfig.xml\">
        <meta name=\"theme-color\" content=\"#ffffff\">
        <!-- Normalize -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\">
        <!-- Bootstrap -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <!-- Owl -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/owl.css"), "html", null, true);
        echo "\">
        <!-- Animate.css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("fonts/font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!-- Elegant Icons -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("fonts/eleganticons/et-icons.css"), "html", null, true);
        echo "\">
        <!-- Main style -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/cardio.css"), "html", null, true);
        echo "\">

        ";
        // line 36
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "    </head>
    <body>


        ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "
        <!-- Holder for mobile navigation -->
        <div class=\"mobile-nav\">
            <ul>
            </ul>
            <a href=\"#\" class=\"close-link\"><i class=\"arrow_up\"></i></a>
        </div>





        <!-- Scripts -->
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/typewriter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.onepagenav.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>



    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 36
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 41,  167 => 36,  161 => 7,  150 => 61,  146 => 60,  142 => 59,  138 => 58,  134 => 57,  130 => 56,  126 => 55,  111 => 42,  109 => 41,  103 => 37,  101 => 36,  96 => 34,  91 => 32,  86 => 30,  81 => 28,  76 => 26,  71 => 24,  66 => 22,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  30 => 7,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />*/
/*         <meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />*/
/*         <meta name="author" content="Luka Cvetinovic for Codrops" />*/
/*         <!-- Favicons (created with http://realfavicongenerator.net/)-->*/
/*         <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicons/apple-touch-icon-57x57.png')}}">*/
/*         <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicons/apple-touch-icon-60x60.png')}}">*/
/*         <link rel="icon" type="image/png" href="{{ asset('img/favicons/favicon-32x32.png')}}" sizes="32x32">*/
/*         <link rel="icon" type="image/png" href="{{ asset('img/favicons/favicon-16x16.png')}}" sizes="16x16">*/
/*         <link rel="manifest" href="{{ asset('img/favicons/manifest.json')}}">*/
/*         <link rel="shortcut icon" href="{{ asset('img/favicons/favicon.ico')}}">*/
/*         <meta name="msapplication-TileColor" content="#00a8ff">*/
/*         <meta name="msapplication-config" content="img/favicons/browserconfig.xml">*/
/*         <meta name="theme-color" content="#ffffff">*/
/*         <!-- Normalize -->*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css')}}">*/
/*         <!-- Bootstrap -->*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">*/
/*         <!-- Owl -->*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.css')}}">*/
/*         <!-- Animate.css -->*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css')}}">*/
/*         <!-- Font Awesome -->*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.1.0/css/font-awesome.min.css')}}">*/
/*         <!-- Elegant Icons -->*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('fonts/eleganticons/et-icons.css')}}">*/
/*         <!-- Main style -->*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/cardio.css')}}">*/
/* */
/*         {% block stylesheets %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/* */
/* */
/*         {% block body %}{% endblock %}*/
/* */
/*         <!-- Holder for mobile navigation -->*/
/*         <div class="mobile-nav">*/
/*             <ul>*/
/*             </ul>*/
/*             <a href="#" class="close-link"><i class="arrow_up"></i></a>*/
/*         </div>*/
/* */
/* */
/* */
/* */
/* */
/*         <!-- Scripts -->*/
/*         <script src="{{ asset('js/jquery-1.11.1.min.js')}}"></script>*/
/*         <script src="{{ asset('js/owl.carousel.min.js')}}"></script>*/
/*         <script src="{{ asset('js/bootstrap.min.js')}}"></script>*/
/*         <script src="{{ asset('js/wow.min.js')}}"></script>*/
/*         <script src="{{ asset('js/typewriter.js')}}"></script>*/
/*         <script src="{{ asset('js/jquery.onepagenav.js')}}"></script>*/
/*         <script src="{{ asset('js/main.js')}}"></script>*/
/* */
/* */
/* */
/*     </body>*/
/* </html>*/
/* */
