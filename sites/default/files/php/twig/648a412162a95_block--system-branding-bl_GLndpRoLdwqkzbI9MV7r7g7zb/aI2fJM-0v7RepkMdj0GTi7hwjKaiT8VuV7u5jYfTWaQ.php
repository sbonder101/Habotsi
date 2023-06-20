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

/* themes/drupalet_arco/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_999f7079a6b6b923ec64747aca0d285fc97ba16db50d0b4bbf4d48c73df4b395 extends \Twig\Template
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
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "site-branding"], "method", false, false, true, 1);
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "  ";
        if (($context["site_logo"] ?? null)) {
            // line 4
            echo "  \t<a class=\"logo\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\"> <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 4, $this->source), [".svg" => ".png"]), "html", null, true);
            echo "\" alt=\"logo\" class=\"logo-b\" data-logo-light=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 4, $this->source), [".svg" => ".png"]), "html", null, true);
            echo "\" data-logo-dark=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 4, $this->source), [".svg" => "-dark.png"]), "html", null, true);
            echo "\"> </a>

";
        }
        // line 7
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/drupalet_arco/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 7,  52 => 4,  49 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set attributes = attributes.addClass('site-branding') %}
{% block content %}
  {% if site_logo %}
  \t<a class=\"logo\" href=\"{{ path('<front>') }}\"> <img src=\"{{ site_logo|replace({'.svg': '.png'}) }}\" alt=\"logo\" class=\"logo-b\" data-logo-light=\"{{ site_logo|replace({'.svg': '.png'}) }}\" data-logo-dark=\"{{ site_logo|replace({'.svg': '-dark.png'}) }}\"> </a>

{% endif %}

{% endblock %}
", "themes/drupalet_arco/templates/block/block--system-branding-block.html.twig", "/var/www/html/themes/drupalet_arco/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "block" => 2, "if" => 3);
        static $filters = array("escape" => 4, "replace" => 4);
        static $functions = array("path" => 4);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape', 'replace'],
                ['path']
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
