<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* footer.twig */
class __TwigTemplate_0a82beb89277850f12df85a7933ef9d303b9ae201b7bb0f91d98395df36f9303 extends \Twig\Template
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
        echo "<div class=\"section--wide footer__content--inner\">
  <div bp=\"container\">
    <div class=\"footer__content\" bp=\"grid\">
      <div bp=\"4@md\">
        <div>
  
          ";
        // line 7
        $this->loadTemplate("partial/copy-block.twig", "footer.twig", 7)->display(twig_array_merge($context, ["p" => "Briskly Digital", "body_wysiwyg" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur incidunt rem id debitis delectus cum recusandae nisi quod, maxime harum, odio possimus architecto sapiente voluptas sint iure cupiditate, voluptate voluptatem"]));
        // line 15
        echo "        </div>
      </div>
      <div bp=\"8@md\">
        <div class=\"footer__links\" bp=\"grid\">
          <div bp=\"4@md 6@sm offset-4@md\">
            ";
        // line 20
        $this->loadTemplate("menu.twig", "footer.twig", 20)->display(twig_array_merge($context, ["footer_menu" => twig_get_attribute($this->env, $this->source, ($context["footer_menu"] ?? null), "get_items", [], "any", false, false, false, 20)]));
        // line 21
        echo "          </div>
          <div bp=\"4@md 6@sm\">
            ";
        // line 23
        $this->loadTemplate("partial/copy-block.twig", "footer.twig", 23)->display(twig_array_merge($context, ["p" => "Let's chat", "body_wysiwyg" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.", "btn" => ["type" => "secondary", "details" => ["title" => "Contact Us", "url" => "#"]]]));
        // line 38
        echo "          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>





";
    }

    public function getTemplateName()
    {
        return "footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 38,  60 => 23,  56 => 21,  54 => 20,  47 => 15,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section--wide footer__content--inner\">
  <div bp=\"container\">
    <div class=\"footer__content\" bp=\"grid\">
      <div bp=\"4@md\">
        <div>
  
          {% include \"partial/copy-block.twig\" with 
            {
                    
              p: \"Briskly Digital\",
              body_wysiwyg: \"Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur incidunt rem id debitis delectus cum recusandae nisi quod, maxime harum, odio possimus architecto sapiente voluptas sint iure cupiditate, voluptate voluptatem\",
              
            }
          %}
        </div>
      </div>
      <div bp=\"8@md\">
        <div class=\"footer__links\" bp=\"grid\">
          <div bp=\"4@md 6@sm offset-4@md\">
            {% include \"menu.twig\" with { footer_menu: footer_menu.get_items } %}
          </div>
          <div bp=\"4@md 6@sm\">
            {% include \"partial/copy-block.twig\" with 
            {
                    
              p: \"Let's chat\",
              body_wysiwyg: \"Lorem ipsum dolor sit amet consectetur adipisicing elit.\",
              btn: {
                type: \"secondary\",
                details: {
                  title: \"Contact Us\",
                  url: \"#\",
                }
              }
              
            }
          %}
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>





", "footer.twig", "/app/web/app/themes/briskly/dist/templates/footer.twig");
    }
}
