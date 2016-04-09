<?php

/* AppBundle:LeaveRequest:validate.html.twig */
class __TwigTemplate_df8261bbb51042e8d5ad53a23130e1d1bad53b40d7ae6109e69d5cb6eaec767e extends Twig_Template
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
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Validation de congés ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<!-- Présentation de la liste des congés disponibles --> 



<!-- Présentation de la liste des demandes avec leur statut -->
<div class=\"row\">
    <div class=\"box col-md-12\">
    <div class=\"box-inner\">
    <div class=\"box-header well\" data-original-title=\"\">
        <h2><i class=\"glyphicon glyphicon-user\"></i> Liste des demandes</h2>

       
    </div>
    <div class=\"box-content\">
    <table class=\"table table-striped table-bordered bootstrap-datatable datatable responsive\">
    <thead>
    <tr>
        <th>Utilisateur</th>
        <th>Type de congé</th>
\t\t
\t\t<th>Détail</th>
        <th>Type de contrat</th>
\t\t<th>Nombre de jours</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
\t<h1>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
        echo "</h1>
    <h1>";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["error_msg"]) ? $context["error_msg"] : null), "html", null, true);
        echo "</h1>
    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "    <tr>
\t";
            // line 35
            $context["nbA"] = 0;
            // line 36
            echo "\t";
            $context["nbN"] = 0;
            // line 37
            echo "\t";
            $context["nbN1"] = 0;
            // line 38
            echo "\t
\t";
            // line 39
            $context["alertM1"] = 0;
            // line 40
            echo "\t
\t";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["entity"], "user", array()), "userLeaveMonths", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entityBis"]) {
                // line 42
                echo "\t\t";
                if (($this->getAttribute($context["entityBis"], "leaveType", array()) == $this->getAttribute($context["entity"], "leaveType", array()))) {
                    // line 43
                    echo "\t\t\t";
                    $context["nbA"] = (((isset($context["nbA"]) ? $context["nbA"] : null) + $this->getAttribute($context["entityBis"], "nbAvailable", array())) - $this->getAttribute($context["entityBis"], "nbUsed", array()));
                    // line 44
                    echo "\t\t\t
\t\t\t";
                    // line 45
                    if (($this->getAttribute($context["entityBis"], "year", array()) ==  -1)) {
                        // line 46
                        echo "\t\t\t\t";
                        $context["nbN1"] = (((isset($context["nbN1"]) ? $context["nbN1"] : null) + $this->getAttribute($context["entityBis"], "nbAvailable", array())) - $this->getAttribute($context["entityBis"], "nbUsed", array()));
                        // line 47
                        echo "\t\t\t";
                    } else {
                        // line 48
                        echo "\t\t\t\t";
                        $context["nbN"] = (((isset($context["nbN"]) ? $context["nbN"] : null) + $this->getAttribute($context["entityBis"], "nbAvailable", array())) - $this->getAttribute($context["entityBis"], "nbUsed", array()));
                        // line 49
                        echo "\t\t\t";
                    }
                    // line 50
                    echo "\t\t";
                }
                // line 51
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityBis'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t";
            if (($this->getAttribute($context["entity"], "nbDays", array()) > (isset($context["nbN1"]) ? $context["nbN1"] : null))) {
                // line 53
                echo "\t\t";
                if (($this->getAttribute($this->getAttribute($context["entity"], "leaveType", array()), "uniqueName", array()) == "CP")) {
                    // line 54
                    echo "\t\t\t";
                    $context["alertM1"] = 1;
                    // line 55
                    echo "\t\t";
                }
                // line 56
                echo "\t";
            }
            // line 57
            echo "    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "user", array()), "fullName", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "leaveType", array()), "name", array()), "html", null, true);
            echo "</td>
\t<td><a id=\"detail_";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" class=\"btn ";
            if ((((isset($context["alertM1"]) ? $context["alertM1"] : null) == 1) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "user", array()), "contractType", array()), "name", array()) == "CDI"))) {
                // line 60
                echo "\tbtn-warning 
\t";
            } else {
                // line 62
                echo "\tbtn-info
\t";
            }
            // line 64
            echo "\tbtn-setting\" 
\thref=\"#\">
                Détail
\t\t\t\t
    </a>
