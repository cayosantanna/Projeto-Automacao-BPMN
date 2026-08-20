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

/* components/itilobject/fields/status.html.twig */
class __TwigTemplate_f1d57438996c206c9be592c24514369b extends Template
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isReadonlyField", ["status"], "method", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "   ";
            $context["field_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["readonly" => true]);
        }
        // line 38
        yield "
";
        // line 39
        if ((($tmp = ($context["canupdate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "   ";
            $context["status_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 41
                yield "      ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "dropdownStatus", [Twig\Extension\CoreExtension::merge(["value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 42
($context["item"] ?? null), "input", [], "any", false, true, false, 42), "status", [], "array", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 42)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["status"] ?? null) : null), (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["status"] ?? null) : null))) : ((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["status"] ?? null) : null))), "value_calculation" => (($_v3 = CoreExtension::getAttribute($this->env, $this->source,                 // line 43
($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["status"] ?? null) : null), "showtype" => "allowed", "width" => "100%", "display" => false, "use_template_limits" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 47
($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 47), "id", [], "array", true, true, false, 47) &&  !(null === (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["id"] ?? null) : null)))) ? ((($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["id"] ?? null) : null)) : (0))],                 // line 48
($context["field_options"] ?? null))], "method", false, false, false, 41);
                yield "

      ";
                // line 50
                $context["validation_class"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getValidationClassInstance", [], "method", false, false, false, 50);
                // line 51
                yield "      ";
                if ((($tmp =  !(null === ($context["validation_class"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 52
                    yield "         ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["validation_class"] ?? null), "alertValidation", [($context["item"] ?? null), "status"], "method", false, false, false, 52), "html", null, true);
                    yield "
      ";
                }
                // line 54
                yield "
      ";
                // line 55
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig", ["display_for_parent" => true]);
                // line 57
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
        } else {
            // line 60
            yield "   ";
            $context["field_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["center" => true]);
            // line 61
            yield "   ";
            $context["status_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 62
                yield "      ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [(($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 62)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["status"] ?? null) : null)], "method", false, false, false, 62);
                yield "
      ";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getStatus", [(($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 63)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["status"] ?? null) : null)], "method", false, false, false, 63), "html", null, true);
                yield "

      ";
                // line 65
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canReopen", [], "method", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 66
                    yield "         <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getLinkURL", [], "method", false, false, false, 66), "html", null, true);
                    yield "&amp;_openfollowup=1\"
            class=\"btn btn-ghost-secondary\">
            <i class=\"ti ti-folder-open\"></i>
            <span>";
                    // line 69
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Reopen"), "html", null, true);
                    yield "</span>
         </a>
      ";
                }
                // line 72
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 74
        yield "
";
        // line 75
        yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 75, $this->getSourceContext())->macro_field(...["status",         // line 77
($context["status_field"] ?? null), __("Status"),         // line 79
($context["field_options"] ?? null)]);
        // line 80
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/fields/status.html.twig";
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
        return array (  139 => 80,  137 => 79,  136 => 77,  135 => 75,  132 => 74,  127 => 72,  121 => 69,  114 => 66,  112 => 65,  107 => 63,  102 => 62,  99 => 61,  96 => 60,  90 => 57,  88 => 55,  85 => 54,  79 => 52,  76 => 51,  74 => 50,  69 => 48,  68 => 47,  67 => 43,  66 => 42,  64 => 41,  61 => 40,  59 => 39,  56 => 38,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/fields/status.html.twig", "/var/www/html/glpi/templates/components/itilobject/fields/status.html.twig");
    }
}
