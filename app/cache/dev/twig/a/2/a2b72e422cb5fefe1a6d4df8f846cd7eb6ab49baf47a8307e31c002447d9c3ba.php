<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_a2b72e422cb5fefe1a6d4df8f846cd7eb6ab49baf47a8307e31c002447d9c3ba extends Twig_Template
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
        $__internal_dc1fd7a3314a499414d7ad08f13ea0316abd41b3acc145add7d62080881af2b9 = $this->env->getExtension("native_profiler");
        $__internal_dc1fd7a3314a499414d7ad08f13ea0316abd41b3acc145add7d62080881af2b9->enter($__internal_dc1fd7a3314a499414d7ad08f13ea0316abd41b3acc145add7d62080881af2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        // line 2
        echo "
<html>
  <body>
    Hello ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
  </body>
</html>";
        
        $__internal_dc1fd7a3314a499414d7ad08f13ea0316abd41b3acc145add7d62080881af2b9->leave($__internal_dc1fd7a3314a499414d7ad08f13ea0316abd41b3acc145add7d62080881af2b9_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  22 => 2,);
    }
}
