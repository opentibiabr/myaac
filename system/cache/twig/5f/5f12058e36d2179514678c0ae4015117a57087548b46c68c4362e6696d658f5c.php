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

/* characters.html.twig */
class __TwigTemplate_d3791907cb3e51f51ee35d9588c236260b1272ebee4523bdbc67eeeea14e92fc extends \Twig\Template
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
        echo "<script type=\"text/javascript\" src=\"tools/js/tipped.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"tools/css/tipped.css\"/>
<script>
\t\$(document).ready(function() {
\t    Tipped.create('.item_image');
\t});
</script>
";
        // line 8
        $context["rows"] = 0;
        // line 9
        echo "
";
        // line 10
        if (($context["canEdit"] ?? null)) {
            // line 11
            echo "<a href=\"admin/?p=players&id=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getId", [], "method"), "html", null, true);
            echo "\" title=\"Edit in Admin Panel\" target=\"_blank\">
\t";
            // line 12
            $context["button_name"] = "Edit Character";
            // line 13
            echo "\t";
            $this->loadTemplate("buttons.base.html.twig", "characters.html.twig", 13)->display($context);
            // line 14
            echo "</a>
<br>
";
        }
        // line 17
        echo "

<!-- CHARACTER INFORMATION -->

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
<tr>
<td>
<div class=\"TableContainer\">

\t<div class=\"CaptionContainer\">
\t\t<div class=\"CaptionInnerContainer\">
\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 28
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 29
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 30
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 31
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<div class=\"Text\">Character Information</div>
\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 33
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 34
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 35
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 36
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t</div>
\t</div>
\t
\t<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
\t<tbody>
\t<tr>
\t<td>
\t<div class=\"InnerTableContainer\">
\t<table style=\"width:100%;\">
\t<tbody>
\t<tr>
\t<td>
\t<div class=\"TableContentContainer\">
\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t<tbody>
\t
\t";
        // line 53
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 54
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t<td width=\"20%\" class=\"LabelV175\">Name:</td>
\t<td>";
        // line 56
        if ( !(null === ($context["skull"] ?? null))) {
            echo "<img src=\"images/";
            echo twig_escape_filter($this->env, ($context["skull"] ?? null), "html", null, true);
            echo ".gif\">";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getName", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["oldName"] ?? null), "html", null, true);
        echo " ";
        if ($this->getAttribute(($context["player"] ?? null), "isOnline", [], "method")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/on.gif\" title=\"Online\">";
        } else {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/off.gif\" title=\"Offline\">";
        }
        echo "<div style=\"float: right\"></div></td>
\t</tr>
\t
\t";
        // line 59
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 60
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t<td class=\"LabelV175\">Country:</td>
\t<td>";
        // line 62
        echo ($context["flag"] ?? null);
        echo "</td>
\t</tr>
\t
\t";
        // line 65
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 66
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t<td class=\"LabelV175\">Sex:</td>
\t<td>";
        // line 68
        echo twig_escape_filter($this->env, ($context["sex"] ?? null), "html", null, true);
        echo "</td>
\t</tr>
\t
\t";
        // line 71
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 72
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t<td class=\"LabelV175\">Vocation:</td>
\t<td>";
        // line 74
        echo twig_escape_filter($this->env, ($context["vocation"] ?? null), "html", null, true);
        echo "</td>
\t</tr>
\t
\t";
        // line 77
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 78
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t<td class=\"LabelV175\">Level:</td>
\t<td>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getLevel", [], "method"), "html", null, true);
        echo "</td>
\t</tr>
\t
\t";
        // line 83
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 84
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t<td class=\"LabelV175\">Residence:</td>
\t<td>";
        // line 86
        echo twig_escape_filter($this->env, ($context["town"] ?? null), "html", null, true);
        echo "</td>
\t</tr>
\t
\t";
        // line 89
        if (($context["frags_enabled"] ?? null)) {
            // line 90
            echo "\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 91
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t<td class=\"LabelV175\">Frags:</td>
\t<td>";
            // line 93
            echo twig_escape_filter($this->env, ($context["frags_count"] ?? null), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        // line 96
        echo "\t
\t";
        // line 97
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", []), "balance", [])) {
            // line 98
            echo "\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 99
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t<td class=\"LabelV175\">Balance:</td>
\t<td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getBalance", [], "method"), "html", null, true);
            echo " Gold Coins.</td>
\t</tr>
\t";
        }
        // line 104
        echo "\t
\t";
        // line 105
        if ($this->getAttribute(($context["house"] ?? null), "found", [])) {
            // line 106
            echo "\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 107
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t<td class=\"LabelV175\">House:</td>
\t<td><a href=\"\">";
            // line 109
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["house"] ?? null), "name", []) . $this->getAttribute(($context["house"] ?? null), "town", [])) . $this->getAttribute(($context["house"] ?? null), "add", [])), "html", null, true);
            echo "</a></td>
