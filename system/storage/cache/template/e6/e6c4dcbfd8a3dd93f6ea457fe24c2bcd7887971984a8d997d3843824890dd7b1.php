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

/* admin/view/template/setting/setting.twig */
class __TwigTemplate_e75646504db97afc1f2be654beff9863e80ff4534a5eef0e728353749259c467 extends Template
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
        <button type=\"submit\" form=\"form-setting\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 19
        yield ($context["text_edit"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-setting\" action=\"";
        // line 21
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 23
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-store\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        yield ($context["tab_store"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 25
        yield ($context["tab_local"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        yield ($context["tab_option"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        yield ($context["tab_image"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        yield ($context["tab_mail"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        yield ($context["tab_server"] ?? null);
        yield "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                <label for=\"input-meta-title\" class=\"col-sm-2 col-form-label\">";
        // line 34
        yield ($context["entry_meta_title"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 36
        yield ($context["config_meta_title"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_meta_title"] ?? null);
        yield "\" id=\"input-meta-title\" class=\"form-control\"/>
                  <div id=\"error-meta-title\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-meta-description\" class=\"col-sm-2 col-form-label\">";
        // line 41
        yield ($context["entry_meta_description"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 43
        yield ($context["entry_meta_description"] ?? null);
        yield "\" id=\"input-meta-description\" class=\"form-control\">";
        yield ($context["config_meta_description"] ?? null);
        yield "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-meta-keyword\" class=\"col-sm-2 col-form-label\">";
        // line 47
        yield ($context["entry_meta_keyword"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 49
        yield ($context["entry_meta_keyword"] ?? null);
        yield "\" id=\"input-meta-keyword\" class=\"form-control\">";
        yield ($context["config_meta_keyword"] ?? null);
        yield "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">";
        // line 53
        yield ($context["entry_logo"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                    <img src=\"";
        // line 56
        yield ($context["logo"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_logo\" value=\"";
        yield ($context["config_logo"] ?? null);
        yield "\" id=\"input-logo\"/>
                    <div class=\"d-grid\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 58
        yield ($context["button_edit"] ?? null);
        yield "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 59
        yield ($context["button_clear"] ?? null);
        yield "</button>
                    </div>
                  </div>
                </div>
              </div>
            <div class=\"row mb-3\">
                <label for=\"input-icon\" class=\"col-sm-2 col-form-label\">";
        // line 65
        yield ($context["entry_icon"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                    <img src=\"";
        // line 68
        yield ($context["icon"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-icon\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_icon\" value=\"";
        yield ($context["config_icon"] ?? null);
        yield "\" id=\"input-icon\"/>
                    <div class=\"d-grid\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 70
        yield ($context["button_edit"] ?? null);
        yield "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 71
        yield ($context["button_clear"] ?? null);
        yield "</button>
                    </div>
\t\t\t\t        \t <div class=\"form-text\">";
        // line 73
        yield ($context["help_icon"] ?? null);
        yield "</div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">";
        // line 78
        yield ($context["entry_theme"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-select\">
                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 82
            yield "                      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 82);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 82) == ($context["config_theme"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 82);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme-thumb\" class=\"img-thumbnail\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">";
        // line 90
        yield ($context["entry_layout"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-select\">
                    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 94
            yield "                      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 94);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 94) == ($context["config_layout_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 94);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-store\" class=\"tab-pane\">
              <div class=\"row mb-3 required\">
                <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 102
        yield ($context["entry_name"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 104
        yield ($context["config_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\"/>
                  <div id=\"error-name\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">";
        // line 109
        yield ($context["entry_owner"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 111
        yield ($context["config_owner"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_owner"] ?? null);
        yield "\" id=\"input-owner\" class=\"form-control\"/>
                  <div id=\"error-owner\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-address\" class=\"col-sm-2 col-form-label\">";
        // line 116
        yield ($context["entry_address"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" rows=\"5\" placeholder=\"";
        // line 118
        yield ($context["entry_address"] ?? null);
        yield "\" id=\"input-address\" class=\"form-control\">";
        yield ($context["config_address"] ?? null);
        yield "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">";
        // line 122
        yield ($context["entry_geocode"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 124
        yield ($context["config_geocode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_geocode"] ?? null);
        yield "\" id=\"input-geocode\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 125
        yield ($context["help_geocode"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 129
        yield ($context["entry_email"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 131
        yield ($context["config_email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
                  <div id=\"error-email\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 136
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 138
        yield ($context["config_telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\"/>
                  <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 143
        yield ($context["entry_image"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                    <img src=\"";
        // line 146
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_image\" value=\"";
        yield ($context["config_image"] ?? null);
        yield "\" id=\"input-image\"/>
                    <div class=\"d-grid\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 148
        yield ($context["button_edit"] ?? null);
        yield "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 149
        yield ($context["button_clear"] ?? null);
        yield "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-open\" class=\"col-sm-2 col-form-label\">";
        // line 155
        yield ($context["entry_open"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 157
        yield ($context["entry_open"] ?? null);
        yield "\" id=\"input-open\" class=\"form-control\">";
        yield ($context["config_open"] ?? null);
        yield "</textarea>
                  <div class=\"form-text\">";
        // line 158
        yield ($context["help_open"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 162
        yield ($context["entry_comment"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 164
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-comment\" class=\"form-control\">";
        yield ($context["config_comment"] ?? null);
        yield "</textarea>
                  <div class=\"form-text\">";
        // line 165
        yield ($context["help_comment"] ?? null);
        yield "</div>
                </div>
              </div>
              ";
        // line 168
        if (($context["locations"] ?? null)) {
            // line 169
            yield "                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
            // line 170
            yield ($context["entry_location"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 174
                yield "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                // line 175
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 175);
                yield "\" id=\"input-location-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 175);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 175), ($context["config_location"] ?? null))) {
                    yield " checked";
                }
                yield "/> <label for=\"input-location-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 175);
                yield "\" class=\"form-check-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 175);
                yield "</label>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            yield "                    </div>
                    <div class=\"form-text\">";
            // line 179
            yield ($context["help_location"] ?? null);
            yield "</div>
                  </div>
                </div>
              ";
        }
        // line 183
        yield "            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 186
        yield ($context["text_region"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 188
        yield ($context["entry_country"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_country_id\" id=\"input-country\" class=\"form-select\">
                      ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 192
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 192);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 192) == ($context["config_country_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 192);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">";
        // line 198
        yield ($context["entry_zone"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-select\"></select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">";
        // line 204
        yield ($context["entry_timezone"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-select\">
                      ";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 208
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 208);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 208) == ($context["config_timezone"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 208);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        yield "                    </select>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend>";
        // line 216
        yield ($context["text_language"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-language-catalog\" class=\"col-sm-2 col-form-label\">";
        // line 218
        yield ($context["entry_language"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_catalog\" id=\"input-language-catalog\" class=\"form-select\">
                      ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 222
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 222);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 222) == ($context["config_language_catalog"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 222);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-language-admin\" class=\"col-sm-2 col-form-label\">";
        // line 228
        yield ($context["entry_language_admin"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_admin\" id=\"input-language-admin\" class=\"form-select\">
                      ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 232
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 232);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 232) == ($context["config_language_admin"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 232);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        yield "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 239
        yield ($context["text_currency"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">";
        // line 241
        yield ($context["entry_currency"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency\" id=\"input-currency\" class=\"form-select\">
                      ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 245
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 245);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 245) == ($context["config_currency"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 245);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        yield "                    </select>
                    <div class=\"form-text\">";
        // line 248
        yield ($context["help_currency"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">";
        // line 252
        yield ($context["entry_currency_engine"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-select\">
                      ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 256
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 256);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 256) == ($context["config_currency_engine"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 256);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 262
        yield ($context["entry_currency_auto"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_currency_auto\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_currency_auto\" value=\"1\" id=\"input-currency-auto\" class=\"form-check-input\"";
        // line 266
        if (($context["config_currency_auto"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                    <div class=\"form-text\">";
        // line 268
        yield ($context["help_currency_auto"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend>";
        // line 274
        yield ($context["text_measurement"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 276
        yield ($context["entry_length_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-select\">
                      ";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 280
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 280);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 280) == ($context["config_length_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 280);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 286
        yield ($context["entry_weight_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                      ";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 290
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 290);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 290) == ($context["config_weight_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 290);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        yield "                    </select>
                  </div>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-option\" class=\"tab-pane\">

              <div class=\"accordion\" id=\"accordion-option\">

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-product\">";
        // line 303
        yield ($context["text_product"] ?? null);
        yield "</button></h2>

                  <div id=\"collapse-product\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mt-2 mb-3 required\">
                        <label for=\"input-product-description-length\" class=\"col-sm-2 col-form-label\">";
        // line 309
        yield ($context["entry_product_description_length"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_product_description_length\" value=\"";
        // line 311
        yield ($context["config_product_description_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_product_description_length"] ?? null);
        yield "\" id=\"input-product-description-length\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 312
        yield ($context["help_product_description_length"] ?? null);
        yield "</div>
                          <div id=\"error-product-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-pagination\" class=\"col-sm-2 col-form-label\">";
        // line 317
        yield ($context["entry_pagination"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination\" value=\"";
        // line 319
        yield ($context["config_pagination"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_pagination"] ?? null);
        yield "\" id=\"input-pagination\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 320
        yield ($context["help_pagination"] ?? null);
        yield "</div>
                          <div id=\"error-pagination\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 325
        yield ($context["entry_product_count"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_product_count\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_product_count\" value=\"1\" id=\"input-product-count\" class=\"form-check-input\"";
        // line 329
        if (($context["config_product_count"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 331
        yield ($context["help_product_count"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-pagination-admin\" class=\"col-sm-2 col-form-label\">";
        // line 335
        yield ($context["entry_pagination_admin"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination_admin\" value=\"";
        // line 337
        yield ($context["config_pagination_admin"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_pagination_admin"] ?? null);
        yield "\" id=\"input-pagination-admin\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 338
        yield ($context["help_pagination"] ?? null);
        yield "</div>
                          <div id=\"error-pagination-admin\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-autocomplete-limit\" class=\"col-sm-2 col-form-label\">";
        // line 343
        yield ($context["entry_autocomplete_limit"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_autocomplete_limit\" value=\"";
        // line 345
        yield ($context["config_autocomplete_limit"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_autocomplete_limit"] ?? null);
        yield "\" id=\"input-autocomplete-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 346
        yield ($context["help_autocomplete_limit"] ?? null);
        yield "</div>
                          <div id=\"error-autocomplete-limit\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 351
        yield ($context["entry_product_report"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_product_report_status\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_product_report_status\" value=\"1\" id=\"input-product-report\" class=\"form-check-input\"";
        // line 355
        if (($context["config_product_report_status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 357
        yield ($context["help_product_report"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-review\">";
        // line 364
        yield ($context["text_review"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-review\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 368
        yield ($context["entry_review_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_review_status\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_review_status\" value=\"1\" id=\"input-review-status\" class=\"form-check-input\"";
        // line 372
        if (($context["config_review_status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 374
        yield ($context["help_review"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 378
        yield ($context["entry_review_purchased"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_review_purchased\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_review_purchased\" value=\"1\" id=\"input-review-purchased\" class=\"form-check-input\"";
        // line 382
        if (($context["config_review_purchased"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 384
        yield ($context["help_review_purchased"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 388
        yield ($context["entry_review_guest"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_review_guest\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_review_guest\" value=\"1\" id=\"input-review-guest\" class=\"form-check-input\"";
        // line 392
        if (($context["config_review_guest"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 394
        yield ($context["help_review_guest"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-cms\">";
        // line 401
        yield ($context["text_cms"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-cms\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3 required\">
                        <label for=\"input-article-description-length\" class=\"col-sm-2 col-form-label\">";
        // line 405
        yield ($context["entry_article_description_length"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_article_description_length\" value=\"";
        // line 407
        yield ($context["config_article_description_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_article_description_length"] ?? null);
        yield "\" id=\"input-article-description-length\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 408
        yield ($context["help_article_description_length"] ?? null);
        yield "</div>
                          <div id=\"error-article-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 413
        yield ($context["entry_comment_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_comment_status\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_comment_status\" value=\"1\" id=\"input-comment-status\" class=\"form-check-input\"";
        // line 417
        if (($context["config_comment_status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 419
        yield ($context["help_comment_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 423
        yield ($context["entry_comment_approve"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_comment_approve\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_comment_approve\" value=\"1\" id=\"input-comment-approve\" class=\"form-check-input\"";
        // line 427
        if (($context["config_comment_approve"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 429
        yield ($context["help_comment_approve"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-comment-interval\" class=\"col-sm-2 col-form-label\">";
        // line 433
        yield ($context["entry_comment_interval"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_comment_interval\" value=\"";
        // line 435
        yield ($context["config_comment_interval"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_comment_interval"] ?? null);
        yield "\" id=\"input-comment-interval\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 436
        yield ($context["help_comment_interval"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-legal\">";
        // line 443
        yield ($context["text_legal"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-legal\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">";
        // line 447
        yield ($context["entry_cookie"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-select\">
                            <option value=\"0\">";
        // line 450
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 451
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 452
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 452);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 452) == ($context["config_cookie_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 452);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 454
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 455
        yield ($context["help_cookie"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">";
        // line 459
        yield ($context["entry_gdpr"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-select\">
                            <option value=\"0\">";
        // line 462
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 463
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 464
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 464);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 464) == ($context["config_gdpr_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 464);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 466
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 467
        yield ($context["help_gdpr"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">";
        // line 471
        yield ($context["entry_gdpr_limit"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_gdpr_limit\" value=\"";
        // line 473
        yield ($context["config_gdpr_limit"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_gdpr_limit"] ?? null);
        yield "\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 474
        yield ($context["help_gdpr_limit"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-tax\">";
        // line 482
        yield ($context["text_tax"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-tax\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 486
        yield ($context["entry_tax"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_tax\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_tax\" value=\"1\" id=\"input-tax\" class=\"form-check-input\"";
        // line 490
        if (($context["config_tax"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">";
        // line 495
        yield ($context["entry_tax_default"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-select\">
                            <option value=\"\">";
        // line 498
        yield ($context["text_none"] ?? null);
        yield "</option>
                            <option value=\"shipping\"";
        // line 499
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_shipping"] ?? null);
        yield "</option>
                            <option value=\"payment\"";
        // line 500
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_payment"] ?? null);
        yield "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 502
        yield ($context["help_tax_default"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">";
        // line 506
        yield ($context["entry_tax_customer"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-select\">
                            <option value=\"\">";
        // line 509
        yield ($context["text_none"] ?? null);
        yield "</option>
                            <option value=\"shipping\"";
        // line 510
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_shipping"] ?? null);
        yield "</option>
                            <option value=\"payment\"";
        // line 511
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_payment"] ?? null);
        yield "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 513
        yield ($context["help_tax_customer"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-account\">";
        // line 521
        yield ($context["text_account"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-account\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 525
        yield ($context["entry_customer_online"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_online\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_customer_online\" value=\"1\" id=\"input-customer-online\" class=\"form-check-input\"";
        // line 529
        if (($context["config_customer_online"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 531
        yield ($context["help_customer_online"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-online-expire\" class=\"col-sm-2 col-form-label\">";
        // line 535
        yield ($context["entry_customer_online_expire"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"config_customer_online_expire\" value=\"";
        // line 538
        yield ($context["config_customer_online_expire"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer_online_expire"] ?? null);
        yield "\" id=\"input-customer-online-expire\" class=\"form-control\"/> <span class=\"input-group-text\" id=\"basic-addon2\">";
        yield ($context["text_hour"] ?? null);
        yield "</span>
                          </div>
                          <div class=\"form-text\">";
        // line 540
        yield ($context["help_customer_online_expire"] ?? null);
        yield "</div>
                          <div id=\"error-customer-online-expire\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 545
        yield ($context["entry_customer_activity"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_activity\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_customer_activity\" value=\"1\" id=\"input-customer-activity\" class=\"form-check-input\"";
        // line 549
        if (($context["config_customer_activity"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 551
        yield ($context["help_customer_activity"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 555
        yield ($context["entry_customer_search"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_search\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_customer_search\" value=\"1\" id=\"input-customer-search\" class=\"form-check-input\"";
        // line 559
        if (($context["config_customer_search"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 564
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                            ";
        // line 567
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 568
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 568);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 568) == ($context["config_customer_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 568);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 570
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 571
        yield ($context["help_customer_group"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 575
        yield ($context["entry_customer_group_display"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-customer-group-display\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 578
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 579
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
            // line 580
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 580);
            yield "\" id=\"input-customer-group-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 580);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 580), ($context["config_customer_group_display"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-customer-group-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 580);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 580);
            yield "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 583
        yield "                          </div>
                          <div class=\"form-text\">";
        // line 584
        yield ($context["help_customer_group_display"] ?? null);
        yield "</div>
                          <div id=\"error-customer-group-display\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 589
        yield ($context["entry_customer_price"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_price\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_customer_price\" value=\"1\" id=\"input-customer-price\" class=\"form-check-input\"";
        // line 593
        if (($context["config_customer_price"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 595
        yield ($context["help_customer_price"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 599
        yield ($context["entry_telephone_display"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_telephone_display\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_telephone_display\" value=\"1\" id=\"input-telephone-display\" class=\"form-check-input\"";
        // line 603
        if (($context["config_telephone_display"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 608
        yield ($context["entry_telephone_required"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_telephone_required\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_telephone_required\" value=\"1\" id=\"input-telephone-required\" class=\"form-check-input\"";
        // line 612
        if (($context["config_telephone_required"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 617
        yield ($context["entry_customer_2fa"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_2fa\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_customer_2fa\" value=\"1\" id=\"input-customer-2fa\" class=\"form-check-input\"";
        // line 621
        if (($context["config_customer_2fa"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 623
        yield ($context["help_customer_2fa"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">";
        // line 627
        yield ($context["entry_login_attempts"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 629
        yield ($context["config_login_attempts"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_login_attempts"] ?? null);
        yield "\" id=\"input-login-attempts\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 630
        yield ($context["help_login_attempts"] ?? null);
        yield "</div>
                          <div id=\"error-login-attempts\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-account\" class=\"col-sm-2 col-form-label\">";
        // line 635
        yield ($context["entry_account"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_account_id\" id=\"input-account\" class=\"form-select\">
                            <option value=\"0\">";
        // line 638
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 639
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 640
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 640);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 640) == ($context["config_account_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 640);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 642
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 643
        yield ($context["help_account"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-checkout\">";
        // line 651
        yield ($context["text_checkout"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-checkout\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">";
        // line 655
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 657
        yield ($context["config_invoice_prefix"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 658
        yield ($context["help_invoice_prefix"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 662
        yield ($context["entry_cart_weight"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_cart_weight\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_cart_weight\" value=\"1\" id=\"input-cart-weight\" class=\"form-check-input\"";
        // line 666
        if (($context["config_cart_weight"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 668
        yield ($context["help_cart_weight"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 672
        yield ($context["entry_checkout_guest"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_checkout_guest\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_checkout_guest\" value=\"1\" id=\"input-checkout-guest\" class=\"form-check-input\"";
        // line 676
        if (($context["config_checkout_guest"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 678
        yield ($context["help_checkout_guest"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 682
        yield ($context["entry_checkout_payment_address"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_checkout_payment_address\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_checkout_payment_address\" value=\"1\" id=\"input-checkout-payment-address\" class=\"form-check-input\"";
        // line 686
        if (($context["config_checkout_payment_address"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 688
        yield ($context["help_checkout_payment_address"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 692
        yield ($context["entry_checkout_shipping_address"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_checkout_shipping_address\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_checkout_shipping_address\" value=\"1\" id=\"input-checkout-shipping-address\" class=\"form-check-input\"";
        // line 696
        if (($context["config_checkout_shipping_address"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 698
        yield ($context["help_checkout_shipping_address"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">";
        // line 702
        yield ($context["entry_checkout"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-select\">
                            <option value=\"0\">";
        // line 705
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 706
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 707
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 707);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 707) == ($context["config_checkout_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 707);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 709
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 710
        yield ($context["help_checkout"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 714
        yield ($context["entry_order_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                            ";
        // line 717
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 718
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 718);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 718) == ($context["config_order_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 718);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 720
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 721
        yield ($context["help_order_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 725
        yield ($context["entry_processing_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-processing-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 728
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 729
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
            // line 730
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 730);
            yield "\" id=\"input-processing-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 730);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 730), ($context["config_processing_status"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-processing-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 730);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 730);
            yield "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 733
        yield "                          </div>
                          <div class=\"form-text\">";
        // line 734
        yield ($context["help_processing_status"] ?? null);
        yield "</div>
                          <div id=\"error-processing-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 739
        yield ($context["entry_complete_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-complete-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 742
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 743
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
            // line 744
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 744);
            yield "\" id=\"input-complete-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 744);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 744), ($context["config_complete_status"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-complete-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 744);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 744);
            yield "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 747
        yield "                          </div>
                          <div class=\"form-text\">";
        // line 748
        yield ($context["help_complete_status"] ?? null);
        yield "</div>
                          <div id=\"error-complete-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-void-status\" class=\"col-sm-2 col-form-label\">";
        // line 753
        yield ($context["entry_void_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_void_status_id\" id=\"input-void-status\" class=\"form-select\">
                            ";
        // line 756
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 757
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 757);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 757) == ($context["config_void_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 757);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 759
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 760
        yield ($context["help_void_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">";
        // line 764
        yield ($context["entry_fraud_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-select\">
                            ";
        // line 767
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 768
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 768);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 768) == ($context["config_fraud_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 768);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 770
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 771
        yield ($context["help_fraud_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-api\" class=\"col-sm-2 col-form-label\">";
        // line 775
        yield ($context["entry_api"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_api_id\" id=\"input-api\" class=\"form-select\">
                            <option value=\"0\">";
        // line 778
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 779
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 780
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 780);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 780) == ($context["config_api_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 780);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 782
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 783
        yield ($context["help_api"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-subscription\">";
        // line 790
        yield ($context["text_subscription"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-subscription\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-status\" class=\"col-sm-2 col-form-label\">";
        // line 795
        yield ($context["entry_subscription_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_status_id\" id=\"input-subscription-status\" class=\"form-select\">
                            ";
        // line 798
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 799
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 799);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 799) == ($context["config_subscription_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 799);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 801
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 802
        yield ($context["help_subscription"] ?? null);
        yield "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-active-status\" class=\"col-sm-2 col-form-label\">";
        // line 807
        yield ($context["entry_subscription_active_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_active_status_id\" id=\"input-subscription-active-status\" class=\"form-select\">
                            ";
        // line 810
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 811
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 811);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 811) == ($context["config_subscription_active_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 811);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 813
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-expired-status\" class=\"col-sm-2 col-form-label\">";
        // line 818
        yield ($context["entry_subscription_expired_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_expired_status_id\" id=\"input-subscription-expired-status\" class=\"form-select\">
                            ";
        // line 821
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 822
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 822);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 822) == ($context["config_subscription_expired_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 822);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 824
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-suspended-status\" class=\"col-sm-2 col-form-label\">";
        // line 829
        yield ($context["entry_subscription_suspended_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_suspended_status_id\" id=\"input-subscription-suspended-status\" class=\"form-select\">
                            ";
        // line 832
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 833
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 833);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 833) == ($context["config_subscription_suspended_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 833);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 835
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-canceled-status\" class=\"col-sm-2 col-form-label\">";
        // line 840
        yield ($context["entry_subscription_canceled_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_canceled_status_id\" id=\"input-subscription-canceled-status\" class=\"form-select\">
                            ";
        // line 843
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 844
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 844);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 844) == ($context["config_subscription_canceled_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 844);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 846
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-failed-status\" class=\"col-sm-2 col-form-label\">";
        // line 851
        yield ($context["entry_subscription_failed_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_failed_status_id\" id=\"input-subscription-failed-status\" class=\"form-select\">
                            ";
        // line 854
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 855
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 855);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 855) == ($context["config_subscription_failed_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 855);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 857
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-denied-status\" class=\"col-sm-2 col-form-label\">";
        // line 862
        yield ($context["entry_subscription_denied_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_denied_status_id\" id=\"input-subscription-denied-status\" class=\"form-select\">
                            ";
        // line 865
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 866
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 866);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 866) == ($context["config_subscription_denied_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 866);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 868
        yield "                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-stock\">";
        // line 876
        yield ($context["text_stock"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-stock\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 880
        yield ($context["entry_stock_display"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_stock_display\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_stock_display\" value=\"1\" id=\"input-stock-display\" class=\"form-check-input\"";
        // line 884
        if (($context["config_stock_display"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 886
        yield ($context["help_stock_display"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 890
        yield ($context["entry_stock_warning"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_stock_warning\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_stock_warning\" value=\"1\" id=\"input-stock-warning\" class=\"form-check-input\"";
        // line 894
        if (($context["config_stock_warning"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 896
        yield ($context["help_stock_warning"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 900
        yield ($context["entry_stock_checkout"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_stock_checkout\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_stock_checkout\" value=\"1\" id=\"input-stock-checkout\" class=\"form-check-input\"";
        // line 904
        if (($context["config_stock_checkout"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 906
        yield ($context["help_stock_checkout"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">";
        // line 910
        yield ($context["entry_stock_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                            ";
        // line 913
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 914
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 914);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 914) == ($context["config_stock_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 914);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 916
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 917
        yield ($context["help_stock_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-affiliate\">";
        // line 924
        yield ($context["text_affiliate"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-affiliate\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 928
        yield ($context["entry_affiliate_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_affiliate_status\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_affiliate_status\" value=\"1\" id=\"input-affiliate-status\" class=\"form-check-input\"";
        // line 932
        if (($context["config_affiliate_status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 934
        yield ($context["help_affiliate_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">";
        // line 938
        yield ($context["entry_affiliate_group"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-select\">
                            ";
        // line 941
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 942
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 942);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 942) == ($context["config_affiliate_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 942);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 944
        yield "                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 948
        yield ($context["entry_affiliate_approval"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_affiliate_approval\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_affiliate_approval\" value=\"1\" id=\"input-affiliate-approval\" class=\"form-check-input\"";
        // line 952
        if (($context["config_affiliate_approval"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 954
        yield ($context["help_affiliate_approval"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 958
        yield ($context["entry_affiliate_auto"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_affiliate_auto\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_affiliate_auto\" value=\"1\" id=\"input-affiliate-auto\" class=\"form-check-input\"";
        // line 962
        if (($context["config_affiliate_auto"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 964
        yield ($context["help_affiliate_auto"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">";
        // line 968
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 970
        yield ($context["config_affiliate_commission"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 971
        yield ($context["help_affiliate_commission"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-expire\" class=\"col-sm-2 col-form-label\">";
        // line 975
        yield ($context["entry_affiliate_expire"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_expire\" value=\"";
        // line 977
        yield ($context["config_affiliate_expire"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate_expire"] ?? null);
        yield "\" id=\"input-affiliate-expire\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 978
        yield ($context["help_affiliate_expire"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">";
        // line 982
        yield ($context["entry_affiliate"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-select\">
                            <option value=\"0\">";
        // line 985
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 986
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 987
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 987);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 987) == ($context["config_affiliate_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 987);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 989
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 990
        yield ($context["help_affiliate"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-return\">";
        // line 997
        yield ($context["text_return"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-return\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">";
        // line 1001
        yield ($context["entry_return_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-select\">
                            ";
        // line 1004
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1005
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1005);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1005) == ($context["config_return_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1005);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1007
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 1008
        yield ($context["help_return_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-return\" class=\"col-sm-2 col-form-label\">";
        // line 1012
        yield ($context["entry_return"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_id\" id=\"input-return\" class=\"form-select\">
                            <option value=\"0\">";
        // line 1015
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 1016
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1017
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1017);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1017) == ($context["config_return_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1017);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1019
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 1020
        yield ($context["help_return"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-captcha\">";
        // line 1027
        yield ($context["text_captcha"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-captcha\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">";
        // line 1031
        yield ($context["entry_captcha"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-select\">
                            <option value=\"\">";
        // line 1034
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 1035
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1036
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1036);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1036) == ($context["config_captcha"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1036);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1038
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 1039
        yield ($context["help_captcha"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 1043
        yield ($context["entry_captcha_page"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 1046
        $context["captcha_page_row"] = 0;
        // line 1047
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1048
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
            // line 1049
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1049);
            yield "\" id=\"input-captcha-";
            yield ($context["captcha_page_row"] ?? null);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1049), ($context["config_captcha_page"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-captcha-";
            yield ($context["captcha_page_row"] ?? null);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1049);
            yield "</label>
                              </div>
                              ";
            // line 1051
            $context["captcha_page_row"] = (($context["captcha_page_row"] ?? null) + 1);
            // line 1052
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1053
        yield "                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1063
        yield ($context["text_image_size"] ?? null);
        yield "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-default-width\" class=\"col-sm-2 col-form-label\">";
        // line 1065
        yield ($context["entry_image_default"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-default\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_default_width\" value=\"";
        // line 1069
        yield ($context["config_image_default_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-default-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_default_height\" value=\"";
        // line 1072
        yield ($context["config_image_default_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-default-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-default\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-category-width\" class=\"col-sm-2 col-form-label\">";
        // line 1079
        yield ($context["entry_image_category"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-category\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_width\" value=\"";
        // line 1083
        yield ($context["config_image_category_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-category-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_height\" value=\"";
        // line 1086
        yield ($context["config_image_category_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-category-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-category\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-thumb-width\" class=\"col-sm-2 col-form-label\">";
        // line 1093
        yield ($context["entry_image_thumb"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-thumb\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_width\" value=\"";
        // line 1097
        yield ($context["config_image_thumb_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-thumb-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_height\" value=\"";
        // line 1100
        yield ($context["config_image_thumb_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-thumb-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-thumb\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-popup-width\" class=\"col-sm-2 col-form-label\">";
        // line 1107
        yield ($context["entry_image_popup"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-popup\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_width\" value=\"";
        // line 1111
        yield ($context["config_image_popup_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-popup-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_height\" value=\"";
        // line 1114
        yield ($context["config_image_popup_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-popup-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-popup\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-product-width\" class=\"col-sm-2 col-form-label\">";
        // line 1121
        yield ($context["entry_image_product"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-product\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_width\" value=\"";
        // line 1125
        yield ($context["config_image_product_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-product-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_height\" value=\"";
        // line 1128
        yield ($context["config_image_product_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-product-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-product\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-additional-width\" class=\"col-sm-2 col-form-label\">";
        // line 1135
        yield ($context["entry_image_additional"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-additional\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_width\" value=\"";
        // line 1139
        yield ($context["config_image_additional_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-additional-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_height\" value=\"";
        // line 1142
        yield ($context["config_image_additional_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-additional-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-additional\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-related-width\" class=\"col-sm-2 col-form-label\">";
        // line 1149
        yield ($context["entry_image_related"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-related\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_width\" value=\"";
        // line 1153
        yield ($context["config_image_related_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-related-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_height\" value=\"";
        // line 1156
        yield ($context["config_image_related_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-related-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-related\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-article-width\" class=\"col-sm-2 col-form-label\">";
        // line 1163
        yield ($context["entry_image_article"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-article\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_article_width\" value=\"";
        // line 1167
        yield ($context["config_image_article_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-article-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_article_height\" value=\"";
        // line 1170
        yield ($context["config_image_article_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-article-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-article\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-topic-width\" class=\"col-sm-2 col-form-label\">";
        // line 1177
        yield ($context["entry_image_topic"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-topic\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_topic_width\" value=\"";
        // line 1181
        yield ($context["config_image_topic_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-topic-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_topic_height\" value=\"";
        // line 1184
        yield ($context["config_image_topic_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-topic-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-topic\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-compare-width\" class=\"col-sm-2 col-form-label\">";
        // line 1191
        yield ($context["entry_image_compare"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-compare\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_width\" value=\"";
        // line 1195
        yield ($context["config_image_compare_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-compare-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_height\" value=\"";
        // line 1198
        yield ($context["config_image_compare_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-compare-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-compare\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-wishlist-width\" class=\"col-sm-2 col-form-label\">";
        // line 1205
        yield ($context["entry_image_wishlist"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-wishlist\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_width\" value=\"";
        // line 1209
        yield ($context["config_image_wishlist_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-wishlist-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_height\" value=\"";
        // line 1212
        yield ($context["config_image_wishlist_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-wishlist-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-wishlist\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-cart-width\" class=\"col-sm-2 col-form-label\">";
        // line 1219
        yield ($context["entry_image_cart"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-cart\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_width\" value=\"";
        // line 1223
        yield ($context["config_image_cart_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-cart-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_height\" value=\"";
        // line 1226
        yield ($context["config_image_cart_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-cart-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-cart\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-location-width\" class=\"col-sm-2 col-form-label\">";
        // line 1233
        yield ($context["entry_image_location"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-location\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_width\" value=\"";
        // line 1237
        yield ($context["config_image_location_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-location-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_height\" value=\"";
        // line 1240
        yield ($context["config_image_location_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-location-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-location\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1250
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">";
        // line 1252
        yield ($context["entry_mail_engine"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-select\">
                      <option value=\"\">";
        // line 1255
        yield ($context["text_none"] ?? null);
        yield "</option>
                      <option value=\"mail\"";
        // line 1256
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_mail"] ?? null);
        yield "</option>
                      <option value=\"smtp\"";
        // line 1257
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_smtp"] ?? null);
        yield "</option>
                    </select>
                    <div class=\"form-text\">";
        // line 1259
        yield ($context["help_mail_engine"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">";
        // line 1263
        yield ($context["entry_mail_parameter"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1265
        yield ($context["config_mail_parameter"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_parameter"] ?? null);
        yield "\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1266
        yield ($context["help_mail_parameter"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1271
        yield ($context["text_smtp"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">";
        // line 1273
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1275
        yield ($context["config_mail_smtp_hostname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1276
        yield ($context["help_mail_smtp_hostname"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">";
        // line 1280
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1282
        yield ($context["config_mail_smtp_username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">";
        // line 1286
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1288
        yield ($context["config_mail_smtp_password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1289
        yield ($context["help_mail_smtp_password"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">";
        // line 1293
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1295
        yield ($context["config_mail_smtp_port"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">";
        // line 1299
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1301
        yield ($context["config_mail_smtp_timeout"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1306
        yield ($context["text_mail_alert"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1308
        yield ($context["entry_mail_alert"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 1311
        $context["mail_alert_row"] = 0;
        // line 1312
        yield "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1313
            yield "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
            // line 1314
            yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1314);
            yield "\" id=\"input-mail-alert-";
            yield ($context["mail_alert_row"] ?? null);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1314), ($context["config_mail_alert"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-mail-alert-";
            yield ($context["mail_alert_row"] ?? null);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1314);
            yield "</label>
                        </div>
                        ";
            // line 1316
            $context["mail_alert_row"] = (($context["mail_alert_row"] ?? null) + 1);
            // line 1317
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1318
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 1319
        yield ($context["help_mail_alert"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">";
        // line 1323
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1325
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "\" id=\"input-mail-alert-email\" class=\"form-control\">";
        yield ($context["config_mail_alert_email"] ?? null);
        yield "</textarea>
                    <div class=\"form-text\">";
        // line 1326
        yield ($context["help_mail_alert_email"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1333
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1335
        yield ($context["entry_maintenance"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_maintenance\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_maintenance\" value=\"1\" id=\"input-maintenance\" class=\"form-check-input\"";
        // line 1339
        if (($context["config_maintenance"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                    <div class=\"form-text\">";
        // line 1341
        yield ($context["help_maintenance"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-expire\" class=\"col-sm-2 col-form-label\">";
        // line 1345
        yield ($context["entry_session_expire"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_session_expire\" value=\"";
        // line 1347
        yield ($context["config_session_expire"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_session_expire"] ?? null);
        yield "\" id=\"input-session-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1348
        yield ($context["help_session_expire"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-samesite\" class=\"col-sm-2 col-form-label\">";
        // line 1352
        yield ($context["entry_session_samesite"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_session_samesite\" id=\"input-session-samesite\" class=\"form-select\">
                      <option value=\"None\"";
        // line 1355
        if ((($context["config_session_samesite"] ?? null) == "None")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_none"] ?? null);
        yield "</option>
                      <option value=\"Lax\"";
        // line 1356
        if ((($context["config_session_samesite"] ?? null) == "Lax")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_lax"] ?? null);
        yield "</option>
                      <option value=\"Strict\"";
        // line 1357
        if ((($context["config_session_samesite"] ?? null) == "Strict")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_strict"] ?? null);
        yield "</option>
                    </select>
                    <div class=\"form-text\">";
        // line 1359
        yield ($context["help_session_samesite"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1363
        yield ($context["entry_seo_url"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_seo_url\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_seo_url\" value=\"1\" id=\"input-seo-url\" class=\"form-check-input\"";
        // line 1367
        if (($context["config_seo_url"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                    <div class=\"form-text\">";
        // line 1369
        yield ($context["help_seo_url"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-robots\" class=\"col-sm-2 col-form-label\">";
        // line 1373
        yield ($context["entry_robots"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1375
        yield ($context["entry_robots"] ?? null);
        yield "\" id=\"input-robots\" class=\"form-control\">";
        yield ($context["config_robots"] ?? null);
        yield "</textarea>
                    <div class=\"form-text\">";
        // line 1376
        yield ($context["help_robots"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-compression\" class=\"col-sm-2 col-form-label\">";
        // line 1380
        yield ($context["entry_compression"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1382
        yield ($context["config_compression"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_compression"] ?? null);
        yield "\" id=\"input-compression\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1383
        yield ($context["help_compression"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1388
        yield ($context["text_security"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1390
        yield ($context["entry_user_2fa"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_user_2fa\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_user_2fa\" value=\"1\" id=\"input-user-2fa\" class=\"form-check-input\"";
        // line 1394
        if (($context["config_user_2fa"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                    <div class=\"form-text\">";
        // line 1396
        yield ($context["help_user_2fa"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1400
        yield ($context["entry_shared"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_shared\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_shared\" value=\"1\" id=\"input-shared\" class=\"form-check-input\"";
        // line 1404
        if (($context["config_shared"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                    <div class=\"form-text\">";
        // line 1406
        yield ($context["help_shared"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1411
        yield ($context["text_upload"] ?? null);
        yield "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-file-max-size\" class=\"col-sm-2 col-form-label\">";
        // line 1413
        yield ($context["entry_file_max_size"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1415
        yield ($context["config_file_max_size"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_file_max_size"] ?? null);
        yield "\" id=\"input-file-max-size\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1416
        yield ($context["help_file_max_size"] ?? null);
        yield "</div>
                    <div id=\"error-file-max-size\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-ext-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1421
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1423
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        yield ($context["config_file_ext_allowed"] ?? null);
        yield "</textarea>
                    <div class=\"form-text\">";
        // line 1424
        yield ($context["help_file_ext_allowed"] ?? null);
        yield "</div>
                    <div id=\"error-file-ext-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-mime-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1429
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1431
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        yield ($context["config_file_mime_allowed"] ?? null);
        yield "</textarea>
                    <div class=\"form-text\">";
        // line 1432
        yield ($context["help_file_mime_allowed"] ?? null);
        yield "</div>
                    <div id=\"error-file-mime-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1438
        yield ($context["text_error"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1440
        yield ($context["entry_error_display"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_error_display\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_error_display\" value=\"1\" id=\"input-error-display\" class=\"form-check-input\"";
        // line 1444
        if (($context["config_error_display"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1449
        yield ($context["entry_error_log"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_error_log\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_error_log\" value=\"1\" id=\"input-error-log\" class=\"form-check-input\"";
        // line 1453
        if (($context["config_error_log"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-error-filename\" class=\"col-sm-2 col-form-label\">";
        // line 1458
        yield ($context["entry_error_filename"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1460
        yield ($context["config_error_filename"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_error_filename"] ?? null);
        yield "\" id=\"input-error-filename\" class=\"form-control\"/>
                    <div id=\"error-error-filename\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-theme').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=setting/setting.theme&user_token=";
        // line 1477
        yield ($context["user_token"] ?? null);
        yield "&theme=' + this.value,
        dataType: 'html',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(html) {
            \$('#theme-thumb').attr('src', html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-theme').trigger('change');

\$('#input-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token=";
        // line 1500
        yield ($context["user_token"] ?? null);
        yield "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#input-zone').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#input-zone').prop('disabled', false);
        },
        success: function(json) {
            html = '<option value=\"\">";
        // line 1511
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '";
        // line 1517
        yield ($context["config_zone_id"] ?? null);
        yield "') {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>";
        // line 1524
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_none"] ?? null), "js");
        yield "</option>';
            }

            \$('#input-zone').html(html);

            \$('#button-save').prop('disabled', false);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-country').trigger('change');
//--></script>
";
        // line 1539
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
        return "admin/view/template/setting/setting.twig";
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
        return array (  3675 => 1539,  3657 => 1524,  3647 => 1517,  3638 => 1511,  3624 => 1500,  3598 => 1477,  3576 => 1460,  3571 => 1458,  3561 => 1453,  3554 => 1449,  3544 => 1444,  3537 => 1440,  3532 => 1438,  3523 => 1432,  3517 => 1431,  3512 => 1429,  3504 => 1424,  3498 => 1423,  3493 => 1421,  3485 => 1416,  3479 => 1415,  3474 => 1413,  3469 => 1411,  3461 => 1406,  3454 => 1404,  3447 => 1400,  3440 => 1396,  3433 => 1394,  3426 => 1390,  3421 => 1388,  3413 => 1383,  3407 => 1382,  3402 => 1380,  3395 => 1376,  3389 => 1375,  3384 => 1373,  3377 => 1369,  3370 => 1367,  3363 => 1363,  3356 => 1359,  3347 => 1357,  3339 => 1356,  3331 => 1355,  3325 => 1352,  3318 => 1348,  3312 => 1347,  3307 => 1345,  3300 => 1341,  3293 => 1339,  3286 => 1335,  3281 => 1333,  3271 => 1326,  3265 => 1325,  3260 => 1323,  3253 => 1319,  3250 => 1318,  3244 => 1317,  3242 => 1316,  3227 => 1314,  3224 => 1313,  3219 => 1312,  3217 => 1311,  3211 => 1308,  3206 => 1306,  3196 => 1301,  3191 => 1299,  3182 => 1295,  3177 => 1293,  3170 => 1289,  3164 => 1288,  3159 => 1286,  3150 => 1282,  3145 => 1280,  3138 => 1276,  3132 => 1275,  3127 => 1273,  3122 => 1271,  3114 => 1266,  3108 => 1265,  3103 => 1263,  3096 => 1259,  3087 => 1257,  3079 => 1256,  3075 => 1255,  3069 => 1252,  3064 => 1250,  3049 => 1240,  3041 => 1237,  3034 => 1233,  3022 => 1226,  3014 => 1223,  3007 => 1219,  2995 => 1212,  2987 => 1209,  2980 => 1205,  2968 => 1198,  2960 => 1195,  2953 => 1191,  2941 => 1184,  2933 => 1181,  2926 => 1177,  2914 => 1170,  2906 => 1167,  2899 => 1163,  2887 => 1156,  2879 => 1153,  2872 => 1149,  2860 => 1142,  2852 => 1139,  2845 => 1135,  2833 => 1128,  2825 => 1125,  2818 => 1121,  2806 => 1114,  2798 => 1111,  2791 => 1107,  2779 => 1100,  2771 => 1097,  2764 => 1093,  2752 => 1086,  2744 => 1083,  2737 => 1079,  2725 => 1072,  2717 => 1069,  2710 => 1065,  2705 => 1063,  2693 => 1053,  2687 => 1052,  2685 => 1051,  2670 => 1049,  2667 => 1048,  2662 => 1047,  2660 => 1046,  2654 => 1043,  2647 => 1039,  2644 => 1038,  2629 => 1036,  2625 => 1035,  2621 => 1034,  2615 => 1031,  2608 => 1027,  2598 => 1020,  2595 => 1019,  2580 => 1017,  2576 => 1016,  2572 => 1015,  2566 => 1012,  2559 => 1008,  2556 => 1007,  2541 => 1005,  2537 => 1004,  2531 => 1001,  2524 => 997,  2514 => 990,  2511 => 989,  2496 => 987,  2492 => 986,  2488 => 985,  2482 => 982,  2475 => 978,  2469 => 977,  2464 => 975,  2457 => 971,  2451 => 970,  2446 => 968,  2439 => 964,  2432 => 962,  2425 => 958,  2418 => 954,  2411 => 952,  2404 => 948,  2398 => 944,  2383 => 942,  2379 => 941,  2373 => 938,  2366 => 934,  2359 => 932,  2352 => 928,  2345 => 924,  2335 => 917,  2332 => 916,  2317 => 914,  2313 => 913,  2307 => 910,  2300 => 906,  2293 => 904,  2286 => 900,  2279 => 896,  2272 => 894,  2265 => 890,  2258 => 886,  2251 => 884,  2244 => 880,  2237 => 876,  2227 => 868,  2212 => 866,  2208 => 865,  2202 => 862,  2195 => 857,  2180 => 855,  2176 => 854,  2170 => 851,  2163 => 846,  2148 => 844,  2144 => 843,  2138 => 840,  2131 => 835,  2116 => 833,  2112 => 832,  2106 => 829,  2099 => 824,  2084 => 822,  2080 => 821,  2074 => 818,  2067 => 813,  2052 => 811,  2048 => 810,  2042 => 807,  2034 => 802,  2031 => 801,  2016 => 799,  2012 => 798,  2006 => 795,  1998 => 790,  1988 => 783,  1985 => 782,  1970 => 780,  1966 => 779,  1962 => 778,  1956 => 775,  1949 => 771,  1946 => 770,  1931 => 768,  1927 => 767,  1921 => 764,  1914 => 760,  1911 => 759,  1896 => 757,  1892 => 756,  1886 => 753,  1878 => 748,  1875 => 747,  1856 => 744,  1853 => 743,  1849 => 742,  1843 => 739,  1835 => 734,  1832 => 733,  1813 => 730,  1810 => 729,  1806 => 728,  1800 => 725,  1793 => 721,  1790 => 720,  1775 => 718,  1771 => 717,  1765 => 714,  1758 => 710,  1755 => 709,  1740 => 707,  1736 => 706,  1732 => 705,  1726 => 702,  1719 => 698,  1712 => 696,  1705 => 692,  1698 => 688,  1691 => 686,  1684 => 682,  1677 => 678,  1670 => 676,  1663 => 672,  1656 => 668,  1649 => 666,  1642 => 662,  1635 => 658,  1629 => 657,  1624 => 655,  1617 => 651,  1606 => 643,  1603 => 642,  1588 => 640,  1584 => 639,  1580 => 638,  1574 => 635,  1566 => 630,  1560 => 629,  1555 => 627,  1548 => 623,  1541 => 621,  1534 => 617,  1524 => 612,  1517 => 608,  1507 => 603,  1500 => 599,  1493 => 595,  1486 => 593,  1479 => 589,  1471 => 584,  1468 => 583,  1449 => 580,  1446 => 579,  1442 => 578,  1436 => 575,  1429 => 571,  1426 => 570,  1411 => 568,  1407 => 567,  1401 => 564,  1391 => 559,  1384 => 555,  1377 => 551,  1370 => 549,  1363 => 545,  1355 => 540,  1346 => 538,  1340 => 535,  1333 => 531,  1326 => 529,  1319 => 525,  1312 => 521,  1301 => 513,  1292 => 511,  1284 => 510,  1280 => 509,  1274 => 506,  1267 => 502,  1258 => 500,  1250 => 499,  1246 => 498,  1240 => 495,  1230 => 490,  1223 => 486,  1216 => 482,  1205 => 474,  1199 => 473,  1194 => 471,  1187 => 467,  1184 => 466,  1169 => 464,  1165 => 463,  1161 => 462,  1155 => 459,  1148 => 455,  1145 => 454,  1130 => 452,  1126 => 451,  1122 => 450,  1116 => 447,  1109 => 443,  1099 => 436,  1093 => 435,  1088 => 433,  1081 => 429,  1074 => 427,  1067 => 423,  1060 => 419,  1053 => 417,  1046 => 413,  1038 => 408,  1032 => 407,  1027 => 405,  1020 => 401,  1010 => 394,  1003 => 392,  996 => 388,  989 => 384,  982 => 382,  975 => 378,  968 => 374,  961 => 372,  954 => 368,  947 => 364,  937 => 357,  930 => 355,  923 => 351,  915 => 346,  909 => 345,  904 => 343,  896 => 338,  890 => 337,  885 => 335,  878 => 331,  871 => 329,  864 => 325,  856 => 320,  850 => 319,  845 => 317,  837 => 312,  831 => 311,  826 => 309,  817 => 303,  804 => 292,  789 => 290,  785 => 289,  779 => 286,  773 => 282,  758 => 280,  754 => 279,  748 => 276,  743 => 274,  734 => 268,  727 => 266,  720 => 262,  714 => 258,  699 => 256,  695 => 255,  689 => 252,  682 => 248,  679 => 247,  664 => 245,  660 => 244,  654 => 241,  649 => 239,  642 => 234,  627 => 232,  623 => 231,  617 => 228,  611 => 224,  596 => 222,  592 => 221,  586 => 218,  581 => 216,  573 => 210,  558 => 208,  554 => 207,  548 => 204,  539 => 198,  533 => 194,  518 => 192,  514 => 191,  508 => 188,  503 => 186,  498 => 183,  491 => 179,  488 => 178,  469 => 175,  466 => 174,  462 => 173,  456 => 170,  453 => 169,  451 => 168,  445 => 165,  439 => 164,  434 => 162,  427 => 158,  421 => 157,  416 => 155,  407 => 149,  403 => 148,  394 => 146,  388 => 143,  378 => 138,  373 => 136,  363 => 131,  358 => 129,  351 => 125,  345 => 124,  340 => 122,  331 => 118,  326 => 116,  316 => 111,  311 => 109,  301 => 104,  296 => 102,  288 => 96,  273 => 94,  269 => 93,  263 => 90,  255 => 84,  240 => 82,  236 => 81,  230 => 78,  222 => 73,  217 => 71,  213 => 70,  204 => 68,  198 => 65,  189 => 59,  185 => 58,  176 => 56,  170 => 53,  161 => 49,  156 => 47,  147 => 43,  142 => 41,  132 => 36,  127 => 34,  119 => 29,  115 => 28,  111 => 27,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  90 => 21,  85 => 19,  78 => 14,  67 => 12,  63 => 11,  58 => 9,  51 => 7,  47 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-setting\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
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
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_edit }}</div>
      <div class=\"card-body\">
        <form id=\"form-setting\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-store\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_store }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_local }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_option }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_image }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_mail }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_server }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                <label for=\"input-meta-title\" class=\"col-sm-2 col-form-label\">{{ entry_meta_title }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"{{ config_meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title\" class=\"form-control\"/>
                  <div id=\"error-meta-title\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-meta-description\" class=\"col-sm-2 col-form-label\">{{ entry_meta_description }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description\" class=\"form-control\">{{ config_meta_description }}</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-meta-keyword\" class=\"col-sm-2 col-form-label\">{{ entry_meta_keyword }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword\" class=\"form-control\">{{ config_meta_keyword }}</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">{{ entry_logo }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                    <img src=\"{{ logo }}\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_logo\" value=\"{{ config_logo }}\" id=\"input-logo\"/>
                    <div class=\"d-grid\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                    </div>
                  </div>
                </div>
              </div>
            <div class=\"row mb-3\">
                <label for=\"input-icon\" class=\"col-sm-2 col-form-label\">{{ entry_icon }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                    <img src=\"{{ icon }}\" alt=\"\" title=\"\" id=\"thumb-icon\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_icon\" value=\"{{ config_icon }}\" id=\"input-icon\"/>
                    <div class=\"d-grid\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                    </div>
\t\t\t\t        \t <div class=\"form-text\">{{ help_icon }}</div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">{{ entry_theme }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-select\">
                    {% for theme in themes %}
                      <option value=\"{{ theme.value }}\"{% if theme.value == config_theme %} selected{% endif %}>{{ theme.text }}</option>
                    {% endfor %}
                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme-thumb\" class=\"img-thumbnail\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">{{ entry_layout }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-select\">
                    {% for layout in layouts %}
                      <option value=\"{{ layout.layout_id }}\"{% if layout.layout_id == config_layout_id %} selected{% endif %}>{{ layout.name }}</option>
                    {% endfor %}
                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-store\" class=\"tab-pane\">
              <div class=\"row mb-3 required\">
                <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"{{ config_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\"/>
                  <div id=\"error-name\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">{{ entry_owner }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"{{ config_owner }}\" placeholder=\"{{ entry_owner }}\" id=\"input-owner\" class=\"form-control\"/>
                  <div id=\"error-owner\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-address\" class=\"col-sm-2 col-form-label\">{{ entry_address }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" rows=\"5\" placeholder=\"{{ entry_address }}\" id=\"input-address\" class=\"form-control\">{{ config_address }}</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">{{ entry_geocode }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"{{ config_geocode }}\" placeholder=\"{{ entry_geocode }}\" id=\"input-geocode\" class=\"form-control\"/>
                  <div class=\"form-text\">{{ help_geocode }}</div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-email\" class=\"col-sm-2 col-form-label\">{{ entry_email }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"{{ config_email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
                  <div id=\"error-email\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">{{ entry_telephone }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"{{ config_telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
                  <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-image\" class=\"col-sm-2 col-form-label\">{{ entry_image }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                    <img src=\"{{ thumb }}\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_image\" value=\"{{ config_image }}\" id=\"input-image\"/>
                    <div class=\"d-grid\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-open\" class=\"col-sm-2 col-form-label\">{{ entry_open }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"{{ entry_open }}\" id=\"input-open\" class=\"form-control\">{{ config_open }}</textarea>
                  <div class=\"form-text\">{{ help_open }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">{{ entry_comment }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"{{ entry_comment }}\" id=\"input-comment\" class=\"form-control\">{{ config_comment }}</textarea>
                  <div class=\"form-text\">{{ help_comment }}</div>
                </div>
              </div>
              {% if locations %}
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_location }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      {% for location in locations %}
                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_location[]\" value=\"{{ location.location_id }}\" id=\"input-location-{{ location.location_id }}\" class=\"form-check-input\"{% if location.location_id in config_location %} checked{% endif %}/> <label for=\"input-location-{{ location.location_id }}\" class=\"form-check-label\">{{ location.name }}</label>
                        </div>
                      {% endfor %}
                    </div>
                    <div class=\"form-text\">{{ help_location }}</div>
                  </div>
                </div>
              {% endif %}
            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_region }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-country\" class=\"col-sm-2 col-form-label\">{{ entry_country }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_country_id\" id=\"input-country\" class=\"form-select\">
                      {% for country in countries %}
                        <option value=\"{{ country.country_id }}\"{% if country.country_id == config_country_id %} selected{% endif %}>{{ country.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">{{ entry_zone }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-select\"></select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">{{ entry_timezone }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-select\">
                      {% for timezone in timezones %}
                        <option value=\"{{ timezone.value }}\"{% if timezone.value == config_timezone %} selected{% endif %}>{{ timezone.text }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend>{{ text_language }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-language-catalog\" class=\"col-sm-2 col-form-label\">{{ entry_language }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_catalog\" id=\"input-language-catalog\" class=\"form-select\">
                      {% for language in languages %}
                        <option value=\"{{ language.code }}\"{% if language.code == config_language_catalog %} selected{% endif %}>{{ language.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-language-admin\" class=\"col-sm-2 col-form-label\">{{ entry_language_admin }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_admin\" id=\"input-language-admin\" class=\"form-select\">
                      {% for language in languages %}
                        <option value=\"{{ language.code }}\"{% if language.code == config_language_admin %} selected{% endif %}>{{ language.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_currency }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">{{ entry_currency }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency\" id=\"input-currency\" class=\"form-select\">
                      {% for currency in currencies %}
                        <option value=\"{{ currency.code }}\"{% if currency.code == config_currency %} selected{% endif %}>{{ currency.title }}</option>
                      {% endfor %}
                    </select>
                    <div class=\"form-text\">{{ help_currency }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">{{ entry_currency_engine }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-select\">
                      {% for currency_engine in currency_engines %}
                        <option value=\"{{ currency_engine.value }}\"{% if currency_engine.value == config_currency_engine %} selected{% endif %}>{{ currency_engine.text }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_currency_auto }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_currency_auto\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_currency_auto\" value=\"1\" id=\"input-currency-auto\" class=\"form-check-input\"{% if config_currency_auto %} checked{% endif %}/>
                    </div>
                    <div class=\"form-text\">{{ help_currency_auto }}</div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend>{{ text_measurement }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">{{ entry_length_class }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-select\">
                      {% for length_class in length_classes %}
                        <option value=\"{{ length_class.length_class_id }}\"{% if length_class.length_class_id == config_length_class_id %} selected{% endif %}>{{ length_class.title }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">{{ entry_weight_class }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                      {% for weight_class in weight_classes %}
                        <option value=\"{{ weight_class.weight_class_id }}\"{% if weight_class.weight_class_id == config_weight_class_id %} selected{% endif %}>{{ weight_class.title }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-option\" class=\"tab-pane\">

              <div class=\"accordion\" id=\"accordion-option\">

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-product\">{{ text_product }}</button></h2>

                  <div id=\"collapse-product\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mt-2 mb-3 required\">
                        <label for=\"input-product-description-length\" class=\"col-sm-2 col-form-label\">{{ entry_product_description_length }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_product_description_length\" value=\"{{ config_product_description_length }}\" placeholder=\"{{ entry_product_description_length }}\" id=\"input-product-description-length\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_product_description_length }}</div>
                          <div id=\"error-product-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-pagination\" class=\"col-sm-2 col-form-label\">{{ entry_pagination }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination\" value=\"{{ config_pagination }}\" placeholder=\"{{ entry_pagination }}\" id=\"input-pagination\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_pagination }}</div>
                          <div id=\"error-pagination\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_product_count }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_product_count\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_product_count\" value=\"1\" id=\"input-product-count\" class=\"form-check-input\"{% if config_product_count %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_product_count }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-pagination-admin\" class=\"col-sm-2 col-form-label\">{{ entry_pagination_admin }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination_admin\" value=\"{{ config_pagination_admin }}\" placeholder=\"{{ entry_pagination_admin }}\" id=\"input-pagination-admin\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_pagination }}</div>
                          <div id=\"error-pagination-admin\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-autocomplete-limit\" class=\"col-sm-2 col-form-label\">{{ entry_autocomplete_limit }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_autocomplete_limit\" value=\"{{ config_autocomplete_limit }}\" placeholder=\"{{ entry_autocomplete_limit }}\" id=\"input-autocomplete-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_autocomplete_limit }}</div>
                          <div id=\"error-autocomplete-limit\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_product_report }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_product_report_status\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_product_report_status\" value=\"1\" id=\"input-product-report\" class=\"form-check-input\"{% if config_product_report_status %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_product_report }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-review\">{{ text_review }}</button></h2>
                  <div id=\"collapse-review\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_review_status }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_review_status\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_review_status\" value=\"1\" id=\"input-review-status\" class=\"form-check-input\"{% if config_review_status %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_review }}</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_review_purchased }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_review_purchased\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_review_purchased\" value=\"1\" id=\"input-review-purchased\" class=\"form-check-input\"{% if config_review_purchased %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_review_purchased }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_review_guest }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_review_guest\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_review_guest\" value=\"1\" id=\"input-review-guest\" class=\"form-check-input\"{% if config_review_guest %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_review_guest }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-cms\">{{ text_cms }}</button></h2>
                  <div id=\"collapse-cms\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3 required\">
                        <label for=\"input-article-description-length\" class=\"col-sm-2 col-form-label\">{{ entry_article_description_length }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_article_description_length\" value=\"{{ config_article_description_length }}\" placeholder=\"{{ entry_article_description_length }}\" id=\"input-article-description-length\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_article_description_length }}</div>
                          <div id=\"error-article-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_comment_status }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_comment_status\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_comment_status\" value=\"1\" id=\"input-comment-status\" class=\"form-check-input\"{% if config_comment_status %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_comment_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_comment_approve }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_comment_approve\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_comment_approve\" value=\"1\" id=\"input-comment-approve\" class=\"form-check-input\"{% if config_comment_approve %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_comment_approve }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-comment-interval\" class=\"col-sm-2 col-form-label\">{{ entry_comment_interval }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_comment_interval\" value=\"{{ config_comment_interval }}\" placeholder=\"{{ entry_comment_interval }}\" id=\"input-comment-interval\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_comment_interval }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-legal\">{{ text_legal }}</button></h2>
                  <div id=\"collapse-legal\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">{{ entry_cookie }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_cookie_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_cookie }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">{{ entry_gdpr }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_gdpr_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_gdpr }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">{{ entry_gdpr_limit }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_gdpr_limit\" value=\"{{ config_gdpr_limit }}\" placeholder=\"{{ entry_gdpr_limit }}\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_gdpr_limit }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-tax\">{{ text_tax }}</button></h2>
                  <div id=\"collapse-tax\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_tax }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_tax\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_tax\" value=\"1\" id=\"input-tax\" class=\"form-check-input\"{% if config_tax %} checked{% endif %}/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">{{ entry_tax_default }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-select\">
                            <option value=\"\">{{ text_none }}</option>
                            <option value=\"shipping\"{% if config_tax_default == 'shipping' %} selected{% endif %}>{{ text_shipping }}</option>
                            <option value=\"payment\"{% if config_tax_default == 'payment' %} selected{% endif %}>{{ text_payment }}</option>
                          </select>
                          <div class=\"form-text\">{{ help_tax_default }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">{{ entry_tax_customer }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-select\">
                            <option value=\"\">{{ text_none }}</option>
                            <option value=\"shipping\"{% if config_tax_customer == 'shipping' %} selected{% endif %}>{{ text_shipping }}</option>
                            <option value=\"payment\"{% if config_tax_customer == 'payment' %} selected{% endif %}>{{ text_payment }}</option>
                          </select>
                          <div class=\"form-text\">{{ help_tax_customer }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-account\">{{ text_account }}</button></h2>
                  <div id=\"collapse-account\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_online }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_online\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_customer_online\" value=\"1\" id=\"input-customer-online\" class=\"form-check-input\"{% if config_customer_online %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_customer_online }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-online-expire\" class=\"col-sm-2 col-form-label\">{{ entry_customer_online_expire }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"config_customer_online_expire\" value=\"{{ config_customer_online_expire }}\" placeholder=\"{{ entry_customer_online_expire }}\" id=\"input-customer-online-expire\" class=\"form-control\"/> <span class=\"input-group-text\" id=\"basic-addon2\">{{ text_hour }}</span>
                          </div>
                          <div class=\"form-text\">{{ help_customer_online_expire }}</div>
                          <div id=\"error-customer-online-expire\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_activity }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_activity\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_customer_activity\" value=\"1\" id=\"input-customer-activity\" class=\"form-check-input\"{% if config_customer_activity %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_customer_activity }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_search }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_search\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_customer_search\" value=\"1\" id=\"input-customer-search\" class=\"form-check-input\"{% if config_customer_search %} checked{% endif %}/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">{{ entry_customer_group }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == config_customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_customer_group }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_group_display }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-customer-group-display\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for customer_group in customer_groups %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"{{ customer_group.customer_group_id }}\" id=\"input-customer-group-{{ customer_group.customer_group_id }}\" class=\"form-check-input\"{% if customer_group.customer_group_id in config_customer_group_display %} checked{% endif %}/> <label for=\"input-customer-group-{{ customer_group.customer_group_id }}\" class=\"form-check-label\">{{ customer_group.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"form-text\">{{ help_customer_group_display }}</div>
                          <div id=\"error-customer-group-display\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_price }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_price\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_customer_price\" value=\"1\" id=\"input-customer-price\" class=\"form-check-input\"{% if config_customer_price %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_customer_price }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_telephone_display }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_telephone_display\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_telephone_display\" value=\"1\" id=\"input-telephone-display\" class=\"form-check-input\"{% if config_telephone_display %} checked{% endif %}/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_telephone_required }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_telephone_required\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_telephone_required\" value=\"1\" id=\"input-telephone-required\" class=\"form-check-input\"{% if config_telephone_required %} checked{% endif %}/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_2fa }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_2fa\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_customer_2fa\" value=\"1\" id=\"input-customer-2fa\" class=\"form-check-input\"{% if config_customer_2fa %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_customer_2fa }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">{{ entry_login_attempts }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_login_attempts\" value=\"{{ config_login_attempts }}\" placeholder=\"{{ entry_login_attempts }}\" id=\"input-login-attempts\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_login_attempts }}</div>
                          <div id=\"error-login-attempts\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-account\" class=\"col-sm-2 col-form-label\">{{ entry_account }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_account_id\" id=\"input-account\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_account_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_account }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-checkout\">{{ text_checkout }}</button></h2>
                  <div id=\"collapse-checkout\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">{{ entry_invoice_prefix }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_invoice_prefix\" value=\"{{ config_invoice_prefix }}\" placeholder=\"{{ entry_invoice_prefix }}\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_invoice_prefix }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_cart_weight }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_cart_weight\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_cart_weight\" value=\"1\" id=\"input-cart-weight\" class=\"form-check-input\"{% if config_cart_weight %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_cart_weight }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_checkout_guest }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_checkout_guest\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_checkout_guest\" value=\"1\" id=\"input-checkout-guest\" class=\"form-check-input\"{% if config_checkout_guest %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_checkout_guest }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_checkout_payment_address }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_checkout_payment_address\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_checkout_payment_address\" value=\"1\" id=\"input-checkout-payment-address\" class=\"form-check-input\"{% if config_checkout_payment_address %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_checkout_payment_address }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_checkout_shipping_address }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_checkout_shipping_address\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_checkout_shipping_address\" value=\"1\" id=\"input-checkout-shipping-address\" class=\"form-check-input\"{% if config_checkout_shipping_address %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_checkout_shipping_address }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">{{ entry_checkout }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_checkout_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_checkout }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">{{ entry_order_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_order_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_order_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_processing_status }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-processing-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for order_status in order_statuses %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"{{ order_status.order_status_id }}\" id=\"input-processing-status-{{ order_status.order_status_id }}\" class=\"form-check-input\"{% if order_status.order_status_id in config_processing_status %} checked{% endif %}/> <label for=\"input-processing-status-{{ order_status.order_status_id }}\" class=\"form-check-label\">{{ order_status.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"form-text\">{{ help_processing_status }}</div>
                          <div id=\"error-processing-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_complete_status }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-complete-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for order_status in order_statuses %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"{{ order_status.order_status_id }}\" id=\"input-complete-status-{{ order_status.order_status_id }}\" class=\"form-check-input\"{% if order_status.order_status_id in config_complete_status %} checked{% endif %}/> <label for=\"input-complete-status-{{ order_status.order_status_id }}\" class=\"form-check-label\">{{ order_status.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"form-text\">{{ help_complete_status }}</div>
                          <div id=\"error-complete-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-void-status\" class=\"col-sm-2 col-form-label\">{{ entry_void_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_void_status_id\" id=\"input-void-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_void_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_void_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">{{ entry_fraud_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_fraud_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_fraud_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-api\" class=\"col-sm-2 col-form-label\">{{ entry_api }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_api_id\" id=\"input-api\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for api in apis %}
                              <option value=\"{{ api.api_id }}\"{% if api.api_id == config_api_id %} selected{% endif %}>{{ api.username }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_api }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-subscription\">{{ text_subscription }}</button></h2>
                  <div id=\"collapse-subscription\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_status_id\" id=\"input-subscription-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_subscription }}</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-active-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_active_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_active_status_id\" id=\"input-subscription-active-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_active_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-expired-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_expired_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_expired_status_id\" id=\"input-subscription-expired-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_expired_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-suspended-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_suspended_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_suspended_status_id\" id=\"input-subscription-suspended-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_suspended_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-canceled-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_canceled_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_canceled_status_id\" id=\"input-subscription-canceled-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_canceled_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-failed-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_failed_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_failed_status_id\" id=\"input-subscription-failed-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_failed_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-denied-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_denied_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_denied_status_id\" id=\"input-subscription-denied-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_denied_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-stock\">{{ text_stock }}</button></h2>
                  <div id=\"collapse-stock\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_stock_display }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_stock_display\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_stock_display\" value=\"1\" id=\"input-stock-display\" class=\"form-check-input\"{% if config_stock_display %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_stock_display }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_stock_warning }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_stock_warning\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_stock_warning\" value=\"1\" id=\"input-stock-warning\" class=\"form-check-input\"{% if config_stock_warning %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_stock_warning }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_stock_checkout }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_stock_checkout\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_stock_checkout\" value=\"1\" id=\"input-stock-checkout\" class=\"form-check-input\"{% if config_stock_checkout %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_stock_checkout }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">{{ entry_stock_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                            {% for stock_status in stock_statuses %}
                              <option value=\"{{ stock_status.stock_status_id }}\"{% if stock_status.stock_status_id == config_stock_status_id %} selected{% endif %}>{{ stock_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_stock_status }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-affiliate\">{{ text_affiliate }}</button></h2>
                  <div id=\"collapse-affiliate\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_affiliate_status }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_affiliate_status\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_affiliate_status\" value=\"1\" id=\"input-affiliate-status\" class=\"form-check-input\"{% if config_affiliate_status %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_affiliate_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate_group }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == config_affiliate_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_affiliate_approval }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_affiliate_approval\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_affiliate_approval\" value=\"1\" id=\"input-affiliate-approval\" class=\"form-check-input\"{% if config_affiliate_approval %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_affiliate_approval }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_affiliate_auto }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_affiliate_auto\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_affiliate_auto\" value=\"1\" id=\"input-affiliate-auto\" class=\"form-check-input\"{% if config_affiliate_auto %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_affiliate_auto }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate_commission }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_commission\" value=\"{{ config_affiliate_commission }}\" placeholder=\"{{ entry_affiliate_commission }}\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_affiliate_commission }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-expire\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate_expire }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_expire\" value=\"{{ config_affiliate_expire }}\" placeholder=\"{{ entry_affiliate_expire }}\" id=\"input-affiliate-expire\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_affiliate_expire }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_affiliate_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_affiliate }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-return\">{{ text_return }}</button></h2>
                  <div id=\"collapse-return\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">{{ entry_return_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-select\">
                            {% for return_status in return_statuses %}
                              <option value=\"{{ return_status.return_status_id }}\"{% if return_status.return_status_id == config_return_status_id %} selected{% endif %}>{{ return_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_return_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-return\" class=\"col-sm-2 col-form-label\">{{ entry_return }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_id\" id=\"input-return\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_return_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_return }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-captcha\">{{ text_captcha }}</button></h2>
                  <div id=\"collapse-captcha\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">{{ entry_captcha }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-select\">
                            <option value=\"\">{{ text_none }}</option>
                            {% for captcha in captchas %}
                              <option value=\"{{ captcha.value }}\"{% if captcha.value == config_captcha %} selected{% endif %}>{{ captcha.text }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_captcha }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_captcha_page }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% set captcha_page_row = 0 %}
                            {% for captcha_page in captcha_pages %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"{{ captcha_page.value }}\" id=\"input-captcha-{{ captcha_page_row }}\" class=\"form-check-input\"{% if captcha_page.value in config_captcha_page %} checked{% endif %}/> <label for=\"input-captcha-{{ captcha_page_row }}\" class=\"form-check-label\">{{ captcha_page.text }}</label>
                              </div>
                              {% set captcha_page_row = captcha_page_row + 1 %}
                            {% endfor %}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_image_size }}</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-default-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_default }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-default\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_default_width\" value=\"{{ config_image_default_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-default-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_default_height\" value=\"{{ config_image_default_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-default-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-default\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-category-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_category }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-category\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_width\" value=\"{{ config_image_category_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-category-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_height\" value=\"{{ config_image_category_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-category-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-category\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-thumb-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_thumb }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-thumb\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_width\" value=\"{{ config_image_thumb_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-thumb-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_height\" value=\"{{ config_image_thumb_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-thumb-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-thumb\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-popup-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_popup }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-popup\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_width\" value=\"{{ config_image_popup_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-popup-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_height\" value=\"{{ config_image_popup_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-popup-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-popup\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-product-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_product }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-product\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_width\" value=\"{{ config_image_product_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-product-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_height\" value=\"{{ config_image_product_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-product-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-product\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-additional-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_additional }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-additional\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_width\" value=\"{{ config_image_additional_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-additional-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_height\" value=\"{{ config_image_additional_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-additional-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-additional\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-related-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_related }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-related\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_width\" value=\"{{ config_image_related_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-related-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_height\" value=\"{{ config_image_related_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-related-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-related\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-article-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_article }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-article\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_article_width\" value=\"{{ config_image_article_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-article-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_article_height\" value=\"{{ config_image_article_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-article-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-article\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-topic-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_topic }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-topic\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_topic_width\" value=\"{{ config_image_topic_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-topic-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_topic_height\" value=\"{{ config_image_topic_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-topic-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-topic\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-compare-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_compare }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-compare\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_width\" value=\"{{ config_image_compare_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-compare-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_height\" value=\"{{ config_image_compare_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-compare-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-compare\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-wishlist-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_wishlist }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-wishlist\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_width\" value=\"{{ config_image_wishlist_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-wishlist-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_height\" value=\"{{ config_image_wishlist_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-wishlist-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-wishlist\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-cart-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_cart }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-cart\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_width\" value=\"{{ config_image_cart_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-cart-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_height\" value=\"{{ config_image_cart_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-cart-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-cart\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-location-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_location }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-location\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_width\" value=\"{{ config_image_location_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-location-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_height\" value=\"{{ config_image_location_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-location-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-location\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_general }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">{{ entry_mail_engine }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-select\">
                      <option value=\"\">{{ text_none }}</option>
                      <option value=\"mail\"{% if config_mail_engine == 'mail' %} selected{% endif %}>{{ text_mail }}</option>
                      <option value=\"smtp\"{% if config_mail_engine == 'smtp' %} selected{% endif %}>{{ text_smtp }}</option>
                    </select>
                    <div class=\"form-text\">{{ help_mail_engine }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">{{ entry_mail_parameter }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"{{ config_mail_parameter }}\" placeholder=\"{{ entry_mail_parameter }}\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_mail_parameter }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_smtp }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_hostname }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"{{ config_mail_smtp_hostname }}\" placeholder=\"{{ entry_mail_smtp_hostname }}\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_mail_smtp_hostname }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_username }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"{{ config_mail_smtp_username }}\" placeholder=\"{{ entry_mail_smtp_username }}\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_password }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"{{ config_mail_smtp_password }}\" placeholder=\"{{ entry_mail_smtp_password }}\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_mail_smtp_password }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_port }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"{{ config_mail_smtp_port }}\" placeholder=\"{{ entry_mail_smtp_port }}\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_timeout }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"{{ config_mail_smtp_timeout }}\" placeholder=\"{{ entry_mail_smtp_timeout }}\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_mail_alert }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_mail_alert }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      {% set mail_alert_row = 0 %}
                      {% for mail_alert in mail_alerts %}
                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"{{ mail_alert.value }}\" id=\"input-mail-alert-{{ mail_alert_row }}\" class=\"form-check-input\"{% if mail_alert.value in config_mail_alert %} checked{% endif %}/> <label for=\"input-mail-alert-{{ mail_alert_row }}\" class=\"form-check-label\">{{ mail_alert.text }}</label>
                        </div>
                        {% set mail_alert_row = mail_alert_row + 1 %}
                      {% endfor %}
                    </div>
                    <div class=\"form-text\">{{ help_mail_alert }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">{{ entry_mail_alert_email }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"{{ entry_mail_alert_email }}\" id=\"input-mail-alert-email\" class=\"form-control\">{{ config_mail_alert_email }}</textarea>
                    <div class=\"form-text\">{{ help_mail_alert_email }}</div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_general }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_maintenance }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_maintenance\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_maintenance\" value=\"1\" id=\"input-maintenance\" class=\"form-check-input\"{% if config_maintenance %} checked{% endif %}/>
                    </div>
                    <div class=\"form-text\">{{ help_maintenance }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-expire\" class=\"col-sm-2 col-form-label\">{{ entry_session_expire }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_session_expire\" value=\"{{ config_session_expire }}\" placeholder=\"{{ entry_session_expire }}\" id=\"input-session-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_session_expire }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-samesite\" class=\"col-sm-2 col-form-label\">{{ entry_session_samesite }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_session_samesite\" id=\"input-session-samesite\" class=\"form-select\">
                      <option value=\"None\"{% if config_session_samesite == 'None' %} selected{% endif %}>{{ text_none }}</option>
                      <option value=\"Lax\"{% if config_session_samesite == 'Lax' %} selected{% endif %}>{{ text_lax }}</option>
                      <option value=\"Strict\"{% if config_session_samesite == 'Strict' %} selected{% endif %}>{{ text_strict }}</option>
                    </select>
                    <div class=\"form-text\">{{ help_session_samesite }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_seo_url }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_seo_url\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_seo_url\" value=\"1\" id=\"input-seo-url\" class=\"form-check-input\"{% if config_seo_url %} checked{% endif %}/>
                    </div>
                    <div class=\"form-text\">{{ help_seo_url }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-robots\" class=\"col-sm-2 col-form-label\">{{ entry_robots }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"{{ entry_robots }}\" id=\"input-robots\" class=\"form-control\">{{ config_robots }}</textarea>
                    <div class=\"form-text\">{{ help_robots }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-compression\" class=\"col-sm-2 col-form-label\">{{ entry_compression }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"{{ config_compression }}\" placeholder=\"{{ entry_compression }}\" id=\"input-compression\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_compression }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_security }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_user_2fa }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_user_2fa\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_user_2fa\" value=\"1\" id=\"input-user-2fa\" class=\"form-check-input\"{% if config_user_2fa %} checked{% endif %}/>
                    </div>
                    <div class=\"form-text\">{{ help_user_2fa }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_shared }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_shared\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_shared\" value=\"1\" id=\"input-shared\" class=\"form-check-input\"{% if config_shared %} checked{% endif %}/>
                    </div>
                    <div class=\"form-text\">{{ help_shared }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_upload }}</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-file-max-size\" class=\"col-sm-2 col-form-label\">{{ entry_file_max_size }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"{{ config_file_max_size }}\" placeholder=\"{{ entry_file_max_size }}\" id=\"input-file-max-size\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_file_max_size }}</div>
                    <div id=\"error-file-max-size\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-ext-allowed\" class=\"col-sm-2 col-form-label\">{{ entry_file_ext_allowed }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"{{ entry_file_ext_allowed }}\" id=\"input-file-ext-allowed\" class=\"form-control\">{{ config_file_ext_allowed }}</textarea>
                    <div class=\"form-text\">{{ help_file_ext_allowed }}</div>
                    <div id=\"error-file-ext-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-mime-allowed\" class=\"col-sm-2 col-form-label\">{{ entry_file_mime_allowed }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"{{ entry_file_mime_allowed }}\" id=\"input-file-mime-allowed\" class=\"form-control\">{{ config_file_mime_allowed }}</textarea>
                    <div class=\"form-text\">{{ help_file_mime_allowed }}</div>
                    <div id=\"error-file-mime-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_error }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_error_display }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_error_display\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_error_display\" value=\"1\" id=\"input-error-display\" class=\"form-check-input\"{% if config_error_display %} checked{% endif %}/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_error_log }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_error_log\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_error_log\" value=\"1\" id=\"input-error-log\" class=\"form-check-input\"{% if config_error_log %} checked{% endif %}/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-error-filename\" class=\"col-sm-2 col-form-label\">{{ entry_error_filename }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"{{ config_error_filename }}\" placeholder=\"{{ entry_error_filename }}\" id=\"input-error-filename\" class=\"form-control\"/>
                    <div id=\"error-error-filename\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-theme').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=setting/setting.theme&user_token={{ user_token }}&theme=' + this.value,
        dataType: 'html',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(html) {
            \$('#theme-thumb').attr('src', html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-theme').trigger('change');

\$('#input-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token={{ user_token }}&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#input-zone').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#input-zone').prop('disabled', false);
        },
        success: function(json) {
            html = '<option value=\"\">{{ text_select|escape('js') }}</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '{{ config_zone_id }}') {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>{{ text_none|escape('js') }}</option>';
            }

            \$('#input-zone').html(html);

            \$('#button-save').prop('disabled', false);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-country').trigger('change');
//--></script>
{{ footer }}
", "admin/view/template/setting/setting.twig", "/var/www/html/opencart/upload/admin/view/template/setting/setting.twig");
    }
}
