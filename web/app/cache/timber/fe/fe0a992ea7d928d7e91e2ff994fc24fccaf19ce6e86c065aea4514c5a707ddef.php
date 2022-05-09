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

/* partial/cta.twig */
class __TwigTemplate_e07dc33016ba9527ea636e0cd7ed2f99c973a5aa52c7bc6ca83976f3052b2a04 extends \Twig\Template
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
        echo "

";
        // line 3
        if (($context["btn"] ?? null)) {
            // line 4
            echo "  <a href=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["btn"] ?? null), "details", [], "any", false, false, false, 4), "url", [], "any", false, false, false, 4);
            echo "\" target=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["btn"] ?? null), "details", [], "any", false, true, false, 4), "target", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["btn"] ?? null), "details", [], "any", false, true, false, 4), "target", [], "any", false, false, false, 4), "_self")) : ("_self"));
            echo "\"
    class=\"btn ";
            // line 5
            echo ("btn--" . twig_get_attribute($this->env, $this->source, ($context["btn"] ?? null), "type", [], "any", false, false, false, 5));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["btn"] ?? null), "details", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5);
            echo "</a>

";
        } elseif (        // line 7
($context["link"] ?? null)) {
            // line 8
            echo "  <a href=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "details", [], "any", false, false, false, 8), "url", [], "any", false, false, false, 8);
            echo "\" class=\"link ";
            echo ("link--" . twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "type", [], "any", false, false, false, 8));
            echo "\"
    target=\"";
            // line 9
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "details", [], "any", false, true, false, 9), "target", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "details", [], "any", false, true, false, 9), "target", [], "any", false, false, false, 9), "_self")) : ("_self"));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "details", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9);
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
        return array (  77 => 15,  66 => 9,  59 => 8,  57 => 7,  50 => 5,  43 => 4,  41 => 3,  37 => 1,);
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
