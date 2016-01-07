<?php

/* ::base.html.twig */
class __TwigTemplate_14b0113d540a9b9ed699ea57d3edf8ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "            <script src=\"//code.jquery.com/jquery-1.11.2.min.js\"></script>
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">

            <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/metisMenu.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.map"), "html", null, true);
        echo "\"></script>


            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    </head>
    <body>
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "
        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Croisieres";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 26,  105 => 24,  100 => 6,  86 => 26,  83 => 25,  81 => 24,  74 => 20,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  46 => 10,  38 => 8,  35 => 7,  33 => 6,  23 => 1,  142 => 85,  127 => 73,  121 => 70,  106 => 58,  94 => 5,  88 => 27,  76 => 37,  70 => 34,  43 => 12,  32 => 3,  29 => 5,  53 => 17,  47 => 14,  42 => 9,  31 => 3,  28 => 2,);
    }
}
