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

/* catalog/view/template/checkout/cart_list.twig */
class __TwigTemplate_1e9f3e15bec12de776856dfb08dcaa8065f3e6561f11d2301babb02f9dde5306 extends Template
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
        if (($context["products"] ?? null)) {
            // line 2
            yield "  ";
            if (($context["error_warning"] ?? null)) {
                // line 3
                yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield ($context["error_warning"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 5
            yield "
  ";
            // line 6
            if (($context["error_stock"] ?? null)) {
                // line 7
                yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield ($context["error_stock"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 9
            yield "
  ";
            // line 10
            if (($context["success"] ?? null)) {
                // line 11
                yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
                yield ($context["success"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 13
            yield "
  ";
            // line 14
            if (($context["attention"] ?? null)) {
                // line 15
                yield "    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> ";
                yield ($context["attention"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 17
            yield "
  <h1>";
            // line 18
            yield ($context["heading_title"] ?? null);
            if (($context["weight"] ?? null)) {
                yield " (";
                yield ($context["weight"] ?? null);
                yield ")";
            }
            yield "</h1>
  <div id=\"cart\" class=\"table-responsive\">
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td class=\"text-center\">";
            // line 23
            yield ($context["column_image"] ?? null);
            yield "</td>
          <td class=\"text-start\">";
            // line 24
            yield ($context["column_name"] ?? null);
            yield "</td>
          <td class=\"text-start\">";
            // line 25
            yield ($context["column_model"] ?? null);
            yield "</td>
          <td class=\"text-start\">";
            // line 26
            yield ($context["column_quantity"] ?? null);
            yield "</td>
          <td class=\"text-end\">";
            // line 27
            yield ($context["column_price"] ?? null);
            yield "</td>
          <td class=\"text-end\">";
            // line 28
            yield ($context["column_total"] ?? null);
            yield "</td>
        </tr>
      </thead>
      <tbody>

        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 34
                yield "          <tr>
            <td class=\"text-center\">";
                // line 35
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 35)) {
                    yield "<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 35);
                    yield "\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 35);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 35);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 35);
                    yield "\" class=\"img-thumbnail\"/></a>";
                }
                yield "</td>
            <td class=\"text-start text-wrap\"><a href=\"";
                // line 36
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 36);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36);
                yield "</a>";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 36)) {
                    yield " <span class=\"text-danger\">***</span>";
                }
                // line 37
                yield "
              ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 39
                    yield "                <br/>
                <small> - ";
                    // line 40
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 40);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 40);
                    yield "</small>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                yield "
              ";
                // line 43
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 43)) {
                    // line 44
                    yield "                <br/>
                <small> - ";
                    // line 45
                    yield ($context["text_points"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 45);
                    yield "</small>
              ";
                }
                // line 47
                yield "
              ";
                // line 48
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 48)) {
                    // line 49
                    yield "                <br/>
                <small> - ";
                    // line 50
                    yield ($context["text_subscription"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 50);
                    yield "</small>
              ";
                }
                // line 52
                yield "
            </td>
            <td class=\"text-start\">";
                // line 54
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 54);
                yield "</td>
            <td class=\"text-start\">
              <form method=\"post\" data-oc-target=\"#shopping-cart\">
                <div class=\"input-group\">
                  <input type=\"text\" name=\"quantity\" value=\"";
                // line 58
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 58);
                yield "\" size=\"1\" class=\"form-control";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 58)) {
                    yield " is-invalid";
                }
                yield "\"/>
                  <input type=\"hidden\" name=\"key\" value=\"";
                // line 59
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 59);
                yield "\"/>
                  <button type=\"submit\" formaction=\"";
                // line 60
                yield ($context["edit"] ?? null);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_update"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
                  <a href=\"";
                // line 61
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 61);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></a>
                </div>
              </form>

              ";
                // line 65
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 65)) {
                    // line 66
                    yield "                <small class=\"invalid-feedback d-block\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 66);
                    yield "</small>
              ";
                }
                // line 68
                yield "
            </td>
            <td class=\"text-end\">";
                // line 70
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 70);
                yield "</td>
            <td class=\"text-end\">";
                // line 71
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 71);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "      </tbody>
      <tfoot id=\"checkout-total\">
        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 77
                yield "          <tr>
            <td colspan=\"5\" class=\"text-end\"><strong>";
                // line 78
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 78);
                yield "</strong></td>
            <td class=\"text-end\">";
                // line 79
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 79);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            yield "      </tfoot>
    </table>
  </div>

  ";
            // line 86
            if (($context["modules"] ?? null)) {
                // line 87
                yield "    <h2>";
                yield ($context["text_next"] ?? null);
                yield "</h2>
    <p>";
                // line 88
                yield ($context["text_next_choice"] ?? null);
                yield "</p>
    <div id=\"accordion\" class=\"accordion\">
      ";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["modules"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 91
                    yield "        ";
                    yield $context["module"];
                    yield "
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                yield "    </div>
  ";
            }
            // line 95
            yield "
  <br/>
  <div class=\"row\">
    <div class=\"col\"><a href=\"";
            // line 98
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-light\">";
            yield ($context["button_shopping"] ?? null);
            yield "</a></div>
    <div class=\"col text-end\"><a href=\"";
            // line 99
            yield ($context["checkout"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_checkout"] ?? null);
            yield "</a></div>
  </div>
";
        } else {
            // line 102
            yield "  <h1>";
            yield ($context["heading_title"] ?? null);
            yield "</h1>
  <p>";
            // line 103
            yield ($context["text_no_results"] ?? null);
            yield "</p>
  <div class=\"text-end\"><a href=\"";
            // line 104
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/view/template/checkout/cart_list.twig";
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
        return array (  355 => 104,  351 => 103,  346 => 102,  338 => 99,  332 => 98,  327 => 95,  323 => 93,  314 => 91,  310 => 90,  305 => 88,  300 => 87,  298 => 86,  292 => 82,  283 => 79,  279 => 78,  276 => 77,  272 => 76,  268 => 74,  259 => 71,  255 => 70,  251 => 68,  245 => 66,  243 => 65,  234 => 61,  228 => 60,  224 => 59,  216 => 58,  209 => 54,  205 => 52,  198 => 50,  195 => 49,  193 => 48,  190 => 47,  183 => 45,  180 => 44,  178 => 43,  175 => 42,  165 => 40,  162 => 39,  158 => 38,  155 => 37,  147 => 36,  133 => 35,  130 => 34,  126 => 33,  118 => 28,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  85 => 18,  82 => 17,  76 => 15,  74 => 14,  71 => 13,  65 => 11,  63 => 10,  60 => 9,  54 => 7,  52 => 6,  49 => 5,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if products %}
  {% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_warning }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}

  {% if error_stock %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_stock }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}

  {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}

  {% if attention %}
    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> {{ attention }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}

  <h1>{{ heading_title }}{% if weight %} ({{ weight }}){% endif %}</h1>
  <div id=\"cart\" class=\"table-responsive\">
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td class=\"text-center\">{{ column_image }}</td>
          <td class=\"text-start\">{{ column_name }}</td>
          <td class=\"text-start\">{{ column_model }}</td>
          <td class=\"text-start\">{{ column_quantity }}</td>
          <td class=\"text-end\">{{ column_price }}</td>
          <td class=\"text-end\">{{ column_total }}</td>
        </tr>
      </thead>
      <tbody>

        {% for product in products %}
          <tr>
            <td class=\"text-center\">{% if product.thumb %}<a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" class=\"img-thumbnail\"/></a>{% endif %}</td>
            <td class=\"text-start text-wrap\"><a href=\"{{ product.href }}\">{{ product.name }}</a>{% if not product.stock %} <span class=\"text-danger\">***</span>{% endif %}

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
                <small> - {{ text_subscription }}: {{ product.subscription }}</small>
              {% endif %}

            </td>
            <td class=\"text-start\">{{ product.model }}</td>
            <td class=\"text-start\">
              <form method=\"post\" data-oc-target=\"#shopping-cart\">
                <div class=\"input-group\">
                  <input type=\"text\" name=\"quantity\" value=\"{{ product.quantity }}\" size=\"1\" class=\"form-control{% if product.minimum %} is-invalid{% endif %}\"/>
                  <input type=\"hidden\" name=\"key\" value=\"{{ product.cart_id }}\"/>
                  <button type=\"submit\" formaction=\"{{ edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_update }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
                  <a href=\"{{ product.remove }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></a>
                </div>
              </form>

              {% if product.minimum %}
                <small class=\"invalid-feedback d-block\">{{ product.minimum }}</small>
              {% endif %}

            </td>
            <td class=\"text-end\">{{ product.price }}</td>
            <td class=\"text-end\">{{ product.total }}</td>
          </tr>
        {% endfor %}
      </tbody>
      <tfoot id=\"checkout-total\">
        {% for total in totals %}
          <tr>
            <td colspan=\"5\" class=\"text-end\"><strong>{{ total.title }}</strong></td>
            <td class=\"text-end\">{{ total.text }}</td>
          </tr>
        {% endfor %}
      </tfoot>
    </table>
  </div>

  {% if modules %}
    <h2>{{ text_next }}</h2>
    <p>{{ text_next_choice }}</p>
    <div id=\"accordion\" class=\"accordion\">
      {% for module in modules %}
        {{ module }}
      {% endfor %}
    </div>
  {% endif %}

  <br/>
  <div class=\"row\">
    <div class=\"col\"><a href=\"{{ continue }}\" class=\"btn btn-light\">{{ button_shopping }}</a></div>
    <div class=\"col text-end\"><a href=\"{{ checkout }}\" class=\"btn btn-primary\">{{ button_checkout }}</a></div>
  </div>
{% else %}
  <h1>{{ heading_title }}</h1>
  <p>{{ text_no_results }}</p>
  <div class=\"text-end\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
{% endif %}", "catalog/view/template/checkout/cart_list.twig", "/var/www/html/opencart/upload/catalog/view/template/checkout/cart_list.twig");
    }
}
