<?php

/* ::layout.html.twig */
class __TwigTemplate_05358752444a102131f3097428ae50d952564a4c01011bd4d8e7959692140bb4 extends Twig_Template
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
\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\"> <img alt=\"Charisma Logo\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/img/logo20.png"), "html", null, true);
        echo "\" class=\"hidden-xs\"/>
\t\t\t\t<span>F3E</span></a>
 
\t\t\t\t
 
 

 
\t\t\t</div>
\t\t</div>
 
\t\t<div class=\"ch-container\">
\t\t\t<div class=\"row\">
 \t\t\t\t<div class=\"col-sm-2 col-lg-2\">
\t\t\t\t\t<div class=\"sidebar-nav\">
\t\t\t\t\t\t<div class=\"nav-canvas\">
\t\t\t\t\t\t\t<div class=\"nav-sm nav nav-stacked\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked main-menu\">
\t\t\t\t\t\t\t\t<li class=\"nav-header\">Menu</li>
\t\t\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"glyphicon glyphicon-plane\"></i><span> Congés</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("validate");
        echo "\"><i class=\"glyphicon glyphicon-ok-sign\"></i><span> Congés à valider</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("user_list");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i><span> Employés</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "        \t</div>
\t\t</div>
 
 

 

        ";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
 
\t\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
 
\t\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/responsive-tables/responsive-tables.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.history.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 110
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

    // line 69
    public function block_body($context, array $blocks = array())
    {
    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 77,  273 => 69,  267 => 21,  263 => 20,  259 => 19,  255 => 18,  251 => 17,  247 => 16,  243 => 15,  239 => 14,  235 => 13,  231 => 12,  227 => 11,  223 => 10,  219 => 9,  215 => 8,  210 => 7,  207 => 6,  201 => 5,  193 => 110,  188 => 108,  183 => 106,  178 => 104,  173 => 102,  168 => 100,  163 => 98,  158 => 96,  153 => 94,  148 => 92,  143 => 90,  138 => 88,  133 => 86,  129 => 85,  124 => 83,  119 => 81,  114 => 79,  111 => 78,  109 => 77,  100 => 70,  98 => 69,  89 => 63,  84 => 61,  79 => 59,  56 => 39,  38 => 24,  35 => 23,  33 => 6,  29 => 5,  23 => 1,);
    }
}
