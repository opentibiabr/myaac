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

/* news.html.twig */
class __TwigTemplate_31ebe8b47d2f96f14cf9c2072f3e00b738c261f27cd7a8aeb62403a90fc360d8 extends \Twig\Template
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
        echo "<div class=\"NewsHeadline\">
\t<div class=\"NewsHeadlineBackground\" style=\"background-image:url(";
        // line 2
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/news/newsheadline_background.gif)\">
\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/news/icon_";
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo ".gif\" class=\"NewsHeadlineIcon\" />
\t\t<div class=\"NewsHeadlineDate\">";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["date"] ?? null), $this->getAttribute(($context["config"] ?? null), "news_date_format", [])), "html", null, true);
        echo " - </div>
\t\t<div class=\"NewsHeadlineText\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</div>
\t\t";
        // line 6
        if (($this->getAttribute(($context["config"] ?? null), "news_author", []) &&  !twig_test_empty(($context["author"] ?? null)))) {
            // line 7
            echo "\t\t<div class=\"NewsHeadlineAuthor\"><b>Author: </b><i>";
            echo twig_escape_filter($this->env, ($context["author"] ?? null), "html", null, true);
            echo "</i></div>
\t\t";
        }
        // line 9
        echo "\t</div>
</div>
<table style=\"clear:both\" border=0 cellpadding=0 cellspacing=0 width=\"100%\" >
\t<tr>
\t\t<td style=\"padding-left:10px;padding-right:10px;\" >";
        // line 13
        echo ($context["content"] ?? null);
        echo "</td>
\t</tr>
\t";
        // line 15
        if ( !(null === ($context["comments"] ?? null))) {
            // line 16
            echo "\t<tr>
\t\t<td>
\t\t\t<div style=\"text-align: right; margin-right: 10px;\"><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["comments"] ?? null), "html", null, true);
            echo "\">» Comment on this news</a></div>
\t\t</td>
\t</tr>
\t";
        }
        // line 22
        echo "</table>
<br/>";
    }

    public function getTemplateName()
    {
        return "news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  76 => 18,  72 => 16,  70 => 15,  65 => 13,  59 => 9,  53 => 7,  51 => 6,  47 => 5,  43 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "news.html.twig", "D:\\xampp-new\\htdocs\\CharBaazar\\system\\templates\\news.html.twig");
    }
}
