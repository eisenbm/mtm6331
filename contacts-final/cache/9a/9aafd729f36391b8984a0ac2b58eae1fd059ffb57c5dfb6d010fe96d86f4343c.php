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

          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["phones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 20
            echo "          <div class=\"contact-block\">
            <div class=\"contact-label\">";
            // line 21
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["phone"], "type", array())), "html", null, true);
            echo "</div>
            <div class=\"contact-info\">";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('phone')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["phone"], "number", array()))), "html", null, true);
            echo "</div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
          <div class=\"contact-block\">
            <div class=\"contact-label\">Address</div>
            <div class=\"contact-info\">
              ";
        // line 29
        echo twig_escape_filter($this->env, ($context["street"] ?? null), "html", null, true);
        echo "<br>
              ";
        // line 30
        echo twig_escape_filter($this->env, ($context["city"] ?? null), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, ($context["state"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["zip"] ?? null), "html", null, true);
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
        return array (  98 => 30,  94 => 29,  88 => 25,  79 => 22,  75 => 21,  72 => 20,  68 => 19,  60 => 16,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "contact.html.twig", "/Applications/MAMP/htdocs/mtm6331/contacts/templates/contact.html.twig");
    }
}
