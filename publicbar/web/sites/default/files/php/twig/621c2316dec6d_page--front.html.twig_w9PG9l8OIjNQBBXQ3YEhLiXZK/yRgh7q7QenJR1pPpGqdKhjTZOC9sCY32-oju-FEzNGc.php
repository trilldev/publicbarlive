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

/* themes/contrib/bfd/templates/page/frontpage/page--front.html.twig */
class __TwigTemplate_ffa98468a9133cad747f1ffcd951bc125dc82d1233d3b0a16461b4494864c5ee extends \Twig\Template
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
        echo "
<!-- HEADER-->
";
        // line 47
        $this->loadTemplate("@bootstrap_for_drupal/includes/header.html.twig", "themes/contrib/bfd/templates/page/frontpage/page--front.html.twig", 47)->display($context);
        // line 48
        echo "<!-- HEADER-->

<!-- MAIN -->
<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>
  ";
        // line 54
        echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col col-print-12\">

          <!-- CONTENT BEFORE -->
          ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_before", [], "any", false, false, true, 59)) {
            // line 60
            echo "            <aside class=\"mt-2 mt-md-3\" id=\"content-before\">
              ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_before", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 64
        echo "          <!-- CONTENT BEFORE -->

          <!-- MAIN CONTENT -->
          <section class=\"py-2 py-md-3\" id=\"page-content\">
            ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "
          </section>
          <!-- MAIN CONTENT -->

          <!-- CONTENT AFTER -->
          ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_after", [], "any", false, false, true, 73)) {
            // line 74
            echo "            <aside  id=\"content-after\">
              ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_after", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
            </aside>
          ";
        }
        // line 78
        echo "        </div>
        <!-- CONTENT AFTER --> 

      </div>
    </div>
  </div>
</main>
<!-- MAIN -->

<!-- FOOTER -->
";
        // line 88
        $this->loadTemplate("@bootstrap_for_drupal/includes/footer.html.twig", "themes/contrib/bfd/templates/page/frontpage/page--front.html.twig", 88)->display($context);
        // line 89
        echo "<!-- FOOTER -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bfd/templates/page/frontpage/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 89,  107 => 88,  95 => 78,  89 => 75,  86 => 74,  84 => 73,  76 => 68,  70 => 64,  64 => 61,  61 => 60,  59 => 59,  52 => 54,  45 => 48,  43 => 47,  39 => 45,);
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
<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>
  {# link is in html.html.twig #}
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col col-print-12\">

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

      </div>
    </div>
  </div>
</main>
<!-- MAIN -->

<!-- FOOTER -->
{% include '@bootstrap_for_drupal/includes/footer.html.twig' %}
<!-- FOOTER -->
", "themes/contrib/bfd/templates/page/frontpage/page--front.html.twig", "/Users/marcelino.martinez/sandbox/publicbarlive/publicbar/web/themes/contrib/bfd/templates/page/frontpage/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 47, "if" => 59);
        static $filters = array("escape" => 61);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
