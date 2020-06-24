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

/* __string_template__6af5847b905a7c4cf593cd510cb36e51ca5f666272229599c7f0f8732fd60916 */
class __TwigTemplate_25b1d526a271b5364df3e3efe24852eb236983713cba6258333e021ed104c357 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__6af5847b905a7c4cf593cd510cb36e51ca5f666272229599c7f0f8732fd60916"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__6af5847b905a7c4cf593cd510cb36e51ca5f666272229599c7f0f8732fd60916"));

        // line 13
        $context["body_class"] = "registration_page";
        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), [0 => "Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__6af5847b905a7c4cf593cd510cb36e51ca5f666272229599c7f0f8732fd60916", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 18
        echo "    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 22
        echo "    <div class=\"ec-registerRole\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\" action=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("entry");
        echo "\" novalidate class=\"h-adr\">
                    <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "_token", []), 'widget');
        echo "
                    <div class=\"ec-borderedDefs\">
                        <dl>
                            <dt>
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "name", []), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput";
        // line 37
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "name", []), "name01", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "name", []), "name02", []))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "name", []), "name01", []), 'widget', ["attr" => ["placeholder" => "姓"]]);
        echo "
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "name", []), "name02", []), 'widget', ["attr" => ["placeholder" => "名"]]);
        echo "
                                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "name", []), "name01", []), 'errors');
        echo "
                                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "name", []), "name02", []), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "kana", []), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput";
        // line 50
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "kana", []), "kana01", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "kana", []), "kana02", []))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "kana", []), "kana01", []), 'widget', ["attr" => ["placeholder" => "セイ"]]);
        echo "
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "kana", []), "kana02", []), 'widget', ["attr" => ["placeholder" => "メイ"]]);
        echo "
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "kana", []), "kana01", []), 'errors');
        echo "
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "kana", []), "kana02", []), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "company_name", []), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "会社名"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput";
        // line 63
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "company_name", []))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "company_name", []), 'widget');
        echo "
                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "company_name", []), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "address", []), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "住所"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-zipInput";
        // line 74
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "postal_code", []))) ? (" error") : (""));
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo "</span>
                                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "postal_code", []), 'widget');
        echo "
                                    <div class=\"ec-zipInputHelp\">
                                        <div class=\"ec-zipInputHelp__icon\">
                                            <div class=\"ec-icon\"><img
                                                        src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                        </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
        echo "</span></a>
                                    </div>
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "postal_code", []), 'errors');
        echo "
                                </div>

                                <div class=\"ec-select";
        // line 86
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "address", []), "pref", []))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "address", []), "pref", []), 'widget');
        echo "
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "address", []), "pref", []), 'errors');
        echo "
                                </div>
                                <div class=\"ec-input";
        // line 90
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "address", []), "addr01", []))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "address", []), "addr01", []), 'widget', ["attr" => ["placeholder" => "市区町村名(例：大阪市北区)"]]);
        echo "
                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "address", []), "addr01", []), 'errors');
        echo "
                                </div>
                                <div class=\"ec-input";
        // line 94
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "address", []), "addr02", []))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "address", []), "addr02", []), 'widget', ["attr" => ["placeholder" => "番地・ビル名(例：西梅田1丁目6-8)"]]);
        echo "
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "address", []), "addr02", []), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "phone_number", []), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-telInput";
        // line 105
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "phone_number", []))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "phone_number", []), 'widget');
        echo "
                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "phone_number", []), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "email", []), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "メールアドレス"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-input";
        // line 116
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "email", []), "first", []))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "email", []), "first", []), 'widget', ["attr" => ["placeholder" => "例：ec-cube@example.com"]]);
        echo "
                                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "email", []), "first", []), 'errors');
        echo "
                                </div>
                                <div class=\"ec-input";
        // line 120
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "email", []), "second", []))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "email", []), "second", []), 'widget', ["attr" => ["placeholder" => "確認のためもう一度入力してください"]]);
        echo "
                                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "email", []), "second", []), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "password", []), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "パスワード"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-input";
        // line 131
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "password", []), "first", []))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "password", []), "first", []), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("半角英数記号%min%〜%max%文字", ["%min%" => twig_get_attribute($this->env, $this->source,         // line 133
(isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 133, $this->source); })()), "eccube_password_min_len", []), "%max%" => twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 133, $this->source); })()), "eccube_password_max_len", [])])], "type" => "password"]);
        // line 135
        echo "
                                    ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "password", []), "first", []), 'errors');
        echo "
                                </div>
                                <div class=\"ec-input";
        // line 138
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "password", []), "second", []))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "password", []), "second", []), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("確認のためもう一度入力してください")], "type" => "password"]);
        // line 142
        echo "
                                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "password", []), "second", []), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "birth", []), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "生年月日"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-birth";
        // line 152
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "birth", []))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "birth", []), "year", []), 'widget');
        echo "<span>/</span>
                                    ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "birth", []), "month", []), 'widget');
        echo "<span>/</span>
                                    ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "birth", []), "day", []), 'widget');
        echo "
                                    ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "birth", []), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "sex", []), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "性別"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-radio";
        // line 165
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "sex", []))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "sex", []), 'widget');
        echo "
                                    ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "sex", []), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "job", []), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "職業"]);
        echo "
                            </dt>
                            <dd>
                                <div class=\"ec-select";
        // line 176
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "job", []))) ? (" error") : (""));
        echo "\">
                                    ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "job", []), 'widget');
        echo "
                                    ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "job", []), 'errors');
        echo "
                                </div>
                            </dd>
                        </dl>
                        ";
        // line 183
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "eccube_form_options", []), "auto_render", [])) {
                // line 184
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "eccube_form_options", []), "form_theme", [])) {
                    // line 185
                    echo "                                ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "eccube_form_options", []), "form_theme", [])], true);
                    // line 186
                    echo "                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                            ";
                } else {
                    // line 188
                    echo "                                <dl>
                                    <dt>
                                        ";
                    // line 190
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'label');
                    echo "
                                    </dt>
                                    <dd>
                                        <div class=\"";
                    // line 193
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "eccube_form_options", []), "style_class", []), "html", null, true);
                    echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($context["f"])) ? (" error") : (""));
                    echo "\">
                                            ";
                    // line 194
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                            ";
                    // line 195
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                        </div>
                                    </dd>
                                </dl>
                            ";
                }
                // line 200
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "                    </div>
                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <div class=\"ec-checkbox";
        // line 205
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "user_policy_check", []))) ? (" error") : (""));
        echo "\">
                                    <label>
                                        ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "user_policy_check", []), 'widget');
        echo "
                                        ";
        // line 208
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("<a class=\"ec-link\" href=\"%url%\" target=\"_blank\">利用規約</a>に同意してお進みください", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_agreement")]);
        echo "
                                    </label>
                                    ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "user_policy_check", []), 'errors');
        echo "
                                </div>
                                <button class=\"ec-blockBtn--action\" type=\"submit\" name=\"mode\" value=\"confirm\">";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("同意する"), "html", null, true);
        echo "</button>
                                <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 213
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("同意しない"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__6af5847b905a7c4cf593cd510cb36e51ca5f666272229599c7f0f8732fd60916";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 213,  527 => 212,  522 => 210,  517 => 208,  513 => 207,  508 => 205,  502 => 201,  495 => 200,  487 => 195,  483 => 194,  478 => 193,  472 => 190,  468 => 188,  462 => 186,  459 => 185,  456 => 184,  450 => 183,  443 => 178,  439 => 177,  435 => 176,  429 => 173,  420 => 167,  416 => 166,  412 => 165,  406 => 162,  397 => 156,  393 => 155,  389 => 154,  385 => 153,  381 => 152,  375 => 149,  366 => 143,  363 => 142,  361 => 139,  357 => 138,  352 => 136,  349 => 135,  347 => 133,  346 => 132,  342 => 131,  336 => 128,  327 => 122,  323 => 121,  319 => 120,  314 => 118,  310 => 117,  306 => 116,  300 => 113,  291 => 107,  287 => 106,  283 => 105,  277 => 102,  268 => 96,  264 => 95,  260 => 94,  255 => 92,  251 => 91,  247 => 90,  242 => 88,  238 => 87,  234 => 86,  228 => 83,  223 => 81,  218 => 79,  211 => 75,  205 => 74,  199 => 71,  190 => 65,  186 => 64,  182 => 63,  176 => 60,  167 => 54,  163 => 53,  159 => 52,  155 => 51,  151 => 50,  145 => 47,  136 => 41,  132 => 40,  128 => 39,  124 => 38,  120 => 37,  114 => 34,  107 => 30,  102 => 28,  95 => 24,  91 => 22,  82 => 21,  71 => 18,  62 => 17,  51 => 11,  49 => 15,  47 => 13,  35 => 11,);
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
{% extends 'default_frame.twig' %}

{% set body_class = 'registration_page' %}

{% form_theme form 'Form/form_div_layout.twig' %}

{% block javascript %}
    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
{% endblock javascript %}

{% block main %}
    <div class=\"ec-registerRole\">
        <div class=\"ec-pageHeader\">
            <h1>{{ '新規会員登録'|trans }}</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <form method=\"post\" action=\"{{ url('entry') }}\" novalidate class=\"h-adr\">
                    <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                    {{ form_widget(form._token) }}
                    <div class=\"ec-borderedDefs\">
                        <dl>
                            <dt>
                                {{ form_label(form.name, 'お名前', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput{{ has_errors(form.name.name01, form.name.name02) ? ' error'}}\">
                                    {{ form_widget(form.name.name01, { 'attr': { 'placeholder': '姓' }}) }}
                                    {{ form_widget(form.name.name02, { 'attr': { 'placeholder': '名' }}) }}
                                    {{ form_errors(form.name.name01) }}
                                    {{ form_errors(form.name.name02) }}
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.kana, 'お名前(カナ)', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput{{ has_errors(form.kana.kana01, form.kana.kana02) ? ' error'}}\">
                                    {{ form_widget(form.kana.kana01, { 'attr': { 'placeholder': 'セイ' }}) }}
                                    {{ form_widget(form.kana.kana02, { 'attr': { 'placeholder': 'メイ' }}) }}
                                    {{ form_errors(form.kana.kana01) }}
                                    {{ form_errors(form.kana.kana02) }}
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.company_name, '会社名', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-halfInput{{ has_errors(form.company_name) ? ' error' }}\">
                                    {{ form_widget(form.company_name) }}
                                    {{ form_errors(form.company_name) }}
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.address, '住所', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-zipInput{{ has_errors(form.postal_code) ? ' error' }}\"><span>{{ '〒'|trans }}</span>
                                    {{ form_widget(form.postal_code) }}
                                    <div class=\"ec-zipInputHelp\">
                                        <div class=\"ec-zipInputHelp__icon\">
                                            <div class=\"ec-icon\"><img
                                                        src=\"{{ asset('assets/icon/question-white.svg') }}\" alt=\"\">
                                            </div>
                                        </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>{{ '郵便番号検索'|trans }}</span></a>
                                    </div>
                                    {{ form_errors(form.postal_code) }}
                                </div>

                                <div class=\"ec-select{{ has_errors(form.address.pref) ? ' error' }}\">
                                    {{ form_widget(form.address.pref) }}
                                    {{ form_errors(form.address.pref) }}
                                </div>
                                <div class=\"ec-input{{ has_errors(form.address.addr01) ? ' error' }}\">
                                    {{ form_widget(form.address.addr01, { 'attr': { 'placeholder': '市区町村名(例：大阪市北区)' }}) }}
                                    {{ form_errors(form.address.addr01) }}
                                </div>
                                <div class=\"ec-input{{ has_errors(form.address.addr02) ? ' error' }}\">
                                    {{ form_widget(form.address.addr02,  { 'attr': { 'placeholder': '番地・ビル名(例：西梅田1丁目6-8)' }}) }}
                                    {{ form_errors(form.address.addr02) }}
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.phone_number, '電話番号', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-telInput{{ has_errors(form.phone_number) ? ' error' }}\">
                                    {{ form_widget(form.phone_number) }}
                                    {{ form_errors(form.phone_number) }}
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.email, 'メールアドレス', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-input{{ has_errors(form.email.first) ? ' error' }}\">
                                    {{ form_widget(form.email.first, { 'attr': { 'placeholder': '例：ec-cube@example.com' }}) }}
                                    {{ form_errors(form.email.first) }}
                                </div>
                                <div class=\"ec-input{{ has_errors(form.email.second) ? ' error' }}\">
                                    {{ form_widget(form.email.second, { 'attr': { 'placeholder': '確認のためもう一度入力してください' }}) }}
                                    {{ form_errors(form.email.second) }}
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.password, 'パスワード', { 'label_attr': {'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-input{{ has_errors(form.password.first) ? ' error' }}\">
                                    {{ form_widget(form.password.first, {
                                        'attr': { 'placeholder': '半角英数記号%min%〜%max%文字'|trans({ '%min%': eccube_config.eccube_password_min_len, '%max%': eccube_config.eccube_password_max_len }) },
                                        'type': 'password'
                                    }) }}
                                    {{ form_errors(form.password.first) }}
                                </div>
                                <div class=\"ec-input{{ has_errors(form.password.second) ? ' error' }}\">
                                    {{ form_widget(form.password.second, {
                                        'attr': { 'placeholder': '確認のためもう一度入力してください'|trans },
                                        'type': 'password'
                                    }) }}
                                    {{ form_errors(form.password.second) }}
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.birth, '生年月日', { 'label_attr': {'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-birth{{ has_errors(form.birth) ? ' error' }}\">
                                    {{ form_widget(form.birth.year) }}<span>/</span>
                                    {{ form_widget(form.birth.month) }}<span>/</span>
                                    {{ form_widget(form.birth.day) }}
                                    {{ form_errors(form.birth) }}
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.sex, '性別', { 'label_attr': { 'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-radio{{ has_errors(form.sex) ? ' error' }}\">
                                    {{ form_widget(form.sex) }}
                                    {{ form_errors(form.sex) }}
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                {{ form_label(form.job, '職業', { 'label_attr': {'class': 'ec-label' }}) }}
                            </dt>
                            <dd>
                                <div class=\"ec-select{{ has_errors(form.job) ? ' error' }}\">
                                    {{ form_widget(form.job) }}
                                    {{ form_errors(form.job) }}
                                </div>
                            </dd>
                        </dl>
                        {# エンティティ拡張の自動出力 #}
                        {% for f in form if f.vars.eccube_form_options.auto_render %}
                            {% if f.vars.eccube_form_options.form_theme %}
                                {% form_theme f f.vars.eccube_form_options.form_theme %}
                                {{ form_row(f) }}
                            {% else %}
                                <dl>
                                    <dt>
                                        {{ form_label(f) }}
                                    </dt>
                                    <dd>
                                        <div class=\"{{ f.vars.eccube_form_options.style_class }}{{ has_errors(f) ? ' error' }}\">
                                            {{ form_widget(f) }}
                                            {{ form_errors(f) }}
                                        </div>
                                    </dd>
                                </dl>
                            {% endif %}
                        {% endfor %}
                    </div>
                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <div class=\"ec-checkbox{{ has_errors(form.user_policy_check) ? ' error' }}\">
                                    <label>
                                        {{ form_widget(form.user_policy_check) }}
                                        {{ '<a class=\"ec-link\" href=\"%url%\" target=\"_blank\">利用規約</a>に同意してお進みください'|trans({ '%url%': url('help_agreement') })|raw }}
                                    </label>
                                    {{ form_errors(form.user_policy_check) }}
                                </div>
                                <button class=\"ec-blockBtn--action\" type=\"submit\" name=\"mode\" value=\"confirm\">{{ '同意する'|trans }}</button>
                                <a class=\"ec-blockBtn--cancel\" href=\"{{ url('homepage') }}\">{{ '同意しない'|trans }}</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "__string_template__6af5847b905a7c4cf593cd510cb36e51ca5f666272229599c7f0f8732fd60916", "");
    }
}
