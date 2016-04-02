<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_6e03186572934ca75e0aa71037d5490232e5bc650f71ca588303e59f44f84738 extends Twig_Template
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
        $__internal_c4d80b18042cd4f3086e57be05793f41c153d101a25dbfebe64e15ba895b9752 = $this->env->getExtension("native_profiler");
        $__internal_c4d80b18042cd4f3086e57be05793f41c153d101a25dbfebe64e15ba895b9752->enter($__internal_c4d80b18042cd4f3086e57be05793f41c153d101a25dbfebe64e15ba895b9752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
    </head>
    <body>
        <h1>Hello World !</h1>
        
        <p>
            Le Hello World est un grand classique en programmation.
            Il signifie énormément, car cela veut dire que vous avez
            réussi à exécuter le programme pour accomplir une tâche simple :
            afficher ce hello world !
        </p>
    </body>
</html>";
        
        $__internal_c4d80b18042cd4f3086e57be05793f41c153d101a25dbfebe64e15ba895b9752->leave($__internal_c4d80b18042cd4f3086e57be05793f41c153d101a25dbfebe64e15ba895b9752_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
