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

/* partial/copy-block.twig */
class __TwigTemplate_d4322f842ca51e132442d2a864f4dac86636eca13fbe5247014efdb4b1fc7cd8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'cta' => [$this, 'block_cta'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
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
        return array (  221 => 89,  218 => 88,  215 => 87,  210 => 92,  206 => 90,  204 => 87,  201 => 86,  198 => 85,  194 => 82,  190 => 80,  184 => 78,  182 => 77,  177 => 76,  175 => 75,  172 => 74,  169 => 73,  166 => 71,  162 => 69,  156 => 67,  154 => 66,  149 => 65,  147 => 64,  144 => 63,  141 => 62,  138 => 60,  132 => 57,  129 => 56,  126 => 55,  123 => 54,  120 => 52,  116 => 50,  114 => 43,  111 => 42,  109 => 41,  103 => 38,  98 => 37,  93 => 35,  90 => 34,  87 => 33,  81 => 31,  76 => 28,  73 => 26,  71 => 25,  69 => 24,  67 => 23,  64 => 21,  61 => 19,  59 => 18,  57 => 17,  55 => 16,  52 => 14,  49 => 12,  47 => 11,  45 => 10,  43 => 9,  40 => 7,  37 => 5,  35 => 4,  33 => 3,  31 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "partial/copy-block.twig", "/app/web/app/themes/briskly/dist/templates/partial/copy-block.twig");
    }
}
