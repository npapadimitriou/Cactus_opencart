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

/* admin/view/template/common/filemanager_list.twig */
class __TwigTemplate_33cd7c95e116e7558bb6569260452747d254ba178b71588e19543f93180265af extends Template
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
        yield "<div class=\"row mb-3\">
  <div class=\"col-sm-5\">
    <a href=\"";
        // line 3
        yield ($context["parent"] ?? null);
        yield "\" id=\"button-parent\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_parent"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-level-up-alt\"></i></a>
    <a href=\"";
        // line 4
        yield ($context["refresh"] ?? null);
        yield "\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_refresh"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-rotate\"></i></a>
    <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 5
        yield ($context["button_upload"] ?? null);
        yield "\" id=\"button-upload\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i></button>
    <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_folder"] ?? null);
        yield "\" id=\"button-folder\" class=\"btn btn-light\"><i class=\"fa-solid fa-folder\"></i></button>
    <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 7
        yield ($context["button_delete"] ?? null);
        yield "\" id=\"button-delete\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
    <input type=\"hidden\" name=\"directory\" value=\"";
        // line 8
        yield ($context["directory"] ?? null);
        yield "\" id=\"input-directory\"/>
  </div>
  <div class=\"col-sm-7\">
    <div class=\"input-group\">
      <input type=\"text\" name=\"search\" value=\"";
        // line 12
        yield ($context["filter_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_search"] ?? null);
        yield "\" id=\"input-search\" class=\"form-control\"/>
      <button type=\"button\" id=\"button-search\" data-bs-toggle=\"tooltip\" title=\"";
        // line 13
        yield ($context["button_search"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-search\"></i></button>
    </div>
  </div>
</div>
<div id=\"modal-folder\" class=\"row mb-3\" style=\"display: none;\">
  <div class=\"col-sm-12\">
    <div class=\"input-group\">
      <div class=\"input-group\">
        <input type=\"text\" name=\"folder\" value=\"\" placeholder=\"";
        // line 21
        yield ($context["entry_folder"] ?? null);
        yield "\" id=\"input-folder\" class=\"form-control\"/>
        <button type=\"button\" title=\"";
        // line 22
        yield ($context["button_folder"] ?? null);
        yield "\" id=\"button-create\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button>
      </div>
    </div>
  </div>
</div>
<hr/>
<div class=\"row row-cols-sm-3 row-cols-lg-4\">
  ";
        // line 29
        $context["path_row"] = 0;
        // line 30
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["directories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["directory"]) {
            // line 31
            yield "    <div class=\"mb-3\">
      <div class=\"mb-1\" style=\"min-height: 140px;\">
        <a href=\"";
            // line 33
            yield CoreExtension::getAttribute($this->env, $this->source, $context["directory"], "href", [], "any", false, false, false, 33);
            yield "\" class=\"directory mb-1\"><i class=\"fa-solid fa-folder fa-5x\"></i></a>
      </div>
      <div class=\"form-check\">
        <label for=\"input-path-";
            // line 36
            yield ($context["path_row"] ?? null);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["directory"], "name", [], "any", false, false, false, 36);
            yield "</label>
        <input type=\"checkbox\" name=\"path[]\" value=\"";
            // line 37
            yield CoreExtension::getAttribute($this->env, $this->source, $context["directory"], "path", [], "any", false, false, false, 37);
            yield "\" id=\"input-path-";
            yield ($context["path_row"] ?? null);
            yield "\" class=\"form-check-input\"/>
      </div>
    </div>
    ";
            // line 40
            $context["path_row"] = (($context["path_row"] ?? null) + 1);
            // line 41
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 43
            yield "    <div class=\"mb-3\">
      <div class=\"mb-1\" style=\"min-height: 140px;\">
        <a href=\"";
            // line 45
            yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "href", [], "any", false, false, false, 45);
            yield "\" class=\"thumbnail mb-1\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 45);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 45);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 45);
            yield "\" class=\"img-fluid\"/></a>
      </div>
      <div class=\"form-check\">
        <label for=\"input-path-";
            // line 48
            yield ($context["path_row"] ?? null);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 48);
            yield "</label>
        <input type=\"checkbox\" name=\"path[]\" value=\"";
            // line 49
            yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 49);
            yield "\" id=\"input-path-";
            yield ($context["path_row"] ?? null);
            yield "\" class=\"form-check-input\"/>
      </div>
    </div>
    ";
            // line 52
            $context["path_row"] = (($context["path_row"] ?? null) + 1);
            // line 53
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "</div>
";
        // line 55
        if (($context["pagination"] ?? null)) {
            // line 56
            yield "  <div class=\"modal-footer\">";
            yield ($context["pagination"] ?? null);
            yield "</div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/view/template/common/filemanager_list.twig";
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
        return array (  191 => 56,  189 => 55,  186 => 54,  180 => 53,  178 => 52,  170 => 49,  164 => 48,  152 => 45,  148 => 43,  143 => 42,  137 => 41,  135 => 40,  127 => 37,  121 => 36,  115 => 33,  111 => 31,  106 => 30,  104 => 29,  94 => 22,  90 => 21,  79 => 13,  73 => 12,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  48 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row mb-3\">
  <div class=\"col-sm-5\">
    <a href=\"{{ parent }}\" id=\"button-parent\" data-bs-toggle=\"tooltip\" title=\"{{ button_parent }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-level-up-alt\"></i></a>
    <a href=\"{{ refresh }}\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"{{ button_refresh }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-rotate\"></i></a>
    <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_upload }}\" id=\"button-upload\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i></button>
    <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_folder }}\" id=\"button-folder\" class=\"btn btn-light\"><i class=\"fa-solid fa-folder\"></i></button>
    <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" id=\"button-delete\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
    <input type=\"hidden\" name=\"directory\" value=\"{{ directory }}\" id=\"input-directory\"/>
  </div>
  <div class=\"col-sm-7\">
    <div class=\"input-group\">
      <input type=\"text\" name=\"search\" value=\"{{ filter_name }}\" placeholder=\"{{ entry_search }}\" id=\"input-search\" class=\"form-control\"/>
      <button type=\"button\" id=\"button-search\" data-bs-toggle=\"tooltip\" title=\"{{ button_search }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-search\"></i></button>
    </div>
  </div>
