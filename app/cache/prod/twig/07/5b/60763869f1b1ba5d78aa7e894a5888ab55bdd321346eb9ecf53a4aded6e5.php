<?php

/* AppBundle:LeaveRequest:index.html.twig */
class __TwigTemplate_075b60763869f1b1ba5d78aa7e894a5888ab55bdd321346eb9ecf53a4aded6e5 extends Twig_Template
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
        echo "
<!-- Présentation de la liste des congés disponibles --> 

<div class=\"row\">
    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"CP\" class=\"well top-block\" href=\"#\">
            <i class=\"glyphicon glyphicon-road blue\"></i>

            <div>Congés payés disponibles</div>
            <div>Année N-1 : ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["CP_N1"]) ? $context["CP_N1"] : null), "html", null, true);
        echo "</div>
            <div>Année N : ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["CP_N"]) ? $context["CP_N"] : null), "html", null, true);
        echo "</div>
            <span class=\"notification\">";
        // line 15
        echo twig_escape_filter($this->env, ((isset($context["CP_N"]) ? $context["CP_N"] : null) + (isset($context["CP_N1"]) ? $context["CP_N1"] : null)), "html", null, true);
        echo "</span>
        </a>
    </div>

    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"RTT Fixes\" class=\"well top-block\" href=\"#\">
            <i class=\"glyphicon glyphicon-align-left green\"></i>

            <div>RTT fixes</div>
            <div>";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["RTT_Fixes"]) ? $context["RTT_Fixes"] : null), "html", null, true);
        echo "</div>
            <span class=\"notification green\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["RTT_Fixes"]) ? $context["RTT_Fixes"] : null), "html", null, true);
        echo "</span>
        </a>
    </div>

    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"RTT Variables\" class=\"well top-block\" href=\"#\">
            <i class=\"glyphicon glyphicon-align-center red\"></i>

            <div>RTT variables</div>
            <div>";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["RTT_variables"]) ? $context["RTT_variables"] : null), "html", null, true);
        echo "</div>
            <span class=\"notification yellow\">";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["RTT_variables"]) ? $context["RTT_variables"] : null), "html", null, true);
        echo "</span>
        </a>
    </div>

    
</div>
<div class=\"row\">
<div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"Nouvelle demande\" class=\"well top-block\" href=";
        // line 43
        echo $this->env->getExtension('routing')->getPath("request_new");
        echo ">
            <i class=\"glyphicon glyphicon-pencil yellow\"></i>

            <div>Faire une demande de congés</div>
            <div></div>
        </a>
    </div>
</div>

<!-- Présentation de la liste des demandes avec leur statut -->
<div class=\"row\">
    <div class=\"box col-md-12\">
    <div class=\"box-inner\">
    <div class=\"box-header well\" data-original-title=\"\">
        <h2><i class=\"glyphicon glyphicon-user\"></i> Liste des demandes</h2>

        
    </div>
    <div class=\"box-content\">
    <table id=\"example\" class=\"table table-striped table-bordered bootstrap-datatable datatable responsive\">
    <thead>
    <tr>
\t\t
        <th>Statut</th>
        <th>Type de congé</th>
        <th>Date de début</th>
        <th>Date de fin</th>
        <th>Nombre de jours</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    
    ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 77
            echo "    <tr>
\t
    <td class=\"center\">
            <span class=\"label-";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "leaveStatus", array()), "color", array()), "html", null, true);
            echo " label label-default\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "leaveStatus", array()), "name", array()), "html", null, true);
            echo "</span>
    </td>
    <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "leaveType", array()), "name", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fullStartDate", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fullEndDate", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbDays", array()), "html", null, true);
            echo "</td>
    <td class=\"center\">
    ";
            // line 87
            if (($this->getAttribute($this->getAttribute($context["entity"], "leaveStatus", array()), "name", array()) == "En attente")) {
                // line 88
                echo "            
            <a class=\"btn btn-warning\" href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cancel_request", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                <i class=\"glyphicon glyphicon-remove icon-white\"></i>
                Annuler
            </a>
           
    ";
            }
            // line 95
            echo "    ";
            if (($this->getAttribute($this->getAttribute($context["entity"], "leaveStatus", array()), "name", array()) == "Validé")) {
                // line 96
                echo "            ";
                if ((twig_date_format_filter($this->env, "now", "Ymd") < twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "endDate", array()), "Ymd"))) {
                    // line 97
                    echo "
            <a class=\"btn btn-warning\" href=\"";
                    // line 98
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cancel_leave", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                <i class=\"glyphicon glyphicon-remove icon-white\"></i>
                Annuler
            </a>
\t\t\t";
                }
                // line 103
                echo "           
    ";
            }
            // line 105
            echo "        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "    
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    
    </div>
\t

";
    }

    public function getTemplateName()
    {
        return "AppBundle:LeaveRequest:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 108,  205 => 105,  201 => 103,  193 => 98,  190 => 97,  187 => 96,  184 => 95,  175 => 89,  172 => 88,  170 => 87,  165 => 85,  161 => 84,  157 => 83,  153 => 82,  146 => 80,  141 => 77,  137 => 76,  101 => 43,  90 => 35,  86 => 34,  74 => 25,  70 => 24,  58 => 15,  54 => 14,  50 => 13,  39 => 4,  36 => 3,  11 => 1,);
    }
}
