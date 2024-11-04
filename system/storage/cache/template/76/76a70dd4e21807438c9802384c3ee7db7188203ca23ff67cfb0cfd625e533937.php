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

/* admin/view/template/customer/customer_authorize.twig */
class __TwigTemplate_9aa66bf01765c0e3675ee7b9d860e9abc9ddaff5d48ae41e8fda94dedfd1282d extends Template
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
        yield ($context["column_ip"] ?? null);
        yield "</td>
        <td class=\"text-start\">";
        // line 6
        yield ($context["column_user_agent"] ?? null);
        yield "</td>
        <td class=\"text-start\">";
        // line 7
        yield ($context["column_status"] ?? null);
        yield "</td>
        <td class=\"text-start\">";
        // line 8
        yield ($context["column_date_added"] ?? null);
        yield "</td>
        <td class=\"text-end\">";
        // line 9
        yield ($context["column_action"] ?? null);
        yield "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 13
        if (($context["authorizes"] ?? null)) {
            // line 14
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["authorizes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["authorize"]) {
                // line 15
                yield "          <tr>
            <td class=\"text-start\"><a href=\"https://whatismyipaddress.com/ip/";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["user_login"] ?? null), "ip", [], "any", false, false, false, 16);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["authorize"], "ip", [], "any", false, false, false, 16);
                yield "</a></td>
            <td class=\"text-start\">";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["authorize"], "user_agent", [], "any", false, false, false, 17);
                yield "</td>
            <td class=\"text-start\">";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["authorize"], "status", [], "any", false, false, false, 18);
                yield "</td>
            <td class=\"text-start\">";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["authorize"], "date_added", [], "any", false, false, false, 19);
                yield "</td>
            <td class=\"text-end\"><a href=\"";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["authorize"], "delete", [], "any", false, false, false, 20);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></a></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authorize'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "      ";
        } else {
            // line 24
            yield "        <tr>
          <td class=\"text-center\" colspan=\"5\">";
            // line 25
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 28
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 32
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 33
        yield ($context["results"] ?? null);
        yield "</div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/view/template/customer/customer_authorize.twig";
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
        return array (  128 => 33,  124 => 32,  118 => 28,  112 => 25,  109 => 24,  106 => 23,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  77 => 16,  74 => 15,  69 => 14,  67 => 13,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-start\">{{ column_ip }}</td>
        <td class=\"text-start\">{{ column_user_agent }}</td>
        <td class=\"text-start\">{{ column_status }}</td>
        <td class=\"text-start\">{{ column_date_added }}</td>
        <td class=\"text-end\">{{ column_action }}</td>
      </tr>
    </thead>
    <tbody>
      {% if authorizes %}
        {% for authorize in authorizes %}
          <tr>
            <td class=\"text-start\"><a href=\"https://whatismyipaddress.com/ip/{{ user_login.ip }}\" target=\"_blank\">{{ authorize.ip }}</a></td>
            <td class=\"text-start\">{{ authorize.user_agent }}</td>
            <td class=\"text-start\">{{ authorize.status }}</td>
            <td class=\"text-start\">{{ authorize.date_added }}</td>
            <td class=\"text-end\"><a href=\"{{ authorize.delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></a></td>
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
</div>", "admin/view/template/customer/customer_authorize.twig", "/var/www/html/opencart/upload/admin/view/template/customer/customer_authorize.twig");
    }
}
