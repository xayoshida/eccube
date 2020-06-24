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

/* __string_template__81dfa431313521cd6a786b6e4714d0a0f69a5122bd31ff47f5fe026d58730ba6 */
class __TwigTemplate_82ada0cbd98799ba6320a65c6708dae79f7e9828882107abbbfc5eb74079b882 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__81dfa431313521cd6a786b6e4714d0a0f69a5122bd31ff47f5fe026d58730ba6"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__81dfa431313521cd6a786b6e4714d0a0f69a5122bd31ff47f5fe026d58730ba6"));

        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "__string_template__81dfa431313521cd6a786b6e4714d0a0f69a5122bd31ff47f5fe026d58730ba6", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_sub_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 17
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js\"></script>
    <script>
        \$(function() {
            var options = {
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 25,
                        bottom: 0
                    }
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            return '";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getCurrencySymbol(), "html", null, true);
        echo "' + tooltipItem.yLabel.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, ',');
                        }
                    }
                },
                scales: {
                    yAxes: [
                        {
                            id: 'y-axis-1',
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                callback: function(label, index, labels) {
                                    if (Math.floor(label) === label) {
                                        return '";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getCurrencySymbol(), "html", null, true);
        echo "' + label.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, ',');
                                    }
                                }
                            }
                        }
                    ]
                }
            };

            var priceBackgroundColor = 'rgba(58, 115, 188, 1)';
            var priceBorderColor = 'rgba(255, 255, 255, 0)';

            \$.ajax({
                url: '";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_homepage_sale");
        echo "',
                type: 'GET',
                dataType: 'json'
            }).done(function(datas) {

                for (var i = 0; i < datas.length; i++) {
                    var data = datas[i];

                    var labels = [];
                    var prices = [];
                    var priceBackgroundColors = [];
                    var priceBorderColors = [];
                    Object.keys(data).forEach(function(key) {
                        labels.push(key);
                        prices.push(data[key].price);
                        priceBackgroundColors.push(priceBackgroundColor);
                        priceBorderColors.push(priceBorderColor);
                    });

                    var ctx = \$('#chart-' + i)[0].getContext('2d');
                    ctx.canvas.height = 100;
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [
                                {
                                    type: 'bar',
                                    label: '";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_amount"), "html", null, true);
        echo "',
                                    data: prices,
                                    backgroundColor: priceBackgroundColors,
                                    borderColor: priceBorderColors,
                                    borderWidth: 1,
                                    yAxisID: 'y-axis-1'
                                }
                            ]
                        },
                        options: options
                    });
                }
            }).fail(function(data) {
            }).always(function() {
                \$('#loading').hide();
            });

        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 112
        echo "    ";
        if ((isset($context["is_danger_admin_url"]) || array_key_exists("is_danger_admin_url", $context) ? $context["is_danger_admin_url"] : (function () { throw new RuntimeError('Variable "is_danger_admin_url" does not exist.', 112, $this->source); })())) {
            // line 113
            echo "    <div class=\"alert alert-warning alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-warning fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.admin_url_warning", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_system_security")]);
            echo "</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
    ";
        }
        // line 121
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"row\">
                    <div class=\"col-4 mb-4\">
                        <div id=\"order-status\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header\">
                                <a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order");
        echo "\">
                                    <span class=\"card-title\">";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.order_status_title"), "html", null, true);
        echo "</span>
                                </a>
                            </div>
                            <div class=\"card-body p-0\">
                                ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["OrderStatuses"]) || array_key_exists("OrderStatuses", $context) ? $context["OrderStatuses"] : (function () { throw new RuntimeError('Variable "OrderStatuses" does not exist.', 133, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderStatus"]) {
            // line 134
            echo "                                    <div class=\"d-block border border-top-0 border-left-0 border-right-0\">
                                        <a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order", ["order_status_id" => twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "id", [])]), "html", null, true);
            echo "\" class=\"p-3 d-block\">
                                            <div class=\"row align-items-center\">
                                                <div class=\"col align-middle\">
                                                    <span class=\"align-middle\">";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "name", []), "html", null, true);
            echo "</span>
                                                </div>
                                                <div class=\"col-auto text-right align-middle\">
                                                    <span class=\"h4 align-middle font-weight-normal text-dark\">";
            // line 141
            ((( !twig_test_empty((isset($context["Orders"]) || array_key_exists("Orders", $context) ? $context["Orders"] : (function () { throw new RuntimeError('Variable "Orders" does not exist.', 141, $this->source); })())) && twig_get_attribute($this->env, $this->source, ($context["Orders"] ?? null), twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "id", []), [], "array", true, true))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Orders"]) || array_key_exists("Orders", $context) ? $context["Orders"] : (function () { throw new RuntimeError('Variable "Orders" does not exist.', 141, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "id", []), [], "array"), "html", null, true))) : (print (0)));
            echo "</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderStatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                            </div>
                        </div><!-- /#order-status -->
                    </div>
                    <div class=\"col-8 mb-4\">
                        <div id=\"chart-statistics\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header\">
                                <div class=\"d-inline-block\">
                                    <span class=\"card-title\">";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_title"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"card-body pt-0\">
                                <div class=\"row text-center border-bottom mb-3\">
                                    <div class=\"col-4 py-2 border-right\">
                                        <div class=\"h3\">
                                            ";
        // line 161
        $context["amount"] = ((twig_test_empty((isset($context["salesThisMonth"]) || array_key_exists("salesThisMonth", $context) ? $context["salesThisMonth"] : (function () { throw new RuntimeError('Variable "salesThisMonth" does not exist.', 161, $this->source); })()))) ? (0) : (twig_get_attribute($this->env, $this->source, (isset($context["salesThisMonth"]) || array_key_exists("salesThisMonth", $context) ? $context["salesThisMonth"] : (function () { throw new RuntimeError('Variable "salesThisMonth" does not exist.', 161, $this->source); })()), "order_amount", [])));
        // line 162
        echo "                                            ";
        $context["count"] = ((twig_test_empty((isset($context["salesThisMonth"]) || array_key_exists("salesThisMonth", $context) ? $context["salesThisMonth"] : (function () { throw new RuntimeError('Variable "salesThisMonth" does not exist.', 162, $this->source); })()))) ? (0) : (twig_get_attribute($this->env, $this->source, (isset($context["salesThisMonth"]) || array_key_exists("salesThisMonth", $context) ? $context["salesThisMonth"] : (function () { throw new RuntimeError('Variable "salesThisMonth" does not exist.', 162, $this->source); })()), "order_count", [])));
        // line 163
        echo "                                            ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_value", ["%amount%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 163, $this->source); })())), "%count%" => twig_number_format_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 163, $this->source); })()))]), "html", null, true);
        echo "
                                        </div>
                                        <small>";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_this_month"), "html", null, true);
        echo "</small>
                                    </div>
                                    <div class=\"col-4 py-2 border-right\">
                                        <div class=\"h3\">
                                            ";
        // line 169
        $context["amount"] = ((twig_test_empty((isset($context["salesToday"]) || array_key_exists("salesToday", $context) ? $context["salesToday"] : (function () { throw new RuntimeError('Variable "salesToday" does not exist.', 169, $this->source); })()))) ? (0) : (twig_get_attribute($this->env, $this->source, (isset($context["salesToday"]) || array_key_exists("salesToday", $context) ? $context["salesToday"] : (function () { throw new RuntimeError('Variable "salesToday" does not exist.', 169, $this->source); })()), "order_amount", [])));
        // line 170
        echo "                                            ";
        $context["count"] = ((twig_test_empty((isset($context["salesToday"]) || array_key_exists("salesToday", $context) ? $context["salesToday"] : (function () { throw new RuntimeError('Variable "salesToday" does not exist.', 170, $this->source); })()))) ? (0) : (twig_get_attribute($this->env, $this->source, (isset($context["salesToday"]) || array_key_exists("salesToday", $context) ? $context["salesToday"] : (function () { throw new RuntimeError('Variable "salesToday" does not exist.', 170, $this->source); })()), "order_count", [])));
        // line 171
        echo "                                            ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_value", ["%amount%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 171, $this->source); })())), "%count%" => twig_number_format_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 171, $this->source); })()))]), "html", null, true);
        echo "
                                        </div>
                                        <small>";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_today"), "html", null, true);
        echo "</small>
                                    </div>
                                    <div class=\"col-4 py-2\">
                                        <div class=\"h3\">
                                            ";
        // line 177
        $context["amount"] = ((twig_test_empty((isset($context["salesYesterday"]) || array_key_exists("salesYesterday", $context) ? $context["salesYesterday"] : (function () { throw new RuntimeError('Variable "salesYesterday" does not exist.', 177, $this->source); })()))) ? (0) : (twig_get_attribute($this->env, $this->source, (isset($context["salesYesterday"]) || array_key_exists("salesYesterday", $context) ? $context["salesYesterday"] : (function () { throw new RuntimeError('Variable "salesYesterday" does not exist.', 177, $this->source); })()), "order_amount", [])));
        // line 178
        echo "                                            ";
        $context["count"] = ((twig_test_empty((isset($context["salesYesterday"]) || array_key_exists("salesYesterday", $context) ? $context["salesYesterday"] : (function () { throw new RuntimeError('Variable "salesYesterday" does not exist.', 178, $this->source); })()))) ? (0) : (twig_get_attribute($this->env, $this->source, (isset($context["salesYesterday"]) || array_key_exists("salesYesterday", $context) ? $context["salesYesterday"] : (function () { throw new RuntimeError('Variable "salesYesterday" does not exist.', 178, $this->source); })()), "order_count", [])));
        // line 179
        echo "                                            ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_value", ["%amount%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 179, $this->source); })())), "%count%" => twig_number_format_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 179, $this->source); })()))]), "html", null, true);
        echo "
                                        </div>
                                        <small>";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_yesterday"), "html", null, true);
        echo "</small>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col text-center\">
                                        <div class=\"btn-group nav d-inline-flex\" id=\"pills-tab\" role=\"tablist\">
                                            <a class=\"nav-link active btn btn-ec-tab py-2 pl-4 pr-4\" id=\"pills-weekly-tab\" data-toggle=\"pill\" href=\"#pills-weekly\" role=\"tab\" aria-controls=\"pills-weekly\" aria-selected=\"true\">
                                                ";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_weekly"), "html", null, true);
        echo "
                                            </a>
                                            <a class=\"nav-link btn btn-ec-tab py-2 pl-4 pr-4\" id=\"pills-monthly-tab\" data-toggle=\"pill\" href=\"#pills-monthly\" role=\"tab\" aria-controls=\"pills-monthly\" aria-selected=\"false\">
                                                ";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_monthly"), "html", null, true);
        echo "
                                            </a>
                                            <a class=\"nav-link btn btn-ec-tab py-2 pl-4 pr-4\" id=\"pills-year-tab\" data-toggle=\"pill\" href=\"#pills-year\" role=\"tab\" aria-controls=\"pills-year\" aria-selected=\"false\">
                                                ";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_yearly"), "html", null, true);
        echo "
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div id=\"loading\" class=\"text-center pt-5\">
                                            <img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loading.gif", "admin"), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"tab-content\" id=\"pills-tabContent\">
                                            <div class=\"tab-pane fade show active\" id=\"pills-weekly\" role=\"tabpanel\" aria-labelledby=\"pills-weekly-tab\">
                                                <canvas id=\"chart-0\"></canvas>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"pills-monthly\" role=\"tabpanel\" aria-labelledby=\"pills-monthly-tab\">
                                                <canvas id=\"chart-1\"></canvas>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"pills-year\" role=\"tabpanel\" aria-labelledby=\"pills-year-tab\">
                                                <canvas id=\"chart-2\"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /#chart-statistics -->
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col mb-4\">
                        <div id=\"shop-statistical\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header\">
                                <div class=\"d-inline-block\">
                                    <span class=\"card-title\">";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.shop_status_title"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"card-body p-0\">
                                <div class=\"d-block border border-top-0 border-left-0 border-right-0\">
                                    <a href=\"";
        // line 231
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_homepage_nonstock");
        echo "\" class=\"p-3 d-block\">
                                        <div class=\"row align-items-center\">
                                            <div class=\"col-2 align-middle text-center\">
                                                <i class=\"fa fa-inbox fa-2x text-secondary\" aria-hidden=\"true\"></i>
                                            </div>
                                            <div class=\"col p-0\">
                                                <span class=\"align-middle\">";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.shop_status_out_of_stock"), "html", null, true);
        echo "</span>
                                            </div>
                                            <div class=\"col-auto text-right align-middle\">
                                                <span class=\"h4 align-middle font-weight-normal text-dark\">";
        // line 240
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["countNonStockProducts"]) || array_key_exists("countNonStockProducts", $context) ? $context["countNonStockProducts"] : (function () { throw new RuntimeError('Variable "countNonStockProducts" does not exist.', 240, $this->source); })())), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"d-block border border-top-0 border-left-0 border-right-0\">
                                    <a href=\"";
        // line 246
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product");
        echo "\" class=\"p-3 d-block\">
                                        <div class=\"row align-items-center\">
                                            <div class=\"col-2 align-middle text-center\">
                                                <i class=\"fa fa-cubes fa-2x text-secondary\" aria-hidden=\"true\"></i>
                                            </div>
                                            <div class=\"col p-0\">
                                                <span class=\"align-middle\">";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.shop_status_products"), "html", null, true);
        echo "</span>
                                            </div>
                                            <div class=\"col-auto text-check align-middle\">
                                                <span class=\"h4 align-middle font-weight-normal text-dark\">";
        // line 255
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["countProducts"]) || array_key_exists("countProducts", $context) ? $context["countProducts"] : (function () { throw new RuntimeError('Variable "countProducts" does not exist.', 255, $this->source); })())), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"d-block border border-top-0 border-left-0 border-right-0\">
                                    <a href=\"";
        // line 261
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_homepage_customer");
        echo "\" class=\"p-3 d-block\">
                                        <div class=\"row align-items-center\">
                                            <div class=\"col-2 align-middle text-center\">
                                                <i class=\"fa fa-users fa-2x text-secondary\" aria-hidden=\"true\"></i>
                                            </div>
                                            <div class=\"col p-0\">
                                                <span class=\"align-middle\">";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.shop_status_customers"), "html", null, true);
        echo "</span>
                                            </div>
                                            <div class=\"col-auto text-check align-middle\">
                                                <span class=\"h4 align-middle font-weight-normal text-dark\">";
        // line 270
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["countCustomers"]) || array_key_exists("countCustomers", $context) ? $context["countCustomers"] : (function () { throw new RuntimeError('Variable "countCustomers" does not exist.', 270, $this->source); })())), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div><!-- /#shop-statistical -->
                    </div>
                    <div class=\"col mb-4\">
                        <div id=\"ec-cube-plugin\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header border-bottom-0\">
                                <div class=\"d-inline-block\">
                                    <span class=\"card-title\">";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.recommend_plugins_title"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"card-body py-0\" style=\"max-height: 395px; overflow-y: scroll\">
                                ";
        // line 286
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recommendedPlugins"]) || array_key_exists("recommendedPlugins", $context) ? $context["recommendedPlugins"] : (function () { throw new RuntimeError('Variable "recommendedPlugins" does not exist.', 286, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 287
            echo "                                    <div class=\"row py-3 border border-bottom-0 border-left-0 border-right-0\">
                                        <div class=\"col-5 col-md-4\">
                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#searchPluginModal-";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "id", []), "html", null, true);
            echo "\">
                                                <img src=\"";
            // line 290
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "image", []), "html", null, true);
            echo "\" class=\"w-100\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", []), "html", null, true);
            echo "\">
                                            </a>
                                        </div>
                                        <div class=\"col-7 col-md-8 pl-0\">
                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#searchPluginModal-";
            // line 294
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", []), "html", null, true);
            echo "</a>
                                            <p class=\"m-0 pt-2\">
                                                ";
            // line 296
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "short_description", []), "html", null, true);
            echo "
                                            </p>
                                        </div>
                                    </div>
                                    ";
            // line 300
            echo twig_include($this->env, $context, "@admin/Store/plugin_detail_modal.twig", ["item" => $context["plugin"]]);
            echo "
                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "                            </div>
                            <div class=\"card-footer\">
                                > <a href=\"";
        // line 304
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_owners_search_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.recommend_plugins.owner_store"), "html", null, true);
        echo "</a>
                            </div>
                        </div><!-- /#ec-cube-plugin -->
                    </div>
                    <div class=\"col mb-4\">
                        <div id=\"ec-cube-news\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header\">
                                <div class=\"d-inline-block\">
                                    <span class=\"card-title\">";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.news_title"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"card-body p-0\">
                                <iframe name=\"information\" class=\"link_list_wrap\" src=\"";
        // line 316
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 316, $this->source); })()), "eccube_info_url", []), "html", null, true);
        echo "\" style=\"width:100%; border:0; min-height:300px;\"></iframe>
                            </div>
                        </div><!-- /#ec-cube-news -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.c-primaryCol -->
        </div><!-- /.c-contentsArea__primaryCol -->
    </div><!-- /.c-contentsArea__cols -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__81dfa431313521cd6a786b6e4714d0a0f69a5122bd31ff47f5fe026d58730ba6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  600 => 316,  593 => 312,  580 => 304,  576 => 302,  560 => 300,  553 => 296,  546 => 294,  537 => 290,  533 => 289,  529 => 287,  512 => 286,  505 => 282,  490 => 270,  484 => 267,  475 => 261,  466 => 255,  460 => 252,  451 => 246,  442 => 240,  436 => 237,  427 => 231,  419 => 226,  392 => 202,  381 => 194,  375 => 191,  369 => 188,  359 => 181,  353 => 179,  350 => 178,  348 => 177,  341 => 173,  335 => 171,  332 => 170,  330 => 169,  323 => 165,  317 => 163,  314 => 162,  312 => 161,  302 => 154,  293 => 147,  281 => 141,  275 => 138,  269 => 135,  266 => 134,  262 => 133,  255 => 129,  251 => 128,  242 => 121,  233 => 115,  229 => 113,  226 => 112,  217 => 111,  186 => 89,  155 => 61,  139 => 48,  123 => 35,  103 => 17,  94 => 16,  77 => 14,  59 => 13,  37 => 11,);
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
{% extends '@admin/default_frame.twig' %}

