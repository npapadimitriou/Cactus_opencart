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

/* admin/view/template/common/header.twig */
class __TwigTemplate_c2a219d1b8aa9e8aae91730a08ba4994935b832e84fd7cf12ed25d28eb8f7ec9 extends Template
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
        yield "<!DOCTYPE html>
<html dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<head>
  <meta charset=\"UTF-8\"/>
  <title>";
        // line 5
        yield ($context["title"] ?? null);
        yield "</title>
  <base href=\"";
        // line 6
        yield ($context["base"] ?? null);
        yield "\"/>
  ";
        // line 7
        if (($context["description"] ?? null)) {
            // line 8
            yield "    <meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\"/>
  ";
        }
        // line 10
        yield "  ";
        if (($context["keywords"] ?? null)) {
            // line 11
            yield "    <meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>
  ";
        }
        // line 13
        yield "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <meta http-equiv=\"cache-control\" content=\"no-cache\">
  <meta http-equiv=\"expires\" content=\"0\">
  <link href=\"";
        // line 16
        yield ($context["bootstrap"] ?? null);
        yield "\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"";
        // line 17
        yield ($context["icons"] ?? null);
        yield "\" rel=\"stylesheet\" type=\"text/css\"/>
  <link href=\"";
        // line 18
        yield ($context["stylesheet"] ?? null);
        yield "\" rel=\"stylesheet\" type=\"text/css\"/>
  <script src=\"";
        // line 19
        yield ($context["jquery"] ?? null);
        yield "\" type=\"text/javascript\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/common.js\"></script>
  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 22
            yield "    <link type=\"text/css\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 22);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 22);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 22);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 25
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 25);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 25);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 28
            yield "    <script type=\"text/javascript\" src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 28);
            yield "\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "</head>
