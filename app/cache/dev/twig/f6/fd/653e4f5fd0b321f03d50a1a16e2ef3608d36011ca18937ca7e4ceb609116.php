<?php

/* AppBundle:LeaveRequest:manageUserLeave.html.twig */
class __TwigTemplate_f6fd653e4f5fd0b321f03d50a1a16e2ef3608d36011ca18937ca7e4ceb609116 extends Twig_Template
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
        <h2><i class=\"glyphicon glyphicon-user\"></i> Liste des congés validés</h2>

       
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
        echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), "html", null, true);
        echo "</h1>
    <h1>";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["error_msg"]) ? $context["error_msg"] : $this->getContext($context, "error_msg")), "html", null, true);
        echo "</h1>
    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "    <tr>
\t";
            // line 35
            $context["nbA"] = 0;
            // line 36
            echo "\t";
            $context["alertM1"] = 0;
            // line 37
            echo "\t
\t";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["entity"], "user", array()), "userLeaveMonths", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entityBis"]) {
                // line 39
                echo "\t\t";
                if (($this->getAttribute($context["entityBis"], "leaveType", array()) == $this->getAttribute($context["entity"], "leaveType", array()))) {
                    // line 40
                    echo "\t\t\t";
                    $context["nbA"] = (((isset($context["nbA"]) ? $context["nbA"] : $this->getContext($context, "nbA")) + $this->getAttribute($context["entityBis"], "nbAvailable", array())) - $this->getAttribute($context["entityBis"], "nbUsed", array()));
                    // line 41
                    echo "\t\t\t";
                    if (($this->getAttribute($context["entityBis"], "year", array()) ==  -1)) {
                        // line 42
                        echo "\t\t\t\t";
                        $context["alertM1"] = 1;
                        // line 43
                        echo "\t\t\t";
                    }
                    // line 44
                    echo "\t\t";
                }
                // line 45
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityBis'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "user", array()), "fullName", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "leaveType", array()), "name", array()), "html", null, true);
            echo "</td>
\t<td><a id=\"detail_";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" class=\"btn ";
            if ((((isset($context["alertM1"]) ? $context["alertM1"] : $this->getContext($context, "alertM1")) == 1) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "user", array()), "contractType", array()), "name", array()) == "CDI"))) {
                // line 49
                echo "\tbtn-warning 
\t";
            } else {
                // line 51
                echo "\tbtn-info
\t";
            }
            // line 53
            echo "\tbtn-setting\" 
\thref=\"#\">
                Détail
\t\t\t\t
    </a>
\t
\t<div class=\"modal fade\" id=\"dialog";
            // line 59
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
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateProposal", array()), "d-m-Y"), "html", null, true);
            echo "</p>
\t<p><b>Date de début :</b> ";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "startDate", array()), "d-m-Y"), "html", null, true);
            echo "       </p>
\t<p><b>Date de fin :</b> ";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "endDate", array()), "d-m-Y"), "html", null, true);
            echo "</p>
\t";
            // line 72
            if (((($this->getAttribute($this->getAttribute($context["entity"], "leaveType", array()), "uniqueName", array()) == "CP") || ($this->getAttribute($this->getAttribute($context["entity"], "leaveType", array()), "uniqueName", array()) == "RTTV")) || ($this->getAttribute($this->getAttribute($context["entity"], "leaveType", array()), "uniqueName", array()) == "RTTF"))) {
                // line 73
                echo "\t
\t<p><b>Congés disponibles : </b>";
                // line 74
                echo twig_escape_filter($this->env, (isset($context["nbA"]) ? $context["nbA"] : $this->getContext($context, "nbA")), "html", null, true);
                echo "</p>
\t";
                // line 75
                if ((((isset($context["alertM1"]) ? $context["alertM1"] : $this->getContext($context, "alertM1")) == 1) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "user", array()), "contractType", array()), "name", array()) == "CDI"))) {
                    // line 76
                    echo "\t\t<p ><span class='btn btn-warning'>Attention ! </span> Une partie des congés est demandée en anticipation </p>
\t";
                }
                // line 77
                echo "\t
";
            }
            // line 78
            echo "\t
                </div>
                <div class=\"modal-footer\">
                    <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Fermer</a>
                </div>
            </div>
        </div>
    </div>
\t</td>
    
    <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "user", array()), "contractType", array()), "name", array()), "html", null, true);
            echo "</td>
    <td><p ";
            // line 89
            if (((isset($context["nbA"]) ? $context["nbA"] : $this->getContext($context, "nbA")) < $this->getAttribute($context["entity"], "nbDays", array()))) {
                echo " style=\"color:red\" ";
            }
            echo " >  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbDays", array()), "html", null, true);
            echo "</p></td>
\t
\t<td class=\"center\">
    ";
            // line 92
            if (($this->getAttribute($this->getAttribute($context["entity"], "leaveStatus", array()), "name", array()) == "Validé")) {
                // line 93
                echo "            
            <a class=\"btn btn-warning\" href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cancel_leave", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                <i class=\"glyphicon glyphicon-ok-circle icon-white\"></i>
                Annuler
            </a>
            
       ";
            }
            // line 100
            echo "        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "    
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->
\t
\t<script>
\t";
        // line 115
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 116
            echo "\t\$('#detail_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "').click(function (e) {
        e.preventDefault();
        \$('#dialog";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "').modal('show');
    });
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "\t</script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:LeaveRequest:manageUserLeave.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 121,  271 => 118,  265 => 116,  261 => 115,  247 => 103,  239 => 100,  230 => 94,  227 => 93,  225 => 92,  215 => 89,  211 => 88,  199 => 78,  195 => 77,  191 => 76,  189 => 75,  185 => 74,  182 => 73,  180 => 72,  176 => 71,  172 => 70,  168 => 69,  155 => 59,  147 => 53,  143 => 51,  139 => 49,  135 => 48,  131 => 47,  126 => 46,  120 => 45,  117 => 44,  114 => 43,  111 => 42,  108 => 41,  105 => 40,  102 => 39,  98 => 38,  95 => 37,  92 => 36,  90 => 35,  87 => 34,  83 => 33,  79 => 32,  75 => 31,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
