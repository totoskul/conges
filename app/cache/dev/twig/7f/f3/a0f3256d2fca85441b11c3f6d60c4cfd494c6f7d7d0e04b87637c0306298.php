<?php

/* :Emails:validation.html.twig */
class __TwigTemplate_7ff3a0f3256d2fca85441b11c3f6d60c4cfd494c6f7d7d0e04b87637c0306298 extends Twig_Template
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
        echo "﻿<h3>Votre demande de congés a été acceptée !</h3>

<p><b>Rappel : </b></p>

<p>Type de congé : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "leaveType", array()), "name", array()), "html", null, true);
        echo "</p>
<p>Date de début : ";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate", array()), "d-m-Y"), "html", null, true);
        echo " </p>
<p>Date de fin : ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate", array()), "d-m-Y"), "html", null, true);
        echo "</p>
<p>Nombre de journées : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbDays", array()), "html", null, true);
        echo "</p>
<p>Commentaire : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comment", array()), "html", null, true);
        echo "</p>

Bonne journée et bonnes vacances ! ";
    }

    public function getTemplateName()
    {
        return ":Emails:validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
