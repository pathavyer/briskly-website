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

/* html-header.twig */
class __TwigTemplate_520fb59410e1c0b7ea79c29defe3a28fea2e04079fa6d26524e999f9e4239452 extends \Twig\Template
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
        echo "<!doctype html>
<html ";
        // line 2
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "language_attributes", [], "any", false, false, false, 2);
        echo ">
<head>
    <meta charset=\"";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "charset", [], "any", false, false, false, 4);
        echo "\"/>
    <meta name=\"description\" content=\"";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "description", [], "any", false, false, false, 5);
        echo "\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"pingback\" href=\"";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "pingback_url", [], "any", false, false, false, 9);
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
        return array (  60 => 10,  56 => 9,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
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
