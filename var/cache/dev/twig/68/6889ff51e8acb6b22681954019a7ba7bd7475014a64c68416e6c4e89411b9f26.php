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

/* __string_template__66fda449e587d7e4e38d974ad5eb61d4df28dbc37c7f69e3cb7ddc9eba6f5e07 */
class __TwigTemplate_179dcf16fc9936b7599e4887574afeb3923bf477e85a57545992ba4e97399015 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__66fda449e587d7e4e38d974ad5eb61d4df28dbc37c7f69e3cb7ddc9eba6f5e07"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__66fda449e587d7e4e38d974ad5eb61d4df28dbc37c7f69e3cb7ddc9eba6f5e07"));

        // line 11
        echo "<div class=\"ec-headerRole\">
    <div class=\"ec-headerRole__title\">
        <div class=\"ec-headerTitle\">
            <div class=\"ec-headerTitle__title\">
                <h1>
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\">
                        ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 17, $this->source); })()), "shop_name", []), "html", null, true);
        echo "
                    </a>
                </h1>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__66fda449e587d7e4e38d974ad5eb61d4df28dbc37c7f69e3cb7ddc9eba6f5e07";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  48 => 16,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
<div class=\"ec-headerRole\">
    <div class=\"ec-headerRole__title\">
        <div class=\"ec-headerTitle\">
            <div class=\"ec-headerTitle__title\">
                <h1>
                    <a href=\"{{ url('homepage') }}\">
                        {{ BaseInfo.shop_name }}
                    </a>
                </h1>
            </div>
        </div>
    </div>
</div>
", "__string_template__66fda449e587d7e4e38d974ad5eb61d4df28dbc37c7f69e3cb7ddc9eba6f5e07", "");
    }
}
