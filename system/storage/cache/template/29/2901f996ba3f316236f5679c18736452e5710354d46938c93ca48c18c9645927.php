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

/* admin/view/template/customer/customer_transaction.twig */
class __TwigTemplate_7ed1197fa4dcc5c29a978f113e5aaf9514fddc8cfd67c6f64508c7855c147bdc extends Template
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
        yield ($context["column_date_added"] ?? null);
        yield "</td>
        <td class=\"text-start\">";
        // line 6
        yield ($context["column_description"] ?? null);
        yield "</td>
        <td class=\"text-end\">";
        // line 7
        yield ($context["column_amount"] ?? null);
        yield "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if (($context["transactions"] ?? null)) {
            // line 12
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["transactions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 13
                yield "          <tr>
            <td class=\"text-start\">";
                // line 14
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "date_added", [], "any", false, false, false, 14);
                yield "</td>
            <td class=\"text-start\">";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 15);
                yield "</td>
            <td class=\"text-end\">";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 16);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "        <tr>
          <td>&nbsp;</td>
          <td class=\"text-end\"><b>";
            // line 21
            yield ($context["text_balance"] ?? null);
            yield "</b></td>
          <td class=\"text-end\">";
            // line 22
            yield ($context["balance"] ?? null);
            yield "</td>
        </tr>
      ";
        } else {
            // line 25
            yield "        <tr>
          <td class=\"text-center\" colspan=\"3\">";
            // line 26
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 29
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 33
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 34
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
        return "admin/view/template/customer/customer_transaction.twig";
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
        return array (  119 => 34,  115 => 33,  109 => 29,  103 => 26,  100 => 25,  94 => 22,  90 => 21,  86 => 19,  77 => 16,  73 => 15,  69 => 14,  66 => 13,  61 => 12,  59 => 11,  52 => 7,  48 => 6,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-start\">{{ column_date_added }}</td>
        <td class=\"text-start\">{{ column_description }}</td>
        <td class=\"text-end\">{{ column_amount }}</td>
      </tr>
    </thead>
    <tbody>
      {% if transactions %}
        {% for transaction in transactions %}
          <tr>
            <td class=\"text-start\">{{ transaction.date_added }}</td>
            <td class=\"text-start\">{{ transaction.description }}</td>
            <td class=\"text-end\">{{ transaction.amount }}</td>
          </tr>
        {% endfor %}
        <tr>
          <td>&nbsp;</td>
          <td class=\"text-end\"><b>{{ text_balance }}</b></td>
          <td class=\"text-end\">{{ balance }}</td>
        </tr>
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"3\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
  <div class=\"col-sm-6 text-end\">{{ results }}</div>
</div>
", "admin/view/template/customer/customer_transaction.twig", "/var/www/html/opencart/upload/admin/view/template/customer/customer_transaction.twig");
    }
}
