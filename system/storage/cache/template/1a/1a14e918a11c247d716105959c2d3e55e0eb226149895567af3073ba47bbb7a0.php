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

/* catalog/view/template/common/currency.twig */
class __TwigTemplate_6348ed666e561ff4b4fc078317f045025341dfbd9b259b595d0f68f9a3538b0d extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["currencies"] ?? null)) > 1)) {
            // line 2
            yield "  <form id=\"form-currency\" action=\"";
            yield ($context["action"] ?? null);
            yield "\" method=\"post\" enctype=\"multipart/form-data\">
    <div class=\"dropdown\">
      <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"dropdown-toggle\">";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 4) && (CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 4) == ($context["code"] ?? null)))) {
                    yield "<strong>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 4);
                    yield "</strong>";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 4) && (CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 4) == ($context["code"] ?? null)))) {
                    yield "<strong>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 4);
                    yield "</strong>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield " <span class=\"d-none d-md-inline\">";
            yield ($context["text_currency"] ?? null);
            yield "</span> <i class=\"fa-solid fa-caret-down\"></i></a>
      <ul class=\"dropdown-menu\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 7
                yield "          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 7)) {
                    // line 8
                    yield "            <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 8);
                    yield "\" class=\"dropdown-item\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 8);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 8);
                    yield "</a></li>
          ";
                } else {
                    // line 10
                    yield "            <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 10);
                    yield "\" class=\"dropdown-item\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 10);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 10);
                    yield "</a></li>
          ";
                }
                // line 12
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            yield "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\"/> <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 15
            yield ($context["redirect"] ?? null);
            yield "\"/>
  </form>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/view/template/common/currency.twig";
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
        return array (  105 => 15,  101 => 13,  95 => 12,  85 => 10,  75 => 8,  72 => 7,  68 => 6,  46 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if currencies|length > 1 %}
  <form id=\"form-currency\" action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\">
    <div class=\"dropdown\">
      <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"dropdown-toggle\">{% for currency in currencies %}{% if currency.symbol_left and currency.code == code %}<strong>{{ currency.symbol_left }}</strong>{% elseif currency.symbol_right and currency.code == code %}<strong>{{ currency.symbol_right }}</strong>{% endif %}{% endfor %} <span class=\"d-none d-md-inline\">{{ text_currency }}</span> <i class=\"fa-solid fa-caret-down\"></i></a>
      <ul class=\"dropdown-menu\">
        {% for currency in currencies %}
          {% if currency.symbol_left %}
            <li><a href=\"{{ currency.code }}\" class=\"dropdown-item\">{{ currency.symbol_left }} {{ currency.title }}</a></li>
          {% else %}
            <li><a href=\"{{ currency.code }}\" class=\"dropdown-item\">{{ currency.symbol_right }} {{ currency.title }}</a></li>
          {% endif %}
        {% endfor %}
      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\"/> <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\"/>
  </form>
{% endif %}", "catalog/view/template/common/currency.twig", "/var/www/html/opencart/upload/catalog/view/template/common/currency.twig");
    }
}
