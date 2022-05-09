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

/* partial/section-block.twig */
class __TwigTemplate_0d57599103915df33749b62c2f84c01324fa825793458b8bc6d64a610d4cfb5f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["classes"] = ($context["classes"] ?? null);
        // line 2
        echo "
<section class=\"section--wide ";
        // line 3
        echo twig_join_filter(($context["classes"] ?? null), " ");
        echo "\">
  ";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "</section>";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "   ";
        echo ($context["content"] ?? null);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "partial/section-block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 5,  53 => 4,  49 => 7,  47 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set classes = classes %}

<section class=\"section--wide {{ classes | join(' ') }}\">
  {% block content %}
   {{ content }}
  {% endblock content %}
</section>", "partial/section-block.twig", "/app/web/app/themes/briskly/dist/views/partial/section-block.twig");
    }
}
