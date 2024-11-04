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

/* admin/view/template/user/user_list.twig */
class __TwigTemplate_cf02f3ed6e7e9f0c46ab63f5d930d8a849de44e69b8e7b5ffece5a4ad9f41f24 extends Template
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
        yield "<form id=\"form-user\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#user\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\"><a href=\"";
        // line 7
        yield ($context["sort_username"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "username")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_username"] ?? null);
        yield "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 8
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
        // line 9
        yield ($context["sort_email"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "u.email")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_email"] ?? null);
        yield "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 10
        yield ($context["sort_user_group"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "user_group")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_user_group"] ?? null);
        yield "</a></td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 11
        yield ($context["sort_date_added"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "u.date_added")) {
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
        if (($context["users"] ?? null)) {
            // line 17
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 18
                yield "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 19);
                yield "\" class=\"form-check-input\"/></td>
              <td class=\"text-start\">";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 20);
                yield "
                <br/>
                ";
                // line 22
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 22)) {
                    // line 23
                    yield "                  <small class=\"text-success\">";
                    yield ($context["text_enabled"] ?? null);
                    yield "</small>
                ";
                } else {
                    // line 25
                    yield "                  <small class=\"text-danger\">";
                    yield ($context["text_disabled"] ?? null);
                    yield "</small>
                ";
                }
                // line 26
                yield "</td>
              <td class=\"text-start\">";
                // line 27
                yield CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 27);
                yield "</td>
              <td class=\"text-start\">";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 28);
                yield "</td>
              <td class=\"text-start\">";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, $context["user"], "user_group", [], "any", false, false, false, 29);
                yield "</td>
              <td class=\"text-start d-none d-lg-table-cell\">";
                // line 30
                yield CoreExtension::getAttribute($this->env, $this->source, $context["user"], "date_added", [], "any", false, false, false, 30);
                yield "</td>
              <td class=\"text-end\"><a href=\"";
                // line 31
                yield CoreExtension::getAttribute($this->env, $this->source, $context["user"], "edit", [], "any", false, false, false, 31);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "        ";
        } else {
            // line 35
            yield "          <tr>
            <td class=\"text-center\" colspan=\"5\">";
            // line 36
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 39
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 43
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 44
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
        return "admin/view/template/user/user_list.twig";
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
        return array (  200 => 44,  196 => 43,  190 => 39,  184 => 36,  181 => 35,  178 => 34,  167 => 31,  163 => 30,  159 => 29,  155 => 28,  151 => 27,  148 => 26,  142 => 25,  136 => 23,  134 => 22,  129 => 20,  125 => 19,  122 => 18,  117 => 17,  115 => 16,  108 => 12,  96 => 11,  84 => 10,  72 => 9,  60 => 8,  48 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"form-user\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#user\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\"><a href=\"{{ sort_username }}\"{% if sort == 'username' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_username }}</a></td>
          <td class=\"text-start\"><a href=\"{{ sort_name }}\"{% if sort == 'name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></td>
          <td class=\"text-start\"><a href=\"{{ sort_email }}\"{% if sort == 'u.email' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_email }}</a></td>
          <td class=\"text-start\"><a href=\"{{ sort_user_group }}\"{% if sort == 'user_group' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_user_group }}</a></td>
          <td class=\"text-start d-none d-lg-table-cell\"><a href=\"{{ sort_date_added }}\"{% if sort == 'u.date_added' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_date_added }}</a></td>
          <td class=\"text-end\">{{ column_action }}</td>
        </tr>
      </thead>
      <tbody>
        {% if users %}
          {% for user in users %}
            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ user.user_id }}\" class=\"form-check-input\"/></td>
              <td class=\"text-start\">{{ user.username }}
                <br/>
                {% if user.status %}
                  <small class=\"text-success\">{{ text_enabled }}</small>
                {% else %}
                  <small class=\"text-danger\">{{ text_disabled }}</small>
                {% endif %}</td>
              <td class=\"text-start\">{{ user.name }}</td>
              <td class=\"text-start\">{{ user.email }}</td>
              <td class=\"text-start\">{{ user.user_group }}</td>
              <td class=\"text-start d-none d-lg-table-cell\">{{ user.date_added }}</td>
              <td class=\"text-end\"><a href=\"{{ user.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"5\">{{ text_no_results }}</td>
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
", "admin/view/template/user/user_list.twig", "/var/www/html/opencart/upload/admin/view/template/user/user_list.twig");
    }
}