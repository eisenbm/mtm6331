<?php

/* index.html.twig */
class __TwigTemplate_ccaf92526a333561ddaa9fe79c17e53d955a1fa3fa41562e027c336590d5edf1 extends Twig_Template
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
          <h1 class=\"contacts-title center\">My Contacts</h1>
        </header>
        <ul class=\"contact-list\">
          ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contacts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 17
            echo "          <li>
            <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contact"], "thumbnail", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contact"], "name", array()), "html", null, true);
            echo "\">
            <div class=\"contact-info\">
              <h2 class=\"heading--name\">
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contact"], "url", array()), "html", null, true);
            echo "\">
                  ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contact"], "name", array()), "html", null, true);
            echo "
                </a>
               </h2>
               <div class=\"contact-item\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contact"], "company", array()), "html", null, true);
            echo "</div>
            </div>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </ul>
    </div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 29,  64 => 25,  58 => 22,  54 => 21,  46 => 18,  43 => 17,  39 => 16,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "/Users/meisenbraun/Sites/edumedia/mtm6331/contacts/templates/index.html.twig");
    }
}
