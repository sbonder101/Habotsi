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

/* themes/drupalet_arco/templates/block/block--drupalet-arco-content.html.twig */
class __TwigTemplate_4aea1fbc6d36fed2bcdc42d19798b1c6ee6d21739eebfc1a66391b1748c33552 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["custom_classes"] = "";
        // line 2
        if ((($context["label"] ?? null) == "")) {
            // line 3
            $context["custom_classes"] = "no-title";
        }
        // line 6
        $context["classes"] = [0 => "block", 1 => "widget", 2 => "drp-block", 3 => "sidebar-box", 4 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 11
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 11), 11, $this->source))), 5 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 12
($context["plugin_id"] ?? null), 12, $this->source))), 6 =>         // line 13
($context["custom_classes"] ?? null)];
        // line 17
        $context["classes_section"] = [0 => "section", 1 => "block", 2 => "drp-block", 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 21
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 21), 21, $this->source))), 4 => "mt-30", 5 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 23
($context["plugin_id"] ?? null), 23, $this->source))), 6 =>         // line 24
($context["custom_classes"] ?? null)];
        // line 28
        $context["classes_footer"] = [0 => "block", 1 => "drp-block", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 31
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 31), 31, $this->source))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 32
($context["plugin_id"] ?? null), 32, $this->source))), 4 =>         // line 33
($context["custom_classes"] ?? null)];
        // line 36
        echo "



";
        // line 40
        if (((($context["region"] ?? null) == "sidebar_right") || (($context["region"] ?? null) == "sidebar_left"))) {
            // line 41
            echo "\t<div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
            echo ">
\t\t";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 42, $this->source), "html", null, true);
            echo "
\t\t";
            // line 43
            if (($context["label"] ?? null)) {
                // line 44
                echo "\t\t\t<div class=\"widget-title\">
\t\t\t\t<h6>";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 45, $this->source), "html", null, true);
                echo "</h6>
\t\t\t</div>
\t\t";
            }
            // line 48
            echo "\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 48, $this->source), "html", null, true);
            echo "
\t</div>

";
        } elseif ((        // line 51
($context["region"] ?? null) == "slideshow_content")) {
            // line 52
            echo "<!-- start slideshow -->
\t\t";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 53, $this->source), "html", null, true);
            echo "
<!-- end slideshow -->

";
        } elseif ((        // line 56
($context["region"] ?? null) == "footer")) {
            // line 57
            echo "
\t";
            // line 58
            if (($context["label"] ?? null)) {
                // line 59
                echo "\t\t<h4 class=\"sidebar-heading block-title\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 59, $this->source), "html", null, true);
                echo "><span>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 59, $this->source), "html", null, true);
                echo "</span></h4>
\t";
            }
            // line 61
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 61, $this->source), "html", null, true);
            echo "
\t";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 62, $this->source), "html", null, true);
            echo "
\t
";
        } elseif (((((((        // line 64
($context["region"] ?? null) == "branding") || (($context["region"] ?? null) == "footer_left")) || (($context["region"] ?? null) == "copyright")) || (($context["region"] ?? null) == "menu_footer")) || (($context["region"] ?? null) == "menu_toggle")) || (($context["region"] ?? null) == "main_menu"))) {
            // line 65
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 65, $this->source), "html", null, true);
            echo "
";
        } elseif (((((        // line 66
($context["region"] ?? null) == "footer_first") || (($context["region"] ?? null) == "footer_second")) || (($context["region"] ?? null) == "footer_third")) || (($context["region"] ?? null) == "footer_four"))) {
            // line 67
            echo "
\t<div ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes_footer"] ?? null)], "method", false, false, true, 68), 68, $this->source), "html", null, true);
            echo ">
\t\t";
            // line 69
            if (($context["label"] ?? null)) {
                // line 70
                echo "\t\t\t<h6 class=\"font-small font-weight-normal uppercase\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 70, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 70, $this->source), "html", null, true);
                echo "</h6>
\t\t";
            }
            // line 72
            echo "\t\t
\t\t";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 73, $this->source), "html", null, true);
            echo "
\t\t";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 74, $this->source), "html", null, true);
            echo "
\t\t
\t</div>

";
        } elseif (((((        // line 78
($context["region"] ?? null) == "content") || (($context["region"] ?? null) == "before_content")) || (($context["region"] ?? null) == "content_bottom")) || (($context["region"] ?? null) == "content_bottom_portfolio_details"))) {
            // line 79
            echo "\t";
            if ( !twig_test_empty(($context["content"] ?? null))) {
                // line 80
                echo "
\t\t<section ";
                // line 81
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes_section"] ?? null)], "method", false, false, true, 81), 81, $this->source), "html", null, true);
                echo ">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
                // line 84
                if (($context["label"] ?? null)) {
                    // line 85
                    echo "\t\t\t\t\t\t<div class=\"section-head text-center col-sm-12\">
\t\t\t\t\t\t\t<h4 class=\"title-section\">";
                    // line 86
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 86, $this->source), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t<h6 class=\"subtitle-section\"></h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 90, $this->source), "html", null, true);
                echo "
\t\t\t\t\t";
                // line 91
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 91, $this->source), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t";
            }
            // line 96
            echo "
