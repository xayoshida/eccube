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

/* __string_template__72c1a561f4f0d619c12f664639db54868c430ebdd4433d76995e7c3e511e07b2 */
class __TwigTemplate_7889f4902c661204573647e315d8e38593523454d91fdf6e379e58ced12fe13b extends \Twig\Template
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
        // line 1
        echo "<h3>Hello ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " !</h3>

";
    }

    public function getTemplateName()
    {
        return "__string_template__72c1a561f4f0d619c12f664639db54868c430ebdd4433d76995e7c3e511e07b2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__72c1a561f4f0d619c12f664639db54868c430ebdd4433d76995e7c3e511e07b2", "");
    }
}
