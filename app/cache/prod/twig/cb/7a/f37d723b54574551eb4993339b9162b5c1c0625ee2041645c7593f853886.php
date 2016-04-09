<?php

/* AppBundle:User:index.html.twig */
class __TwigTemplate_cb7af37d723b54574551eb4993339b9162b5c1c0625ee2041645c7593f853886 extends Twig_Template
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
        echo "<!-- Présentation de la liste des congés disponibles --> 

<div class=\"row\">
<div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"Nouvel employé\" class=\"well top-block\" href=";
        // line 8
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo ">
            <i class=\"glyphicon glyphicon-plus-sign blue\"></i>

            <div>Créer un-e salarié-e</div>
            <div></div>
        </a>
    </div>
</div>

<!-- Présentation de la liste des demandes avec leur statut -->
<div class=\"row\">
    <div class=\"box col-md-12\">
    <div class=\"box-inner\">
    <div class=\"box-header well\" data-original-title=\"\">
        <h2><i class=\"glyphicon glyphicon-user\"></i> Liste des salarié-e-s </h2>

        
    </div>
    <div class=\"box-content\">
    <table class=\"table table-striped table-bordered bootstrap-datatable datatable responsive\">
    <thead>
    <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Contrat</th>
\t\t<th>CP</th>
\t\t<th>RTT fixes</th>
\t\t<th>RTT variables</th>
\t\t<th>Actions</th>
    </tr>
    </thead>
    <tbody>
    
    ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 42
            echo "    <tr>
    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstName", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lastName", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "contractType", array()), "name", array()), "html", null, true);
            echo "</td>
    
\t";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["leaves"]) ? $context["leaves"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entityBis"]) {
                // line 48
                echo "\t
\t\t";
                // line 49
                if (($this->getAttribute($context["entityBis"], "user_id", array()) == $this->getAttribute($context["entity"], "id", array()))) {
                    // line 50
                    echo "\t\t\t";
                    if (($this->getAttribute($context["entityBis"], "unique_name", array()) == "CP")) {
                        // line 51
                        echo "\t\t\t\t<td>";
                        echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["entityBis"], "amount", array()), 1, "floor"), "html", null, true);
                        echo "</td>
\t\t\t";
                    }
                    // line 53
                    echo "
\t\t";
                }
                // line 55
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityBis'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t
\t";
            // line 57
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["leaves"]) ? $context["leaves"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entityBis"]) {
                // line 58
                echo "\t
\t\t";
                // line 59
                if (($this->getAttribute($context["entityBis"], "user_id", array()) == $this->getAttribute($context["entity"], "id", array()))) {
                    // line 60
                    echo "\t\t\t";
                    if (($this->getAttribute($context["entityBis"], "unique_name", array()) == "RTTF")) {
                        // line 61
                        echo "\t\t\t\t<td>";
                        echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["entityBis"], "amount", array()), 1, "floor"), "html", null, true);
                        echo "</td>
\t\t\t";
                    }
                    // line 63
                    echo "
\t\t";
                }
                // line 65
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityBis'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t
\t";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["leaves"]) ? $context["leaves"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entityBis"]) {
                // line 68
                echo "\t
\t\t";
                // line 69
                if (($this->getAttribute($context["entityBis"], "user_id", array()) == $this->getAttribute($context["entity"], "id", array()))) {
                    // line 70
                    echo "\t\t\t";
                    if (($this->getAttribute($context["entityBis"], "unique_name", array()) == "RTTV")) {
                        // line 71
                        echo "\t\t\t\t<td>";
                        echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["entityBis"], "amount", array()), 1, "floor"), "html", null, true);
                        echo "</td>
\t\t\t";
                    }
                    // line 73
                    echo "
\t\t";
                }
                // line 75
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityBis'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t<td class=\"center\">
            
            <a class=\"btn btn-info\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_account", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                <i class=\"glyphicon glyphicon-edit icon-white\"></i>
                Editer
            </a>
            <a class=\"btn btn-danger\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("disable_account", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                <i class=\"glyphicon glyphicon-trash icon-white\"></i>
                Supprimer
            </a>
\t\t\t<a class=\"btn btn-warning\" href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manage_user_leave", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                <i class=\"glyphicon glyphicon-trash icon-white\"></i>
                Gérer congés
            </a>
           
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "    
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->
";
    }

    public function getTemplateName()
    {
        return "AppBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 94,  209 => 86,  202 => 82,  195 => 78,  191 => 76,  185 => 75,  181 => 73,  175 => 71,  172 => 70,  170 => 69,  167 => 68,  163 => 67,  160 => 66,  154 => 65,  150 => 63,  144 => 61,  141 => 60,  139 => 59,  136 => 58,  132 => 57,  129 => 56,  123 => 55,  119 => 53,  113 => 51,  110 => 50,  108 => 49,  105 => 48,  101 => 47,  96 => 45,  92 => 44,  88 => 43,  85 => 42,  81 => 41,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
