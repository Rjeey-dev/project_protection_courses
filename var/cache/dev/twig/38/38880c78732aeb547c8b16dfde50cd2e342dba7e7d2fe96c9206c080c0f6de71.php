<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a399fb081a869d760674e04c63344720b2434391399ccfe8b12486390f6b1fe8 extends Twig_Template
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
        $__internal_a5bfc70f2a02c70a7e83675202fff22d109dc136b6965247e8bf870443324dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5bfc70f2a02c70a7e83675202fff22d109dc136b6965247e8bf870443324dbc->enter($__internal_a5bfc70f2a02c70a7e83675202fff22d109dc136b6965247e8bf870443324dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_629303da5b94e3f7f649ffba84b6095ea1906abc32323d2498bec6c0cc564029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629303da5b94e3f7f649ffba84b6095ea1906abc32323d2498bec6c0cc564029->enter($__internal_629303da5b94e3f7f649ffba84b6095ea1906abc32323d2498bec6c0cc564029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a5bfc70f2a02c70a7e83675202fff22d109dc136b6965247e8bf870443324dbc->leave($__internal_a5bfc70f2a02c70a7e83675202fff22d109dc136b6965247e8bf870443324dbc_prof);

        
        $__internal_629303da5b94e3f7f649ffba84b6095ea1906abc32323d2498bec6c0cc564029->leave($__internal_629303da5b94e3f7f649ffba84b6095ea1906abc32323d2498bec6c0cc564029_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
