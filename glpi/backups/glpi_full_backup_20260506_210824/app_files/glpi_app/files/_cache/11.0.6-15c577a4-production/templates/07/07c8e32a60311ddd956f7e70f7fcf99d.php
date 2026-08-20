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

/* pages/tools/kb/knowbaseitem_item.html.twig */
class __TwigTemplate_f3f184c3101316fe861dce8c8bd89ed3 extends Template
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
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
<form method=\"post\" action=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("KnowbaseItem_Item"), "html", null, true);
        yield "\">
    ";
        // line 37
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 37, $this->getSourceContext())->macro_hidden(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
        yield "
    ";
        // line 38
        if ((get_class(($context["item"] ?? null)) == "KnowbaseItem")) {
            // line 39
            yield "        ";
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 39, $this->getSourceContext())->macro_hidden(...["knowbaseitems_id", CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 39)]);
            yield "
    ";
        } else {
            // line 41
            yield "        ";
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 41, $this->getSourceContext())->macro_hidden(...["items_id", CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 41)]);
            yield "
        ";
            // line 42
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 42, $this->getSourceContext())->macro_hidden(...["itemtype", get_class(($context["item"] ?? null))]);
            yield "
    ";
        }
        // line 44
        yield "    <div class=\"d-flex\">
        <div class=\"col-auto\">
        ";
        // line 46
        if ((get_class(($context["item"] ?? null)) == "KnowbaseItem")) {
            // line 47
            yield "            ";
            // line 48
            yield "            ";
            $context["dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 49
                yield "                ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("KnowbaseItem_Item::dropdownAllTypes", [($context["item"] ?? null), "items_id"]);
                // line 50
                yield "            ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            yield "            ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 51, $this->getSourceContext())->macro_htmlField(...["", ($context["dropdown"] ?? null), __("Add a linked item")]);
            yield "
        ";
        } else {
            // line 53
            yield "            ";
            yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown("KnowbaseItem", ["entity" => CoreExtension::getAttribute($this->env, $this->source,             // line 54
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 54), "used" =>             // line 55
($context["used_knowbase_items"] ?? null), "condition" =>             // line 56
($context["visibility_condition"] ?? null)]);
            // line 57
            yield "
        ";
        }
        // line 59
        yield "        </div>
        <div class=\"col-auto\">
            ";
        // line 61
        yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 61, $this->getSourceContext())->macro_submit(...["add", _x("button", "Add"), 1, ["class" => "btn btn-primary ms-1", "icon" => "ti ti-link"]]);
        yield "
        </div>
    </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/tools/kb/knowbaseitem_item.html.twig";
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
        return array (  116 => 61,  112 => 59,  108 => 57,  106 => 56,  105 => 55,  104 => 54,  102 => 53,  96 => 51,  92 => 50,  89 => 49,  86 => 48,  84 => 47,  82 => 46,  78 => 44,  73 => 42,  68 => 41,  62 => 39,  60 => 38,  56 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/tools/kb/knowbaseitem_item.html.twig", "/var/www/html/glpi/templates/pages/tools/kb/knowbaseitem_item.html.twig");
    }
}
