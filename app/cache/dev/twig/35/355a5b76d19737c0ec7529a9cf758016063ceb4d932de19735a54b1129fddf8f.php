<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_e253a779e05e2aca67a8c4e5559ac13d3af67c43f4625e7790be0a876fe92c6c extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
";
        // line 8
        echo "    ";
        // line 9
        echo "
    ";
        // line 11
        echo "    ";
        // line 12
        echo "
    ";
        // line 14
        echo "    ";
        // line 15
        echo "
    ";
        // line 17
        echo "    ";
        // line 18
        echo "
    ";
        // line 21
        echo "

<form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"popup-form\">

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />


    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control form-white\" placeholder=\"Full Name\">

    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control form-white\" placeholder=\"Password\">
    ";
        // line 32
        echo "    ";
        // line 33
        echo "    ";
        // line 34
        echo "    ";
        // line 35
        echo "    ";
        // line 36
        echo "    ";
        // line 37
        echo "    ";
        // line 38
        echo "    ";
        // line 39
        echo "    ";
        // line 40
        echo "    ";
        // line 41
        echo "    ";
        // line 42
        echo "    ";
        // line 43
        echo "    ";
        // line 44
        echo "    ";
        // line 45
        echo "    ";
        // line 46
        echo "    ";
        // line 47
        echo "    ";
        // line 48
        echo "    <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-submit\">Submit</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 48,  104 => 47,  102 => 46,  100 => 45,  98 => 44,  96 => 43,  94 => 42,  92 => 41,  90 => 40,  88 => 39,  86 => 38,  84 => 37,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 32,  68 => 28,  62 => 25,  57 => 23,  53 => 21,  50 => 18,  48 => 17,  45 => 15,  43 => 14,  40 => 12,  38 => 11,  35 => 9,  33 => 8,  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* {#<form action="{{ path("fos_user_security_check") }}" method="post">#}*/
/*     {#<input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />#}*/
/* */
/*     {#<label for="username">{{ 'security.login.username'|trans }}</label>#}*/
/*     {#<input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />#}*/
/* */
/*     {#<label for="password">{{ 'security.login.password'|trans }}</label>#}*/
/*     {#<input type="password" id="password" name="_password" required="required" />#}*/
/* */
/*     {#<input type="checkbox" id="remember_me" name="_remember_me" value="on" />#}*/
/*     {#<label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>#}*/
/* */
/*     {#<input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />#}*/
/* {#</form>#}*/
/* */
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post" class="popup-form">*/
/* */
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/* */
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" class="form-control form-white" placeholder="Full Name">*/
/* */
/*     <input type="password" id="password" name="_password" required="required" class="form-control form-white" placeholder="Password">*/
/*     {#<div class="dropdown">#}*/
/*     {#<button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">#}*/
/*     {#Pricing Plan#}*/
/*     {#</button>#}*/
/*     {#<ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="dLabel">#}*/
/*     {#<li class="animated lightSpeedIn"><a href="#">1 month membership ($150)</a></li>#}*/
/*     {#<li class="animated lightSpeedIn"><a href="#">3 month membership ($350)</a></li>#}*/
/*     {#<li class="animated lightSpeedIn"><a href="#">1 year membership ($1000)</a></li>#}*/
/*     {#<li class="animated lightSpeedIn"><a href="#">Free trial class</a></li>#}*/
/*     {#</ul>#}*/
/*     {#</div>#}*/
/*     {#<div class="checkbox-holder text-left">#}*/
/*     {#<div class="checkbox">#}*/
/*     {#<input type="checkbox" value="None" id="squaredOne" name="check" />#}*/
/*     {#<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>#}*/
/*     {#</div>#}*/
/*     {#</div>#}*/
/*     <button type="submit" id="_submit" name="_submit" value="{{ 'Login'|trans({}, 'FOSUserBundle') }}" class="btn btn-submit">Submit</button>*/
/* </form>*/
/* */
