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

/* admin/view/template/customer/address_list.twig */
class __TwigTemplate_34804cc6e960a08445a19ef9a481ecc1a89d3ab022356b6aae2f3776a4564307 extends Template
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
        yield "<form id=\"form-address-list\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#address\">
  <table class=\"table table-bordered table-hover\">
    <tbody>
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 5
            yield "        <tr>
          <td class=\"text-start\">
            ";
            // line 7
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 7);
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 7);
            yield "
            <br/>
            ";
            // line 9
            if (CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 9)) {
                // line 10
                yield "              ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 10);
                yield "
              <br/>
            ";
            }
            // line 13
            yield "            ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 13);
            yield "
            <br/>
            ";
            // line 15
            if (CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_2", [], "any", false, false, false, 15)) {
                // line 16
                yield "              ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_2", [], "any", false, false, false, 16);
                yield "
              <br/>
            ";
            }
            // line 19
            yield "            ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 19);
            yield "
            <br/>
            ";
            // line 21
            if (CoreExtension::getAttribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 21)) {
                // line 22
                yield "              ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 22);
                yield "
              <br/>
            ";
            }
            // line 25
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 25)) {
                // line 26
                yield "              ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 26);
                yield "
              <br/>
            ";
            }
            // line 29
            yield "            ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 29);
            yield "</td>
          <td>";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 30)) {
                yield "<strong>";
                yield ($context["text_default"] ?? null);
                yield "</strong>";
            }
            yield "</td>
          <td class=\"text-end\"><button type=\"button\" value=\"";
            // line 31
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "edit", [], "any", false, false, false, 31);
            yield "\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_edit"] ?? null);
            yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"submit\" form=\"form-address-list\" formaction=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "delete", [], "any", false, false, false, 31);
            yield "\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_delete"] ?? null);
            yield "\" onclick=\"return confirm('";
            yield ($context["text_confirm"] ?? null);
            yield "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button></td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "    </tbody>
    <tfoot>
      <tr>
        <td colspan=\"2\"></td>
        <td class=\"text-end\"><button type=\"button\" value=\"";
        // line 38
        yield ($context["address_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_address_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
      </tr>
    </tfoot>
  </table>
</form>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/view/template/customer/address_list.twig";
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
        return array (  145 => 38,  139 => 34,  122 => 31,  114 => 30,  109 => 29,  102 => 26,  99 => 25,  92 => 22,  90 => 21,  84 => 19,  77 => 16,  75 => 15,  69 => 13,  62 => 10,  60 => 9,  53 => 7,  49 => 5,  45 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"form-address-list\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#address\">
  <table class=\"table table-bordered table-hover\">
    <tbody>
      {% for address in addresses %}
        <tr>
          <td class=\"text-start\">
            {{ address.firstname }} {{ address.lastname }}
            <br/>
            {% if address.company %}
              {{ address.company }}
              <br/>
            {% endif %}
            {{ address.address_1 }}
            <br/>
            {% if address.address_2 %}
              {{ address.address_2 }}
              <br/>
            {% endif %}
            {{ address.city }}
            <br/>
            {% if address.postcode %}
              {{ address.postcode }}
              <br/>
            {% endif %}
            {% if address.zone %}
              {{ address.zone }}
              <br/>
            {% endif %}
            {{ address.country }}</td>
          <td>{% if address.default %}<strong>{{ text_default }}</strong>{% endif %}</td>
          <td class=\"text-end\"><button type=\"button\" value=\"{{ address.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"submit\" form=\"form-address-list\" formaction=\"{{ address.delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button></td>
        </tr>
      {% endfor %}
    </tbody>
    <tfoot>
      <tr>
        <td colspan=\"2\"></td>
        <td class=\"text-end\"><button type=\"button\" value=\"{{ address_add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_address_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
      </tr>
    </tfoot>
  </table>
</form>", "admin/view/template/customer/address_list.twig", "/var/www/html/opencart/upload/admin/view/template/customer/address_list.twig");
    }
}
