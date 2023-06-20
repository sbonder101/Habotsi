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

/* themes/drupalet_arco/templates/views/views-view--home-slider--block-home-page-slider-filter.html.twig */
class __TwigTemplate_534651e71606fd8cf0be96641f3f6456b31ba34f85878e66157a0ae53bb50f77 extends \Twig\Template
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
        // line 2
        $context["classes"] = [0 => ((        // line 3
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 3, $this->source))) : (""))];
        // line 6
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 6), 6, $this->source), "html", null, true);
        echo ">
<!-- Heasder -->

 ";
        // line 9
        if (($context["header"] ?? null)) {
            // line 10
            echo "    <div class=\"hero section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
          <div class=\"intro offset-lg-1 col-lg-10 text-center\">
          ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 14, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>  
    </div>
  ";
        }
        // line 20
        echo "
<!-- filter links -->
  <div class=\"filtering text-center mb-30 col-sm-12\">
    <div class=\"filter\"> 
      ";
        // line 24
        if (($context["exposed"] ?? null)) {
            // line 25
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 25, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 27
        echo "    </div>
  </div>

  <!-- gallery -->
  <div class=\"text-center home-gallery full-width home-background\"> 
    ";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 32, $this->source), "html", null, true);
        echo "
    ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 33, $this->source), "html", null, true);
        echo "
    ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 34, $this->source), "html", null, true);
        echo "
    ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 35, $this->source), "html", null, true);
        echo "
  </div>
  ";
        // line 37
        if (($context["footer"] ?? null)) {
            // line 38
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 38, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 40
        echo "
  </div>

";
    }

    public function getTemplateName()
    {
        return "themes/drupalet_arco/templates/views/views-view--home-slider--block-home-page-slider-filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  106 => 38,  104 => 37,  99 => 35,  95 => 34,  91 => 33,  87 => 32,  80 => 27,  74 => 25,  72 => 24,  66 => 20,  57 => 14,  51 => 10,  49 => 9,  42 => 6,  40 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{%
\tset classes = [
\t  dom_id ? 'js-view-dom-id-' ~ dom_id,
\t]
  %}
<div{{ attributes.addClass(classes) }}>
<!-- Heasder -->

 {% if header %}
    <div class=\"hero section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
          <div class=\"intro offset-lg-1 col-lg-10 text-center\">
          {{ header }}
          </div>
        </div>
      </div>  
    </div>
  {% endif %}

<!-- filter links -->
  <div class=\"filtering text-center mb-30 col-sm-12\">
    <div class=\"filter\"> 
      {% if exposed %}
        {{ exposed }}
      {% endif %}
    </div>
  </div>

  <!-- gallery -->
  <div class=\"text-center home-gallery full-width home-background\"> 
    {{ rows }}
    {{ empty }}
    {{ pager }}
    {{ more }}
  </div>
  {% if footer %}
    {{ footer }}
  {% endif %}

  </div>

", "themes/drupalet_arco/templates/views/views-view--home-slider--block-home-page-slider-filter.html.twig", "/var/www/html/themes/drupalet_arco/templates/views/views-view--home-slider--block-home-page-slider-filter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 9);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
