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

/* partial/media.twig */
class __TwigTemplate_b4fc04227cc4f7043435146b940c0c376c5221d65c598cc4107889f99cc89442 extends \Twig\Template
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
        $context["imgPlaceholder"] = "https://via.placeholder.com/500x500";
        // line 2
        $context["altPlaceholder"] = "Briskly Digital";
        // line 3
        echo "

";
        // line 5
        if (($context["img"] ?? null)) {
            // line 6
            echo "    ";
            $context["media"] = ($context["img"] ?? null);
        }
        // line 8
        echo "
";
        // line 9
        if (($context["media"] ?? null)) {
            // line 10
            echo "    ";
            if (($context["img"] ?? null)) {
                // line 11
                echo "        <figure>
            <img src=\"";
                // line 12
                echo ((twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "url", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "url", [], "any", false, false, false, 12), ($context["imgPlaceholder"] ?? null))) : (($context["imgPlaceholder"] ?? null)));
                echo "\" alt=\"";
                echo ((twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "alt", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "alt", [], "any", false, false, false, 12), ($context["altPlaceholder"] ?? null))) : (($context["altPlaceholder"] ?? null)));
                echo "\" />
        </figure>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partial/media.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  59 => 11,  56 => 10,  54 => 9,  51 => 8,  47 => 6,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set imgPlaceholder = \"https://via.placeholder.com/500x500\" %}
{% set altPlaceholder = \"Briskly Digital\" %}


{% if img %}
    {% set media = img %}
{% endif %}

{% if media %}
    {% if img %}
        <figure>
            <img src=\"{{ img.url | default(imgPlaceholder) }}\" alt=\"{{ img.alt | default(altPlaceholder) }}\" />
        </figure>
    {% endif %}
{% endif %}
", "partial/media.twig", "/app/web/app/themes/briskly/dist/views/partial/media.twig");
    }
}