\t</tr>
\t";
        }
        // line 112
        echo "\t
\t";
        // line 113
        if ( !(null === $this->getAttribute(($context["guild"] ?? null), "rank", []))) {
            // line 114
            echo "\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 115
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t<td class=\"LabelV175\">Guild membership:</td>
\t<td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute(($context["guild"] ?? null), "rank", []), "html", null, true);
            echo " of the <a href=\"\">";
            echo $this->getAttribute(($context["guild"] ?? null), "link", []);
            echo "</a></td>
\t</tr>
\t";
        }
        // line 120
        echo "\t
\t";
        // line 121
        if (($context["marriage_enabled"] ?? null)) {
            // line 122
            echo "\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 123
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t<td class=\"LabelV175\">Marital status:</td>
\t<td><a href=\"\">";
            // line 125
            echo twig_escape_filter($this->env, ($context["marital_status"] ?? null), "html", null, true);
            echo "</a></td>
\t</tr>
\t";
        }
        // line 128
        echo "\t
\t";
        // line 129
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 130
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t<td class=\"LabelV175\">Last Login:</td>
\t<td>";
        // line 132
        if (($this->getAttribute(($context["player"] ?? null), "getLastLogin", [], "method") == 0)) {
            echo "Never logged in.";
        } else {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getLastLogin", [], "method"), "M d Y, H:i:s"), "html", null, true);
            echo " CEST";
        }
        echo "</td>
\t</tr>
\t
\t";
        // line 135
        if ( !(null === ($context["comment"] ?? null))) {
            // line 136
            echo "\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 137
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t<td class=\"LabelV175\">Comment:</td>
\t<td>";
            // line 139
            echo ($context["comment"] ?? null);
            echo "</td>
\t</tr>
\t";
        }
        // line 142
        echo "\t
\t";
        // line 143
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 144
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t<td class=\"LabelV175\">Account Status:</td>
\t<td>";
        // line 146
        if ($this->getAttribute(($context["account"] ?? null), "isPremium", [], "method")) {
            echo "<font color=\"green\"><b>Premium Account</b></font>";
        } else {
            echo "<font color=\"red\">Free Account</font>";
        }
        echo "</td>
\t</tr>
\t
\t</tbody>
\t</table>
\t</div>
\t</td>
\t</tr>
\t</tbody>
\t</table>
\t</div>
\t</td>
\t</tr>
\t</tbody>
\t</table>
\t
\t
</div>
</td>
</tr>
</table>

<br>


<!-- ACCOUNT INFORMATION -->

<div class=\"TableContainer\">
<div class=\"CaptionContainer\">
<div class=\"CaptionInnerContainer\">
\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 176
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 177
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 178
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 179
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<div class=\"Text\">Account Information</div>
\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 181
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 182
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 183
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 184
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
        // line 195
        $context["group"] = $this->getAttribute(($context["player"] ?? null), "getGroup", [], "method");
        // line 196
        if (($this->getAttribute(($context["group"] ?? null), "isLoaded", [], "method") && ($this->getAttribute(($context["group"] ?? null), "getId", [], "method") != 1))) {
            // line 197
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 198
            echo "<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
<td class=\"LabelV175\">Position:</td>
<td>";
            // line 200
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["group"] ?? null), "getName", [], "method")), "html", null, true);
            echo "</td>
</tr>
";
        }
        // line 203
        echo "
";
        // line 204
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 205
        echo "<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
<td class=\"LabelV175\">Created:</td>
<td>";
        // line 207
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["account"] ?? null), "getCreated", [], "method"), "M d Y, g:i:s"), "html", null, true);
        echo " CET
