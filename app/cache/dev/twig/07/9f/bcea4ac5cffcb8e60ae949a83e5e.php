<?php

/* MaisonLiguesCroisiereBundle:Default:base.html.twig */
class __TwigTemplate_079fbcea4ac5cffcb8e60ae949a83e5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'corps' => array($this, 'block_corps'),
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"wrapper\">
    <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_index");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/jean.png"), "html", null, true);
        echo "\"/></a>
            </div>
            <!-- /.navbar-header -->

            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav in\" id=\"side-menu\">
                        <li class=\"sidebar-search\">
                            <div class=\"input-group custom-search-form\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"button\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Bateau<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level collapse\">
                                <li>
                                    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_ajoutBateau");
        echo "\">Ajout</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_bateau");
        echo "\">Voir Bateaux</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href=\"#\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Port<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level collapse\">
                                <li>
                                    <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_ajoutPort");
        echo "\">Ajout</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_ports");
        echo "\">Voir Ports</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Secteur<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level collapse\">
                                <li>
                                    <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_ajoutSecteur");
        echo "\">Ajout</a>
                                </li>
                                <li>
                                    <a href=\"\">Voir Secteurs</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Liaison<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level collapse\">
                                <li>
                                    <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_ajoutLiaison");
        echo "\">Ajout</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_liaison");
        echo "\">Voir Liaisons</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
    ";
        // line 85
        $this->displayBlock('corps', $context, $blocks);
    }

    public function block_corps($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "MaisonLiguesCroisiereBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 85,  127 => 73,  121 => 70,  106 => 58,  94 => 49,  88 => 46,  76 => 37,  70 => 34,  43 => 12,  32 => 3,  29 => 2,  53 => 17,  47 => 14,  42 => 12,  31 => 3,  28 => 2,);
    }
}
