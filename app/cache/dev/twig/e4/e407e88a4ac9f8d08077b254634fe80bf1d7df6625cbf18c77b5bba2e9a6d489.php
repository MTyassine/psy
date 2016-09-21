<?php

/* SmartPsyBundle:FrantOffice:Test.html.twig */
class __TwigTemplate_2fd3de91b491f2093d2e96bb3259ffa6e2adbf88505acdbcd37bef0792d417b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartPsyBundle:FrantOffice:Template.html.twig", "SmartPsyBundle:FrantOffice:Test.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmartPsyBundle:FrantOffice:Template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_titre($context, array $blocks = array())
    {
        echo "Test Psychologique";
    }

    // line 6
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"col-md-4\">
        <div class=\"service\">
            <div class=\"icon-holder\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/heart-blue.png"), "html", null, true);
        echo "\" alt=\"\" class=\"icon\">
            </div>
            <h4 class=\"heading\"><a href=\"\">List Patient</a></h4>
            <p class=\"description\">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"service\">
            <div class=\"icon-holder\">
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/guru-blue.png"), "html", null, true);
        echo "\" alt=\"\" class=\"icon\">
            </div>
            <h4 class=\"heading\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("test_new");
        echo "\">Crée un nouveau test</a></h4>
            <p class=\"description\">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"service\">
            <div class=\"icon-holder\">
                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/weight-blue.png"), "html", null, true);
        echo "\" alt=\"\" class=\"icon\">
            </div>
            <h4 class=\"heading\"><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("test");
        echo "\">List Test</a></h4>
            <p class=\"description\">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "SmartPsyBundle:FrantOffice:Test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  70 => 29,  60 => 22,  55 => 20,  43 => 11,  38 => 8,  35 => 6,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'SmartPsyBundle:FrantOffice:Template.html.twig' %}*/
/* */
/* */
/* {% block titre %}Test Psychologique{% endblock %}*/
/* */
/* {% block contenu -%}*/
/* */
/*     <div class="col-md-4">*/
/*         <div class="service">*/
/*             <div class="icon-holder">*/
/*                 <img src="{{ asset('img/icons/heart-blue.png')}}" alt="" class="icon">*/
/*             </div>*/
/*             <h4 class="heading"><a href="">List Patient</a></h4>*/
/*             <p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-md-4">*/
/*         <div class="service">*/
/*             <div class="icon-holder">*/
/*                 <img src="{{ asset('img/icons/guru-blue.png')}}" alt="" class="icon">*/
/*             </div>*/
/*             <h4 class="heading"><a href="{{ path('test_new') }}">Crée un nouveau test</a></h4>*/
/*             <p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-md-4">*/
/*         <div class="service">*/
/*             <div class="icon-holder">*/
/*                 <img src="{{ asset('img/icons/weight-blue.png')}}" alt="" class="icon">*/
/*             </div>*/
/*             <h4 class="heading"><a href="{{ path('test') }}">List Test</a></h4>*/
/*             <p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
