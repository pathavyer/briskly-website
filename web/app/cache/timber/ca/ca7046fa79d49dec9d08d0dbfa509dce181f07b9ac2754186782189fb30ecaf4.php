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

/* tease.twig */
class __TwigTemplate_81882266a743f40bfed9b3763116f20ec532e06657250840fbed2d53eccbd0df extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<article class=\"tease tease-";
        echo $this->getAttribute(($context["post"] ?? null), "post_type", []);
        echo "\" id=\"tease-";
        echo $this->getAttribute(($context["post"] ?? null), "ID", []);
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
        // line 3
        echo "        <h2 class=\"h2\"><a href=\"";
        echo $this->getAttribute(($context["post"] ?? null), "link", []);
        echo "\">";
        echo $this->getAttribute(($context["post"] ?? null), "title", []);
        echo "</a></h2>
        <p>";
        // line 4
        echo $this->getAttribute(($context["post"] ?? null), "preview", []);
        echo "</p>
        ";
        // line 5
        if ($this->getAttribute(($context["post"] ?? null), "get_thumbnail", [])) {
            // line 6
            echo "            <img src=\"";
            echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "thumbnail", []), "src", []);
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
        return array (  67 => 8,  61 => 6,  59 => 5,  55 => 4,  48 => 3,  45 => 2,  40 => 9,  38 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
