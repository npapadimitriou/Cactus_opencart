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

/* catalog/view/template/product/thumb.twig */
class __TwigTemplate_1486bb3f71d23fd8be2ab1ba73f8ec0d95769d288963bf3b777414e9c7d01df6 extends Template
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
        yield "<div class=\"product-thumb\">
  <div class=\"image\"><a href=\"";
        // line 2
        yield ($context["href"] ?? null);
        yield "\"><img src=\"";
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"";
        yield ($context["name"] ?? null);
        yield "\" title=\"";
        yield ($context["name"] ?? null);
        yield "\" class=\"img-fluid\"/></a></div>
  <div class=\"content\">
    <div class=\"description\">
      <h4><a href=\"";
        // line 5
        yield ($context["href"] ?? null);
        yield "\">";
        yield ($context["name"] ?? null);
        yield "</a></h4>
      <p>";
        // line 6
        yield ($context["description"] ?? null);
        yield "</p>
            

      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            yield "         <p>";
            yield $context["category"];
            yield "</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "      ";
        if (($context["price"] ?? null)) {
            // line 13
            yield "        <div class=\"price\">
          ";
            // line 14
            if ( !($context["special"] ?? null)) {
                // line 15
                yield "            <span class=\"price-new\">";
                yield ($context["price"] ?? null);
                yield " </span>
          ";
            } else {
                // line 17
                yield "            <span class=\"price-new\">";
                yield ($context["special"] ?? null);
                yield "</span> <span class=\"price-old\">";
                yield ($context["price"] ?? null);
                yield "</span>
          ";
            }
            // line 19
            yield "          ";
            if (($context["tax"] ?? null)) {
                // line 20
                yield "            <span class=\"price-tax\">";
                yield ($context["text_tax"] ?? null);
                yield " ";
                yield ($context["tax"] ?? null);
                yield "</span>
          ";
            }
            // line 22
            yield "        </div>
      ";
        }
        // line 24
        yield "      ";
        if ((($context["review_status"] ?? null) && ($context["rating"] ?? null))) {
            // line 25
            yield "        <div class=\"rating\">
          ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 27
                yield "            ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 28
                    yield "              <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
            ";
                } else {
                    // line 30
                    yield "              <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
            ";
                }
                // line 32
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "        </div>
      ";
        }
        // line 35
        yield "    </div>
    <form method=\"post\"  data-oc-toggle=\"ajax\" data-oc-load=\"";
        // line 36
        yield ($context["cart"] ?? null);
        yield "\" data-oc-target=\"#header-cart\">
      <div class=\"button-group\">
      ";
        // line 38
        if ((($context["stock_cactus"] ?? null) == 5)) {
            // line 39
            yield "        <button type=\"submit\" formaction=\"";
            yield ($context["cart_add"] ?? null);
            yield "\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_cart"] ?? null);
            yield "\"><i class=\"fa-solid fa-shopping-cart\"></i></button>
      ";
        } else {
            // line 41
            yield "        <button type=\"button\" id=\"notify-me-button\" class=\"btn btn-default\">Ειδοποίησέ Με</button>

         <!-- Modal for Email Input -->
            <div id=\"notifyModal\" class=\"modal\" style=\"display:none;\">
                <div class=\"modal-content\">
                    <span class=\"close\">&times;</span>
                    <h3>Get Notified When This Product is Back in Stock</h3>
                    <form id=\"notifyForm\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
            // line 48
            yield ($context["cart"] ?? null);
            yield "\">
                        <label for=\"email\">Enter your email:</label>
                        <input type=\"email\" id=\"email\" name=\"email\" required>
                        <input type=\"hidden\" id=\"product_id1\" name=\"product_id\" value=\"";
            // line 51
            yield ($context["product_id"] ?? null);
            yield "\"> <!-- Pass the product ID -->
                        <button id=\" notifyFormSubmitBtn\" formaction=\"";
            // line 52
            yield ($context["notify"] ?? null);
            yield "\" type=\"submit\" class=\"btn btn-primary\">Submit</button>
                    </form>
                </div>
            </div>
      ";
        }
        // line 57
        yield "        <button type=\"submit\" formaction=\"";
        yield ($context["wishlist_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_wishlist"] ?? null);
        yield "\"><i class=\"fa-solid fa-heart\"></i></button>
        <button type=\"submit\" formaction=\"";
        // line 58
        yield ($context["compare_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_compare"] ?? null);
        yield "\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
      </div>
      <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 60
        yield ($context["product_id"] ?? null);
        yield "\"/> <input type=\"hidden\" name=\"quantity\" value=\"";
        yield ($context["minimum"] ?? null);
        yield "\"/>
    </form>
  </div>
</div>



<script>
            // Open the modal when \"Notify Me\" button is clicked
              \$('#notify-me-button').on('click', function() {
                  \$('#notifyModal').show();
              });

              // Close the modal when the \"x\" is clicked
              \$('.close').on('click', function() {
                  \$('#notifyModal').hide();
              });

            ";
        // line 111
        yield "            // Handle form submission with AJAX
            ";
        // line 134
        yield "          </script>

