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

/* @admin/Store/plugin_detail_info.twig */
class __TwigTemplate_7e14ebdf3eb04152c3fe7f68459f6d590221bac4e3b84048c08561abdc1c62b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_detail_info.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_detail_info.twig"));

        // line 11
        echo "
<ul class=\"plugin-ver col-12\">
    ";
        // line 13
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "price", [])) {
            // line 14
            echo "    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.detail.download"), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "downloads", [])), "html", null, true);
            echo "</li>
    ";
        }
        // line 16
        echo "    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.detail.version"), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "version", []), "html", null, true);
        echo "</li>
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.detail.support"), "html", null, true);
        echo "</span>";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "supported_versions", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
            echo twig_escape_filter($this->env, $context["version"], "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", []) == false)) {
                echo ", ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</li>
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.detail.public_date"), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "publish_date", [])), "html", null, true);
        echo "</li>
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.detail.update_date"), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "update_date", [])), "html", null, true);
        echo "</li>
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.detail.license"), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "license", []), "html", null, true);
        echo "</li>
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.detail.develop"), "html", null, true);
        echo "</span>
        ";
        // line 22
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "author", []))) {
            // line 23
            echo "            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "author", []), "url", []))) {
                // line 24
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 24, $this->source); })()), "author", []), "url", []), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 24, $this->source); })()), "author", []), "name", []), "html", null, true);
                echo "</a>";
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 24, $this->source); })()), "author", []), "name", []), "html", null, true);
                echo "
            ";
            }
            // line 26
            echo "        ";
        }
        // line 27
        echo "    </li>
</ul>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_detail_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 27,  137 => 26,  126 => 24,  123 => 23,  121 => 22,  117 => 21,  111 => 20,  105 => 19,  99 => 18,  62 => 17,  55 => 16,  47 => 14,  45 => 13,  41 => 11,);
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

<ul class=\"plugin-ver col-12\">
    {% if not item.price %}
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">{{ 'admin.store.plugin.detail.download'|trans }}</span>{{ item.downloads|number_format }}</li>
    {% endif %}
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">{{ 'admin.store.plugin.detail.version'|trans }}</span>{{ item.version }}</li>
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">{{ 'admin.store.plugin.detail.support'|trans }}</span>{% for version in item.supported_versions %}{{ version }} {%- if loop.last == false%}, {% endif -%}{% endfor %}</li>
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">{{ 'admin.store.plugin.detail.public_date'|trans }}</span>{{ item.publish_date|date_day }}</li>
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">{{ 'admin.store.plugin.detail.update_date'|trans }}</span>{{ item.update_date|date_day }}</li>
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">{{ 'admin.store.plugin.detail.license'|trans }}</span>{{ item.license }}</li>
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">{{ 'admin.store.plugin.detail.develop'|trans }}</span>
        {% if item.author is not empty %}
            {% if item.author.url is not empty %}
                <a href=\"{{ item.author.url }}\" target=\"_blank\">{{ item.author.name }}</a>{% else %}{{ item.author.name }}
            {% endif %}
        {% endif %}
    </li>
</ul>", "@admin/Store/plugin_detail_info.twig", "/Users/xearts/ayoshida/eccube-4.0.3/src/Eccube/Resource/template/admin/Store/plugin_detail_info.twig");
    }
}
