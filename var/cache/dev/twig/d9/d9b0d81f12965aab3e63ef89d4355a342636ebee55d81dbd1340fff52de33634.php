<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_6063701a6a19f3474d0d7a21999fab9f1a93d005726914b97757654f96581e70 extends Twig_Template
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
        $__internal_8952b5b24e1790b50b863c0cd364fe2a3290e4a0d95477651f87e42b393261ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8952b5b24e1790b50b863c0cd364fe2a3290e4a0d95477651f87e42b393261ed->enter($__internal_8952b5b24e1790b50b863c0cd364fe2a3290e4a0d95477651f87e42b393261ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_9b7ffb927c1447feb09203b1c2245305e9bf8da3f616a097f655485aacb8b67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7ffb927c1447feb09203b1c2245305e9bf8da3f616a097f655485aacb8b67c->enter($__internal_9b7ffb927c1447feb09203b1c2245305e9bf8da3f616a097f655485aacb8b67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8952b5b24e1790b50b863c0cd364fe2a3290e4a0d95477651f87e42b393261ed->leave($__internal_8952b5b24e1790b50b863c0cd364fe2a3290e4a0d95477651f87e42b393261ed_prof);

        
        $__internal_9b7ffb927c1447feb09203b1c2245305e9bf8da3f616a097f655485aacb8b67c->leave($__internal_9b7ffb927c1447feb09203b1c2245305e9bf8da3f616a097f655485aacb8b67c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
