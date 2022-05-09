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

/* index.twig */
class __TwigTemplate_813db59ffbaf42b65359e009348914ac4628ffe286dd0cb8085e8e3169e94fa7 extends \Twig\Template
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
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h2>";
        echo ($context["foo"] ?? null);
        echo "</h2>
    <p>";
        // line 5
        echo ($context["qux"] ?? null);
        echo "</p>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        ";
            $this->loadTemplate([0 => (("tease-" . twig_get_attribute($this->env, $this->source, $context["post"], "post_type", [], "any", false, false, false, 7)) . ".twig"), 1 => "tease.twig"], "index.twig", 7)->display($context);
            // line 8
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    ";
        // line 10
        $this->loadTemplate("partial/pagination.twig", "index.twig", 10)->display(twig_array_merge($context, ["pagination" => twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "pagination", [0 => ["show_all" => false, "mid_size" => 3, "end_size" => 2]], "method", false, false, false, 10)]));
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 10,  93 => 9,  79 => 8,  76 => 7,  59 => 6,  55 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block content %}
    <h2>{{ foo }}</h2>
    <p>{{ qux }}</p>
    {% for post in posts %}
        {% include ['tease-'~post.post_type~'.twig', 'tease.twig'] %}
    {% endfor %}

    {% include 'partial/pagination.twig' with { pagination: posts.pagination({show_all: false, mid_size: 3, end_size: 2}) } %}
{% endblock %}
", "index.twig", "/app/src/views/index.twig");
    }
}
