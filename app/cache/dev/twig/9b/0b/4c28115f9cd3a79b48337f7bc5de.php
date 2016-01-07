<?php

/* MaisonLiguesCroisiereBundle:Default:choixTraversee.html.twig */
class __TwigTemplate_9b0b4c28115f9cd3a79b48337f7bc5de extends Twig_Template
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
            <h1 class=\"page-header\">Choisir votre Traversee</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
<form class=\"col-sm-4\" method=\"post\" action=\"\" role=\"form\">
\t<div class=\"form-group\">
\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t<label> Date : </label>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Date"), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label> Liaison: </label>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lesLiaison"), 'widget');
        echo "
\t\t</div>
\t\t<input class=\"form-control\" type='submit' value='Chercher'/>
\t";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "MaisonLiguesCroisiereBundle:Default:choixTraversee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 20,  53 => 17,  47 => 14,  42 => 12,  31 => 3,  28 => 2,);
    }
}
