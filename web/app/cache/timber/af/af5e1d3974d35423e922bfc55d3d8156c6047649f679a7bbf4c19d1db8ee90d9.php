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

/* blocks/feature-two-cols.twig */
class __TwigTemplate_1929fa50d6381e2194cebb85d6559219fc931b66b04b879034e3caa960f14932 extends \Twig\Template
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
        // line 20
        return "partial/section-block.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        $context["vertical_align"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "two_cols_content", [], "any", false, false, false, 15), "columns_content_align", [], "any", false, false, false, 15);
        // line 16
        $context["cta_group"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "two_cols_content", [], "any", false, false, false, 16), "cta", [], "any", false, false, false, 16);
        // line 17
        $context["flip"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "two_cols_content", [], "any", false, false, false, 17), "column_order", [], "any", false, false, false, 17);
        // line 18
        $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "two_cols_content", [], "any", false, false, false, 18), "feature_image", [], "any", false, false, false, 18);
        // line 22
        $context["classes"] = [0 => "two-cols"];
        // line 20
        $this->parent = $this->loadTemplate("partial/section-block.twig", "blocks/feature-two-cols.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "<div bp=\"container\">
  <div class=\"section__content\" bp=\"grid 6@md ";
        // line 26
        echo ("vertical-" . ($context["vertical_align"] ?? null));
        echo "\">
    <div class=\"two-cols__media\">
      ";
        // line 28
        $this->loadTemplate("partial/media.twig", "blocks/feature-two-cols.twig", 28)->display(twig_array_merge($context, ["img" => ["url" => ((twig_get_attribute($this->env, $this->source,         // line 31
($context["image"] ?? null), "url", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "url", [], "any", false, false, false, 31), "https://via.placeholder.com/500x400")) : ("https://via.placeholder.com/500x400")), "alt" => twig_get_attribute($this->env, $this->source,         // line 32
($context["image"] ?? null), "alt", [], "any", false, false, false, 32)]]));
        // line 36
        echo "    </div>
    <div class=\"two-cols__content\" ";
        // line 37
        echo ((($context["flip"] ?? null)) ? ("bp='first@md'") : (""));
        echo ">
      ";
        // line 38
        $this->loadTemplate("partial/copy-block.twig", "blocks/feature-two-cols.twig", 38)->display(twig_array_merge($context, ["subhead" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["fields"] ?? null), "two_cols_content", [], "any", false, false, false, 40), "subhead", [], "any", false, false, false, 40), "h2" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 41
($context["fields"] ?? null), "two_cols_content", [], "any", false, false, false, 41), "headline", [], "any", false, false, false, 41), "body_wysiwyg" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["fields"] ?? null), "two_cols_content", [], "any", false, false, false, 42), "body_wysiwyg", [], "any", false, false, false, 42)]));
        // line 45
        echo "
      <div class=\"two-cols__cta\">
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cta_group"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 48
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "acf_fc_layout", [], "any", false, false, false, 48) == "cta_group")) {
                // line 49
                echo "        <div class=\"two-cols__cta-group\" bp=\"flex vertical-center\">
          <div class=\"two-cols__cta-group--btn\" bp=\"fit\">
            ";
                // line 51
                $this->loadTemplate("partial/cta.twig", "blocks/feature-two-cols.twig", 51)->display(twig_array_merge($context, ["btn" => ["type" => "primary", "details" => ["url" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 55
$context["field"], "button", [], "any", false, false, false, 55), "url", [], "any", false, false, false, 55), "target" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 56
$context["field"], "button", [], "any", false, true, false, 56), "target", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "button", [], "any", false, true, false, 56), "target", [], "any", false, false, false, 56), "_blank")) : ("_blank")), "title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 57
$context["field"], "button", [], "any", false, false, false, 57), "title", [], "any", false, false, false, 57)]]]));
                // line 61
                echo "          </div>
          <div class=\"two-cols__cta-group--link\" bp=\"fill\">
            ";
                // line 63
                $this->loadTemplate("partial/cta.twig", "blocks/feature-two-cols.twig", 63)->display(twig_array_merge($context, ["link" => ["type" => "primary", "details" => ["url" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 67
$context["field"], "link", [], "any", false, false, false, 67), "url", [], "any", false, false, false, 67), "target" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 68
$context["field"], "link", [], "any", false, true, false, 68), "target", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "link", [], "any", false, true, false, 68), "target", [], "any", false, false, false, 68), "_blank")) : ("_blank")), "title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 69
$context["field"], "link", [], "any", false, false, false, 69), "title", [], "any", false, false, false, 69)]]]));
                // line 73
                echo "          </div>
        </div>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 75
