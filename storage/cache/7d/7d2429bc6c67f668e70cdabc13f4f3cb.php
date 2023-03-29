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

/* result/update.twig */
class __TwigTemplate_10efbb95dc2be528c4b264adb57929bd extends Template
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
        $this->loadTemplate("layouts/base.twig", "result/update.twig", 1)->display($context);
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
\t<section>
\t\t<h1>Datail uitslag</h1>
\t\t<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["globals"] ?? null), "urlRoot", [], "any", false, false, false, 7), "html", null, true);
        echo "/result/update/";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" method=\"post\">
\t\t\t<label>
\t\t\t\tAantal punten:
\t\t\t\t<input type=\"number\" name=\"value\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["personScores"] ?? null), "value", [], "any", false, false, false, 10), "html", null, true);
        echo "\" />
\t\t\t</label>
\t\t\t<input type=\"submit\" value=\"Wijzig\" />
\t\t</form>
\t</section>
</main>
";
    }

    public function getTemplateName()
    {
        return "result/update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  54 => 7,  48 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "result/update.twig", "/home/m-stam/Public/examen/Oefenexamen-Bowlingcentrum/app/views/result/update.twig");
    }
}