\t\t";
        // line 208
        if ((preg_match("/^\\d+\$/", ($context["bannedUntil"] ?? null)) || (($context["bannedUntil"] ?? null) == "-1"))) {
            // line 209
            echo "\t\t\t<span style=\"color: red\">[Banished ";
            if ((($context["bannedUntil"] ?? null) == "-1")) {
                echo "forever";
            } else {
                echo "until ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["bannedUntil"] ?? null), "d F Y, h:s"), "html", null, true);
            }
            echo "]</span>
\t\t";
        } else {
            // line 211
            echo "\t";
            echo ($context["bannedUntil"] ?? null);
            echo "
\t";
        }
        // line 212
        echo "</td>
</tr>

</tbody></table>
</div></td></tr>
</tbody></table>
</div>
</td>
</tr>
</tbody></table></div>

<br>


<!-- CHARACTER DETAILS -->

<div class=\"TableContainer\">
<div class=\"CaptionContainer\">
<div class=\"CaptionInnerContainer\">
\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 231
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 232
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 233
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 234
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<div class=\"Text\">Character Details</div>
\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 236
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 237
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 238
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 239
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
</div></div>
<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
<tbody>

<tr>


<td style=\"width: 10rem;\">
<!-- OUTFIT -->
";
        // line 249
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", []), "outfit", [])) {
            // line 250
            echo "
<div class=\"InnerTableContainer\">
<table><tbody><tr><td>
<div class=\"TableContentContainer\">
<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\"><tbody>

<tr bgcolor=\"";
            // line 256
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
            echo "\">

<td align=\"center\" style=\"border:0px; width: 60px;\">
<b>Current outfit:</b>
</td>

<td style=\"border:0px;\">
<div style=\"width:64px; height:64px;\">
<img style=\"margin-left:";
            // line 264
            if (twig_in_filter($this->getAttribute(($context["player"] ?? null), "getLookType", [], "method"), [0 => 75, 1 => 266, 2 => 302])) {
                echo "-15px;margin-top:-15px;width:64px;height:64px;";
            } else {
                echo "-15px;margin-top:-15px;width:64px;height:64px;";
            }
            echo "\" src=\"";
            echo twig_escape_filter($this->env, ($context["outfit"] ?? null), "html", null, true);
            echo "\" alt=\"player outfit\"/>
</div>
</td>

</tr>

</tbody></table>
</div></td>
</tr>
</tbody></table>
</div>

<!-- OUTFIT END -->
";
        }
        // line 278
        echo "

";
        // line 280
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", []), "equipment", [])) {
            // line 281
            echo "<!-- EQUIPMENT -->

<div class=\"InnerTableContainer\">
<table><tbody><tr><td>
<div class=\"TableContentContainer\">
<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\"><tbody>

<tr bgcolor=\"";
            // line 288
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
            echo "\">
<td align=\"center\">
<b>Inventory:</b>
</td>
</tr>

<tr bgcolor=\"";
            // line 294
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
            echo "\">
