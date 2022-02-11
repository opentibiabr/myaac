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

/* online.html.twig */
class __TwigTemplate_e39f8301a000a894e237c6def05819c59a8ac97738158fd79b9b44c539a47b01 extends \Twig\Template
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
        echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t<tr bgcolor=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
        echo "\">
\t\t<td class=\"white\"><b>Server Status</b></td>
\t</tr>
";
        // line 5
        if ((twig_length_filter($this->env, ($context["players"] ?? null)) == 0)) {
            // line 6
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
            echo "\"><td>Currently no one is playing on ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
            echo ".</td></tr></table>
";
        } else {
            // line 8
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
            echo "\">
\t\t<td>
\t\t\t";
            // line 10
            if ( !$this->getAttribute(($context["status"] ?? null), "online", [])) {
                // line 11
                echo "\t\t\tServer is offline.<br/>
\t\t\t";
            } else {
                // line 13
                echo "\t\t\t\t";
                if ($this->getAttribute(($context["config"] ?? null), "online_afk", [])) {
                    // line 14
                    echo "\t\t\t\t\t";
                    $context["players_count"] = twig_length_filter($this->env, ($context["players"] ?? null));
                    // line 15
                    echo "\t\t\t\t\t";
                    $context["afk"] = (($context["players_count"] ?? null) - $this->getAttribute(($context["status"] ?? null), "players", []));
                    // line 16
                    echo "\t\t\t\t\t";
                    if ((($context["afk"] ?? null) < 0)) {
                        // line 17
                        echo "\t\t\t\t\t\t";
                        $context["players_count"] = (($context["players_count"] ?? null) + abs(($context["afk"] ?? null)));
                        // line 18
                        echo "\t\t\t\t\t\t";
                        $context["afk"] = 0;
                        // line 19
                        echo "\t\t\t\t\t";
                    }
                    // line 20
                    echo "\t\t\t\t\tCurrently there are <b>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["status"] ?? null), "players", []), "html", null, true);
                    echo "</b> active and <b>";
                    echo twig_escape_filter($this->env, ($context["afk"] ?? null), "html", null, true);
                    echo "</b> AFK players.<br/>
\t\t\t\t\tTotal number of players: <b>";
                    // line 21
                    echo twig_escape_filter($this->env, ($context["players_count"] ?? null), "html", null, true);
                    echo "</b>.<br/>
\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\tCurrently ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["players"] ?? null)), "html", null, true);
                    echo " players are online.<br/>
\t\t\t\t";
                }
                // line 25
                echo "\t\t\t";
            }
            // line 26
            echo "\t\t</td>
\t</tr>
</table>
<br/>
\t";
            // line 31
            echo "\t";
            if ($this->getAttribute(($context["config"] ?? null), "online_vocations", [])) {
                // line 32
                echo "<br/>
\t\t";
                // line 33
                if ($this->getAttribute(($context["config"] ?? null), "online_vocations_images", [])) {
                    // line 34
                    echo "\t<table width=\"200\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" align=\"center\">
\t\t<tr bgcolor=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
                    echo "\">
\t\t\t<td><img src=\"images/sorcerer.png\" /></td>
\t\t\t<td><img src=\"images/druid.png\" /></td>
\t\t\t<td><img src=\"images/paladin.png\" /></td>
\t\t\t<td><img src=\"images/knight.png\" /></td>
\t\t</tr>
\t\t<tr bgcolor=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
                    echo "\">
\t\t\t<td class=\"white\" style=\"text-align: center;\"><strong>Sorcerers</strong></td>
\t\t\t<td class=\"white\" style=\"text-align: center;\"><strong>Druids</strong></td>
\t\t\t<td class=\"white\" style=\"text-align: center;\"><strong>Paladins</strong></td>
\t\t\t<td class=\"white\" style=\"text-align: center;\"><strong>Knights</strong></td>
\t\t</tr>
\t\t<tr bgcolor=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", []), "html", null, true);
                    echo "\">
\t\t\t<td style=\"text-align: center;\">";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["vocs"] ?? null), 1, [], "array"), "html", null, true);
                    echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["vocs"] ?? null), 2, [], "array"), "html", null, true);
                    echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["vocs"] ?? null), 3, [], "array"), "html", null, true);
                    echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["vocs"] ?? null), 4, [], "array"), "html", null, true);
                    echo "</td>
\t\t</tr>
\t</table>
\t<div style=\"text-align: center;\">&nbsp;</div>
\t\t";
                } else {
                    // line 56
                    echo "\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t<tr bgcolor=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
                    echo "\">
\t\t\t<td class=\"white\" colspan=\"2\"><b>Vocation statistics</b></td>
\t\t</tr>

\t\t";
                    // line 61
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute(($context["config"] ?? null), "vocations_amount", [])));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 62
                        echo "\t\t<tr bgcolor=\"";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [$context["i"]]), "html", null, true);
                        echo "\">
