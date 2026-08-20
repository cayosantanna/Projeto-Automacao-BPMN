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

/* pages/login_error.html.twig */
class __TwigTemplate_7143c36e2540a8ba5ee07faece51bc58 extends Template
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
        // line 33
        return "layout/page_card_notlogged.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("layout/page_card_notlogged.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "<div class=\"alert alert-warning\">
    <div class=\"d-flex align-items-center\">
        <div class=\"me-4\">
            <i class=\"ti ti-alert-triangle fa-2x\"></i>
        </div>
        <div>
            <h4 class=\"alert-title\">
                ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Error", "Errors", 1), "html", null, true);
        yield "
            </h4>
            <div>
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 47
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
            yield "<br />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "            </div>

            <a href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["login_url"] ?? null), "html", null, true);
        yield "\" class=\"btn btn-primary mt-3\">
                <i class=\"ti ti-login\"></i>
                <span>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Log in again"), "html", null, true);
        yield "</span>
            </a>
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
        return "pages/login_error.html.twig";
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
        return array (  95 => 53,  90 => 51,  86 => 49,  77 => 47,  73 => 46,  67 => 43,  58 => 36,  51 => 35,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/login_error.html.twig", "/var/www/html/glpi/templates/pages/login_error.html.twig");
    }
}
