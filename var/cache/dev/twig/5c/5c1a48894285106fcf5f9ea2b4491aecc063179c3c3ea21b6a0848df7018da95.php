<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6fd316b7e293175eaa309c4a2d509bd46ae1ad5a6990439d202890d94c00ec98 extends Twig_Template
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
        $__internal_e5b3f6aea8f864da80025d9f0e1e404bb581bfa5d24b3a849bb91d51d60db78f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b3f6aea8f864da80025d9f0e1e404bb581bfa5d24b3a849bb91d51d60db78f->enter($__internal_e5b3f6aea8f864da80025d9f0e1e404bb581bfa5d24b3a849bb91d51d60db78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_815694fc685bb1ef0f454da63ea8efc085b7a8ef520e3ea20a0ce3c5ffcd269b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815694fc685bb1ef0f454da63ea8efc085b7a8ef520e3ea20a0ce3c5ffcd269b->enter($__internal_815694fc685bb1ef0f454da63ea8efc085b7a8ef520e3ea20a0ce3c5ffcd269b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e5b3f6aea8f864da80025d9f0e1e404bb581bfa5d24b3a849bb91d51d60db78f->leave($__internal_e5b3f6aea8f864da80025d9f0e1e404bb581bfa5d24b3a849bb91d51d60db78f_prof);

        
        $__internal_815694fc685bb1ef0f454da63ea8efc085b7a8ef520e3ea20a0ce3c5ffcd269b->leave($__internal_815694fc685bb1ef0f454da63ea8efc085b7a8ef520e3ea20a0ce3c5ffcd269b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
