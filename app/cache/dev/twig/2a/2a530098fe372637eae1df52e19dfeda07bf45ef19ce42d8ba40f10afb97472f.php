<?php

/* commentaire/index.html.twig */
class __TwigTemplate_3e171146063badc0c47f79a83d9948640f448e2bce4990222290aa5b25e0a69f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "commentaire/index.html.twig", 1);
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
        $__internal_962cd81d975e5f1e4912f302fbbdd3abcab4e66c0631f7b8d3adbadbd036b6c6 = $this->env->getExtension("native_profiler");
        $__internal_962cd81d975e5f1e4912f302fbbdd3abcab4e66c0631f7b8d3adbadbd036b6c6->enter($__internal_962cd81d975e5f1e4912f302fbbdd3abcab4e66c0631f7b8d3adbadbd036b6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "commentaire/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_962cd81d975e5f1e4912f302fbbdd3abcab4e66c0631f7b8d3adbadbd036b6c6->leave($__internal_962cd81d975e5f1e4912f302fbbdd3abcab4e66c0631f7b8d3adbadbd036b6c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a37c3bb88b5524f7127314f6a83dcd21d4c21e4d095fabaa356baaafaa859180 = $this->env->getExtension("native_profiler");
        $__internal_a37c3bb88b5524f7127314f6a83dcd21d4c21e4d095fabaa356baaafaa859180->enter($__internal_a37c3bb88b5524f7127314f6a83dcd21d4c21e4d095fabaa356baaafaa859180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Commentaire list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commentaire_show", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commentaire_show", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commentaire_edit", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("commentaire_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_a37c3bb88b5524f7127314f6a83dcd21d4c21e4d095fabaa356baaafaa859180->leave($__internal_a37c3bb88b5524f7127314f6a83dcd21d4c21e4d095fabaa356baaafaa859180_prof);

    }

    public function getTemplateName()
    {
        return "commentaire/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Commentaire list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Titre</th>*/
/*                 <th>Contenu</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for commentaire in commentaires %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('commentaire_show', { 'id': commentaire.id }) }}">{{ commentaire.id }}</a></td>*/
/*                 <td>{{ commentaire.titre }}</td>*/
/*                 <td>{{ commentaire.contenu }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('commentaire_show', { 'id': commentaire.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('commentaire_edit', { 'id': commentaire.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('commentaire_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
