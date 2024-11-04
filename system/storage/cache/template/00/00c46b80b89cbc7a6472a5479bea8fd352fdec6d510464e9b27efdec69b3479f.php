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

/* extension/opencart/admin/view/template/dashboard/customer_info.twig */
class __TwigTemplate_5cb99a5d2e7e661865f6e0ef3293edacda0d5abc5e1044c4e9a559dcee429ca8 extends Template
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
        yield "<div class=\"tile tile-primary\">
  <div class=\"tile-heading\">";
        // line 2
        yield ($context["heading_title"] ?? null);
        yield " <span class=\"float-end\">
    ";
        // line 3
        if ((($context["percentage"] ?? null) > 0)) {
            // line 4
            yield "      <i class=\"fa-solid fa-caret-up\"></i>
    ";
        } elseif ((        // line 5
($context["percentage"] ?? null) < 0)) {
            // line 6
            yield "      <i class=\"fa-solid fa-caret-down\"></i>
    ";
        }
        // line 8
        yield "      ";
        yield ($context["percentage"] ?? null);
        yield "%</span></div>
  <div class=\"tile-body\"><i class=\"fa-solid fa-user\"></i>
    <h2 class=\"float-end\">";
        // line 10
        yield ($context["total"] ?? null);
        yield "</h2>
  </div>
  <div class=\"tile-footer\"><a href=\"";
        // line 12
        yield ($context["customer"] ?? null);
        yield "\">";
        yield ($context["text_view"] ?? null);
        yield "</a></div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/dashboard/customer_info.twig";
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
        return array (  67 => 12,  62 => 10,  56 => 8,  52 => 6,  50 => 5,  47 => 4,  45 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tile tile-primary\">
  <div class=\"tile-heading\">{{ heading_title }} <span class=\"float-end\">
    {% if percentage > 0 %}
      <i class=\"fa-solid fa-caret-up\"></i>
    {% elseif percentage < 0 %}
      <i class=\"fa-solid fa-caret-down\"></i>
    {% endif %}
      {{ percentage }}%</span></div>
  <div class=\"tile-body\"><i class=\"fa-solid fa-user\"></i>
    <h2 class=\"float-end\">{{ total }}</h2>
  </div>
  <div class=\"tile-footer\"><a href=\"{{ customer }}\">{{ text_view }}</a></div>
</div>
", "extension/opencart/admin/view/template/dashboard/customer_info.twig", "/var/www/html/opencart/upload/extension/opencart/admin/view/template/dashboard/customer_info.twig");
    }
}
