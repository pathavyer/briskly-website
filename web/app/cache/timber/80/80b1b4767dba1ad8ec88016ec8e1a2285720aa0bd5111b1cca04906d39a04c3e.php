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

/* tease-post.twig */
class __TwigTemplate_f9fae2e246299feeff9acf7c878bb0face07916c7e3a331f57814b639d397a3a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "tease.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("tease.twig", "tease-post.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h2 class=\"h2\"><a href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "link", [], "any", false, false, false, 4);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 4);
        echo "</a></h2>
    <p>";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "preview", [], "any", false, false, false, 5), "length", [0 => 25], "method", false, false, false, 5);
        echo "</p>
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "thumbnail", [], "any", false, false, false, 6), "src", [], "any", false, false, false, 6)) {
            // line 7
            echo "        <img src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "thumbnail", [], "any", false, false, false, 7), "src", [], "any", false, false, false, 7);
            echo "\"/>
    ";
        }
    }

    public function getTemplateName()
    {
        return "tease-post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 7,  61 => 6,  57 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"tease.twig\" %}

{% block content %}
    <h2 class=\"h2\"><a href=\"{{ post.link }}\">{{ post.title }}</a></h2>
    <p>{{ post.preview.length(25) }}</p>
    {% if post.thumbnail.src %}
        <img src=\"{{ post.thumbnail.src }}\"/>
    {% endif %}
{% endblock %}
", "tease-post.twig", "/app/web/app/themes/briskly/dist/templates/tease-post.twig");
    }
}
