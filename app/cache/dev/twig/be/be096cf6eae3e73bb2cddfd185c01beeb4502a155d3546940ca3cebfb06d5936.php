<?php

/* SmartPsyBundle:FrantOffice:Template.html.twig */
class __TwigTemplate_54fe4e0abf0534a68defb2aa3c705f0bd84f326737603caf354e6ac4c5be2896 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SmartPsyBundle:FrantOffice:Template.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'titre' => array($this, 'block_titre'),
            'slogant' => array($this, 'block_slogant'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("SmartPsyBundle:FrantOffice:menu.html.twig", "SmartPsyBundle:FrantOffice:Template.html.twig", 5)->display($context);
        // line 6
        echo "

    <section id=\"services\" class=\"section section-padded\">
        <div class=\"container\">
            <div class=\"row text-center title\">
                <h2>";
        // line 11
        $this->displayBlock('titre', $context, $blocks);
        echo "</h2>
                <h4 class=\"light muted\">";
        // line 12
        $this->displayBlock('slogant', $context, $blocks);
        echo "</h4>
            </div>
            <div class=\"row services\">
                ";
        // line 15
        $this->displayBlock('contenu', $context, $blocks);
        // line 16
        echo "            </div>
        </div>
        <div class=\"cut cut-bottom\"></div>
    </section>





";
    }

    // line 11
    public function block_titre($context, array $blocks = array())
    {
    }

    // line 12
    public function block_slogant($context, array $blocks = array())
    {
    }

    // line 15
    public function block_contenu($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SmartPsyBundle:FrantOffice:Template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  76 => 12,  71 => 11,  58 => 16,  56 => 15,  50 => 12,  46 => 11,  39 => 6,  37 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     {% include 'SmartPsyBundle:FrantOffice:menu.html.twig' %}*/
/* */
/* */
/*     <section id="services" class="section section-padded">*/
/*         <div class="container">*/
/*             <div class="row text-center title">*/
/*                 <h2>{% block titre %}{% endblock %}</h2>*/
/*                 <h4 class="light muted">{% block slogant %}{% endblock %}</h4>*/
/*             </div>*/
/*             <div class="row services">*/
/*                 {% block contenu %}{% endblock %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="cut cut-bottom"></div>*/
/*     </section>*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
