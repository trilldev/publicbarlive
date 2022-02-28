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

/* @bootstrap_for_drupal/includes/aside-content.html.twig */
class __TwigTemplate_a55b10d0fefe9b91651bfe7e3d81132d4050cf36dc95cbcb015abc03a0014186 extends \Twig\Template
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
        // line 1
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 1)) {
            // line 2
            echo "<!-- ASIDE CONTENT -->
<div class=\"col-md-4 mb-4 col-lg-3 d-print-none\">
  <aside class=\"my-3 position-sticky sticky-top\" id=\"content-aside\">
    <div>
      ";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
    </div>
  </aside>
</div>
<!-- ASIDE CONTENT -->
";
        }
    }

    public function getTemplateName()
    {
        return "@bootstrap_for_drupal/includes/aside-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if page.sidebar_left %}
<!-- ASIDE CONTENT -->
<div class=\"col-md-4 mb-4 col-lg-3 d-print-none\">
  <aside class=\"my-3 position-sticky sticky-top\" id=\"content-aside\">
    <div>
      {{ page.sidebar_left }}
    </div>
  </aside>
</div>
<!-- ASIDE CONTENT -->
{% endif %}
", "@bootstrap_for_drupal/includes/aside-content.html.twig", "/Users/marcelino.martinez/sandbox/publicbarlive/publicbar/web/themes/contrib/bfd/templates/includes/aside-content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
