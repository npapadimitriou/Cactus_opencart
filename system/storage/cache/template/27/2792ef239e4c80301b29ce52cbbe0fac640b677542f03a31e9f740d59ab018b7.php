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

/* admin/view/template/catalog/product_form.twig */
class __TwigTemplate_83a9e9f9f8016998b9dc02151901c5c0fc93d8bf0f0d44af7f55e19c999805ca extends Template
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
        <button type=\"submit\" form=\"form-product\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
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
    ";
        // line 17
        if (($context["master_id"] ?? null)) {
            // line 18
            yield "      <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            yield ($context["text_variant"] ?? null);
            yield "</div>
    ";
        }
        // line 20
        yield "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 21
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-product\" action=\"";
        // line 23
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 25
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        yield ($context["tab_data"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-links\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        yield ($context["tab_links"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-attribute\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        yield ($context["tab_attribute"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        yield ($context["tab_option"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-subscription\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 30
        yield ($context["tab_subscription"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-discount\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 31
        yield ($context["tab_discount"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-special\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 32
        yield ($context["tab_special"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 33
        yield ($context["tab_image"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 34
        yield ($context["tab_reward"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-seo\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 35
        yield ($context["tab_seo"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-design\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 36
        yield ($context["tab_design"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 37
        yield ($context["tab_report"] ?? null);
        yield "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\">
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 43
            yield "                  <li class=\"nav-item\"><a href=\"#language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 43)) {
                yield " active";
            }
            yield "\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 43);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 43);
            yield "\"/> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 43);
            yield "</a></li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "              </ul>
              <div class=\"tab-content\">
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 48
            yield "                  <div id=\"language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48);
            yield "\" class=\"tab-pane";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 48)) {
                yield " active";
            }
            yield "\">
                    <div class=\"row mb-3 required\">
                      <label for=\"input-name-";
            // line 50
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_name"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 53
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            yield "][name]\" value=\"";
            yield (((($__internal_compile_0 = ($context["product_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = ($context["product_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null), "name", [], "any", false, false, false, 53)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-name-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            yield "\" class=\"form-control\"/>
                          ";
            // line 54
            if (($context["master_id"] ?? null)) {
                // line 55
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 57
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
                yield "][name]\" value=\"1\" id=\"input-variant-name-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-name-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 57)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57)] ?? null) : null), "name", [], "any", false, false, false, 57)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-name-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 61
            yield "                        </div>
                        <div id=\"error-name-";
            // line 62
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62);
            yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-description-";
            // line 66
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_description"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <div class=\"form-control h-100 p-0 border-0 rounded-0\">
                            <textarea name=\"product_description[";
            // line 70
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70);
            yield "][description]\" placeholder=\"";
            yield ($context["entry_description"] ?? null);
            yield "\" id=\"input-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70);
            yield "\" data-oc-toggle=\"ckeditor\" data-lang=\"";
            yield ($context["ckeditor"] ?? null);
            yield "\" class=\"w-100 position-relative\">";
            yield (((($__internal_compile_3 = ($context["product_description"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = ($context["product_description"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70)] ?? null) : null), "description", [], "any", false, false, false, 70)) : (""));
            yield "</textarea>
                          </div>
                          ";
            // line 72
            if (($context["master_id"] ?? null)) {
                // line 73
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 75
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
                yield "][description]\" value=\"1\" id=\"input-variant-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 75)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null), "description", [], "any", false, false, false, 75)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 79
            yield "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3 required\">
                      <label for=\"input-meta-title-";
            // line 83
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_title"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 86
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86);
            yield "][meta_title]\" value=\"";
            yield (((($__internal_compile_6 = ($context["product_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_7 = ($context["product_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86)] ?? null) : null), "meta_title", [], "any", false, false, false, 86)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_meta_title"] ?? null);
            yield "\" id=\"input-meta-title-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86);
            yield "\" class=\"form-control\"/>
                          ";
            // line 87
            if (($context["master_id"] ?? null)) {
                // line 88
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 90
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90);
                yield "][meta_title]\" value=\"1\" id=\"input-variant-meta-title-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-title-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 90)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90)] ?? null) : null), "meta_title", [], "any", false, false, false, 90)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-meta-title-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 94
            yield "                        </div>
                        <div id=\"error-meta-title-";
            // line 95
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95);
            yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-description-";
            // line 99
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_description"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 102
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102);
            yield "][meta_description]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_description"] ?? null);
            yield "\" id=\"input-meta-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102);
            yield "\" class=\"form-control\">";
            yield (((($__internal_compile_9 = ($context["product_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_10 = ($context["product_description"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102)] ?? null) : null), "meta_description", [], "any", false, false, false, 102)) : (""));
            yield "</textarea>
                          ";
            // line 103
            if (($context["master_id"] ?? null)) {
                // line 104
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 106
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106);
                yield "][meta_description]\" value=\"1\" id=\"input-variant-meta-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 106)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106)] ?? null) : null), "meta_description", [], "any", false, false, false, 106)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-meta-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 110
            yield "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-keyword-";
            // line 114
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 117
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117);
            yield "][meta_keyword]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "\" id=\"input-meta-keyword-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117);
            yield "\" class=\"form-control\">";
            yield (((($__internal_compile_12 = ($context["product_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_13 = ($context["product_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 117)) : (""));
            yield "</textarea>
                          ";
            // line 118
            if (($context["master_id"] ?? null)) {
                // line 119
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 121
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121);
                yield "][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 121)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 121)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-meta-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 125
            yield "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-tag-";
            // line 129
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 129);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_tag"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 132
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 132);
            yield "][tag]\" value=\"";
            yield (((($__internal_compile_15 = ($context["product_description"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 132)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_16 = ($context["product_description"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 132)] ?? null) : null), "tag", [], "any", false, false, false, 132)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_tag"] ?? null);
            yield "\" id=\"input-tag-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 132);
            yield "\" class=\"form-control\"/>
                          ";
            // line 133
            if (($context["master_id"] ?? null)) {
                // line 134
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 136
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136);
                yield "][tag]\" value=\"1\" id=\"input-variant-tag-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tag-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 136)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136)] ?? null) : null), "tag", [], "any", false, false, false, 136)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-tag-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 140
            yield "                        </div>
                        <div class=\"form-text\">";
            // line 141
            yield ($context["help_tag"] ?? null);
            yield "</div>
                      </div>
                    </div>
                  </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <input type=\"hidden\" name=\"master_id\" value=\"";
        // line 149
        yield ($context["master_id"] ?? null);
        yield "\"/>
              <fieldset>
                <legend>";
        // line 151
        yield ($context["text_model"] ?? null);
        yield "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-model\" class=\"col-sm-2 col-form-label\">";
        // line 153
        yield ($context["entry_model"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"model\" value=\"";
        // line 156
        yield ($context["model"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_model"] ?? null);
        yield "\" id=\"input-model\" class=\"form-control\"/>
                      ";
        // line 157
        if (($context["master_id"] ?? null)) {
            // line 158
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-oc-toggle=\"switch\" data-oc-target=\"#input-model\" class=\"form-check-input\"";
            // line 160
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "model", [], "any", false, false, false, 160)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-model\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 164
        yield "                    </div>
                    <div id=\"error-model\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sku\" class=\"col-sm-2 col-form-label\">";
        // line 169
        yield ($context["entry_sku"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sku\" value=\"";
        // line 172
        yield ($context["sku"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sku"] ?? null);
        yield "\" id=\"input-sku\" class=\"form-control\"/>
                      ";
        // line 173
        if (($context["master_id"] ?? null)) {
            // line 174
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sku]\" value=\"1\" id=\"input-variant-sku\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sku\" class=\"form-check-input\"";
            // line 176
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "sku", [], "any", false, false, false, 176)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-sku\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 180
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 181
        yield ($context["help_sku"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-upc\" class=\"col-sm-2 col-form-label\">";
        // line 185
        yield ($context["entry_upc"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"upc\" value=\"";
        // line 188
        yield ($context["upc"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_upc"] ?? null);
        yield "\" id=\"input-upc\" class=\"form-control\"/>
                      ";
        // line 189
        if (($context["master_id"] ?? null)) {
            // line 190
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[upc]\" value=\"1\" id=\"input-variant-upc\" data-oc-toggle=\"switch\" data-oc-target=\"#input-upc\" class=\"form-check-input\"";
            // line 192
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "upc", [], "any", false, false, false, 192)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-upc\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 196
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 197
        yield ($context["help_upc"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-ean\" class=\"col-sm-2 col-form-label\">";
        // line 201
        yield ($context["entry_ean"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"ean\" value=\"";
        // line 204
        yield ($context["ean"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_ean"] ?? null);
        yield "\" id=\"input-ean\" class=\"form-control\"/>
                      ";
        // line 205
        if (($context["master_id"] ?? null)) {
            // line 206
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[ean]\" value=\"1\" id=\"input-variant-ean\" data-oc-toggle=\"switch\" data-oc-target=\"#input-ean\" class=\"form-check-input\"";
            // line 208
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "ean", [], "any", false, false, false, 208)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-ean\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 212
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 213
        yield ($context["help_ean"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-jan\" class=\"col-sm-2 col-form-label\">";
        // line 217
        yield ($context["entry_jan"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"jan\" value=\"";
        // line 220
        yield ($context["jan"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_jan"] ?? null);
        yield "\" id=\"input-jan\" class=\"form-control\"/>
                      ";
        // line 221
        if (($context["master_id"] ?? null)) {
            // line 222
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[jan]\" value=\"1\" id=\"input-variant-jan\" data-oc-toggle=\"switch\" data-oc-target=\"#input-jan\" class=\"form-check-input\"";
            // line 224
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "jan", [], "any", false, false, false, 224)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-jan\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 228
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 229
        yield ($context["help_jan"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-isbn\" class=\"col-sm-2 col-form-label\">";
        // line 233
        yield ($context["entry_isbn"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"isbn\" value=\"";
        // line 236
        yield ($context["isbn"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_isbn"] ?? null);
        yield "\" id=\"input-isbn\" class=\"form-control\"/>
                      ";
        // line 237
        if (($context["master_id"] ?? null)) {
            // line 238
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[isbn]\" value=\"1\" id=\"input-variant-isbn\" data-oc-toggle=\"switch\" data-oc-target=\"#input-isbn\" class=\"form-check-input\"";
            // line 240
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "isbn", [], "any", false, false, false, 240)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-isbn\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 244
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 245
        yield ($context["help_isbn"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mpn\" class=\"col-sm-2 col-form-label\">";
        // line 249
        yield ($context["entry_mpn"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"mpn\" value=\"";
        // line 252
        yield ($context["mpn"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mpn"] ?? null);
        yield "\" id=\"input-mpn\" class=\"form-control\"/>
                      ";
        // line 253
        if (($context["master_id"] ?? null)) {
            // line 254
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[mpn]\" value=\"1\" id=\"input-variant-mpn\" data-oc-toggle=\"switch\" data-oc-target=\"#input-mpn\" class=\"form-check-input\"";
            // line 256
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "mpn", [], "any", false, false, false, 256)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-mpn\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 260
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 261
        yield ($context["help_mpn"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-location\" class=\"col-sm-2 col-form-label\">";
        // line 265
        yield ($context["entry_location"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"location\" value=\"";
        // line 268
        yield ($context["location"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_location"] ?? null);
        yield "\" id=\"input-location\" class=\"form-control\"/>
                      ";
        // line 269
        if (($context["master_id"] ?? null)) {
            // line 270
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-oc-toggle=\"switch\" data-oc-target=\"#input-location\" class=\"form-check-input\"";
            // line 272
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "location", [], "any", false, false, false, 272)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-location\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 276
        yield "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 281
        yield ($context["text_price"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-price\" class=\"col-sm-2 col-form-label\">";
        // line 283
        yield ($context["entry_price"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"price\" value=\"";
        // line 286
        yield ($context["price"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_price"] ?? null);
        yield "\" id=\"input-price\" class=\"form-control\"/>
                      ";
        // line 287
        if (($context["master_id"] ?? null)) {
            // line 288
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[price]\" value=\"1\" id=\"input-variant-price\" data-oc-toggle=\"switch\" data-oc-target=\"#input-price\" class=\"form-check-input\"";
            // line 290
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "price", [], "any", false, false, false, 290)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-price\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 294
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">";
        // line 298
        yield ($context["entry_tax_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                        <option value=\"0\">";
        // line 302
        yield ($context["text_none"] ?? null);
        yield "</option>
                        ";
        // line 303
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 304
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 304);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 304) == ($context["tax_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 304);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        yield "                      </select>
                      ";
        // line 307
        if (($context["master_id"] ?? null)) {
            // line 308
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tax-class\" class=\"form-check-input\"";
            // line 310
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "tax_class_id", [], "any", false, false, false, 310)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-tax-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 314
        yield "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 319
        yield ($context["text_stock"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">";
        // line 321
        yield ($context["entry_quantity"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 323
        yield ($context["quantity"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_quantity"] ?? null);
        yield "\" id=\"input-quantity\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">";
        // line 327
        yield ($context["entry_minimum"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"minimum\" value=\"";
        // line 330
        yield ($context["minimum"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_minimum"] ?? null);
        yield "\" id=\"input-minimum\" class=\"form-control\"/>
                      ";
        // line 331
        if (($context["master_id"] ?? null)) {
            // line 332
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-oc-toggle=\"switch\" data-oc-target=\"#input-minimum\" class=\"form-check-input\"";
            // line 334
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "minimum", [], "any", false, false, false, 334)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-minimum\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 338
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 339
        yield ($context["help_minimum"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 343
        yield ($context["entry_subtract"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-subtract\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"subtract\" value=\"0\"/> <input type=\"checkbox\" name=\"subtract\" value=\"1\" class=\"form-check-input\"";
        // line 347
        if (($context["subtract"] ?? null)) {
            yield " checked";
        }
        yield "/>
                      </div>
                      ";
        // line 349
        if (($context["master_id"] ?? null)) {
            // line 350
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-oc-toggle=\"switch\" data-oc-target=\"#input-subtract\" class=\"form-check-input\"";
            // line 352
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "subtract", [], "any", false, false, false, 352)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-subtract\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 356
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">";
        // line 360
        yield ($context["entry_stock_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                        ";
        // line 364
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 365
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 365);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 365) == ($context["stock_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 365);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 367
        yield "                      </select>
                      ";
        // line 368
        if (($context["master_id"] ?? null)) {
            // line 369
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-stock-status\" class=\"form-check-input\"";
            // line 371
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "stock_status_id", [], "any", false, false, false, 371)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-stock-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 375
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 376
        yield ($context["help_stock_status"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">";
        // line 380
        yield ($context["entry_date_available"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group\">
                      <input type=\"date\" name=\"date_available\" value=\"";
        // line 383
        yield ($context["date_available"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_available"] ?? null);
        yield "\" id=\"input-date-available\" class=\"form-control\"/>
                      ";
        // line 384
        if (($context["master_id"] ?? null)) {
            // line 385
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-available\" class=\"form-check-input\"";
            // line 387
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "date_available", [], "any", false, false, false, 387)) {
                yield " checked";
            }
            yield "/>
                            <label for=\"input-variant-date-available\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 392
        yield "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 397
        yield ($context["text_specification"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 399
        yield ($context["entry_shipping"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-shipping\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"shipping\" value=\"0\"/> <input type=\"checkbox\" name=\"shipping\" value=\"1\" class=\"form-check-input\"";
        // line 403
        if (($context["shipping"] ?? null)) {
            yield " checked";
        }
        yield "/>
                      </div>
                      ";
        // line 405
        if (($context["master_id"] ?? null)) {
            // line 406
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-oc-toggle=\"switch\" data-oc-target=\"#input-shipping\" class=\"form-check-input\"";
            // line 408
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "shipping", [], "any", false, false, false, 408)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-shipping\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 412
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length\" class=\"col-sm-2 col-form-label\">";
        // line 416
        yield ($context["entry_dimension"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 419
        yield ($context["length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_length"] ?? null);
        yield "\" id=\"input-length\" class=\"form-control\"/>
                      ";
        // line 420
        if (($context["master_id"] ?? null)) {
            // line 421
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length\" class=\"form-check-input\"";
            // line 423
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "length", [], "any", false, false, false, 423)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-length\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 427
        yield "                      <input type=\"text\" name=\"width\" value=\"";
        yield ($context["width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-width\" class=\"form-control\"/>
                      ";
        // line 428
        if (($context["master_id"] ?? null)) {
            // line 429
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-oc-toggle=\"switch\" data-oc-target=\"#input-width\" class=\"form-check-input\"";
            // line 431
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "width", [], "any", false, false, false, 431)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-width\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 435
        yield "                      <input type=\"text\" name=\"height\" value=\"";
        yield ($context["height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-height\" class=\"form-control\"/>
                      ";
        // line 436
        if (($context["master_id"] ?? null)) {
            // line 437
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-oc-toggle=\"switch\" data-oc-target=\"#input-height\" class=\"form-check-input\"";
            // line 439
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "height", [], "any", false, false, false, 439)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-height\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 443
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 447
        yield ($context["entry_length_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-select\">
                        ";
        // line 451
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 452
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 452);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 452) == ($context["length_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 452);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 454
        yield "                      </select>
                      ";
        // line 455
        if (($context["master_id"] ?? null)) {
            // line 456
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length-class\" class=\"form-check-input\"";
            // line 458
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "length_class_id", [], "any", false, false, false, 458)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-length-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 462
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight\" class=\"col-sm-2 col-form-label\">";
        // line 466
        yield ($context["entry_weight"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"weight\" value=\"";
        // line 469
        yield ($context["weight"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_weight"] ?? null);
        yield "\" id=\"input-weight\" class=\"form-control\"/>
                      ";
        // line 470
        if (($context["master_id"] ?? null)) {
            // line 471
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight\" class=\"form-check-input\"";
            // line 473
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "weight", [], "any", false, false, false, 473)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-weight\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 477
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 481
        yield ($context["entry_weight_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                        ";
        // line 485
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 486
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 486);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 486) == ($context["weight_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 486);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 488
        yield "                      </select>
                      ";
        // line 489
        if (($context["master_id"] ?? null)) {
            // line 490
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight-class\" class=\"form-check-input\"";
            // line 492
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "weight_class_id", [], "any", false, false, false, 492)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-weight-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 496
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 500
        yield ($context["entry_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 504
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                      </div>
                      ";
        // line 506
        if (($context["master_id"] ?? null)) {
            // line 507
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-status\" class=\"form-check-input\"";
            // line 509
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "status", [], "any", false, false, false, 509)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 513
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 517
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sort_order\" value=\"";
        // line 520
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
                      ";
        // line 521
        if (($context["master_id"] ?? null)) {
            // line 522
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sort-order\" class=\"form-check-input\"";
            // line 524
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "sort_order", [], "any", false, false, false, 524)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-sort-order\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 528
        yield "                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-links\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 535
        yield ($context["entry_manufacturer"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 538
        yield ($context["manufacturer"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_manufacturer"] ?? null);
        yield "\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                    ";
        // line 539
        if (($context["master_id"] ?? null)) {
            // line 540
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-oc-toggle=\"switch\" data-oc-target=\"#input-manufacturer\" class=\"form-check-input\"";
            // line 542
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "manufacturer", [], "any", false, false, false, 542)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-manufacturer\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 546
        yield "                  </div>
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 547
        yield ($context["manufacturer_id"] ?? null);
        yield "\" id=\"input-manufacturer-id\"/>
                  <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-text\">";
        // line 549
        yield ($context["help_manufacturer"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 553
        yield ($context["entry_category"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 555
        yield ($context["entry_category"] ?? null);
        yield "\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-category\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 561
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 562
            yield "                            <tr id=\"product-category-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 562);
            yield "\">
                              <td>";
            // line 563
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 563);
            yield "<input type=\"hidden\" name=\"product_category[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 563);
            yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 567
        yield "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 570
        if (($context["master_id"] ?? null)) {
            // line 571
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-oc-toggle=\"switch\" data-oc-target=\"#input-category, #product-category\" class=\"form-check-input\"";
            // line 573
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_category", [], "any", false, false, false, 573)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-category\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 577
        yield "                  </div>
                  <div class=\"form-text\">";
        // line 578
        yield ($context["help_category"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 582
        yield ($context["entry_filter"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 584
        yield ($context["entry_filter"] ?? null);
        yield "\" id=\"input-filter\" data-oc-target=\"autocomplete-filter\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-filter\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-filter\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 590
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 591
            yield "                            <tr id=\"product-filter-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 591);
            yield "\">
                              <td>";
            // line 592
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 592);
            yield "<input type=\"hidden\" name=\"product_filter[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 592);
            yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 596
        yield "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 599
        if (($context["master_id"] ?? null)) {
            // line 600
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-oc-toggle=\"switch\" data-oc-target=\"#input-filter, #product-filter\" class=\"form-check-input\"";
            // line 602
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_filter", [], "any", false, false, false, 602)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-filter\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 606
        yield "                  </div>
                  <div class=\"form-text\">";
        // line 607
        yield ($context["help_filter"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 611
        yield ($context["entry_store"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 615
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 616
            yield "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"product_store[]\" value=\"";
            // line 617
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 617);
            yield "\" id=\"input-store-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 617);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 617), ($context["product_store"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-store-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 617);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 617);
            yield "</label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 620
        yield "                    </div>
                    ";
        // line 621
        if (($context["master_id"] ?? null)) {
            // line 622
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-oc-toggle=\"switch\" data-oc-target=\"#product-store\" class=\"form-check-input\"";
            // line 624
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_store", [], "any", false, false, false, 624)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-store\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 628
        yield "                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 632
        yield ($context["entry_download"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 634
        yield ($context["entry_download"] ?? null);
        yield "\" id=\"input-download\" data-oc-target=\"autocomplete-download\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-download\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-download\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 640
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 641
            yield "                            <tr id=\"product-download-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 641);
            yield "\">
                              <td>";
            // line 642
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 642);
            yield "<input type=\"hidden\" name=\"product_download[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 642);
            yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 646
        yield "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 649
        if (($context["master_id"] ?? null)) {
            // line 650
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-oc-toggle=\"switch\" data-oc-target=\"#input-download, #product-download\" class=\"form-check-input\"";
            // line 652
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_download", [], "any", false, false, false, 652)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-download\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 656
        yield "                  </div>
                  <div class=\"form-text\">";
        // line 657
        yield ($context["help_download"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 661
        yield ($context["entry_related"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 663
        yield ($context["entry_related"] ?? null);
        yield "\" id=\"input-related\" data-oc-target=\"autocomplete-related\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-related\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 669
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 670
            yield "                            <tr id=\"product-related-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 670);
            yield "\">
                              <td>";
            // line 671
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 671);
            yield "<input type=\"hidden\" name=\"product_related[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 671);
            yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 675
        yield "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 678
        if (($context["master_id"] ?? null)) {
            // line 679
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-oc-toggle=\"switch\" data-oc-target=\"#input-related, #product-related\" class=\"form-check-input\"";
            // line 681
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_related", [], "any", false, false, false, 681)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-related\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 685
        yield "                  </div>
                  <div class=\"form-text\">";
        // line 686
        yield ($context["help_related"] ?? null);
        yield "</div>
                </div>
              </div>
            </div>
            <div id=\"tab-attribute\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-attribute\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 695
        yield ($context["entry_attribute"] ?? null);
        yield "</td>
                      <td class=\"text-start\">";
        // line 696
        yield ($context["entry_text"] ?? null);
        yield "</td>
                      <td>
                        ";
        // line 698
        if (($context["master_id"] ?? null)) {
            // line 699
            yield "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-oc-toggle=\"switch\" data-oc-target=\"#product-attribute\" class=\"form-check-input\"";
            // line 700
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_attribute", [], "any", false, false, false, 700)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-attribute\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 702
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 706
        $context["attribute_row"] = 0;
        // line 707
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 708
            yield "                      <tr id=\"attribute-row-";
            yield ($context["attribute_row"] ?? null);
            yield "\">
                        <td class=\"text-start\">

                          <input type=\"hidden\" name=\"product_attribute[";
            // line 711
            yield ($context["attribute_row"] ?? null);
            yield "][attribute_id]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 711);
            yield "\" id=\"input-attribute-id-";
            yield ($context["attribute_row"] ?? null);
            yield "\"/>
                          <input type=\"text\" name=\"product_attribute[";
            // line 712
            yield ($context["attribute_row"] ?? null);
            yield "][name]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 712);
            yield "\" placeholder=\"";
            yield ($context["entry_attribute"] ?? null);
            yield "\" id=\"input-attribute-";
            yield ($context["attribute_row"] ?? null);
            yield "\" data-oc-target=\"autocomplete-attribute-";
            yield ($context["attribute_row"] ?? null);
            yield "\" class=\"form-control\" autocomplete=\"new-password\"/>
                          <ul id=\"autocomplete-attribute-";
            // line 713
            yield ($context["attribute_row"] ?? null);
            yield "\" class=\"dropdown-menu\"></ul></td>

                        <td class=\"text-start\">";
            // line 715
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 716
                yield "                            <div class=\"input-group mb-12\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 717
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 717);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 717);
                yield "\"/></div>
                              <textarea name=\"product_attribute[";
                // line 718
                yield ($context["attribute_row"] ?? null);
                yield "][product_attribute_description][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 718);
                yield "][text]\" rows=\"5\" placeholder=\"";
                yield ($context["entry_text"] ?? null);
                yield "\" id=\"input-text-";
                yield ($context["attribute_row"] ?? null);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 718);
                yield "\" class=\"form-control\">";
                yield (((($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 718)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 718)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 718)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 718)] ?? null) : null), "text", [], "any", false, false, false, 718)) : (""));
                yield "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 720
            yield "</td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#attribute-row-";
            // line 721
            yield ($context["attribute_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 723
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 724
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 725
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-attribute\" data-bs-toggle=\"tooltip\" title=\"";
        // line 729
        yield ($context["button_attribute_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            ";
        // line 735
        if ( !($context["master_id"] ?? null)) {
            // line 736
            yield "              <div id=\"tab-option\" class=\"tab-pane\">

                <div id=\"option\">

                  ";
            // line 740
            $context["option_row"] = 0;
            // line 741
            yield "                  ";
            $context["option_value_row"] = 0;
            // line 742
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                // line 743
                yield "
                    <fieldset id=\"option-row-";
                // line 744
                yield ($context["option_row"] ?? null);
                yield "\">
                      <legend>";
                // line 745
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 745);
                yield "</legend>
                      <input type=\"hidden\" name=\"product_option[";
                // line 746
                yield ($context["option_row"] ?? null);
                yield "][product_option_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 746);
                yield "\"/> <input type=\"hidden\" name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][name]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 746);
                yield "\"/> <input type=\"hidden\" name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][option_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 746);
                yield "\"/> <input type=\"hidden\" name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][type]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 746);
                yield "\"/>

                      <div class=\"row align-items-center\">
                        <div class=\"col-11\">

                          <div class=\"mb-3\">
                            <label for=\"input-required-";
                // line 752
                yield ($context["option_row"] ?? null);
                yield "\" class=\"form-label\">";
                yield ($context["entry_required"] ?? null);
                yield "</label>
                            <select name=\"product_option[";
                // line 753
                yield ($context["option_row"] ?? null);
                yield "][required]\" id=\"input-required-";
                yield ($context["option_row"] ?? null);
                yield "\" class=\"form-select\">
                              <option value=\"1\"";
                // line 754
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 754)) {
                    yield " selected";
                }
                yield ">";
                yield ($context["text_enabled"] ?? null);
                yield "</option>
                              <option value=\"0\"";
                // line 755
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 755)) {
                    yield " selected";
                }
                yield ">";
                yield ($context["text_disabled"] ?? null);
                yield "</option>
                            </select>
                          </div>

                          ";
                // line 759
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 759) == "text")) {
                    // line 760
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 761
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label>
                              <input type=\"text\" name=\"product_option[";
                    // line 762
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 762);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 765
                yield "
                          ";
                // line 766
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 766) == "textarea")) {
                    // line 767
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 768
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label>
                              <textarea name=\"product_option[";
                    // line 769
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" rows=\"5\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 769);
                    yield "</textarea>
                            </div>
                          ";
                }
                // line 772
                yield "
                          ";
                // line 773
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 773) == "file")) {
                    // line 774
                    yield "                            <div class=\"mb-3 d-none\">
                              <label for=\"input-option-";
                    // line 775
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label>
                              <input type=\"text\" name=\"product_option[";
                    // line 776
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 776);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 779
                yield "
                          ";
                // line 780
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 780) == "date")) {
                    // line 781
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 782
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label>
                              <input type=\"date\" name=\"product_option[";
                    // line 783
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 783);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 786
                yield "
                          ";
                // line 787
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 787) == "time")) {
                    // line 788
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 789
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label>
                              <input type=\"time\" name=\"product_option[";
                    // line 790
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 790);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 793
                yield "
                          ";
                // line 794
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 794) == "datetime")) {
                    // line 795
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 796
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label>
                              <input type=\"datetime-local\" name=\"product_option[";
                    // line 797
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 797);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 800
                yield "
                          ";
                // line 801
                if (((((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 801) == "select") || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 801) == "radio")) || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 801) == "checkbox")) || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 801) == "image"))) {
                    // line 802
                    yield "                            <div class=\"table-responsive\">
                              <table class=\"table table-bordered table-hover\">
                                <thead>
                                  <tr>
                                    <td class=\"text-start\">";
                    // line 806
                    yield ($context["entry_option_value"] ?? null);
                    yield "</td>
                                    <td class=\"text-end\">";
                    // line 807
                    yield ($context["entry_quantity"] ?? null);
                    yield "</td>
                                    <td class=\"text-start\">";
                    // line 808
                    yield ($context["entry_subtract"] ?? null);
                    yield "</td>
                                    <td class=\"text-end\">";
                    // line 809
                    yield ($context["entry_price"] ?? null);
                    yield "</td>
                                    <td class=\"text-end\">";
                    // line 810
                    yield ($context["entry_points"] ?? null);
                    yield "</td>
                                    <td class=\"text-end\">";
                    // line 811
                    yield ($context["entry_weight"] ?? null);
                    yield "</td>
                                    <td></td>
                                  </tr>
                                </thead>
                                <tbody id=\"option-value-";
                    // line 815
                    yield ($context["option_row"] ?? null);
                    yield "\">
                                  ";
                    // line 816
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 816));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                        // line 817
                        yield "                                    <tr id=\"option-value-row-";
                        yield ($context["option_value_row"] ?? null);
                        yield "\">
                                      <td class=\"text-start\">";
                        // line 818
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "name", [], "any", false, false, false, 818);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 819
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][option_value_id]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 819);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][product_option_value_id]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 819);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 820
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 820);
                        yield " <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][quantity]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 820);
                        yield "\"/></td>
                                      <td class=\"text-start\">";
                        // line 821
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 821)) {
                            // line 822
                            yield "                                          ";
                            yield ($context["text_yes"] ?? null);
                            yield "
                                        ";
                        } else {
                            // line 824
                            yield "                                          ";
                            yield ($context["text_no"] ?? null);
                            yield "
                                        ";
                        }
                        // line 826
                        yield "                                        <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][subtract]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 826);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 827
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 827);
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 827);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 828
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][price_prefix]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 828);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][price]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 828);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 829
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 829);
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 829);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 830
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][points_prefix]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 830);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][points]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 830);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 831
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 831);
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 831);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 832
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][weight_prefix]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 832);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][weight]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 832);
                        yield "\"/></td>
                                      <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                        // line 833
                        yield ($context["button_edit"] ?? null);
                        yield "\" data-option-row=\"";
                        yield ($context["option_row"] ?? null);
                        yield "\" data-option-value-row=\"";
                        yield ($context["option_value_row"] ?? null);
                        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$('#option-value-row-";
                        yield ($context["option_value_row"] ?? null);
                        yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                        yield ($context["button_remove"] ?? null);
                        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                                    </tr>
                                    ";
                        // line 835
                        $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                        // line 836
                        yield "                                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 837
                    yield "                                </tbody>
                                <tfoot>
                                  <tr>
                                    <td colspan=\"6\"></td>
                                    <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 841
                    yield ($context["button_option_value_add"] ?? null);
                    yield "\" data-option-row=\"";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                                  </tr>
                                </tfoot>
                              </table>
                              <select id=\"product-option-values-";
                    // line 845
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"d-none\">
                                ";
                    // line 846
                    if ((($__internal_compile_20 = ($context["option_values"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 846)] ?? null) : null)) {
                        // line 847
                        yield "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_21 = ($context["option_values"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 847)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 848
                            yield "                                    <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 848);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 848);
                            yield "</option>
                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 850
                        yield "                                ";
                    }
                    // line 851
                    yield "                              </select>
                            </div>
                          ";
                }
                // line 854
                yield "                        </div>

                        <div class=\"col\">
                          <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"tooltip\" title=\"";
                // line 857
                yield ($context["button_remove"] ?? null);
                yield "\" onclick=\"\$('#option-row-";
                yield ($context["option_row"] ?? null);
                yield "').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                        </div>
                      </div>
                    </fieldset>
                    ";
                // line 861
                $context["option_row"] = (($context["option_row"] ?? null) + 1);
                // line 862
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 863
            yield "                </div>
                <fieldset>
                  <legend class=\"float-none\">";
            // line 865
            yield ($context["text_option_add"] ?? null);
            yield "</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-option\" class=\"col-sm-2 col-form-label\">";
            // line 867
            yield ($context["entry_option"] ?? null);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
            // line 869
            yield ($context["entry_option"] ?? null);
            yield "\" id=\"input-option\" data-oc-target=\"autocomplete-option\" class=\"form-control\" autocomplete=\"off\"/>
                      <ul id=\"autocomplete-option\" class=\"dropdown-menu\"></ul>
                      <div class=\"form-text\">";
            // line 871
            yield ($context["help_option"] ?? null);
            yield "</div>
                    </div>
                  </div>
                </fieldset>
              </div>
            ";
        } else {
            // line 877
            yield "              <div id=\"tab-option\" class=\"tab-pane\">
                ";
            // line 878
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 879
                yield "                  <fieldset>
                    <legend class=\"float-none\">";
                // line 880
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 880);
                yield "</legend>


                    ";
                // line 883
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 883) == "select")) {
                    // line 884
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 884)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 885
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 885);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <select name=\"variant[";
                    // line 888
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 888);
                    yield "]\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 888);
                    yield "\" class=\"form-select\">
                              <option value=\"\">";
                    // line 889
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                              ";
                    // line 890
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 890));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 891
                        yield "                                <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 891);
                        yield "\"";
                        if (((($__internal_compile_22 = ($context["variant"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 891)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 891) == (($__internal_compile_23 = ($context["variant"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 891)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 891);
                        yield "
                                  ";
                        // line 892
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 892)) {
                            // line 893
                            yield "                                    (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 893);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 893);
                            yield ")
                                  ";
                        }
                        // line 894
                        yield "</option>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 896
                    yield "                            </select>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 899
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 899);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 899);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 899);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_24 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 899)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 899)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 899);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 903
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 903);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 907
                yield "

                    ";
                // line 909
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 909) == "radio")) {
                    // line 910
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 910)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 911
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 911);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 914
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 914);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 915
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 915));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 916
                        yield "                                <div class=\"form-check\">
                                  <input type=\"radio\" name=\"variant[";
                        // line 917
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 917);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 917);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 917);
                        yield "\" class=\"form-check-input\"";
                        if (((($__internal_compile_25 = ($context["variant"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 917)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 917) == (($__internal_compile_26 = ($context["variant"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 917)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 917);
                        yield "\" class=\"form-check-label\">
                                    ";
                        // line 918
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 918)) {
                            yield "<img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 918);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 918);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 918)) {
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 918);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 918);
                                yield " ";
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 919
                        yield "                                    ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 919);
                        yield "
                                    ";
                        // line 920
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 920)) {
                            // line 921
                            yield "                                      (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 921);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 921);
                            yield ")
                                    ";
                        }
                        // line 922
                        yield "</label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 925
                    yield "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 928
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 928);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 928);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 928);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_27 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 928)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 928)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 928);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 932
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 932);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 936
                yield "

                    ";
                // line 938
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 938) == "checkbox")) {
                    // line 939
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 939)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 940
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 940);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 943
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 943);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 944
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 944));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 945
                        yield "                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"variant[";
                        // line 946
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 946);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 946);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 946);
                        yield "\" class=\"form-check-input\"";
                        if (((($__internal_compile_28 = ($context["variant"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 946)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 946), (($__internal_compile_29 = ($context["variant"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 946)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 946);
                        yield "\" class=\"form-check-label\">";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 946)) {
                            yield " <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 946);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 946);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 946)) {
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 946);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 946);
                                yield " ";
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 947
                        yield "                                    ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 947);
                        yield "
                                    ";
                        // line 948
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 948)) {
                            // line 949
                            yield "                                      (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 949);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 949);
                            yield ")
                                    ";
                        }
                        // line 950
                        yield "</label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 953
                    yield "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 956
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 956);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 956);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 956);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_30 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 956)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 956)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 956);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 960
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 960);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 964
                yield "

                    ";
                // line 966
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 966) == "text")) {
                    // line 967
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 967)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 968
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 968);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 968);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 971
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 971);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_31 = ($context["variant"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 971)] ?? null) : null)) ? ((($__internal_compile_32 = ($context["variant"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 971)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 971)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 971);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 971);
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 974
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 974);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 974);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 974);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_33 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 974)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 974)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 974);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 978
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 978);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 982
                yield "

                    ";
                // line 984
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 984) == "textarea")) {
                    // line 985
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 985)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 986
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 986);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 986);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"variant[";
                    // line 989
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 989);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 989);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 989);
                    yield "\" class=\"form-control\">";
                    yield (((($__internal_compile_34 = ($context["variant"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 989)] ?? null) : null)) ? ((($__internal_compile_35 = ($context["variant"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 989)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 989)));
                    yield "</textarea>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 992
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 992);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 992);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 992);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_36 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 992)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 992)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 992);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 996
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 996);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1000
                yield "

                    ";
                // line 1002
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1002) == "file")) {
                    // line 1003
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1003)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1004
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1004);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 1007
                    yield ($context["upload"] ?? null);
                    yield "\" id=\"button-upload-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1007);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1007);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                            <input type=\"text\" name=\"variant[";
                    // line 1008
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1008);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_37 = ($context["variant"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1008)] ?? null) : null)) ? ((($__internal_compile_38 = ($context["variant"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1008)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1008)));
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1008);
                    yield "\" class=\"form-control\"/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-option-";
                    // line 1009
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1009);
                    yield "\"";
                    if ( !(($__internal_compile_39 = ($context["variant"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1009)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 1010
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1010);
                    yield "\"";
                    if ( !(($__internal_compile_40 = ($context["variant"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1010)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1013
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1013);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1013);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#button-upload-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1013);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_41 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1013)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1013)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1013);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1017
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1017);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1021
                yield "

                    ";
                // line 1023
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1023) == "date")) {
                    // line 1024
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1024)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1025
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1025);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1025);
                    yield "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"date\" name=\"variant[";
                    // line 1028
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1028);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_42 = ($context["variant"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1028)] ?? null) : null)) ? ((($__internal_compile_43 = ($context["variant"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1028)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1028)));
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1028);
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1031
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1031);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1031);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1031);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_44 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1031)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1031)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1031);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1035
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1035);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1039
                yield "

                    ";
                // line 1041
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1041) == "time")) {
                    // line 1042
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1042)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1043
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1043);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1043);
                    yield "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div id=\"input-option-";
                    // line 1045
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1045);
                    yield "\" class=\"input-group\">
                            <input type=\"time\" name=\"variant[";
                    // line 1046
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1046);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_45 = ($context["variant"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1046)] ?? null) : null)) ? ((($__internal_compile_46 = ($context["variant"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1046)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1046)));
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1049
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1049);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1049);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1049);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_47 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1049)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1049)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1049);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1053
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1053);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1057
                yield "

                    ";
                // line 1059
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1059) == "datetime")) {
                    // line 1060
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1060)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1061
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1061);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1061);
                    yield "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"datetime-local\" name=\"variant[";
                    // line 1064
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1064);
                    yield "]\" value=\"";
                    yield (((($__internal_compile_48 = ($context["variant"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1064)] ?? null) : null)) ? ((($__internal_compile_49 = ($context["variant"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1064)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1064)));
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1064);
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1067
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1067);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1067);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1067);
                    yield "\" class=\"form-check-input\"";
                    if ((($__internal_compile_50 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1067)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1067)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1067);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1071
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1071);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1075
                yield "                  </fieldset>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1077
            yield "

              </div>





            ";
        }
        // line 1086
        yield "
            <div id=\"tab-subscription\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-subscription\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1092
        yield ($context["entry_subscription"] ?? null);
        yield "</td>
                      <td class=\"text-start\">";
        // line 1093
        yield ($context["entry_customer_group"] ?? null);
        yield "</td>
                      <td class=\"text-start\">";
        // line 1094
        yield ($context["entry_trial_price"] ?? null);
        yield "</td>
                      <td class=\"text-start\">";
        // line 1095
        yield ($context["entry_price"] ?? null);
        yield "</td>
                      <td>
                        ";
        // line 1097
        if (($context["master_id"] ?? null)) {
            // line 1098
            yield "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_subscription]\" value=\"1\" id=\"input-variant-product-subscription\" data-oc-toggle=\"switch\" data-oc-target=\"#product-subscription\" class=\"form-check-input\"";
            // line 1099
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_subscription", [], "any", false, false, false, 1099)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-subscription\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1101
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1105
        $context["subscription_row"] = 0;
        // line 1106
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_subscriptions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_subscription"]) {
            // line 1107
            yield "                      <tr id=\"subscription-row-";
            yield ($context["subscription_row"] ?? null);
            yield "\">
                        <td class=\"text-start\"><select name=\"product_subscription[";
            // line 1108
            yield ($context["subscription_row"] ?? null);
            yield "][subscription_plan_id]\" class=\"form-select\">
                            ";
            // line 1109
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 1110
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1110);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1110) == CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "subscription_plan_id", [], "any", false, false, false, 1110))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 1110);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1112
            yield "                          </select></td>
                        <td class=\"text-start\"><select name=\"product_subscription[";
            // line 1113
            yield ($context["subscription_row"] ?? null);
            yield "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1114
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1115
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1115);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1115) == CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "customer_group_id", [], "any", false, false, false, 1115))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1115);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1117
            yield "                          </select></td>
                        <td class=\"text-start\"><input type=\"text\" name=\"product_subscription[";
            // line 1118
            yield ($context["subscription_row"] ?? null);
            yield "][trial_price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "trial_price", [], "any", false, false, false, 1118);
            yield "\" placeholder=\"";
            yield ($context["entry_trial_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-start\"><input type=\"text\" name=\"product_subscription[";
            // line 1119
            yield ($context["subscription_row"] ?? null);
            yield "][price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "price", [], "any", false, false, false, 1119);
            yield "\" placeholder=\"";
            yield ($context["entry_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#subscription-row-";
            // line 1120
            yield ($context["subscription_row"] ?? null);
            yield "').remove()\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1122
            $context["subscription_row"] = (($context["subscription_row"] ?? null) + 1);
            // line 1123
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_subscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1124
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-subscription\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1128
        yield ($context["button_subscription_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-discount\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-discount\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1140
        yield ($context["entry_customer_group"] ?? null);
        yield "</td>
                      <td class=\"text-end\">";
        // line 1141
        yield ($context["entry_quantity"] ?? null);
        yield "</td>
                      <td class=\"text-end\">";
        // line 1142
        yield ($context["entry_priority"] ?? null);
        yield "</td>
                      <td class=\"text-end\">";
        // line 1143
        yield ($context["entry_price"] ?? null);
        yield "</td>
                      <td class=\"text-start\">";
        // line 1144
        yield ($context["entry_date_start"] ?? null);
        yield "</td>
                      <td class=\"text-start\">";
        // line 1145
        yield ($context["entry_date_end"] ?? null);
        yield "</td>
                      <td class=\"text-end\">";
        // line 1146
        if (($context["master_id"] ?? null)) {
            // line 1147
            yield "                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-oc-toggle=\"switch\" data-oc-target=\"#product-discount\" class=\"form-check-input\"";
            // line 1148
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_discount", [], "any", false, false, false, 1148)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-discount\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1150
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1154
        $context["discount_row"] = 0;
        // line 1155
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1156
            yield "                      <tr id=\"discount-row-";
            yield ($context["discount_row"] ?? null);
            yield "\">
                        <td class=\"text-start\"><select name=\"product_discount[";
            // line 1157
            yield ($context["discount_row"] ?? null);
            yield "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1158
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1159
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1159);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1159) == CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1159))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1159);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1161
            yield "                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1162
            yield ($context["discount_row"] ?? null);
            yield "][quantity]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1162);
            yield "\" placeholder=\"";
            yield ($context["entry_quantity"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1163
            yield ($context["discount_row"] ?? null);
            yield "][priority]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1163);
            yield "\" placeholder=\"";
            yield ($context["entry_priority"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1164
            yield ($context["discount_row"] ?? null);
            yield "][price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1164);
            yield "\" placeholder=\"";
            yield ($context["entry_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-start\"><input type=\"date\" name=\"product_discount[";
            // line 1165
            yield ($context["discount_row"] ?? null);
            yield "][date_start]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1165);
            yield "\" placeholder=\"";
            yield ($context["entry_date_start"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-start\"><input type=\"date\" name=\"product_discount[";
            // line 1166
            yield ($context["discount_row"] ?? null);
            yield "][date_end]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1166);
            yield "\" placeholder=\"";
            yield ($context["entry_date_end"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#discount-row-";
            // line 1167
            yield ($context["discount_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1169
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1170
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1171
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-discount\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1175
        yield ($context["button_discount_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-special\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-special\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1187
        yield ($context["entry_customer_group"] ?? null);
        yield "</td>
                      <td class=\"text-end\">";
        // line 1188
        yield ($context["entry_priority"] ?? null);
        yield "</td>
                      <td class=\"text-end\">";
        // line 1189
        yield ($context["entry_price"] ?? null);
        yield "</td>
                      <td class=\"text-start\">";
        // line 1190
        yield ($context["entry_date_start"] ?? null);
        yield "</td>
                      <td class=\"text-start\">";
        // line 1191
        yield ($context["entry_date_end"] ?? null);
        yield "</td>
                      <td class=\"text-center\">";
        // line 1192
        if (($context["master_id"] ?? null)) {
            // line 1193
            yield "                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_special]\" value=\"1\" id=\"input-variant-special\" data-oc-toggle=\"switch\" data-oc-target=\"#product-special\" class=\"form-check-input\"";
            // line 1194
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_special", [], "any", false, false, false, 1194)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-special\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1196
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1200
        $context["special_row"] = 0;
        // line 1201
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1202
            yield "                      <tr id=\"special-row-";
            yield ($context["special_row"] ?? null);
            yield "\">
                        <td class=\"text-start\"><select name=\"product_special[";
            // line 1203
            yield ($context["special_row"] ?? null);
            yield "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1204
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1205
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1205);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1205) == CoreExtension::getAttribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1205))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1205);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1207
            yield "                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_special[";
            // line 1208
            yield ($context["special_row"] ?? null);
            yield "][priority]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1208);
            yield "\" placeholder=\"";
            yield ($context["entry_priority"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_special[";
            // line 1209
            yield ($context["special_row"] ?? null);
            yield "][price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1209);
            yield "\" placeholder=\"";
            yield ($context["entry_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-start\"><input type=\"date\" name=\"product_special[";
            // line 1210
            yield ($context["special_row"] ?? null);
            yield "][date_start]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1210);
            yield "\" placeholder=\"";
            yield ($context["entry_date_start"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-start\"><input type=\"date\" name=\"product_special[";
            // line 1211
            yield ($context["special_row"] ?? null);
            yield "][date_end]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1211);
            yield "\" placeholder=\"";
            yield ($context["entry_date_end"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#special-row-";
            // line 1212
            yield ($context["special_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1214
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1215
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1216
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-special\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1220
        yield ($context["button_special_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1229
        yield ($context["text_image"] ?? null);
        yield "</legend>
                <div id=\"image\" class=\"border rounded d-block\" style=\"max-width: 300px;\">
                  <img src=\"";
        // line 1231
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"image\" value=\"";
        yield ($context["image"] ?? null);
        yield "\" id=\"input-image\"/>
                  <div class=\"d-grid\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 1233
        yield ($context["button_edit"] ?? null);
        yield "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 1234
        yield ($context["button_clear"] ?? null);
        yield "</button>
                    ";
        // line 1235
        if (($context["master_id"] ?? null)) {
            // line 1236
            yield "                      <div class=\"mx-auto w-25\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[image]\" value=\"1\" id=\"input-variant-image\" data-oc-toggle=\"switch\" data-oc-target=\"#image\" class=\"form-check-input\"";
            // line 1238
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "image", [], "any", false, false, false, 1238)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-image\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 1242
        yield "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1246
        yield ($context["text_image_additional"] ?? null);
        yield "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-image\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-start\">";
        // line 1251
        yield ($context["entry_image"] ?? null);
        yield "</td>
                        <td class=\"text-start\">";
        // line 1252
        yield ($context["entry_sort_order"] ?? null);
        yield "</td>
                        <td class=\"text-end\">
                          ";
        // line 1254
        if (($context["master_id"] ?? null)) {
            // line 1255
            yield "                            <div class=\"form-check form-switch\">
                              <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-oc-toggle=\"switch\" data-oc-target=\"#product-image\" class=\"form-check-input\"";
            // line 1256
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_image", [], "any", false, false, false, 1256)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-image\" class=\"form-check-label\"></label>
                            </div>
                          ";
        }
        // line 1258
        yield "</td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1262
        $context["image_row"] = 0;
        // line 1263
        yield "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1264
            yield "                        <tr id=\"product-image-row-";
            yield ($context["image_row"] ?? null);
            yield "\">
                          <td>
                            <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                              <img src=\"";
            // line 1267
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1267);
            yield "\" alt=\"\" title=\"\" id=\"product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-placeholder=\"";
            yield ($context["placeholder"] ?? null);
            yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[";
            yield ($context["image_row"] ?? null);
            yield "][image]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1267);
            yield "\" id=\"input-product-image-";
            yield ($context["image_row"] ?? null);
            yield "\"/>
                              <div class=\"d-grid\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-";
            // line 1269
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-thumb=\"#product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
            yield ($context["button_edit"] ?? null);
            yield "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-";
            // line 1270
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-thumb=\"#product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
            yield ($context["button_clear"] ?? null);
            yield "</button>
                              </div>
                            </div>
                          </td>
                          <td class=\"text-start\"><input type=\"text\" name=\"product_image[";
            // line 1274
            yield ($context["image_row"] ?? null);
            yield "][sort_order]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1274);
            yield "\" placeholder=\"";
            yield ($context["entry_sort_order"] ?? null);
            yield "\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#product-image-row-";
            // line 1275
            yield ($context["image_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                        ";
            // line 1277
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1278
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1279
        yield "                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-end\"><button type=\"button\" id=\"button-image\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1283
        yield ($context["button_image_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1293
        yield ($context["text_reward"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">";
        // line 1295
        yield ($context["entry_points"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"points\" value=\"";
        // line 1298
        yield ($context["points"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_points"] ?? null);
        yield "\" id=\"input-points\" class=\"form-control\"/>
                      ";
        // line 1299
        if (($context["master_id"] ?? null)) {
            // line 1300
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-oc-toggle=\"switch\" data-oc-target=\"#input-points\" class=\"form-check-input\"";
            // line 1302
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "points", [], "any", false, false, false, 1302)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-points\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 1306
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 1307
        yield ($context["help_points"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1312
        yield ($context["text_points"] ?? null);
        yield "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-reward\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-start\">";
        // line 1317
        yield ($context["entry_customer_group"] ?? null);
        yield "</td>
                        <td class=\"text-end\">";
        // line 1318
        yield ($context["entry_reward"] ?? null);
        yield "&nbsp;&nbsp;";
        if (($context["master_id"] ?? null)) {
            // line 1319
            yield "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-oc-toggle=\"switch\" data-oc-target=\"#product-reward\" class=\"form-check-input\"";
            // line 1320
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_reward", [], "any", false, false, false, 1320)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-reward\" class=\"form-check-label\"></label>
                          </div>
                          ";
        }
        // line 1322
        yield "</td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1326
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1327
            yield "                        <tr>
                          <td class=\"text-start\">";
            // line 1328
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1328);
            yield "</td>
                          <td class=\"text-end\"><input type=\"text\" name=\"product_reward[";
            // line 1329
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1329);
            yield "][points]\" value=\"";
            yield (((($__internal_compile_51 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1329)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_52 = ($context["product_reward"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1329)] ?? null) : null), "points", [], "any", false, false, false, 1329)) : (""));
            yield "\" class=\"form-control\"/></td>
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1332
        yield "                    </tbody>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 1339
        yield ($context["text_keyword"] ?? null);
        yield "</div>
              <div id=\"product-seo\" class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1344
        yield ($context["entry_store"] ?? null);
        yield "</td>
                      <td class=\"text-start\">";
        // line 1345
        yield ($context["entry_keyword"] ?? null);
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1349
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1350
            yield "                      <tr>
                        <td class=\"text-start\">";
            // line 1351
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1351);
            yield "</td>
                        <td class=\"text-start\">
                          ";
            // line 1353
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1354
                yield "                            <div class=\"input-group\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 1355
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1355);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1355);
                yield "\"/></div>
                              <input type=\"text\" name=\"product_seo_url[";
                // line 1356
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1356);
                yield "][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1356);
                yield "]\" value=\"";
                if ((($__internal_compile_53 = (($__internal_compile_54 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1356)] ?? null) : null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1356)] ?? null) : null)) {
                    yield (($__internal_compile_55 = (($__internal_compile_56 = ($context["product_seo_url"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1356)] ?? null) : null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1356)] ?? null) : null);
                }
                yield "\" id=\"input-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1356);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1356);
                yield "\" placeholder=\"";
                yield ($context["entry_keyword"] ?? null);
                yield "\" class=\"form-control\"/>
                            </div>
                            <div id=\"error-keyword-";
                // line 1358
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1358);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1358);
                yield "\" class=\"invalid-feedback\"></div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1359
            yield "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1362
        yield "                  </tbody>
                </table>
              </div>
            </div>

            <div id=\"tab-design\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-layout\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">";
        // line 1372
        yield ($context["entry_store"] ?? null);
        yield "</td>
                      <td class=\"text-start\">";
        // line 1373
        yield ($context["entry_layout"] ?? null);
        if (($context["master_id"] ?? null)) {
            // line 1374
            yield "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-oc-toggle=\"switch\" data-oc-target=\"#product-layout\" class=\"form-check-input\"";
            // line 1375
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_layout", [], "any", false, false, false, 1375)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-layout\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1377
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1381
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1382
            yield "                      <tr>
                        <td class=\"text-start\">";
            // line 1383
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1383);
            yield "</td>
                        <td class=\"text-start\"><select name=\"product_layout[";
            // line 1384
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1384);
            yield "]\" class=\"form-select\">
                            <option value=\"\"></option>
                            ";
            // line 1386
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1387
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1387);
                yield "\"";
                if (((($__internal_compile_57 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1387)] ?? null) : null) && ((($__internal_compile_58 = ($context["product_layout"] ?? null)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1387)] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1387)))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1387);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1389
            yield "                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1392
        yield "                  </tbody>
                </table>
              </div>
            </div>

            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1399
        yield ($context["text_report"] ?? null);
        yield "</legend>
                <div id=\"report\">";
        // line 1400
        yield ($context["report"] ?? null);
        yield "</div>
              </fieldset>
            </div>

          </div>
          <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 1405
        yield ($context["product_id"] ?? null);
        yield "\" id=\"input-product-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '";
        // line 1413
        yield ($context["ckeditor"] ?? null);
        yield "'
});

// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token=";
        // line 1420
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    manufacturer_id: 0,
                    name: '";
        // line 1425
        yield ($context["text_none"] ?? null);
        yield "'
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-manufacturer').val(item['label']);
        \$('#input-manufacturer-id').val(item['value']);
    }
});

// Category
\$('#input-category').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token=";
        // line 1447
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-category').val('');

        \$('#product-category-' + item['value']).remove();

        html = '<tr id=\"product-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-category tbody').append(html);
    }
});

\$('#product-category').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Filter
\$('#input-filter').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/filter.autocomplete&user_token=";
        // line 1481
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['filter_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-filter').val('');

        \$('#product-filter-' + item['value']).remove();

        html = '<tr id=\"product-filter-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-filter tbody').append(html);
    }
});

\$('#product-filter').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Downloads
\$('#input-download').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/download.autocomplete&user_token=";
        // line 1515
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['download_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-download').val('');

        \$('#product-download-' + item['value']).remove();

        html = '<tr id=\"product-download-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-download tbody').append(html);
    }
});

\$('#product-download').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Related
\$('#input-related').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 1549
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-related').val('');

        \$('#product-related-' + item['value']).remove();

        html = '<tr id=\"product-related-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-related tbody').append(html);
    }
});

