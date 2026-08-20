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

/* layout/page_without_tabs.html.twig */
class __TwigTemplate_c43cf52f69adea53905d0e1bfc2b02e2 extends Template
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
            'content_title' => [$this, 'block_content_title'],
            'content_body' => [$this, 'block_content_body'],
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
        $this->parent = $this->load("layout/page_skeleton.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "    <div class=\"page-header mt-0\">
        <div class=\"container container-";
        // line 37
        yield (((array_key_exists("container_size", $context) &&  !(null === $context["container_size"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["container_size"], "html", null, true)) : ("xl"));
        yield "\">
            <h1 class=\"page title mb-0\">
                ";
        // line 39
        yield from $this->unwrap()->yieldBlock('content_title', $context, $blocks);
        // line 41
        yield "            </h1>
        </div>
    </div>
    <div class=\"page-body mt-3\">
        <div class=\"container container-";
        // line 45
        yield (((array_key_exists("container_size", $context) &&  !(null === $context["container_size"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["container_size"], "html", null, true)) : ("xl"));
        yield "\">
            ";
        // line 46
        yield from $this->unwrap()->yieldBlock('content_body', $context, $blocks);
        // line 48
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "                ";
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/page_without_tabs.html.twig";
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
        return array (  108 => 47,  101 => 46,  96 => 40,  89 => 39,  82 => 48,  80 => 46,  76 => 45,  70 => 41,  68 => 39,  63 => 37,  60 => 36,  53 => 35,  42 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/page_without_tabs.html.twig", "/var/www/html/glpi/templates/layout/page_without_tabs.html.twig");
    }
}
