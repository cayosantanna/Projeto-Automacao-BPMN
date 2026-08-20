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

/* pages/central/index.html.twig */
class __TwigTemplate_6c0b1750343e7755eb33cc13ee888acb extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "layout/page_skeleton.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        $context["title"] = CoreExtension::getAttribute($this->env, $this->source, ($context["central"] ?? null), "getTypeName", [1], "method", false, false, false, 35);
        // line 36
        $context["menu"] = ["central", "central"];
        // line 33
        $this->parent = $this->load("layout/page_skeleton.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["central"] ?? null), "display", [], "method", false, false, false, 39);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/central/index.html.twig";
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
        return array (  63 => 39,  56 => 38,  51 => 33,  49 => 36,  47 => 35,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/central/index.html.twig", "/var/www/html/glpi/templates/pages/central/index.html.twig");
    }
}
