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

/* layouts/messages/base.twig */
class __TwigTemplate_9f57382c58a302c578a467d152548162 extends Template
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
        $this->loadTemplate("layouts/base.twig", "layouts/messages/base.twig", 1)->display($context);
        echo " ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<main class=\"flex justify-center align-center\">
\t<section>
\t\t<h1>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["msg"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
\t\t<span>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["msg"] ?? null), "body", [], "any", false, false, false, 5), "html", null, true);
        echo "</span>
\t</section>
</main>

";
    }

    public function getTemplateName()
    {
        return "layouts/messages/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 5,  51 => 4,  47 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/messages/base.twig", "/home/m-stam/Public/examen/Oefenexamen-Bowlingcentrum/app/views/layouts/messages/base.twig");
    }
}
