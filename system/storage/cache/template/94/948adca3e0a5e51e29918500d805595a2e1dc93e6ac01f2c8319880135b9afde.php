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

/* catalog/view/template/common/cart.twig */
class __TwigTemplate_b6b40494ec8fa5598539692a38376676c7a3b65a3f8adb41d4e8cde13d7589b8 extends Template
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
        yield "<div class=\"dropdown d-grid\">
  <button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-lg btn-inverse btn-block dropdown-toggle\"><i class=\"fa-solid fa-cart-shopping\"></i> ";
        // line 2
        yield ($context["text_items"] ?? null);
        yield "</button>
  <ul class=\"dropdown-menu dropdown-menu-end p-2\">
    ";
        // line 4
        if (($context["products"] ?? null)) {
            // line 5
            yield "      <li>
        <table class=\"table table-striped mb-2\">
          ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 8
                yield "            <tr>
              <td class=\"text-center\">";
                // line 9
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9)) {
                    yield "<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 9);
                    yield "\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                    yield "\" class=\"img-thumbnail\"/></a>";
                }
                yield "</td>
              <td class=\"text-start\"><a href=\"";
                // line 10
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 10);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
                yield "</a>
                ";
                // line 11
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 11)) {
                    // line 12
                    yield "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 12));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 13
                        yield "                    <br/>
                    <small> - ";
                        // line 14
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 14);
                        yield ": ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 14);
                        yield "</small>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    yield "                ";
                }
                // line 17
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 17)) {
                    // line 18
                    yield "                  <br/>
                  <small> - ";
                    // line 19
                    yield ($context["text_points"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 19);
                    yield "</small>
                ";
                }
                // line 21
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 21)) {
                    // line 22
                    yield "                  <br/>
                  <small> - ";
                    // line 23
                    yield ($context["text_subscription"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 23);
                    yield "</small>
                ";
                }
                // line 24
                yield "</td>
              <td class=\"text-end\">x ";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 25);
                yield "</td>
              <td class=\"text-end\">";
                // line 26
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 26);
                yield "</td>
              <td class=\"text-end\">
                <form action=\"";
                // line 28
                yield ($context["remove"] ?? null);
                yield "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                yield ($context["list"] ?? null);
                yield "\" data-oc-target=\"#header-cart\">
                  <input type=\"hidden\" name=\"key\" value=\"";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 29);
                yield "\">
                  <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
                // line 30
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
                </form>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "        </table>
        <div>
          <table class=\"table table-sm table-bordered mb-2\">
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 39
                yield "              <tr>
                <td class=\"text-end\"><strong>";
                // line 40
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 40);
                yield "</strong></td>
                <td class=\"text-end\">";
                // line 41
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 41);
                yield "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "          </table>
          <p class=\"text-end\"><a href=\"";
            // line 45
            yield ($context["cart"] ?? null);
            yield "\"><strong><i class=\"fa-solid fa-cart-shopping\"></i> ";
            yield ($context["text_cart"] ?? null);
            yield "</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
            yield ($context["checkout"] ?? null);
            yield "\"><strong><i class=\"fa-solid fa-share\"></i> ";
            yield ($context["text_checkout"] ?? null);
            yield "</strong></a></p>
        </div>
      </li>
    ";
        } else {
            // line 49
            yield "      <li class=\"text-center p-4\">";
            yield ($context["text_no_results"] ?? null);
            yield "</li>
    ";
        }
        // line 51
        yield "  </ul>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/view/template/common/cart.twig";
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
        return array (  208 => 51,  202 => 49,  189 => 45,  186 => 44,  177 => 41,  173 => 40,  170 => 39,  166 => 38,  161 => 35,  150 => 30,  146 => 29,  140 => 28,  135 => 26,  131 => 25,  128 => 24,  121 => 23,  118 => 22,  115 => 21,  108 => 19,  105 => 18,  102 => 17,  99 => 16,  89 => 14,  86 => 13,  81 => 12,  79 => 11,  73 => 10,  59 => 9,  56 => 8,  52 => 7,  48 => 5,  46 => 4,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"dropdown d-grid\">
  <button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-lg btn-inverse btn-block dropdown-toggle\"><i class=\"fa-solid fa-cart-shopping\"></i> {{ text_items }}</button>
  <ul class=\"dropdown-menu dropdown-menu-end p-2\">
    {% if products %}
      <li>
        <table class=\"table table-striped mb-2\">
          {% for product in products %}
            <tr>
              <td class=\"text-center\">{% if product.thumb %}<a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" class=\"img-thumbnail\"/></a>{% endif %}</td>
              <td class=\"text-start\"><a href=\"{{ product.href }}\">{{ product.name }}</a>
                {% if product.option %}
                  {% for option in product.option %}
                    <br/>
                    <small> - {{ option.name }}: {{ option.value }}</small>
                  {% endfor %}
                {% endif %}
                {% if product.reward %}
                  <br/>
                  <small> - {{ text_points }}: {{ product.reward }}</small>
                {% endif %}
                {% if product.subscription %}
                  <br/>
                  <small> - {{ text_subscription }}: {{ product.subscription }}</small>
                {% endif %}</td>
              <td class=\"text-end\">x {{ product.quantity }}</td>
              <td class=\"text-end\">{{ product.total }}</td>
              <td class=\"text-end\">
                <form action=\"{{ remove }}\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ list }}\" data-oc-target=\"#header-cart\">
                  <input type=\"hidden\" name=\"key\" value=\"{{ product.cart_id }}\">
                  <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
                </form>
              </td>
            </tr>
          {% endfor %}
        </table>
        <div>
          <table class=\"table table-sm table-bordered mb-2\">
            {% for total in totals %}
              <tr>
                <td class=\"text-end\"><strong>{{ total.title }}</strong></td>
                <td class=\"text-end\">{{ total.text }}</td>
              </tr>
            {% endfor %}
          </table>
          <p class=\"text-end\"><a href=\"{{ cart }}\"><strong><i class=\"fa-solid fa-cart-shopping\"></i> {{ text_cart }}</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"{{ checkout }}\"><strong><i class=\"fa-solid fa-share\"></i> {{ text_checkout }}</strong></a></p>
        </div>
      </li>
    {% else %}
      <li class=\"text-center p-4\">{{ text_no_results }}</li>
    {% endif %}
  </ul>
</div>", "catalog/view/template/common/cart.twig", "/var/www/html/opencart/upload/catalog/view/template/common/cart.twig");
    }
}
