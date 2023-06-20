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

/* themes/drupalet_arco/templates/pages/html--front.html.twig */
class __TwigTemplate_a54a9c82dc6e39249b3d64225f1a457ff0192285036480b36eb736bd71f94d06 extends \Twig\Template
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
        // line 26
        echo "<!DOCTYPE html>
<html";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 27, $this->source), "html", null, true);
        echo ">
  <head> 
    <head-placeholder token=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 29, $this->source));
        echo "\">
    <title>";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 30, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 31, $this->source));
        echo "\">

    <js-placeholder token=\"";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 33, $this->source));
        echo "\">
\t";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["links_google_fonts"] ?? null), 34, $this->source));
        echo "

    ";
        // line 36
        if (($context["customize_css"] ?? null)) {
            // line 37
            echo "      <style type=\"text/css\">
        ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["customize_css"] ?? null), 38, $this->source));
            echo "
      </style>
    ";
        }
        // line 41
        echo "  </head>

  ";
        // line 43
        $context["body_classes"] = [0 => ((        // line 44
($context["logged_in"] ?? null)) ? ("logged-in") : ("")), 1 => "page-main", 2 => (( !        // line 46
($context["root_path"] ?? null)) ? ("frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 46, $this->source))))), 3 => ((        // line 47
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 47, $this->source)))) : ("")), 4 => ((        // line 48
($context["node_id"] ?? null)) ? (("node-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_id"] ?? null), 48, $this->source)))) : (""))];
        // line 51
        echo "
  <body ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
        echo ">
    <div class=\"loading\">
      <div class=\"text-center middle\">
        <div class=\"lds-ellipsis\">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div>
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>

    ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 67, $this->source), "html", null, true);
        echo "
    <div class=\"home-background\">
      ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 69, $this->source), "html", null, true);
        echo "
    </div>
    
    ";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 72, $this->source), "html", null, true);
        echo "
\t
    <js-bottom-placeholder token=\"";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 74, $this->source));
        echo "\">

  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/drupalet_arco/templates/pages/html--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 74,  125 => 72,  119 => 69,  114 => 67,  108 => 64,  93 => 52,  90 => 51,  88 => 48,  87 => 47,  86 => 46,  85 => 44,  84 => 43,  80 => 41,  74 => 38,  71 => 37,  69 => 36,  64 => 34,  60 => 33,  55 => 31,  51 => 30,  47 => 29,  42 => 27,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 */
#}
<!DOCTYPE html>
<html{{ html_attributes }}>
  <head> 
    <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <css-placeholder token=\"{{ placeholder_token|raw }}\">

    <js-placeholder token=\"{{ placeholder_token|raw }}\">
\t{{ links_google_fonts|raw }}

    {% if customize_css %}
      <style type=\"text/css\">
        {{ customize_css|raw }}
      </style>
    {% endif %}
  </head>

  {% set body_classes = [
    logged_in ? 'logged-in',
\t  'page-main',
    not root_path ? 'frontpage' : 'path-' ~ root_path|clean_class,
    node_type ? 'node--type-' ~ node_type|clean_class,
    node_id ? 'node-' ~ node_id|clean_class,
    ]
  %}

  <body {{ attributes.addClass(body_classes) }}>
    <div class=\"loading\">
      <div class=\"text-center middle\">
        <div class=\"lds-ellipsis\">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div>
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      {{ 'Skip to main content'|t }}
    </a>

    {{ page_top }}
    <div class=\"home-background\">
      {{ page }}
    </div>
    
    {{ page_bottom }}
\t
    <js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">

  </body>
</html>
", "themes/drupalet_arco/templates/pages/html--front.html.twig", "/var/www/html/themes/drupalet_arco/templates/pages/html--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 36, "set" => 43);
        static $filters = array("escape" => 27, "raw" => 29, "safe_join" => 30, "clean_class" => 46, "t" => 64);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'raw', 'safe_join', 'clean_class', 't'],
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
