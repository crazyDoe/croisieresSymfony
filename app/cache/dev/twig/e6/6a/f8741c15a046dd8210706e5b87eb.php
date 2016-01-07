<?php

/* MaisonLiguesCroisiereBundle:Default:tarifs.html.twig */
class __TwigTemplate_e66af8741c15a046dd8210706e5b87eb extends Twig_Template
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
                <!-- /.col-lg-12 -->
    </div>
\t<div class=\"table-responsive\">
\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t<tr>
\t\t\t\t<th> Catégorie </th>
\t\t\t\t<th> Type </th>
\t\t\t\t<th> Prix </th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th rowspan=\"3\"> A </th>
\t\t\t\t<td> zzd</td> <td> efef </td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td> zzdd </td> <td> dzzdz </td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td> zzdd </td> <td> dzzdz </td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th rowspan=\"2\"> B </th>
\t\t\t\t<td> zzd</td> <td> efef </td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td> zzdd </td> <td> dzzdz </td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th rowspan=\"3\"> C </th>
\t\t\t\t<td> zzd</td> <td> efef </td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td> zzdd </td> <td> dzzdz </td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td> zzdd </td> <td> dzzdz </td>
\t\t\t</tr>


\t\t</table>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "MaisonLiguesCroisiereBundle:Default:tarifs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
