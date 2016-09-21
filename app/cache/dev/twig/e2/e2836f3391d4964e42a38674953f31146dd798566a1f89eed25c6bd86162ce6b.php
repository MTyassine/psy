<?php

/* SmartPsyBundle:Question:index.html.twig */
class __TwigTemplate_6f5787a1cce5a373e4b054ec837011e4a0e15b2977d9cbd40a11d6fbde9a963e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartPsyBundle:FrantOffice:Template.html.twig", "SmartPsyBundle:Question:index.html.twig", 1);
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
        echo "Question list";
    }

    // line 6
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "<table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Question</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "question", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("question_new");
        echo "\">
                Create a new entry
            </a>
        </li>
            <li>
                <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("test");
        echo "\">
                    Back to test
                </a>
            </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "SmartPsyBundle:Question:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 43,  94 => 38,  87 => 33,  75 => 27,  69 => 24,  62 => 20,  56 => 19,  53 => 18,  49 => 17,  38 => 8,  35 => 6,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'SmartPsyBundle:FrantOffice:Template.html.twig' %}*/
/* */
/* */
/*     {% block titre %}Question list{% endblock %}*/
/* */
/* {% block contenu -%}*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Question</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('question_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.question }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('question_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('question_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('question_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*             <li>*/
/*                 <a href="{{ path('test') }}">*/
/*                     Back to test*/
/*                 </a>*/
/*             </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
