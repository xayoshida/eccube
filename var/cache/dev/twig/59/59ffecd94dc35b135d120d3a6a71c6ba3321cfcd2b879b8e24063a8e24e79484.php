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

/* @toolbar/eccube.html.twig */
class __TwigTemplate_38fc39574fb8da95d98c04aa26cb94dc1af11c8e61feea54844c0586692495f8 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@toolbar/eccube.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@toolbar/eccube.html.twig"));

        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "@toolbar/eccube.html.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 124.45 105.65\"><defs><style>.cls-1{fill:#353a4e;}.cls-2{fill:#fc0;}.cls-3{fill:#f2b50a;}</style></defs><title>eccube_logo_basic</title><path class=\"cls-1\" d=\"M106.81,15s6.63,49.2-37.4,62.22c-4.09,0-56.94,6.54-58.6-46.42V81.11L69.4,95,110.81,77V16.58Z\"/><path class=\"cls-2\" d=\"M110.81,63.42V77L69.4,95,10.81,81.11V65C4,69.18,0,74.22,0,79.65c0,14.36,27.86,26,62.22,26s62.22-11.64,62.22-26C124.45,73.51,119.33,67.86,110.81,63.42Z\"/><path class=\"cls-2\" d=\"M69.4,0,10.81,25C9,84.13,61.55,78.42,69.4,77.21Z\"/><path class=\"cls-3\" d=\"M106.81,15,69.4,0V77.21C115.22,65.84,106.81,15,106.81,15Z\"/></svg>
    <span class=\"sf-toolbar-value\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "version", []), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        echo "    ";
        ob_start();
        // line 19
        echo "    <script>
        // Minimize to toolbar
        Sfjs.setPreference('toolbar/displayState', 'none');
    </script>
    <style>
        .sf-toolbar-block .sf-toolbar-info-piece.sf-toolbar-plugins .sf-toolbar-status {
            display: block !important;
            float: left;
            margin-right: 4px !important;
            margin-left: 0 !important;
            margin-top: 4px;
        }
        .sf-toolbar-block .sf-toolbar-info-piece.sf-toolbar-plugins > b {
            vertical-align: middle;
        }
    </style>
    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
            <b>EC-CUBE</b>
            <span><a href=\"https://www.ec-cube.net\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "version", []), "html", null, true);
        echo "</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece sf-toolbar-plugins\">
            <b>Plugins</b>
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 42, $this->source); })()), "plugins", []));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 43
            echo "                <div class=\"sf-toolbar-status sf-toolbar-status-";
            echo ((twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [])) ? ("green") : ("red"));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", []), "html", null, true);
            echo "\">
                    ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "code", []), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>
    </div>
    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
            <b>Currency</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">
                <abbr title=\"Current ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 53, $this->source); })()), "currencyCode", []) == twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 53, $this->source); })()), "defaultCurrencyCode", []))) {
            echo "and default ";
        }
        echo "currency\">
                    ";
        // line 54
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "currencyCode", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "currencyCode", []), "Undefined")) : ("Undefined")), "html", null, true);
        echo "
                </abbr>
            </span>
            ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 57, $this->source); })()), "currencyCode", []) != twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 57, $this->source); })()), "defaultCurrencyCode", []))) {
            // line 58
            echo "                <span class=\"sf-toolbar-status\">
                    <abbr title=\"Default locale\">
                        ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 60, $this->source); })()), "defaultCurrencyCode", []), "html", null, true);
            echo "
                    </abbr>
                </span>
            ";
        }
        // line 64
        echo "        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Locale</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">
                <abbr title=\"Current ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "localeCode", []) == twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "defaultLocaleCode", []))) {
            echo "and default ";
        }
        echo "locale\">
                    ";
        // line 69
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "localeCode", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "localeCode", []), "Undefined")) : ("Undefined")), "html", null, true);
        echo "
                </abbr>
            </span>
            ";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 72, $this->source); })()), "localeCode", []) != twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 72, $this->source); })()), "defaultLocaleCode", []))) {
            // line 73
            echo "                <span class=\"sf-toolbar-status\">
                    <abbr title=\"Default locale\">
                        ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 75, $this->source); })()), "defaultLocaleCode", []), "html", null, true);
            echo "
                    </abbr>
                </span>
            ";
        }
        // line 79
        echo "        </div>
    </div>
    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
            <b>Resources</b>
            <span><a href=\"https://doc.ec-cube.net/\" rel=\"help\">EC-CUBE Documentation</a></span>
        </div>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        echo "
    ";
        // line 89
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@toolbar/eccube.html.twig", 89)->display(twig_array_merge($context, ["link" => false, "additional_classes" => "sf-toolbar-block-right"]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@toolbar/eccube.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 89,  202 => 88,  191 => 79,  184 => 75,  180 => 73,  178 => 72,  172 => 69,  166 => 68,  160 => 64,  153 => 60,  149 => 58,  147 => 57,  141 => 54,  135 => 53,  127 => 47,  118 => 44,  111 => 43,  107 => 42,  100 => 38,  79 => 19,  76 => 18,  71 => 16,  68 => 15,  65 => 14,  56 => 13,  34 => 11,);
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
{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 124.45 105.65\"><defs><style>.cls-1{fill:#353a4e;}.cls-2{fill:#fc0;}.cls-3{fill:#f2b50a;}</style></defs><title>eccube_logo_basic</title><path class=\"cls-1\" d=\"M106.81,15s6.63,49.2-37.4,62.22c-4.09,0-56.94,6.54-58.6-46.42V81.11L69.4,95,110.81,77V16.58Z\"/><path class=\"cls-2\" d=\"M110.81,63.42V77L69.4,95,10.81,81.11V65C4,69.18,0,74.22,0,79.65c0,14.36,27.86,26,62.22,26s62.22-11.64,62.22-26C124.45,73.51,119.33,67.86,110.81,63.42Z\"/><path class=\"cls-2\" d=\"M69.4,0,10.81,25C9,84.13,61.55,78.42,69.4,77.21Z\"/><path class=\"cls-3\" d=\"M106.81,15,69.4,0V77.21C115.22,65.84,106.81,15,106.81,15Z\"/></svg>
    <span class=\"sf-toolbar-value\">{{ collector.version }}</span>
    {% endset %}
    {% set text %}
    <script>
        // Minimize to toolbar
        Sfjs.setPreference('toolbar/displayState', 'none');
    </script>
    <style>
        .sf-toolbar-block .sf-toolbar-info-piece.sf-toolbar-plugins .sf-toolbar-status {
            display: block !important;
            float: left;
            margin-right: 4px !important;
            margin-left: 0 !important;
            margin-top: 4px;
        }
        .sf-toolbar-block .sf-toolbar-info-piece.sf-toolbar-plugins > b {
            vertical-align: middle;
        }
    </style>
    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
            <b>EC-CUBE</b>
            <span><a href=\"https://www.ec-cube.net\">{{ collector.version }}</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece sf-toolbar-plugins\">
            <b>Plugins</b>
            {% for plugin in collector.plugins %}
                <div class=\"sf-toolbar-status sf-toolbar-status-{{ plugin.enabled ? 'green' : 'red' }}\" title=\"{{ plugin.name }}\">
                    {{ plugin.code }}
                </div>
            {% endfor %}
        </div>
    </div>
    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
            <b>Currency</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">
                <abbr title=\"Current {% if collector.currencyCode == collector.defaultCurrencyCode %}and default {% endif %}currency\">
                    {{ collector.currencyCode|default('Undefined') }}
                </abbr>
            </span>
            {% if collector.currencyCode != collector.defaultCurrencyCode %}
                <span class=\"sf-toolbar-status\">
                    <abbr title=\"Default locale\">
                        {{ collector.defaultCurrencyCode }}
                    </abbr>
                </span>
            {% endif %}
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Locale</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">
                <abbr title=\"Current {% if collector.localeCode == collector.defaultLocaleCode %}and default {% endif %}locale\">
                    {{ collector.localeCode|default('Undefined') }}
                </abbr>
            </span>
            {% if collector.localeCode != collector.defaultLocaleCode %}
                <span class=\"sf-toolbar-status\">
                    <abbr title=\"Default locale\">
                        {{ collector.defaultLocaleCode }}
                    </abbr>
                </span>
            {% endif %}
        </div>
    </div>
    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
            <b>Resources</b>
            <span><a href=\"https://doc.ec-cube.net/\" rel=\"help\">EC-CUBE Documentation</a></span>
        </div>
    </div>
    {% endset %}

    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with {'link': false, additional_classes: 'sf-toolbar-block-right'} %}
{% endblock %}
", "@toolbar/eccube.html.twig", "/Users/xearts/ayoshida/eccube-4.0.3/src/Eccube/Resource/template/toolbar/eccube.html.twig");
    }
}
