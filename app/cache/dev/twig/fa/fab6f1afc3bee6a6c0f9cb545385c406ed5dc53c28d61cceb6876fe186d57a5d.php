<?php

/* commentaire/edit.html.twig */
class __TwigTemplate_bcc185f67cf43196aec9815a4c26d0b7ca19466272ae5ad8f7ad9fa47bba664b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "commentaire/edit.html.twig", 1);
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
        $__internal_ffd97a2a8acc57601d3aeac05da8d55f091e10fb4b1d9a99adbff47aff54543b = $this->env->getExtension("native_profiler");
        $__internal_ffd97a2a8acc57601d3aeac05da8d55f091e10fb4b1d9a99adbff47aff54543b->enter($__internal_ffd97a2a8acc57601d3aeac05da8d55f091e10fb4b1d9a99adbff47aff54543b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "commentaire/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffd97a2a8acc57601d3aeac05da8d55f091e10fb4b1d9a99adbff47aff54543b->leave($__internal_ffd97a2a8acc57601d3aeac05da8d55f091e10fb4b1d9a99adbff47aff54543b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e861329130a85468f88240cc6198eece7488ac0bd06695b362aa78834d64d12b = $this->env->getExtension("native_profiler");
        $__internal_e861329130a85468f88240cc6198eece7488ac0bd06695b362aa78834d64d12b->enter($__internal_e861329130a85468f88240cc6198eece7488ac0bd06695b362aa78834d64d12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Commentaire edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("commentaire_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e861329130a85468f88240cc6198eece7488ac0bd06695b362aa78834d64d12b->leave($__internal_e861329130a85468f88240cc6198eece7488ac0bd06695b362aa78834d64d12b_prof);

    }

    public function getTemplateName()
    {
        return "commentaire/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Commentaire edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('commentaire_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
