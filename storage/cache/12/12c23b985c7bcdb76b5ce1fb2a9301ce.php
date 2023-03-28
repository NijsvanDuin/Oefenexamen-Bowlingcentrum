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

/* reservation/create.twig */
class __TwigTemplate_94f77329be96d9b5b5396428729954b0 extends Template
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
        $this->parent = $this->loadTemplate("layouts/base.twig", "reservation/create.twig", 1);
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
\t\t<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["globals"] ?? null), "urlRoot", [], "any", false, false, false, 9), "html", null, true);
        echo "/reservation/create\" method=\"post\">
\t\t\t<label>
\t\t\t\t<span>Person:</span>
\t\t\t\t<select name=\"person_id\">
\t\t\t\t\t<option>Select a person</option>
\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["persons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 15
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "first_name", [], "any", false, false, false, 16), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "last_name", [], "any", false, false, false, 16), "html", null, true);
            echo "
\t\t\t\t\t</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t</select>
\t\t\t</label>
\t\t\t<label>
\t\t\t\t<span>Track:</span>
\t\t\t\t<select name=\"track_id\">
\t\t\t\t\t<option>Select a track</option>
\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tracks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 26
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "code", [], "any", false, false, false, 27), "html", null, true);
            echo "
\t\t\t\t\t</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t</select>
\t\t\t</label>
\t\t\t<label>
\t\t\t\t<span>Opening:</span>
\t\t\t\t<select name=\"opening_id\">
\t\t\t\t\t<option>Select an opening</option>
\t\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["openings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["opening"]) {
            // line 37
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "start", [], "any", false, false, false, 38), "html", null, true);
            echo " tot ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opening"], "end", [], "any", false, false, false, 38), "html", null, true);
            echo "
\t\t\t\t\t</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opening'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t\t</select>
\t\t\t</label>
\t\t\t<label>
\t\t\t\t<span>Date:</span>
\t\t\t\t<input type=\"date\" name=\"date_reservation\" />
\t\t\t</label>
\t\t\t<label>
\t\t\t\t<span>Time:</span>
\t\t\t\t<input type=\"time\" name=\"time_reservation\" />
\t\t\t</label>
\t\t\t<label>
\t\t\t\t<span>Adults:</span>
\t\t\t\t<input type=\"number\" name=\"adults\" />
\t\t\t</label>
\t\t\t<label>
\t\t\t\t<span>Children:</span>
\t\t\t\t<input type=\"number\" name=\"children\" />
\t\t\t</label>
\t\t\t<button>
\t\t\t\t<span>Submit</span>
\t\t\t</button>
\t\t</form>
\t</section>
</main>
";
    }

    public function getTemplateName()
    {
        return "reservation/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 41,  129 => 38,  124 => 37,  120 => 36,  112 => 30,  103 => 27,  98 => 26,  94 => 25,  86 => 19,  75 => 16,  70 => 15,  66 => 14,  58 => 9,  49 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reservation/create.twig", "/home/m-stam/Public/examen/Oefenexamen-Bowlingcentrum/app/views/reservation/create.twig");
    }
}
