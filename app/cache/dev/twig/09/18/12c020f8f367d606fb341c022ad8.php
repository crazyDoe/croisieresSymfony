<?php

/* MaisonLiguesCroisiereBundle:Default:index.html.twig */
class __TwigTemplate_091812c020f8f367d606fb341c022ad8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MaisonLiguesCroisiereBundle:Default:base.html.twig");

        $this->blocks = array(
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MaisonLiguesCroisiereBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_corps($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Mes Croisieres</h1>
            </div>
        </div>
        <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            <div class=\"row\">
                                <div class=\"col-xs-3\">
                                    <i class=\"fa fa-comments fa-5x\"></i>
                                </div>
                                <div class=\"col-xs-9 text-right\">
                                    <div class=\"huge\"></div>
                                    <div> Bateau </div>
                                </div>
                            </div>
                        </div>
                        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_bateau");
        echo "\">
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
                                    <i class=\"fa fa-shopping-cart fa-5x\"></i>
                                </div>
                                <div class=\"col-xs-9 text-right\">
                                    <div class=\"huge\"></div>
                                    <div> Port  </div>
                                </div>
                            </div>
                        </div>
                        <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_ports");
        echo "\">
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
                                    <i class=\"fa fa-truck fa-5x\"></i>
                                </div>
                                <div class=\"col-xs-9 text-right\">
                                    <div class=\"huge\"></div>
                                    <div> Secteur </div>
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
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"panel panel-red\">
                        <div class=\"panel-heading\">
                            <div class=\"row\">
                                <div class=\"col-xs-3\">
                                    <i class=\"fa fa-support fa-5x\"></i>
                                </div>
                                <div class=\"col-xs-9 text-right\">
                                    <div class=\"huge\"></div>
                                    <div> Liaison </div>
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
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"panel panel-yellow\">
                        <div class=\"panel-heading\">
                            <div class=\"row\">
                                <div class=\"col-xs-3\">
                                    <i class=\"fa fa-truck fa-5x\"></i>
                                </div>
                                <div class=\"col-xs-9 text-right\">
                                    <div class=\"huge\"></div>
                                    <div> Traversées </div>
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
    </div>
";
    }

    public function getTemplateName()
    {
        return "MaisonLiguesCroisiereBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 45,  53 => 23,  31 => 3,  28 => 2,);
    }
}
