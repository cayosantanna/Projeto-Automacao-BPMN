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

/* __string_template__005e14e3fe391cd58d09b2a80c9836b7 */
class __TwigTemplate_3951fd0805ea74f7953279e404eed371 extends Template
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
        yield "            <div class=\"table-responsive card-table\">
                <table class=\"table\">
                    <thead>
                        <tr class=\"noHover\">
                            <th><a href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/planning.php"), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["msg"] ?? null), "html", null, true);
        yield "</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class=\"noHover\">
                            <td class=\"planning_on_central\">";
        // line 10
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Planning::showPlanning", [false]);
        yield "</td>
                        </tr>
                    </tbody>
                </table>
            </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__005e14e3fe391cd58d09b2a80c9836b7";
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
        return array (  58 => 10,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__005e14e3fe391cd58d09b2a80c9836b7", "");
    }
}
