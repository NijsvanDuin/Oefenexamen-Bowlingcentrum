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

/* result/persons.twig */
class __TwigTemplate_7bb8afbb83bec94d0bd66cb97a85a9d1 extends Template
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
        $this->loadTemplate("layouts/base.twig", "result/persons.twig", 1)->display($context);
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
\t\t<h1>Personen overzicht</h1>
\t</section>
\t<section>
\t\t";
        // line 9
        if (twig_test_empty(($context["persons"] ?? null))) {
            // line 10
            echo "\t\t<span> Er zijn geen resultaten </span>
\t\t";
        } else {
            // line 12
            echo "\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Voornaam</th>
\t\t\t\t\t<th>Tussenvoegsel</th>
\t\t\t\t\t<th>Achternaam</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["persons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 23
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "first_name", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "insertion", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "last_name", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["globals"] ?? null), "urlRoot", [], "any", false, false, false, 28), "html", null, true);
                echo "/result/persons/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "id", [], "any", false, false, false, 28), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t>Bekijk</a
\t\t\t\t\t\t>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t\t</tbody>
\t\t</table>
\t\t";
        }
        // line 37
        echo "\t</section>
</main>
";
    }

    public function getTemplateName()
    {
        return "result/persons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  108 => 34,  94 => 28,  89 => 26,  85 => 25,  81 => 24,  78 => 23,  74 => 22,  62 => 12,  58 => 10,  56 => 9,  48 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "result/persons.twig", "/home/m-stam/Public/examen/Oefenexamen-Bowlingcentrum/app/views/result/persons.twig");
    }
}
