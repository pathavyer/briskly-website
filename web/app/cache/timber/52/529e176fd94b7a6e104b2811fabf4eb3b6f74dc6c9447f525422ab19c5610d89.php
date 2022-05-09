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

/* menu.twig */
class __TwigTemplate_2a698c0ed593259f57a6e46456966c69aa0b5a53bfb1c737e87c08fb54f19013 extends \Twig\Template
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
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 5), " ");
                echo "\">
            <a class=\"menu-item__link\" target=\"";
                // line 6
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "target", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "target", [], "any", false, false, false, 6), "_self")) : ("_self"));
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 6);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 6);
                echo "</a>
            ";
                // line 7
                $this->loadTemplate("menu.twig", "menu.twig", 7)->display(twig_array_merge($context, ["primary_menu" => twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 7)]));
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
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 16), " ");
                echo "\">
            <a class=\"menu-item__link\" target=\"";
                // line 17
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "target", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "target", [], "any", false, false, false, 17), "_self")) : ("_self"));
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 17);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 17);
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
                echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 26), " ");
                echo "\">
            <a class=\"menu-item__link\" target=\"";
                // line 27
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "target", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "target", [], "any", false, false, false, 27), "_self")) : ("_self"));
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 27);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 27);
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
        return array (  164 => 32,  159 => 29,  147 => 27,  142 => 26,  138 => 25,  135 => 24,  133 => 23,  130 => 22,  125 => 19,  113 => 17,  108 => 16,  104 => 15,  101 => 14,  99 => 13,  96 => 12,  91 => 9,  77 => 8,  75 => 7,  67 => 6,  62 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
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
