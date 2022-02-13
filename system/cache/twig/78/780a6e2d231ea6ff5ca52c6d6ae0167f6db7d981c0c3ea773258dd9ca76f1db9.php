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
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 37
        if ($this->getAttribute(($context["account_logged"] ?? null), "isPremium", [], "method")) {
            // line 38
            echo "\t\t\t\t\t\t\t\t<img class=\"AccountStatusImage\" src=\"";
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/account/account-status_green.gif\" title=\"Premium Account\" alt=\"premium account\">
\t\t\t\t\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t\t\t\t\t<img class=\"AccountStatusImage\" src=\"";
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/account/account-status_red.gif\" title=\"Free Account\" alt=\"free account\">
\t\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td width=\"100%\" valign=\"middle\">
\t\t\t\t\t\t\t<span class=\"BigBoldText\" style=\"font-size: 24px;\">
\t\t\t\t\t\t\t";
        // line 46
        echo "\t\t\t\t\t\t\t";
        echo ($context["account_status"] ?? null);
        echo "
\t\t\t\t\t\t\t";
        // line 48
        echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<small><br>(Balance of Premium Time: ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["account_logged"] ?? null), "getPremDays", [], "method"), "html", null, true);
        echo " days)</small>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 53
        if ($this->getAttribute(($context["config"] ?? null), "gifts_system", [])) {
            // line 54
            echo "\t\t\t\t\t\t\t<a href=\"?points\" target=\"blank\">
\t\t\t\t\t\t\t<div class=\"BigButton\" style=\"background-image:url(";
            // line 55
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/buttons/sbutton_green.gif)\"><div onmouseover=\"MouseOverBigButton(this);\" onmouseout=\"MouseOutBigButton(this);\"><div class=\"BigButtonOver\" style=\"background-image:url(";
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/buttons/sbutton_green_over.gif);\"></div>
\t\t\t\t\t\t\t<input class=\"BigButtonText\" type=\"submit\" value=\"Get Coins\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div style=\"font-size:1px;height:4px;\"></div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<form action=\"";
        // line 63
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/logout"]), "html", null, true);
        echo "\" method=\"post\" style=\"padding:0px;margin:0px;\">
\t\t\t\t\t\t\t\t";
        // line 64
        echo twig_include($this->env, $context, "buttons.logout.html.twig");
        echo "
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
        // line 94
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/premiumfeatures/PremiumIcon-Travel.png\" alt=\"premium feature 1\" style=\"margin:0px 5px\"><div>use instant travel system</div></div>
\t\t\t\t\t\t\t<div style=\"justify-content: center\">
\t\t\t\t\t\t\t<img class=\"PremiumFeatureImage1\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/premiumfeatures/PremiumIcon-VIPGroups.png\" alt=\"premium feature 1\" style=\"margin:0px 5px\"><div>add groups to organise your VIP list</div></div>
\t\t\t\t\t\t\t<div style=\"justify-content: flex-end\">
\t\t\t\t\t\t\t<img class=\"PremiumFeatureImage1\" src=\"";
        // line 98
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
        // line 116
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 117
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 118
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 119
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<div class=\"Text\">Download Client</div>
\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 121
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 122
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 123
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 124
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
        // line 137
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

";
        // line 154
        if (twig_test_empty(($context["recovery_key"] ?? null))) {
            // line 155
            echo "<div class=\"SmallBox\">
\t<div class=\"MessageContainer\">
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
            // line 157
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-horizontal.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeLeftTop\" style=\"background-image:url(";
            // line 158
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightTop\" style=\"background-image:url(";
            // line 159
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"Message\">
\t\t\t<div class=\"BoxFrameVerticalLeft\" style=\"background-image:url(";
            // line 161
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<div class=\"BoxFrameVerticalRight\" style=\"background-image:url(";
            // line 162
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"LabelV\" >Your account is not registered!</td>
\t\t\t\t\t<td>
\t\t\t\t\t<form action=\"";
            // line 167
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/register"]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t<td style=\"border:0;\">
\t\t\t\t\t\t\t";
            // line 169
            echo twig_include($this->env, $context, "buttons.register_account.html.twig");
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</form>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"width:100%;\" >You can register your account for increased protection. Click on \"Register Account\" and get your free recovery key today!</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t
\t\t</div>
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
            // line 180
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-horizontal.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightBottom\" style=\"background-image:url(";
            // line 181
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeLeftBottom\" style=\"background-image:url(";
            // line 182
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t</div>
</div>
<br/>
";
        }
        // line 187
        echo "
