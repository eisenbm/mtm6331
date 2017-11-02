<?php

/* includes/base.html.twig */
class __TwigTemplate_6ccc0a9f7366bacd209e8e5fc5faca65be262fd327da6c8967ff928715f35686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["SITE_URL"] ?? null), "html", null, true);
        echo "/css/style.css\">
    <title>My Contact Book</title>
  </head>
  <body>
    ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "  </body>
</html>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "includes/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  37 => 12,  35 => 11,  28 => 7,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "includes/base.html.twig", "/Users/meisenbraun/Sites/edumedia/mtm6331/contacts/templates/includes/base.html.twig");
    }
}
