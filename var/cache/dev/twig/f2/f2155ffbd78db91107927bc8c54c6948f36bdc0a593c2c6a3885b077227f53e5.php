<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @WebProfiler/Icon/twig.svg */
class __TwigTemplate_b96e274cbc054ad32689ef961d56fc4cccd5838baf71c2cadbdd23d6f134e796 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/twig.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/twig.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M20.1 1H3.9A2.9 2.9 0 0 0 1 3.9v16.3C1 21.7 2.3 23 3.9 23h16.3c1.6 0 2.9-1.3 2.9-2.9V3.9a3 3 0 0 0-3-2.9zm.9 19.1c0 .5-.4.9-.9.9H3.9a.9.9 0 0 1-.9-.9V3.9c0-.5.4-.9.9-.9h16.3c.4 0 .8.4.8.9v16.2zM5 5h14v3H5V5zm0 5h3v9H5v-9zm5 0h9v9h-9v-9z\"/></svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/twig.svg";
    }

    public function getDebugInfo()
    {
        return array (  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M20.1 1H3.9A2.9 2.9 0 0 0 1 3.9v16.3C1 21.7 2.3 23 3.9 23h16.3c1.6 0 2.9-1.3 2.9-2.9V3.9a3 3 0 0 0-3-2.9zm.9 19.1c0 .5-.4.9-.9.9H3.9a.9.9 0 0 1-.9-.9V3.9c0-.5.4-.9.9-.9h16.3c.4 0 .8.4.8.9v16.2zM5 5h14v3H5V5zm0 5h3v9H5v-9zm5 0h9v9h-9v-9z\"/></svg>
", "@WebProfiler/Icon/twig.svg", "/Users/xearts/ayoshida/eccube-4.0.3/vendor/symfony/web-profiler-bundle/Resources/views/Icon/twig.svg");
    }
}
