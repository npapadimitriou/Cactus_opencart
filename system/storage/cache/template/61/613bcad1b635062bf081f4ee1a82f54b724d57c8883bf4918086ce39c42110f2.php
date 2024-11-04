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

/* install/view/template/install/step_1.twig */
class __TwigTemplate_293a2e0482c7b4348345215b6111f561e3a9e448b61e35d942713fea898f0a00 extends Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"float-end\">";
        // line 5
        yield ($context["language"] ?? null);
        yield "</div>
\t\t\t<h1>";
        // line 6
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fab fa-opencart\"></i>&nbsp;&nbsp;&nbsp;";
        // line 11
        yield ($context["text_step_1"] ?? null);
        yield "</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"form-control\" style=\"max-height: 300px; overflow-y: scroll;\">";
        // line 13
        yield ($context["text_terms"] ?? null);
        yield "</div>
\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t<div class=\"col text-end\"><a href=\"";
        // line 15
        yield ($context["continue"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_continue"] ?? null);
        yield "</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 21
        yield ($context["footer"] ?? null);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "install/view/template/install/step_1.twig";
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
        return array (  78 => 21,  67 => 15,  62 => 13,  57 => 11,  49 => 6,  45 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"float-end\">{{ language }}</div>
\t\t\t<h1>{{ heading_title }}</h1>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fab fa-opencart\"></i>&nbsp;&nbsp;&nbsp;{{ text_step_1 }}</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"form-control\" style=\"max-height: 300px; overflow-y: scroll;\">{{ text_terms }}</div>
\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t<div class=\"col text-end\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{{ footer }}", "install/view/template/install/step_1.twig", "/var/www/html/opencart/upload/install/view/template/install/step_1.twig");
    }
}
