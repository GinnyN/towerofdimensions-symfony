<?php

/* IFZTowerofDimensionsBundle:Default:index.html.twig */
class __TwigTemplate_747322521e87e12c9e7bb7fe3cd478af extends Twig_Template
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
\t\t<meta name=viewport content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0 maximum-scale=1.0\">
\t\t<link href='http://necolas.github.com/normalize.css/2.0.1/normalize.css' rel='stylesheet' type='text/css'>
\t\t<link href='http://fonts.googleapis.com/css?family=Adamina' rel='stylesheet' type='text/css'>
\t\t<link href='http://fonts.googleapis.com/css?family=Podkova' rel='stylesheet' type='text/css'>
\t\t<link href='";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
\t\t<script>
\t\t\t\$(document).on(\"ready\", assign);

\t\t\tfunction assign()
\t\t\t{
\t\t\t\t\$(\"#steam img\").on(\"click\", {provider: \"http://steamcommunity.com/openid\"} ,openid);

\t\t\t\t/*google = \"https://www.google.com/accounts/o8/id?openid.ns=http://specs.openid.net/auth/2.0&openid.claimed_id=http://specs.openid.net/auth/2.0/identifier_select&openid.identity=http://specs.openid.net/auth/2.0/identifier_select&openid.return_to=http://towerofdimension-local.com/&openid.realm=http://towerofdimension-local.com/&openid.assoc_handle=ABSmpf6DNMw&openid.mode=checkid_setup&openid.ax.required=avatar,firstname\";

\t\t\t\t\$(\"#google\").on(\"click\", {provider: google} ,openid);*/
\t\t\t}

\t\t\tfunction openid(ev)
\t\t\t{
\t\t\t\tprovider = ev.data.provider;
\t\t\t\t\$(\"#openid_identifier\").val(provider);
\t\t\t\t\$(\"#fp_openid_login\").submit();
\t\t\t}
\t\t</script>
\t</head>
\t<body>
\t\t<div id=\"init\">
\t\t\t<h1> Tower of Dimensions </h1>
\t\t<figure id=\"steam\">
\t\t\t<img src=\"http://cdn.steamcommunity.com/public/images/signinthroughsteam/sits_large_border.png\" />
\t\t</figure>
\t\t</div>
\t\t<!--<p id=\"google\">Log In with Google</p>-->
\t\t<form id=\"fp_openid_login\" action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fp_openid_security_check"), "html", null, true);
        echo "\" method=\"post\">
        \t<input type=\"hidden\" id=\"openid_identifier\" name=\"openid_identifier\" value=\"\" />
    \t</form>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "IFZTowerofDimensionsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 39,  28 => 10,  17 => 1,);
    }
}
