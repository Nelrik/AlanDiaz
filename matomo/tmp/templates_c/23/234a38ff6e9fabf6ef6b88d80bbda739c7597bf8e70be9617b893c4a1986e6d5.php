<?php

/* @CoreHome/_applePinnedTabIcon.twig */
class __TwigTemplate_fbdfc02380767840ab67fbc89b85350492e25f0ac83b72f9c0da50224dd88238 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((($context["isCustomLogo"] ?? $this->getContext($context, "isCustomLogo")) && (isset($context["customFavicon"]) || array_key_exists("customFavicon", $context))) && ($context["customFavicon"] ?? $this->getContext($context, "customFavicon")))) {
        } else {
            // line 3
            echo "\t<link rel=\"mask-icon\" href=\"plugins/CoreHome/images/applePinnedTab.svg\" color=\"#3450A3\">
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_applePinnedTabIcon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if isCustomLogo and customFavicon is defined and customFavicon %}
{% else %}
\t<link rel=\"mask-icon\" href=\"plugins/CoreHome/images/applePinnedTab.svg\" color=\"#3450A3\">
{% endif %}
", "@CoreHome/_applePinnedTabIcon.twig", "C:\\xampp_7.1\\htdocs\\hex\\matomo\\plugins\\CoreHome\\templates\\_applePinnedTabIcon.twig");
    }
}
