<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_738ec2fb6599c02ed0cd63255133b3442b3db95fe404b5c7172ae32fb663d759 extends Twig_Template
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
        $__internal_8a8f9f3a8097163cd7c76f5687895956788634ee2d45adb781d2423d05695e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a8f9f3a8097163cd7c76f5687895956788634ee2d45adb781d2423d05695e84->enter($__internal_8a8f9f3a8097163cd7c76f5687895956788634ee2d45adb781d2423d05695e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_4f408c17caaa74fb878a86aa5d4c9b87253697e769b35718e3d66bd6fcd022d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f408c17caaa74fb878a86aa5d4c9b87253697e769b35718e3d66bd6fcd022d5->enter($__internal_4f408c17caaa74fb878a86aa5d4c9b87253697e769b35718e3d66bd6fcd022d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8a8f9f3a8097163cd7c76f5687895956788634ee2d45adb781d2423d05695e84->leave($__internal_8a8f9f3a8097163cd7c76f5687895956788634ee2d45adb781d2423d05695e84_prof);

        
        $__internal_4f408c17caaa74fb878a86aa5d4c9b87253697e769b35718e3d66bd6fcd022d5->leave($__internal_4f408c17caaa74fb878a86aa5d4c9b87253697e769b35718e3d66bd6fcd022d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
