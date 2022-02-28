<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/bfd/templates/layout/page.html.twig */
class __TwigTemplate_830dc025230706f400cfc14a3ced3df633d44277f178fe6267934665f49c3b42 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "<!-- HEADER-->
";
        // line 46
        $this->loadTemplate("@bootstrap_for_drupal/includes/header.html.twig", "themes/contrib/bfd/templates/layout/page.html.twig", 46)->display($context);
        // line 47
        echo "<!-- HEADER-->

<!-- MAIN -->
<main role=\"main \" class=\"d-print-block\">
  <a id=\"main-content\" tabindex=\"-1\"></a>
  ";
        // line 53
        echo "
  <div class=\"container\">
    <div class=\"row\">

          <!-- If no sidebar_left content take full width -->
          ";
        // line 58
        $context["content_classes"] = ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 58)) ? ("col-md-8 col-lg-9") : ("col-12"));
        // line 59
        echo "          <!-- If no sidebar_left content take full width -->

          <div class=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null), 61, $this->source), "html", null, true);
        echo " col-print-12\">

          <!-- CONTENT BEFORE -->
          ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_before", [], "any", false, false, true, 64)) {
            // line 65
            echo "            <aside class=\"mt-2 mt-md-3\" id=\"content-before\">
              ";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_before", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 69
        echo "          <!-- CONTENT BEFORE -->

          <!-- MAIN CONTENT -->
          <section class=\"py-2 py-md-3\" id=\"page-content\">
            ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "
          </section>
          <!-- MAIN CONTENT -->

          <!-- CONTENT AFTER -->
          ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_after", [], "any", false, false, true, 78)) {
            // line 79
            echo "            <aside  id=\"content-after\">
              ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_after", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 83
        echo "        </div>
        <!-- CONTENT AFTER -->

      <!-- ASIDE CONTENT -->
      ";
        // line 87
        $this->loadTemplate("@bootstrap_for_drupal/includes/aside-content.html.twig", "themes/contrib/bfd/templates/layout/page.html.twig", 87)->display($context);
        // line 88
        echo "      <!-- ASIDE CONTENT -->

    </div>
  </div>
</main>
<!-- MAIN -->

<!-- FOOTER -->
";
        // line 96
        $this->loadTemplate("@bootstrap_for_drupal/includes/footer.html.twig", "themes/contrib/bfd/templates/layout/page.html.twig", 96)->display($context);
        // line 97
        echo "<!-- FOOTER -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bfd/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 97,  124 => 96,  114 => 88,  112 => 87,  106 => 83,  100 => 80,  97 => 79,  95 => 78,  87 => 73,  81 => 69,  75 => 66,  72 => 65,  70 => 64,  64 => 61,  60 => 59,  58 => 58,  51 => 53,  44 => 47,  42 => 46,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<!-- HEADER-->
{% include '@bootstrap_for_drupal/includes/header.html.twig' %}
<!-- HEADER-->

<!-- MAIN -->
<main role=\"main \" class=\"d-print-block\">
  <a id=\"main-content\" tabindex=\"-1\"></a>
  {# link is in html.html.twig #}

  <div class=\"container\">
    <div class=\"row\">

          <!-- If no sidebar_left content take full width -->
          {% set content_classes = (page.sidebar_left) ? 'col-md-8 col-lg-9' : 'col-12' %}
          <!-- If no sidebar_left content take full width -->

          <div class=\"{{ content_classes }} col-print-12\">

          <!-- CONTENT BEFORE -->
          {% if page.content_before %}
            <aside class=\"mt-2 mt-md-3\" id=\"content-before\">
              {{ page.content_before }}
            </aside>
          {% endif %}
          <!-- CONTENT BEFORE -->

          <!-- MAIN CONTENT -->
          <section class=\"py-2 py-md-3\" id=\"page-content\">
            {{ page.content }}
          </section>
          <!-- MAIN CONTENT -->

          <!-- CONTENT AFTER -->
          {% if page.content_after %}
            <aside  id=\"content-after\">
              {{ page.content_after }}
            </aside>
          {% endif %}
        </div>
        <!-- CONTENT AFTER -->

      <!-- ASIDE CONTENT -->
      {% include '@bootstrap_for_drupal/includes/aside-content.html.twig' %}
      <!-- ASIDE CONTENT -->

    </div>
  </div>
</main>
<!-- MAIN -->

<!-- FOOTER -->
{% include '@bootstrap_for_drupal/includes/footer.html.twig' %}
<!-- FOOTER -->
", "themes/contrib/bfd/templates/layout/page.html.twig", "/Users/marcelino.martinez/sandbox/publicbarlive/publicbar/web/themes/contrib/bfd/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 46, "set" => 58, "if" => 64);
        static $filters = array("escape" => 61);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
