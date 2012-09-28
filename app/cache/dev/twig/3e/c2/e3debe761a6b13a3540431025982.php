<?php

/* IFZTowerofDimensionsBundle:Default:mercenaries-detail.html.twig */
class __TwigTemplate_3ec2e3debe761a6b13a3540431025982 extends Twig_Template
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
        echo "<h2 class=\"mercenario\"><span class=\"back-menu-first\"><-</span> ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo " </h2>
<article class=\"merc-detail\" id=";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo ">
\t<figure>
\t\t<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getContext($context, "completo")), "html", null, true);
        echo "\"/>
\t</figure>
\t<ul>
\t\t<li> HP: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "hp"), "html", null, true);
        echo "</li>
\t\t<li> Level: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "level"), "html", null, true);
        echo "/ EXP: ";
        echo twig_escape_filter($this->env, $this->getContext($context, "exp"), "html", null, true);
        echo "</li>
\t</ul>
\t<ul class=\"stats\">
\t\t<li>AGI: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getContext($context, "agilidad"), "html", null, true);
        echo "</li>
\t\t<li>DEX: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getContext($context, "destreza"), "html", null, true);
        echo "</li>
\t\t<li>CON: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getContext($context, "constitucion"), "html", null, true);
        echo "</li>
\t\t<li>STR: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "fuerza"), "html", null, true);
        echo "</li>
\t</ul>
\t<ul class=\"stats\">
\t\t<li>POW: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "poder"), "html", null, true);
        echo "</li>
\t\t<li>INT: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "inteligencia"), "html", null, true);
        echo "</li>
\t\t<li>WIS: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "sabiduria"), "html", null, true);
        echo "</li>
\t\t<li>CHA: ";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "carisma"), "html", null, true);
        echo "</li>
\t</ul>
</article>";
    }

    public function getTemplateName()
    {
        return "IFZTowerofDimensionsBundle:Default:mercenaries-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  71 => 19,  67 => 18,  63 => 17,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  37 => 8,  33 => 7,  27 => 4,  22 => 2,  17 => 1,);
    }
}