\$('#product-related').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

var attributeautocomplete = function(attribute_row) {
    \$('#input-attribute-' + attribute_row).autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/attribute.autocomplete&user_token=";
        // line 1583
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            category: item.attribute_group,
                            label: item.name,
                            value: item.attribute_id
                        }
                    }));
                }
            });
        },
        'select': function(item) {
            \$('#input-attribute-' + attribute_row).val(item['label']);
            \$('#input-attribute-id-' + attribute_row).val(item['value']);
        }
    });
}

var attribute_row = ";
        // line 1603
        yield ($context["attribute_row"] ?? null);
        yield ";

\$('#product-attribute tr').each(function(index) {
    attributeautocomplete(index);
});

\$('#button-attribute').on('click', function() {
    html = '<tr id=\"attribute-row-' + attribute_row + '\">';
    html += '  <td class=\"text-start\">';
    html += '    <input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1612
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_attribute"] ?? null), "js");
        yield "\" id=\"input-attribute-' + attribute_row + '\" data-oc-target=\"autocomplete-attribute-' + attribute_row + '\" class=\"form-control\" autocomplete=\"off\"/>';
    html += '    <input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" id=\"input-attribute-id-' + attribute_row + '\"/>';
    html += '    <ul id=\"autocomplete-attribute-' + attribute_row + '\" class=\"dropdown-menu\"></ul>';
    html += '  </td>';
    html += '  <td class=\"text-start\">';
  ";
        // line 1617
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1618
            yield "    html += '<div class=\"input-group\">';
    html += '  <div class=\"input-group-text\"><img src=\"";
            // line 1619
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1619);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1619), "js");
            yield "\" /></div>';
    html += '  <textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            // line 1620
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1620);
            yield "][text]\" rows=\"5\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_text"] ?? null), "js");
            yield "\" id=\"input-text-' + attribute_row + '-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1620);
            yield "\" class=\"form-control\"></textarea>';
    html += '</div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1623
        yield "    html += '  </td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#attribute-row-' + attribute_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-attribute').append(html);

    attributeautocomplete(attribute_row);

    attribute_row++;
});

