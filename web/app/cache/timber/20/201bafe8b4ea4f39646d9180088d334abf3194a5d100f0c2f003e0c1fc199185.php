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

/* partial/cta.twig */
class __TwigTemplate_a1f47b8e790383391cc8f59d2244b60a684c995be8c037b8825f4d7033a2a83a extends \Twig\Template
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
        echo "

";
        // line 3
        if (($context["btn"] ?? null)) {
            // line 4
            echo "  <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["btn"] ?? null), "details", []), "url", []);
            echo "\" target=\"";
            echo (($this->getAttribute($this->getAttribute(($context["btn"] ?? null), "details", [], "any", false, true), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["btn"] ?? null), "details", [], "any", false, true), "target", []), "_self")) : ("_self"));
            echo "\"
    class=\"btn ";
            // line 5
            echo ("btn--" . $this->getAttribute(($context["btn"] ?? null), "type", []));
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["btn"] ?? null), "details", []), "title", []);
            echo "</a>

";
        } elseif (        // line 7
($context["link"] ?? null)) {
            // line 8
            echo "  <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["link"] ?? null), "details", []), "url", []);
            echo "\" class=\"link ";
            echo ("link--" . $this->getAttribute(($context["link"] ?? null), "type", []));
            echo "\"
    target=\"";
            // line 9
            echo (($this->getAttribute($this->getAttribute(($context["link"] ?? null), "details", [], "any", false, true), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["link"] ?? null), "details", [], "any", false, true), "target", []), "_self")) : ("_self"));
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["link"] ?? null), "details", []), "title", []);
            echo "
    <svg class=\"icon-arrow\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z\" />
    </svg>
  </a>
";
        }
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "partial/cta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  59 => 9,  52 => 8,  50 => 7,  43 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("

{% if btn %}
  <a href=\"{{ btn.details.url }}\" target=\"{{ btn.details.target | default(\"_self\") }}\"
    class=\"btn {{ \"btn--\" ~ btn.type }}\">{{ btn.details.title }}</a>

{% elseif link %}
  <a href=\"{{ link.details.url }}\" class=\"link {{ \"link--\" ~ link.type }}\"
    target=\"{{ link.details.target | default(\"_self\") }}\">{{ link.details.title }}
    <svg class=\"icon-arrow\" viewBox=\"0 0 24 24\">
      <path fill=\"currentColor\" d=\"M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z\" />
    </svg>
  </a>
{% endif %}

", "partial/cta.twig", "/app/web/app/themes/briskly/dist/templates/partial/cta.twig");
    }
}
