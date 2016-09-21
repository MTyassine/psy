<?php

/* SmartPsyBundle:FrantOffice:show.html.twig */
class __TwigTemplate_d2563511289eb6ccdcbb2bd594dea2c726e1d032e524b330b65325a8230dec06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartPsyBundle:FrantOffice:Template.html.twig", "SmartPsyBundle:FrantOffice:show.html.twig", 1);
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
        echo "Patient";
    }

    // line 6
    public function block_contenu($context, array $blocks = array())
    {
        // line 9
        echo "<table class=\"records_list\">
        <thead>
        <tr>
            <th>Id</th>
            <th>username</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"#\">list test</a>
                        </li>
                        <li>
                            <a href=\"#\">list reponse</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>


    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("testaffecter_new");
        echo "\">
                ajouter une affectation
            </a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "SmartPsyBundle:FrantOffice:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 40,  81 => 34,  62 => 21,  56 => 20,  53 => 19,  49 => 18,  38 => 9,  35 => 6,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'SmartPsyBundle:FrantOffice:Template.html.twig' %}*/
/* */
/* */
/*     {% block titre %}Patient{% endblock %}*/
/* */
/* {% block contenu -%}*/
/* */
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Id</th>*/
/*             <th>username</th>*/
/*             <th>Actions</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('question_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.username }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="#">list test</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">list reponse</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('testaffecter_new') }}">*/
/*                 ajouter une affectation*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