<style>
/* Simple styling for the modal */
.modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); }
.modal-content { margin: 15% auto; padding: 20px; width: 300px; background: #fff; }
.close { float: right; cursor: pointer; font-size: 20px; }
</style>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalog/view/template/product/thumb.twig";
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
        return array (  231 => 134,  228 => 111,  205 => 60,  198 => 58,  191 => 57,  183 => 52,  179 => 51,  173 => 48,  164 => 41,  156 => 39,  154 => 38,  149 => 36,  146 => 35,  142 => 33,  136 => 32,  132 => 30,  128 => 28,  125 => 27,  121 => 26,  118 => 25,  115 => 24,  111 => 22,  103 => 20,  100 => 19,  92 => 17,  86 => 15,  84 => 14,  81 => 13,  78 => 12,  69 => 10,  65 => 9,  59 => 6,  53 => 5,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"product-thumb\">
  <div class=\"image\"><a href=\"{{ href }}\"><img src=\"{{ thumb }}\" alt=\"{{ name }}\" title=\"{{ name }}\" class=\"img-fluid\"/></a></div>
  <div class=\"content\">
    <div class=\"description\">
      <h4><a href=\"{{ href }}\">{{ name }}</a></h4>
      <p>{{ description }}</p>
            

      {% for category in data %}
         <p>{{ category }}</p>
      {% endfor %}
      {% if price %}
        <div class=\"price\">
          {% if not special %}
            <span class=\"price-new\">{{ price }} </span>
          {% else %}
            <span class=\"price-new\">{{ special }}</span> <span class=\"price-old\">{{ price }}</span>
          {% endif %}
          {% if tax %}
            <span class=\"price-tax\">{{ text_tax }} {{ tax }}</span>
          {% endif %}
        </div>
      {% endif %}
      {% if review_status and rating %}
        <div class=\"rating\">
          {% for i in 1..5 %}
            {% if rating < i %}
              <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
            {% else %}
              <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
            {% endif %}
          {% endfor %}
        </div>
      {% endif %}
    </div>
    <form method=\"post\"  data-oc-toggle=\"ajax\" data-oc-load=\"{{ cart }}\" data-oc-target=\"#header-cart\">
      <div class=\"button-group\">
      {% if stock_cactus == 5 %}
        <button type=\"submit\" formaction=\"{{ cart_add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_cart }}\"><i class=\"fa-solid fa-shopping-cart\"></i></button>
      {% else %}
        <button type=\"button\" id=\"notify-me-button\" class=\"btn btn-default\">Ειδοποίησέ Με</button>

         <!-- Modal for Email Input -->
            <div id=\"notifyModal\" class=\"modal\" style=\"display:none;\">
                <div class=\"modal-content\">
                    <span class=\"close\">&times;</span>
                    <h3>Get Notified When This Product is Back in Stock</h3>
                    <form id=\"notifyForm\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ cart }}\">
                        <label for=\"email\">Enter your email:</label>
                        <input type=\"email\" id=\"email\" name=\"email\" required>
                        <input type=\"hidden\" id=\"product_id1\" name=\"product_id\" value=\"{{ product_id }}\"> <!-- Pass the product ID -->
                        <button id=\" notifyFormSubmitBtn\" formaction=\"{{ notify }}\" type=\"submit\" class=\"btn btn-primary\">Submit</button>
                    </form>
                </div>
            </div>
      {% endif %}
        <button type=\"submit\" formaction=\"{{ wishlist_add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_wishlist }}\"><i class=\"fa-solid fa-heart\"></i></button>
        <button type=\"submit\" formaction=\"{{ compare_add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_compare }}\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
      </div>
      <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\"/> <input type=\"hidden\" name=\"quantity\" value=\"{{ minimum }}\"/>
    </form>
  </div>
</div>



<script>
            // Open the modal when \"Notify Me\" button is clicked
              \$('#notify-me-button').on('click', function() {
                  \$('#notifyModal').show();
              });

              // Close the modal when the \"x\" is clicked
              \$('.close').on('click', function() {
                  \$('#notifyModal').hide();
              });

            {# \$('#notifyForm').on('submit', function(e) {
                e.preventDefault();
                alert(\"hooray\");

                \$.ajax({
                    url: 'index.php?route=index.php?route=product/product/notify',
                    type: 'post',
                    data: \$('#notifyForm').serialize(),
                    dataType: 'json',
                    contentType: 'application/x-www-form-urlencoded',
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        \$('#notifyFormSubmitBtn').button('loading');
                    },
                    complete: function() {
                        \$('#notifyFormSubmitBtn').button('reset');
                    },
                    success: function(json) {
                        console.log(json);


                        if (json['success']) {
                            \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                            \$('#header-cart').load('index.php?route=common/cart.info&language={{ language }}');
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
}); #}
            // Handle form submission with AJAX
            {# document.getElementById('notifyForm').addEventListener('submit', function(e) {
                e.preventDefault();

                // Get the email and product ID values
                const email = document.getElementById('email').value;
                const productId = document.getElementById('product_id').value;

                // Send the data to the server
                fetch('index.php?route=product/product/notify', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ email: email, product_id: productId })
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message); // Show success message
                    document.getElementById('notifyModal').style.display = 'none';
                })
                .catch(error => console.error('Error:', error));
            }); #}
          </script>

<style>
/* Simple styling for the modal */
.modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); }
.modal-content { margin: 15% auto; padding: 20px; width: 300px; background: #fff; }
.close { float: right; cursor: pointer; font-size: 20px; }
</style>", "catalog/view/template/product/thumb.twig", "/var/www/html/opencart/upload/catalog/view/template/product/thumb.twig");
    }
}
