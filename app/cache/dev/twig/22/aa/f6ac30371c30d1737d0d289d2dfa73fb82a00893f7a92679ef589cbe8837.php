<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_22aaf6ac30371c30d1737d0d289d2dfa73fb82a00893f7a92679ef589cbe8837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<div class=\"row\">
\t<div class=\"well col-md-5 center login-box\">
\t\t<div class=\"alert alert-info\">
\t\t\tVeuillez vous authentifier.
\t\t</div>
<form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal\">
    <fieldset>
\t\t<label for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    \t<div class=\"input-group input-group-lg\">
\t    \t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user red\"></i></span>
\t    \t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t\t    <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t</div>
\t\t<div class=\"clearfix\"></div><br>
\t\t\t\t    <label for=\"password\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t
\t\t<div class=\"input-group input-group-lg\">
\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock red\"></i></span>
\t\t
\t\t    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t\t<div class=\"input-prepend\">
\t\t
\t\t    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t    <label for=\"remember_me\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t
\t\t    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</fieldset>
</form>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 37,  90 => 35,  76 => 24,  70 => 21,  66 => 20,  59 => 16,  54 => 14,  47 => 9,  41 => 7,  39 => 6,  36 => 5,  11 => 1,);
    }
}