\t
\t<div class=\"modal fade\" id=\"dialog";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">

        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
                    <h3>Détail</h3>
                </div>
                <div class=\"modal-body\">
                    <p><b>Date de la demande :</b> ";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateProposal", array()), "d-m-Y"), "html", null, true);
            echo "</p>
\t<p><b>Date de début :</b> ";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "startDate", array()), "d-m-Y"), "html", null, true);
            echo "       </p>
\t<p><b>Date de fin :</b> ";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "endDate", array()), "d-m-Y"), "html", null, true);
            echo "</p>
\t";
            // line 83
            if (($this->getAttribute($this->getAttribute($context["entity"], "leaveType", array()), "uniqueName", array()) == "CP")) {
                // line 84
                echo "\t<p><b>Congés disponibles (N & N-1) si validation : </b>";
                echo twig_escape_filter($this->env, (isset($context["nbA"]) ? $context["nbA"] : null), "html", null, true);
                echo "</p>
\t<p><b>Congés disponibles (N) si validation : </b>";
                // line 85
                echo twig_escape_filter($this->env, (isset($context["nbN"]) ? $context["nbN"] : null), "html", null, true);
                echo "</p>
\t<p><b>Congés disponibles (N-1) si validation : </b>";
                // line 86
                echo twig_escape_filter($this->env, (isset($context["nbN1"]) ? $context["nbN1"] : null), "html", null, true);
                echo "</p>
\t";
                // line 87
                if ((((isset($context["alertM1"]) ? $context["alertM1"] : null) == 1) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "user", array()), "contractType", array()), "name", array()) == "CDI"))) {
                    // line 88
                    echo "\t\t<p ><span class='btn btn-warning'>Attention ! </span> Une partie des congés est demandée en anticipation </p>
\t";
                }
                // line 89
                echo "\t
\t";
            }
            // line 91
            echo "                </div>
                <div class=\"modal-footer\">
                    <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Fermer</a>
                </div>
            </div>
        </div>
    </div>
\t</td>
    
    <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "user", array()), "contractType", array()), "name", array()), "html", null, true);
            echo "</td>
    <td><p ";
            // line 101
            if (((isset($context["nbA"]) ? $context["nbA"] : null) < $this->getAttribute($context["entity"], "nbDays", array()))) {
                echo " ";
                if (($this->getAttribute($this->getAttribute($context["entity"], "leaveType", array()), "uniqueName", array()) == "CP")) {
                    echo " style=\"color:red\" ";
                }
            }
            echo " >  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbDays", array()), "html", null, true);
            echo "</p></td>
\t
\t<td class=\"center\">
    ";
            // line 104
            if (($this->getAttribute($this->getAttribute($context["entity"], "leaveStatus", array()), "name", array()) == "En attente")) {
                // line 105
                echo "            
            <a class=\"btn btn-success\" href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("validate_request", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                <i class=\"glyphicon glyphicon-ok-circle icon-white\"></i>
                Valider
            </a>
            <a class=\"btn btn-danger\" href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reject_request", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                <i class=\"glyphicon glyphicon-remove-circle icon-white\"></i>
                Refuser
            </a>
       ";
            }
            // line 115
            echo "        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "    
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->
\t<script>
\t";
        // line 129
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 130
            echo "\t\$('#detail_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "').click(function (e) {
        e.preventDefault();
        \$('#dialog";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "').modal('show');
    });
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "\t</script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:LeaveRequest:validate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 135,  315 => 132,  309 => 130,  305 => 129,  292 => 118,  284 => 115,  276 => 110,  269 => 106,  266 => 105,  264 => 104,  251 => 101,  247 => 100,  236 => 91,  232 => 89,  228 => 88,  226 => 87,  222 => 86,  218 => 85,  213 => 84,  211 => 83,  207 => 82,  203 => 81,  199 => 80,  186 => 70,  178 => 64,  174 => 62,  170 => 60,  166 => 59,  162 => 58,  157 => 57,  154 => 56,  151 => 55,  148 => 54,  145 => 53,  142 => 52,  136 => 51,  133 => 50,  130 => 49,  127 => 48,  124 => 47,  121 => 46,  119 => 45,  116 => 44,  113 => 43,  110 => 42,  106 => 41,  103 => 40,  101 => 39,  98 => 38,  95 => 37,  92 => 36,  90 => 35,  87 => 34,  83 => 33,  79 => 32,  75 => 31,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
