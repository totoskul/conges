<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_baa6937977860f2f8165c1e17bbebb9fa7c8e501afd1182a9578b706ec500ed6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
