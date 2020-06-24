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

/* default_frame.twig */
class __TwigTemplate_e52c3eeba56648ff42b5bd7ad05be286b231ae47b8b747a24af99e35aa7df97c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'main' => [$this, 'block_main'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_frame.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_frame.twig"));

        // line 1
        echo "<!doctype html>
";
        // line 12
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 12, $this->source); })()), "locale", []), "html", null, true);
        echo "\">
<head prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"eccube-csrf-token\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
        echo "\">
    <title>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 17, $this->source); })()), "shop_name", []), "html", null, true);
        if (((isset($context["subtitle"]) || array_key_exists("subtitle", $context)) &&  !twig_test_empty((isset($context["subtitle"]) || array_key_exists("subtitle", $context) ? $context["subtitle"] : (function () { throw new RuntimeError('Variable "subtitle" does not exist.', 17, $this->source); })())))) {
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["subtitle"]) || array_key_exists("subtitle", $context) ? $context["subtitle"] : (function () { throw new RuntimeError('Variable "subtitle" does not exist.', 17, $this->source); })()), "html", null, true);
        } elseif (((isset($context["title"]) || array_key_exists("title", $context)) &&  !twig_test_empty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 17, $this->source); })())))) {
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 17, $this->source); })()), "html", null, true);
        }
        echo "</title>
    ";
        // line 18
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 18, $this->source); })()), "author", []))) {
            // line 19
            echo "        <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 19, $this->source); })()), "author", []), "html", null, true);
            echo "\">
    ";
        }
        // line 21
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 21, $this->source); })()), "description", []))) {
            // line 22
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 22, $this->source); })()), "description", []), "html", null, true);
            echo "\">
    ";
        }
        // line 24
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 24, $this->source); })()), "keyword", []))) {
            // line 25
            echo "        <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 25, $this->source); })()), "keyword", []), "html", null, true);
            echo "\">
    ";
        }
        // line 27
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 27, $this->source); })()), "meta_robots", []))) {
            // line 28
            echo "        <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 28, $this->source); })()), "meta_robots", []), "html", null, true);
            echo "\">
    ";
        }
        // line 30
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 30, $this->source); })()), "meta_tags", []))) {
            // line 31
            echo "        ";
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 31, $this->source); })()), "meta_tags", [])));
            echo "
    ";
        }
        // line 33
        echo "    <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/common/favicon.ico", "user_data"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    ";
        // line 38
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 39
        echo "    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
    <script>
        \$(function() {
            \$.ajaxSetup({
                'headers': {
                    'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content')
                }
            });
        });
    </script>
    ";
        // line 50
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 50, $this->source); })()), "Head", [])) {
            // line 51
            echo "        ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 51, $this->source); })()), "Head", [])]);
            echo "
    ";
        }
        // line 53
        echo "    ";
        // line 54
        echo "    ";
        if ((isset($context["plugin_assets"]) || array_key_exists("plugin_assets", $context))) {
            echo twig_include($this->env, $context, "@admin/snippet.twig", ["snippets" => (isset($context["plugin_assets"]) || array_key_exists("plugin_assets", $context) ? $context["plugin_assets"] : (function () { throw new RuntimeError('Variable "plugin_assets" does not exist.', 54, $this->source); })())]);
        }
        // line 55
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/customize.css", "user_data"), "html", null, true);
        echo "\">
</head>
<body id=\"page_";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", []), "get", [0 => "_route"], "method"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (((isset($context["body_class"]) || array_key_exists("body_class", $context))) ? (_twig_default_filter((isset($context["body_class"]) || array_key_exists("body_class", $context) ? $context["body_class"] : (function () { throw new RuntimeError('Variable "body_class" does not exist.', 57, $this->source); })()), "other_page")) : ("other_page")), "html", null, true);
        echo "\">
";
        // line 59
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 59, $this->source); })()), "BodyAfter", [])) {
            // line 60
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 60, $this->source); })()), "BodyAfter", [])]);
            echo "
";
        }
        // line 62
        echo "
