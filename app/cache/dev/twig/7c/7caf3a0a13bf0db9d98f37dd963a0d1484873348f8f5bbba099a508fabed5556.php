<?php

/* SmartPsyBundle:BackOffice:index.html.twig */
class __TwigTemplate_a5af49364b9fedd3c7e35188c2ad3153135ef1a8b60a6f14417f51b7a76527e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base2.html.twig", "SmartPsyBundle:BackOffice:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "My Tavel Mate";
    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        echo "Dashboard";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
<!-- /.row -->
<div class=\"row\">
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <i class=\"fa fa-user fa-5x\"></i>
                    </div>
                    <div class=\"col-xs-9 text-right\">
                        <div class=\"huge\">";
        // line 20
        echo "</div>
                        <div>Utilisateur</div>
                    </div>
                </div>
            </div>
            <a href=\"#\">
                <div class=\"panel-footer\">
                    <span class=\"pull-left\">View Details</span>
                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"panel panel-green\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <i class=\"fa fa-tasks fa-5x\"></i>
                    </div>
                    <div class=\"col-xs-9 text-right\">
                        <div class=\"huge\">";
        // line 42
        echo "</div>
                        <div>Produit</div>
                    </div>
                </div>
            </div>
            <a href=\"#\">
                <div class=\"panel-footer\">
                    <span class=\"pull-left\">View Details</span>
                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"panel panel-yellow\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <i class=\"fa fa-shopping-cart fa-5x\"></i>
                    </div>
                    <div class=\"col-xs-9 text-right\">
                        <div class=\"huge\">";
        // line 64
        echo "</div>
                        <div>Vente</div>
                    </div>
                </div>
            </div>
            <a href=\"#\">
                <div class=\"panel-footer\">
                    <span class=\"pull-left\">View Details</span>
                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"panel panel-red\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <i class=\"fa fa-eur fa-5x\"></i>
                    </div>
                    <div class=\"col-xs-9 text-right\">
                        <div class=\"huge\">";
        // line 86
        echo "</div>
                        <div>Total vente</div>
                    </div>
                </div>
            </div>
            <a href=\"#\">
                <div class=\"panel-footer\">
                    <span class=\"pull-left\">View Details</span>
                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /.row -->




<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <i class=\"fa fa-user fa-5x\"></i>
                    </div>
                    <div class=\"col-xs-9 text-right\">
                        <div class=\"huge\">Calcule de points</div>
                        <div>Utilisateur</div>
                    </div>
                </div>
            </div>
            <a href=\"\">
                <div class=\"panel-footer\">
                    <span class=\"pull-left\">View Details</span>
                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"panel panel-yellow\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <i class=\"fa fa-shopping-cart fa-5x\"></i>
                    </div>
                    <div class=\"col-xs-9 text-right\">
                        <div class=\"huge\">Ajouter une vente</div>
                        <div>vente</div>
                    </div>
                </div>
            </div>
            <a href=\"\">
                <div class=\"panel-footer\">
                    <span class=\"pull-left\">View Details</span>
                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>

</div>

</div>
<!-- /#page-wrapper -->


";
    }

    public function getTemplateName()
    {
        return "SmartPsyBundle:BackOffice:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 86,  106 => 64,  82 => 42,  58 => 20,  45 => 9,  42 => 8,  36 => 6,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::base2.html.twig' %}*/
/* */
/* {% block title %}My Tavel Mate{% endblock %}*/
/* */
/* */
/* {% block titre %}Dashboard{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <!-- /.row -->*/
/* <div class="row">*/
/*     <div class="col-lg-3 col-md-6">*/
/*         <div class="panel panel-primary">*/
/*             <div class="panel-heading">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-3">*/
/*                         <i class="fa fa-user fa-5x"></i>*/
/*                     </div>*/
/*                     <div class="col-xs-9 text-right">*/
/*                         <div class="huge">{#{{ users|length }}#}</div>*/
/*                         <div>Utilisateur</div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <a href="#">*/
/*                 <div class="panel-footer">*/
/*                     <span class="pull-left">View Details</span>*/
/*                     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-lg-3 col-md-6">*/
/*         <div class="panel panel-green">*/
/*             <div class="panel-heading">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-3">*/
/*                         <i class="fa fa-tasks fa-5x"></i>*/
/*                     </div>*/
/*                     <div class="col-xs-9 text-right">*/
/*                         <div class="huge">{#{{ produits|length }}#}</div>*/
/*                         <div>Produit</div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <a href="#">*/
/*                 <div class="panel-footer">*/
/*                     <span class="pull-left">View Details</span>*/
/*                     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-lg-3 col-md-6">*/
/*         <div class="panel panel-yellow">*/
/*             <div class="panel-heading">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-3">*/
/*                         <i class="fa fa-shopping-cart fa-5x"></i>*/
/*                     </div>*/
/*                     <div class="col-xs-9 text-right">*/
/*                         <div class="huge">{#{{ ventes|length }}#}</div>*/
/*                         <div>Vente</div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <a href="#">*/
/*                 <div class="panel-footer">*/
/*                     <span class="pull-left">View Details</span>*/
/*                     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-lg-3 col-md-6">*/
/*         <div class="panel panel-red">*/
/*             <div class="panel-heading">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-3">*/
/*                         <i class="fa fa-eur fa-5x"></i>*/
/*                     </div>*/
/*                     <div class="col-xs-9 text-right">*/
/*                         <div class="huge">{#{{ total }}#}</div>*/
/*                         <div>Total vente</div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <a href="#">*/
/*                 <div class="panel-footer">*/
/*                     <span class="pull-left">View Details</span>*/
/*                     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- /.row -->*/
/* */
/* */
/* */
/* */
/* <div class="row">*/
/*     <div class="col-md-6">*/
/*         <div class="panel panel-primary">*/
/*             <div class="panel-heading">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-3">*/
/*                         <i class="fa fa-user fa-5x"></i>*/
/*                     </div>*/
/*                     <div class="col-xs-9 text-right">*/
/*                         <div class="huge">Calcule de points</div>*/
/*                         <div>Utilisateur</div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <a href="">*/
/*                 <div class="panel-footer">*/
/*                     <span class="pull-left">View Details</span>*/
/*                     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-md-6">*/
/*         <div class="panel panel-yellow">*/
/*             <div class="panel-heading">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-3">*/
/*                         <i class="fa fa-shopping-cart fa-5x"></i>*/
/*                     </div>*/
/*                     <div class="col-xs-9 text-right">*/
/*                         <div class="huge">Ajouter une vente</div>*/
/*                         <div>vente</div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <a href="">*/
/*                 <div class="panel-footer">*/
/*                     <span class="pull-left">View Details</span>*/
/*                     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* </div>*/
/* <!-- /#page-wrapper -->*/
/* */
/* */
/* {% endblock %}*/
