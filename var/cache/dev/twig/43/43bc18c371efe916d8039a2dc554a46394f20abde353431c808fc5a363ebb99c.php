<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_99caa008504dc0231671c1f3cd0ce098ecf34f4d6f3a8e0361110d90cc336142 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:results.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da9b3354e03e8e85d854c88c2dc2f436a5a913ccb8759a254d321eec90af7050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da9b3354e03e8e85d854c88c2dc2f436a5a913ccb8759a254d321eec90af7050->enter($__internal_da9b3354e03e8e85d854c88c2dc2f436a5a913ccb8759a254d321eec90af7050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:results.html.twig"));

        $__internal_d1d5e176992f84d1f77716dbff381629b8601a08edc75ed22c6b6796dd711a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d5e176992f84d1f77716dbff381629b8601a08edc75ed22c6b6796dd711a25->enter($__internal_d1d5e176992f84d1f77716dbff381629b8601a08edc75ed22c6b6796dd711a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da9b3354e03e8e85d854c88c2dc2f436a5a913ccb8759a254d321eec90af7050->leave($__internal_da9b3354e03e8e85d854c88c2dc2f436a5a913ccb8759a254d321eec90af7050_prof);

        
        $__internal_d1d5e176992f84d1f77716dbff381629b8601a08edc75ed22c6b6796dd711a25->leave($__internal_d1d5e176992f84d1f77716dbff381629b8601a08edc75ed22c6b6796dd711a25_prof);

    }

    // line 3
    public function block_summary($context, array $blocks = array())
    {
        $__internal_67769602b66b091d54b0c8cd86811f2ad95d9d09e329c6426eee8a6c3821dc49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67769602b66b091d54b0c8cd86811f2ad95d9d09e329c6426eee8a6c3821dc49->enter($__internal_67769602b66b091d54b0c8cd86811f2ad95d9d09e329c6426eee8a6c3821dc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5f479452dfe9a9b65c9cb55a13d98d10763c7206bc1bf6f6542b897e2b95834f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f479452dfe9a9b65c9cb55a13d98d10763c7206bc1bf6f6542b897e2b95834f->enter($__internal_5f479452dfe9a9b65c9cb55a13d98d10763c7206bc1bf6f6542b897e2b95834f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 4
        echo "    <div class=\"status\">
        <div class=\"container\">
            <h2>Profile Search</h2>
        </div>
    </div>
";
        
        $__internal_5f479452dfe9a9b65c9cb55a13d98d10763c7206bc1bf6f6542b897e2b95834f->leave($__internal_5f479452dfe9a9b65c9cb55a13d98d10763c7206bc1bf6f6542b897e2b95834f_prof);

        
        $__internal_67769602b66b091d54b0c8cd86811f2ad95d9d09e329c6426eee8a6c3821dc49->leave($__internal_67769602b66b091d54b0c8cd86811f2ad95d9d09e329c6426eee8a6c3821dc49_prof);

    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd18d2ea118cab1f6053cbecac96f67368251a9d4c1b5e971a8e3b3b2af2298f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd18d2ea118cab1f6053cbecac96f67368251a9d4c1b5e971a8e3b3b2af2298f->enter($__internal_bd18d2ea118cab1f6053cbecac96f67368251a9d4c1b5e971a8e3b3b2af2298f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd1a18197bfb3571539004a7e105140966112948cbf19fb6c8198d51f45d4790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1a18197bfb3571539004a7e105140966112948cbf19fb6c8198d51f45d4790->enter($__internal_fd1a18197bfb3571539004a7e105140966112948cbf19fb6c8198d51f45d4790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 12
        echo "    <h2>";
        echo twig_escape_filter($this->env, ((($context["tokens"] ?? $this->getContext($context, "tokens"))) ? (twig_length_filter($this->env, ($context["tokens"] ?? $this->getContext($context, "tokens")))) : ("No")), "html", null, true);
        echo " results found</h2>

    ";
        // line 14
        if (($context["tokens"] ?? $this->getContext($context, "tokens"))) {
            // line 15
            echo "        <table id=\"search-results\">
            <thead>
                <tr>
                    <th scope=\"col\" class=\"text-center\">Status</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Token</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tokens"] ?? $this->getContext($context, "tokens")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 28
                echo "                    ";
                $context["css_class"] = ((((($this->getAttribute($context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["result"], "status_code", array()), 0)) : (0)) > 399)) ? ("status-error") : (((((($this->getAttribute($context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["result"], "status_code", array()), 0)) : (0)) > 299)) ? ("status-warning") : ("status-success"))));
                // line 29
                echo "
                    <tr>
                        <td class=\"text-center\">
                            <span class=\"label ";
                // line 32
                echo twig_escape_filter($this->env, ($context["css_class"] ?? $this->getContext($context, "css_class")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["result"], "status_code", array()), "n/a")) : ("n/a")), "html", null, true);
                echo "</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "ip", array()), "html", null, true);
                echo "</span>
                            ";
                // line 36
                if ( !(null === $this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "session", array()))) {
                    // line 37
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_results", twig_array_merge($this->getAttribute($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "query", array()), "all", array()), array("ip" => $this->getAttribute($context["result"], "ip", array()), "token" => $this->getAttribute($context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 38
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 41
                echo "                        </td>
                        <td>
                            ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "method", array()), "html", null, true);
                echo "
                            ";
                // line 44
                if ( !(null === $this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "session", array()))) {
                    // line 45
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_results", twig_array_merge($this->getAttribute($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "query", array()), "all", array()), array("method" => $this->getAttribute($context["result"], "method", array()), "token" => $this->getAttribute($context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 46
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 49
                echo "                        </td>
                        <td class=\"break-long-words\">
                            ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "url", array()), "html", null, true);
                echo "
                            ";
                // line 52
                if ( !(null === $this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "session", array()))) {
                    // line 53
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_results", twig_array_merge($this->getAttribute($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "query", array()), "all", array()), array("url" => $this->getAttribute($context["result"], "url", array()), "token" => $this->getAttribute($context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 54
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 57
                echo "                        </td>
                        <td class=\"text-small\">
                            <span class=\"nowrap\">";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "time", array()), "d-M-Y"), "html", null, true);
                echo "</span>
                            <span class=\"nowrap newline\">";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "time", array()), "H:i:s"), "html", null, true);
                echo "</span>
                        </td>
                        <td class=\"nowrap\"><a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["result"], "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "token", array()), "html", null, true);
                echo "</a></td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 68
            echo "        <div class=\"empty\">
            <p>The query returned no result.</p>
        </div>
    ";
        }
        // line 72
        echo "
