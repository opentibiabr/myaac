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

/* account.management.html.twig */
class __TwigTemplate_c79db27b7a9cad87e914ae6fdc857afa50d3d2783607edfb794ad0633a6756a4 extends \Twig\Template
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
        echo "<div style=\"text-align:center\">
\t<table style=\"margin-left: auto; margin-right: auto;\">
\t\t<tr>
\t\t\t<td>
\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/headline-bracer-left.gif\" />
\t\t\t</td>
\t\t\t<td style=\"text-align:center;vertical-align:middle;horizontal-align:center;font-size:17px;font-weight:bold;\" >";
        // line 7
        echo twig_escape_filter($this->env, ($context["welcome_message"] ?? null), "html", null, true);
        echo "<br/></td>
\t\t\t<td><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/headline-bracer-right.gif\" /></td>
\t\t</tr>
\t</table>
\t<br/>
</div>
<div class=\"TableContainer\">
\t<div class=\"CaptionContainer\">
\t\t<div class=\"CaptionInnerContainer\">
\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 16
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 17
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 18
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 19
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<div class=\"Text\">Account Status</div>
\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 21
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 22
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 23
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 24
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t</div>
\t</div>
\t<table class=\"Table5\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tbody><tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\"><tbody><tr><td>
\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\"><tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><img class=\"AccountStatusImage\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/account/account-status_red.gif\" alt=\"free account\"></td>
\t\t\t\t\t\t\t<td width=\"100%\" valign=\"middle\">
\t\t\t\t\t\t\t<span class=\"BigBoldText\" >
\t\t\t\t\t\t\t";
        // line 39
        echo "\t\t\t\t\t\t\t";
        echo ($context["account_status"] ?? null);
        echo "
\t\t\t\t\t\t\t";
        // line 41
        echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<small><br>Your Premium Time expired at Jan&nbsp;14&nbsp;2022,&nbsp;03:00:36&nbsp;CET.<br>(Balance of Premium Time: 0 days)</small>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<form action=\"https://www.tibia.com/account/?subtopic=accountmanagement\" method=\"post\" style=\"padding:0px;margin:0px;\">
\t\t\t\t\t\t\t<div class=\"BigButton\" style=\"background-image:url(";
        // line 47
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/sbutton.gif)\"><div onmouseover=\"MouseOverBigButton(this);\" onmouseout=\"MouseOutBigButton(this);\"><div class=\"BigButtonOver\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/sbutton_over.gif);\"></div><input class=\"BigButtonText\" type=\"submit\" value=\"Manage Account\"></div></div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div style=\"font-size:1px;height:4px;\"></div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"BigButton\" style=\"background-image:url(";
        // line 52
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/sbutton_green.gif)\"><div onmouseover=\"MouseOverBigButton(this);\" onmouseout=\"MouseOutBigButton(this);\"><div class=\"BigButtonOver\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/sbutton_green_over.gif);\"></div>
\t\t\t\t\t\t\t<input class=\"BigButtonText\" type=\"submit\" value=\"Get Premium\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div style=\"font-size:1px;height:4px;\"></div>
\t\t\t\t\t\t\t<form action=\"";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/logout"]), "html", null, true);
        echo "\" method=\"post\" style=\"padding:0px;margin:0px;\">
