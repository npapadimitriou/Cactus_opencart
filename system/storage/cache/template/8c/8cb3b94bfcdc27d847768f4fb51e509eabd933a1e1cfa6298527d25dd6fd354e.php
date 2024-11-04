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

/* install/view/template/install/step_2.twig */
class __TwigTemplate_a5127c0c2458003f6cd80c96c6dc4133404fc55d4b120fa1ae1fb07713207f51 extends Template
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
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 11
        yield ($context["text_step_2"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-step-2\">
          <fieldset>
            <legend>";
        // line 15
        yield ($context["text_install_php"] ?? null);
        yield "</legend>
            <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <td class=\"w-25\"><b>";
        // line 19
        yield ($context["text_setting"] ?? null);
        yield "</b></td>
                  <td class=\"w-25\"><b>";
        // line 20
        yield ($context["text_current"] ?? null);
        yield "</b></td>
                  <td class=\"w-25\"><b>";
        // line 21
        yield ($context["text_required"] ?? null);
        yield "</b></td>
                  <td class=\"w-25 text-center\"><b>";
        // line 22
        yield ($context["text_status"] ?? null);
        yield "</b></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>";
        // line 27
        yield ($context["text_version"] ?? null);
        yield "</td>
                  <td>";
        // line 28
        yield ($context["php_version"] ?? null);
        yield "</td>
                  <td>7.4+</td>
                  <td class=\"text-center\">
                    ";
        // line 31
        if (($context["version"] ?? null)) {
            // line 32
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 34
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 35
        yield "</td>
                </tr>
                <tr";
        // line 37
        if (($context["register_globals"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 38
        yield ($context["text_global"] ?? null);
        yield "</td>
                  <td>";
        // line 39
        if (($context["register_globals"] ?? null)) {
            // line 40
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 42
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 43
        yield "</td>
                  <td>";
        // line 44
        yield ($context["text_off"] ?? null);
        yield "</td>
                  <td class=\"text-center\">
                    ";
        // line 46
        if ( !($context["register_globals"] ?? null)) {
            // line 47
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 49
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 50
        yield "</td>
                </tr>
                <tr";
        // line 52
        if (($context["magic_quotes_gpc"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 53
        yield ($context["text_magic"] ?? null);
        yield "</td>
                  <td>";
        // line 54
        if (($context["magic_quotes_gpc"] ?? null)) {
            // line 55
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 57
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 58
        yield "</td>
                  <td>";
        // line 59
        yield ($context["text_off"] ?? null);
        yield "</td>
                  <td class=\"text-center\">
                    ";
        // line 61
        if ( !($context["error_magic_quotes_gpc"] ?? null)) {
            // line 62
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 64
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 65
        yield "</td>
                </tr>
                <tr";
        // line 67
        if ( !($context["file_uploads"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 68
        yield ($context["text_file_upload"] ?? null);
        yield "</td>
                  <td>";
        // line 69
        if (($context["file_uploads"] ?? null)) {
            // line 70
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 72
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 73
        yield "</td>
                  <td>";
        // line 74
        yield ($context["text_on"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 75
        if (($context["file_uploads"] ?? null)) {
            // line 76
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 78
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 79
        yield "</td>
                </tr>
                <tr";
        // line 81
        if (($context["session_auto_start"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 82
        yield ($context["text_session"] ?? null);
        yield "</td>
                  <td>";
        // line 83
        if (($context["session_auto_start"] ?? null)) {
            // line 84
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 86
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 87
        yield "</td>
                  <td>";
        // line 88
        yield ($context["text_off"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 89
        if ( !($context["session_auto_start"] ?? null)) {
            // line 90
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 92
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 93
        yield "</td>
                </tr>
              </tbody>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 99
        yield ($context["text_install_extension"] ?? null);
        yield "</legend>
            <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <td class=\"w-25\"><b>";
        // line 103
        yield ($context["text_extension"] ?? null);
        yield "</b></td>
                  <td class=\"w-25\"><b>";
        // line 104
        yield ($context["text_current"] ?? null);
        yield "</b></td>
                  <td class=\"w-25\"><b>";
        // line 105
        yield ($context["text_required"] ?? null);
        yield "</b></td>
                  <td class=\"w-25 text-center\"><b>";
        // line 106
        yield ($context["text_status"] ?? null);
        yield "</b></td>
                </tr>
              </thead>
              <tbody>
                <tr";
        // line 110
        if ( !($context["db"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 111
        yield ($context["text_db"] ?? null);
        yield "</td>
                  <td>";
        // line 112
        if (($context["db"] ?? null)) {
            // line 113
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 115
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 116
        yield "</td>
                  <td>";
        // line 117
        yield ($context["text_on"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 118
        if (($context["db"] ?? null)) {
            // line 119
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 121
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 122
        yield "</td>
                </tr>
                <tr";
        // line 124
        if ( !($context["gd"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 125
        yield ($context["text_gd"] ?? null);
        yield "</td>
                  <td>";
        // line 126
        if (($context["gd"] ?? null)) {
            // line 127
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 129
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 130
        yield "</td>
                  <td>";
        // line 131
        yield ($context["text_on"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 132
        if (($context["gd"] ?? null)) {
            // line 133
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 135
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 136
        yield "</td>
                </tr>
                <tr";
        // line 138
        if ( !($context["curl"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 139
        yield ($context["text_curl"] ?? null);
        yield "</td>
                  <td>";
        // line 140
        if (($context["curl"] ?? null)) {
            // line 141
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 143
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 144
        yield "</td>
                  <td>";
        // line 145
        yield ($context["text_on"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 146
        if (($context["curl"] ?? null)) {
            // line 147
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 149
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 150
        yield "</td>
                </tr>
                <tr";
        // line 152
        if ( !($context["openssl"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 153
        yield ($context["text_openssl"] ?? null);
        yield "</td>
                  <td>";
        // line 154
        if (($context["openssl"] ?? null)) {
            // line 155
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 157
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 158
        yield "</td>
                  <td>";
        // line 159
        yield ($context["text_on"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 160
        if (($context["openssl"] ?? null)) {
            // line 161
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 163
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 164
        yield "</td>
                </tr>
                <tr";
        // line 166
        if ( !($context["zlib"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 167
        yield ($context["text_zlib"] ?? null);
        yield "</td>
                  <td>";
        // line 168
        if (($context["zlib"] ?? null)) {
            // line 169
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 171
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 172
        yield "</td>
                  <td>";
        // line 173
        yield ($context["text_on"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 174
        if (($context["zlib"] ?? null)) {
            // line 175
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 177
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 178
        yield "</td>
                </tr>
                <tr";
        // line 180
        if ( !($context["zip"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 181
        yield ($context["text_zip"] ?? null);
        yield "</td>
                  <td>";
        // line 182
        if (($context["zip"] ?? null)) {
            // line 183
            yield "                      ";
            yield ($context["text_on"] ?? null);
            yield "
                    ";
        } else {
            // line 185
            yield "                      ";
            yield ($context["text_off"] ?? null);
            yield "
                    ";
        }
        // line 186
        yield "</td>
                  <td>";
        // line 187
        yield ($context["text_on"] ?? null);
        yield "</td>
                  <td class=\"text-center\">";
        // line 188
        if (($context["zip"] ?? null)) {
            // line 189
            yield "                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    ";
        } else {
            // line 191
            yield "                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    ";
        }
        // line 192
        yield "</td>
                </tr>
                ";
        // line 194
        if ( !($context["iconv"] ?? null)) {
            // line 195
            yield "                  <tr";
            if ( !($context["mbstring"] ?? null)) {
                yield " class=\"table-danger\"";
            }
            yield ">
                    <td>";
            // line 196
            yield ($context["text_mbstring"] ?? null);
            yield "</td>
                    <td>";
            // line 197
            if (($context["mbstring"] ?? null)) {
                // line 198
                yield "                        ";
                yield ($context["text_on"] ?? null);
                yield "
                      ";
            } else {
                // line 200
                yield "                        ";
                yield ($context["text_off"] ?? null);
                yield "
                      ";
            }
            // line 201
            yield "</td>
                    <td>";
            // line 202
            yield ($context["text_on"] ?? null);
            yield "</td>
                    <td class=\"text-center\">";
            // line 203
            if (($context["mbstring"] ?? null)) {
                // line 204
                yield "                        <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                      ";
            } else {
                // line 206
                yield "                        <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                      ";
            }
            // line 207
            yield "</td>
                  </tr>
                ";
        }
        // line 210
        yield "              </tbody>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 214
        yield ($context["text_install_file"] ?? null);
        yield "</legend>
            <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <td><b>";
        // line 218
        yield ($context["text_file"] ?? null);
        yield "</b></td>
                  <td><b>";
        // line 219
        yield ($context["text_status"] ?? null);
        yield "</b></td>
                </tr>
              </thead>
              <tbody>
                <tr";
        // line 223
        if (($context["error_catalog_config"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 224
        yield ($context["catalog_config"] ?? null);
        yield "</td>
                  <td>";
        // line 225
        if ( !($context["error_catalog_config"] ?? null)) {
            // line 226
            yield "                      <span class=\"text-success\">";
            yield ($context["text_writable"] ?? null);
            yield "</span>
                    ";
        } else {
            // line 228
            yield "                      <span class=\"text-danger\">";
            yield ($context["error_catalog_config"] ?? null);
            yield "</span>
                    ";
        }
        // line 229
        yield "</td>
                </tr>
                <tr";
        // line 231
        if (($context["error_admin_config"] ?? null)) {
            yield " class=\"table-danger\"";
        }
        yield ">
                  <td>";
        // line 232
        yield ($context["admin_config"] ?? null);
        yield "</td>
                  <td>";
        // line 233
        if ( !($context["error_admin_config"] ?? null)) {
            // line 234
            yield "                      <span class=\"text-success\">";
            yield ($context["text_writable"] ?? null);
            yield "</span>
                    ";
        } else {
            // line 236
            yield "                      <span class=\"text-danger\">";
            yield ($context["error_admin_config"] ?? null);
            yield "</span>
                    ";
        }
        // line 237
        yield "</td>
                </tr>
              </tbody>
            </table>
          </fieldset>
          <div class=\"row mt-3\">
            <div class=\"col\"><a href=\"";
        // line 243
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-light\">";
        yield ($context["button_back"] ?? null);
        yield "</a></div>
            <div class=\"col text-end\"><input type=\"submit\" id=\"button-continue\" value=\"";
        // line 244
        yield ($context["button_continue"] ?? null);
        yield "\" class=\"btn btn-primary\"/></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-step-2').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=install/step_2.save&language=',
        type: 'post',
        data: \$('#form-step-2').serialize(),
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

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#form-step-2').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 285
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
        return "install/view/template/install/step_2.twig";
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
        return array (  780 => 285,  736 => 244,  730 => 243,  722 => 237,  716 => 236,  710 => 234,  708 => 233,  704 => 232,  698 => 231,  694 => 229,  688 => 228,  682 => 226,  680 => 225,  676 => 224,  670 => 223,  663 => 219,  659 => 218,  652 => 214,  646 => 210,  641 => 207,  637 => 206,  633 => 204,  631 => 203,  627 => 202,  624 => 201,  618 => 200,  612 => 198,  610 => 197,  606 => 196,  599 => 195,  597 => 194,  593 => 192,  589 => 191,  585 => 189,  583 => 188,  579 => 187,  576 => 186,  570 => 185,  564 => 183,  562 => 182,  558 => 181,  552 => 180,  548 => 178,  544 => 177,  540 => 175,  538 => 174,  534 => 173,  531 => 172,  525 => 171,  519 => 169,  517 => 168,  513 => 167,  507 => 166,  503 => 164,  499 => 163,  495 => 161,  493 => 160,  489 => 159,  486 => 158,  480 => 157,  474 => 155,  472 => 154,  468 => 153,  462 => 152,  458 => 150,  454 => 149,  450 => 147,  448 => 146,  444 => 145,  441 => 144,  435 => 143,  429 => 141,  427 => 140,  423 => 139,  417 => 138,  413 => 136,  409 => 135,  405 => 133,  403 => 132,  399 => 131,  396 => 130,  390 => 129,  384 => 127,  382 => 126,  378 => 125,  372 => 124,  368 => 122,  364 => 121,  360 => 119,  358 => 118,  354 => 117,  351 => 116,  345 => 115,  339 => 113,  337 => 112,  333 => 111,  327 => 110,  320 => 106,  316 => 105,  312 => 104,  308 => 103,  301 => 99,  293 => 93,  289 => 92,  285 => 90,  283 => 89,  279 => 88,  276 => 87,  270 => 86,  264 => 84,  262 => 83,  258 => 82,  252 => 81,  248 => 79,  244 => 78,  240 => 76,  238 => 75,  234 => 74,  231 => 73,  225 => 72,  219 => 70,  217 => 69,  213 => 68,  207 => 67,  203 => 65,  199 => 64,  195 => 62,  193 => 61,  188 => 59,  185 => 58,  179 => 57,  173 => 55,  171 => 54,  167 => 53,  161 => 52,  157 => 50,  153 => 49,  149 => 47,  147 => 46,  142 => 44,  139 => 43,  133 => 42,  127 => 40,  125 => 39,  121 => 38,  115 => 37,  111 => 35,  107 => 34,  103 => 32,  101 => 31,  95 => 28,  91 => 27,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  64 => 15,  57 => 11,  49 => 6,  45 => 5,  38 => 1,);
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
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_step_2 }}</div>
      <div class=\"card-body\">
        <form id=\"form-step-2\">
          <fieldset>
            <legend>{{ text_install_php }}</legend>
            <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <td class=\"w-25\"><b>{{ text_setting }}</b></td>
                  <td class=\"w-25\"><b>{{ text_current }}</b></td>
                  <td class=\"w-25\"><b>{{ text_required }}</b></td>
                  <td class=\"w-25 text-center\"><b>{{ text_status }}</b></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{ text_version }}</td>
                  <td>{{ php_version }}</td>
                  <td>7.4+</td>
                  <td class=\"text-center\">
                    {% if version %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if register_globals %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_global }}</td>
                  <td>{% if register_globals %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_off }}</td>
                  <td class=\"text-center\">
                    {% if not register_globals %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if magic_quotes_gpc %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_magic }}</td>
                  <td>{% if magic_quotes_gpc %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_off }}</td>
                  <td class=\"text-center\">
                    {% if not error_magic_quotes_gpc %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if not file_uploads %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_file_upload }}</td>
                  <td>{% if file_uploads %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_on }}</td>
                  <td class=\"text-center\">{% if file_uploads %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if session_auto_start %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_session }}</td>
                  <td>{% if session_auto_start %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_off }}</td>
                  <td class=\"text-center\">{% if not session_auto_start %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
              </tbody>
            </table>
          </fieldset>
          <fieldset>
            <legend>{{ text_install_extension }}</legend>
            <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <td class=\"w-25\"><b>{{ text_extension }}</b></td>
                  <td class=\"w-25\"><b>{{ text_current }}</b></td>
                  <td class=\"w-25\"><b>{{ text_required }}</b></td>
                  <td class=\"w-25 text-center\"><b>{{ text_status }}</b></td>
                </tr>
              </thead>
              <tbody>
                <tr{% if not db %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_db }}</td>
                  <td>{% if db %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_on }}</td>
                  <td class=\"text-center\">{% if db %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if not gd %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_gd }}</td>
                  <td>{% if gd %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_on }}</td>
                  <td class=\"text-center\">{% if gd %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if not curl %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_curl }}</td>
                  <td>{% if curl %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_on }}</td>
                  <td class=\"text-center\">{% if curl %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if not openssl %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_openssl }}</td>
                  <td>{% if openssl %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_on }}</td>
                  <td class=\"text-center\">{% if openssl %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if not zlib %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_zlib }}</td>
                  <td>{% if zlib %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_on }}</td>
                  <td class=\"text-center\">{% if zlib %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                <tr{% if not zip %} class=\"table-danger\"{% endif %}>
                  <td>{{ text_zip }}</td>
                  <td>{% if zip %}
                      {{ text_on }}
                    {% else %}
                      {{ text_off }}
                    {% endif %}</td>
                  <td>{{ text_on }}</td>
                  <td class=\"text-center\">{% if zip %}
                      <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                    {% else %}
                      <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                    {% endif %}</td>
                </tr>
                {% if not iconv %}
                  <tr{% if not mbstring %} class=\"table-danger\"{% endif %}>
                    <td>{{ text_mbstring }}</td>
                    <td>{% if mbstring %}
                        {{ text_on }}
                      {% else %}
                        {{ text_off }}
                      {% endif %}</td>
                    <td>{{ text_on }}</td>
                    <td class=\"text-center\">{% if mbstring %}
                        <span class=\"text-success\"><i class=\"fa-solid fa-check\"></i></span>
                      {% else %}
                        <span class=\"text-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></span>
                      {% endif %}</td>
                  </tr>
                {% endif %}
              </tbody>
            </table>
          </fieldset>
          <fieldset>
            <legend>{{ text_install_file }}</legend>
            <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <td><b>{{ text_file }}</b></td>
                  <td><b>{{ text_status }}</b></td>
                </tr>
              </thead>
              <tbody>
                <tr{% if error_catalog_config %} class=\"table-danger\"{% endif %}>
                  <td>{{ catalog_config }}</td>
                  <td>{% if not error_catalog_config %}
                      <span class=\"text-success\">{{ text_writable }}</span>
                    {% else %}
                      <span class=\"text-danger\">{{ error_catalog_config }}</span>
                    {% endif %}</td>
                </tr>
                <tr{% if error_admin_config %} class=\"table-danger\"{% endif %}>
                  <td>{{ admin_config }}</td>
                  <td>{% if not error_admin_config %}
                      <span class=\"text-success\">{{ text_writable }}</span>
                    {% else %}
                      <span class=\"text-danger\">{{ error_admin_config }}</span>
                    {% endif %}</td>
                </tr>
              </tbody>
            </table>
          </fieldset>
          <div class=\"row mt-3\">
            <div class=\"col\"><a href=\"{{ back }}\" class=\"btn btn-light\">{{ button_back }}</a></div>
            <div class=\"col text-end\"><input type=\"submit\" id=\"button-continue\" value=\"{{ button_continue }}\" class=\"btn btn-primary\"/></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-step-2').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=install/step_2.save&language=',
        type: 'post',
        data: \$('#form-step-2').serialize(),
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

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#form-step-2').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "install/view/template/install/step_2.twig", "/var/www/html/opencart/upload/install/view/template/install/step_2.twig");
    }
}
