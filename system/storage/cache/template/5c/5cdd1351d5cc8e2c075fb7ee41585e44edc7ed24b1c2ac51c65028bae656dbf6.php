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

/* admin/view/template/customer/customer_form.twig */
class __TwigTemplate_be80e54e0f889a3f4444bb73ad645701cfc0f861852973103408c16a02500906 extends Template
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
        ";
        // line 6
        if (($context["orders"] ?? null)) {
            // line 7
            yield "          <a href=\"";
            yield ($context["orders"] ?? null);
            yield "\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_order"] ?? null);
            yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-receipt\"></i></a>
        ";
        }
        // line 9
        yield "        <button type=\"submit\" id=\"button-save\" form=\"form-customer\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 10
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 11
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 21
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 24
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-address\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 25
        yield ($context["tab_address"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-payment\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        yield ($context["tab_payment_method"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        yield ($context["tab_history"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-transaction\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        yield ($context["tab_transaction"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        yield ($context["tab_reward"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-ip\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 30
        yield ($context["tab_ip"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-authorize\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 31
        yield ($context["tab_authorize"] ?? null);
        yield "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-general\" class=\"tab-pane active\">
            <form id=\"form-customer\" action=\"";
        // line 35
        yield ($context["save"] ?? null);
        yield "\" method=\"post\">
              <fieldset>
                <legend>";
        // line 37
        yield ($context["text_customer"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-store\" class=\"col-sm-2 col-form-label\">";
        // line 39
        yield ($context["entry_store"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 43
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 43);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 43) == ($context["store_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 43);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                    </select>
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"input-language\" class=\"col-sm-2 col-form-label\">";
        // line 50
        yield ($context["entry_language"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"language_id\" id=\"input-language\" class=\"form-select\">
                      ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 54
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54) == ($context["language_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 54);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                    </select>
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 61
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                      ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 65
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 65);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 65) == ($context["customer_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 65);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 71
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"firstname\" value=\"";
        // line 73
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
                    <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 78
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"lastname\" value=\"";
        // line 80
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
                    <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 85
        yield ($context["entry_email"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"email\" value=\"";
        // line 87
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
                    <div id=\"error-email\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3";
        // line 91
        if (($context["config_telephone_required"] ?? null)) {
            yield " required";
        }
        yield "\">
                  <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 92
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"telephone\" value=\"";
        // line 94
        yield ($context["telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\"/>
                    <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 99
            yield "
                  ";
            // line 100
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 100) == "account")) {
                // line 101
                yield "
                    ";
                // line 102
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 102) == "select")) {
                    // line 103
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 104
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 104);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"custom_field[";
                    // line 106
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                    yield "]\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                    yield "\" class=\"form-select\">
                            <option value=\"\">";
                    // line 107
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                            ";
                    // line 108
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 108));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 109
                        yield "                              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 109);
                        yield "\"";
                        if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 109) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 109);
                        yield "</option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    yield "                          </select>
                          <div id=\"error-custom-field-";
                    // line 112
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 116
                yield "
                    ";
                // line 117
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 117) == "radio")) {
                    // line 118
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 118);
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 119
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 119);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-";
                    // line 121
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
                    // line 122
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 122));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 123
                        yield "                              <div class=\"form-check\">
                                <input type=\"radio\" name=\"custom_field[";
                        // line 124
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 124);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 124);
                        yield "\" class=\"form-check-input\"";
                        if (((($__internal_compile_2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 124) == (($__internal_compile_3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 124);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 124);
                        yield "</label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    yield "                          </div>
                          <div id=\"error-custom-field-";
                    // line 128
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 132
                yield "
                    ";
                // line 133
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 133) == "checkbox")) {
                    // line 134
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 135
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 135);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-";
                    // line 137
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
                    // line 138
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 138));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 139
                        yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"custom_field[";
                        // line 140
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 140);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 140);
                        yield "\" class=\"form-check-input\"";
                        if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 140), (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 140);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 140);
                        yield "</label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    yield "                          </div>
                          <div id=\"error-custom-field-";
                    // line 144
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 148
                yield "
                    ";
                // line 149
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 149) == "text")) {
                    // line 150
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 151
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 151);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 153
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153)] ?? null) : null)) ? ((($__internal_compile_7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 153)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 153);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                    yield "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                    // line 154
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 158
                yield "
                    ";
                // line 159
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 159) == "textarea")) {
                    // line 160
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 161
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 161);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"custom_field[";
                    // line 163
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 163);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                    yield "\" class=\"form-control\">";
                    yield (((($__internal_compile_8 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null)) ? ((($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 163)));
                    yield "</textarea>
                          <div id=\"error-custom-field-";
                    // line 164
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 168
                yield "
                    ";
                // line 169
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 169) == "file")) {
                    // line 170
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 171
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 171);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 174
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                            <input type=\"text\" name=\"custom_field[";
                    // line 175
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_10 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175)] ?? null) : null)) ? ((($__internal_compile_11 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175)] ?? null) : null)) : (""));
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                    yield "\" class=\"form-control\" readonly/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-";
                    // line 176
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                    yield "\"";
                    if ( !(($__internal_compile_12 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 177
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                    yield "\"";
                    if ( !(($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                          </div>
                          <div id=\"error-custom-field-";
                    // line 179
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 183
                yield "
                    ";
                // line 184
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 184) == "date")) {
                    // line 185
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 186
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 186);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"date\" name=\"custom_field[";
                    // line 188
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_14 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null)) ? ((($__internal_compile_15 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 188)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 188);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                    yield "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                    // line 189
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 193
                yield "
                    ";
                // line 194
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 194) == "time")) {
                    // line 195
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 196
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 196);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"time\" name=\"custom_field[";
                    // line 198
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null)) ? ((($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 198)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 198);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                    yield "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                    // line 199
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 203
                yield "
                    ";
                // line 204
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 204) == "datetime")) {
                    // line 205
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 206
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 206);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"datetime-local\" name=\"custom_field[";
                    // line 208
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_18 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208)] ?? null) : null)) ? ((($__internal_compile_19 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 208)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 208);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                    yield "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                    // line 209
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 213
                yield "
                  ";
            }
            // line 215
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "              </fieldset>
              <fieldset>
                <legend>";
        // line 218
        yield ($context["text_password"] ?? null);
        yield "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-password\" class=\"col-sm-2 col-form-label\">";
        // line 220
        yield ($context["entry_password"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"password\" value=\"";
        // line 222
        yield ($context["password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-confirm\" class=\"col-sm-2 col-form-label\">";
        // line 227
        yield ($context["entry_confirm"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"confirm\" value=\"";
        // line 229
        yield ($context["confirm"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_confirm"] ?? null);
        yield "\" id=\"input-confirm\" class=\"form-control\"/>
                    <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 235
        yield ($context["text_other"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 237
        yield ($context["entry_newsletter"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"newsletter\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"";
        // line 241
        if (($context["newsletter"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 246
        yield ($context["entry_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"status\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 250
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 255
        yield ($context["entry_safe"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"safe\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"safe\" value=\"1\" id=\"input-safe\" class=\"form-check-input\"";
        // line 259
        if (($context["safe"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                    <div class=\"form-text\">";
        // line 261
        yield ($context["help_safe"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 265
        yield ($context["entry_commenter"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"commenter\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"commenter\" value=\"1\" id=\"input-commenter\" class=\"form-check-input\"";
        // line 269
        if (($context["commenter"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                    <div class=\"form-text\">";
        // line 271
        yield ($context["help_commenter"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 275
        yield ($context["customer_id"] ?? null);
        yield "\" id=\"input-customer-id\"/>
            </form>
          </div>
          <div id=\"tab-address\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 280
        yield ($context["text_address"] ?? null);
        yield "</legend>
              <div id=\"address\">";
        // line 281
        yield ($context["address"] ?? null);
        yield "</div>
            </fieldset>
          </div>
          <div id=\"tab-payment\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 286
        yield ($context["text_payment_method"] ?? null);
        yield "</legend>
              <div id=\"payment-method\">";
        // line 287
        yield ($context["payment_method"] ?? null);
        yield "</div>
            </fieldset>
          </div>
          <div id=\"tab-history\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 292
        yield ($context["text_history"] ?? null);
        yield "</legend>
              <div id=\"history\">";
        // line 293
        yield ($context["history"] ?? null);
        yield "</div>
            </fieldset>
            <fieldset>
              <legend>";
        // line 296
        yield ($context["text_history_add"] ?? null);
        yield "</legend>
              <div class=\"row mb-3\">
                <label for=\"input-history\" class=\"col-sm-2 col-form-label\">";
        // line 298
        yield ($context["entry_comment"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 300
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-history\" class=\"form-control\"></textarea>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 304
        yield ($context["button_history_add"] ?? null);
        yield "</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-transaction\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 310
        yield ($context["text_transaction"] ?? null);
        yield "</legend>
              <div id=\"transaction\">";
        // line 311
        yield ($context["transaction"] ?? null);
        yield "</div>
            </fieldset>
            <fieldset>
              <legend>";
        // line 314
        yield ($context["text_transaction_add"] ?? null);
        yield "</legend>
              <div class=\"row mb-3\">
                <label for=\"input-transaction\" class=\"col-sm-2 col-form-label\">";
        // line 316
        yield ($context["entry_description"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
        // line 318
        yield ($context["entry_description"] ?? null);
        yield "\" id=\"input-transaction\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-amount\" class=\"col-sm-2 col-form-label\">";
        // line 322
        yield ($context["entry_amount"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
        // line 324
        yield ($context["entry_amount"] ?? null);
        yield "\" id=\"input-amount\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-transaction\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 328
        yield ($context["button_transaction_add"] ?? null);
        yield "</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-reward\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 334
        yield ($context["text_reward"] ?? null);
        yield "</legend>
              <div id=\"reward\">";
        // line 335
        yield ($context["reward"] ?? null);
        yield "</div>
            </fieldset>
            <fieldset>
              <legend>";
        // line 338
        yield ($context["text_reward_add"] ?? null);
        yield "</legend>
              <div class=\"row mb-3\">
                <label for=\"input-reward\" class=\"col-sm-2 col-form-label\">";
        // line 340
        yield ($context["entry_description"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
        // line 342
        yield ($context["entry_description"] ?? null);
        yield "\" id=\"input-reward\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-points\" class=\"col-sm-2 col-form-label\">";
        // line 346
        yield ($context["entry_points"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"\" placeholder=\"";
        // line 348
        yield ($context["entry_points"] ?? null);
        yield "\" id=\"input-points\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 349
        yield ($context["help_points"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-reward\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 353
        yield ($context["button_reward_add"] ?? null);
        yield "</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-ip\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 359
        yield ($context["text_ip"] ?? null);
        yield "</legend>
              <div id=\"ip\">";
        // line 360
        yield ($context["ip"] ?? null);
        yield "</div>
            </fieldset>
          </div>
          <div id=\"tab-authorize\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 365
        yield ($context["text_authorize"] ?? null);
        yield "</legend>
              <div id=\"authorize\">";
        // line 366
        yield ($context["authorize"] ?? null);
        yield "</div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('action'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-save').button('loading');
        },
        complete: function() {
            \$('#button-save').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$(element).find('.is-invalid').removeClass('is-invalid');
            \$(element).find('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['customer_id']) {
                    \$('#input-customer-id').val(json['customer_id']);

                    \$('#address').load('index.php?route=customer/address&user_token=";
        // line 416
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + json['customer_id']);
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token=";
        // line 428
        yield ($context["user_token"] ?? null);
        yield "&customer_group_id=' + this.value,
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

\$('#address').on('click', '.btn-primary', function(e) {
    e.preventDefault();

    var element = this;

    \$('#modal-address').remove();

    \$.ajax({
        url: \$(element).val(),
        dataType: 'html',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(html) {
            \$('body').append(html);

            var modal = new bootstrap.Modal(document.querySelector('#modal-address'));

            modal.show();
        }
    });
});

\$('#payment-method').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#payment-method').load(this.href);
});

\$('#payment-method').on('click', 'button', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token=";
        // line 511
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#payment-method').on('change', 'input[name=\\'status\\']', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer.disablePayment&user_token=";
        // line 526
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token=";
        // line 547
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#button-history').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addHistory&user_token=";
        // line 566
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'comment=' + encodeURIComponent(\$('#input-history').val()),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=customer/customer.history&user_token=";
        // line 589
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#transaction').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
});

\$('#button-transaction').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addTransaction&user_token=";
        // line 610
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'description=' + encodeURIComponent(\$('#input-transaction').val()) + '&amount=' + \$('#input-amount').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-transaction').button('loading');
        },
        complete: function() {
            \$('#button-transaction').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#transaction').load('index.php?route=customer/customer.transaction&user_token=";
        // line 633
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-transaction').val('');
                \$('#input-amount').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#reward').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#reward').load(this.href);
});

\$('#button-reward').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addReward&user_token=";
        // line 655
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'description=' + encodeURIComponent(\$('#input-reward').val()) + '&points=' + \$('#input-points').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-reward').button('loading');
        },
        complete: function() {
            \$('#button-reward').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#reward').load('index.php?route=customer/customer.reward&user_token=";
        // line 678
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-reward').val('');
                \$('#input-points').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#ip').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#ip').load(this.href);
});

\$('#authorize').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#authorize').load(this.href);
});

\$('#authorize').on('click', '.btn', function(e) {
    e.preventDefault();

    var element = this;

    if (confirm('";
        // line 707
        yield ($context["text_confirm"] ?? null);
        yield "')) {
        \$.ajax({
            url: \$(element).attr('href'),
            dataType: 'json',
            beforeSend: function() {
                \$(element).button('loading');
            },
            complete: function() {
                \$(element).button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('.alert-dismissible').remove();

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#authorize').load('index.php?route=customer/customer.authorize&user_token=";
        // line 733
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
});
//--></script>
";
        // line 743
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
        return "admin/view/template/customer/customer_form.twig";
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
        return array (  1452 => 743,  1439 => 733,  1410 => 707,  1378 => 678,  1352 => 655,  1327 => 633,  1301 => 610,  1277 => 589,  1251 => 566,  1229 => 547,  1205 => 526,  1187 => 511,  1101 => 428,  1086 => 416,  1033 => 366,  1029 => 365,  1021 => 360,  1017 => 359,  1008 => 353,  1001 => 349,  997 => 348,  992 => 346,  985 => 342,  980 => 340,  975 => 338,  969 => 335,  965 => 334,  956 => 328,  949 => 324,  944 => 322,  937 => 318,  932 => 316,  927 => 314,  921 => 311,  917 => 310,  908 => 304,  901 => 300,  896 => 298,  891 => 296,  885 => 293,  881 => 292,  873 => 287,  869 => 286,  861 => 281,  857 => 280,  849 => 275,  842 => 271,  835 => 269,  828 => 265,  821 => 261,  814 => 259,  807 => 255,  797 => 250,  790 => 246,  780 => 241,  773 => 237,  768 => 235,  757 => 229,  752 => 227,  742 => 222,  737 => 220,  732 => 218,  728 => 216,  722 => 215,  718 => 213,  711 => 209,  701 => 208,  694 => 206,  689 => 205,  687 => 204,  684 => 203,  677 => 199,  667 => 198,  660 => 196,  655 => 195,  653 => 194,  650 => 193,  643 => 189,  633 => 188,  626 => 186,  621 => 185,  619 => 184,  616 => 183,  609 => 179,  598 => 177,  588 => 176,  580 => 175,  568 => 174,  562 => 171,  557 => 170,  555 => 169,  552 => 168,  545 => 164,  535 => 163,  528 => 161,  523 => 160,  521 => 159,  518 => 158,  511 => 154,  501 => 153,  494 => 151,  489 => 150,  487 => 149,  484 => 148,  477 => 144,  474 => 143,  453 => 140,  450 => 139,  446 => 138,  442 => 137,  437 => 135,  432 => 134,  430 => 133,  427 => 132,  420 => 128,  417 => 127,  396 => 124,  393 => 123,  389 => 122,  385 => 121,  380 => 119,  375 => 118,  373 => 117,  370 => 116,  363 => 112,  360 => 111,  345 => 109,  341 => 108,  337 => 107,  331 => 106,  324 => 104,  319 => 103,  317 => 102,  314 => 101,  312 => 100,  309 => 99,  305 => 98,  296 => 94,  291 => 92,  285 => 91,  276 => 87,  271 => 85,  261 => 80,  256 => 78,  246 => 73,  241 => 71,  235 => 67,  220 => 65,  216 => 64,  210 => 61,  203 => 56,  188 => 54,  184 => 53,  178 => 50,  171 => 45,  156 => 43,  152 => 42,  146 => 39,  141 => 37,  136 => 35,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  95 => 21,  88 => 16,  77 => 14,  73 => 13,  68 => 11,  62 => 10,  57 => 9,  49 => 7,  47 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        {% if orders %}
          <a href=\"{{ orders }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_order }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-receipt\"></i></a>
        {% endif %}
        <button type=\"submit\" id=\"button-save\" form=\"form-customer\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
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
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-address\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_address }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-payment\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_payment_method }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_history }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-transaction\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_transaction }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_reward }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-ip\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_ip }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-authorize\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_authorize }}</a></li>
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-general\" class=\"tab-pane active\">
            <form id=\"form-customer\" action=\"{{ save }}\" method=\"post\">
              <fieldset>
                <legend>{{ text_customer }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-store\" class=\"col-sm-2 col-form-label\">{{ entry_store }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                      {% for store in stores %}
                        <option value=\"{{ store.store_id }}\"{% if store.store_id == store_id %} selected{% endif %}>{{ store.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"input-language\" class=\"col-sm-2 col-form-label\">{{ entry_language }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"language_id\" id=\"input-language\" class=\"form-select\">
                      {% for language in languages %}
                        <option value=\"{{ language.language_id }}\"{% if language.language_id == language_id %} selected{% endif %}>{{ language.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">{{ entry_customer_group }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                      {% for customer_group in customer_groups %}
                        <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">{{ entry_firstname }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
                    <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">{{ entry_lastname }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
                    <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-email\" class=\"col-sm-2 col-form-label\">{{ entry_email }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
                    <div id=\"error-email\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3{% if config_telephone_required %} required{% endif %}\">
                  <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">{{ entry_telephone }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
                    <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                {% for custom_field in custom_fields %}

                  {% if custom_field.location == 'account' %}

                    {% if custom_field.type == 'select' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                            <option value=\"\">{{ text_select }}</option>
                            {% for custom_field_value in custom_field.custom_field_value %}
                              <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                            {% endfor %}
                          </select>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'radio' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for custom_field_value in custom_field.custom_field_value %}
                              <div class=\"form-check\">
                                <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'checkbox' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for custom_field_value in custom_field.custom_field_value %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'text' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'textarea' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'file' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                            <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" readonly/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\"{% if not account_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\"{% if not account_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                          </div>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'date' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'time' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'datetime' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                  {% endif %}
                {% endfor %}
              </fieldset>
              <fieldset>
                <legend>{{ text_password }}</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-password\" class=\"col-sm-2 col-form-label\">{{ entry_password }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-confirm\" class=\"col-sm-2 col-form-label\">{{ entry_confirm }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\" placeholder=\"{{ entry_confirm }}\" id=\"input-confirm\" class=\"form-control\"/>
                    <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_other }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_newsletter }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"newsletter\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"{% if newsletter %} checked{% endif %}/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"status\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_safe }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"safe\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"safe\" value=\"1\" id=\"input-safe\" class=\"form-check-input\"{% if safe %} checked{% endif %}/>
                    </div>
                    <div class=\"form-text\">{{ help_safe }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_commenter }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"commenter\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"commenter\" value=\"1\" id=\"input-commenter\" class=\"form-check-input\"{% if commenter %} checked{% endif %}/>
                    </div>
                    <div class=\"form-text\">{{ help_commenter }}</div>
                  </div>
                </div>
              </fieldset>
              <input type=\"hidden\" name=\"customer_id\" value=\"{{ customer_id }}\" id=\"input-customer-id\"/>
            </form>
          </div>
          <div id=\"tab-address\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_address }}</legend>
              <div id=\"address\">{{ address }}</div>
            </fieldset>
          </div>
          <div id=\"tab-payment\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_payment_method }}</legend>
              <div id=\"payment-method\">{{ payment_method }}</div>
            </fieldset>
          </div>
          <div id=\"tab-history\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_history }}</legend>
              <div id=\"history\">{{ history }}</div>
            </fieldset>
            <fieldset>
              <legend>{{ text_history_add }}</legend>
              <div class=\"row mb-3\">
                <label for=\"input-history\" class=\"col-sm-2 col-form-label\">{{ entry_comment }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"comment\" rows=\"8\" placeholder=\"{{ entry_comment }}\" id=\"input-history\" class=\"form-control\"></textarea>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> {{ button_history_add }}</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-transaction\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_transaction }}</legend>
              <div id=\"transaction\">{{ transaction }}</div>
            </fieldset>
            <fieldset>
              <legend>{{ text_transaction_add }}</legend>
              <div class=\"row mb-3\">
                <label for=\"input-transaction\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"description\" value=\"\" placeholder=\"{{ entry_description }}\" id=\"input-transaction\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-amount\" class=\"col-sm-2 col-form-label\">{{ entry_amount }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"{{ entry_amount }}\" id=\"input-amount\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-transaction\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> {{ button_transaction_add }}</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-reward\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_reward }}</legend>
              <div id=\"reward\">{{ reward }}</div>
            </fieldset>
            <fieldset>
              <legend>{{ text_reward_add }}</legend>
              <div class=\"row mb-3\">
                <label for=\"input-reward\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"description\" value=\"\" placeholder=\"{{ entry_description }}\" id=\"input-reward\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-points\" class=\"col-sm-2 col-form-label\">{{ entry_points }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"\" placeholder=\"{{ entry_points }}\" id=\"input-points\" class=\"form-control\"/>
                  <div class=\"form-text\">{{ help_points }}</div>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-reward\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> {{ button_reward_add }}</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-ip\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_ip }}</legend>
              <div id=\"ip\">{{ ip }}</div>
            </fieldset>
          </div>
          <div id=\"tab-authorize\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_authorize }}</legend>
              <div id=\"authorize\">{{ authorize }}</div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('action'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-save').button('loading');
        },
        complete: function() {
            \$('#button-save').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$(element).find('.is-invalid').removeClass('is-invalid');
            \$(element).find('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['customer_id']) {
                    \$('#input-customer-id').val(json['customer_id']);

                    \$('#address').load('index.php?route=customer/address&user_token={{ user_token }}&customer_id=' + json['customer_id']);
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token={{ user_token }}&customer_group_id=' + this.value,
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

\$('#address').on('click', '.btn-primary', function(e) {
    e.preventDefault();

    var element = this;

    \$('#modal-address').remove();

    \$.ajax({
        url: \$(element).val(),
        dataType: 'html',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(html) {
            \$('body').append(html);

            var modal = new bootstrap.Modal(document.querySelector('#modal-address'));

            modal.show();
        }
    });
});

\$('#payment-method').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#payment-method').load(this.href);
});

\$('#payment-method').on('click', 'button', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#payment-method').on('change', 'input[name=\\'status\\']', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer.disablePayment&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#button-history').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addHistory&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'comment=' + encodeURIComponent(\$('#input-history').val()),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=customer/customer.history&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#transaction').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
});

\$('#button-transaction').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addTransaction&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'description=' + encodeURIComponent(\$('#input-transaction').val()) + '&amount=' + \$('#input-amount').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-transaction').button('loading');
        },
        complete: function() {
            \$('#button-transaction').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#transaction').load('index.php?route=customer/customer.transaction&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());

                \$('#input-transaction').val('');
                \$('#input-amount').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#reward').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#reward').load(this.href);
});

\$('#button-reward').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addReward&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'description=' + encodeURIComponent(\$('#input-reward').val()) + '&points=' + \$('#input-points').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-reward').button('loading');
        },
        complete: function() {
            \$('#button-reward').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#reward').load('index.php?route=customer/customer.reward&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());

                \$('#input-reward').val('');
                \$('#input-points').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#ip').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#ip').load(this.href);
});

\$('#authorize').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#authorize').load(this.href);
});

\$('#authorize').on('click', '.btn', function(e) {
    e.preventDefault();

    var element = this;

    if (confirm('{{ text_confirm }}')) {
        \$.ajax({
            url: \$(element).attr('href'),
            dataType: 'json',
            beforeSend: function() {
                \$(element).button('loading');
            },
            complete: function() {
                \$(element).button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('.alert-dismissible').remove();

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#authorize').load('index.php?route=customer/customer.authorize&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
});
//--></script>
{{ footer }}
", "admin/view/template/customer/customer_form.twig", "/var/www/html/opencart/upload/admin/view/template/customer/customer_form.twig");
    }
}
