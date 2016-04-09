<?php

/* AppBundle::index.html.twig */
class __TwigTemplate_f978e96c1339a4fcd23f9b97611d879d76fad3c3e1d36dfa469b13a005d7e660 extends Twig_Template
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
        echo "<div class=\" row\">
    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"6 new members.\" class=\"well top-block\" href=\"#\">
            <i class=\"glyphicon glyphicon-user blue\"></i>

            <div>Total Members</div>
            <div>507</div>
            <span class=\"notification\">6</span>
        </a>
    </div>

    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"4 new pro members.\" class=\"well top-block\" href=\"#\">
            <i class=\"glyphicon glyphicon-star green\"></i>

            <div>Pro Members</div>
            <div>228</div>
            <span class=\"notification green\">4</span>
        </a>
    </div>

    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"\$34 new sales.\" class=\"well top-block\" href=\"#\">
            <i class=\"glyphicon glyphicon-shopping-cart yellow\"></i>

            <div>Sales</div>
            <div>\$13320</div>
            <span class=\"notification yellow\">\$34</span>
        </a>
    </div>

    <div class=\"col-md-3 col-sm-3 col-xs-6\">
        <a data-toggle=\"tooltip\" title=\"12 new messages.\" class=\"well top-block\" href=\"#\">
            <i class=\"glyphicon glyphicon-envelope red\"></i>

            <div>Messages</div>
            <div>25</div>
            <span class=\"notification red\">12</span>
        </a>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "AppBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
