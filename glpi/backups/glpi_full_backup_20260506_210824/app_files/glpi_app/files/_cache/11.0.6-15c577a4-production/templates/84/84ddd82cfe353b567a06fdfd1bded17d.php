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

/* pages/assistance/stats/title.html.twig */
class __TwigTemplate_f42b23518f4b50ef960653ecaba08066 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        yield "
<div class=\"container mx-auto mb-3 p-0\" style=\"width: 80%;\">
    ";
        // line 36
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 36, $this->getSourceContext())->macro_dropdownArrayField(...["statmenu",         // line 38
($context["selected"] ?? null),         // line 39
($context["values"] ?? null), __("Select statistics to be displayed"), ["full_width" => true, "on_change" => "window.location.href=this.options[this.selectedIndex].value", "add_label_class" => "fs-3"]]);
        // line 46
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/assistance/stats/title.html.twig";
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
        return array (  55 => 46,  53 => 39,  52 => 38,  51 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/assistance/stats/title.html.twig", "/var/www/html/glpi/templates/pages/assistance/stats/title.html.twig");
    }
}
