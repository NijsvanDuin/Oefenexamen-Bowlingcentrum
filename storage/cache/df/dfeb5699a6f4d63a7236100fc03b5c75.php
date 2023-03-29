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

/* layouts/navbar.twig */
class __TwigTemplate_bcb78b1d96a3269677a2efd788c21937 extends Template
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
        echo "<nav>
\t<ul>
\t\t<li><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["globals"] ?? null), "urlRoot", [], "any", false, false, false, 3), "html", null, true);
        echo "/\">Home</a></li>
\t\t<li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["globals"] ?? null), "urlRoot", [], "any", false, false, false, 4), "html", null, true);
        echo "/result\">Uitslagen</a></li>
\t\t<li>
\t\t\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["globals"] ?? null), "urlRoot", [], "any", false, false, false, 6), "html", null, true);
        echo "/persons\">Personen</a>
\t\t</li>
\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "layouts/navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/navbar.twig", "/home/m-stam/Public/examen/Oefenexamen-Bowlingcentrum/app/views/layouts/navbar.twig");
    }
}
