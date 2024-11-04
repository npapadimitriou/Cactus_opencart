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

/* extension/opencart/catalog/view/template/checkout/coupon.twig */
class __TwigTemplate_6f57a35e0d48d165661009e7610664499a563547e7b48ddfeda5defe74630e8b extends Template
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
        yield "<div class=\"accordion-item\">
  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-coupon\">";
        // line 2
        yield ($context["heading_title"] ?? null);
        yield "</button></h2>
  <div id=\"collapse-coupon\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
    <div class=\"accordion-body\">
      <form id=\"form-coupon\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        // line 5
        yield ($context["list"] ?? null);
        yield "\" data-oc-target=\"#shopping-cart\">
        <div class=\"row mb-3\">
          <label for=\"input-coupon\" class=\"col-md-4 col-form-label\">";
        // line 7
        yield ($context["entry_coupon"] ?? null);
        yield "</label>
          <div class=\"col-md-8\">
            <input type=\"text\" name=\"coupon\" value=\"";
        // line 9
        yield ($context["coupon"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_coupon"] ?? null);
        yield "\" id=\"input-coupon\" class=\"form-control\"/>
          </div>
        </div>
      </form>
      <div class=\"text-end\">
        <button type=\"submit\" form=\"form-coupon\" formaction=\"";
        // line 14
        yield ($context["save"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_coupon"] ?? null);
        yield "</button>
        <button type=\"submit\" form=\"form-coupon\" formaction=\"";
        // line 15
        yield ($context["remove"] ?? null);
        yield "\" class=\"btn btn-danger\">";
        yield ($context["button_remove"] ?? null);
        yield "</button>
      </div>
    </div>
  </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/checkout/coupon.twig";
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
        return array (  73 => 15,  67 => 14,  57 => 9,  52 => 7,  47 => 5,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"accordion-item\">
  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-coupon\">{{ heading_title }}</button></h2>
  <div id=\"collapse-coupon\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
    <div class=\"accordion-body\">
      <form id=\"form-coupon\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ list }}\" data-oc-target=\"#shopping-cart\">
        <div class=\"row mb-3\">
          <label for=\"input-coupon\" class=\"col-md-4 col-form-label\">{{ entry_coupon }}</label>
          <div class=\"col-md-8\">
            <input type=\"text\" name=\"coupon\" value=\"{{ coupon }}\" placeholder=\"{{ entry_coupon }}\" id=\"input-coupon\" class=\"form-control\"/>
          </div>
        </div>
      </form>
      <div class=\"text-end\">
        <button type=\"submit\" form=\"form-coupon\" formaction=\"{{ save }}\" class=\"btn btn-primary\">{{ button_coupon }}</button>
        <button type=\"submit\" form=\"form-coupon\" formaction=\"{{ remove }}\" class=\"btn btn-danger\">{{ button_remove }}</button>
      </div>
    </div>
  </div>
</div>
", "extension/opencart/catalog/view/template/checkout/coupon.twig", "/var/www/html/opencart/upload/extension/opencart/catalog/view/template/checkout/coupon.twig");
    }
}