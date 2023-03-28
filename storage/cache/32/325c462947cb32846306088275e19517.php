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
\t\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["globals"] ?? null), "urlRoot", [], "any", false, false, false, 6), "html", null, true);
        echo "/reservation/create\">Create</a>
\t</section>
\t<section>
\t\t<h3>Reservations</h3>
\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>ID</th>
\t\t\t\t\t<th>Preson ID</th>
\t\t\t\t\t<th>Track ID</th>
\t\t\t\t\t<th>Opening ID</th>
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Time</th>
\t\t\t\t\t<th>Adults</th>
\t\t\t\t\t<th>Children</th>
\t\t\t\t\t<th>Active</th>
\t\t\t\t\t<th>Created at</th>
\t\t\t\t\t<th>Updated at</th>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 30
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "person_id", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "track_id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "opening_id", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "date_reservation", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "time_reservation", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "adults", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "children", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "is_active", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "created_at", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "updated_at", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["globals"] ?? null), "urlRoot", [], "any", false, false, false, 44), "html", null, true);
            echo "/reservation/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t>Edit</a
\t\t\t\t\t\t>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["globals"] ?? null), "urlRoot", [], "any", false, false, false, 50), "html", null, true);
            echo "/reservation/delete/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 51
$context["reservation"], "id", [], "any", false, false, false, 51), "html", null, true);
            // line 52
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
        // line 58
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
        return array (  161 => 58,  150 => 52,  148 => 51,  145 => 50,  134 => 44,  128 => 41,  124 => 40,  120 => 39,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  88 => 31,  85 => 30,  81 => 29,  55 => 6,  49 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reservation/index.twig", "/home/m-stam/Public/examen/Oefenexamen-Bowlingcentrum/app/views/reservation/index.twig");
    }
}
