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

/* partial/pagination.twig */
class __TwigTemplate_904a5c6c2268cae6cf7260292b8a8bef7007f2809bd0f688873920d55353be35 extends \Twig\Template
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "pagination", [], "any", false, false, false, 1), "pages", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <nav class=\"pagination-block\">
        <ul class=\"pagination\">

            ";
            // line 6
            echo "            ";
            if ((twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "pagination", [], "any", false, false, false, 6), "pages", [], "any", false, false, false, 6)) && (twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "pagination", [], "any", false, false, false, 6), "pages", [], "any", false, false, false, 6)), "current", [], "any", false, false, false, 6) != true))) {
                // line 7
                echo "                <li class=\"first btn\">
                    <a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "pagination", [], "any", false, false, false, 8), "pages", [], "any", false, false, false, 8)), "link", [], "any", false, false, false, 8);
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
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "pagination", [], "any", false, false, false, 17), "prev", [], "any", false, false, false, 17)) {
                // line 18
                echo "                <li class=\"prev btn\">
                    <a href=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "pagination", [], "any", false, false, false, 19), "prev", [], "any", false, false, false, 19), "link", [], "any", false, false, false, 19);
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "pagination", [], "any", false, false, false, 28), "pages", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 29
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["page"], "link", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "                    <li>
                        <a href=\"";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["page"], "link", [], "any", false, false, false, 31);
                    echo "\" class=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["page"], "class", [], "any", false, false, false, 31);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 31);
                    echo "</a>
                    </li>
                ";
                } else {
                    // line 34
                    echo "                    <li class=\"current\">
                        <span class=\"";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["page"], "class", [], "any", false, false, false, 35);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 35);
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
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "pagination", [], "any", false, false, false, 41), "next", [], "any", false, false, false, 41)) {
                // line 42
                echo "                <li class=\"next btn\">
                    <a href=\"";
                // line 43
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "pagination", [], "any", false, false, false, 43), "next", [], "any", false, false, false, 43), "link", [], "any", false, false, false, 43);
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
            if ((twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "pagination", [], "any", false, false, false, 52), "pages", [], "any", false, false, false, 52)) && (twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "pagination", [], "any", false, false, false, 52), "pages", [], "any", false, false, false, 52)), "current", [], "any", false, false, false, 52) != true))) {
                // line 53
                echo "                <li class=\"last btn\">
                    <a href=\"";
                // line 54
                echo twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "pagination", [], "any", false, false, false, 54), "pages", [], "any", false, false, false, 54)), "link", [], "any", false, false, false, 54);
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
        return array (  166 => 61,  160 => 57,  154 => 54,  151 => 53,  148 => 52,  145 => 50,  139 => 46,  133 => 43,  130 => 42,  127 => 41,  124 => 39,  118 => 38,  110 => 35,  107 => 34,  97 => 31,  94 => 30,  91 => 29,  86 => 28,  83 => 26,  77 => 22,  71 => 19,  68 => 18,  65 => 17,  62 => 15,  56 => 11,  50 => 8,  47 => 7,  44 => 6,  39 => 2,  37 => 1,);
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
", "partial/pagination.twig", "/app/web/app/themes/briskly/dist/views/partial/pagination.twig");
    }
}
