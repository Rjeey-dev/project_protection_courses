<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d179aa69a6e5bd4f87aa18ea1d6157f34ea2ab24efd0f4ed66a9a1b10b472090 extends Twig_Template
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
        $__internal_892658fe63ef8751f5a2a786f7bdcc374753e0640b9ae8fb5e9592cdb8efb7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892658fe63ef8751f5a2a786f7bdcc374753e0640b9ae8fb5e9592cdb8efb7f2->enter($__internal_892658fe63ef8751f5a2a786f7bdcc374753e0640b9ae8fb5e9592cdb8efb7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_2b4a6130d9a4dc30c70acff01ee245a0e8f97611d4a802ab7adee7b3a7b3ce74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4a6130d9a4dc30c70acff01ee245a0e8f97611d4a802ab7adee7b3a7b3ce74->enter($__internal_2b4a6130d9a4dc30c70acff01ee245a0e8f97611d4a802ab7adee7b3a7b3ce74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_892658fe63ef8751f5a2a786f7bdcc374753e0640b9ae8fb5e9592cdb8efb7f2->leave($__internal_892658fe63ef8751f5a2a786f7bdcc374753e0640b9ae8fb5e9592cdb8efb7f2_prof);

        
        $__internal_2b4a6130d9a4dc30c70acff01ee245a0e8f97611d4a802ab7adee7b3a7b3ce74->leave($__internal_2b4a6130d9a4dc30c70acff01ee245a0e8f97611d4a802ab7adee7b3a7b3ce74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
