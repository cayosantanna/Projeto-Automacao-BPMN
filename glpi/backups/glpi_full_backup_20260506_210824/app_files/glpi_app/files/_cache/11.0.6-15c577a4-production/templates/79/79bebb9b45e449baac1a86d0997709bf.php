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

/* components/itilobject/timeline/form_validation.html.twig */
class __TwigTemplate_61da06713c8d7c84549cc9718a796530 extends Template
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
        $context["rand"] = Html::sanitizeDomId(((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))));
        // line 37
        $context["params"] = ((array_key_exists("params", $context)) ? (Twig\Extension\CoreExtension::default(($context["params"] ?? null), [])) : ([]));
        // line 33
        $this->parent = $this->load("components/itilobject/timeline/form_timeline_item.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_timeline_card(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 41
            yield "      ";
            // line 42
            yield "      <div class=\"read-only-content w-100\">
         ";
            // line 43
            yield (($_v0 = ($context["entry_i"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["content"] ?? null) : null);
            yield "

         ";
            // line 45
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "comment_submission", [], "array", true, true, false, 45) &&  !(null === (($_v1 = ($context["entry_i"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["comment_submission"] ?? null) : null)))) ? ((($_v2 = ($context["entry_i"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["comment_submission"] ?? null) : null)) : ("")))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 46
                yield "            <div class='alert alert-info mt-2'>
                <div class='d-flex'>
                    <div><i class='ti ti-quote me-2'></i></div>
                    <div class=\"rich_text_container\">
                        ";
                // line 50
                yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($_v3 = ($context["entry_i"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["comment_submission"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
                // line 53
                yield "
                    </div>
                </div>
            </div>
         ";
            }
            // line 58
            yield "         ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "comment_validation", [], "array", true, true, false, 58) && Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v4 = ($context["entry_i"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["comment_validation"] ?? null) : null)))) {
                // line 59
                yield "            <div class='alert alert-info mt-2'>
                <div class='d-flex'>
                    <div><i class='ti ti-quote me-2'></i></div>
                    <div class=\"rich_text_container\">
                        ";
                // line 63
                yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($_v5 = ($context["entry_i"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["comment_validation"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
                // line 66
                yield "
                    </div>
                </div>
            </div>
         ";
            }
            // line 71
            yield "
         ";
            // line 72
            if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "can_answer", [], "array", true, true, false, 72) &&  !(null === (($_v6 = ($context["entry_i"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["can_answer"] ?? null) : null)))) ? ((($_v7 = ($context["entry_i"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["can_answer"] ?? null) : null)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 73
                yield "            <hr class=\"my-2\" />
            <form id=\"validationanswers_id_";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = ($context["entry_i"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["id"] ?? null) : null), "html", null, true);
                yield "\"
                  action=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath((($_v9 = ($context["entry"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["type"] ?? null) : null)), "html", null, true);
                yield "\" method=\"post\" data-submit-once>

               <input type=\"hidden\" name=\"id\" value=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = ($context["entry_i"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["id"] ?? null) : null), "html", null, true);
                yield "\" />
               <input type=\"hidden\" name=\"users_id_validate\" value=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v11 = ($context["entry_i"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["users_id_validate"] ?? null) : null), "html", null, true);
                yield "\" />
               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\" />
               ";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
                yield "

               <div class=\"mb-3 comment-part\">
                  ";
                // line 83
                yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 83, $this->getSourceContext())->macro_textareaField(...["comment_validation", "", _n("Comment", "Comments", 1), ["full_width" => true, "enable_richtext" => true, "is_horizontal" => false, "enable_fileupload" => false, "mention_options" =>                 // line 92
($context["mention_options"] ?? null), "entities_id" => (($_v12 = CoreExtension::getAttribute($this->env, $this->source,                 // line 93
($context["item"] ?? null), "fields", [], "any", false, false, false, 93)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["entities_id"] ?? null) : null), "rand" =>                 // line 94
($context["rand"] ?? null)]]);
                // line 96
                yield "

                  ";
                // line 98
                yield $macros["fields"]->getTemplateForMacro("macro_fileField", $context, 98, $this->getSourceContext())->macro_fileField(...["filename", null, "", ["multiple" => true, "full_width" => true, "no_label" => true]]);
                // line 107
                yield "
               </div>

               <div class=\"validation-footer\">
                  <button type=\"submit\" class=\"btn btn-outline-green\" name=\"approval_action\" value=\"approve\">
                     <i class=\"ti ti-thumb-up\"></i>
                     <span class=\"validation-label\">";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Approve"), "html", null, true);
                yield "</span>
                  </button>
                  <button type=\"submit\" class=\"btn btn-outline-red\" name=\"approval_action\" value=\"refuse\">
                     <i class=\"ti ti-thumb-down\"></i>
                     <span class=\"validation-label\">";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Refuse"), "html", null, true);
                yield "</span>
                  </button>
               </div>
            </form>
         ";
            }
            // line 122
            yield "      </div>
   ";
        } elseif ((        // line 123
($context["form_mode"] ?? null) == "answer")) {
            // line 124
            yield "      ";
            // line 125
            yield "      <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
            action=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 126), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>

         <input type=\"hidden\" name=\"id\" value=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 128)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["id"] ?? null) : null), "html", null, true);
            yield "\" />
         <input type=\"hidden\" name=\"users_id_validate\" value=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 129)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["users_id_validate"] ?? null) : null), "html", null, true);
            yield "\" />
         <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />

         ";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "

         <div class=\"mb-3 comment-part\">
            ";
            // line 135
            yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 135, $this->getSourceContext())->macro_textareaField(...["comment_validation", (($_v15 = CoreExtension::getAttribute($this->env, $this->source,             // line 137
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 137)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["comment_validation"] ?? null) : null), _n("Comment", "Comments", 1), ["full_width" => true, "enable_richtext" => true, "is_horizontal" => false, "enable_fileupload" => false, "mention_options" =>             // line 144
($context["mention_options"] ?? null), "entities_id" => (($_v16 = CoreExtension::getAttribute($this->env, $this->source,             // line 145
($context["item"] ?? null), "fields", [], "any", false, false, false, 145)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["entities_id"] ?? null) : null), "rand" =>             // line 146
($context["rand"] ?? null)]]);
            // line 148
            yield "

            ";
            // line 150
            yield $macros["fields"]->getTemplateForMacro("macro_fileField", $context, 150, $this->getSourceContext())->macro_fileField(...["filename", null, "", ["multiple" => true, "full_width" => true, "no_label" => true]]);
            // line 159
            yield "
         </div>

         <div class=\"validation-footer\">
            <button type=\"submit\" class=\"btn btn-outline-green\" name=\"approval_action\" value=\"approve\">
               <i class=\"ti ti-thumb-up\"></i>
               <span class=\"validation-label\">";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Approve"), "html", null, true);
            yield "</span>
            </button>
            <button type=\"submit\" class=\"btn btn-outline-red\" name=\"approval_action\" value=\"refuse\">
               <i class=\"ti ti-thumb-down\"></i>
               <span class=\"validation-label\">";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Refuse"), "html", null, true);
            yield "</span>
            </button>
         </div>
      </form>
   ";
        } else {
            // line 174
            yield "        ";
            // line 175
            yield "        <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
              action=\"";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 176), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 177), "html", null, true);
            yield "\" />
            <input type=\"hidden\" name=\"";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 178), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 178)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["id"] ?? null) : null), "html", null, true);
            yield "\" />

            <div class=\"card-body\">
                ";
            // line 181
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "isNewItem", [], "method", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 182
                yield "                    ";
                // line 183
                yield "                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 183, $this->getSourceContext())->macro_dropdownField(...["ITILValidationTemplate", "itilvalidationtemplates_id", "", _n("Template", "Templates", 1), ["full_width" => true, "on_change" => (("itilvalidationtemplate_update" .                 // line 190
