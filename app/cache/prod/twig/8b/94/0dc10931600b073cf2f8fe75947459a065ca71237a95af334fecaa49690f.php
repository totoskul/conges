<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_8b940dc10931600b073cf2f8fe75947459a065ca71237a95af334fecaa49690f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        // line 23
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    </head>
    <body>
    \t<div class=\"navbar navbar-default\" role=\"navigation\">
\t\t\t<div class=\"navbar-inner\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle pull-left animated flip\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\"> <img alt=\"Charisma Logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/img/f3e_logo2_6.png"), "html", null, true);
        echo "\" class=\"hidden-xs\"/>
\t\t\t\t<span>F3E</span></a>
 
\t\t\t\t
 
 

 
\t\t\t</div>
\t\t</div>
 
\t\t";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo " 
 

 

        ";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
 
\t\t<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
 
\t\t<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/responsive-tables/responsive-tables.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.history.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/charisma.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "F3E";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link id=\"bs-css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/fullcalendar/dist/fullcalendar.css"), "html", null, true);
        echo "\" rel='stylesheet'>
\t\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/fullcalendar/dist/fullcalendar.print.css"), "html", null, true);
        echo "\" rel='stylesheet' media='print'>
\t\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/chosen/chosen.min.css"), "html", null, true);
        echo "\" rel='stylesheet'>
\t\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/colorbox/example3/colorbox.css"), "html", null, true);
        echo "\" rel='stylesheet'>
\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/responsive-tables/responsive-tables.css"), "html", null, true);
        echo "\" rel='stylesheet'>
\t\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css"), "html", null, true);
        echo "\" rel='stylesheet'>
\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/css/jquery.noty.css"), "html", null, true);
        echo "\" rel='stylesheet'>
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/css/noty_theme_default.css"), "html", null, true);
        echo "\" rel='stylesheet'>
\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/css/elfinder.min.css"), "html", null, true);
        echo "\" rel='stylesheet'>
\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/css/elfinder.theme.css"), "html", null, true);
        echo "\" rel='stylesheet'>
\t\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/css/jquery.iphone.toggle.css"), "html", null, true);
        echo "\" rel='stylesheet'>
\t\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/css/uploadify.css"), "html", null, true);
        echo "\" rel='stylesheet'>
\t\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/css/animate.min.css"), "html", null, true);
        echo "\" rel='stylesheet'>
        ";
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        // line 51
        echo "    \t\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 52
        echo "\t\t";
    }

    // line 51
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 58,  256 => 51,  252 => 52,  249 => 51,  246 => 50,  240 => 21,  236 => 20,  232 => 19,  228 => 18,  224 => 17,  220 => 16,  216 => 15,  212 => 14,  208 => 13,  204 => 12,  200 => 11,  196 => 10,  192 => 9,  188 => 8,  183 => 7,  180 => 6,  174 => 5,  166 => 91,  161 => 89,  156 => 87,  151 => 85,  146 => 83,  141 => 81,  136 => 79,  131 => 77,  126 => 75,  121 => 73,  116 => 71,  111 => 69,  106 => 67,  102 => 66,  97 => 64,  92 => 62,  87 => 60,  84 => 59,  82 => 58,  75 => 53,  73 => 50,  57 => 39,  39 => 24,  36 => 23,  34 => 6,  30 => 5,  24 => 1,);
    }
}
