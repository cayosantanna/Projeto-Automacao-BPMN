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

/* components/search/controls.html.twig */
class __TwigTemplate_d272046ad7b4bd313e37cdd6c54fa934 extends Template
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
        if ((($context["showmassiveactions"] ?? null) && (($context["count"] ?? null) > 0))) {
            // line 36
            yield "    <div class=\"massiveactions-control card-header search-header ps-3 animate__animated animate__faster d-none\">
        ";
            // line 37
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showMassiveActions", [($context["massiveactionparams"] ?? null)]);
            // line 38
            yield "    </div>
";
        }
        // line 40
        yield "
<div class=\"card-header search-header px-1 px-xl-3\">
    ";
        // line 42
        if ((($tmp =  !(((CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_controls", [], "any", true, true, false, 42) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_controls", [], "any", false, false, false, 42)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_controls", [], "any", false, false, false, 42)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "        <div class=\"search-controls d-flex justify-content-between align-items-center\">

            ";
            // line 45
            $context["mainform"] = (((array_key_exists("mainform", $context) &&  !(null === $context["mainform"]))) ? ($context["mainform"]) : (true));
            // line 46
            yield "            ";
            $context["showaction"] = (((array_key_exists("showaction", $context) &&  !(null === $context["showaction"]))) ? ($context["showaction"]) : (true));
            // line 47
            yield "            ";
            if ((($context["mainform"] ?? null) && ($context["showaction"] ?? null))) {
                // line 48
                yield "                <form
                    name=\"searchform";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["normalized_itemtype"] ?? null), "html", null, true);
                yield "\"
                    class=\"search-form-container needs-validation\"
                    novalidate
                    method=\"get\"
                    action=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["href"] ?? null), "html", null, true);
                yield "\"
                    ";
                // line 54
                if ((($tmp =  !$this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("show_search_form")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 55
                    yield "                        ";
                    // line 60
                    yield "                        data-glpi-search-form
                    ";
                }
                // line 62
                yield "                >
            ";
            }
            // line 64
            yield "            ";
            if ((($tmp =  !(((CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_criteria", [], "any", true, true, false, 64) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_criteria", [], "any", false, false, false, 64)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_criteria", [], "any", false, false, false, 64)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "                <div class=\"primary-controls\">
                <div class=\"btn-group me-1 me-xl-2\">
                    ";
                // line 67
                $context["is_filter_active"] = false;
                // line 68
                yield "                    ";
                if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["active_search_name"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 69
                    yield "                        ";
                    $context["is_filter_active"] = true;
                    // line 70
                    yield "                    ";
                }
                // line 71
                yield "                    ";
                $context["animation_cls"] = "animate__animated animate__zoomIn";
                // line 72
                yield "
                    ";
                // line 73
                $context["active_savedsearch_class"] = (((($tmp = ($context["active_savedsearch"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-active-search") : (""));
                // line 74
                yield "                    <button type=\"button\" class=\"btn btn-icon btn-sm p-1 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_savedsearch_class"] ?? null), "html", null, true);
                yield " btn-ghost-secondary show-saved-searches\"
                        data-itemtype=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "html", null, true);
                yield "\"
                        title=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show saved searches"), "html", null, true);
                yield "\"  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-bookmarks\"></i>
                    </button>
                    ";
                // line 79
                if ((($tmp =  !$this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("show_search_form")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 80
                    yield "                        ";
                    $context["active_filter_class"] = (((($tmp = ($context["is_filter_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-active-search") : ("btn-ghost-secondary"));
                    // line 81
                    yield "                        <button class=\"btn btn-sm py-1 show-search-filters ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_filter_class"] ?? null), "html", null, true);
                    yield " btn-ghost-secondary dropdown-toggle\" type=\"button\"
                                data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">
                            <i class=\"ti ti-list-search\"></i>
                            ";
                    // line 84
                    if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["active_search_name"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 85
                        yield "                                <span class=\"d-none d-xl-inline-block text-truncate\" style=\"max-width: 250px\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_search_name"] ?? null), "html", null, true);
                        yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                    ";
                        // line 86
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_search_name"] ?? null), "html", null, true);
                        yield "
                                </span>
                            ";
                    } else {
                        // line 89
                        yield "                                <span class=\"d-none d-xl-inline-block\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search"), "html", null, true);
                        yield "</span>
                            ";
                    }
                    // line 91
                    yield "                        </button>
                        <div class=\"dropdown-menu dropdown-menu-card ";
                    // line 92
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["animation_cls"] ?? null), "html", null, true);
                    yield "\" style=\"width: max-content; max-width: 100vw;\">
                            ";
                    // line 93
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::showGenericSearch", [($context["itemtype"] ?? null), ($context["original_params"] ?? null)]);
                    // line 94
                    yield "                        </div>
                    ";
                }
                // line 96
                yield "                </div>

                ";
                // line 98
                if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 98), "as_map", [], "array", true, true, false, 98)) ? (Twig\Extension\CoreExtension::default((($_v0 = (($_v1 = ($context["data"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["search"] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["as_map"] ?? null) : null), false)) : (false)) != 1)) {
                    // line 99
                    yield "                    ";
                    $context["active_sort_class"] = (((($tmp = ($context["active_sort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-active-sort") : (""));
                    // line 100
                    yield "                    <button class=\"btn btn-sm py-1 show-search-sorts ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active_sort_class"] ?? null), "html", null, true);
                    yield " btn-ghost-secondary dropdown-toggle me-1 me-xl-2\" type=\"button\"
                                data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">
                        <i class=\"ti ti-arrows-sort\"></i>
                        ";
                    // line 103
                    $context["sort_names"] = (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["active_sort_name"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["active_sort_name"] ?? null)) : (__("Sort")));
                    // line 104
                    yield "                        <span class=\"d-none d-xl-inline-block text-truncate\" style=\"max-width: 250px\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sort_names"] ?? null), "html", null, true);
                    yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                            ";
                    // line 105
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sort_names"] ?? null), "html", null, true);
                    yield "
                        </span>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-card ";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["animation_cls"] ?? null), "html", null, true);
                    yield "\" style=\"width: max-content; max-width: 100vw;\">
                        ";
                    // line 109
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::showGenericSort", [($context["itemtype"] ?? null), ($context["original_params"] ?? null)]);
                    // line 110
                    yield "                    </div>
                ";
                }
                // line 112
                yield "            </div>
            ";
            }
            // line 114
            yield "
            ";
            // line 115
            if ((($context["mainform"] ?? null) && ($context["showaction"] ?? null))) {
                // line 116
                yield "                ";
                yield $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 116, $this->getSourceContext())->macro_csrfField(...[]);
                yield "
                </form>
            ";
            }
            // line 119
            yield "
            <div class=\"middle-controls d-flex\">
                ";
            // line 121
            if ((($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("method_exists", [($context["itemtype"] ?? null), "showSearchStatusArea"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 122
                yield "                    ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call([($context["itemtype"] ?? null), "showSearchStatusArea"]);
                // line 123
                yield "                ";
            }
            // line 124
            yield "
                ";
            // line 125
            if ((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("search_pagination_on_top")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 126
                yield "                    ";
                if ((((($_v2 = ($context["data"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["display_type"] ?? null) : null) != Twig\Extension\CoreExtension::constant("Search::GLOBAL_SEARCH")) && ((($_v3 = (($_v4 = ($context["data"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["search"] ?? null) : null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["as_map"] ?? null) : null) == 0))) {
                    // line 127
                    yield "                        <div class=\"search-footer flex-grow-1 mx-1 d-none d-xxl-block mb-n2\" style=\"max-width: 650px;\">
                            ";
                    // line 128
                    yield from $this->load("components/pager.html.twig", 128)->unwrap()->yield(CoreExtension::merge($context, ["short_display" => true]));
                    // line 131
                    yield "                        </div>
                    ";
                }
                // line 133
                yield "                ";
            }
            // line 134
            yield "            </div>

            ";
            // line 136
            $context["submit_search_form"] = "this.closest('[data-glpi-search-container]').querySelector('[data-glpi-search-form]').submit()";
            // line 137
            yield "            <div class=\"secondary-controls\">
                ";
            // line 138
            if ((($tmp = ($context["may_be_located"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 139
                yield "                    <div class=\"btn-group me-1 me-xl-2 shadow-none\" role=\"group\">
                        ";
                // line 140
                $context["table_class"] = ((((($_v5 = (($_v6 = ($context["data"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["search"] ?? null) : null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["as_map"] ?? null) : null) == 0)) ? ("btn-ghost-info") : (""));
                // line 141
                yield "                        <input
                            type=\"radio\"
                            class=\"btn-check\"
                            name=\"as_map\"
                            value=\"1\"
                            autocomplete=\"off\"
                            id=\"show_as_table\"
                            onclick=\"toogle('as_map','','',''); ";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["submit_search_form"] ?? null), "html", null, true);
                yield ";\"
                            ";
                // line 149
                yield ((((($_v7 = (($_v8 = ($context["data"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["search"] ?? null) : null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["as_map"] ?? null) : null) == 0)) ? ("checked") : (""));
                yield "
                        >
                            <label class=\"btn btn-icon btn-sm btn-pill px-2 py-1 ";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_class"] ?? null), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show as table"), "html", null, true);
                yield "\"
                                for=\"show_as_table\"
                                data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                <i class=\"ti ti-table\"></i>
                            </label >

                        ";
                // line 157
                $context["located_class"] = ((((($_v9 = (($_v10 = ($context["data"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["search"] ?? null) : null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["as_map"] ?? null) : null) == 1)) ? ("btn-ghost-info") : (""));
                // line 158
                yield "                        <input
                            type=\"radio\"
                            class=\"btn-check\"
                            name=\"as_map\"
                            value=\"1\"
                            autocomplete=\"off\"
                            id=\"show_as_map\"
                            onclick=\"toogle('as_map','','',''); ";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["submit_search_form"] ?? null), "html", null, true);
                yield ";\"
                            ";
                // line 166
                yield ((((($_v11 = (($_v12 = ($context["data"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["search"] ?? null) : null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["as_map"] ?? null) : null) == 1)) ? ("checked") : (""));
                yield "
                        >
                        <label class=\"btn btn-icon btn-sm btn-pill px-2 py-1 ";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["located_class"] ?? null), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show as map"), "html", null, true);
                yield "\"
                            for=\"show_as_map\"
                            data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                            <i class=\"ti ti-map-2\"></i>
                        </label >
                    </div>
                ";
            }
            // line 175
            yield "
                ";
            // line 176
            if ((($tmp = ($context["may_be_browsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 177
                yield "                    <button
                        class=\"btn btn-icon btn-sm ";
                // line 178
                yield (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 178), "browse", [], "array", true, true, false, 178)) ? (Twig\Extension\CoreExtension::default((($_v13 = (($_v14 = ($context["data"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["search"] ?? null) : null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["browse"] ?? null) : null), false)) : (false)) == 1)) ? ("btn-secondary") : ("btn-ghost-secondary"));
                yield " me-1 me-xl-2 px-1\"
                        type=\"button\"
                        title=\"";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Toggle browse"), "html", null, true);
                yield "\"
                        data-bs-toggle=\"tooltip\"
                        data-bs-placement=\"top\"
                        onclick=\"toogle('browse','','',''); ";
                // line 183
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["submit_search_form"] ?? null), "html", null, true);
                yield ";\"
                    >
                        <i class=\"ti ";
                // line 185
                yield (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 185), "browse", [], "array", true, true, false, 185)) ? (Twig\Extension\CoreExtension::default((($_v15 = (($_v16 = ($context["data"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["search"] ?? null) : null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["browse"] ?? null) : null), false)) : (false)) == 1)) ? ("ti-checkbox") : ("ti-square"));
                yield "\"></i>
                        <span class=\"d-flex align-bottom\">
                            <i class=\"ti ti-subtask\"></i>
                        </span>
                    </button>
                ";
            }
            // line 191
            yield "
                ";
            // line 192
            if ((($tmp = ($context["may_be_deleted"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 193
                yield "                    <button
                        class=\"btn btn-icon btn-sm ";
                // line 194
                yield ((((($_v17 = (($_v18 = ($context["data"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["search"] ?? null) : null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["is_deleted"] ?? null) : null) == 1)) ? ("btn-danger") : ("btn-ghost-danger"));
                yield " me-1 me-xl-2 px-1\"
                        type=\"button\"
                        title=\"";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show the trashbin"), "html", null, true);
                yield "\"
                        data-bs-toggle=\"tooltip\"
                        data-bs-placement=\"top\"
                        onclick=\"toogle('is_deleted','','',''); ";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["submit_search_form"] ?? null), "html", null, true);
                yield ";\"
                    >
                        <i class=\"ti ";
                // line 201
                yield ((((($_v19 = (($_v20 = ($context["data"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["search"] ?? null) : null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["is_deleted"] ?? null) : null) == 1)) ? ("ti-checkbox") : ("ti-square"));
                yield "\"></i>
                        <span class=\"d-flex align-bottom\">
                            <i class=\"ti ti-trash\"></i>
                        </span>
                    </button>
                ";
            }
            // line 207
            yield "
                ";
            // line 208
            if ((($tmp = ($context["may_be_unpublished"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 209
                yield "                    ";
                $context["show_unpublished"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 209), "unpublished", [], "array", true, true, false, 209)) ? (Twig\Extension\CoreExtension::default((($_v21 = (($_v22 = ($context["data"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["search"] ?? null) : null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["unpublished"] ?? null) : null), false)) : (false)) == 1);
                // line 210
                yield "                    <button
                        class=\"btn btn-icon btn-sm ";
                // line 211
                yield (((($tmp = ($context["show_unpublished"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-warning") : ("btn-ghost-warning"));
                yield " me-1 me-xl-2 px-1\"
                        type=\"button\"
                        title=\"";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show unpublished"), "html", null, true);
                yield "\"
                        data-bs-toggle=\"tooltip\"
                        data-bs-placement=\"top\"
                        onclick=\"toogle('unpublished','','',''); ";
                // line 216
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["submit_search_form"] ?? null), "html", null, true);
                yield ";\"
                    >
                        <i
                            class=\"ti ";
                // line 219
                yield (((($tmp = ($context["show_unpublished"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ti-checkbox") : ("ti-square"));
                yield "\"
                            data-testid=\"unpublished-";
                // line 220
                yield (((($tmp = ($context["show_unpublished"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("on") : ("off"));
                yield "\"
                        ></i>
                        <span class=\"d-flex align-bottom\">
                            <i class=\"ti ti-eye-off\"></i>
                        </span>
                    </button>
                ";
            }
            // line 227
            yield "

                ";
            // line 229
            if ((($tmp = ($context["can_config"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 230
                yield "                    <button class=\"show_displaypreference_modal  btn btn-sm btn-ghost-secondary\"
                        type=\"button\"
                        title=\"";
                // line 232
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select default items to show"), "html", null, true);
                yield "\"
                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-table-row\"></i>
                    </button>
                    <template id=\"displaypreference_modal_template";
                // line 236
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\">
                        ";
                // line 237
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/search/displaypreference_modal.html.twig", ["rand" =>                 // line 238
($context["rand"] ?? null), "itemtype" =>                 // line 239
($context["itemtype"] ?? null)]);
                // line 240
                yield "
                    </template>
                ";
            }
            // line 243
            yield "
                ";
            // line 244
            if ((($tmp =  !$this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("show_search_form")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 245
                yield "                    <button type=\"button\" class=\"btn btn-icon btn-sm p-1 btn-ghost-secondary refresh-search\"
                        title=\"";
                // line 246
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Refresh"), "html", null, true);
                yield "\"  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-trigger=\"hover\">
                        <i class=\"ti ti-refresh\"></i>
                    </button>
                ";
            }
            // line 250
            yield "
                ";
            // line 251
            if ((($context["count"] ?? null) > 0)) {
                // line 252
                yield "                    <button class=\"dropdown-toggle btn btn-sm btn-ghost-secondary\" type=\"button\" name=\"export\" id=\"dropdown-export-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\"
                            data-bs-toggle=\"dropdown\" aria-expanded=\"false\" data-bs-popper-config='{\"strategy\":\"fixed\"}'>
                        <span title=\"";
                // line 254
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Export"), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                            <i id=\"export_dropdown_icon\" class=\"ti ti-download\"></i>
                        </span>
                    </button>
                    ";
                // line 258
                $context["exporthref"] = (((($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/report.dynamic.php") . "?") . Twig\Extension\CoreExtension::urlencode(["item_type" =>                 // line 259
($context["itemtype"] ?? null), "sort" =>                 // line 260
($context["sort"] ?? null), "order" =>                 // line 261
($context["order"] ?? null), "start" =>                 // line 262
($context["start"] ?? null)])) . "&") .                 // line 263
($context["posthref"] ?? null));
                // line 264
                yield "                    <div class=\"dropdown-menu\" style=\"z-index: 10001\" aria-labelledby=\"dropdown-export-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\" role=\"menu\">
                        <div role=\"separator\"><h6 class=\"dropdown-header\">";
                // line 265
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Current page"), "html", null, true);
                yield "</h6></div>
                        <a class=\"dropdown-item\" href=\"";
                // line 266
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_LANDSCAPE")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-pdf\"></i>";
                // line 268
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Landscape PDF"), "html", null, true);
                // line 269
                yield "</a>
                        <a class=\"dropdown-item\" href=\"";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_PORTRAIT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-pdf\"></i>
                            ";
                // line 272
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Portrait PDF"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 274
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::CSV_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-csv\"></i>
                            ";
                // line 276
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("CSV"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 278
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::ODS_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-spreadsheet\"></i>
                            ";
                // line 280
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Spreadsheet (%s)"), "ODS"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 282
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::XLSX_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-spreadsheet\"></i>
                            ";
                // line 284
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Spreadsheet (%s)"), "XLSX"), "html", null, true);
                yield "
                        </a>
                        <hr class=\"dropdown-divider\">
                        <div role=\"separator\"><h6 class=\"dropdown-header\">";
                // line 287
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All pages"), "html", null, true);
                yield "</h6></div>
                        <a class=\"dropdown-item\" href=\"";
                // line 288
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_LANDSCAPE")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-pdf\"></i>
                            ";
                // line 290
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Landscape PDF"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 292
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_PORTRAIT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-pdf\"></i>
                            ";
                // line 294
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Portrait PDF"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 296
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::CSV_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-csv\"></i>
                            ";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("CSV"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 300
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::ODS_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-spreadsheet\"></i>
                            ";
                // line 302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Spreadsheet (%s)"), "ODS"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::XLSX_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-spreadsheet\"></i>
                            ";
                // line 306
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Spreadsheet (%s)"), "XLSX"), "html", null, true);
                yield "
                        </a>
                        ";
                // line 308
                if ((($context["itemtype"] ?? null) != "Stat")) {
                    // line 309
                    yield "                        <hr class=\"dropdown-divider\">
                        <a class=\"dropdown-item\" href=\"";
                    // line 310
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::NAMES_OUTPUT")), "html", null, true);
                    yield "\"
                           id=\"copy_names_to_clipboard\" role=\"menuitem\">
                            <i class=\"ti ti-copy\"></i>
                            ";
                    // line 313
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Copy names to clipboard"), "html", null, true);
                    yield "
                        </a>
                        ";
                }
                // line 316
                yield "                    </div>
                    <script>
                        // Ugly trick to fix z-index context issue by placing our dropdown at the end of the body
                        \$(\"#dropdown-export-";
                // line 319
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\").on(\"show.bs.dropdown\", function() {
                            \$(document.body).append(\$(\"ul[aria-labelledby=dropdown-export-";
                // line 320
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "]\").detach());
                        });
                    </script>
                ";
            }
            // line 324
            yield "            </div>
        </div>
    ";
        }
        // line 327
        yield "</div>

<script type=\"text/javascript\">
\$(document).ready(function() {
   const refreshSearchResults = function() {
      const search_display = \$('.ajax-container.search-display-data');
      try {
         if (search_display.length === 1 && search_display.data('js_class') !== undefined) {
            search_display.data('js_class').view.refreshResults();
         } else {
            window.location.reload();
         }
      } catch (err) {
         window.location.reload();
      }
   };

   \$('.show_displaypreference_modal').click(function(e) {
      e.preventDefault();

      // remove old modal
      \$('#displayprefence_modal";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').remove();

      // create new one
      \$('body').append(\$('#displaypreference_modal_template";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').html());
      const modal_el = \$('#displaypreference_modal";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "');
      modal_el.modal('show');
   });

   \$(\"body\").on('hide.bs.modal', '#displaypreference_modal";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "', function() {
      refreshSearchResults();
   });

   \$('.default-filter').change(function(event) {
      const search_params = new URLSearchParams(window.location.search);
      if (!\$(this).is(\":checked\")) {
          search_params.set('nodefault', '1');
      } else {
          search_params.delete('nodefault');
      }
      window.location.replace('?' + search_params.toString());
   });

   \$('.refresh-search').on('click', function(e) {
      e.preventDefault();
      const tooltip = bootstrap.Tooltip.getInstance(\$(this)[0]);
      if (tooltip !== null) {
         tooltip.hide();
      }
      refreshSearchResults();
   });

   // Callbacks for copy success/failure
   function copy_success() {
      glpi_toast_info(__('Results copied to clipboard'));
      \$('#export_dropdown_icon').removeClass('spinner-border spinner-border-sm');
      \$('#export_dropdown_icon').addClass('ti-file-download');
   }
   function copy_error() {
      glpi_toast_error(__('Unexpected error'));
      \$('#export_dropdown_icon').removeClass('spinner-border spinner-border-sm');
      \$('#export_dropdown_icon').addClass('ti-file-download');
   }

   \$('#copy_names_to_clipboard').click(function(e) {
      // Get target link
      const link = \$(e.currentTarget).prop('href');

      // Show loading indicator
      \$('#export_dropdown_icon').removeClass('ti-file-download');
      \$('#export_dropdown_icon').addClass('spinner-border spinner-border-sm');

      // Prevent link from working
      e.preventDefault();

      // Get data using ajax
      \$.get(link, function (data) {
         navigator.clipboard.writeText(data).then(copy_success, copy_error);
      }).fail(copy_error);
   });

    // show massive actions control when at least one checkbox is checked
    \$('.massive_action_checkbox').change(function() {
        const nb_ma_checked = \$('.massive_action_checkbox:checked').length;

        if (nb_ma_checked === 0) {
            \$('.massiveactions-control')
                .removeClass('animate__slideInLeft')
                .addClass('animate__slideOutLeft')
        } else {
            \$('.massiveactions-control')
                .removeClass('d-none')
                .removeClass('animate__slideOutLeft')
                .addClass('animate__slideInLeft');
        }
    });
    // also call it on page load
    \$('.massive_action_checkbox').trigger('change');
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search/controls.html.twig";
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
        return array (  723 => 356,  716 => 352,  712 => 351,  706 => 348,  683 => 327,  678 => 324,  671 => 320,  667 => 319,  662 => 316,  656 => 313,  650 => 310,  647 => 309,  645 => 308,  640 => 306,  635 => 304,  630 => 302,  625 => 300,  620 => 298,  615 => 296,  610 => 294,  605 => 292,  600 => 290,  595 => 288,  591 => 287,  585 => 284,  580 => 282,  575 => 280,  570 => 278,  565 => 276,  560 => 274,  555 => 272,  550 => 270,  547 => 269,  545 => 268,  541 => 266,  537 => 265,  532 => 264,  530 => 263,  529 => 262,  528 => 261,  527 => 260,  526 => 259,  525 => 258,  518 => 254,  512 => 252,  510 => 251,  507 => 250,  500 => 246,  497 => 245,  495 => 244,  492 => 243,  487 => 240,  485 => 239,  484 => 238,  483 => 237,  479 => 236,  472 => 232,  468 => 230,  466 => 229,  462 => 227,  452 => 220,  448 => 219,  442 => 216,  436 => 213,  431 => 211,  428 => 210,  425 => 209,  423 => 208,  420 => 207,  411 => 201,  406 => 199,  400 => 196,  395 => 194,  392 => 193,  390 => 192,  387 => 191,  378 => 185,  373 => 183,  367 => 180,  362 => 178,  359 => 177,  357 => 176,  354 => 175,  342 => 168,  337 => 166,  333 => 165,  324 => 158,  322 => 157,  311 => 151,  306 => 149,  302 => 148,  293 => 141,  291 => 140,  288 => 139,  286 => 138,  283 => 137,  281 => 136,  277 => 134,  274 => 133,  270 => 131,  268 => 128,  265 => 127,  262 => 126,  260 => 125,  257 => 124,  254 => 123,  251 => 122,  249 => 121,  245 => 119,  238 => 116,  236 => 115,  233 => 114,  229 => 112,  225 => 110,  223 => 109,  219 => 108,  213 => 105,  208 => 104,  206 => 103,  199 => 100,  196 => 99,  194 => 98,  190 => 96,  186 => 94,  184 => 93,  180 => 92,  177 => 91,  171 => 89,  165 => 86,  160 => 85,  158 => 84,  151 => 81,  148 => 80,  146 => 79,  140 => 76,  136 => 75,  131 => 74,  129 => 73,  126 => 72,  123 => 71,  120 => 70,  117 => 69,  114 => 68,  112 => 67,  108 => 65,  105 => 64,  101 => 62,  97 => 60,  95 => 55,  93 => 54,  89 => 53,  82 => 49,  79 => 48,  76 => 47,  73 => 46,  71 => 45,  67 => 43,  65 => 42,  61 => 40,  57 => 38,  55 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/controls.html.twig", "/var/www/html/glpi/templates/components/search/controls.html.twig");
    }
}
