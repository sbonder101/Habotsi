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

/* themes/drupalet_arco/templates/pages/page.html.twig */
class __TwigTemplate_b9e03d685ddeec2e23ad85e7b3e871c8846453c767b3c8792d743fdaebdbbf7c extends \Twig\Template
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
        echo "<!-- HEADER START --> 
";
        // line 2
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/drupalet_arco/templates/pages/page.html.twig", 2)->display($context);
        // line 3
        echo "<!-- HEADER END --> 
";
        // line 4
        $context["sidebar"] = "";
        // line 5
        $context["pageheader"] = "";
        // line 6
        echo "
";
        // line 7
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_node_settings_2", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7))) {
            // line 8
            echo "\t";
            $context["sidebar"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_node_settings_2", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8);
        }
        // line 10
        echo "
";
        // line 11
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_node_settings_3", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11))) {
            // line 12
            echo "\t";
            $context["pageheader"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_node_settings_3", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12);
        }
        // line 14
        echo "
";
        // line 15
        if ((($context["pageheader"] ?? null) == "show")) {
            // line 16
            echo "\t<section id=\"home\" class=\"min-header\" data-scroll-index=\"0\">
\t\t<div class=\"v-middle mt-30\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t\t<h5>";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_node_settings_4", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t<a href=\"\">";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "</a>
\t\t\t\t\t\t<a href=\"#0\">";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div><!-- /row -->
\t\t</div><!-- /container -->
\t</section>
";
        }
        // line 32
        echo "
<!-- CONTENT --> 
";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow_content", [], "any", false, false, true, 34)) {
            // line 35
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow_content", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
";
        }
        // line 36
        echo "\t

";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 38)) {
            // line 39
            echo "<section class=\"section-padding\" data-scroll-index=\"1\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "
\t\t</div>
\t</div>
</section>
";
        }
        // line 47
        echo "
";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 48)) {
            // line 49
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "
";
        }
        // line 51
        echo "


";
        // line 54
        if ((($context["sidebar"] ?? null) == "left")) {
            // line 55
            echo "
\t<section class=\"blogs section-padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"side-bar\">
\t\t\t\t\t\t";
            // line 61
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 61)) {
                // line 62
                echo "\t\t\t\t\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 content-sidebar-page\">
\t\t\t\t\t";
            // line 67
            $this->loadTemplate("@drupalet_arco/pages/main.html.twig", "themes/drupalet_arco/templates/pages/page.html.twig", 67)->display($context);
            echo "\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</section>
\t
";
        } elseif ((        // line 74
($context["sidebar"] ?? null) == "right")) {
            // line 75
            echo "\t<section class=\"blogs section-padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 content-sidebar-page\">
\t\t\t\t\t";
            // line 79
            $this->loadTemplate("@drupalet_arco/pages/main.html.twig", "themes/drupalet_arco/templates/pages/page.html.twig", 79)->display($context);
            echo "\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"side-bar\">
\t\t\t\t\t\t";
            // line 83
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 83)) {
                // line 84
                echo "\t\t\t\t\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

";
        } else {
            // line 94
            echo "
\t";
            // line 95
            $this->loadTemplate("@drupalet_arco/pages/main.html.twig", "themes/drupalet_arco/templates/pages/page.html.twig", 95)->display($context);
            echo "\t

";
        }
        // line 98
        echo "
";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 99)) {
            // line 100
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "
";
        }
        // line 102
        echo "

<!-- FOOTER START --> 
\t";
        // line 105
        $this->loadTemplate("@drupalet_arco/footer_styles/footer-main.html.twig", "themes/drupalet_arco/templates/pages/page.html.twig", 105)->display($context);
        // line 106
        echo "<!-- FOOTER END --> ";
    }

    public function getTemplateName()
    {
        return "themes/drupalet_arco/templates/pages/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 106,  239 => 105,  234 => 102,  228 => 100,  226 => 99,  223 => 98,  217 => 95,  214 => 94,  204 => 86,  198 => 84,  196 => 83,  189 => 79,  183 => 75,  181 => 74,  171 => 67,  166 => 64,  160 => 62,  158 => 61,  150 => 55,  148 => 54,  143 => 51,  137 => 49,  135 => 48,  132 => 47,  124 => 42,  119 => 39,  117 => 38,  113 => 36,  107 => 35,  105 => 34,  101 => 32,  90 => 24,  86 => 23,  82 => 22,  74 => 16,  72 => 15,  69 => 14,  65 => 12,  63 => 11,  60 => 10,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- HEADER START --> 
{% include header_skin %}
<!-- HEADER END --> 
{% set sidebar = '' %}
{% set pageheader = '' %}

{% if node.drpn_node_settings_2.value is not empty %}
\t{% set sidebar = node.drpn_node_settings_2.value %}
{% endif %}

{% if node.drpn_node_settings_3.value is not empty %}
\t{% set pageheader = node.drpn_node_settings_3.value %}
{% endif %}

{% if pageheader == 'show' %}
\t<section id=\"home\" class=\"min-header\" data-scroll-index=\"0\">
\t\t<div class=\"v-middle mt-30\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t\t<h5>{{ node.drpn_node_settings_4.value }}</h5>
\t\t\t\t\t\t<a href=\"\">{{ 'Home'|t }}</a>
\t\t\t\t\t\t<a href=\"#0\">{{ node.title.value }}</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div><!-- /row -->
\t\t</div><!-- /container -->
\t</section>
{% endif %}

<!-- CONTENT --> 
{% if page.slideshow_content %}
\t{{ page.slideshow_content }}
{% endif %}\t

{% if page.help %}
<section class=\"section-padding\" data-scroll-index=\"1\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t{{ page.help }}
\t\t</div>
\t</div>
</section>
{% endif %}

{% if page.before_content %}
\t{{ page.before_content }}
{% endif %}



{% if sidebar == 'left' %}

\t<section class=\"blogs section-padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"side-bar\">
\t\t\t\t\t\t{% if page.sidebar_left %}
\t\t\t\t\t\t\t{{ page.sidebar_left }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 content-sidebar-page\">
\t\t\t\t\t{% include '@drupalet_arco/pages/main.html.twig' %}\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</section>
\t
{% elseif sidebar == 'right' %}
\t<section class=\"blogs section-padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 content-sidebar-page\">
\t\t\t\t\t{% include '@drupalet_arco/pages/main.html.twig' %}\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"side-bar\">
\t\t\t\t\t\t{% if page.sidebar_right %}
\t\t\t\t\t\t\t{{ page.sidebar_right }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

{% else %}

\t{% include '@drupalet_arco/pages/main.html.twig' %}\t

{% endif %}

{% if page.content_bottom %}
\t{{ page.content_bottom }}
{% endif %}


<!-- FOOTER START --> 
\t{% include '@drupalet_arco/footer_styles/footer-main.html.twig' %}
<!-- FOOTER END --> ", "themes/drupalet_arco/templates/pages/page.html.twig", "/var/www/html/themes/drupalet_arco/templates/pages/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 2, "set" => 4, "if" => 7);
        static $filters = array("escape" => 22, "t" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'set', 'if'],
                ['escape', 't'],
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
