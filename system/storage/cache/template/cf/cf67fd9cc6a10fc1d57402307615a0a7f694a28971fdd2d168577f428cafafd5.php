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

/* extension/opencart/admin/view/template/dashboard/map_info.twig */
class __TwigTemplate_eccc60b52aea8327a7464f2a01fe8a29ef8b6e5d01cb4d190d73b412016f880d extends Template
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
  <div class=\"card-header\"><i class=\"fa-solid fa-globe\"></i> ";
        // line 2
        yield ($context["heading_title"] ?? null);
        yield "</div>
  <div class=\"card-body\">
    <div id=\"vmap\" style=\"width: 100%; height: 260px;\"></div>
  </div>
</div>
<link type=\"text/css\" href=\"view/javascript/jquery/jqvmap/jqvmap.css\" rel=\"stylesheet\" media=\"screen\"/>
<script type=\"text/javascript\" src=\"view/javascript/jquery/jqvmap/jquery.vmap.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/jquery/jqvmap/maps/jquery.vmap.world.js\"></script>
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=extension/opencart/dashboard/map.map&user_token=";
        // line 13
        yield ($context["user_token"] ?? null);
        yield "',
        dataType: 'json',
        success: function(json) {
            data = [];

            for (i in json) {
                data[i] = json[i]['total'];
            }

            \$('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: '#FFFFFF',
                borderColor: '#FFFFFF',
                color: '#9FD5F1',
                hoverOpacity: 0.7,
                selectedColor: '#666666',
                enableZoom: true,
                showTooltip: true,
                values: data,
                normalizeFunction: 'polynomial',
                onLabelShow: function(event, label, code) {
                    if (json[code]) {
                        label.html('<strong>' + label.text() + '</strong><br />' + '";
        // line 35
        yield ($context["text_order"] ?? null);
        yield " ' + json[code]['total'] + '<br />' + '";
        yield ($context["text_sale"] ?? null);
        yield " ' + json[code]['amount']);
                    }
                }
            });
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/dashboard/map_info.twig";
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
        return array (  80 => 35,  55 => 13,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-3\">
  <div class=\"card-header\"><i class=\"fa-solid fa-globe\"></i> {{ heading_title }}</div>
  <div class=\"card-body\">
    <div id=\"vmap\" style=\"width: 100%; height: 260px;\"></div>
  </div>
</div>
<link type=\"text/css\" href=\"view/javascript/jquery/jqvmap/jqvmap.css\" rel=\"stylesheet\" media=\"screen\"/>
<script type=\"text/javascript\" src=\"view/javascript/jquery/jqvmap/jquery.vmap.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/jquery/jqvmap/maps/jquery.vmap.world.js\"></script>
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=extension/opencart/dashboard/map.map&user_token={{ user_token }}',
        dataType: 'json',
        success: function(json) {
            data = [];

            for (i in json) {
                data[i] = json[i]['total'];
            }

            \$('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: '#FFFFFF',
                borderColor: '#FFFFFF',
                color: '#9FD5F1',
                hoverOpacity: 0.7,
                selectedColor: '#666666',
                enableZoom: true,
                showTooltip: true,
                values: data,
                normalizeFunction: 'polynomial',
                onLabelShow: function(event, label, code) {
                    if (json[code]) {
                        label.html('<strong>' + label.text() + '</strong><br />' + '{{ text_order }} ' + json[code]['total'] + '<br />' + '{{ text_sale }} ' + json[code]['amount']);
                    }
                }
            });
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
", "extension/opencart/admin/view/template/dashboard/map_info.twig", "/var/www/html/opencart/upload/extension/opencart/admin/view/template/dashboard/map_info.twig");
    }
}
