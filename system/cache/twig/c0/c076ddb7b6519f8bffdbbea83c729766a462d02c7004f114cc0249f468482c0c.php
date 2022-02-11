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

/* buttons.logout.html.twig */
class __TwigTemplate_6d7501f2749f45d3c9afbda265a178b1bbb9db6a6b3fa5ca277e8a170f99fff4 extends \Twig\Template
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
        $context["button_name"] = "Logout";
        // line 2
        $context["button_image"] = "_sbutton_logout";
        // line 3
        $this->loadTemplate("buttons.base.html.twig", "buttons.logout.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "buttons.logout.html.twig", "D:\\xampp-new\\htdocs\\CharBaazar\\templates\\tibiacom\\buttons.logout.html.twig");
    }
}
