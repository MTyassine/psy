<?php

/* SmartPsyBundle:Default:index.html.twig */
class __TwigTemplate_a379d32782c9712df1854d96c1cb2cdb696b2bbbf07bcf1c8ef3a504f9028f0c extends Twig_Template
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

   ";
        // line 3
        if ($this->env->getExtension('security')->isGranted("ROLE_PATION")) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmartPsyBundle:Default:accueilPation"));
            echo "
    ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_PSY")) {
            // line 6
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmartPsyBundle:Default:accueilPsy"));
            echo "
    ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmartPsyBundle:Back:index"));
            echo "
    ";
        } else {
            // line 10
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmartPsyBundle:Default:accueil"));
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SmartPsyBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  37 => 8,  31 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* */
/* */
/*    {% if is_granted('ROLE_PATION') %}*/
/*         {{ render(controller("SmartPsyBundle:Default:accueilPation")) }}*/
/*     {% elseif is_granted('ROLE_PSY') %}*/
/*         {{ render(controller("SmartPsyBundle:Default:accueilPsy")) }}*/
/*     {% elseif is_granted('ROLE_ADMIN') %}*/
/*         {{ render(controller("SmartPsyBundle:Back:index")) }}*/
/*     {% else %}*/
/*         {{ render(controller("SmartPsyBundle:Default:accueil")) }}*/
/*     {% endif %}*/