\t<td>
\t\t<table width=\"100\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t<tr>
\t\t\t\t<td style=\"border:0px; padding:0px;\">
\t\t\t\t\t<table cellspacing=\"0\" style=\"background: #292929;\">
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 300
            echo $this->getAttribute(($context["equipment"] ?? null), 2, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 301
            echo $this->getAttribute(($context["equipment"] ?? null), 6, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 302
            echo $this->getAttribute(($context["equipment"] ?? null), 9, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"color: #fff; text-align: center; font-size: 10px;\">Soul: ";
            // line 303
            echo twig_escape_filter($this->env, ($context["soul"] ?? null), "html", null, true);
            echo "</td></tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t\t<td style=\"border:0px; padding:0px;\">
\t\t\t\t\t<table cellspacing=\"0\" style=\"background: #292929;\">
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 308
            echo $this->getAttribute(($context["equipment"] ?? null), 1, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 309
            echo $this->getAttribute(($context["equipment"] ?? null), 4, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 310
            echo $this->getAttribute(($context["equipment"] ?? null), 7, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 311
            echo $this->getAttribute(($context["equipment"] ?? null), 8, [], "array");
            echo "</td></tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t\t<td style=\"border:0px; padding:0px;\">
\t\t\t\t\t<table cellspacing=\"0\" style=\"background: #292929;\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"border:1px solid #808080;\">";
            // line 317
            echo $this->getAttribute(($context["equipment"] ?? null), 3, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 318
            echo $this->getAttribute(($context["equipment"] ?? null), 5, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 319
            echo $this->getAttribute(($context["equipment"] ?? null), 10, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"color: #fff; text-align: center; font-size: 10px;\">Cap: ";
            // line 320
            echo twig_escape_filter($this->env, ($context["cap"] ?? null), "html", null, true);
            echo "</td></tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</td>
</tr>

</tbody></table>
</div></td>
</tr>
</tbody></table>
</div>

<!-- EQUIPMENT_END -->
";
        }
        // line 336
        echo "</td>















<!-- LIFE MANA -->
<td>

<div class=\"InnerTableContainer\">
<table style=\"width:100%;\"><tbody><tr><td>
<div class=\"TableContentContainer\">
<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\"><tbody>

<tr bgcolor=\"";
        // line 360
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
        echo "\">
<td style=\"border:0px; width:15%; text-align: right;\"><b>Health:</b></td>
<td style=\"border:0px; text-align: center;\">
2200/2200(100%)
<div class=\"progress\">
\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\" width:100%;\"></div>
</div>
</td>
</tr>

<tr bgcolor=\"";
        // line 370
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
        echo "\">
<td style=\"border:0px; width:15%; text-align: right;\"><b>Mana:</b></td>
<td style=\"border:0px; text-align: center;\">
12180/12180 (100%)
<div class=\"progress\">
\t<div class=\"progress-bar bg-default\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:100%\"></div>
</div>
</td>
</tr>

</tbody></table>
</div></td>
</tr>
</tbody></table>
</div>

<!-- LIFE MANA END -->

<!-- EXPERIENCE -->

<div class=\"InnerTableContainer\">
<table style=\"width:100%;\"><tbody><tr><td>
<div class=\"TableContentContainer\">
<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\"><tbody>

<tr bgcolor=\"";
        // line 395
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
        echo "\">
<td style=\"border:0px; width:15%; text-align: right;\"><b>Experience:</b></td>
<td style=\"border:0px; text-align: center;\">
Have <b>";
        // line 398
        echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getExperience", [], "method"), "html", null, true);
        echo "</b> and need <b>";
        echo twig_escape_filter($this->env, ($context["expLeft"] ?? null), "html", null, true);
        echo "</b> to Level <b>";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["player"] ?? null), "getLevel", [], "method") + 1), "html", null, true);
        echo "</b>.
</td>
</tr>

<tr bgcolor=\"";
        // line 402
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
        echo "\">
<td style=\"border:0px; width:15%; text-align: right;\"><b>Percent:</b></td>
<td style=\"border:0px; text-align: center;\">
";
        // line 405
        echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getExperience", [], "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["expNext"] ?? null), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["expLeftPercent"] ?? null), "html", null, true);
        echo "%)
<div class=\"progress\">
\t<div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"";
        // line 407
        echo twig_escape_filter($this->env, ($context["expLeftPercent"] ?? null), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
        echo twig_escape_filter($this->env, ($context["expLeftPercent"] ?? null), "html", null, true);
        echo "%\"></div>
</div>
</td>
</tr>

</tbody></table>
</div></td>
</tr>
</tbody></table>
</div>

<!-- EXPERIENCE END -->



";
        // line 422
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", []), "skills", [])) {
            // line 423
            echo "<!-- SKILLS -->

<div class=\"InnerTableContainer\">
<table style=\"width:100%;\"><tbody><tr><td>
<div class=\"TableContentContainer\">
<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\"><tbody>

<tr bgcolor=\"";
            // line 430
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
            echo "\" style=\"text-align: center;\">
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/0/05/Journal_Shield.gif\"/></td>
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/3/31/Lasting_Exercise_Rod.gif\"/></td>
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/8/8a/Pair_of_Iron_Fists.gif\"/></td>
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/3/3b/Lasting_Exercise_Club.gif\"/></td>
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/d/db/Lasting_Exercise_Sword.gif\"/></td>
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/4/44/Lasting_Exercise_Axe.gif\"/></td>
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/7/7c/Lasting_Exercise_Bow.gif\"/></td>
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/2/2f/Broken_Wooden_Shield.gif\"/></td>
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/1/1f/Fishing_Rod.gif\"/></td>
</tr>

<tr bgcolor=\"";
            // line 442
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
            echo "\" style=\"text-align: center;\">
<td style=\"border:0px;\"><b>Level</b></td>
<td style=\"border:0px;\"><b>ML</b></td>
<td style=\"border:0px;\"><b>Fist</b></td>
<td style=\"border:0px;\"><b>Club</b></td>
<td style=\"border:0px;\"><b>Sword</b></td>
<td style=\"border:0px;\"><b>Axe</b></td>
<td style=\"border:0px;\"><b>Dist</b></td>
<td style=\"border:0px;\"><b>Def</b></td>
<td style=\"border:0px;\"><b>Fish</b></td>
</tr>

<tr bgcolor=\"";
            // line 454
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
            echo "\" style=\"text-align: center;\">
<td style=\"border:0px;\">";
            // line 455
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getLevel", [], "method"), "html", null, true);
            echo "</td>
";
            // line 456
            $context["i"] = 0;
            // line 457
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 458
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 459
                echo "\t<td style=\"border:0px;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "value", []), "html", null, true);
                echo "</td>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 461
            echo "</tr>

</tbody></table>
</div></td>
</tr>
</tbody></table>
</div>


<!-- SKILLS END -->
";
        }
        // line 472
        echo "
</td>


</tr>

</tbody></table></div>

<br>

<div class=\"TableContainer\">
<div class=\"CaptionContainer\">
<div class=\"CaptionInnerContainer\">
\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 485
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 486
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 487
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 488
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<div class=\"Text\">Quests</div>
\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 490
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 491
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 492
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 493
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
</div></div>
<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
<tbody><tr>
<td>
<div class=\"InnerTableContainer\">
<table style=\"width:50%;\"><tbody><tr><td>
<div class=\"TableContentContainer\">
<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
<tbody>

";
        // line 504
        $context["i"] = 0;
        // line 505
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quests"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["done"]) {
            // line 506
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 507
            echo "
";
            // line 508
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 509
            echo "<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
<td style=\"width: 90%;\" class=\"LabelV175\">";
            // line 510
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</td>
<td><img src=\"images/";
            // line 511
            if ($context["done"]) {
                echo "true";
            } else {
                echo "false";
            }
            echo ".png\"></td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['done'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 514
        echo "
</tbody></table>
</div></td></tr>
</tbody></table>
</div>
</td>
</tr>
</tbody></table></div>

<br>








<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr>
\t<td>
        

\t\t";
        // line 536
        if ((twig_length_filter($this->env, ($context["deaths"] ?? null)) > 0)) {
            // line 537
            echo "\t\t<!-- DEATHS -->
\t\t<br/>
\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t<tr bgcolor=\"";
            // line 540
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
            echo "\">
\t\t\t\t<td colspan=\"2\" class=\"white\"><b>Character Deaths</b></td>
\t\t\t</tr>
\t\t\t";
            // line 543
            $context["i"] = 0;
            // line 544
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["deaths"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["death"]) {
                // line 545
                echo "\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                echo "\">
\t\t\t\t<td width=\"20%\" align=\"center\">";
                // line 546
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["death"], "time", []), "j M Y, H:i"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 547
                echo $this->getAttribute($context["death"], "description", []);
                echo "</td>
\t\t\t</tr>

\t\t\t";
                // line 550
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 551
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['death'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 552
            echo "\t\t</table>
\t\t<!-- DEATHS_END -->
\t\t";
        }
        // line 555
        echo "\t\t";
        if ((twig_length_filter($this->env, ($context["frags"] ?? null)) > 0)) {
            // line 556
            echo "\t\t<!-- FRAGS -->
\t\t<br/>
\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
\t\t\t<tr bgcolor=\"";
            // line 559
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
            echo "\">
\t\t\t\t<td colspan=\"2\" class=\"white\"><b>Victims</b></td>
\t\t\t</tr>
\t\t\t";
            // line 562
            $context["i"] = 0;
            // line 563
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["frags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["frag"]) {
                // line 564
                echo "\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                echo "\">
\t\t\t\t<td width=\"20%\" align=\"center\">";
                // line 565
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["frag"], "time", []), "j M Y, H:i"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 566
                echo $this->getAttribute($context["frag"], "description", []);
                echo "(";
                if ($this->getAttribute($context["frag"], "unjustified", [])) {
                    echo "<span style=\"color: red; font-size: 10px\">Unjustified</span>";
                } else {
                    echo "<span style=\"color: green; font-size: 10px\">Justified</span>";
                }
                echo ")</td>
\t\t\t</tr>
\t\t\t";
                // line 568
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 569
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 570
            echo "\t\t</table>
\t\t<!-- FRAGS_END -->
\t\t";
        }
        // line 573
        echo "
\t\t";
        // line 574
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), [twig_constant("HOOK_CHARACTERS_BEFORE_SIGNATURE")]), "html", null, true);
        echo "

