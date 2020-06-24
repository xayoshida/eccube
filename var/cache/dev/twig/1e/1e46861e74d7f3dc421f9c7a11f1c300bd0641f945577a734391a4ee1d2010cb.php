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

/* Block/login.twig */
class __TwigTemplate_e466b76de12cae0dad776c47efbec5c32eb74f8c84200ad32e89a6cc76d6a747 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/login.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/login.twig"));

        // line 11
        echo "
<div class=\"ec-headerNav\">
    ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 14
            echo "        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage");
            echo "\">
                <i class=\"ec-headerNav__itemIcon fas fa-user fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
            echo "</span>
            </a>
        </div>
        ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 20, $this->source); })()), "option_favorite_product", [])) {
                // line 21
                echo "            <div class=\"ec-headerNav__item\">
                <a href=\"";
                // line 22
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite");
                echo "\">
                    <i class=\"ec-headerNav__itemIcon fas fa-heart fa-fw\"></i>
                    <span class=\"ec-headerNav__itemLink\">";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り"), "html", null, true);
                echo "</span>
                </a>
            </div>
        ";
            }
            // line 28
            echo "        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
            echo "\">
                <i class=\"ec-headerNav__itemIcon fas fa-lock fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログアウト"), "html", null, true);
            echo "</span>
            </a>
        </div>
    ";
        } else {
            // line 35
            echo "        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("entry");
            echo "\">
                <i class=\"ec-headerNav__itemIcon fas fa-user fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録"), "html", null, true);
            echo "</span>
            </a>
        </div>
        ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 41, $this->source); })()), "option_favorite_product", [])) {
                // line 42
                echo "            <div class=\"ec-headerNav__item\">
                <a href=\"";
                // line 43
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite");
                echo "\">
                    <i class=\"ec-headerNav__itemIcon fas fa-heart fa-fw\"></i>
                    <span class=\"ec-headerNav__itemLink\">";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り"), "html", null, true);
                echo "</span>
                </a>
            </div>
        ";
            }
            // line 49
            echo "        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_login");
            echo "\">
                <i class=\"ec-headerNav__itemIcon fas fa-lock fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン"), "html", null, true);
            echo "</span>
            </a>
        </div>
    ";
        }
        // line 56
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Block/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 56,  132 => 52,  127 => 50,  124 => 49,  117 => 45,  112 => 43,  109 => 42,  107 => 41,  101 => 38,  96 => 36,  93 => 35,  86 => 31,  81 => 29,  78 => 28,  71 => 24,  66 => 22,  63 => 21,  61 => 20,  55 => 17,  50 => 15,  47 => 14,  45 => 13,  41 => 11,);
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

<div class=\"ec-headerNav\">
    {% if is_granted('ROLE_USER') %}
        <div class=\"ec-headerNav__item\">
            <a href=\"{{ url('mypage') }}\">
                <i class=\"ec-headerNav__itemIcon fas fa-user fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">{{ 'マイページ'|trans }}</span>
            </a>
        </div>
        {% if BaseInfo.option_favorite_product %}
            <div class=\"ec-headerNav__item\">
                <a href=\"{{ url('mypage_favorite') }}\">
                    <i class=\"ec-headerNav__itemIcon fas fa-heart fa-fw\"></i>
                    <span class=\"ec-headerNav__itemLink\">{{ 'お気に入り'|trans }}</span>
                </a>
            </div>
        {% endif %}
        <div class=\"ec-headerNav__item\">
            <a href=\"{{ url('logout') }}\">
                <i class=\"ec-headerNav__itemIcon fas fa-lock fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">{{ 'ログアウト'|trans }}</span>
            </a>
        </div>
    {% else %}
        <div class=\"ec-headerNav__item\">
            <a href=\"{{ url('entry') }}\">
                <i class=\"ec-headerNav__itemIcon fas fa-user fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">{{ '新規会員登録'|trans }}</span>
            </a>
        </div>
        {% if BaseInfo.option_favorite_product %}
            <div class=\"ec-headerNav__item\">
                <a href=\"{{ url('mypage_favorite') }}\">
                    <i class=\"ec-headerNav__itemIcon fas fa-heart fa-fw\"></i>
                    <span class=\"ec-headerNav__itemLink\">{{ 'お気に入り'|trans }}</span>
                </a>
            </div>
        {% endif %}
        <div class=\"ec-headerNav__item\">
            <a href=\"{{ url('mypage_login') }}\">
                <i class=\"ec-headerNav__itemIcon fas fa-lock fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">{{ 'ログイン'|trans }}</span>
            </a>
        </div>
    {% endif %}
</div>
", "Block/login.twig", "/Users/xearts/ayoshida/eccube-4.0.3/src/Eccube/Resource/template/default/Block/login.twig");
    }
}
