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

/* error_page.html.twig */
class __TwigTemplate_cb53354d3f1460074b5eca67b7c8d575 extends Template
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
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(["Html", ($context["header_method"] ?? null)], [($context["page_title"] ?? null)]);
        // line 34
        yield "
";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "error_block.html.twig", ["message" =>         // line 36
($context["message"] ?? null), "trace" =>         // line 37
($context["trace"] ?? null), "link_url" =>         // line 38
($context["link_url"] ?? null), "link_text" =>         // line 39
($context["link_text"] ?? null)], false);
        // line 40
        yield "

";
        // line 42
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(["Html", "footer"]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "error_page.html.twig";
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
        return array (  60 => 42,  56 => 40,  54 => 39,  53 => 38,  52 => 37,  51 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "error_page.html.twig", "/var/www/html/glpi/templates/error_page.html.twig");
    }
}