{% block title %}{{ 'admin.home'|trans }}{% endblock %}
{% block sub_title %}{% endblock %}

{% block javascript %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js\"></script>
    <script>
        \$(function() {
            var options = {
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 25,
                        bottom: 0
                    }
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            return '{{ currency_symbol() }}' + tooltipItem.yLabel.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, ',');
                        }
                    }
                },
                scales: {
                    yAxes: [
                        {
                            id: 'y-axis-1',
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                callback: function(label, index, labels) {
                                    if (Math.floor(label) === label) {
                                        return '{{ currency_symbol() }}' + label.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, ',');
                                    }
                                }
                            }
                        }
                    ]
                }
            };

            var priceBackgroundColor = 'rgba(58, 115, 188, 1)';
            var priceBorderColor = 'rgba(255, 255, 255, 0)';

            \$.ajax({
                url: '{{ url('admin_homepage_sale') }}',
                type: 'GET',
                dataType: 'json'
            }).done(function(datas) {

                for (var i = 0; i < datas.length; i++) {
                    var data = datas[i];

                    var labels = [];
                    var prices = [];
                    var priceBackgroundColors = [];
                    var priceBorderColors = [];
                    Object.keys(data).forEach(function(key) {
                        labels.push(key);
                        prices.push(data[key].price);
                        priceBackgroundColors.push(priceBackgroundColor);
                        priceBorderColors.push(priceBorderColor);
                    });

                    var ctx = \$('#chart-' + i)[0].getContext('2d');
                    ctx.canvas.height = 100;
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [
                                {
                                    type: 'bar',
                                    label: '{{ 'admin.home.sales_summary_amount'|trans }}',
                                    data: prices,
                                    backgroundColor: priceBackgroundColors,
                                    borderColor: priceBorderColors,
                                    borderWidth: 1,
                                    yAxisID: 'y-axis-1'
                                }
                            ]
                        },
                        options: options
                    });
                }
            }).fail(function(data) {
            }).always(function() {
                \$('#loading').hide();
            });

        });

    </script>
{% endblock javascript %}

