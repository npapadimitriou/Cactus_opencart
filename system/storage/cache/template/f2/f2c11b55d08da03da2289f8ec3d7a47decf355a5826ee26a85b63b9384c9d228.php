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

/* install/view/template/install/step_3.twig */
class __TwigTemplate_2f6cfb771855e7474a54549e922786916474342836cc8e3cf823288ffb15b757 extends Template
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
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container\">
      <div class=\"float-end\">";
        // line 5
        yield ($context["language"] ?? null);
        yield "</div>
      <h1>";
        // line 6
        yield ($context["heading_title"] ?? null);
        yield "</h1>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-cogs\"></i> ";
        // line 11
        yield ($context["text_step_3"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-step-3\">
          <fieldset>
            <legend>";
        // line 15
        yield ($context["text_db_connection"] ?? null);
        yield "</legend>
            <div class=\"row\">
              <div class=\"col-md-4 order-md-2\">
                <div class=\"alert alert-info\">
                  <p>";
        // line 19
        yield ($context["text_help"] ?? null);
        yield "</p>
                  <ul class=\"text-info\">
                    <li><strong><a href=\"https://docs.cpanel.net/cpanel/databases/mysql-databases/\" target=\"_blank\">";
        // line 21
        yield ($context["text_cpanel"] ?? null);
        yield "</a></strong></li>
                    <li><strong><a href=\"https://support.plesk.com/hc/en-us/articles/115004263014-How-to-create-a-database-in-Plesk\" target=\"_blank\">";
        // line 22
        yield ($context["text_plesk"] ?? null);
        yield "</a></strong></li>
                  </ul>
                </div>
              </div>
              <div class=\"col-md-8 order-md-1\">
                <div class=\"row\">
                  <div class=\"col-12 col-md-6 mb-3\">
                    <label for=\"input-db-driver\" class=\"form-label\">";
        // line 29
        yield ($context["entry_db_driver"] ?? null);
        yield "</label>
                    <select name=\"db_driver\" id=\"input-db-driver\" class=\"form-control\">
                      ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["drivers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["driver"]) {
            // line 32
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "value", [], "any", false, false, false, 32);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "text", [], "any", false, false, false, 32);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['driver'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "                    </select>
                    <div id=\"error-db-driver\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 required\">
                    <label for=\"input-db-hostname\" class=\"form-label\">";
        // line 38
        yield ($context["entry_db_hostname"] ?? null);
        yield "</label>
                    <input type=\"text\" name=\"db_hostname\" value=\"localhost\" placeholder=\"";
        // line 39
        yield ($context["entry_db_hostname"] ?? null);
        yield "\" id=\"input-db-hostname\" class=\"form-control\"/>
                    <div id=\"error-db-hostname\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 required\">
                    <label for=\"input-db-username\" class=\"form-label\">";
        // line 43
        yield ($context["entry_db_username"] ?? null);
        yield "</label>
                    <input type=\"text\" name=\"db_username\" value=\"root\" placeholder=\"";
        // line 44
        yield ($context["entry_db_username"] ?? null);
        yield "\" id=\"input-db-username\" class=\"form-control\"/>
                    <div id=\"error-db-username\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3\">
                    <label for=\"input-db-password\" class=\"form-label\">";
        // line 48
        yield ($context["entry_db_password"] ?? null);
        yield "</label>
                    <input type=\"password\" name=\"db_password\" value=\"\" placeholder=\"";
        // line 49
        yield ($context["entry_db_password"] ?? null);
        yield "\" id=\"input-db-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 required\">
                    <label for=\"input-db-database\" class=\"form-label\">";
        // line 52
        yield ($context["entry_db_database"] ?? null);
        yield "</label>
                    <input type=\"text\" name=\"db_database\" value=\"\" placeholder=\"";
        // line 53
        yield ($context["entry_db_database"] ?? null);
        yield "\" id=\"input-db-database\" class=\"form-control\"/>
                    <div id=\"error-db-database\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3\">
                    <label for=\"input-db-prefix\" class=\"form-label\">";
        // line 57
        yield ($context["entry_db_prefix"] ?? null);
        yield "</label>
                    <input type=\"text\" name=\"db_prefix\" value=\"oc_\" placeholder=\"";
        // line 58
        yield ($context["entry_db_prefix"] ?? null);
        yield "\" id=\"input-db-prefix\" class=\"form-control\"/>
                    <div id=\"error-db-prefix\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 required\">
                    <label for=\"input-db-port\" class=\"form-label\">";
        // line 62
        yield ($context["entry_db_port"] ?? null);
        yield "</label>
                    <input type=\"text\" name=\"db_port\" value=\"3306\" placeholder=\"";
        // line 63
        yield ($context["entry_db_port"] ?? null);
        yield "\" id=\"input-db-port\" class=\"form-control\"/>
                    <div id=\"error-db-port\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 db-advanced\">
                    <label for=\"input-db-advanced\" class=\"form-label\">";
        // line 67
        yield ($context["entry_db_advanced"] ?? null);
        yield "</label>
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"advanced\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"advanced\" value=\"1\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-advanced\" class=\"form-check-input collapsed\"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
          <div class=\"db-advanced\">
            <div id=\"collapse-advanced\" class=\"collapse\">
              <fieldset>
                <legend>";
        // line 80
        yield ($context["text_db_advanced"] ?? null);
        yield "</legend>
                <div class=\"row\">
                  <div class=\"col-md-4 order-md-2\">
                    <div class=\"alert alert-info\">";
        // line 83
        yield ($context["text_db_ssl"] ?? null);
        yield "</div>
                  </div>
                  <div class=\"col-md-8 order-md-1\">
                    <div class=\"row\">
                      <div class=\"mb-3\">
                        <label for=\"input-db-ssl-key\" class=\"form-label\">";
        // line 88
        yield ($context["entry_db_ssl_key"] ?? null);
        yield "</label> <textarea name=\"db_ssl_key\" placeholder=\"";
        yield ($context["entry_db_ssl_key"] ?? null);
        yield "\" id=\"input-db-ssl-key\" rows=\"5\" class=\"form-control\">";
        yield ($context["db_ssl_key"] ?? null);
        yield "</textarea>
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"input-db-ssl-cert\" class=\"form-label\">";
        // line 91
        yield ($context["entry_db_ssl_cert"] ?? null);
        yield "</label> <textarea name=\"db_ssl_cert\" placeholder=\"";
        yield ($context["entry_db_ssl_cert"] ?? null);
        yield "\" id=\"input-db-ssl-cert\" rows=\"5\" class=\"form-control\">";
        yield ($context["db_ssl_cert"] ?? null);
        yield "</textarea>
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"input-db-ssl-ca\" class=\"form-label\">";
        // line 94
        yield ($context["entry_db_ssl_ca"] ?? null);
        yield "</label> <textarea name=\"db_ssl_ca\" placeholder=\"";
        yield ($context["entry_db_ssl_ca"] ?? null);
        yield "\" id=\"input-db-ssl-ca\" rows=\"5\" class=\"form-control\">";
        yield ($context["db_ssl_ca"] ?? null);
        yield "</textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
          <fieldset>
            <legend>";
        // line 103
        yield ($context["text_db_administration"] ?? null);
        yield "</legend>
            <div class=\"row\">
              <div class=\"col-md-8\">
                <div class=\"row mb-3\">
                  <div class=\"col-12 col-md-6 required\">
                    <label for=\"input-username\" class=\"form-label\">";
        // line 108
        yield ($context["entry_username"] ?? null);
        yield "</label> <input type=\"text\" name=\"username\" value=\"admin\" id=\"input-username\" class=\"form-control\"/>
                    <div id=\"error-username\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 required\">
                    <label for=\"input-password\" class=\"form-label\">";
        // line 112
        yield ($context["entry_password"] ?? null);
        yield "</label> <input type=\"text\" name=\"password\" value=\"\" id=\"input-password\" class=\"form-control\"/>
                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"required\">
                  <label for=\"input-email\" class=\"form-label\">";
        // line 117
        yield ($context["entry_email"] ?? null);
        yield "</label> <input type=\"text\" name=\"email\" value=\"\" id=\"input-email\" class=\"form-control\"/>
                  <div id=\"error-email\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            </div>
          </fieldset>
          <div class=\"row\">
            <div class=\"col-md-8\">
              <div class=\"row\">
                <div class=\"col\"><a href=\"";
        // line 126
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-light\">";
        yield ($context["button_back"] ?? null);
        yield "</a></div>
                <div class=\"col text-end\"><input type=\"submit\" value=\"";
        // line 127
        yield ($context["button_continue"] ?? null);
        yield "\" class=\"btn btn-primary\"/></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-db-driver').on('change', function(e) {
    e.preventDefault();

    if (\$(this).val() == 'mysqli') {
        \$('.db-advanced').show();
    } else {
        \$('.db-advanced').hide();
    }
});

