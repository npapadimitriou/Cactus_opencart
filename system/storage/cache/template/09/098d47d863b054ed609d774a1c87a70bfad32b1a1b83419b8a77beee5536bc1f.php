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

/* catalog/view/template/checkout/confirm.twig */
class __TwigTemplate_b3df8d5c3c85072683ca12c63a06ba6a7fd9c761039e3d3a4494c4dbc705d8db extends Template
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
        yield "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-start\">";
        // line 5
        yield ($context["column_name"] ?? null);
        yield "</td>
        <td class=\"text-end\">";
        // line 6
        yield ($context["column_total"] ?? null);
        yield "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            yield "        <tr>
          <td class=\"text-start\">";
            // line 12
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 12);
            yield "x <a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
            yield "</a>
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 14
                yield "              <br/>
              <small> - ";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 15);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 15);
                yield "</small>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 17)) {
                // line 18
                yield "              <br/>
              <small> - ";
                // line 19
                yield ($context["text_points"] ?? null);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 19);
                yield "</small>
            ";
            }
            // line 21
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 21)) {
                // line 22
                yield "              <br/>
              <small> - ";
                // line 23
                yield ($context["text_subscription"] ?? null);
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 23);
                yield "</small>
            ";
            }
            // line 24
            yield "</td>
          <td class=\"text-end\">";
            // line 25
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 25);
            yield "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "    </tbody>
    <tfoot>
      ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 31
            yield "        <tr>
          <td class=\"text-end\"><strong>";
            // line 32
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 32);
            yield "</strong></td>
          <td class=\"text-end\">";
            // line 33
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 33);
            yield "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "    </tfoot>
  </table>
</div>
<div id=\"checkout-payment\">
  ";
        // line 40
        if (($context["payment"] ?? null)) {
            // line 41
            yield "    ";
            yield ($context["payment"] ?? null);
            yield "
  ";
        } else {
            // line 43
            yield "    <div class=\"text-end\"><button type=\"button\" class=\"btn btn-primary\" disabled>";
            yield ($context["button_confirm"] ?? null);
            yield "</button></div>
  ";
        }
        // line 45
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/view/template/checkout/confirm.twig";
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
        return array (  169 => 45,  163 => 43,  157 => 41,  155 => 40,  149 => 36,  140 => 33,  136 => 32,  133 => 31,  129 => 30,  125 => 28,  116 => 25,  113 => 24,  106 => 23,  103 => 22,  100 => 21,  93 => 19,  90 => 18,  87 => 17,  77 => 15,  74 => 14,  70 => 13,  62 => 12,  59 => 11,  55 => 10,  48 => 6,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-start\">{{ column_name }}</td>
        <td class=\"text-end\">{{ column_total }}</td>
      </tr>
    </thead>
    <tbody>
      {% for product in products %}
        <tr>
          <td class=\"text-start\">{{ product.quantity }}x <a href=\"{{ product.href }}\">{{ product.name }}</a>
            {% for option in product.option %}
              <br/>
              <small> - {{ option.name }}: {{ option.value }}</small>
            {% endfor %}
            {% if product.reward %}
              <br/>
              <small> - {{ text_points }}: {{ product.reward }}</small>
            {% endif %}
            {% if product.subscription %}
              <br/>
              <small> - {{ text_subscription }} {{ product.subscription }}</small>
            {% endif %}</td>
          <td class=\"text-end\">{{ product.total }}</td>
        </tr>
      {% endfor %}
    </tbody>
    <tfoot>
      {% for total in totals %}
        <tr>
          <td class=\"text-end\"><strong>{{ total.title }}</strong></td>
          <td class=\"text-end\">{{ total.text }}</td>
        </tr>
      {% endfor %}
    </tfoot>
  </table>
</div>
<div id=\"checkout-payment\">
  {% if payment %}
    {{ payment }}
  {% else %}
    <div class=\"text-end\"><button type=\"button\" class=\"btn btn-primary\" disabled>{{ button_confirm }}</button></div>
  {% endif %}
</div>
", "catalog/view/template/checkout/confirm.twig", "/var/www/html/opencart/upload/catalog/view/template/checkout/confirm.twig");
    }
}
