<?php

/* IFZTowerofDimensionsBundle:Default:mercenaries-index.html.twig */
class __TwigTemplate_5cfe4a94f54c45494b5c6840cb68183c extends Twig_Template
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
        echo "<h2><span class=\"back-menu\"><-</span> Mercenaries </h2>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "mercenaries"));
        foreach ($context['_seq'] as $context["_key"] => $context["merc"]) {
            // line 3
            echo "<article class=\"mercenario\">
\t<figure>

\t</figure>
\t<ul>
\t\t<li>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "merc"), "name"), "html", null, true);
            echo "</li>
\t\t<li> HP: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "merc"), "hp"), "html", null, true);
            echo "</li>
\t\t<li> Level: ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "merc"), "level"), "html", null, true);
            echo "/ EXP: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "merc"), "exp"), "html", null, true);
            echo "</li>
\t</ul>
</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['merc'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "IFZTowerofDimensionsBundle:Default:mercenaries-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 9,  31 => 8,  24 => 3,  20 => 2,  17 => 1,);
    }
}
