<?php

/* commentaire/show.html.twig */
class __TwigTemplate_f48d4c1e7229d951279367e6b906cf7e5f9bc17aa4807cb62fb5cbf52eef2aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "commentaire/show.html.twig", 1);
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
        $__internal_f7b8c2183922fac6109b20186be44c687c04522ef003f7b26affe5f5fbb8379d = $this->env->getExtension("native_profiler");
        $__internal_f7b8c2183922fac6109b20186be44c687c04522ef003f7b26affe5f5fbb8379d->enter($__internal_f7b8c2183922fac6109b20186be44c687c04522ef003f7b26affe5f5fbb8379d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "commentaire/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7b8c2183922fac6109b20186be44c687c04522ef003f7b26affe5f5fbb8379d->leave($__internal_f7b8c2183922fac6109b20186be44c687c04522ef003f7b26affe5f5fbb8379d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_75228bf7b6a977a9e3c0ffe6a82a914c5c4c462abc37d1d43d50eb04796265d3 = $this->env->getExtension("native_profiler");
        $__internal_75228bf7b6a977a9e3c0ffe6a82a914c5c4c462abc37d1d43d50eb04796265d3->enter($__internal_75228bf7b6a977a9e3c0ffe6a82a914c5c4c462abc37d1d43d50eb04796265d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Commentaire</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("commentaire_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commentaire_edit", array("id" => $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_75228bf7b6a977a9e3c0ffe6a82a914c5c4c462abc37d1d43d50eb04796265d3->leave($__internal_75228bf7b6a977a9e3c0ffe6a82a914c5c4c462abc37d1d43d50eb04796265d3_prof);

    }

    public function getTemplateName()
    {
        return "commentaire/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Commentaire</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ commentaire.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Titre</th>*/
/*                 <td>{{ commentaire.titre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Contenu</th>*/
/*                 <td>{{ commentaire.contenu }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('commentaire_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('commentaire_edit', { 'id': commentaire.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
