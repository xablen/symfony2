<?php

/* @WebProfiler/Profiler/base.html.twig */
class __TwigTemplate_bc99d17f73265278f31dd2d88cf305b622fdb15717c222f1a090f4844a545c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6dd54b5a70316399efdbbebde9bc5227352fb23772f9ee860ec0b21dcf777395 = $this->env->getExtension("native_profiler");
        $__internal_6dd54b5a70316399efdbbebde9bc5227352fb23772f9ee860ec0b21dcf777395->enter($__internal_6dd54b5a70316399efdbbebde9bc5227352fb23772f9ee860ec0b21dcf777395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"data:image/ico;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAABMLAAATCwAAAAAAAAAAAAAAAAAAAAAAADIvMQAyLzEIMi8xSzEuMKoyLzHkMi8x/TIvMf0yLzHlMi8xrDIvMU4yLzEJMi8xAAAAAAAAAAAAAAAAADIvMQAyLzEYMS4wkTMwMu45Njj/MS4w/zEuMP8yLzH/Mi8x/zIvMf8yLzHvMi8xlDIvMRkyLzEAAAAAADIvMQAyLzEXMS4wrTk2OPyVk5T7kI6P/nl3ef8+Oz3/MS4w/zIvMf8yLzH/Mi8x/zIvMf4yLzGxMi8xGjIvMQAyLzEGMi8xkDEuMP4/PD79wcDA+oB+gP6Ni4z/paOk/zk2OP8xLjD/Mi8x/zIvMf8yLzH/Mi8x/zIvMZQyLzEIMi8xSTIvMewyLzH/MS4w/z06PP81MjT+TktN/93c3f97eXv/MC0v/zIvMf8yLzH/Mi8x/zIvMf8yLzHuMi8xTzIvMaUyLzH/Mi8x/0lHSf9kYmP/XFpb/zs4Ov/DwsL+ycjI/zs4Ov8xLjD/Mi8x/zIvMf8yLzH/Mi8x/zIvMawyLzHfMC0v/1tYWv+opqf/YV5g/8bFxf96eHn+m5qb/u7u7v9WVFX/MC0v/zIvMf8yLzH/Mi8x/zIvMf8yLzHkMi8x+jAtL/9iYGH/mZiZ/2dlZv/p6On/oJ+g/np4ev/6+vr/dXN1/y0qLP8xLjD/Mi8x/zIvMf8yLzH/Mi8x/DIvMfoyLzH/MzAy/0A+QP7JyMj85eXl/1tYWv9XVVf/8fDx/6qpqv9ZV1j/Q0BC/zIvMf8yLzH/Mi8x/zIvMfwyLzHeMi8x/zEuMP8/PD762dnZ9JWTlP81MjT/ZmRm/+Dg4P/DwsP/YV5g/6Wkpf9BPkD/MS4w/zIvMf8yLzHjMi8xozIvMf8yLzH/Mi8x/nZ0dv2amJn4dXN0+V5bXf+Pjo//0tLS/0hFR/9vbG7/Ozg6/zEuMP8yLzH/Mi8xqTIvMUcyLzHrMi8x/zIvMf8xLjD/Ozg6/Do3OfwwLS//REFD/728vP9nZWb/TktN/4mIif05Nzn/Mi8x7jMwMkwyLzEGMi8xjDIvMf4yLzH/Mi8x/zIvMf8yLzH/Mi8x/zAtL/9XVFb/goGC+Hx6e+6qqanwOzg6/DMwMpJDQEIIMi8xADIvMRUyLzGrMi8x/jIvMf8yLzH/Mi8x/zIvMf8yLzH/MS4w/zg2N/xBPkD3OTY4/DIvMa8yLzEYMi8xAAAAAAAyLzEAMi8xGDIvMY0yLzHqMi8x/zIvMf8yLzH/Mi8x/zIvMf8yLzH/MS4w7DEuMJEyLzEaMi8xAAAAAAAAAAAAAAAAADIvMQAyLzEGMi8xQzIvMZ4yLzHdMi8x+jIvMfoyLzHeMi8xoDIvMUUyLzEGMi8xAAAAAAAAAAAA4AcAAMADAACAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIABAADAAwAA4AcAAA==\">
        <style>
            ";
        // line 9
        $this->loadTemplate("@WebProfiler/Profiler/body.css.twig", "@WebProfiler/Profiler/base.html.twig", 9)->display($context);
        // line 10
        echo "        </style>
        ";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 16
        echo "        <style>
            ";
        // line 17
        $this->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig", "@WebProfiler/Profiler/base.html.twig", 17)->display(array_merge($context, array("position" => "top", "floatable" => false)));
        // line 18
        echo "        </style>
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_6dd54b5a70316399efdbbebde9bc5227352fb23772f9ee860ec0b21dcf777395->leave($__internal_6dd54b5a70316399efdbbebde9bc5227352fb23772f9ee860ec0b21dcf777395_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_077264cb792243ed09f3ae142f538198d5600e213c78f50ee9b89f404134b29f = $this->env->getExtension("native_profiler");
        $__internal_077264cb792243ed09f3ae142f538198d5600e213c78f50ee9b89f404134b29f->enter($__internal_077264cb792243ed09f3ae142f538198d5600e213c78f50ee9b89f404134b29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Profiler";
        
        $__internal_077264cb792243ed09f3ae142f538198d5600e213c78f50ee9b89f404134b29f->leave($__internal_077264cb792243ed09f3ae142f538198d5600e213c78f50ee9b89f404134b29f_prof);

    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe36ea83c0f61fe3c8bcc9ece33ee01c29889d3e179b663e157539e62db2c4b5 = $this->env->getExtension("native_profiler");
        $__internal_fe36ea83c0f61fe3c8bcc9ece33ee01c29889d3e179b663e157539e62db2c4b5->enter($__internal_fe36ea83c0f61fe3c8bcc9ece33ee01c29889d3e179b663e157539e62db2c4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 12
        echo "            <style>
                ";
        // line 13
        $this->loadTemplate("@WebProfiler/Profiler/profiler.css.twig", "@WebProfiler/Profiler/base.html.twig", 13)->display($context);
        // line 14
        echo "            </style>
        ";
        
        $__internal_fe36ea83c0f61fe3c8bcc9ece33ee01c29889d3e179b663e157539e62db2c4b5->leave($__internal_fe36ea83c0f61fe3c8bcc9ece33ee01c29889d3e179b663e157539e62db2c4b5_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_9153e7c255e38e6d9041bda8a83444c0d9dcf4c3f23bd5d302813f0beb714f57 = $this->env->getExtension("native_profiler");
        $__internal_9153e7c255e38e6d9041bda8a83444c0d9dcf4c3f23bd5d302813f0beb714f57->enter($__internal_9153e7c255e38e6d9041bda8a83444c0d9dcf4c3f23bd5d302813f0beb714f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_9153e7c255e38e6d9041bda8a83444c0d9dcf4c3f23bd5d302813f0beb714f57->leave($__internal_9153e7c255e38e6d9041bda8a83444c0d9dcf4c3f23bd5d302813f0beb714f57_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 21,  92 => 14,  90 => 13,  87 => 12,  81 => 11,  69 => 6,  60 => 22,  58 => 21,  53 => 18,  51 => 17,  48 => 16,  46 => 11,  43 => 10,  41 => 9,  35 => 6,  30 => 4,  25 => 1,);
    }
}
