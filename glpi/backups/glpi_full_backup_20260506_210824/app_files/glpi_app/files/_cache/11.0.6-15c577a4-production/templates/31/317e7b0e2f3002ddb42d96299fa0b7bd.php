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

/* __string_template__2a5f7ae1e258a6621d653bb678cc573f */
class __TwigTemplate_56e8a32f4d60d57e4875b3fc4515b09a extends Template
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
                    const palette = ";
        // line 9
        yield json_encode(($context["palette"] ?? null));
        yield ";
                    \$.each(chart_options.series, function (index, serie) {
                        if (";
        // line 11
        yield (((($tmp = ($context["distributed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ") {
                            serie['itemStyle'] = {
                                ...serie['itemStyle'],
                                'color': (param) => palette[param.dataIndex % palette.length]
                            }
                        }
                        serie['label'] = {
                            ...serie['label'],
                            'formatter': (param) => param.data.value == 0 ? '' : param.data.value
                        };
                    });
                    if (";
        // line 22
        yield (((($tmp = ($context["horizontal"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ") {
                        chart_options['xAxis'] = {
                            ...chart_options['xAxis'],
                            'axisLabel': {
                                'formatter': (value) => {
                                    if (value < 1e3) {
                                        return value;
                                    } else if (value < 1e6) {
                                        return value / 1e3 + \"K\";
                                    } else {
                                        return value / 1e6 + \"M\";
                                    }
                                }
                            }
                        };
                    }

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
        return "__string_template__2a5f7ae1e258a6621d653bb678cc573f";
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
        return array (  80 => 22,  66 => 11,  61 => 9,  57 => 8,  53 => 7,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__2a5f7ae1e258a6621d653bb678cc573f", "");
    }
}
