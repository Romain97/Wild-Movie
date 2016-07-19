<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1f53af8e2f776ae5c13c44a6c2f2c9c55b821b23736c491cc7f018e4cca6ea2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d449972aab671f38170629fb337e4f0c1f7ea597f02813c2c10ca19e49f42f2b = $this->env->getExtension("native_profiler");
        $__internal_d449972aab671f38170629fb337e4f0c1f7ea597f02813c2c10ca19e49f42f2b->enter($__internal_d449972aab671f38170629fb337e4f0c1f7ea597f02813c2c10ca19e49f42f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d449972aab671f38170629fb337e4f0c1f7ea597f02813c2c10ca19e49f42f2b->leave($__internal_d449972aab671f38170629fb337e4f0c1f7ea597f02813c2c10ca19e49f42f2b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6af3df9b77475a0af2613d766746f483c3d9d1b19094719caf2d3255465d5a94 = $this->env->getExtension("native_profiler");
        $__internal_6af3df9b77475a0af2613d766746f483c3d9d1b19094719caf2d3255465d5a94->enter($__internal_6af3df9b77475a0af2613d766746f483c3d9d1b19094719caf2d3255465d5a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6af3df9b77475a0af2613d766746f483c3d9d1b19094719caf2d3255465d5a94->leave($__internal_6af3df9b77475a0af2613d766746f483c3d9d1b19094719caf2d3255465d5a94_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cef76bc843f1dff813da678ced7e87f0fca4f9f2638fb8e003f292ecb177d01 = $this->env->getExtension("native_profiler");
        $__internal_8cef76bc843f1dff813da678ced7e87f0fca4f9f2638fb8e003f292ecb177d01->enter($__internal_8cef76bc843f1dff813da678ced7e87f0fca4f9f2638fb8e003f292ecb177d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8cef76bc843f1dff813da678ced7e87f0fca4f9f2638fb8e003f292ecb177d01->leave($__internal_8cef76bc843f1dff813da678ced7e87f0fca4f9f2638fb8e003f292ecb177d01_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f12acbcc7d4782e52db60b19b7d86327b262341306af63218839d3fae0a48d9f = $this->env->getExtension("native_profiler");
        $__internal_f12acbcc7d4782e52db60b19b7d86327b262341306af63218839d3fae0a48d9f->enter($__internal_f12acbcc7d4782e52db60b19b7d86327b262341306af63218839d3fae0a48d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f12acbcc7d4782e52db60b19b7d86327b262341306af63218839d3fae0a48d9f->leave($__internal_f12acbcc7d4782e52db60b19b7d86327b262341306af63218839d3fae0a48d9f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
