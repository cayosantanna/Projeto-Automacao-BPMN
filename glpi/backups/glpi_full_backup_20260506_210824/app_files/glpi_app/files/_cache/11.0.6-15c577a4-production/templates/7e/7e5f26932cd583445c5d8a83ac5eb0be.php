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

/* components/itilobject/timeline/form_followup.html.twig */
class __TwigTemplate_6e2dab53bb22a91b1c0a3500dbf0ee07 extends Template
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
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 36
        $context["params"] = Twig\Extension\CoreExtension::merge(["item" => ($context["item"] ?? null)], ((array_key_exists("params", $context)) ? (Twig\Extension\CoreExtension::default(($context["params"] ?? null), [])) : ([])));
        // line 38
        $context["candedit"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maySolve", [], "method", false, false, false, 38);
        // line 39
        $context["can_read_kb"] = (Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("READ")) || Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("KnowbaseItem::READFAQ")));
        // line 40
        $context["can_update_kb"] = Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("UPDATE"));
        // line 41
        $context["nokb"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 41) || ((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 41) &&  !(null === (($_v0 = ($context["params"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["nokb"] ?? null) : null)))) ? ((($_v1 = ($context["params"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["nokb"] ?? null) : null)) : (false)) == true));
        // line 42
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 43
        $context["is_default_pending"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::isDefaultPending");
        // line 45
        $context["content_field_id"] = ("solution_content_" . ($context["rand"] ?? null));
        // line 33
        $this->parent = $this->load("components/itilobject/timeline/form_timeline_item.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_timeline_card(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        yield "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 49
            yield "      <div class=\"read-only-content\">
         <div class=\"rich_text_container\">
            ";
            // line 51
            yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($_v2 = ($context["entry_i"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 54
            yield "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 58
            if ((($tmp = (($_v3 = ($context["entry_i"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["requesttypes_id"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 59
                yield "               <span class=\"badge bg-blue-lt\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Source of followup"), "html", null, true);
                yield "\">
                  <i class=\"ti ti-inbox me-1\"></i>
                  ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("RequestType", (($_v4 = ($context["entry_i"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["requesttypes_id"] ?? null) : null)), "html", null, true);
                yield "
               </span>
            ";
            }
            // line 64
            yield "
            ";
            // line 65
            if ((($tmp = (($_v5 = ($context["entry_i"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["sourceitems_id"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 66
                yield "               <span class=\"badge bg-blue-lt\">
                  <i class=\"ti ti-git-merge me-1\"></i>
                  ";
                // line 68
                $context["merged_badge"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 69
                    yield "                     <span class=\"badge\">
                        ";
                    // line 70
                    yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($_v6 = ($context["entry_i"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["sourceitems_id"] ?? null) : null));
                    yield "
                     </span>
                  ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 73
                yield "                  ";
                yield Twig\Extension\CoreExtension::sprintf(__("Merged from Ticket %1\$s"), ($context["merged_badge"] ?? null));
                yield "
               </span>
            ";
            }
            // line 76
            yield "
            ";
            // line 77
            if ((($tmp = (($_v7 = ($context["entry_i"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["sourceof_items_id"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "               <span class=\"badge bg-blue-lt\">
                  <i class=\"ti ti-git-merge me-1\"></i>
                  ";
                // line 80
                $context["promoted_badge"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 81
                    yield "                     <span class=\"badge\">
                        ";
                    // line 82
                    yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($_v8 = ($context["entry_i"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["sourceof_items_id"] ?? null) : null));
                    yield "
                     </span>
                  ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 85
                yield "                  ";
                yield Twig\Extension\CoreExtension::sprintf(__("Promoted to Ticket %1\$s"), ($context["promoted_badge"] ?? null));
                yield "
               </span>
            ";
            }
            // line 88
            yield "
            ";
            // line 89
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig");
            yield "
         </div>
      </div>
   ";
        } else {
            // line 93
            yield "      <div class=\"itilfollowup\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 95), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 96), "html", null, true);
            yield "\" />
            <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 97)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["id"] ?? null) : null), "html", null, true);
            yield "\" />
            ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "

            ";
            // line 100
            $context["add_reopen"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 100) &&  !(null === (($_v10 = ($context["_get"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["_openfollowup"] ?? null) : null)))) ? ((($_v11 = ($context["_get"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["_openfollowup"] ?? null) : null)) : (false)) || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "needReopen", [], "method", false, false, false, 100));
            // line 101
            yield "            ";
            if ((($tmp = ($context["add_reopen"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 102
                yield "               <input type=\"hidden\" name=\"add_reopen\" value=\"1\" />
            ";
            }
            // line 104
            yield "
            <div class=\"row mx-n3 mx-xxl-auto\">
               ";
            // line 106
            $context["col_md"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) ? ("col-xl-7 col-xxl-8") : ("col-xxl-12"));
            // line 107
            yield "               <div class=\"col-12 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["col_md"] ?? null), "html", null, true);
            yield "\">
                  ";
            // line 108
            yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 108, $this->getSourceContext())->macro_textareaField(...["content", (($_v12 = CoreExtension::getAttribute($this->env, $this->source,             // line 110
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 110)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["content"] ?? null) : null), "", ["id" =>             // line 113
($context["content_field_id"] ?? null), "full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "mention_options" =>             // line 118
($context["mention_options"] ?? null), "entities_id" => (($_v13 = CoreExtension::getAttribute($this->env, $this->source,             // line 119
($context["item"] ?? null), "fields", [], "any", false, false, false, 119)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["entities_id"] ?? null) : null), "rand" =>             // line 120
($context["rand"] ?? null), "required" =>             // line 121
($context["add_reopen"] ?? null)]]);
            // line 123
            yield "
               </div>
               ";
            // line 125
            if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
                // line 126
                yield "                  <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-0 pe-xxl-auto\">
                     <div class=\"row\">

                        ";
                // line 129
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/knowledge_item.html.twig");
                yield "

                        ";
                // line 131
                $context["fup_template_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 132
                    yield "                           <i class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("ITILFollowupTemplate"), "html", null, true);
                    yield " me-1\"
                              title=\"";
                    // line 133
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Followup template", "Followup templates", Session::getPluralNumber()), "html", null, true);
                    yield "\"></i>
                        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 135
                yield "                        ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 135, $this->getSourceContext())->macro_dropdownField(...["ITILFollowupTemplate", "itilfollowuptemplates_id", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 138
($context["subitem"] ?? null), "fields", [], "any", false, true, false, 138), "itilfollowuptemplates_id", [], "array", true, true, false, 138) &&  !(null === (($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 138)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["itilfollowuptemplates_id"] ?? null) : null)))) ? ((($_v15 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 138)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["itilfollowuptemplates_id"] ?? null) : null)) : (0)),                 // line 139
($context["fup_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("itilfollowuptemplate_update" .                 // line 143
($context["rand"] ?? null)) . "(this.value)"), "entity" => (($_v16 = CoreExtension::getAttribute($this->env, $this->source,                 // line 144
($context["item"] ?? null), "fields", [], "any", false, false, false, 144)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["entities_id"] ?? null) : null), "rand" =>                 // line 145
($context["rand"] ?? null)]]);
                // line 147
                yield "

                        ";
                // line 149
                $context["fup_source_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 150
                    yield "                           <i class=\"ti ti-inbox me-1\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Source of followup"), "html", null, true);
                    yield "\"></i>
                        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 152
                yield "                        ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 152, $this->getSourceContext())->macro_dropdownField(...["RequestType", "requesttypes_id", (($_v17 = CoreExtension::getAttribute($this->env, $this->source,                 // line 155
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 155)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["requesttypes_id"] ?? null) : null),                 // line 156
($context["fup_source_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "condition" => ["is_active" => 1, "is_itilfollowup" => 1], "rand" =>                 // line 164
($context["rand"] ?? null)]]);
                // line 166
                yield "

                        ";
                // line 168
                $context["fup_private_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 169
                    yield "                           <i class=\"ti ti-eye-off me-1\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Private"), "html", null, true);
                    yield "\"></i>
                        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 171
                yield "                        ";
                yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 171, $this->getSourceContext())->macro_sliderField(...["is_private", (($_v18 = CoreExtension::getAttribute($this->env, $this->source,                 // line 173
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 173)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["is_private"] ?? null) : null),                 // line 174
($context["fup_private_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 178
($context["rand"] ?? null), "additional_attributes" => ["onchange" => "toggleTimelinePrivate(this.checked, this)"]]]);
                // line 183
                yield "

                        ";
                // line 185
                if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                    // line 186
                    yield "                           ";
                    $context["fup_to_kb_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 187
                        yield "                              <i class=\"ti ti-device-floppy me-1\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save and add to the knowledge base"), "html", null, true);
                        yield "\"
                                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                           ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 190
                    yield "                           ";
                    yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 190, $this->getSourceContext())->macro_sliderField(...["_fup_to_kb", 0,                     // line 193
($context["fup_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                     // line 197
($context["rand"] ?? null)]]);
                    // line 199
                    yield "
                        ";
                }
                // line 201
                yield "                     </div>
                  </div>
               ";
            }
            // line 204
            yield "            </div>

            ";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "
            ";
            // line 208
            yield "            <div class=\"d-flex card-footer mx-n3 mb-n3 flex-wrap\" style=\"row-gap: 10px; min-height: 79px\">
               ";
            // line 209
            $context["pending_reasons"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 210
                yield "                  ";
                $context["show_pending_reasons_actions"] = ((((($_v19 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 210)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["status"] ?? null) : null) == Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING")) || ($context["is_default_pending"] ?? null)) &&  !($context["add_reopen"] ?? null));
                // line 211
                yield "                  ";
                if (((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central") && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isAllowedStatus", [(($_v20 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 211)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["status"] ?? null) : null), Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING")], "method", false, false, false, 211)) && $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::canDisplayPendingReasonForItem", [($context["subitem"] ?? null)]))) {
                    // line 212
                    yield "                     <span
                        class=\"input-group-text bg-yellow-lt py-0 pe-0 ";
                    // line 213
                    yield (((($tmp = ($context["show_pending_reasons_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("flex-fill") : (""));
                    yield "\"
                        id=\"pending-reasons-control-";
                    // line 214
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\"
                     >
                        <span class=\"d-inline-flex align-items-center\" title=\"";
                    // line 216
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set the status to pending"), "html", null, true);
                    yield "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" role=\"button\">
                           <i class=\"ti ti-player-pause-filled me-2\"></i>
                           <label class=\"form-check form-switch mt-2\">
                              <input type=\"hidden\"   name=\"pending\" value=\"0\" />
                              <input type=\"checkbox\" name=\"pending\" value=\"1\" class=\"form-check-input\"
                                    id=\"enable-pending-reasons-";
                    // line 222
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\"
                                    role=\"button\"
                                    ";
                    // line 224
                    yield ((((((($_v21 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 224)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["status"] ?? null) : null) == Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING")) || ($context["is_default_pending"] ?? null)) &&  !($context["add_reopen"] ?? null))) ? ("checked") : (""));
                    yield "
                                    data-bs-toggle=\"collapse\" data-bs-target=\"#pending-reasons-setup-";
                    // line 225
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\" />
                           </label>
                        </span>

                        <div
                           class=\"collapse ps-2 py-1 flex-fill ";
                    // line 230
                    yield (((($tmp = ($context["show_pending_reasons_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
                    yield "\"
                           aria-expanded=\"";
                    // line 231
                    yield (((($tmp = ($context["show_pending_reasons_actions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                    yield "\"
                           id=\"pending-reasons-setup-";
                    // line 232
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\"
                        >
                           ";
                    // line 234
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/pending_reasons.html.twig");
                    yield "
                        </div>
                     </span>
                  ";
                }
                // line 238
                yield "               ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 239
            yield "
               ";
            // line 240
            if (((($_v22 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 240)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["id"] ?? null) : null) <= 0)) {
                // line 241
                yield "                  ";
                // line 242
                yield "                  <div class=\"input-group flex-nowrap\">
                     <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                        <i class=\"ti ti-plus\"></i>
                        <span>";
                // line 245
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                yield "</span>
                     </button>
                    ";
                // line 247
                yield ($context["pending_reasons"] ?? null);
                yield "

                  </div>
               ";
            } else {
                // line 251
                yield "                  <input type=\"hidden\" name=\"id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v23 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 251)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["id"] ?? null) : null), "html", null, true);
                yield "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"ti ti-device-floppy\"></i>
                     <span>";
                // line 254
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                yield "</span>
                  </button>

                  ";
                // line 257
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [(($_v24 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 257)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["id"] ?? null) : null), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 257)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 258
                    yield "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 259
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "js"), "html", null, true);
                    yield "');\">
                        <i class=\"ti ti-trash\"></i>
                        <span>";
                    // line 261
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                    yield "</span>
                     </button>
                  ";
                }
                // line 264
                yield "                  ";
                yield ($context["pending_reasons"] ?? null);
                yield "
               ";
            }
            // line 266
            yield "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
         </form>
      </div>

      <script type=\"text/javascript\">
         function itilfollowuptemplate_update";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "(value) {
            \$.ajax({
               url: `\${CFG_GLPI.root_doc}/ajax/itilfollowup.php`,
               type: 'POST',
               data: {
                  itilfollowuptemplates_id: value,
                  items_id: '";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v25 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 279)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["id"] ?? null) : null), "js"), "html", null, true);
            yield "',
                  itemtype: '";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 280), "js"), "html", null, true);
            yield "'
               }
            }).done(function (data) {
               var requesttypes_id = isNaN(parseInt(data.requesttypes_id))
                  ? 0
                  : parseInt(data.requesttypes_id);

               // set textarea content ONLY if template defines content
               // If template has no content defined, preserve user's existing content
               if (data.content && data.content.trim() !== '') {
                  setRichTextEditorContent(\"";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["content_field_id"] ?? null), "js"), "html", null, true);
            yield "\", data.content);
               }
               // set category
               //need to create new DOM option, because SELECT is remotely-sourced (AJAX)
               //see : https://select2.org/programmatic-control/add-select-clear-items#preselecting-options-in-an-remotely-sourced-ajax-select2
               var newOption = new Option(data.requesttypes_name, requesttypes_id, true, true);
               \$(\"#dropdown_requesttypes_id";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").append(newOption).trigger('change');

               if (data.is_private !== undefined) {
                   // set is_private
                   \$(\"#is_private_";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\")
                       .prop(\"checked\", data.is_private == \"0\"
                         ? false
                         : true);
               }

               // set predefined pending reason ONLY if template defines one
               // If template has no pending reason defined, preserve user's choices
               if (data.pendingreasons_id > 0) {
                  \$(\"#enable-pending-reasons-";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\")
                     .prop(\"checked\", true);
                  \$(\"#pending-reasons-setup-";
            // line 311
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\")
                     .collapse('show');

                  //need to create new DOM option, because SELECT is remotely-sourced (AJAX)
                  //see : https://select2.org/programmatic-control/add-select-clear-items#preselecting-options-in-an-remotely-sourced-ajax-select2
                  var newOption = new Option(data.pendingreasons_name, data.pendingreasons_id, true, true);
                  \$(\"#dropdown_pendingreasons_id";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\")
                     .append(newOption)
                     .trigger('change');
               }
               // If template has NO pending (data.pendingreasons_id is 0 or undefined),
               // DO NOTHING to preserve user's pending choices
            });
         }
      </script>
   ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/form_followup.html.twig";
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
        return array (  547 => 317,  538 => 311,  533 => 309,  521 => 300,  514 => 296,  505 => 290,  492 => 280,  488 => 279,  479 => 273,  471 => 268,  467 => 266,  461 => 264,  455 => 261,  450 => 259,  447 => 258,  445 => 257,  439 => 254,  432 => 251,  425 => 247,  420 => 245,  415 => 242,  413 => 241,  411 => 240,  408 => 239,  404 => 238,  397 => 234,  392 => 232,  388 => 231,  384 => 230,  376 => 225,  372 => 224,  367 => 222,  358 => 216,  353 => 214,  349 => 213,  346 => 212,  343 => 211,  340 => 210,  338 => 209,  335 => 208,  331 => 206,  327 => 204,  322 => 201,  318 => 199,  316 => 197,  315 => 193,  313 => 190,  305 => 187,  302 => 186,  300 => 185,  296 => 183,  294 => 178,  293 => 174,  292 => 173,  290 => 171,  283 => 169,  281 => 168,  277 => 166,  275 => 164,  274 => 156,  273 => 155,  271 => 152,  264 => 150,  262 => 149,  258 => 147,  256 => 145,  255 => 144,  254 => 143,  253 => 139,  252 => 138,  250 => 135,  244 => 133,  239 => 132,  237 => 131,  232 => 129,  227 => 126,  225 => 125,  221 => 123,  219 => 121,  218 => 120,  217 => 119,  216 => 118,  215 => 113,  214 => 110,  213 => 108,  208 => 107,  206 => 106,  202 => 104,  198 => 102,  195 => 101,  193 => 100,  188 => 98,  184 => 97,  180 => 96,  176 => 95,  172 => 93,  165 => 89,  162 => 88,  155 => 85,  148 => 82,  145 => 81,  143 => 80,  139 => 78,  137 => 77,  134 => 76,  127 => 73,  120 => 70,  117 => 69,  115 => 68,  111 => 66,  109 => 65,  106 => 64,  100 => 61,  94 => 59,  92 => 58,  86 => 54,  84 => 51,  80 => 49,  77 => 48,  70 => 47,  65 => 33,  63 => 45,  61 => 43,  59 => 42,  57 => 41,  55 => 40,  53 => 39,  51 => 38,  49 => 36,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/form_followup.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/form_followup.html.twig");
    }
}
