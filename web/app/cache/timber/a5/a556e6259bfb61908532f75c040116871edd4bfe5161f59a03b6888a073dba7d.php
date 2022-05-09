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

/* tease-post.twig */
class __TwigTemplate_79dacdd1ce19dce98c9876a8bb34c86ae6743c9feb6ae872ddd788873eb2ae0f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

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
        $this->parent = $this->loadTemplate("tease.twig", "tease-post.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <h2 class=\"h2\"><a href=\"";
        echo $this->getAttribute(($context["post"] ?? null), "link", []);
        echo "\">";
        echo $this->getAttribute(($context["post"] ?? null), "title", []);
        echo "</a></h2>
    <p>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "preview", []), "length", [0 => 25], "method");
        echo "</p>
    ";
        // line 6
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "thumbnail", []), "src", [])) {
            // line 7
            echo "        <img src=\"";
            echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "thumbnail", []), "src", []);
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
        return array (  55 => 7,  53 => 6,  49 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
