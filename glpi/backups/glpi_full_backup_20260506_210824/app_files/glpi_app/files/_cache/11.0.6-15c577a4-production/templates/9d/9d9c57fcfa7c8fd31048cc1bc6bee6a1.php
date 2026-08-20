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

/* __string_template__ec2bd6125bacbee14205ef76cb366944 */
class __TwigTemplate_da28100fa8d4ce24b07bd961a4de994f extends Template
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
        // line 1
        yield "                ";
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "                <div class=\"mb-3\">
                    <form method=\"post\" action=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket_Contract"), "html", null, true);
        yield "\">
                        <div class=\"d-flex\">
                            <input type=\"hidden\" name=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["item_a_fkey"] ?? null), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
                            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
                            ";
        // line 7
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 7, $this->getSourceContext())->macro_dropdownField(...[($context["linked_itemtype"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey(($context["linked_itemtype"] ?? null)), 0, null, ["used" =>         // line 8
($context["used"] ?? null), "displaywith" => ["id"], "entity" => (($_v0 = CoreExtension::getAttribute($this->env, $this->source,         // line 10
($context["item"] ?? null), "fields", [], "any", false, false, false, 10)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["entities_id"] ?? null) : null), "nochecklimit" => true]]);
        // line 12
        yield "
                            ";
        // line 13
        $context["btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 14
            yield "                                <button type=\"submit\" class=\"btn btn-primary\" name=\"add\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btn_label"] ?? null), "html", null, true);
            yield "</button>
                            ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        yield "                            ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 16, $this->getSourceContext())->macro_htmlField(...["", ($context["btn"] ?? null), null]);
        yield "
                        </div>
                    </form>
                </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__ec2bd6125bacbee14205ef76cb366944";
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
        return array (  79 => 16,  72 => 14,  70 => 13,  67 => 12,  65 => 10,  64 => 8,  63 => 7,  59 => 6,  53 => 5,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__ec2bd6125bacbee14205ef76cb366944", "");
    }
}
