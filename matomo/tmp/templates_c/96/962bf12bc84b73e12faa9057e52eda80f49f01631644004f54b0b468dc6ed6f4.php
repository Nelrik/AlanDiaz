<?php

/* @Live/ajaxTotalVisitors.twig */
class __TwigTemplate_f8fbe97a8e56b16a534d2c58796cf23c6c8c4a8600f9c285c25fe74d42c1bba4 extends Twig_Template
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
        $this->loadTemplate("@Live/_totalVisitors.twig", "@Live/ajaxTotalVisitors.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@Live/ajaxTotalVisitors.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"@Live/_totalVisitors.twig\" %}", "@Live/ajaxTotalVisitors.twig", "C:\\xampp_7.1\\htdocs\\hex\\matomo\\plugins\\Live\\templates\\ajaxTotalVisitors.twig");
    }
}