<div class=\"TopButtonContainer\">
\t<div class=\"TopButton\" >
\t\t<a href=\"#top\">
\t\t\t<img style=\"border:0px;\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/back-to-top.gif\" />
\t\t</a>
\t</div>
</div>
<div class=\"TableContainer\">
\t<div class=\"CaptionContainer\">
\t\t<div class=\"CaptionInnerContainer\">
\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 198
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 199
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 200
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 201
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<div class=\"Text\">Characters</div>
\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 203
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 204
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 205
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 206
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
\t\t\t\t\t\t\t\t";
        // line 238
        $context["i"] = 0;
        // line 239
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["players"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 240
            echo "\t\t\t\t\t\t\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 241
            echo "\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
            echo "; height: 50px;\">
\t\t\t\t\t\t\t\t\t<td style=\"font-weight: bold;\">";
            // line 242
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo ".</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<span style=\"white-space: nowrap; vertical-align: middle; line-height: 12px;\">
\t\t\t\t\t\t\t\t\t\t<span id=\"CharacterNameOf_0\" style=\"font-size:13pt; font-weight: bold;\">";
            // line 245
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
            if ($this->getAttribute($context["player"], "isDeleted", [], "method")) {
                echo "<span style=\"color: red\"><b> [ DELETED ] </b></span>";
            }
            echo " <img src=\"";
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images//account/maincharacter.png\" alt=\"(Main Character)\" title=\"Main Character\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<small></small>
\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t<span id=\"CharacterNameOf_0\">";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "vocations", []), $this->getAttribute($context["player"], "getVocation", [], "method"), [], "array"), "html", null, true);
            echo " - Level ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getLevel", [], "method"), "html", null, true);
            echo " - On ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", [], "array"), "serverName", [], "array"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t<span style=\"position: relative; top: 3px; margin-left: 5px;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"HelperDivIndicator\" onmouseover=\"ActivateHelperDiv(\$(this), 'BattlEye Protected Game World', '<p>This character lives on a game world which has been protected by BattleEye since April 19, 2018.</p>', '');\" onmouseout=\"\$('#HelperDivContainer').hide();\"><img style=\"border:0px;\" src=\"";
            // line 253
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/icon_battleye.gif\">
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
            // line 256
            if ( !(null === $this->getAttribute(($context["guild"] ?? null), "rank", []))) {
                // line 257
                echo "\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t<span>Guild Membership: ";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute(($context["guild"] ?? null), "rank", []), "html", null, true);
                echo " of the <a href=\"\">";
                echo $this->getAttribute(($context["guild"] ?? null), "link", []);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 261
            echo "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</small></span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<img id=\"DailyReawardState\" src=\"";
            // line 265
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/icon-status-dailyreward-collected.png\" alt=\"Daily Reward collected\" title=\"Daily Reward collected\">
\t\t\t\t\t\t\t\t\t";
            // line 266
            if ($this->getAttribute($context["player"], "isOnline", [], "method")) {
                // line 267
                echo "\t\t\t\t\t\t\t\t\t\t<img src=\"templates/tibiacom/images/on.gif\" title=\"Online\">
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 269
                echo "\t\t\t\t\t\t\t\t\t\t<img src=\"templates/tibiacom/images/off.gif\" title=\"Offline\">
\t\t\t\t\t\t\t\t\t";
            }
            // line 271
            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td align=\"center\">
\t\t\t\t\t\t\t\t\t\t<span id=\"CharacterOptionsOf_0\">
\t\t\t\t\t\t\t\t\t\t<span style=\"font-weight:normal;\">[<a href=\"";
            // line 274
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
        // line 279
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
        // line 307
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/create"]), "html", null, true);
        echo "\" method=\"post\" >
