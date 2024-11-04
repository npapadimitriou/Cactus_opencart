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

/* catalog/view/template/checkout/register.twig */
class __TwigTemplate_2ca7eb1e7a5d527cf57648f9e69a94ecd4d958ddab66b0fa730bec6bb1a3ac80 extends Template
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
        yield "<form id=\"form-register\">
  <p>";
        // line 2
        yield ($context["text_login"] ?? null);
        yield "</p>
  <fieldset>
    <legend>";
        // line 4
        yield ($context["heading_title"] ?? null);
        yield "</legend>
    <div class=\"row\">
      ";
        // line 6
        if (($context["config_checkout_guest"] ?? null)) {
            // line 7
            yield "        <div class=\"col mb-3 required\">
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"1\" id=\"input-register\" class=\"form-check-input\"";
            // line 9
            if (($context["account"] ?? null)) {
                yield " checked";
            }
            yield "/> <label for=\"input-register\" class=\"form-check-label\">";
            yield ($context["text_register"] ?? null);
            yield "</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"0\" id=\"input-guest\" class=\"form-check-input\"";
            // line 12
            if ( !($context["account"] ?? null)) {
                yield " checked";
            }
            yield "/> <label for=\"input-guest\" class=\"form-check-label\">";
            yield ($context["text_guest"] ?? null);
            yield "</label>
          </div>
        </div>
      ";
        }
        // line 16
        yield "      <div class=\"col mb-3";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["customer_groups"] ?? null)) <= 1)) {
            yield " d-none";
        }
        yield "\">
        <label class=\"form-label\">";
        // line 17
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
        <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 20
            yield "            <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 20);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 20) == ($context["customer_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 20);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "        </select>
      </div>
    </div>
    <div class=\"row row-cols-1 row-cols-md-2\">
      <div class=\"col mb-3 required\">
        <label for=\"input-firstname\" class=\"form-label\">";
        // line 27
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"firstname\" value=\"";
        // line 28
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
        <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-lastname\" class=\"form-label\">";
        // line 32
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"lastname\" value=\"";
        // line 33
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
        <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-email\" class=\"form-label\">";
        // line 37
        yield ($context["entry_email"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"email\" value=\"";
        // line 38
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
        <div id=\"error-email\" class=\"invalid-feedback\"></div>
      </div>
      ";
        // line 41
        if (($context["config_telephone_display"] ?? null)) {
            // line 42
            yield "        <div class=\"col mb-3";
            if (($context["config_telephone_required"] ?? null)) {
                yield " required";
            }
            yield "\">
          <label for=\"input-telephone\" class=\"form-label\">";
            // line 43
            yield ($context["entry_telephone"] ?? null);
            yield "</label>
          <input type=\"text\" name=\"telephone\" value=\"";
            // line 44
            yield ($context["telephone"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_telephone"] ?? null);
            yield "\" id=\"input-telephone\" class=\"form-control\"/>
          <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
        </div>
      ";
        }
        // line 48
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 49
            yield "
        ";
            // line 50
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 50) == "account")) {
                // line 51
                yield "
          ";
                // line 52
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 52) == "select")) {
                    // line 53
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 53);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 54
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 54);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 54);
                    yield "</label> <select name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 54);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 54);
                    yield "]\" id=\"input-customer-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 54);
                    yield "\" class=\"form-select\">
                <option value=\"\">";
                    // line 55
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                ";
                    // line 56
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 56));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 57
                        yield "                  <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 57);
                        yield "\"";
                        if (((($__internal_compile_0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 57)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 57) == (($__internal_compile_1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 57)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 57);
                        yield "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    yield "              </select>
              <div id=\"error-custom-field-";
                    // line 60
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 60);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 63
                yield "
          ";
                // line 64
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 64) == "radio")) {
                    // line 65
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 65);
                    yield "\">
              <label class=\"form-label\">";
                    // line 66
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 66);
                    yield "</label>
              <div id=\"input-custom-field-";
                    // line 67
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 67);
                    yield "\">
                ";
                    // line 68
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 68));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 69
                        yield "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                        // line 70
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 70);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70);
                        yield "\" class=\"form-check-input\"";
                        if (((($__internal_compile_2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70) == (($__internal_compile_3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/>
                    <label for=\"input-custom-value-";
                        // line 71
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 71);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 71);
                        yield "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    yield "              </div>
              <div id=\"error-custom-field-";
                    // line 75
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 75);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 78
                yield "
          ";
                // line 79
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 79) == "checkbox")) {
                    // line 80
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 80);
                    yield "\">
              <label class=\"form-label\">";
                    // line 81
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 81);
                    yield "</label>
              <div id=\"input-custom-field-";
                    // line 82
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                    yield "\">
                ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 83));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 84
                        yield "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 85
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 85);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85);
                        yield "\" class=\"form-check-input\"";
                        if (((($__internal_compile_4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85), (($__internal_compile_5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/>
                    <label for=\"input-custom-value-";
                        // line 86
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 86);
                        yield "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    yield "              </div>
              <div id=\"error-custom-field-";
                    // line 90
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 93
                yield "
          ";
                // line 94
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 94) == "text")) {
                    // line 95
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 96
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 96);
                    yield "</label>
              <input type=\"text\" name=\"custom_field[";
                    // line 97
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 97);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                    yield "]\" value=\"";
                    if ((($__internal_compile_6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97)] ?? null) : null)) {
                        yield (($__internal_compile_7 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 97);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 97);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-custom-field-";
                    // line 98
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 101
                yield "
          ";
                // line 102
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 102) == "textarea")) {
                    // line 103
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 104
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 104);
                    yield "</label> <textarea name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 104);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 104);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    yield "\" class=\"form-control\">";
                    if ((($__internal_compile_8 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104)] ?? null) : null)) {
                        yield (($__internal_compile_9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 104);
                    }
                    yield "</textarea>
              <div id=\"error-custom-field-";
                    // line 105
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 108
                yield "
          ";
                // line 109
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 109) == "file")) {
                    // line 110
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 111
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 111);
                    yield "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 113
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                <input type=\"hidden\" name=\"custom_field[";
                    // line 114
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 114);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                    yield "]\" value=\"";
                    if ((($__internal_compile_10 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114)] ?? null) : null)) {
                        yield (($__internal_compile_11 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114)] ?? null) : null);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                    yield "\"/>
              </div>
              <div id=\"error-custom-field-";
                    // line 116
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 119
                yield "
          ";
                // line 120
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 120) == "date")) {
                    // line 121
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 122
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 122);
                    yield "</label>
              <input type=\"date\" name=\"custom_field[";
                    // line 123
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 123);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                    yield "]\" value=\"";
                    if ((($__internal_compile_12 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null)) {
                        yield (($__internal_compile_13 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 123);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-custom-field-";
                    // line 124
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 127
                yield "
          ";
                // line 128
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 128) == "time")) {
                    // line 129
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 130
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 130);
                    yield "</label>
              <input type=\"time\" name=\"custom_field[";
                    // line 131
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 131);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    yield "]\" value=\"";
                    if ((($__internal_compile_14 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null)) {
                        yield (($__internal_compile_15 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 131);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 131);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-custom-field-";
                    // line 132
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 135
                yield "
          ";
                // line 136
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 136) == "datetime")) {
                    // line 137
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 138
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 138);
                    yield "</label>
              <input type=\"datetime-local\" name=\"custom_field[";
                    // line 139
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 139);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                    yield "]\" value=\"";
                    if ((($__internal_compile_16 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139)] ?? null) : null)) {
                        yield (($__internal_compile_17 = ($context["account_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 139);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 139);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-custom-field-";
                    // line 140
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 143
                yield "
        ";
            }
            // line 145
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "    </div>
  </fieldset>
  ";
        // line 148
        if (($context["config_checkout_payment_address"] ?? null)) {
            // line 149
            yield "    <fieldset>
      <legend>";
            // line 150
            yield ($context["text_payment_address"] ?? null);
            yield "</legend>
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3\">
          <label for=\"input-payment-company\" class=\"form-label\">";
            // line 153
            yield ($context["entry_company"] ?? null);
            yield "</label> <input type=\"text\" name=\"payment_company\" value=\"";
            yield ($context["payment_company"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_company"] ?? null);
            yield "\" id=\"input-payment-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-address-1\" class=\"form-label\">";
            // line 156
            yield ($context["entry_address_1"] ?? null);
            yield "</label> <input type=\"text\" name=\"payment_address_1\" value=\"";
            yield ($context["payment_address_1"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_address_1"] ?? null);
            yield "\" id=\"input-payment-address-1\" class=\"form-control\"/>
          <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-2\" class=\"form-label\">";
            // line 160
            yield ($context["entry_address_2"] ?? null);
            yield "</label> <input type=\"text\" name=\"payment_address_2\" value=\"";
            yield ($context["payment_address_2"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_address_2"] ?? null);
            yield "\" id=\"input-payment-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-city\" class=\"form-label\">";
            // line 163
            yield ($context["entry_city"] ?? null);
            yield "</label> <input type=\"text\" name=\"payment_city\" value=\"";
            yield ($context["payment_city"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_city"] ?? null);
            yield "\" id=\"input-payment-city\" class=\"form-control\"/>
          <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-postcode\" class=\"form-label\">";
            // line 167
            yield ($context["entry_postcode"] ?? null);
            yield "</label> <input type=\"text\" name=\"payment_postcode\" value=\"";
            yield ($context["payment_postcode"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_postcode"] ?? null);
            yield "\" id=\"input-payment-postcode\" class=\"form-control\"/>
          <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-country\" class=\"form-label\">";
            // line 171
            yield ($context["entry_country"] ?? null);
            yield "</label> <select name=\"payment_country_id\" id=\"input-payment-country\" class=\"form-select\">
            <option value=\"\">";
            // line 172
            yield ($context["text_select"] ?? null);
            yield "</option>
            ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 174
                yield "              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 174);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 174) == ($context["payment_country_id"] ?? null))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 174);
                yield "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            yield "          </select>
          <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-zone\" class=\"form-label\">";
            // line 180
            yield ($context["entry_zone"] ?? null);
            yield "</label>
          <select name=\"payment_zone_id\" id=\"input-payment-zone\" class=\"form-select\" data-oc-value=\"";
            // line 181
            yield ($context["payment_zone_id"] ?? null);
            yield "\"></select>
          <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
        </div>
        ";
            // line 184
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 185
                yield "          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 185) == "address")) {
                    // line 186
                    yield "
            ";
                    // line 187
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 187) == "select")) {
                        // line 188
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 188)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 189
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 189);
                        yield "</label> <select name=\"payment_custom_field[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 189);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                        yield "]\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                        yield "\" class=\"form-select\">
                  <option value=\"\">";
                        // line 190
                        yield ($context["text_select"] ?? null);
                        yield "</option>
                  ";
                        // line 191
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 191));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 192
                            yield "                    <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 192);
                            yield "\"";
                            if (((($__internal_compile_18 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 192) == (($__internal_compile_19 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192)] ?? null) : null)))) {
                                yield " selected";
                            }
                            yield ">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 192);
                            yield "</option>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 194
                        yield "                </select>
                <div id=\"error-payment-custom-field-";
                        // line 195
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 198
                    yield "
            ";
                    // line 199
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 199) == "radio")) {
                        // line 200
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 200)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200);
                        yield "\">
                <label class=\"form-label\">";
                        // line 201
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 201);
                        yield "</label>
                <div id=\"input-payment-custom-field-";
                        // line 202
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202);
                        yield "\">
                  ";
                        // line 203
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 203));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 204
                            yield "                    <div class=\"form-check\">
                      <input type=\"radio\" name=\"payment_custom_field[";
                            // line 205
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 205);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205);
                            yield "]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 205);
                            yield "\" id=\"input-payment-custom-value-";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 205);
                            yield "\" class=\"form-check-input\"";
                            if (((($__internal_compile_20 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 205) == (($__internal_compile_21 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205)] ?? null) : null)))) {
                                yield " checked";
                            }
                            yield "/> <label for=\"input-payment-custom-value-";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 205);
                            yield "\" class=\"form-check-label\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 205);
                            yield "</label>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 208
                        yield "                </div>
                <div id=\"error-payment-custom-field-";
                        // line 209
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 212
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 212) == "checkbox")) {
                        // line 213
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 213)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213);
                        yield "\">
                <label class=\"form-label\">";
                        // line 214
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 214);
                        yield "</label>
                <div id=\"input-payment-custom-field-";
                        // line 215
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 215);
                        yield "\">
                  ";
                        // line 216
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 216));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 217
                            yield "                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"payment_custom_field[";
                            // line 218
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 218);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218);
                            yield "][]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 218);
                            yield "\" id=\"input-payment-custom-value-";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 218);
                            yield "\" class=\"form-check-input\"";
                            if (((($__internal_compile_22 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 218), (($__internal_compile_23 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218)] ?? null) : null)))) {
                                yield " checked";
                            }
                            yield "/> <label for=\"input-payment-custom-value-";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 218);
                            yield "\" class=\"form-check-label\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 218);
                            yield "</label>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 221
                        yield "                </div>
                <div id=\"error-payment-custom-field-";
                        // line 222
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 225
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 225) == "text")) {
                        // line 226
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 226)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 227
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 227);
                        yield "</label>
                <input type=\"text\" name=\"payment_custom_field[";
                        // line 228
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 228);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228);
                        yield "]\" value=\"";
                        if ((($__internal_compile_24 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null)) {
                            yield (($__internal_compile_25 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null);
                        } else {
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 228);
                        }
                        yield "\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 228);
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228);
                        yield "\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-";
                        // line 229
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 229);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 232
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 232) == "textarea")) {
                        // line 233
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 233)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 234
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 234);
                        yield "</label> <textarea name=\"payment_custom_field[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 234);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                        yield "]\" rows=\"5\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 234);
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                        yield "\" class=\"form-control\">";
                        if ((($__internal_compile_26 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234)] ?? null) : null)) {
                            yield (($__internal_compile_27 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234)] ?? null) : null);
                        } else {
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 234);
                        }
                        yield "</textarea>
                <div id=\"error-payment-custom-field-";
                        // line 235
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 235);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 238
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 238) == "file")) {
                        // line 239
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 239)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239);
                        yield "\">
                <label class=\"form-label\">";
                        // line 240
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 240);
                        yield "</label>
                <div>
                  <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                        // line 242
                        yield ($context["upload"] ?? null);
                        yield "\" data-oc-size-max=\"";
                        yield ($context["config_file_max_size"] ?? null);
                        yield "\" data-oc-size-error=\"";
                        yield ($context["error_upload_size"] ?? null);
                        yield "\" data-oc-target=\"#input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242);
                        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                        yield ($context["button_upload"] ?? null);
                        yield "</button>
                  <input type=\"hidden\" name=\"payment_custom_field[";
                        // line 243
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 243);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                        yield "]\" value=\"";
                        if ((($__internal_compile_28 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243)] ?? null) : null)) {
                            yield (($__internal_compile_29 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243)] ?? null) : null);
                        }
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                        yield "\"/>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 245
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 248
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 248) == "date")) {
                        // line 249
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 249)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 249);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 250
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 250);
                        yield "</label>
                <input type=\"date\" name=\"payment_custom_field[";
                        // line 251
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 251);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251);
                        yield "]\" value=\"";
                        if ((($__internal_compile_30 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251)] ?? null) : null)) {
                            yield (($__internal_compile_31 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251)] ?? null) : null);
                        } else {
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 251);
                        }
                        yield "\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 251);
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251);
                        yield "\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-";
                        // line 252
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 255
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 255) == "time")) {
                        // line 256
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 256)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 257
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 257);
                        yield "</label>
                <input type=\"time\" name=\"payment_custom_field[";
                        // line 258
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 258);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 258);
                        yield "]\" value=\"";
                        if ((($__internal_compile_32 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 258)] ?? null) : null)) {
                            yield (($__internal_compile_33 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 258)] ?? null) : null);
                        } else {
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 258);
                        }
                        yield "\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 258);
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 258);
                        yield "\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-";
                        // line 259
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 259);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 262
                    yield "
            ";
                    // line 263
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 263) == "datetime")) {
                        // line 264
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 264)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 264);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 265
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 265);
                        yield "</label>
                <input type=\"datetime-local\" name=\"payment_custom_field[";
                        // line 266
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 266);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266);
                        yield "]\" value=\"";
                        if ((($__internal_compile_34 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266)] ?? null) : null)) {
                            yield (($__internal_compile_35 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266)] ?? null) : null);
                        } else {
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 266);
                        }
                        yield "\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 266);
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266);
                        yield "\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-";
                        // line 267
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 267);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 270
                    yield "
          ";
                }
                // line 272
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            yield "
        ";
            // line 274
            if (($context["shipping_required"] ?? null)) {
                // line 275
                yield "          <div class=\"col mb-3\">
            <div class=\"form-check\">
              <input type=\"checkbox\" name=\"address_match\" value=\"1\" id=\"input-address-match\" class=\"form-check-input\" checked/> <label for=\"input-address-match\" class=\"form-check-label\">";
                // line 277
                yield ($context["entry_match"] ?? null);
                yield "</label>
            </div>
          </div>
        ";
            }
            // line 281
            yield "
      </div>
    </fieldset>
  ";
        }
        // line 285
        yield "  <fieldset id=\"shipping-address\" style=\"display: ";
        if ( !($context["config_checkout_payment_address"] ?? null)) {
            yield "block";
        } else {
            yield "none";
        }
        yield ";\">
    <legend>";
        // line 286
        yield ($context["text_shipping_address"] ?? null);
        yield "</legend>
    <div class=\"row row-cols-1 row-cols-md-2\">
      ";
        // line 288
        if (($context["config_checkout_payment_address"] ?? null)) {
            // line 289
            yield "        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-firstname\" class=\"form-label\">";
            // line 290
            yield ($context["entry_firstname"] ?? null);
            yield "</label>
          <input type=\"text\" name=\"shipping_firstname\" value=\"";
            // line 291
            yield ($context["shipping_firstname"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_firstname"] ?? null);
            yield "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
          <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-lastname\" class=\"form-label\">";
            // line 295
            yield ($context["entry_lastname"] ?? null);
            yield "</label>
          <input type=\"text\" name=\"shipping_lastname\" value=\"";
            // line 296
            yield ($context["shipping_lastname"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_lastname"] ?? null);
            yield "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
          <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
        </div>
      ";
        }
        // line 300
        yield "      <div class=\"col mb-3\">
        <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 301
        yield ($context["entry_company"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"shipping_company\" value=\"";
        // line 302
        yield ($context["shipping_company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-shipping-company\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 305
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"shipping_address_1\" value=\"";
        // line 306
        yield ($context["shipping_address_1"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
        <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 310
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"shipping_address_2\" value=\"";
        // line 311
        yield ($context["shipping_address_2"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 314
        yield ($context["entry_city"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"shipping_city\" value=\"";
        // line 315
        yield ($context["shipping_city"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-shipping-city\" class=\"form-control\"/>
        <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 319
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"shipping_postcode\" value=\"";
        // line 320
        yield ($context["shipping_postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
        <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 324
        yield ($context["entry_country"] ?? null);
        yield "</label>
        <select name=\"shipping_country_id\" id=\"input-shipping-country\" class=\"form-select\">
          <option value=\"\">";
        // line 326
        yield ($context["text_select"] ?? null);
        yield "</option>
          ";
        // line 327
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 328
            yield "            <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 328);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 328) == ($context["shipping_country_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 328);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        yield "        </select>
        <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 334
        yield ($context["entry_zone"] ?? null);
        yield "</label>
        <select name=\"shipping_zone_id\" id=\"input-shipping-zone\" class=\"form-select\" data-oc-value=\"";
        // line 335
        yield ($context["shipping_zone_id"] ?? null);
        yield "\"></select>
        <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
      </div>
      ";
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 339
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 339) == "address")) {
                // line 340
                yield "
          ";
                // line 341
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 341) == "select")) {
                    // line 342
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 342)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 342);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 343
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 343);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 343);
                    yield "</label>
              <select name=\"shipping_custom_field[";
                    // line 344
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 344);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 344);
                    yield "]\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 344);
                    yield "\" class=\"form-select\">
                <option value=\"\">";
                    // line 345
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                ";
                    // line 346
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 346));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 347
                        yield "                  <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 347);
                        yield "\"";
                        if (((($__internal_compile_36 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 347)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 347) == (($__internal_compile_37 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 347)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 347);
                        yield "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 349
                    yield "              </select>
              <div id=\"error-shipping-custom-field-";
                    // line 350
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 350);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 353
                yield "
          ";
                // line 354
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 354) == "radio")) {
                    // line 355
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 355)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 355);
                    yield "\">
              <label class=\"form-label\">";
                    // line 356
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 356);
                    yield "</label>
              <div id=\"input-shipping-custom-field-";
                    // line 357
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 357);
                    yield "\">
                ";
                    // line 358
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 358));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 359
                        yield "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"shipping_custom_field[";
                        // line 360
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 360);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 360);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 360);
                        yield "\" id=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 360);
                        yield "\" class=\"form-check-input\"";
                        if (((($__internal_compile_38 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 360)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 360), (($__internal_compile_39 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 360)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/>
                    <label for=\"input-shipping-custom-value-";
                        // line 361
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 361);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 361);
                        yield "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 364
                    yield "              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 365
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 365);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 368
                yield "
          ";
                // line 369
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 369) == "checkbox")) {
                    // line 370
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 370)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 370);
                    yield "\">
              <label class=\"form-label\">";
                    // line 371
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 371);
                    yield "</label>
              <div id=\"input-shipping-custom-field-";
                    // line 372
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 372);
                    yield "\">
                ";
                    // line 373
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 373));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 374
                        yield "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"shipping_custom_field[";
                        // line 375
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 375);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 375);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 375);
                        yield "\" id=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 375);
                        yield "\" class=\"form-check-input\"";
                        if (((($__internal_compile_40 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 375)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 375), (($__internal_compile_41 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 375)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/>
                    <label for=\"input-shipping-custom-value-";
                        // line 376
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 376);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 376);
                        yield "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 379
                    yield "              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 380
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 380);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 383
                yield "
          ";
                // line 384
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 384) == "text")) {
                    // line 385
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 385)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 385);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 386
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 386);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 386);
                    yield "</label>
              <input type=\"text\" name=\"shipping_custom_field[";
                    // line 387
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 387);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 387);
                    yield "]\" value=\"";
                    if ((($__internal_compile_42 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 387)] ?? null) : null)) {
                        yield (($__internal_compile_43 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 387)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 387);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 387);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 387);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                    // line 388
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 388);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 391
                yield "
          ";
                // line 392
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 392) == "textarea")) {
                    // line 393
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 393)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 393);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 394
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 394);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 394);
                    yield "</label>
              <textarea name=\"shipping_custom_field[";
                    // line 395
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 395);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 395);
                    yield "]\" rows=\"5\" placeholder=\"";
                    if ((($__internal_compile_44 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 395)] ?? null) : null)) {
                        yield (($__internal_compile_45 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 395)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 395);
                    }
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 395);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 395);
                    yield "</textarea>
              <div id=\"error-shipping-custom-field-";
                    // line 396
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 396);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 399
                yield "          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 399) == "file")) {
                    // line 400
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 400)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 400);
                    yield "\">
              <label class=\"form-label\">";
                    // line 401
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 401);
                    yield "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 403
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" data-oc-target=\"#input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 403);
                    yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                <input type=\"hidden\" name=\"shipping_custom_field[";
                    // line 404
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 404);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 404);
                    yield "]\" value=\"";
                    if ((($__internal_compile_46 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 404)] ?? null) : null)) {
                        yield (($__internal_compile_47 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 404)] ?? null) : null);
                    }
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 404);
                    yield "\"/>
                <div id=\"error-shipping-custom-field-";
                    // line 405
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 405);
                    yield "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
                }
                // line 409
                yield "
          ";
                // line 410
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 410) == "date")) {
                    // line 411
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 411)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 411);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 412
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 412);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 412);
                    yield "</label>
              <input type=\"date\" name=\"shipping_custom_field[";
                    // line 413
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 413);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 413);
                    yield "]\" value=\"";
                    if ((($__internal_compile_48 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 413)] ?? null) : null)) {
                        yield (($__internal_compile_49 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 413)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 413);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 413);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 413);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                    // line 414
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 414);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 417
                yield "
          ";
                // line 418
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 418) == "time")) {
                    // line 419
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 419)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 419);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 420
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 420);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 420);
                    yield "</label>
              <input type=\"time\" name=\"shipping_custom_field[";
                    // line 421
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 421);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 421);
                    yield "]\" value=\"";
                    if ((($__internal_compile_50 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 421)] ?? null) : null)) {
                        yield (($__internal_compile_51 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 421)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 421);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 421);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 421);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                    // line 422
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 422);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 425
                yield "
          ";
                // line 426
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 426) == "datetime")) {
                    // line 427
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 427)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 427);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 428
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 428);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 428);
                    yield "</label>
              <input type=\"datetime-local\" name=\"shipping_custom_field[";
                    // line 429
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 429);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429);
                    yield "]\" value=\"";
                    if ((($__internal_compile_52 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429)] ?? null) : null)) {
                        yield (($__internal_compile_53 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 429);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 429);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                    // line 430
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 430);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 433
                yield "        ";
            }
            // line 434
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 435
        yield "    </div>
  </fieldset>
  <div id class=\"row row-cols-1 row-cols-md-2\">
    <div id=\"password\" class=\"col mb-3 required\">
      <fieldset>
        <legend>";
        // line 440
        yield ($context["text_your_password"] ?? null);
        yield "</legend>
        <div class=\"row\">
          <div class=\"col mb-3 required\">
            <label for=\"input-password\" class=\"form-label\">";
        // line 443
        yield ($context["entry_password"] ?? null);
        yield "</label> <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\"/>
            <div id=\"error-password\" class=\"invalid-feedback\"></div>
          </div>
        </div>
      </fieldset>
    </div>
    <div class=\"col mb-3 required\">";
        // line 449
        yield ($context["captcha"] ?? null);
        yield "</div>
  </div>
  <div id class=\"row\">
    <div class=\"col\">
      <div class=\"form-check form-switch form-switch-lg\">
        <label for=\"input-newsletter\" class=\"form-check-label\">";
        // line 454
        yield ($context["entry_newsletter"] ?? null);
        yield "</label>
        <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"/>
      </div>
      ";
        // line 457
        if (($context["text_agree"] ?? null)) {
            // line 458
            yield "        <div id=\"register-agree\" class=\"form-check form-switch form-switch-lg\">
          <label class=\"form-check-label\">";
            // line 459
            yield ($context["text_agree"] ?? null);
            yield "</label>
          <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-register-agree\" class=\"form-check-input\"";
            // line 460
            if (($context["agree"] ?? null)) {
                yield " checked";
            }
            yield "/>
        </div>
      ";
        }
        // line 463
        yield "      <button type=\"submit\" id=\"button-register\" class=\"btn btn-primary mt-2\">";
        yield ($context["button_continue"] ?? null);
        yield "</button>
    </div>
  </div>
