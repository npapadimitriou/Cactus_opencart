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

/* catalog/view/template/common/footer.twig */
class __TwigTemplate_383efec8262e3e31b29479016202c20528cf2c523ee77812b2276f855ab1c29f extends Template
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
        yield "</main>
<footer>
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 5
        if ((($context["informations"] ?? null) || ($context["blog"] ?? null))) {
            // line 6
            yield "      <div class=\"col-sm-3\">
        <h5>";
            // line 7
            yield ($context["text_information"] ?? null);
            yield "</h5>
        <ul class=\"list-unstyled\">
          ";
            // line 9
            if (($context["blog"] ?? null)) {
                // line 10
                yield "          <li><a href=\"";
                yield ($context["blog"] ?? null);
                yield "\">";
                yield ($context["text_blog"] ?? null);
                yield "</a></li>
          ";
            }
            // line 12
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 13
                yield "            <li><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 13);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 13);
                yield "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "        </ul>
      </div>
      ";
        }
        // line 18
        yield "      <div class=\"col-sm-3\">
        <h5>";
        // line 19
        yield ($context["text_service"] ?? null);
        yield "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 21
        yield ($context["contact"] ?? null);
        yield "\">";
        yield ($context["text_contact"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 22
        yield ($context["return"] ?? null);
        yield "\">";
        yield ($context["text_return"] ?? null);
        yield "</a></li>
          ";
        // line 23
        if (($context["gdpr"] ?? null)) {
            // line 24
            yield "            <li><a href=\"";
            yield ($context["gdpr"] ?? null);
            yield "\">";
            yield ($context["text_gdpr"] ?? null);
            yield "</a></li>
          ";
        }
        // line 26
        yield "          <li><a href=\"";
        yield ($context["sitemap"] ?? null);
        yield "\">";
        yield ($context["text_sitemap"] ?? null);
        yield "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 30
        yield ($context["text_extra"] ?? null);
        yield "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 32
        yield ($context["manufacturer"] ?? null);
        yield "\">";
        yield ($context["text_manufacturer"] ?? null);
        yield "</a></li>
          ";
        // line 33
        if (($context["affiliate"] ?? null)) {
            // line 34
            yield "            <li><a href=\"";
            yield ($context["affiliate"] ?? null);
            yield "\">";
            yield ($context["text_affiliate"] ?? null);
            yield "</a></li>
          ";
        }
        // line 36
        yield "          <li><a href=\"";
        yield ($context["special"] ?? null);
        yield "\">";
        yield ($context["text_special"] ?? null);
        yield "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 40
        yield ($context["text_account"] ?? null);
        yield "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 42
        yield ($context["account"] ?? null);
        yield "\">";
        yield ($context["text_account"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 43
        yield ($context["order"] ?? null);
        yield "\">";
        yield ($context["text_order"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 44
        yield ($context["wishlist"] ?? null);
        yield "\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 45
        yield ($context["newsletter"] ?? null);
        yield "\">";
        yield ($context["text_newsletter"] ?? null);
        yield "</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p>";
        // line 50
        yield ($context["powered"] ?? null);
        yield "</p>
    <!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
  </div>
</footer>
";
        // line 57
        yield ($context["cookie"] ?? null);
        yield "
<script src=\"";
        // line 58
        yield ($context["bootstrap"] ?? null);
        yield "\" type=\"text/javascript\"></script>
";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 60
            yield "  <script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 60);
            yield "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "</body></html>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/view/template/common/footer.twig";
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
        return array (  220 => 62,  211 => 60,  207 => 59,  203 => 58,  199 => 57,  189 => 50,  179 => 45,  173 => 44,  167 => 43,  161 => 42,  156 => 40,  146 => 36,  138 => 34,  136 => 33,  130 => 32,  125 => 30,  115 => 26,  107 => 24,  105 => 23,  99 => 22,  93 => 21,  88 => 19,  85 => 18,  80 => 15,  69 => 13,  64 => 12,  56 => 10,  54 => 9,  49 => 7,  46 => 6,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("</main>
<footer>
  <div class=\"container\">
    <div class=\"row\">
      {% if informations or blog %}
      <div class=\"col-sm-3\">
        <h5>{{ text_information }}</h5>
        <ul class=\"list-unstyled\">
          {% if blog %}
          <li><a href=\"{{ blog }}\">{{ text_blog }}</a></li>
          {% endif %}
          {% for information in informations %}
            <li><a href=\"{{ information.href }}\">{{ information.title }}</a></li>
          {% endfor %}
        </ul>
      </div>
      {% endif %}
      <div class=\"col-sm-3\">
        <h5>{{ text_service }}</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"{{ contact }}\">{{ text_contact }}</a></li>
          <li><a href=\"{{ return }}\">{{ text_return }}</a></li>
          {% if gdpr %}
            <li><a href=\"{{ gdpr }}\">{{ text_gdpr }}</a></li>
          {% endif %}
          <li><a href=\"{{ sitemap }}\">{{ text_sitemap }}</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>{{ text_extra }}</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"{{ manufacturer }}\">{{ text_manufacturer }}</a></li>
          {% if affiliate %}
            <li><a href=\"{{ affiliate }}\">{{ text_affiliate }}</a></li>
          {% endif %}
          <li><a href=\"{{ special }}\">{{ text_special }}</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>{{ text_account }}</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"{{ account }}\">{{ text_account }}</a></li>
          <li><a href=\"{{ order }}\">{{ text_order }}</a></li>
          <li><a href=\"{{ wishlist }}\">{{ text_wishlist }}</a></li>
          <li><a href=\"{{ newsletter }}\">{{ text_newsletter }}</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p>{{ powered }}</p>
    <!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
  </div>
</footer>
{{ cookie }}
<script src=\"{{ bootstrap }}\" type=\"text/javascript\"></script>
{% for script in scripts %}
  <script src=\"{{ script.href }}\" type=\"text/javascript\"></script>
{% endfor %}
</body></html>
", "catalog/view/template/common/footer.twig", "/var/www/html/opencart/upload/catalog/view/template/common/footer.twig");
    }
}
