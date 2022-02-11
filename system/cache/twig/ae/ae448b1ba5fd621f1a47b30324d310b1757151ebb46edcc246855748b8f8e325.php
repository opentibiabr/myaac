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

/* news.archive.html.twig */
class __TwigTemplate_88295ff6bda05d696acf05d4ac07b28e75f3dc33f4e1f1533b093cb3d32afd33 extends \Twig\Template
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
        echo "<div class=\"TableContainer\">
<div class=\"CaptionContainer\">
<div class=\"CaptionInnerContainer\">
\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 4
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 5
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 6
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 7
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<div class=\"Text\">News archive</div>
\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 9
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
</div></div>
<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
<tbody><tr>
<td>
<div class=\"InnerTableContainer\">
<table style=\"width:100%;\"><tbody><tr><td>
<div class=\"TableContentContainer\">
<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
<tbody>


";
        // line 24
        $context["i"] = 0;
        // line 25
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 26
            echo "\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 27
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
            echo "\">
\t\t<td width=4%>
\t\t\t<div style=\"text-align:center\">
\t\t\t\t<img src=\"";
            // line 30
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/news/icon_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "icon_id", []), "html", null, true);
            echo "_small.gif\"/>
\t\t\t</div>
\t\t</td>
\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["news"], "date", []), "j.n.Y"), "html", null, true);
            echo "</td>
\t\t<td>
\t\t\t<b><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "link", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", []), "html", null, true);
            echo "</a></b>
\t\t</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
</tbody></table>
</div></td></tr>
</tbody></table>
</div>
</td>
</tr>
</tbody></table></div>";
    }

    public function getTemplateName()
    {
        return "news.archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 39,  109 => 35,  104 => 33,  96 => 30,  89 => 27,  86 => 26,  81 => 25,  79 => 24,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  47 => 7,  43 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "news.archive.html.twig", "D:\\xampp-new\\htdocs\\CharBaazar\\system\\templates\\news.archive.html.twig");
    }
}
