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

/* @admin/Store/plugin_detail_modal.twig */
class __TwigTemplate_a983ead626ba325b62d0c07c03a05d832bf46cea4cd73bd8484bc665607b5518 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_detail_modal.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_detail_modal.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"searchPluginModal-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })()), "id", []), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchPluginModal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title font-weight-bold\" id=\"exampleModalLabel\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.modal.header"), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"row mb-5\">
                    <div class=\"col-6\">
                        <img class=\"w-100 img-responsive\"
                             src=\"";
        // line 14
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", []), $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "name", []), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-6\">
                        <h5 class=\"font-weight-bold mb-3\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "name", []), "html", null, true);
        echo "</h5>
                        <p>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "short_description", []), "html", null, true);
        echo "</p>
                        <p class=\"plg-prices text-danger\"><span class=\"font-weight-bold text-dark\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.price"), "html", null, true);
        echo " </span> ";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "price", [])), "html", null, true);
        echo "<small> (";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
        echo ")</small></p>
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col-7\">
                        ";
        // line 24
        echo twig_include($this->env, $context, "@admin/Store/plugin_detail_info.twig");
        echo "
                    </div>
                    <div class=\"col-5 text-right\">
                        ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "contact_url", [])) {
            // line 28
            echo "                        <a class=\"btn btn-ec-regular btn-lg mb-3\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 28, $this->source); })()), "contact_url", []), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-image fa-lg text-secondary\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.modal.contact"), "html", null, true);
            echo "</a>{ }}
                        ";
        }
        // line 30
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "manual_url", [])) {
            // line 31
            echo "                        <a class=\"btn btn-ec-regular btn-lg\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "manual_url", []), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-image fa-lg text-secondary\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.modal.manual"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 33
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        ";
        // line 37
        $context["version_check"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "version_check", []);
        // line 38
        echo "                        ";
        if (((isset($context["version_check"]) || array_key_exists("version_check", $context) ? $context["version_check"] : (function () { throw new RuntimeError('Variable "version_check" does not exist.', 38, $this->source); })()) == 0)) {
            // line 39
            echo "                        <div class=\"alert alert-danger border border-danger\">
                                <p class=\"text-danger mb-1\">";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.modal.note", ["%version%" => twig_constant("Eccube\\Common\\Constant::VERSION")]), "html", null, true);
            echo "</p>
                        </div>
                        ";
        }
        // line 43
        echo "                    </div>
                </div>
                <hr>
                <div class=\"row mt-4\">
                    <div class=\"col-12\">
                        ";
        // line 48
        echo twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "long_description", []);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <form action=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 53, $this->source); })()), "eccube_owners_store_url", []), "html", null, true);
        echo "/gateway/purchase/?product_id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 53, $this->source); })()), "id", []), "html", null, true);
        echo "\" method=\"post\" target=\"_blank\">
                <button type=\"button\" class=\"btn btn-ec-sub\" data-dismiss=\"modal\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.modal.cancel"), "html", null, true);
        echo "</button>
                ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 55, $this->source); })()), "update_status", []) == 1)) {
            // line 56
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                        ";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.install.free"), "html", null, true);
            echo "
                    </a>
                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 59
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), "update_status", []) == 2)) {
            // line 60
            echo "                    <a href=\"#\" class=\"btn btn-ec-regular\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.installed"), "html", null, true);
            echo "</a>
                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 61
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 61, $this->source); })()), "update_status", []) == 3)) {
            // line 62
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 62, $this->source); })()), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                        ";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.update"), "html", null, true);
            echo "
                    </a>
                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 65
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "update_status", []) == 4)) {
            // line 66
            echo "                    <input type=\"hidden\" name=\"mode\" value=\"link_site\" />
                    <input type=\"hidden\" name=\"public_key\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 67, $this->source); })()), "authentication_key", []), "html", null, true);
            echo "\" />
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.install.fee"), "html", null, true);
            echo "\" />
                ";
        }
        // line 70
        echo "                </form>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_detail_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 70,  201 => 68,  197 => 67,  194 => 66,  192 => 65,  187 => 63,  182 => 62,  180 => 61,  175 => 60,  173 => 59,  168 => 57,  163 => 56,  161 => 55,  157 => 54,  151 => 53,  143 => 48,  136 => 43,  130 => 40,  127 => 39,  124 => 38,  122 => 37,  116 => 33,  108 => 31,  105 => 30,  97 => 28,  95 => 27,  89 => 24,  77 => 19,  73 => 18,  69 => 17,  61 => 14,  49 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"searchPluginModal-{{ item.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchPluginModal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title font-weight-bold\" id=\"exampleModalLabel\">{{ 'admin.store.plugin_owners_search.modal.header'|trans }}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"row mb-5\">
                    <div class=\"col-6\">
                        <img class=\"w-100 img-responsive\"
                             src=\"{{ item.image|default(asset('noimage_plugin_list.png', 'save_image')) }}\" alt=\"{{ item.name }}\">
                    </div>
                    <div class=\"col-6\">
                        <h5 class=\"font-weight-bold mb-3\">{{ item.name }}</h5>
                        <p>{{ item.short_description }}</p>
                        <p class=\"plg-prices text-danger\"><span class=\"font-weight-bold text-dark\">{{ 'admin.store.plugin.price'|trans }} </span> {{ item.price|price }}<small> ({{ 'common.tax_include'|trans }})</small></p>
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col-7\">
                        {{ include('@admin/Store/plugin_detail_info.twig') }}
                    </div>
                    <div class=\"col-5 text-right\">
                        {% if item.contact_url %}
                        <a class=\"btn btn-ec-regular btn-lg mb-3\" href=\"{{ item.contact_url }}\" target=\"_blank\"><i class=\"fa fa-image fa-lg text-secondary\"></i> {{ 'admin.store.plugin_owners_search.modal.contact'|trans }}</a>{ }}
                        {% endif %}
                        {% if item.manual_url %}
                        <a class=\"btn btn-ec-regular btn-lg\" href=\"{{ item.manual_url }}\" target=\"_blank\"><i class=\"fa fa-image fa-lg text-secondary\"></i> {{ 'admin.store.plugin_owners_search.modal.manual'|trans }}</a>
                        {% endif %}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        {% set version_check = item.version_check  %}
                        {% if version_check == 0 %}
                        <div class=\"alert alert-danger border border-danger\">
                                <p class=\"text-danger mb-1\">{{ 'admin.store.plugin_owners_search.modal.note'|trans({\"%version%\": constant('Eccube\\\\Common\\\\Constant::VERSION') }) }}</p>
                        </div>
                        {% endif %}
                    </div>
                </div>
                <hr>
                <div class=\"row mt-4\">
                    <div class=\"col-12\">
                        {{ item.long_description|raw }}
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <form action=\"{{ eccube_config.eccube_owners_store_url }}/gateway/purchase/?product_id={{ item.id }}\" method=\"post\" target=\"_blank\">
                <button type=\"button\" class=\"btn btn-ec-sub\" data-dismiss=\"modal\">{{ 'admin.store.plugin_owners_search.modal.cancel'|trans }}</button>
                {% if item.update_status == 1 %}
                    <a href=\"{{ url('admin_store_plugin_install_confirm', {'id': item.id}) }}\" class=\"btn btn-primary\">
                        {{ 'admin.store.plugin_owners_search.install.free'|trans }}
                    </a>
                {% elseif item.update_status == 2 %}
                    <a href=\"#\" class=\"btn btn-ec-regular\">{{ 'admin.store.plugin.installed'|trans }}</a>
                {% elseif item.update_status == 3 %}
                    <a href=\"{{ url('admin_store_plugin_install_confirm', {'id': item.id}) }}\" class=\"btn btn-primary\">
                        {{ 'admin.store.plugin.update'|trans }}
                    </a>
                {% elseif item.update_status == 4 %}
                    <input type=\"hidden\" name=\"mode\" value=\"link_site\" />
                    <input type=\"hidden\" name=\"public_key\" value=\"{{ BaseInfo.authentication_key }}\" />
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'admin.store.plugin_owners_search.install.fee'|trans }}\" />
                {% endif %}
                </form>
            </div>
        </div>
    </div>
</div>", "@admin/Store/plugin_detail_modal.twig", "/Users/xearts/ayoshida/eccube-4.0.3/src/Eccube/Resource/template/admin/Store/plugin_detail_modal.twig");
    }
}