";
        // line 1634
        if ( !($context["master_id"] ?? null)) {
            // line 1635
            yield "var option_row = ";
            yield ($context["option_row"] ?? null);
            yield ";

\$('#input-option').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/option.autocomplete&user_token=";
            // line 1640
            yield ($context["user_token"] ?? null);
            yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        category: item['category'],
                        label: item['name'],
                        value: item['option_id'],
                        type: item['type'],
                        option_value: item['option_value']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        html = '<fieldset id=\"option-row-' + option_row + '\">';
        html += '  <legend class=\"float-none\">' + item['label'] + '</legend>';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

        html += '  <div class=\"row align-items-center\">';
        html += '    <div class=\"col-11\">';

        html += '      <div class=\"mb-3\">';
        html += '        <label for=\"input-required-' + option_row + '\" class=\"form-label\">";
            // line 1667
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_required"] ?? null), "js");
            yield "</label>';
        html += '\t       <select name=\"product_option[' + option_row + '][required]\" id=\"input-required-' + option_row + '\" class=\"form-select\">';
        html += '\t         <option value=\"1\">";
            // line 1669
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "</option>';
        html += '\t         <option value=\"0\">";
            // line 1670
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "</option>';
        html += '\t       </select>';
        html += '      </div>';

        if (item['type'] == 'text') {
            html += '  <div class=\"mb-3\">';
            html += '     <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1676
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '     <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1677
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '\t </div>';
        }

        if (item['type'] == 'textarea') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1683
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
            // line 1684
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"></textarea>';
            html += '\t </div>';
        }

        if (item['type'] == 'file') {
            html += '  <div class=\"mb-3 d-none\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1690
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1691
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'date') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1697
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"date\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1698
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'time') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1704
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"time\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1705
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'datetime') {
            html += '\t <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1711
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"datetime-local\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1712
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
            html += '<div class=\"table-responsive\">';
            html += '  <table class=\"table table-bordered table-hover\">';
            html += '  \t <thead>';
            html += '      <tr>';
            html += '        <td class=\"text-start\">";
            // line 1721
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 1722
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-start\">";
            // line 1723
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_subtract"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 1724
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 1725
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_points"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 1726
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_weight"] ?? null), "js");
            yield "</td>';
            html += '        <td></td>';
            html += '      </tr>';
            html += '    </thead>';
            html += '    <tbody id=\"option-value-' + option_row + '\"></tbody>';
            html += '    <tfoot>';
            html += '      <tr>';
            html += '        <td colspan=\"6\"></td>';
            html += '        <td class=\"text-end\"><button type=\"button\" data-option-row=\"' + option_row + '\" data-bs-toggle=\"tooltip\" title=\"";
            // line 1734
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_option_value_add"] ?? null), "js");
            yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>';
            html += '      </tr>';
            html += '    </tfoot>';
            html += '  </table>';
            html += '</div>';

            html += '<select id=\"product-option-values-' + option_row + '\" class=\"d-none\">';

            for (i = 0; i < item['option_value'].length; i++) {
                html += '<option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '</select>';
        }

        html += '\t </div>';
        html += '\t <div class=\"col\">';
        html += '    <button type=\"button\" class=\"btn btn-danger\" onclick=\"\$(\\'#option-row-' + option_row + '\\').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>';
        html += '  </div>';
        html += '</fieldset>';

        \$('#option').append(html);

        option_row++;
    }
});