\t\t";
        // line 576
        if ($this->getAttribute(($context["config"] ?? null), "signature_enabled", [])) {
            // line 577
            echo "\t\t<!-- SIGNATURE -->
\t\t<script type=\"text/javascript\">
\t\t\tfunction showSignLinks()
\t\t\t{
\t\t\t\tif(document.getElementById('signLinks').style.display == \"none\")
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('signLinks').style.display = \"inline\";
\t\t\t\t\tdocument.getElementById('signText').innerHTML = \"Hide links\";
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('signLinks').style.display = \"none\";
\t\t\t\t\tdocument.getElementById('signText').innerHTML = \"Show links\";
\t\t\t\t}
\t\t\t}
\t\t</script>
\t\t<br/>
\t\t<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\"><tr bgcolor=\"";
            // line 594
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
            echo "\"><td colspan=2 class=\"white\"><b>Signature</b></td></tr>
\t\t\t<tr bgcolor=\"";
            // line 595
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", []), "html", null, true);
            echo "\"><td align=\"center\" valign=\"top\">
\t\t\t\t<img src=\"";
            // line 596
            echo twig_escape_filter($this->env, ($context["signature_url"] ?? null), "html", null, true);
            echo "\" alt=\"Signature for player ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getName", [], "method"), "html", null, true);
            echo "\">
