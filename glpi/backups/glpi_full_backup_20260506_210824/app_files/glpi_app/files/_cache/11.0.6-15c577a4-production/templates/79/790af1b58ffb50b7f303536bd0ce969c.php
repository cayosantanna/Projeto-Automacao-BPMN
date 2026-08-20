<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* __string_template__84adc0709179f0f28d0a8afe7e12d57e */
class __TwigTemplate_ef36131cacac79c1dd2b154e0583575f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "            <script type=\"module\">
                (async () => {
                    await import('/js/modules/Dashboard/Dashboard.js');

                    const target = GLPI.Dashboard.getActiveDashboard() ?
                        GLPI.Dashboard.getActiveDashboard().element.find('#";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["chart_id"] ?? null), "html", null, true);
        yield " .chart')
                        : \$('#";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["chart_id"] ?? null), "html", null, true);
        yield " .chart');
                    const chart_options = ";
        // line 8
        yield json_encode(($context["options"] ?? null));
        yield ";

                    \$.each(chart_options.series, function (index, serie) {
                        if (";
        // line 11
        yield (((($tmp = ($context["show_points"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ") {
                            serie['symbol'] = (value) => value > 0 ? 'circle': 'none';
                        }
                        if (";
        // line 14
        yield (((($tmp = ($context["point_labels"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ") {
                            serie['label']['formatter'] = (param) => param.data.value == 0 ? '': param.data.value;
                        }
                    });

                    const myChart = echarts.init(target[0]);
                    myChart.setOption(chart_options);
                    myChart
                        .on('click', function (params) {
                            const data_url = _.get(params, 'data.url', '');
                            if (data_url.length > 0) {
                                window.location.href = data_url;
                            }
                        });

                    target.on('mouseover', () => {
                        myChart.setOption({'toolbox': {'show': true}});
                    }).on('mouseout', () => {
                        myChart.setOption({'toolbox': {'show': false}});
                    });

                })();
            </script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__84adc0709179f0f28d0a8afe7e12d57e";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  69 => 14,  63 => 11,  57 => 8,  53 => 7,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__84adc0709179f0f28d0a8afe7e12d57e", "");
    }
}
