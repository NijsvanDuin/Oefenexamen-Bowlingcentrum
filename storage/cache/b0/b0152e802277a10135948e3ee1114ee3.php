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
class __TwigTemplate_00e90f260137a347000365e3f3d3f572 extends Template
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
\t\t<form
\t\t\taction=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["globals"] ?? null), "urlRoot", [], "any", false, false, false, 10), "html", null, true);
        echo "/persons/edit/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["score"] ?? null), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "\"
\t\t\tmethod=\"post\"
\t\t>
\t\t\t<label>
\t\t\t\tScore
\t\t\t\t<input type=\"text\" name=\"value\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["score"] ?? null), "value", [], "any", false, false, false, 15), "html", null, true);
        echo "\" />
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
        return array (  67 => 15,  57 => 10,  48 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "persons/edit.twig", "/home/m-stam/Public/examen/Oefenexamen-Bowlingcentrum/app/views/persons/edit.twig");
    }
}
