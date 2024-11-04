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

/* catalog/view/template/checkout/checkout.twig */
class __TwigTemplate_7d0b396d3a7a6fc20e7d6051e640fb57c5f8d27ea00d7d30f8927489a61783cf extends Template
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
        yield ($context["header"] ?? null);
        yield "
<div id=\"checkout-checkout\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  <div class=\"row\">";
        // line 8
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 9
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <div class=\"row\">
        ";
        // line 12
        if (((($context["register"] ?? null) || ($context["payment_address"] ?? null)) || ($context["shipping_address"] ?? null))) {
            // line 13
            yield "          <div class=\"col-md-7 mb-3\">
            ";
            // line 14
            if (($context["register"] ?? null)) {
                // line 15
                yield "              <div id=\"checkout-register\">";
                yield ($context["register"] ?? null);
                yield "</div>
            ";
            }
            // line 17
            yield "            ";
            if (($context["payment_address"] ?? null)) {
                // line 18
                yield "              <div id=\"checkout-payment-address\">";
                yield ($context["payment_address"] ?? null);
                yield "</div>
            ";
            }
            // line 20
            yield "            ";
            if (($context["shipping_address"] ?? null)) {
                // line 21
                yield "              <div id=\"checkout-shipping-address\">";
                yield ($context["shipping_address"] ?? null);
                yield "</div>
            ";
            }
            // line 23
            yield "          </div>
        ";
        }
        // line 25
        yield "        <div class=\"col\">
          ";
        // line 26
        if (($context["shipping_method"] ?? null)) {
            // line 27
            yield "            <div id=\"checkout-shipping-method\" class=\"mb-3\">";
            yield ($context["shipping_method"] ?? null);
            yield "</div>
          ";
        }
        // line 29
        yield "          <div id=\"checkout-payment-method\" class=\"mb-4\">";
        yield ($context["payment_method"] ?? null);
        yield "</div>
          <div id=\"checkout-confirm\">";
        // line 30
        yield ($context["confirm"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
    ";
        // line 34
        yield ($context["content_bottom"] ?? null);
        yield "
  </div>
  ";
        // line 36
        yield ($context["column_right"] ?? null);
        yield "
</div>
";
        // line 38
        yield ($context["footer"] ?? null);
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/view/template/checkout/checkout.twig";
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
        return array (  143 => 38,  138 => 36,  133 => 34,  126 => 30,  121 => 29,  115 => 27,  113 => 26,  110 => 25,  106 => 23,  100 => 21,  97 => 20,  91 => 18,  88 => 17,  82 => 15,  80 => 14,  77 => 13,  75 => 12,  70 => 10,  66 => 9,  62 => 8,  59 => 7,  48 => 5,  44 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"checkout-checkout\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      <div class=\"row\">
        {% if register or payment_address or shipping_address %}
          <div class=\"col-md-7 mb-3\">
            {% if register %}
              <div id=\"checkout-register\">{{ register }}</div>
            {% endif %}
            {% if payment_address %}
              <div id=\"checkout-payment-address\">{{ payment_address }}</div>
            {% endif %}
            {% if shipping_address %}
              <div id=\"checkout-shipping-address\">{{ shipping_address }}</div>
            {% endif %}
          </div>
        {% endif %}
        <div class=\"col\">
          {% if shipping_method %}
            <div id=\"checkout-shipping-method\" class=\"mb-3\">{{ shipping_method }}</div>
          {% endif %}
          <div id=\"checkout-payment-method\" class=\"mb-4\">{{ payment_method }}</div>
          <div id=\"checkout-confirm\">{{ confirm }}</div>
        </div>
      </div>
    </div>
    {{ content_bottom }}
  </div>
  {{ column_right }}
</div>
{{ footer }}
", "catalog/view/template/checkout/checkout.twig", "/var/www/html/opencart/upload/catalog/view/template/checkout/checkout.twig");
    }
}