";
        
        $__internal_fd1a18197bfb3571539004a7e105140966112948cbf19fb6c8198d51f45d4790->leave($__internal_fd1a18197bfb3571539004a7e105140966112948cbf19fb6c8198d51f45d4790_prof);

        
        $__internal_bd18d2ea118cab1f6053cbecac96f67368251a9d4c1b5e971a8e3b3b2af2298f->leave($__internal_bd18d2ea118cab1f6053cbecac96f67368251a9d4c1b5e971a8e3b3b2af2298f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 72,  225 => 68,  220 => 65,  201 => 62,  196 => 60,  192 => 59,  188 => 57,  182 => 54,  177 => 53,  175 => 52,  171 => 51,  167 => 49,  161 => 46,  156 => 45,  154 => 44,  150 => 43,  146 => 41,  140 => 38,  135 => 37,  133 => 36,  129 => 35,  121 => 32,  116 => 29,  113 => 28,  96 => 27,  82 => 15,  80 => 14,  74 => 12,  65 => 11,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block summary %}
    <div class=\"status\">
        <div class=\"container\">
            <h2>Profile Search</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ tokens ? tokens|length : 'No' }} results found</h2>

    {% if tokens %}
        <table id=\"search-results\">
            <thead>
                <tr>
                    <th scope=\"col\" class=\"text-center\">Status</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Token</th>
                </tr>
            </thead>
            <tbody>
                {% for result in tokens %}
                    {% set css_class = result.status_code|default(0) > 399 ? 'status-error' : result.status_code|default(0) > 299 ? 'status-warning' : 'status-success' %}

                    <tr>
                        <td class=\"text-center\">
                            <span class=\"label {{ css_class }}\">{{ result.status_code|default('n/a') }}</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">{{ result.ip }}</span>
                            {% if request.session is not null %}
                                <a href=\"{{ path('_profiler_search_results', request.query.all|merge({'ip': result.ip, 'token': result.token})) }}\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">{{ include('@WebProfiler/Icon/search.svg') }}</span>
                                </a>
                            {% endif %}
                        </td>
                        <td>
                            {{ result.method }}
                            {% if request.session is not null %}
                                <a href=\"{{ path('_profiler_search_results', request.query.all|merge({'method': result.method, 'token': result.token})) }}\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">{{ include('@WebProfiler/Icon/search.svg') }}</span>
                                </a>
                            {% endif %}
                        </td>
                        <td class=\"break-long-words\">
                            {{ result.url }}
                            {% if request.session is not null %}
                                <a href=\"{{ path('_profiler_search_results', request.query.all|merge({'url': result.url, 'token': result.token})) }}\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">{{ include('@WebProfiler/Icon/search.svg') }}</span>
                                </a>
                            {% endif %}
                        </td>
                        <td class=\"text-small\">
                            <span class=\"nowrap\">{{ result.time|date('d-M-Y') }}</span>
                            <span class=\"nowrap newline\">{{ result.time|date('H:i:s') }}</span>
                        </td>
                        <td class=\"nowrap\"><a href=\"{{ path('_profiler', { token: result.token }) }}\">{{ result.token }}</a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>The query returned no result.</p>
        </div>
    {% endif %}

{% endblock %}
", "WebProfilerBundle:Profiler:results.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/results.html.twig");
    }
}
