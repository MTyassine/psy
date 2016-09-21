<?php

/* SmartPsyBundle:Test:new.html.twig */
class __TwigTemplate_998f511effb8500d8df563356422c717286e300d16f128a0067eb225730936be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartPsyBundle:FrantOffice:Template.html.twig", "SmartPsyBundle:Test:new.html.twig", 1);
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
        echo "Test creation";
    }

    // line 6
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("test");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "SmartPsyBundle:Test:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  38 => 8,  35 => 6,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'SmartPsyBundle:FrantOffice:Template.html.twig' %}*/
/* */
/* */
/*     {% block titre %}Test creation{% endblock %}*/
/* */
/* {% block contenu -%}*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('test') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
