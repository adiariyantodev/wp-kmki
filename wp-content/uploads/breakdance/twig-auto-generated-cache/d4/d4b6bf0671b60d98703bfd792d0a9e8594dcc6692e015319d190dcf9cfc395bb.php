<?php

use Breakdance\Lib\Vendor\Twig\Environment;
use Breakdance\Lib\Vendor\Twig\Error\LoaderError;
use Breakdance\Lib\Vendor\Twig\Error\RuntimeError;
use Breakdance\Lib\Vendor\Twig\Extension\SandboxExtension;
use Breakdance\Lib\Vendor\Twig\Markup;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedTagError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use Breakdance\Lib\Vendor\Twig\Source;
use Breakdance\Lib\Vendor\Twig\Template;

/* 2a0e6e9a46a041de4a8219639e50b9945f565cb8 */
class __TwigTemplate_06b0bbb9359ca1335756264395affefd797fb48553bfb236bebe8663db0b614c extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "2a0e6e9a46a041de4a8219639e50b9945f565cb8", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 4), "enable", [], "any", false, false, false, 4)) {
            // line 5
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 5), "scroll_behavior", [], "any", false, false, false, 5), "hide_after", [], "any", false, false, false, 5), "number", [], "any", false, false, false, 5);
            echo "
";
        }
        // line 7
        echo "         ";
    }

    public function getTemplateName()
    {
        return "2a0e6e9a46a041de4a8219639e50b9945f565cb8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "2a0e6e9a46a041de4a8219639e50b9945f565cb8", "");
    }
}