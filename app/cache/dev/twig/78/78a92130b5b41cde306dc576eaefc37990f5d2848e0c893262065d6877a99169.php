<?php

/* ::base2.html.twig */
class __TwigTemplate_4e6bf3db09db1c65da953f150af3ad1816f47e2d3a3b638c43cd16096134c680 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'titre' => array($this, 'block_titre'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Smartpsy Admin</title>



    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->



    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">

    ";
        // line 47
        $this->loadTemplate("::navbar.html.twig", "::base2.html.twig", 47)->display($context);
        // line 48
        echo "    ";
        $this->loadTemplate("::menu.html.twig", "::base2.html.twig", 48)->display($context);
        // line 49
        echo "
</nav>
<div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">";
        // line 54
        $this->displayBlock('titre', $context, $blocks);
        echo "</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "
</div>




<!-- javascript -->


<!-- jQuery -->
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

";
        // line 81
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "

</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "My Tavel";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 54
    public function block_titre($context, array $blocks = array())
    {
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 81,  175 => 59,  170 => 54,  165 => 29,  159 => 5,  152 => 82,  150 => 81,  145 => 79,  139 => 76,  133 => 73,  127 => 70,  115 => 60,  113 => 59,  105 => 54,  98 => 49,  95 => 48,  93 => 47,  83 => 40,  71 => 30,  69 => 29,  64 => 27,  58 => 24,  52 => 21,  46 => 18,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}My Tavel{% endblock %}</title>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>Smartpsy Admin</title>*/
/* */
/* */
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">*/
/* */
/*     <!-- MetisMenu CSS -->*/
/*     <link href="{{ asset('vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="{{ asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">*/
/* */
/*     {% block stylesheets %}{% endblock %}*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* */
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* */
/* <!-- Navigation -->*/
/* <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/* */
/*     {% include '::navbar.html.twig' %}*/
/*     {% include '::menu.html.twig' %}*/
/* */
/* </nav>*/
/* <div id="page-wrapper">*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h1 class="page-header">{% block titre %}{% endblock %}</h1>*/
/*         </div>*/
/*         <!-- /.col-lg-12 -->*/
/*     </div>*/
/* */
/*     {% block body %}{% endblock %}*/
/* */
/* </div>*/
/* */
/* */
/* */
/* */
/* <!-- javascript -->*/
/* */
/* */
/* <!-- jQuery -->*/
/* <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>*/
/* */
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>*/
/* */
/* <!-- Metis Menu Plugin JavaScript -->*/
/* <script src="{{ asset('vendor/metisMenu/metisMenu.min.js')}}"></script>*/
/* */
/* <!-- Custom Theme JavaScript -->*/
/* <script src="{{ asset('dist/js/sb-admin-2.js')}}"></script>*/
/* */
/* {% block javascripts %}{% endblock %}*/
/* */
/* */
/* </body>*/
/* </html>*/
