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

/* components/itilobject/fields_panel.html.twig */
class __TwigTemplate_7b10fed344003410cc0027dcd1207c2d extends Template
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
        $context["field_options"] = ["full_width" => true, "fields_template" =>         // line 36
($context["itiltemplate"] ?? null), "disabled" => (!        // line 37
($context["canupdate"] ?? null)), "add_field_class" => (((($tmp =         // line 38
($context["is_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("col-sm-6") : ("")), "rand" =>         // line 39
($context["rand"] ?? null)];
        // line 41
        yield "
";
        // line 42
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 43
        $context["headers_states"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["itil_layout"] ?? null), "items", [], "array", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["itil_layout"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["items"] ?? null) : null), [])) : ([]));
        // line 44
        yield "
<div class=\"accordion open accordion-flush itil-object-fields\" id=\"itil-data\">
   ";
        // line 46
        $context["main_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "item-main", [], "array", true, true, false, 46) || ((($_v1 = ($context["headers_states"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["item-main"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 47
        yield "   ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITIL_INFO_SECTION"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "
   <section class=\"accordion-item\" aria-label=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 48), "html", null, true);
        yield "\">
      <div class=\"accordion-header\" id=\"heading-main-item\">
         <button class=\"accordion-button ";
        // line 50
        yield (((($tmp = ($context["main_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
        yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#item-main\" aria-expanded=\"true\" aria-controls=\"ticket-main\">
            <i class=\"ti ti-alert-circle item-icon\"></i>
            <span class='status-recall'>
                ";
        // line 53
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [(($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["status"] ?? null) : null)], "method", false, false, false, 53);
        yield "
            </span>
            <span class=\"item-title\">
                ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 56), "html", null, true);
        yield "
            </span>
         </button>
      </div>
      <section id=\"item-main\" class=\"accordion-collapse collapse ";
        // line 60
        yield (((($tmp = ($context["main_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
        yield "\" aria-labelledby=\"heading-main-item\">
         <div class=\"accordion-body row m-0 mt-n2\">

            ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

            ";
        // line 65
        if ((($tmp = Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "               ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 67
                yield "                  ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 67, $this->getSourceContext())->macro_dropdownField(...["Entity", "entities_id", (($_v3 = CoreExtension::getAttribute($this->env, $this->source,                 // line 70
($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["entities_id"] ?? null) : null), _n("Entity", "Entities", 1), Twig\Extension\CoreExtension::merge(                // line 72
($context["field_options"] ?? null), ["entity" => ((                // line 73
array_key_exists("userentities", $context)) ? (Twig\Extension\CoreExtension::default(($context["userentities"] ?? null),  -1)) : ( -1)), "on_change" => "this.form.submit()"])]);
                // line 76
                yield "
               ";
            } else {
                // line 78
                yield "                  ";
                $context["entity_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 79
                    yield "                      ";
                    if ((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasItemtypeRight("Entity", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 80
                        yield "                          ";
                        yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletenameLinkById", [(($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 80)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["entities_id"] ?? null) : null)]);
                        yield "
                      ";
                    } else {
                        // line 82
                        yield "                          ";
                        yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletenameById", [(($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 82)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["entities_id"] ?? null) : null)]);
                        yield "
                      ";
                    }
                    // line 84
                    yield "                  ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 85
                yield "
                  ";
                // line 86
                yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 86, $this->getSourceContext())->macro_field(...["",                 // line 88
($context["entity_html"] ?? null), _n("Entity", "Entities", 1), Twig\Extension\CoreExtension::merge(                // line 90
($context["field_options"] ?? null), ["add_field_class" => "d-flex align-items-center"])]);
                // line 93
                yield "
               ";
            }
            // line 95
            yield "
               ";
            // line 96
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_recursive"], "method", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 97
                yield "                  ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 97, $this->getSourceContext())->macro_dropdownYesNo(...["is_recursive", (($_v6 = CoreExtension::getAttribute($this->env, $this->source,                 // line 99
($context["item"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["is_recursive"] ?? null) : null), __("Child entities"),                 // line 101
($context["field_options"] ?? null)]);
                // line 102
                yield "
               ";
            }
            // line 104
            yield "            ";
        }
        // line 105
        yield "
            ";
        // line 106
        yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 106, $this->getSourceContext())->macro_datetimeField(...["date", (($_v7 = CoreExtension::getAttribute($this->env, $this->source,         // line 108
($context["item"] ?? null), "fields", [], "any", false, false, false, 108)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["date"] ?? null) : null), __("Opening date"),         // line 110
($context["field_options"] ?? null)]);
        // line 111
        yield "

            ";
        // line 113
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 113) != "Ticket")) {
            // line 114
            yield "               ";
            yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 114, $this->getSourceContext())->macro_datetimeField(...["time_to_resolve", (($_v8 = CoreExtension::getAttribute($this->env, $this->source,             // line 116
($context["item"] ?? null), "fields", [], "any", false, false, false, 116)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["time_to_resolve"] ?? null) : null), __("Time to resolve"),             // line 118
($context["field_options"] ?? null)]);
            // line 119
            yield "
            ";
        }
        // line 121
        yield "
            ";
        // line 122
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isSolved", [true], "method", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 123
            yield "               ";
            yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 123, $this->getSourceContext())->macro_datetimeField(...["solvedate", (($_v9 = CoreExtension::getAttribute($this->env, $this->source,             // line 125
($context["item"] ?? null), "fields", [], "any", false, false, false, 125)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["solvedate"] ?? null) : null), __("Resolution date"),             // line 127
($context["field_options"] ?? null)]);
            // line 128
            yield "
            ";
        }
        // line 130
        yield "
            ";
        // line 131
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isClosed", [], "method", false, false, false, 131)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 132
            yield "               ";
            yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 132, $this->getSourceContext())->macro_datetimeField(...["closedate", (($_v10 = CoreExtension::getAttribute($this->env, $this->source,             // line 134
($context["item"] ?? null), "fields", [], "any", false, false, false, 134)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["closedate"] ?? null) : null), __("Close date"),             // line 136
($context["field_options"] ?? null)]);
            // line 137
            yield "
            ";
        }
        // line 139
        yield "
            ";
        // line 140
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 140) == "Ticket")) {
            // line 141
            yield "               ";
            $context["type_params"] = Twig\Extension\CoreExtension::merge(["value" => (($_v11 = CoreExtension::getAttribute($this->env, $this->source,             // line 142
($context["item"] ?? null), "fields", [], "any", false, false, false, 142)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["type"] ?? null) : null), "width" => "100%", "display" => false, "rand" =>             // line 145
($context["rand"] ?? null), "readonly" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 146
($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 146), "isReadonlyField", ["type"], "method", false, false, false, 146)],             // line 147
($context["field_options"] ?? null));
            // line 148
            yield "               ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 149
                yield "                  ";
                $context["type_params"] = Twig\Extension\CoreExtension::merge(($context["type_params"] ?? null), ["on_change" => "this.form.submit()"]);
                // line 150
                yield "               ";
            } else {
                // line 151
                yield "                  ";
                $context["type_params"] = Twig\Extension\CoreExtension::merge(($context["type_params"] ?? null), ["on_change" => "reloadCategory()"]);
                // line 152
                yield "               ";
            }
            // line 153
            yield "               ";
            // line 154
            yield "               ";
            yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 154, $this->getSourceContext())->macro_field(...["type", CoreExtension::getAttribute($this->env, $this->source,             // line 156
($context["item"] ?? null), "dropdownType", ["type", ($context["type_params"] ?? null)], "method", false, false, false, 156), _n("Type", "Types", 1), Twig\Extension\CoreExtension::merge(            // line 158
($context["field_options"] ?? null), ["id" => ("dropdown_type" .             // line 159
($context["rand"] ?? null))])]);
            // line 161
            yield "
            ";
        }
        // line 163
        yield "
            ";
        // line 164
        $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["entity" => (($_v12 = CoreExtension::getAttribute($this->env, $this->source,         // line 165
($context["item"] ?? null), "fields", [], "any", false, false, false, 165)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["entities_id"] ?? null) : null), "disabled" => (!(        // line 166
($context["canupdate"] ?? null) || ($context["can_requester"] ?? null)))]);
        // line 168
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 169
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["on_change" => "this.form.submit()"]);
            // line 172
            yield "            ";
        }
        // line 173
        yield "            ";
        if ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 173) && CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["itilcategories_id"], "method", false, false, false, 173)) && ((($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 173)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["itilcategories_id"] ?? null) : null) > 0))) {
            // line 174
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["display_emptychoice" => false]);
            // line 177
            yield "            ";
        }
        // line 178
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 178) == "Ticket")) {
            // line 179
            yield "               ";
            if (((($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 179)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Ticket::INCIDENT_TYPE"))) {
                // line 180
                yield "                  ";
                $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["condition" => ["is_incident" => 1]]);
                // line 181
                yield "               ";
            } elseif (((($_v15 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 181)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Ticket::DEMAND_TYPE"))) {
                // line 182
                yield "                  ";
                $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["condition" => ["is_request" => 1]]);
                // line 183
                yield "               ";
            }
            // line 184
            yield "            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 184) == "Problem")) {
            // line 185
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["condition" => ["is_problem" => 1]]);
            // line 186
            yield "            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 186) == "Change")) {
            // line 187
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["condition" => ["is_change" => 1]]);
            // line 188
            yield "            ";
        }
        // line 189
        yield "            <span id=\"category_block_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\">
            ";
        // line 190
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 190, $this->getSourceContext())->macro_dropdownField(...["ITILCategory", "itilcategories_id", (($_v16 = CoreExtension::getAttribute($this->env, $this->source,         // line 193
($context["item"] ?? null), "fields", [], "any", false, false, false, 193)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["itilcategories_id"] ?? null) : null), _n("Category", "Categories", 1),         // line 195
($context["cat_params"] ?? null)]);
        // line 196
        yield "
            </span>

            ";
        // line 200
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields/status.html.twig");
        yield "

            ";
        // line 203
        yield "            ";
        if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 203), "global_validation", [], "array", true, true, false, 203)) ? (Twig\Extension\CoreExtension::default((($_v17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 203)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["global_validation"] ?? null) : null), 1)) : (1)) != 1)) {
            // line 204
            yield "               ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields/global_validation.html.twig");
            yield "
            ";
        }
        // line 206
        yield "
            ";
        // line 207
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["requesttypes_id"], "method", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 208
            yield "               ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 208, $this->getSourceContext())->macro_dropdownField(...["RequestType", "requesttypes_id", (($_v18 = CoreExtension::getAttribute($this->env, $this->source,             // line 211
