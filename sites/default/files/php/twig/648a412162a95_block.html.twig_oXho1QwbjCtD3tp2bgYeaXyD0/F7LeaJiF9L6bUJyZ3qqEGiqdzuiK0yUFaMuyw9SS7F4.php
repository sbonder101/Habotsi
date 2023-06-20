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

/* themes/drupalet_arco/templates/block/block.html.twig */
class __TwigTemplate_07cca61ee107cf76b1b1f71406d2c3d63419edfeb9ca72cff24d6c5447d54e3f extends \Twig\Template
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
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 21), 21, $this->source))), 4 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 22
($context["plugin_id"] ?? null), 22, $this->source))), 5 =>         // line 23
($context["custom_classes"] ?? null)];
        // line 27
        $context["classes_footer"] = [0 => "block", 1 => "drp-block", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 30
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 30), 30, $this->source))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 31
($context["plugin_id"] ?? null), 31, $this->source))), 4 =>         // line 32
($context["custom_classes"] ?? null)];
        // line 35
        echo "
";
        // line 36
        if (((($context["region"] ?? null) == "sidebar_right") || (($context["region"] ?? null) == "sidebar_left"))) {
            // line 37
            echo "\t<div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
            echo ">
\t\t";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 38, $this->source), "html", null, true);
            echo "
\t\t";
            // line 39
            if (($context["label"] ?? null)) {
                // line 40
                echo "\t\t\t<div class=\"widget-title\">
\t\t\t\t<h6>";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 41, $this->source), "html", null, true);
                echo "</h6>
\t\t\t</div>
\t\t";
            }
            // line 44
            echo "\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 44, $this->source), "html", null, true);
            echo "
\t</div>

";
        } elseif ((        // line 47
($context["region"] ?? null) == "slideshow_content")) {
            // line 48
            echo "<!-- start slideshow -->
\t\t";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 49, $this->source), "html", null, true);
            echo "
<!-- end slideshow -->

";
        } elseif ((        // line 52
($context["region"] ?? null) == "footer")) {
            // line 53
            echo "
\t";
            // line 54
            if (($context["label"] ?? null)) {
                // line 55
                echo "\t\t<h4 class=\"sidebar-heading block-title\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 55, $this->source), "html", null, true);
                echo "><span>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 55, $this->source), "html", null, true);
                echo "</span></h4>
\t";
            }
            // line 57
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 57, $this->source), "html", null, true);
            echo "
\t";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 58, $this->source), "html", null, true);
            echo "
\t
";
        } elseif (((((((        // line 60
($context["region"] ?? null) == "branding") || (($context["region"] ?? null) == "footer_left")) || (($context["region"] ?? null) == "copyright")) || (($context["region"] ?? null) == "menu_footer")) || (($context["region"] ?? null) == "menu_toggle")) || (($context["region"] ?? null) == "main_menu"))) {
            // line 61
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 61, $this->source), "html", null, true);
            echo "
";
        } elseif (((((        // line 62
($context["region"] ?? null) == "footer_first") || (($context["region"] ?? null) == "footer_second")) || (($context["region"] ?? null) == "footer_third")) || (($context["region"] ?? null) == "footer_four"))) {
            // line 63
            echo "
\t<div ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes_footer"] ?? null)], "method", false, false, true, 64), 64, $this->source), "html", null, true);
            echo ">
\t\t";
            // line 65
            if (($context["label"] ?? null)) {
                // line 66
                echo "\t\t\t<h6 class=\"font-small font-weight-normal uppercase\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 66, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 66, $this->source), "html", null, true);
                echo "</h6>
\t\t";
            }
            // line 68
            echo "\t\t
\t\t";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 69, $this->source), "html", null, true);
            echo "
\t\t";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 70, $this->source), "html", null, true);
            echo "
\t\t
\t</div>

";
        } elseif (((((        // line 74
($context["region"] ?? null) == "content") || (($context["region"] ?? null) == "before_content")) || (($context["region"] ?? null) == "content_bottom")) || (($context["region"] ?? null) == "content_bottom_portfolio_details"))) {
            // line 75
            echo "\t";
            if ( !twig_test_empty(($context["content"] ?? null))) {
                // line 76
                echo "
\t\t<section ";
                // line 77
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes_section"] ?? null)], "method", false, false, true, 77), 77, $this->source), "html", null, true);
                echo ">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
                // line 80
                if (($context["label"] ?? null)) {
                    // line 81
                    echo "\t\t\t\t\t\t<div class=\"section-head text-center col-sm-12\">
\t\t\t\t\t\t\t<h4 class=\"title-section\">";
                    // line 82
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 82, $this->source), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t<h6 class=\"subtitle-section\"></h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 86, $this->source), "html", null, true);
                echo "
\t\t\t\t\t";
                // line 87
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 87, $this->source), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t";
            }
            // line 92
            echo "
";
        } else {
            // line 94
            echo "<div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 94), 94, $this->source), "html", null, true);
            echo ">
\t<div class=\"container\">
\t\t";
            // line 96
            if (($context["label"] ?? null)) {
                // line 97
                echo "\t\t\t<div class=\"row\">
\t\t\t\t<h3 class=\"sep-line-one\">";
                // line 98
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 98, $this->source), "html", null, true);
                echo "</h3>
\t\t\t</div>
\t\t";
            }
            // line 101
            echo "\t\t<div class=\"row\">
\t\t\t";
            // line 102
            $this->displayBlock('content', $context, $blocks);
            // line 105
            echo "\t\t</div>
\t</div>
</div>
";
        }
    }

    // line 102
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "\t\t\t  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 103, $this->source), "html", null, true);
        echo "
\t\t  ";
    }

    public function getTemplateName()
    {
        return "themes/drupalet_arco/templates/block/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 103,  243 => 102,  235 => 105,  233 => 102,  230 => 101,  224 => 98,  221 => 97,  219 => 96,  213 => 94,  209 => 92,  201 => 87,  196 => 86,  189 => 82,  186 => 81,  184 => 80,  178 => 77,  175 => 76,  172 => 75,  170 => 74,  163 => 70,  159 => 69,  156 => 68,  148 => 66,  146 => 65,  142 => 64,  139 => 63,  137 => 62,  132 => 61,  130 => 60,  125 => 58,  120 => 57,  112 => 55,  110 => 54,  107 => 53,  105 => 52,  99 => 49,  96 => 48,  94 => 47,  87 => 44,  81 => 41,  78 => 40,  76 => 39,  72 => 38,  67 => 37,  65 => 36,  62 => 35,  60 => 32,  59 => 31,  58 => 30,  57 => 27,  55 => 23,  54 => 22,  53 => 21,  52 => 17,  50 => 13,  49 => 12,  48 => 11,  47 => 6,  44 => 3,  42 => 2,  40 => 1,);
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
{% endif %}", "themes/drupalet_arco/templates/block/block.html.twig", "/var/www/html/themes/drupalet_arco/templates/block/block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 2, "block" => 102);
        static $filters = array("clean_class" => 11, "escape" => 37);
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
