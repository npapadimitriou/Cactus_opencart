<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/opencart/catalog/view/template/module/category.twig */
class __TwigTemplate_f489879b8b2801cb6aa94a57b437688e7883278d22617f1d9b870cecbf190896 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"list-group mb-3\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 3) == ($context["category_id"] ?? null))) {
                // line 4
                yield "      <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 4);
                yield "\" class=\"list-group-item active\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 4);
                yield "</a>
      ";
                // line 5
                if (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 5)) {
                    // line 6
                    yield "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 6));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 7
                        yield "          ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 7) == ($context["child_id"] ?? null))) {
                            // line 8
                            yield "            <a href=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 8);
                            yield "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 8);
                            yield "</a>
          ";
                        } else {
                            // line 10
                            yield "            <a href=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 10);
                            yield "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 10);
                            yield "</a>
          ";
                        }
                        // line 12
                        yield "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    yield "      ";
                }
                // line 14
                yield "    ";
            } else {
                yield " <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 14);
                yield "\" class=\"list-group-item\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                yield "</a>
    ";
            }
            // line 16
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/module/category.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  106 => 17,  100 => 16,  90 => 14,  87 => 13,  81 => 12,  73 => 10,  65 => 8,  62 => 7,  57 => 6,  55 => 5,  48 => 4,  45 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"list-group mb-3\">
  {% for category in categories %}
    {% if category.category_id == category_id %}
      <a href=\"{{ category.href }}\" class=\"list-group-item active\">{{ category.name }}</a>
      {% if category.children %}
        {% for child in category.children %}
          {% if child.category_id == child_id %}
            <a href=\"{{ child.href }}\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>
          {% else %}
            <a href=\"{{ child.href }}\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>
          {% endif %}
        {% endfor %}
      {% endif %}
    {% else %} <a href=\"{{ category.href }}\" class=\"list-group-item\">{{ category.name }}</a>
    {% endif %}
  {% endfor %}
</div>
", "extension/opencart/catalog/view/template/module/category.twig", "/var/www/html/opencart/upload/extension/opencart/catalog/view/template/module/category.twig");
    }
}
