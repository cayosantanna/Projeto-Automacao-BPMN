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

/* components/illustration/icon.svg.twig */
class __TwigTemplate_4159df2985e152fa89e353f8fa32dbe2 extends Template
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
<svg role=\"img\" width=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["width"] ?? null), "html", null, true);
        yield "\" height=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["height"] ?? null), "html", null, true);
        yield "\" class=\"flex-shrink-0\">
    <title>";
        // line 34
        yield (((array_key_exists("title", $context) &&  !(null === $context["title"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["title"], "html", null, true)) : (""));
        yield "</title>
    <use xlink:href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(($context["file_path"] ?? null)), "html", null, true);
        yield "#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon_id"] ?? null), "html", null, true);
        yield "\"/>
</svg>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/illustration/icon.svg.twig";
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
        return array (  55 => 35,  51 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/illustration/icon.svg.twig", "/var/www/html/glpi/templates/components/illustration/icon.svg.twig");
    }
}
