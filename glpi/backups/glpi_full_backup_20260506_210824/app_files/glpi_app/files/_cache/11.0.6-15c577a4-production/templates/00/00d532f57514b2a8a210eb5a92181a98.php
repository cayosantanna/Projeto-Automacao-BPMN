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

/* layout/page_skeleton.html.twig */
class __TwigTemplate_9515fe2708118503ef1436a99096103d extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $context["interface"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface();
        // line 34
        $context["header_method"] = (((($context["interface"] ?? null) == "central")) ? ("header") : ("helpHeader"));
        // line 35
        yield "
";
        // line 36
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(["Html", ($context["header_method"] ?? null)], ["title" =>         // line 37
($context["title"] ?? null), "sector" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["menu"] ?? null), 0, [], "array", true, true, false, 38) &&  !(null === (($_v0 = ($context["menu"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null)))) ? ((($_v1 = ($context["menu"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null)) : ("none")), "item" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["menu"] ?? null), 1, [], "array", true, true, false, 39) &&  !(null === (($_v2 = ($context["menu"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[1] ?? null) : null)))) ? ((($_v3 = ($context["menu"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[1] ?? null) : null)) : ("none")), "option" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["menu"] ?? null), 2, [], "array", true, true, false, 40) &&  !(null === (($_v4 = ($context["menu"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[2] ?? null) : null)))) ? ((($_v5 = ($context["menu"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[2] ?? null) : null)) : (""))]);
        // line 42
        yield "
";
        // line 43
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 45
        yield "
";
        // line 46
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(["Html", "footer"]);
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/page_skeleton.html.twig";
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
        return array (  72 => 43,  67 => 46,  64 => 45,  62 => 43,  59 => 42,  57 => 40,  56 => 39,  55 => 38,  54 => 37,  53 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/page_skeleton.html.twig", "/var/www/html/glpi/templates/layout/page_skeleton.html.twig");
    }
}
