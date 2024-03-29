<?php

/* form_table_layout.html.twig */
class __TwigTemplate_1181e7b94ba2b8339c31a7590d48b22e8b814da3623ac093ed13045791dc89fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_989269562e9f01df48b6934d93c8dac653af4f1ec109c92845f541e11d76aa18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989269562e9f01df48b6934d93c8dac653af4f1ec109c92845f541e11d76aa18->enter($__internal_989269562e9f01df48b6934d93c8dac653af4f1ec109c92845f541e11d76aa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_104575a2d790f6c6e9e6e122b5d12cca2d44447df2eed8abc9258896c88969d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104575a2d790f6c6e9e6e122b5d12cca2d44447df2eed8abc9258896c88969d8->enter($__internal_104575a2d790f6c6e9e6e122b5d12cca2d44447df2eed8abc9258896c88969d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_989269562e9f01df48b6934d93c8dac653af4f1ec109c92845f541e11d76aa18->leave($__internal_989269562e9f01df48b6934d93c8dac653af4f1ec109c92845f541e11d76aa18_prof);

        
        $__internal_104575a2d790f6c6e9e6e122b5d12cca2d44447df2eed8abc9258896c88969d8->leave($__internal_104575a2d790f6c6e9e6e122b5d12cca2d44447df2eed8abc9258896c88969d8_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_66561b64473d6cae591daa78772a6964c0cf970c935a02e329e855f496a13e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66561b64473d6cae591daa78772a6964c0cf970c935a02e329e855f496a13e86->enter($__internal_66561b64473d6cae591daa78772a6964c0cf970c935a02e329e855f496a13e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fb8ae1dafa5baf5c16d62f115e117ee54d70c3f30fab7ca8c643db3a1ff0ad5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8ae1dafa5baf5c16d62f115e117ee54d70c3f30fab7ca8c643db3a1ff0ad5a->enter($__internal_fb8ae1dafa5baf5c16d62f115e117ee54d70c3f30fab7ca8c643db3a1ff0ad5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_fb8ae1dafa5baf5c16d62f115e117ee54d70c3f30fab7ca8c643db3a1ff0ad5a->leave($__internal_fb8ae1dafa5baf5c16d62f115e117ee54d70c3f30fab7ca8c643db3a1ff0ad5a_prof);

        
        $__internal_66561b64473d6cae591daa78772a6964c0cf970c935a02e329e855f496a13e86->leave($__internal_66561b64473d6cae591daa78772a6964c0cf970c935a02e329e855f496a13e86_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_76e6d96d090d77a9ffc0ed9e73fd6c17808cbc3dd822cbc4a4756ea1e05c4f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e6d96d090d77a9ffc0ed9e73fd6c17808cbc3dd822cbc4a4756ea1e05c4f8c->enter($__internal_76e6d96d090d77a9ffc0ed9e73fd6c17808cbc3dd822cbc4a4756ea1e05c4f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_4a90e9168e3758b55d108665fe80f92346ea6bdb57f7da4a73a47fe7dc2a47e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a90e9168e3758b55d108665fe80f92346ea6bdb57f7da4a73a47fe7dc2a47e5->enter($__internal_4a90e9168e3758b55d108665fe80f92346ea6bdb57f7da4a73a47fe7dc2a47e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_4a90e9168e3758b55d108665fe80f92346ea6bdb57f7da4a73a47fe7dc2a47e5->leave($__internal_4a90e9168e3758b55d108665fe80f92346ea6bdb57f7da4a73a47fe7dc2a47e5_prof);

        
        $__internal_76e6d96d090d77a9ffc0ed9e73fd6c17808cbc3dd822cbc4a4756ea1e05c4f8c->leave($__internal_76e6d96d090d77a9ffc0ed9e73fd6c17808cbc3dd822cbc4a4756ea1e05c4f8c_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_ab84be66da2584f04ff9596a8af3d189cadef2cacddd307d441c0ff6e2038cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab84be66da2584f04ff9596a8af3d189cadef2cacddd307d441c0ff6e2038cce->enter($__internal_ab84be66da2584f04ff9596a8af3d189cadef2cacddd307d441c0ff6e2038cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_50b27429d7646c202771afbdc0f5a9e05921199f9c9b27debd491faa3249a34b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b27429d7646c202771afbdc0f5a9e05921199f9c9b27debd491faa3249a34b->enter($__internal_50b27429d7646c202771afbdc0f5a9e05921199f9c9b27debd491faa3249a34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_50b27429d7646c202771afbdc0f5a9e05921199f9c9b27debd491faa3249a34b->leave($__internal_50b27429d7646c202771afbdc0f5a9e05921199f9c9b27debd491faa3249a34b_prof);

        
        $__internal_ab84be66da2584f04ff9596a8af3d189cadef2cacddd307d441c0ff6e2038cce->leave($__internal_ab84be66da2584f04ff9596a8af3d189cadef2cacddd307d441c0ff6e2038cce_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_0fa24b2e4db1bbe7bd7db2a4005b8d66879136299ef2200ca738acdec230cd74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa24b2e4db1bbe7bd7db2a4005b8d66879136299ef2200ca738acdec230cd74->enter($__internal_0fa24b2e4db1bbe7bd7db2a4005b8d66879136299ef2200ca738acdec230cd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_59f857746b4ae552f8a43910bbb7c5d3b3cc13be92ab808426a9d872464153b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f857746b4ae552f8a43910bbb7c5d3b3cc13be92ab808426a9d872464153b6->enter($__internal_59f857746b4ae552f8a43910bbb7c5d3b3cc13be92ab808426a9d872464153b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_59f857746b4ae552f8a43910bbb7c5d3b3cc13be92ab808426a9d872464153b6->leave($__internal_59f857746b4ae552f8a43910bbb7c5d3b3cc13be92ab808426a9d872464153b6_prof);

        
        $__internal_0fa24b2e4db1bbe7bd7db2a4005b8d66879136299ef2200ca738acdec230cd74->leave($__internal_0fa24b2e4db1bbe7bd7db2a4005b8d66879136299ef2200ca738acdec230cd74_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
