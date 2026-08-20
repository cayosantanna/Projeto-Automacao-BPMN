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

/* error_block.html.twig */
class __TwigTemplate_2fb1d4828dc992dbb21f51a871d0d731 extends Template
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
        // line 32
        yield "
<div class=\"card\">
    <div class=\"card-body\">
        <div role=\"alert\" class=\"alert alert-danger alert-important\">
            <div class=\"d-flex\">
                <div class=\"me-2\">
                    <i class=\"ti ti-alert-triangle fs-2x\"></i>
                </div>
                <div>
                    ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
        yield "
                    ";
        // line 42
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["link_url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "                        <br>
                        <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link_url"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link_text"] ?? null), "html", null, true);
            yield "</a>
                    ";
        }
        // line 46
        yield "                </div>
            </div>
        </div>

        ";
        // line 50
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["trace"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "            <pre data-testid=\"stack-trace\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["trace"] ?? null), "html", null, true);
            yield "</pre>
        ";
        }
        // line 53
        yield "    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "error_block.html.twig";
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
        return array (  83 => 53,  77 => 51,  75 => 50,  69 => 46,  62 => 44,  59 => 43,  57 => 42,  53 => 41,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "error_block.html.twig", "/var/www/html/glpi/templates/error_block.html.twig");
    }
}
