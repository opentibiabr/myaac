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

/* networks.html.twig */
class __TwigTemplate_6afa7d3f042fcaec6f6d1575da8596138af9ff3a7e9019ce584d0d1b37fee90e extends \Twig\Template
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
        echo "<div id=\"NetworksBox\" class=\"Themebox\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/themeboxes/networks/networksbox.png);\">
\t";
        // line 2
        if ( !twig_test_empty($this->getAttribute(($context["config"] ?? null), "network_facebook", [], "array"))) {
            // line 3
            echo "\t<div id=\"FacebookBlock\">
\t\t<div id=\"FacebookLikeBox\">
\t\t\t<div class=\"fb-like-box fb_iframe_widget\" data-href=\"https://www.facebook.com/";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "network_facebook", [], "array"), "html", null, true);
            echo "\" data-width=\"175\" data-height=\"180\" data-show-faces=\"true\" data-stream=\"false\" data-border-color=\"none\" data-header=\"false\" fb-xfbml-state=\"rendered\">
\t\t\t\t\t\t\t\t\t\t<span style=\"vertical-align: bottom; width: 181px; height: 180px;\">
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"FacebookSendBox\">
\t\t\t<div class=\"fb-send fb_iframe_widget\" data-href=\"https://www.facebook.com/";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "network_facebook", [], "array"), "html", null, true);
            echo "\" data-width=\"50\" data-height=\"20\" fb-xfbml-state=\"rendered\">
\t\t\t\t\t\t\t\t\t\t<span style=\"vertical-align: bottom; width: 50px; height: 20px;\">
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"FacebookLikes\">
\t\t\t<div class=\"fb-like fb_edge_widget_with_comment fb_iframe_widget\" data-href=\"https://www.facebook.com/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "network_facebook", [], "array"), "html", null, true);
            echo "\" data-send=\"false\" data-width=\"225\" data-show-faces=\"false\" fb-xfbml-state=\"rendered\">
\t\t\t\t\t\t\t\t\t\t<span style=\"height: 28px; width: 225px;\">
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 24
        echo "\t";
        if ( !twig_test_empty($this->getAttribute(($context["config"] ?? null), "network_twitter", [], "array"))) {
            // line 25
            echo "\t<div id=\"TwitterBlock\">
\t\t<a href=\"https://twitter.com/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "network_twitter", [], "array"), "html", null, true);
            echo "\" class=\"twitter-follow-button\" data-show-count=\"false\">Follow @";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "network_twitter", [], "array"), "html", null, true);
            echo "</a>
\t\t<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
\t</div>
\t";
        }
        // line 30
        echo "\t<div class=\"Bottom\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/general/box-bottom.gif);\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "networks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  75 => 26,  72 => 25,  69 => 24,  59 => 17,  50 => 11,  41 => 5,  37 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "networks.html.twig", "D:\\xampp-new\\htdocs\\CharBaazar\\templates\\tibiacom\\boxes\\templates\\networks.html.twig");
    }
}