var option_value_row = ";
            // line 1761
            yield ($context["option_value_row"] ?? null);
            yield ";

\$('#option').on('click', '.btn-primary', function() {
    var element = this;

    if (\$(element).attr('data-option-value-row')) {
        element.option_value_row = \$(element).attr('data-option-value-row');
    } else {
        element.option_value_row = option_value_row;
    }

    \$('.modal').remove();

    html = '<div id=\"modal-option\" class=\"modal fade\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\"><i class=\"fa-solid fa-pencil\"></i> ";
            // line 1778
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_option_value"] ?? null), "js");
            yield "</h5> <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-option-value\" class=\"form-label\">";
            // line 1782
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
    html += '      \t   <select name=\"option_value_id\" id=\"input-modal-option-value\" class=\"form-select\">';

    option_value = \$('#product-option-values-' + \$(element).attr('data-option-row') + ' option');

    for (i = 0; i < option_value.length; i++) {
        if (\$(element).attr('data-option-value-row') && \$(option_value[i]).val() == \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\\']').val()) {
            html += '<option value=\"' + \$(option_value[i]).val() + '\" selected>' + \$(option_value[i]).text() + '</option>';
        } else {
            html += '<option value=\"' + \$(option_value[i]).val() + '\">' + \$(option_value[i]).text() + '</option>';
        }
    }

    html += '      \t   </select>';
    html += '          <input type=\"hidden\" name=\"product_option_value_id\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\\']').val() : '') + '\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-quantity\" class=\"form-label\">";
            // line 1799
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
            yield "</label>';
    html += '      \t   <input type=\"text\" name=\"quantity\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\\']').val() : '1') + '\" placeholder=\"";
            // line 1800
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
            yield "\" id=\"input-modal-quantity\" class=\"form-control\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-subtract\" class=\"form-label\">";
            // line 1803
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_subtract"] ?? null), "js");
            yield "</label>';
    html += '      \t   <select name=\"subtract\" id=\"input-modal-subtract\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\\']').val() == '1') {
        html += '        <option value=\"1\" selected>";
            // line 1807
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "</option>';
        html += '      \t <option value=\"0\">";
            // line 1808
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "</option>';
    } else {
        html += '      \t <option value=\"1\">";
            // line 1810
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "</option>';
        html += '      \t <option value=\"0\" selected>";
            // line 1811
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "</option>';
    }

    html += '      \t   </select>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-price\" class=\"form-label\">";
            // line 1817
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
            yield "</label>';
    html += '          <div class=\"input-group\">';
    html += '            <select name=\"price_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '+') {
        html += '      \t   <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t   <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"price\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\\']').val() : '0') + '\" placeholder=\"";
            // line 1834
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
            yield "\" id=\"input-modal-price\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-points\" class=\"form-label\">";
            // line 1838
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_points"] ?? null), "js");
            yield "</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"points_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"points\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\\']').val() : '0') + '\" placeholder=\"";
            // line 1855
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_points"] ?? null), "js");
            yield "\" id=\"input-modal-points\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-weight\" class=\"form-label\">";
            // line 1859
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_weight"] ?? null), "js");
            yield "</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"weight_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"weight\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\\']').val() : '0') + '\" placeholder=\"";
            // line 1876
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_weight"] ?? null), "js");
            yield "\" id=\"input-modal-weight\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '      </div>';
    html += '      <div class=\"modal-footer\">';
    html += '\t       <button type=\"button\" id=\"button-save\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\" class=\"btn btn-primary\">";
            // line 1881
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_save"] ?? null), "js");
            yield "</button> <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_cancel"] ?? null), "js");
            yield "</button>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-option').modal('show');

    \$('#modal-option #button-save').on('click', function() {
        html = '<tr id=\"option-value-row-' + element.option_value_row + '\">';
        html += '  <td class=\"text-start\">' + \$('#modal-option select[name=\\'option_value_id\\'] option:selected').text() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\" value=\"' + \$('#modal-option select[name=\\'option_value_id\\']').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\" value=\"' + \$('#modal-option input[name=\\'product_option_value_id\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option input[name=\\'quantity\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\" value=\"' + \$('#modal-option input[name=\\'quantity\\']').val() + '\"/></td>';
        html += '  <td class=\"text-start\">' + (\$('#modal-option select[name=\\'subtract\\'] option:selected').val() == '1' ? '";
            // line 1895
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "' : '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "') + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\" value=\"' + \$('#modal-option select[name=\\'subtract\\'] option:selected').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'price\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\" value=\"' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\" value=\"' + \$('#modal-option input[name=\\'price\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"> ' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'points\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\" value=\"' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\" value=\"' + \$('#modal-option input[name=\\'points\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'weight\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\" value=\"' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\" value=\"' + \$('#modal-option input[name=\\'weight\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
            // line 1899
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_edit"] ?? null), "js");
            yield "\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\"class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$(\\'#option-value-row-' + element.option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        if (\$(element).attr('data-option-value-row')) {
            \$('#option-value-row-' + element.option_value_row).replaceWith(html);
        } else {
            \$('#option-value-' + \$(element).attr('data-option-row')).append(html);

            option_value_row++;
        }

        \$('#modal-option').modal('hide');
    });
});
";
        }
        // line 1914
        yield "
var discount_row = ";
        // line 1915
        yield ($context["discount_row"] ?? null);
        yield ";

\$('#button-discount').on('click', function() {
    html = '<tr id=\"discount-row-' + discount_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 1920
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1921
            yield "    html += '    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1921);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1921), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1923
        yield "    html += '  </select><input type=\"hidden\" name=\"product_discount[' + discount_row + '][product_discount_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1924
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1925
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_priority"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1926
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-start\"><input type=\"date\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1927
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_date_start"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-start\"><input type=\"date\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1928
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_date_end"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#discount-row-' + discount_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1929
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-discount tbody').append(html);

    discount_row++;
});

var special_row = ";
        // line 1937
        yield ($context["special_row"] ?? null);
        yield ";

\$('#button-special').on('click', function() {
    html = '<tr id=\"special-row-' + special_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 1942
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1943
            yield "    html += '      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1943);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1943), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1945
        yield "    html += '  </select><input type=\"hidden\" name=\"product_special[' + special_row + '][product_special_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1946
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_priority"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1947
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-start\"><input type=\"date\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1948
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_date_start"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-start\"><input type=\"date\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1949
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_date_end"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#special-row-' + special_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1950
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-special tbody').append(html);

    special_row++;
});

var image_row = ";
        // line 1958
        yield ($context["image_row"] ?? null);
        yield ";

\$('#button-image').on('click', function() {
    html = '<tr id=\"product-image-row-' + image_row + '\">';
    html += '  <td><div class=\"border rounded d-block\" style=\"max-width: 300px;\">';
    html += '    <img src=\"";
        // line 1963
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" alt=\"\" title=\"\" id=\"thumb-image-' + image_row + '\" data-oc-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-product-image-' + image_row + '\"/>';
    html += '    <div class=\"d-grid\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-primary rounded-0k\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 1965
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_edit"] ?? null), "js");
        yield "</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 1966
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_clear"] ?? null), "js");
        yield "</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td class=\"text-start\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"0\" placeholder=\"";
        // line 1969
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_sort_order"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#product-image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1970
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-image tbody').append(html);

    image_row++;
});

var subscription_row = ";
        // line 1978
        yield ($context["subscription_row"] ?? null);
        yield ";