</form>
<script type=\"text/javascript\"><!--
// Account
\$('input[name=\\'account\\']').on('click', function() {
    if (\$(this).val() == 1) {
        \$('#password').removeClass('d-none');
    } else {
        // If guest hide password field
        \$('#password').addClass('d-none');
    }

    if (\$(this).val() == 1) {
        \$('#register-agree').removeClass('d-none');
    } else {
        // If guest hide register agree field
        \$('#register-agree').addClass('d-none');
    }
});

\$('input[name=\\'account\\']:checked').trigger('click');

// Customer Group
\$('#input-customer-group').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=account/custom_field&language=";
        // line 493
        yield ($context["language"] ?? null);
        yield "&customer_group_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
            },
            success: function(json) {
                \$('.custom-field').addClass('d-none');
                \$('.custom-field').removeClass('required');

                for (i = 0; i < json.length; i++) {
                    custom_field = json[i];

                    \$('.custom-field-' + custom_field['custom_field_id']).removeClass('d-none');

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
});

\$('#input-customer-group').trigger('change');

\$('#input-address-match').on('change', function() {
    if (\$(this).prop('checked')) {
        \$('#shipping-address').hide();
    } else {
        \$('#shipping-address').show();
    }
});

\$('#form-register').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/register.save&language=";
        // line 539
        yield ($context["language"] ?? null);
        yield "',
            type: 'post',
            dataType: 'json',
            data: \$('#form-register').serialize(),
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-register').button('loading');
            },
            complete: function() {
                \$('#button-register').button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('#form-register').find('.is-invalid').removeClass('is-invalid');
                \$('#form-register').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (key in json['error']) {
                        \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                        \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    if (\$('#input-register').prop('checked')) {
                        \$('input[name=\\'account\\']').prop('disabled', true);
                        \$('#input-customer-group').prop('disabled', true);
                        \$('#input-password').prop('disabled', true);
                        \$('#input-captcha').prop('disabled', true);
                        \$('#input-register-agree').prop('disabled', true);
                    }

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 585
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

\$('select[name\$=\\'_country_id\\']').on('change', function() {
    var element = this;
    var type = \$(this).attr('name').slice(0, -11);

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=localisation/country&language=";
        // line 601
        yield ($context["language"] ?? null);
        yield "&country_id=' + \$('#input-' + type + '-country').val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
                \$('#input-' + type + '-zone').prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
                \$('#input-' + type + '-zone').prop('disabled', false);
            },
            success: function(json) {
                if (json['postcode_required'] == '1') {
                    \$('#input-' + type + '-postcode').parent().addClass('required');
                } else {
                    \$('#input-' + type + '-postcode').parent().removeClass('required');
                }

                html = '<option value=\"\">";
        // line 618
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == \$('#input-' + type + '-zone').attr('data-oc-value')) {
                            html += ' selected';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>";
        // line 631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_none"] ?? null), "js");
        yield "</option>';
                }

                \$('#input-' + type + '-zone').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('select[name\$=\\'_country_id\\']').trigger('change');
//--></script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/view/template/checkout/register.twig";
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
        return array (  2037 => 631,  2021 => 618,  2001 => 601,  1982 => 585,  1933 => 539,  1884 => 493,  1850 => 463,  1842 => 460,  1838 => 459,  1835 => 458,  1833 => 457,  1827 => 454,  1819 => 449,  1808 => 443,  1802 => 440,  1795 => 435,  1789 => 434,  1786 => 433,  1780 => 430,  1764 => 429,  1758 => 428,  1749 => 427,  1747 => 426,  1744 => 425,  1738 => 422,  1722 => 421,  1716 => 420,  1707 => 419,  1705 => 418,  1702 => 417,  1696 => 414,  1680 => 413,  1674 => 412,  1665 => 411,  1663 => 410,  1660 => 409,  1653 => 405,  1641 => 404,  1629 => 403,  1624 => 401,  1615 => 400,  1612 => 399,  1606 => 396,  1590 => 395,  1584 => 394,  1575 => 393,  1573 => 392,  1570 => 391,  1564 => 388,  1548 => 387,  1542 => 386,  1533 => 385,  1531 => 384,  1528 => 383,  1522 => 380,  1519 => 379,  1508 => 376,  1494 => 375,  1491 => 374,  1487 => 373,  1483 => 372,  1479 => 371,  1470 => 370,  1468 => 369,  1465 => 368,  1459 => 365,  1456 => 364,  1445 => 361,  1431 => 360,  1428 => 359,  1424 => 358,  1420 => 357,  1416 => 356,  1407 => 355,  1405 => 354,  1402 => 353,  1396 => 350,  1393 => 349,  1378 => 347,  1374 => 346,  1370 => 345,  1362 => 344,  1356 => 343,  1347 => 342,  1345 => 341,  1342 => 340,  1339 => 339,  1335 => 338,  1329 => 335,  1325 => 334,  1319 => 330,  1304 => 328,  1300 => 327,  1296 => 326,  1291 => 324,  1282 => 320,  1278 => 319,  1269 => 315,  1265 => 314,  1257 => 311,  1253 => 310,  1244 => 306,  1240 => 305,  1232 => 302,  1228 => 301,  1225 => 300,  1216 => 296,  1212 => 295,  1203 => 291,  1199 => 290,  1196 => 289,  1194 => 288,  1189 => 286,  1180 => 285,  1174 => 281,  1167 => 277,  1163 => 275,  1161 => 274,  1158 => 273,  1152 => 272,  1148 => 270,  1142 => 267,  1126 => 266,  1120 => 265,  1111 => 264,  1109 => 263,  1106 => 262,  1100 => 259,  1084 => 258,  1078 => 257,  1069 => 256,  1066 => 255,  1060 => 252,  1044 => 251,  1038 => 250,  1029 => 249,  1026 => 248,  1020 => 245,  1007 => 243,  995 => 242,  990 => 240,  981 => 239,  978 => 238,  972 => 235,  952 => 234,  943 => 233,  940 => 232,  934 => 229,  918 => 228,  912 => 227,  903 => 226,  900 => 225,  894 => 222,  891 => 221,  868 => 218,  865 => 217,  861 => 216,  857 => 215,  853 => 214,  844 => 213,  841 => 212,  835 => 209,  832 => 208,  809 => 205,  806 => 204,  802 => 203,  798 => 202,  794 => 201,  785 => 200,  783 => 199,  780 => 198,  774 => 195,  771 => 194,  756 => 192,  752 => 191,  748 => 190,  736 => 189,  727 => 188,  725 => 187,  722 => 186,  719 => 185,  715 => 184,  709 => 181,  705 => 180,  699 => 176,  684 => 174,  680 => 173,  676 => 172,  672 => 171,  661 => 167,  650 => 163,  640 => 160,  629 => 156,  619 => 153,  613 => 150,  610 => 149,  608 => 148,  604 => 146,  598 => 145,  594 => 143,  588 => 140,  572 => 139,  566 => 138,  561 => 137,  559 => 136,  556 => 135,  550 => 132,  534 => 131,  528 => 130,  523 => 129,  521 => 128,  518 => 127,  512 => 124,  496 => 123,  490 => 122,  485 => 121,  483 => 120,  480 => 119,  474 => 116,  461 => 114,  449 => 113,  442 => 111,  437 => 110,  435 => 109,  432 => 108,  426 => 105,  406 => 104,  401 => 103,  399 => 102,  396 => 101,  390 => 98,  374 => 97,  368 => 96,  363 => 95,  361 => 94,  358 => 93,  352 => 90,  349 => 89,  338 => 86,  324 => 85,  321 => 84,  317 => 83,  313 => 82,  309 => 81,  304 => 80,  302 => 79,  299 => 78,  293 => 75,  290 => 74,  279 => 71,  265 => 70,  262 => 69,  258 => 68,  254 => 67,  250 => 66,  245 => 65,  243 => 64,  240 => 63,  234 => 60,  231 => 59,  216 => 57,  212 => 56,  208 => 55,  196 => 54,  191 => 53,  189 => 52,  186 => 51,  184 => 50,  181 => 49,  176 => 48,  167 => 44,  163 => 43,  156 => 42,  154 => 41,  146 => 38,  142 => 37,  133 => 33,  129 => 32,  120 => 28,  116 => 27,  109 => 22,  94 => 20,  90 => 19,  85 => 17,  78 => 16,  67 => 12,  57 => 9,  53 => 7,  51 => 6,  46 => 4,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"form-register\">
  <p>{{ text_login }}</p>
  <fieldset>
    <legend>{{ heading_title }}</legend>
    <div class=\"row\">
      {% if config_checkout_guest %}
        <div class=\"col mb-3 required\">
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"1\" id=\"input-register\" class=\"form-check-input\"{% if account %} checked{% endif %}/> <label for=\"input-register\" class=\"form-check-label\">{{ text_register }}</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"0\" id=\"input-guest\" class=\"form-check-input\"{% if not account %} checked{% endif %}/> <label for=\"input-guest\" class=\"form-check-label\">{{ text_guest }}</label>
          </div>
        </div>
      {% endif %}
      <div class=\"col mb-3{% if customer_groups|length <= 1 %} d-none{% endif %}\">
        <label class=\"form-label\">{{ entry_customer_group }}</label>
        <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
          {% for customer_group in customer_groups %}
            <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
          {% endfor %}
        </select>
      </div>
    </div>
    <div class=\"row row-cols-1 row-cols-md-2\">
      <div class=\"col mb-3 required\">
        <label for=\"input-firstname\" class=\"form-label\">{{ entry_firstname }}</label>
        <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
        <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-lastname\" class=\"form-label\">{{ entry_lastname }}</label>
        <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
        <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-email\" class=\"form-label\">{{ entry_email }}</label>
        <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
        <div id=\"error-email\" class=\"invalid-feedback\"></div>
      </div>
      {% if config_telephone_display %}
        <div class=\"col mb-3{% if config_telephone_required %} required{% endif %}\">
          <label for=\"input-telephone\" class=\"form-label\">{{ entry_telephone }}</label>
          <input type=\"text\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
          <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
        </div>
      {% endif %}
      {% for custom_field in custom_fields %}

        {% if custom_field.location == 'account' %}

          {% if custom_field.type == 'select' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" id=\"input-customer-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                <option value=\"\">{{ text_select }}</option>
                {% for custom_field_value in custom_field.custom_field_value %}
                  <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                {% endfor %}
              </select>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'radio' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/>
                    <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'checkbox' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/>
                    <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'text' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"text\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'textarea' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <textarea name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'file' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                <input type=\"hidden\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\"/>
              </div>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'date' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"date\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'time' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"time\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'datetime' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

        {% endif %}
      {% endfor %}
    </div>
  </fieldset>
  {% if config_checkout_payment_address %}
    <fieldset>
      <legend>{{ text_payment_address }}</legend>
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3\">
          <label for=\"input-payment-company\" class=\"form-label\">{{ entry_company }}</label> <input type=\"text\" name=\"payment_company\" value=\"{{ payment_company }}\" placeholder=\"{{ entry_company }}\" id=\"input-payment-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-address-1\" class=\"form-label\">{{ entry_address_1 }}</label> <input type=\"text\" name=\"payment_address_1\" value=\"{{ payment_address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-payment-address-1\" class=\"form-control\"/>
          <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-2\" class=\"form-label\">{{ entry_address_2 }}</label> <input type=\"text\" name=\"payment_address_2\" value=\"{{ payment_address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-payment-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-city\" class=\"form-label\">{{ entry_city }}</label> <input type=\"text\" name=\"payment_city\" value=\"{{ payment_city }}\" placeholder=\"{{ entry_city }}\" id=\"input-payment-city\" class=\"form-control\"/>
          <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-postcode\" class=\"form-label\">{{ entry_postcode }}</label> <input type=\"text\" name=\"payment_postcode\" value=\"{{ payment_postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-payment-postcode\" class=\"form-control\"/>
          <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-country\" class=\"form-label\">{{ entry_country }}</label> <select name=\"payment_country_id\" id=\"input-payment-country\" class=\"form-select\">
            <option value=\"\">{{ text_select }}</option>
            {% for country in countries %}
              <option value=\"{{ country.country_id }}\"{% if country.country_id == payment_country_id %} selected{% endif %}>{{ country.name }}</option>
            {% endfor %}
          </select>
          <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-zone\" class=\"form-label\">{{ entry_zone }}</label>
          <select name=\"payment_zone_id\" id=\"input-payment-zone\" class=\"form-select\" data-oc-value=\"{{ payment_zone_id }}\"></select>
          <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
        </div>
        {% for custom_field in custom_fields %}
          {% if custom_field.location == 'address' %}

            {% if custom_field.type == 'select' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                  <option value=\"\">{{ text_select }}</option>
                  {% for custom_field_value in custom_field.custom_field_value %}
                    <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                  {% endfor %}
                </select>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

            {% if custom_field.type == 'radio' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label class=\"form-label\">{{ custom_field.name }}</label>
                <div id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\">
                  {% for custom_field_value in custom_field.custom_field_value %}
                    <div class=\"form-check\">
                      <input type=\"radio\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                    </div>
                  {% endfor %}
                </div>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'checkbox' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label class=\"form-label\">{{ custom_field.name }}</label>
                <div id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\">
                  {% for custom_field_value in custom_field.custom_field_value %}
                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in address_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                    </div>
                  {% endfor %}
                </div>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'text' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                <input type=\"text\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'textarea' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <textarea name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'file' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label class=\"form-label\">{{ custom_field.name }}</label>
                <div>
                  <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                  <input type=\"hidden\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if payment_custom_field[custom_field.custom_field_id] %}{{ payment_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\"/>
                </div>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'date' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                <input type=\"date\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if payment_custom_field[custom_field.custom_field_id] %}{{ payment_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'time' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                <input type=\"time\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if payment_custom_field[custom_field.custom_field_id] %}{{ payment_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

            {% if custom_field.type == 'datetime' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                <input type=\"datetime-local\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if payment_custom_field[custom_field.custom_field_id] %}{{ payment_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

          {% endif %}
        {% endfor %}

        {% if shipping_required %}
          <div class=\"col mb-3\">
            <div class=\"form-check\">
              <input type=\"checkbox\" name=\"address_match\" value=\"1\" id=\"input-address-match\" class=\"form-check-input\" checked/> <label for=\"input-address-match\" class=\"form-check-label\">{{ entry_match }}</label>
            </div>
          </div>
        {% endif %}

      </div>
    </fieldset>
  {% endif %}
  <fieldset id=\"shipping-address\" style=\"display: {% if not config_checkout_payment_address %}block{% else %}none{% endif %};\">
    <legend>{{ text_shipping_address }}</legend>
    <div class=\"row row-cols-1 row-cols-md-2\">
      {% if config_checkout_payment_address %}
        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-firstname\" class=\"form-label\">{{ entry_firstname }}</label>
          <input type=\"text\" name=\"shipping_firstname\" value=\"{{ shipping_firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-shipping-firstname\" class=\"form-control\"/>
          <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-lastname\" class=\"form-label\">{{ entry_lastname }}</label>
          <input type=\"text\" name=\"shipping_lastname\" value=\"{{ shipping_lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-shipping-lastname\" class=\"form-control\"/>
          <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
        </div>
      {% endif %}
      <div class=\"col mb-3\">
        <label for=\"input-shipping-company\" class=\"form-label\">{{ entry_company }}</label>
        <input type=\"text\" name=\"shipping_company\" value=\"{{ shipping_company }}\" placeholder=\"{{ entry_company }}\" id=\"input-shipping-company\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-address-1\" class=\"form-label\">{{ entry_address_1 }}</label>
        <input type=\"text\" name=\"shipping_address_1\" value=\"{{ shipping_address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-shipping-address-1\" class=\"form-control\"/>
        <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-address-2\" class=\"form-label\">{{ entry_address_2 }}</label>
        <input type=\"text\" name=\"shipping_address_2\" value=\"{{ shipping_address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-shipping-address-2\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-city\" class=\"form-label\">{{ entry_city }}</label>
        <input type=\"text\" name=\"shipping_city\" value=\"{{ shipping_city }}\" placeholder=\"{{ entry_city }}\" id=\"input-shipping-city\" class=\"form-control\"/>
        <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-postcode\" class=\"form-label\">{{ entry_postcode }}</label>
        <input type=\"text\" name=\"shipping_postcode\" value=\"{{ shipping_postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-shipping-postcode\" class=\"form-control\"/>
        <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-country\" class=\"form-label\">{{ entry_country }}</label>
        <select name=\"shipping_country_id\" id=\"input-shipping-country\" class=\"form-select\">
          <option value=\"\">{{ text_select }}</option>
          {% for country in countries %}
            <option value=\"{{ country.country_id }}\"{% if country.country_id == shipping_country_id %} selected{% endif %}>{{ country.name }}</option>
          {% endfor %}
        </select>
        <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-zone\" class=\"form-label\">{{ entry_zone }}</label>
        <select name=\"shipping_zone_id\" id=\"input-shipping-zone\" class=\"form-select\" data-oc-value=\"{{ shipping_zone_id }}\"></select>
        <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
      </div>
      {% for custom_field in custom_fields %}
        {% if custom_field.location == 'address' %}

          {% if custom_field.type == 'select' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <select name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                <option value=\"\">{{ text_select }}</option>
                {% for custom_field_value in custom_field.custom_field_value %}
                  <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == shipping_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                {% endfor %}
              </select>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'radio' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in shipping_custom_field[custom_field.custom_field_id] %} checked{% endif %}/>
                    <label for=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'checkbox' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in shipping_custom_field[custom_field.custom_field_id] %} checked{% endif %}/>
                    <label for=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'text' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"text\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'textarea' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <textarea name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ custom_field.value }}</textarea>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}
          {% if custom_field.type == 'file' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                <input type=\"hidden\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\"/>
                <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          {% endif %}

          {% if custom_field.type == 'date' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"date\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'time' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"time\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'datetime' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"datetime-local\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}
        {% endif %}
      {% endfor %}
    </div>
  </fieldset>
  <div id class=\"row row-cols-1 row-cols-md-2\">
    <div id=\"password\" class=\"col mb-3 required\">
      <fieldset>
        <legend>{{ text_your_password }}</legend>
        <div class=\"row\">
          <div class=\"col mb-3 required\">
            <label for=\"input-password\" class=\"form-label\">{{ entry_password }}</label> <input type=\"password\" name=\"password\" value=\"\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\"/>
            <div id=\"error-password\" class=\"invalid-feedback\"></div>
          </div>
        </div>
      </fieldset>
    </div>
    <div class=\"col mb-3 required\">{{ captcha }}</div>
  </div>
  <div id class=\"row\">
    <div class=\"col\">
      <div class=\"form-check form-switch form-switch-lg\">
        <label for=\"input-newsletter\" class=\"form-check-label\">{{ entry_newsletter }}</label>
        <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"/>
      </div>
      {% if text_agree %}
        <div id=\"register-agree\" class=\"form-check form-switch form-switch-lg\">
          <label class=\"form-check-label\">{{ text_agree }}</label>
          <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-register-agree\" class=\"form-check-input\"{% if agree %} checked{% endif %}/>
        </div>
      {% endif %}
      <button type=\"submit\" id=\"button-register\" class=\"btn btn-primary mt-2\">{{ button_continue }}</button>
    </div>
  </div>
</form>
<script type=\"text/javascript\"><!--
// Account
\$('input[name=\\'account\\']').on('click', function() {
    if (\$(this).val() == 1) {
        \$('#password').removeClass('d-none');
    } else {
        // If guest hide password field
        \$('#password').addClass('d-none');
    }

    if (\$(this).val() == 1) {
        \$('#register-agree').removeClass('d-none');
    } else {
        // If guest hide register agree field
        \$('#register-agree').addClass('d-none');
    }
});

\$('input[name=\\'account\\']:checked').trigger('click');

// Customer Group
\$('#input-customer-group').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=account/custom_field&language={{ language }}&customer_group_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
            },
            success: function(json) {
                \$('.custom-field').addClass('d-none');
                \$('.custom-field').removeClass('required');

                for (i = 0; i < json.length; i++) {
                    custom_field = json[i];

                    \$('.custom-field-' + custom_field['custom_field_id']).removeClass('d-none');

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
});

\$('#input-customer-group').trigger('change');

\$('#input-address-match').on('change', function() {
    if (\$(this).prop('checked')) {
        \$('#shipping-address').hide();
    } else {
        \$('#shipping-address').show();
    }
});

\$('#form-register').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/register.save&language={{ language }}',
            type: 'post',
            dataType: 'json',
            data: \$('#form-register').serialize(),
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-register').button('loading');
            },
            complete: function() {
                \$('#button-register').button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('#form-register').find('.is-invalid').removeClass('is-invalid');
                \$('#form-register').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (key in json['error']) {
                        \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                        \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    if (\$('#input-register').prop('checked')) {
                        \$('input[name=\\'account\\']').prop('disabled', true);
                        \$('#input-customer-group').prop('disabled', true);
                        \$('#input-password').prop('disabled', true);
                        \$('#input-captcha').prop('disabled', true);
                        \$('#input-register-agree').prop('disabled', true);
                    }

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language={{ language }}');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('select[name\$=\\'_country_id\\']').on('change', function() {
    var element = this;
    var type = \$(this).attr('name').slice(0, -11);

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=localisation/country&language={{ language }}&country_id=' + \$('#input-' + type + '-country').val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
                \$('#input-' + type + '-zone').prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
                \$('#input-' + type + '-zone').prop('disabled', false);
            },
            success: function(json) {
                if (json['postcode_required'] == '1') {
                    \$('#input-' + type + '-postcode').parent().addClass('required');
                } else {
                    \$('#input-' + type + '-postcode').parent().removeClass('required');
                }

                html = '<option value=\"\">{{ text_select|escape('js') }}</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == \$('#input-' + type + '-zone').attr('data-oc-value')) {
                            html += ' selected';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>{{ text_none|escape('js') }}</option>';
                }

                \$('#input-' + type + '-zone').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('select[name\$=\\'_country_id\\']').trigger('change');
//--></script>
", "catalog/view/template/checkout/register.twig", "/var/www/html/opencart/upload/catalog/view/template/checkout/register.twig");
    }
}
