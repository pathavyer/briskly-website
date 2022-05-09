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

/* modal-menu.twig */
class __TwigTemplate_df5c312089a21b4aadb661fc3e328994aa48a5c72b0ba3a2e3e5da582ed07458 extends \Twig\Template
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
        echo "<div class=\"modal micromodal-slide modal__menu\" id=\"menu-modal\" aria-hidden=\"true\">
  <div class=\"modal__overlay\" tabindex=\"1\" data-micromodal-close>
    <div class=\"modal__wrapper\" bp=\"container\">
      <div bp=\"6--max@lg\" class=\"modal__container\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"menu-modal-title\">
        <header bp=\"flex\">
\t\t\t\t\t<div bp=\"fill\">
\t\t\t\t\t\t<h3>Menu</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div bp=\"fit\">
\t\t\t\t\t\t<button class=\"modal__close\" aria-label=\"Close modal\" data-micromodal-close>close</button>
\t\t\t\t\t</div>
          
        </header>
        <div class=\"menu\" bp=\"grid 6@md\">
          <div>
\t\t\t\t\t\t";
        // line 16
        $this->loadTemplate("menu.twig", "modal-menu.twig", 16)->display(twig_array_merge($context, ["primary_menu" => twig_get_attribute($this->env, $this->source,         // line 17
($context["primary_menu"] ?? null), "get_items", [], "any", false, false, false, 17)]));
        // line 20
        echo "\t\t\t\t\t</div>

          <div class=\"modal__cta\">
\t\t\t\t\t\thello
\t\t\t\t\t</div>

        </div>  
\t\t\t\t<footer>
\t\t\t\t\t<div>
\t\t\t\t\t\t";
        // line 29
        $this->loadTemplate("menu.twig", "modal-menu.twig", 29)->display(twig_array_merge($context, ["legal_menu" => twig_get_attribute($this->env, $this->source,         // line 30
($context["legal_menu"] ?? null), "get_items", [], "any", false, false, false, 30)]));
        // line 33
        echo "\t\t\t\t\t</div>
\t\t\t\t</footer>
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
        return array (  71 => 33,  69 => 30,  68 => 29,  57 => 20,  55 => 17,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal micromodal-slide modal__menu\" id=\"menu-modal\" aria-hidden=\"true\">
  <div class=\"modal__overlay\" tabindex=\"1\" data-micromodal-close>
    <div class=\"modal__wrapper\" bp=\"container\">
      <div bp=\"6--max@lg\" class=\"modal__container\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"menu-modal-title\">
        <header bp=\"flex\">
\t\t\t\t\t<div bp=\"fill\">
\t\t\t\t\t\t<h3>Menu</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div bp=\"fit\">
\t\t\t\t\t\t<button class=\"modal__close\" aria-label=\"Close modal\" data-micromodal-close>close</button>
\t\t\t\t\t</div>
          
        </header>
        <div class=\"menu\" bp=\"grid 6@md\">
          <div>
\t\t\t\t\t\t{% include \"menu.twig\" with {
\t\t\t\t\t\t\tprimary_menu: primary_menu.get_items
\t\t\t\t\t\t\t} 
\t\t\t\t\t\t%}
\t\t\t\t\t</div>

          <div class=\"modal__cta\">
\t\t\t\t\t\thello
\t\t\t\t\t</div>

        </div>  
\t\t\t\t<footer>
\t\t\t\t\t<div>
\t\t\t\t\t\t{% include \"menu.twig\" with {
\t\t\t\t\t\t\t\tlegal_menu: legal_menu.get_items
\t\t\t\t\t\t\t} 
\t\t\t\t\t\t%}
\t\t\t\t\t</div>
\t\t\t\t</footer>
      </div>
    </div>
  </div>
</div>
", "modal-menu.twig", "/app/src/views/modal-menu.twig");
    }
}
