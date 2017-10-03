<?php

/* contact.html.twig */
class __TwigTemplate_1a25cbf9d2f2e028c2c3bea286f48eae824f9b965985418f9c45be4c0c8316de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("includes/base.html.twig", "contact.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "includes/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"contacts\">
        <header class=\"contacts-header\">
          <a class=\"btn-back\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["SITE_URL"] ?? null), "html", null, true);
        echo "/\">Back</a>
        </header>
        <div class=\"contact\">
          <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["portrait"] ?? null), "html", null, true);
        echo "\">
          <h1 class=\"contact-name\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</h1>
          <h4 class=\"contact-company\">";
        // line 11
        echo twig_escape_filter($this->env, ($context["company"] ?? null), "html", null, true);
        echo "</h4>
          <h3 class=\"contact-bday\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["birthday"] ?? null), "html", null, true);
        echo "</h3>

          <div class=\"contact-block\">
            <div class=\"contact-label\">Email</div>
            <div class=\"contact-info\"><a href=\"mailto:";
        // line 16
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "</a></div>
          </div>

          <div class=\"contact-block\">
            <div class=\"contact-label\">Phone</div>
            <div class=\"contact-info\">";
        // line 21
        echo twig_escape_filter($this->env, ($context["phone"] ?? null), "html", null, true);
        echo "</div>
          </div>

          <div class=\"contact-block\">
            <div class=\"contact-label\">Address</div>
            <div class=\"contact-info\">
              ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["address"] ?? null), "street", array()), "html", null, true);
        echo "<br>
              ";
        // line 28
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
        return array (  83 => 28,  79 => 27,  70 => 21,  60 => 16,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "contact.html.twig", "/Users/meisenbraun/Sites/edumedia/mtm6331/contacts/templates/contact.html.twig");
    }
}
