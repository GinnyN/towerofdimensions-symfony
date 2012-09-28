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
\t\t<meta name=viewport content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0 maximum-scale=1.0\">

\t\t<!-- IPhone Specific Meta -->
\t\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">

\t\t<!-- CSSs -->
\t\t<link href='http://necolas.github.com/normalize.css/2.0.1/normalize.css' rel='stylesheet' type='text/css'>
\t\t<link href='http://fonts.googleapis.com/css?family=Adamina' rel='stylesheet' type='text/css'>
\t\t<link href='http://fonts.googleapis.com/css?family=Podkova' rel='stylesheet' type='text/css'>
\t\t<link href='";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>

\t\t<!-- Javascripts -->
\t\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-animate.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr-transitions.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/navigation.js"), "html", null, true);
        echo "\"></script>
\t</head>
\t<body>
\t\t<header id=\"enter\">
\t\t\t
\t\t\t<div id=\"personal-information\">
\t\t\t\t<h1>TD</h1>
\t\t\t\t<figure id=\"user-avatar\">
\t\t\t\t\t<img src=";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["avatar"]) ? $context["avatar"] : null), "html", null, true);
        echo " />
\t\t\t\t</figure>
\t\t\t\t<div id=\"avatar\">
\t\t\t\t\t<p>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["nick"]) ? $context["nick"] : null), "html", null, true);
        echo "<br/>
\t\t\t\t\t\$: ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["coins"]) ? $context["coins"] : null), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div id=\"logout\">
\t\t\t\t\t<a href=\"/logout\"> Logout </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<div id=\"overflow\">
\t\t\t<div id=\"container\">
\t\t\t\t<nav>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li> Dashboard </li>
\t\t\t\t\t\t<li id=\"mercenaries\"> Mercenaries </li>
\t\t\t\t\t\t<li> Dimensions </li>
\t\t\t\t\t\t<li> Inn </li>
\t\t\t\t\t\t<li> Store </li>
\t\t\t\t\t\t<li> School </li>
\t\t\t\t\t\t<li> Blacksmith </li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<div id=\"section-1\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<footer>
\t\t\t<p><a href=\"http://steampowered.com\">Powered by Steam</a></p>
\t\t</footer>
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
        return array (  71 => 32,  67 => 31,  61 => 28,  50 => 20,  46 => 19,  42 => 18,  38 => 17,  32 => 14,  17 => 1,);
    }
}
