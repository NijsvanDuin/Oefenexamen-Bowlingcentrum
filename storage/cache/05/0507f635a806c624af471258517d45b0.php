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

/* result/players.twig */
class __TwigTemplate_654e58f6af410bd3f0dd43996ce5a9da extends Template
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
        $this->loadTemplate("layouts/base.twig", "result/players.twig", 1)->display($context);
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
\t\t<h1>Overzicht uitslag</h1>
\t\t<form method=\"get\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["globals"] ?? null), "urlRoot", [], "any", false, false, false, 7), "html", null, true);
        echo "/result\">
\t\t\t<select name=\"date\">
\t\t\t\t<option value=\"all\">Alle data</option>
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["personScores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 11
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "score_created_at", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "score_created_at", [], "any", false, false, false, 12), "html", null, true);
            echo "
\t\t\t\t</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t</select>
\t\t\t<input type=\"submit\" value=\"Zoek\" />
\t\t</form>
\t</section>
\t<section>
\t\t";
        // line 20
        if (twig_test_empty(($context["personScores"] ?? null))) {
            // line 21
            echo "\t\t<span> Er zijn geen resultaten </span>
\t\t";
        } else {
            // line 23
            echo "\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<th>Voornaam</th>
\t\t\t\t\t<th>Tussenvoegsel</th>
\t\t\t\t\t<th>Achternaam</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["personScores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 35
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "first_name", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "insertion", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "last_name", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["globals"] ?? null), "urlRoot", [], "any", false, false, false, 41), "html", null, true);
                echo "/result/edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t>Detail</a
\t\t\t\t\t\t>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t\t</tbody>
\t\t</table>
\t\t";
        }
        // line 50
        echo "\t</section>
</main>
";
    }

    public function getTemplateName()
    {
        return "result/players.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 50,  142 => 47,  128 => 41,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  108 => 35,  104 => 34,  91 => 23,  87 => 21,  85 => 20,  78 => 15,  69 => 12,  64 => 11,  60 => 10,  54 => 7,  48 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "result/players.twig", "/home/m-stam/Public/examen/Oefenexamen-Bowlingcentrum/app/views/result/players.twig");
    }
}
