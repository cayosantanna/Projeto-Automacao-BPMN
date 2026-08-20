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

/* pages/setup/general/general_setup.html.twig */
class __TwigTemplate_96428c5993a924874a4fab1cac64c3ab extends Template
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
        // line 36
        $context["field_options"] = ["full_width" => true];
        // line 40
        $context["inline_field_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["input_addclass" => "w-auto"]);
        // line 33
        $this->parent = $this->load("pages/setup/general/base_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "
<div class=\"row ps-4\">

    ";
        // line 48
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 48, $this->getSourceContext())->macro_textField(...["url_base", (($_v0 =         // line 50
($context["config"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["url_base"] ?? null) : null), __("URL of the application"),         // line 52
($context["field_options"] ?? null)]);
        // line 53
        yield "

    ";
        // line 55
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 55, $this->getSourceContext())->macro_textareaField(...["text_login", (($_v1 =         // line 57
($context["config"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["text_login"] ?? null) : null), __("Text in the login box"), Twig\Extension\CoreExtension::merge(        // line 59
($context["field_options"] ?? null), ["enable_richtext" => true, "enable_images" => false])]);
        // line 63
        yield "

    ";
        // line 65
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 65, $this->getSourceContext())->macro_textField(...["helpdesk_doc_url", (($_v2 =         // line 67
($context["config"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["helpdesk_doc_url"] ?? null) : null), __("Simplified interface help link"),         // line 69
($context["field_options"] ?? null)]);
        // line 70
        yield "

    ";
        // line 72
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 72, $this->getSourceContext())->macro_textField(...["central_doc_url", (($_v3 =         // line 74
($context["config"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["central_doc_url"] ?? null) : null), __("Standard interface help link"),         // line 76
($context["field_options"] ?? null)]);
        // line 77
        yield "

    ";
        // line 79
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 79, $this->getSourceContext())->macro_numberField(...["decimal_number", (($_v4 =         // line 81
($context["config"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["decimal_number"] ?? null) : null), __("Default decimals limit"), Twig\Extension\CoreExtension::merge(        // line 83
($context["inline_field_options"] ?? null), ["min" => 1, "max" => 4, "required" => true])]);
        // line 88
        yield "

    ";
        // line 90
        yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 90, $this->getSourceContext())->macro_checkboxField(...["use_public_faq", (($_v5 =         // line 92
($context["config"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["use_public_faq"] ?? null) : null), __("Allow FAQ anonymous access"),         // line 94
($context["field_options"] ?? null)]);
        // line 95
        yield "

    ";
        // line 97
        yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 97, $this->getSourceContext())->macro_checkboxField(...["allow_unauthenticated_uploads", (((CoreExtension::getAttribute($this->env, $this->source,         // line 99
($context["config"] ?? null), "allow_unauthenticated_uploads", [], "array", true, true, false, 99) &&  !(null === (($_v6 = ($context["config"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["allow_unauthenticated_uploads"] ?? null) : null)))) ? ((($_v7 = ($context["config"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["allow_unauthenticated_uploads"] ?? null) : null)) : (false)), __("Allow unauthenticated uploads"), Twig\Extension\CoreExtension::merge(        // line 101
($context["field_options"] ?? null), ["helper" => __("Do not use this option if your GLPI is reachable from the internet. Use at your own risk.")])]);
        // line 104
        yield "

</div>

<div class=\"hr-text\">
    <i class=\"ti ti-list\"></i>
    <span>";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dynamic display"), "html", null, true);
        yield "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 115
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 115, $this->getSourceContext())->macro_numberField(...["dropdown_max", (($_v8 =         // line 117
($context["config"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["dropdown_max"] ?? null) : null), __("Page size for dropdown (paging using scroll)"), Twig\Extension\CoreExtension::merge(        // line 119
($context["inline_field_options"] ?? null), ["min" => 1, "max" => 200, "required" => true])]);
        // line 124
        yield "

    ";
        // line 126
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 126, $this->getSourceContext())->macro_dropdownNumberField(...["ajax_limit_count", (($_v9 =         // line 128
($context["config"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["ajax_limit_count"] ?? null) : null), __("Don't show search engine in dropdowns if the number of items is less than"), Twig\Extension\CoreExtension::merge(        // line 130
($context["inline_field_options"] ?? null), ["min" => 1, "max" => 200, "toadd" => ["0" => __("Never")], "width" => "auto", "required" => true])]);
        // line 137
        yield "
</div>

<div class=\"hr-text\">
    <i class=\"ti ti-search\"></i>
    <span>";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search engine"), "html", null, true);
        yield "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 147
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 147, $this->getSourceContext())->macro_dropdownArrayField(...["allow_search_view", (($_v10 =         // line 149
($context["config"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["allow_search_view"] ?? null) : null), [__("No"), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), __("Yes"), __("last criterion")), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), __("Yes"), __("default criterion"))], __("Items seen"), Twig\Extension\CoreExtension::merge(        // line 156
($context["inline_field_options"] ?? null), ["width" => "auto"])]);
        // line 159
        yield "

    ";
        // line 161
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 161, $this->getSourceContext())->macro_dropdownYesNo(...["allow_search_global", (($_v11 =         // line 163
($context["config"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["allow_search_global"] ?? null) : null), __("Global search"), Twig\Extension\CoreExtension::merge(        // line 165
($context["inline_field_options"] ?? null), ["width" => "auto"])]);
        // line 168
        yield "

    ";
        // line 170
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 170, $this->getSourceContext())->macro_dropdownArrayField(...["allow_search_all", (($_v12 =         // line 172
($context["config"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["allow_search_all"] ?? null) : null), [__("No"), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), __("Yes"), __("last criterion"))], __("All"), Twig\Extension\CoreExtension::merge(        // line 178
($context["inline_field_options"] ?? null), ["width" => "auto"])]);
        // line 181
        yield "

    ";
        // line 183
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 183, $this->getSourceContext())->macro_numberField(...["list_limit_max", (($_v13 =         // line 185
($context["config"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["list_limit_max"] ?? null) : null), __("Default search results limit (page)"), Twig\Extension\CoreExtension::merge(        // line 187
($context["inline_field_options"] ?? null), ["min" => 5, "max" => 200, "step" => 5, "required" => true])]);
        // line 193
        yield "

    ";
        // line 195
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 195, $this->getSourceContext())->macro_numberField(...["cut", (($_v14 =         // line 197
($context["config"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["cut"] ?? null) : null), __("Default characters limit (summary text boxes)"), Twig\Extension\CoreExtension::merge(        // line 199
($context["inline_field_options"] ?? null), ["step" => 50, "required" => true])]);
        // line 203
        yield "

    ";
        // line 205
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 205, $this->getSourceContext())->macro_numberField(...["url_maxlength", (($_v15 =         // line 207
($context["config"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["url_maxlength"] ?? null) : null), __("Default url length limit"), Twig\Extension\CoreExtension::merge(        // line 209
($context["inline_field_options"] ?? null), ["min" => 20, "max" => 80, "step" => 5, "required" => true])]);
        // line 215
        yield "

</div>

<div class=\"hr-text\">
    <i class=\"ti ti-lock\"></i>
    <span>";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Item locks"), "html", null, true);
        yield "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 226
        $context["locks_rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 227
        yield "    ";
        $context["id_lock_use_lock_item"] = ("lock_use_lock_item_" . ($context["locks_rand"] ?? null));
        // line 228
        yield "    ";
        $context["id_lock_lockprofile_id"] = ("dropdown_lock_lockprofile_id" . ($context["locks_rand"] ?? null));
        // line 229
        yield "    ";
        $context["id_lock_item_list_id"] = ("dropdown_lock_item_list" . ($context["locks_rand"] ?? null));
        // line 230
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 230, $this->getSourceContext())->macro_checkboxField(...["lock_use_lock_item", (($_v16 =         // line 232
($context["config"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["lock_use_lock_item"] ?? null) : null), __("Use locks"), Twig\Extension\CoreExtension::merge(        // line 234
($context["field_options"] ?? null), ["id" =>         // line 235
($context["id_lock_use_lock_item"] ?? null)])]);
        // line 237
        yield "

    ";
        // line 239
        $context["lock_options"] = ($context["field_options"] ?? null);
        // line 240
        yield "    ";
        if ((($tmp =  !(($_v17 = ($context["config"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["lock_use_lock_item"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 241
            yield "        ";
            $context["lock_options"] = Twig\Extension\CoreExtension::merge(($context["lock_options"] ?? null), ["disabled" => true]);
            // line 244
            yield "    ";
        }
        // line 245
        yield "
    ";
        // line 246
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 246, $this->getSourceContext())->macro_dropdownField(...["Profile", "lock_lockprofile_id", (($_v18 =         // line 249
($context["config"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["lock_lockprofile_id"] ?? null) : null), __("Profile to be used when locking items"), Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(        // line 251
($context["inline_field_options"] ?? null), ($context["lock_options"] ?? null)), ["width" => "auto", "rand" =>         // line 253
($context["locks_rand"] ?? null), "condition" => ["interface" => "central"]])]);
        // line 258
        yield "

    ";
        // line 260
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 260, $this->getSourceContext())->macro_dropdownArrayField(...["lock_item_list", "", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("ObjectLock::getLockableObjects"), __("List of items to lock"), Twig\Extension\CoreExtension::merge(        // line 265
($context["lock_options"] ?? null), ["multiple" => true, "values" => (($_v19 =         // line 267
($context["config"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["lock_item_list"] ?? null) : null), "rand" =>         // line 268
($context["locks_rand"] ?? null)])]);
        // line 270
        yield "

    <script>
    \$(function(ready){
        \$('#";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_lock_use_lock_item"] ?? null), "html", null, true);
        yield "').change(function(){
            var enabled = this.checked;
            \$('#";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_lock_lockprofile_id"] ?? null), "html", null, true);
        yield "').prop('disabled', !enabled);
            \$('#";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_lock_item_list_id"] ?? null), "html", null, true);
        yield "').prop('disabled', !enabled);
        });
    });
    </script>
</div>

<div class=\"hr-text\">
    <i class=\"ti ti-layout-kanban\"></i>
    <span>";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Project Task State"), "html", null, true);
        yield "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 290
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 290, $this->getSourceContext())->macro_dropdownField(...["ProjectState", "projecttask_unstarted_states_id", ((CoreExtension::getAttribute($this->env, $this->source,         // line 293
($context["config"] ?? null), "projecttask_unstarted_states_id", [], "array", true, true, false, 293)) ? (Twig\Extension\CoreExtension::default((($_v20 = ($context["config"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["projecttask_unstarted_states_id"] ?? null) : null), "0")) : ("0")), __("Status of unstarted tasks"), Twig\Extension\CoreExtension::merge(        // line 295
($context["inline_field_options"] ?? null), ["width" => "auto"])]);
        // line 298
        yield "

    ";
        // line 300
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 300, $this->getSourceContext())->macro_dropdownField(...["ProjectState", "projecttask_inprogress_states_id", ((CoreExtension::getAttribute($this->env, $this->source,         // line 303
($context["config"] ?? null), "projecttask_inprogress_states_id", [], "array", true, true, false, 303)) ? (Twig\Extension\CoreExtension::default((($_v21 = ($context["config"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["projecttask_inprogress_states_id"] ?? null) : null), "0")) : ("0")), __("Status of tasks in progress"), Twig\Extension\CoreExtension::merge(        // line 305
($context["inline_field_options"] ?? null), ["width" => "auto"])]);
        // line 308
        yield "

    ";
        // line 310
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 310, $this->getSourceContext())->macro_dropdownField(...["ProjectState", "projecttask_completed_states_id", ((CoreExtension::getAttribute($this->env, $this->source,         // line 313
($context["config"] ?? null), "projecttask_completed_states_id", [], "array", true, true, false, 313)) ? (Twig\Extension\CoreExtension::default((($_v22 = ($context["config"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["projecttask_completed_states_id"] ?? null) : null), "0")) : ("0")), __("Status of tasks done"), Twig\Extension\CoreExtension::merge(        // line 315
($context["inline_field_options"] ?? null), ["width" => "auto"])]);
        // line 318
        yield "
</div>

<div class=\"hr-text\">
    <i class=\"ti ti-login\"></i>
    <span>";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Auto Login"), "html", null, true);
        yield "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 328
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownTimestampField", $context, 328, $this->getSourceContext())->macro_dropdownTimestampField(...["login_remember_time", (($_v23 =         // line 330
($context["config"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["login_remember_time"] ?? null) : null), __("Time to allow \"Remember Me\""), Twig\Extension\CoreExtension::merge(        // line 332
($context["inline_field_options"] ?? null), ["emptylabel" => __("Disabled"), "min" => 0, "max" => (Twig\Extension\CoreExtension::constant("MONTH_TIMESTAMP") * 2), "step" => Twig\Extension\CoreExtension::constant("DAY_TIMESTAMP"), "toadd" => [Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP"), (Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP") * 2), (Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP") * 6), (Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP") * 12)], "width" => "auto"])]);
        // line 345
        yield "

    ";
        // line 347
        yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 347, $this->getSourceContext())->macro_checkboxField(...["login_remember_default", (($_v24 =         // line 349
($context["config"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["login_remember_default"] ?? null) : null), __("Default state of checkbox"),         // line 351
($context["field_options"] ?? null)]);
        // line 352
        yield "

    ";
        // line 354
        yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 354, $this->getSourceContext())->macro_checkboxField(...["display_login_source", (($_v25 =         // line 356
($context["config"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["display_login_source"] ?? null) : null), __("Display source dropdown on login page"),         // line 358
($context["field_options"] ?? null)]);
        // line 359
        yield "
</div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/general_setup.html.twig";
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
        return array (  363 => 359,  361 => 358,  360 => 356,  359 => 354,  355 => 352,  353 => 351,  352 => 349,  351 => 347,  347 => 345,  345 => 332,  344 => 330,  343 => 328,  335 => 323,  328 => 318,  326 => 315,  325 => 313,  324 => 310,  320 => 308,  318 => 305,  317 => 303,  316 => 300,  312 => 298,  310 => 295,  309 => 293,  308 => 290,  300 => 285,  289 => 277,  285 => 276,  280 => 274,  274 => 270,  272 => 268,  271 => 267,  270 => 265,  269 => 260,  265 => 258,  263 => 253,  262 => 251,  261 => 249,  260 => 246,  257 => 245,  254 => 244,  251 => 241,  248 => 240,  246 => 239,  242 => 237,  240 => 235,  239 => 234,  238 => 232,  236 => 230,  233 => 229,  230 => 228,  227 => 227,  225 => 226,  217 => 221,  209 => 215,  207 => 209,  206 => 207,  205 => 205,  201 => 203,  199 => 199,  198 => 197,  197 => 195,  193 => 193,  191 => 187,  190 => 185,  189 => 183,  185 => 181,  183 => 178,  182 => 172,  181 => 170,  177 => 168,  175 => 165,  174 => 163,  173 => 161,  169 => 159,  167 => 156,  166 => 149,  165 => 147,  157 => 142,  150 => 137,  148 => 130,  147 => 128,  146 => 126,  142 => 124,  140 => 119,  139 => 117,  138 => 115,  130 => 110,  122 => 104,  120 => 101,  119 => 99,  118 => 97,  114 => 95,  112 => 94,  111 => 92,  110 => 90,  106 => 88,  104 => 83,  103 => 81,  102 => 79,  98 => 77,  96 => 76,  95 => 74,  94 => 72,  90 => 70,  88 => 69,  87 => 67,  86 => 65,  82 => 63,  80 => 59,  79 => 57,  78 => 55,  74 => 53,  72 => 52,  71 => 50,  70 => 48,  65 => 45,  58 => 44,  53 => 33,  51 => 40,  49 => 36,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/general_setup.html.twig", "/var/www/html/glpi/templates/pages/setup/general/general_setup.html.twig");
    }
}