\t\t\t\t<br/>
\t\t\t\t<b><a href=\"#\" onclick=\"showSignLinks(); return false;\" id=\"signText\">Show links</a></b>
\t\t\t\t<br/>
\t\t\t\t<table id=\"signLinks\" style=\"display: none;\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Website:</td>
\t\t\t\t\t\t<td><input type=\"text\" value=\"<a href=&quot;";
            // line 603
            echo twig_escape_filter($this->env, ($context["player_link"] ?? null), "html", null, true);
            echo "&quot;><img src=&quot;";
            echo twig_escape_filter($this->env, ($context["signature_url"] ?? null), "html", null, true);
            echo "&quot;></a>\" style=\"width: 400px;\" onclick=\"this.select()\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Forum:</td>
\t\t\t\t\t\t<td><input type=\"text\" value=\"[URL=";
            // line 607
            echo twig_escape_filter($this->env, ($context["player_link"] ?? null), "html", null, true);
            echo "][IMG]";
            echo twig_escape_filter($this->env, ($context["signature_url"] ?? null), "html", null, true);
            echo "[/IMG][/URL]\" style=\"width: 400px;\" onclick=\"this.select()\"></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Direct link:</td>
\t\t\t\t\t\t<td><input type=\"text\" value=\"";
            // line 611
            echo twig_escape_filter($this->env, ($context["signature_url"] ?? null), "html", null, true);
            echo "\" style=\"width: 400px;\" onclick=\"this.select()\"></td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td></tr>
\t\t</table>
\t\t<!-- SIGNATURE_END -->
\t\t";
        }
        // line 618
        echo "\t\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), [twig_constant("HOOK_CHARACTERS_AFTER_SIGNATURE")]), "html", null, true);
        echo "