<div class=\"ec-layoutRole\">
    ";
        // line 65
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 65, $this->source); })()), "Header", [])) {
            // line 66
            echo "        <div class=\"ec-layoutRole__header\">
            ";
            // line 67
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 67, $this->source); })()), "Header", [])]);
            echo "
        </div>
    ";
        }
        // line 70
        echo "
    ";
        // line 72
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 72, $this->source); })()), "ContentsTop", [])) {
            // line 73
            echo "        <div class=\"ec-layoutRole__contentTop\">
            ";
            // line 74
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 74, $this->source); })()), "ContentsTop", [])]);
            echo "
        </div>
    ";
        }
        // line 77
        echo "
    <div class=\"ec-layoutRole__contents\">
        ";
        // line 80
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 80, $this->source); })()), "SideLeft", [])) {
            // line 81
            echo "            <div class=\"ec-layoutRole__left\">
                ";
            // line 82
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 82, $this->source); })()), "SideLeft", [])]);
            echo "
            </div>
        ";
        }
        // line 85
        echo "
        ";
        // line 86
        $context["layoutRoleMain"] = "ec-layoutRole__main";
        // line 87
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 87, $this->source); })()), "ColumnNum", []) == 2)) {
            // line 88
            echo "            ";
            $context["layoutRoleMain"] = "ec-layoutRole__mainWithColumn";
            // line 89
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 89, $this->source); })()), "ColumnNum", []) == 3)) {
            // line 90
            echo "            ";
            $context["layoutRoleMain"] = "ec-layoutRole__mainBetweenColumn";
            // line 91
            echo "        ";
        }
        // line 92
        echo "
        <div class=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["layoutRoleMain"]) || array_key_exists("layoutRoleMain", $context) ? $context["layoutRoleMain"] : (function () { throw new RuntimeError('Variable "layoutRoleMain" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "\">
            ";
        // line 95
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 95, $this->source); })()), "MainTop", [])) {
            // line 96
            echo "                <div class=\"ec-layoutRole__mainTop\">
                    ";
            // line 97
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 97, $this->source); })()), "MainTop", [])]);
            echo "
                </div>
            ";
        }
        // line 100
        echo "
            ";
        // line 102
        echo "            ";
        $this->displayBlock('main', $context, $blocks);
        // line 103
        echo "
            ";
        // line 105
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 105, $this->source); })()), "MainBottom", [])) {
            // line 106
            echo "                <div class=\"ec-layoutRole__mainBottom\">
                    ";
            // line 107
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 107, $this->source); })()), "MainBottom", [])]);
            echo "
                </div>
            ";
        }
        // line 110
        echo "        </div>

        ";
        // line 113
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 113, $this->source); })()), "SideRight", [])) {
            // line 114
            echo "            <div class=\"ec-layoutRole__right\">
                ";
            // line 115
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 115, $this->source); })()), "SideRight", [])]);
            echo "
            </div>
        ";
        }
        // line 118
        echo "    </div>

    ";
        // line 121
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 121, $this->source); })()), "ContentsBottom", [])) {
            // line 122
            echo "        <div class=\"ec-layoutRole__contentBottom\">
            ";
            // line 123
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 123, $this->source); })()), "ContentsBottom", [])]);
            echo "
        </div>
    ";
        }
        // line 126
        echo "
    ";
        // line 128
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 128, $this->source); })()), "Footer", [])) {
            // line 129
            echo "        <div class=\"ec-layoutRole__footer\">
            ";
            // line 130
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 130, $this->source); })()), "Footer", [])]);
            echo "
        </div>
    ";
        }
        // line 133
        echo "</div><!-- ec-layoutRole -->

<div class=\"ec-overlayRole\"></div>
<div class=\"ec-drawerRoleClose\"><i class=\"fas fa-times\"></i></div>
<div class=\"ec-drawerRole\">
    ";
        // line 139
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 139, $this->source); })()), "Drawer", [])) {
            // line 140
            echo "        ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 140, $this->source); })()), "Drawer", [])]);
            echo "
    ";
        }
        // line 142
        echo "</div>
<div class=\"ec-blockTopBtn pagetop\">";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ページトップへ"), "html", null, true);
        echo "</div>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js\"></script>
";
        // line 146
        $this->loadTemplate("@common/lang.twig", "default_frame.twig", 146)->display($context);
        // line 147
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/function.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/eccube.js"), "html", null, true);
        echo "\"></script>