\t\t\t\t\t\t\t<div class=\"BigButton\" style=\"background-image:url(";
        // line 58
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/sbutton_red.gif)\"><div onmouseover=\"MouseOverBigButton(this);\" onmouseout=\"MouseOutBigButton(this);\"><div class=\"BigButtonOver\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/sbutton_red_over.gif);\"></div><input class=\"BigButtonText\" type=\"submit\" value=\"Logout\"></div></div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
<style>
.premiumbenefits {
display: flex;
margin: 0px auto;
}
.premiumbenefits > div {
display: flex;
align-items: center;
flex: 1;
margin: auto 5x;
}
</style>
\t\t\t\t\t\t\t<td class=\"premiumbenefits\">
\t\t\t\t\t\t\t<div style=\"justify-content: flex-start\">
\t\t\t\t\t\t\t<img class=\"PremiumFeatureImage1\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/premiumfeatures/PremiumIcon-Travel.png\" alt=\"premium feature 1\" style=\"margin:0px 5px\"><div>use instant travel system</div></div>
\t\t\t\t\t\t\t<div style=\"justify-content: center\">
\t\t\t\t\t\t\t<img class=\"PremiumFeatureImage1\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/premiumfeatures/PremiumIcon-VIPGroups.png\" alt=\"premium feature 1\" style=\"margin:0px 5px\"><div>add groups to organise your VIP list</div></div>
\t\t\t\t\t\t\t<div style=\"justify-content: flex-end\">
\t\t\t\t\t\t\t<img class=\"PremiumFeatureImage1\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/premiumfeatures/PremiumIcon-Promotion.png\" alt=\"premium feature 1\" style=\"margin:0px 5px\"><div>get stronger with a promotion</div></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div></td></tr>
\t\t\t\t\t</tbody></table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr></tbody>
\t</table>
</div>

<br>

<div class=\"TableContainer\">
\t<div class=\"CaptionContainer\">
\t\t<div class=\"CaptionInnerContainer\">
\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 110
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 111
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 112
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 113
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<div class=\"Text\">Download Client</div>
\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 115
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 116
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 117
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 118
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t</div>
\t</div>
\t<table class=\"Table5\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tbody><tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\"><tbody><tr><td>
\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\"><tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><div style=\"height: 55px;\">
\t\t\t\t\t\t\t\t<div id=\"DowloadBox\" style=\"position: relative; float:right;\">
\t\t\t\t\t\t\t\t\t<a href=\"?downloadclient\"><img style=\"width: 45px; height: 45px; border: 0px; margin-right: 10px;\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/account/download_windows.gif\"></a>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<a style=\"position: absolute; bottom: -5px; right: 0px;\" href=\"?downloadclient\">Download</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span style=\"position: relative; top: 18px;\">Click <a href=\"?downloadclient\">here</a> to download the latest Tibia client!</span>
\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t</tr></tbody></table>
\t\t\t</div></td></tr>
\t\t\t</tbody></table>
\t\t\t</div>
\t\t\t</td>
\t\t\t</tr>
\t\t</tbody></table>
</div>

<br>

<div class=\"TableContainer\">
\t<div class=\"CaptionContainer\">
\t\t<div class=\"CaptionInnerContainer\">
\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 151
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 152
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 153
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 154
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<div class=\"Text\">Characters</div>
\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 156
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 157
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 158
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 159
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t</div>
\t</div>
\t<table class=\"Table5\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tbody><tr>
\t\t\t<td>
\t\t\t
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\"><tbody><tr><td>
\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\"><tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"text-align: center; font-weight: bold;\">Regular Characters</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr></tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\"><tbody><tr><td>
\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\"><tbody>
\t\t\t\t\t\t\t\t<tr class=\"LabelH\">
\t\t\t\t\t\t\t\t\t<td style=\"width: 15px !important;\"></td>
\t\t\t\t\t\t\t\t\t<td>Name</td>
\t\t\t\t\t\t\t\t\t<td style=\"width: 100px !important;\">Status</td>
\t\t\t\t\t\t\t\t\t<td style=\"width: 100px !important;\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 194
        $context["i"] = 0;
        // line 195
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["players"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 196
            echo "\t\t\t\t\t\t\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 197
            echo "\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
            echo "; height: 50px;\">
\t\t\t\t\t\t\t\t\t<td style=\"font-weight: bold;\">";
            // line 198
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo ".</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span style=\"white-space: nowrap; vertical-align: middle; line-height: 12px;\">
\t\t\t\t\t\t\t\t\t\t<span id=\"CharacterNameOf_0\" style=\"font-size:13pt; font-weight: bold;\">";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
            if ($this->getAttribute($context["player"], "isDeleted", [], "method")) {
                echo "<span style=\"color: red\"><b> [ DELETED ] </b></span>";
            }
            echo " <img src=\"";
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images//account/maincharacter.png\" alt=\"(Main Character)\" title=\"Main Character\">
\t\t\t\t\t\t\t\t\t\t";
            // line 202
            if ($this->getAttribute($context["player"], "isOnline", [], "method")) {
                // line 203
                echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"templates/tibiacom/images/on.gif\" title=\"Online\">
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 205
                echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"templates/tibiacom/images/off.gif\" title=\"Offline\">
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 207
            echo "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t<span id=\"CharacterNameOf_0\">";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "vocations", []), $this->getAttribute($context["player"], "getVocation", [], "method"), [], "array"), "html", null, true);
            echo " - Level ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getLevel", [], "method"), "html", null, true);
            echo " - On ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", [], "array"), "serverName", [], "array"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t<span style=\"position: relative; top: 3px; margin-left: 5px;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"HelperDivIndicator\">
