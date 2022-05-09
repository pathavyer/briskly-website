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

/* base.twig */
class __TwigTemplate_277e13b7c8dc50781e05817f2c60500e175fda59d6aed29a7705bd56320422ff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'html_head_container' => [$this, 'block_html_head_container'],
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'modal' => [$this, 'block_modal'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('html_head_container', $context, $blocks);
        // line 8
        echo "
<body class=\"";
        // line 9
        echo ($context["body_class"] ?? null);
        echo "\">
  <a class=\"skip-link screen-reader-text\" href=\"#content\">";
        // line 10
        echo _e("Skip to content");
        echo "</a>
  <header class=\"header\">
    ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 23
        echo "  </header>

  <main id=\"content\" role=\"main\">
    ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    ";
        // line 34
        echo "
  </main>

  ";
        // line 37
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo "
  ";
        // line 54
        $this->loadTemplate("partial/svg.twig", "base.twig", 54)->display($context);
        // line 55
        echo "


</body>

</html>
";
    }

    // line 1
    public function block_html_head_container($context, array $blocks = [])
    {
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("html-header.twig", "base.twig", 3)->display($context);
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 6
        echo "</head>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
    }

    // line 12
    public function block_header($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        $this->loadTemplate("navbar.twig", "base.twig", 13)->display($context);
        // line 14
        echo "    ";
        // line 22
        echo "    ";
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        // line 27
        echo "    Sorry, no content
    ";
    }

    // line 37
    public function block_footer($context, array $blocks = [])
    {
        // line 38
        echo "  <footer class=\"footer\" id=\"footer\">
    ";
        // line 39
        $this->loadTemplate("footer.twig", "base.twig", 39)->display($context);
        // line 40
        echo "    <div class=\"footer__copyright\">
      <div bp=\"container\">
       <p> Briskly Digital -  Copyrights ";
        // line 42
        echo call_user_func_array($this->env->getFilter('date')->getCallable(), ["now", "Y"]);
        echo "</p>
      </div>
    </div>
  </footer>

  ";
        // line 47
        $this->displayBlock('modal', $context, $blocks);
        // line 50
        echo "
  ";
        // line 51
        echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["wp_footer"]);
        echo "
  ";
    }

    // line 47
    public function block_modal($context, array $blocks = [])
    {
        // line 48
        echo "  ";
        $this->loadTemplate("modal-menu.twig", "base.twig", 48)->display($context);
        // line 49
        echo "  ";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 49,  157 => 48,  154 => 47,  148 => 51,  145 => 50,  143 => 47,  135 => 42,  131 => 40,  129 => 39,  126 => 38,  123 => 37,  118 => 27,  115 => 26,  111 => 22,  109 => 14,  106 => 13,  103 => 12,  98 => 4,  93 => 6,  91 => 4,  89 => 3,  86 => 2,  83 => 1,  73 => 55,  71 => 54,  68 => 53,  66 => 37,  61 => 34,  59 => 29,  57 => 26,  52 => 23,  50 => 12,  45 => 10,  41 => 9,  38 => 8,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block html_head_container %}

{% include 'html-header.twig' %}
{% block head %}
{% endblock %}
</head>
{% endblock %}

<body class=\"{{ body_class }}\">
  <a class=\"skip-link screen-reader-text\" href=\"#content\">{{ _e( 'Skip to content') }}</a>
  <header class=\"header\">
    {% block header %}
    {% include \"navbar.twig\" %}
    {# <div class=\"wrapper\">
            <h1 class=\"hdr-logo\" role=\"banner\">
                <a class=\"hdr-logo-link\" href=\"{{ site.url }}\" rel=\"home\">{{ site.name }}</a>
            </h1>
            <nav id=\"nav-main\" class=\"nav-main\" role=\"navigation\">
                {% include \"menu.twig\" with {'items': menu.get_items} %}
            </nav><!-- #nav -->
        </div> #}
    {% endblock %}
  </header>

  <main id=\"content\" role=\"main\">
    {% block content %}
    Sorry, no content
    {% endblock %}
    {# {% if sidebar %}
        <aside class=\"layout-sidebar\">
            {{ sidebar }}
        </aside>
    {% endif %} #}

  </main>

  {% block footer %}
  <footer class=\"footer\" id=\"footer\">
    {% include 'footer.twig' %}
    <div class=\"footer__copyright\">
      <div bp=\"container\">
       <p> Briskly Digital -  Copyrights {{ \"now\"|date('Y') }}</p>
      </div>
    </div>
  </footer>

  {% block modal %}
  {% include 'modal-menu.twig' %}
  {% endblock %}

  {{ function('wp_footer') }}
  {% endblock %}

  {% include \"partial/svg.twig\" %}



</body>

</html>
", "base.twig", "/app/web/app/themes/briskly/dist/templates/base.twig");
    }
}
