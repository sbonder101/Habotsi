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

/* @drupalet_arco/footer_styles/footer-main.html.twig */
class __TwigTemplate_df0fb6ee451041b3167e04bb13d646d668d0f91a745de0813348286e05b161f8 extends \Twig\Template
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
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 4)) {
            // line 5
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 7
        echo "
      <div class=\"col-lg-3 col-md-6 mb-4 mb-lg-0\">
        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 9)) {
            // line 10
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 12
        echo "      </div>

      <div class=\"col-lg-3 col-md-6 mb-4 mb-lg-0\">
        ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 15)) {
            // line 16
            echo "          <h6 class=\"text-uppercase font-weight-bold mb-4\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("CONTACT US");
            echo "</h6>
          ";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 19
        echo "      </div>
      <div class=\"col-lg-2 col-md-6 mb-lg-0\">
          ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_forth", [], "any", false, false, true, 21)) {
            // line 22
            echo "            <h6 class=\"text-uppercase font-weight-bold mb-4\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("Connect");
            echo "</h6>
            ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_forth", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 25
        echo "
      
      </div>
    </div>
  </div>
    
</footer>";
    }

    public function getTemplateName()
    {
        return "@drupalet_arco/footer_styles/footer-main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 25,  92 => 23,  87 => 22,  85 => 21,  81 => 19,  76 => 17,  71 => 16,  69 => 15,  64 => 12,  58 => 10,  56 => 9,  52 => 7,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
  <div class=\"container\">
    <div class=\"row\">
      {% if page.footer_first %}
        {{ page.footer_first }}
      {% endif %}

      <div class=\"col-lg-3 col-md-6 mb-4 mb-lg-0\">
        {% if page.footer_second %}
          {{ page.footer_second }}
        {% endif %}
      </div>

      <div class=\"col-lg-3 col-md-6 mb-4 mb-lg-0\">
        {% if page.footer_third %}
          <h6 class=\"text-uppercase font-weight-bold mb-4\">{{'CONTACT US'}}</h6>
          {{ page.footer_third }}
        {% endif %}
      </div>
      <div class=\"col-lg-2 col-md-6 mb-lg-0\">
          {% if page.footer_forth %}
            <h6 class=\"text-uppercase font-weight-bold mb-4\">{{'Connect'}}</h6>
            {{ page.footer_forth }}
          {% endif %}

      
      </div>
    </div>
  </div>
    
</footer>", "@drupalet_arco/footer_styles/footer-main.html.twig", "/var/www/html/themes/drupalet_arco/templates/footer_styles/footer-main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("escape" => 5);
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
