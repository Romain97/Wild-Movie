<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c54f550d70f53688a8dc4212494f020031dc427a530f319b951ae2d781c9a69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e030c729314bf6ffe9cb9b88731b87ffaa5adef702a733661ea627adb69189a4 = $this->env->getExtension("native_profiler");
        $__internal_e030c729314bf6ffe9cb9b88731b87ffaa5adef702a733661ea627adb69189a4->enter($__internal_e030c729314bf6ffe9cb9b88731b87ffaa5adef702a733661ea627adb69189a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e030c729314bf6ffe9cb9b88731b87ffaa5adef702a733661ea627adb69189a4->leave($__internal_e030c729314bf6ffe9cb9b88731b87ffaa5adef702a733661ea627adb69189a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33488520dc4c2435ab2273a47cdcf1cd3e39c5c1a871aa00a023a9bc2b526e59 = $this->env->getExtension("native_profiler");
        $__internal_33488520dc4c2435ab2273a47cdcf1cd3e39c5c1a871aa00a023a9bc2b526e59->enter($__internal_33488520dc4c2435ab2273a47cdcf1cd3e39c5c1a871aa00a023a9bc2b526e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_33488520dc4c2435ab2273a47cdcf1cd3e39c5c1a871aa00a023a9bc2b526e59->leave($__internal_33488520dc4c2435ab2273a47cdcf1cd3e39c5c1a871aa00a023a9bc2b526e59_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b07a5487cd0d6446b6ddc85237e68e4853cace47311a32c68023b9e7d53a7f49 = $this->env->getExtension("native_profiler");
        $__internal_b07a5487cd0d6446b6ddc85237e68e4853cace47311a32c68023b9e7d53a7f49->enter($__internal_b07a5487cd0d6446b6ddc85237e68e4853cace47311a32c68023b9e7d53a7f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b07a5487cd0d6446b6ddc85237e68e4853cace47311a32c68023b9e7d53a7f49->leave($__internal_b07a5487cd0d6446b6ddc85237e68e4853cace47311a32c68023b9e7d53a7f49_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56e3b800dbbcb8a5a2ab07af7fe2441431ab5fd0faba00de24a10227edc0c5bd = $this->env->getExtension("native_profiler");
        $__internal_56e3b800dbbcb8a5a2ab07af7fe2441431ab5fd0faba00de24a10227edc0c5bd->enter($__internal_56e3b800dbbcb8a5a2ab07af7fe2441431ab5fd0faba00de24a10227edc0c5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_56e3b800dbbcb8a5a2ab07af7fe2441431ab5fd0faba00de24a10227edc0c5bd->leave($__internal_56e3b800dbbcb8a5a2ab07af7fe2441431ab5fd0faba00de24a10227edc0c5bd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
