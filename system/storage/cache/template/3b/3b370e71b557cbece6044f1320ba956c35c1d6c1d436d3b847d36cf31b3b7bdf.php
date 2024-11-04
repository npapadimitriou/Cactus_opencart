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

/* extension/opencart/admin/view/template/dashboard/online_info.twig */
class __TwigTemplate_383c6e7576ffd7a8b991c6adbb9d158e59bf265dff64b9dd883ecd19f76aab74 extends Template
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
        yield "</div>
  <div class=\"tile-body\"><i class=\"fa-solid fa-users\"></i>
    <h2 class=\"float-end\">";
        // line 4
        yield ($context["total"] ?? null);
        yield "</h2>
  </div>
  <div class=\"tile-footer\"><a href=\"";
        // line 6
        yield ($context["online"] ?? null);
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
        return "extension/opencart/admin/view/template/dashboard/online_info.twig";
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
        return array (  51 => 6,  46 => 4,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tile tile-primary\">
  <div class=\"tile-heading\">{{ heading_title }}</div>
  <div class=\"tile-body\"><i class=\"fa-solid fa-users\"></i>
    <h2 class=\"float-end\">{{ total }}</h2>
  </div>
  <div class=\"tile-footer\"><a href=\"{{ online }}\">{{ text_view }}</a></div>
</div>
", "extension/opencart/admin/view/template/dashboard/online_info.twig", "/var/www/html/opencart/upload/extension/opencart/admin/view/template/dashboard/online_info.twig");
    }
}