\$('#input-db-driver').trigger('change');

\$('#form-step-3').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=install/step_3.save&language=";
        // line 155
        yield ($context["language_code"] ?? null);
        yield "',
        type: 'post',
        data: \$('#form-step-3').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-continue').prop('disabled', true);
        },
        complete: function() {
            \$('#button-continue').prop('disabled', false);
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$(element).find('.is-invalid').removeClass('is-invalid');
            \$(element).find('.invalid-feedback').removeClass('d-block');

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-step-3').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }


                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 194
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
        return "install/view/template/install/step_3.twig";
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
        return array (  361 => 194,  319 => 155,  288 => 127,  282 => 126,  270 => 117,  262 => 112,  255 => 108,  247 => 103,  231 => 94,  221 => 91,  211 => 88,  203 => 83,  197 => 80,  181 => 67,  174 => 63,  170 => 62,  163 => 58,  159 => 57,  152 => 53,  148 => 52,  142 => 49,  138 => 48,  131 => 44,  127 => 43,  120 => 39,  116 => 38,  110 => 34,  99 => 32,  95 => 31,  90 => 29,  80 => 22,  76 => 21,  71 => 19,  64 => 15,  57 => 11,  49 => 6,  45 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container\">
      <div class=\"float-end\">{{ language }}</div>
      <h1>{{ heading_title }}</h1>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-cogs\"></i> {{ text_step_3 }}</div>
      <div class=\"card-body\">
        <form id=\"form-step-3\">
          <fieldset>
            <legend>{{ text_db_connection }}</legend>
            <div class=\"row\">
              <div class=\"col-md-4 order-md-2\">
                <div class=\"alert alert-info\">
                  <p>{{ text_help }}</p>
                  <ul class=\"text-info\">
                    <li><strong><a href=\"https://docs.cpanel.net/cpanel/databases/mysql-databases/\" target=\"_blank\">{{ text_cpanel }}</a></strong></li>
                    <li><strong><a href=\"https://support.plesk.com/hc/en-us/articles/115004263014-How-to-create-a-database-in-Plesk\" target=\"_blank\">{{ text_plesk }}</a></strong></li>
                  </ul>
                </div>
              </div>
              <div class=\"col-md-8 order-md-1\">
                <div class=\"row\">
                  <div class=\"col-12 col-md-6 mb-3\">
                    <label for=\"input-db-driver\" class=\"form-label\">{{ entry_db_driver }}</label>
                    <select name=\"db_driver\" id=\"input-db-driver\" class=\"form-control\">
                      {% for driver in drivers %}
                        <option value=\"{{ driver.value }}\">{{ driver.text }}</option>
                      {% endfor %}
                    </select>
                    <div id=\"error-db-driver\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 required\">
                    <label for=\"input-db-hostname\" class=\"form-label\">{{ entry_db_hostname }}</label>
                    <input type=\"text\" name=\"db_hostname\" value=\"localhost\" placeholder=\"{{ entry_db_hostname }}\" id=\"input-db-hostname\" class=\"form-control\"/>
                    <div id=\"error-db-hostname\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 required\">
                    <label for=\"input-db-username\" class=\"form-label\">{{ entry_db_username }}</label>
                    <input type=\"text\" name=\"db_username\" value=\"root\" placeholder=\"{{ entry_db_username }}\" id=\"input-db-username\" class=\"form-control\"/>
                    <div id=\"error-db-username\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3\">
                    <label for=\"input-db-password\" class=\"form-label\">{{ entry_db_password }}</label>
                    <input type=\"password\" name=\"db_password\" value=\"\" placeholder=\"{{ entry_db_password }}\" id=\"input-db-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 required\">
                    <label for=\"input-db-database\" class=\"form-label\">{{ entry_db_database }}</label>
                    <input type=\"text\" name=\"db_database\" value=\"\" placeholder=\"{{ entry_db_database }}\" id=\"input-db-database\" class=\"form-control\"/>
                    <div id=\"error-db-database\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3\">
                    <label for=\"input-db-prefix\" class=\"form-label\">{{ entry_db_prefix }}</label>
                    <input type=\"text\" name=\"db_prefix\" value=\"oc_\" placeholder=\"{{ entry_db_prefix }}\" id=\"input-db-prefix\" class=\"form-control\"/>
                    <div id=\"error-db-prefix\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 required\">
                    <label for=\"input-db-port\" class=\"form-label\">{{ entry_db_port }}</label>
                    <input type=\"text\" name=\"db_port\" value=\"3306\" placeholder=\"{{ entry_db_port }}\" id=\"input-db-port\" class=\"form-control\"/>
                    <div id=\"error-db-port\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 mb-3 db-advanced\">
                    <label for=\"input-db-advanced\" class=\"form-label\">{{ entry_db_advanced }}</label>
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"advanced\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"advanced\" value=\"1\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-advanced\" class=\"form-check-input collapsed\"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
          <div class=\"db-advanced\">
            <div id=\"collapse-advanced\" class=\"collapse\">
              <fieldset>
                <legend>{{ text_db_advanced }}</legend>
                <div class=\"row\">
                  <div class=\"col-md-4 order-md-2\">
                    <div class=\"alert alert-info\">{{ text_db_ssl }}</div>
                  </div>
                  <div class=\"col-md-8 order-md-1\">
                    <div class=\"row\">
                      <div class=\"mb-3\">
                        <label for=\"input-db-ssl-key\" class=\"form-label\">{{ entry_db_ssl_key }}</label> <textarea name=\"db_ssl_key\" placeholder=\"{{ entry_db_ssl_key }}\" id=\"input-db-ssl-key\" rows=\"5\" class=\"form-control\">{{ db_ssl_key }}</textarea>
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"input-db-ssl-cert\" class=\"form-label\">{{ entry_db_ssl_cert }}</label> <textarea name=\"db_ssl_cert\" placeholder=\"{{ entry_db_ssl_cert }}\" id=\"input-db-ssl-cert\" rows=\"5\" class=\"form-control\">{{ db_ssl_cert }}</textarea>
                      </div>
                      <div class=\"mb-3\">
                        <label for=\"input-db-ssl-ca\" class=\"form-label\">{{ entry_db_ssl_ca }}</label> <textarea name=\"db_ssl_ca\" placeholder=\"{{ entry_db_ssl_ca }}\" id=\"input-db-ssl-ca\" rows=\"5\" class=\"form-control\">{{ db_ssl_ca }}</textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
          <fieldset>
            <legend>{{ text_db_administration }}</legend>
            <div class=\"row\">
              <div class=\"col-md-8\">
                <div class=\"row mb-3\">
                  <div class=\"col-12 col-md-6 required\">
                    <label for=\"input-username\" class=\"form-label\">{{ entry_username }}</label> <input type=\"text\" name=\"username\" value=\"admin\" id=\"input-username\" class=\"form-control\"/>
                    <div id=\"error-username\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"col-12 col-md-6 required\">
                    <label for=\"input-password\" class=\"form-label\">{{ entry_password }}</label> <input type=\"text\" name=\"password\" value=\"\" id=\"input-password\" class=\"form-control\"/>
                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"required\">
                  <label for=\"input-email\" class=\"form-label\">{{ entry_email }}</label> <input type=\"text\" name=\"email\" value=\"\" id=\"input-email\" class=\"form-control\"/>
                  <div id=\"error-email\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            </div>
          </fieldset>
          <div class=\"row\">
            <div class=\"col-md-8\">
              <div class=\"row\">
                <div class=\"col\"><a href=\"{{ back }}\" class=\"btn btn-light\">{{ button_back }}</a></div>
                <div class=\"col text-end\"><input type=\"submit\" value=\"{{ button_continue }}\" class=\"btn btn-primary\"/></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-db-driver').on('change', function(e) {
    e.preventDefault();

    if (\$(this).val() == 'mysqli') {
        \$('.db-advanced').show();
    } else {
        \$('.db-advanced').hide();
    }
});

\$('#input-db-driver').trigger('change');

\$('#form-step-3').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=install/step_3.save&language={{ language_code }}',
        type: 'post',
        data: \$('#form-step-3').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-continue').prop('disabled', true);
        },
        complete: function() {
            \$('#button-continue').prop('disabled', false);
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$(element).find('.is-invalid').removeClass('is-invalid');
            \$(element).find('.invalid-feedback').removeClass('d-block');

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                if (json['error']['warning']) {
                    \$('#form-step-3').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }


                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "install/view/template/install/step_3.twig", "/var/www/html/opencart/upload/install/view/template/install/step_3.twig");
    }
}
