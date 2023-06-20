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

/* themes/drupalet_arco/templates/block/block--views-block--home-slider-block-home-page-slider-filter.html.twig */
class __TwigTemplate_8f534af0e416f4bd9e3338525350c709557318eaf543bd11d4a44823dc838691 extends \Twig\Template
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
        // line 5
        echo "

";
        // line 8
        $context["classes"] = [0 => "block", 1 => "home-background-patten", 2 => "widget", 3 => "drp-block", 4 => "sidebar-box", 5 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 14
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 14), 14, $this->source))), 6 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 15
($context["plugin_id"] ?? null), 15, $this->source))), 7 =>         // line 16
($context["custom_classes"] ?? null)];
        // line 20
        $context["classes_section"] = [0 => "section", 1 => "block", 2 => "drp-block", 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 24
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 24), 24, $this->source))), 4 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 25
($context["plugin_id"] ?? null), 25, $this->source))), 5 => "home-background-patten-brown", 6 => "home-background-patten-blue", 7 =>         // line 28
($context["custom_classes"] ?? null)];
        // line 32
        $context["classes_footer"] = [0 => "block", 1 => "drp-block", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 35
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 35), 35, $this->source))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["plugin_id"] ?? null), 36, $this->source))), 4 =>         // line 37
($context["custom_classes"] ?? null)];
        // line 40
        echo "
";
        // line 41
        if (((($context["region"] ?? null) == "sidebar_right") || (($context["region"] ?? null) == "sidebar_left"))) {
            // line 42
            echo "\t<div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
            echo ">
\t\t";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 43, $this->source), "html", null, true);
            echo "
\t\t";
            // line 44
            if (($context["label"] ?? null)) {
                // line 45
                echo "\t\t\t<div class=\"widget-title\">
\t\t\t\t<h6>";
                // line 46
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 46, $this->source), "html", null, true);
                echo "</h6>
\t\t\t</div>
\t\t";
            }
            // line 49
            echo "\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 49, $this->source), "html", null, true);
            echo "
\t</div>

";
        } elseif ((        // line 52
($context["region"] ?? null) == "slideshow_content")) {
            // line 53
            echo "<!-- start slideshow -->
\t\t";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 54, $this->source), "html", null, true);
            echo "
<!-- end slideshow -->

";
        } elseif ((        // line 57
($context["region"] ?? null) == "footer")) {
            // line 58
            echo "
\t";
            // line 59
            if (($context["label"] ?? null)) {
                // line 60
                echo "\t\t<h4 class=\"sidebar-heading block-title\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 60, $this->source), "html", null, true);
                echo "><span>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 60, $this->source), "html", null, true);
                echo "</span></h4>
\t";
            }
            // line 62
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 62, $this->source), "html", null, true);
            echo "
\t";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 63, $this->source), "html", null, true);
            echo "
\t
";
        } elseif (((((((        // line 65
($context["region"] ?? null) == "branding") || (($context["region"] ?? null) == "footer_left")) || (($context["region"] ?? null) == "copyright")) || (($context["region"] ?? null) == "menu_footer")) || (($context["region"] ?? null) == "menu_toggle")) || (($context["region"] ?? null) == "main_menu"))) {
            // line 66
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 66, $this->source), "html", null, true);
            echo "
