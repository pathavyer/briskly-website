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

/* navbar.twig */
class __TwigTemplate_5129f713cc0b9ead5529885ed4ef1b81fe24db6578c6190627ff1a6a8fa0c28a extends \Twig\Template
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
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
