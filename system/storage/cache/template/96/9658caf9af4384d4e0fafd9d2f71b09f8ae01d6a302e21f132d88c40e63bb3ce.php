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

/* admin/view/template/catalog/product_report.twig */
class __TwigTemplate_f587f5dae23ac5c34f892f39186674a294fc89f9307634318417d53ba74676ca extends Template
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
        yield ($context["column_store"] ?? null);
        yield "</td>
        <td class=\"text-start\">";
        // line 7
        yield ($context["column_country"] ?? null);
        yield "</td>
        <td class=\"text-start\">";
        // line 8
        yield ($context["column_date_added"] ?? null);
        yield "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 12
        if (($context["reports"] ?? null)) {
            // line 13
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["reports"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                // line 14
                yield "          <tr>
            <td class=\"text-start\"><a href=\"https://whatismyipaddress.com/ip/";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "ip", [], "any", false, false, false, 15);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "ip", [], "any", false, false, false, 15);
                yield "</a></td>
            <td class=\"text-start\">";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "store", [], "any", false, false, false, 16);
                yield "</td>
            <td class=\"text-start\">";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "country", [], "any", false, false, false, 17);
                yield "</td>
            <td class=\"text-start\">";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "date_added", [], "any", false, false, false, 18);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "      ";
        } else {
            // line 22
            yield "        <tr>
          <td class=\"text-center\" colspan=\"4\">";
            // line 23
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 26
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 30
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 31
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
        return "admin/view/template/catalog/product_report.twig";
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
        return array (  118 => 31,  114 => 30,  108 => 26,  102 => 23,  99 => 22,  96 => 21,  87 => 18,  83 => 17,  79 => 16,  73 => 15,  70 => 14,  65 => 13,  63 => 12,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-start\">{{ column_ip }}</td>
        <td class=\"text-start\">{{ column_store }}</td>
        <td class=\"text-start\">{{ column_country }}</td>
        <td class=\"text-start\">{{ column_date_added }}</td>
      </tr>
    </thead>
    <tbody>
      {% if reports %}
        {% for report in reports %}
          <tr>
            <td class=\"text-start\"><a href=\"https://whatismyipaddress.com/ip/{{ report.ip }}\" target=\"_blank\">{{ report.ip }}</a></td>
            <td class=\"text-start\">{{ report.store }}</td>
            <td class=\"text-start\">{{ report.country }}</td>
            <td class=\"text-start\">{{ report.date_added }}</td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"4\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
  <div class=\"col-sm-6 text-end\">{{ results }}</div>
</div>
", "admin/view/template/catalog/product_report.twig", "/var/www/html/opencart/upload/admin/view/template/catalog/product_report.twig");
    }
}
