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

/* extension/opencart/admin/view/template/dashboard/activity_info.twig */
class __TwigTemplate_8dfd5efcf4bf5fdeca0e1253afbf3cc5151edb4bcd8eb1e5850fa92d7e101964 extends Template
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
        yield "<div class=\"card mb-3\">
  <div class=\"card-header\"><i class=\"fa-regular fa-calendar\"></i> ";
        // line 2
        yield ($context["heading_title"] ?? null);
        yield "</div>
  <ul class=\"list-group list-group-flush\">
    ";
        // line 4
        if (($context["activities"] ?? null)) {
            // line 5
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["activities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 6
                yield "        <li class=\"list-group-item\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "comment", [], "any", false, false, false, 6);
                yield "
          <br/>
          <small class=\"text-muted\"><i class=\"fa-solid fa-clock\"></i> ";
                // line 8
                yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "date_added", [], "any", false, false, false, 8);
                yield "</small>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            yield "    ";
        } else {
            // line 12
            yield "      <li class=\"list-group-item text-center\">";
            yield ($context["text_no_results"] ?? null);
            yield "</li>
    ";
        }
        // line 14
        yield "  </ul>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/dashboard/activity_info.twig";
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
        return array (  77 => 14,  71 => 12,  68 => 11,  59 => 8,  53 => 6,  48 => 5,  46 => 4,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-3\">
  <div class=\"card-header\"><i class=\"fa-regular fa-calendar\"></i> {{ heading_title }}</div>
  <ul class=\"list-group list-group-flush\">
    {% if activities %}
      {% for activity in activities %}
        <li class=\"list-group-item\">{{ activity.comment }}
          <br/>
          <small class=\"text-muted\"><i class=\"fa-solid fa-clock\"></i> {{ activity.date_added }}</small>
        </li>
      {% endfor %}
    {% else %}
      <li class=\"list-group-item text-center\">{{ text_no_results }}</li>
    {% endif %}
  </ul>
</div>
", "extension/opencart/admin/view/template/dashboard/activity_info.twig", "/var/www/html/opencart/upload/extension/opencart/admin/view/template/dashboard/activity_info.twig");
    }
}
