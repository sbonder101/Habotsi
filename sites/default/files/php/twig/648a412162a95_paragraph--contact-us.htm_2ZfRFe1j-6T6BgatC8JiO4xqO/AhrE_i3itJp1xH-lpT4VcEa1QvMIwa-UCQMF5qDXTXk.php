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

/* themes/drupalet_arco/templates/paragraphs/paragraph--contact-us.html.twig */
class __TwigTemplate_cd7a881194dba46668a1a7d385d9323635923c22dc4023f988ce52d373c2c8dd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["classes"] = [0 => "paragraph", 1 => "container", 2 => "contact-us-padding", 3 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 46
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 46), 46, $this->source))), 4 => ((        // line 47
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 47, $this->source)))) : ("")), 5 => (( !twig_get_attribute($this->env, $this->source,         // line 48
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 48)) ? ("paragraph--unpublished") : (""))];
        // line 51
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "
  <div";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 53), 53, $this->source), "html", null, true);
        echo ">
    ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "</div>
";
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "    <div class=\"col-md-12 text-center\">
      <div class=\"row\">
        <div class=\"w-50 mx-auto\">
          <h3>";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_header", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "</h3>
          <p class=\"lead mb-50 mt-50\">";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_body", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "</p>
         
          <a class=\"btn btn-lg btn-primary contact-us-button\" href=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_button", [], "any", false, false, true, 61)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 61, $this->source)), "html", null, true);
        echo "\" role=\"button\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_button", [], "any", false, false, true, 61)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#title"] ?? null) : null), 61, $this->source)), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/drupalet_arco/templates/paragraphs/paragraph--contact-us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 61,  80 => 59,  76 => 58,  71 => 55,  67 => 54,  62 => 66,  60 => 54,  56 => 53,  53 => 52,  46 => 51,  44 => 48,  43 => 47,  42 => 46,  41 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'paragraph',
    'container',
    'contact-us-padding',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%}
{% block paragraph %}

  <div{{ attributes.addClass(classes) }}>
    {% block content %}
    <div class=\"col-md-12 text-center\">
      <div class=\"row\">
        <div class=\"w-50 mx-auto\">
          <h3>{{ content.field_header }}</h3>
          <p class=\"lead mb-50 mt-50\">{{ content.field_body }}</p>
         
          <a class=\"btn btn-lg btn-primary contact-us-button\" href=\"{{ content.field_button[0]['#url']|render }}\" role=\"button\">{{ content.field_button[0]['#title']|render }}</a>
        </div>
      </div>
    </div>
    {% endblock %}
</div>
{% endblock paragraph %}
", "themes/drupalet_arco/templates/paragraphs/paragraph--contact-us.html.twig", "/var/www/html/themes/drupalet_arco/templates/paragraphs/paragraph--contact-us.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 51);
        static $filters = array("clean_class" => 46, "escape" => 53, "render" => 61);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape', 'render'],
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
