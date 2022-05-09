<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* footer.twig */
class __TwigTemplate_9455f02e28925bf95925eac58cf3e11ded6783a265024337d8f4de316ffdb92a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
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
        $this->loadTemplate("menu.twig", "footer.twig", 20)->display(twig_array_merge($context, ["footer_menu" => $this->getAttribute(($context["footer_menu"] ?? null), "get_items", [])]));
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
        return array (  55 => 38,  53 => 23,  49 => 21,  47 => 20,  40 => 15,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
