<?php

/* Emails/newLeave.html.twig */
class __TwigTemplate_3b2be28e1fdffd360b615da91a63103768ef4f8f11f13c2717a63c58340ed40f extends Twig_Template
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
        echo "﻿<h3>Une demande de congés vient d'être déposée ! </h3>

<p><b>Rappel : </b></p>

<p>Demandeur : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user", array()), "lastName", array()), "html", null, true);
        echo " </p>
<p>Type de congé : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "leaveType", array()), "name", array()), "html", null, true);
        echo "</p>
<p>Date de début : ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate", array()), "d-m-Y"), "html", null, true);
        echo " </p>
<p>Date de fin : ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate", array()), "d-m-Y"), "html", null, true);
        echo "</p>
<p>Nombre de journées : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbDays", array()), "html", null, true);
        echo "</p>

Bonne journée ! ";
    }

    public function getTemplateName()
    {
        return "Emails/newLeave.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  39 => 8,  35 => 7,  31 => 6,  25 => 5,  19 => 1,);
    }
}
