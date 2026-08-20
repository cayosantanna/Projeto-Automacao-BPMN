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

/* __string_template__f11db545268a7d4f2410994a21f64368 */
class __TwigTemplate_6adbb4ff036667334aef752219f506a4 extends Template
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
        yield "                <div id='viewcost";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "'></div>
                <script>
                    function viewAddCost";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield " (btn) {
                        // Hide the triggering button
                        \$(btn).hide();
                        ";
        // line 6
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemJsCode", [((("viewcost" .         // line 7
($context["id"] ?? null)) . "_") . ($context["rand"] ?? null)), ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/viewsubitem.php"), ["type" =>         // line 10
($context["type"] ?? null), "parenttype" =>         // line 11
($context["parenttype"] ?? null),  (string)        // line 12
($context["items_id"] ?? null) => ($context["id"] ?? null), "id" =>  -1]]);
        // line 16
        yield "                    }
                </script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__f11db545268a7d4f2410994a21f64368";
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
        return array (  64 => 16,  62 => 12,  61 => 11,  60 => 10,  59 => 7,  58 => 6,  50 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__f11db545268a7d4f2410994a21f64368", "");
    }
}
