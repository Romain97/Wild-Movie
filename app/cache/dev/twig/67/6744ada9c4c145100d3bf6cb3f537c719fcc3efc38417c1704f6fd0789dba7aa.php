<?php

/* FrontendBundle:Default:article.html.twig */
class __TwigTemplate_beeec3eeedc2b2054da273a27c02b04f504d304d38b2b30fd39694cd5610a6e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:article.html.twig", 1);
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
        $__internal_6736cf6f2c0fb385c5345b43c4d8bc91a639bddaa057e71f073afae199e1a572 = $this->env->getExtension("native_profiler");
        $__internal_6736cf6f2c0fb385c5345b43c4d8bc91a639bddaa057e71f073afae199e1a572->enter($__internal_6736cf6f2c0fb385c5345b43c4d8bc91a639bddaa057e71f073afae199e1a572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6736cf6f2c0fb385c5345b43c4d8bc91a639bddaa057e71f073afae199e1a572->leave($__internal_6736cf6f2c0fb385c5345b43c4d8bc91a639bddaa057e71f073afae199e1a572_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_716a88e06e8585d9dd53b5a409043b34849ef975ca075d16295c4fbc714aa6ba = $this->env->getExtension("native_profiler");
        $__internal_716a88e06e8585d9dd53b5a409043b34849ef975ca075d16295c4fbc714aa6ba->enter($__internal_716a88e06e8585d9dd53b5a409043b34849ef975ca075d16295c4fbc714aa6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"back\">
\t\t    <div class=\"col-md-6 articlemain\">
\t\t\t\t<h2> Encore un gros navet</h2>

\t\t\t\t<img class=\"img\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/photo2.jpg"), "html", null, true);
        echo "\">

\t\t\t\t<p> Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du \"De Finibus Bonorum et Malorum\" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l'éthique. Les premières lignes du Lorem Ipsum, \"Lorem ipsum dolor sit amet...\", proviennent de la section 1.10.32.</p>
\t\t\t</div>
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<img class=\"psg\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/img/image.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"psg\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/img/image.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t<img class=\"psg\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/img/image.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"psg\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/img/image.png"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t


\t\t\t\t
\t</div> 
\t\t";
        
        $__internal_716a88e06e8585d9dd53b5a409043b34849ef975ca075d16295c4fbc714aa6ba->leave($__internal_716a88e06e8585d9dd53b5a409043b34849ef975ca075d16295c4fbc714aa6ba_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  70 => 23,  62 => 18,  56 => 15,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="back">*/
/* 		    <div class="col-md-6 articlemain">*/
/* 				<h2> Encore un gros navet</h2>*/
/* */
/* 				<img class="img" src="{{ asset('img/photo2.jpg') }}">*/
/* */
/* 				<p> Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l'éthique. Les premières lignes du Lorem Ipsum, "Lorem ipsum dolor sit amet...", proviennent de la section 1.10.32.</p>*/
/* 			</div>*/
/* 				*/
/* 					*/
/* 								<div class="col-md-3">*/
/* 									<img class="psg" src="{{ asset('/img/image.png') }}" />*/
/* 								</div>*/
/* 										<div class="col-md-3">*/
/* 											<img class="psg" src="{{ asset('/img/image.png') }}" />*/
/* 										</div>*/
/* */
/* 						*/
/* 									<div class="col-md-3">*/
/* 										<img class="psg" src="{{ asset('/img/image.png') }}" />*/
/* 									</div>*/
/* 											<div class="col-md-3">*/
/* 												<img class="psg" src="{{ asset('/img/image.png') }}"/>*/
/* 											</div>*/
/* 										*/
/* 					*/
/* */
/* */
/* 				*/
/* 	</div> */
/* 		{% endblock %}*/
