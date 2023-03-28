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

/* reservation/edit.twig */
class __TwigTemplate_3a631ce282dccd0de2413f46cb3ee98a extends Template
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
        $this->parent = $this->loadTemplate("layouts/base.twig", "reservation/edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<main>
\t<section>
\t\t<h1>Create reservation page</h1>
\t\t<p>Here you can make a reservation</p>
\t</section>
\t<section>
\t\t<h3>Create</h3>
\t\t<form
\t\t\taction=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["globals"] ?? null), "urlRoot", [], "any", false, false, false, 10), "html", null, true);
        echo "/reservation/edit/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "\"
\t\t\tmethod=\"post\"
\t\t>
\t\t\t<label>
\t\t\t\t<span>Person:</span>
\t\t\t\t<select name=\"person_id\">
\t\t\t\t\t<option>Select a person</option>
\t\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["persons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["person"], "id", [], "any", false, false, false, 17) == twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "person_id", [], "any", false, false, false, 17))) {
                // line 19
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "id", [], "any", false, false, false, 19), "html", null, true);
                echo "\" selected>
\t\t\t\t\t\t";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "first_name", [], "any", false, false, false, 20), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "last_name", [], "any", false, false, false, 20), "html", null, true);
                echo "
\t\t\t\t\t</option>
\t\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "first_name", [], "any", false, false, false, 24), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "last_name", [], "any", false, false, false, 24), "html", null, true);
                echo "
\t\t\t\t\t</option>
\t\t\t\t\t";
            }
            // line 26
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t\t</select>
\t\t\t</label>
\t\t\t<label>
\t\t\t\t<span>Track:</span>
\t\t\t\t<select name=\"track_id\">
\t\t\t\t\t<option>Select a track</option>
\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tracks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 33) == twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "track_id", [], "any", false, false, false, 33))) {
                // line 34
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 34), "html", null, true);
                echo "\" selected>
\t\t\t\t\t\t";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "code", [], "any", false, false, false, 35), "html", null, true);
                echo "
\t\t\t\t\t</option>
\t\t\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "code", [], "any", false, false, false, 39), "html", null, true);
                echo "
\t\t\t\t\t</option>
\t\t\t\t\t";
            }
            // line 41
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t\t</select>
\t\t\t</label>
\t\t\t<label>
\t\t\t\t<span>Opening:</span>
\t\t\t\t<select name=\"opening_id\">
\t\t\t\t\t<option>Select an opening</option>
\t\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["openings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["opening"]) {
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["opening"], "id", [], "any", false, false, false, 48) == twig_get_attribute($this->env, $this->source,             // line 49
($context["reservation"] ?? null), "opening_id", [], "any", false, false, false, 49))) {
                // line 50
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "id", [], "any", false, false, false, 50), "html", null, true);
                echo "\" selected>
\t\t\t\t\t\t";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "start", [], "any", false, false, false, 51), "html", null, true);
                echo " tot ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "end", [], "any", false, false, false, 51), "html", null, true);
                echo "
\t\t\t\t\t</option>
\t\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "id", [], "any", false, false, false, 54), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "start", [], "any", false, false, false, 55), "html", null, true);
                echo " tot ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "end", [], "any", false, false, false, 55), "html", null, true);
                echo "
\t\t\t\t\t</option>
\t\t\t\t\t";
            }
            // line 57
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opening'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t</select>
\t\t\t</label>
\t\t\t<label>
\t\t\t\t<span>Date:</span>
\t\t\t\t<input
\t\t\t\t\ttype=\"date\"
\t\t\t\t\tname=\"date_reservation\"
\t\t\t\t\tvalue=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "date_reservation", [], "any", false, false, false, 65), "html", null, true);
        echo "\"
\t\t\t\t/>
\t\t\t</label>
\t\t\t<label>
\t\t\t\t<span>Time:</span>
\t\t\t\t<input
\t\t\t\t\ttype=\"time\"
\t\t\t\t\tname=\"time_reservation\"
\t\t\t\t\tvalue=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "time_reservation", [], "any", false, false, false, 73), "html", null, true);
        echo "\"
\t\t\t\t/>
\t\t\t</label>
\t\t\t<label>
\t\t\t\t<span>Adults:</span>
\t\t\t\t<input type=\"number\" name=\"adults\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "adults", [], "any", false, false, false, 78), "html", null, true);
        echo "\" />
\t\t\t</label>
\t\t\t<label>
\t\t\t\t<span>Children:</span>
\t\t\t\t<input
\t\t\t\t\ttype=\"number\"
\t\t\t\t\tname=\"children\"
\t\t\t\t\tvalue=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "children", [], "any", false, false, false, 85), "html", null, true);
        echo "\"
\t\t\t\t/>
\t\t\t</label>
\t\t\t<label>
\t\t\t\t<span>Active:</span>
\t\t\t\t<input type=\"checkbox\" name=\"is_active\" ";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "is_active", [], "any", false, false, false, 90) == 1)) {
            // line 91
            echo "checked";
        }
        echo " />
\t\t\t</label>
\t\t\t<button>
\t\t\t\t<span>Update</span>
\t\t\t</button>
\t\t</form>
\t</section>
</main>
";
    }

    public function getTemplateName()
    {
        return "reservation/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 91,  244 => 90,  236 => 85,  226 => 78,  218 => 73,  207 => 65,  198 => 58,  192 => 57,  184 => 55,  179 => 54,  171 => 51,  166 => 50,  164 => 49,  159 => 48,  151 => 42,  145 => 41,  139 => 39,  134 => 38,  128 => 35,  123 => 34,  117 => 33,  109 => 27,  103 => 26,  95 => 24,  90 => 23,  82 => 20,  77 => 19,  71 => 17,  59 => 10,  49 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reservation/edit.twig", "/home/m-stam/Public/examen/Oefenexamen-Bowlingcentrum/app/views/reservation/edit.twig");
    }
}
