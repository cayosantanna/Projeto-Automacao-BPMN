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

/* components/itilobject/actors/assign_to_me.html.twig */
class __TwigTemplate_9586fd537c0ffcb2c0937f7b1511eb68 extends Template
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
<button type=\"submit\"
        form=\"addme_as_";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["actortype"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["main_rand"] ?? null), "html", null, true);
        yield "\"
        name=\"id\"
        value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 36)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null), "html", null, true);
        yield "\"
        class=\"btn btn-icon btn-sm btn-ghost-secondary float-end mt-1 ms-1\"
        title=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Associate myself"), "html", null, true);
        yield "\"
        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
   <i class=\"ti ti-user\"></i>
</button>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/actors/assign_to_me.html.twig";
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
        return array (  58 => 38,  53 => 36,  46 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/actors/assign_to_me.html.twig", "/var/www/html/glpi/templates/components/itilobject/actors/assign_to_me.html.twig");
    }
}