{% block main %}
    {% if is_danger_admin_url %}
    <div class=\"alert alert-warning alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-warning fa-lg mr-2\"></i>
        <span class=\"font-weight-bold\">{{ 'admin.common.admin_url_warning'|trans({ '%url%': url('admin_setting_system_security') })|raw }}</span>
        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
        </button>
    </div>
    {% endif %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"row\">
                    <div class=\"col-4 mb-4\">
                        <div id=\"order-status\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header\">
                                <a href=\"{{ url('admin_order') }}\">
                                    <span class=\"card-title\">{{ 'admin.home.order_status_title'|trans }}</span>
                                </a>
                            </div>
                            <div class=\"card-body p-0\">
                                {% for OrderStatus in OrderStatuses %}
                                    <div class=\"d-block border border-top-0 border-left-0 border-right-0\">
                                        <a href=\"{{ url('admin_order', { 'order_status_id': OrderStatus.id }) }}\" class=\"p-3 d-block\">
                                            <div class=\"row align-items-center\">
                                                <div class=\"col align-middle\">
                                                    <span class=\"align-middle\">{{ OrderStatus.name }}</span>
                                                </div>
                                                <div class=\"col-auto text-right align-middle\">
                                                    <span class=\"h4 align-middle font-weight-normal text-dark\">{{ Orders is not empty and Orders[OrderStatus.id] is defined ? Orders[OrderStatus.id] : 0 }}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                {% endfor %}
                            </div>
                        </div><!-- /#order-status -->
                    </div>
                    <div class=\"col-8 mb-4\">
                        <div id=\"chart-statistics\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header\">
                                <div class=\"d-inline-block\">
                                    <span class=\"card-title\">{{ 'admin.home.sales_summary_title'|trans }}</span>
                                </div>
                            </div>
                            <div class=\"card-body pt-0\">
                                <div class=\"row text-center border-bottom mb-3\">
                                    <div class=\"col-4 py-2 border-right\">
                                        <div class=\"h3\">
                                            {% set amount = salesThisMonth is empty ? 0 : salesThisMonth.order_amount %}
                                            {% set count = salesThisMonth is empty ? 0 : salesThisMonth.order_count %}
                                            {{ 'admin.home.sales_summary_value'|trans({ '%amount%': amount|price, '%count%': count|number_format }) }}
                                        </div>
                                        <small>{{ 'admin.home.sales_summary_this_month'|trans }}</small>
                                    </div>
                                    <div class=\"col-4 py-2 border-right\">
                                        <div class=\"h3\">
                                            {% set amount = salesToday is empty ? 0 : salesToday.order_amount %}
                                            {% set count = salesToday is empty ? 0 : salesToday.order_count %}
                                            {{ 'admin.home.sales_summary_value'|trans({ '%amount%': amount|price, '%count%': count|number_format }) }}
                                        </div>
                                        <small>{{ 'admin.home.sales_summary_today'|trans }}</small>
                                    </div>
                                    <div class=\"col-4 py-2\">
                                        <div class=\"h3\">
                                            {% set amount = salesYesterday is empty ? 0 : salesYesterday.order_amount %}
                                            {% set count = salesYesterday is empty ? 0 : salesYesterday.order_count %}
                                            {{ 'admin.home.sales_summary_value'|trans({ '%amount%': amount|price, '%count%': count|number_format }) }}
                                        </div>
                                        <small>{{ 'admin.home.sales_summary_yesterday'|trans }}</small>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col text-center\">
                                        <div class=\"btn-group nav d-inline-flex\" id=\"pills-tab\" role=\"tablist\">
                                            <a class=\"nav-link active btn btn-ec-tab py-2 pl-4 pr-4\" id=\"pills-weekly-tab\" data-toggle=\"pill\" href=\"#pills-weekly\" role=\"tab\" aria-controls=\"pills-weekly\" aria-selected=\"true\">
                                                {{ 'admin.home.sales_summary_weekly'|trans }}
                                            </a>
                                            <a class=\"nav-link btn btn-ec-tab py-2 pl-4 pr-4\" id=\"pills-monthly-tab\" data-toggle=\"pill\" href=\"#pills-monthly\" role=\"tab\" aria-controls=\"pills-monthly\" aria-selected=\"false\">
                                                {{ 'admin.home.sales_summary_monthly'|trans }}
                                            </a>
                                            <a class=\"nav-link btn btn-ec-tab py-2 pl-4 pr-4\" id=\"pills-year-tab\" data-toggle=\"pill\" href=\"#pills-year\" role=\"tab\" aria-controls=\"pills-year\" aria-selected=\"false\">
                                                {{ 'admin.home.sales_summary_yearly'|trans }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div id=\"loading\" class=\"text-center pt-5\">
                                            <img src=\"{{ asset('assets/img/loading.gif', 'admin') }}\">
                                        </div>
                                        <div class=\"tab-content\" id=\"pills-tabContent\">
                                            <div class=\"tab-pane fade show active\" id=\"pills-weekly\" role=\"tabpanel\" aria-labelledby=\"pills-weekly-tab\">
                                                <canvas id=\"chart-0\"></canvas>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"pills-monthly\" role=\"tabpanel\" aria-labelledby=\"pills-monthly-tab\">
                                                <canvas id=\"chart-1\"></canvas>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"pills-year\" role=\"tabpanel\" aria-labelledby=\"pills-year-tab\">
                                                <canvas id=\"chart-2\"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /#chart-statistics -->
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col mb-4\">
                        <div id=\"shop-statistical\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header\">
                                <div class=\"d-inline-block\">
                                    <span class=\"card-title\">{{ 'admin.home.shop_status_title'|trans }}</span>
                                </div>
                            </div>
                            <div class=\"card-body p-0\">
                                <div class=\"d-block border border-top-0 border-left-0 border-right-0\">
                                    <a href=\"{{ url('admin_homepage_nonstock') }}\" class=\"p-3 d-block\">
                                        <div class=\"row align-items-center\">
                                            <div class=\"col-2 align-middle text-center\">
                                                <i class=\"fa fa-inbox fa-2x text-secondary\" aria-hidden=\"true\"></i>
                                            </div>
                                            <div class=\"col p-0\">
                                                <span class=\"align-middle\">{{ 'admin.home.shop_status_out_of_stock'|trans }}</span>
                                            </div>
                                            <div class=\"col-auto text-right align-middle\">
                                                <span class=\"h4 align-middle font-weight-normal text-dark\">{{ countNonStockProducts|number_format }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"d-block border border-top-0 border-left-0 border-right-0\">
                                    <a href=\"{{ url('admin_product') }}\" class=\"p-3 d-block\">
                                        <div class=\"row align-items-center\">
                                            <div class=\"col-2 align-middle text-center\">
                                                <i class=\"fa fa-cubes fa-2x text-secondary\" aria-hidden=\"true\"></i>
                                            </div>
                                            <div class=\"col p-0\">
                                                <span class=\"align-middle\">{{ 'admin.home.shop_status_products'|trans }}</span>
                                            </div>
                                            <div class=\"col-auto text-check align-middle\">
                                                <span class=\"h4 align-middle font-weight-normal text-dark\">{{ countProducts|number_format }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"d-block border border-top-0 border-left-0 border-right-0\">
                                    <a href=\"{{ url('admin_homepage_customer') }}\" class=\"p-3 d-block\">
                                        <div class=\"row align-items-center\">
                                            <div class=\"col-2 align-middle text-center\">
                                                <i class=\"fa fa-users fa-2x text-secondary\" aria-hidden=\"true\"></i>
                                            </div>
                                            <div class=\"col p-0\">
                                                <span class=\"align-middle\">{{ 'admin.home.shop_status_customers'|trans }}</span>
                                            </div>
                                            <div class=\"col-auto text-check align-middle\">
                                                <span class=\"h4 align-middle font-weight-normal text-dark\">{{ countCustomers|number_format }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div><!-- /#shop-statistical -->
                    </div>
                    <div class=\"col mb-4\">
                        <div id=\"ec-cube-plugin\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header border-bottom-0\">
                                <div class=\"d-inline-block\">
                                    <span class=\"card-title\">{{ 'admin.home.recommend_plugins_title'|trans }}</span>
                                </div>
                            </div>
                            <div class=\"card-body py-0\" style=\"max-height: 395px; overflow-y: scroll\">
                                {% for plugin in recommendedPlugins %}
                                    <div class=\"row py-3 border border-bottom-0 border-left-0 border-right-0\">
                                        <div class=\"col-5 col-md-4\">
                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#searchPluginModal-{{ plugin.id }}\">
                                                <img src=\"{{ plugin.image }}\" class=\"w-100\" alt=\"{{ plugin.name }}\">
                                            </a>
                                        </div>
                                        <div class=\"col-7 col-md-8 pl-0\">
                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#searchPluginModal-{{ plugin.id }}\">{{ plugin.name }}</a>
                                            <p class=\"m-0 pt-2\">
                                                {{ plugin.short_description }}
                                            </p>
                                        </div>
                                    </div>
                                    {{ include('@admin/Store/plugin_detail_modal.twig', {'item': plugin} ) }}
                                {% endfor %}
                            </div>
                            <div class=\"card-footer\">
                                > <a href=\"{{ url('admin_store_plugin_owners_search_page') }}\">{{ 'admin.home.recommend_plugins.owner_store'|trans }}</a>
                            </div>
                        </div><!-- /#ec-cube-plugin -->
                    </div>
                    <div class=\"col mb-4\">
                        <div id=\"ec-cube-news\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header\">
                                <div class=\"d-inline-block\">
                                    <span class=\"card-title\">{{ 'admin.home.news_title'|trans }}</span>
                                </div>
                            </div>
                            <div class=\"card-body p-0\">
                                <iframe name=\"information\" class=\"link_list_wrap\" src=\"{{ eccube_config.eccube_info_url }}\" style=\"width:100%; border:0; min-height:300px;\"></iframe>
                            </div>
                        </div><!-- /#ec-cube-news -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.c-primaryCol -->
        </div><!-- /.c-contentsArea__primaryCol -->
    </div><!-- /.c-contentsArea__cols -->

{% endblock %}
", "__string_template__81dfa431313521cd6a786b6e4714d0a0f69a5122bd31ff47f5fe026d58730ba6", "");
    }
}
