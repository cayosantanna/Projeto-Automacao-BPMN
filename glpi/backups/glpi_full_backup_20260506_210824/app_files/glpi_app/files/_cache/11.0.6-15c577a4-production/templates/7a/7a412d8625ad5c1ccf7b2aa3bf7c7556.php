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

/* pages/setup/webhook/webhook.html.twig */
class __TwigTemplate_5276c77c1854f5f5bd57862adeaf1583 extends Template
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
        // line 36
        $context["rand_field"] = ((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset())));
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "
    ";
        // line 40
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 40, $this->getSourceContext())->macro_dropdownField(...["WebhookCategory", "webhookcategories_id", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["webhookcategories_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("WebhookCategory")]);
        yield "

    ";
        // line 42
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 42, $this->getSourceContext())->macro_dropdownArrayField(...["itemtype", (($_v1 = CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["itemtype"] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["item"] ?? null), "getItemtypesDropdownValues", [], "method", false, false, false, 45), __("Itemtype"), Twig\Extension\CoreExtension::merge(        // line 47
($context["field_options"] ?? null), ["display_emptychoice" => CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 48), "rand" =>         // line 49
($context["rand_field"] ?? null)])]);
        // line 51
        yield "

    ";
        // line 53
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 53, $this->getSourceContext())->macro_dropdownArrayField(...["event", (($_v2 = CoreExtension::getAttribute($this->env, $this->source,         // line 55
($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["event"] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source,         // line 56
($context["item"] ?? null), "getGlpiEventsList", [(($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["itemtype"] ?? null) : null)], "method", false, false, false, 56), _n("Event", "Events", 1), Twig\Extension\CoreExtension::merge(        // line 58
($context["field_options"] ?? null), ["display_emptychoice" => CoreExtension::getAttribute($this->env, $this->source,         // line 59
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 59), "container_id" => "show_event_field"])]);
        // line 62
        yield "

    ";
        // line 64
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [("dropdown_itemtype" .         // line 65
($context["rand_field"] ?? null)), "show_event_field", ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/webhook.php"), ["itemtype" => "__VALUE__", "action" => "get_events_from_itemtype"]]);
        // line 73
        yield "
    ";
        // line 74
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 74, $this->getSourceContext())->macro_numberField(...["sent_try", (($_v4 = CoreExtension::getAttribute($this->env, $this->source,         // line 76
($context["item"] ?? null), "fields", [], "any", false, false, false, 76)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["sent_try"] ?? null) : null), __("Number of retries"), ["min" => 0, "max" => 255]]);
        // line 82
        yield "

    ";
        // line 84
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 84, $this->getSourceContext())->macro_largeTitle(...[_n("Target", "Targets", 1), "ti ti-viewfinder"]);
        yield "

    ";
        // line 86
        $context["url_editor_container_id"] = ("url_" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
        // line 87
        yield "    ";
        $context["url_editor_container"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 88
            yield "        <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url_editor_container_id"] ?? null), "html", null, true);
            yield "\" class=\"webhook_url form-control overflow-hidden\" style=\"height: 36px\"></div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 90, $this->getSourceContext())->macro_htmlField(...["url", ($context["url_editor_container"] ?? null), __("URL"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["wrapper_class" => "d-flex flex-grow-1", "helper" => ((__("It is strongly advised to use the HTTPS protocol.") . " ") . __("You may use the same placeholder tags as in the payload content and header values."))])]);
        // line 93
        yield "
    <script>
        const editor_options = window.GLPI.Monaco.getSingleLineEditorOptions();
        window.GLPI.Monaco.createEditor('";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url_editor_container_id"] ?? null), "html", null, true);
        yield "', 'twig', '";
        yield (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 96)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["url"] ?? null) : null);
        yield "', ";
        yield json_encode(($context["response_schema"] ?? null));
        yield ", editor_options).then(() => {
            \$('#";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url_editor_container_id"] ?? null), "html", null, true);
        yield "').closest('form').on('formdata', (e) => {
                const editors = window.monaco.editor.getEditors().filter((editor) => {
                    return editor._domElement.classList.contains('webhook_url');
                });
                if (editors.length) {
                    e.originalEvent.formData.delete('url');
                    e.originalEvent.formData.append('url', editors[0].getValue());
                }
            });
            \$('#";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url_editor_container_id"] ?? null), "html", null, true);
        yield "').closest('form').find('select[name=\"itemtype\"]').on('change', (e) => {
                // Get new Monaco suggestions from the server and then recreate the editor while preserving the value
                \$.ajax({
                    url: '";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc"), "html", null, true);
        yield "/ajax/webhook.php',
                    data: {
                        action: 'get_monaco_suggestions',
                        itemtype: e.target.value
                    },
                    success: (data) => {
                        const editors = window.monaco.editor.getEditors().filter((editor) => {
                            return editor._domElement.classList.contains('webhook_url');
                        });
                        const url_field_editor = editors[0];
                        const url_field_value = url_field_editor.getValue();
                        url_field_editor.dispose();
                        window.GLPI.Monaco.createEditor('";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url_editor_container_id"] ?? null), "html", null, true);
        yield "', 'twig', url_field_value, data, editor_options);
                    }
                });
            });
        });
    </script>

    ";
        // line 128
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 128, $this->getSourceContext())->macro_dropdownArrayField(...["http_method", (($_v6 = CoreExtension::getAttribute($this->env, $this->source,         // line 130
($context["item"] ?? null), "fields", [], "any", false, false, false, 130)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["http_method"] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source,         // line 131
($context["item"] ?? null), "getHttpMethod", [], "method", false, false, false, 131), __("HTTP method"),         // line 133
($context["field_options"] ?? null)]);
        // line 134
        yield "

    ";
        // line 136
        if ((($tmp = Twig\Extension\CoreExtension::constant("GLPI_WEBHOOK_ALLOW_RESPONSE_SAVING")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 137
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 137, $this->getSourceContext())->macro_dropdownYesNo(...["save_response_body", (($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 137)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["save_response_body"] ?? null) : null), __("Save response body")]);
            yield "
    ";
        }
        // line 139
        yield "
    ";
        // line 140
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 140, $this->getSourceContext())->macro_dropdownYesNo(...["log_in_item_history", (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 140)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["log_in_item_history"] ?? null) : null), __("Log in item history")]);
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/webhook/webhook.html.twig";
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
        return array (  203 => 140,  200 => 139,  194 => 137,  192 => 136,  188 => 134,  186 => 133,  185 => 131,  184 => 130,  183 => 128,  173 => 121,  158 => 109,  152 => 106,  140 => 97,  132 => 96,  127 => 93,  124 => 90,  117 => 88,  114 => 87,  112 => 86,  107 => 84,  103 => 82,  101 => 76,  100 => 74,  97 => 73,  95 => 65,  94 => 64,  90 => 62,  88 => 59,  87 => 58,  86 => 56,  85 => 55,  84 => 53,  80 => 51,  78 => 49,  77 => 48,  76 => 47,  75 => 45,  74 => 44,  73 => 42,  68 => 40,  65 => 39,  58 => 38,  53 => 33,  51 => 36,  49 => 35,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/webhook/webhook.html.twig", "/var/www/html/glpi/templates/pages/setup/webhook/webhook.html.twig");
    }
}
