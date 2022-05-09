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

/* blocks/hero.twig */
class __TwigTemplate_3e24839dcaac46314fb2a0ec3228b56341b3a71522038b188025c161af829bb6 extends \Twig\Template
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
        // line 14
        echo "
<section class=\"hero\">
    <div class=\"section--wrapper\" bp=\"container\">
        <div class=\"hero__content\" bp=\"grid 6@md\">
            <div class=\"hero__copy\" bp=\"flex\">
                <div class=\"hero__copy--end\" bp=\"fill\">
                    <h1>";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "hero_headline", [], "any", false, false, false, 20);
        echo "</h1>
                    <p>";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "hero_subhead", [], "any", false, false, false, 21);
        echo "</p>
                </div>
            </div>
            <div class=\"hero__media\"></div>
        </div>
    </div>
    <canvas class=\"hero__bg-gradient\" id=\"gradient-canvas\" data-transition-in></canvas>
</section>";
    }

    public function getTemplateName()
    {
        return "blocks/hero.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 21,  45 => 20,  37 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
  Title: Hero
  Description: Hero Section
  Category: formatting
  Icon: admin-comments
  Keywords: hero main header \"hero section of page\"
  Mode: edit
  Align: left
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: false
  SupportsMultiple: false
#}

<section class=\"hero\">
    <div class=\"section--wrapper\" bp=\"container\">
        <div class=\"hero__content\" bp=\"grid 6@md\">
            <div class=\"hero__copy\" bp=\"flex\">
                <div class=\"hero__copy--end\" bp=\"fill\">
                    <h1>{{ fields.hero_headline }}</h1>
                    <p>{{ fields.hero_subhead }}</p>
                </div>
            </div>
            <div class=\"hero__media\"></div>
        </div>
    </div>
    <canvas class=\"hero__bg-gradient\" id=\"gradient-canvas\" data-transition-in></canvas>
</section>", "blocks/hero.twig", "/app/web/app/themes/briskly/dist/views/blocks/hero.twig");
    }
}
