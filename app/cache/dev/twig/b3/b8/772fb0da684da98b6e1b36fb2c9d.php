<?php

/* MaisonLiguesCroisiereBundle:Default:ports.html.twig */
class __TwigTemplate_b3b8772fb0da684da98b6e1b36fb2c9d extends Twig_Template
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
                    <h1 class=\"page-header\">Les Ports</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
\t<div class=\"table-responsive\">
        <table class=\"table table-striped table-bordered table-hover\">
            <thead>
                <tr>
                \t<th> ID </th>
                    <th> Nom Port </th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesPorts"]) ? $context["lesPorts"] : $this->getContext($context, "lesPorts")));
        foreach ($context['_seq'] as $context["_key"] => $context["port"]) {
            // line 20
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["port"]) ? $context["port"] : $this->getContext($context, "port")), "getId", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["port"]) ? $context["port"] : $this->getContext($context, "port")), "getNom", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['port'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    \t\t </tbody>
        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MaisonLiguesCroisiereBundle:Default:ports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  60 => 22,  56 => 21,  53 => 20,  49 => 19,  31 => 3,  28 => 2,);
    }
}
