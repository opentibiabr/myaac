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

/* news.tickers.html.twig */
class __TwigTemplate_45b0a0ccd2bb305df449a544235509c46320574702833cd24f5aa0c1f93d9801 extends \Twig\Template
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
        echo "<div id=\"newsticker\" class=\"Box\">
\t<div class=\"Corner-tl\" style=\"background-image: url(";
        // line 2
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/corner-tl.gif);\"></div>
\t<div class=\"Corner-tr\" style=\"background-image: url(";
        // line 3
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/corner-tr.gif);\"></div>
\t<div class=\"Border_1\" style=\"background-image: url(";
        // line 4
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/border-1.gif);\"></div>
\t<div class=\"BorderTitleText\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/title-background-green.gif);\"></div>
\t<img class=\"Title\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/header/headline-newsticker.gif\" alt=\"Contentbox headline\">
\t<div class=\"Border_2\">
\t\t<div class=\"Border_3\">
\t\t\t<div class=\"BoxContent\" style=\"background-image: url(";
        // line 9
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/scroll.gif);\">
\t\t\t\t";
        // line 10
        if ( !(isset($context["i"]) || array_key_exists("i", $context))) {
            // line 11
            echo "\t\t\t\t";
            $context["i"] = 0;
            // line 12
            echo "\t\t\t\t";
        }
        // line 13
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tickers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ticker"]) {
            // line 14
            echo "\t\t\t\t<div id=\"TickerEntry-";
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "\" class=\"Row\" onclick='TickerAction(\"TickerEntry-";
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "\")'>
\t\t\t\t\t<div class=\"";
            // line 15
            if (preg_match("/^\\d+\$/", (($context["i"] ?? null) / 2))) {
                echo "Odd";
            } else {
                echo "Even";
            }
            echo "\">
\t\t\t\t\t<div class=\"NewsTickerIcon\" style=\"background-image: url(";
            // line 16
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/news/icon_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "icon", []), "html", null, true);
            echo "_small.gif);\"></div>
\t\t\t\t\t<div id=\"TickerEntry-";
            // line 17
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "-Button\" class=\"NewsTickerExtend\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/general/plus.gif);\"></div>
\t\t\t\t\t<div class=\"NewsTickerText\">
\t\t\t\t\t\t<span class=\"NewsTickerDate\">";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticker"], "date", []), "j M Y"), "html", null, true);
            echo " -</span>
\t\t\t\t\t\t<div id=\"TickerEntry-";
            // line 20
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "-ShortText\" class=\"NewsTickerShortText\">";
            echo $this->getAttribute($context["ticker"], "body_short", []);
            echo "</div>
\t\t\t\t\t\t<div id=\"TickerEntry-";
            // line 21
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "-FullText\" class=\"NewsTickerFullText\">";
            echo $this->getAttribute($context["ticker"], "body", []);
            echo "
\t\t\t\t\t\t\t";
            // line 22
            if (($context["canEdit"] ?? null)) {
                // line 23
                echo "\t\t\t\t\t\t\t<a href=\"admin/?p=news&action=edit&id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "id", []), "html", null, true);
                echo "\" title=\"Edit\">
\t\t\t\t\t\t\t\t<img src=\"images/edit.png\"/>
\t\t\t\t\t\t\t\tEdit
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a id=\"delete\" href=\"admin/?p=news&action=delete&id=";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "id", []), "html", null, true);
                echo "\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t\t\t\t<img src=\"images/del.png\"/>
\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"admin/?p=news&action=hide&id=";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "id", []), "html", null, true);
                echo "\" title=\"";
                if (($this->getAttribute($context["ticker"], "hidden", []) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"images/";
                // line 32
                if (($this->getAttribute($context["ticker"], "hidden", []) != 1)) {
                    echo "success";
                } else {
                    echo "error";
                }
                echo ".png\"/>
\t\t\t\t\t\t\t\t";
                // line 33
                if (($this->getAttribute($context["ticker"], "hidden", []) != 1)) {
                    echo "Hide";
                } else {
                    echo "Show";
                }
                // line 34
                echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 40
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 41
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t</div>
\t</div>
</div>
<div class=\"Border_1\" style=\"background-image: url(";
        // line 45
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/border-1.gif);\"></div>
<div class=\"CornerWrapper-b\"><div class=\"Corner-bl\" style=\"background-image: url(";
        // line 46
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/corner-bl.gif);\"></div></div>
<div class=\"CornerWrapper-b\"><div class=\"Corner-br\" style=\"background-image: url(";
        // line 47
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/corner-br.gif);\"></div></div>
</div>";
    }

    public function getTemplateName()
    {
        return "news.tickers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 47,  184 => 46,  180 => 45,  175 => 42,  169 => 41,  167 => 40,  161 => 36,  157 => 34,  151 => 33,  143 => 32,  133 => 31,  126 => 27,  118 => 23,  116 => 22,  110 => 21,  104 => 20,  100 => 19,  93 => 17,  87 => 16,  79 => 15,  72 => 14,  67 => 13,  64 => 12,  61 => 11,  59 => 10,  55 => 9,  49 => 6,  45 => 5,  41 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "news.tickers.html.twig", "D:\\xampp-new\\htdocs\\CharBaazar\\templates\\tibiacom\\news.tickers.html.twig");
    }
}