\t<td style=\"border:0px;\" align=\"right\">
\t";
        // line 309
        echo twig_include($this->env, $context, "buttons.create_character.html.twig");
        echo "
\t</td>
</form>

";
        // line 313
        if ($this->getAttribute(($context["config"] ?? null), "account_change_character_name", [])) {
            // line 314
            echo "<td>
\t<form action=\"";
            // line 315
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/name"]), "html", null, true);
            echo "\" method=\"post\" >
\t\t<tr>
\t\t\t<td style=\"border:0px;\" align=\"right\">
\t\t\t\t";
            // line 318
            echo twig_include($this->env, $context, "buttons.change_name.html.twig");
            echo "
\t\t\t</td>
\t\t</tr>
\t</form>
</td>
";
        }
        // line 324
        echo "
";
        // line 325
        if ($this->getAttribute(($context["config"] ?? null), "account_change_character_sex", [])) {
            // line 326
            echo "<td>
\t<form action=\"";
            // line 327
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/sex"]), "html", null, true);
            echo "\" method=\"post\" >
\t\t<tr>
\t\t\t<td style=\"border:0px;\" align=\"right\">
\t\t\t\t";
            // line 330
            echo twig_include($this->env, $context, "buttons.change_sex.html.twig");
            echo "
\t\t\t</td>
\t\t</tr>
\t</form>
</td>
";
        }
        // line 336
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





";
        // line 360
        echo "
";
        // line 361
        if (($context["email_request"] ?? null)) {
            // line 362
            echo "<div class=\"SmallBox\">
\t<div class=\"MessageContainer\">
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
            // line 364
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-horizontal.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeLeftTop\" style=\"background-image:url(";
            // line 365
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightTop\" style=\"background-image:url(";
            // line 366
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"Message\">
\t\t\t<div class=\"BoxFrameVerticalLeft\" style=\"background-image:url(";
            // line 368
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<div class=\"BoxFrameVerticalRight\" style=\"background-image:url(";
            // line 369
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"LabelV\" >Note:</td>
\t\t\t\t\t<td style=\"width:100%;\" >A request has been submitted to change the email address of this account to <b>";
            // line 373
            echo twig_escape_filter($this->env, ($context["email_new"] ?? null), "html", null, true);
            echo "</b>. After <b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["email_new_time"] ?? null), "j F Y, G:i:s"), "html", null, true);
            echo "</b> you can accept the new email address and finish the process. Please cancel the request if you do not want your email address to be changed! Also cancel the request if you have no access to the new email address!</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<div style=\"text-align:center\">
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t<form action=\"";
            // line 378
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/email"]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t";
            // line 381
            echo twig_include($this->env, $context, "buttons.edit.html.twig");
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</form>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
            // line 388
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-horizontal.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightBottom\" style=\"background-image:url(";
            // line 389
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeLeftBottom\" style=\"background-image:url(";
            // line 390
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></div>
\t</div>
</div>
<br/>
";
        }
        // line 395
        echo "<a name=\"General+Information\" ></a>
