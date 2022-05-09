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

/* partial/copy-block.twig */
class __TwigTemplate_a810cc5b86a9cce222db747516df913ae24b58270d04e9e10a3614c8ef7621c6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'cta' => [$this, 'block_cta'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        if (($context["img"] ?? null)) {
            // line 3
            $context["media"] = ($context["img"] ?? null);
        } elseif (        // line 4
($context["icon"] ?? null)) {
            // line 5
            $context["media"] = ($context["icon"] ?? null);
        }
        // line 7
        echo "
";
        // line 9
        if (($context["h2"] ?? null)) {
            // line 10
            $context["head"] = ($context["h2"] ?? null);
        } elseif (        // line 11
($context["p"] ?? null)) {
            // line 12
            $context["head"] = ($context["p"] ?? null);
        }
        // line 14
        echo "
";
        // line 16
        if (($context["body_plain"] ?? null)) {
            // line 17
            $context["body"] = ($context["body_plain"] ?? null);
        } elseif (        // line 18
($context["body_wysiwyg"] ?? null)) {
            // line 19
            $context["body"] = ($context["body_wysiwyg"] ?? null);
        }
        // line 21
        echo "
";
        // line 23
        if (($context["btn"] ?? null)) {
            // line 24
            $context["footer"] = ($context["btn"] ?? null);
        } elseif (        // line 25
($context["link"] ?? null)) {
            // line 26
            $context["footer"] = ($context["link"] ?? null);
        }
        // line 28
        echo "


<div class=\"section__copy ";
        // line 31
        echo twig_join_filter(($context["content_class"] ?? null), " ");
        echo "\" bp=\"grid 12";
        echo ((($context["cta"] ?? null)) ? (" 6--max") : (""));
        echo "\">
  ";
        // line 33
        echo "  ";
        if (($context["media"] ?? null)) {
            // line 34
            echo "  ";
            if (($context["icon"] ?? null)) {
                // line 35
                echo "  <div class=\"copy__icon ";
                echo ((($context["light"] ?? null)) ? ("copy__icon--light") : (""));
                echo "\">
    ";
                // line 37
                echo "    <svg id=\"";
                echo ($context["icon"] ?? null);
                echo "\">
      <use xlink:href=\"#icon-";
                // line 38
                echo ($context["icon"] ?? null);
                echo "\"></use>
    </svg>
  </div>
  ";
            } elseif (            // line 41
($context["img"] ?? null)) {
                // line 42
                echo "  <div class=\"copy__media\">
    ";
                // line 43
                $this->loadTemplate("partial/media.twig", "partial/copy-block.twig", 43)->display(twig_array_merge($context, ["img" => ["url" => "https://via.placeholder.com/50x50", "alt" => "Default alt term"]]));
                // line 50
                echo "  </div>
  ";
            }
            // line 52
            echo "
  ";
            // line 54
            echo "  ";
        }
        // line 55
        echo "  ";
        if (($context["subhead"] ?? null)) {
            // line 56
            echo "  <div class=\"copy__subhead\">
    <p>";
            // line 57
            echo ($context["subhead"] ?? null);
            echo "</p>
  </div>
  ";
        }
        // line 60
        echo "
  ";
        // line 62
        echo "  ";
        if (($context["head"] ?? null)) {
            // line 63
            echo "  <div class=\"copy__head\">
    ";
            // line 64
            if (($context["h2"] ?? null)) {
                // line 65
                echo "    <h2>";
                echo ($context["h2"] ?? null);
                echo "</h2>
    ";
            } elseif (            // line 66
($context["p"] ?? null)) {
                // line 67
                echo "    <p>";
                echo ($context["p"] ?? null);
                echo "</p>
    ";
            }
            // line 69
            echo "  </div>
  ";
        }
        // line 71
        echo "
  ";
        // line 73
        echo "  ";
        if (($context["body"] ?? null)) {
            // line 74
            echo "  <div class=\"copy__body\">
    ";
            // line 75
            if (($context["body_plain"] ?? null)) {
                // line 76
                echo "    <p>";
                echo ($context["body_plain"] ?? null);
                echo "</p>
    ";
            } elseif (            // line 77
($context["body_wysiwyg"] ?? null)) {
                // line 78
                echo "    ";
                echo ($context["body_wysiwyg"] ?? null);
                echo "
    ";
            }
            // line 80
            echo "  </div>
  ";
        }
        // line 82
        echo "

  ";
        // line 85
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 86
            echo "  <div class=\"copy__footer\">
    ";
            // line 87
            $this->displayBlock('cta', $context, $blocks);
            // line 90
            echo "  </div>
  ";
        }
        // line 92
        echo "</div>
