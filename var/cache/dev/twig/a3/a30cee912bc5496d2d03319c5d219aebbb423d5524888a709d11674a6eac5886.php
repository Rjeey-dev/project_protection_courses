<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_989afe85103c76901c042d7eb27002b3b2da5241e4b92eeda3dcfcedc7aa1129 extends Twig_Template
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
        $__internal_2b39ae995e5af6fd2a49974655c68a762ab9c34a68d722668ec80efad5bacd26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b39ae995e5af6fd2a49974655c68a762ab9c34a68d722668ec80efad5bacd26->enter($__internal_2b39ae995e5af6fd2a49974655c68a762ab9c34a68d722668ec80efad5bacd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_77206d802e76482b83ac411683c991466c3607b36772dd4ceb214d6b19b4a805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77206d802e76482b83ac411683c991466c3607b36772dd4ceb214d6b19b4a805->enter($__internal_77206d802e76482b83ac411683c991466c3607b36772dd4ceb214d6b19b4a805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2b39ae995e5af6fd2a49974655c68a762ab9c34a68d722668ec80efad5bacd26->leave($__internal_2b39ae995e5af6fd2a49974655c68a762ab9c34a68d722668ec80efad5bacd26_prof);

        
        $__internal_77206d802e76482b83ac411683c991466c3607b36772dd4ceb214d6b19b4a805->leave($__internal_77206d802e76482b83ac411683c991466c3607b36772dd4ceb214d6b19b4a805_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