<div class=\"TopButtonContainer\">
\t<div class=\"TopButton\">
\t\t<a href=\"#top\">
\t\t\t<img style=\"border:0px;\" src=\"";
        // line 399
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
        // line 407
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 408
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 409
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 410
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<div class=\"Text\" >General Information</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 412
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 413
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 414
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 415
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
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\">
\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 428
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", []), "html", null, true);
        echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Account ";
        // line 429
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "Name";
        } else {
            echo "Number";
        }
        echo ":</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:90%;\" >";
        // line 430
        echo twig_escape_filter($this->env, ($context["account"] ?? null), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 432
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
        echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Email Address:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:90%;\" >";
        // line 434
        echo twig_escape_filter($this->env, (($context["account_email"] ?? null) . ($context["email_change"] ?? null)), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 436
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", []), "html", null, true);
        echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Created:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 438
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["account_created"] ?? null), "M d Y, G:i:s"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 440
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
        echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Last Login:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 442
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "M d Y, G:i:s"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 445
        echo "\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        echo $this->getAttribute(($context["config"] ?? null), "lightborder", []);
        echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Account Status:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 447
        echo ($context["account_status"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 449
        echo $this->getAttribute(($context["config"] ?? null), "darkborder", []);
        echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Tibia Coins:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 451
        echo ($context["account_coins"] ?? null);
        echo " <img src=\"";
        echo ($context["template_path"] ?? null);
        echo "/images/account/icon-tibiacoin.png\" class=\"VSCCoinImages\"></span> (Including: ";
        echo ($context["account_coins"] ?? null);
        echo " <img src=\"";
        echo ($context["template_path"] ?? null);
        echo "/images/account/icon-tibiacointrusted.png\" class=\"VSCCoinImages\">)
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 454
        echo $this->getAttribute(($context["config"] ?? null), "lightborder", []);
        echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Tournament Coins:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>0 <img src=\"";
        // line 456
        echo ($context["template_path"] ?? null);
        echo "/images/account/icon-tournamentcoin.png\" class=\"VSCCoinImages\"></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
        // line 458
        echo $this->getAttribute(($context["config"] ?? null), "darkborder", []);
        echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Registered:</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 460
        echo ($context["account_registered"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 463
        echo "\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<table class=\"InnerTableButtonRow\" cellpadding=\"0\" cellspacing=\"0\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 475
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/password"]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 478
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
        // line 486
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/email"]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"newemail\" value=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"newemaildate\" value=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 491
        echo twig_include($this->env, $context, "buttons.change_email.html.twig");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td width=\"100%\"></td>
\t\t\t\t\t\t\t\t\t\t";
        // line 499
        echo "\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["recovery_key"] ?? null))) {
            // line 500
            echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 502
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/register"]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 505
            echo twig_include($this->env, $context, "buttons.register_account.html.twig");
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 512
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

";
        // line 525
        if (twig_test_empty(($context["recovery_key"] ?? null))) {
            // line 526
            echo "<a name=\"Public+Information\"></a>
<div class=\"TopButtonContainer\">
\t<div class=\"TopButton\">
\t\t<a href=\"#top\">
\t\t\t<img style=\"border:0px;\" src=\"";
            // line 530
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
            // line 538
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
            // line 539
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
            // line 540
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
            // line 541
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<div class=\"Text\" >Public Information</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
            // line 543
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 544
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
            // line 545
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
            // line 546
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
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\">
\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Real Name:</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:90%;\" >";
            // line 564
            echo twig_escape_filter($this->env, ($context["account_rlname"] ?? null), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" >Address:</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:90%;\" >";
            // line 568
            echo twig_escape_filter($this->env, ($context["account_location"] ?? null), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td align=right>
\t\t\t\t\t\t\t\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 574
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/info"]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 577
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
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
";
        }
        // line 597
        echo "<br/>

<a name=\"Account+Logs\" ></a>
<div class=\"TopButtonContainer\">
\t<div class=\"TopButton\">
\t\t<a href=\"#top\">
\t\t\t<img style=\"border:0px;\" src=\"";
        // line 603
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
        // line 611
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 612
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 613
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 614
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<div class=\"Text\" >Account logs</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 616
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 617
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 618
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 619
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
\t\t\t\t\t\t\t\t<div class=\"TableContent\">
\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\" >
\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"LabelH\">
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:60%\">Action</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:25%\">Date</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width:15%\">IP</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 637
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context["i"] = 0;
        // line 638
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 639
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 640
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr style=\"background-color: ";
            echo call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 641
            echo $this->getAttribute($context["action"], "action", []);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 642
            echo twig_date_format_filter($this->env, $this->getAttribute($context["action"], "date", []), "d M Y, H:i:s");
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 643
            echo $this->getAttribute($context["action"], "ip", []);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 646
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 647
        echo "\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
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

";
        // line 660
        if ($this->getAttribute(($context["config"] ?? null), "account_change_character_name", [])) {
            // line 661
            echo "<td>
\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
\t\t<form action=\"";
            // line 663
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/name"]), "html", null, true);
            echo "\" method=\"post\" >
\t\t\t<tr>
\t\t\t\t<td style=\"border:0px;\" >
\t\t\t\t\t";
            // line 666
            echo twig_include($this->env, $context, "buttons.change_name.html.twig");
            echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</form>
\t</table>
</td>
";
        }
        // line 673
        if ($this->getAttribute(($context["config"] ?? null), "account_change_character_sex", [])) {
            // line 674
            echo "<td>
\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
\t\t<form action=\"";
            // line 676
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/sex"]), "html", null, true);
            echo "\" method=\"post\" >
\t\t\t<tr>
\t\t\t\t<td style=\"border:0px;\" >
\t\t\t\t\t";
            // line 679
            echo twig_include($this->env, $context, "buttons.change_sex.html.twig");
            echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</form>
\t</table>
</td>
";
        }
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
        return array (  1230 => 679,  1224 => 676,  1220 => 674,  1218 => 673,  1208 => 666,  1202 => 663,  1198 => 661,  1196 => 660,  1181 => 647,  1179 => 646,  1170 => 643,  1166 => 642,  1162 => 641,  1157 => 640,  1154 => 639,  1149 => 638,  1146 => 637,  1126 => 619,  1122 => 618,  1118 => 617,  1114 => 616,  1109 => 614,  1105 => 613,  1101 => 612,  1097 => 611,  1086 => 603,  1078 => 597,  1055 => 577,  1049 => 574,  1040 => 568,  1033 => 564,  1012 => 546,  1008 => 545,  1004 => 544,  1000 => 543,  995 => 541,  991 => 540,  987 => 539,  983 => 538,  972 => 530,  966 => 526,  964 => 525,  949 => 512,  939 => 505,  933 => 502,  929 => 500,  926 => 499,  916 => 491,  908 => 486,  897 => 478,  891 => 475,  877 => 463,  872 => 460,  867 => 458,  862 => 456,  857 => 454,  845 => 451,  840 => 449,  835 => 447,  829 => 445,  824 => 442,  819 => 440,  814 => 438,  809 => 436,  804 => 434,  799 => 432,  794 => 430,  786 => 429,  782 => 428,  766 => 415,  762 => 414,  758 => 413,  754 => 412,  749 => 410,  745 => 409,  741 => 408,  737 => 407,  726 => 399,  720 => 395,  712 => 390,  708 => 389,  704 => 388,  694 => 381,  688 => 378,  678 => 373,  671 => 369,  667 => 368,  662 => 366,  658 => 365,  654 => 364,  650 => 362,  648 => 361,  645 => 360,  620 => 336,  611 => 330,  605 => 327,  602 => 326,  600 => 325,  597 => 324,  588 => 318,  582 => 315,  579 => 314,  577 => 313,  570 => 309,  565 => 307,  535 => 279,  522 => 274,  517 => 271,  513 => 269,  509 => 267,  507 => 266,  503 => 265,  497 => 261,  489 => 258,  486 => 257,  484 => 256,  478 => 253,  469 => 251,  455 => 245,  449 => 242,  444 => 241,  441 => 240,  436 => 239,  434 => 238,  399 => 206,  395 => 205,  391 => 204,  387 => 203,  382 => 201,  378 => 200,  374 => 199,  370 => 198,  360 => 191,  354 => 187,  346 => 182,  342 => 181,  338 => 180,  324 => 169,  319 => 167,  311 => 162,  307 => 161,  302 => 159,  298 => 158,  294 => 157,  290 => 155,  288 => 154,  268 => 137,  252 => 124,  248 => 123,  244 => 122,  240 => 121,  235 => 119,  231 => 118,  227 => 117,  223 => 116,  202 => 98,  197 => 96,  192 => 94,  159 => 64,  155 => 63,  150 => 60,  140 => 55,  137 => 54,  135 => 53,  128 => 49,  125 => 48,  120 => 46,  115 => 42,  109 => 40,  103 => 38,  101 => 37,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  45 => 8,  41 => 7,  36 => 5,  30 => 1,);
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
