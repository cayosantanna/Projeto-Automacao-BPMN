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

/* components/itilobject/validation.html.twig */
class __TwigTemplate_d4709f90b1ddf7df5c73500fcd92ab5e extends Template
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
<div class=\"card border-0 shadow-none p-0 m-0 mt-3\">
    <div class=\"card-header mb-1 pt-2\">
        <h4 class=\"card-title \">
            ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["validation"] ?? null), "getTypeName", [2], "method", false, false, false, 38), "html", null, true);
        yield "
        </h4>
    </div>
</div>

";
        // line 43
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 43, $this->getSourceContext())->macro_htmlField(...["", CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["validation"] ?? null), "getStatus", [(($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["global_validation"] ?? null) : null), true], "method", false, false, false, 45), __("Global approval status")]);
        // line 47
        yield "

<div class=\"card border-0 shadow-none p-0 m-0 mt-3\">
    <div class=\"card-header mb-3 pt-2\">
        <h4 class=\"card-title \">
            ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Approvals"), "html", null, true);
        yield "
        </h4>
    </div>
    ";
        // line 55
        if ((($tmp = ($context["canadd"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "        ";
            if (!CoreExtension::inFilter((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["status"] ?? null) : null), ($context["donestatus"] ?? null))) {
                // line 57
                yield "            <div class=\"card-body mb-3 p-0 text-center\">
                <a class='btn btn-primary' role=\"button\" href='javascript:viewAddValidation";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tID"] ?? null), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "()'>
                    ";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Send an approval request"), "html", null, true);
                yield "
                </a>
            </div>
        ";
            }
            // line 63
            yield "    ";
        }
        // line 64
        yield "</div>

<div id=\"viewvalidation";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tID"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"></div>

<script>
    function viewAddValidation";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tID"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "() {
        var params = {
            type: '";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class(($context["validation"] ?? null)), "js"), "html", null, true);
        yield "',
            parenttype: '";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "js"), "html", null, true);
        yield "',
            ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["items_id"] ?? null), "html", null, true);
        yield ": '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["validation"] ?? null), "fields", [], "any", false, false, false, 73)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["items_id"] ?? null)] ?? null) : null), "js"), "html", null, true);
        yield "',
            id: -1
        };
        \$('#viewvalidation";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tID"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').load('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc"), "js"), "html", null, true);
        yield "/ajax/viewsubitem.php', params);
    };
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/validation.html.twig";
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
        return array (  133 => 76,  125 => 73,  121 => 72,  117 => 71,  111 => 69,  104 => 66,  100 => 64,  97 => 63,  90 => 59,  85 => 58,  82 => 57,  79 => 56,  77 => 55,  71 => 52,  64 => 47,  62 => 45,  61 => 43,  53 => 38,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/validation.html.twig", "/var/www/html/glpi/templates/components/itilobject/validation.html.twig");
    }
}
