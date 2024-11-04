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

/* admin/view/template/marketplace/cron.twig */
class __TwigTemplate_2b6e4a014c94f78a0f71c0fa709e470fa76ba1597be3576d9a0718ce04692271 extends Template
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
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-cron\" formaction=\"";
        // line 6
        yield ($context["delete"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-question-circle\"></i> ";
        // line 18
        yield ($context["text_instruction"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <p>";
        // line 20
        yield ($context["text_cron_1"] ?? null);
        yield "</p>
        <p>";
        // line 21
        yield ($context["text_cron_2"] ?? null);
        yield "</p>
        <div class=\"mb-3\">
          <div class=\"input-group\">
            <div class=\"input-group-text\">";
        // line 24
        yield ($context["entry_cron"] ?? null);
        yield "</div>
            <input type=\"text\" value=\"wget &quot;";
        // line 25
        yield ($context["cron"] ?? null);
        yield "&quot; --read-timeout=5400\" id=\"input-cron\" class=\"form-control\"/>
            <button type=\"button\" id=\"button-copy\" data-bs-toggle=\"tooltip\" title=\"";
        // line 26
        yield ($context["button_copy"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-regular fa-copy\"></i></button>
          </div>
        </div>
      </div>
    </div>
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 32
        yield ($context["text_list"] ?? null);
        yield "</div>
      <div id=\"cron\" class=\"card-body\">";
        // line 33
        yield ($context["list"] ?? null);
        yield "</div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#cron').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#cron').load(this.href);
});

\$('#button-copy').on('click', function() {
    var copyText = document.getElementById('input-cron');

    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);
});

\$('#cron').on('click', '.btn-success, .btn-warning, .btn-danger', function() {
    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#cron').load(\$('#form-cron').attr('data-oc-load'));
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 86
        yield ($context["footer"] ?? null);
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/view/template/marketplace/cron.twig";
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
        return array (  175 => 86,  119 => 33,  115 => 32,  106 => 26,  102 => 25,  98 => 24,  92 => 21,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  47 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-cron\" formaction=\"{{ delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-question-circle\"></i> {{ text_instruction }}</div>
      <div class=\"card-body\">
        <p>{{ text_cron_1 }}</p>
        <p>{{ text_cron_2 }}</p>
        <div class=\"mb-3\">
          <div class=\"input-group\">
            <div class=\"input-group-text\">{{ entry_cron }}</div>
            <input type=\"text\" value=\"wget &quot;{{ cron }}&quot; --read-timeout=5400\" id=\"input-cron\" class=\"form-control\"/>
            <button type=\"button\" id=\"button-copy\" data-bs-toggle=\"tooltip\" title=\"{{ button_copy }}\" class=\"btn btn-light\"><i class=\"fa-regular fa-copy\"></i></button>
          </div>
        </div>
      </div>
    </div>
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_list }}</div>
      <div id=\"cron\" class=\"card-body\">{{ list }}</div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#cron').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#cron').load(this.href);
});

\$('#button-copy').on('click', function() {
    var copyText = document.getElementById('input-cron');

    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);
});

\$('#cron').on('click', '.btn-success, .btn-warning, .btn-danger', function() {
    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#cron').load(\$('#form-cron').attr('data-oc-load'));
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "admin/view/template/marketplace/cron.twig", "/var/www/html/opencart/upload/admin/view/template/marketplace/cron.twig");
    }
}