\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"border:0px;\" src=\"";
            // line 214
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/icon_battleye.gif\">
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 218
            if ( !(null === $this->getAttribute(($context["guild"] ?? null), "rank", []))) {
                // line 219
                echo "\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t<span>Guild Membership: ";
                // line 220
                echo twig_escape_filter($this->env, $this->getAttribute(($context["guild"] ?? null), "rank", []), "html", null, true);
                echo " of the <a href=\"\">";
                echo $this->getAttribute(($context["guild"] ?? null), "link", []);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 223
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</small></span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td><img id=\"DailyReawardState\" src=\"";
            // line 227
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/icon-status-dailyreward-collected.png\" alt=\"Daily Reward collected\" title=\"Daily Reward collected\"></td>
\t\t\t\t\t\t\t\t\t<td align=\"center\">
\t\t\t\t\t\t\t\t\t\t<span id=\"CharacterOptionsOf_0\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight:normal;\">[<a href=\"";
            // line 230
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), [("account/character/comment/" . call_user_func_array($this->env->getFilter('urlencode')->getCallable(), [$this->getAttribute($context["player"], "getName", [])]))]), "html", null, true);
            echo "\">Edit</a>]</span><br><span style=\"font-weight:normal;\">[<a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/delete"]), "html", null, true);
            echo "\">Delete</a>]</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr></tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>



<tr>
<td>
<table class=\"InnerTableButtonRow\" cellpadding=\"0\" cellspacing=\"0\">
<tbody>
<tr>
<td align=\"right\">
<div class=\"DivWithButton\">


\t<tr>
<form action=\"";
        // line 263
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/create"]), "html", null, true);
        echo "\" method=\"post\" >
\t<td style=\"border:0px;\" align=\"right\">
\t";
        // line 265
        echo twig_include($this->env, $context, "buttons.create_character.html.twig");
        echo "
\t</td>
</form>

";
        // line 269
        if ($this->getAttribute(($context["config"] ?? null), "account_change_character_name", [])) {
            // line 270
            echo "<td>
\t<form action=\"";
            // line 271
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/name"]), "html", null, true);
            echo "\" method=\"post\" >
\t\t<tr>
\t\t\t<td style=\"border:0px;\" align=\"right\">
\t\t\t\t";
            // line 274
            echo twig_include($this->env, $context, "buttons.change_name.html.twig");
            echo "
\t\t\t</td>
\t\t</tr>
\t</form>
</td>
";
        }
        // line 280
        echo "
";
        // line 281
        if ($this->getAttribute(($context["config"] ?? null), "account_change_character_sex", [])) {
            // line 282
            echo "<td>
\t<form action=\"";
            // line 283
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/sex"]), "html", null, true);
            echo "\" method=\"post\" >
\t\t<tr>
\t\t\t<td style=\"border:0px;\" align=\"right\">
\t\t\t\t";
            // line 286
            echo twig_include($this->env, $context, "buttons.change_sex.html.twig");
            echo "
\t\t\t</td>
\t\t</tr>
\t</form>
</td>
";
        }
        // line 292
        echo "\t</tr>




</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t</td>
\t\t</tr></tbody>
\t</table>
</div>

<br>







