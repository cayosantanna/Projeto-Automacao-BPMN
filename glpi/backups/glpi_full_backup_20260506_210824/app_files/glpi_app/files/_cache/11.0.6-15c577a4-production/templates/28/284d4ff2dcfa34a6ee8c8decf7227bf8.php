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

/* components/itilobject/timeline/form_solution.html.twig */
class __TwigTemplate_cb5cc870eb5a8b70b3ca40121c9f71c4 extends Template
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
        $context["noform"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "noform", [], "array", true, true, false, 42) || ((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "noform", [], "array", true, true, false, 42) &&  !(null === (($_v2 = ($context["params"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["noform"] ?? null) : null)))) ? ((($_v3 = ($context["params"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["noform"] ?? null) : null)) : (false)) == true));
        // line 43
        $context["disabled"] = (($context["candedit"] ?? null) == false);
        // line 44
        $context["rand"] = Html::sanitizeDomId(((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))));
        // line 46
        $context["content_field_id"] = ("solution_content_" . ($context["rand"] ?? null));
        // line 33
        $this->parent = $this->load("components/itilobject/timeline/form_timeline_item.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_timeline_card(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        yield "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 50
            yield "      <div class=\"read-only-content\">
         <div class= \"rich_text_container\">
            ";
            // line 52
            yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($_v4 = ($context["entry_i"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 55
            yield "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 59
            if ((($tmp = (($_v5 = ($context["entry_i"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["solutiontypes_id"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 60
                yield "               <span class=\"badge bg-blue-lt\">
                  <i class=\"ti ti-tag me-1\"></i>
                  ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("SolutionType", (($_v6 = ($context["entry_i"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["solutiontypes_id"] ?? null) : null)), "html", null, true);
                yield "
               </span>
            ";
            }
            // line 65
            yield "
            ";
            // line 66
            if ((((($_v7 = ($context["entry_i"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["status"] ?? null) : null) != Twig\Extension\CoreExtension::constant("CommonITILValidation::WAITING")) && ((($_v8 = ($context["entry_i"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["status"] ?? null) : null) != Twig\Extension\CoreExtension::constant("CommonITILValidation::NONE")))) {
                // line 67
                yield "               <span class=\"badge bg-blue-lt\">
                  ";
                // line 68
                $context["action"] = ((((($_v9 = ($context["entry_i"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["status"] ?? null) : null) == Twig\Extension\CoreExtension::constant("CommonITILValidation::ACCEPTED"))) ? (__("Accepted")) : (_x("validation", "Refused")));
                // line 69
                yield "                  ";
                yield Twig\Extension\CoreExtension::sprintf(__("%1\$s on %2\$s by %3\$s"),                 // line 70
($context["action"] ?? null), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v10 =                 // line 71
($context["entry_i"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["date_approval"] ?? null) : null)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", (($_v11 =                 // line 72
($context["entry_i"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["users_id_approval"] ?? null) : null), ["enable_anonymization" => true]));
                // line 73
                yield "
               </span>
            ";
            }
            // line 76
            yield "         </div>
      </div>
   ";
        } else {
            // line 79
            yield "      <div class=\"itilsolution\">
         ";
            // line 80
            $context["validation_class"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getValidationClassInstance", [], "method", false, false, false, 80);
            // line 81
            yield "         ";
            if ((($tmp =  !(null === ($context["validation_class"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 82
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["validation_class"] ?? null), "alertValidation", [($context["item"] ?? null), "solution"], "method", false, false, false, 82), "html", null, true);
                yield "
         ";
            }
            // line 84
            yield "
         ";
            // line 85
            if ((($tmp =  !($context["noform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 87), "html", null, true);
                yield "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
         ";
            }
            // line 89
            yield "
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 90), "html", null, true);
            yield "\" />
            <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v12 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 91)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["id"] ?? null) : null), "html", null, true);
            yield "\" />
            <input type=\"hidden\" name=\"_no_message_link\" value=\"1\" />
            ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "

            ";
            // line 95
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 95) == "Ticket") && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "countOpenChildrenOfSameType", [], "method", false, false, false, 95) > 0))) {
                // line 96
                yield "               <div class=\"alert alert-important alert-warning\">
                  <i class=\"ti ti-info-circle fs-2x me-2\"></i>
                  <span>";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Warning: non closed children tickets depends on current ticket. Are you sure you want to close it?"), "html", null, true);
                yield "</span>
               </div>
            ";
            }
            // line 101
            yield "
            <div class=\"row mx-n3 mx-xxl-auto\">
               <div class=\"col-12 col-xl-7 col-xxl-8\">
                  ";
            // line 104
            $context["content"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 104), "content", [], "array", true, true, false, 104) &&  !(null === (($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 104)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["content"] ?? null) : null)))) ? ((($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 104)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["content"] ?? null) : null)) : (""));
            // line 105
            yield "
                  ";
            // line 106
            yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 106, $this->getSourceContext())->macro_textareaField(...["content",             // line 108
($context["content"] ?? null), "", ["id" =>             // line 111
($context["content_field_id"] ?? null), "full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "mention_options" => ((            // line 116
array_key_exists("mention_options", $context)) ? (Twig\Extension\CoreExtension::default(($context["mention_options"] ?? null), [])) : ([])), "entities_id" => (($_v15 = CoreExtension::getAttribute($this->env, $this->source,             // line 117
($context["item"] ?? null), "fields", [], "any", false, false, false, 117)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["entities_id"] ?? null) : null), "rand" =>             // line 118
($context["rand"] ?? null), "disabled" =>             // line 119
($context["disabled"] ?? null), "aria_label" => _n("Solution", "Solutions", 1)]]);
            // line 122
            yield "
               </div>
               <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-0 pe-xxl-auto\">
                  <div class=\"row\">
                     ";
            // line 126
            if ((($tmp = ($context["candedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 127
                yield "                        ";
                if ((($context["can_read_kb"] ?? null) &&  !($context["nokb"] ?? null))) {
                    // line 128
                    yield "                           ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/knowledge_item.html.twig");
                    yield "
                        ";
                }
                // line 130
                yield "
                        ";
                // line 131
                $context["sol_template_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 132
                    yield "                           <i class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("SolutionTemplate"), "html", null, true);
                    yield " me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                    // line 133
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Solution template", "Solution templates", Session::getPluralNumber()), "html", null, true);
                    yield "\"></i>
                        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 135
                yield "                        ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 135, $this->getSourceContext())->macro_dropdownField(...["SolutionTemplate", "solutiontemplates_id", 0,                 // line 139
($context["sol_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("solutiontemplate_update" .                 // line 143
($context["rand"] ?? null)) . "(this.value)"), "rand" =>                 // line 144
($context["rand"] ?? null), "entity" => (($_v16 = CoreExtension::getAttribute($this->env, $this->source,                 // line 145
($context["item"] ?? null), "fields", [], "any", false, false, false, 145)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["entities_id"] ?? null) : null), "disabled" =>                 // line 146
($context["disabled"] ?? null)]]);
                // line 148
                yield "

                     ";
            }
            // line 151
            yield "
                     ";
            // line 152
            $context["sol_type_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 153
                yield "                        <i class=\"ti ti-tag me-1\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("SolutionType"), "html", null, true);
                yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 156
            yield "                     ";
            $context["sol_search"] = [];
            // line 157
            yield "                     ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 157) == "Ticket")) {
                // line 158
                yield "                        ";
                if (((($_v17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 158)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Ticket::INCIDENT_TYPE"))) {
                    // line 159
                    yield "                           ";
                    $context["sol_search"] = ["is_incident" => 1];
                    // line 160
                    yield "                        ";
                } elseif (((($_v18 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 160)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Ticket::DEMAND_TYPE"))) {
                    // line 161
                    yield "                           ";
                    $context["sol_search"] = ["is_request" => 1];
                    // line 162
                    yield "                        ";
                }
                // line 163
                yield "                     ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 163) == "Problem")) {
                // line 164
                yield "                        ";
                $context["sol_search"] = ["is_problem" => 1];
                // line 165
                yield "                     ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 165) == "Change")) {
                // line 166
                yield "                        ";
                $context["sol_search"] = ["is_change" => 1];
                // line 167
                yield "                     ";
            }
            // line 168
            yield "                     ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 168, $this->getSourceContext())->macro_dropdownField(...["SolutionType", "solutiontypes_id", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 171
($context["subitem"] ?? null), "fields", [], "any", false, true, false, 171), "solutiontypes_id", [], "array", true, true, false, 171) &&  !(null === (($_v19 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 171)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["solutiontypes_id"] ?? null) : null)))) ? ((($_v20 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 171)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["solutiontypes_id"] ?? null) : null)) : (0)),             // line 172
($context["sol_type_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 176
($context["rand"] ?? null), "entity" => (($_v21 = CoreExtension::getAttribute($this->env, $this->source,             // line 177
($context["item"] ?? null), "fields", [], "any", false, false, false, 177)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["entities_id"] ?? null) : null), "condition" =>             // line 178
($context["sol_search"] ?? null), "disabled" =>             // line 179
($context["disabled"] ?? null)]]);
            // line 181
            yield "

                    ";
            // line 183
            $context["link_kb_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 184
                yield "                        <i class=\"ti ti-link me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                           title=\"";
                // line 185
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(__("Link to knowledge base entry #%id"), ["%id" => ""]), "html", null, true);
                yield "\"></i>
                    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 187
            yield "                    ";
            yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 187, $this->getSourceContext())->macro_sliderField(...["kb_linked_id", 1,             // line 190
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 194
($context["rand"] ?? null), "yes_value" => 0, "add_field_class" => "d-none", "disabled" => true]]);
            // line 199
            yield "

                     ";
            // line 201
            if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                // line 202
                yield "                        ";
                $context["sol_to_kb_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 203
                    yield "                           <i class=\"ti ti-device-floppy me-1\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save and add to the knowledge base"), "html", null, true);
                    yield "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 206
                yield "                        ";
                yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 206, $this->getSourceContext())->macro_sliderField(...["_sol_to_kb", 0,                 // line 209
($context["sol_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 213
($context["rand"] ?? null)]]);
                // line 215
                yield "
                     ";
            }
            // line 217
            yield "                  </div>
               </div>
            </div>

         ";
            // line 221
            if ((($tmp =  !($context["noform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 222
                yield "               ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
                yield "
               <div class=\"d-flex card-footer mx-n3 mb-n3\">
                  ";
                // line 224
                if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 224), "id", [], "array", true, true, false, 224) &&  !(null === (($_v22 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 224)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["id"] ?? null) : null)))) ? ((($_v23 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 224)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["id"] ?? null) : null)) : (0)) <= 0)) {
                    // line 225
                    yield "                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\">
                        <i class=\"ti ti-plus\"></i>
                        <span>";
                    // line 227
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                    yield "</span>
                     </button>
                  ";
                } else {
                    // line 230
                    yield "                     <input type=\"hidden\" name=\"id\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v24 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 230)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["id"] ?? null) : null), "html", null, true);
                    yield "\" />
                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                        <i class=\"ti ti-device-floppy\"></i>
                        <span>";
                    // line 233
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                    yield "</span>
                     </button>
                  ";
                }
                // line 236
                yield "               </div>

               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 238
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\" />
            </form>
         ";
            }
            // line 241
            yield "      </div>

      <script type=\"text/javascript\">
         function solutiontemplate_update";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "(value) {
            \$.ajax({
               url: `\${CFG_GLPI.root_doc}/ajax/solution.php`,
               type: 'POST',
               data: {
                  solutiontemplates_id: value,
                  items_id: '";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v25 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 250)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["id"] ?? null) : null), "js"), "html", null, true);
            yield "',
                  itemtype: '";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 251), "js"), "html", null, true);
            yield "'
               }
            }).done(function (data) {
               // set textarea content
               setRichTextEditorContent(\"";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["content_field_id"] ?? null), "js"), "html", null, true);
            yield "\", data.content);

               // set type
               var solutiontypes_id = isNaN(parseInt(data.solutiontypes_id))
                  ? 0
                  : parseInt(data.solutiontypes_id);

               //need to create new DOM option, because SELECT is remotely-sourced (AJAX)
               //see : https://select2.org/programmatic-control/add-select-clear-items#preselecting-options-in-an-remotely-sourced-ajax-select2
               var newOption = new Option(data.solutiontypes_name, solutiontypes_id, true, true);
               \$(\"#dropdown_solutiontypes_id";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").append(newOption).trigger('change');
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
        return "components/itilobject/timeline/form_solution.html.twig";
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
        return array (  443 => 265,  430 => 255,  423 => 251,  419 => 250,  410 => 244,  405 => 241,  399 => 238,  395 => 236,  389 => 233,  382 => 230,  376 => 227,  372 => 225,  370 => 224,  364 => 222,  362 => 221,  356 => 217,  352 => 215,  350 => 213,  349 => 209,  347 => 206,  339 => 203,  336 => 202,  334 => 201,  330 => 199,  328 => 194,  327 => 190,  325 => 187,  319 => 185,  316 => 184,  314 => 183,  310 => 181,  308 => 179,  307 => 178,  306 => 177,  305 => 176,  304 => 172,  303 => 171,  301 => 168,  298 => 167,  295 => 166,  292 => 165,  289 => 164,  286 => 163,  283 => 162,  280 => 161,  277 => 160,  274 => 159,  271 => 158,  268 => 157,  265 => 156,  257 => 153,  255 => 152,  252 => 151,  247 => 148,  245 => 146,  244 => 145,  243 => 144,  242 => 143,  241 => 139,  239 => 135,  233 => 133,  228 => 132,  226 => 131,  223 => 130,  217 => 128,  214 => 127,  212 => 126,  206 => 122,  204 => 119,  203 => 118,  202 => 117,  201 => 116,  200 => 111,  199 => 108,  198 => 106,  195 => 105,  193 => 104,  188 => 101,  182 => 98,  178 => 96,  176 => 95,  171 => 93,  166 => 91,  162 => 90,  159 => 89,  154 => 87,  151 => 86,  149 => 85,  146 => 84,  140 => 82,  137 => 81,  135 => 80,  132 => 79,  127 => 76,  122 => 73,  120 => 72,  119 => 71,  118 => 70,  116 => 69,  114 => 68,  111 => 67,  109 => 66,  106 => 65,  100 => 62,  96 => 60,  94 => 59,  88 => 55,  86 => 52,  82 => 50,  79 => 49,  72 => 48,  67 => 33,  65 => 46,  63 => 44,  61 => 43,  59 => 42,  57 => 41,  55 => 40,  53 => 39,  51 => 38,  49 => 36,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/form_solution.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/form_solution.html.twig");
    }
}
