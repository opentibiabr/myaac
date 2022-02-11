<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* experience_table.html.twig */
class __TwigTemplate_ff837ee533bc0b3884dddf607d0baa649f5ad2ac3c2c15f2d27243c59bc9954c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "This is a list of the experience points that are required to advance to the various levels.
Remember you can also check the respective skill bar in your skill window of the client to check your progress towards the next level.<br/><br/>

<table bgcolor=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
        echo "\" border=\"0\" cellpadding=\"4\" cellspacing=\"1\" width=\"100%\">
\t<tr bgcolor=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
        echo "\">
\t\t<td class=\"white\" colspan=\"5\"><b>Experience Table</b></td>
\t</tr>
\t<tr>
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute(($context["config"] ?? null), "experiencetable_columns", []) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "\t\t<td>
\t\t\t<table border=\"0\" cellpadding=\"2\" cellspacing=\"1\" width=\"100%\">
\t\t\t\t<tr bgcolor=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", []), "html", null, true);
            echo "\">
\t\t\t\t\t<td><b>Level</b></td>
\t\t\t\t\t<td><b>Experience</b></td>
\t\t\t\t</tr>
\t\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((($context["i"] * $this->getAttribute(($context["config"] ?? null), "experiencetable_rows", [])) + 1), ((($context["i"] * $this->getAttribute(($context["config"] ?? null), "experiencetable_rows", [])) + ($this->getAttribute(($context["config"] ?? null), "experiencetable_rows", []) + 1)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 17
                echo "\t\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", []), "html", null, true);
                echo "\">
\t\t\t\t\t<td>";
                // line 18
                echo twig_escape_filter($this->env, $context["level"], "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute(($context["experience"] ?? null), $context["level"], [], "array"), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t</table>
\t\t</td>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t</tr>
</table>";
    }

    public function getTemplateName()
    {
        return "experience_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  83 => 22,  74 => 19,  70 => 18,  65 => 17,  61 => 16,  54 => 12,  50 => 10,  46 => 9,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "experience_table.html.twig", "D:\\xampp-new\\htdocs\\CharBaazar\\system\\templates\\experience_table.html.twig");
    }
}