$context["field"], "acf_fc_layout", [], "any", false, false, false, 75) == "single_button")) {
                echo " 
          ";
                // line 76
                $this->loadTemplate("partial/cta.twig", "blocks/feature-two-cols.twig", 76)->display(twig_array_merge($context, ["btn" => ["type" => "primary", "details" => ["url" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 80
$context["field"], "button", [], "any", false, false, false, 80), "url", [], "any", false, false, false, 80), "target" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 81
$context["field"], "button", [], "any", false, true, false, 81), "target", [], "any", true, true, false, 81)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "button", [], "any", false, true, false, 81), "target", [], "any", false, false, false, 81), "_blank")) : ("_blank")), "title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 82
$context["field"], "button", [], "any", false, false, false, 82), "title", [], "any", false, false, false, 82)]]]));
                // line 86
                echo "        ";
            }
            // line 87
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "      </div>
      
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "blocks/feature-two-cols.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 88,  143 => 87,  140 => 86,  138 => 82,  137 => 81,  136 => 80,  135 => 76,  131 => 75,  127 => 73,  125 => 69,  124 => 68,  123 => 67,  122 => 63,  118 => 61,  116 => 57,  115 => 56,  114 => 55,  113 => 51,  109 => 49,  106 => 48,  89 => 47,  85 => 45,  83 => 42,  82 => 41,  81 => 40,  80 => 38,  76 => 37,  73 => 36,  71 => 32,  70 => 31,  69 => 28,  64 => 26,  61 => 25,  57 => 24,  52 => 20,  50 => 22,  48 => 18,  46 => 17,  44 => 16,  42 => 15,  35 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
  Title: Features Two Columns
  Description: Section to showcases 2 cols features content
  Category: formatting
  Icon: admin-comments
  Keywords: features icons blocks
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: center
  SupportsMode: false
  SupportsMultiple: true
#}

{% set vertical_align = fields.two_cols_content.columns_content_align %}
{% set cta_group = fields.two_cols_content.cta %}
{% set flip = fields.two_cols_content.column_order %}
{% set image = fields.two_cols_content.feature_image %}

{% extends \"partial/section-block.twig\" %}

{% set classes = ['two-cols'] %}

{% block content %}
<div bp=\"container\">
  <div class=\"section__content\" bp=\"grid 6@md {{ 'vertical-' ~ vertical_align }}\">
    <div class=\"two-cols__media\">
      {% include \"partial/media.twig\" with 
        {
          img: {
            url: image.url | default('https://via.placeholder.com/500x400'),
            alt: image.alt
          }
        } 
      %}
    </div>
    <div class=\"two-cols__content\" {{ flip ? \"bp='first@md'\" }}>
      {% include \"partial/copy-block.twig\" with 
        {
          subhead: fields.two_cols_content.subhead,
          h2: fields.two_cols_content.headline,
          body_wysiwyg: fields.two_cols_content.body_wysiwyg
        } 
      %}

      <div class=\"two-cols__cta\">
        {% for field in cta_group %}
        {% if field.acf_fc_layout == \"cta_group\" %}
        <div class=\"two-cols__cta-group\" bp=\"flex vertical-center\">
          <div class=\"two-cols__cta-group--btn\" bp=\"fit\">
            {% include \"partial/cta.twig\" with {
              btn: {
                type: \"primary\",
                details: {
                  url: field.button.url,
                  target: field.button.target | default(\"_blank\"),
                  title: field.button.title
                }
              }
            } %}
          </div>
          <div class=\"two-cols__cta-group--link\" bp=\"fill\">
            {% include \"partial/cta.twig\" with {
              link: {
                type: \"primary\",
                details: {
                  url:field.link.url,
                  target: field.link.target | default(\"_blank\"),
                  title: field.link.title
                }
              }
            } %}
          </div>
        </div>
        {% elseif field.acf_fc_layout == \"single_button\" %} 
          {% include \"partial/cta.twig\" with {
            btn: {
              type: \"primary\",
              details: {
                url: field.button.url,
                target: field.button.target | default(\"_blank\"),
                title: field.button.title
              }
            }
          } %}
        {% endif %}
        {% endfor %}
      </div>
      
    </div>
  </div>
</div>
{% endblock content %}
", "blocks/feature-two-cols.twig", "/app/web/app/themes/briskly/dist/views/blocks/feature-two-cols.twig");
    }
}
