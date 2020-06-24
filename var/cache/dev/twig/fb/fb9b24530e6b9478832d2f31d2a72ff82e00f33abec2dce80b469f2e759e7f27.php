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

/* @admin/alert.twig */
class __TwigTemplate_c5413771effc35ca013ae162630972c5ead893cd9a611fa6489d17dd7e5bf652 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/alert.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/alert.twig"));

        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "eccube.admin.info"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "    <div class=\"alert alert-primary alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-comment fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [0 => "eccube.admin.success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-check fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", [0 => "eccube.admin.danger"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 32
            echo "    <div class=\"alert alert-danger alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-warning fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "flashes", [0 => "eccube.admin.error"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 42
            echo "    <div class=\"alert alert-danger alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-warning fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "flashes", [0 => "eccube.admin.warning"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 52
            echo "    <div class=\"alert alert-warning alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-warning fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@admin/alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 54,  137 => 52,  133 => 51,  130 => 50,  118 => 44,  114 => 42,  110 => 41,  107 => 40,  95 => 34,  91 => 32,  87 => 31,  84 => 30,  72 => 24,  68 => 22,  64 => 21,  61 => 20,  49 => 14,  45 => 12,  41 => 11,);
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
{% for message in app.flashes('eccube.admin.info') %}
    <div class=\"alert alert-primary alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-comment fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">{{ message|trans }}</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
{% endfor %}

{% for message in app.flashes('eccube.admin.success') %}
    <div class=\"alert alert-success alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-check fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">{{ message|trans }}</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
{% endfor %}

{% for message in app.flashes('eccube.admin.danger') %}
    <div class=\"alert alert-danger alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-warning fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">{{ message|trans }}</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
{% endfor %}

{% for message in app.flashes('eccube.admin.error') %}
    <div class=\"alert alert-danger alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-warning fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">{{ message|trans }}</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
{% endfor %}

{% for message in app.flashes('eccube.admin.warning') %}
    <div class=\"alert alert-warning alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-warning fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">{{ message|trans }}</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
{% endfor %}
", "@admin/alert.twig", "/Users/xearts/ayoshida/eccube-4.0.3/src/Eccube/Resource/template/admin/alert.twig");
    }
}
