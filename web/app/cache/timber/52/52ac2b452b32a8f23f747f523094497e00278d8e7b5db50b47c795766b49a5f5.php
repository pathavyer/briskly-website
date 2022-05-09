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

/* modal-menu.twig */
class __TwigTemplate_1fe523d1d3d0ada461a8ef3b2379be8b0029385e8d10c3e507d85207f02952ec extends \Twig\Template
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
        echo "<div class=\"modal micromodal-slide modal__menu\" id=\"menu-modal\" aria-hidden=\"true\">
  <div class=\"modal__overlay\" tabindex=\"1\" data-micromodal-close>
    <div class=\"modal__wrapper\" bp=\"container\">
      <div bp=\"6--max@lg\" class=\"modal__container\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"menu-modal-title\">
        <header bp=\"flex\">
                    <div bp=\"fill\">
                        <h3>Menu</h3>
                    </div>
                    <div bp=\"fit\">
                        <button class=\"modal__close\" aria-label=\"Close modal\" data-micromodal-close>close</button>
                    </div>
          
        </header>
        <div class=\"menu\" bp=\"grid 6@md\">
          <div>
                        ";
        // line 16
        $this->loadTemplate("menu.twig", "modal-menu.twig", 16)->display(twig_array_merge($context, ["primary_menu" => $this->getAttribute(        // line 17
($context["primary_menu"] ?? null), "get_items", [])]));
        // line 20
        echo "                    </div>

          <div class=\"modal__cta\">
                        hello
                    </div>

        </div>  
                <footer>
                    <div>
                        ";
        // line 29
        $this->loadTemplate("menu.twig", "modal-menu.twig", 29)->display(twig_array_merge($context, ["legal_menu" => $this->getAttribute(        // line 30
($context["legal_menu"] ?? null), "get_items", [])]));
        // line 33
        echo "                    </div>
                </footer>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modal-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 33,  62 => 30,  61 => 29,  50 => 20,  48 => 17,  47 => 16,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal micromodal-slide modal__menu\" id=\"menu-modal\" aria-hidden=\"true\">
  <div class=\"modal__overlay\" tabindex=\"1\" data-micromodal-close>
    <div class=\"modal__wrapper\" bp=\"container\">
      <div bp=\"6--max@lg\" class=\"modal__container\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"menu-modal-title\">
        <header bp=\"flex\">
                    <div bp=\"fill\">
                        <h3>Menu</h3>
                    </div>
                    <div bp=\"fit\">
                        <button class=\"modal__close\" aria-label=\"Close modal\" data-micromodal-close>close</button>
                    </div>
          
        </header>
        <div class=\"menu\" bp=\"grid 6@md\">
          <div>
                        {% include \"menu.twig\" with {
                            primary_menu: primary_menu.get_items
                            } 
                        %}
                    </div>

          <div class=\"modal__cta\">
                        hello
                    </div>

        </div>  
                <footer>
                    <div>
                        {% include \"menu.twig\" with {
                                legal_menu: legal_menu.get_items
                            } 
                        %}
                    </div>
                </footer>
      </div>
    </div>
  </div>
</div>
", "modal-menu.twig", "/app/web/app/themes/briskly/dist/templates/modal-menu.twig");
    }
}
