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

/* houses.html.twig */
class __TwigTemplate_ed66ab7800d08d34d5a5736ee1b41eb16ac8b60635bf9c641178fc01087dc2ea extends \Twig\Template
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
    ";
        // line 2
        if ( !twig_test_empty(($context["errors"] ?? null))) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 4
                echo "            <p class=\"error\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        <table class=\"Table1\" cellpadding=\"0\" cellspacing=\"0\" style=\"background-color: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "lightborder", []), "html", null, true);
            echo "\">
            <div class=\"CaptionContainer\">
                <div class=\"CaptionInnerContainer\">
                    <span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
            // line 10
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></span>
                    <span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
            // line 11
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></span>
                    <span class=\"CaptionBorderTop\" style=\"background-image:url(";
            // line 12
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/table-headline-border.gif);\"></span>
                    <span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
            // line 13
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></span>
                    <div class=\"Text\" >House Search</div>
                    <span class=\"CaptionVerticalRight\" style=\"background-image:url(";
            // line 15
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-vertical.gif);\"></span>
                    <span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 16
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/table-headline-border.gif);\"></span>
                    <span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
            // line 17
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></span>
                    <span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
            // line 18
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/content/box-frame-edge.gif);\"></span>
                </div>
            </div>

            <tr>
                <td>
                    <div class=\"InnerTableContainer\">
                        Here you can see the list of all available houses, flats";
            // line 25
            echo twig_escape_filter($this->env, ($context["guildString"] ?? null), "html", null, true);
            echo ".
                        Click on any view button to get more information about a house or adjust
                        the search criteria and start a new search.
                        <br><br>
                        ";
            // line 29
            if (( !twig_test_empty(($context["cleanOldHouse"] ?? null)) || (($context["rentType"] ?? null) != "never"))) {
                // line 30
                echo "                            Every morning during global server save there is automatic house cleaning. Server delete house owners who have not logged in last ";
                echo twig_escape_filter($this->env, ($context["cleanOldHouse"] ?? null), "html", null, true);
                echo " days";
                if ((($context["rentType"] ?? null) != "never")) {
                    echo " or have not paid ";
                    echo twig_escape_filter($this->env, ($context["rentType"] ?? null), "html", null, true);
                    echo " house rent. Remember to leave money for a rent in ";
                    if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "bankSystem", []))) {
                        echo "your house bank or ";
                    } else {
                        echo "depo in same city where you have house!";
                    }
                } else {
                    echo ".";
                }
                // line 31
                echo "                            <br><br>
                        ";
            }
            // line 33
            echo "
                        ";
            // line 34
            if (( !twig_test_empty(($context["houses"] ?? null)) || ($context["housesSearch"] ?? null))) {
                // line 35
                echo "                        <table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
                            <tbody>
                                <tr bgcolor=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
                echo "\">
                                    <td colspan=\"6\" class=\"white\"><b>Available ";
                // line 38
                echo twig_escape_filter($this->env, ($context["houseType"] ?? null), "html", null, true);
                if ( !twig_test_empty(($context["townName"] ?? null))) {
                    echo " in ";
                    echo twig_escape_filter($this->env, ($context["townName"] ?? null), "html", null, true);
                }
                echo " on <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
                echo "</b></b></td>
                                </tr>

                                <tr bgcolor=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
                echo "\">
                                    ";
                // line 42
                if ( !twig_test_empty(($context["houses"] ?? null))) {
                    // line 43
                    echo "                                        <td width=\"40%\"><b>Name</b></td>
                                        <td width=\"10%\"><b>Size</b></td>
                                        <td width=\"10%\"><b>Rent</b></td>

                                        <td width=\"40%\"><b>Status</b></td>
                                        <td>&nbsp;</td>
                                    ";
                } elseif (                // line 49
($context["housesSearch"] ?? null)) {
                    // line 50
                    echo "                                        <td>No ";
                    echo twig_escape_filter($this->env, ($context["houseType"] ?? null), "html", null, true);
                    echo " with specified criterias.</td>
                                    ";
                }
                // line 52
                echo "                                </tr>

                                ";
                // line 54
                if ( !twig_test_empty(($context["houses"] ?? null))) {
                    // line 55
                    echo "                                    ";
                    $context["i"] = 0;
                    // line 56
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["houses"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["house"]) {
                        // line 57
                        echo "                                        ";
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 58
                        echo "                                        <tr bgcolor=\"";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                        echo "\">
                                            <td width=\"40%\">
                                                ";
                        // line 60
                        echo twig_escape_filter($this->env, $this->getAttribute($context["house"], "name", []), "html", null, true);
                        echo "
                                            </td>

                                            <td width=\"10%\">
                                                ";
                        // line 64
                        echo twig_escape_filter($this->env, $this->getAttribute($context["house"], "size", []), "html", null, true);
                        echo "
                                            </td>

                                            <td width=\"10%\">
                                                ";
                        // line 68
                        echo twig_escape_filter($this->env, $this->getAttribute($context["house"], "rent", []), "html", null, true);
                        echo " golds
                                            </td>

                                            <td width=\"40%\">
                                                ";
                        // line 72
                        echo $this->getAttribute($context["house"], "rentedBy", []);
                        echo "
                                            </td>

                                            <td>
                                                <form action=\"";
                        // line 76
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["houses/view"]), "html", null, true);
                        echo "\" method=\"post\">
                                                    <input type=\"hidden\" name=\"house\" value=\"";
                        // line 77
                        echo twig_escape_filter($this->env, $this->getAttribute($context["house"], "name", []), "html", null, true);
                        echo "\">
                                                    ";
                        // line 78
                        echo twig_include($this->env, $context, "buttons.view.html.twig");
                        echo "
                                                </form>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['house'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "                                ";
                }
                // line 84
                echo "                            </tbody>
                        </table>
                        <br>
                        ";
            }
            // line 88
            echo "
                        <form action=\"";
            // line 89
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["houses"]), "html", null, true);
            echo "\" method=\"post\">
                            <table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
                                <tbody>
                                    <tr bgcolor=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "vdarkborder", []), "html", null, true);
            echo "\">
                                        <td colspan=\"4\" class=\"white\"><b>House Search</b></td>
                                    </tr>

                                    <tr bgcolor=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
            echo "\">
                                        <td width=\"25%\"><b>Town</b></td>
                                        <td width=\"25%\"><b>Status</b></td>
                                        <td width=\"25%\"><b>Order</b></td>
                                    </tr>

                                    <tr bgcolor=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
            echo "\">
                                        <td valign=\"top\" rowspan=\"2\">
                                            ";
            // line 104
            $context["checked"] = false;
            // line 105
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "towns", []));
            foreach ($context['_seq'] as $context["id"] => $context["name"]) {
                if (($context["id"] > 0)) {
                    // line 106
                    echo "                                                ";
                    if ((((twig_test_empty(($context["townId"] ?? null)) &&  !twig_test_empty($context["name"])) || ($context["id"] == ($context["townId"] ?? null))) &&  !($context["checked"] ?? null))) {
                        // line 107
                        echo "                                                    ";
                        $context["variable"] = "checked";
                        // line 108
                        echo "                                                    ";
                        $context["checked"] = true;
                        // line 109
                        echo "                                                ";
                    } else {
                        // line 110
                        echo "                                                    ";
                        $context["variable"] = "";
                        // line 111
                        echo "                                                ";
                    }
                    // line 112
                    echo "
                                                <input type=\"radio\" name=\"town\" id=\"town_";
                    // line 113
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\"";
                    if ((isset($context["variable"]) || array_key_exists("variable", $context))) {
                        echo " ";
                        echo twig_escape_filter($this->env, ($context["variable"] ?? null), "html", null, true);
                    }
                    echo ">
                                                <label for=\"town_";
                    // line 114
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</label>
                                                <br>
                                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                                        </td>

                                        <td valign=\"top\">
                                            <input type=\"radio\" name=\"state\" id=\"state_all\" value=\"\"";
            // line 120
            if (twig_test_empty(($context["state"] ?? null))) {
                echo " checked";
            }
            echo ">
                                            <label for=\"state_all\">all states</label><br>

                                            <input type=\"radio\" name=\"state\" id=\"state_free\" value=\"free\"";
            // line 123
            if ((($context["state"] ?? null) == "free")) {
                echo " checked";
            }
            echo ">
                                            <label for=\"state_free\">free</label><br>

                                            <input type=\"radio\" name=\"state\" id=\"state_rented\" value=\"rented\"";
            // line 126
            if ((($context["state"] ?? null) == "rented")) {
                echo " checked";
            }
            echo ">
                                            <label for=\"state_rented\">rented</label><br>
                                        </td>

                                        <td valign=\"top\" rowspan=\"2\">
                                            <input type=\"radio\" name=\"order\" id=\"order_name\" value=\"\"";
            // line 131
            if (twig_test_empty(($context["order"] ?? null))) {
                echo " checked";
            }
            echo ">
                                            <label for=\"order_name\"> by name</label><br>

                                            <input type=\"radio\" name=\"order\" id=\"order_size\" value=\"size\"";
            // line 134
            if ((($context["order"] ?? null) == "size")) {
                echo " checked";
            }
            echo ">
                                            <label for=\"order_size\"> by size</label><br>

                                            <input type=\"radio\" name=\"order\" id=\"order_rent\" value=\"rent\"";
            // line 137
            if ((($context["order"] ?? null) == "rent")) {
                echo " checked";
            }
            echo ">
                                            <label for=\"order_rent\"> by rent</label><br>
                                        </td>
                                    </tr>

                                    <tr bgcolor=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
            echo "\">
                                        <td valign=\"top\">
                                            <input type=\"radio\" name=\"type\" id=\"type_all\" value=\"\"";
            // line 144
            if (twig_test_empty(($context["type"] ?? null))) {
                echo " checked";
            }
            echo ">
                                            <label for=\"type\"> all</label><br>
                                            <input type=\"radio\" name=\"type\" id=\"type_houses\" value=\"houses\"";
            // line 146
            if ((($context["type"] ?? null) == "houses")) {
                echo " checked";
            }
            echo ">
                                            <label for=\"type_houses\"> houses and flats</label><br>
                                            <input type=\"radio\" name=\"type\" id=\"type_guildhalls\" value=\"guildhalls\"";
            // line 148
            if ((($context["type"] ?? null) == "guildhalls")) {
                echo " checked";
            }
            echo ">
                                            <label for=\"type_guildhalls\"> guildhalls</label><br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>

                            <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
                                <tbody>
                                    <tr align=\"center\">
                                        <td>
                                            ";
            // line 160
            echo twig_include($this->env, $context, "buttons.submit.html.twig");
            echo "
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    ";
        }
        // line 171
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "houses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 171,  449 => 160,  432 => 148,  425 => 146,  418 => 144,  413 => 142,  403 => 137,  395 => 134,  387 => 131,  377 => 126,  369 => 123,  361 => 120,  356 => 117,  344 => 114,  333 => 113,  330 => 112,  327 => 111,  324 => 110,  321 => 109,  318 => 108,  315 => 107,  312 => 106,  306 => 105,  304 => 104,  299 => 102,  290 => 96,  283 => 92,  277 => 89,  274 => 88,  268 => 84,  265 => 83,  246 => 78,  242 => 77,  238 => 76,  231 => 72,  224 => 68,  217 => 64,  210 => 60,  204 => 58,  201 => 57,  183 => 56,  180 => 55,  178 => 54,  174 => 52,  168 => 50,  166 => 49,  158 => 43,  156 => 42,  152 => 41,  140 => 38,  136 => 37,  132 => 35,  130 => 34,  127 => 33,  123 => 31,  107 => 30,  105 => 29,  98 => 25,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  52 => 7,  49 => 6,  40 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "houses.html.twig", "D:\\xampp-new\\htdocs\\CharBaazar\\system\\templates\\houses.html.twig");
    }
}
