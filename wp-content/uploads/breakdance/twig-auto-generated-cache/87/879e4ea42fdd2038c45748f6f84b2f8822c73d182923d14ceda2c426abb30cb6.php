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

/* 4c64ef553a7ef74f260ee9a04edc8a679b981701 */
class __TwigTemplate_a608fd2c8467bc007b1d2e4368fe6250e932d73f9b610d678d422f6fd3ef4f07 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "4c64ef553a7ef74f260ee9a04edc8a679b981701", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 4), "no_header", [], "any", false, false, false, 4)) {
            // line 5
            echo "noheader
";
        }
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 7), "no_footer", [], "any", false, false, false, 7)) {
            // line 8
            echo " nofooter
";
        }
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 10), "no_border", [], "any", false, false, false, 10)) {
            // line 11
            echo " noborders
";
        }
        // line 13
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 13), "no_scrollbar", [], "any", false, false, false, 13)) {
            // line 14
            echo " noscrollbar
";
        }
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 16), "no_background", [], "any", false, false, false, 16)) {
            // line 17
            echo " transparent
";
        }
        // line 19
        echo "         ";
    }

    public function getTemplateName()
    {
        return "4c64ef553a7ef74f260ee9a04edc8a679b981701";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  71 => 17,  69 => 16,  65 => 14,  63 => 13,  59 => 11,  57 => 10,  53 => 8,  51 => 7,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "4c64ef553a7ef74f260ee9a04edc8a679b981701", "");
    }
}
