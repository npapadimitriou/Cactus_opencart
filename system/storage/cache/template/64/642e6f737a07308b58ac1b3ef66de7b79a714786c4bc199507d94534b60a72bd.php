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

/* catalog/view/template/product/category.twig */
class __TwigTemplate_4cb417ead363ac75a1fbd6b3604da5aadf4882482f9b41a7a427254c23d2b6db extends Template
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
<div id=\"product-category\" class=\"container\">
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
      ";
        // line 11
        if ((($context["image"] ?? null) || ($context["description"] ?? null))) {
            // line 12
            yield "        <div class=\"row\">
          ";
            // line 13
            if (($context["image"] ?? null)) {
                // line 14
                yield "            <div class=\"col-3\"><img src=\"";
                yield ($context["image"] ?? null);
                yield "\" alt=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" class=\"img-thumbnail\"/></div>
          ";
            }
            // line 16
            yield "          ";
            if (($context["description"] ?? null)) {
                // line 17
                yield "            <div class=\"col-9\">";
                yield ($context["description"] ?? null);
                yield "</div>
          ";
            }
            // line 19
            yield "        </div>
        <hr/>
      ";
        }
        // line 22
        yield "      ";
        if (($context["categories"] ?? null)) {
            // line 23
            yield "        <h3>";
            yield ($context["text_refine"] ?? null);
            yield "</h3>
        ";
            // line 24
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) <= 5)) {
                // line 25
                yield "          <div class=\"row\">
            <div class=\"col-sm-3\">
              <ul>
                ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 29
                    yield "                  <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 29);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29);
                    yield "</a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                yield "              </ul>
            </div>
          </div>
        ";
            } else {
                // line 35
                yield "          <div class=\"row row-cols-sm-2 row-cols-lg-4\">
            ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::batch(($context["categories"] ?? null), Twig\Extension\CoreExtension::round((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 37
                    yield "              <div class=\"col\">
                <ul>
                  ";
                    // line 39
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 40
                        yield "                    <li><a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 40);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 40);
                        yield "</a></li>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    yield "                </ul>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                yield "          </div>
          <br/>
        ";
            }
            // line 48
            yield "      ";
        }
        // line 49
        yield "      ";
        if (($context["products"] ?? null)) {
            // line 50
            yield "        <div id=\"display-control\" class=\"row\">
          <div class=\"col-lg-3\">
            <div class=\"mb-3\">
              <a href=\"";
            // line 53
            yield ($context["compare"] ?? null);
            yield "\" id=\"compare-total\" class=\"btn btn-primary d-block\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i> <span class=\"d-none d-xl-inline\">";
            yield ($context["text_compare"] ?? null);
            yield "</span></a>
            </div>
          </div>
          <div class=\"col-lg-1 d-none d-lg-block\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"button-list\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 58
            yield ($context["button_list"] ?? null);
            yield "\"><i class=\"fa-solid fa-table-list\"></i></button>
              <button type=\"button\" id=\"button-grid\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 59
            yield ($context["button_grid"] ?? null);
            yield "\"><i class=\"fa-solid fa-table-cells\"></i></button>
            </div>
          </div>
          <div class=\"col-lg-4 offset-lg-1 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-sort\" class=\"input-group-text\">";
            // line 64
            yield ($context["text_sort"] ?? null);
            yield "</label> <select id=\"input-sort\" class=\"form-select\" onchange=\"location = this.value;\">
                ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 66
                yield "                  <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 66);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 66) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 66);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "              </select>
            </div>
          </div>
          <div class=\"col-lg-3 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-limit\" class=\"input-group-text\">";
            // line 73
            yield ($context["text_limit"] ?? null);
            yield "</label> <select id=\"input-limit\" class=\"form-select\" onchange=\"location = this.value;\">
                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 75
                yield "                  <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 75);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 75) == ($context["limit"] ?? null))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 75);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "              </select>
            </div>
          </div>
        </div>
        <div id=\"product-list\" class=\"row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
          ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 83
                yield "            <div class=\"col mb-3\">";
                yield $context["product"];
                yield "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">";
            // line 87
            yield ($context["pagination"] ?? null);
            yield "</div>
          <div class=\"col-sm-6 text-end\">";
            // line 88
            yield ($context["results"] ?? null);
            yield "</div>
        </div>
      ";
        }
        // line 91
        yield "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 92
            yield "        <p>";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
        <div class=\"text-end\"><a href=\"";
            // line 93
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
      ";
        }
        // line 95
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 96
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 98
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
        return "catalog/view/template/product/category.twig";
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
        return array (  325 => 98,  320 => 96,  315 => 95,  308 => 93,  303 => 92,  300 => 91,  294 => 88,  290 => 87,  286 => 85,  277 => 83,  273 => 82,  266 => 77,  251 => 75,  247 => 74,  243 => 73,  236 => 68,  221 => 66,  217 => 65,  213 => 64,  205 => 59,  201 => 58,  191 => 53,  186 => 50,  183 => 49,  180 => 48,  175 => 45,  167 => 42,  156 => 40,  152 => 39,  148 => 37,  144 => 36,  141 => 35,  135 => 31,  124 => 29,  120 => 28,  115 => 25,  113 => 24,  108 => 23,  105 => 22,  100 => 19,  94 => 17,  91 => 16,  81 => 14,  79 => 13,  76 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  59 => 7,  48 => 5,  44 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      {% if image or description %}
        <div class=\"row\">
          {% if image %}
            <div class=\"col-3\"><img src=\"{{ image }}\" alt=\"{{ heading_title }}\" title=\"{{ heading_title }}\" class=\"img-thumbnail\"/></div>
          {% endif %}
          {% if description %}
            <div class=\"col-9\">{{ description }}</div>
          {% endif %}
        </div>
        <hr/>
      {% endif %}
      {% if categories %}
        <h3>{{ text_refine }}</h3>
        {% if categories|length <= 5 %}
          <div class=\"row\">
            <div class=\"col-sm-3\">
              <ul>
                {% for category in categories %}
                  <li><a href=\"{{ category.href }}\">{{ category.name }}</a></li>
                {% endfor %}
              </ul>
            </div>
          </div>
        {% else %}
          <div class=\"row row-cols-sm-2 row-cols-lg-4\">
            {% for category in categories|batch((categories|length / 4)|round(1, 'ceil')) %}
              <div class=\"col\">
                <ul>
                  {% for child in category %}
                    <li><a href=\"{{ child.href }}\">{{ child.name }}</a></li>
                  {% endfor %}
                </ul>
              </div>
            {% endfor %}
          </div>
          <br/>
        {% endif %}
      {% endif %}
      {% if products %}
        <div id=\"display-control\" class=\"row\">
          <div class=\"col-lg-3\">
            <div class=\"mb-3\">
              <a href=\"{{ compare }}\" id=\"compare-total\" class=\"btn btn-primary d-block\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i> <span class=\"d-none d-xl-inline\">{{ text_compare }}</span></a>
            </div>
          </div>
          <div class=\"col-lg-1 d-none d-lg-block\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"button-list\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"{{ button_list }}\"><i class=\"fa-solid fa-table-list\"></i></button>
              <button type=\"button\" id=\"button-grid\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"{{ button_grid }}\"><i class=\"fa-solid fa-table-cells\"></i></button>
            </div>
          </div>
          <div class=\"col-lg-4 offset-lg-1 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-sort\" class=\"input-group-text\">{{ text_sort }}</label> <select id=\"input-sort\" class=\"form-select\" onchange=\"location = this.value;\">
                {% for sorts in sorts %}
                  <option value=\"{{ sorts.href }}\"{% if sorts.value == '%s-%s'|format(sort, order) %} selected{% endif %}>{{ sorts.text }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"col-lg-3 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-limit\" class=\"input-group-text\">{{ text_limit }}</label> <select id=\"input-limit\" class=\"form-select\" onchange=\"location = this.value;\">
                {% for limits in limits %}
                  <option value=\"{{ limits.href }}\"{% if limits.value == limit %} selected{% endif %}>{{ limits.text }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
        </div>
        <div id=\"product-list\" class=\"row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
          {% for product in products %}
            <div class=\"col mb-3\">{{ product }}</div>
          {% endfor %}
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
          <div class=\"col-sm-6 text-end\">{{ results }}</div>
        </div>
      {% endif %}
      {% if not categories and not products %}
        <p>{{ text_no_results }}</p>
        <div class=\"text-end\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      {% endif %}
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/product/category.twig", "/var/www/html/opencart/upload/catalog/view/template/product/category.twig");
    }
}