<div class=\"SmallBox\">
\t<div class=\"MessageContainer\">
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
        // line 322
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-horizontal.gif);\"></div>
\t<div class=\"BoxFrameEdgeLeftTop\" style=\"background-image:url(";
        // line 323
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightTop\" style=\"background-image:url(";
        // line 324
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"Message\">
\t\t\t<div class=\"BoxFrameVerticalLeft\" style=\"background-image:url(";
        // line 326
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<div class=\"BoxFrameVerticalRight\" style=\"background-image:url(";
        // line 327
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td width=\"100%\"></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
\t\t\t\t\t\t\t<form action=\"";
        // line 333
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/logout"]), "html", null, true);
        echo "\" method=\"post\" >
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 336
        echo twig_include($this->env, $context, "buttons.logout.html.twig");
        echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
        // line 345
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-horizontal.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightBottom\" style=\"background-image:url(";
        // line 346
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeLeftBottom\" style=\"background-image:url(";
        // line 347
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></div>
\t</div>
</div>
<br/>
";
        // line 352
        if (twig_test_empty(($context["recovery_key"] ?? null))) {
            // line 353
            echo "<div class=\"SmallBox\">
\t<div class=\"MessageContainer\">
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
            // line 355
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-horizontal.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeLeftTop\" style=\"background-image:url(";
            // line 356
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightTop\" style=\"background-image:url(";
            // line 357
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"Message\">
\t\t\t<div class=\"BoxFrameVerticalLeft\" style=\"background-image:url(";
            // line 359
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<div class=\"BoxFrameVerticalRight\" style=\"background-image:url(";
            // line 360
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"LabelV\" >Hint:</td>
\t\t\t\t\t<td style=\"width:100%;\" >You can register your account for increased protection. Click on \"Register Account\" and get your free recovery key today!</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<div style=\"text-align:center\">
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin-left: auto; margin-right: auto;\">
\t\t\t\t\t<form action=\"";
            // line 369
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/register"]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"border:0;\">
\t\t\t\t\t\t\t\t";
            // line 372
            echo twig_include($this->env, $context, "buttons.register_account.html.twig");
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</form>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
            // line 379
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-horizontal.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightBottom\" style=\"background-image:url(";
            // line 380
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeLeftBottom\" style=\"background-image:url(";
            // line 381
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t</div>
</div>
<br/>
";
        }
        // line 386
        echo "
";
        // line 387
        if (($context["email_request"] ?? null)) {
            // line 388
            echo "<div class=\"SmallBox\">
\t<div class=\"MessageContainer\">
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
            // line 390
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-horizontal.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeLeftTop\" style=\"background-image:url(";
            // line 391
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightTop\" style=\"background-image:url(";
            // line 392
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"Message\">
\t\t\t<div class=\"BoxFrameVerticalLeft\" style=\"background-image:url(";
            // line 394
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<div class=\"BoxFrameVerticalRight\" style=\"background-image:url(";
            // line 395
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"LabelV\" >Note:</td>
\t\t\t\t\t<td style=\"width:100%;\" >A request has been submitted to change the email address of this account to <b>";
            // line 399
            echo twig_escape_filter($this->env, ($context["email_new"] ?? null), "html", null, true);
            echo "</b>. After <b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["email_new_time"] ?? null), "j F Y, G:i:s"), "html", null, true);
            echo "</b> you can accept the new email address and finish the process. Please cancel the request if you do not want your email address to be changed! Also cancel the request if you have no access to the new email address!</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<div style=\"text-align:center\">
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t<form action=\"";
            // line 404
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/email"]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t";
            // line 407
            echo twig_include($this->env, $context, "buttons.edit.html.twig");
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</form>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
            // line 414
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-horizontal.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightBottom\" style=\"background-image:url(";
            // line 415
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeLeftBottom\" style=\"background-image:url(";
            // line 416
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t</div>
</div>
<br/><br/>
";
        }
        // line 421
        echo "<a name=\"General+Information\" ></a>
