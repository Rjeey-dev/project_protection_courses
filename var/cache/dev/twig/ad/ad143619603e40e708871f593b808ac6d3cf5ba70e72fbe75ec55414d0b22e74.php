<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_67bab2434f75b7415dd4292ec145492a0b45dc64028559e126f05b07eae0c381 extends Twig_Template
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
        $__internal_530e655b9539c650ee67ae9c8469fd8e4fd3874c6596996ef3c9e4ff4d8e5f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530e655b9539c650ee67ae9c8469fd8e4fd3874c6596996ef3c9e4ff4d8e5f2d->enter($__internal_530e655b9539c650ee67ae9c8469fd8e4fd3874c6596996ef3c9e4ff4d8e5f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_974a1418968119b0b8acd6297b71ce7f0ef063062cbf1f0ea2e23af87f446717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974a1418968119b0b8acd6297b71ce7f0ef063062cbf1f0ea2e23af87f446717->enter($__internal_974a1418968119b0b8acd6297b71ce7f0ef063062cbf1f0ea2e23af87f446717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_530e655b9539c650ee67ae9c8469fd8e4fd3874c6596996ef3c9e4ff4d8e5f2d->leave($__internal_530e655b9539c650ee67ae9c8469fd8e4fd3874c6596996ef3c9e4ff4d8e5f2d_prof);

        
        $__internal_974a1418968119b0b8acd6297b71ce7f0ef063062cbf1f0ea2e23af87f446717->leave($__internal_974a1418968119b0b8acd6297b71ce7f0ef063062cbf1f0ea2e23af87f446717_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
