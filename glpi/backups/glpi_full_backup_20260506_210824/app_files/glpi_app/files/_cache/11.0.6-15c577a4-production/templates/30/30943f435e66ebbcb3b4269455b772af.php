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

/* components/itilobject/timeline/form_task.html.twig */
class __TwigTemplate_1d4975d9d86bba07f536807b983e7e84 extends Template
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
        // line 35
        $context["params"] = Twig\Extension\CoreExtension::merge(["parent" => ($context["item"] ?? null)], ((array_key_exists("params", $context)) ? (Twig\Extension\CoreExtension::default(($context["params"] ?? null), [])) : ([])));
        // line 37
        $context["candedit"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 37) || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maySolve", [], "method", false, false, false, 37));
        // line 38
        $context["can_read_kb"] = (Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("READ")) || Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("KnowbaseItem::READFAQ")));
        // line 39
        $context["can_update_kb"] = Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("UPDATE"));
        // line 40
        $context["nokb"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 40) || ((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 40) &&  !(null === (($_v0 = ($context["params"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["nokb"] ?? null) : null)))) ? ((($_v1 = ($context["params"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["nokb"] ?? null) : null)) : (false)) == true));
        // line 41
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 42
        $context["formoptions"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formoptions", [], "array", true, true, false, 42) &&  !(null === (($_v2 = ($context["params"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["formoptions"] ?? null) : null)))) ? ((($_v3 = ($context["params"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["formoptions"] ?? null) : null)) : (""));
        // line 33
        $this->parent = $this->load("components/itilobject/timeline/form_timeline_item.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_timeline_card(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 46
            yield "      <div class=\"read-only-content ";
            yield ((((($_v4 = ($context["entry_i"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["state"] ?? null) : null) === constant("Planning::DONE"))) ? ("done") : (""));
            yield "\">
         <div class=\"rich_text_container text-content\" data-bs-html=\"true\" data-bs-custom-class=\"todo-list-tooltip\"
              title=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getTextFromHtml((($_v5 = ($context["entry_i"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["content"] ?? null) : null)), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            ";
            // line 49
            yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($_v6 = ($context["entry_i"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 52
            yield "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 56
            if ((($tmp = (($_v7 = ($context["entry_i"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["users_id_tech"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 57
                yield "               <span class=\"badge bg-orange-lt\">
                  ";
                // line 58
                $context["is_current_tech"] = ((($_v8 = ($context["entry_i"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["users_id_tech"] ?? null) : null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
                // line 59
                yield "                  ";
                $context["anonym_tech"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_tech"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != Twig\Extension\CoreExtension::constant("Entity::ANONYMIZE_DISABLED")));
                // line 60
                yield "                  ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" => (($_v9 =                 // line 61
($context["entry_i"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["users_id_tech"] ?? null) : null), "enable_anonymization" =>                 // line 62
($context["anonym_tech"] ?? null)], false);
                // line 63
                yield "
               </span>
            ";
            }
            // line 66
            yield "
            ";
            // line 67
            if ((($tmp = (($_v10 = ($context["entry_i"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["groups_id_tech"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "               <span class=\"badge bg-orange-lt\">
                  <i class=\"ti ti-users me-1\"></i>
                  ";
                // line 70
                yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Group", (($_v11 = ($context["entry_i"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["groups_id_tech"] ?? null) : null), ["enable_anonymization" => true]);
                yield "
               </span>
            ";
            }
            // line 73
            yield "
            ";
            // line 74
            if ((($tmp = (($_v12 = ($context["entry_i"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["taskcategories_id"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 75
                yield "               <span class=\"badge bg-orange-lt\">
                  ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("TaskCategory", (($_v13 = ($context["entry_i"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["taskcategories_id"] ?? null) : null)), "html", null, true);
                yield "
               </span>
            ";
            }
            // line 79
            yield "
            ";
            // line 80
            if ((($tmp = (($_v14 = ($context["entry_i"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["actiontime"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 81
                yield "               <span class=\"actiontime badge bg-orange-lt\">
                  <i class=\"ti ti-stopwatch me-1\"></i>
                  ";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration((($_v15 = ($context["entry_i"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["actiontime"] ?? null) : null)), "html", null, true);
                yield "
               </span>
            ";
            }
            // line 86
            yield "
            ";
            // line 87
            if ((($tmp = (($_v16 = ($context["entry_i"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["begin"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 88
                yield "               <span class=\"planification badge bg-orange-lt\">
                  <i class=\"ti ti-calendar me-1\"></i>
                  ";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v17 = ($context["entry_i"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["begin"] ?? null) : null)), "html", null, true);
                yield "
                  &rArr;
                  ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v18 = ($context["entry_i"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["end"] ?? null) : null)), "html", null, true);
                yield "
               </span>
            ";
            }
            // line 95
            yield "
            ";
            // line 96
            if ((($tmp = (($_v19 = ($context["entry_i"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["sourceitems_id"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 97
                yield "               <span class=\"badge bg-blue-lt\">
                  <i class=\"ti ti-git-merge me-1\"></i>
                  ";
                // line 99
                $context["merged_badge"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 100
                    yield "                     <span class=\"badge\">
                        ";
                    // line 101
                    yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($_v20 = ($context["entry_i"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["sourceitems_id"] ?? null) : null));
                    yield "
                     </span>
                  ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 104
                yield "                  ";
                yield Twig\Extension\CoreExtension::sprintf(__("Merged from Ticket %1\$s"), ($context["merged_badge"] ?? null));
                yield "
               </span>
            ";
            }
            // line 107
            yield "
            ";
            // line 108
            if ((($tmp = (($_v21 = ($context["entry_i"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["sourceof_items_id"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 109
                yield "               <span class=\"badge bg-blue-lt\">
                  <i class=\"ti ti-git-merge me-1\"></i>
                  ";
                // line 111
                $context["promoted_badge"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 112
                    yield "                     <span class=\"badge\">
                        ";
                    // line 113
                    yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($_v22 = ($context["entry_i"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["sourceof_items_id"] ?? null) : null));
                    yield "
                     </span>
                  ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 116
                yield "                  ";
                yield Twig\Extension\CoreExtension::sprintf(__("Promoted to Ticket %1\$s"), ($context["promoted_badge"] ?? null));
                yield "
               </span>
            ";
            }
            // line 119
            yield "
            ";
            // line 120
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig");
            yield "
         </div>
      </div>

      <script type=\"text/javascript\">
         function change_task_state(tasks_id, target) {
            \$.post(`\${CFG_GLPI.root_doc}/ajax/timeline.php`,
               {'action':     'change_task_state',
                  'tasks_id':   tasks_id,
                  'parenttype': '";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 129), "js"), "html", null, true);
            yield "',
                  '";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 130), "js"), "html", null, true);
            yield "': ";
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130));
            yield "
               })
               .done(function(response) {
                  \$(target).closest('.timeline-item').find('.state')
                     .removeClass('state_1 state_2')
                     .addClass('state_'+response.state)
                     .attr('title', response.label);

                  \$(target).closest('.timeline-item').find('.read-only-content')
                     .toggleClass('done');

                  var todo_tasks   = \$('.todo-list-state .state.state_1').length;
                  var done_tasks   = \$('.todo-list-state .state.state_2').length;
                  var total_tasks  = todo_tasks + done_tasks;
                  var percent_done = Math.floor(100 * done_tasks / total_tasks);

                  \$('.timeline-progress')
                     .css('width', percent_done + '%')
                     .attr('aria-valuenow', percent_done);
                  \$('.task-progress-label').html(percent_done + '%');
               });
         }
      </script>
   ";
        } else {
            // line 154
            yield "      ";
            yield from $this->load("components/itilobject/timeline/form_task_main_form.html.twig", 154)->unwrap()->yield($context);
            // line 155
            yield "
      <script type=\"text/javascript\">
         function itiltasktemplate_update";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "(value) {
            \$.ajax({
               url: `\${CFG_GLPI.root_doc}/ajax/task.php`,
               type: 'POST',
               data: {
                  tasktemplates_id: value,
                  items_id: '";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v23 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 163)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["id"] ?? null) : null), "js"), "html", null, true);
            yield "',
                  itemtype: '";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 164), "js"), "html", null, true);
            yield "'
               }
            }).done(function (data) {
                // set textarea content ONLY if template defines content
                // If template has no content defined, preserve user's existing content
                if (data.content && data.content.trim() !== '') {
                    setRichTextEditorContent(\"content_";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\", data.content);
                }

                if (data.taskcategories_id !== undefined) {
                    // set category
                    const taskcategories_id = isNaN(parseInt(data.taskcategories_id))
                        ? 0
                        : parseInt(data.taskcategories_id);

                     //need to create new DOM option, because SELECT is remotely-sourced (AJAX)
                     //see : https://select2.org/programmatic-control/add-select-clear-items#preselecting-options-in-an-remotely-sourced-ajax-select2
                     var newOption = new Option(data.taskcategories_name, taskcategories_id, true, true);
                     \$(\"#dropdown_taskcategories_id";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").append(newOption).trigger('change');
                }

                if (data.is_private !== undefined) {
                    // set is_private
                    \$(\"#is_private_";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\")
                        .prop(\"checked\", data.is_private == \"0\"
                            ? false
                            : true);
                }

                if (data.state !== undefined) {
                    // Set state
                    \$(\"#dropdown_state";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").trigger('setValue', data.state);
                }

                if (data.actiontime !== undefined) {
                    // Set duration
                    \$(\"#dropdown_actiontime";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").trigger('setValue', data.actiontime);
                }

                if (data.users_id_tech !== undefined) {
                    // Set user
                    \$(\"#dropdown_users_id_tech";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").trigger('setValue', data.users_id_tech);
                }

               if (data.groups_id_tech !== undefined) {
                   // Set group
                   \$(\"#dropdown_groups_id_tech";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").trigger('setValue', data.groups_id_tech);
               }

               // set predefined pending reason ONLY if template defines one
               // If template has no pending reason defined, preserve user's choices
               if (data.pendingreasons_id > 0) {
                  \$(\"#enable-pending-reasons-";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\")
                     .prop(\"checked\", true);
                  \$(\"#pending-reasons-setup-";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\")
                     .collapse('show');

                  //need to create new DOM option, because SELECT is remotely-sourced (AJAX)
                  //see : https://select2.org/programmatic-control/add-select-clear-items#preselecting-options-in-an-remotely-sourced-ajax-select2
                  var newOption = new Option(data.pendingreasons_name, data.pendingreasons_id, true, true);
                  \$(\"#dropdown_pendingreasons_id";
            // line 224
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
        return "components/itilobject/timeline/form_task.html.twig";
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
        return array (  392 => 224,  383 => 218,  378 => 216,  369 => 210,  361 => 205,  353 => 200,  345 => 195,  334 => 187,  326 => 182,  311 => 170,  302 => 164,  298 => 163,  289 => 157,  285 => 155,  282 => 154,  253 => 130,  249 => 129,  237 => 120,  234 => 119,  227 => 116,  220 => 113,  217 => 112,  215 => 111,  211 => 109,  209 => 108,  206 => 107,  199 => 104,  192 => 101,  189 => 100,  187 => 99,  183 => 97,  181 => 96,  178 => 95,  172 => 92,  167 => 90,  163 => 88,  161 => 87,  158 => 86,  152 => 83,  148 => 81,  146 => 80,  143 => 79,  137 => 76,  134 => 75,  132 => 74,  129 => 73,  123 => 70,  119 => 68,  117 => 67,  114 => 66,  109 => 63,  107 => 62,  106 => 61,  104 => 60,  101 => 59,  99 => 58,  96 => 57,  94 => 56,  88 => 52,  86 => 49,  82 => 48,  76 => 46,  73 => 45,  66 => 44,  61 => 33,  59 => 42,  57 => 41,  55 => 40,  53 => 39,  51 => 38,  49 => 37,  47 => 35,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/form_task.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/form_task.html.twig");
    }
}
