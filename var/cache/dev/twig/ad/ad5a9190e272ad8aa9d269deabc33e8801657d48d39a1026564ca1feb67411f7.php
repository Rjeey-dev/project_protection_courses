<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_818e0a2207603f65c482bd192f1918dc17d8f61e84a242c7f348d4c73b63bdfd extends Twig_Template
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
        $__internal_d8bc5342da03ded520e4969fbd669d1acd99f27517d970c94ecce1229c8bef18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8bc5342da03ded520e4969fbd669d1acd99f27517d970c94ecce1229c8bef18->enter($__internal_d8bc5342da03ded520e4969fbd669d1acd99f27517d970c94ecce1229c8bef18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_f9a23341d0794cf00d71f02e66525cd0a485dc3967408fcd3dd4f3c7d6aae3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a23341d0794cf00d71f02e66525cd0a485dc3967408fcd3dd4f3c7d6aae3d2->enter($__internal_f9a23341d0794cf00d71f02e66525cd0a485dc3967408fcd3dd4f3c7d6aae3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d8bc5342da03ded520e4969fbd669d1acd99f27517d970c94ecce1229c8bef18->leave($__internal_d8bc5342da03ded520e4969fbd669d1acd99f27517d970c94ecce1229c8bef18_prof);

        
        $__internal_f9a23341d0794cf00d71f02e66525cd0a485dc3967408fcd3dd4f3c7d6aae3d2->leave($__internal_f9a23341d0794cf00d71f02e66525cd0a485dc3967408fcd3dd4f3c7d6aae3d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
