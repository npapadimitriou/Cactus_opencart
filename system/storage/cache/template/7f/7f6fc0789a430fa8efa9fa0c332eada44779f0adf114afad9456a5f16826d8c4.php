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

/* catalog/view/template/common/home.twig */
class __TwigTemplate_3a1fb3f60b0b7ce7a45857240fe1ceccf79b3d3d609c04f86986d1fc3cf8a19f extends Template
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
<div id=\"common-home\" class=\"container\">
  <div class=\"row\">";
        // line 3
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 4
        yield ($context["content_top"] ?? null);
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 5
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 7
        yield ($context["footer"] ?? null);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/view/template/common/home.twig";
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
        return array (  57 => 7,  52 => 5,  47 => 4,  43 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"common-home\" class=\"container\">
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}{{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}", "catalog/view/template/common/home.twig", "/var/www/html/opencart/upload/catalog/view/template/common/home.twig");
    }
}
