<?php

/* contact.html.twig */
class __TwigTemplate_1a25cbf9d2f2e028c2c3bea286f48eae824f9b965985418f9c45be4c0c8316de extends Twig_Template
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
    <div class=\"contacts\">
        <header class=\"contacts-header\">
          <a class=\"btn-back\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["SITE_URL"] ?? null), "html", null, true);
        echo "/\">Back</a>
        </header>
        <div class=\"contact\">
          <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["portrait"] ?? null), "html", null, true);
        echo "\">
          <h1 class=\"contact-name\">";
        // line 17
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</h1>
          <h4 class=\"contact-company\">";
        // line 18
        echo twig_escape_filter($this->env, ($context["company"] ?? null), "html", null, true);
        echo "</h4>
          <h3 class=\"contact-bday\">";
        // line 19
        echo twig_escape_filter($this->env, ($context["birthday"] ?? null), "html", null, true);
        echo "</h3>

          <div class=\"contact-block\">
            <div class=\"contact-label\">Email</div>
            <div class=\"contact-info\"><a href=\"mailto:";
        // line 23
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "</a></div>
          </div>

          <div class=\"contact-block\">
            <div class=\"contact-label\">Phone</div>
            <div class=\"contact-info\">";
        // line 28
        echo twig_escape_filter($this->env, ($context["phone"] ?? null), "html", null, true);
        echo "</div>
          </div>

          <div class=\"contact-block\">
            <div class=\"contact-label\">Address</div>
            <div class=\"contact-info\">
              ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["address"] ?? null), "street", array()), "html", null, true);
        echo "<br>
              ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["address"] ?? null), "city", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["address"] ?? null), "state", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["address"] ?? null), "zip", array()), "html", null, true);
        echo "
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 35,  80 => 34,  71 => 28,  61 => 23,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  36 => 13,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "contact.html.twig", "/Users/meisenbraun/Sites/edumedia/mtm6331/contacts/templates/contact.html.twig");
    }
}