\$('#button-subscription').on('click', function() {
    html = '<tr id=\"subscription-row-' + subscription_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_subscription[' + subscription_row + '][subscription_plan_id]\" class=\"form-select\">';
  ";
        // line 1983
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
            // line 1984
            yield "    html += '      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1984);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 1984), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1986
        yield "    html += '  </select></td>';
    html += '  <td class=\"text-start\"><select name=\"product_subscription[' + subscription_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 1988
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1989
            yield "    html += '      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1989);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1989), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1991
        yield "    html += '  <select></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][trial_price]\" value=\"\" placeholder=\"";
        // line 1992
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_trial_price"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][price]\" value=\"\" placeholder=\"";
        // line 1993
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#subscription-row-' + subscription_row + '\\').remove()\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1994
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-subscription tbody').append(html);

    subscription_row++;
});

";
        // line 2002
        if (($context["master_id"] ?? null)) {
            // line 2003
            yield "// Variable products
\$('input[data-oc-toggle=\\'switch\\']').on('change', function(e) {
    var element = this;

    var target = \$(this).attr('data-oc-target');

    // First we need to grab the default values
    // Now we need to enable or disable any fields in the targets
    \$.merge(\$(target), \$(target).find('input, textarea, select, button')).not('[data-oc-toggle=\\'switch\\']').each(function(i, elem) {
        // Text Textarea
        if (\$(this).is('input[type=\\'text\\'], textarea')) {
            \$(this).prop('readonly', !\$(element).prop('checked'));
        }

        // CKEditor readonly
        if (\$(this).is('[data-oc-toggle=\\'ckeditor\\']')) {
            var editor = CKEDITOR.instances[\$(this).attr('id')];

            if (editor.editable() == undefined) {
                editor.on('instanceReady', function() {
                    this.setReadOnly(!\$(element).prop('checked'));
                });
            } else {
                editor.setReadOnly(!\$(element).prop('checked'));
            }
        }

        // Radio Checkbox
        if (\$(this).is('input[type=\\'radio\\'], input[type=\\'checkbox\\'], div[data-bs-toggle=\\'buttons\\']')) {
            if (!\$(element).prop('checked')) {
                \$(this).on('click', function(e) {
                    return false;
                });
            } else {
                \$(this).off('click');
            }
        }

        // Select
        if (\$(this).is('select')) {
            if (!\$(element).prop('checked')) {
                \$(this).addClass('.disabled');

                \$(this).prop('readonly', true);
            } else {
                \$(this).removeClass('disabled');

                \$(this).prop('readonly', false);
            }

            \$(this).find('option').not(':selected').prop('disabled', !\$(element).prop('checked'));
        }

        // Button
        if (\$(this).is('button')) {
            if (!\$(element).prop('checked')) {
                \$(this).prop('disabled', true);
            } else {
                \$(this).prop('disabled', false);
            }
        }
    });
});

\$('input[data-oc-toggle=\\'switch\\']').trigger('change');
";
        }
        // line 2069
        yield "
