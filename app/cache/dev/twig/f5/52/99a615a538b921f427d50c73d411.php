<?php

/* MaisonLiguesCroisiereBundle:Default:traversees.html.twig */
class __TwigTemplate_f55299a615a538b921f427d50c73d411 extends Twig_Template
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
        echo "<div id=\"page-wrapper\">
\t<div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">Traversées entre ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["laLiaison"]) ? $context["laLiaison"] : $this->getContext($context, "laLiaison")), "leDepart"), "Nom"), "html", null, true);
        echo " et ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["laLiaison"]) ? $context["laLiaison"] : $this->getContext($context, "laLiaison")), "lArrive"), "Nom"), "html", null, true);
        echo " </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
\t<div class=\"table-responsive\">
        <table class=\"table table-striped table-bordered table-hover\">
            <thead>
                <tr>
                    <th> Date </th>
                    <th> Heure </th>
                    <th> Nom Bateau </th>
                    <th> /// </th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["laLiaison"]) ? $context["laLiaison"] : $this->getContext($context, "laLiaison")), "getLesTraversses", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["laTraversee"]) {
            // line 22
            echo "                <tr>
                    <td> ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["laTraversee"]) ? $context["laTraversee"] : $this->getContext($context, "laTraversee")), "getDate", array(), "method"), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["laTraversee"]) ? $context["laTraversee"] : $this->getContext($context, "laTraversee")), "getHeure", array(), "method"), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["laTraversee"]) ? $context["laTraversee"] : $this->getContext($context, "laTraversee")), "getleBateau"), "getNom", array(), "method"), "html", null, true);
            echo "</td>
                    <td> <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_reservation", array("id" => $this->getAttribute((isset($context["laTraversee"]) ? $context["laTraversee"] : $this->getContext($context, "laTraversee")), "getId", array(), "method"))), "html", null, true);
            echo "\"> Réserver </a> </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['laTraversee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    \t\t </tbody>
        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MaisonLiguesCroisiereBundle:Default:traversees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  75 => 26,  71 => 25,  67 => 24,  63 => 23,  60 => 22,  56 => 21,  36 => 6,  31 => 3,  28 => 2,);
    }
}
