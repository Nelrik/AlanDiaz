<?php

/* macros.twig */
class __TwigTemplate_8ad080bd321b1b19751a3715f0beecfd44efcb0bd21d0f0ac68759a3ca78803e extends Twig_Template
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
        // line 18
        echo "
";
    }

    // line 1
    public function getlogoHtml($__metadata__ = null, $__alt__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "metadata" => $__metadata__,
            "alt" => $__alt__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if ($this->getAttribute(($context["metadata"] ?? null), "logo", array(), "array", true, true)) {
                // line 3
                echo "        ";
                if ($this->getAttribute(($context["metadata"] ?? null), "logoWidth", array(), "array", true, true)) {
                    // line 4
                    echo "            ";
                    ob_start();
                    echo "width=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "logoWidth", array(), "array"), "html", null, true);
                    echo "\"";
                    $context["width"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 5
                    echo "        ";
                }
                // line 6
                echo "        ";
                if ($this->getAttribute(($context["metadata"] ?? null), "logoHeight", array(), "array", true, true)) {
                    // line 7
                    echo "            ";
                    ob_start();
                    echo "height=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "logoHeight", array(), "array"), "html", null, true);
                    echo "\"";
                    $context["height"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 8
                    echo "        ";
                }
                // line 9
                echo "        ";
                if ($this->getAttribute(($context["metadata"] ?? null), "logoWidth", array(), "array", true, true)) {
                    // line 10
                    echo "            ";
                    ob_start();
                    echo "width=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "logoWidth", array(), "array"), "html", null, true);
                    echo "\"";
                    $context["width"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 11
                    echo "        ";
                }
                // line 12
                echo "        ";
                if ( !twig_test_empty(($context["alt"] ?? $this->getContext($context, "alt")))) {
                    // line 13
                    echo "            ";
                    ob_start();
                    echo "title='";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["alt"] ?? $this->getContext($context, "alt")), "html", null, true);
                    echo "' alt='";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["alt"] ?? $this->getContext($context, "alt")), "html", null, true);
                    echo "'";
                    $context["alt"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 14
                    echo "        ";
                }
                // line 15
                echo "        <img ";
                echo \Piwik\piwik_escape_filter($this->env, ($context["alt"] ?? $this->getContext($context, "alt")), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, (((isset($context["width"]) || array_key_exists("width", $context))) ? (_twig_default_filter(($context["width"] ?? $this->getContext($context, "width")), "")) : ("")), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, (((isset($context["height"]) || array_key_exists("height", $context))) ? (_twig_default_filter(($context["height"] ?? $this->getContext($context, "height")), "")) : ("")), "html", null, true);
                echo " src='";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "logo", array(), "array"), "html", null, true);
                echo "' />
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function getinlineHelp($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "    <div class=\"ui-inline-help\" >
        ";
            // line 22
            echo ($context["text"] ?? $this->getContext($context, "text"));
            echo "
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 22,  131 => 21,  119 => 20,  94 => 15,  91 => 14,  82 => 13,  79 => 12,  76 => 11,  69 => 10,  66 => 9,  63 => 8,  56 => 7,  53 => 6,  50 => 5,  43 => 4,  40 => 3,  37 => 2,  24 => 1,  19 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro logoHtml(metadata, alt='') %}
    {% if metadata['logo'] is defined %}
        {% if metadata['logoWidth'] is defined %}
            {% set width %}width=\"{{ metadata['logoWidth'] }}\"{% endset %}
        {% endif %}
        {% if metadata['logoHeight'] is defined %}
            {% set height %}height=\"{{ metadata['logoHeight'] }}\"{% endset %}
        {% endif %}
        {% if metadata['logoWidth'] is defined %}
            {% set width %}width=\"{{ metadata['logoWidth'] }}\"{% endset %}
        {% endif %}
        {% if alt is not empty %}
            {% set alt %}title='{{ alt }}' alt='{{ alt }}'{% endset %}
        {% endif %}
        <img {{ alt }} {{ width|default('') }} {{ height|default('') }} src='{{ metadata['logo'] }}' />
    {% endif %}
{% endmacro %}

{# Deprecated: use form-group and form-help DIVs instead #}
{% macro inlineHelp(text) %}
    <div class=\"ui-inline-help\" >
        {{ text|raw }}
    </div>
{% endmacro %}", "macros.twig", "C:\\xampp_7.1\\htdocs\\hex\\matomo\\plugins\\Morpheus\\templates\\macros.twig");
    }
}
