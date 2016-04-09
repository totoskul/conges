<?php

/* AppBundle:LeaveRequest:request.html.twig */
class __TwigTemplate_e9614ab78698f9cee91095da4273134e3d6ad754ad1efbe4e1a6bfbc9ea7ba2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"CP\" class=\"well top-block\" href=\"#\">
            <i class=\"glyphicon glyphicon-road blue\"></i>

            <div>Congés payés disponibles</div>
            <div>Année N-1 : ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["CP_N1"]) ? $context["CP_N1"] : $this->getContext($context, "CP_N1")), "html", null, true);
        echo "</div>
            <div>Année N : ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["CP_N"]) ? $context["CP_N"] : $this->getContext($context, "CP_N")), "html", null, true);
        echo "</div>
            <span class=\"notification\">";
        // line 12
        echo twig_escape_filter($this->env, ((isset($context["CP_N"]) ? $context["CP_N"] : $this->getContext($context, "CP_N")) + (isset($context["CP_N1"]) ? $context["CP_N1"] : $this->getContext($context, "CP_N1"))), "html", null, true);
        echo "</span>
        </a>
    </div>

    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"RTT Fixes\" class=\"well top-block\" href=\"#\">
            <i class=\"glyphicon glyphicon-align-left green\"></i>

            <div>RTT fixes</div>
            <div>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["RTT_Fixes"]) ? $context["RTT_Fixes"] : $this->getContext($context, "RTT_Fixes")), "html", null, true);
        echo "</div>
            <span class=\"notification green\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["RTT_Fixes"]) ? $context["RTT_Fixes"] : $this->getContext($context, "RTT_Fixes")), "html", null, true);
        echo "</span>
        </a>
    </div>

    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"RTT Variables\" class=\"well top-block\" href=\"#\">
            <i class=\"glyphicon glyphicon-align-center red\"></i>

            <div>RTT variables</div>
            <div>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["RTT_variables"]) ? $context["RTT_variables"] : $this->getContext($context, "RTT_variables")), "html", null, true);
        echo "</div>
            <span class=\"notification yellow\">";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["RTT_variables"]) ? $context["RTT_variables"] : $this->getContext($context, "RTT_variables")), "html", null, true);
        echo "</span>
        </a>
    </div>

    
</div>

\t<div class=\"row\">
\t<div class=\"box col-md-12\">
        <div class=\"box-inner\">
\t\t
\t\t\t<h1> ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["error_msg"]) ? $context["error_msg"] : $this->getContext($context, "error_msg")), "html", null, true);
        echo "</h1>
        ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "formNew")));
        echo "
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'row', array("label" => "Date de début (JJ/MM/AAAA) : "));
        echo "
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "LeaveStartPeriod", array()), 'row', array("label" => "Tranche horaire de début : "));
        echo "
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'row', array("label" => "Date de fin (JJ/MM/AAAA) : "));
        echo "
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "LeaveEndPeriod", array()), 'row', array("label" => "Tranche horaire de fin : "));
        echo "
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "LeaveType", array()), 'row', array("label" => "Type de congé : ", "attr" => array("onChange" => "requireComment();")));
        echo "
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentUser", array()), 'row', array("label" => "Commentaire : "));
        echo "
            <div class=\"hr hr-24\"></div>
            <div class=\"col-xs-offset-4 col-sm-offset-4 col-md-offset-4\">
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Créer", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
                <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\">
                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Annuler", array()), 'widget', array("attr" => array("class" => "btn btn-warning"), "icon" => "times"));
        echo "
                </a>
            </div>
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    \t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        </div>
    </div>
\t<script type=\"text/javascript\">
function requireComment(){
//console.log(document.getElementById(\"f3e_app_bundle_request_commentUser\"));
//document.getElementById(\"f3e_app_bundle_request_commentUser\").required = false;
var selected_type = \$(\"#f3e_app_bundle_request_LeaveType\").val();
console.log(selected_type);
switch(selected_type)
{
\tcase '1':
\tcase '2':
\tcase '3':
\tconsole.log(\"not required\");
\t\tdocument.getElementById(\"f3e_app_bundle_request_commentUser\").required = false;
\t\tbreak;
\tcase '4': 
\tcase '5':
\tdefault:
\tconsole.log(\"Required\");
\t\tdocument.getElementById(\"f3e_app_bundle_request_commentUser\").required = true;
\t\tbreak;
\t
}
};



</script>


";
    }

    public function getTemplateName()
    {
        return "AppBundle:LeaveRequest:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 60,  153 => 59,  149 => 58,  143 => 55,  139 => 54,  135 => 53,  129 => 50,  125 => 49,  121 => 48,  117 => 47,  113 => 46,  109 => 45,  105 => 44,  101 => 43,  87 => 32,  83 => 31,  71 => 22,  67 => 21,  55 => 12,  51 => 11,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
