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

/* admin/view/template/common/dashboard.twig */
class __TwigTemplate_ce4703394208d72d351fda63b1a5adcb407b6116d618e6cf3fa8e228d61e7ace extends Template
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
        yield ($context["header"] ?? null);
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      ";
        // line 5
        if (($context["developer_status"] ?? null)) {
            // line 6
            yield "        <div class=\"float-end\">
          <button type=\"button\" id=\"button-setting\" data-bs-toggle=\"tooltip\" title=\"";
            // line 7
            yield ($context["button_developer"] ?? null);
            yield "\" class=\"btn btn-info\"><i class=\"fa-solid fa-cog\"></i></button>
        </div>
      ";
        }
        // line 10
        yield "      <h1>";
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 20
            yield "      <div class=\"row\">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["dashboard_1"]) {
                // line 22
                yield "          ";
                $context["class"] = Twig\Extension\CoreExtension::sprintf("col-lg-%s %s", CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_1"], "width", [], "any", false, false, false, 22), "col-md-3 col-sm-6");
                // line 23
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["dashboard_2"]) {
                    // line 24
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_2"], "width", [], "any", false, false, false, 24) > 3)) {
                        // line 25
                        yield "              ";
                        $context["class"] = Twig\Extension\CoreExtension::sprintf("col-lg-%s %s", CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_1"], "width", [], "any", false, false, false, 25), "col-md-12 col-sm-12");
                        // line 26
                        yield "            ";
                    }
                    // line 27
                    yield "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                yield "          <div class=\"";
                yield ($context["class"] ?? null);
                yield " mb-3\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_1"], "output", [], "any", false, false, false, 28);
                yield "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "  </div>
  ";
        // line 33
        yield ($context["security"] ?? null);
        yield "
</div>
<script type=\"text/javascript\"><!--
\$('#button-setting').on('click', function() {
    \$.ajax({
        url: 'index.php?route=common/developer&user_token=";
        // line 38
        yield ($context["user_token"] ?? null);
        yield "',
        dataType: 'html',
        beforeSend: function() {
            \$('#button-setting').button('loading');
        },
        complete: function() {
            \$('#button-setting').button('reset');
        },
        success: function(html) {
            \$('#modal-developer').remove();

            \$('body').prepend(html);

            \$('#modal-developer').modal('show');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 59
        yield ($context["footer"] ?? null);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/view/template/common/dashboard.twig";
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
        return array (  171 => 59,  147 => 38,  139 => 33,  136 => 32,  129 => 30,  118 => 28,  112 => 27,  109 => 26,  106 => 25,  103 => 24,  98 => 23,  95 => 22,  91 => 21,  88 => 20,  84 => 19,  78 => 15,  67 => 13,  63 => 12,  57 => 10,  51 => 7,  48 => 6,  46 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      {% if developer_status %}
        <div class=\"float-end\">
          <button type=\"button\" id=\"button-setting\" data-bs-toggle=\"tooltip\" title=\"{{ button_developer }}\" class=\"btn btn-info\"><i class=\"fa-solid fa-cog\"></i></button>
        </div>
      {% endif %}
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    {% for row in rows %}
      <div class=\"row\">
        {% for dashboard_1 in row %}
          {% set class = 'col-lg-%s %s'|format(dashboard_1.width, 'col-md-3 col-sm-6') %}
          {% for dashboard_2 in row %}
            {% if dashboard_2.width > 3 %}
              {% set class = 'col-lg-%s %s'|format(dashboard_1.width, 'col-md-12 col-sm-12') %}
            {% endif %}
          {% endfor %}
          <div class=\"{{ class }} mb-3\">{{ dashboard_1.output }}</div>
        {% endfor %}
      </div>
    {% endfor %}
  </div>
  {{ security }}
</div>
<script type=\"text/javascript\"><!--
\$('#button-setting').on('click', function() {
    \$.ajax({
        url: 'index.php?route=common/developer&user_token={{ user_token }}',
        dataType: 'html',
        beforeSend: function() {
            \$('#button-setting').button('loading');
        },
        complete: function() {
            \$('#button-setting').button('reset');
        },
        success: function(html) {
            \$('#modal-developer').remove();

            \$('body').prepend(html);

            \$('#modal-developer').modal('show');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}", "admin/view/template/common/dashboard.twig", "/var/www/html/opencart/upload/admin/view/template/common/dashboard.twig");
    }
}
