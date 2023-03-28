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

/* reservation/index.twig */
class __TwigTemplate_fd8b1b176b8759df8e7a08e71a5da81a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/base.twig", "reservation/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<main>
\t<section>
\t\t<h1>Reservation page</h1>
\t\t<p>Here you can make a reservation</p>
\t</section>
\t<section>
\t\t<h3>Reservations</h3>
\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>ID</th>
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Time</th>
\t\t\t\t\t<th>Adults</th>
\t\t\t\t\t<th>Children</th>
\t\t\t\t\t<th>Active</th>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 24
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "date_reservation", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "time_reservation", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "adults", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "children", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "is_active", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["globals"] ?? null), "urlRoot", [], "any", false, false, false, 33), "html", null, true);
            echo "/reservation/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t>Edit</a
\t\t\t\t\t\t>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["globals"] ?? null), "urlRoot", [], "any", false, false, false, 39), "html", null, true);
            echo "/reservation/delete/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 40
$context["reservation"], "id", [], "any", false, false, false, 40), "html", null, true);
            // line 41
            echo "\"
\t\t\t\t\t\t\t>Delete</a
\t\t\t\t\t\t>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t</tbody>
\t\t</table>
\t</section>
</main>
";
    }

    public function getTemplateName()
    {
        return "reservation/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 47,  121 => 41,  119 => 40,  116 => 39,  105 => 33,  99 => 30,  95 => 29,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  76 => 24,  72 => 23,  49 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reservation/index.twig", "/home/m-stam/Public/examen/Oefenexamen-Bowlingcentrum/app/views/reservation/index.twig");
    }
}
