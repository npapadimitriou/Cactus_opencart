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

/* catalog/view/template/checkout/shipping_method.twig */
class __TwigTemplate_3e9561f119d6a81e60772d307964ae916c0a5d5c9261c52350c5dcc1fb7f05e2 extends Template
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
        yield "<fieldset>
  <legend>";
        // line 2
        yield ($context["heading_title"] ?? null);
        yield "</legend>
  <div class=\"input-group\">
    <span class=\"input-group-text\"><i class=\"fa fa-truck\"></i></span><input type=\"text\" name=\"shipping_method\" value=\"";
        // line 4
        yield ($context["shipping_method"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_shipping_method"] ?? null);
        yield "\" id=\"input-shipping-method\" class=\"form-control\" readonly/>
    <button type=\"button\" id=\"button-shipping-methods\" class=\"btn btn-primary\">";
        // line 5
        yield ($context["button_choose"] ?? null);
        yield "</button>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"";
        // line 7
        yield ($context["code"] ?? null);
        yield "\" id=\"input-shipping-code\"/>
  <div id=\"error-shipping-method\" class=\"invalid-feedback\"></div>
</fieldset>
<script type=\"text/javascript\"><!--
\$('#button-shipping-methods').on('click', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_method.quote&language=";
        // line 16
        yield ($context["language"] ?? null);
        yield "',
            dataType: 'json',
            beforeSend: function() {
                \$(element).button('loading');
            },
            complete: function() {
                \$(element).button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('#input-shipping-method').removeClass('is-invalid');
                \$('#error-shipping-method').removeClass('d-block');

                if (json['error']) {
                    \$('#input-shipping-method').addClass('is-invalid');
                    \$('#error-shipping-method').html(json['error']).addClass('d-block');
                }

                if (json['shipping_methods']) {
                    \$('#modal-shipping').remove();

                    html = '<div id=\"modal-shipping\" class=\"modal\">';
                    html += '  <div class=\"modal-dialog modal-dialog-centered\">';
                    html += '    <div class=\"modal-content\">';
                    html += '      <div class=\"modal-header\">';
                    html += '        <h5 class=\"modal-title\"><i class=\"fa fa-truck\"></i> ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_shipping_method"] ?? null), "js");
        yield "</h5>';
                    html += '        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
                    html += '      </div>';
                    html += '      <div class=\"modal-body\">';
                    html += '        <form id=\"form-shipping-method\">';
                    html += '          <p>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_shipping"] ?? null), "js");
        yield "</p>';

                    for (i in json['shipping_methods']) {
                        html += '<p><strong>' + json['shipping_methods'][i]['name'] + '</strong></p>';

                        if (!json['shipping_methods'][i]['error']) {
                            var first = true;

                            for (j in json['shipping_methods'][i]['quote']) {
                                html += '<div class=\"form-check\">';

                                var code = i + '-' + j.replaceAll('_', '-');

                                html += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" id=\"input-shipping-method-' + code + '\"';

                                var method = \$('#input-shipping-code').val();

                                if ((json['shipping_methods'][i]['quote'][j]['code'] == method) || (!method && first)) {
                                    html += ' checked';

                                    first = false;
                                }

                                html += '/>';
                                html += '  <label for=\"input-shipping-method-' + code + '\">' + json['shipping_methods'][i]['quote'][j]['name'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</label>';
                                html += '</div>';
                            }
                        } else {
                            html += '<div class=\"alert alert-danger\">' + json['shipping_methods'][i]['error'] + '</div>';
                        }
                    }

                    html += '          <div class=\"text-end\">';
                    html += '            <button type=\"submit\" id=\"button-shipping-method\" class=\"btn btn-primary\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_continue"] ?? null), "js");
        yield "</button>';
                    html += '          </div>';
                    html += '        </form>';
                    html += '      </div>';
                    html += '    </div>';
                    html += '  </div>';
                    html += '</div>';

                    \$('body').append(html);

                    \$('#modal-shipping').modal('show');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$(document).on('submit', '#form-shipping-method', function(e) {
    e.preventDefault();

    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_method.save&language=";
        // line 107
        yield ($context["language"] ?? null);
        yield "',
            type: 'post',
            data: \$('#form-shipping-method').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-shipping-method').button('loading');
            },
            complete: function() {
                \$('#button-shipping-method').button('reset');
            },
            success: function(json) {
                console.log(json);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#modal-shipping').modal('hide');

                    \$('#input-shipping-method').val(\$('input[name=\\'shipping_method\\']:checked').parent().find('label').text());
                    \$('#input-shipping-code').val(\$('input[name=\\'shipping_method\\']:checked').val());

                    \$('#input-payment-method').val('');

                    \$('#header-cart').load('index.php?route=common/cart.info&language=";
        // line 139
        yield ($context["language"] ?? null);
        yield "');
                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 140
        yield ($context["language"] ?? null);
        yield "');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
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
        return "catalog/view/template/checkout/shipping_method.twig";
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
        return array (  211 => 140,  207 => 139,  172 => 107,  142 => 80,  106 => 47,  98 => 42,  69 => 16,  57 => 7,  52 => 5,  46 => 4,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<fieldset>
  <legend>{{ heading_title }}</legend>
  <div class=\"input-group\">
    <span class=\"input-group-text\"><i class=\"fa fa-truck\"></i></span><input type=\"text\" name=\"shipping_method\" value=\"{{ shipping_method }}\" placeholder=\"{{ entry_shipping_method }}\" id=\"input-shipping-method\" class=\"form-control\" readonly/>
    <button type=\"button\" id=\"button-shipping-methods\" class=\"btn btn-primary\">{{ button_choose }}</button>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"{{ code }}\" id=\"input-shipping-code\"/>
  <div id=\"error-shipping-method\" class=\"invalid-feedback\"></div>
</fieldset>
<script type=\"text/javascript\"><!--
\$('#button-shipping-methods').on('click', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_method.quote&language={{ language }}',
            dataType: 'json',
            beforeSend: function() {
                \$(element).button('loading');
            },
            complete: function() {
                \$(element).button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('#input-shipping-method').removeClass('is-invalid');
                \$('#error-shipping-method').removeClass('d-block');

                if (json['error']) {
                    \$('#input-shipping-method').addClass('is-invalid');
                    \$('#error-shipping-method').html(json['error']).addClass('d-block');
                }

                if (json['shipping_methods']) {
                    \$('#modal-shipping').remove();

                    html = '<div id=\"modal-shipping\" class=\"modal\">';
                    html += '  <div class=\"modal-dialog modal-dialog-centered\">';
                    html += '    <div class=\"modal-content\">';
                    html += '      <div class=\"modal-header\">';
                    html += '        <h5 class=\"modal-title\"><i class=\"fa fa-truck\"></i> {{ text_shipping_method|escape('js') }}</h5>';
                    html += '        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
                    html += '      </div>';
                    html += '      <div class=\"modal-body\">';
                    html += '        <form id=\"form-shipping-method\">';
                    html += '          <p>{{ text_shipping|escape('js') }}</p>';

                    for (i in json['shipping_methods']) {
                        html += '<p><strong>' + json['shipping_methods'][i]['name'] + '</strong></p>';

                        if (!json['shipping_methods'][i]['error']) {
                            var first = true;

                            for (j in json['shipping_methods'][i]['quote']) {
                                html += '<div class=\"form-check\">';

                                var code = i + '-' + j.replaceAll('_', '-');

                                html += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" id=\"input-shipping-method-' + code + '\"';

                                var method = \$('#input-shipping-code').val();

                                if ((json['shipping_methods'][i]['quote'][j]['code'] == method) || (!method && first)) {
                                    html += ' checked';

                                    first = false;
                                }

                                html += '/>';
                                html += '  <label for=\"input-shipping-method-' + code + '\">' + json['shipping_methods'][i]['quote'][j]['name'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</label>';
                                html += '</div>';
                            }
                        } else {
                            html += '<div class=\"alert alert-danger\">' + json['shipping_methods'][i]['error'] + '</div>';
                        }
                    }

                    html += '          <div class=\"text-end\">';
                    html += '            <button type=\"submit\" id=\"button-shipping-method\" class=\"btn btn-primary\">{{ button_continue|escape('js') }}</button>';
                    html += '          </div>';
                    html += '        </form>';
                    html += '      </div>';
                    html += '    </div>';
                    html += '  </div>';
                    html += '</div>';

                    \$('body').append(html);

                    \$('#modal-shipping').modal('show');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$(document).on('submit', '#form-shipping-method', function(e) {
    e.preventDefault();

    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_method.save&language={{ language }}',
            type: 'post',
            data: \$('#form-shipping-method').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-shipping-method').button('loading');
            },
            complete: function() {
                \$('#button-shipping-method').button('reset');
            },
            success: function(json) {
                console.log(json);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#modal-shipping').modal('hide');

                    \$('#input-shipping-method').val(\$('input[name=\\'shipping_method\\']:checked').parent().find('label').text());
                    \$('#input-shipping-code').val(\$('input[name=\\'shipping_method\\']:checked').val());

                    \$('#input-payment-method').val('');

                    \$('#header-cart').load('index.php?route=common/cart.info&language={{ language }}');
                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language={{ language }}');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});
//--></script>", "catalog/view/template/checkout/shipping_method.twig", "/var/www/html/opencart/upload/catalog/view/template/checkout/shipping_method.twig");
    }
}
