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

/* themes/drupalet_arco/templates/block/block--footerlogo.html.twig */
class __TwigTemplate_648a373f302129c6665f6d72a72d94ab76b8bf57ba7c9345eb90e5491160592c extends \Twig\Template
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
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    <div class=\"col-lg-4 col-md-6 mb-4 mb-lg-0\">
        <div class=\"col-md-7 mb-30\">
            <a href=\"/\">
                ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_logo", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "
            </a>
        </div>
        <div class=\"col-md-9 mb-60\">
            <p class=\"font-italic text-muted\">";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo " </p>
        </div>

         <div class=\"col-md-9\">
            <p class=\"font-italic text-muted\">";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_copywrite_text", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo " </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "themes/drupalet_arco/templates/block/block--footerlogo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  60 => 10,  53 => 6,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}

    <div class=\"col-lg-4 col-md-6 mb-4 mb-lg-0\">
        <div class=\"col-md-7 mb-30\">
            <a href=\"/\">
                {{ content.field_logo.0 }}
            </a>
        </div>
        <div class=\"col-md-9 mb-60\">
            <p class=\"font-italic text-muted\">{{ content.body }} </p>
        </div>

         <div class=\"col-md-9\">
            <p class=\"font-italic text-muted\">{{ content.field_copywrite_text }} </p>
        </div>
    </div>
{% endblock %}", "themes/drupalet_arco/templates/block/block--footerlogo.html.twig", "/var/www/html/themes/drupalet_arco/templates/block/block--footerlogo.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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
