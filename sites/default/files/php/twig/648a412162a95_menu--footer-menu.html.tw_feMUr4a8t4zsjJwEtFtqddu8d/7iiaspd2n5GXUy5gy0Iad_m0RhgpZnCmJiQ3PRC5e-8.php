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

/* themes/drupalet_arco/templates/navigation/menu--footer-menu.html.twig */
class __TwigTemplate_dcaddfa464145c0a05577344b9c930fb73aebd81f4826fdfe8a3fa912f1deecf extends \Twig\Template
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
        echo "
";
        // line 2
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 3
        echo "

";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 5, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 7
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 8
            echo "  ";
            $macros["menus"] = $this;
            // line 9
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 10
                echo "   
    ";
                // line 11
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 12
                    echo "\t\t";
                    $context["menu_li"] = "nav-item";
                    // line 13
                    echo "\t\t";
                    $context["menu_a"] = "nav-link";
                    // line 14
                    echo "\t  <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "navbar-nav ml-auto footer-menu"], "method", false, false, true, 14), 14, $this->source), "html", null, true);
                    echo " id=\"main-menu\">
    ";
                } elseif ((                // line 15
($context["menu_level"] ?? null) == 1)) {
                    // line 16
                    echo "\t\t";
                    $context["menu_li"] = "nav-dropdown-item";
                    // line 17
                    echo "\t\t";
                    $context["menu_a"] = "nav-dropdown-link";
                    // line 18
                    echo "      <ul class=\"rd-navbar-dropdown\">
\t ";
                } else {
                    // line 20
                    echo "\t \t";
                    $context["menu_li"] = "nav-subdropdown-item";
                    // line 21
                    echo "\t\t";
                    $context["menu_a"] = "nav-subdropdown-link";
                    // line 22
                    echo "\t\t <ul class=\"rd-navbar-dropdown\">
    ";
                }
                // line 24
                echo "\t
\t
\t
\t
\t\t
  ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 30
                    echo "\t";
                    $context["a"] = "";
                    // line 31
                    echo "\t";
                    if ((($context["menu_level"] ?? null) == 1)) {
                        echo "\t
\t\t";
                        // line 32
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 32) == 1)) {
                            // line 33
                            echo "\t\t\t";
                            $context["a"] = "dropdown-submenu";
                            // line 34
                            echo "\t\t";
                        } else {
                            // line 35
                            echo "\t\t\t";
                            $context["a"] = "";
                            // line 36
                            echo "\t\t";
                        }
                        // line 37
                        echo "\t";
                    }
                    // line 38
                    echo "\t
      ";
                    // line 40
                    $context["classes"] = [0 => "menu-item", 1 => "nav-item", 2 => "rd-navbar--has-dropdown", 3 => "rd-navbar-submenu", 4 =>                     // line 45
($context["menu_li"] ?? null), 5 => ((twig_get_attribute($this->env, $this->source,                     // line 46
$context["item"], "is_expanded", [], "any", false, false, true, 46)) ? ("menu-item--expanded dropdown") : ("")), 6 => ((twig_get_attribute($this->env, $this->source,                     // line 47
$context["item"], "is_collapsed", [], "any", false, false, true, 47)) ? ("menu-item--collapsed") : ("")), 7 =>                     // line 48
($context["a"] ?? null), 8 => ((twig_get_attribute($this->env, $this->source,                     // line 49
$context["item"], "in_active_trail", [], "any", false, false, true, 49)) ? ("menu-item--active-trail") : ("")), 9 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 50
$context["item"], "attributes", [], "any", false, false, true, 50), "drp_class", [], "any", false, false, true, 50)];
                    // line 53
                    echo "      
\t  <li ";
                    // line 54
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 54), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 54, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 55
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 55), 55, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 55), 55, $this->source), ["class" => [0 => ($context["menu_a"] ?? null)]]), "html", null, true);
                    echo "
        ";
                    // line 56
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 56)) {
                        // line 57
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 57), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 57, $context, $this->getSourceContext()));
                        echo "

        ";
                    }
                    // line 60
                    echo "
      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/drupalet_arco/templates/navigation/menu--footer-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 63,  183 => 60,  176 => 57,  174 => 56,  170 => 55,  164 => 54,  161 => 53,  159 => 50,  158 => 49,  157 => 48,  156 => 47,  155 => 46,  154 => 45,  153 => 40,  150 => 38,  147 => 37,  144 => 36,  141 => 35,  138 => 34,  135 => 33,  133 => 32,  128 => 31,  125 => 30,  121 => 29,  114 => 24,  110 => 22,  107 => 21,  104 => 20,  100 => 18,  97 => 17,  94 => 16,  92 => 15,  87 => 14,  84 => 13,  81 => 12,  79 => 11,  76 => 10,  73 => 9,  70 => 8,  55 => 7,  48 => 5,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% import _self as menus %}


{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
   
    {% if menu_level == 0 %}
\t\t{% set menu_li = 'nav-item' %}
\t\t{% set menu_a = 'nav-link' %}
\t  <ul{{ attributes.addClass('navbar-nav ml-auto footer-menu') }} id=\"main-menu\">
    {% elseif menu_level == 1 %}
\t\t{% set menu_li = 'nav-dropdown-item' %}
\t\t{% set menu_a = 'nav-dropdown-link' %}
      <ul class=\"rd-navbar-dropdown\">
\t {% else %}
\t \t{% set menu_li = 'nav-subdropdown-item' %}
\t\t{% set menu_a = 'nav-subdropdown-link' %}
\t\t <ul class=\"rd-navbar-dropdown\">
    {% endif %}
\t
\t
\t
\t
\t\t
  {% for item in items %}
\t{% set a = '' %}
\t{% if menu_level == 1 %}\t
\t\t{% if item.is_expanded == 1 %}
\t\t\t{% set a = 'dropdown-submenu' %}
\t\t{% else %}
\t\t\t{% set a = '' %}
\t\t{% endif %}
\t{% endif %}
\t
      {%
        set classes = [
          'menu-item',
          'nav-item',
          'rd-navbar--has-dropdown',
          'rd-navbar-submenu',
\t\t      menu_li,
          item.is_expanded ? 'menu-item--expanded dropdown',
          item.is_collapsed ? 'menu-item--collapsed',
\t\t  a,
          item.in_active_trail ? 'menu-item--active-trail',
          item.attributes.drp_class
        ]
      %}
      
\t  <li {{ item.attributes.addClass(classes) }} {{ menu_level }}>
        {{ link(item.title, item.url, { 'class':[menu_a]}) }}
        {% if item.below %}
          {{ menus.menu_links(item.below, attributes, menu_level + 1) }}

        {% endif %}

      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
", "themes/drupalet_arco/templates/navigation/menu--footer-menu.html.twig", "/var/www/html/themes/drupalet_arco/templates/navigation/menu--footer-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 2, "macro" => 7, "if" => 9, "set" => 12, "for" => 29);
        static $filters = array("escape" => 14);
        static $functions = array("link" => 55);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['escape'],
                ['link']
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
