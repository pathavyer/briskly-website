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

/* blocks/feature-icons.twig */
class __TwigTemplate_29b569c489145ef01ed97da215b20d5583e97c07e13ffd9c88470f8150b1b4c6 extends \Twig\Template
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
        $context["featureContent"] = twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "features_icon_block", [], "any", false, false, false, 15);
        // line 16
        $context["mainHeadline"] = twig_get_attribute($this->env, $this->source, ($context["featureContent"] ?? null), "main_headline", [], "any", false, false, false, 16);
        // line 17
        $context["mainSubhead"] = twig_get_attribute($this->env, $this->source, ($context["featureContent"] ?? null), "main_subhead", [], "any", false, false, false, 17);
        // line 18
        $context["mainBody"] = twig_get_attribute($this->env, $this->source, ($context["featureContent"] ?? null), "main_body", [], "any", false, false, false, 18);
        // line 22
        $context["classes"] = [0 => "features-icons"];
        // line 20
        $this->parent = $this->loadTemplate("partial/section-block.twig", "blocks/feature-icons.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "<div bp=\"container\">
  <div class=\"section__content\" bp=\"grid 12\">
    <div class=\"section__content--wrapper\">
      <div bp=\"10--max\">
        ";
        // line 29
        $this->loadTemplate("partial/copy-block.twig", "blocks/feature-icons.twig", 29)->display(twig_array_merge($context, ["subhead" =>         // line 31
($context["mainSubhead"] ?? null), "h2" =>         // line 32
($context["mainHeadline"] ?? null), "body_plain" =>         // line 33
($context["mainBody"] ?? null)]));
        // line 36
        echo "      </div>
    </div>
    <div class=\"section__content--wrapper\">
      <div bp=\"grid 6 3@md\">
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["featureContent"] ?? null), "feature_item", [], "any", false, false, false, 40));
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
            // line 41
            echo "        <div class=\"feature-icons__item\">
          ";
            // line 42
            $this->loadTemplate("partial/copy-block.twig", "blocks/feature-icons.twig", 42)->display(twig_array_merge($context, ["p" => twig_get_attribute($this->env, $this->source,             // line 44
$context["item"], "headline", [], "any", false, false, false, 44), "body_plain" => twig_get_attribute($this->env, $this->source,             // line 45
$context["item"], "body", [], "any", false, false, false, 45), "icon" => twig_get_attribute($this->env, $this->source,             // line 46
$context["item"], "icon", [], "any", false, false, false, 46)]));
            // line 49
            echo "        </div>
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
        // line 51
        echo "       
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "blocks/feature-icons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 51,  103 => 49,  101 => 46,  100 => 45,  99 => 44,  98 => 42,  95 => 41,  78 => 40,  72 => 36,  70 => 33,  69 => 32,  68 => 31,  67 => 29,  61 => 25,  57 => 24,  52 => 20,  50 => 22,  48 => 18,  46 => 17,  44 => 16,  42 => 15,  35 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
  Title: Features Icons
  Description: Section to showcases features with icons
  Category: formatting
  Icon: admin-comments
  Keywords: features icons blocks
  Mode: edit
  Align: left
  PostTypes: page post
  SupportsAlign: center
  SupportsMode: false
  SupportsMultiple: true
#}

{% set featureContent = fields.features_icon_block %}
{% set mainHeadline = featureContent.main_headline %}
{% set mainSubhead = featureContent.main_subhead %}
{% set mainBody = featureContent.main_body %}

{% extends \"partial/section-block.twig\" %}

{% set classes = ['features-icons'] %}

{% block content %}
<div bp=\"container\">
  <div class=\"section__content\" bp=\"grid 12\">
    <div class=\"section__content--wrapper\">
      <div bp=\"10--max\">
        {% include \"partial/copy-block.twig\" with 
          {
            subhead: mainSubhead,
            h2: mainHeadline,
            body_plain: mainBody,
          }
        %}
      </div>
    </div>
    <div class=\"section__content--wrapper\">
      <div bp=\"grid 6 3@md\">
        {% for item in featureContent.feature_item %}
        <div class=\"feature-icons__item\">
          {% include \"partial/copy-block.twig\" with 
            {
              p: item.headline,
              body_plain: item.body,
              icon: item.icon,
            }
          %}
        </div>
        {% endfor %}
       
      </div>
    </div>
  </div>
</div>
{% endblock content %}
", "blocks/feature-icons.twig", "/app/web/app/themes/briskly/dist/views/blocks/feature-icons.twig");
    }
}
