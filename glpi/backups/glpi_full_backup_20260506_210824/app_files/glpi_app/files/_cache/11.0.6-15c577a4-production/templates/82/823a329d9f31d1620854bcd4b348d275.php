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

/* components/itilobject/timeline/form_timeline_item.html.twig */
class __TwigTemplate_1aab58ee52bd090912a7bd00f4797096 extends Template
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
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        $context["form_mode"] = (((array_key_exists("form_mode", $context) &&  !(null === $context["form_mode"]))) ? ($context["form_mode"]) : ("edit"));
        // line 35
        yield "
";
        // line 36
        yield from $this->unwrap()->yieldBlock('timeline_card', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_timeline_card(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/form_timeline_item.html.twig";
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
        return array (  53 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/form_timeline_item.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/form_timeline_item.html.twig");
    }
}
