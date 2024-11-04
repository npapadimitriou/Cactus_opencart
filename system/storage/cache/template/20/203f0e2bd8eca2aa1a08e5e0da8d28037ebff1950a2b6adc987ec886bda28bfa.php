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

/* catalog/view/template/product/review_list.twig */
class __TwigTemplate_ec7a445482ac7689bc66b37fc9a5a4d2b2b7e2c1d04db4f1466bdd8d46536d0d extends Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                yield "    <table class=\"table table-striped table-bordered\">
      <tr>
        <td style=\"width: 50%;\"><strong>";
                // line 5
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 5);
                yield "</strong></td>
        <td class=\"text-end\">";
                // line 6
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 6);
                yield "</td>
      </tr>
      <tr>
        <td colspan=\"2\"><p>";
                // line 9
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 9);
                yield "</p>
          <div class=\"rating\">
            ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 12
                    yield "              ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 12) < $context["i"])) {
                        // line 13
                        yield "                <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
              ";
                    } else {
                        // line 15
                        yield "                <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
              ";
                    }
                    // line 17
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                yield "          </div></td>
      </tr>
    </table>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "  <div class=\"text-end\">";
            yield ($context["pagination"] ?? null);
            yield "</div>
";
        } else {
            // line 24
            yield "  <p class=\"text-center\">";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/view/template/product/review_list.twig";
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
        return array (  100 => 24,  94 => 22,  85 => 18,  79 => 17,  75 => 15,  71 => 13,  68 => 12,  64 => 11,  59 => 9,  53 => 6,  49 => 5,  45 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if reviews %}
  {% for review in reviews %}
    <table class=\"table table-striped table-bordered\">
      <tr>
        <td style=\"width: 50%;\"><strong>{{ review.author }}</strong></td>
        <td class=\"text-end\">{{ review.date_added }}</td>
      </tr>
      <tr>
        <td colspan=\"2\"><p>{{ review.text }}</p>
          <div class=\"rating\">
            {% for i in 1..5 %}
              {% if review.rating < i %}
                <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
              {% else %}
                <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
              {% endif %}
            {% endfor %}
          </div></td>
      </tr>
    </table>
  {% endfor %}
  <div class=\"text-end\">{{ pagination }}</div>
{% else %}
  <p class=\"text-center\">{{ text_no_results }}</p>
{% endif %}
", "catalog/view/template/product/review_list.twig", "/var/www/html/opencart/upload/catalog/view/template/product/review_list.twig");
    }
}
