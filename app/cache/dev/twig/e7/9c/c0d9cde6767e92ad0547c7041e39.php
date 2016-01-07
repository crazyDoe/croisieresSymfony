<?php

/* MaisonLiguesCroisiereBundle:Default:bateau.html.twig */
class __TwigTemplate_e79cc0d9cde6767e92ad0547c7041e39 extends Twig_Template
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
                    <h1 class=\"page-header\">Les Bateaux</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
\t<div class=\"table-responsive\">
        <table class=\"table table-striped table-bordered table-hover\">
            <thead>
                <tr>
                \t<th> ID </th>
                    <th> Nom Bateau </th>
\t\t\t\t\t<th> /// </th>
                    <th> Capacité </th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesBateaux"]) ? $context["lesBateaux"] : $this->getContext($context, "lesBateaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["bateau"]) {
            // line 22
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bateau"]) ? $context["bateau"] : $this->getContext($context, "bateau")), "getId", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bateau"]) ? $context["bateau"] : $this->getContext($context, "bateau")), "getNom", array(), "method"), "html", null, true);
            echo "</td>
                    <td> <a href=\"\"> Louer </a> </td>
                    <td>
                        ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["bateau"]) ? $context["bateau"] : $this->getContext($context, "bateau")), "leContenant"));
            foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
                // line 28
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contenu"]) ? $context["contenu"] : $this->getContext($context, "contenu")), "laCategorie"), "Lettre"), "html", null, true);
                echo "
                             : 
                             ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contenu"]) ? $context["contenu"] : $this->getContext($context, "contenu")), "capaciteMax"), "html", null, true);
                echo "</br>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                    </td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bateau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    \t\t </tbody>
        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MaisonLiguesCroisiereBundle:Default:bateau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 35,  86 => 32,  78 => 30,  72 => 28,  68 => 27,  62 => 24,  58 => 23,  55 => 22,  51 => 21,  31 => 3,  28 => 2,);
    }
}
