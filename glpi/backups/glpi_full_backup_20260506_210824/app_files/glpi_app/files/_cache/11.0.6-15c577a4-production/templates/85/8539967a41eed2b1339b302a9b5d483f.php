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

/* generic_show_form.html.twig */
class __TwigTemplate_d55da7f05988feb9a36b0220d1a9d9cb extends Template
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
            'form_fields' => [$this, 'block_form_fields'],
            'more_fields' => [$this, 'block_more_fields'],
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
        $context["no_header"] = ((array_key_exists("no_header", $context)) ? (Twig\Extension\CoreExtension::default(($context["no_header"] ?? null), ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 35) &&  !((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 35), false)) : (false))))) : (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 35) &&  !((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 35), false)) : (false)))));
        // line 36
        $context["bg"] = "";
        // line 37
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "   ";
            $context["bg"] = "asset-deleted";
        }
        // line 40
        yield "
<div class=\"asset ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bg"] ?? null), "html", null, true);
        yield "\">
   ";
        // line 42
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/header.html.twig", ["in_twig" => true]);
        yield "

   ";
        // line 44
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 45
        yield "   ";
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 46
        yield "   ";
        $context["target"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 46) &&  !(null === (($_v0 = ($context["params"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["target"] ?? null) : null)))) ? ((($_v1 = ($context["params"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["target"] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 46)));
        // line 47
        yield "   ";
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 47) &&  !(null === (($_v2 = ($context["params"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["withtemplate"] ?? null) : null)))) ? ((($_v3 = ($context["params"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["withtemplate"] ?? null) : null)) : (""));
        // line 48
        yield "   ";
        $context["item_type"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 48);
        // line 49
        yield "   ";
        $context["item_has_pictures"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "hasItemtypeOrModelPictures", [], "method", false, false, false, 49);
        // line 50
        yield "   ";
        $context["field_options"] = ["locked_fields" => CoreExtension::getAttribute($this->env, $this->source,         // line 51
($context["item"] ?? null), "getLockedFields", [], "method", false, false, false, 51), "rand" =>         // line 52
($context["rand"] ?? null)];
        // line 54
        yield "
    ";
        // line 56
        yield "    ";
        $context["custom_fields"] = ((array_key_exists("custom_fields", $context)) ? (Twig\Extension\CoreExtension::default(($context["custom_fields"] ?? null), [])) : ([]));
        // line 57
        yield "    ";
        $context["field_order"] = ((array_key_exists("field_order", $context)) ? (Twig\Extension\CoreExtension::default(($context["field_order"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormFields", [], "method", false, false, false, 57))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormFields", [], "method", false, false, false, 57)));
        // line 58
        yield "    ";
        $context["has_third_col"] = (($context["item_has_pictures"] ?? null) || ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 58) && CoreExtension::inFilter(($context["item_type"] ?? null), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("asset_types"))));
        // line 59
        yield "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-";
        // line 61
        yield (((($tmp = ($context["has_third_col"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("9") : ("12"));
        yield " flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\" style=\"min-width: 0;\">
               <div class=\"row flex-row\">
                  ";
        // line 65
        yield from $this->unwrap()->yieldBlock('form_fields', $context, $blocks);
        // line 550
        yield "               </div> ";
        // line 551
        yield "            </div> ";
        // line 552
        yield "         </div> ";
        // line 553
        yield "      </div>
       <div class=\"col-12 col-xxl-3 flex-column\">
           <div class=\"flex-row asset-pictures\">
               ";
        // line 556
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/pictures.html.twig", ["gallery_type" => ""]);
        yield "
           </div>
       </div>
   </div> ";
        // line 560
        yield "
   ";
        // line 561
        if ((($context["item_type"] ?? null) == "Contract")) {
            // line 562
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/support_hours.html.twig");
            yield "
   ";
        }
        // line 564
        yield "   ";
        if (( !array_key_exists("no_form_buttons", $context) || (($context["no_form_buttons"] ?? null) == false))) {
            // line 565
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/buttons.html.twig");
            yield "
   ";
        }
        // line 567
        yield "   ";
        if (( !array_key_exists("no_inventory_footer", $context) || (($context["no_inventory_footer"] ?? null) == false))) {
            // line 568
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/inventory_info.html.twig");
            yield "
   ";
        }
        // line 570
        yield "
   ";
        // line 571
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formfooter", [], "array", true, true, false, 571) &&  !(null === (($_v4 = ($context["params"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["formfooter"] ?? null) : null)))) ? ((($_v5 = ($context["params"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["formfooter"] ?? null) : null)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 572
            yield "      <div class=\"card-footer mx-n2 mb-n2\">
         ";
            // line 573
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/dates.html.twig");
            yield "
      </div>
   ";
        }
        // line 576
        yield "</div>
";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["field_order"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 67
            yield "                          ";
            $context["specific_field_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["additional_field_options"] ?? null), $context["field"], [], "array", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default((($_v6 = ($context["additional_field_options"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[$context["field"]] ?? null) : null), [])) : ([])));
            // line 68
            yield "
                          ";
            // line 69
            if (($context["field"] === "name")) {
                // line 70
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 70, $this->getSourceContext())->macro_autoNameField(...["name", ($context["item"] ?? null), (((($context["item_type"] ?? null) == "Contact")) ? (__("Surname")) : (__("Name"))), ($context["withtemplate"] ?? null), ($context["specific_field_options"] ?? null)]);
                yield "
                          ";
            } elseif ((            // line 71
$context["field"] === "firstname")) {
                // line 72
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 72, $this->getSourceContext())->macro_autoNameField(...["firstname", ($context["item"] ?? null), __("First name"), ($context["withtemplate"] ?? null), ($context["specific_field_options"] ?? null)]);
                yield "
                          ";
            } elseif ((((            // line 73
$context["field"] === "template_name") && (($context["withtemplate"] ?? null) == 1)) && ($context["no_header"] ?? null))) {
                // line 74
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 74, $this->getSourceContext())->macro_autoNameField(...["template_name", ($context["item"] ?? null), __("Template name"), 0, ($context["specific_field_options"] ?? null)]);
                yield "
                          ";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source,             // line 75
($context["item"] ?? null), "isField", ["is_active"], "method", false, false, false, 75) && ($context["field"] === "_template_is_active")) && (($context["withtemplate"] ?? null) >= 1))) {
                // line 76
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_hiddenField", $context, 76, $this->getSourceContext())->macro_hiddenField(...["is_active", (($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 76)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["is_active"] ?? null) : null)]);
                yield "
                          ";
            } elseif (((            // line 77
$context["field"] === "states_id") && $this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\State"))) {
                // line 78
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 78, $this->getSourceContext())->macro_dropdownField(...["State", "states_id", (($_v8 = CoreExtension::getAttribute($this->env, $this->source,                 // line 81
($context["item"] ?? null), "fields", [], "any", false, false, false, 81)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["states_id"] ?? null) : null), __("Status"), Twig\Extension\CoreExtension::merge(                // line 83
($context["specific_field_options"] ?? null), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 84
($context["item"] ?? null), "fields", [], "any", false, true, false, 84), "entities_id", [], "array", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default((($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 84)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["entities_id"] ?? null) : null),  -1)) : ( -1)), "condition" => CoreExtension::getAttribute($this->env, $this->source,                 // line 85
($context["item"] ?? null), "getStateVisibilityCriteria", [], "method", false, false, false, 85)])]);
                // line 87
                yield "
                          ";
            } elseif (((            // line 88
$context["field"] === CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 88)) && (($context["item_type"] ?? null) != "Software"))) {
                // line 89
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 89, $this->getSourceContext())->macro_dropdownField(...[                // line 90
($context["item_type"] ?? null),                 // line 91
$context["field"], (($_v10 = CoreExtension::getAttribute($this->env, $this->source,                 // line 92
($context["item"] ?? null), "fields", [], "any", false, false, false, 92)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[$context["field"]] ?? null) : null), __("As child of"), Twig\Extension\CoreExtension::merge(                // line 94
($context["specific_field_options"] ?? null), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 95
($context["item"] ?? null), "fields", [], "any", false, true, false, 95), "entities_id", [], "array", true, true, false, 95)) ? (Twig\Extension\CoreExtension::default((($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 95)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["entities_id"] ?? null) : null),  -1)) : ( -1)), "used" => [CoreExtension::getAttribute($this->env, $this->source,                 // line 96
($context["item"] ?? null), "getID", [], "method", false, false, false, 96)]])]);
                // line 98
                yield "
                          ";
            } elseif (((            // line 99
$context["field"] === "is_helpdesk_visible") && (($context["item_type"] ?? null) != "SoftwareLicense"))) {
                // line 100
                yield "                              ";
                // line 101
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 101, $this->getSourceContext())->macro_checkboxField(...["is_helpdesk_visible", (($_v12 = CoreExtension::getAttribute($this->env, $this->source,                 // line 103
($context["item"] ?? null), "fields", [], "any", false, false, false, 103)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["is_helpdesk_visible"] ?? null) : null), __("Associable to a ticket"),                 // line 105
($context["specific_field_options"] ?? null)]);
                // line 106
                yield "
                          ";
            } elseif ((            // line 107
$context["field"] === "_dc_breadcrumbs")) {
                // line 108
                yield "                              ";
                $context["conditions_met"] = 0;
                // line 109
                yield "                              ";
                $context["dc_breadcrumbs"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 110
                    yield "                                  ";
                    if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\DCBreadcrumb")) {
                        // line 111
                        yield "                                      ";
                        yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 111) . "::renderDcBreadcrumb"), [CoreExtension::getAttribute($this->env, $this->source,                         // line 112
($context["item"] ?? null), "getID", [], "any", false, false, false, 112)]);
                        // line 113
                        yield "
                                  ";
                    }
                    // line 115
                    yield "                              ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 116
                yield "                              ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(($context["dc_breadcrumbs"] ?? null))) > 0)) {
                    // line 117
                    yield "                                  ";
                    yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 117, $this->getSourceContext())->macro_htmlField(...["",                     // line 119
($context["dc_breadcrumbs"] ?? null), __("Data center position")]);
                    // line 121
                    yield "
                                  ";
                    // line 122
                    $context["conditions_met"] = (($context["conditions_met"] ?? null) + 1);
                    // line 123
                    yield "                              ";
                }
                // line 124
                yield "
                              ";
                // line 125
                if ((array_key_exists("cluster", $context) &&  !(null === ($context["cluster"] ?? null)))) {
                    // line 126
                    yield "                                  ";
                    yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 126, $this->getSourceContext())->macro_htmlField(...["", CoreExtension::getAttribute($this->env, $this->source,                     // line 128
($context["cluster"] ?? null), "getLink", [], "method", false, false, false, 128), _n("Cluster", "Clusters", 1)]);
                    // line 130
                    yield "
                                  ";
                    // line 131
                    $context["conditions_met"] = (($context["conditions_met"] ?? null) + 1);
                    // line 132
                    yield "                              ";
                }
                // line 133
                yield "                              ";
                if ((($context["conditions_met"] ?? null) == 1)) {
                    // line 134
                    yield "                                  ";
                    yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 134, $this->getSourceContext())->macro_nullField(...[]);
                    yield "
                              ";
                }
                // line 136
                yield "                          ";
            } elseif (($context["field"] === "locations_id")) {
                // line 137
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 137, $this->getSourceContext())->macro_dropdownField(...["Location", "locations_id", (($_v13 = CoreExtension::getAttribute($this->env, $this->source,                 // line 140
($context["item"] ?? null), "fields", [], "any", false, false, false, 140)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), Twig\Extension\CoreExtension::merge(                // line 142
($context["specific_field_options"] ?? null), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 143
($context["item"] ?? null), "fields", [], "any", false, true, false, 143), "entities_id", [], "array", true, true, false, 143)) ? (Twig\Extension\CoreExtension::default((($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 143)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["entities_id"] ?? null) : null),  -1)) : ( -1))])]);
                // line 145
                yield "
                          ";
            } elseif (((            // line 146
$context["field"] === "item_type") && (($context["item_type"] ?? null) == "Unmanaged"))) {
                // line 147
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 147, $this->getSourceContext())->macro_dropdownArrayField(...["item_type", (($_v15 = CoreExtension::getAttribute($this->env, $this->source,                 // line 149
($context["item"] ?? null), "fields", [], "any", false, false, false, 149)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["itemtype"] ?? null) : null), _n("Type", "Types", 1), ["Computer", "NetworkEquipment", "Printer", "Peripheral", "Phone"],                 // line 154
($context["specific_field_options"] ?? null)]);
                // line 155
                yield "
                          ";
            } elseif (((            // line 156
$context["field"] === "itemtype") && (($context["item_type"] ?? null) == "DefaultFilter"))) {
                // line 157
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemTypes", $context, 157, $this->getSourceContext())->macro_dropdownItemTypes(...["itemtype", (($_v16 = CoreExtension::getAttribute($this->env, $this->source,                 // line 159
($context["item"] ?? null), "fields", [], "any", false, false, false, 159)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["itemtype"] ?? null) : null), __("Itemtype"), Twig\Extension\CoreExtension::merge(                // line 161
($context["specific_field_options"] ?? null), ["types" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("globalsearch_types")])]);
                // line 162
                yield "
                          ";
            } elseif ((            // line 163
$context["field"] === "date_domaincreation")) {
                // line 164
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 164, $this->getSourceContext())->macro_datetimeField(...["date_domaincreation", (($_v17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 164)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["date_domaincreation"] ?? null) : null), __("Registration date")]);
                yield "
                          ";
            } elseif ((            // line 165
$context["field"] === CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeForeignKeyField", [], "method", false, false, false, 165))) {
                // line 166
                yield "                              ";
                $context["type_itemtype"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeClass", [], "method", false, false, false, 166);
                // line 167
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 167, $this->getSourceContext())->macro_dropdownField(...[                // line 168
($context["type_itemtype"] ?? null),                 // line 169
$context["field"], (($_v18 = CoreExtension::getAttribute($this->env, $this->source,                 // line 170
($context["item"] ?? null), "fields", [], "any", false, false, false, 170)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[$context["field"]] ?? null) : null), _n("Type", "Types", 1),                 // line 172
($context["specific_field_options"] ?? null)]);
                // line 173
                yield "
                          ";
            } elseif ((            // line 174
$context["field"] === "usertitles_id")) {
                // line 175
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 175, $this->getSourceContext())->macro_dropdownField(...["UserTitle", "usertitles_id", (($_v19 = CoreExtension::getAttribute($this->env, $this->source,                 // line 178
($context["item"] ?? null), "fields", [], "any", false, false, false, 178)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["usertitles_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("UserTitle"), Twig\Extension\CoreExtension::merge(                // line 180
($context["specific_field_options"] ?? null), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 181
($context["item"] ?? null), "fields", [], "any", false, true, false, 181), "entities_id", [], "array", true, true, false, 181)) ? (Twig\Extension\CoreExtension::default((($_v20 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 181)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["entities_id"] ?? null) : null),  -1)) : ( -1))])]);
                // line 183
                yield "
                          ";
            } elseif ((            // line 184
$context["field"] === "registration_number")) {
                // line 185
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 185, $this->getSourceContext())->macro_autoNameField(...["registration_number",                 // line 187
($context["item"] ?? null), (((is_string($_v21 =                 // line 188
($context["item_type"] ?? null)) && is_string($_v22 = "User") && str_starts_with($_v21, $_v22))) ? (_x("user", "Administrative number")) : (_x("infocom", "Administrative number"))),                 // line 189
($context["withtemplate"] ?? null),                 // line 190
($context["specific_field_options"] ?? null)]);
                // line 191
                yield "
                          ";
            } elseif ((            // line 192
$context["field"] === "phone")) {
                // line 193
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 193, $this->getSourceContext())->macro_autoNameField(...["phone",                 // line 195
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),                 // line 197
($context["withtemplate"] ?? null),                 // line 198
($context["specific_field_options"] ?? null)]);
                // line 199
                yield "
                          ";
            } elseif ((            // line 200
$context["field"] === "phone2")) {
                // line 201
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 201, $this->getSourceContext())->macro_autoNameField(...["phone2",                 // line 203
($context["item"] ?? null), __("Phone 2"),                 // line 205
($context["withtemplate"] ?? null),                 // line 206
($context["specific_field_options"] ?? null)]);
                // line 207
                yield "
                          ";
            } elseif ((            // line 208
$context["field"] === "phonenumber")) {
                // line 209
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 209, $this->getSourceContext())->macro_autoNameField(...["phonenumber",                 // line 211
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),                 // line 213
($context["withtemplate"] ?? null),                 // line 214
($context["specific_field_options"] ?? null)]);
                // line 215
                yield "
                          ";
            } elseif ((            // line 216
$context["field"] === "mobile")) {
                // line 217
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 217, $this->getSourceContext())->macro_autoNameField(...["mobile",                 // line 219
($context["item"] ?? null), __("Mobile phone"),                 // line 221
($context["withtemplate"] ?? null),                 // line 222
($context["specific_field_options"] ?? null)]);
                // line 223
                yield "
                          ";
            } elseif ((            // line 224
$context["field"] === "fax")) {
                // line 225
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 225, $this->getSourceContext())->macro_autoNameField(...["fax",                 // line 227
($context["item"] ?? null), __("Fax"),                 // line 229
($context["withtemplate"] ?? null),                 // line 230
($context["specific_field_options"] ?? null)]);
                // line 231
                yield "
                          ";
            } elseif ((            // line 232
$context["field"] === "website")) {
                // line 233
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 233, $this->getSourceContext())->macro_autoNameField(...["website",                 // line 235
($context["item"] ?? null), __("Website"),                 // line 237
($context["withtemplate"] ?? null),                 // line 238
($context["specific_field_options"] ?? null)]);
                // line 239
                yield "
                          ";
            } elseif ((            // line 240
$context["field"] === "email")) {
                // line 241
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 241, $this->getSourceContext())->macro_autoNameField(...["email",                 // line 243
($context["item"] ?? null), _n("Email", "Emails", 1),                 // line 245
($context["withtemplate"] ?? null),                 // line 246
($context["specific_field_options"] ?? null)]);
                // line 247
                yield "
                          ";
            } elseif ((            // line 248
$context["field"] === "address")) {
                // line 249
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 249, $this->getSourceContext())->macro_textareaField(...["address", (($_v23 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 249)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["address"] ?? null) : null), __("Address")]);
                yield "
                          ";
            } elseif ((            // line 250
$context["field"] === "town")) {
                // line 251
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 251, $this->getSourceContext())->macro_autoNameField(...["town",                 // line 253
($context["item"] ?? null), __("City"),                 // line 255
($context["withtemplate"] ?? null),                 // line 256
($context["specific_field_options"] ?? null)]);
                // line 257
                yield "
                          ";
            } elseif ((            // line 258
$context["field"] === "postcode")) {
                // line 259
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 259, $this->getSourceContext())->macro_autoNameField(...["postcode",                 // line 261
($context["item"] ?? null), __("Postal code"),                 // line 263
($context["withtemplate"] ?? null),                 // line 264
($context["specific_field_options"] ?? null)]);
                // line 265
                yield "
                          ";
            } elseif (((            // line 266
$context["field"] === "state") && ((($context["item_type"] ?? null) == "Supplier") || (($context["item_type"] ?? null) == "Contact")))) {
                // line 267
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 267, $this->getSourceContext())->macro_autoNameField(...["state",                 // line 269
($context["item"] ?? null), _x("location", "State"),                 // line 271
($context["withtemplate"] ?? null),                 // line 272
($context["specific_field_options"] ?? null)]);
                // line 273
                yield "
                          ";
            } elseif ((            // line 274
$context["field"] === "country")) {
                // line 275
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 275, $this->getSourceContext())->macro_autoNameField(...["country",                 // line 277
($context["item"] ?? null), __("Country"),                 // line 279
($context["withtemplate"] ?? null),                 // line 280
($context["specific_field_options"] ?? null)]);
                // line 281
                yield "
                          ";
            } elseif ((            // line 282
$context["field"] === "date_expiration")) {
                // line 283
                yield "                              ";
                if ((($context["item_type"] ?? null) == "Certificate")) {
                    // line 284
                    yield "                                  ";
                    yield $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 284, $this->getSourceContext())->macro_dateField(...["date_expiration", (($_v24 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 284)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["date_expiration"] ?? null) : null), __("Expiration date"), Twig\Extension\CoreExtension::merge(["helper" => __("Empty for infinite"), "checkIsExpired" => false, "expiration_class" => CoreExtension::getAttribute($this->env, $this->source,                     // line 287
($context["params"] ?? null), "expiration_class", [], "any", false, false, false, 287)],                     // line 288
($context["specific_field_options"] ?? null))]);
                    yield "
                              ";
                } elseif ((                // line 289
($context["item_type"] ?? null) == "ItemAntivirus")) {
                    // line 290
                    yield "                                  ";
                    yield $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 290, $this->getSourceContext())->macro_dateField(...["date_expiration", (($_v25 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 290)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["date_expiration"] ?? null) : null), __("Expiration date"), Twig\Extension\CoreExtension::merge(["helper" => __("Empty for infinite"), "checkIsExpired" => true],                     // line 293
($context["specific_field_options"] ?? null))]);
                    yield "
                              ";
                } else {
                    // line 295
                    yield "                                  ";
                    yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 295, $this->getSourceContext())->macro_datetimeField(...["date_expiration", (($_v26 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 295)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["date_expiration"] ?? null) : null), __("Expiration date"), Twig\Extension\CoreExtension::merge(["helper" => __("Empty for infinite"), "checkIsExpired" => true],                     // line 298
($context["specific_field_options"] ?? null))]);
                    yield "
                              ";
                }
                // line 300
                yield "                          ";
            } elseif (($context["field"] === "ref")) {
                // line 301
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 301, $this->getSourceContext())->macro_textField(...["ref", (($_v27 = CoreExtension::getAttribute($this->env, $this->source,                 // line 303
($context["item"] ?? null), "fields", [], "any", false, false, false, 303)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["ref"] ?? null) : null), __("Reference"),                 // line 305
($context["specific_field_options"] ?? null)]);
                // line 306
                yield "
                          ";
            } elseif ((            // line 307
$context["field"] === "users_id_tech")) {
                // line 308
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 308, $this->getSourceContext())->macro_dropdownField(...["User", "users_id_tech", (($_v28 = CoreExtension::getAttribute($this->env, $this->source,                 // line 311
($context["item"] ?? null), "fields", [], "any", false, false, false, 311)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["users_id_tech"] ?? null) : null), __("Technician in charge"), Twig\Extension\CoreExtension::merge(                // line 313
($context["specific_field_options"] ?? null), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 314
($context["item"] ?? null), "fields", [], "any", false, true, false, 314), "entities_id", [], "array", true, true, false, 314)) ? (Twig\Extension\CoreExtension::default((($_v29 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 314)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["entities_id"] ?? null) : null),  -1)) : ( -1)), "right" => "own_ticket"])]);
                // line 317
                yield "
                          ";
            } elseif ((            // line 318
$context["field"] === "manufacturers_id")) {
                // line 319
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 319, $this->getSourceContext())->macro_dropdownField(...["Manufacturer", "manufacturers_id", (($_v30 = CoreExtension::getAttribute($this->env, $this->source,                 // line 322
($context["item"] ?? null), "fields", [], "any", false, false, false, 322)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["manufacturers_id"] ?? null) : null), (((is_string($_v31 =                 // line 323
($context["item_type"] ?? null)) && is_string($_v32 = "Software") && str_starts_with($_v31, $_v32))) ? (__("Publisher")) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Manufacturer"))),                 // line 324
($context["specific_field_options"] ?? null)]);
                // line 325
                yield "
                          ";
            } elseif ((            // line 326
$context["field"] === "groups_id_tech")) {
                // line 327
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 327, $this->getSourceContext())->macro_dropdownField(...["Group", "groups_id_tech", (($_v33 = CoreExtension::getAttribute($this->env, $this->source,                 // line 330
($context["item"] ?? null), "fields", [], "any", false, false, false, 330)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["groups_id_tech"] ?? null) : null), __("Group in charge"), Twig\Extension\CoreExtension::merge(                // line 332
($context["specific_field_options"] ?? null), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 333
($context["item"] ?? null), "fields", [], "any", false, true, false, 333), "entities_id", [], "array", true, true, false, 333)) ? (Twig\Extension\CoreExtension::default((($_v34 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 333)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["entities_id"] ?? null) : null),  -1)) : ( -1)), "condition" => ["is_assign" => 1], "multiple" => (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(                // line 335
($context["item"] ?? null), "Glpi\\Features\\AssignableItem")) ? (true) : (false))])]);
                // line 337
                yield "
                          ";
            } elseif ((            // line 338
$context["field"] === CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getModelForeignKeyField", [], "method", false, false, false, 338))) {
                // line 339
                yield "                              ";
                $context["model_itemtype"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getModelClass", [], "method", false, false, false, 339);
                // line 340
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 340, $this->getSourceContext())->macro_dropdownField(...[                // line 341
($context["model_itemtype"] ?? null),                 // line 342
$context["field"], (($_v35 = CoreExtension::getAttribute($this->env, $this->source,                 // line 343
($context["item"] ?? null), "fields", [], "any", false, false, false, 343)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[$context["field"]] ?? null) : null), _n("Model", "Models", 1),                 // line 345
($context["specific_field_options"] ?? null)]);
                // line 346
                yield "
                          ";
            } elseif (((            // line 347
$context["field"] === "contact_num") && (($context["item_type"] ?? null) != "SoftwareLicense"))) {
                // line 348
                yield "                              ";
                // line 349
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 349, $this->getSourceContext())->macro_textField(...["contact_num", (($_v36 = CoreExtension::getAttribute($this->env, $this->source,                 // line 351
($context["item"] ?? null), "fields", [], "any", false, false, false, 351)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["contact_num"] ?? null) : null), __("Alternate username number"),                 // line 353
($context["specific_field_options"] ?? null)]);
                // line 354
                yield "
                          ";
            } elseif ((            // line 355
$context["field"] === "serial")) {
                // line 356
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 356, $this->getSourceContext())->macro_textField(...["serial", (($_v37 = CoreExtension::getAttribute($this->env, $this->source,                 // line 358
($context["item"] ?? null), "fields", [], "any", false, false, false, 358)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["serial"] ?? null) : null), __("Serial number"),                 // line 360
($context["specific_field_options"] ?? null)]);
                // line 361
                yield "
                          ";
            } elseif (((            // line 362
$context["field"] === "contact") && (($context["item_type"] ?? null) != "SoftwareLicense"))) {
                // line 363
                yield "                              ";
                // line 364
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 364, $this->getSourceContext())->macro_textField(...["contact", (($_v38 = CoreExtension::getAttribute($this->env, $this->source,                 // line 366
($context["item"] ?? null), "fields", [], "any", false, false, false, 366)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["contact"] ?? null) : null), __("Alternate username"),                 // line 368
($context["specific_field_options"] ?? null)]);
                // line 369
                yield "
                          ";
            } elseif ((            // line 370
$context["field"] === "otherserial")) {
                // line 371
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 371, $this->getSourceContext())->macro_autoNameField(...["otherserial",                 // line 373
($context["item"] ?? null), __("Inventory number"),                 // line 375
($context["withtemplate"] ?? null),                 // line 376
($context["specific_field_options"] ?? null)]);
                // line 377
                yield "
                          ";
            } elseif ((            // line 378
$context["field"] === "sysdescr")) {
                // line 379
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 379, $this->getSourceContext())->macro_textareaField(...["sysdescr", (($_v39 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 379)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39["sysdescr"] ?? null) : null), __("Sysdescr"), ($context["specific_field_options"] ?? null)]);
                yield "
                          ";
            } elseif ((            // line 380
$context["field"] === "snmpcredentials_id")) {
                // line 381
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 381, $this->getSourceContext())->macro_dropdownField(...["SNMPCredential", "snmpcredentials_id", (($_v40 = CoreExtension::getAttribute($this->env, $this->source,                 // line 384
($context["item"] ?? null), "fields", [], "any", false, false, false, 384)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["snmpcredentials_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("SNMPCredential"),                 // line 386
($context["specific_field_options"] ?? null)]);
                // line 387
                yield "
                          ";
            } elseif ((            // line 388
$context["field"] === "users_id")) {
                // line 389
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 389, $this->getSourceContext())->macro_dropdownField(...["User", "users_id", (($_v41 = CoreExtension::getAttribute($this->env, $this->source,                 // line 392
($context["item"] ?? null), "fields", [], "any", false, false, false, 392)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), Twig\Extension\CoreExtension::merge(                // line 394
($context["specific_field_options"] ?? null), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 395
($context["item"] ?? null), "fields", [], "any", false, true, false, 395), "entities_id", [], "array", true, true, false, 395)) ? (Twig\Extension\CoreExtension::default((($_v42 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 395)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42["entities_id"] ?? null) : null),  -1)) : ( -1)), "right" => "all"])]);
                // line 398
                yield "
                          ";
            } elseif ((            // line 399
$context["field"] === "is_global")) {
                // line 400
                yield "                              ";
                $context["management_restrict"] = 0;
                // line 401
                yield "                              ";
                if ((($context["item_type"] ?? null) == "Monitor")) {
                    // line 402
                    yield "                                  ";
                    $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("monitors_management_restrict");
                    // line 403
                    yield "                              ";
                } elseif ((($context["item_type"] ?? null) == "Peripheral")) {
                    // line 404
                    yield "                                  ";
                    $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("peripherals_management_restrict");
                    // line 405
                    yield "                              ";
                } elseif ((($context["item_type"] ?? null) == "Phone")) {
                    // line 406
                    yield "                                  ";
                    $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("phones_management_restrict");
                    // line 407
                    yield "                              ";
                } elseif ((($context["item_type"] ?? null) == "Printer")) {
                    // line 408
                    yield "                                  ";
                    $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("printers_management_restrict");
                    // line 409
                    yield "                              ";
                } else {
                    // line 410
                    yield "                                  ";
                    $context["management_restrict"] = 0;
                    // line 411
                    yield "                              ";
                }
                // line 412
                yield "                              ";
                $context["dd_globalswitch"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 413
                    yield "                                  ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showGlobalSwitch", [(($_v43 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 413)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["id"] ?? null) : null), ["withtemplate" =>                     // line 414
($context["withtemplate"] ?? null), "value" => (($_v44 = CoreExtension::getAttribute($this->env, $this->source,                     // line 415
($context["item"] ?? null), "fields", [], "any", false, false, false, 415)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44["is_global"] ?? null) : null), "management_restrict" =>                     // line 416
($context["management_restrict"] ?? null), "target" =>                     // line 417
($context["target"] ?? null), "width" => "100%"]]);
                    // line 420
                    yield "                              ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 421
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 421, $this->getSourceContext())->macro_htmlField(...["is_global",                 // line 423
($context["dd_globalswitch"] ?? null), __("Management type")]);
                // line 425
                yield "
                          ";
            } elseif ((            // line 426
$context["field"] === "size")) {
                // line 427
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 427, $this->getSourceContext())->macro_numberField(...["size", (($_v45 = CoreExtension::getAttribute($this->env, $this->source,                 // line 429
($context["item"] ?? null), "fields", [], "any", false, false, false, 429)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45["size"] ?? null) : null), __("Size"), Twig\Extension\CoreExtension::merge(                // line 431
($context["specific_field_options"] ?? null), ["min" => 0, "step" => 0.01])]);
                // line 435
                yield "
                          ";
            } elseif ((            // line 436
$context["field"] === "networks_id")) {
                // line 437
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 437, $this->getSourceContext())->macro_dropdownField(...["Network", "networks_id", (($_v46 = CoreExtension::getAttribute($this->env, $this->source,                 // line 440
($context["item"] ?? null), "fields", [], "any", false, false, false, 440)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46["networks_id"] ?? null) : null), _n("Network", "Networks", 1),                 // line 442
($context["specific_field_options"] ?? null)]);
                // line 443
                yield "
                          ";
            } elseif ((            // line 444
$context["field"] === "groups_id")) {
                // line 445
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 445, $this->getSourceContext())->macro_dropdownField(...["Group", "groups_id", (($_v47 = CoreExtension::getAttribute($this->env, $this->source,                 // line 448
($context["item"] ?? null), "fields", [], "any", false, false, false, 448)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47["groups_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), Twig\Extension\CoreExtension::merge(                // line 450
($context["specific_field_options"] ?? null), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 451
($context["item"] ?? null), "fields", [], "any", false, true, false, 451), "entities_id", [], "array", true, true, false, 451)) ? (Twig\Extension\CoreExtension::default((($_v48 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 451)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48["entities_id"] ?? null) : null),  -1)) : ( -1)), "condition" => ["is_itemgroup" => 1], "multiple" => (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(                // line 453
($context["item"] ?? null), "Glpi\\Features\\AssignableItem")) ? (true) : (false))])]);
                // line 455
                yield "
                          ";
            } elseif ((            // line 456
$context["field"] === "uuid")) {
                // line 457
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 457, $this->getSourceContext())->macro_textField(...["uuid", (($_v49 = CoreExtension::getAttribute($this->env, $this->source,                 // line 459
($context["item"] ?? null), "fields", [], "any", false, false, false, 459)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49["uuid"] ?? null) : null), __("UUID"),                 // line 461
($context["specific_field_options"] ?? null)]);
                // line 462
                yield "
                          ";
            } elseif ((            // line 463
$context["field"] === "version")) {
                // line 464
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 464, $this->getSourceContext())->macro_autoNameField(...["version",                 // line 466
($context["item"] ?? null), _n("Version", "Versions", 1),                 // line 468
($context["withtemplate"] ?? null),                 // line 469
($context["specific_field_options"] ?? null)]);
                // line 470
                yield "
                          ";
            } elseif ((            // line 471
$context["field"] === "comment")) {
                // line 472
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 472, $this->getSourceContext())->macro_textareaField(...["comment", (($_v50 = CoreExtension::getAttribute($this->env, $this->source,                 // line 474
($context["item"] ?? null), "fields", [], "any", false, false, false, 474)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()),                 // line 476
($context["specific_field_options"] ?? null)]);
                // line 477
                yield "
                          ";
            } elseif ((            // line 478
$context["field"] === "ram")) {
                // line 479
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 479, $this->getSourceContext())->macro_numberField(...["ram", (($_v51 = CoreExtension::getAttribute($this->env, $this->source,                 // line 481
($context["item"] ?? null), "fields", [], "any", false, false, false, 481)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51["ram"] ?? null) : null), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), _n("Memory", "Memories", 1), __("Mio")),                 // line 483
($context["specific_field_options"] ?? null)]);
                // line 484
                yield "
                          ";
            } elseif ((            // line 485
$context["field"] === "alarm_threshold")) {
                // line 486
                yield "                              ";
                $context["dd_alarm_treshold"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 487
                    yield "                                  ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", ["alarm_threshold", Twig\Extension\CoreExtension::merge(["value" => (($_v52 = CoreExtension::getAttribute($this->env, $this->source,                     // line 488
($context["item"] ?? null), "fields", [], "any", false, false, false, 488)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52["alarm_threshold"] ?? null) : null), "rand" =>                     // line 489
($context["rand"] ?? null), "width" => "100%", "min" => 0, "max" => 100, "step" => 1, "toadd" => ["-1" => __("Never")]],                     // line 495
($context["params"] ?? null))]);
                    // line 496
                    yield "                              ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 497
                yield "                              ";
                $context["last_alert_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 498
                    yield "                                  <span class=\"text-muted\">
                                      ";
                    // line 499
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [($context["item_type"] ?? null), (($_v53 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 499)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53["id"] ?? null) : null)]);
                    // line 500
                    yield "                                  </span>
                              ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 502
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 502, $this->getSourceContext())->macro_htmlField(...["alarm_threshold",                 // line 504
($context["dd_alarm_treshold"] ?? null), __("Alert threshold"), Twig\Extension\CoreExtension::merge(                // line 506
($context["specific_field_options"] ?? null), ["add_field_html" =>                 // line 507
($context["last_alert_html"] ?? null)])]);
                // line 509
                yield "
                          ";
            } elseif ((            // line 510
$context["field"] === "brand")) {
                // line 511
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 511, $this->getSourceContext())->macro_textField(...["brand", (($_v54 = CoreExtension::getAttribute($this->env, $this->source,                 // line 513
($context["item"] ?? null), "fields", [], "any", false, false, false, 513)) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54["brand"] ?? null) : null), __("Brand"),                 // line 515
($context["specific_field_options"] ?? null)]);
                // line 516
                yield "
                          ";
            } elseif ((            // line 517
$context["field"] === "begin_date")) {
                // line 518
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 518, $this->getSourceContext())->macro_dateField(...["begin_date", (($_v55 = CoreExtension::getAttribute($this->env, $this->source,                 // line 520
($context["item"] ?? null), "fields", [], "any", false, false, false, 520)) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55["begin_date"] ?? null) : null), __("Start date"),                 // line 522
($context["specific_field_options"] ?? null)]);
                // line 523
                yield "
                          ";
            } elseif ((            // line 524
$context["field"] === "autoupdatesystems_id")) {
                // line 525
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 525, $this->getSourceContext())->macro_dropdownField(...["AutoUpdateSystem", "autoupdatesystems_id", (($_v56 = CoreExtension::getAttribute($this->env, $this->source,                 // line 528
($context["item"] ?? null), "fields", [], "any", false, false, false, 528)) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56["autoupdatesystems_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("AutoUpdateSystem"),                 // line 530
($context["specific_field_options"] ?? null)]);
                // line 531
                yield "
                          ";
            } elseif ((            // line 532
$context["field"] === "pictures")) {
                // line 533
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_fileField", $context, 533, $this->getSourceContext())->macro_fileField(...["pictures", null, _n("Picture", "Pictures", Session::getPluralNumber()), ["onlyimages" => true, "multiple" => true]]);
                // line 536
                yield "
                          ";
            } elseif ((            // line 537
$context["field"] === "is_active")) {
                // line 538
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 538, $this->getSourceContext())->macro_dropdownYesNo(...["is_active", (($_v57 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 538)) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57["is_active"] ?? null) : null), __("Active"), ($context["specific_field_options"] ?? null)]);
                yield "
                          ";
            } elseif ((((            // line 539
$context["field"] === "last_boot") && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_dynamic"], "method", false, false, false, 539)) && (($_v58 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 539)) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58["is_dynamic"] ?? null) : null))) {
                // line 540
                yield "                              ";
                // line 541
                yield "                              ";
                yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 541, $this->getSourceContext())->macro_htmlField(...["last_boot", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v59 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 541)) && is_array($_v59) || $_v59 instanceof ArrayAccess ? ($_v59["last_boot"] ?? null) : null), true)), __("Last boot date")]);
                yield "
                          ";
            } elseif (CoreExtension::inFilter(            // line 542
$context["field"], Twig\Extension\CoreExtension::keys(($context["custom_fields"] ?? null)))) {
                // line 543
                yield "                              ";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v60 = ($context["custom_fields"] ?? null)) && is_array($_v60) || $_v60 instanceof ArrayAccess ? ($_v60[$context["field"]] ?? null) : null), "getFieldType", [], "method", false, false, false, 543), "getFormInput", [$context["field"], (($_v61 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 543)) && is_array($_v61) || $_v61 instanceof ArrayAccess ? ($_v61[$context["field"]] ?? null) : null)], "method", false, false, false, 543);
                yield "
                          ";
            }
            // line 545
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 546
        yield "
                     ";
        // line 547
        yield from $this->unwrap()->yieldBlock('more_fields', $context, $blocks);
        // line 549
        yield "                  ";
        yield from [];
    }

    // line 547
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 548
        yield "                     ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "generic_show_form.html.twig";
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
        return array (  955 => 548,  948 => 547,  943 => 549,  941 => 547,  938 => 546,  932 => 545,  926 => 543,  924 => 542,  919 => 541,  917 => 540,  915 => 539,  910 => 538,  908 => 537,  905 => 536,  902 => 533,  900 => 532,  897 => 531,  895 => 530,  894 => 528,  892 => 525,  890 => 524,  887 => 523,  885 => 522,  884 => 520,  882 => 518,  880 => 517,  877 => 516,  875 => 515,  874 => 513,  872 => 511,  870 => 510,  867 => 509,  865 => 507,  864 => 506,  863 => 504,  861 => 502,  856 => 500,  854 => 499,  851 => 498,  848 => 497,  844 => 496,  842 => 495,  841 => 489,  840 => 488,  838 => 487,  835 => 486,  833 => 485,  830 => 484,  828 => 483,  827 => 481,  825 => 479,  823 => 478,  820 => 477,  818 => 476,  817 => 474,  815 => 472,  813 => 471,  810 => 470,  808 => 469,  807 => 468,  806 => 466,  804 => 464,  802 => 463,  799 => 462,  797 => 461,  796 => 459,  794 => 457,  792 => 456,  789 => 455,  787 => 453,  786 => 451,  785 => 450,  784 => 448,  782 => 445,  780 => 444,  777 => 443,  775 => 442,  774 => 440,  772 => 437,  770 => 436,  767 => 435,  765 => 431,  764 => 429,  762 => 427,  760 => 426,  757 => 425,  755 => 423,  753 => 421,  749 => 420,  747 => 417,  746 => 416,  745 => 415,  744 => 414,  742 => 413,  739 => 412,  736 => 411,  733 => 410,  730 => 409,  727 => 408,  724 => 407,  721 => 406,  718 => 405,  715 => 404,  712 => 403,  709 => 402,  706 => 401,  703 => 400,  701 => 399,  698 => 398,  696 => 395,  695 => 394,  694 => 392,  692 => 389,  690 => 388,  687 => 387,  685 => 386,  684 => 384,  682 => 381,  680 => 380,  675 => 379,  673 => 378,  670 => 377,  668 => 376,  667 => 375,  666 => 373,  664 => 371,  662 => 370,  659 => 369,  657 => 368,  656 => 366,  654 => 364,  652 => 363,  650 => 362,  647 => 361,  645 => 360,  644 => 358,  642 => 356,  640 => 355,  637 => 354,  635 => 353,  634 => 351,  632 => 349,  630 => 348,  628 => 347,  625 => 346,  623 => 345,  622 => 343,  621 => 342,  620 => 341,  618 => 340,  615 => 339,  613 => 338,  610 => 337,  608 => 335,  607 => 333,  606 => 332,  605 => 330,  603 => 327,  601 => 326,  598 => 325,  596 => 324,  595 => 323,  594 => 322,  592 => 319,  590 => 318,  587 => 317,  585 => 314,  584 => 313,  583 => 311,  581 => 308,  579 => 307,  576 => 306,  574 => 305,  573 => 303,  571 => 301,  568 => 300,  563 => 298,  561 => 295,  556 => 293,  554 => 290,  552 => 289,  548 => 288,  547 => 287,  545 => 284,  542 => 283,  540 => 282,  537 => 281,  535 => 280,  534 => 279,  533 => 277,  531 => 275,  529 => 274,  526 => 273,  524 => 272,  523 => 271,  522 => 269,  520 => 267,  518 => 266,  515 => 265,  513 => 264,  512 => 263,  511 => 261,  509 => 259,  507 => 258,  504 => 257,  502 => 256,  501 => 255,  500 => 253,  498 => 251,  496 => 250,  491 => 249,  489 => 248,  486 => 247,  484 => 246,  483 => 245,  482 => 243,  480 => 241,  478 => 240,  475 => 239,  473 => 238,  472 => 237,  471 => 235,  469 => 233,  467 => 232,  464 => 231,  462 => 230,  461 => 229,  460 => 227,  458 => 225,  456 => 224,  453 => 223,  451 => 222,  450 => 221,  449 => 219,  447 => 217,  445 => 216,  442 => 215,  440 => 214,  439 => 213,  438 => 211,  436 => 209,  434 => 208,  431 => 207,  429 => 206,  428 => 205,  427 => 203,  425 => 201,  423 => 200,  420 => 199,  418 => 198,  417 => 197,  416 => 195,  414 => 193,  412 => 192,  409 => 191,  407 => 190,  406 => 189,  405 => 188,  404 => 187,  402 => 185,  400 => 184,  397 => 183,  395 => 181,  394 => 180,  393 => 178,  391 => 175,  389 => 174,  386 => 173,  384 => 172,  383 => 170,  382 => 169,  381 => 168,  379 => 167,  376 => 166,  374 => 165,  369 => 164,  367 => 163,  364 => 162,  362 => 161,  361 => 159,  359 => 157,  357 => 156,  354 => 155,  352 => 154,  351 => 149,  349 => 147,  347 => 146,  344 => 145,  342 => 143,  341 => 142,  340 => 140,  338 => 137,  335 => 136,  329 => 134,  326 => 133,  323 => 132,  321 => 131,  318 => 130,  316 => 128,  314 => 126,  312 => 125,  309 => 124,  306 => 123,  304 => 122,  301 => 121,  299 => 119,  297 => 117,  294 => 116,  290 => 115,  286 => 113,  284 => 112,  282 => 111,  279 => 110,  276 => 109,  273 => 108,  271 => 107,  268 => 106,  266 => 105,  265 => 103,  263 => 101,  261 => 100,  259 => 99,  256 => 98,  254 => 96,  253 => 95,  252 => 94,  251 => 92,  250 => 91,  249 => 90,  247 => 89,  245 => 88,  242 => 87,  240 => 85,  239 => 84,  238 => 83,  237 => 81,  235 => 78,  233 => 77,  228 => 76,  226 => 75,  221 => 74,  219 => 73,  214 => 72,  212 => 71,  207 => 70,  205 => 69,  202 => 68,  199 => 67,  194 => 66,  187 => 65,  181 => 576,  175 => 573,  172 => 572,  170 => 571,  167 => 570,  161 => 568,  158 => 567,  152 => 565,  149 => 564,  143 => 562,  141 => 561,  138 => 560,  132 => 556,  127 => 553,  125 => 552,  123 => 551,  121 => 550,  119 => 65,  112 => 61,  108 => 59,  105 => 58,  102 => 57,  99 => 56,  96 => 54,  94 => 52,  93 => 51,  91 => 50,  88 => 49,  85 => 48,  82 => 47,  79 => 46,  76 => 45,  74 => 44,  69 => 42,  65 => 41,  62 => 40,  58 => 38,  56 => 37,  54 => 36,  52 => 35,  49 => 34,  47 => 33,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "generic_show_form.html.twig", "/var/www/html/glpi/templates/generic_show_form.html.twig");
    }
}
