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

/* install/install.install_required.html.twig */
class __TwigTemplate_73f7373d4eb555304215b49f6b2c9d51 extends Template
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
            'content_block' => [$this, 'block_content_block'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 35
        return "layout/page_card_notlogged.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        $context["title"] = __("GLPI setup");
        // line 35
        $this->parent = $this->load("layout/page_card_notlogged.html.twig", 35);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "<div class=\"flex-fill d-flex align-items-center justify-content-center\">
    <div class=\"empty p-0\">
        <i class=\"fas fa-tools fa-3x mb-3\"></i>

        <p class=\"empty-title\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("GLPI setup"), "html", null, true);
        yield "</p>

        <p class=\"empty-subtitle\">
            ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The GLPI database must be configured and installed."), "html", null, true);
        yield "
        </p>
        <div class=\"empty-action\">
            <a href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/install/install.php"), "html", null, true);
        yield "\" class=\"btn btn-primary\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Go to install page"), "html", null, true);
        yield "</a>
        </div>

        <div class=\"alert alert-warning mt-4\">
            ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("If you see this page when the installation has already been done, it means that the GLPI database configuration file has been removed or corrupted."), "html", null, true);
        yield "
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/install.install_required.html.twig";
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
        return array (  88 => 52,  79 => 48,  73 => 45,  67 => 42,  61 => 38,  54 => 37,  49 => 35,  47 => 33,  40 => 35,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/install.install_required.html.twig", "/var/www/html/glpi/templates/install/install.install_required.html.twig");
    }
}
