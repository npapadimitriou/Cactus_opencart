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

/* admin/view/template/common/pagination.twig */
class __TwigTemplate_1d0a517e76298f1badc76773210b0d17dfcac1572ad4ba610d794fa237bdd079 extends Template
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
        yield "<ul class=\"pagination\">
\t";
        // line 2
        if (($context["first"] ?? null)) {
            // line 3
            yield "\t\t<li class=\"page-item\"><a href=\"";
            yield ($context["first"] ?? null);
            yield "\" class=\"page-link\">|&lt;</a></li>
\t";
        }
        // line 5
        yield "\t";
        if (($context["prev"] ?? null)) {
            // line 6
            yield "\t\t<li class=\"page-item\"><a href=\"";
            yield ($context["prev"] ?? null);
            yield "\" class=\"page-link\">&lt;</a></li>
\t";
        }
        // line 8
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 9
            yield "\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 9) == ($context["page"] ?? null))) {
                // line 10
                yield "\t\t\t<li class=\"page-item active\"><span class=\"page-link\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 10);
                yield "</span></li>
\t\t";
            } else {
                // line 12
                yield "\t\t\t<li class=\"page-item\"><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 12);
                yield "\" class=\"page-link\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 12);
                yield "</a></li>
\t\t";
            }
            // line 14
            yield "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "\t";
        if (($context["next"] ?? null)) {
            // line 16
            yield "\t\t<li class=\"page-item\"><a href=\"";
            yield ($context["next"] ?? null);
            yield "\" class=\"page-link\">&gt;</a></li>
\t";
        }
        // line 18
        yield "\t";
        if (($context["last"] ?? null)) {
            // line 19
            yield "\t\t<li class=\"page-item\"><a href=\"";
            yield ($context["last"] ?? null);
            yield "\" class=\"page-link\">&gt;|</a></li>
\t";
        }
        // line 21
        yield "</ul>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/view/template/common/pagination.twig";
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
        return array (  104 => 21,  98 => 19,  95 => 18,  89 => 16,  86 => 15,  80 => 14,  72 => 12,  66 => 10,  63 => 9,  58 => 8,  52 => 6,  49 => 5,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"pagination\">
\t{% if first %}
\t\t<li class=\"page-item\"><a href=\"{{ first }}\" class=\"page-link\">|&lt;</a></li>
\t{% endif %}
\t{% if prev %}
\t\t<li class=\"page-item\"><a href=\"{{ prev }}\" class=\"page-link\">&lt;</a></li>
\t{% endif %}
\t{% for link in links %}
\t\t{% if link.page == page %}
\t\t\t<li class=\"page-item active\"><span class=\"page-link\">{{ link.page }}</span></li>
\t\t{% else %}
\t\t\t<li class=\"page-item\"><a href=\"{{ link.href }}\" class=\"page-link\">{{ link.page }}</a></li>
\t\t{% endif %}
\t{% endfor %}
\t{% if next %}
\t\t<li class=\"page-item\"><a href=\"{{ next }}\" class=\"page-link\">&gt;</a></li>
\t{% endif %}
\t{% if last %}
\t\t<li class=\"page-item\"><a href=\"{{ last }}\" class=\"page-link\">&gt;|</a></li>
\t{% endif %}
</ul>
", "admin/view/template/common/pagination.twig", "/var/www/html/opencart/upload/admin/view/template/common/pagination.twig");
    }
}
