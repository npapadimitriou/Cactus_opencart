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

/* admin/view/template/customer/customer_list.twig */
class __TwigTemplate_b2b1869a2d93d1f96b4728266fe637444acdbbee8e1f801b3f0afca0f0b6405f extends Template
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
        yield "<form id=\"form-customer\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#customer\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\"><a href=\"";
        // line 7
        yield ($context["sort_name"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_name"] ?? null);
        yield "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 8
        yield ($context["sort_email"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "c.email")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_email"] ?? null);
        yield "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 9
        yield ($context["sort_customer_group"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "customer_group")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_customer_group"] ?? null);
        yield "</a></td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 10
        yield ($context["sort_date_added"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "c.date_added")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_date_added"] ?? null);
        yield "</a></td>
          <td class=\"text-end\">";
        // line 11
        yield ($context["column_action"] ?? null);
        yield "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 15
        if (($context["customers"] ?? null)) {
            // line 16
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 17
                yield "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 18);
                yield "\" class=\"form-check-input\"/></td>
              <td class=\"text-start\">";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "name", [], "any", false, false, false, 19);
                yield "
                <br/>
                ";
                // line 21
                if (CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "status", [], "any", false, false, false, 21)) {
                    // line 22
                    yield "                  <small class=\"text-success\">";
                    yield ($context["text_enabled"] ?? null);
                    yield "</small>
                ";
                } else {
                    // line 24
                    yield "                  <small class=\"text-danger\">";
                    yield ($context["text_disabled"] ?? null);
                    yield "</small>
                ";
                }
                // line 25
                yield "</td>
              <td class=\"text-start\">";
                // line 26
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 26);
                yield "</td>
              <td class=\"text-start\">";
                // line 27
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer_group", [], "any", false, false, false, 27);
                yield "</td>
              <td class=\"text-start d-none d-lg-table-cell\">";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "date_added", [], "any", false, false, false, 28);
                yield "</td>
              <td class=\"text-end\">
                <div class=\"btn-group dropdown\">
                  <a href=\"";
                // line 31
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 31);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>
                  <button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"><span class=\"fa-solid fa-caret-down\"></span></button>
                  <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li><h6 class=\"dropdown-header\">";
                // line 34
                yield ($context["text_option"] ?? null);
                yield "</h6></li>
                    ";
                // line 35
                if (CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "unlock", [], "any", false, false, false, 35)) {
                    // line 36
                    yield "                      <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "unlock", [], "any", false, false, false, 36);
                    yield "\" data-oc-toggle=\"unlock\" class=\"dropdown-item\"><i class=\"fa-solid fa-unlock\"></i> ";
                    yield ($context["text_unlock"] ?? null);
                    yield "</a></li>
                    ";
                } else {
                    // line 38
                    yield "                      <li><a href=\"#\" class=\"dropdown-item disabled\"><i class=\"fa-solid fa-unlock\"></i> ";
                    yield ($context["text_unlock"] ?? null);
                    yield "</a></li>
                    ";
                }
                // line 40
                yield "                    <li><hr class=\"dropdown-divider\"></li>
                    <li><h6 class=\"dropdown-header\">";
                // line 41
                yield ($context["text_login"] ?? null);
                yield "</h6></li>
                    ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "store", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 43
                    yield "                      <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 43);
                    yield "\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fa-solid fa-lock\"></i> ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 43);
                    yield "</a></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                yield "                  </ul>
                </div></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "        ";
        } else {
            // line 50
            yield "          <tr>
            <td class=\"text-center\" colspan=\"7\">";
            // line 51
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 54
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 58
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 59
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/view/template/customer/customer_list.twig";
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
        return array (  234 => 59,  230 => 58,  224 => 54,  218 => 51,  215 => 50,  212 => 49,  203 => 45,  192 => 43,  188 => 42,  184 => 41,  181 => 40,  175 => 38,  167 => 36,  165 => 35,  161 => 34,  153 => 31,  147 => 28,  143 => 27,  139 => 26,  136 => 25,  130 => 24,  124 => 22,  122 => 21,  117 => 19,  113 => 18,  110 => 17,  105 => 16,  103 => 15,  96 => 11,  84 => 10,  72 => 9,  60 => 8,  48 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"form-customer\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#customer\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\"><a href=\"{{ sort_name }}\"{% if sort == 'name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></td>
          <td class=\"text-start\"><a href=\"{{ sort_email }}\"{% if sort == 'c.email' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_email }}</a></td>
          <td class=\"text-start\"><a href=\"{{ sort_customer_group }}\"{% if sort == 'customer_group' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_customer_group }}</a></td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"{{ sort_date_added }}\"{% if sort == 'c.date_added' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_date_added }}</a></td>
          <td class=\"text-end\">{{ column_action }}</td>
        </tr>
      </thead>
      <tbody>
        {% if customers %}
          {% for customer in customers %}
            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ customer.customer_id }}\" class=\"form-check-input\"/></td>
              <td class=\"text-start\">{{ customer.name }}
                <br/>
                {% if customer.status %}
                  <small class=\"text-success\">{{ text_enabled }}</small>
                {% else %}
                  <small class=\"text-danger\">{{ text_disabled }}</small>
                {% endif %}</td>
              <td class=\"text-start\">{{ customer.email }}</td>
              <td class=\"text-start\">{{ customer.customer_group }}</td>
              <td class=\"text-start d-none d-lg-table-cell\">{{ customer.date_added }}</td>
              <td class=\"text-end\">
                <div class=\"btn-group dropdown\">
                  <a href=\"{{ customer.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>
                  <button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"><span class=\"fa-solid fa-caret-down\"></span></button>
                  <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li><h6 class=\"dropdown-header\">{{ text_option }}</h6></li>
                    {% if customer.unlock %}
                      <li><a href=\"{{ customer.unlock }}\" data-oc-toggle=\"unlock\" class=\"dropdown-item\"><i class=\"fa-solid fa-unlock\"></i> {{ text_unlock }}</a></li>
                    {% else %}
                      <li><a href=\"#\" class=\"dropdown-item disabled\"><i class=\"fa-solid fa-unlock\"></i> {{ text_unlock }}</a></li>
                    {% endif %}
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><h6 class=\"dropdown-header\">{{ text_login }}</h6></li>
                    {% for store in customer.store %}
                      <li><a href=\"{{ store.href }}\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fa-solid fa-lock\"></i> {{ store.name }}</a></li>
                    {% endfor %}
                  </ul>
                </div></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"7\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>
", "admin/view/template/customer/customer_list.twig", "/var/www/html/opencart/upload/admin/view/template/customer/customer_list.twig");
    }
}