($context["item"] ?? null), "fields", [], "any", false, false, false, 211)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["requesttypes_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("RequestType"), Twig\Extension\CoreExtension::merge(            // line 213
($context["field_options"] ?? null), ["condition" => ["is_active" => 1, "is_ticketheader" => 1]])]);
            // line 219
            yield "
            ";
        }
        // line 221
        yield "
            ";
        // line 222
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields/priority_matrix.html.twig");
        yield "

            ";
        // line 224
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["locations_id"], "method", false, false, false, 224)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 225
            yield "               ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 225, $this->getSourceContext())->macro_dropdownField(...["Location", "locations_id", (($_v19 = CoreExtension::getAttribute($this->env, $this->source,             // line 228
($context["item"] ?? null), "fields", [], "any", false, false, false, 228)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), Twig\Extension\CoreExtension::merge(            // line 230
($context["field_options"] ?? null), ["hide_if_no_elements" => true, "entity" => (($_v20 = CoreExtension::getAttribute($this->env, $this->source,             // line 232
($context["item"] ?? null), "fields", [], "any", false, false, false, 232)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["entities_id"] ?? null) : null), "entity_sons" => true])]);
            // line 235
            yield "
            ";
        }
        // line 237
        yield "
            ";
        // line 238
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 238) && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 238) == "Ticket"))) {
            // line 239
            yield "               ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 239, $this->getSourceContext())->macro_dropdownField(...["Contract", "_contracts_id", ((CoreExtension::getAttribute($this->env, $this->source,             // line 242
($context["params"] ?? null), "_contracts_id", [], "array", true, true, false, 242)) ? (Twig\Extension\CoreExtension::default((($_v21 = ($context["params"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["_contracts_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Contract"), Twig\Extension\CoreExtension::merge(            // line 244
($context["field_options"] ?? null), ["entity" => (($_v22 = CoreExtension::getAttribute($this->env, $this->source,             // line 245
($context["item"] ?? null), "fields", [], "any", false, false, false, 245)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["entities_id"] ?? null) : null), "width" => "100%", "hide_if_no_elements" => true, "nochecklimit" => true])]);
            // line 250
            yield "
            ";
        }
        // line 252
        yield "
            ";
        // line 253
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 253) == "Ticket") && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 253)) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 253))) {
            // line 254
            yield "               ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownTimestampField", $context, 254, $this->getSourceContext())->macro_dropdownTimestampField(...["actiontime", (($_v23 = CoreExtension::getAttribute($this->env, $this->source,             // line 256
($context["item"] ?? null), "fields", [], "any", false, false, false, 256)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["actiontime"] ?? null) : null), __("Total duration"),             // line 258
($context["field_options"] ?? null)]);
            // line 259
            yield "
            ";
        }
        // line 261
        yield "
            ";
        // line 262
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["externalid"], "method", false, false, false, 262)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 263
            yield "               ";
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 263, $this->getSourceContext())->macro_textField(...["externalid", (($_v24 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 263)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["externalid"] ?? null) : null), __("External ID"), ($context["field_options"] ?? null)]);
            yield "
            ";
        }
        // line 265
        yield "
            ";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "
         </div>
      </section>
   </section>

   ";
        // line 271
        $context["actors_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "actors", [], "array", true, true, false, 271) || ((($_v25 = ($context["headers_states"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["actors"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 272
        yield "   <section class=\"accordion-item\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actors"), "html", null, true);
        yield "\">
      <div class=\"accordion-header\" id=\"heading-actor\" title=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actors"), "html", null, true);
        yield "\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button ";
        // line 274
        yield (((($tmp = ($context["actors_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
        yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#actors\" aria-expanded=\"true\" aria-controls=\"actors\">
            <i class=\"ti ti-users\"></i>
            <span class=\"item-title\">
                ";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actors"), "html", null, true);
        yield "
            </span>
            <span class=\"badge bg-secondary text-secondary-fg ms-2\">
               ";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "countActors", [], "method", false, false, false, 280), "html", null, true);
        yield "
            </span>
            ";
        // line 282
        if ((( !(((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "template_preview", [], "array", true, true, false, 282) &&  !(null === (($_v26 = ($context["params"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["template_preview"] ?? null) : null)))) ? ((($_v27 = ($context["params"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["template_preview"] ?? null) : null)) : (false)) && ((array_key_exists("cancreateuser", $context)) ? (Twig\Extension\CoreExtension::default(($context["cancreateuser"] ?? null), false)) : (false))) && ($context["canupdate"] ?? null))) {
            // line 283
            yield "               ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/create_user.html.twig");
            yield "
            ";
        }
        // line 285
        yield "         </button>
      </div>
      <div id=\"actors\" class=\"accordion-collapse collapse ";
        // line 287
        yield (((($tmp = ($context["actors_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
        yield "\" aria-labelledby=\"heading-actor\">
         <div class=\"accordion-body accordion-actors row m-0 mt-n2\">
            ";
        // line 289
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/main.html.twig");
        yield "
         </div>
      </div>
   </section>

   ";
        // line 294
        if ((($tmp = ((array_key_exists("canreadnote", $context)) ? (Twig\Extension\CoreExtension::default(($context["canreadnote"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 295
            yield "      ";
            $context["notes"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Notepad::getAllForItem", [$this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("Entity", (($_v28 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 295)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["entities_id"] ?? null) : null)), "Ticket"]);
            // line 296
            yield "      ";
            $context["notes_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "notes", [], "array", true, true, false, 296) || ((($_v29 = ($context["headers_states"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["notes"] ?? null) : null) == "true"))) ? (true) : ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["notes"] ?? null)) > 0)));
            // line 297
            yield "       ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["notes"] ?? null)) != 0)) {
                // line 298
                yield "          <section class=\"accordion-item\" aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notes"), "html", null, true);
                yield "\">
             <div class=\"accordion-header\" id=\"notes-heading\" title=\"";
                // line 299
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notes"), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\">
                <button class=\"accordion-button ";
                // line 300
                yield (((($tmp = ($context["notes_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
                yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#notes\" aria-expanded=\"true\" aria-controls=\"notes\">
                   <i class=\"ti ti-notes\"></i>
                   <span class=\"item-title\">
                      ";
                // line 303
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Entity notes"), "html", null, true);
                yield "
                   </span>
                   <span class=\"badge bg-secondary text-secondary-fg ms-2\">";
                // line 305
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["notes"] ?? null)), "html", null, true);
                yield "</span>
                </button>
             </div>
             <div id=\"notes\" class=\"accordion-collapse collapse ";
                // line 308
                yield (((($tmp = ($context["notes_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
                yield "\" aria-labelledby=\"notes-heading\">
                <div class=\"accordion-body row m-0 mt-n2\">
                  ";
                // line 310
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["notes"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                    // line 311
                    yield "                     <div class=\"alert alert-info entitynote rich_text_container\" role=\"alert\">
                        ";
                    // line 312
                    yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml((($_v30 = $context["note"]) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["content"] ?? null) : null));
                    yield "

                        ";
                    // line 314
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/sub_documents.html.twig", ["item" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem((($_v31 =                     // line 315
$context["note"]) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["itemtype"] ?? null) : null), (($_v32 = $context["note"]) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["items_id"] ?? null) : null)), "entry" =>                     // line 316
$context["note"]]);
                    // line 317
                    yield "
                     </div>
                  ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 320
                yield "                </div>
             </div>
          </section>
       ";
            }
            // line 324
            yield "   ";
        }
        // line 325
        yield "
   ";
        // line 326
        if ((array_key_exists("item_commonitilobject", $context) &&  !(null === ($context["item_commonitilobject"] ?? null)))) {
            // line 327
            yield "      ";
            $context["items_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "items", [], "array", true, true, false, 327) || ((($_v33 = ($context["headers_states"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["items"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 328
            yield "      <section class=\"accordion-item\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            yield "\">
         <div class=\"accordion-header\" id=\"items-heading\" title=\"";
            // line 329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 330
            yield (((($tmp = ($context["items_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#items\" aria-expanded=\"true\" aria-controls=\"items\">
               <i class=\"ti ti-package\"></i>
               <span class=\"item-title\">
                    ";
            // line 333
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            yield "
                </span>
               <span class=\"item-counter badge bg-secondary text-secondary-fg ms-2\"></span>
               ";
            // line 336
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["items_id"], "method", false, false, false, 336)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 337
                yield "                  <span class=\"required\">*</span>
               ";
            }
            // line 339
            yield "            </button>
         </div>
         <div id=\"items\" class=\"accordion-collapse collapse ";
            // line 341
            yield (((($tmp = ($context["items_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\" aria-labelledby=\"items-heading\">
            <div class=\"accordion-body accordion-items row m-0 mt-n2\">
               ";
            // line 343
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item_commonitilobject"] ?? null), "itemAddForm", [($context["item"] ?? null), Twig\Extension\CoreExtension::merge(((array_key_exists("params", $context)) ? (Twig\Extension\CoreExtension::default(($context["params"] ?? null), [])) : ([])), ["entities_id" => ($context["entities_id"] ?? null)])], "method", false, false, false, 343), "html", null, true);
            yield "
            </div>
         </div>
      </section>
   ";
        }
        // line 348
        yield "
   ";
        // line 349
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 349) == "Ticket")) {
            // line 350
            yield "      ";
            $context["la_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 351
                yield "         ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/service_levels.html.twig");
                yield "
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 353
            yield "
      ";
            // line 354
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(($context["la_content"] ?? null))) > 0)) {
                // line 355
                yield "         ";
                $context["nb_la"] = (((((((($_v34 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 355)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["slas_id_tto"] ?? null) : null) > 0)) ? (1) : (0)) + ((((($_v35 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 355)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["slas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($_v36 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 355)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["olas_id_tto"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($_v37 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 355)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["olas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0)));
                // line 356
                yield "         ";
                $context["servicelevels_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "service-levels", [], "array", true, true, false, 356) && ((($_v38 = ($context["headers_states"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["service-levels"] ?? null) : null) == "true"))) ? (true) : (false));
                // line 357
                yield "         <section class=\"accordion-item\" aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                yield "\">
            <div class=\"accordion-header\" id=\"service-levels-heading\" title=\"";
                // line 358
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\">
               <button class=\"accordion-button ";
                // line 359
                yield (((($tmp = ($context["servicelevels_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
                yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#service-levels\" aria-expanded=\"true\" aria-controls=\"service-levels\">
                  <i class=\"ti ti-alarm\"></i>
                  <span class=\"item-title\">
                     ";
                // line 362
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                yield "
                  </span>
                  ";
                // line 364
                if ((($context["nb_la"] ?? null) > 0)) {
                    // line 365
                    yield "                     <span class=\"badge bg-secondary text-secondary-fg ms-2\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_la"] ?? null), "html", null, true);
                    yield "</span>
                  ";
                }
                // line 367
                yield "               </button>
            </div>
            <div id=\"service-levels\" class=\"accordion-collapse collapse ";
                // line 369
                yield (((($tmp = ($context["servicelevels_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
                yield "\" aria-labelledby=\"service-levels-heading\">
               <div class=\"accordion-body row m-0 mt-n2\">
                  ";
                // line 371
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["la_content"] ?? null), "html", null, true);
                yield "
               </div>
            </div>
         </section>
      ";
            }
            // line 376
            yield "   ";
        }
        // line 377
        yield "
   ";
        // line 378
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 378), ["Problem", "Change"])) {
            // line 379
            yield "      ";
            $context["analysis_fields"] = ["impactcontent" => __("Impacts"), "causecontent" => __("Causes"), "symptomcontent" => __("Symptoms"), "controlistcontent" => __("Control list")];
            // line 385
            yield "
      ";
            // line 386
            $context["nb_analysis"] = 0;
            // line 387
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 388
                yield "         ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["analysis_field"]], "method", false, false, false, 388) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim((($_v39 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 388)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[$context["analysis_field"]] ?? null) : null))) > 0))) {
                    // line 389
                    yield "            ";
                    $context["nb_analysis"] = (($context["nb_analysis"] ?? null) + 1);
                    // line 390
                    yield "         ";
                }
                // line 391
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['analysis_field'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 392
            yield "      ";
            $context["analysis_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "analysis", [], "array", true, true, false, 392) && ((($_v40 = ($context["headers_states"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["analysis"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 393
            yield "      <section class=\"accordion-item\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Analysis"), "html", null, true);
            yield "\">
         <div class=\"accordion-header\" id=\"analysis-heading\" title=\"";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Analysis"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 395
            yield (((($tmp = ($context["analysis_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#analysis\" aria-expanded=\"true\" aria-controls=\"analysis\">
               <i class=\"ti ti-eyeglass\"></i>
               <span class=\"item-title\">
                    ";
            // line 398
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Analysis"), "html", null, true);
            yield "
               </span>
               ";
            // line 400
            if ((($context["nb_analysis"] ?? null) > 0)) {
                // line 401
                yield "                  <span class=\"badge bg-secondary text-secondary-fg ms-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_analysis"] ?? null), "html", null, true);
                yield "</span>
               ";
            }
            // line 403
            yield "            </button>
         </div>
         <div id=\"analysis\" class=\"accordion-collapse collapse ";
            // line 405
            yield (((($tmp = ($context["analysis_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\" aria-labelledby=\"analysis-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 407
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 408
                yield "                  ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["analysis_field"]], "method", false, false, false, 408)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 409
                    yield "                     ";
                    yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 409, $this->getSourceContext())->macro_textareaField(...[                    // line 410
$context["analysis_field"], (($_v41 = CoreExtension::getAttribute($this->env, $this->source,                     // line 411
($context["item"] ?? null), "fields", [], "any", false, false, false, 411)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41[$context["analysis_field"]] ?? null) : null),                     // line 412
$context["label"], Twig\Extension\CoreExtension::merge(                    // line 413
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])]);
                    // line 417
                    yield "
                  ";
                }
                // line 419
                yield "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['analysis_field'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 420
            yield "            </div>
         </div>
      </section>
   ";
        }
        // line 424
        yield "
   ";
        // line 425
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 425) == "Change")) {
            // line 426
            yield "      ";
            $context["plans_fields"] = ["rolloutplancontent" => __("Deployment plan"), "backoutplancontent" => __("Backup plan"), "checklistcontent" => __("Checklist")];
            // line 431
            yield "
      ";
            // line 432
            $context["nb_plans"] = 0;
            // line 433
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 434
                yield "         ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["plans_field"]], "method", false, false, false, 434) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim((($_v42 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 434)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42[$context["plans_field"]] ?? null) : null))) > 0))) {
                    // line 435
                    yield "            ";
                    $context["nb_plans"] = (($context["nb_plans"] ?? null) + 1);
                    // line 436
                    yield "         ";
                }
                // line 437
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['plans_field'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 438
            yield "
      ";
            // line 439
            $context["plans_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "plans", [], "array", true, true, false, 439) && ((($_v43 = ($context["headers_states"] ?? null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["plans"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 440
            yield "      <section class=\"accordion-item\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plans"), "html", null, true);
            yield "\">
         <div class=\"accordion-header\" id=\"plans-heading\" title=\"";
            // line 441
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plans"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 442
            yield (((($tmp = ($context["plans_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#plans\" aria-expanded=\"true\" aria-controls=\"plans\">
               <i class=\"ti ti-checkup-list\"></i>
               <span class=\"item-title\">
                    ";
            // line 445
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plans"), "html", null, true);
            yield "
               </span>
               ";
            // line 447
            if ((($context["nb_plans"] ?? null) > 0)) {
                // line 448
                yield "                  <span class=\"badge bg-secondary text-secondary-fg ms-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_plans"] ?? null), "html", null, true);
                yield "</span>
               ";
            }
            // line 450
            yield "            </button>
         </div>
         <div id=\"plans\" class=\"accordion-collapse collapse ";
            // line 452
            yield (((($tmp = ($context["plans_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\" aria-labelledby=\"plans-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 454
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 455
                yield "                  ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["plans_field"]], "method", false, false, false, 455)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 456
                    yield "                     ";
                    yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 456, $this->getSourceContext())->macro_textareaField(...[                    // line 457
$context["plans_field"], (($_v44 = CoreExtension::getAttribute($this->env, $this->source,                     // line 458
($context["item"] ?? null), "fields", [], "any", false, false, false, 458)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[$context["plans_field"]] ?? null) : null),                     // line 459
$context["label"], Twig\Extension\CoreExtension::merge(                    // line 460
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])]);
                    // line 464
                    yield "
                  ";
                }
                // line 466
                yield "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['plans_field'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 467
            yield "            </div>
         </div>
      </section>
   ";
        }
        // line 471
        yield "
   ";
        // line 472
        $context["linked_itilobjects_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "linked_itilobjects", [], "array", true, true, false, 472) && ((($_v45 = ($context["headers_states"] ?? null)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45["linked_itilobjects"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 473
        yield "   ";
        $context["nb_linked_itilobjects"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 473)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (0) : ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("CommonITILObject_CommonITILObject::countAllLinks", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 473), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getId", [], "method", false, false, false, 473)])));
        // line 474
        yield "   <section class=\"accordion-item\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILObject_CommonITILObject", ($context["nb_linked_itilobjects"] ?? null)), "html", null, true);
        yield "\">
      <div class=\"accordion-header\" id=\"linked_itilobjects-heading\" title=\"";
        // line 475
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILObject_CommonITILObject", ($context["nb_linked_itilobjects"] ?? null)), "html", null, true);
        yield "\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button ";
        // line 476
        yield (((($tmp = ($context["linked_itilobjects_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
        yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#linked_itilobjects\" aria-expanded=\"true\" aria-controls=\"linked_itilobjects\">
            <i class=\"ti ti-link\"></i>
            ";
        // line 478
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 478) && ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 478), "items_id_2", [], "array", true, true, false, 478) &&  !(null === (($_v46 = (($_v47 = ($context["params"] ?? null)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47["_link"] ?? null) : null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46["items_id_2"] ?? null) : null)))) ? ((($_v48 = (($_v49 = ($context["params"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49["_link"] ?? null) : null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48["items_id_2"] ?? null) : null)) : (0)) > 0))) {
            // line 479
            yield "               ";
            $context["nb_linked_itilobjects"] = 1;
            // line 480
            yield "            ";
        }
        // line 481
        yield "            <span class=\"item-title\">
                 ";
        // line 482
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILObject_CommonITILObject", ($context["nb_linked_itilobjects"] ?? null)), "html", null, true);
        yield "
            </span>
            ";
        // line 484
        if ((($context["nb_linked_itilobjects"] ?? null) > 0)) {
            // line 485
            yield "               <span class=\"badge bg-secondary text-secondary-fg ms-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_linked_itilobjects"] ?? null), "html", null, true);
            yield "</span>
            ";
        }
        // line 487
        yield "         </button>
      </div>
      <div id=\"linked_itilobjects\" class=\"accordion-collapse collapse ";
        // line 489
        yield (((($tmp = ($context["linked_itilobjects_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
        yield "\" aria-labelledby=\"linked_itilobjects-heading\">
         <div class=\"accordion-body\">
            ";
        // line 491
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/linked_itilobjects.html.twig");
        yield "
         </div>
      </div>
   </section>

   ";
        // line 496
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITIL_INFO_SECTION"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

    <span class=\"d-none d-md-block\">
        <button type=\"button\" class=\"switch-panel-width btn btn-icon btn-ghost-secondary position-absolute bottom-0 start-0 mb-2\">
            <i class=\"ti ti-caret-left-filled\"></i>
        </button>
    </span>
</div>

<script type=\"text/javascript\">
\$(function() {
   if (\$(window).width() < 768) { // medium breakpoint (Todo check if it's possible to get bootstrap breakpoints withint javascript)
      \$('#itil-data .accordion-collapse').each(function() {
         \$(this).removeClass('show');
      })
   }
});

\$(function() {
    // Prevent display of accordion header tooltips when right panel is expanded
    \$('#itil-data .accordion-header').on('show.bs.tooltip', function(e) {
        if (!\$('#itil-object-container').hasClass('right-collapsed') && \$(e.target).hasClass('accordion-header')) {
            e.preventDefault();
        }
    });
});

var reloadCategory = function() {
    var type = \$('[name=type]').val();

    \$('#category_block_";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield " .field-container').load(
        '";
        // line 527
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownTicketCategories.php"), "html", null, true);
        yield "',
        {
            'type': type,
            'entity_restrict': ";
        // line 530
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v50 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 530)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50["entities_id"] ?? null) : null), "html", null, true);
        yield ",
            'value': ";
        // line 531
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v51 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 531)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51["itilcategories_id"] ?? null) : null), "html", null, true);
        yield ",
        }
    );
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
        return "components/itilobject/fields_panel.html.twig";
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
        return array (  1025 => 531,  1021 => 530,  1015 => 527,  1011 => 526,  978 => 496,  970 => 491,  965 => 489,  961 => 487,  955 => 485,  953 => 484,  948 => 482,  945 => 481,  942 => 480,  939 => 479,  937 => 478,  932 => 476,  928 => 475,  923 => 474,  920 => 473,  918 => 472,  915 => 471,  909 => 467,  903 => 466,  899 => 464,  897 => 460,  896 => 459,  895 => 458,  894 => 457,  892 => 456,  889 => 455,  885 => 454,  880 => 452,  876 => 450,  870 => 448,  868 => 447,  863 => 445,  857 => 442,  853 => 441,  848 => 440,  846 => 439,  843 => 438,  837 => 437,  834 => 436,  831 => 435,  828 => 434,  823 => 433,  821 => 432,  818 => 431,  815 => 426,  813 => 425,  810 => 424,  804 => 420,  798 => 419,  794 => 417,  792 => 413,  791 => 412,  790 => 411,  789 => 410,  787 => 409,  784 => 408,  780 => 407,  775 => 405,  771 => 403,  765 => 401,  763 => 400,  758 => 398,  752 => 395,  748 => 394,  743 => 393,  740 => 392,  734 => 391,  731 => 390,  728 => 389,  725 => 388,  720 => 387,  718 => 386,  715 => 385,  712 => 379,  710 => 378,  707 => 377,  704 => 376,  696 => 371,  691 => 369,  687 => 367,  681 => 365,  679 => 364,  674 => 362,  668 => 359,  664 => 358,  659 => 357,  656 => 356,  653 => 355,  651 => 354,  648 => 353,  641 => 351,  638 => 350,  636 => 349,  633 => 348,  625 => 343,  620 => 341,  616 => 339,  612 => 337,  610 => 336,  604 => 333,  598 => 330,  594 => 329,  589 => 328,  586 => 327,  584 => 326,  581 => 325,  578 => 324,  572 => 320,  556 => 317,  554 => 316,  553 => 315,  552 => 314,  547 => 312,  544 => 311,  527 => 310,  522 => 308,  516 => 305,  511 => 303,  505 => 300,  501 => 299,  496 => 298,  493 => 297,  490 => 296,  487 => 295,  485 => 294,  477 => 289,  472 => 287,  468 => 285,  462 => 283,  460 => 282,  455 => 280,  449 => 277,  443 => 274,  439 => 273,  434 => 272,  432 => 271,  424 => 266,  421 => 265,  415 => 263,  413 => 262,  410 => 261,  406 => 259,  404 => 258,  403 => 256,  401 => 254,  399 => 253,  396 => 252,  392 => 250,  390 => 245,  389 => 244,  388 => 242,  386 => 239,  384 => 238,  381 => 237,  377 => 235,  375 => 232,  374 => 230,  373 => 228,  371 => 225,  369 => 224,  364 => 222,  361 => 221,  357 => 219,  355 => 213,  354 => 211,  352 => 208,  350 => 207,  347 => 206,  341 => 204,  338 => 203,  332 => 200,  327 => 196,  325 => 195,  324 => 193,  323 => 190,  318 => 189,  315 => 188,  312 => 187,  309 => 186,  306 => 185,  303 => 184,  300 => 183,  297 => 182,  294 => 181,  291 => 180,  288 => 179,  285 => 178,  282 => 177,  279 => 174,  276 => 173,  273 => 172,  270 => 169,  267 => 168,  265 => 166,  264 => 165,  263 => 164,  260 => 163,  256 => 161,  254 => 159,  253 => 158,  252 => 156,  250 => 154,  248 => 153,  245 => 152,  242 => 151,  239 => 150,  236 => 149,  233 => 148,  231 => 147,  230 => 146,  229 => 145,  228 => 142,  226 => 141,  224 => 140,  221 => 139,  217 => 137,  215 => 136,  214 => 134,  212 => 132,  210 => 131,  207 => 130,  203 => 128,  201 => 127,  200 => 125,  198 => 123,  196 => 122,  193 => 121,  189 => 119,  187 => 118,  186 => 116,  184 => 114,  182 => 113,  178 => 111,  176 => 110,  175 => 108,  174 => 106,  171 => 105,  168 => 104,  164 => 102,  162 => 101,  161 => 99,  159 => 97,  157 => 96,  154 => 95,  150 => 93,  148 => 90,  147 => 88,  146 => 86,  143 => 85,  139 => 84,  133 => 82,  127 => 80,  124 => 79,  121 => 78,  117 => 76,  115 => 73,  114 => 72,  113 => 70,  111 => 67,  108 => 66,  106 => 65,  101 => 63,  95 => 60,  88 => 56,  82 => 53,  76 => 50,  71 => 48,  66 => 47,  64 => 46,  60 => 44,  58 => 43,  56 => 42,  53 => 41,  51 => 39,  50 => 38,  49 => 37,  48 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/fields_panel.html.twig", "/var/www/html/glpi/templates/components/itilobject/fields_panel.html.twig");
    }
}
