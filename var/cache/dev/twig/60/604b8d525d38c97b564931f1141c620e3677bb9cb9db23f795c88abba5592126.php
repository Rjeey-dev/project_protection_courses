<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_66919b9a1aa1f4c83996151cddbe520f5958b45d2202f2fdbffb9055b5bada32 extends Twig_Template
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
        $__internal_1f81dab8a6842789112622a8f5e44ed1403ba76ca53a16d7380e4723cbb5ae3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f81dab8a6842789112622a8f5e44ed1403ba76ca53a16d7380e4723cbb5ae3f->enter($__internal_1f81dab8a6842789112622a8f5e44ed1403ba76ca53a16d7380e4723cbb5ae3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_6d55906feacf9a90152a9ed98ae92122e8086ddf448b778a04d151a4e611ed11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d55906feacf9a90152a9ed98ae92122e8086ddf448b778a04d151a4e611ed11->enter($__internal_6d55906feacf9a90152a9ed98ae92122e8086ddf448b778a04d151a4e611ed11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1f81dab8a6842789112622a8f5e44ed1403ba76ca53a16d7380e4723cbb5ae3f->leave($__internal_1f81dab8a6842789112622a8f5e44ed1403ba76ca53a16d7380e4723cbb5ae3f_prof);

        
        $__internal_6d55906feacf9a90152a9ed98ae92122e8086ddf448b778a04d151a4e611ed11->leave($__internal_6d55906feacf9a90152a9ed98ae92122e8086ddf448b778a04d151a4e611ed11_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
