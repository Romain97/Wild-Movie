<?php

/* FrontendBundle:Default:show.html.twig */
class __TwigTemplate_f6a317ca4f97d8c494e75dc23948c17c289d2c3b02778a235969fb62a10ef4ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bd5720edc8de586c0f403496c0e205c49c4f606892d6fe543c79a8aa7ccdb44 = $this->env->getExtension("native_profiler");
        $__internal_9bd5720edc8de586c0f403496c0e205c49c4f606892d6fe543c79a8aa7ccdb44->enter($__internal_9bd5720edc8de586c0f403496c0e205c49c4f606892d6fe543c79a8aa7ccdb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bd5720edc8de586c0f403496c0e205c49c4f606892d6fe543c79a8aa7ccdb44->leave($__internal_9bd5720edc8de586c0f403496c0e205c49c4f606892d6fe543c79a8aa7ccdb44_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_31e8f5392df61edad13225d3e67c07ec24cf0345b092f0113d4b9559fc7fa8a5 = $this->env->getExtension("native_profiler");
        $__internal_31e8f5392df61edad13225d3e67c07ec24cf0345b092f0113d4b9559fc7fa8a5->enter($__internal_31e8f5392df61edad13225d3e67c07ec24cf0345b092f0113d4b9559fc7fa8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"col-md-12\">
\t\t<div class=\"col-md-5 col-md-offset-1 left\">
\t\t\t<img class=\"img-style-3\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("uploads/film/" . $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "folder", array())) . "")), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-5\">

\t\t\t<h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "titre", array()), "html", null, true);
        echo "</h2>
\t\t\t<hr>
\t\t\t<p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "description", array()), "html", null, true);
        echo "</p>
\t\t\t
\t\t</div>
\t</div>
\t<div class=\"col-md-10 col-md-offset-1\">
\t\t<div class=\"col-md-12\">
\t\t\t
\t\t\t<div class=\"col-md-4 com\">
\t\t\t\t<h2>Donne ton avis <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("commentaire_new");
        echo "\"><strong>ici</strong></a></h2>
\t\t\t\t<h3>Commentaires : </h3>
\t\t\t\t";
        // line 33
        echo "\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_31e8f5392df61edad13225d3e67c07ec24cf0345b092f0113d4b9559fc7fa8a5->leave($__internal_31e8f5392df61edad13225d3e67c07ec24cf0345b092f0113d4b9559fc7fa8a5_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 33,  67 => 20,  56 => 12,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="col-md-12">*/
/* 		<div class="col-md-5 col-md-offset-1 left">*/
/* 			<img class="img-style-3" src="{{ asset('uploads/film/' ~ movie.folder ~ '') }}">*/
/* 		</div>*/
/* 		<div class="col-md-5">*/
/* */
/* 			<h2>{{ movie.titre }}</h2>*/
/* 			<hr>*/
/* 			<p>{{ movie.description }}</p>*/
/* 			*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-10 col-md-offset-1">*/
/* 		<div class="col-md-12">*/
/* 			*/
/* 			<div class="col-md-4 com">*/
/* 				<h2>Donne ton avis <a href="{{ path('commentaire_new') }}"><strong>ici</strong></a></h2>*/
/* 				<h3>Commentaires : </h3>*/
/* 				{# {% for commentaire in commentaires %}*/
/* */
/* 				<tr>*/
/*                 <th>Titre</th>*/
/*                 <td>{{ commentaire.titre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Contenu</th>*/
/*                 <td>{{ commentaire.contenu }}</td>*/
/*             </tr>*/
/*         		{% endfor %} #}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