\$('#report').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#report').load(this.href);
});
//--></script>
";
        // line 2076
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
        return "admin/view/template/catalog/product_form.twig";
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
        return array (  5071 => 2076,  5062 => 2069,  4994 => 2003,  4992 => 2002,  4981 => 1994,  4977 => 1993,  4973 => 1992,  4970 => 1991,  4959 => 1989,  4955 => 1988,  4951 => 1986,  4940 => 1984,  4936 => 1983,  4928 => 1978,  4917 => 1970,  4913 => 1969,  4907 => 1966,  4903 => 1965,  4896 => 1963,  4888 => 1958,  4877 => 1950,  4873 => 1949,  4869 => 1948,  4865 => 1947,  4861 => 1946,  4858 => 1945,  4847 => 1943,  4843 => 1942,  4835 => 1937,  4824 => 1929,  4820 => 1928,  4816 => 1927,  4812 => 1926,  4808 => 1925,  4804 => 1924,  4801 => 1923,  4790 => 1921,  4786 => 1920,  4778 => 1915,  4775 => 1914,  4755 => 1899,  4746 => 1895,  4727 => 1881,  4719 => 1876,  4699 => 1859,  4692 => 1855,  4672 => 1838,  4665 => 1834,  4645 => 1817,  4636 => 1811,  4632 => 1810,  4627 => 1808,  4623 => 1807,  4616 => 1803,  4610 => 1800,  4606 => 1799,  4586 => 1782,  4579 => 1778,  4559 => 1761,  4529 => 1734,  4518 => 1726,  4514 => 1725,  4510 => 1724,  4506 => 1723,  4502 => 1722,  4498 => 1721,  4486 => 1712,  4482 => 1711,  4473 => 1705,  4469 => 1704,  4460 => 1698,  4456 => 1697,  4447 => 1691,  4443 => 1690,  4434 => 1684,  4430 => 1683,  4421 => 1677,  4417 => 1676,  4408 => 1670,  4404 => 1669,  4399 => 1667,  4369 => 1640,  4360 => 1635,  4358 => 1634,  4345 => 1624,  4342 => 1623,  4329 => 1620,  4323 => 1619,  4320 => 1618,  4316 => 1617,  4308 => 1612,  4296 => 1603,  4273 => 1583,  4236 => 1549,  4199 => 1515,  4162 => 1481,  4125 => 1447,  4100 => 1425,  4092 => 1420,  4082 => 1413,  4071 => 1405,  4063 => 1400,  4059 => 1399,  4050 => 1392,  4042 => 1389,  4027 => 1387,  4023 => 1386,  4018 => 1384,  4014 => 1383,  4011 => 1382,  4007 => 1381,  4001 => 1377,  3993 => 1375,  3990 => 1374,  3987 => 1373,  3983 => 1372,  3971 => 1362,  3963 => 1359,  3953 => 1358,  3936 => 1356,  3930 => 1355,  3927 => 1354,  3923 => 1353,  3918 => 1351,  3915 => 1350,  3911 => 1349,  3904 => 1345,  3900 => 1344,  3892 => 1339,  3883 => 1332,  3872 => 1329,  3868 => 1328,  3865 => 1327,  3861 => 1326,  3855 => 1322,  3847 => 1320,  3844 => 1319,  3840 => 1318,  3836 => 1317,  3828 => 1312,  3820 => 1307,  3817 => 1306,  3808 => 1302,  3804 => 1300,  3802 => 1299,  3796 => 1298,  3790 => 1295,  3785 => 1293,  3772 => 1283,  3766 => 1279,  3760 => 1278,  3758 => 1277,  3751 => 1275,  3743 => 1274,  3732 => 1270,  3724 => 1269,  3709 => 1267,  3702 => 1264,  3697 => 1263,  3695 => 1262,  3689 => 1258,  3681 => 1256,  3678 => 1255,  3676 => 1254,  3671 => 1252,  3667 => 1251,  3659 => 1246,  3653 => 1242,  3644 => 1238,  3640 => 1236,  3638 => 1235,  3634 => 1234,  3630 => 1233,  3621 => 1231,  3616 => 1229,  3604 => 1220,  3598 => 1216,  3592 => 1215,  3590 => 1214,  3583 => 1212,  3575 => 1211,  3567 => 1210,  3559 => 1209,  3551 => 1208,  3548 => 1207,  3533 => 1205,  3529 => 1204,  3525 => 1203,  3520 => 1202,  3515 => 1201,  3513 => 1200,  3507 => 1196,  3499 => 1194,  3496 => 1193,  3494 => 1192,  3490 => 1191,  3486 => 1190,  3482 => 1189,  3478 => 1188,  3474 => 1187,  3459 => 1175,  3453 => 1171,  3447 => 1170,  3445 => 1169,  3438 => 1167,  3430 => 1166,  3422 => 1165,  3414 => 1164,  3406 => 1163,  3398 => 1162,  3395 => 1161,  3380 => 1159,  3376 => 1158,  3372 => 1157,  3367 => 1156,  3362 => 1155,  3360 => 1154,  3354 => 1150,  3346 => 1148,  3343 => 1147,  3341 => 1146,  3337 => 1145,  3333 => 1144,  3329 => 1143,  3325 => 1142,  3321 => 1141,  3317 => 1140,  3302 => 1128,  3296 => 1124,  3290 => 1123,  3288 => 1122,  3281 => 1120,  3273 => 1119,  3265 => 1118,  3262 => 1117,  3247 => 1115,  3243 => 1114,  3239 => 1113,  3236 => 1112,  3221 => 1110,  3217 => 1109,  3213 => 1108,  3208 => 1107,  3203 => 1106,  3201 => 1105,  3195 => 1101,  3187 => 1099,  3184 => 1098,  3182 => 1097,  3177 => 1095,  3173 => 1094,  3169 => 1093,  3165 => 1092,  3157 => 1086,  3146 => 1077,  3139 => 1075,  3132 => 1071,  3115 => 1067,  3105 => 1064,  3097 => 1061,  3090 => 1060,  3088 => 1059,  3084 => 1057,  3077 => 1053,  3060 => 1049,  3052 => 1046,  3048 => 1045,  3041 => 1043,  3034 => 1042,  3032 => 1041,  3028 => 1039,  3021 => 1035,  3004 => 1031,  2994 => 1028,  2986 => 1025,  2979 => 1024,  2977 => 1023,  2973 => 1021,  2966 => 1017,  2949 => 1013,  2937 => 1010,  2927 => 1009,  2919 => 1008,  2905 => 1007,  2899 => 1004,  2892 => 1003,  2890 => 1002,  2886 => 1000,  2879 => 996,  2862 => 992,  2850 => 989,  2842 => 986,  2835 => 985,  2833 => 984,  2829 => 982,  2822 => 978,  2805 => 974,  2793 => 971,  2785 => 968,  2778 => 967,  2776 => 966,  2772 => 964,  2765 => 960,  2748 => 956,  2743 => 953,  2735 => 950,  2728 => 949,  2726 => 948,  2721 => 947,  2693 => 946,  2690 => 945,  2686 => 944,  2682 => 943,  2676 => 940,  2669 => 939,  2667 => 938,  2663 => 936,  2656 => 932,  2639 => 928,  2634 => 925,  2626 => 922,  2619 => 921,  2617 => 920,  2612 => 919,  2596 => 918,  2582 => 917,  2579 => 916,  2575 => 915,  2571 => 914,  2565 => 911,  2558 => 910,  2556 => 909,  2552 => 907,  2545 => 903,  2528 => 899,  2523 => 896,  2516 => 894,  2509 => 893,  2507 => 892,  2496 => 891,  2492 => 890,  2488 => 889,  2482 => 888,  2476 => 885,  2469 => 884,  2467 => 883,  2461 => 880,  2458 => 879,  2454 => 878,  2451 => 877,  2442 => 871,  2437 => 869,  2432 => 867,  2427 => 865,  2423 => 863,  2417 => 862,  2415 => 861,  2406 => 857,  2401 => 854,  2396 => 851,  2393 => 850,  2382 => 848,  2377 => 847,  2375 => 846,  2371 => 845,  2362 => 841,  2356 => 837,  2350 => 836,  2348 => 835,  2335 => 833,  2321 => 832,  2316 => 831,  2302 => 830,  2297 => 829,  2283 => 828,  2278 => 827,  2269 => 826,  2263 => 824,  2257 => 822,  2255 => 821,  2245 => 820,  2231 => 819,  2227 => 818,  2222 => 817,  2218 => 816,  2214 => 815,  2207 => 811,  2203 => 810,  2199 => 809,  2195 => 808,  2191 => 807,  2187 => 806,  2181 => 802,  2179 => 801,  2176 => 800,  2164 => 797,  2158 => 796,  2155 => 795,  2153 => 794,  2150 => 793,  2138 => 790,  2132 => 789,  2129 => 788,  2127 => 787,  2124 => 786,  2112 => 783,  2106 => 782,  2103 => 781,  2101 => 780,  2098 => 779,  2086 => 776,  2080 => 775,  2077 => 774,  2075 => 773,  2072 => 772,  2060 => 769,  2054 => 768,  2051 => 767,  2049 => 766,  2046 => 765,  2034 => 762,  2028 => 761,  2025 => 760,  2023 => 759,  2012 => 755,  2004 => 754,  1998 => 753,  1992 => 752,  1969 => 746,  1965 => 745,  1961 => 744,  1958 => 743,  1953 => 742,  1950 => 741,  1948 => 740,  1942 => 736,  1940 => 735,  1931 => 729,  1925 => 725,  1919 => 724,  1917 => 723,  1910 => 721,  1907 => 720,  1888 => 718,  1882 => 717,  1879 => 716,  1875 => 715,  1870 => 713,  1858 => 712,  1850 => 711,  1843 => 708,  1838 => 707,  1836 => 706,  1830 => 702,  1822 => 700,  1819 => 699,  1817 => 698,  1812 => 696,  1808 => 695,  1796 => 686,  1793 => 685,  1784 => 681,  1780 => 679,  1778 => 678,  1773 => 675,  1761 => 671,  1756 => 670,  1752 => 669,  1743 => 663,  1738 => 661,  1731 => 657,  1728 => 656,  1719 => 652,  1715 => 650,  1713 => 649,  1708 => 646,  1696 => 642,  1691 => 641,  1687 => 640,  1678 => 634,  1673 => 632,  1667 => 628,  1658 => 624,  1654 => 622,  1652 => 621,  1649 => 620,  1630 => 617,  1627 => 616,  1623 => 615,  1616 => 611,  1609 => 607,  1606 => 606,  1597 => 602,  1593 => 600,  1591 => 599,  1586 => 596,  1574 => 592,  1569 => 591,  1565 => 590,  1556 => 584,  1551 => 582,  1544 => 578,  1541 => 577,  1532 => 573,  1528 => 571,  1526 => 570,  1521 => 567,  1509 => 563,  1504 => 562,  1500 => 561,  1491 => 555,  1486 => 553,  1479 => 549,  1474 => 547,  1471 => 546,  1462 => 542,  1458 => 540,  1456 => 539,  1450 => 538,  1444 => 535,  1435 => 528,  1426 => 524,  1422 => 522,  1420 => 521,  1414 => 520,  1408 => 517,  1402 => 513,  1393 => 509,  1389 => 507,  1387 => 506,  1380 => 504,  1373 => 500,  1367 => 496,  1358 => 492,  1354 => 490,  1352 => 489,  1349 => 488,  1334 => 486,  1330 => 485,  1323 => 481,  1317 => 477,  1308 => 473,  1304 => 471,  1302 => 470,  1296 => 469,  1290 => 466,  1284 => 462,  1275 => 458,  1271 => 456,  1269 => 455,  1266 => 454,  1251 => 452,  1247 => 451,  1240 => 447,  1234 => 443,  1225 => 439,  1221 => 437,  1219 => 436,  1212 => 435,  1203 => 431,  1199 => 429,  1197 => 428,  1190 => 427,  1181 => 423,  1177 => 421,  1175 => 420,  1169 => 419,  1163 => 416,  1157 => 412,  1148 => 408,  1144 => 406,  1142 => 405,  1135 => 403,  1128 => 399,  1123 => 397,  1116 => 392,  1106 => 387,  1102 => 385,  1100 => 384,  1094 => 383,  1088 => 380,  1081 => 376,  1078 => 375,  1069 => 371,  1065 => 369,  1063 => 368,  1060 => 367,  1045 => 365,  1041 => 364,  1034 => 360,  1028 => 356,  1019 => 352,  1015 => 350,  1013 => 349,  1006 => 347,  999 => 343,  992 => 339,  989 => 338,  980 => 334,  976 => 332,  974 => 331,  968 => 330,  962 => 327,  953 => 323,  948 => 321,  943 => 319,  936 => 314,  927 => 310,  923 => 308,  921 => 307,  918 => 306,  903 => 304,  899 => 303,  895 => 302,  888 => 298,  882 => 294,  873 => 290,  869 => 288,  867 => 287,  861 => 286,  855 => 283,  850 => 281,  843 => 276,  834 => 272,  830 => 270,  828 => 269,  822 => 268,  816 => 265,  809 => 261,  806 => 260,  797 => 256,  793 => 254,  791 => 253,  785 => 252,  779 => 249,  772 => 245,  769 => 244,  760 => 240,  756 => 238,  754 => 237,  748 => 236,  742 => 233,  735 => 229,  732 => 228,  723 => 224,  719 => 222,  717 => 221,  711 => 220,  705 => 217,  698 => 213,  695 => 212,  686 => 208,  682 => 206,  680 => 205,  674 => 204,  668 => 201,  661 => 197,  658 => 196,  649 => 192,  645 => 190,  643 => 189,  637 => 188,  631 => 185,  624 => 181,  621 => 180,  612 => 176,  608 => 174,  606 => 173,  600 => 172,  594 => 169,  587 => 164,  578 => 160,  574 => 158,  572 => 157,  566 => 156,  560 => 153,  555 => 151,  550 => 149,  545 => 146,  526 => 141,  523 => 140,  506 => 136,  502 => 134,  500 => 133,  490 => 132,  482 => 129,  476 => 125,  459 => 121,  455 => 119,  453 => 118,  443 => 117,  435 => 114,  429 => 110,  412 => 106,  408 => 104,  406 => 103,  396 => 102,  388 => 99,  381 => 95,  378 => 94,  361 => 90,  357 => 88,  355 => 87,  345 => 86,  337 => 83,  331 => 79,  314 => 75,  310 => 73,  308 => 72,  295 => 70,  286 => 66,  279 => 62,  276 => 61,  259 => 57,  255 => 55,  253 => 54,  243 => 53,  235 => 50,  225 => 48,  208 => 47,  204 => 45,  177 => 43,  160 => 42,  152 => 37,  148 => 36,  144 => 35,  140 => 34,  136 => 33,  132 => 32,  128 => 31,  124 => 30,  120 => 29,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  99 => 23,  94 => 21,  91 => 20,  85 => 18,  83 => 17,  77 => 13,  66 => 11,  62 => 10,  57 => 8,  51 => 7,  47 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-product\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
    {% if master_id %}
      <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ text_variant }}</div>
    {% endif %}
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-product\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_data }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-links\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_links }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-attribute\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_attribute }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_option }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-subscription\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_subscription }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-discount\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_discount }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-special\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_special }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_image }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_reward }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-seo\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_seo }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-design\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_design }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_report }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\">
                {% for language in languages %}
                  <li class=\"nav-item\"><a href=\"#language-{{ language.language_id }}\" data-bs-toggle=\"tab\" class=\"nav-link{% if loop.first %} active{% endif %}\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/> {{ language.name }}</a></li>
                {% endfor %}
              </ul>
              <div class=\"tab-content\">
                {% for language in languages %}
                  <div id=\"language-{{ language.language_id }}\" class=\"tab-pane{% if loop.first %} active{% endif %}\">
                    <div class=\"row mb-3 required\">
                      <label for=\"input-name-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[{{ language.language_id }}][name]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name-{{ language.language_id }}\" class=\"form-control\"/>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][name]\" value=\"1\" id=\"input-variant-name-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-name-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].name %} checked{% endif %}/> <label for=\"input-variant-name-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                        <div id=\"error-name-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <div class=\"form-control h-100 p-0 border-0 rounded-0\">
                            <textarea name=\"product_description[{{ language.language_id }}][description]\" placeholder=\"{{ entry_description }}\" id=\"input-description-{{ language.language_id }}\" data-oc-toggle=\"ckeditor\" data-lang=\"{{ ckeditor }}\" class=\"w-100 position-relative\">{{ product_description[language.language_id] ? product_description[language.language_id].description }}</textarea>
                          </div>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][description]\" value=\"1\" id=\"input-variant-description-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-description-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].description %} checked{% endif %}/> <label for=\"input-variant-description-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3 required\">
                      <label for=\"input-meta-title-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_title }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[{{ language.language_id }}][meta_title]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title-{{ language.language_id }}\" class=\"form-control\"/>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][meta_title]\" value=\"1\" id=\"input-variant-meta-title-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-title-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].meta_title %} checked{% endif %}/> <label for=\"input-variant-meta-title-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                        <div id=\"error-meta-title-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_description }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[{{ language.language_id }}][meta_description]\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description-{{ language.language_id }}\" class=\"form-control\">{{ product_description[language.language_id] ? product_description[language.language_id].meta_description }}</textarea>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][meta_description]\" value=\"1\" id=\"input-variant-meta-description-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-description-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].meta_description %} checked{% endif %}/> <label for=\"input-variant-meta-description-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-keyword-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_keyword }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[{{ language.language_id }}][meta_keyword]\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword-{{ language.language_id }}\" class=\"form-control\">{{ product_description[language.language_id] ? product_description[language.language_id].meta_keyword }}</textarea>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-keyword-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].meta_keyword %} checked{% endif %}/> <label for=\"input-variant-meta-keyword-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-tag-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_tag }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[{{ language.language_id }}][tag]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].tag }}\" placeholder=\"{{ entry_tag }}\" id=\"input-tag-{{ language.language_id }}\" class=\"form-control\"/>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][tag]\" value=\"1\" id=\"input-variant-tag-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tag-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].tag %} checked{% endif %}/> <label for=\"input-variant-tag-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                        <div class=\"form-text\">{{ help_tag }}</div>
                      </div>
                    </div>
                  </div>
                {% endfor %}
              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <input type=\"hidden\" name=\"master_id\" value=\"{{ master_id }}\"/>
              <fieldset>
                <legend>{{ text_model }}</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-model\" class=\"col-sm-2 col-form-label\">{{ entry_model }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"model\" value=\"{{ model }}\" placeholder=\"{{ entry_model }}\" id=\"input-model\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-oc-toggle=\"switch\" data-oc-target=\"#input-model\" class=\"form-check-input\"{% if override.model %} checked{% endif %}/> <label for=\"input-variant-model\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div id=\"error-model\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sku\" class=\"col-sm-2 col-form-label\">{{ entry_sku }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sku\" value=\"{{ sku }}\" placeholder=\"{{ entry_sku }}\" id=\"input-sku\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sku]\" value=\"1\" id=\"input-variant-sku\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sku\" class=\"form-check-input\"{% if override.sku %} checked{% endif %}/> <label for=\"input-variant-sku\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_sku }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-upc\" class=\"col-sm-2 col-form-label\">{{ entry_upc }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"upc\" value=\"{{ upc }}\" placeholder=\"{{ entry_upc }}\" id=\"input-upc\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[upc]\" value=\"1\" id=\"input-variant-upc\" data-oc-toggle=\"switch\" data-oc-target=\"#input-upc\" class=\"form-check-input\"{% if override.upc %} checked{% endif %}/> <label for=\"input-variant-upc\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_upc }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-ean\" class=\"col-sm-2 col-form-label\">{{ entry_ean }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"ean\" value=\"{{ ean }}\" placeholder=\"{{ entry_ean }}\" id=\"input-ean\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[ean]\" value=\"1\" id=\"input-variant-ean\" data-oc-toggle=\"switch\" data-oc-target=\"#input-ean\" class=\"form-check-input\"{% if override.ean %} checked{% endif %}/> <label for=\"input-variant-ean\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_ean }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-jan\" class=\"col-sm-2 col-form-label\">{{ entry_jan }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"jan\" value=\"{{ jan }}\" placeholder=\"{{ entry_jan }}\" id=\"input-jan\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[jan]\" value=\"1\" id=\"input-variant-jan\" data-oc-toggle=\"switch\" data-oc-target=\"#input-jan\" class=\"form-check-input\"{% if override.jan %} checked{% endif %}/> <label for=\"input-variant-jan\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_jan }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-isbn\" class=\"col-sm-2 col-form-label\">{{ entry_isbn }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"isbn\" value=\"{{ isbn }}\" placeholder=\"{{ entry_isbn }}\" id=\"input-isbn\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[isbn]\" value=\"1\" id=\"input-variant-isbn\" data-oc-toggle=\"switch\" data-oc-target=\"#input-isbn\" class=\"form-check-input\"{% if override.isbn %} checked{% endif %}/> <label for=\"input-variant-isbn\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_isbn }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mpn\" class=\"col-sm-2 col-form-label\">{{ entry_mpn }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"mpn\" value=\"{{ mpn }}\" placeholder=\"{{ entry_mpn }}\" id=\"input-mpn\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[mpn]\" value=\"1\" id=\"input-variant-mpn\" data-oc-toggle=\"switch\" data-oc-target=\"#input-mpn\" class=\"form-check-input\"{% if override.mpn %} checked{% endif %}/> <label for=\"input-variant-mpn\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_mpn }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-location\" class=\"col-sm-2 col-form-label\">{{ entry_location }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"location\" value=\"{{ location }}\" placeholder=\"{{ entry_location }}\" id=\"input-location\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-oc-toggle=\"switch\" data-oc-target=\"#input-location\" class=\"form-check-input\"{% if override.location %} checked{% endif %}/> <label for=\"input-variant-location\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_price }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-price\" class=\"col-sm-2 col-form-label\">{{ entry_price }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"price\" value=\"{{ price }}\" placeholder=\"{{ entry_price }}\" id=\"input-price\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[price]\" value=\"1\" id=\"input-variant-price\" data-oc-toggle=\"switch\" data-oc-target=\"#input-price\" class=\"form-check-input\"{% if override.price %} checked{% endif %}/> <label for=\"input-variant-price\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">{{ entry_tax_class }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                        <option value=\"0\">{{ text_none }}</option>
                        {% for tax_class in tax_classes %}
                          <option value=\"{{ tax_class.tax_class_id }}\"{% if tax_class.tax_class_id == tax_class_id %} selected{% endif %}>{{ tax_class.title }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tax-class\" class=\"form-check-input\"{% if override.tax_class_id %} checked{% endif %}/> <label for=\"input-variant-tax-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_stock }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">{{ entry_quantity }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"quantity\" value=\"{{ quantity }}\" placeholder=\"{{ entry_quantity }}\" id=\"input-quantity\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">{{ entry_minimum }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"minimum\" value=\"{{ minimum }}\" placeholder=\"{{ entry_minimum }}\" id=\"input-minimum\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-oc-toggle=\"switch\" data-oc-target=\"#input-minimum\" class=\"form-check-input\"{% if override.minimum %} checked{% endif %}/> <label for=\"input-variant-minimum\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_minimum }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_subtract }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-subtract\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"subtract\" value=\"0\"/> <input type=\"checkbox\" name=\"subtract\" value=\"1\" class=\"form-check-input\"{% if subtract %} checked{% endif %}/>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-oc-toggle=\"switch\" data-oc-target=\"#input-subtract\" class=\"form-check-input\"{% if override.subtract %} checked{% endif %}/> <label for=\"input-variant-subtract\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">{{ entry_stock_status }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                        {% for stock_status in stock_statuses %}
                          <option value=\"{{ stock_status.stock_status_id }}\"{% if stock_status.stock_status_id == stock_status_id %} selected{% endif %}>{{ stock_status.name }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-stock-status\" class=\"form-check-input\"{% if override.stock_status_id %} checked{% endif %}/> <label for=\"input-variant-stock-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_stock_status }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">{{ entry_date_available }}</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group\">
                      <input type=\"date\" name=\"date_available\" value=\"{{ date_available }}\" placeholder=\"{{ entry_date_available }}\" id=\"input-date-available\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-available\" class=\"form-check-input\"{% if override.date_available %} checked{% endif %}/>
                            <label for=\"input-variant-date-available\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_specification }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_shipping }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-shipping\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"shipping\" value=\"0\"/> <input type=\"checkbox\" name=\"shipping\" value=\"1\" class=\"form-check-input\"{% if shipping %} checked{% endif %}/>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-oc-toggle=\"switch\" data-oc-target=\"#input-shipping\" class=\"form-check-input\"{% if override.shipping %} checked{% endif %}/> <label for=\"input-variant-shipping\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length\" class=\"col-sm-2 col-form-label\">{{ entry_dimension }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"length\" value=\"{{ length }}\" placeholder=\"{{ entry_length }}\" id=\"input-length\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length\" class=\"form-check-input\"{% if override.length %} checked{% endif %}/> <label for=\"input-variant-length\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                      <input type=\"text\" name=\"width\" value=\"{{ width }}\" placeholder=\"{{ entry_width }}\" id=\"input-width\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-oc-toggle=\"switch\" data-oc-target=\"#input-width\" class=\"form-check-input\"{% if override.width %} checked{% endif %}/> <label for=\"input-variant-width\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                      <input type=\"text\" name=\"height\" value=\"{{ height }}\" placeholder=\"{{ entry_height }}\" id=\"input-height\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-oc-toggle=\"switch\" data-oc-target=\"#input-height\" class=\"form-check-input\"{% if override.height %} checked{% endif %}/> <label for=\"input-variant-height\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">{{ entry_length_class }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-select\">
                        {% for length_class in length_classes %}
                          <option value=\"{{ length_class.length_class_id }}\"{% if length_class.length_class_id == length_class_id %} selected{% endif %}>{{ length_class.title }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length-class\" class=\"form-check-input\"{% if override.length_class_id %} checked{% endif %}/> <label for=\"input-variant-length-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight\" class=\"col-sm-2 col-form-label\">{{ entry_weight }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"weight\" value=\"{{ weight }}\" placeholder=\"{{ entry_weight }}\" id=\"input-weight\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight\" class=\"form-check-input\"{% if override.weight %} checked{% endif %}/> <label for=\"input-variant-weight\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">{{ entry_weight_class }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                        {% for weight_class in weight_classes %}
                          <option value=\"{{ weight_class.weight_class_id }}\"{% if weight_class.weight_class_id == weight_class_id %} selected{% endif %}>{{ weight_class.title }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight-class\" class=\"form-check-input\"{% if override.weight_class_id %} checked{% endif %}/> <label for=\"input-variant-weight-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-status\" class=\"form-check-input\"{% if override.status %} checked{% endif %}/> <label for=\"input-variant-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sort-order\" class=\"form-check-input\"{% if override.sort_order %} checked{% endif %}/> <label for=\"input-variant-sort-order\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-links\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_manufacturer }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"{{ manufacturer }}\" placeholder=\"{{ entry_manufacturer }}\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-oc-toggle=\"switch\" data-oc-target=\"#input-manufacturer\" class=\"form-check-input\"{% if override.manufacturer %} checked{% endif %}/> <label for=\"input-variant-manufacturer\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"{{ manufacturer_id }}\" id=\"input-manufacturer-id\"/>
                  <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-text\">{{ help_manufacturer }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_category }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"{{ entry_category }}\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-category\" class=\"table m-0\">
                        <tbody>
                          {% for product_category in product_categories %}
                            <tr id=\"product-category-{{ product_category.category_id }}\">
                              <td>{{ product_category.name }}<input type=\"hidden\" name=\"product_category[]\" value=\"{{ product_category.category_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-oc-toggle=\"switch\" data-oc-target=\"#input-category, #product-category\" class=\"form-check-input\"{% if override.product_category %} checked{% endif %}/> <label for=\"input-variant-category\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_category }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_filter }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"{{ entry_filter }}\" id=\"input-filter\" data-oc-target=\"autocomplete-filter\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-filter\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-filter\" class=\"table m-0\">
                        <tbody>
                          {% for product_filter in product_filters %}
                            <tr id=\"product-filter-{{ product_filter.filter_id }}\">
                              <td>{{ product_filter.name }}<input type=\"hidden\" name=\"product_filter[]\" value=\"{{ product_filter.filter_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-oc-toggle=\"switch\" data-oc-target=\"#input-filter, #product-filter\" class=\"form-check-input\"{% if override.product_filter %} checked{% endif %}/> <label for=\"input-variant-filter\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_filter }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_store }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      {% for store in stores %}
                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"product_store[]\" value=\"{{ store.store_id }}\" id=\"input-store-{{ store.store_id }}\" class=\"form-check-input\"{% if store.store_id in product_store %} checked{% endif %}/> <label for=\"input-store-{{ store.store_id }}\" class=\"form-check-label\">{{ store.name }}</label>
                        </div>
                      {% endfor %}
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-oc-toggle=\"switch\" data-oc-target=\"#product-store\" class=\"form-check-input\"{% if override.product_store %} checked{% endif %}/> <label for=\"input-variant-store\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_download }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"{{ entry_download }}\" id=\"input-download\" data-oc-target=\"autocomplete-download\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-download\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-download\" class=\"table m-0\">
                        <tbody>
                          {% for product_download in product_downloads %}
                            <tr id=\"product-download-{{ product_download.download_id }}\">
                              <td>{{ product_download.name }}<input type=\"hidden\" name=\"product_download[]\" value=\"{{ product_download.download_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-oc-toggle=\"switch\" data-oc-target=\"#input-download, #product-download\" class=\"form-check-input\"{% if override.product_download %} checked{% endif %}/> <label for=\"input-variant-download\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_download }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_related }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"{{ entry_related }}\" id=\"input-related\" data-oc-target=\"autocomplete-related\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-related\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table m-0\">
                        <tbody>
                          {% for product_related in product_relateds %}
                            <tr id=\"product-related-{{ product_related.product_id }}\">
                              <td>{{ product_related.name }}<input type=\"hidden\" name=\"product_related[]\" value=\"{{ product_related.product_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-oc-toggle=\"switch\" data-oc-target=\"#input-related, #product-related\" class=\"form-check-input\"{% if override.product_related %} checked{% endif %}/> <label for=\"input-variant-related\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_related }}</div>
                </div>
              </div>
            </div>
            <div id=\"tab-attribute\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-attribute\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">{{ entry_attribute }}</td>
                      <td class=\"text-start\">{{ entry_text }}</td>
                      <td>
                        {% if master_id %}
                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-oc-toggle=\"switch\" data-oc-target=\"#product-attribute\" class=\"form-check-input\"{% if override.product_attribute %} checked{% endif %}/> <label for=\"input-variant-product-attribute\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</td>
                    </tr>
                  </thead>
                  <tbody>
                    {% set attribute_row = 0 %}
                    {% for product_attribute in product_attributes %}
                      <tr id=\"attribute-row-{{ attribute_row }}\">
                        <td class=\"text-start\">

                          <input type=\"hidden\" name=\"product_attribute[{{ attribute_row }}][attribute_id]\" value=\"{{ product_attribute.attribute_id }}\" id=\"input-attribute-id-{{ attribute_row }}\"/>
                          <input type=\"text\" name=\"product_attribute[{{ attribute_row }}][name]\" value=\"{{ product_attribute.name }}\" placeholder=\"{{ entry_attribute }}\" id=\"input-attribute-{{ attribute_row }}\" data-oc-target=\"autocomplete-attribute-{{ attribute_row }}\" class=\"form-control\" autocomplete=\"new-password\"/>
                          <ul id=\"autocomplete-attribute-{{ attribute_row }}\" class=\"dropdown-menu\"></ul></td>

                        <td class=\"text-start\">{% for language in languages %}
                            <div class=\"input-group mb-12\">
                              <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                              <textarea name=\"product_attribute[{{ attribute_row }}][product_attribute_description][{{ language.language_id }}][text]\" rows=\"5\" placeholder=\"{{ entry_text }}\" id=\"input-text-{{ attribute_row }}-{{ language.language_id }}\" class=\"form-control\">{{ product_attribute.product_attribute_description[language.language_id] ? product_attribute.product_attribute_description[language.language_id].text }}</textarea>
                            </div>
                          {% endfor %}</td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#attribute-row-{{ attribute_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set attribute_row = attribute_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-attribute\" data-bs-toggle=\"tooltip\" title=\"{{ button_attribute_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            {% if not master_id %}
              <div id=\"tab-option\" class=\"tab-pane\">

                <div id=\"option\">

                  {% set option_row = 0 %}
                  {% set option_value_row = 0 %}
                  {% for product_option in product_options %}

                    <fieldset id=\"option-row-{{ option_row }}\">
                      <legend>{{ product_option.name }}</legend>
                      <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_id]\" value=\"{{ product_option.product_option_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][name]\" value=\"{{ product_option.name }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][option_id]\" value=\"{{ product_option.option_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][type]\" value=\"{{ product_option.type }}\"/>

                      <div class=\"row align-items-center\">
                        <div class=\"col-11\">

                          <div class=\"mb-3\">
                            <label for=\"input-required-{{ option_row }}\" class=\"form-label\">{{ entry_required }}</label>
                            <select name=\"product_option[{{ option_row }}][required]\" id=\"input-required-{{ option_row }}\" class=\"form-select\">
                              <option value=\"1\"{% if product_option.required %} selected{% endif %}>{{ text_enabled }}</option>
                              <option value=\"0\"{% if not product_option.required %} selected{% endif %}>{{ text_disabled }}</option>
                            </select>
                          </div>

                          {% if product_option.type == 'text' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label>
                              <input type=\"text\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'textarea' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label>
                              <textarea name=\"product_option[{{ option_row }}][value]\" rows=\"5\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\">{{ product_option.value }}</textarea>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'file' %}
                            <div class=\"mb-3 d-none\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label>
                              <input type=\"text\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'date' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label>
                              <input type=\"date\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'time' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label>
                              <input type=\"time\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'datetime' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label>
                              <input type=\"datetime-local\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'select' or product_option.type == 'radio' or product_option.type == 'checkbox' or product_option.type == 'image' %}
                            <div class=\"table-responsive\">
                              <table class=\"table table-bordered table-hover\">
                                <thead>
                                  <tr>
                                    <td class=\"text-start\">{{ entry_option_value }}</td>
                                    <td class=\"text-end\">{{ entry_quantity }}</td>
                                    <td class=\"text-start\">{{ entry_subtract }}</td>
                                    <td class=\"text-end\">{{ entry_price }}</td>
                                    <td class=\"text-end\">{{ entry_points }}</td>
                                    <td class=\"text-end\">{{ entry_weight }}</td>
                                    <td></td>
                                  </tr>
                                </thead>
                                <tbody id=\"option-value-{{ option_row }}\">
                                  {% for product_option_value in product_option.product_option_value %}
                                    <tr id=\"option-value-row-{{ option_value_row }}\">
                                      <td class=\"text-start\">{{ product_option_value.name }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][option_value_id]\" value=\"{{ product_option_value.option_value_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][product_option_value_id]\" value=\"{{ product_option_value.product_option_value_id }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.quantity }} <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][quantity]\" value=\"{{ product_option_value.quantity }}\"/></td>
                                      <td class=\"text-start\">{% if product_option_value.subtract %}
                                          {{ text_yes }}
                                        {% else %}
                                          {{ text_no }}
                                        {% endif %}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][subtract]\" value=\"{{ product_option_value.subtract }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.price_prefix }}{{ product_option_value.price }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price_prefix]\" value=\"{{ product_option_value.price_prefix }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price]\" value=\"{{ product_option_value.price }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.points_prefix }}{{ product_option_value.points }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points_prefix]\" value=\"{{ product_option_value.points_prefix }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points]\" value=\"{{ product_option_value.points }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.weight_prefix }}{{ product_option_value.weight }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight_prefix]\" value=\"{{ product_option_value.weight_prefix }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight]\" value=\"{{ product_option_value.weight }}\"/></td>
                                      <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" data-option-row=\"{{ option_row }}\" data-option-value-row=\"{{ option_value_row }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$('#option-value-row-{{ option_value_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                                    </tr>
                                    {% set option_value_row = option_value_row + 1 %}
                                  {% endfor %}
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <td colspan=\"6\"></td>
                                    <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_option_value_add }}\" data-option-row=\"{{ option_row }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                                  </tr>
                                </tfoot>
                              </table>
                              <select id=\"product-option-values-{{ option_row }}\" class=\"d-none\">
                                {% if option_values[product_option.option_id] %}
                                  {% for option_value in option_values[product_option.option_id] %}
                                    <option value=\"{{ option_value.option_value_id }}\">{{ option_value.name }}</option>
                                  {% endfor %}
                                {% endif %}
                              </select>
                            </div>
                          {% endif %}
                        </div>

                        <div class=\"col\">
                          <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" onclick=\"\$('#option-row-{{ option_row }}').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                        </div>
                      </div>
                    </fieldset>
                    {% set option_row = option_row + 1 %}
                  {% endfor %}
                </div>
                <fieldset>
                  <legend class=\"float-none\">{{ text_option_add }}</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-option\" class=\"col-sm-2 col-form-label\">{{ entry_option }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"{{ entry_option }}\" id=\"input-option\" data-oc-target=\"autocomplete-option\" class=\"form-control\" autocomplete=\"off\"/>
                      <ul id=\"autocomplete-option\" class=\"dropdown-menu\"></ul>
                      <div class=\"form-text\">{{ help_option }}</div>
                    </div>
                  </div>
                </fieldset>
              </div>
            {% else %}
              <div id=\"tab-option\" class=\"tab-pane\">
                {% for option in options %}
                  <fieldset>
                    <legend class=\"float-none\">{{ option.name }}</legend>


                    {% if option.type == 'select' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <select name=\"variant[{{ option.product_option_id }}]\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-select\">
                              <option value=\"\">{{ text_select }}</option>
                              {% for option_value in option.product_option_value %}
                                <option value=\"{{ option_value.product_option_value_id }}\"{% if variant[option.product_option_id] and option_value.product_option_value_id == variant[option.product_option_id] %} selected{% endif %}>{{ option_value.name }}
                                  {% if option_value.price %}
                                    ({{ option_value.price_prefix }}{{ option_value.price }})
                                  {% endif %}</option>
                              {% endfor %}
                            </select>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}


                    {% if option.type == 'radio' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              {% for option_value in option.product_option_value %}
                                <div class=\"form-check\">
                                  <input type=\"radio\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"{% if variant[option.product_option_id] and option_value.product_option_value_id == variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                    {% if option_value.image %}<img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                    {{ option_value.name }}
                                    {% if option_value.price %}
                                      ({{ option_value.price_prefix }}{{ option_value.price }})
                                    {% endif %}</label>
                                </div>
                              {% endfor %}
                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}


                    {% if option.type == 'checkbox' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              {% for option_value in option.product_option_value %}
                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"variant[{{ option.product_option_id }}][]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"{% if variant[option.product_option_id] and option_value.product_option_value_id in variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">{% if option_value.image %} <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                    {{ option_value.name }}
                                    {% if option_value.price %}
                                      ({{ option_value.price_prefix }}{{ option_value.price }})
                                    {% endif %}</label>
                                </div>
                              {% endfor %}
                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}


                    {% if option.type == 'text' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}


                    {% if option.type == 'textarea' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"variant[{{ option.product_option_id }}]\" rows=\"5\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\">{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}</textarea>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}


                    {% if option.type == 'file' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" id=\"button-upload-{{ option.product_option_id }}\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                            <input type=\"text\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-option-{{ option.product_option_id }}\"{% if not variant[option.product_option_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-option-{{ option.product_option_id }}\"{% if not variant[option.product_option_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#button-upload-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}


                    {% if option.type == 'date' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"date\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}


                    {% if option.type == 'time' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div id=\"input-option-{{ option.product_option_id }}\" class=\"input-group\">
                            <input type=\"time\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}


                    {% if option.type == 'datetime' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"datetime-local\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}
                  </fieldset>
                {% endfor %}


              </div>





            {% endif %}

            <div id=\"tab-subscription\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-subscription\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">{{ entry_subscription }}</td>
                      <td class=\"text-start\">{{ entry_customer_group }}</td>
                      <td class=\"text-start\">{{ entry_trial_price }}</td>
                      <td class=\"text-start\">{{ entry_price }}</td>
                      <td>
                        {% if master_id %}
                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_subscription]\" value=\"1\" id=\"input-variant-product-subscription\" data-oc-toggle=\"switch\" data-oc-target=\"#product-subscription\" class=\"form-check-input\"{% if override.product_subscription %} checked{% endif %}/> <label for=\"input-variant-product-subscription\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</td>
                    </tr>
                  </thead>
                  <tbody>
                    {% set subscription_row = 0 %}
                    {% for product_subscription in product_subscriptions %}
                      <tr id=\"subscription-row-{{ subscription_row }}\">
                        <td class=\"text-start\"><select name=\"product_subscription[{{ subscription_row }}][subscription_plan_id]\" class=\"form-select\">
                            {% for subscription_plan in subscription_plans %}
                              <option value=\"{{ subscription_plan.subscription_plan_id }}\"{% if subscription_plan.subscription_plan_id == product_subscription.subscription_plan_id %} selected{% endif %}>{{ subscription_plan.name }}</option>
                            {% endfor %}
                          </select></td>
                        <td class=\"text-start\"><select name=\"product_subscription[{{ subscription_row }}][customer_group_id]\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == product_subscription.customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select></td>
                        <td class=\"text-start\"><input type=\"text\" name=\"product_subscription[{{ subscription_row }}][trial_price]\" value=\"{{ product_subscription.trial_price }}\" placeholder=\"{{ entry_trial_price }}\" class=\"form-control\"/></td>
                        <td class=\"text-start\"><input type=\"text\" name=\"product_subscription[{{ subscription_row }}][price]\" value=\"{{ product_subscription.price }}\" placeholder=\"{{ entry_price }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#subscription-row-{{ subscription_row }}').remove()\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set subscription_row = subscription_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-subscription\" data-bs-toggle=\"tooltip\" title=\"{{ button_subscription_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-discount\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-discount\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">{{ entry_customer_group }}</td>
                      <td class=\"text-end\">{{ entry_quantity }}</td>
                      <td class=\"text-end\">{{ entry_priority }}</td>
                      <td class=\"text-end\">{{ entry_price }}</td>
                      <td class=\"text-start\">{{ entry_date_start }}</td>
                      <td class=\"text-start\">{{ entry_date_end }}</td>
                      <td class=\"text-end\">{% if master_id %}
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-oc-toggle=\"switch\" data-oc-target=\"#product-discount\" class=\"form-check-input\"{% if override.product_discount %} checked{% endif %}/> <label for=\"input-variant-product-discount\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</td>
                    </tr>
                  </thead>
                  <tbody>
                    {% set discount_row = 0 %}
                    {% for product_discount in product_discounts %}
                      <tr id=\"discount-row-{{ discount_row }}\">
                        <td class=\"text-start\"><select name=\"product_discount[{{ discount_row }}][customer_group_id]\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == product_discount.customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][quantity]\" value=\"{{ product_discount.quantity }}\" placeholder=\"{{ entry_quantity }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][priority]\" value=\"{{ product_discount.priority }}\" placeholder=\"{{ entry_priority }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][price]\" value=\"{{ product_discount.price }}\" placeholder=\"{{ entry_price }}\" class=\"form-control\"/></td>
                        <td class=\"text-start\"><input type=\"date\" name=\"product_discount[{{ discount_row }}][date_start]\" value=\"{{ product_discount.date_start }}\" placeholder=\"{{ entry_date_start }}\" class=\"form-control\"/></td>
                        <td class=\"text-start\"><input type=\"date\" name=\"product_discount[{{ discount_row }}][date_end]\" value=\"{{ product_discount.date_end }}\" placeholder=\"{{ entry_date_end }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#discount-row-{{ discount_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set discount_row = discount_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-discount\" data-bs-toggle=\"tooltip\" title=\"{{ button_discount_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-special\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-special\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">{{ entry_customer_group }}</td>
                      <td class=\"text-end\">{{ entry_priority }}</td>
                      <td class=\"text-end\">{{ entry_price }}</td>
                      <td class=\"text-start\">{{ entry_date_start }}</td>
                      <td class=\"text-start\">{{ entry_date_end }}</td>
                      <td class=\"text-center\">{% if master_id %}
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_special]\" value=\"1\" id=\"input-variant-special\" data-oc-toggle=\"switch\" data-oc-target=\"#product-special\" class=\"form-check-input\"{% if override.product_special %} checked{% endif %}/> <label for=\"input-variant-special\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</td>
                    </tr>
                  </thead>
                  <tbody>
                    {% set special_row = 0 %}
                    {% for product_special in product_specials %}
                      <tr id=\"special-row-{{ special_row }}\">
                        <td class=\"text-start\"><select name=\"product_special[{{ special_row }}][customer_group_id]\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == product_special.customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_special[{{ special_row }}][priority]\" value=\"{{ product_special.priority }}\" placeholder=\"{{ entry_priority }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_special[{{ special_row }}][price]\" value=\"{{ product_special.price }}\" placeholder=\"{{ entry_price }}\" class=\"form-control\"/></td>
                        <td class=\"text-start\"><input type=\"date\" name=\"product_special[{{ special_row }}][date_start]\" value=\"{{ product_special.date_start }}\" placeholder=\"{{ entry_date_start }}\" class=\"form-control\"/></td>
                        <td class=\"text-start\"><input type=\"date\" name=\"product_special[{{ special_row }}][date_end]\" value=\"{{ product_special.date_end }}\" placeholder=\"{{ entry_date_end }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#special-row-{{ special_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set special_row = special_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-special\" data-bs-toggle=\"tooltip\" title=\"{{ button_special_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_image }}</legend>
                <div id=\"image\" class=\"border rounded d-block\" style=\"max-width: 300px;\">
                  <img src=\"{{ thumb }}\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"image\" value=\"{{ image }}\" id=\"input-image\"/>
                  <div class=\"d-grid\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                    {% if master_id %}
                      <div class=\"mx-auto w-25\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[image]\" value=\"1\" id=\"input-variant-image\" data-oc-toggle=\"switch\" data-oc-target=\"#image\" class=\"form-check-input\"{% if override.image %} checked{% endif %}/> <label for=\"input-variant-image\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_image_additional }}</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-image\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-start\">{{ entry_image }}</td>
                        <td class=\"text-start\">{{ entry_sort_order }}</td>
                        <td class=\"text-end\">
                          {% if master_id %}
                            <div class=\"form-check form-switch\">
                              <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-oc-toggle=\"switch\" data-oc-target=\"#product-image\" class=\"form-check-input\"{% if override.product_image %} checked{% endif %}/> <label for=\"input-variant-product-image\" class=\"form-check-label\"></label>
                            </div>
                          {% endif %}</td>
                      </tr>
                    </thead>
                    <tbody>
                      {% set image_row = 0 %}
                      {% for product_image in product_images %}
                        <tr id=\"product-image-row-{{ image_row }}\">
                          <td>
                            <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                              <img src=\"{{ product_image.thumb }}\" alt=\"\" title=\"\" id=\"product-image-{{ image_row }}\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[{{ image_row }}][image]\" value=\"{{ product_image.image }}\" id=\"input-product-image-{{ image_row }}\"/>
                              <div class=\"d-grid\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-{{ image_row }}\" data-oc-thumb=\"#product-image-{{ image_row }}\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-{{ image_row }}\" data-oc-thumb=\"#product-image-{{ image_row }}\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                              </div>
                            </div>
                          </td>
                          <td class=\"text-start\"><input type=\"text\" name=\"product_image[{{ image_row }}][sort_order]\" value=\"{{ product_image.sort_order }}\" placeholder=\"{{ entry_sort_order }}\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#product-image-row-{{ image_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                        {% set image_row = image_row + 1 %}
                      {% endfor %}
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-end\"><button type=\"button\" id=\"button-image\" data-bs-toggle=\"tooltip\" title=\"{{ button_image_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_reward }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">{{ entry_points }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"points\" value=\"{{ points }}\" placeholder=\"{{ entry_points }}\" id=\"input-points\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-oc-toggle=\"switch\" data-oc-target=\"#input-points\" class=\"form-check-input\"{% if override.points %} checked{% endif %}/> <label for=\"input-variant-points\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_points }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_points }}</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-reward\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-start\">{{ entry_customer_group }}</td>
                        <td class=\"text-end\">{{ entry_reward }}&nbsp;&nbsp;{% if master_id %}
                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-oc-toggle=\"switch\" data-oc-target=\"#product-reward\" class=\"form-check-input\"{% if override.product_reward %} checked{% endif %}/> <label for=\"input-variant-product-reward\" class=\"form-check-label\"></label>
                          </div>
                          {% endif %}</td>
                      </tr>
                    </thead>
                    <tbody>
                      {% for customer_group in customer_groups %}
                        <tr>
                          <td class=\"text-start\">{{ customer_group.name }}</td>
                          <td class=\"text-end\"><input type=\"text\" name=\"product_reward[{{ customer_group.customer_group_id }}][points]\" value=\"{{ product_reward[customer_group.customer_group_id] ? product_reward[customer_group.customer_group_id].points }}\" class=\"form-control\"/></td>
                        </tr>
                      {% endfor %}
                    </tbody>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_keyword }}</div>
              <div id=\"product-seo\" class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">{{ entry_store }}</td>
                      <td class=\"text-start\">{{ entry_keyword }}</td>
                    </tr>
                  </thead>
                  <tbody>
                    {% for store in stores %}
                      <tr>
                        <td class=\"text-start\">{{ store.name }}</td>
                        <td class=\"text-start\">
                          {% for language in languages %}
                            <div class=\"input-group\">
                              <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                              <input type=\"text\" name=\"product_seo_url[{{ store.store_id }}][{{ language.language_id }}]\" value=\"{% if product_seo_url[store.store_id][language.language_id] %}{{ product_seo_url[store.store_id][language.language_id] }}{% endif %}\" id=\"input-keyword-{{ store.store_id }}-{{ language.language_id }}\" placeholder=\"{{ entry_keyword }}\" class=\"form-control\"/>
                            </div>
                            <div id=\"error-keyword-{{ store.store_id }}-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                          {% endfor %}</td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>

            <div id=\"tab-design\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-layout\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-start\">{{ entry_store }}</td>
                      <td class=\"text-start\">{{ entry_layout }}{% if master_id %}
                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-oc-toggle=\"switch\" data-oc-target=\"#product-layout\" class=\"form-check-input\"{% if override.product_layout %} checked{% endif %}/> <label for=\"input-variant-product-layout\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</td>
                    </tr>
                  </thead>
                  <tbody>
                    {% for store in stores %}
                      <tr>
                        <td class=\"text-start\">{{ store.name }}</td>
                        <td class=\"text-start\"><select name=\"product_layout[{{ store.store_id }}]\" class=\"form-select\">
                            <option value=\"\"></option>
                            {% for layout in layouts %}
                              <option value=\"{{ layout.layout_id }}\"{% if product_layout[store.store_id] and product_layout[store.store_id] == layout.layout_id %} selected{% endif %}>{{ layout.name }}</option>
                            {% endfor %}
                          </select></td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>

            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_report }}</legend>
                <div id=\"report\">{{ report }}</div>
              </fieldset>
            </div>

          </div>
          <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\" id=\"input-product-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '{{ ckeditor }}'
});

// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    manufacturer_id: 0,
                    name: '{{ text_none }}'
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-manufacturer').val(item['label']);
        \$('#input-manufacturer-id').val(item['value']);
    }
});

