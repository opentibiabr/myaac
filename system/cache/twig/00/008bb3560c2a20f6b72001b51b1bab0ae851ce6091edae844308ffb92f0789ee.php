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

/* online.form.html.twig */
class __TwigTemplate_d56ee1580823a354791458022e1e0d2e59033d1c87aa3de4f4ad01726fcc16f8 extends \Twig\Template
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
        echo "<br/>
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["characters"]), "html", null, true);
        echo "\" method=post>
\t<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
        echo "\" class=\"white\">
\t\t\t\t<b>Search Character</b>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
        echo "\">
\t\t\t\t<table border=\"0\" cellpadding=\"1\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Name:</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input name=\"name\" value=\"\"size=29 maxlength=29>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 18
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>";
    }

    public function getTemplateName()
    {
        return "online.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  47 => 10,  39 => 5,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "online.form.html.twig", "D:\\xampp-new\\htdocs\\CharBaazar\\system\\templates\\online.form.html.twig");
    }
}
