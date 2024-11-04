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

/* admin/view/template/common/language.twig */
class __TwigTemplate_2c656a65774e11cd227ce566c30884f6b1782b30f80658cf8a0889b56c04cf42 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2
            yield "  ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2) == ($context["code"] ?? null))) {
                // line 3
                yield "    <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3);
                yield "\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 3);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3);
                yield "\"/></a>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        yield "<ul class=\"dropdown-menu\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 8
            yield "    <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 8);
            yield "\" class=\"dropdown-item\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 8);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 8);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 8);
            yield "\"/> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 8);
            yield "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "</ul>
<input type=\"hidden\" name=\"redirect\" value=\"";
        // line 11
        yield ($context["redirect"] ?? null);
        yield "\" id=\"input-redirect\"/>
<script type=\"text/javascript\"><!--
\$('#nav-language .dropdown-item').on('click', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=common/language.save&user_token=";
        // line 19
        yield ($context["user_token"] ?? null);
        yield "',
        type: 'post',
        data: 'code=' + \$(element).attr('href') + '&redirect=' + encodeURIComponent(\$('#input-redirect').val()),
        dataType: 'json',
        success: function(json) {
            console.log(\$(element).attr('href'));
            console.log(\$('input-redirect').val());

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/view/template/common/language.twig";
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
        return array (  99 => 19,  88 => 11,  85 => 10,  68 => 8,  64 => 7,  61 => 6,  45 => 3,  42 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for language in languages %}
  {% if language.code == code %}
    <a href=\"{{ language.code }}\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><img src=\"{{ language.image }}\" alt=\"{{ language.name }}\" title=\"{{ language.name }}\"/></a>
  {% endif %}
{% endfor %}
<ul class=\"dropdown-menu\">
  {% for language in languages %}
    <li><a href=\"{{ language.code }}\" class=\"dropdown-item\"><img src=\"{{ language.image }}\" alt=\"{{ language.name }}\" title=\"{{ language.name }}\"/> {{ language.name }}</a></li>
  {% endfor %}
</ul>
<input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\" id=\"input-redirect\"/>
<script type=\"text/javascript\"><!--
\$('#nav-language .dropdown-item').on('click', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=common/language.save&user_token={{ user_token }}',
        type: 'post',
        data: 'code=' + \$(element).attr('href') + '&redirect=' + encodeURIComponent(\$('#input-redirect').val()),
        dataType: 'json',
        success: function(json) {
            console.log(\$(element).attr('href'));
            console.log(\$('input-redirect').val());

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>", "admin/view/template/common/language.twig", "/var/www/html/opencart/upload/admin/view/template/common/language.twig");
    }
}
