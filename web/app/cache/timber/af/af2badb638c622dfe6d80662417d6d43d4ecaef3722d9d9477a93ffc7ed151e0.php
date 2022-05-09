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

/* html-header.twig */
class __TwigTemplate_cf1a222d130ba8cf72906675bcbb28b3383b4876451a17b0c7a83d7a6c15e968 extends \Twig\Template
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
        echo "<!doctype html>
<html ";
        // line 2
        echo $this->getAttribute(($context["site"] ?? null), "language_attributes", []);
        echo ">
<head>
    <meta charset=\"";
        // line 4
        echo $this->getAttribute(($context["site"] ?? null), "charset", []);
        echo "\"/>
    <meta name=\"description\" content=\"";
        // line 5
        echo $this->getAttribute(($context["site"] ?? null), "description", []);
        echo "\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"pingback\" href=\"";
        // line 9
        echo $this->getAttribute(($context["site"] ?? null), "pingback_url", []);
        echo "\"/>
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["wp_head"]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "html-header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  49 => 9,  42 => 5,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html {{ site.language_attributes }}>
<head>
    <meta charset=\"{{ site.charset }}\"/>
    <meta name=\"description\" content=\"{{ site.description }}\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"pingback\" href=\"{{ site.pingback_url }}\"/>
    {{ function('wp_head') }}
", "html-header.twig", "/app/web/app/themes/briskly/dist/templates/html-header.twig");
    }
}
