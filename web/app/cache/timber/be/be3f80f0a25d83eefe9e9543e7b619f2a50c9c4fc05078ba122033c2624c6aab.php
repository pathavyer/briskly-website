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

/* tease.twig */
class __TwigTemplate_a55a8f39041e74ba29bdf04aaa952ade9518c64f9289bc2549d71e6472bd36eb extends \Twig\Template
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
        echo "<article class=\"tease tease-";
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "post_type", [], "any", false, false, false, 1);
        echo "\" id=\"tease-";
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "ID", [], "any", false, false, false, 1);
        echo "\">
    ";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        // line 9
        echo "</article>
";
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <h2 class=\"h2\"><a href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "link", [], "any", false, false, false, 3);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 3);
        echo "</a></h2>
        <p>";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "preview", [], "any", false, false, false, 4);
        echo "</p>
        ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "get_thumbnail", [], "any", false, false, false, 5)) {
            // line 6
            echo "            <img src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "thumbnail", [], "any", false, false, false, 6), "src", [], "any", false, false, false, 6);
            echo "\"/>
        ";
        }
        // line 8
        echo "    ";
    }

    public function getTemplateName()
    {
        return "tease.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 8,  69 => 6,  67 => 5,  63 => 4,  56 => 3,  52 => 2,  47 => 9,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"tease tease-{{ post.post_type }}\" id=\"tease-{{ post.ID }}\">
    {% block content %}
        <h2 class=\"h2\"><a href=\"{{ post.link }}\">{{ post.title }}</a></h2>
        <p>{{ post.preview }}</p>
        {% if post.get_thumbnail %}
            <img src=\"{{ post.thumbnail.src }}\"/>
        {% endif %}
    {% endblock %}
</article>
", "tease.twig", "/app/web/app/themes/briskly/dist/templates/tease.twig");
    }
}