<body>
<div id=\"container\">
  <div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\"></div>
  <header id=\"header\" class=\"navbar navbar-expand navbar-light bg-light\">
    <div class=\"container-fluid\">
      <a href=\"";
        // line 36
        yield ($context["home"] ?? null);
        yield "\" class=\"navbar-brand d-none d-lg-block\"><img src=\"view/image/logo.png\" alt=\"";
        yield ($context["heading_title"] ?? null);
        yield "\" title=\"";
        yield ($context["heading_title"] ?? null);
        yield "\"/></a>
      ";
        // line 37
        if (($context["logged"] ?? null)) {
            // line 38
            yield "        <button type=\"button\" id=\"button-menu\" class=\"btn btn-link d-inline-block d-lg-none\"><i class=\"fa-solid fa-bars\"></i></button>
        <ul class=\"nav navbar-nav\">
          <li id=\"nav-notification\" class=\"nav-item dropdown\">
            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link dropdown-toggle\"><i class=\"fa-regular fa-bell\"></i>";
            // line 41
            if (($context["notification_total"] ?? null)) {
                yield " <span class=\"badge bg-danger\">";
                yield ($context["notification_total"] ?? null);
                yield "</span>";
            }
            yield "</a>
            <div class=\"dropdown-menu dropdown-menu-end\">
              ";
            // line 43
            if (($context["notifications"] ?? null)) {
                // line 44
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["notifications"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                    // line 45
                    yield "                  <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "href", [], "any", false, false, false, 45);
                    yield "\" data-bs-toggle=\"modal\" class=\"dropdown-item\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "title", [], "any", false, false, false, 45);
                    yield "</a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                yield "                <a href=\"";
                yield ($context["notification_all"] ?? null);
                yield "\" class=\"dropdown-item text-center text-primary\">";
                yield ($context["text_notification_all"] ?? null);
                yield "</a>
              ";
            } else {
                // line 49
                yield "                <span class=\"dropdown-item text-center\">";
                yield ($context["text_no_results"] ?? null);
                yield "</span>
              ";
            }
            // line 51
            yield "            </div>
          </li>
          <li id=\"nav-language\" class=\"nav-item dropdown\">";
            // line 53
            yield ($context["language"] ?? null);
            yield "</li>
          <li id=\"nav-profile\" class=\"nav-item dropdown\">
            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link dropdown-toggle\"><img src=\"";
            // line 55
            yield ($context["image"] ?? null);
            yield "\" alt=\"";
            yield ($context["firstname"] ?? null);
            yield " ";
            yield ($context["lastname"] ?? null);
            yield "\" title=\"";
            yield ($context["firstname"] ?? null);
            yield " ";
            yield ($context["lastname"] ?? null);
            yield "\" class=\"rounded-circle\"/><span class=\"d-none d-md-inline d-lg-inline\">&nbsp;&nbsp;&nbsp;";
            yield ($context["firstname"] ?? null);
            yield " ";
            yield ($context["lastname"] ?? null);
            yield " <i class=\"fa-solid fa-caret-down fa-fw\"></i></span></a>
            <ul class=\"dropdown-menu dropdown-menu-end\">
              <li><a href=\"";
            // line 57
            yield ($context["profile"] ?? null);
            yield "\" class=\"dropdown-item\"><i class=\"fa-solid fa-user-circle fa-fw\"></i> ";
            yield ($context["text_profile"] ?? null);
            yield "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><h6 class=\"dropdown-header\">";
            // line 59
            yield ($context["text_store"] ?? null);
            yield "</h6></li>
              ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 61
                yield "                <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 61);
                yield "\" target=\"_blank\" class=\"dropdown-item\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 61);
                yield "</a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "              <li><hr class=\"dropdown-divider\"></li>
              <li><h6 class=\"dropdown-header\">";
            // line 64
            yield ($context["text_help"] ?? null);
            yield "</h6></li>
              <li><a href=\"https://www.opencart.com\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fa-brands fa-opencart fa-fw\"></i> ";
            // line 65
            yield ($context["text_homepage"] ?? null);
            yield "</a></li>
              <li><a href=\"https://docs.opencart.com\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fa-solid fa-file fa-fw\"></i> ";
            // line 66
            yield ($context["text_documentation"] ?? null);
            yield "</a></li>
              <li><a href=\"https://forum.opencart.com\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fa-solid fa-comments fa-fw\"></i> ";
            // line 67
            yield ($context["text_support"] ?? null);
            yield "</a></li>
            </ul>
          </li>
          <li id=\"nav-logout\" class=\"nav-item\"><a href=\"";
            // line 70
            yield ($context["logout"] ?? null);
            yield "\" class=\"nav-link\"><i class=\"fa-solid fa-sign-out\"></i> <span class=\"d-none d-md-inline\">";
            yield ($context["text_logout"] ?? null);
            yield "</span></a></li>
        </ul>
      ";
        }
        // line 73
        yield "    </div>
  </header>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/view/template/common/header.twig";
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
        return array (  288 => 73,  280 => 70,  274 => 67,  270 => 66,  266 => 65,  262 => 64,  259 => 63,  248 => 61,  244 => 60,  240 => 59,  233 => 57,  216 => 55,  211 => 53,  207 => 51,  201 => 49,  193 => 47,  182 => 45,  177 => 44,  175 => 43,  166 => 41,  161 => 38,  159 => 37,  151 => 36,  143 => 30,  134 => 28,  129 => 27,  118 => 25,  113 => 24,  100 => 22,  96 => 21,  91 => 19,  87 => 18,  83 => 17,  79 => 16,  74 => 13,  68 => 11,  65 => 10,  59 => 8,  57 => 7,  53 => 6,  49 => 5,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
  <meta charset=\"UTF-8\"/>
  <title>{{ title }}</title>
  <base href=\"{{ base }}\"/>
  {% if description %}
    <meta name=\"description\" content=\"{{ description }}\"/>
  {% endif %}
  {% if keywords %}
    <meta name=\"keywords\" content=\"{{ keywords }}\"/>
  {% endif %}
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <meta http-equiv=\"cache-control\" content=\"no-cache\">
  <meta http-equiv=\"expires\" content=\"0\">
  <link href=\"{{ bootstrap }}\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"{{ icons }}\" rel=\"stylesheet\" type=\"text/css\"/>
  <link href=\"{{ stylesheet }}\" rel=\"stylesheet\" type=\"text/css\"/>
  <script src=\"{{ jquery }}\" type=\"text/javascript\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/common.js\"></script>
  {% for style in styles %}
    <link type=\"text/css\" href=\"{{ style.href }}\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
  {% endfor %}
  {% for link in links %}
    <link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
  {% endfor %}
  {% for script in scripts %}
    <script type=\"text/javascript\" src=\"{{ script.href }}\"></script>
  {% endfor %}
</head>
<body>
<div id=\"container\">
  <div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\"></div>
  <header id=\"header\" class=\"navbar navbar-expand navbar-light bg-light\">
    <div class=\"container-fluid\">
      <a href=\"{{ home }}\" class=\"navbar-brand d-none d-lg-block\"><img src=\"view/image/logo.png\" alt=\"{{ heading_title }}\" title=\"{{ heading_title }}\"/></a>
      {% if logged %}
        <button type=\"button\" id=\"button-menu\" class=\"btn btn-link d-inline-block d-lg-none\"><i class=\"fa-solid fa-bars\"></i></button>
        <ul class=\"nav navbar-nav\">
          <li id=\"nav-notification\" class=\"nav-item dropdown\">
            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link dropdown-toggle\"><i class=\"fa-regular fa-bell\"></i>{% if notification_total %} <span class=\"badge bg-danger\">{{ notification_total }}</span>{% endif %}</a>
            <div class=\"dropdown-menu dropdown-menu-end\">
              {% if notifications %}
                {% for notification in notifications %}
                  <a href=\"{{ notification.href }}\" data-bs-toggle=\"modal\" class=\"dropdown-item\">{{ notification.title }}</a>
                {% endfor %}
                <a href=\"{{ notification_all }}\" class=\"dropdown-item text-center text-primary\">{{ text_notification_all }}</a>
              {% else %}
                <span class=\"dropdown-item text-center\">{{ text_no_results }}</span>
              {% endif %}
            </div>
          </li>
          <li id=\"nav-language\" class=\"nav-item dropdown\">{{ language }}</li>
          <li id=\"nav-profile\" class=\"nav-item dropdown\">
            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link dropdown-toggle\"><img src=\"{{ image }}\" alt=\"{{ firstname }} {{ lastname }}\" title=\"{{ firstname }} {{ lastname }}\" class=\"rounded-circle\"/><span class=\"d-none d-md-inline d-lg-inline\">&nbsp;&nbsp;&nbsp;{{ firstname }} {{ lastname }} <i class=\"fa-solid fa-caret-down fa-fw\"></i></span></a>
            <ul class=\"dropdown-menu dropdown-menu-end\">
              <li><a href=\"{{ profile }}\" class=\"dropdown-item\"><i class=\"fa-solid fa-user-circle fa-fw\"></i> {{ text_profile }}</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><h6 class=\"dropdown-header\">{{ text_store }}</h6></li>
              {% for store in stores %}
                <a href=\"{{ store.href }}\" target=\"_blank\" class=\"dropdown-item\">{{ store.name }}</a>
              {% endfor %}
              <li><hr class=\"dropdown-divider\"></li>
              <li><h6 class=\"dropdown-header\">{{ text_help }}</h6></li>
              <li><a href=\"https://www.opencart.com\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fa-brands fa-opencart fa-fw\"></i> {{ text_homepage }}</a></li>
              <li><a href=\"https://docs.opencart.com\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fa-solid fa-file fa-fw\"></i> {{ text_documentation }}</a></li>
              <li><a href=\"https://forum.opencart.com\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fa-solid fa-comments fa-fw\"></i> {{ text_support }}</a></li>
            </ul>
          </li>
          <li id=\"nav-logout\" class=\"nav-item\"><a href=\"{{ logout }}\" class=\"nav-link\"><i class=\"fa-solid fa-sign-out\"></i> <span class=\"d-none d-md-inline\">{{ text_logout }}</span></a></li>
        </ul>
      {% endif %}
    </div>
  </header>
", "admin/view/template/common/header.twig", "/var/www/html/opencart/upload/admin/view/template/common/header.twig");
    }
}
