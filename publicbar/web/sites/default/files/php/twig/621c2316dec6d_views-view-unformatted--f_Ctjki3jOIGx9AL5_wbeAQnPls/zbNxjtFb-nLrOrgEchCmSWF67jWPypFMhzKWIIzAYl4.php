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

/* themes/contrib/bfd/templates/page/frontpage/views-view-unformatted--frontpage.html.twig */
class __TwigTemplate_e308c2e349549b9018fb15565c17d5c5a4ce6d444462f52d57dcfa9860026dae extends \Twig\Template
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
        // line 18
        if (($context["title"] ?? null)) {
            // line 19
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 19, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 21
        echo "<div class=\"container px-md-0\">
  <div class=\"row\">
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            echo "      ";
            // line 25
            $context["row_classes"] = [0 => ((            // line 26
($context["default_row_class"] ?? null)) ? ("views-row") : ("")), 1 => "col-md-6", 2 => "box-hp", 3 => "px-0", 4 => "px-md-3", 5 => "col-print-12"];
            // line 30
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 30), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 30), 30, $this->source), "html", null, true);
            echo ">";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            // line 32
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bfd/templates/page/frontpage/views-view-unformatted--frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 34,  66 => 32,  64 => 31,  60 => 30,  58 => 26,  57 => 25,  55 => 24,  51 => 23,  47 => 21,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 */
#}
{% if title %}
  <h3>{{ title }}</h3>
{% endif %}
<div class=\"container px-md-0\">
  <div class=\"row\">
    {% for row in rows %}
      {%
        set row_classes = [
          default_row_class ?'views-row',
          'col-md-6','box-hp','px-0','px-md-3','col-print-12'
        ]
      %}
      <div{{ row.attributes.addClass(row_classes) }}>
        {{- row.content -}}
    </div>
    {% endfor %}
  </div>
</div>
", "themes/contrib/bfd/templates/page/frontpage/views-view-unformatted--frontpage.html.twig", "/Users/marcelino.martinez/sandbox/publicbarlive/publicbar/web/themes/contrib/bfd/templates/page/frontpage/views-view-unformatted--frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "for" => 23, "set" => 25);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
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