";
        } else {
            // line 98
            echo "<div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 98), 98, $this->source), "html", null, true);
            echo ">
\t<div class=\"container\">
\t\t";
            // line 100
            if (($context["label"] ?? null)) {
                // line 101
                echo "\t\t\t<div class=\"row\">
\t\t\t\t<h3 class=\"sep-line-one\">";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 102, $this->source), "html", null, true);
                echo "</h3>
\t\t\t</div>
\t\t";
            }
            // line 105
            echo "\t\t<div class=\"row\">
\t\t\t";
            // line 106
            $this->displayBlock('content', $context, $blocks);
            // line 109
            echo "\t\t</div>
\t</div>
</div>
";
        }
    }

    // line 106
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "\t\t\t  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 107, $this->source), "html", null, true);
        echo "
\t\t  ";
    }

    public function getTemplateName()
    {
        return "themes/drupalet_arco/templates/block/block--drupalet-arco-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 107,  246 => 106,  238 => 109,  236 => 106,  233 => 105,  227 => 102,  224 => 101,  222 => 100,  216 => 98,  212 => 96,  204 => 91,  199 => 90,  192 => 86,  189 => 85,  187 => 84,  181 => 81,  178 => 80,  175 => 79,  173 => 78,  166 => 74,  162 => 73,  159 => 72,  151 => 70,  149 => 69,  145 => 68,  142 => 67,  140 => 66,  135 => 65,  133 => 64,  128 => 62,  123 => 61,  115 => 59,  113 => 58,  110 => 57,  108 => 56,  102 => 53,  99 => 52,  97 => 51,  90 => 48,  84 => 45,  81 => 44,  79 => 43,  75 => 42,  70 => 41,  68 => 40,  62 => 36,  60 => 33,  59 => 32,  58 => 31,  57 => 28,  55 => 24,  54 => 23,  53 => 21,  52 => 17,  50 => 13,  49 => 12,  48 => 11,  47 => 6,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set custom_classes = '' %}
{% if label == '' %}
{% set custom_classes = 'no-title' %}
{% endif %}
{%
  set classes = [
    'block',
\t'widget',
\t'drp-block',
\t'sidebar-box',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    custom_classes
  ]
%}
{%
  set classes_section = [
    'section',
\t'block',
\t'drp-block',
    'block-' ~ configuration.provider|clean_class,
\t'mt-30',
    'block-' ~ plugin_id|clean_class,
    custom_classes
  ]
%}
{%
  set classes_footer = [
    'block',
\t'drp-block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    custom_classes
  ]
%}




{% if region == 'sidebar_right' or region == 'sidebar_left' %}
\t<div {{ attributes.addClass(classes) }}>
\t\t{{ title_suffix }}
\t\t{% if label %}
\t\t\t<div class=\"widget-title\">
\t\t\t\t<h6>{{ label }}</h6>
\t\t\t</div>
\t\t{% endif %}
\t\t{{ content }}
\t</div>

{% elseif region == 'slideshow_content' %}
<!-- start slideshow -->
\t\t{{ content }}
<!-- end slideshow -->

{% elseif region == 'footer' %}

\t{% if label %}
\t\t<h4 class=\"sidebar-heading block-title\" {{ title_attributes }}><span>{{ label }}</span></h4>
\t{% endif %}
\t{{ title_suffix }}
\t{{ content }}
\t
{% elseif region == 'branding' or region == 'footer_left' or region == 'copyright' or region == 'menu_footer' or region == 'menu_toggle' or region == 'main_menu' %}
\t{{ content }}
{% elseif region == 'footer_first' or region == 'footer_second' or region == 'footer_third' or region == 'footer_four' %}

\t<div {{ attributes.addClass(classes_footer) }}>
\t\t{% if label %}
\t\t\t<h6 class=\"font-small font-weight-normal uppercase\" {{ title_attributes }}>{{ label }}</h6>
\t\t{% endif %}
\t\t
\t\t{{ title_suffix }}
\t\t{{ content }}
\t\t
\t</div>

{% elseif region == 'content' or region == 'before_content' or region == 'content_bottom' or region == 'content_bottom_portfolio_details' %}
\t{% if content is not empty %}

\t\t<section {{ attributes.addClass(classes_section) }}>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% if label %}
\t\t\t\t\t\t<div class=\"section-head text-center col-sm-12\">
\t\t\t\t\t\t\t<h4 class=\"title-section\">{{ label }}</h4>
\t\t\t\t\t\t\t<h6 class=\"subtitle-section\"></h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{{ title_prefix }}
\t\t\t\t\t{{ content }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t{% endif %}

{% else %}
<div {{ attributes.addClass(classes) }}>
\t<div class=\"container\">
\t\t{% if label %}
\t\t\t<div class=\"row\">
\t\t\t\t<h3 class=\"sep-line-one\">{{ label }}</h3>
\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"row\">
\t\t\t{% block content %}
\t\t\t  {{ content }}
\t\t  {% endblock %}
\t\t</div>
\t</div>
</div>
{% endif %}", "themes/drupalet_arco/templates/block/block--drupalet-arco-content.html.twig", "/var/www/html/themes/drupalet_arco/templates/block/block--drupalet-arco-content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 2, "block" => 106);
        static $filters = array("clean_class" => 11, "escape" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
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
