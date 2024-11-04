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

/* admin/view/template/customer/customer_ip.twig */
class __TwigTemplate_99810070e4c26726cc45028605d68a76b83d48056d551c5f536d1088634d0b32 extends Template
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
        <td class=\"text-end\">";
        // line 6
        yield ($context["column_account"] ?? null);
        yield "</td>
        <td class=\"text-start\">";
        // line 7
        yield ($context["column_store"] ?? null);
        yield "</td>
        <td class=\"text-start\">";
        // line 8
        yield ($context["column_country"] ?? null);
        yield "</td>
        <td class=\"text-start\">";
        // line 9
        yield ($context["column_date_added"] ?? null);
        yield "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 13
        if (($context["ips"] ?? null)) {
            // line 14
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["ips"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ip"]) {
                // line 15
                yield "          <tr>
            <td class=\"text-start\"><a href=\"https://whatismyipaddress.com/ip/";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["ip"], "ip", [], "any", false, false, false, 16);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["ip"], "ip", [], "any", false, false, false, 16);
                yield "</a></td>
            <td class=\"text-end\"><a href=\"";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["ip"], "filter_ip", [], "any", false, false, false, 17);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["ip"], "account", [], "any", false, false, false, 17);
                yield "</a></td>
            <td class=\"text-start\">";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["ip"], "store", [], "any", false, false, false, 18);
                yield "</td>
            <td class=\"text-start\">";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["ip"], "country", [], "any", false, false, false, 19);
                yield "</td>
            <td class=\"text-start\">";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["ip"], "date_added", [], "any", false, false, false, 20);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ip'], $context['_parent'], $context['loop']);
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
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/view/template/customer/customer_ip.twig";
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
        return array (  128 => 33,  124 => 32,  118 => 28,  112 => 25,  109 => 24,  106 => 23,  97 => 20,  93 => 19,  89 => 18,  83 => 17,  77 => 16,  74 => 15,  69 => 14,  67 => 13,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-start\">{{ column_ip }}</td>
        <td class=\"text-end\">{{ column_account }}</td>
        <td class=\"text-start\">{{ column_store }}</td>
        <td class=\"text-start\">{{ column_country }}</td>
        <td class=\"text-start\">{{ column_date_added }}</td>
      </tr>
    </thead>
    <tbody>
      {% if ips %}
        {% for ip in ips %}
          <tr>
            <td class=\"text-start\"><a href=\"https://whatismyipaddress.com/ip/{{ ip.ip }}\" target=\"_blank\">{{ ip.ip }}</a></td>
            <td class=\"text-end\"><a href=\"{{ ip.filter_ip }}\" target=\"_blank\">{{ ip.account }}</a></td>
            <td class=\"text-start\">{{ ip.store }}</td>
            <td class=\"text-start\">{{ ip.country }}</td>
            <td class=\"text-start\">{{ ip.date_added }}</td>
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
", "admin/view/template/customer/customer_ip.twig", "/var/www/html/opencart/upload/admin/view/template/customer/customer_ip.twig");
    }
}