\t\t\t<td width=\"25%\">";
                        // line 63
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "vocations", []), $context["i"], [], "array"), "html", null, true);
                        echo "</td>
\t\t\t<td width=\"75%\">";
                        // line 64
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["vocs"] ?? null), $context["i"], [], "array"), "html", null, true);
                        echo "</td>
\t\t</tr>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 67
                    echo "\t</table>
<br/>
\t\t";
                }
                // line 70
                echo "\t";
            }
            // line 71
            echo "
\t";
            // line 73
            echo "\t";
            if ($this->getAttribute(($context["config"] ?? null), "online_skulls", [])) {
                // line 74
                echo "<table width=\"100%\" cellspacing=\"1\">
\t<tr>
\t\t<td style=\"background: ";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
                echo ";\" align=\"center\">
\t\t\t<img src=\"images/white_skull.gif\"/> - 1 - 6 Frags<br/>
\t\t\t<img src=\"images/red_skull.gif\"/> - 6+ Frags or Red Skull<br/>
\t\t\t<img src=\"images/black_skull.gif\"/> - 10+ Frags or Black Skull
\t\t</td>
\t</tr>
</table>
\t";
            }
            // line 84
            echo "
<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t<tr bgcolor=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
            echo "\">
\t\t";
            // line 87
            if ($this->getAttribute(($context["config"] ?? null), "account_country", [])) {
                // line 88
                echo "\t\t<td width=\"11px\"><a href=\"?subtopic=online&order=country\" class=\"white\">#</A></td>
\t\t";
            }
            // line 90
            echo "\t\t";
            if ($this->getAttribute(($context["config"] ?? null), "online_outfit", [])) {
                // line 91
                echo "\t\t<td class=\"white\"><b>Outfit</b></td>
\t\t";
            }
            // line 93
            echo "\t\t<td width=\"60%\"><a href=\"?subtopic=online&order=name\" class=\"white\">Name</A></td>
\t\t<td width=\"20%\"><a href=\"?subtopic=online&order=level\" class=\"white\">Level</A></td>
\t\t<td width=\"20%\"><a href=\"?subtopic=online&order=vocation\" class=\"white\">Vocation</td>
\t</tr>
\t";
            // line 97
            $context["i"] = 0;
            // line 98
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["players"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 99
                echo "\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 100
                echo "\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                echo "\">
\t\t";
                // line 101
                if ($this->getAttribute(($context["config"] ?? null), "account_country", [])) {
                    // line 102
                    echo "\t\t\t<td>";
                    echo $this->getAttribute($context["player"], "country_image", []);
                    echo "</td>
\t\t";
                }
                // line 104
                echo "\t\t";
                if ($this->getAttribute(($context["config"] ?? null), "online_outfit", [])) {
                    // line 105
                    echo "\t\t\t<td width=\"5%\"><img style=\"position:absolute;margin-top:";
                    if (twig_in_filter($this->getAttribute($this->getAttribute($context["player"], "player", []), "looktype", []), [0 => 75, 1 => 266, 2 => 302])) {
                        echo "-20px;margin-left:-0px;";
                    } else {
                        echo "-45px;margin-left:-25px;";
                    }
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "outfit", []), "html", null, true);
                    echo "\" alt=\"player outfit\"/></td>
\t\t";
                }
                // line 107
                echo "\t\t\t<td>";
                echo $this->getAttribute($context["player"], "name", []);
                echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "skull", []), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "level", []), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "vocation", []), "html", null, true);
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "</table>
";
        }
    }

    public function getTemplateName()
    {
        return "online.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 112,  298 => 109,  294 => 108,  288 => 107,  276 => 105,  273 => 104,  267 => 102,  265 => 101,  260 => 100,  257 => 99,  252 => 98,  250 => 97,  244 => 93,  240 => 91,  237 => 90,  233 => 88,  231 => 87,  227 => 86,  223 => 84,  212 => 76,  208 => 74,  205 => 73,  202 => 71,  199 => 70,  194 => 67,  185 => 64,  181 => 63,  176 => 62,  172 => 61,  165 => 57,  162 => 56,  154 => 51,  150 => 50,  146 => 49,  142 => 48,  138 => 47,  129 => 41,  120 => 35,  117 => 34,  115 => 33,  112 => 32,  109 => 31,  103 => 26,  100 => 25,  94 => 23,  89 => 21,  82 => 20,  79 => 19,  76 => 18,  73 => 17,  70 => 16,  67 => 15,  64 => 14,  61 => 13,  57 => 11,  55 => 10,  49 => 8,  41 => 6,  39 => 5,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "online.html.twig", "D:\\xampp-new\\htdocs\\CharBaazar\\system\\templates\\online.html.twig");
    }
}
