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

/* admin/view/template/common/security_list.twig */
class __TwigTemplate_178605e1eb0f20cecbb657c83e241f86b62d5752dcae6fb54a202a97cdd68485 extends Template
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
        yield "<div id=\"modal-security\" class=\"modal show\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title text-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i> ";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div id=\"accordion\" class=\"accordion\">
        ";
        // line 9
        if (($context["install"] ?? null)) {
            // line 10
            yield "          <div id=\"security-install\" class=\"accordion-item\">
            <h5 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-install\" class=\"accordion-button collapsed\"><span class=\"fa-solid fa-trash-can me-1\"></span> ";
            // line 11
            yield ($context["text_install"] ?? null);
            yield "</button></h5>
            <div id=\"accordion-install\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <p>";
            // line 14
            yield ($context["text_install_description"] ?? null);
            yield "</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">";
            // line 16
            yield ($context["text_path"] ?? null);
            yield "</div>
                  <input type=\"text\" value=\"";
            // line 17
            yield ($context["install"] ?? null);
            yield "\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" id=\"button-install\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i> ";
            // line 20
            yield ($context["button_delete"] ?? null);
            yield "</button>
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 26
        yield "        ";
        if (($context["storage"] ?? null)) {
            // line 27
            yield "          <div id=\"security-storage\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-storage\" class=\"accordion-button collapsed\"><span class=\"fa-solid fa-folder me-1\"></span> ";
            // line 28
            yield ($context["text_storage"] ?? null);
            yield "</button></h2>
            <div id=\"accordion-storage\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <form id=\"form-storage\">
                  <p>";
            // line 32
            yield ($context["text_storage_description"] ?? null);
            yield "</p>
                  <div class=\"mb-3\">
                    <label class=\"form-label\">";
            // line 34
            yield ($context["entry_path_current"] ?? null);
            yield "</label>
                    <input type=\"text\" value=\"";
            // line 35
            yield ($context["storage"] ?? null);
            yield "\" class=\"form-control is-invalid\" readonly/>
                  </div>
                  <div class=\"mb-3\">
                    <label class=\"form-label\">";
            // line 38
            yield ($context["entry_path_new"] ?? null);
            yield "</label>
                    <div class=\"input-group\">
                      <select id=\"input-path\" class=\"form-select\">
                        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["paths"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
                // line 42
                yield "                          <option value=\"";
                yield $context["path"];
                yield "\">";
                yield $context["path"];
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "                      </select>
                      <input type=\"text\" value=\"storage\" placeholder=\"";
            // line 45
            yield ($context["text_path"] ?? null);
            yield "\" id=\"input-storage\" class=\"form-control w-50\"/>
                    </div>
                    <div class=\"form-text\">";
            // line 47
            yield ($context["help_storage"] ?? null);
            yield "</div>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"button\" id=\"button-storage\" class=\"btn btn-danger\"><span class=\"fa-solid fa-circle-right\"></span> ";
            // line 50
            yield ($context["button_move"] ?? null);
            yield "</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        ";
        }
        // line 57
        yield "        ";
        if (($context["storage_delete"] ?? null)) {
            // line 58
            yield "          <div id=\"security-storage-delete\" class=\"accordion-item\">
            <h5 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-storage-delete\" class=\"accordion-button collapsed\"><span class=\"fa-solid fa-trash-can me-1\"></span> ";
            // line 59
            yield ($context["text_storage_delete"] ?? null);
            yield "</button></h5>
            <div id=\"accordion-storage-delete\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <p>";
            // line 62
            yield ($context["text_storage_delete_description"] ?? null);
            yield "</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">";
            // line 64
            yield ($context["text_path"] ?? null);
            yield "</div>
                  <input type=\"text\" value=\"";
            // line 65
            yield ($context["storage_delete"] ?? null);
            yield "\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" value=\"storage\" id=\"button-storage-delete\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i> ";
            // line 68
            yield ($context["button_delete"] ?? null);
            yield "</button>
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 74
        yield "        ";
        if (($context["admin"] ?? null)) {
            // line 75
            yield "          <div id=\"security-admin\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-admin\" class=\"accordion-button collapsed\"><span class=\"fa-solid fa-folder me-1\"></span> ";
            // line 76
            yield ($context["text_admin"] ?? null);
            yield "</button></h2>
            <div id=\"accordion-admin\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">

                <form id=\"form-admin\">
                  <p>";
            // line 81
            yield ($context["text_admin_description"] ?? null);
            yield "</p>
                  <div class=\"mb-3\">
                    <div class=\"input-group\">
                      <div class=\"input-group-text\">";
            // line 84
            yield ($context["text_path"] ?? null);
            yield "</div>
                      <input type=\"text\" name=\"name\" id=\"input-admin\" value=\"admin\" placeholder=\"";
            // line 85
            yield ($context["entry_name"] ?? null);
            yield "\" class=\"form-control is-invalid\"/>
                    </div>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"button\" id=\"button-admin\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-right\"></i> ";
            // line 89
            yield ($context["button_move"] ?? null);
            yield "</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        ";
        }
        // line 97
        yield "        ";
        if (($context["admin_delete"] ?? null)) {
            // line 98
            yield "          <div id=\"security-admin-delete\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-admin-delete\" class=\"accordion-button collapsed\"><span class=\"fa-solid fa-trash-can me-1\"></span> ";
            // line 99
            yield ($context["text_admin_delete"] ?? null);
            yield "</button></h2>
            <div id=\"accordion-admin-delete\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <p>";
            // line 102
            yield ($context["text_admin_delete_description"] ?? null);
            yield "</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">";
            // line 104
            yield ($context["text_path"] ?? null);
            yield "</div>
                  <input type=\"text\" value=\"";
            // line 105
            yield ($context["admin_delete"] ?? null);
            yield "\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" value=\"admin\" id=\"button-admin-delete\" class=\"btn btn-danger\"><i class=\"fa-solid fa-trash-can\"></i> ";
            // line 108
            yield ($context["button_delete"] ?? null);
            yield "</button>
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 114
        yield "      </div>
    </div>
  </div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/view/template/common/security_list.twig";
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
        return array (  273 => 114,  264 => 108,  258 => 105,  254 => 104,  249 => 102,  243 => 99,  240 => 98,  237 => 97,  226 => 89,  219 => 85,  215 => 84,  209 => 81,  201 => 76,  198 => 75,  195 => 74,  186 => 68,  180 => 65,  176 => 64,  171 => 62,  165 => 59,  162 => 58,  159 => 57,  149 => 50,  143 => 47,  138 => 45,  135 => 44,  124 => 42,  120 => 41,  114 => 38,  108 => 35,  104 => 34,  99 => 32,  92 => 28,  89 => 27,  86 => 26,  77 => 20,  71 => 17,  67 => 16,  62 => 14,  56 => 11,  53 => 10,  51 => 9,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modal-security\" class=\"modal show\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title text-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i> {{ heading_title }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div id=\"accordion\" class=\"accordion\">
        {% if install %}
          <div id=\"security-install\" class=\"accordion-item\">
            <h5 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-install\" class=\"accordion-button collapsed\"><span class=\"fa-solid fa-trash-can me-1\"></span> {{ text_install }}</button></h5>
            <div id=\"accordion-install\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <p>{{ text_install_description }}</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">{{ text_path }}</div>
                  <input type=\"text\" value=\"{{ install }}\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" id=\"button-install\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_delete }}</button>
                </div>
              </div>
            </div>
          </div>
        {% endif %}
        {% if storage %}
          <div id=\"security-storage\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-storage\" class=\"accordion-button collapsed\"><span class=\"fa-solid fa-folder me-1\"></span> {{ text_storage }}</button></h2>
            <div id=\"accordion-storage\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <form id=\"form-storage\">
                  <p>{{ text_storage_description }}</p>
                  <div class=\"mb-3\">
                    <label class=\"form-label\">{{ entry_path_current }}</label>
                    <input type=\"text\" value=\"{{ storage }}\" class=\"form-control is-invalid\" readonly/>
                  </div>
                  <div class=\"mb-3\">
                    <label class=\"form-label\">{{ entry_path_new }}</label>
                    <div class=\"input-group\">
                      <select id=\"input-path\" class=\"form-select\">
                        {% for path in paths %}
                          <option value=\"{{ path }}\">{{ path }}</option>
                        {% endfor %}
                      </select>
                      <input type=\"text\" value=\"storage\" placeholder=\"{{ text_path }}\" id=\"input-storage\" class=\"form-control w-50\"/>
                    </div>
                    <div class=\"form-text\">{{ help_storage }}</div>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"button\" id=\"button-storage\" class=\"btn btn-danger\"><span class=\"fa-solid fa-circle-right\"></span> {{ button_move }}</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        {% endif %}
        {% if storage_delete %}
          <div id=\"security-storage-delete\" class=\"accordion-item\">
            <h5 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-storage-delete\" class=\"accordion-button collapsed\"><span class=\"fa-solid fa-trash-can me-1\"></span> {{ text_storage_delete }}</button></h5>
            <div id=\"accordion-storage-delete\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <p>{{ text_storage_delete_description }}</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">{{ text_path }}</div>
                  <input type=\"text\" value=\"{{ storage_delete }}\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" value=\"storage\" id=\"button-storage-delete\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_delete }}</button>
                </div>
              </div>
            </div>
          </div>
        {% endif %}
        {% if admin %}
          <div id=\"security-admin\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-admin\" class=\"accordion-button collapsed\"><span class=\"fa-solid fa-folder me-1\"></span> {{ text_admin }}</button></h2>
            <div id=\"accordion-admin\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">

                <form id=\"form-admin\">
                  <p>{{ text_admin_description }}</p>
                  <div class=\"mb-3\">
                    <div class=\"input-group\">
                      <div class=\"input-group-text\">{{ text_path }}</div>
                      <input type=\"text\" name=\"name\" id=\"input-admin\" value=\"admin\" placeholder=\"{{ entry_name }}\" class=\"form-control is-invalid\"/>
                    </div>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"button\" id=\"button-admin\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-right\"></i> {{ button_move }}</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        {% endif %}
        {% if admin_delete %}
          <div id=\"security-admin-delete\" class=\"accordion-item\">
            <h2 class=\"accordion-header\"><button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion-admin-delete\" class=\"accordion-button collapsed\"><span class=\"fa-solid fa-trash-can me-1\"></span> {{ text_admin_delete }}</button></h2>
            <div id=\"accordion-admin-delete\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">
              <div class=\"modal-body\">
                <p>{{ text_admin_delete_description }}</p>
                <div class=\"input-group mb-3\">
                  <div class=\"input-group-text\">{{ text_path }}</div>
                  <input type=\"text\" value=\"{{ admin_delete }}\" class=\"form-control is-invalid\" readonly/>
                </div>
                <div class=\"text-end\">
                  <button type=\"button\" value=\"admin\" id=\"button-admin-delete\" class=\"btn btn-danger\"><i class=\"fa-solid fa-trash-can\"></i> {{ button_delete }}</button>
                </div>
              </div>
            </div>
          </div>
        {% endif %}
      </div>
    </div>
  </div>
</div>", "admin/view/template/common/security_list.twig", "/var/www/html/opencart/upload/admin/view/template/common/security_list.twig");
    }
}
