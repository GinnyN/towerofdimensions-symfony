<?php

/* IFZTowerofDimensionsBundle:Default:container.html.twig */
class __TwigTemplate_46dbb268d4126d44a1a6d9b5f34c00f3 extends Twig_Template
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
        echo "<!Doctype html>
<html lang=\"en\">
\t<head>
\t\t<title>Tower of Dimensions</title>
\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
\t</head>
\t<body>
\t\t";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
        echo "
\t\t<img src=";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["avatar"]) ? $context["avatar"] : null), "html", null, true);
        echo " />
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "IFZTowerofDimensionsBundle:Default:container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,  26 => 8,  17 => 1,);
    }
}
