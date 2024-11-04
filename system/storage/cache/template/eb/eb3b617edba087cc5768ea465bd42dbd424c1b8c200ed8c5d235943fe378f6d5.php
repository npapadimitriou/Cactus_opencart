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

/* admin/view/template/catalog/review_list.twig */
class __TwigTemplate_41f09948e833ef722f4ffa01fdbd8ea924d825b41fbe9e70fd45b359cec65b9f extends Template
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
        yield "<form id=\"form-review\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#review\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\"><a href=\"";
        // line 7
        yield ($context["sort_product"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "pd.name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_product"] ?? null);
        yield "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 8
        yield ($context["sort_author"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "r.author")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_author"] ?? null);
        yield "</a></td>
          <td class=\"text-end d-none d-lg-table-cell\"><a href=\"";
        // line 9
        yield ($context["sort_rating"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "r.rating")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_rating"] ?? null);
        yield "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 10
        yield ($context["sort_date_added"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "r.date_added")) {
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
        if (($context["reviews"] ?? null)) {
            // line 16
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 17
                yield "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 18);
                yield "\" class=\"form-check-input\"/></td>
              <td class=\"text-start\">";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 19);
                yield "
                <br/>
                ";
                // line 21
                if (CoreExtension::getAttribute($this->env, $this->source, $context["review"], "status", [], "any", false, false, false, 21)) {
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
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 26);
                yield "</td>
              <td class=\"text-end d-none d-lg-table-cell\">";
                // line 27
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 27);
                yield "</td>
              <td class=\"text-start\">";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 28);
                yield "</td>
              <td class=\"text-end\"><a href=\"";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "edit", [], "any", false, false, false, 29);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "        ";
        } else {
            // line 33
            yield "          <tr>
            <td class=\"text-center\" colspan=\"7\">";
            // line 34
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 37
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 41
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 42
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
        return "admin/view/template/catalog/review_list.twig";
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
        return array (  184 => 42,  180 => 41,  174 => 37,  168 => 34,  165 => 33,  162 => 32,  151 => 29,  147 => 28,  143 => 27,  139 => 26,  136 => 25,  130 => 24,  124 => 22,  122 => 21,  117 => 19,  113 => 18,  110 => 17,  105 => 16,  103 => 15,  96 => 11,  84 => 10,  72 => 9,  60 => 8,  48 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"form-review\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#review\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\"><a href=\"{{ sort_product }}\"{% if sort == 'pd.name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_product }}</a></td>
          <td class=\"text-start\"><a href=\"{{ sort_author }}\"{% if sort == 'r.author' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_author }}</a></td>
          <td class=\"text-end d-none d-lg-table-cell\"><a href=\"{{ sort_rating }}\"{% if sort == 'r.rating' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_rating }}</a></td>
          <td class=\"text-start\"><a href=\"{{ sort_date_added }}\"{% if sort == 'r.date_added' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_date_added }}</a></td>
          <td class=\"text-end\">{{ column_action }}</td>
        </tr>
      </thead>
      <tbody>
        {% if reviews %}
          {% for review in reviews %}
            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ review.review_id }}\" class=\"form-check-input\"/></td>
              <td class=\"text-start\">{{ review.name }}
                <br/>
                {% if review.status %}
                  <small class=\"text-success\">{{ text_enabled }}</small>
                {% else %}
                  <small class=\"text-danger\">{{ text_disabled }}</small>
                {% endif %}</td>
              <td class=\"text-start\">{{ review.author }}</td>
              <td class=\"text-end d-none d-lg-table-cell\">{{ review.rating }}</td>
              <td class=\"text-start\">{{ review.date_added }}</td>
              <td class=\"text-end\"><a href=\"{{ review.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
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
</form>", "admin/view/template/catalog/review_list.twig", "/var/www/html/opencart/upload/admin/view/template/catalog/review_list.twig");
    }
}
