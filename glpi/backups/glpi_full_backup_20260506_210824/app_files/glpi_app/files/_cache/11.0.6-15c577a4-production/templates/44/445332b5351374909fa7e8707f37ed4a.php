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

/* pages/setup/general/api_apiclients_section.html.twig */
class __TwigTemplate_83564a98806eb4fb99007d112a5d9bd6 extends Template
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
";
        // line 35
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 35, $this->getSourceContext())->macro_largeTitle(...[__("API clients (Legacy API)"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("APIClient")]);
        yield "
";
        // line 36
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::displayTitle", ["", "", "", ["apiclient.form.php" => __("Add API client")]]);
        // line 39
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Search::show", ["APIClient"]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/api_apiclients_section.html.twig";
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
        return array (  56 => 39,  54 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/api_apiclients_section.html.twig", "/var/www/html/glpi/templates/pages/setup/general/api_apiclients_section.html.twig");
    }
}
