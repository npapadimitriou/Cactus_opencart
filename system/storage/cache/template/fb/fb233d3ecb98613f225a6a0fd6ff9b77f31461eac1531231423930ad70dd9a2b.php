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

/* admin/view/template/common/column_left.twig */
class __TwigTemplate_dbc3ba797ca093801ab693c22612d4021764cb72f87c5d503135483a779bfdbe extends Template
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
        yield "<nav id=\"column-left\">
\t<div id=\"navigation\"><span class=\"fa-solid fa-bars\"></span> ";
        // line 2
        yield ($context["text_navigation"] ?? null);
        yield "</div>
\t<ul id=\"menu\">
\t\t";
        // line 4
        $context["i"] = 0;
        // line 5
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 6
            yield "\t\t\t<li id=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 6);
            yield "\">
\t\t\t\t";
            // line 7
            if (CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 7)) {
                // line 8
                yield "\t\t\t\t\t<a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 8);
                yield "\"><i class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 8);
                yield "\"></i> ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 8);
                yield "</a>
\t\t\t\t";
            } else {
                // line 10
                yield "\t\t\t\t\t<a href=\"#collapse-";
                yield ($context["i"] ?? null);
                yield "\" data-bs-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 10);
                yield "\"></i> ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 10);
                yield "</a>
\t\t\t\t";
            }
            // line 12
            yield "\t\t\t\t";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 12)) {
                // line 13
                yield "\t\t\t\t\t<ul id=\"collapse-";
                yield ($context["i"] ?? null);
                yield "\" class=\"collapse\">
\t\t\t\t\t\t";
                // line 14
                $context["j"] = 0;
                // line 15
                yield "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 15));
                foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                    // line 16
                    yield "\t\t\t\t\t\t\t<li>";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 16)) {
                        // line 17
                        yield "\t\t\t\t\t\t\t\t\t<a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 17);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 17);
                        yield "</a>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 19
                        yield "\t\t\t\t\t\t\t\t\t<a href=\"#collapse-";
                        yield ($context["i"] ?? null);
                        yield "-";
                        yield ($context["j"] ?? null);
                        yield "\" data-bs-toggle=\"collapse\" class=\"parent collapsed\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 19);
                        yield "</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 21
                    yield "\t\t\t\t\t\t\t\t";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 21)) {
                        // line 22
                        yield "\t\t\t\t\t\t\t\t\t<ul id=\"collapse-";
                        yield ($context["i"] ?? null);
                        yield "-";
                        yield ($context["j"] ?? null);
                        yield "\" class=\"collapse\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 23
                        $context["k"] = 0;
                        // line 24
                        yield "\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 24));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_2"]) {
                            // line 25
                            yield "\t\t\t\t\t\t\t\t\t\t\t<li>";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 25)) {
                                // line 26
                                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 26);
                                yield "\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 26);
                                yield "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 28
                                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#collapse-";
                                yield ($context["i"] ?? null);
                                yield "-";
                                yield ($context["j"] ?? null);
                                yield "-";
                                yield ($context["k"] ?? null);
                                yield "\" data-bs-toggle=\"collapse\" class=\"parent collapsed\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 28);
                                yield "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 30
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 30)) {
                                // line 31
                                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<ul id=\"collapse-";
                                yield ($context["i"] ?? null);
                                yield "-";
                                yield ($context["j"] ?? null);
                                yield "-";
                                yield ($context["k"] ?? null);
                                yield "\" class=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 32
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 32));
                                foreach ($context['_seq'] as $context["_key"] => $context["children_3"]) {
                                    // line 33
                                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["children_3"], "href", [], "any", false, false, false, 33);
                                    yield "\">";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["children_3"], "name", [], "any", false, false, false, 33);
                                    yield "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_3'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 35
                                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 36
                            yield "</li>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 37
                            $context["k"] = (($context["k"] ?? null) + 1);
                            // line 38
                            yield "\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        yield "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
                    }
                    // line 41
                    yield "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    // line 42
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 43
                    yield "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                yield "\t\t\t\t\t</ul>
\t\t\t\t";
            }
            // line 46
            yield "\t\t\t</li>
\t\t\t";
            // line 47
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 48
            yield "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "\t</ul>
