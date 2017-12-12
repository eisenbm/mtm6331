<?php

/* form.html.twig */
class __TwigTemplate_770cf5f4a667fc1a2ec42f6b1f855c17b3e35157d23f414152188a9440e588d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("includes/base.html.twig", "form.html.twig", 1);
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
        echo "/\">Cancel</a>
        </header>
        <div class=\"contact\">
          ";
        // line 9
        if (($context["errors"] ?? null)) {
            // line 10
            echo "          <div class=\"errors\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
                // line 12
                echo "              <p>The ";
                echo twig_escape_filter($this->env, $context["input"], "html", null, true);
                echo " field is invalid</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "          </div>
          ";
        }
        // line 16
        echo "          <form method=\"post\">
            <input type=\"hidden\" name=\"thumbnail\" value=\"http://placehold.it/48x48\">
            <input type=\"hidden\" name=\"portrait\" value=\"http://placehold.it/300x400\">

            <h1 class=\"contact-name\">New Contact</h1>
            <label for=\"name\">Name</label>
            <input type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "name", array()), "html", null, true);
        echo "\">

            <label for=\"company\">Company</label>
            <input type=\"text\" name=\"company\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "company", array()), "html", null, true);
        echo "\">

            <label for=\"email\">Email</label>
            <input type=\"email\" name=\"email\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "email", array()), "html", null, true);
        echo "\">

            <label for=\"phone\">Phone</label>
            <input type=\"tel\" name=\"phone\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "phone", array()), "html", null, true);
        echo "\">

            <label for=\"address\">Street</label>
            <input type=\"text\" name=\"street\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "street", array()), "html", null, true);
        echo "\">

            <label for=\"address\">City</label>
            <input type=\"text\" name=\"city\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "city", array()), "html", null, true);
        echo "\">

            <label for=\"address\">State/Province</label>
            <input type=\"text\" name=\"state\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "state", array()), "html", null, true);
        echo "\">

            <label for=\"address\">Zip/Postal</label>
            <input type=\"text\" name=\"zip\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "zip", array()), "html", null, true);
        echo "\">

            <label for=\"birthday\">Birthday</label>
            <input type=\"date\" name=\"birthday\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "birthday", array()), "html", null, true);
        echo "\">

            <input type=\"submit\" name=\"add_contact\" value=\"Add Contact\">
        </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 46,  113 => 43,  107 => 40,  101 => 37,  95 => 34,  89 => 31,  83 => 28,  77 => 25,  71 => 22,  63 => 16,  59 => 14,  50 => 12,  46 => 11,  43 => 10,  41 => 9,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form.html.twig", "/Applications/MAMP/htdocs/mtm6331/week9/contacts/templates/form.html.twig");
    }
}
