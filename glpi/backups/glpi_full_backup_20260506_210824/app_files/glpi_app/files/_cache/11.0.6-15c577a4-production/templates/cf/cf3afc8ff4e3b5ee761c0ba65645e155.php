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

/* dropdown_form.html.twig */
class __TwigTemplate_52f9d9feb2a419e725a3d9fb7dd9ffe3 extends Template
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
<div class=\"asset\">
    ";
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/header.html.twig");
        yield "
    ";
        // line 37
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 38
        yield "    ";
        $context["base_fields_params"] = (((array_key_exists("fields_params", $context) &&  !(null === $context["fields_params"]))) ? ($context["fields_params"]) : ([]));
        // line 39
        yield "    ";
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 40
        yield "    ";
        $context["target"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 40) &&  !(null === (($_v0 = ($context["params"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["target"] ?? null) : null)))) ? ((($_v1 = ($context["params"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["target"] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 40)));
        // line 41
        yield "    ";
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 41) &&  !(null === (($_v2 = ($context["params"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["withtemplate"] ?? null) : null)))) ? ((($_v3 = ($context["params"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["withtemplate"] ?? null) : null)) : (""));
        // line 42
        yield "
    <div class=\"card-body row\">
        ";
        // line 44
        yield from $this->unwrap()->yieldBlock('form_fields', $context, $blocks);
        // line 246
        yield "        ";
        yield from $this->unwrap()->yieldBlock('more_fields', $context, $blocks);
        // line 248
        yield "    </div>
    ";
        // line 249
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/buttons.html.twig");
        yield "
</div>
";
        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "            ";
        $context["picture_fields"] = ["picture_front", "picture_rear", "pictures"];
        // line 46
        yield "            ";
        $context["has_picture_field"] = false;
        // line 47
        yield "
            ";
        // line 49
        yield "            ";
        yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 49, $this->getSourceContext())->macro_autoNameField(...[(((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 50
($context["item"] ?? null), "isField", ["designation"], "method", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("designation") : ("name")),         // line 51
($context["item"] ?? null), __("Name"),         // line 53
($context["withtemplate"] ?? null)]);
        // line 54
        yield "

            ";
        // line 56
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["comment"], "method", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "                ";
            yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 57, $this->getSourceContext())->macro_textareaField(...["comment", (($_v4 = CoreExtension::getAttribute($this->env, $this->source,             // line 59
($context["item"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber())]);
            // line 61
            yield "
            ";
        }
        // line 63
        yield "
            ";
        // line 65
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["additional_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 66
            yield "                ";
            $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["base_fields_params"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "form_params", [], "array", true, true, false, 66) &&  !(null === (($_v5 = $context["field"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["form_params"] ?? null) : null)))) ? ((($_v6 = $context["field"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["form_params"] ?? null) : null)) : ([])));
            // line 67
            yield "                ";
            $context["type"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "array", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default((($_v7 = $context["field"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["type"] ?? null) : null), "")) : (""));
            // line 68
            yield "                ";
            $context["show_field"] = true;
            // line 69
            yield "                ";
            if ((((($_v8 = $context["field"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["name"] ?? null) : null) == "entities_id") && ((($context["type"] ?? null) != "parent") || ((($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["id"] ?? null) : null) == 0)))) {
                // line 70
                yield "                    ";
                // line 71
                yield "                    ";
                $context["show_field"] = false;
                // line 72
                yield "                ";
            }
            // line 73
            yield "                ";
            if (CoreExtension::inFilter((($_v10 = $context["field"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["name"] ?? null) : null), ($context["picture_fields"] ?? null))) {
                // line 74
                yield "                    ";
                $context["show_field"] = false;
                // line 75
                yield "                ";
            }
            // line 76
            yield "                ";
            if ((($tmp = ($context["show_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 77
                yield "
                    ";
                // line 78
                if (((($_v11 = $context["field"]) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["name"] ?? null) : null) == "header")) {
                    // line 79
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 79, $this->getSourceContext())->macro_largeTitle(...[(($_v12 = $context["field"]) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["label"] ?? null) : null)]);
                    yield "
                    ";
                } elseif (((($_v13 =                 // line 80
$context["field"]) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["name"] ?? null) : null) == "content")) {
                    // line 81
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 81, $this->getSourceContext())->macro_textareaField(...["content", (($_v14 = CoreExtension::getAttribute($this->env, $this->source,                     // line 83
($context["item"] ?? null), "fields", [], "any", false, false, false, 83)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["content"] ?? null) : null), (($_v15 =                     // line 84
$context["field"]) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["label"] ?? null) : null), ["full_width" => true, "is_horizontal" => false, "enable_richtext" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 88
$context["field"], "enable_richtext", [], "array", true, true, false, 88)) ? ((($_v16 = $context["field"]) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["enable_richtext"] ?? null) : null)) : (true))]]);
                    // line 90
                    yield "
                    ";
                } elseif ((                // line 91
($context["type"] ?? null) == "UserDropdown")) {
                    // line 92
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 92, $this->getSourceContext())->macro_dropdownField(...["User", (($_v17 =                     // line 94
$context["field"]) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["name"] ?? null) : null), (($_v18 = CoreExtension::getAttribute($this->env, $this->source,                     // line 95
($context["item"] ?? null), "fields", [], "any", false, false, false, 95)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[(($_v19 = $context["field"]) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["name"] ?? null) : null)] ?? null) : null), (($_v20 =                     // line 96
$context["field"]) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["label"] ?? null) : null), ["entity" => (($_v21 = CoreExtension::getAttribute($this->env, $this->source,                     // line 98
($context["item"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["entities_id"] ?? null) : null), "right" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 99
$context["field"], "right", [], "array", true, true, false, 99)) ? (Twig\Extension\CoreExtension::default((($_v22 = $context["field"]) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["right"] ?? null) : null), "interface")) : ("interface")), "rand" =>                     // line 100
($context["rand"] ?? null)]]);
                    // line 102
                    yield "
                    ";
                } elseif ((                // line 103
($context["type"] ?? null) == "dropdownValue")) {
                    // line 104
                    yield "                        ";
                    $context["dropdown_params"] = ["entity" => (($_v23 = CoreExtension::getAttribute($this->env, $this->source,                     // line 105
($context["item"] ?? null), "fields", [], "any", false, false, false, 105)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["entities_id"] ?? null) : null)];
                    // line 107
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "condition", [], "array", true, true, false, 107)) {
                        // line 108
                        yield "                            ";
                        $context["dropdown_params"] = Twig\Extension\CoreExtension::merge(($context["dropdown_params"] ?? null), ["condition" => (($_v24 = $context["field"]) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["condition"] ?? null) : null)]);
                        // line 109
                        yield "                        ";
                    }
                    // line 110
                    yield "                        ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [(($_v25 = $context["field"]) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["name"] ?? null) : null)]);
                    // line 111
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 111, $this->getSourceContext())->macro_dropdownField(...[($context["dropdown_itemtype"] ?? null), (($_v26 = $context["field"]) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["name"] ?? null) : null), (($_v27 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 111)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[(($_v28 = $context["field"]) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["name"] ?? null) : null)] ?? null) : null), (($_v29 = $context["field"]) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["label"] ?? null) : null), ($context["dropdown_params"] ?? null)]);
                    yield "
                    ";
                } elseif ((                // line 112
($context["type"] ?? null) == "text")) {
                    // line 113
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 113, $this->getSourceContext())->macro_autoNameField(...[(($_v30 = $context["field"]) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["name"] ?? null) : null), ($context["item"] ?? null), (($_v31 = $context["field"]) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["label"] ?? null) : null), ($context["withtemplate"] ?? null), ($context["fields_params"] ?? null)]);
                    yield "
                    ";
                } elseif ((                // line 114
($context["type"] ?? null) == "textarea")) {
                    // line 115
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 115, $this->getSourceContext())->macro_textareaField(...[(($_v32 = $context["field"]) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["name"] ?? null) : null), (($_v33 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 115)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[(($_v34 = $context["field"]) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["name"] ?? null) : null)] ?? null) : null), (($_v35 = $context["field"]) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["label"] ?? null) : null), ($context["fields_params"] ?? null)]);
                    yield "
                    ";
                } elseif ((                // line 116
($context["type"] ?? null) == "illustration")) {
                    // line 117
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_illustrationField", $context, 117, $this->getSourceContext())->macro_illustrationField(...[(($_v36 =                     // line 118
$context["field"]) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["name"] ?? null) : null), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 119
($context["item"] ?? null), "fields", [], "any", false, true, false, 119), (($_v37 = $context["field"]) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["name"] ?? null) : null), [], "array", true, true, false, 119)) ? (Twig\Extension\CoreExtension::default((($_v38 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 119)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[(($_v39 = $context["field"]) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39["name"] ?? null) : null)] ?? null) : null), Twig\Extension\CoreExtension::constant("Glpi\\UI\\IllustrationManager::DEFAULT_ILLUSTRATION"))) : (Twig\Extension\CoreExtension::constant("Glpi\\UI\\IllustrationManager::DEFAULT_ILLUSTRATION"))), (($_v40 =                     // line 120
$context["field"]) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["label"] ?? null) : null)]);
                    // line 121
                    yield "
                    ";
                } elseif ((                // line 122
($context["type"] ?? null) == "integer")) {
                    // line 123
                    yield "                        ";
                    $context["fields_params"] = ["value" => (($_v41 = CoreExtension::getAttribute($this->env, $this->source,                     // line 124
($context["item"] ?? null), "fields", [], "any", false, false, false, 124)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41[(($_v42 = $context["field"]) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42["name"] ?? null) : null)] ?? null) : null)];
                    // line 126
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "min", [], "array", true, true, false, 126)) {
                        // line 127
                        yield "                            ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["min" => (($_v43 = $context["field"]) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["min"] ?? null) : null)]);
                        // line 128
                        yield "                        ";
                    }
                    // line 129
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "step", [], "array", true, true, false, 129)) {
                        // line 130
                        yield "                            ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["step" => (($_v44 = $context["field"]) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44["step"] ?? null) : null)]);
                        // line 131
                        yield "                        ";
                    }
                    // line 132
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "max", [], "array", true, true, false, 132)) {
                        // line 133
                        yield "                            ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["max" => (($_v45 = $context["field"]) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45["max"] ?? null) : null)]);
                        // line 134
                        yield "                        ";
                    }
                    // line 135
                    yield "
                        ";
                    // line 136
                    $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["type" => "number"]);
                    // line 137
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 137, $this->getSourceContext())->macro_numberField(...[(($_v46 = $context["field"]) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46["name"] ?? null) : null), (($_v47 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 137)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47[(($_v48 = $context["field"]) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48["name"] ?? null) : null)] ?? null) : null), (($_v49 = $context["field"]) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49["label"] ?? null) : null), ($context["fields_params"] ?? null)]);
                    yield "
                    ";
                } elseif ((                // line 138
($context["type"] ?? null) == "timestamp")) {
                    // line 139
                    yield "                        ";
                    $context["fields_params"] = ["value" => (($_v50 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 139)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50[(($_v51 = $context["field"]) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51["name"] ?? null) : null)] ?? null) : null)];
                    // line 140
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "min", [], "array", true, true, false, 140)) {
                        // line 141
                        yield "                            ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["min" => (($_v52 = $context["field"]) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52["min"] ?? null) : null)]);
                        // line 142
                        yield "                        ";
                    }
                    // line 143
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "step", [], "array", true, true, false, 143)) {
                        // line 144
                        yield "                            ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["step" => (($_v53 = $context["field"]) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53["step"] ?? null) : null)]);
                        // line 145
                        yield "                        ";
                    }
                    // line 146
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "max", [], "array", true, true, false, 146)) {
                        // line 147
                        yield "                            ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["max" => (($_v54 = $context["field"]) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54["max"] ?? null) : null)]);
                        // line 148
                        yield "                        ";
                    }
                    // line 149
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_dropdownTimestampField", $context, 149, $this->getSourceContext())->macro_dropdownTimestampField(...[(($_v55 = $context["field"]) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55["name"] ?? null) : null), (($_v56 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 149)) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56[(($_v57 = $context["field"]) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57["name"] ?? null) : null)] ?? null) : null), (($_v58 = $context["field"]) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58["label"] ?? null) : null), ($context["fields_params"] ?? null)]);
                    yield "
                    ";
                } elseif ((                // line 150
($context["type"] ?? null) == "parent")) {
                    // line 151
                    yield "                        ";
                    $context["restrict"] = ((((($_v59 = $context["field"]) && is_array($_v59) || $_v59 instanceof ArrayAccess ? ($_v59["name"] ?? null) : null) == "entities_id")) ? ( -1) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 151)));
                    // line 152
                    yield "                        ";
                    $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["entity" => ($context["restrict"] ?? null)]);
                    // line 153
                    yield "                        ";
                    $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["used" => ((((($_v60 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 153)) && is_array($_v60) || $_v60 instanceof ArrayAccess ? ($_v60["id"] ?? null) : null) > 0)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getSonsOf", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTable", [], "method", false, false, false, 153), (($_v61 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 153)) && is_array($_v61) || $_v61 instanceof ArrayAccess ? ($_v61["id"] ?? null) : null)])) : ([]))]);
                    // line 154
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 154, $this->getSourceContext())->macro_dropdownField(...[($context["item"] ?? null), (($_v62 = $context["field"]) && is_array($_v62) || $_v62 instanceof ArrayAccess ? ($_v62["name"] ?? null) : null), (($_v63 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 154)) && is_array($_v63) || $_v63 instanceof ArrayAccess ? ($_v63[(($_v64 = $context["field"]) && is_array($_v64) || $_v64 instanceof ArrayAccess ? ($_v64["name"] ?? null) : null)] ?? null) : null), (($_v65 = $context["field"]) && is_array($_v65) || $_v65 instanceof ArrayAccess ? ($_v65["label"] ?? null) : null), ($context["fields_params"] ?? null)]);
                    yield "
                    ";
                } elseif ((                // line 155
($context["type"] ?? null) == "icon")) {
                    // line 156
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_dropdownIcons", $context, 156, $this->getSourceContext())->macro_dropdownIcons(...[(($_v66 = $context["field"]) && is_array($_v66) || $_v66 instanceof ArrayAccess ? ($_v66["name"] ?? null) : null), (($_v67 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 156)) && is_array($_v67) || $_v67 instanceof ArrayAccess ? ($_v67[(($_v68 = $context["field"]) && is_array($_v68) || $_v68 instanceof ArrayAccess ? ($_v68["name"] ?? null) : null)] ?? null) : null), (($_v69 = $context["field"]) && is_array($_v69) || $_v69 instanceof ArrayAccess ? ($_v69["label"] ?? null) : null), ($context["fields_params"] ?? null)]);
                    yield "
                    ";
                } elseif ((                // line 157
($context["type"] ?? null) == "bool")) {
                    // line 158
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 158, $this->getSourceContext())->macro_dropdownYesNo(...[(($_v70 = $context["field"]) && is_array($_v70) || $_v70 instanceof ArrayAccess ? ($_v70["name"] ?? null) : null), (($_v71 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 158)) && is_array($_v71) || $_v71 instanceof ArrayAccess ? ($_v71[(($_v72 = $context["field"]) && is_array($_v72) || $_v72 instanceof ArrayAccess ? ($_v72["name"] ?? null) : null)] ?? null) : null), (($_v73 = $context["field"]) && is_array($_v73) || $_v73 instanceof ArrayAccess ? ($_v73["label"] ?? null) : null), ($context["fields_params"] ?? null)]);
                    yield "
                    ";
                } elseif ((                // line 159
($context["type"] ?? null) == "color")) {
                    // line 160
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_colorField", $context, 160, $this->getSourceContext())->macro_colorField(...[(($_v74 = $context["field"]) && is_array($_v74) || $_v74 instanceof ArrayAccess ? ($_v74["name"] ?? null) : null), (($_v75 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 160)) && is_array($_v75) || $_v75 instanceof ArrayAccess ? ($_v75[(($_v76 = $context["field"]) && is_array($_v76) || $_v76 instanceof ArrayAccess ? ($_v76["name"] ?? null) : null)] ?? null) : null), (($_v77 = $context["field"]) && is_array($_v77) || $_v77 instanceof ArrayAccess ? ($_v77["label"] ?? null) : null), ($context["fields_params"] ?? null)]);
                    yield "
                    ";
                } elseif ((                // line 161
($context["type"] ?? null) == "date")) {
                    // line 162
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 162, $this->getSourceContext())->macro_dateField(...[(($_v78 = $context["field"]) && is_array($_v78) || $_v78 instanceof ArrayAccess ? ($_v78["name"] ?? null) : null), (($_v79 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 162)) && is_array($_v79) || $_v79 instanceof ArrayAccess ? ($_v79[(($_v80 = $context["field"]) && is_array($_v80) || $_v80 instanceof ArrayAccess ? ($_v80["name"] ?? null) : null)] ?? null) : null), (($_v81 = $context["field"]) && is_array($_v81) || $_v81 instanceof ArrayAccess ? ($_v81["label"] ?? null) : null), ($context["fields_params"] ?? null)]);
                    yield "
                    ";
                } elseif ((                // line 163
($context["type"] ?? null) == "datetime")) {
                    // line 164
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 164, $this->getSourceContext())->macro_datetimeField(...[(($_v82 = $context["field"]) && is_array($_v82) || $_v82 instanceof ArrayAccess ? ($_v82["name"] ?? null) : null), (($_v83 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 164)) && is_array($_v83) || $_v83 instanceof ArrayAccess ? ($_v83[(($_v84 = $context["field"]) && is_array($_v84) || $_v84 instanceof ArrayAccess ? ($_v84["name"] ?? null) : null)] ?? null) : null), (($_v85 = $context["field"]) && is_array($_v85) || $_v85 instanceof ArrayAccess ? ($_v85["label"] ?? null) : null), ($context["fields_params"] ?? null)]);
                    yield "
                    ";
                } elseif ((                // line 165
($context["type"] ?? null) == "picture")) {
                    // line 166
                    yield "                        ";
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v86 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 166)) && is_array($_v86) || $_v86 instanceof ArrayAccess ? ($_v86[(($_v87 = $context["field"]) && is_array($_v87) || $_v87 instanceof ArrayAccess ? ($_v87["name"] ?? null) : null)] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 167
                        yield "                            ";
                        yield $macros["fields"]->getTemplateForMacro("macro_imageField", $context, 167, $this->getSourceContext())->macro_imageField(...[(($_v88 = $context["field"]) && is_array($_v88) || $_v88 instanceof ArrayAccess ? ($_v88["name"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl((($_v89 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 167)) && is_array($_v89) || $_v89 instanceof ArrayAccess ? ($_v89[(($_v90 = $context["field"]) && is_array($_v90) || $_v90 instanceof ArrayAccess ? ($_v90["name"] ?? null) : null)] ?? null) : null)), (($_v91 = $context["field"]) && is_array($_v91) || $_v91 instanceof ArrayAccess ? ($_v91["label"] ?? null) : null), Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["clearable" => ( !CoreExtension::getAttribute($this->env, $this->source,                         // line 168
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 168) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 168))])]);
                        // line 169
                        yield "
                        ";
                    } else {
                        // line 171
                        yield "                            ";
                        yield $macros["fields"]->getTemplateForMacro("macro_fileField", $context, 171, $this->getSourceContext())->macro_fileField(...[(($_v92 = $context["field"]) && is_array($_v92) || $_v92 instanceof ArrayAccess ? ($_v92["name"] ?? null) : null), null, (($_v93 = $context["field"]) && is_array($_v93) || $_v93 instanceof ArrayAccess ? ($_v93["label"] ?? null) : null), ["onlyimages" => true]]);
                        // line 173
                        yield "
                        ";
                    }
                    // line 175
                    yield "                    ";
                } elseif ((($context["type"] ?? null) == "picture_gallery")) {
                    // line 176
                    yield "                        ";
                    $context["pictures"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("importArrayFromDB", [(($_v94 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 176)) && is_array($_v94) || $_v94 instanceof ArrayAccess ? ($_v94[(($_v95 = $context["field"]) && is_array($_v95) || $_v95 instanceof ArrayAccess ? ($_v95["name"] ?? null) : null)] ?? null) : null)]);
                    // line 177
                    yield "                        ";
                    $context["picture_urls"] = [];
                    // line 178
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["pictures"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                        // line 179
                        yield "                            ";
                        $context["picture_urls"] = Twig\Extension\CoreExtension::merge(($context["picture_urls"] ?? null), [$this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl($context["picture"])]);
                        // line 180
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['picture'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_imageGalleryField", $context, 181, $this->getSourceContext())->macro_imageGalleryField(...[(($_v96 = $context["field"]) && is_array($_v96) || $_v96 instanceof ArrayAccess ? ($_v96["name"] ?? null) : null), ($context["picture_urls"] ?? null), (($_v97 = $context["field"]) && is_array($_v97) || $_v97 instanceof ArrayAccess ? ($_v97["label"] ?? null) : null), Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["clearable" => ( !CoreExtension::getAttribute($this->env, $this->source,                     // line 182
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 182) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 182))])]);
                    // line 183
                    yield "
                    ";
                } elseif ((                // line 184
($context["type"] ?? null) == "password")) {
                    // line 185
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 185, $this->getSourceContext())->macro_passwordField(...[(($_v98 = $context["field"]) && is_array($_v98) || $_v98 instanceof ArrayAccess ? ($_v98["name"] ?? null) : null), (($_v99 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 185)) && is_array($_v99) || $_v99 instanceof ArrayAccess ? ($_v99[(($_v100 = $context["field"]) && is_array($_v100) || $_v100 instanceof ArrayAccess ? ($_v100["name"] ?? null) : null)] ?? null) : null), (($_v101 = $context["field"]) && is_array($_v101) || $_v101 instanceof ArrayAccess ? ($_v101["label"] ?? null) : null), ($context["fields_params"] ?? null)]);
                    yield "
                    ";
                } elseif ((                // line 186
($context["type"] ?? null) == "tinymce")) {
                    // line 187
                    yield "                        ";
                    $context["fields_params"] = Twig\Extension\CoreExtension::merge(["enable_richtext" => true, "full_width" => true], ($context["fields_params"] ?? null));
                    // line 188
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 188, $this->getSourceContext())->macro_textareaField(...[(($_v102 = $context["field"]) && is_array($_v102) || $_v102 instanceof ArrayAccess ? ($_v102["name"] ?? null) : null), (($_v103 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 188)) && is_array($_v103) || $_v103 instanceof ArrayAccess ? ($_v103[(($_v104 = $context["field"]) && is_array($_v104) || $_v104 instanceof ArrayAccess ? ($_v104["name"] ?? null) : null)] ?? null) : null), (($_v105 = $context["field"]) && is_array($_v105) || $_v105 instanceof ArrayAccess ? ($_v105["label"] ?? null) : null), ($context["fields_params"] ?? null)]);
                    yield "
                    ";
                } elseif ((                // line 189
($context["type"] ?? null) == "duration")) {
                    // line 190
                    yield "                        ";
                    $context["toadd"] = [];
                    // line 191
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(9, 100));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 192
                        yield "                            ";
                        $context["toadd"] = Twig\Extension\CoreExtension::merge(($context["toadd"] ?? null), [($context["i"] * Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP"))]);
                        // line 193
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 194
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_dropdownTimestampField", $context, 194, $this->getSourceContext())->macro_dropdownTimestampField(...[(($_v106 = $context["field"]) && is_array($_v106) || $_v106 instanceof ArrayAccess ? ($_v106["name"] ?? null) : null), (($_v107 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 194)) && is_array($_v107) || $_v107 instanceof ArrayAccess ? ($_v107[(($_v108 = $context["field"]) && is_array($_v108) || $_v108 instanceof ArrayAccess ? ($_v108["name"] ?? null) : null)] ?? null) : null), (($_v109 = $context["field"]) && is_array($_v109) || $_v109 instanceof ArrayAccess ? ($_v109["label"] ?? null) : null), ($context["fields_params"] ?? null)]);
                    yield "
                    ";
                } elseif ((                // line 195
($context["type"] ?? null) == "itemtypename")) {
                    // line 196
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "itemtype_list", [], "array", true, true, false, 196)) {
                        // line 197
                        yield "                            ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["types" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config((($_v110 = $context["field"]) && is_array($_v110) || $_v110 instanceof ArrayAccess ? ($_v110["itemtype_list"] ?? null) : null))]);
                        // line 198
                        yield "                        ";
                    }
                    // line 199
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemTypes", $context, 199, $this->getSourceContext())->macro_dropdownItemTypes(...[(($_v111 = $context["field"]) && is_array($_v111) || $_v111 instanceof ArrayAccess ? ($_v111["name"] ?? null) : null), (($_v112 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 199)) && is_array($_v112) || $_v112 instanceof ArrayAccess ? ($_v112[(($_v113 = $context["field"]) && is_array($_v113) || $_v113 instanceof ArrayAccess ? ($_v113["name"] ?? null) : null)] ?? null) : null), (($_v114 = $context["field"]) && is_array($_v114) || $_v114 instanceof ArrayAccess ? ($_v114["label"] ?? null) : null), ($context["fields_params"] ?? null)]);
                    yield "
                    ";
                } else {
                    // line 201
                    yield "                        ";
                    $context["field_value"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 202
                        yield "                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "displaySpecificTypeField", [(($_v115 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 202)) && is_array($_v115) || $_v115 instanceof ArrayAccess ? ($_v115["id"] ?? null) : null), $context["field"], ($context["fields_params"] ?? null)], "method", false, false, false, 202), "html", null, true);
                        yield "
                        ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 204
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 204, $this->getSourceContext())->macro_field(...[(($_v116 = $context["field"]) && is_array($_v116) || $_v116 instanceof ArrayAccess ? ($_v116["name"] ?? null) : null), ($context["field_value"] ?? null), (($_v117 = $context["field"]) && is_array($_v117) || $_v117 instanceof ArrayAccess ? ($_v117["label"] ?? null) : null), ($context["fields_params"] ?? null)]);
                    yield "
                    ";
                }
                // line 206
                yield "                ";
            } elseif (CoreExtension::inFilter((($_v118 = $context["field"]) && is_array($_v118) || $_v118 instanceof ArrayAccess ? ($_v118["name"] ?? null) : null), ($context["picture_fields"] ?? null))) {
                // line 207
                yield "                    ";
                $context["has_picture_field"] = true;
                // line 208
                yield "                ";
            }
            // line 209
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        yield "
            ";
        // line 211
        if ((($tmp = ($context["has_picture_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 212
            yield "                ";
            yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 212, $this->getSourceContext())->macro_largeTitle(...[_n("Picture", "Pictures", Session::getPluralNumber()), "ti ti-photo"]);
            yield "
            ";
        }
        // line 214
        yield "            ";
        // line 215
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["additional_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 216
            yield "                ";
            $context["type"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "array", true, true, false, 216)) ? (Twig\Extension\CoreExtension::default((($_v119 = $context["field"]) && is_array($_v119) || $_v119 instanceof ArrayAccess ? ($_v119["type"] ?? null) : null), "")) : (""));
            // line 217
            yield "                ";
            if (CoreExtension::inFilter((($_v120 = $context["field"]) && is_array($_v120) || $_v120 instanceof ArrayAccess ? ($_v120["name"] ?? null) : null), ($context["picture_fields"] ?? null))) {
                // line 218
                yield "                    ";
                if ((($context["type"] ?? null) == "picture")) {
                    // line 219
                    yield "                        ";
                    if (((($_v121 = $context["field"]) && is_array($_v121) || $_v121 instanceof ArrayAccess ? ($_v121["name"] ?? null) : null) == "picture_front")) {
                        // line 220
                        yield "                            ";
                        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 220, $this->getSourceContext())->macro_smallTitle(...[__("Rack pictures"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Rack")]);
                        yield "
                        ";
                    }
                    // line 222
                    yield "                        ";
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v122 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 222)) && is_array($_v122) || $_v122 instanceof ArrayAccess ? ($_v122[(($_v123 = $context["field"]) && is_array($_v123) || $_v123 instanceof ArrayAccess ? ($_v123["name"] ?? null) : null)] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 223
                        yield "                            ";
                        yield $macros["fields"]->getTemplateForMacro("macro_imageField", $context, 223, $this->getSourceContext())->macro_imageField(...[(($_v124 = $context["field"]) && is_array($_v124) || $_v124 instanceof ArrayAccess ? ($_v124["name"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl((($_v125 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 223)) && is_array($_v125) || $_v125 instanceof ArrayAccess ? ($_v125[(($_v126 = $context["field"]) && is_array($_v126) || $_v126 instanceof ArrayAccess ? ($_v126["name"] ?? null) : null)] ?? null) : null)), (($_v127 = $context["field"]) && is_array($_v127) || $_v127 instanceof ArrayAccess ? ($_v127["label"] ?? null) : null), Twig\Extension\CoreExtension::merge(($context["base_fields_params"] ?? null), ["clearable" => CoreExtension::getAttribute($this->env, $this->source,                         // line 224
($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 224)])]);
                        // line 225
                        yield "
                        ";
                    } else {
                        // line 227
                        yield "                            ";
                        yield $macros["fields"]->getTemplateForMacro("macro_fileField", $context, 227, $this->getSourceContext())->macro_fileField(...[(($_v128 = $context["field"]) && is_array($_v128) || $_v128 instanceof ArrayAccess ? ($_v128["name"] ?? null) : null), null, (($_v129 = $context["field"]) && is_array($_v129) || $_v129 instanceof ArrayAccess ? ($_v129["label"] ?? null) : null), ["onlyimages" => true]]);
                        // line 229
                        yield "
                        ";
                    }
                    // line 231
                    yield "                    ";
                } elseif ((($context["type"] ?? null) == "picture_gallery")) {
                    // line 232
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 232, $this->getSourceContext())->macro_smallTitle(...[__("Other pictures"), "ti ti-library-photo"]);
                    yield "
                        ";
                    // line 233
                    $context["pictures"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("importArrayFromDB", [(($_v130 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 233)) && is_array($_v130) || $_v130 instanceof ArrayAccess ? ($_v130[(($_v131 = $context["field"]) && is_array($_v131) || $_v131 instanceof ArrayAccess ? ($_v131["name"] ?? null) : null)] ?? null) : null)]);
                    // line 234
                    yield "                        ";
                    $context["picture_urls"] = [];
                    // line 235
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["pictures"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                        // line 236
                        yield "                            ";
                        $context["picture_urls"] = Twig\Extension\CoreExtension::merge(($context["picture_urls"] ?? null), [$this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl($context["picture"])]);
                        // line 237
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['picture'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 238
                    yield "                        ";
                    yield $macros["fields"]->getTemplateForMacro("macro_imageGalleryField", $context, 238, $this->getSourceContext())->macro_imageGalleryField(...[(($_v132 = $context["field"]) && is_array($_v132) || $_v132 instanceof ArrayAccess ? ($_v132["name"] ?? null) : null), ($context["picture_urls"] ?? null), "", Twig\Extension\CoreExtension::merge(($context["base_fields_params"] ?? null), ["clearable" => CoreExtension::getAttribute($this->env, $this->source,                     // line 239
($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 239), "no_label" => true])]);
                    // line 241
                    yield "
                    ";
                }
                // line 243
                yield "                ";
            }
            // line 244
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        yield "        ";
        yield from [];
    }

    // line 246
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 247
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dropdown_form.html.twig";
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
        return array (  630 => 247,  623 => 246,  618 => 245,  612 => 244,  609 => 243,  605 => 241,  603 => 239,  601 => 238,  595 => 237,  592 => 236,  587 => 235,  584 => 234,  582 => 233,  577 => 232,  574 => 231,  570 => 229,  567 => 227,  563 => 225,  561 => 224,  559 => 223,  556 => 222,  550 => 220,  547 => 219,  544 => 218,  541 => 217,  538 => 216,  533 => 215,  531 => 214,  525 => 212,  523 => 211,  520 => 210,  514 => 209,  511 => 208,  508 => 207,  505 => 206,  499 => 204,  492 => 202,  489 => 201,  483 => 199,  480 => 198,  477 => 197,  474 => 196,  472 => 195,  467 => 194,  461 => 193,  458 => 192,  453 => 191,  450 => 190,  448 => 189,  443 => 188,  440 => 187,  438 => 186,  433 => 185,  431 => 184,  428 => 183,  426 => 182,  424 => 181,  418 => 180,  415 => 179,  410 => 178,  407 => 177,  404 => 176,  401 => 175,  397 => 173,  394 => 171,  390 => 169,  388 => 168,  386 => 167,  383 => 166,  381 => 165,  376 => 164,  374 => 163,  369 => 162,  367 => 161,  362 => 160,  360 => 159,  355 => 158,  353 => 157,  348 => 156,  346 => 155,  341 => 154,  338 => 153,  335 => 152,  332 => 151,  330 => 150,  325 => 149,  322 => 148,  319 => 147,  316 => 146,  313 => 145,  310 => 144,  307 => 143,  304 => 142,  301 => 141,  298 => 140,  295 => 139,  293 => 138,  288 => 137,  286 => 136,  283 => 135,  280 => 134,  277 => 133,  274 => 132,  271 => 131,  268 => 130,  265 => 129,  262 => 128,  259 => 127,  256 => 126,  254 => 124,  252 => 123,  250 => 122,  247 => 121,  245 => 120,  244 => 119,  243 => 118,  241 => 117,  239 => 116,  234 => 115,  232 => 114,  227 => 113,  225 => 112,  220 => 111,  217 => 110,  214 => 109,  211 => 108,  208 => 107,  206 => 105,  204 => 104,  202 => 103,  199 => 102,  197 => 100,  196 => 99,  195 => 98,  194 => 96,  193 => 95,  192 => 94,  190 => 92,  188 => 91,  185 => 90,  183 => 88,  182 => 84,  181 => 83,  179 => 81,  177 => 80,  172 => 79,  170 => 78,  167 => 77,  164 => 76,  161 => 75,  158 => 74,  155 => 73,  152 => 72,  149 => 71,  147 => 70,  144 => 69,  141 => 68,  138 => 67,  135 => 66,  130 => 65,  127 => 63,  123 => 61,  121 => 59,  119 => 57,  117 => 56,  113 => 54,  111 => 53,  110 => 51,  109 => 50,  107 => 49,  104 => 47,  101 => 46,  98 => 45,  91 => 44,  83 => 249,  80 => 248,  77 => 246,  75 => 44,  71 => 42,  68 => 41,  65 => 40,  62 => 39,  59 => 38,  57 => 37,  53 => 36,  49 => 34,  47 => 33,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dropdown_form.html.twig", "/var/www/html/glpi/templates/dropdown_form.html.twig");
    }
}
