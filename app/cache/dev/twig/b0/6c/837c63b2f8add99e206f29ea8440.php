<?php

/* MaisonLiguesCroisiereBundle:Default:ajoutLiaison.html.twig */
class __TwigTemplate_b06c837c63b2f8add99e206f29ea8440 extends Twig_Template
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
                    <h1 class=\"page-header\">Ajout d'un bateau</h1>
                </div>
                <!-- /.col-lg-12 -->
    </div>
<form class=\"col-sm-4\" method=\"post\" role=\"form\">
\t<div class=\"form-group\">
\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t<label> Distance : </label>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "distance"), 'widget');
        echo "
\t\t\t<p class=\"help-block\"> Ex : Titanic </p>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label> Secteur : </label>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leSecteur"), 'widget');
        echo "
\t\t\t<p class=\"help-block\"> Ex : Titanic </p>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label> Port de Départ : </label>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leDepart"), 'widget');
        echo "
\t\t\t<p class=\"help-block\"> Ex : Titanic </p>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label> Port d'Arrivé: </label>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lArrive"), 'widget');
        echo "
\t\t\t<p class=\"help-block\"> Ex : Titanic </p>
\t\t</div>
\t";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t<input class=\"form-control\" type='submit' value='Créer Bateau'/>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "MaisonLiguesCroisiereBundle:Default:ajoutLiaison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 29,  68 => 26,  61 => 22,  54 => 18,  47 => 14,  42 => 12,  31 => 3,  28 => 2,);
    }
}
