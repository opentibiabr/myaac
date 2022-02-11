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

/* team.html.twig */
class __TwigTemplate_a79275e45fecf70a9f8031831b7693df9dfff1e76811943a78dae1f083d96a93 extends \Twig\Template
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
\t<table class=\"Table1\" cellpadding=\"0\" cellspacing=\"0\" style=\"background-color: ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", []), "html", null, true);
        echo "\">
\t\t<div class=\"CaptionContainer\">
\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 5
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 6
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 7
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 8
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<div class=\"Text\" >Support in game</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 13
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t</div>
\t\t</div>

\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t";
        // line 20
        $context["i"] = 0;
        // line 21
        echo "\t\t\t\t\t";
        if (($this->getAttribute(($context["config"] ?? null), "team_style", []) == 1)) {
            // line 22
            echo "
\t\t\t\t\t\t<table border=\"0\" cellpadding=\"4\" cellspacing=\"1\" width=\"100%\">
\t\t\t\t\t\t\t<tr bgcolor=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<td width=\"10%\" class=\"white\">
\t\t\t\t\t\t\t\t\t<b>Group</b>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t";
            // line 29
            if ($this->getAttribute(($context["config"] ?? null), "team_display_outfit", [])) {
                // line 30
                echo "\t\t\t\t\t\t\t\t<td width=\"5%\" class=\"white\">
\t\t\t\t\t\t\t\t\t<b>Outfit</b>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            }
            // line 34
            echo "
\t\t\t\t\t\t\t\t<td width=\"40%\" class=\"white\">
\t\t\t\t\t\t\t\t\t<b>Name</b>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t";
            // line 39
            if ($this->getAttribute(($context["config"] ?? null), "team_display_status", [])) {
                // line 40
                echo "\t\t\t\t\t\t\t\t<td class=\"white\">
\t\t\t\t\t\t\t\t\t<b>Status</b>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            }
            // line 44
            echo "
\t\t\t\t\t\t\t\t";
            // line 45
            if (($this->getAttribute(($context["config"] ?? null), "multiworld", []) || $this->getAttribute(($context["config"] ?? null), "team_display_world", []))) {
                // line 46
                echo "\t\t\t\t\t\t\t\t<td class=\"white\">
\t\t\t\t\t\t\t\t\t<b>World</b>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            }
            // line 50
            echo "
\t\t\t\t\t\t\t\t";
            // line 51
            if ($this->getAttribute(($context["config"] ?? null), "team_display_lastlogin", [])) {
                // line 52
                echo "\t\t\t\t\t\t\t\t<td class=\"white\">
\t\t\t\t\t\t\t\t\t<b>Last login</b>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groupmember"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 59
                echo "\t\t\t\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($context["group"], "members", []))) {
                    // line 60
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute($context["group"], "members", [])));
                    foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                        // line 61
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 62
                        echo "\t\t\t\t\t\t\t\t\t<tr bgcolor=\"";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                        echo "\" style=\"height: 32px;\">
\t\t\t\t\t\t\t\t\t\t<td>";
                        // line 63
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["group"], "group_name", [])), "html", null, true);
                        echo "</td>

\t\t\t\t\t\t\t\t\t\t";
                        // line 65
                        if ($this->getAttribute(($context["config"] ?? null), "team_display_outfit", [])) {
                            // line 66
                            echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<img style=\"position: absolute; margin-top: ";
                            // line 67
                            if (twig_in_filter($this->getAttribute($this->getAttribute($context["member"], "player", []), "looktype", []), [0 => 75, 1 => 266, 2 => 302])) {
                                echo "-16px;margin-left:-0px;";
                            } else {
                                echo " -45px; margin-left: -30px;";
                            }
                            echo "\" src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "outfit", []), "html", null, true);
                            echo "\" alt=\"player outfit\"/>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 70
                        echo "
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 72
                        if ($this->getAttribute(($context["config"] ?? null), "account_country", [])) {
                            // line 73
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->getAttribute($context["member"], "flag_image", []);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 75
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["member"], "link", []);
                        echo "
\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t";
                        // line 78
                        if ($this->getAttribute(($context["config"] ?? null), "team_display_status", [])) {
                            // line 79
                            echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 80
                            if ($this->getAttribute($context["member"], "status", [])) {
                                // line 81
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: green\"><b>Online</b></span>
\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 83
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: red\"><b>Offline</b></span>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 85
                            echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 87
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 88
                        if (($this->getAttribute(($context["config"] ?? null), "multiworld", []) || $this->getAttribute(($context["config"] ?? null), "team_display_world", []))) {
                            // line 89
                            echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span><b>";
                            // line 90
                            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "world_name", []), "html", null, true);
                            echo "</b></span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 93
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 94
                        if ($this->getAttribute(($context["config"] ?? null), "team_display_lastlogin", [])) {
                            // line 95
                            echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 96
                            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "last_login", []), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 102
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "\t\t\t\t\t\t</table>
\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 104
($context["config"] ?? null), "team_style", []) == 2)) {
            // line 105
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groupmember"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 106
                echo "\t\t\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($context["group"], "members", []))) {
                    // line 107
                    echo "\t\t\t\t\t\t\t<div style=\"text-align:center\"><h2>";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["group"], "group_name", [])), "html", null, true);
                    echo "</h2></div>