";
        } elseif (((((        // line 67
($context["region"] ?? null) == "footer_first") || (($context["region"] ?? null) == "footer_second")) || (($context["region"] ?? null) == "footer_third")) || (($context["region"] ?? null) == "footer_four"))) {
            // line 68
            echo "
\t<div ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes_footer"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
            echo ">
\t\t";
            // line 70
            if (($context["label"] ?? null)) {
                // line 71
                echo "\t\t\t<h6 class=\"font-small font-weight-normal uppercase\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 71, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 71, $this->source), "html", null, true);
                echo "</h6>
\t\t";
            }
            // line 73
            echo "\t\t
\t\t";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 74, $this->source), "html", null, true);
            echo "
\t\t";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 75, $this->source), "html", null, true);
            echo "
\t\t
\t</div>

";
        } elseif (((((        // line 79
($context["region"] ?? null) == "content") || (($context["region"] ?? null) == "before_content")) || (($context["region"] ?? null) == "content_bottom")) || (($context["region"] ?? null) == "content_bottom_portfolio_details"))) {
            // line 80
            echo "\t";
            if ( !twig_test_empty(($context["content"] ?? null))) {
                // line 81
                echo "
\t\t<section ";
                // line 82
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes_section"] ?? null)], "method", false, false, true, 82), 82, $this->source), "html", null, true);
                echo ">
\t\t\t<div class=\"container-xl\">
\t\t\t\t";
                // line 84
                if (($context["label"] ?? null)) {
                    // line 85
                    echo "\t\t\t\t\t<div class=\"section-head text-center col-sm-12\">
\t\t\t\t\t\t<h4 class=\"title-section\">";
                    // line 86
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 86, $this->source), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t<h6 class=\"subtitle-section\"></h6>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 90, $this->source), "html", null, true);
                echo "
\t\t\t\t";
                // line 91
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 91, $this->source), "html", null, true);
                echo "
\t\t\t</div>
\t\t</section>
\t";
            }
            // line 95
            echo "
";
        } else {
            // line 97
            echo "<div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 97), 97, $this->source), "html", null, true);
            echo ">
\t<div class=\"container-xl\">
\t\t";
            // line 99
            if (($context["label"] ?? null)) {
                // line 100
                echo "\t\t\t<div class=\"row\">
\t\t\t\t<h3 class=\"sep-line-one\">";
                // line 101
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 101, $this->source), "html", null, true);
                echo "</h3>
\t\t\t</div>
\t\t";
            }
            // line 104
            echo "\t\t<div class=\"row\">
\t\t\t";
            // line 105
            $this->displayBlock('content', $context, $blocks);
            // line 108
            echo "\t\t</div>
\t</div>
</div>
";
        }
    }

    // line 105
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "\t\t\t  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 106, $this->source), "html", null, true);
        echo "
\t\t  ";
    }

    public function getTemplateName()
    {
        return "themes/drupalet_arco/templates/block/block--views-block--home-slider-block-home-page-slider-filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 106,  245 => 105,  237 => 108,  235 => 105,  232 => 104,  226 => 101,  223 => 100,  221 => 99,  215 => 97,  211 => 95,  204 => 91,  199 => 90,  192 => 86,  189 => 85,  187 => 84,  182 => 82,  179 => 81,  176 => 80,  174 => 79,  167 => 75,  163 => 74,  160 => 73,  152 => 71,  150 => 70,  146 => 69,  143 => 68,  141 => 67,  136 => 66,  134 => 65,  129 => 63,  124 => 62,  116 => 60,  114 => 59,  111 => 58,  109 => 57,  103 => 54,  100 => 53,  98 => 52,  91 => 49,  85 => 46,  82 => 45,  80 => 44,  76 => 43,  71 => 42,  69 => 41,  66 => 40,  64 => 37,  63 => 36,  62 => 35,  61 => 32,  59 => 28,  58 => 25,  57 => 24,  56 => 20,  54 => 16,  53 => 15,  52 => 14,  51 => 8,  47 => 5,  44 => 3,  42 => 2,  40 => 1,);
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
\t'home-background-patten',
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
\t'home-background-patten-brown',
\t'home-background-patten-blue',
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
\t\t\t<div class=\"container-xl\">
\t\t\t\t{% if label %}
\t\t\t\t\t<div class=\"section-head text-center col-sm-12\">
\t\t\t\t\t\t<h4 class=\"title-section\">{{ label }}</h4>
\t\t\t\t\t\t<h6 class=\"subtitle-section\"></h6>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{{ title_prefix }}
\t\t\t\t{{ content }}
\t\t\t</div>
\t\t</section>
\t{% endif %}

{% else %}
<div {{ attributes.addClass(classes) }}>
\t<div class=\"container-xl\">
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
{% endif %}", "themes/drupalet_arco/templates/block/block--views-block--home-slider-block-home-page-slider-filter.html.twig", "/var/www/html/themes/drupalet_arco/templates/block/block--views-block--home-slider-block-home-page-slider-filter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 2, "block" => 105);
        static $filters = array("clean_class" => 14, "escape" => 42);
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
