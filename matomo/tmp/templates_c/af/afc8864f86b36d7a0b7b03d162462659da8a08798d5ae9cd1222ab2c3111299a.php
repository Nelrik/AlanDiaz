<?php

/* @MyAnalyticsPlugin/socialmediareactions.twig */
class __TwigTemplate_6c5aa2988a08b4600425193ea91fab8ad6409f6603fa9c5ceafac1425976f8b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "    <div piwik-content-block>
        <table piwik-content-table>
            <thead><tr><th>Action</th><th>Date</th><th>Facebook</th><th>Twitter</th><th>Instagram</th></tr></thead>
            <tbody>
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allData"] ?? $this->getContext($context, "allData")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 7
            echo "                    <tr>
                    <td>";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["data"], "action", array(), "array"), "html", null, true);
            echo "</td>
                    <td>";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["data"], "date", array(), "array"), "html", null, true);
            echo "</td>
                    ";
            // line 13
            echo "                    
                    <td>";
            // line 14
            if ($this->getAttribute($context["data"], "facebook-reactions", array(), "array", true, true)) {
                // line 15
                echo "                    ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["data"], "facebook-reactions", array(), "array"), "html", null, true);
            }
            echo "</td>
                    
                    <td>";
            // line 17
            if ($this->getAttribute($context["data"], "twitter-reactions", array(), "array", true, true)) {
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["data"], "twitter-reactions", array(), "array"), "html", null, true);
            }
            echo "</td>

                    <td>";
            // line 19
            if ($this->getAttribute($context["data"], "instagram-reactions", array(), "array", true, true)) {
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["data"], "instagram-reactions", array(), "array"), "html", null, true);
            }
            echo "</td>
                    
                    
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </tbody>
            
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@MyAnalyticsPlugin/socialmediareactions.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  66 => 19,  59 => 17,  52 => 15,  50 => 14,  47 => 13,  43 => 9,  39 => 8,  36 => 7,  32 => 6,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block content %}
    <div piwik-content-block>
        <table piwik-content-table>
            <thead><tr><th>Action</th><th>Date</th><th>Facebook</th><th>Twitter</th><th>Instagram</th></tr></thead>
            <tbody>
                {% for data in allData %}
                    <tr>
                    <td>{{data['action']}}</td>
                    <td>{{data['date']}}</td>
                    {# {% if true %}<td>{{data['reactions']}}</td>{% endif %}
                    {% if false %}<td>{{data['reactions']}}</td>{% endif %}
                    {% if false %}<td>{{data['reactions']}}</td>{% endif %} #}
                    
                    <td>{% if data['facebook-reactions'] is defined  %}
                    {{data['facebook-reactions']}}{% endif %}</td>
                    
                    <td>{% if data['twitter-reactions'] is defined  %}{{data['twitter-reactions']}}{% endif %}</td>

                    <td>{% if data['instagram-reactions'] is defined  %}{{data['instagram-reactions']}}{% endif %}</td>
                    
                    
                    </tr>
                {% endfor %}
            </tbody>
            
        </table>
    </div>
{% endblock %}", "@MyAnalyticsPlugin/socialmediareactions.twig", "C:\\xampp_7.1\\htdocs\\hex\\matomo\\plugins\\MyAnalyticsPlugin\\templates\\socialmediareactions.twig");
    }
}
