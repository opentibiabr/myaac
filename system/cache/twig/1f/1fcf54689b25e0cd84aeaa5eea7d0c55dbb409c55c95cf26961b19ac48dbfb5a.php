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

/* guilds.list.html.twig */
class __TwigTemplate_4f05551660d3700bebbc0009693e97f7476741717b93bd2bf5bc521bd7f27f7e extends \Twig\Template
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
            <span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 4
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
            <span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 5
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
            <span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 6
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
            <span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 7
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
            <div class=\"Text\">Active Guilds on ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo "</div>
            <span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 9
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
            <span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
            <span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
            <span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
        </div>
    </div>

    <table class=\"Table3\">
        <tbody>
            <tr>
                <td>
                    <div class=\"InnerTableContainer\">
                        <table style=\"width:100%;\">
                            <tbody>
                                <tr>
                                    <td>
                                        
                                        <div class=\"TableContentAndRightShadow\">
                                            <div class=\"TableContentContainer\">
                                                <table class=\"TableContent\" width=\"100%\">
                                                    <tbody>
                                                        ";
        // line 30
        if ((twig_length_filter($this->env, ($context["guilds"] ?? null)) > 0)) {
            // line 31
            echo "                                                        <tr bgcolor=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
            echo "\">
                                                            <td width=\"64\"><b>Logo</b></td>
                                                            <td><b>Description</b></td>
                                                            <td width=\"12%\"><b>&nbsp;</b></td>
                                                        </tr>

                                                            ";
            // line 37
            $context["i"] = 0;
            // line 38
            echo "                                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["guilds"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["guild"]) {
                // line 39
                echo "                                                            ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 40
                echo "                                                            <tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                echo "\">
                                                                <td>
                                                                    <img src=\"images/guilds/";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "logo", []), "html", null, true);
                echo "\" width=\"64\" height=\"64\">
                                                                </td>

                                                                <td>
                                                                    <span";
                // line 46
                if ( !twig_test_empty($this->getAttribute($context["guild"], "description", []))) {
                    echo " valign=\"top\"";
                }
                echo ">
                                                                        <b>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "name", []), "html", null, true);
                echo "</b>";
                if (($context["isAdmin"] ?? null)) {
                    echo "<a href=\"?subtopic=guilds&action=delete_by_admin&guild=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "name", []), "html", null, true);
                    echo "\"> - Delete this guild (for ADMIN only!)</a>";
                }
                // line 48
                echo "                                                                    </span>

                                                                    ";
                // line 50
                if ( !twig_test_empty($this->getAttribute($context["guild"], "description", []))) {
                    // line 51
                    echo "                                                                    <br>
                                                                    <span>";
                    // line 52
                    echo $this->getAttribute($context["guild"], "description", []);
                    echo "</span>
                                                                    ";
                }
                // line 54
                echo "                                                                </td>

                                                                <td>
                                                                    <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style=\"border:0;\">
                                                                                    <form action=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "link", []), "html", null, true);
                echo "\" method=\"post\">
                                                                                        ";
                // line 62
                echo twig_include($this->env, $context, "buttons.view.html.twig");
                echo "
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guild'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                                                        ";
        } else {
            // line 72
            echo "                                                        <tr bgcolor=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
            echo "\">
                                                            <td valign=\"top\">
                                                                <b>Create Guild</b>
                                                                <br/>
                                                                Actually there is no guild on server.";
            // line 76
            if (($context["logged"] ?? null)) {
                echo " Create first! Press button \"Create Guild\"";
            }
            // line 77
            echo "                                                            </td>

                                                            ";
            // line 79
            if (($context["logged"] ?? null)) {
                // line 80
                echo "                                                            <td>
                                                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                                    <form action=\"?subtopic=guilds&action=create\" method=\"post\">
                                                                        <form action=\"?subtopic=guilds&action=create\" method=\"post\">
                                                                            ";
                // line 84
                $context["button_name"] = "Found Guild";
                // line 85
                echo "                                                                            ";
                $context["button_image"] = "_sbutton_foundguild";
                // line 86
                echo "                                                                            ";
                $this->loadTemplate("buttons.base.html.twig", "guilds.list.html.twig", 86)->display($context);
                // line 87
                echo "                                                                        </form>
                                                                    </form>
                                                                </table>
                                                            </td>
                                                            ";
            }
            // line 92
            echo "                                                        </tr>
                                                        ";
        }
        // line 94
        echo "                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>

<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
    <tbody>
        <tr>
            <td align=\"center\">
                <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "images/general/blank.gif\" width=\"80\" height=\"1\" border=\"0\">
            </td>

            <td align=\"center\">
                <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                    <tbody>
                        ";
        // line 121
        if (($context["logged"] ?? null)) {
            // line 122
            echo "                        No guild found that suits your needs?
                        <form action=\"?subtopic=guilds&action=create\" method=\"post\">
                            ";
            // line 124
            $context["button_name"] = "Found Guild";
            // line 125
            echo "                            ";
            $context["button_image"] = "_sbutton_foundguild";
            // line 126
            echo "                            ";
            $this->loadTemplate("buttons.base.html.twig", "guilds.list.html.twig", 126)->display($context);
            // line 127
            echo "                        </form>
                        ";
        } else {
            // line 129
            echo "                        <b>Before you can create a guild you must login.</b>
                        <br/>
                        <form action=\"?subtopic=accountmanagement&redirect=";
            // line 131
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["guilds"]), "html", null, true);
            echo "\" method=\"post\">
                            ";
            // line 132
            $this->loadTemplate("buttons.login.html.twig", "guilds.list.html.twig", 132)->display($context);
            // line 133
            echo "                        </form>
                        ";
        }
        // line 135
        echo "                    </tbody>
                </table>

                ";
        // line 138
        if (($context["logged"] ?? null)) {
            // line 139
            echo "                    <br/>
                    If you have any problem with guilds try:
                    <br/>
                    <a href=\"?subtopic=guilds&action=cleanup_players\">Cleanup players</a> - can't join guild/be invited? Can't create guild? Try cleanup players.
                    <br/>
                    <a href=\"?subtopic=guilds&action=cleanup_guilds\">Cleanup guilds</a> - made guild, you are a leader, but you are not on players list? Cleanup guilds!
                ";
        }
        // line 146
        echo "            </td>

            <td align=\"center\">
                <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/general/blank.gif\" width=\"80\" height=\"1\" border=\"0\">
            </td>
        </tr>
    </tbody>
</table>




";
    }

    public function getTemplateName()
    {
        return "guilds.list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 149,  326 => 146,  317 => 139,  315 => 138,  310 => 135,  306 => 133,  304 => 132,  300 => 131,  296 => 129,  292 => 127,  289 => 126,  286 => 125,  284 => 124,  280 => 122,  278 => 121,  269 => 115,  246 => 94,  242 => 92,  235 => 87,  232 => 86,  229 => 85,  227 => 84,  221 => 80,  219 => 79,  215 => 77,  211 => 76,  203 => 72,  200 => 71,  177 => 62,  173 => 61,  164 => 54,  159 => 52,  156 => 51,  154 => 50,  150 => 48,  142 => 47,  136 => 46,  129 => 42,  123 => 40,  120 => 39,  102 => 38,  100 => 37,  90 => 31,  88 => 30,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  43 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "guilds.list.html.twig", "D:\\xampp-new\\htdocs\\CharBaazar\\system\\templates\\guilds.list.html.twig");
    }
}
