<?php

/* index.html.twig */
class __TwigTemplate_ccaf92526a333561ddaa9fe79c17e53d955a1fa3fa41562e027c336590d5edf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
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
          <h1 class=\"contacts-title center\">My Contacts</h1>
          <a class=\"contact-add\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["SITE_URL"] ?? null), "html", null, true);
        echo "/add\">
            <i class=\"fa fa-plus fa-2x\" aria-hidden=\"true\"></i>
          </a>
        </header>
        <div class=\"panel\">
    \t\t\t\t<form action=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["SITE_URL"] ?? null), "html", null, true);
        echo "/search/\" class=\"form-search\">
    \t\t\t\t\t\t<i class=\"material-icons search-icon\">search</i>
    \t\t\t\t\t\t<input class=\"form-input\" name=\"search\" placeholder=\"Search contacts by name...\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
        echo "\" />
                <a class=\"refresh-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["SITE_URL"] ?? null), "html", null, true);
        echo "\"><i class=\"material-icons refresh-icon\">refresh</i></a>
    \t\t\t\t</form>
    \t\t</div>
        <ul class=\"contact-list\">
          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contacts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 20
            echo "          <li>
            <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contact"], "thumbnail", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contact"], "name", array()), "html", null, true);
            echo "\">
            <div class=\"contact-info\">
              <h2 class=\"heading--name\">
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contact"], "url", array()), "html", null, true);
            echo "\">
                  ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contact"], "name", array()), "html", null, true);
            echo "
                </a>
               </h2>
               <div class=\"contact-item\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contact"], "company", array()), "html", null, true);
            echo "</div>
            </div>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </ul>
    </div>
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
        return array (  95 => 32,  85 => 28,  79 => 25,  75 => 24,  67 => 21,  64 => 20,  60 => 19,  53 => 15,  49 => 14,  44 => 12,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "/Applications/MAMP/htdocs/mtm6331/contacts/templates/index.html.twig");
    }
}
