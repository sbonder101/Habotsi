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

/* themes/drupalet_arco/templates/block/block--homevideoherobanner.html.twig */
class __TwigTemplate_c55733221e6c757c21220465f2aca3923807901f4e7f451ef7a799f4ea465f1b extends \Twig\Template
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
        echo "<header ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "home-page-video valign bg-img"], "method", false, false, true, 1), 1, $this->source), "html", null, true);
        echo " data-scroll-index=\"0\" data-overlay-dark=\"5\" data-stellar-background-ratio=\"0.5\"> 
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 4, $this->source), "html", null, true);
        echo "
\t\t</div>
\t</div>
</header>
";
    }

    public function getTemplateName()
    {
        return "themes/drupalet_arco/templates/block/block--homevideoherobanner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header {{ attributes.addClass(\"home-page-video valign bg-img\") }} data-scroll-index=\"0\" data-overlay-dark=\"5\" data-stellar-background-ratio=\"0.5\"> 
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t{{ content }}
\t\t</div>
\t</div>
</header>
", "themes/drupalet_arco/templates/block/block--homevideoherobanner.html.twig", "/var/www/html/themes/drupalet_arco/templates/block/block--homevideoherobanner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
