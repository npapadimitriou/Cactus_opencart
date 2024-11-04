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

/* admin/view/template/marketing/marketing_list.twig */
class __TwigTemplate_8624e7bb2a0010ae551fce07d540e5abde2bb84e2e51cc9503cb0840ad2ef35f extends Template
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
        yield "<form id=\"form-marketing\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#marketing\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\"><a href=\"";
        // line 7
        yield ($context["sort_name"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "m.name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_name"] ?? null);
        yield "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 8
        yield ($context["sort_code"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "m.code")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_code"] ?? null);
        yield "</a></td>
          <td class=\"text-end\">";
        // line 9
        yield ($context["column_clicks"] ?? null);
        yield "</td>
          <td class=\"text-end\">";
        // line 10
        yield ($context["column_orders"] ?? null);
        yield "</td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 11
        yield ($context["sort_date_added"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "m.date_added")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_date_added"] ?? null);
        yield "</a></td>
          <td class=\"text-end\">";
        // line 12
        yield ($context["column_action"] ?? null);
        yield "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 16
        if (($context["marketings"] ?? null)) {
            // line 17
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["marketings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["marketing"]) {
                // line 18
                yield "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "marketing_id", [], "any", false, false, false, 19);
                yield "\" class=\"form-check-input\"/></td>
              <td class=\"text-start\">";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "name", [], "any", false, false, false, 20);
                yield "</td>
              <td class=\"text-start\">";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "code", [], "any", false, false, false, 21);
                yield "</td>
              <td class=\"text-end\">";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "clicks", [], "any", false, false, false, 22);
                yield "</td>
              <td class=\"text-end\">";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "orders", [], "any", false, false, false, 23);
                yield "</td>
              <td class=\"text-start d-none d-lg-table-cell\">";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "date_added", [], "any", false, false, false, 24);
                yield "</td>
              <td class=\"text-end\"><a href=\"";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "edit", [], "any", false, false, false, 25);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marketing'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "        ";
        } else {
            // line 29
            yield "          <tr>
            <td class=\"text-center\" colspan=\"8\">";
            // line 30
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 33
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 37
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 38
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/view/template/marketing/marketing_list.twig";
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
        return array (  166 => 38,  162 => 37,  156 => 33,  150 => 30,  147 => 29,  144 => 28,  133 => 25,  129 => 24,  125 => 23,  121 => 22,  117 => 21,  113 => 20,  109 => 19,  106 => 18,  101 => 17,  99 => 16,  92 => 12,  80 => 11,  76 => 10,  72 => 9,  60 => 8,  48 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"form-marketing\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#marketing\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\"><a href=\"{{ sort_name }}\"{% if sort == 'm.name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></td>
          <td class=\"text-start\"><a href=\"{{ sort_code }}\"{% if sort == 'm.code' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_code }}</a></td>
          <td class=\"text-end\">{{ column_clicks }}</td>
          <td class=\"text-end\">{{ column_orders }}</td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"{{ sort_date_added }}\"{% if sort == 'm.date_added' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_date_added }}</a></td>
          <td class=\"text-end\">{{ column_action }}</td>
        </tr>
      </thead>
      <tbody>
        {% if marketings %}
          {% for marketing in marketings %}
            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ marketing.marketing_id }}\" class=\"form-check-input\"/></td>
              <td class=\"text-start\">{{ marketing.name }}</td>
              <td class=\"text-start\">{{ marketing.code }}</td>
              <td class=\"text-end\">{{ marketing.clicks }}</td>
              <td class=\"text-end\">{{ marketing.orders }}</td>
              <td class=\"text-start d-none d-lg-table-cell\">{{ marketing.date_added }}</td>
              <td class=\"text-end\"><a href=\"{{ marketing.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"8\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>", "admin/view/template/marketing/marketing_list.twig", "/var/www/html/opencart/upload/admin/view/template/marketing/marketing_list.twig");
    }
}