($context["rand"] ?? null)) . "(this.value);"), "entity" => (($_v18 = CoreExtension::getAttribute($this->env, $this->source,                 // line 191
($context["item"] ?? null), "fields", [], "any", false, false, false, 191)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["entities_id"] ?? null) : null), "rand" =>                 // line 192
($context["rand"] ?? null)]]);
                // line 194
                yield "

                    ";
                // line 197
                yield "                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 197, $this->getSourceContext())->macro_dropdownField(...["ValidationStep", "_validationsteps_id", ((                // line 200
array_key_exists("_validationsteps_id", $context)) ? (Twig\Extension\CoreExtension::default(($context["_validationsteps_id"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(["ValidationStep", "getDefault"]), "getID", [], "method", false, false, false, 200))) : (CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(["ValidationStep", "getDefault"]), "getID", [], "method", false, false, false, 200))), _n("Approval step", "Approval step", 1), ["full_width" => true, "rand" =>                 // line 204
($context["rand"] ?? null), "required" => true, "display_emptychoice" => false]]);
                // line 208
                yield "
                ";
            } else {
                // line 210
                yield "                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_readOnlyField", $context, 210, $this->getSourceContext())->macro_readOnlyField(...["", $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("ValidationStep", (($_v19 = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem(CoreExtension::getAttribute($this->env, $this->source,                 // line 214
($context["item"] ?? null), "getValidationStepClassName", [], "method", false, false, false, 214), (($_v20 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 214)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["itils_validationsteps_id"] ?? null) : null)), "fields", [], "any", false, false, false, 214)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["validationsteps_id"] ?? null) : null)), _n("Approval step", "Approval step", 1), ["full_width" => true]]);
                // line 220
                yield "
                ";
            }
            // line 222
            yield "
                ";
            // line 224
            yield "                ";
            yield $macros["fields"]->getTemplateForMacro("macro_readOnlyField", $context, 224, $this->getSourceContext())->macro_readOnlyField(...["approval_requester", CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentUser(), "getFriendlyName", [], "method", false, false, false, 226), _n("Requester", "Requesters", 1), ["full_width" => true, "rand" =>             // line 230
($context["rand"] ?? null)]]);
            // line 232
            yield "

                ";
            // line 235
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "isNewItem", [], "method", false, false, false, 235)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 236
                yield "                    ";
                $context["validation_right"] = "validate";
                // line 237
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 237) == "Ticket")) {
                    // line 238
                    yield "                        ";
                    if (((($_v21 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 238)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Ticket::INCIDENT_TYPE"))) {
                        // line 239
                        yield "                            ";
                        $context["validation_right"] = "validate_incident";
                        // line 240
                        yield "                        ";
                    } elseif (((($_v22 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 240)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Ticket::DEMAND_TYPE"))) {
                        // line 241
                        yield "                            ";
                        $context["validation_right"] = "validate_request";
                        // line 242
                        yield "                        ";
                    }
                    // line 243
                    yield "                    ";
                }
                // line 244
                yield "                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 244, $this->getSourceContext())->macro_field(...["_add_validation", CoreExtension::getAttribute($this->env, $this->source,                 // line 246
($context["subitem"] ?? null), "dropdownValidator", [["parents_id" => (($_v23 = CoreExtension::getAttribute($this->env, $this->source,                 // line 247
($context["item"] ?? null), "fields", [], "any", false, false, false, 247)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["id"] ?? null) : null), "entity" => (($_v24 = CoreExtension::getAttribute($this->env, $this->source,                 // line 248
($context["item"] ?? null), "fields", [], "any", false, false, false, 248)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["entities_id"] ?? null) : null), "itemtype_target" => (($_v25 = CoreExtension::getAttribute($this->env, $this->source,                 // line 249
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 249)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["itemtype_target"] ?? null) : null), "items_id_target" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 250
($context["subitem"] ?? null), "fields", [], "any", false, true, false, 250), "items_id_target", [], "array", true, true, false, 250) &&  !(null === (($_v26 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 250)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["items_id_target"] ?? null) : null)))) ? ((($_v27 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 250)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["items_id_target"] ?? null) : null)) : ("")), "right" =>                 // line 251
($context["validation_right"] ?? null), "display" => false, "rand" =>                 // line 253
($context["rand"] ?? null)]], "method", false, false, false, 246), __("Approver"), ["full_width" => true]]);
                // line 259
                yield "
                ";
            } else {
                // line 261
                yield "                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_readOnlyField", $context, 261, $this->getSourceContext())->macro_readOnlyField(...["", $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName((($_v28 = CoreExtension::getAttribute($this->env, $this->source,                 // line 263
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 263)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["itemtype_target"] ?? null) : null), (($_v29 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 263)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["items_id_target"] ?? null) : null)), __("Approver"), ["full_width" => true]]);
                // line 268
                yield "
                ";
            }
            // line 270
            yield "
                ";
            // line 272
            yield "                ";
            yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 272, $this->getSourceContext())->macro_textareaField(...["comment_submission", (($_v30 = CoreExtension::getAttribute($this->env, $this->source,             // line 274
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 274)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["comment_submission"] ?? null) : null), _n("Comment", "Comments", 1), ["full_width" => true, "enable_richtext" => true, "enable_fileupload" => false, "mention_options" =>             // line 280
($context["mention_options"] ?? null), "entities_id" => (($_v31 = CoreExtension::getAttribute($this->env, $this->source,             // line 281
($context["item"] ?? null), "fields", [], "any", false, false, false, 281)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["entities_id"] ?? null) : null), "rand" =>             // line 282
($context["rand"] ?? null), "disabled" =>  !(CoreExtension::getAttribute($this->env, $this->source,             // line 283
($context["subitem"] ?? null), "isNewItem", [], "method", false, false, false, 283) || ((($_v32 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 283)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["status"] ?? null) : null) == Twig\Extension\CoreExtension::constant("CommonITILValidation::WAITING")))]]);
            // line 285
            yield "

                ";
            // line 287
            yield $macros["fields"]->getTemplateForMacro("macro_fileField", $context, 287, $this->getSourceContext())->macro_fileField(...["filename", null, "", ["multiple" => true, "full_width" => true]]);
            // line 295
            yield "
            </div>

            ";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "

            <div class=\"d-flex justify-content-center card-footer\">
                ";
            // line 301
            if (((($_v33 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 301)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["id"] ?? null) : null) <= 0)) {
                // line 302
                yield "                    <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\">
                        <i class=\"ti ti-plus\"></i>
                        <span>";
                // line 304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                yield "</span>
                    </button>
                ";
            } else {
                // line 307
                yield "                    <input type=\"hidden\" name=\"id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v34 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 307)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["id"] ?? null) : null), "html", null, true);
                yield "\" />
                    <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                        <i class=\"ti ti-device-floppy\"></i>
                        <span>";
                // line 310
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                yield "</span>
                    </button>

                    ";
                // line 313
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [(($_v35 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 313)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["id"] ?? null) : null), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 313)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 314
                    yield "                        <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                                onclick=\"return confirm('";
                    // line 315
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "js"), "html", null, true);
                    yield "');\">
                            <i class=\"ti ti-trash\"></i>
                            <span>";
                    // line 317
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                    yield "</span>
                        </button>
                    ";
                }
                // line 320
                yield "                ";
            }
            // line 321
            yield "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
        </form>

      ";
            // line 326
            if ((($tmp = (((array_key_exists("scroll", $context) &&  !(null === $context["scroll"]))) ? ($context["scroll"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 327
                yield "         <script type=\"text/javascript\">
            window.scrollTo(0,document.body.scrollHeight);
         </script>
      ";
            }
            // line 331
            yield "
      <script type=\"text/javascript\">
         // --- fill form with template data
         function itilvalidationtemplate_update";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "(value) {
            \$.ajax({
               url: `\${CFG_GLPI.root_doc}/ajax/itilvalidation.php`,
               type: 'POST',
               data: {
                  validationtemplates_id: value,
                  items_id: '";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v36 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 340)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["id"] ?? null) : null), "js"), "html", null, true);
            yield "',
                  itemtype: '";
            // line 341
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 341), "js"), "html", null, true);
            yield "'
               }
            }).done(function (data) {
               if (data.content !== undefined) {
                  // set textarea content
                  setRichTextEditorContent(\"comment_submission_";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\", data.content);
               }

               // Validator field
               if (data.validatortype !== undefined) {
                  // set validator type
                  \$(\"#dropdown__validatortype_";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").trigger('setValue', data.validatortype);

                  if (data.groups_id !== undefined && data.groups_id !== null) {
                     // Approver is a group or multiple users of a group
                     waitForElement(\"#dropdown_groups_id";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").then((elm) => {
                        // set groups_id
                        \$(\"#dropdown_groups_id";
            // line 358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").ready(function() {
                           \$(\"#dropdown_groups_id";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").trigger('setValue', data.groups_id);
                        });

                        waitForElement(\"#dropdown_items_id_target";
            // line 362
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").then((elm) => {
                           // set items_id_target
                           \$(\"#dropdown_items_id_target";
            // line 364
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").ready(function() {
                              \$(\"#dropdown_items_id_target";
            // line 365
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").trigger('setValue', data.items_id_target);
                           });
                        });
                     });
                  } else if (data.items_id_target !== undefined) {
                     // Approver is a single user
                     new Promise((resolve) => {
                        // if dropdown_items_id_target exists, wait for it to be removed
                        // is required because the dropdown is removed and recreated when the setValue is triggered
                        if (\$(\"#dropdown_items_id_target";
            // line 374
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").length > 0) {
                           \$(\"#dropdown_items_id_target";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").on('remove', function() {
                              resolve();
                           });
                        } else {
                           resolve();
                        }
                     }).then(() => {
                        waitForElement(\"#dropdown_items_id_target";
            // line 382
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").then((elm) => {
                           // set items_id_target
                           \$(\"#dropdown_items_id_target";
            // line 384
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").ready(function() {
                              \$(\"#dropdown_items_id_target";
            // line 385
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").trigger('setValue', data.items_id_target);
                           });
                        });
                     });
                  }
               }

               // Validation step field
               if( data.validationsteps_id !== undefined && data.validationsteps_id !== 0) {
                  \$(\"#dropdown__validationsteps_id";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").trigger('setValue', data.validationsteps_id);
               }

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
        return "components/itilobject/timeline/form_validation.html.twig";
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
        return array (  566 => 394,  554 => 385,  550 => 384,  545 => 382,  535 => 375,  531 => 374,  519 => 365,  515 => 364,  510 => 362,  504 => 359,  500 => 358,  495 => 356,  488 => 352,  479 => 346,  471 => 341,  467 => 340,  458 => 334,  453 => 331,  447 => 327,  445 => 326,  439 => 323,  435 => 321,  432 => 320,  426 => 317,  421 => 315,  418 => 314,  416 => 313,  410 => 310,  403 => 307,  397 => 304,  393 => 302,  391 => 301,  385 => 298,  380 => 295,  378 => 287,  374 => 285,  372 => 283,  371 => 282,  370 => 281,  369 => 280,  368 => 274,  366 => 272,  363 => 270,  359 => 268,  357 => 263,  355 => 261,  351 => 259,  349 => 253,  348 => 251,  347 => 250,  346 => 249,  345 => 248,  344 => 247,  343 => 246,  341 => 244,  338 => 243,  335 => 242,  332 => 241,  329 => 240,  326 => 239,  323 => 238,  320 => 237,  317 => 236,  314 => 235,  310 => 232,  308 => 230,  306 => 224,  303 => 222,  299 => 220,  297 => 214,  295 => 210,  291 => 208,  289 => 204,  288 => 200,  286 => 197,  282 => 194,  280 => 192,  279 => 191,  278 => 190,  276 => 183,  274 => 182,  272 => 181,  264 => 178,  260 => 177,  256 => 176,  253 => 175,  251 => 174,  243 => 169,  236 => 165,  228 => 159,  226 => 150,  222 => 148,  220 => 146,  219 => 145,  218 => 144,  217 => 137,  216 => 135,  210 => 132,  205 => 130,  201 => 129,  197 => 128,  192 => 126,  189 => 125,  187 => 124,  185 => 123,  182 => 122,  174 => 117,  167 => 113,  159 => 107,  157 => 98,  153 => 96,  151 => 94,  150 => 93,  149 => 92,  148 => 83,  142 => 80,  138 => 79,  134 => 78,  130 => 77,  125 => 75,  121 => 74,  118 => 73,  116 => 72,  113 => 71,  106 => 66,  104 => 63,  98 => 59,  95 => 58,  88 => 53,  86 => 50,  80 => 46,  78 => 45,  73 => 43,  70 => 42,  68 => 41,  65 => 40,  58 => 39,  53 => 33,  51 => 37,  49 => 36,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/form_validation.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/form_validation.html.twig");
    }
}
