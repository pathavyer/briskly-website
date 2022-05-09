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

/* navbar.twig */
class __TwigTemplate_c700b917fefb5c27a2471ad2d6ab820abb8221ff482c14716042332268cc7cb7 extends \Twig\Template
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
        echo "<nav id=\"nav\" class=\"navbar\">
  <div bp=\"container\">
    <div bp=\"grid 6 vertical-center\">
      <div bp=\"vertical-center\" class=\"navbar__logo\">
        <a href=\"/\">
          <img src=\"/app/themes/briskly/dist/assets/briskly-logo-color.svg?ver=d1882831\" alt=\"Briskly Digital\">
        </a>
      </div>
      <div bp=\"text-right\">
        <button data-micromodal-trigger=\"menu-modal\">Navigate</button>
      </div>
    </div>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "navbar.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"nav\" class=\"navbar\">
  <div bp=\"container\">
    <div bp=\"grid 6 vertical-center\">
      <div bp=\"vertical-center\" class=\"navbar__logo\">
        <a href=\"/\">
          <img src=\"/app/themes/briskly/dist/assets/briskly-logo-color.svg?ver=d1882831\" alt=\"Briskly Digital\">
        </a>
      </div>
      <div bp=\"text-right\">
        <button data-micromodal-trigger=\"menu-modal\">Navigate</button>
      </div>
    </div>
  </div>
</nav>
", "navbar.twig", "/app/web/app/themes/briskly/dist/templates/navbar.twig");
    }
}
