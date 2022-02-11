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

/* gallery.html.twig */
class __TwigTemplate_192aec17c972ba757d9646d3ee04ef890bec9b74ccb00f44d118002cc6831b5f extends \Twig\Template
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
        echo "<div id=\"GalleryBox\" class=\"Themebox\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/themeboxes/gallery/screenshotbox.gif);\">
\t<a href=\"?subtopic=gallery&image=";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "gallery_image_id_from_database", [], "array"), "html", null, true);
        echo "\" >
\t\t<img id=\"GalleryContent\" class=\"ThemeboxContent\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "thumb", [], "array"), "html", null, true);
        echo "\" alt=\"Screenshot of the Day\" />
\t</a>
\t<div class=\"Bottom\" style=\"background-image:url(";
        // line 5
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/general/box-bottom.gif);\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "gallery.html.twig", "D:\\xampp-new\\htdocs\\CharBaazar\\templates\\tibiacom\\boxes\\templates\\gallery.html.twig");
    }
}
