<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_66aa6989b0c1e0d8421ba7851f1aee13e684f38e329e403489e4efa1739a3ca6 extends Twig_Template
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
        $__internal_090c221daf2b71a647ec1e5299aaf04b4ec3a7c56a31447e8a084100fa5bd1dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090c221daf2b71a647ec1e5299aaf04b4ec3a7c56a31447e8a084100fa5bd1dc->enter($__internal_090c221daf2b71a647ec1e5299aaf04b4ec3a7c56a31447e8a084100fa5bd1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_ff5236b9fd3a90c55da2eed1ff299d98639b695133645bd8e8c712ce48f287fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5236b9fd3a90c55da2eed1ff299d98639b695133645bd8e8c712ce48f287fc->enter($__internal_ff5236b9fd3a90c55da2eed1ff299d98639b695133645bd8e8c712ce48f287fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_090c221daf2b71a647ec1e5299aaf04b4ec3a7c56a31447e8a084100fa5bd1dc->leave($__internal_090c221daf2b71a647ec1e5299aaf04b4ec3a7c56a31447e8a084100fa5bd1dc_prof);

        
        $__internal_ff5236b9fd3a90c55da2eed1ff299d98639b695133645bd8e8c712ce48f287fc->leave($__internal_ff5236b9fd3a90c55da2eed1ff299d98639b695133645bd8e8c712ce48f287fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