// Category
\$('#input-category').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-category').val('');

        \$('#product-category-' + item['value']).remove();

        html = '<tr id=\"product-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-category tbody').append(html);
    }
});

\$('#product-category').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Filter
\$('#input-filter').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/filter.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['filter_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-filter').val('');

        \$('#product-filter-' + item['value']).remove();

        html = '<tr id=\"product-filter-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-filter tbody').append(html);
    }
});

\$('#product-filter').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Downloads
\$('#input-download').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/download.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['download_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-download').val('');

        \$('#product-download-' + item['value']).remove();

        html = '<tr id=\"product-download-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-download tbody').append(html);
    }
});

\$('#product-download').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Related
\$('#input-related').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-related').val('');

        \$('#product-related-' + item['value']).remove();

        html = '<tr id=\"product-related-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-related tbody').append(html);
    }
});

\$('#product-related').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

var attributeautocomplete = function(attribute_row) {
    \$('#input-attribute-' + attribute_row).autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/attribute.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            category: item.attribute_group,
                            label: item.name,
                            value: item.attribute_id
                        }
                    }));
                }
            });
        },
        'select': function(item) {
            \$('#input-attribute-' + attribute_row).val(item['label']);
            \$('#input-attribute-id-' + attribute_row).val(item['value']);
        }
    });
}

