<?php

/* AppBundle:LeaveRequest:rejectRequest.html.twig */
class __TwigTemplate_510c7c2ba6d9650f4801915f3a790737fa54eed89ee6c6041fd56531e2e8b760 extends Twig_Template
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
        echo "   <div class=\"row\">
\t<div class=\"box col-md-12\">
        <div class=\"box-inner\">
        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "formUpdate")));
        echo "
            Êtes-vous sûr de vouloir refuser cette demande de congés ?
            <div>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'label', array("label" => "Commentaire"));
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget');
        echo "</div>
            
            <div class=\"hr hr-24\"></div>
            <div class=\"col-xs-offset-4 col-sm-offset-4 col-md-offset-4\">
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Refuser", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\">
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Annuler", array()), 'widget', array("attr" => array("class" => "btn btn-warning"), "icon" => "times"));
        echo "
                </a>
            </div>
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    \t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        </div>
    </div> 
\t
";
    }

    public function getTemplateName()
    {
        return "AppBundle:LeaveRequest:rejectRequest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  76 => 19,  72 => 18,  66 => 15,  62 => 14,  58 => 13,  49 => 9,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
