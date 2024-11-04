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

/* admin/view/template/customer/customer_history.twig */
class __TwigTemplate_552a1265a86f144beba4e876d3808fd6a9ce8d3c9ec825474da54cbe40d29761 extends Template
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
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <td class=\"text-start\">";
        // line 5
        yield ($context["column_date_added"] ?? null);
        yield "</td>
        <td class=\"text-start\">";
        // line 6
        yield ($context["column_comment"] ?? null);
        yield "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 10
        if (($context["histories"] ?? null)) {
            // line 11
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 12
                yield "          <tr>
            <td class=\"text-start\">";
                // line 13
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 13);
                yield "</td>
            <td class=\"text-start\">";
                // line 14
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 14);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "      ";
        } else {
            // line 18
            yield "        <tr>
          <td class=\"text-center\" colspan=\"2\">";
            // line 19
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 22
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 26
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 27
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
        return "admin/view/template/customer/customer_history.twig";
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
        return array (  100 => 27,  96 => 26,  90 => 22,  84 => 19,  81 => 18,  78 => 17,  69 => 14,  65 => 13,  62 => 12,  57 => 11,  55 => 10,  48 => 6,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <td class=\"text-start\">{{ column_date_added }}</td>
        <td class=\"text-start\">{{ column_comment }}</td>
      </tr>
    </thead>
    <tbody>
      {% if histories %}
        {% for history in histories %}
          <tr>
            <td class=\"text-start\">{{ history.date_added }}</td>
            <td class=\"text-start\">{{ history.comment }}</td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"2\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
  <div class=\"col-sm-6 text-end\">{{ results }}</div>
</div>
", "admin/view/template/customer/customer_history.twig", "/var/www/html/opencart/upload/admin/view/template/customer/customer_history.twig");
    }
}
