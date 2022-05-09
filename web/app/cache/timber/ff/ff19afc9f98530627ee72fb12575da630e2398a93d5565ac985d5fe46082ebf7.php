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

/* blocks/call-to-action.twig */
class __TwigTemplate_0bbcba3893299497086d53a57e92f1c475d3eaa40a5e2ada43d95572a81ba2ce extends \Twig\Template
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
        // line 15
        return "partial/section-block.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        $context["classes"] = [0 => "cta"];
        // line 15
        $this->parent = $this->loadTemplate("partial/section-block.twig", "blocks/call-to-action.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "<div class=\"cta__inner\">
    <div bp=\"container\">
        <div class=\"section__content\" bp=\"grid 6@md vertical-center\">
            <div class=\"section__content--wrapper\">
                ";
        // line 24
        $this->loadTemplate("partial/copy-block.twig", "blocks/call-to-action.twig", 24)->display(twig_array_merge($context, ["h2" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
($context["fields"] ?? null), "cta_main_content", [], "any", false, false, false, 26), "headline", [], "any", false, false, false, 26), "body_plain" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["fields"] ?? null), "cta_main_content", [], "any", false, false, false, 27), "body", [], "any", false, false, false, 27), "btn" => ["type" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["fields"] ?? null), "cta_main_content", [], "any", false, false, false, 29), "button", [], "any", false, false, false, 29), "details" => ["title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["fields"] ?? null), "cta_main_content", [], "any", false, false, false, 31), "button_details", [], "any", false, false, false, 31), "title", [], "any", false, false, false, 31), "url" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 32
($context["fields"] ?? null), "cta_main_content", [], "any", false, false, false, 32), "button_details", [], "any", false, false, false, 32), "url", [], "any", false, false, false, 32), "target" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 33
($context["fields"] ?? null), "cta_main_content", [], "any", false, false, false, 33), "button_details", [], "any", false, false, false, 33), "target", [], "any", false, false, false, 33)]], "cta" => true, "content_class" => "cta__content"]));
        // line 40
        echo "            </div>

            <div class=\"section__content--wrapper\">
                <div bp=\"grid 6@lg vertical-start\">
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "cta_sub_content", [], "any", false, false, false, 44));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            echo "                    <div>
                        ";
            // line 46
            $this->loadTemplate("partial/copy-block.twig", "blocks/call-to-action.twig", 46)->display(twig_array_merge($context, ["icon" => twig_get_attribute($this->env, $this->source,             // line 48
$context["item"], "icon", [], "any", false, false, false, 48), "p" => twig_get_attribute($this->env, $this->source,             // line 49
$context["item"], "headline", [], "any", false, false, false, 49), "body_plain" => twig_get_attribute($this->env, $this->source,             // line 50
$context["item"], "body", [], "any", false, false, false, 50), "link" => ["title" => twig_get_attribute($this->env, $this->source,             // line 52
$context["item"], "link_title", [], "any", false, false, false, 52), "type" => twig_get_attribute($this->env, $this->source,             // line 53
$context["item"], "link", [], "any", false, false, false, 53), "details" => ["url" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 55
$context["item"], "link_details", [], "any", false, false, false, 55), "url", [], "any", false, false, false, 55), "title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 56
$context["item"], "link_details", [], "any", false, false, false, 56), "title", [], "any", false, false, false, 56), "target" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 57
$context["item"], "link_details", [], "any", false, false, false, 57), "target", [], "any", false, false, false, 57)]], "content_class" => [0 => "cta__content", 1 => "cta__content--secondary"]]));
            // line 63
            echo "                    </div>
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "blocks/call-to-action.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 65,  103 => 63,  101 => 57,  100 => 56,  99 => 55,  98 => 53,  97 => 52,  96 => 50,  95 => 49,  94 => 48,  93 => 46,  90 => 45,  73 => 44,  67 => 40,  65 => 33,  64 => 32,  63 => 31,  62 => 29,  61 => 27,  60 => 26,  59 => 24,  53 => 20,  49 => 19,  44 => 15,  42 => 17,  35 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
  Block Name: Call to Action
  Description: Call to action block
  Category: format
  Icon: admin-comments
  Keywords: cta or call to action button
  Mode: edit
  Align: left right
  PostTypes: page post
  SupportsAlign: center
  SupportsMode: false
  SupportsMultiple: true
#}

{% extends \"partial/section-block.twig\" %}

{% set classes = ['cta'] %}

{% block content %}
<div class=\"cta__inner\">
    <div bp=\"container\">
        <div class=\"section__content\" bp=\"grid 6@md vertical-center\">
            <div class=\"section__content--wrapper\">
                {% include \"partial/copy-block.twig\" with
                    {
                        h2: fields.cta_main_content.headline,
                        body_plain: fields.cta_main_content.body,
                        btn: {
                            type: fields.cta_main_content.button,
                            details: {
                                title: fields.cta_main_content.button_details.title,
                                url: fields.cta_main_content.button_details.url,
                                target: fields.cta_main_content.button_details.target,
                            },
                        },
                        cta: true,
                        content_class: 'cta__content'
                    } \t
                %}
            </div>

            <div class=\"section__content--wrapper\">
                <div bp=\"grid 6@lg vertical-start\">
                    {% for item in fields.cta_sub_content  %}
                    <div>
                        {% include \"partial/copy-block.twig\" with
                                {
                                    icon: item.icon,
                                    p: item.headline,
                                    body_plain: item.body,
                                    link: {
                                        title: item.link_title,
                                        type: item.link,
                                        details: {
                                            url: item.link_details.url,
                                            title: item.link_details.title,
                                            target: item.link_details.target,
                                        },
                                    },
                                    content_class: ['cta__content', 'cta__content--secondary' ]
                                } \t
                            %}
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock content %}
", "blocks/call-to-action.twig", "/app/web/app/themes/briskly/dist/views/blocks/call-to-action.twig");
    }
}