\t\t\t\t\t\t\t<table cellspacing=\"1\" cellpadding=\"4\" border=\"0\" width=\"100%\">
\t\t\t\t\t\t\t\t<tr bgcolor=\"";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 111
                    if ($this->getAttribute(($context["config"] ?? null), "team_display_outfit", [])) {
                        // line 112
                        echo "\t\t\t\t\t\t\t\t\t<td width=\"5%\" class=\"white\">
\t\t\t\t\t\t\t\t\t\t<b>Outfit</b>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 116
                    echo "
\t\t\t\t\t\t\t\t\t<td width=\"40%\" class=\"white\">
\t\t\t\t\t\t\t\t\t\t<b>Name</b>
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t";
                    // line 121
                    if ($this->getAttribute(($context["config"] ?? null), "team_display_status", [])) {
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t<td class=\"white\">
\t\t\t\t\t\t\t\t\t\t<b>Status</b>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 126
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 127
                    if (($this->getAttribute(($context["config"] ?? null), "multiworld", []) || $this->getAttribute(($context["config"] ?? null), "team_display_world", []))) {
                        // line 128
                        echo "\t\t\t\t\t\t\t\t\t<td class=\"white\">
\t\t\t\t\t\t\t\t\t\t<b>World</b>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 132
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 133
                    if ($this->getAttribute(($context["config"] ?? null), "team_display_lastlogin", [])) {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t\t<td class=\"white\">
\t\t\t\t\t\t\t\t\t\t<b>Last login</b>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 138
                    echo "\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t";
                    // line 140
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "members", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                        // line 141
                        echo "\t\t\t\t\t\t\t\t";
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 142
                        echo "\t\t\t\t\t\t\t\t\t<tr bgcolor=\"";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                        echo "\" style=\"height: 32px;\">
\t\t\t\t\t\t\t\t\t";
                        // line 143
                        if ($this->getAttribute(($context["config"] ?? null), "team_display_outfit", [])) {
                            // line 144
                            echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<img style=\"position: absolute; margin-top: ";
                            // line 145
                            if (twig_in_filter($this->getAttribute($this->getAttribute($context["member"], "player", []), "looktype", []), [0 => 75, 1 => 266, 2 => 302])) {
                                echo "-16px;margin-left:-0px;";
                            } else {
                                echo " -45px; margin-left: -30px;";
                            }
                            echo "\" src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "outfit", []), "html", null, true);
                            echo "\" alt=\"player outfit\"/>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 148
                        echo "
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                        // line 150
                        if ($this->getAttribute(($context["config"] ?? null), "account_country", [])) {
                            // line 151
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->getAttribute($context["member"], "flag_image", []);
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 153
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["member"], "link", []);
                        echo "
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t";
                        // line 156
                        if ($this->getAttribute(($context["config"] ?? null), "team_display_status", [])) {
                            // line 157
                            echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                            // line 158
                            if ($this->getAttribute($context["member"], "status", [])) {
                                // line 159
                                echo "\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: green\"><b>Online</b></span>
\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 161
                                echo "\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: red\"><b>Offline</b></span>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 163
                            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 165
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 166
                        if (($this->getAttribute(($context["config"] ?? null), "multiworld", []) || $this->getAttribute(($context["config"] ?? null), "team_display_world", []))) {
                            // line 167
                            echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span><b>";
                            // line 168
                            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "world_name", []), "html", null, true);
                            echo "</b></span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 171
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 172
                        if ($this->getAttribute(($context["config"] ?? null), "team_display_lastlogin", [])) {
                            // line 173
                            echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 174
                            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "last_login", []), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 177
                        echo "\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 179
                    echo "\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t";
                }
                // line 181
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "\t\t\t\t\t";
        }
        // line 183
        echo "\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 183,  453 => 182,  447 => 181,  443 => 179,  436 => 177,  430 => 174,  427 => 173,  425 => 172,  422 => 171,  416 => 168,  413 => 167,  411 => 166,  408 => 165,  404 => 163,  400 => 161,  396 => 159,  394 => 158,  391 => 157,  389 => 156,  382 => 153,  376 => 151,  374 => 150,  370 => 148,  358 => 145,  355 => 144,  353 => 143,  348 => 142,  345 => 141,  341 => 140,  337 => 138,  331 => 134,  329 => 133,  326 => 132,  320 => 128,  318 => 127,  315 => 126,  309 => 122,  307 => 121,  300 => 116,  294 => 112,  292 => 111,  288 => 110,  281 => 107,  278 => 106,  273 => 105,  271 => 104,  268 => 103,  262 => 102,  259 => 101,  252 => 99,  246 => 96,  243 => 95,  241 => 94,  238 => 93,  232 => 90,  229 => 89,  227 => 88,  224 => 87,  220 => 85,  216 => 83,  212 => 81,  210 => 80,  207 => 79,  205 => 78,  198 => 75,  192 => 73,  190 => 72,  186 => 70,  174 => 67,  171 => 66,  169 => 65,  164 => 63,  159 => 62,  156 => 61,  151 => 60,  148 => 59,  144 => 58,  140 => 56,  134 => 52,  132 => 51,  129 => 50,  123 => 46,  121 => 45,  118 => 44,  112 => 40,  110 => 39,  103 => 34,  97 => 30,  95 => 29,  87 => 24,  83 => 22,  80 => 21,  78 => 20,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  51 => 8,  47 => 7,  43 => 6,  39 => 5,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "team.html.twig", "D:\\xampp-new\\htdocs\\CharBaazar\\system\\templates\\team.html.twig");
    }
}
