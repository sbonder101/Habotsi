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

/* modules/nvt_views_style/templates/views-view-naviviews.html.twig */
class __TwigTemplate_c432ddd8f2a8585f980eef1b92b4ce469a3df51622b911b3e61d40b1ca8c8c88 extends \Twig\Template
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
        // line 21
        if ( !twig_test_empty(($context["wrapper_attributes"] ?? null))) {
            // line 22
            echo "<";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_element"] ?? null), 22, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null), 22, $this->source), "html", null, true);
            echo ">
";
        }
        // line 24
        echo "  \t";
        if (($context["title"] ?? null)) {
            // line 25
            echo "    \t<h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 25, $this->source), "html", null, true);
            echo "</h3>
  \t";
        }
        // line 27
        echo "\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["navi_rows"] ?? null), 27, $this->source));
        echo "

";
        // line 29
        if ( !twig_test_empty(($context["wrapper_attributes"] ?? null))) {
            // line 30
            echo "</";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_element"] ?? null), 30, $this->source), "html", null, true);
            echo ">
";
        }
    }

    public function getTemplateName()
    {
        return "modules/nvt_views_style/templates/views-view-naviviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 30,  64 => 29,  58 => 27,  52 => 25,  49 => 24,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a view template to display a list of rows.
 *
 * Available variables:
 * - attributes: HTML attributes for the container.
 * - rows: A list of rows for this list.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's contents.
 * - title: The title of this group of rows. May be empty.
 * - list: @todo.
 *   - type: Starting tag will be either a ul or ol.
 *   - attributes: HTML attributes for the list element.
 *
 * @see template_preprocess_views_view_list()
 *
 * @ingroup themeable
 */
#}
{% if wrapper_attributes is not empty -%}
\t<{{ wrapper_element }} {{ wrapper_attributes }}>
{% endif %}
  \t{% if title %}
    \t<h3>{{ title }}</h3>
  \t{% endif %}
\t{{ navi_rows|raw }}

{% if wrapper_attributes is not empty -%}
  \t</{{ wrapper_element }}>
{% endif %}
", "modules/nvt_views_style/templates/views-view-naviviews.html.twig", "/var/www/html/modules/nvt_views_style/templates/views-view-naviviews.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21);
        static $filters = array("escape" => 22, "raw" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
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