\t\t";
        // line 619
        if ( !($context["hidden"] ?? null)) {
            // line 620
            echo "\t\t";
            $context["rows"] = 0;
            // line 621
            echo "\t\t
\t\t
\t\t








<div class=\"TableContainer\">
<div class=\"CaptionContainer\">
<div class=\"CaptionInnerContainer\">
\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
            // line 635
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
            // line 636
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
            // line 637
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
            // line 638
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<div class=\"Text\">Characters</div>
\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
            // line 640
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 641
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
            // line 642
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
            // line 643
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
</div></div>
<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
<tbody><tr>
<td>
<div class=\"InnerTableContainer\">
<table style=\"width:100%;\"><tbody><tr><td>
<div class=\"TableContentContainer\">
<table class=\"TableContent\" width=\"100%\">
<tbody>

<tr bgcolor=\"";
            // line 654
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
            echo "\">
\t\t\t\t<td width=\"40%\"><B>Name</b></td>
\t\t\t\t<td width=\"15%\"><B>Level</b></td>
\t\t\t\t<td width=\"20%\"><B>Vocation</b></td>
\t\t\t\t<td width=\"25%\"><b>Status</b></td>
\t\t\t\t<td><b>&#160;</b></td>
\t\t\t</tr>
\t\t\t";
            // line 661
            $context["i"] = 0;
            // line 662
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["account_players"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 663
                echo "\t\t\t\t";
                if (( !$this->getAttribute($context["player"], "isHidden", [], "method") && ($this->getAttribute(call_user_func_array($this->env->getFunction('config')->getCallable(), ["characters"]), "deleted", [], "array") ||  !$this->getAttribute($context["player"], "isDeleted", [], "method")))) {
                    // line 664
                    echo "\t\t\t\t";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 665
                    echo "\t\t\t<tr bgcolor=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                    echo "\">
\t\t\t\t<td>
\t\t\t\t\t<nobr>";
                    // line 667
                    echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                    echo ".&#160;";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
                    if ($this->getAttribute($context["player"], "isDeleted", [], "method")) {
                        echo "<span style=\"color: red\"> [DELETED]</span>";
                    }
                    echo "</nobr>
\t\t\t\t</td>

\t\t\t\t<td>";
                    // line 670
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getLevel", [], "method"), "html", null, true);
                    echo "</td>
\t\t\t\t<td>";
                    // line 671
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getVocationName", [], "method"), "html", null, true);
                    echo "</td>
\t\t\t\t<td>";
                    // line 672
                    if ($this->getAttribute($context["player"], "isOnline", [], "method")) {
                        echo "<img src=\"";
                        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
                        echo "/images/on.gif\" title=\"Online\">";
                    } else {
                        echo "<img src=\"";
                        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
                        echo "/images/off.gif\" title=\"Offline\">";
                    }
                    echo "</td>
\t\t\t\t<td>
\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t<form action=\"";
                    // line 675
                    echo twig_escape_filter($this->env, ($context["characters_link"] ?? null), "html", null, true);
                    echo "\" method=post>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td style=\"border: 0;\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"name\" value=\"";
                    // line 678
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"BigButton\" style=\"background-image:url(";
                    // line 680
                    echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
                    echo "/images/global/buttons/sbutton.gif)\">
<div onmouseover=\"MouseOverBigButton(this);\" onmouseout=\"MouseOutBigButton(this);\"><div class=\"BigButtonOver\" style=\"background-image: url(";
                    // line 681
                    echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
                    echo "/images/global/buttons/sbutton_over.gif); visibility: hidden;\"></div>
<input class=\"BigButtonText\" type=\"submit\" name=\"View ";
                    // line 682
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
                    echo "\" alt=\"View ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
                    echo "\" value=\"View\"></div>
</div>

";
                    // line 685
                    if (($context["canEdit"] ?? null)) {
                        // line 686
                        echo "<a href=\"admin/?p=players&id=";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getId", [], "method"), "html", null, true);
                        echo "\" title=\"Edit in Admin Panel\" target=\"_blank\">
<div class=\"BigButton\" style=\"background-image:url(";
                        // line 687
                        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
                        echo "/images/global/buttons/sbutton.gif)\">
<div onmouseover=\"MouseOverBigButton(this);\" onmouseout=\"MouseOutBigButton(this);\"><div class=\"BigButtonOver\" style=\"background-image: url(";
                        // line 688
                        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
                        echo "/images/global/buttons/sbutton_over.gif); visibility: hidden;\"></div>
<input class=\"BigButtonText\" type=\"text\" name=\"Edit\" alt=\"Edit\" value=\"Edit\"></div>
</div>
</a>
";
                    }
                    // line 693
                    echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</form>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t\t";
                }
                // line 701
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 702
            echo "
</tbody></table>
</div></td></tr>
</tbody></table>
</div>
</td>
</tr>
</tbody></table></div>\t\t
";
        }
        // line 711
        echo "
";
        // line 712
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), [twig_constant("HOOK_CHARACTERS_AFTER_CHARACTERS")]), "html", null, true);
        echo "

";
        // line 714
        if (($context["canEdit"] ?? null)) {
            // line 715
            echo "<br>
<a href=\"admin/?p=players&id=";
            // line 716
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getId", [], "method"), "html", null, true);
            echo "\" title=\"Edit in Admin Panel\" target=\"_blank\">
\t";
            // line 717
            $context["button_name"] = "Edit Character";
            // line 718
            echo "\t";
            $this->loadTemplate("buttons.base.html.twig", "characters.html.twig", 718)->display($context);
            // line 719
            echo "</a>
";
        }
        // line 721
        echo "
