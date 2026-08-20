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

/* central/lists/table.html.twig */
class __TwigTemplate_cbfdc66ac4ac27d85b23ab6a5b1ed2a9 extends Template
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
";
        // line 33
        $context["superheader_row"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "    <div class=\"relative\">
        <span>";
            // line 35
            yield ($context["title"] ?? null);
            yield "</span>
        <span class=\"float-end\">
            ";
            // line 37
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["add_link"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["add_link"] ?? null), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
                yield "\">
                    <i class=\"ti ti-plus\"></i>
                </a>
            ";
            }
            // line 42
            yield "        </span>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        yield "
";
        // line 46
        $context["superheader_colspan"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["rows"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v0 = (($_v1 = ($context["rows"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["values"] ?? null) : null))) : (1));
        // line 47
        yield "
";
        // line 48
        yield from $this->load("components/table.html.twig", 48)->unwrap()->yield(CoreExtension::toArray(["class" => "table table-striped card-table table-hover", "header_rows" => Twig\Extension\CoreExtension::merge([[["colspan" =>         // line 52
($context["superheader_colspan"] ?? null), "content" =>         // line 53
($context["superheader_row"] ?? null)]]], ((        // line 55
array_key_exists("header_rows", $context)) ? (Twig\Extension\CoreExtension::default(($context["header_rows"] ?? null), [])) : ([]))), "rows" =>         // line 56
($context["rows"] ?? null)]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "central/lists/table.html.twig";
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
        return array (  85 => 56,  84 => 55,  83 => 53,  82 => 52,  81 => 48,  78 => 47,  76 => 46,  73 => 45,  67 => 42,  57 => 38,  55 => 37,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "central/lists/table.html.twig", "/var/www/html/glpi/templates/central/lists/table.html.twig");
    }
}
