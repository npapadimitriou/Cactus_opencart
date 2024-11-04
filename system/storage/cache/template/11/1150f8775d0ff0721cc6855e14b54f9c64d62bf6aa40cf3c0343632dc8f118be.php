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

/* install/view/template/common/language.twig */
class __TwigTemplate_e26caa61278ae9ac5833a93a236b91ffc5ab56f4c9eaf03e1f22731c76e2f029 extends Template
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
        yield "<div class=\"float-end dropdown\">
  <button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-light dropdown-toggle\">";
        // line 2
        yield ($context["text_language"] ?? null);
        yield " <i class=\"fa-solid fa-caret-down fa-fw\"></i></button>
  <div class=\"dropdown-menu dropdown-menu-end\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5
            yield "      <a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "href", [], "any", false, false, false, 5);
            yield "\" class=\"dropdown-item";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5) == ($context["code"] ?? null))) {
                yield " active";
            }
            yield "\"><img src=\"language/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5);
            yield "/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5);
            yield ".png\"/> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "text", [], "any", false, false, false, 5);
            yield "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "install/view/template/common/language.twig";
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
        return array (  69 => 7,  50 => 5,  46 => 4,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"float-end dropdown\">
  <button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-light dropdown-toggle\">{{ text_language }} <i class=\"fa-solid fa-caret-down fa-fw\"></i></button>
  <div class=\"dropdown-menu dropdown-menu-end\">
    {% for language in languages %}
      <a href=\"{{ language.href }}\" class=\"dropdown-item{% if language.code == code %} active{% endif %}\"><img src=\"language/{{ language.code }}/{{ language.code }}.png\"/> {{ language.text }}</a>
    {% endfor %}
  </div>
</div>
", "install/view/template/common/language.twig", "/var/www/html/opencart/upload/install/view/template/common/language.twig");
    }
}
