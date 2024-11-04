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

/* catalog/view/template/common/search.twig */
class __TwigTemplate_a9d27514222cd1a95b711fb3071b0a687a93ee68d2c0eabb11256fb18a8cce2e extends Template
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
        yield "<form id=\"search\" method=\"get\" action=\"index.php\" class=\"input-group mb-3\">
  <input type=\"hidden\" name=\"language\" value=\"";
        // line 2
        yield ($context["language"] ?? null);
        yield "\"> <input type=\"hidden\" name=\"route\" value=\"product/search\">
\t<input type=\"text\" name=\"search\" value=\"";
        // line 3
        yield ($context["search"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_search"] ?? null);
        yield "\" class=\"form-control form-control-lg\"/>  
\t<button type=\"submit\" class=\"btn btn-light btn-lg\"><i class=\"fa-solid fa-magnifying-glass\"></i></button>
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/view/template/common/search.twig";
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
        return array (  45 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"search\" method=\"get\" action=\"index.php\" class=\"input-group mb-3\">
  <input type=\"hidden\" name=\"language\" value=\"{{ language }}\"> <input type=\"hidden\" name=\"route\" value=\"product/search\">
\t<input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"{{ text_search }}\" class=\"form-control form-control-lg\"/>  
\t<button type=\"submit\" class=\"btn btn-light btn-lg\"><i class=\"fa-solid fa-magnifying-glass\"></i></button>
</form>
", "catalog/view/template/common/search.twig", "/var/www/html/opencart/upload/catalog/view/template/common/search.twig");
    }
}
