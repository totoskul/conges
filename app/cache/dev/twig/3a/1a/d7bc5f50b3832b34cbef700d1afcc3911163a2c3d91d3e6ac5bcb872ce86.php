<?php

/* base.html.twig */
class __TwigTemplate_3a1ad7bc5f50b3832b34cbef700d1afcc3911163a2c3d91d3e6ac5bcb872ce86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
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
        // line 25
        echo "\t\t
        <style>
\tlabel { display: inline-block; width: 300px; }
\tinput:-moz-read-only { /* For Firefox */
    border-color: yellow;
}

input:read-only { 
    border-color: yellow;
}
\t</style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
\t";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "        <!-- jQuery -->
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.ui.datepicker-fr.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
 
\t\t<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
 
\t\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/responsive-tables/responsive-tables.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/jquery.history.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t\t<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/js/charisma.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\">
\$(document).ready(function(){
\$(\"form input.date\").datepicker({
    dateFormat: 'dd/mm/yy',
\tinline:true,\t
\tminDate: new Date(2014, 1 - 1, 1),
\tmaxDate: new Date(2034, 1 - 1, 1),
})});
  
  
</script>
    </head>
    <body>
    \t<div class=\"navbar navbar-default\" role=\"navigation\">
\t\t\t<span><a class=\"btn btn-warning\" href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("user_logout");
        echo "\">Déconnexion</a></span>
\t\t\t<div class=\"navbar-inner\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle pull-left animated flip\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\"> <img alt=\"F3e Logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/img/f3e_logo2_6.png"), "html", null, true);
        echo "\" class=\"hidden-xs\"/>
\t\t\t\t<span>Congés</span></a>
\t\t\t\t
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
        // line 120
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"glyphicon glyphicon-plane\"></i><span> Congés</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        // line 122
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 123
            echo "    \t\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("validate");
            echo "\"><i class=\"glyphicon glyphicon-ok-sign\"></i><span> Congés à valider</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a class=\"ajax-link\" href=\"";
            // line 125
            echo $this->env->getExtension('routing')->getPath("user_list");
            echo "\"><i class=\"glyphicon glyphicon-user\"></i><span> Salarié-e-s</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 128
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"col-lg-10 col-sm-10\">
\t\t\t\t\t";
        // line 133
        $this->displayBlock('body', $context, $blocks);
        // line 134
        echo "\t\t\t\t</div>
        \t</div>
\t\t</div>
 
 

 

        
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/css/bootstrap-united.min.css"), "html", null, true);
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
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/public/css/jquery-ui.css"), "html", null, true);
        echo "\" rel='stylesheet'>
        
\t\t";
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 133
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 133,  323 => 41,  316 => 22,  312 => 21,  308 => 20,  304 => 19,  300 => 18,  296 => 17,  292 => 16,  288 => 15,  284 => 14,  280 => 13,  276 => 12,  272 => 11,  268 => 10,  264 => 9,  260 => 8,  255 => 7,  252 => 6,  246 => 5,  231 => 134,  229 => 133,  222 => 128,  216 => 125,  210 => 123,  208 => 122,  203 => 120,  178 => 100,  167 => 92,  149 => 77,  144 => 75,  139 => 73,  134 => 71,  129 => 69,  124 => 67,  119 => 65,  114 => 63,  109 => 61,  104 => 59,  99 => 57,  94 => 55,  89 => 53,  85 => 52,  80 => 50,  75 => 48,  70 => 46,  66 => 45,  61 => 43,  58 => 42,  56 => 41,  48 => 36,  35 => 25,  33 => 6,  29 => 5,  23 => 1,);
    }
}
