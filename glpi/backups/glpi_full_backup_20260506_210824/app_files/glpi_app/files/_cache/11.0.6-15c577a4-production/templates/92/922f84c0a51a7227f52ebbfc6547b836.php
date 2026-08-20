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

/* __string_template__c903331ae19fd1b17d1bd35dfa3861b7 */
class __TwigTemplate_a182b8fc45f951fcf068441bd770bf63 extends Template
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
        yield "            ";
        if ((($tmp = ($context["mini"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "                <div class='card mb-4 d-none d-md-block dashboard-card'>
                    <div class='card-body p-2'>
            ";
        }
        // line 5
        yield "            <div class=\"dashboard ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["embed_class"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mini_class"] ?? null), "html", null, true);
        yield "\" id=\"dashboard-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\">
                <span class='glpi_logo'></span>
                ";
        // line 7
        yield ($context["toolbars"] ?? null);
        yield "
                ";
        // line 8
        yield ($context["filters"] ?? null);
        yield "
                <div class=\"grid-stack grid-stack-";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["grid_cols"] ?? null), "html", null, true);
        yield "\"
                id=\"grid-stack-";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
                gs-column=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["grid_cols"] ?? null), "html", null, true);
        yield "\"
                gs-min-row=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["grid_rows"] ?? null), "html", null, true);
        yield "\"
                style=\"width: 100%\">
                    ";
        // line 14
        yield ($context["grid_guide"] ?? null);
        yield "
                    ";
        // line 15
        yield ($context["gridstack_items"] ?? null);
        yield "
                </div>
            </div>
            ";
        // line 18
        if ((($tmp = ($context["mini"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "                    </div>
                </div>
            ";
        }
        // line 22
        yield "            <script type=\"module\">
                import('/js/modules/Dashboard/Dashboard.js').then((m) => {
                    new m.GLPIDashboard(";
        // line 24
        yield json_encode(($context["js_params"] ?? null));
        yield ");
                });
            </script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__c903331ae19fd1b17d1bd35dfa3861b7";
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
        return array (  106 => 24,  102 => 22,  97 => 19,  95 => 18,  89 => 15,  85 => 14,  80 => 12,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  50 => 5,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__c903331ae19fd1b17d1bd35dfa3861b7", "");
    }
}
