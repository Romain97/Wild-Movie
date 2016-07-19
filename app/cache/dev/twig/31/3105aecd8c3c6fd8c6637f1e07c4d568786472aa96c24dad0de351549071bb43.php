<?php

/* commentaire/new.html.twig */
class __TwigTemplate_243e494eced8109cf21e04aeece1dac1f630a9be434cf78b03221951cbc3f6a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "commentaire/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d395015a2154d6e07389c4551e0d3c88ea35e5e57de0c54e56bf77bc273b3f00 = $this->env->getExtension("native_profiler");
        $__internal_d395015a2154d6e07389c4551e0d3c88ea35e5e57de0c54e56bf77bc273b3f00->enter($__internal_d395015a2154d6e07389c4551e0d3c88ea35e5e57de0c54e56bf77bc273b3f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "commentaire/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d395015a2154d6e07389c4551e0d3c88ea35e5e57de0c54e56bf77bc273b3f00->leave($__internal_d395015a2154d6e07389c4551e0d3c88ea35e5e57de0c54e56bf77bc273b3f00_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d95fcccdbf76f7bef1b69cd4dd11ac028c6dfe341ba7bf1165fb6a639b9f5be1 = $this->env->getExtension("native_profiler");
        $__internal_d95fcccdbf76f7bef1b69cd4dd11ac028c6dfe341ba7bf1165fb6a639b9f5be1->enter($__internal_d95fcccdbf76f7bef1b69cd4dd11ac028c6dfe341ba7bf1165fb6a639b9f5be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Commentaire creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("commentaire_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d95fcccdbf76f7bef1b69cd4dd11ac028c6dfe341ba7bf1165fb6a639b9f5be1->leave($__internal_d95fcccdbf76f7bef1b69cd4dd11ac028c6dfe341ba7bf1165fb6a639b9f5be1_prof);

    }

    public function getTemplateName()
    {
        return "commentaire/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Commentaire creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('commentaire_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