\t\t</td>
\t</tr>
</table>
<br/>";
        // line 725
        echo ($context["search_form"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "characters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1448 => 725,  1442 => 721,  1438 => 719,  1435 => 718,  1433 => 717,  1429 => 716,  1426 => 715,  1424 => 714,  1419 => 712,  1416 => 711,  1405 => 702,  1399 => 701,  1389 => 693,  1381 => 688,  1377 => 687,  1372 => 686,  1370 => 685,  1362 => 682,  1358 => 681,  1354 => 680,  1349 => 678,  1343 => 675,  1329 => 672,  1325 => 671,  1321 => 670,  1310 => 667,  1304 => 665,  1301 => 664,  1298 => 663,  1293 => 662,  1291 => 661,  1281 => 654,  1267 => 643,  1263 => 642,  1259 => 641,  1255 => 640,  1250 => 638,  1246 => 637,  1242 => 636,  1238 => 635,  1222 => 621,  1219 => 620,  1217 => 619,  1212 => 618,  1202 => 611,  1193 => 607,  1184 => 603,  1172 => 596,  1168 => 595,  1164 => 594,  1145 => 577,  1143 => 576,  1138 => 574,  1135 => 573,  1130 => 570,  1124 => 569,  1122 => 568,  1111 => 566,  1107 => 565,  1102 => 564,  1097 => 563,  1095 => 562,  1089 => 559,  1084 => 556,  1081 => 555,  1076 => 552,  1070 => 551,  1068 => 550,  1062 => 547,  1058 => 546,  1053 => 545,  1048 => 544,  1046 => 543,  1040 => 540,  1035 => 537,  1033 => 536,  1009 => 514,  996 => 511,  992 => 510,  987 => 509,  985 => 508,  982 => 507,  980 => 506,  976 => 505,  974 => 504,  960 => 493,  956 => 492,  952 => 491,  948 => 490,  943 => 488,  939 => 487,  935 => 486,  931 => 485,  916 => 472,  903 => 461,  894 => 459,  892 => 458,  888 => 457,  886 => 456,  882 => 455,  878 => 454,  863 => 442,  848 => 430,  839 => 423,  837 => 422,  817 => 407,  808 => 405,  802 => 402,  791 => 398,  785 => 395,  757 => 370,  744 => 360,  718 => 336,  699 => 320,  695 => 319,  691 => 318,  687 => 317,  678 => 311,  674 => 310,  670 => 309,  666 => 308,  658 => 303,  654 => 302,  650 => 301,  646 => 300,  637 => 294,  628 => 288,  619 => 281,  617 => 280,  613 => 278,  590 => 264,  579 => 256,  571 => 250,  569 => 249,  556 => 239,  552 => 238,  548 => 237,  544 => 236,  539 => 234,  535 => 233,  531 => 232,  527 => 231,  506 => 212,  500 => 211,  489 => 209,  487 => 208,  483 => 207,  477 => 205,  475 => 204,  472 => 203,  466 => 200,  460 => 198,  458 => 197,  456 => 196,  454 => 195,  440 => 184,  436 => 183,  432 => 182,  428 => 181,  423 => 179,  419 => 178,  415 => 177,  411 => 176,  374 => 146,  368 => 144,  366 => 143,  363 => 142,  357 => 139,  351 => 137,  348 => 136,  346 => 135,  335 => 132,  329 => 130,  327 => 129,  324 => 128,  318 => 125,  312 => 123,  309 => 122,  307 => 121,  304 => 120,  296 => 117,  290 => 115,  287 => 114,  285 => 113,  282 => 112,  276 => 109,  270 => 107,  267 => 106,  265 => 105,  262 => 104,  256 => 101,  250 => 99,  247 => 98,  245 => 97,  242 => 96,  236 => 93,  230 => 91,  227 => 90,  225 => 89,  219 => 86,  213 => 84,  211 => 83,  205 => 80,  199 => 78,  197 => 77,  191 => 74,  185 => 72,  183 => 71,  177 => 68,  171 => 66,  169 => 65,  163 => 62,  157 => 60,  155 => 59,  131 => 56,  125 => 54,  123 => 53,  103 => 36,  99 => 35,  95 => 34,  91 => 33,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  61 => 17,  56 => 14,  53 => 13,  51 => 12,  46 => 11,  44 => 10,  41 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "characters.html.twig", "D:\\xampp-new\\htdocs\\CharBaazar\\system\\templates\\characters.html.twig");
    }
}
