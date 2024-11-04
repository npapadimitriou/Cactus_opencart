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

/* catalog/view/template/common/language.twig */
class __TwigTemplate_13a797cf6275bad0008a51558202c3bada4e2e7e1adc2b06aedf75e2c69ee3c6 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["languages"] ?? null)) > 1)) {
            // line 2
            yield "  <div class=\"dropdown\">
    <div class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">
      ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 5
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5) == ($context["code"] ?? null))) {
                    // line 6
                    yield "          <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 6);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 6);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 6);
                    yield "\">
        ";
                }
                // line 8
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            yield "      <span class=\"d-none d-md-inline\">";
            yield ($context["text_language"] ?? null);
            yield "</span> <i class=\"fa-solid fa-caret-down\"></i>
    </div>
    <ul class=\"dropdown-menu\">
      ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 13
                yield "        <li><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "href", [], "any", false, false, false, 13);
                yield "\" class=\"dropdown-item\"><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 13);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 13);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 13);
                yield "\"/> ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 13);
                yield "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "    </ul>
  </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/view/template/common/language.twig";
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
        return array (  95 => 15,  78 => 13,  74 => 12,  67 => 9,  61 => 8,  51 => 6,  48 => 5,  44 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if languages|length > 1 %}
  <div class=\"dropdown\">
    <div class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">
      {% for language in languages %}
        {% if language.code == code %}
          <img src=\"{{ language.image }}\" alt=\"{{ language.name }}\" title=\"{{ language.name }}\">
        {% endif %}
      {% endfor %}
      <span class=\"d-none d-md-inline\">{{ text_language }}</span> <i class=\"fa-solid fa-caret-down\"></i>
    </div>
    <ul class=\"dropdown-menu\">
      {% for language in languages %}
        <li><a href=\"{{ language.href }}\" class=\"dropdown-item\"><img src=\"{{ language.image }}\" alt=\"{{ language.name }}\" title=\"{{ language.name }}\"/> {{ language.name }}</a></li>
      {% endfor %}
    </ul>
  </div>
{% endif %}", "catalog/view/template/common/language.twig", "/var/www/html/opencart/upload/catalog/view/template/common/language.twig");
    }
}
