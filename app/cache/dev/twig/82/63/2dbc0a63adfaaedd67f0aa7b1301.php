<?php

/* MaisonLiguesCroisiereBundle:Default:ajoutTraversee.html.twig */
class __TwigTemplate_82632dbc0a63adfaaedd67f0aa7b1301 extends Twig_Template
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
        echo "<h2> ajout d'une Traversée : </h2>
<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("maison_ligues_croisiere_ajoutTraversee");
        echo "\" method='post'>
\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t<input type='submit' value='Créer Traversée'/>
</form>
";
    }

    public function getTemplateName()
    {
        return "MaisonLiguesCroisiereBundle:Default:ajoutTraversee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
