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

/* @MobileDetect/Collector/device.html.twig */
class __TwigTemplate_f92c587c634133a2713846356e46d68d2c30b406a2410196516a0a3e8e31ebbe extends \Twig\Template
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
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MobileDetect/Collector/device.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MobileDetect/Collector/device.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@MobileDetect/Collector/device.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "
    ";
        // line 5
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 5, $this->source); })()), 1)) : (1));
        // line 6
        echo "    ";
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 6, $this->source); })()) > 1)) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 100 100\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
                    <path fill=\"#AAAAAA\"
                          d=\"m33.975 95h32.05c5.565 0 10.08-4.279 10.08-9.569v-70.855c0-5.285-4.513-9.576-10.07-9.576h-32.05c-5.564 0-10.08 4.291-10.08 9.576v70.854c0 5.288 4.513 9.57 10.08 9.57m16.03-3.257c-2.493 0-4.506-2.02-4.506-4.498 0-2.489 2.01-4.502 4.506-4.502 2.487 0 4.494 2.01 4.494 4.502 0 2.481-2.01 4.498-4.494 4.498m-6.868-80.911h13.727c.556 0 1.01.383 1.01.852 0 .471-.452.854-1.01.854h-13.727c-.55 0-1.01-.383-1.01-.854-.0001-.469.454-.852 1.01-.852m-15.289 10.798c0-.794.675-1.438 1.508-1.438h41.29c.835 0 1.507.641 1.507 1.438v56.49c0 .791-.672 1.433-1.507 1.433h-41.29c-.833 0-1.508-.642-1.508-1.433v-56.49\"/>
                </svg>
            <span class=\"sf-toolbar-value\">View: ";
            // line 12
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 12, $this->source); })()), "currentView", [])), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 14
            echo "        ";
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Device Detector</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <span>Switch view:</span>
            </div>
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "views", []));
            foreach ($context['_seq'] as $context["_key"] => $context["viewData"]) {
                // line 22
                echo "                ";
                $context["viewLink"] = "";
                // line 23
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["viewData"], "isCurrent", [])) {
                    // line 24
                    echo "                    ";
                    $context["viewLink"] = "<span class=\"sf-toolbar-status sf-toolbar-status-green\">current</span>";
                    // line 25
                    echo "                ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["viewData"], "enabled", []) == false)) {
                    // line 26
                    echo "                    ";
                    $context["viewLink"] = "External";
                    // line 27
                    echo "                ";
                } else {
                    // line 28
                    echo "                    ";
                    $context["viewLink"] = (("<span><a href=\"" . twig_get_attribute($this->env, $this->source, $context["viewData"], "link", [])) . "\">Use this view</a></span>");
                    // line 29
                    echo "                ";
                }
                // line 30
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["viewData"], "label", []), "html", null, true);
                echo "</b>
                    ";
                // line 32
                echo (isset($context["viewLink"]) || array_key_exists("viewLink", $context) ? $context["viewLink"] : (function () { throw new RuntimeError('Variable "viewLink" does not exist.', 32, $this->source); })());
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['viewData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 36
            echo "    ";
        } else {
            // line 37
            echo "        ";
            // line 38
            echo "        ";
            ob_start();
            // line 39
            echo "            <span>
            <img width=\"14\" height=\"28\" alt=\"Device\"
                 src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABbklEQVRYR+2XMUvDQBTH37ujS5Eu7QdwVNMuFhykDQEnB2NCJwcRHISCiyDiImRzcS9OuqpIW7+AMQ20g1tSdNVP4NYi7T1JcSo1NamQInfrvXf/3/1ueYeQ8MKE82H+AZY2zGzqk3YIIRfFFgL2CaDpO/WXsL5QA0E479MzMnwEpPcoACBgQTCxi4xXunbd/ak3FKBQNg4JcNVv1fcjhX8XK6q5h4J0321UYgHkVcMKGn2nYa3XPJsB2L8BGQItcsDrj5szICGsrvOgzQxQqnmWWy2MgKatUs0bBUoAaUAakAakAWlAGvhfBhIfSKYNIZP285qh/dlENClAKW+vIGIHGV/z7PvX8ZqZAQqqeUqCcr7bOJ4EUCxupftpfpAZpC7b7bveeI2i6jojrHqt5mbMmdBcFjC0EfgJMnqL8gwkRAaBnSPShffUvIoFEDQpmlnCAR0RE9koAIywBwxuw8KD8+b/axbl1nFqEzfwBYtWrTCbYUHuAAAAAElFTkSuQmCC\">
            View: ";
            // line 42
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 42, $this->source); })()), "currentView", [])), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            echo "        ";
            ob_start();
            // line 46
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Device Detector</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-device-detector-switcher\">
                    <thead>
                    <tr>
                        <th>View</th>
                        <th>Switch to...</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 58, $this->source); })()), "views", []));
            foreach ($context['_seq'] as $context["_key"] => $context["viewData"]) {
                // line 59
                echo "                        ";
                $context["viewLink"] = "";
                // line 60
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["viewData"], "isCurrent", [])) {
                    // line 61
                    echo "                            ";
                    $context["viewLink"] = "<em>current</em>";
                    // line 62
                    echo "                        ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["viewData"], "enabled", []) == false)) {
                    // line 63
                    echo "                            ";
                    $context["viewLink"] = "External";
                    // line 64
                    echo "                        ";
                } else {
                    // line 65
                    echo "                            ";
                    $context["viewLink"] = (("<a href=\"" . twig_get_attribute($this->env, $this->source, $context["viewData"], "link", [])) . "\">Use this view</a>");
                    // line 66
                    echo "                        ";
                }
                // line 67
                echo "                        <tr>
                            <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["viewData"], "label", []), "html", null, true);
                echo "</td>
                            <td>";
                // line 69
                echo (isset($context["viewLink"]) || array_key_exists("viewLink", $context) ? $context["viewLink"] : (function () { throw new RuntimeError('Variable "viewLink" does not exist.', 69, $this->source); })());
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['viewData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                    </tbody>
                </table>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            echo "        <style type=\"text/css\">
            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher {
                width: 100%;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher th,
            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher td {
                border-bottom: 1px solid #ddd;
                padding: 0 4px;
                color: #2f2f2f;
                background-color: #fff;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher th {
                background-color: #eee;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher a {
                color: #00f;
            }
        </style>
    ";
        }
        // line 98
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@MobileDetect/Collector/device.html.twig", 98)->display(twig_array_merge($context, ["link" => false]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MobileDetect/Collector/device.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 98,  231 => 76,  225 => 72,  216 => 69,  212 => 68,  209 => 67,  206 => 66,  203 => 65,  200 => 64,  197 => 63,  194 => 62,  191 => 61,  188 => 60,  185 => 59,  181 => 58,  167 => 46,  164 => 45,  158 => 42,  153 => 39,  150 => 38,  148 => 37,  145 => 36,  142 => 35,  133 => 32,  129 => 31,  126 => 30,  123 => 29,  120 => 28,  117 => 27,  114 => 26,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  98 => 21,  90 => 15,  87 => 14,  82 => 12,  76 => 8,  73 => 7,  70 => 6,  68 => 5,  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}

    {% set profiler_markup_version = profiler_markup_version|default(1) %}
    {% if profiler_markup_version > 1 %}
        {% set icon %}
            <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 100 100\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
                    <path fill=\"#AAAAAA\"
                          d=\"m33.975 95h32.05c5.565 0 10.08-4.279 10.08-9.569v-70.855c0-5.285-4.513-9.576-10.07-9.576h-32.05c-5.564 0-10.08 4.291-10.08 9.576v70.854c0 5.288 4.513 9.57 10.08 9.57m16.03-3.257c-2.493 0-4.506-2.02-4.506-4.498 0-2.489 2.01-4.502 4.506-4.502 2.487 0 4.494 2.01 4.494 4.502 0 2.481-2.01 4.498-4.494 4.498m-6.868-80.911h13.727c.556 0 1.01.383 1.01.852 0 .471-.452.854-1.01.854h-13.727c-.55 0-1.01-.383-1.01-.854-.0001-.469.454-.852 1.01-.852m-15.289 10.798c0-.794.675-1.438 1.508-1.438h41.29c.835 0 1.507.641 1.507 1.438v56.49c0 .791-.672 1.433-1.507 1.433h-41.29c-.833 0-1.508-.642-1.508-1.433v-56.49\"/>
                </svg>
            <span class=\"sf-toolbar-value\">View: {{ collector.currentView | capitalize }}</span>
        {% endset %}
        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Device Detector</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <span>Switch view:</span>
            </div>
            {% for viewData in collector.views %}
                {% set viewLink = '' %}
                {% if viewData.isCurrent %}
                    {% set viewLink = '<span class=\"sf-toolbar-status sf-toolbar-status-green\">current</span>' %}
                {% elseif viewData.enabled == false %}
                    {%  set viewLink = 'External' %}
                {% else %}
                    {%  set viewLink = '<span><a href=\"' ~ viewData.link ~ '\">Use this view</a></span>' %}
                {% endif %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ viewData.label }}</b>
                    {{ viewLink | raw }}
                </div>
            {% endfor %}
        {% endset %}
    {% else %}
        {# Fallback version for symfony versions < 2.8 #}
        {% set icon %}
            <span>
            <img width=\"14\" height=\"28\" alt=\"Device\"
                 src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABbklEQVRYR+2XMUvDQBTH37ujS5Eu7QdwVNMuFhykDQEnB2NCJwcRHISCiyDiImRzcS9OuqpIW7+AMQ20g1tSdNVP4NYi7T1JcSo1NamQInfrvXf/3/1ueYeQ8MKE82H+AZY2zGzqk3YIIRfFFgL2CaDpO/WXsL5QA0E479MzMnwEpPcoACBgQTCxi4xXunbd/ak3FKBQNg4JcNVv1fcjhX8XK6q5h4J0321UYgHkVcMKGn2nYa3XPJsB2L8BGQItcsDrj5szICGsrvOgzQxQqnmWWy2MgKatUs0bBUoAaUAakAakAWlAGvhfBhIfSKYNIZP285qh/dlENClAKW+vIGIHGV/z7PvX8ZqZAQqqeUqCcr7bOJ4EUCxupftpfpAZpC7b7bveeI2i6jojrHqt5mbMmdBcFjC0EfgJMnqL8gwkRAaBnSPShffUvIoFEDQpmlnCAR0RE9koAIywBwxuw8KD8+b/axbl1nFqEzfwBYtWrTCbYUHuAAAAAElFTkSuQmCC\">
            View: {{ collector.currentView | capitalize }}
            </span>
        {% endset %}
        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Device Detector</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-device-detector-switcher\">
                    <thead>
                    <tr>
                        <th>View</th>
                        <th>Switch to...</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for viewData in collector.views %}
                        {% set viewLink = '' %}
                        {% if viewData.isCurrent %}
                            {% set viewLink = '<em>current</em>' %}
                        {% elseif viewData.enabled == false %}
                            {%  set viewLink = 'External' %}
                        {% else %}
                            {%  set viewLink = '<a href=\"' ~ viewData.link ~ '\">Use this view</a>' %}
                        {% endif %}
                        <tr>
                            <td>{{ viewData.label }}</td>
                            <td>{{ viewLink | raw }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endset %}
        <style type=\"text/css\">
            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher {
                width: 100%;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher th,
            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher td {
                border-bottom: 1px solid #ddd;
                padding: 0 4px;
                color: #2f2f2f;
                background-color: #fff;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher th {
                background-color: #eee;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher a {
                color: #00f;
            }
        </style>
    {% endif %}
    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': false } %}
{% endblock %}
", "@MobileDetect/Collector/device.html.twig", "/Users/xearts/ayoshida/eccube-4.0.3/vendor/suncat/mobile-detect-bundle/SunCat/MobileDetectBundle/Resources/views/Collector/device.html.twig");
    }
}