<div class=\"TopButtonContainer\">
\t<div class=\"TopButton\">
\t\t<a href=\"#top\">
\t\t\t<img style=\"border:0px;\" src=\"";
        // line 425
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/back-to-top.gif\" />
\t\t</a>
\t</div>
</div>
<div class=\"TableContainer\">
\t<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<div class=\"CaptionContainer\">
\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 433
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 434
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 435
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 436
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<div class=\"Text\" >General Information</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 438
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 439
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 440
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 441
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t</div>
\t\t</div>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\" >
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 451
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-rt.gif);\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 453
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-rm.gif);\">
\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 456
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", []), "html", null, true);
        echo ";\" >
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Account ";
        // line 457
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "Name";
        } else {
            echo "Number";
        }
        echo ":</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:90%;\" >";
        // line 458
        echo twig_escape_filter($this->env, ($context["account"] ?? null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 460
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
        echo ";\" >
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Email Address:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:90%;\" >";
        // line 462
        echo twig_escape_filter($this->env, (($context["account_email"] ?? null) . ($context["email_change"] ?? null)), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 464
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", []), "html", null, true);
        echo ";\" >
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Created:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 466
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["account_created"] ?? null), "j F Y, G:i:s"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 468
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
        echo ";\" >
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Last Login:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 470
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "j F Y, G:i:s"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 473
        echo "\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        echo $this->getAttribute(($context["config"] ?? null), "lightborder", []);
        echo ";\" >
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Account Status:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 475
        echo ($context["account_status"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 477
        echo $this->getAttribute(($context["config"] ?? null), "darkborder", []);
        echo ";\" >
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Registered:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 479
        echo ($context["account_registered"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 482
        echo "\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
        // line 486
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-bm.gif);\" >
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        // line 487
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-bl.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        // line 488
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-br.gif);\"></div>  \t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<table class=\"InnerTableButtonRow\" cellpadding=\"0\" cellspacing=\"0\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 498
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/password"]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 501
        echo twig_include($this->env, $context, "buttons.change_password.html.twig");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 509
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/email"]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"newemail\" value=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"newemaildate\" value=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 514
        echo twig_include($this->env, $context, "buttons.change_email.html.twig");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td width=\"100%\"></td>
\t\t\t\t\t\t\t\t\t\t";
        // line 522
        echo "\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["recovery_key"] ?? null))) {
            // line 523
            echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 525
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/register"]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 528
            echo twig_include($this->env, $context, "buttons.register_account.html.twig");
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 535
        echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
<br/>
<a name=\"Public+Information\"></a>
<div class=\"TopButtonContainer\">
\t<div class=\"TopButton\">
\t\t<a href=\"#top\">
\t\t\t<img style=\"border:0px;\" src=\"";
        // line 550
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/back-to-top.gif\"/>
\t\t</a>
\t</div>
</div>
<div class=\"TableContainer\">
\t<table class=\"Table5\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<div class=\"CaptionContainer\">
\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 558
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 559
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 560
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 561
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<div class=\"Text\" >Public Information</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 563
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 564
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 565
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 566
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t</div>
\t\t</div>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 576
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-rt.gif);\" ></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 578
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-rm.gif);\" >
\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Real Name:</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:90%;\" >";
        // line 586
        echo twig_escape_filter($this->env, ($context["account_rlname"] ?? null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Location:</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:90%;\" >";
        // line 590
        echo twig_escape_filter($this->env, ($context["account_location"] ?? null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td align=right>
\t\t\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 596
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/info"]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 599
        echo twig_include($this->env, $context, "buttons.edit.html.twig");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
        // line 610
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-bm.gif);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        // line 611
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-bl.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        // line 612
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-br.gif);\"></div>  \t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
<br/>
<a name=\"Account+Logs\" ></a>
<div class=\"TopButtonContainer\">
\t<div class=\"TopButton\">
\t\t<a href=\"#top\">
\t\t\t<img style=\"border:0px;\" src=\"";
        // line 627
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/back-to-top.gif\"/>
\t\t</a>
\t</div>
</div>
<div class=\"TableContainer\">
\t<table class=\"Table5\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<div class=\"CaptionContainer\">
\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 635
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 636
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 637
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 638
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<div class=\"Text\" >Account logs</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 640
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 641
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 642
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 643
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t</div>
\t\t</div>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 653
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-rt.gif);\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 655
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-rm.gif);\" >
\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\" >
\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"LabelH\">
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:60%\">Action</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:25%\">Date</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:15%\">IP</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 664
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context["i"] = 0;
        // line 665
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 666
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 667
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
            echo call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 668
            echo $this->getAttribute($context["action"], "action", []);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 669
            echo twig_date_format_filter($this->env, $this->getAttribute($context["action"], "date", []), "jS F Y H:i:s");
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 670
            echo $this->getAttribute($context["action"], "ip", []);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 673
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 674
        echo "\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\" >
\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
        // line 678
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-bm.gif);\" >
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        // line 679
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-bl.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        // line 680
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-br.gif);\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td align=right>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
<br/>
<a name=\"Characters\" ></a>
<div class=\"TopButtonContainer\">
\t<div class=\"TopButton\" >
\t\t<a href=\"#top\">
\t\t\t<img style=\"border:0px;\" src=\"";
        // line 698
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/back-to-top.gif\" />
\t\t</a>
\t</div>
</div>
<div class=\"TableContainer\">
\t<table class=\"Table5\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<div class=\"CaptionContainer\" >
\t\t\t<div class=\"CaptionInnerContainer\">
\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 706
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 707
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 708
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 709
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<div class=\"Text\">Characters</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 711
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 712
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 713
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 714
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t</div>
\t\t</div>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 724
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-rt.gif);\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 726
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-rm.gif);\">
\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"LabelH\">
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:65%\">Name</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:15%\">Level</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:7%\">Status</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:5%\">&#160;</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 735
        $context["i"] = 0;
        // line 736
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["players"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 737
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 738
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
            echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<nobr>";
            // line 740
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
            if ($this->getAttribute($context["player"], "isDeleted", [], "method")) {
                echo "<span style=\"color: red\"><b> [ DELETED ] </b></span>";
            }
            echo "</nobr>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<nobr>";
            // line 743
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getLevel", [], "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "vocations", []), $this->getAttribute($context["player"], "getVocation", [], "method"), [], "array"), "html", null, true);
            echo "</nobr>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 745
            if ($this->getAttribute($context["player"], "isOnline", [], "method")) {
                // line 746
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<td><span style=\"color: green\"><b>Online</b></span></td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 748
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<td><span style=\"color: red\"><b>Offline</b></span></td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 750
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<td>[<a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), [("account/character/comment/" . call_user_func_array($this->env->getFilter('urlencode')->getCallable(), [$this->getAttribute($context["player"], "getName", [])]))]), "html", null, true);
            echo "\" >Edit</a>]</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 753
        echo "\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url('.\$template_path.'/images/content/table-shadow-bm.gif);\" >
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        // line 758
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-bl.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        // line 759
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-shadow-br.gif);\"></div>  \t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<table class=\"InnerTableButtonRow\" cellpadding=\"0\" cellspacing=\"0\" >
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 769
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/create"]), "html", null, true);
        echo "\" method=\"post\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 772
        echo twig_include($this->env, $context, "buttons.create_character.html.twig");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
        // line 778
        if ($this->getAttribute(($context["config"] ?? null), "account_change_character_name", [])) {
            // line 779
            echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 781
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/name"]), "html", null, true);
            echo "\" method=\"post\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 784
            echo twig_include($this->env, $context, "buttons.change_name.html.twig");
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 791
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ($this->getAttribute(($context["config"] ?? null), "account_change_character_sex", [])) {
            // line 792
            echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 794
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/sex"]), "html", null, true);
            echo "\" method=\"post\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 797
            echo twig_include($this->env, $context, "buttons.change_sex.html.twig");
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 804
        echo "\t\t\t\t\t\t\t\t\t\t<td style=\"width:100%;\" ></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 807
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/delete"]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 810
        echo twig_include($this->env, $context, "buttons.delete_character.html.twig");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
<br/><br/>";
    }

    public function getTemplateName()
    {
        return "account.management.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1491 => 810,  1485 => 807,  1480 => 804,  1470 => 797,  1464 => 794,  1460 => 792,  1457 => 791,  1447 => 784,  1441 => 781,  1437 => 779,  1435 => 778,  1426 => 772,  1420 => 769,  1407 => 759,  1403 => 758,  1396 => 753,  1386 => 750,  1382 => 748,  1378 => 746,  1376 => 745,  1369 => 743,  1358 => 740,  1352 => 738,  1349 => 737,  1344 => 736,  1342 => 735,  1330 => 726,  1325 => 724,  1312 => 714,  1308 => 713,  1304 => 712,  1300 => 711,  1295 => 709,  1291 => 708,  1287 => 707,  1283 => 706,  1272 => 698,  1251 => 680,  1247 => 679,  1243 => 678,  1237 => 674,  1235 => 673,  1226 => 670,  1222 => 669,  1218 => 668,  1213 => 667,  1210 => 666,  1205 => 665,  1202 => 664,  1191 => 655,  1186 => 653,  1173 => 643,  1169 => 642,  1165 => 641,  1161 => 640,  1156 => 638,  1152 => 637,  1148 => 636,  1144 => 635,  1133 => 627,  1115 => 612,  1111 => 611,  1107 => 610,  1093 => 599,  1087 => 596,  1078 => 590,  1071 => 586,  1060 => 578,  1055 => 576,  1042 => 566,  1038 => 565,  1034 => 564,  1030 => 563,  1025 => 561,  1021 => 560,  1017 => 559,  1013 => 558,  1002 => 550,  985 => 535,  975 => 528,  969 => 525,  965 => 523,  962 => 522,  952 => 514,  944 => 509,  933 => 501,  927 => 498,  914 => 488,  910 => 487,  906 => 486,  900 => 482,  895 => 479,  890 => 477,  885 => 475,  879 => 473,  874 => 470,  869 => 468,  864 => 466,  859 => 464,  854 => 462,  849 => 460,  844 => 458,  836 => 457,  832 => 456,  826 => 453,  821 => 451,  808 => 441,  804 => 440,  800 => 439,  796 => 438,  791 => 436,  787 => 435,  783 => 434,  779 => 433,  768 => 425,  762 => 421,  754 => 416,  750 => 415,  746 => 414,  736 => 407,  730 => 404,  720 => 399,  713 => 395,  709 => 394,  704 => 392,  700 => 391,  696 => 390,  692 => 388,  690 => 387,  687 => 386,  679 => 381,  675 => 380,  671 => 379,  661 => 372,  655 => 369,  643 => 360,  639 => 359,  634 => 357,  630 => 356,  626 => 355,  622 => 353,  620 => 352,  613 => 347,  609 => 346,  605 => 345,  593 => 336,  587 => 333,  578 => 327,  574 => 326,  569 => 324,  565 => 323,  561 => 322,  529 => 292,  520 => 286,  514 => 283,  511 => 282,  509 => 281,  506 => 280,  497 => 274,  491 => 271,  488 => 270,  486 => 269,  479 => 265,  474 => 263,  444 => 235,  431 => 230,  425 => 227,  419 => 223,  411 => 220,  408 => 219,  406 => 218,  399 => 214,  389 => 211,  383 => 207,  379 => 205,  375 => 203,  373 => 202,  364 => 201,  358 => 198,  353 => 197,  350 => 196,  345 => 195,  343 => 194,  305 => 159,  301 => 158,  297 => 157,  293 => 156,  288 => 154,  284 => 153,  280 => 152,  276 => 151,  253 => 131,  237 => 118,  233 => 117,  229 => 116,  225 => 115,  220 => 113,  216 => 112,  212 => 111,  208 => 110,  187 => 92,  182 => 90,  177 => 88,  142 => 58,  138 => 57,  128 => 52,  118 => 47,  110 => 41,  105 => 39,  99 => 35,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  45 => 8,  41 => 7,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "account.management.html.twig", "D:\\xampp-new\\htdocs\\CharBaazar\\templates\\tibiacom\\account.management.html.twig");
    }
}
