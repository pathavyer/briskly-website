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

/* partial/pagination.twig */
class __TwigTemplate_6d7849872e55523a9e41c044549e3c5baaa7b351cee4b2ed628750ab14483e89 extends \Twig\Template
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
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["posts"] ?? null), "pagination", []), "pages", []))) {
            // line 2
            echo "    <nav class=\"pagination-block\">
        <ul class=\"pagination\">

            ";
            // line 6
            echo "            ";
            if ((twig_first($this->env, $this->getAttribute($this->getAttribute(($context["posts"] ?? null), "pagination", []), "pages", [])) && ($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["posts"] ?? null), "pagination", []), "pages", [])), "current", []) != true))) {
                // line 7
                echo "                <li class=\"first btn\">
                    <a href=\"";
                // line 8
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["posts"] ?? null), "pagination", []), "pages", [])), "link", []);
                echo "\">First</a>
                </li>
            ";
            } else {
                // line 11
                echo "                <li class=\"first btn disabled\">
                    <button disabled>First</button>
                </li>
            ";
            }
            // line 15
            echo "
            ";
            // line 17
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["posts"] ?? null), "pagination", []), "prev", [])) {
                // line 18
                echo "                <li class=\"prev btn\">
                    <a href=\"";
                // line 19
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["posts"] ?? null), "pagination", []), "prev", []), "link", []);
                echo "\">Previous</a>
                </li>
            ";
            } else {
                // line 22
                echo "                <li class=\"prev btn disabled\">
                    <button disabled>Previous</button>
                </li>
            ";
            }
            // line 26
            echo "
            ";
            // line 28
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["posts"] ?? null), "pagination", []), "pages", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 29
                echo "                ";
                if ($this->getAttribute($context["page"], "link", [])) {
                    // line 30
                    echo "                    <li>
                        <a href=\"";
                    // line 31
                    echo $this->getAttribute($context["page"], "link", []);
                    echo "\" class=\"";
                    echo $this->getAttribute($context["page"], "class", []);
                    echo "\">";
                    echo $this->getAttribute($context["page"], "title", []);
                    echo "</a>
                    </li>
                ";
                } else {
                    // line 34
                    echo "                    <li class=\"current\">
                        <span class=\"";
                    // line 35
                    echo $this->getAttribute($context["page"], "class", []);
                    echo "\">";
                    echo $this->getAttribute($context["page"], "title", []);
                    echo "</span>
                    </li>
                ";
                }
                // line 38
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
            ";
            // line 41
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["posts"] ?? null), "pagination", []), "next", [])) {
                // line 42
                echo "                <li class=\"next btn\">
                    <a href=\"";
                // line 43
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["posts"] ?? null), "pagination", []), "next", []), "link", []);
                echo "\">Next</a>
                </li>
            ";
            } else {
                // line 46
                echo "                <li class=\"next btn disabled\">
                    <button disabled>Next</button>
                </li>
            ";
            }
            // line 50
            echo "
            ";
            // line 52
            echo "            ";
            if ((twig_last($this->env, $this->getAttribute($this->getAttribute(($context["posts"] ?? null), "pagination", []), "pages", [])) && ($this->getAttribute(twig_last($this->env, $this->getAttribute($this->getAttribute(($context["posts"] ?? null), "pagination", []), "pages", [])), "current", []) != true))) {
                // line 53
                echo "                <li class=\"last btn\">
                    <a href=\"";
                // line 54
                echo $this->getAttribute(twig_last($this->env, $this->getAttribute($this->getAttribute(($context["posts"] ?? null), "pagination", []), "pages", [])), "link", []);
                echo "\">Last</a>
                </li>
            ";
            } else {
                // line 57
                echo "                <li class=\"last btn disabled\">
                    <button disabled>Last</button>
                </li>
            ";
            }
            // line 61
            echo "
        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "partial/pagination.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 61,  153 => 57,  147 => 54,  144 => 53,  141 => 52,  138 => 50,  132 => 46,  126 => 43,  123 => 42,  120 => 41,  117 => 39,  111 => 38,  103 => 35,  100 => 34,  90 => 31,  87 => 30,  84 => 29,  79 => 28,  76 => 26,  70 => 22,  64 => 19,  61 => 18,  58 => 17,  55 => 15,  49 => 11,  43 => 8,  40 => 7,  37 => 6,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if posts.pagination.pages is not empty %}
    <nav class=\"pagination-block\">
        <ul class=\"pagination\">

            {# First #}
            {% if posts.pagination.pages|first and posts.pagination.pages|first.current != true %}
                <li class=\"first btn\">
                    <a href=\"{{ posts.pagination.pages|first.link }}\">First</a>
                </li>
            {% else %}
                <li class=\"first btn disabled\">
                    <button disabled>First</button>
                </li>
            {% endif %}

            {# Previous #}
            {% if posts.pagination.prev %}
                <li class=\"prev btn\">
                    <a href=\"{{ posts.pagination.prev.link }}\">Previous</a>
                </li>
            {% else %}
                <li class=\"prev btn disabled\">
                    <button disabled>Previous</button>
                </li>
            {% endif %}

            {# Pages #}
            {% for page in posts.pagination.pages %}
                {% if page.link %}
                    <li>
                        <a href=\"{{ page.link }}\" class=\"{{ page.class }}\">{{ page.title }}</a>
                    </li>
                {% else %}
                    <li class=\"current\">
                        <span class=\"{{ page.class }}\">{{ page.title }}</span>
                    </li>
                {% endif %}
            {% endfor %}

            {# Next #}
            {% if posts.pagination.next %}
                <li class=\"next btn\">
                    <a href=\"{{ posts.pagination.next.link }}\">Next</a>
                </li>
            {% else %}
                <li class=\"next btn disabled\">
                    <button disabled>Next</button>
                </li>
            {% endif %}

            {# Last #}
            {% if posts.pagination.pages|last and posts.pagination.pages|last.current != true %}
                <li class=\"last btn\">
                    <a href=\"{{ posts.pagination.pages|last.link }}\">Last</a>
                </li>
            {% else %}
                <li class=\"last btn disabled\">
                    <button disabled>Last</button>
                </li>
            {% endif %}

        </ul>
    </nav>
{% endif %}
", "partial/pagination.twig", "/app/web/app/themes/briskly/dist/templates/partial/pagination.twig");
    }
}
