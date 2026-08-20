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

/* pages/setup/apiclient.html.twig */
class __TwigTemplate_05547880251071513f215470e0182e46 extends Template
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
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 35
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 38, $this->getSourceContext())->macro_dropdownArrayField(...["dolog_method", (($_v0 = CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["dolog_method"] ?? null) : null),         // line 41
($context["log_methods"] ?? null), __("Log connections")]);
        // line 43
        yield "

    <div class=\"hr-text\">
        <i class=\"ti ti-filter\"></i>
        <span>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Filter access"), "html", null, true);
        yield "</span>
    </div>
    <p><em>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Leave these parameters empty to disable API access restriction"), "html", null, true);
        yield "</em></p>


    ";
        // line 52
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 52, $this->getSourceContext())->macro_textField(...["ipv4_range_start", (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v1 = CoreExtension::getAttribute($this->env, $this->source,         // line 54
($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["ipv4_range_start"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (long2ip((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["ipv4_range_start"] ?? null) : null))) : ("")), __("IPv4 address range start")]);
        // line 56
        yield "

    ";
        // line 58
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 58, $this->getSourceContext())->macro_textField(...["ipv4_range_end", (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v3 = CoreExtension::getAttribute($this->env, $this->source,         // line 60
($context["item"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["ipv4_range_end"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (long2ip((($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["ipv4_range_end"] ?? null) : null))) : ("")), __("IPv4 address range end")]);
        // line 62
        yield "

    ";
        // line 64
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 64, $this->getSourceContext())->macro_textField(...["ipv6", (($_v5 = CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["ipv6"] ?? null) : null), __("IPv6 address")]);
        // line 68
        yield "

    ";
        // line 70
        $context["reset_btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 71
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 71, $this->getSourceContext())->macro_checkboxField(...["_reset_app_token", (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 73
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0)), __("Regenerate"), ["full_width" => true]]);
            // line 78
            yield "
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        yield "
    ";
        // line 81
        yield $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 81, $this->getSourceContext())->macro_passwordField(...["app_token", $this->extensions['Glpi\Application\View\Extension\SecurityExtension']->decrypt((($_v6 = CoreExtension::getAttribute($this->env, $this->source,         // line 83
($context["item"] ?? null), "fields", [], "any", false, false, false, 83)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["app_token"] ?? null) : null)), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), __("Application token"), "app_token"), ["add_field_html" =>         // line 86
($context["reset_btn"] ?? null), "is_disclosable" => true, "clearable" => false]]);
        // line 90
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/apiclient.html.twig";
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
        return array (  124 => 90,  122 => 86,  121 => 83,  120 => 81,  117 => 80,  112 => 78,  110 => 73,  108 => 71,  106 => 70,  102 => 68,  100 => 66,  99 => 64,  95 => 62,  93 => 60,  92 => 58,  88 => 56,  86 => 54,  85 => 52,  79 => 49,  74 => 47,  68 => 43,  66 => 41,  65 => 40,  63 => 38,  56 => 37,  51 => 33,  49 => 35,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/apiclient.html.twig", "/var/www/html/glpi/templates/pages/setup/apiclient.html.twig");
    }
}
