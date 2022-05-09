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

/* menu.twig */
class __TwigTemplate_be75ea6bc8288bcbb498c1e5957eec8a7cee4a7823460ab5446513170eac4a98 extends \Twig\Template
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
        echo "
";
        // line 2
        if (($context["primary_menu"] ?? null)) {
            // line 3
            echo "    <ul>
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["primary_menu"] ?? null));
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
                // line 5
                echo "        <li class=\"";
                echo twig_join_filter($this->getAttribute($context["item"], "classes", []), " ");
                echo "\">
            <a class=\"menu-item__link\" target=\"";
                // line 6
                echo (($this->getAttribute($context["item"], "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", []), "_self")) : ("_self"));
                echo "\" href=\"";
                echo $this->getAttribute($context["item"], "link", []);
                echo "\">";
                echo $this->getAttribute($context["item"], "title", []);
                echo "</a>
            ";
                // line 7
                $this->loadTemplate("menu.twig", "menu.twig", 7)->display(twig_array_merge($context, ["primary_menu" => $this->getAttribute($context["item"], "children", [])]));
                // line 8
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </li>
    </ul>
";
        }
        // line 12
        echo "
";
        // line 13
        if (($context["legal_menu"] ?? null)) {
            // line 14
            echo "    <ul>
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["legal_menu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 16
                echo "        <li class=\"";
                echo twig_join_filter($this->getAttribute($context["item"], "classes", []), " ");
                echo "\">
            <a class=\"menu-item__link\" target=\"";
                // line 17
                echo (($this->getAttribute($context["item"], "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", []), "_self")) : ("_self"));
                echo "\" href=\"";
                echo $this->getAttribute($context["item"], "link", []);
                echo "\">";
                echo $this->getAttribute($context["item"], "title", []);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </li>
    </ul>
";
        }
        // line 22
        echo "
";
        // line 23
        if (($context["footer_menu"] ?? null)) {
            // line 24
            echo "    <ul>
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["footer_menu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 26
                echo "        <li class=\"";
                echo twig_join_filter($this->getAttribute($context["item"], "classes", []), " ");
                echo "\">
            <a class=\"menu-item__link\" target=\"";
                // line 27
                echo (($this->getAttribute($context["item"], "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", []), "_self")) : ("_self"));
                echo "\" href=\"";
                echo $this->getAttribute($context["item"], "link", []);
                echo "\">";
                echo $this->getAttribute($context["item"], "title", []);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </li>
    </ul>
";
        }
        // line 32
        echo "


    

";
    }

    public function getTemplateName()
    {
        return "menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 32,  152 => 29,  140 => 27,  135 => 26,  131 => 25,  128 => 24,  126 => 23,  123 => 22,  118 => 19,  106 => 17,  101 => 16,  97 => 15,  94 => 14,  92 => 13,  89 => 12,  84 => 9,  70 => 8,  68 => 7,  60 => 6,  55 => 5,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% if primary_menu %}
    <ul>
        {% for item in primary_menu %}
        <li class=\"{{ item.classes | join(' ') }}\">
            <a class=\"menu-item__link\" target=\"{{ item.target | default(\"_self\") }}\" href=\"{{ item.link }}\">{{ item.title }}</a>
            {% include \"menu.twig\" with {primary_menu: item.children} %}
        {% endfor %}
        </li>
    </ul>
{% endif %}

{% if legal_menu %}
    <ul>
        {% for item in legal_menu %}
        <li class=\"{{ item.classes | join(' ') }}\">
            <a class=\"menu-item__link\" target=\"{{ item.target | default(\"_self\") }}\" href=\"{{ item.link }}\">{{ item.title }}</a>
        {% endfor %}
        </li>
    </ul>
{% endif %}

{% if footer_menu %}
    <ul>
        {% for item in footer_menu %}
        <li class=\"{{ item.classes | join(' ') }}\">
            <a class=\"menu-item__link\" target=\"{{ item.target | default(\"_self\") }}\" href=\"{{ item.link }}\">{{ item.title }}</a>
        {% endfor %}
        </li>
    </ul>
{% endif %}



    

{#     
{% if legal_menu %}
        {% for item in legal_menu %}
                <a class=\"menu__item\" target=\"{{ item.target | default(\"_self\") }}\" href=\"{{ item.link }}\">{{ item.title }}</a>
        {% endfor %}
{% endif %} #}
", "menu.twig", "/app/web/app/themes/briskly/dist/templates/menu.twig");
    }
}
