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

/* themes/drupalet_arco/templates/header_styles/header.html.twig */
class __TwigTemplate_e8cf5eca520cc2f212b2551688ea2a8b3cb717985b783c69f4c56058a1b6d93c extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-lg\">
\t<div class=\"container\"> 
\t\t
\t\t<!-- Logo --> 
\t\t<!--<a class=\"logo\" href=\"#\"> <img src=\"img/logo-light.png\" alt=\"logo\"> </a>-->
\t\t";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 6)) {
            echo " 
\t\t\t";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "
\t\t";
        }
        // line 9
        echo "\t\t
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span class=\"icon-bar\"><i class=\"fas fa-bars\"></i></span> </button>
\t\t
\t\t<!-- navbar links -->
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 14)) {
            // line 15
            echo "\t\t\t  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "
\t\t\t";
        }
        // line 17
        echo "\t\t\t
\t\t</div>
\t</div>
</nav>";
    }

    public function getTemplateName()
    {
        return "themes/drupalet_arco/templates/header_styles/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  64 => 15,  62 => 14,  55 => 9,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg\">
\t<div class=\"container\"> 
\t\t
\t\t<!-- Logo --> 
\t\t<!--<a class=\"logo\" href=\"#\"> <img src=\"img/logo-light.png\" alt=\"logo\"> </a>-->
\t\t{% if page.branding %} 
\t\t\t{{ page.branding }}
\t\t{% endif %}
\t\t
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span class=\"icon-bar\"><i class=\"fas fa-bars\"></i></span> </button>
\t\t
\t\t<!-- navbar links -->
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t{% if page.main_menu %}
\t\t\t  {{ page.main_menu }}
\t\t\t{% endif %}
\t\t\t
\t\t</div>
\t</div>
</nav>", "themes/drupalet_arco/templates/header_styles/header.html.twig", "/var/www/html/themes/drupalet_arco/templates/header_styles/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
        static $filters = array("escape" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