\t";
        // line 50
        if (($context["statistics_status"] ?? null)) {
            // line 51
            yield "\t\t<div id=\"stats\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<div>";
            // line 54
            yield ($context["text_complete_status"] ?? null);
            yield " <span class=\"float-end\">";
            yield ($context["complete_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"";
            // line 56
            yield ($context["complete_status"] ?? null);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            yield ($context["complete_status"] ?? null);
            yield "%\"><span class=\"sr-only\">";
            yield ($context["complete_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div>";
            // line 60
            yield ($context["text_processing_status"] ?? null);
            yield " <span class=\"float-end\">";
            yield ($context["processing_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"";
            // line 62
            yield ($context["processing_status"] ?? null);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            yield ($context["processing_status"] ?? null);
            yield "%\"><span class=\"sr-only\">";
            yield ($context["processing_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div>";
            // line 66
            yield ($context["text_other_status"] ?? null);
            yield " <span class=\"float-end\">";
            yield ($context["other_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"";
            // line 68
            yield ($context["other_status"] ?? null);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            yield ($context["other_status"] ?? null);
            yield "%\"><span class=\"sr-only\">";
            yield ($context["other_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t";
        }
        // line 74
        yield "</nav>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/view/template/common/column_left.twig";
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
        return array (  294 => 74,  281 => 68,  274 => 66,  263 => 62,  256 => 60,  245 => 56,  238 => 54,  233 => 51,  231 => 50,  228 => 49,  222 => 48,  220 => 47,  217 => 46,  213 => 44,  207 => 43,  205 => 42,  202 => 41,  198 => 39,  192 => 38,  190 => 37,  187 => 36,  183 => 35,  172 => 33,  168 => 32,  159 => 31,  156 => 30,  144 => 28,  136 => 26,  133 => 25,  128 => 24,  126 => 23,  119 => 22,  116 => 21,  106 => 19,  98 => 17,  95 => 16,  90 => 15,  88 => 14,  83 => 13,  80 => 12,  70 => 10,  60 => 8,  58 => 7,  53 => 6,  48 => 5,  46 => 4,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"column-left\">
\t<div id=\"navigation\"><span class=\"fa-solid fa-bars\"></span> {{ text_navigation }}</div>
\t<ul id=\"menu\">
\t\t{% set i = 0 %}
\t\t{% for menu in menus %}
\t\t\t<li id=\"{{ menu.id }}\">
\t\t\t\t{% if menu.href %}
\t\t\t\t\t<a href=\"{{ menu.href }}\"><i class=\"{{ menu.icon }}\"></i> {{ menu.name }}</a>
\t\t\t\t{% else %}
\t\t\t\t\t<a href=\"#collapse-{{ i }}\" data-bs-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"{{ menu.icon }}\"></i> {{ menu.name }}</a>
\t\t\t\t{% endif %}
\t\t\t\t{% if menu.children %}
\t\t\t\t\t<ul id=\"collapse-{{ i }}\" class=\"collapse\">
\t\t\t\t\t\t{% set j = 0 %}
\t\t\t\t\t\t{% for children_1 in menu.children %}
\t\t\t\t\t\t\t<li>{% if children_1.href %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ children_1.href }}\">{{ children_1.name }}</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a href=\"#collapse-{{ i }}-{{ j }}\" data-bs-toggle=\"collapse\" class=\"parent collapsed\">{{ children_1.name }}</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if children_1.children %}
\t\t\t\t\t\t\t\t\t<ul id=\"collapse-{{ i }}-{{ j }}\" class=\"collapse\">
\t\t\t\t\t\t\t\t\t\t{% set k = 0 %}
\t\t\t\t\t\t\t\t\t\t{% for children_2 in children_1.children %}
\t\t\t\t\t\t\t\t\t\t\t<li>{% if children_2.href %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ children_2.href }}\">{{ children_2.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#collapse-{{ i }}-{{ j }}-{{ k }}\" data-bs-toggle=\"collapse\" class=\"parent collapsed\">{{ children_2.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if children_2.children %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul id=\"collapse-{{ i }}-{{ j }}-{{ k }}\" class=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for children_3 in children_2.children %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ children_3.href }}\">{{ children_3.name }}</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}</li>
\t\t\t\t\t\t\t\t\t\t\t{% set k = k + 1 %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% set j = j + 1 %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t{% endif %}
\t\t\t</li>
\t\t\t{% set i = i + 1 %}
\t\t{% endfor %}
\t</ul>
\t{% if statistics_status %}
\t\t<div id=\"stats\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<div>{{ text_complete_status }} <span class=\"float-end\">{{ complete_status }}%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"{{ complete_status }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ complete_status }}%\"><span class=\"sr-only\">{{ complete_status }}%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div>{{ text_processing_status }} <span class=\"float-end\">{{ processing_status }}%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"{{ processing_status }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ processing_status }}%\"><span class=\"sr-only\">{{ processing_status }}%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div>{{ text_other_status }} <span class=\"float-end\">{{ other_status }}%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"{{ other_status }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ other_status }}%\"><span class=\"sr-only\">{{ other_status }}%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t{% endif %}
</nav>
", "admin/view/template/common/column_left.twig", "/var/www/html/opencart/upload/admin/view/template/common/column_left.twig");
    }
}
