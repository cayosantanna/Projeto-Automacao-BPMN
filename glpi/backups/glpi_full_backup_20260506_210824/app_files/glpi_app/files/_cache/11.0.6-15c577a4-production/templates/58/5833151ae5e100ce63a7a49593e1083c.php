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

/* pages/setup/general/preferences_setup.html.twig */
class __TwigTemplate_2f6c40f1dc2c9c9bbfa40ccae709fa0b extends Template
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
            'config_fields' => [$this, 'block_config_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "pages/setup/general/base_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 35
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 35)->unwrap();
        // line 37
        $context["field_options"] = ["label_class" => "col-xxl-7", "input_class" => "col-xxl-5"];
        // line 33
        $this->parent = $this->load("pages/setup/general/base_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "   ";
        if ((($tmp = ($context["is_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 44, $this->getSourceContext())->macro_largeTitle(...[__("Personalization"), "ti ti-adjustments"]);
            yield "
      ";
            // line 45
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 45, $this->getSourceContext())->macro_hidden(...["id", (($_v0 = ($context["config"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null)]);
            yield "
   ";
        } else {
            // line 47
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 47, $this->getSourceContext())->macro_largeTitle(...[__("Default values"), "ti ti-adjustments"]);
            yield "
   ";
        }
        // line 49
        yield "
   ";
        // line 50
        if ((($tmp =  !($context["can_edit_config"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "      ";
            $context["lang_dropdown"] = "";
            // line 52
            yield "   ";
        } else {
            // line 53
            yield "      ";
            $context["lang_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 54
                yield "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showLanguages", ["language", ["value" => (($_v1 =                 // line 55
($context["config"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["language"] ?? null) : null)]]);
                // line 57
                yield "      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 58
            yield "   ";
        }
        // line 59
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 59, $this->getSourceContext())->macro_htmlField(...["", ($context["lang_dropdown"] ?? null), (((($tmp = ($context["is_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (__("Language")) : (__("Default language"))), ($context["field_options"] ?? null)]);
        yield "
   ";
        // line 60
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 60, $this->getSourceContext())->macro_dropdownArrayField(...["date_format", (($_v2 = ($context["config"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["date_format"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::phpDateFormats"), __("Date format"), ($context["field_options"] ?? null)]);
        yield "

   ";
        // line 62
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 62, $this->getSourceContext())->macro_dropdownArrayField(...["names_format", (($_v3 = ($context["config"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["names_format"] ?? null) : null), [Twig\Extension\CoreExtension::constant("User::REALNAME_BEFORE") => __("Surname, First name"), Twig\Extension\CoreExtension::constant("User::FIRSTNAME_BEFORE") => __("First name, Surname")], __("Display order of surnames firstnames"),         // line 65
($context["field_options"] ?? null)]);
        yield "
   ";
        // line 66
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 66, $this->getSourceContext())->macro_dropdownArrayField(...["number_format", (($_v4 = ($context["config"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["number_format"] ?? null) : null), ["1 234.56", "1,234.56", "1 234,56", "1234.56", "1234,56"], __("Number format"),         // line 72
($context["field_options"] ?? null)]);
        yield "

   ";
        // line 74
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 74, $this->getSourceContext())->macro_dropdownNumberField(...["list_limit", (($_v5 = ($context["config"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["list_limit"] ?? null) : null), __("Results to display by page"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["min" => 5, "max" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("list_limit_max"), "step" => 5])]);
        // line 78
        yield "
   ";
        // line 79
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 79, $this->getSourceContext())->macro_dropdownYesNo(...["backcreated", (($_v6 = ($context["config"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["backcreated"] ?? null) : null), __("Go to created item after creation"), ($context["field_options"] ?? null)]);
        yield "

   ";
        // line 81
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
            // line 82
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 82, $this->getSourceContext())->macro_dropdownYesNo(...["use_flat_dropdowntree", (($_v7 =             // line 84
($context["config"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["use_flat_dropdowntree"] ?? null) : null), __("Display the tree dropdown complete name in dropdown inputs"),             // line 86
($context["field_options"] ?? null)]);
            // line 87
            yield "
      ";
            // line 88
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 88, $this->getSourceContext())->macro_dropdownYesNo(...["use_flat_dropdowntree_on_search_result", (($_v8 =             // line 90
($context["config"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["use_flat_dropdowntree_on_search_result"] ?? null) : null), __("Display the complete name of tree dropdown in search results"),             // line 92
($context["field_options"] ?? null)]);
            // line 93
            yield "
   ";
        }
        // line 95
        yield "
   ";
        // line 96
        if (( !($context["is_user"] ?? null) || ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("show_count_on_tabs") !=  -1))) {
            // line 97
            yield "      ";
            $context["count_options"] = [__("No"), __("Yes")];
            // line 101
            yield "      ";
            if ((($tmp =  !($context["is_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 102
                yield "         ";
                $context["count_options"] = (($context["count_options"] ?? null) + [(-1) => __("Never")]);
                // line 105
                yield "      ";
            }
            // line 106
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 106, $this->getSourceContext())->macro_dropdownArrayField(...["show_count_on_tabs", (($_v9 = ($context["config"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["show_count_on_tabs"] ?? null) : null), ($context["count_options"] ?? null), __("Display counters"), ($context["field_options"] ?? null)]);
            yield "
   ";
        }
        // line 108
        yield "
   ";
        // line 109
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 109, $this->getSourceContext())->macro_dropdownYesNo(...["is_ids_visible", (($_v10 = ($context["config"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["is_ids_visible"] ?? null) : null), __("Show GLPI ID"), ($context["field_options"] ?? null)]);
        yield "
   ";
        // line 110
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 110, $this->getSourceContext())->macro_dropdownYesNo(...["keep_devices_when_purging_item", (($_v11 = ($context["config"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["keep_devices_when_purging_item"] ?? null) : null), __("Keep devices when purging an item"), ($context["field_options"] ?? null)]);
        yield "

   ";
        // line 112
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 112, $this->getSourceContext())->macro_dropdownYesNo(...["notification_to_myself", (($_v12 = ($context["config"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["notification_to_myself"] ?? null) : null), __("Notifications for my changes"), ($context["field_options"] ?? null)]);
        yield "
   ";
        // line 113
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 113, $this->getSourceContext())->macro_dropdownNumberField(...["display_count_on_home", (($_v13 = ($context["config"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["display_count_on_home"] ?? null) : null), __("Results to display on home page"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["min" => 0, "max" => 30])]);
        // line 116
        yield "

   ";
        // line 118
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 118, $this->getSourceContext())->macro_dropdownArrayField(...["pdffont", (($_v14 = ($context["config"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["pdffont"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("GLPIPDF::getFontList"), __("PDF export font"), ($context["field_options"] ?? null)]);
        yield "
   ";
        // line 119
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 119, $this->getSourceContext())->macro_dropdownArrayField(...["csv_delimiter", (($_v15 = ($context["config"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["csv_delimiter"] ?? null) : null), [";" => ";", "," => ","], __("CSV delimiter"),         // line 122
($context["field_options"] ?? null)]);
        yield "

   <script>
       function getThemeRules() {
           // Calculate list of relevant CSS rules only once
           if (window._theme_rules === undefined) {
               window._theme_rules = [];
               const stylesheets = document.styleSheets;
                for (let i = 0; i < stylesheets.length; i++) {
                     if (stylesheets[i].href) {
                          const rules = stylesheets[i].cssRules;
                          for (let j = 0; j < rules.length; j++) {
                            if (rules[j]['selectorText'] !== undefined && rules[j]['selectorText'].includes('data-glpi-theme')) {
                                 window._theme_rules.push(rules[j]);
                            }
                          }
                     }
                }
           }
           return window._theme_rules;
       }

       function getThemePreviewURL(theme_id) {
           const resolve_color_value = (palette_rule, prop_name) => {
               let value = palette_rule.getPropertyValue(prop_name).trim();
               if (value.startsWith('var(')) {
                   // The color is a CSS variable, resolve it
                   value = resolve_color_value(palette_rule, value.substring(4, value.length - 1).trim());
               }
               return value;
           }

           const theme_rules = getThemeRules();
           const palette_colors = {};

           for (let j = 0; j < theme_rules.length; j++) {
               if (theme_rules[j]['selectorText'] !== undefined && theme_rules[j]['selectorText'].includes(`data-glpi-theme=\"\${theme_id}\"`)) {
                   for (let k = 1; k < 5; k++) {
                       const color = resolve_color_value(theme_rules[j].style, `--glpi-palette-color-\${k}`);
                       if (color !== '') {
                           palette_colors[`--glpi-palette-color-\${k}`] = color;
                       }
                   }
               }
           }

           if (Object.keys(palette_colors).length === 4) {
               const canvas = document.createElement('canvas');
               canvas.width = 60;
               canvas.height = 20;
               const ctx = canvas.getContext('2d');
               // draw the 4 colors as quadrants
               ctx.fillStyle = palette_colors['--glpi-palette-color-1'] ?? 'white';
               ctx.fillRect(0, 0, 30, 10);
               ctx.fillStyle = palette_colors['--glpi-palette-color-2'] ?? 'white';
               ctx.fillRect(30, 0, 30, 10);
               ctx.fillStyle = palette_colors['--glpi-palette-color-3'] ?? 'white';
               ctx.fillRect(0, 10, 30, 10);
               ctx.fillStyle = palette_colors['--glpi-palette-color-4'] ?? 'white';
               ctx.fillRect(30, 10, 30, 10);
               return canvas.toDataURL();
           }
           return `";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/palette_preview.php"), "html", null, true);
        yield "?key=\${theme_id}`;
       }

       function formatThemes(theme) {
           if (!theme.id) {
               return _.escape(theme.text);
           }

           return \$('<span></span>').html(
               `<img src=\"\${_.escape(getThemePreviewURL(theme.id))}\" /> \${_.escape(theme.text)}`
           );
       }
       \$('select[name=\"palette\"]').on('change', function(e) {
           // Hotswap theme on selection so the user can see the result without saving
           const palettes_isdark = ";
        // line 198
        yield json_encode(((array_key_exists("palettes_isdark", $context)) ? (Twig\Extension\CoreExtension::default(($context["palettes_isdark"] ?? null), [])) : ([])));
        yield ";
           \$('html').attr({
               'data-glpi-theme': e.target.value,
               'data-glpi-theme-dark': (palettes_isdark[e.target.value] ?? false) ? \"1\" : \"0\"
           });
       });
       function formatGlobalLayout(layout) {
           if (!layout.id) {
               return _.escape(layout.text);
           }
           return \$('<span></span>').html(
               `<img src=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/pics/layout/global_layout_"), "html", null, true);
        yield "\${_.escape(layout.id.toLowerCase())}.png\" /> \${_.escape(layout.text)}`
           );
       }
   </script>
    ";
        // line 213
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 213, $this->getSourceContext())->macro_dropdownArrayField(...["palette", (($_v16 = ($context["config"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["palette"] ?? null) : null), ($context["palettes"] ?? null), __("Color palette"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["templateResult" => "formatThemes", "templateSelection" => "formatThemes"])]);
        // line 216
        yield "

   ";
        // line 219
        yield "   ";
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
            // line 220
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 220, $this->getSourceContext())->macro_dropdownArrayField(...["page_layout", (($_v17 = ($context["config"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["page_layout"] ?? null) : null), ["horizontal" => __("Horizontal (menu in header)"), "vertical" => __("Vertical (menu in sidebar)")], __("Page layout"), Twig\Extension\CoreExtension::merge(            // line 223
($context["field_options"] ?? null), ["templateResult" => "formatGlobalLayout", "templateSelection" => "formatGlobalLayout"])]);
            // line 226
            yield "
   ";
        }
        // line 228
        yield "
   ";
        // line 229
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 229, $this->getSourceContext())->macro_dropdownArrayField(...["richtext_layout", (($_v18 = ($context["config"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["richtext_layout"] ?? null) : null), ["inline" => __("Inline (no toolbars)"), "classic" => __("Classic (toolbar on top)")], __("Rich text field layout"),         // line 232
($context["field_options"] ?? null)]);
        yield "

   ";
        // line 234
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 234, $this->getSourceContext())->macro_dropdownYesNo(...["highcontrast_css", (($_v19 = ($context["config"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["highcontrast_css"] ?? null) : null), __("Enable high contrast"), ($context["field_options"] ?? null)]);
        yield "

   ";
        // line 236
        if ((($tmp = ($context["use_timezones"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 237
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 237, $this->getSourceContext())->macro_dropdownArrayField(...["timezone", ((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "timezone", [], "array", true, true, false, 237)) ? (Twig\Extension\CoreExtension::default((($_v20 = ($context["config"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["timezone"] ?? null) : null), "")) : ("")), ($context["timezones"] ?? null), __("Timezone"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["display_emptychoice" => true, "emptylabel" => __("Use server configuration")])]);
            // line 240
            yield "
   ";
        } else {
            // line 242
            yield "      ";
            $context["tz_not_config"] = ((__("Timezone usage has not been activated.") . " ") . Twig\Extension\CoreExtension::sprintf(__("Run the \"%1\$s\" command to activate it."), "php bin/console database:enable_timezones"));
            // line 243
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 243, $this->getSourceContext())->macro_htmlField(...["", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tz_not_config"] ?? null)), __("Timezone"), ($context["field_options"] ?? null)]);
            yield "
   ";
        }
        // line 245
        yield "
   ";
        // line 246
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 246, $this->getSourceContext())->macro_dropdownArrayField(...["default_central_tab", (($_v21 = ($context["config"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["default_central_tab"] ?? null) : null), ($context["central_tabs"] ?? null), __("Default central tab"), ($context["field_options"] ?? null)]);
        yield "
   ";
        // line 247
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 247, $this->getSourceContext())->macro_dropdownArrayField(...["timeline_order", (($_v22 = ($context["config"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["timeline_order"] ?? null) : null), [Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_ORDER_NATURAL") => __("Natural order (old items on top, recent on bottom)"), Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_ORDER_REVERSE") => __("Reverse order (old items on bottom, recent on top)")], __("Timeline order"),         // line 250
($context["field_options"] ?? null)]);
        yield "

   ";
        // line 252
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 252, $this->getSourceContext())->macro_dropdownYesNo(...["show_search_form", (($_v23 = ($context["config"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["show_search_form"] ?? null) : null), __("Show search form above results"), ($context["field_options"] ?? null)]);
        yield "
   ";
        // line 253
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 253, $this->getSourceContext())->macro_dropdownYesNo(...["search_pagination_on_top", (($_v24 = ($context["config"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["search_pagination_on_top"] ?? null) : null), __("Show search pagination above results"), ($context["field_options"] ?? null)]);
        yield "

   ";
        // line 255
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
            // line 256
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 256, $this->getSourceContext())->macro_smallTitle(...[__("Assistance"), "ti ti-headset"]);
            yield "

      ";
            // line 258
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 258, $this->getSourceContext())->macro_dropdownYesNo(...["followup_private", (($_v25 = ($context["config"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["followup_private"] ?? null) : null), __("Private followups by default"), ($context["field_options"] ?? null)]);
            yield "
      ";
            // line 259
            if (((Session::haveRight("ticket", Twig\Extension\CoreExtension::constant("Ticket::READMY")) || Session::haveRight("ticket", Twig\Extension\CoreExtension::constant("Ticket::READALL"))) || Session::haveRight("ticket", Twig\Extension\CoreExtension::constant("Ticket::READASSIGN")))) {
                // line 260
                yield "         ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 260, $this->getSourceContext())->macro_dropdownYesNo(...["show_jobs_at_login", (($_v26 = ($context["config"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["show_jobs_at_login"] ?? null) : null), __("Show new tickets on the home page"), ($context["field_options"] ?? null)]);
                yield "
      ";
            } else {
                // line 262
                yield "         ";
                yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 262, $this->getSourceContext())->macro_htmlField(...["", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No")), __("Show new tickets on the home page"), ($context["field_options"] ?? null)]);
                yield "
      ";
            }
            // line 264
            yield "
      ";
            // line 265
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 265, $this->getSourceContext())->macro_dropdownYesNo(...["task_private", (($_v27 = ($context["config"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["task_private"] ?? null) : null), __("Private tasks by default"), ($context["field_options"] ?? null)]);
            yield "
      ";
            // line 266
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 266, $this->getSourceContext())->macro_dropdownField(...["RequestType", "default_requesttypes_id", (($_v28 = ($context["config"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["default_requesttypes_id"] ?? null) : null), __("Request sources by default"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["condition" => ["is_active" => 1, "is_ticketheader" => 1]])]);
            // line 271
            yield "

      ";
            // line 273
            $context["task_state_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 274
                yield "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Planning::dropdownState", ["task_state", (($_v29 = ($context["config"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["task_state"] ?? null) : null), true]);
                // line 275
                yield "      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 276
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 276, $this->getSourceContext())->macro_htmlField(...["", ($context["task_state_dropdown"] ?? null), __("Tasks state by default"), ($context["field_options"] ?? null)]);
            yield "

      ";
            // line 278
            $context["planned_task_state_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 279
                yield "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Planning::dropdownState", ["planned_task_state", (($_v30 = ($context["config"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["planned_task_state"] ?? null) : null), true]);
                // line 280
                yield "      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 281
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 281, $this->getSourceContext())->macro_htmlField(...["", ($context["planned_task_state_dropdown"] ?? null), __("Planned tasks state by default"), ($context["field_options"] ?? null)]);
            yield "

      ";
            // line 283
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 283, $this->getSourceContext())->macro_dropdownNumberField(...["refresh_views", (($_v31 =             // line 285
($context["config"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["refresh_views"] ?? null) : null), __("Automatically refresh data (tickets list, project kanban) in minutes."), Twig\Extension\CoreExtension::merge(            // line 287
($context["field_options"] ?? null), ["min" => 1, "max" => 30, "step" => 1, "toadd" => [__("Never")]])]);
            // line 295
            yield "
   ";
        }
        // line 297
        yield "
   ";
        // line 298
        if ((($tmp = Session::haveRight("ticket", Twig\Extension\CoreExtension::constant("Ticket::OWN"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 299
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 299, $this->getSourceContext())->macro_dropdownYesNo(...["set_default_tech", (($_v32 = ($context["config"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["set_default_tech"] ?? null) : null), __("Pre-select me as a technician when creating a ticket"), ($context["field_options"] ?? null)]);
            yield "
   ";
        } else {
            // line 301
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 301, $this->getSourceContext())->macro_htmlField(...["", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No")), __("Pre-select me as a technician when creating a ticket"), ($context["field_options"] ?? null)]);
            yield "
   ";
        }
        // line 303
        yield "   ";
        if ((($tmp = Session::haveRight("ticket", Twig\Extension\CoreExtension::constant("CREATE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 304
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 304, $this->getSourceContext())->macro_dropdownYesNo(...["set_default_requester", (($_v33 = ($context["config"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["set_default_requester"] ?? null) : null), __("Pre-select me as a requester when creating a ticket"), ($context["field_options"] ?? null)]);
            yield "
   ";
        } else {
            // line 306
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 306, $this->getSourceContext())->macro_htmlField(...["", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No")), __("Pre-select me as a requester when creating a ticket"), ($context["field_options"] ?? null)]);
            yield "
   ";
        }
        // line 308
        yield "   ";
        if ((($tmp = Session::haveRight("ticket", Twig\Extension\CoreExtension::constant("Ticket::OWN"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 309
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 309, $this->getSourceContext())->macro_dropdownYesNo(...["set_followup_tech", (($_v34 = ($context["config"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["set_followup_tech"] ?? null) : null), __("Add me as a technician when adding a ticket follow-up"), ($context["field_options"] ?? null)]);
            yield "
   ";
        } else {
            // line 311
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 311, $this->getSourceContext())->macro_htmlField(...["", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No")), __("Add me as a technician when adding a ticket follow-up"), ($context["field_options"] ?? null)]);
            yield "
   ";
        }
        // line 313
        yield "   ";
        if ((($tmp = Session::haveRight("ticket", Twig\Extension\CoreExtension::constant("Ticket::OWN"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 314
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 314, $this->getSourceContext())->macro_dropdownYesNo(...["set_solution_tech", (($_v35 = ($context["config"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["set_solution_tech"] ?? null) : null), __("Add me as a technician when adding a ticket solution"), ($context["field_options"] ?? null)]);
            yield "
   ";
        } else {
            // line 316
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 316, $this->getSourceContext())->macro_htmlField(...["", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No")), __("Add me as a technician when adding a ticket solution"), ($context["field_options"] ?? null)]);
            yield "
   ";
        }
        // line 318
        yield "
   ";
        // line 319
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 319, $this->getSourceContext())->macro_dropdownArrayField(...["timeline_action_btn_layout", (($_v36 = ($context["config"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["timeline_action_btn_layout"] ?? null) : null), [Twig\Extension\CoreExtension::constant("Config::TIMELINE_ACTION_BTN_MERGED") => __("Merged"), Twig\Extension\CoreExtension::constant("Config::TIMELINE_ACTION_BTN_SPLITTED") => __("Splitted")], __("Action button layout"),         // line 322
($context["field_options"] ?? null)]);
        yield "
   ";
        // line 323
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 323, $this->getSourceContext())->macro_dropdownArrayField(...["timeline_date_format", (($_v37 = ($context["config"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["timeline_date_format"] ?? null) : null), [Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE") => __("Relative"), Twig\Extension\CoreExtension::constant("Config::TIMELINE_ABSOLUTE_DATE") => __("Precise")], __("Timeline date display"),         // line 326
($context["field_options"] ?? null)]);
        yield "

   ";
        // line 328
        $context["priority_colors"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 329
            yield "      <div class=\"row\">
         ";
            // line 330
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 331
                yield "            ";
                yield $macros["fields"]->getTemplateForMacro("macro_colorField", $context, 331, $this->getSourceContext())->macro_colorField(...[("priority_" . $context["i"]), (($_v38 = ($context["config"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[("priority_" . $context["i"])] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ticket::getPriorityName", [$context["i"]]), ($context["field_options"] ?? null)]);
                yield "
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 333
            yield "      </div>
   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 335
        yield "   <div class=\"hr-text my-3\">
      <i class=\"ti ti-palette\"></i>
      <span>";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Priority colors"), "html", null, true);
        yield "</span>
   </div>
   ";
        // line 339
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 339, $this->getSourceContext())->macro_htmlField(...["", ($context["priority_colors"] ?? null), "", Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["input_class" => "col-12", "field_class" => "col-12"])]);
        // line 342
        yield "

   ";
        // line 344
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 344, $this->getSourceContext())->macro_smallTitle(...[__("Due date progression"), "ti ti-clock-play"]);
        yield "
   ";
        // line 345
        $context["unit_options"] = ["%" => "%", "hours" => _n("Hour", "Hours", Session::getPluralNumber()), "days" => _n("Day", "Days", Session::getPluralNumber())];
        // line 350
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_colorField", $context, 350, $this->getSourceContext())->macro_colorField(...["duedateok_color", (($_v39 = ($context["config"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39["duedateok_color"] ?? null) : null), __("OK state color"), ($context["field_options"] ?? null)]);
        yield "
   ";
        // line 351
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 351, $this->getSourceContext())->macro_nullField(...[]);
        yield "

   ";
        // line 353
        yield $macros["fields"]->getTemplateForMacro("macro_colorField", $context, 353, $this->getSourceContext())->macro_colorField(...["duedatewarning_color", (($_v40 = ($context["config"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["duedatewarning_color"] ?? null) : null), __("Warning state color"), ($context["field_options"] ?? null)]);
        yield "
   ";
        // line 354
        $context["warn_unit_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 355
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 355, $this->getSourceContext())->macro_dropdownArrayField(...["duedatewarning_unit", (($_v41 = ($context["config"] ?? null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41["duedatewarning_unit"] ?? null) : null), ($context["unit_options"] ?? null), "", Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["no_label" => true, "field_class" => "", "mb" => ""])]);
            // line 359
            yield "
   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 361
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 361, $this->getSourceContext())->macro_dropdownNumberField(...["duedatewarning_less", (($_v42 = ($context["config"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42["duedatewarning_less"] ?? null) : null), __("Warning state threshold"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["add_field_html" =>         // line 362
($context["warn_unit_dropdown"] ?? null), "input_class" => "col-xxl-5 d-flex align-items-center"])]);
        // line 364
        yield "

   ";
        // line 366
        yield $macros["fields"]->getTemplateForMacro("macro_colorField", $context, 366, $this->getSourceContext())->macro_colorField(...["duedatecritical_color", (($_v43 = ($context["config"] ?? null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["duedatecritical_color"] ?? null) : null), __("Critical state color"), ($context["field_options"] ?? null)]);
        yield "
   ";
        // line 367
        $context["warn_unit_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 368
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 368, $this->getSourceContext())->macro_dropdownArrayField(...["duedatecritical_unit", (($_v44 = ($context["config"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44["duedatecritical_unit"] ?? null) : null), ($context["unit_options"] ?? null), "", Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["no_label" => true, "field_class" => "", "mb" => ""])]);
            // line 372
            yield "
   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 374
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 374, $this->getSourceContext())->macro_dropdownNumberField(...["duedatecritical_less", (($_v45 = ($context["config"] ?? null)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45["duedatecritical_less"] ?? null) : null), __("Critical state threshold"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["add_field_html" =>         // line 375
($context["warn_unit_dropdown"] ?? null), "input_class" => "col-xxl-5 d-flex align-items-center"])]);
        // line 377
        yield "

   ";
        // line 379
        if ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central") && $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("lock_use_lock_item"))) {
            // line 380
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 380, $this->getSourceContext())->macro_smallTitle(...[__("Item locks"), "ti ti-lock"]);
            yield "
      ";
            // line 381
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 381, $this->getSourceContext())->macro_dropdownYesNo(...["lock_autolock_mode", (($_v46 = ($context["config"] ?? null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46["lock_autolock_mode"] ?? null) : null), __("Auto-lock Mode"), ($context["field_options"] ?? null)]);
            yield "
      ";
            // line 382
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 382, $this->getSourceContext())->macro_dropdownYesNo(...["lock_directunlock_notification", (($_v47 =             // line 384
($context["config"] ?? null)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47["lock_directunlock_notification"] ?? null) : null), __("Direct Notification (requester for unlock will be the notification sender)"),             // line 386
($context["field_options"] ?? null)]);
            // line 387
            yield "
   ";
        }
        // line 389
        yield "
   ";
        // line 390
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("\\Glpi\\Dashboard\\Grid::canViewOneDashboard")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 391
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 391, $this->getSourceContext())->macro_smallTitle(...[__("Dashboards"), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Dashboard\\Dashboard::getIcon"), "", "section-dashboards"]);
            yield "
      ";
            // line 399
            yield "
      ";
            // line 400
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 400, $this->getSourceContext())->macro_htmlField(...["", $this->getTemplateForMacro("macro_dropdownDashboard", $context, 402, $this->getSourceContext())->macro_dropdownDashboard(...["default_dashboard_central",             // line 402
($context["config"] ?? null)]), __("Default for central"),             // line 404
($context["field_options"] ?? null)]);
            // line 405
            yield "
      ";
            // line 406
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 406, $this->getSourceContext())->macro_htmlField(...["", $this->getTemplateForMacro("macro_dropdownDashboard", $context, 408, $this->getSourceContext())->macro_dropdownDashboard(...["default_dashboard_assets",             // line 408
($context["config"] ?? null)]), __("Default for Assets"),             // line 410
($context["field_options"] ?? null)]);
            // line 411
            yield "
      ";
            // line 412
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 412, $this->getSourceContext())->macro_htmlField(...["", $this->getTemplateForMacro("macro_dropdownDashboard", $context, 414, $this->getSourceContext())->macro_dropdownDashboard(...["default_dashboard_helpdesk",             // line 414
($context["config"] ?? null)]), __("Default for Assistance"),             // line 416
($context["field_options"] ?? null)]);
            // line 417
            yield "
      ";
            // line 418
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 418, $this->getSourceContext())->macro_htmlField(...["", $this->getTemplateForMacro("macro_dropdownDashboard", $context, 420, $this->getSourceContext())->macro_dropdownDashboard(...["default_dashboard_mini_ticket",             // line 420
($context["config"] ?? null), "mini_core", true]), __("Default for tickets (mini dashboard)"),             // line 422
($context["field_options"] ?? null)]);
            // line 423
            yield "
   ";
        }
        // line 425
        yield "
   ";
        // line 426
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 426, $this->getSourceContext())->macro_smallTitle(...[_n("Notification", "Notifications", Session::getPluralNumber()), "ti ti-bell"]);
        yield "
   ";
        // line 427
        $context["enable_notif_helper"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 428
            yield "      • ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Disable notifications by default on ITIL objects actor configuration, with ability to derogate to it."), "html", null, true);
            yield "
      • ";
            // line 429
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Disable all notifications on all other objects, without ability to derogate to it."), "html", null, true);
            yield "
   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 431
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 431, $this->getSourceContext())->macro_dropdownYesNo(...["is_notif_enable_default", (($_v48 = ($context["config"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48["is_notif_enable_default"] ?? null) : null), __("Enable notifications"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["helper" =>         // line 432
($context["enable_notif_helper"] ?? null)])]);
        // line 433
        yield "
   ";
        // line 434
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 434, $this->getSourceContext())->macro_dropdownArrayField(...["toast_location", ((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "toast_location", [], "array", true, true, false, 434)) ? (Twig\Extension\CoreExtension::default((($_v49 = ($context["config"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49["toast_location"] ?? null) : null), "bottom-right")) : ("bottom-right")), ["top-left" => __("Top left"), "top-right" => __("Top right"), "bottom-left" => __("Bottom left"), "bottom-right" => __("Bottom right")], __("Notification location"),         // line 439
($context["field_options"] ?? null)]);
        yield "
";
        yield from [];
    }

    // line 392
    public function macro_dropdownDashboard($name = null, $config = null, $thecontext = "core", $disabled_option = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "config" => $config,
            "thecontext" => $thecontext,
            "disabled_option" => $disabled_option,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 393
            yield "         ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("\\Glpi\\Dashboard\\Grid::dropdownDashboard", [($context["name"] ?? null), ["value" => (($_v50 =             // line 394
($context["config"] ?? null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50[($context["name"] ?? null)] ?? null) : null), "display_emptychoice" => true, "context" =>             // line 396
($context["thecontext"] ?? null)],             // line 397
($context["disabled_option"] ?? null)]);
            // line 398
            yield "      ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/preferences_setup.html.twig";
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
        return array (  750 => 398,  748 => 397,  747 => 396,  746 => 394,  744 => 393,  729 => 392,  722 => 439,  721 => 434,  718 => 433,  716 => 432,  714 => 431,  708 => 429,  703 => 428,  701 => 427,  697 => 426,  694 => 425,  690 => 423,  688 => 422,  687 => 420,  686 => 418,  683 => 417,  681 => 416,  680 => 414,  679 => 412,  676 => 411,  674 => 410,  673 => 408,  672 => 406,  669 => 405,  667 => 404,  666 => 402,  665 => 400,  662 => 399,  657 => 391,  655 => 390,  652 => 389,  648 => 387,  646 => 386,  645 => 384,  644 => 382,  640 => 381,  635 => 380,  633 => 379,  629 => 377,  627 => 375,  625 => 374,  620 => 372,  617 => 368,  615 => 367,  611 => 366,  607 => 364,  605 => 362,  603 => 361,  598 => 359,  595 => 355,  593 => 354,  589 => 353,  584 => 351,  579 => 350,  577 => 345,  573 => 344,  569 => 342,  567 => 339,  562 => 337,  558 => 335,  553 => 333,  544 => 331,  540 => 330,  537 => 329,  535 => 328,  530 => 326,  529 => 323,  525 => 322,  524 => 319,  521 => 318,  515 => 316,  509 => 314,  506 => 313,  500 => 311,  494 => 309,  491 => 308,  485 => 306,  479 => 304,  476 => 303,  470 => 301,  464 => 299,  462 => 298,  459 => 297,  455 => 295,  453 => 287,  452 => 285,  451 => 283,  445 => 281,  441 => 280,  438 => 279,  436 => 278,  430 => 276,  426 => 275,  423 => 274,  421 => 273,  417 => 271,  415 => 266,  411 => 265,  408 => 264,  402 => 262,  396 => 260,  394 => 259,  390 => 258,  384 => 256,  382 => 255,  377 => 253,  373 => 252,  368 => 250,  367 => 247,  363 => 246,  360 => 245,  354 => 243,  351 => 242,  347 => 240,  344 => 237,  342 => 236,  337 => 234,  332 => 232,  331 => 229,  328 => 228,  324 => 226,  322 => 223,  320 => 220,  317 => 219,  313 => 216,  311 => 213,  304 => 209,  290 => 198,  273 => 184,  208 => 122,  207 => 119,  203 => 118,  199 => 116,  197 => 113,  193 => 112,  188 => 110,  184 => 109,  181 => 108,  175 => 106,  172 => 105,  169 => 102,  166 => 101,  163 => 97,  161 => 96,  158 => 95,  154 => 93,  152 => 92,  151 => 90,  150 => 88,  147 => 87,  145 => 86,  144 => 84,  142 => 82,  140 => 81,  135 => 79,  132 => 78,  130 => 74,  125 => 72,  124 => 66,  120 => 65,  119 => 62,  114 => 60,  109 => 59,  106 => 58,  102 => 57,  100 => 55,  98 => 54,  95 => 53,  92 => 52,  89 => 51,  87 => 50,  84 => 49,  78 => 47,  73 => 45,  68 => 44,  65 => 43,  58 => 42,  53 => 33,  51 => 37,  49 => 35,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/preferences_setup.html.twig", "/var/www/html/glpi/templates/pages/setup/general/preferences_setup.html.twig");
    }
}