</div>
<div id=\"modal-folder\" class=\"row mb-3\" style=\"display: none;\">
  <div class=\"col-sm-12\">
    <div class=\"input-group\">
      <div class=\"input-group\">
        <input type=\"text\" name=\"folder\" value=\"\" placeholder=\"{{ entry_folder }}\" id=\"input-folder\" class=\"form-control\"/>
        <button type=\"button\" title=\"{{ button_folder }}\" id=\"button-create\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button>
      </div>
    </div>
  </div>
</div>
<hr/>
<div class=\"row row-cols-sm-3 row-cols-lg-4\">
  {% set path_row = 0 %}
  {% for directory in directories %}
    <div class=\"mb-3\">
      <div class=\"mb-1\" style=\"min-height: 140px;\">
        <a href=\"{{ directory.href }}\" class=\"directory mb-1\"><i class=\"fa-solid fa-folder fa-5x\"></i></a>
      </div>
      <div class=\"form-check\">
        <label for=\"input-path-{{ path_row }}\" class=\"form-check-label\">{{ directory.name }}</label>
        <input type=\"checkbox\" name=\"path[]\" value=\"{{ directory.path }}\" id=\"input-path-{{ path_row }}\" class=\"form-check-input\"/>
      </div>
    </div>
    {% set path_row = path_row + 1 %}
  {% endfor %}
  {% for image in images %}
    <div class=\"mb-3\">
      <div class=\"mb-1\" style=\"min-height: 140px;\">
        <a href=\"{{ image.href }}\" class=\"thumbnail mb-1\"><img src=\"{{ image.thumb }}\" alt=\"{{ image.name }}\" title=\"{{ image.name }}\" class=\"img-fluid\"/></a>
      </div>
      <div class=\"form-check\">
        <label for=\"input-path-{{ path_row }}\" class=\"form-check-label\">{{ image.name }}</label>
        <input type=\"checkbox\" name=\"path[]\" value=\"{{ image.path }}\" id=\"input-path-{{ path_row }}\" class=\"form-check-input\"/>
      </div>
    </div>
    {% set path_row = path_row + 1 %}
  {% endfor %}
</div>
{% if pagination %}
  <div class=\"modal-footer\">{{ pagination }}</div>
{% endif %}", "admin/view/template/common/filemanager_list.twig", "/var/www/html/opencart/upload/admin/view/template/common/filemanager_list.twig");
    }
}
