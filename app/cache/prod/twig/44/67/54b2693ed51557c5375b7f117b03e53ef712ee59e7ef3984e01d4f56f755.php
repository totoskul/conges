<?php

/* AppBundle:LeaveRequest:validateRequest.html.twig */
class __TwigTemplate_446754b2693ed51557c5375b7f117b03e53ef712ee59e7ef3984e01d4f56f755 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "formUpdate")));
        echo "
            Êtes-vous sûr de vouloir valider cette demande de congés ?
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comment", array()), 'row', array("label" => "Commentaire : "));
        echo "
            <div class=\"hr hr-24\"></div>
            <div class=\"col-xs-offset-4 col-sm-offset-4 col-md-offset-4\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\">
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Annuler", array()), 'widget', array("attr" => array("class" => "btn btn-warning"), "icon" => "times"));
        echo "
                </a>
            </div>
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    \t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        </div>
        </div>
    </div> 
\t
";
    }

    public function getTemplateName()
    {
        return "AppBundle:LeaveRequest:validateRequest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  73 => 18,  69 => 17,  63 => 14,  59 => 13,  55 => 12,  49 => 9,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
