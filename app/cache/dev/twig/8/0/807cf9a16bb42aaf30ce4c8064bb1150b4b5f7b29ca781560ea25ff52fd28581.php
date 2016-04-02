<?php

/* base.html.twig */
class __TwigTemplate_807cf9a16bb42aaf30ce4c8064bb1150b4b5f7b29ca781560ea25ff52fd28581 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6a1328c7f82a452f18c1f6674fc472dc3b2110e7fd277cfcf3258278e5db23b = $this->env->getExtension("native_profiler");
        $__internal_e6a1328c7f82a452f18c1f6674fc472dc3b2110e7fd277cfcf3258278e5db23b->enter($__internal_e6a1328c7f82a452f18c1f6674fc472dc3b2110e7fd277cfcf3258278e5db23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e6a1328c7f82a452f18c1f6674fc472dc3b2110e7fd277cfcf3258278e5db23b->leave($__internal_e6a1328c7f82a452f18c1f6674fc472dc3b2110e7fd277cfcf3258278e5db23b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_509c35bb6143a6e470a49941e9078a53cdb3f61ec50070ea4d05b6773071d676 = $this->env->getExtension("native_profiler");
        $__internal_509c35bb6143a6e470a49941e9078a53cdb3f61ec50070ea4d05b6773071d676->enter($__internal_509c35bb6143a6e470a49941e9078a53cdb3f61ec50070ea4d05b6773071d676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_509c35bb6143a6e470a49941e9078a53cdb3f61ec50070ea4d05b6773071d676->leave($__internal_509c35bb6143a6e470a49941e9078a53cdb3f61ec50070ea4d05b6773071d676_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3fddb8b09d54b6774ac3a83864d3926a7fdbfdea62e978708cf0aaffbf098831 = $this->env->getExtension("native_profiler");
        $__internal_3fddb8b09d54b6774ac3a83864d3926a7fdbfdea62e978708cf0aaffbf098831->enter($__internal_3fddb8b09d54b6774ac3a83864d3926a7fdbfdea62e978708cf0aaffbf098831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3fddb8b09d54b6774ac3a83864d3926a7fdbfdea62e978708cf0aaffbf098831->leave($__internal_3fddb8b09d54b6774ac3a83864d3926a7fdbfdea62e978708cf0aaffbf098831_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_35d37a38a9bb99ccb8255ea20ccf755468b6502f7430f7dd1e27e89f9b29258b = $this->env->getExtension("native_profiler");
        $__internal_35d37a38a9bb99ccb8255ea20ccf755468b6502f7430f7dd1e27e89f9b29258b->enter($__internal_35d37a38a9bb99ccb8255ea20ccf755468b6502f7430f7dd1e27e89f9b29258b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_35d37a38a9bb99ccb8255ea20ccf755468b6502f7430f7dd1e27e89f9b29258b->leave($__internal_35d37a38a9bb99ccb8255ea20ccf755468b6502f7430f7dd1e27e89f9b29258b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d53241006c32480ebc25a18b82634e27852e71ec1455d4141c4aaab370b5c2bf = $this->env->getExtension("native_profiler");
        $__internal_d53241006c32480ebc25a18b82634e27852e71ec1455d4141c4aaab370b5c2bf->enter($__internal_d53241006c32480ebc25a18b82634e27852e71ec1455d4141c4aaab370b5c2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d53241006c32480ebc25a18b82634e27852e71ec1455d4141c4aaab370b5c2bf->leave($__internal_d53241006c32480ebc25a18b82634e27852e71ec1455d4141c4aaab370b5c2bf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
