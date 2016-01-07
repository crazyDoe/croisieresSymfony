<?php

/* MaisonLiguesCroisiereBundle:Default:reservation.html.twig */
class __TwigTemplate_020a303a3033ebf0ca53b0ebe766b271 extends Twig_Template
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
\t<h2> Réservation : </h2>
\t<form class=\"col-sm-10\" method=\"post\" role=\"form\">
\t\t<div class=\"col-lg-6\">
\t\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label> Nom : </label>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label> Adresse : </label>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse"), 'widget');
        echo "
\t\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-lg-6\">

\t\t\t<div class=\"form-group\">
\t\t\t\t<label> Code Postal  : </label>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp"), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label> Ville: </label>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'widget');
        echo "
\t\t\t</div>
\t\t\t\t\t
\t\t</div>
\t\t<div class=\"col-lg-8\">

\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th> Type </th>
\t\t\t\t\t\t<th> Prix </th>
\t\t\t\t\t\t<th> /// </th>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 34
        $context["i"] = 0;
        // line 35
        echo "\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lesEnregistrements"));
        foreach ($context['_seq'] as $context["_key"] => $context["unEnreg"]) {
            // line 36
            echo "\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<td> <div style=\"visibility:hidden;\">";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["unEnreg"]) ? $context["unEnreg"] : $this->getContext($context, "unEnreg")), "leType"), 'row');
            echo " </div>
\t\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["lesTarifs"]) ? $context["lesTarifs"] : $this->getContext($context, "lesTarifs")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "leType"), "libelle"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lesTarifs"]) ? $context["lesTarifs"] : $this->getContext($context, "lesTarifs")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "tarif"), "html", null, true);
            echo "  € </td>
\t\t\t\t\t\t<td>";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["unEnreg"]) ? $context["unEnreg"] : $this->getContext($context, "unEnreg")), "quantite"), 'row');
            echo " </td>
\t\t\t\t\t\t";
            // line 42
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 43
            echo "\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unEnreg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-outline btn-primary btn-lg btn-block\"> Réserver</button>
\t\t

\t\t";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "MaisonLiguesCroisiereBundle:Default:reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 51,  115 => 45,  108 => 43,  106 => 42,  102 => 41,  98 => 40,  94 => 39,  90 => 38,  86 => 36,  81 => 35,  79 => 34,  63 => 21,  57 => 18,  48 => 12,  42 => 9,  37 => 7,  31 => 3,  28 => 2,);
    }
}