";
    }

    // line 87
    public function block_cta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "      ";
        $this->loadTemplate("partial/cta.twig", "partial/copy-block.twig", 88)->display($context);
        // line 89
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partial/copy-block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 89,  226 => 88,  222 => 87,  217 => 92,  213 => 90,  211 => 87,  208 => 86,  205 => 85,  201 => 82,  197 => 80,  191 => 78,  189 => 77,  184 => 76,  182 => 75,  179 => 74,  176 => 73,  173 => 71,  169 => 69,  163 => 67,  161 => 66,  156 => 65,  154 => 64,  151 => 63,  148 => 62,  145 => 60,  139 => 57,  136 => 56,  133 => 55,  130 => 54,  127 => 52,  123 => 50,  121 => 43,  118 => 42,  116 => 41,  110 => 38,  105 => 37,  100 => 35,  97 => 34,  94 => 33,  88 => 31,  83 => 28,  80 => 26,  78 => 25,  76 => 24,  74 => 23,  71 => 21,  68 => 19,  66 => 18,  64 => 17,  62 => 16,  59 => 14,  56 => 12,  54 => 11,  52 => 10,  50 => 9,  47 => 7,  44 => 5,  42 => 4,  40 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Setting media types #}
{% if img %}
{% set media = img %}
{% elseif icon %}
{% set media = icon %}
{% endif %}

{# Setting head tag #}
{% if h2 %}
{% set head = h2 %}
{% elseif p %}
{% set head = p %}
{% endif %}

{# Setting content type #}
{% if body_plain %}
{% set body = body_plain %}
{% elseif body_wysiwyg %}
{% set body = body_wysiwyg %}
{% endif %}

{# Setting footer content #}
{% if btn %}
{% set footer = btn %}
{% elseif link %}
{% set footer = link %}
{% endif %}



<div class=\"section__copy {{ content_class | join(\" \") }}\" bp=\"grid 12{{ cta ? \" 6--max\" }}\">
  {# media #}
  {% if media %}
  {% if icon %}
  <div class=\"copy__icon {{ light ? \"copy__icon--light\" }}\">
    {# <img src=\"{{theme.path ~ \"/src/assets/icons/\" ~ icon ~ \".svg\"}}\" alt=\"{{ icon | replace({\"-\": \" \"}) }}\">#}
    <svg id=\"{{ icon }}\">
      <use xlink:href=\"#icon-{{icon}}\"></use>
    </svg>
  </div>
  {% elseif img %}
  <div class=\"copy__media\">
    {% include \"partial/media.twig\" with {
        img: {
          url: \"https://via.placeholder.com/50x50\",
          alt: \"Default alt term\"
        }
      } 
    %}
  </div>
  {% endif %}

  {# subhead #}
  {% endif %}
  {% if subhead %}
  <div class=\"copy__subhead\">
    <p>{{ subhead }}</p>
  </div>
  {% endif %}

  {# head #}
  {% if head %}
  <div class=\"copy__head\">
    {% if h2 %}
    <h2>{{ h2 }}</h2>
    {% elseif p %}
    <p>{{ p }}</p>
    {% endif %}
  </div>
  {% endif %}

  {# body #}
  {% if body %}
  <div class=\"copy__body\">
    {% if body_plain %}
    <p>{{ body_plain }}</p>
    {% elseif body_wysiwyg %}
    {{ body_wysiwyg }}
    {% endif %}
  </div>
  {% endif %}


  {# footer #}
  {% if footer %}
  <div class=\"copy__footer\">
    {% block cta %}
      {% include \"partial/cta.twig\" %}
    {% endblock cta %}
  </div>
  {% endif %}
</div>
", "partial/copy-block.twig", "/app/src/views/partial/copy-block.twig");
    }
}
