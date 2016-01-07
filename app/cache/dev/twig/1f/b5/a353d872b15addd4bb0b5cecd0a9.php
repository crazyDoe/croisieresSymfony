<?php

/* MaisonLiguesCroisiereBundle:Default:lesTraversees.html.twig */
class __TwigTemplate_1fb5a353d872b15addd4bb0b5cecd0a9 extends Twig_Template
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
            <h1 class=\"page-header\"></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
\t<div class=\"table-responsive\">
\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t<tr>
\t\t\t\t<th colspan=\"3\"> Traversée </th>
\t\t\t\t<th colspan =\"3\"> Places disponibles par Catégorie </th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th> N ° </th>
\t\t\t\t<th> Heure </th>
\t\t\t\t<th> Bateau </th>
\t\t\t\t<th> A <br> Passager </th>
\t\t\t\t<th> B <br> Véh.inf.5m </th>
\t\t\t\t<th> C <br> Véh.sup.5m</th>
\t\t\t</tr>
\t\t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesTraversees"]) ? $context["lesTraversees"] : $this->getContext($context, "lesTraversees")));
        foreach ($context['_seq'] as $context["_key"] => $context["traversee"]) {
            // line 25
            echo "\t\t\t<tr>
\t\t\t\t<td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["traversee"]) ? $context["traversee"] : $this->getContext($context, "traversee")), "id"), "html", null, true);
            echo "
\t\t\t\t<td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["traversee"]) ? $context["traversee"] : $this->getContext($context, "traversee")), "heure"), "html", null, true);
            echo " </td>
\t\t\t\t<td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["traversee"]) ? $context["traversee"] : $this->getContext($context, "traversee")), "leBateau"), "nom"), "html", null, true);
            echo "</td>
\t\t\t\t";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["traversee"]) ? $context["traversee"] : $this->getContext($context, "traversee")), "leBateau"), "leContenant"));
            foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
                // line 30
                echo "\t\t\t\t<td> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contenu"]) ? $context["contenu"] : $this->getContext($context, "contenu")), "capaciteMax"), "html", null, true);
                echo "</td>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t<td>  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_reservation", array("id" => $this->getAttribute((isset($context["traversee"]) ? $context["traversee"] : $this->getContext($context, "traversee")), "id", array(), "method"))), "html", null, true);
            echo "\">Réserver</a> </td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['traversee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t</table> 
\t</div>
";
    }

    public function getTemplateName()
    {
        return "MaisonLiguesCroisiereBundle:Default:lesTraversees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  86 => 32,  77 => 30,  73 => 29,  69 => 28,  65 => 27,  61 => 26,  58 => 25,  54 => 24,  31 => 3,  28 => 2,);
    }
}