var attribute_row = {{ attribute_row }};

\$('#product-attribute tr').each(function(index) {
    attributeautocomplete(index);
});

\$('#button-attribute').on('click', function() {
    html = '<tr id=\"attribute-row-' + attribute_row + '\">';
    html += '  <td class=\"text-start\">';
    html += '    <input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"{{ entry_attribute|escape('js') }}\" id=\"input-attribute-' + attribute_row + '\" data-oc-target=\"autocomplete-attribute-' + attribute_row + '\" class=\"form-control\" autocomplete=\"off\"/>';
    html += '    <input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" id=\"input-attribute-id-' + attribute_row + '\"/>';
    html += '    <ul id=\"autocomplete-attribute-' + attribute_row + '\" class=\"dropdown-menu\"></ul>';
    html += '  </td>';
    html += '  <td class=\"text-start\">';
  {% for language in languages %}
    html += '<div class=\"input-group\">';
    html += '  <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name|escape('js') }}\" /></div>';
    html += '  <textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][{{ language.language_id }}][text]\" rows=\"5\" placeholder=\"{{ entry_text|escape('js') }}\" id=\"input-text-' + attribute_row + '-{{ language.language_id }}\" class=\"form-control\"></textarea>';
    html += '</div>';
  {% endfor %}
    html += '  </td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#attribute-row-' + attribute_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-attribute').append(html);

    attributeautocomplete(attribute_row);

    attribute_row++;
});

{% if not master_id %}
var option_row = {{ option_row }};

\$('#input-option').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/option.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        category: item['category'],
                        label: item['name'],
                        value: item['option_id'],
                        type: item['type'],
                        option_value: item['option_value']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        html = '<fieldset id=\"option-row-' + option_row + '\">';
        html += '  <legend class=\"float-none\">' + item['label'] + '</legend>';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

        html += '  <div class=\"row align-items-center\">';
        html += '    <div class=\"col-11\">';

        html += '      <div class=\"mb-3\">';
        html += '        <label for=\"input-required-' + option_row + '\" class=\"form-label\">{{ entry_required|escape('js') }}</label>';
        html += '\t       <select name=\"product_option[' + option_row + '][required]\" id=\"input-required-' + option_row + '\" class=\"form-select\">';
        html += '\t         <option value=\"1\">{{ text_yes|escape('js') }}</option>';
        html += '\t         <option value=\"0\">{{ text_no|escape('js') }}</option>';
        html += '\t       </select>';
        html += '      </div>';

        if (item['type'] == 'text') {
            html += '  <div class=\"mb-3\">';
            html += '     <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '     <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '\t </div>';
        }

        if (item['type'] == 'textarea') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"></textarea>';
            html += '\t </div>';
        }

        if (item['type'] == 'file') {
            html += '  <div class=\"mb-3 d-none\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'date') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"date\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'time') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"time\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'datetime') {
            html += '\t <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"datetime-local\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
            html += '<div class=\"table-responsive\">';
            html += '  <table class=\"table table-bordered table-hover\">';
            html += '  \t <thead>';
            html += '      <tr>';
            html += '        <td class=\"text-start\">{{ entry_option_value|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_quantity|escape('js') }}</td>';
            html += '        <td class=\"text-start\">{{ entry_subtract|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_price|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_points|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_weight|escape('js') }}</td>';
            html += '        <td></td>';
            html += '      </tr>';
            html += '    </thead>';
            html += '    <tbody id=\"option-value-' + option_row + '\"></tbody>';
            html += '    <tfoot>';
            html += '      <tr>';
            html += '        <td colspan=\"6\"></td>';
            html += '        <td class=\"text-end\"><button type=\"button\" data-option-row=\"' + option_row + '\" data-bs-toggle=\"tooltip\" title=\"{{ button_option_value_add|escape('js') }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>';
            html += '      </tr>';
            html += '    </tfoot>';
            html += '  </table>';
            html += '</div>';

            html += '<select id=\"product-option-values-' + option_row + '\" class=\"d-none\">';

            for (i = 0; i < item['option_value'].length; i++) {
                html += '<option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '</select>';
        }

        html += '\t </div>';
        html += '\t <div class=\"col\">';
        html += '    <button type=\"button\" class=\"btn btn-danger\" onclick=\"\$(\\'#option-row-' + option_row + '\\').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>';
        html += '  </div>';
        html += '</fieldset>';

        \$('#option').append(html);

        option_row++;
    }
});

var option_value_row = {{ option_value_row }};

\$('#option').on('click', '.btn-primary', function() {
    var element = this;

    if (\$(element).attr('data-option-value-row')) {
        element.option_value_row = \$(element).attr('data-option-value-row');
    } else {
        element.option_value_row = option_value_row;
    }

    \$('.modal').remove();

    html = '<div id=\"modal-option\" class=\"modal fade\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\"><i class=\"fa-solid fa-pencil\"></i> {{ text_option_value|escape('js') }}</h5> <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-option-value\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
    html += '      \t   <select name=\"option_value_id\" id=\"input-modal-option-value\" class=\"form-select\">';

    option_value = \$('#product-option-values-' + \$(element).attr('data-option-row') + ' option');

    for (i = 0; i < option_value.length; i++) {
        if (\$(element).attr('data-option-value-row') && \$(option_value[i]).val() == \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\\']').val()) {
            html += '<option value=\"' + \$(option_value[i]).val() + '\" selected>' + \$(option_value[i]).text() + '</option>';
        } else {
            html += '<option value=\"' + \$(option_value[i]).val() + '\">' + \$(option_value[i]).text() + '</option>';
        }
    }

    html += '      \t   </select>';
    html += '          <input type=\"hidden\" name=\"product_option_value_id\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\\']').val() : '') + '\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-quantity\" class=\"form-label\">{{ entry_quantity|escape('js') }}</label>';
    html += '      \t   <input type=\"text\" name=\"quantity\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\\']').val() : '1') + '\" placeholder=\"{{ entry_quantity|escape('js') }}\" id=\"input-modal-quantity\" class=\"form-control\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-subtract\" class=\"form-label\">{{ entry_subtract|escape('js') }}</label>';
    html += '      \t   <select name=\"subtract\" id=\"input-modal-subtract\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\\']').val() == '1') {
        html += '        <option value=\"1\" selected>{{ text_yes|escape('js') }}</option>';
        html += '      \t <option value=\"0\">{{ text_no|escape('js') }}</option>';
    } else {
        html += '      \t <option value=\"1\">{{ text_yes|escape('js') }}</option>';
        html += '      \t <option value=\"0\" selected>{{ text_no|escape('js') }}</option>';
    }

    html += '      \t   </select>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-price\" class=\"form-label\">{{ entry_price|escape('js') }}</label>';
    html += '          <div class=\"input-group\">';
    html += '            <select name=\"price_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '+') {
        html += '      \t   <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t   <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"price\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\\']').val() : '0') + '\" placeholder=\"{{ entry_price|escape('js') }}\" id=\"input-modal-price\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-points\" class=\"form-label\">{{ entry_points|escape('js') }}</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"points_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"points\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\\']').val() : '0') + '\" placeholder=\"{{ entry_points|escape('js') }}\" id=\"input-modal-points\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-weight\" class=\"form-label\">{{ entry_weight|escape('js') }}</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"weight_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"weight\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\\']').val() : '0') + '\" placeholder=\"{{ entry_weight|escape('js') }}\" id=\"input-modal-weight\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '      </div>';
    html += '      <div class=\"modal-footer\">';
    html += '\t       <button type=\"button\" id=\"button-save\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\" class=\"btn btn-primary\">{{ button_save|escape('js') }}</button> <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">{{ button_cancel|escape('js') }}</button>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-option').modal('show');

    \$('#modal-option #button-save').on('click', function() {
        html = '<tr id=\"option-value-row-' + element.option_value_row + '\">';
        html += '  <td class=\"text-start\">' + \$('#modal-option select[name=\\'option_value_id\\'] option:selected').text() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\" value=\"' + \$('#modal-option select[name=\\'option_value_id\\']').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\" value=\"' + \$('#modal-option input[name=\\'product_option_value_id\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option input[name=\\'quantity\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\" value=\"' + \$('#modal-option input[name=\\'quantity\\']').val() + '\"/></td>';
        html += '  <td class=\"text-start\">' + (\$('#modal-option select[name=\\'subtract\\'] option:selected').val() == '1' ? '{{ text_yes|escape('js') }}' : '{{ text_no|escape('js') }}') + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\" value=\"' + \$('#modal-option select[name=\\'subtract\\'] option:selected').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'price\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\" value=\"' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\" value=\"' + \$('#modal-option input[name=\\'price\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"> ' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'points\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\" value=\"' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\" value=\"' + \$('#modal-option input[name=\\'points\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'weight\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\" value=\"' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\" value=\"' + \$('#modal-option input[name=\\'weight\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit|escape('js') }}\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\"class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$(\\'#option-value-row-' + element.option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" rel=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        if (\$(element).attr('data-option-value-row')) {
            \$('#option-value-row-' + element.option_value_row).replaceWith(html);
        } else {
            \$('#option-value-' + \$(element).attr('data-option-row')).append(html);

            option_value_row++;
        }

        \$('#modal-option').modal('hide');
    });
});
{% endif %}

var discount_row = {{ discount_row }};

\$('#button-discount').on('click', function() {
    html = '<tr id=\"discount-row-' + discount_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-select\">';
  {% for customer_group in customer_groups %}
    html += '    <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name|escape('js') }}</option>';
  {% endfor %}
    html += '  </select><input type=\"hidden\" name=\"product_discount[' + discount_row + '][product_discount_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"{{ entry_quantity|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"{{ entry_priority|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"{{ entry_price|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-start\"><input type=\"date\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"{{ entry_date_start|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-start\"><input type=\"date\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"{{ entry_date_end|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#discount-row-' + discount_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-discount tbody').append(html);

    discount_row++;
});

var special_row = {{ special_row }};

\$('#button-special').on('click', function() {
    html = '<tr id=\"special-row-' + special_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-select\">';
  {% for customer_group in customer_groups %}
    html += '      <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name|escape('js') }}</option>';
  {% endfor %}
    html += '  </select><input type=\"hidden\" name=\"product_special[' + special_row + '][product_special_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"{{ entry_priority|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"{{ entry_price|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-start\"><input type=\"date\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"{{ entry_date_start|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-start\"><input type=\"date\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"{{ entry_date_end|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#special-row-' + special_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-special tbody').append(html);

    special_row++;
});

var image_row = {{ image_row }};

\$('#button-image').on('click', function() {
    html = '<tr id=\"product-image-row-' + image_row + '\">';
    html += '  <td><div class=\"border rounded d-block\" style=\"max-width: 300px;\">';
    html += '    <img src=\"{{ placeholder|escape('js') }}\" alt=\"\" title=\"\" id=\"thumb-image-' + image_row + '\" data-oc-placeholder=\"{{ placeholder|escape('js') }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-product-image-' + image_row + '\"/>';
    html += '    <div class=\"d-grid\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-primary rounded-0k\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit|escape('js') }}</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear|escape('js') }}</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td class=\"text-start\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"0\" placeholder=\"{{ entry_sort_order|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#product-image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-image tbody').append(html);

    image_row++;
});

var subscription_row = {{ subscription_row }};

\$('#button-subscription').on('click', function() {
    html = '<tr id=\"subscription-row-' + subscription_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"product_subscription[' + subscription_row + '][subscription_plan_id]\" class=\"form-select\">';
  {% for subscription_plan in subscription_plans %}
    html += '      <option value=\"{{ subscription_plan.subscription_plan_id }}\">{{ subscription_plan.name|escape('js') }}</option>';
  {% endfor %}
    html += '  </select></td>';
    html += '  <td class=\"text-start\"><select name=\"product_subscription[' + subscription_row + '][customer_group_id]\" class=\"form-select\">';
  {% for customer_group in customer_groups %}
    html += '      <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name|escape('js') }}</option>';
  {% endfor %}
    html += '  <select></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][trial_price]\" value=\"\" placeholder=\"{{ entry_trial_price|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][price]\" value=\"\" placeholder=\"{{ entry_price|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#subscription-row-' + subscription_row + '\\').remove()\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-subscription tbody').append(html);

    subscription_row++;
});

{% if master_id %}
// Variable products
\$('input[data-oc-toggle=\\'switch\\']').on('change', function(e) {
    var element = this;

    var target = \$(this).attr('data-oc-target');

    // First we need to grab the default values
    // Now we need to enable or disable any fields in the targets
    \$.merge(\$(target), \$(target).find('input, textarea, select, button')).not('[data-oc-toggle=\\'switch\\']').each(function(i, elem) {
        // Text Textarea
        if (\$(this).is('input[type=\\'text\\'], textarea')) {
            \$(this).prop('readonly', !\$(element).prop('checked'));
        }

        // CKEditor readonly
        if (\$(this).is('[data-oc-toggle=\\'ckeditor\\']')) {
            var editor = CKEDITOR.instances[\$(this).attr('id')];

            if (editor.editable() == undefined) {
                editor.on('instanceReady', function() {
                    this.setReadOnly(!\$(element).prop('checked'));
                });
            } else {
                editor.setReadOnly(!\$(element).prop('checked'));
            }
        }

        // Radio Checkbox
        if (\$(this).is('input[type=\\'radio\\'], input[type=\\'checkbox\\'], div[data-bs-toggle=\\'buttons\\']')) {
            if (!\$(element).prop('checked')) {
                \$(this).on('click', function(e) {
                    return false;
                });
            } else {
                \$(this).off('click');
            }
        }

        // Select
        if (\$(this).is('select')) {
            if (!\$(element).prop('checked')) {
                \$(this).addClass('.disabled');

                \$(this).prop('readonly', true);
            } else {
                \$(this).removeClass('disabled');

                \$(this).prop('readonly', false);
            }

            \$(this).find('option').not(':selected').prop('disabled', !\$(element).prop('checked'));
        }

        // Button
        if (\$(this).is('button')) {
            if (!\$(element).prop('checked')) {
                \$(this).prop('disabled', true);
            } else {
                \$(this).prop('disabled', false);
            }
        }
    });
});

\$('input[data-oc-toggle=\\'switch\\']').trigger('change');
{% endif %}

\$('#report').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#report').load(this.href);
});
//--></script>
{{ footer }}
", "admin/view/template/catalog/product_form.twig", "/var/www/html/opencart/upload/admin/view/template/catalog/product_form.twig");
    }
}