";
        // line 149
        $this->displayBlock('javascript', $context, $blocks);
        // line 151
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 151, $this->source); })()), "CloseBodyBefore", [])) {
            // line 152
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 152, $this->source); })()), "CloseBodyBefore", [])]);
            echo "
";
        }
        // line 155
        if ((isset($context["plugin_snippets"]) || array_key_exists("plugin_snippets", $context))) {
            // line 156
            echo "    ";
            echo twig_include($this->env, $context, "snippet.twig", ["snippets" => (isset($context["plugin_snippets"]) || array_key_exists("plugin_snippets", $context) ? $context["plugin_snippets"] : (function () { throw new RuntimeError('Variable "plugin_snippets" does not exist.', 156, $this->source); })())]);
            echo "
";
        }
        // line 158
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/customize.js", "user_data"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_stylesheet($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 149
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 149,  416 => 102,  399 => 38,  384 => 158,  378 => 156,  376 => 155,  370 => 152,  368 => 151,  366 => 149,  362 => 148,  357 => 147,  355 => 146,  349 => 143,  346 => 142,  340 => 140,  337 => 139,  330 => 133,  324 => 130,  321 => 129,  318 => 128,  315 => 126,  309 => 123,  306 => 122,  303 => 121,  299 => 118,  293 => 115,  290 => 114,  287 => 113,  283 => 110,  277 => 107,  274 => 106,  271 => 105,  268 => 103,  265 => 102,  262 => 100,  256 => 97,  253 => 96,  250 => 95,  246 => 93,  243 => 92,  240 => 91,  237 => 90,  234 => 89,  231 => 88,  228 => 87,  226 => 86,  223 => 85,  217 => 82,  214 => 81,  211 => 80,  207 => 77,  201 => 74,  198 => 73,  195 => 72,  192 => 70,  186 => 67,  183 => 66,  180 => 65,  176 => 62,  170 => 60,  168 => 59,  162 => 57,  156 => 55,  151 => 54,  149 => 53,  143 => 51,  140 => 50,  128 => 39,  126 => 38,  122 => 37,  114 => 33,  108 => 31,  105 => 30,  99 => 28,  96 => 27,  90 => 25,  87 => 24,  81 => 22,  78 => 21,  72 => 19,  70 => 18,  59 => 17,  55 => 16,  47 => 12,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
<html lang=\"{{ eccube_config.locale }}\">
<head prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"eccube-csrf-token\" content=\"{{ csrf_token(constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME')) }}\">
    <title>{{ BaseInfo.shop_name }}{% if subtitle is defined and subtitle is not empty %} / {{ subtitle }}{% elseif title is defined and title is not empty %} / {{ title }}{% endif %}</title>
    {% if Page.author is not empty %}
        <meta name=\"author\" content=\"{{ Page.author }}\">
    {% endif %}
    {% if Page.description is not empty %}
        <meta name=\"description\" content=\"{{ Page.description }}\">
    {% endif %}
    {% if Page.keyword is not empty %}
        <meta name=\"keywords\" content=\"{{ Page.keyword }}\">
    {% endif %}
    {% if Page.meta_robots is not empty %}
        <meta name=\"robots\" content=\"{{ Page.meta_robots }}\">
    {% endif %}
    {% if Page.meta_tags is not empty %}
        {{ include(template_from_string(Page.meta_tags)) }}
    {% endif %}
    <link rel=\"icon\" href=\"{{ asset('assets/img/common/favicon.ico', 'user_data') }}\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    {% block stylesheet %}{% endblock %}
    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
    <script>
        \$(function() {
            \$.ajaxSetup({
                'headers': {
                    'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content')
                }
            });
        });
    </script>
    {# Layout: HEAD #}
    {% if Layout.Head %}
        {{ include('block.twig', {'Blocks': Layout.Head}) }}
    {% endif %}
    {# プラグイン用styleseetやmetatagなど #}
    {% if plugin_assets is defined %}{{ include('@admin/snippet.twig', { snippets: plugin_assets }) }}{% endif %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/customize.css', 'user_data') }}\">
</head>
<body id=\"page_{{ app.request.get('_route') }}\" class=\"{{ body_class|default('other_page') }}\">
{# Layout: BODY_AFTER #}
{% if Layout.BodyAfter %}
    {{ include('block.twig', {'Blocks': Layout.BodyAfter}) }}
{% endif %}

<div class=\"ec-layoutRole\">
    {# Layout: HEADER #}
    {% if Layout.Header %}
        <div class=\"ec-layoutRole__header\">
            {{ include('block.twig', {'Blocks': Layout.Header}) }}
        </div>
    {% endif %}

    {# Layout: CONTENTS_TOP #}
    {% if Layout.ContentsTop %}
        <div class=\"ec-layoutRole__contentTop\">
            {{ include('block.twig', {'Blocks': Layout.ContentsTop}) }}
        </div>
    {% endif %}

    <div class=\"ec-layoutRole__contents\">
        {# Layout: SIDE_LEFT #}
        {% if Layout.SideLeft %}
            <div class=\"ec-layoutRole__left\">
                {{ include('block.twig', {'Blocks': Layout.SideLeft}) }}
            </div>
        {% endif %}

        {% set layoutRoleMain = 'ec-layoutRole__main' %}
        {% if Layout.ColumnNum == 2 %}
            {% set layoutRoleMain = 'ec-layoutRole__mainWithColumn' %}
        {% elseif Layout.ColumnNum == 3 %}
            {% set layoutRoleMain = 'ec-layoutRole__mainBetweenColumn' %}
        {% endif %}

        <div class=\"{{ layoutRoleMain }}\">
            {# Layout: MAIN_TOP #}
            {% if Layout.MainTop %}
                <div class=\"ec-layoutRole__mainTop\">
                    {{ include('block.twig', {'Blocks': Layout.MainTop}) }}
                </div>
            {% endif %}

            {# MAIN AREA #}
            {% block main %}{% endblock %}

            {# Layout: MAIN_Bottom #}
            {% if Layout.MainBottom %}
                <div class=\"ec-layoutRole__mainBottom\">
                    {{ include('block.twig', {'Blocks': Layout.MainBottom}) }}
                </div>
            {% endif %}
        </div>

        {# Layout: SIDE_RIGHT #}
        {% if Layout.SideRight %}
            <div class=\"ec-layoutRole__right\">
                {{ include('block.twig', {'Blocks': Layout.SideRight}) }}
            </div>
        {% endif %}
    </div>

    {# Layout: CONTENTS_BOTTOM #}
    {% if Layout.ContentsBottom %}
        <div class=\"ec-layoutRole__contentBottom\">
            {{ include('block.twig', {'Blocks': Layout.ContentsBottom}) }}
        </div>
    {% endif %}

    {# Layout: CONTENTS_FOOTER #}
    {% if Layout.Footer %}
        <div class=\"ec-layoutRole__footer\">
            {{ include('block.twig', {'Blocks': Layout.Footer}) }}
        </div>
    {% endif %}
</div><!-- ec-layoutRole -->

<div class=\"ec-overlayRole\"></div>
<div class=\"ec-drawerRoleClose\"><i class=\"fas fa-times\"></i></div>
<div class=\"ec-drawerRole\">
    {# Layout: DRAWER #}
    {% if Layout.Drawer %}
        {{ include('block.twig', {'Blocks': Layout.Drawer}) }}
    {% endif %}
</div>
<div class=\"ec-blockTopBtn pagetop\">{{'ページトップへ'|trans}}</div>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js\"></script>
{% include('@common/lang.twig') %}
<script src=\"{{ asset('assets/js/function.js') }}\"></script>
<script src=\"{{ asset('assets/js/eccube.js') }}\"></script>
{% block javascript %}{% endblock %}
{# Layout: CLOSE_BODY_BEFORE #}
{% if Layout.CloseBodyBefore %}
    {{ include('block.twig', {'Blocks': Layout.CloseBodyBefore}) }}
{% endif %}
{# プラグイン用Snippet #}
{% if plugin_snippets is defined %}
    {{ include('snippet.twig', { snippets: plugin_snippets }) }}
{% endif %}
    <script src=\"{{ asset('assets/js/customize.js', 'user_data') }}\"></script>
</body>
</html>
", "default_frame.twig", "/Users/xearts/ayoshida/eccube-4.0.3/src/Eccube/Resource/template/default/default_frame.twig");
    }
}
