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

/* persons/edit.twig */
class __TwigTemplate_e3dc1a35b8e1030f021c97ea792a1f90 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("layouts/base.twig", "persons/edit.twig", 1)->display($context);
        echo " ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        // line 3
        echo "
<main class=\"flex flex-col\">
\t<section class=\"flex gap-2\">
\t\t<h1>Bewerk score</h1>
\t</section>
\t<section>
\t\t<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["globals"] ?? null), "urlRoot", [], "any", false, false, false, 9), "html", null, true);
        echo "/persons/edit/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["score"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "\" method=\"post\">
\t\t\t<label>
\t\t\t\tScore
\t\t\t\t<input type=\"number\" name=\"value\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["score"] ?? null), "value", [], "any", false, false, false, 12), "html", null, true);
        echo "\" max=\"300\" required />
\t\t\t</label>
\t\t\t<input type=\"submit\" value=\"Bewerk\" />
\t\t</form>
\t</section>
</main>
";
    }

    public function getTemplateName()
    {
        return "persons/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  56 => 9,  48 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "persons/edit.twig", "C:\\School\\test bowling centrum\\Oefenexamen-Bowlingcentrum\\app\\views\\persons\\edit.twig");
    }
}
