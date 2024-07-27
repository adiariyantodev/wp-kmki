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

/* ad14c71eb49ee3fb36582acf3ca84249fc63fdbb */
class __TwigTemplate_b0ee96513bf02b67365fb08a267787f804a6519d78bbf7e98ec0ef544c723b44 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "ad14c71eb49ee3fb36582acf3ca84249fc63fdbb", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 4), "theme", [], "any", false, false, false, 4), "light")) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "style", [], "any", false, false, false, 4), "theme", [], "any", false, false, false, 4)))) {
            // line 5
            echo "light
";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
($context["design"] ?? null), "style", [], "any", false, false, false, 6), "theme", [], "any", false, false, false, 6), "dark"))) {
            // line 7
            echo "dark
";
        }
        // line 9
        echo "         ";
    }

    public function getTemplateName()
    {
        return "ad14c71eb49ee3fb36582acf3ca84249fc63fdbb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  52 => 7,  50 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ad14c71eb49ee3fb36582acf3ca84249fc63fdbb", "");
    }
}
