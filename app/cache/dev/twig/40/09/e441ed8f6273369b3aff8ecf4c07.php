<?php

/* MaisonLiguesCroisiereBundle:Default:liaison.html.twig */
class __TwigTemplate_4009e441ed8f6273369b3aff8ecf4c07 extends Twig_Template
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
                    <h1 class=\"page-header\">Les Liaisons</h1>
                </div>
                <!-- /.col-lg-12 -->
    </div>
\t<div class=\"table-responsive\">
\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t<tr>
\t\t\t\t<th> Port Départ  </th>
\t\t\t\t<th> Port Arrivé </th>
\t\t\t\t<th> Distance </th>
\t\t\t\t<th> Secteur </th>
\t\t\t\t<th> /// </th>
\t\t\t</tr>
\t\t\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesLiaisons"]) ? $context["lesLiaisons"] : $this->getContext($context, "lesLiaisons")));
        foreach ($context['_seq'] as $context["_key"] => $context["liaison"]) {
            // line 20
            echo "\t\t\t<tr>
\t\t\t\t<td> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liaison"]) ? $context["liaison"] : $this->getContext($context, "liaison")), "getLeDepart"), "getNom", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t<td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liaison"]) ? $context["liaison"] : $this->getContext($context, "liaison")), "getLArrive"), "getNom", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t<td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liaison"]) ? $context["liaison"] : $this->getContext($context, "liaison")), "getDistance", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t<td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["liaison"]) ? $context["liaison"] : $this->getContext($context, "liaison")), "getLeSecteur"), "getNom", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t<td> <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_traversees", array("id" => $this->getAttribute((isset($context["liaison"]) ? $context["liaison"] : $this->getContext($context, "liaison")), "getId", array(), "method"))), "html", null, true);
            echo "\"> Louer </a> </td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liaison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t</table>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "MaisonLiguesCroisiereBundle:Default:liaison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  53 => 20,  49 => 19,  31 => 3,  28 => 2,);
    }
}
