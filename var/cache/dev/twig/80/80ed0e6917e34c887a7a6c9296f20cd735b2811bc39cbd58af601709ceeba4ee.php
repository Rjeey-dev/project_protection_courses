<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_64466c9d8ab246c8e95abb8e009ea94da2f8931228246be834c161ca9b1b437f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fe05e39ef168733265ba096d7f55aac8dd1ac2ebcf0354f43aba7d27496faa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe05e39ef168733265ba096d7f55aac8dd1ac2ebcf0354f43aba7d27496faa0->enter($__internal_0fe05e39ef168733265ba096d7f55aac8dd1ac2ebcf0354f43aba7d27496faa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2cc62ae2e9b156963b014c1de09522443dbcbc11f136cc77fd3349bf7a769b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc62ae2e9b156963b014c1de09522443dbcbc11f136cc77fd3349bf7a769b1d->enter($__internal_2cc62ae2e9b156963b014c1de09522443dbcbc11f136cc77fd3349bf7a769b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fe05e39ef168733265ba096d7f55aac8dd1ac2ebcf0354f43aba7d27496faa0->leave($__internal_0fe05e39ef168733265ba096d7f55aac8dd1ac2ebcf0354f43aba7d27496faa0_prof);

        
        $__internal_2cc62ae2e9b156963b014c1de09522443dbcbc11f136cc77fd3349bf7a769b1d->leave($__internal_2cc62ae2e9b156963b014c1de09522443dbcbc11f136cc77fd3349bf7a769b1d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9f96d9f4af997446e872848388cdfe45df63383ae0ca35010c67794c7532984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f96d9f4af997446e872848388cdfe45df63383ae0ca35010c67794c7532984->enter($__internal_c9f96d9f4af997446e872848388cdfe45df63383ae0ca35010c67794c7532984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_08e89ffc9d3c04f628ea5c0abb37e9712fcf23b93d39678b8dda385f87a7c674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e89ffc9d3c04f628ea5c0abb37e9712fcf23b93d39678b8dda385f87a7c674->enter($__internal_08e89ffc9d3c04f628ea5c0abb37e9712fcf23b93d39678b8dda385f87a7c674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_08e89ffc9d3c04f628ea5c0abb37e9712fcf23b93d39678b8dda385f87a7c674->leave($__internal_08e89ffc9d3c04f628ea5c0abb37e9712fcf23b93d39678b8dda385f87a7c674_prof);

        
        $__internal_c9f96d9f4af997446e872848388cdfe45df63383ae0ca35010c67794c7532984->leave($__internal_c9f96d9f4af997446e872848388cdfe45df63383ae0ca35010c67794c7532984_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
