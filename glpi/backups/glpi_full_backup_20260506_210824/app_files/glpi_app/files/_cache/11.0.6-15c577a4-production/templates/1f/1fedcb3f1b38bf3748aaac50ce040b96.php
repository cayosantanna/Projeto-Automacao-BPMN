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

/* components/itilobject/footer.html.twig */
class __TwigTemplate_666f71da23c8dcc880240d15b7a29770 extends Template
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
        $context["is_helpdesk"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk");
        // line 34
        $context["timeline_btns_cls"] = ($context["left_regular_cls"] ?? null);
        // line 35
        $context["form_btns_cls"] = (((($tmp = ($context["is_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["right_expanded_cls"] ?? null)) : ("col-lg"));
        // line 36
        $context["timeline_btn_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpitimeline_action_btn_layout");
        // line 37
        $context["switch_btn_cls"] = "ti ti-caret-left-filled";
        // line 38
        if ((($tmp = ($context["is_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "    ";
            $context["timeline_btns_cls"] = ($context["left_expanded_cls"] ?? null);
            // line 40
            yield "    ";
            $context["form_btns_cls"] = ($context["right_expanded_cls"] ?? null);
            // line 41
            yield "    ";
            $context["switch_btn_cls"] = "ti ti-caret-right filled";
        }
        // line 43
        yield "
<div class=\"mx-n2 mb-n2 itil-footer itil-footer p-0 border-top\" id=\"itil-footer\">
   <div class=\"buttons-bar d-flex py-2\">
      <div class=\"col ";
        // line 46
        yield (((($tmp =  !($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["timeline_btns_cls"] ?? null), "html", null, true)) : (""));
        yield " ps-3 timeline-buttons d-flex\">
         ";
        // line 47
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "            ";
            $context["main_actions_itemtypes"] = Twig\Extension\CoreExtension::filter($this->env, ($context["timeline_itemtypes"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ( !CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "hide_in_menu", [], "any", true, true, false, 48) || (CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "hide_in_menu", [], "any", false, false, false, 48) != true)); });
            // line 49
            yield "
            ";
            // line 50
            $context["default_action_data"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["main_actions_itemtypes"] ?? null));
            // line 51
            yield "            ";
            $context["default_action"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(($context["main_actions_itemtypes"] ?? null)));
            // line 52
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNotSolved", [], "method", false, false, false, 52) && (($context["default_action_data"] ?? null) != false))) {
                // line 53
                yield "               ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["main_actions_itemtypes"] ?? null)) > 1)) {
                    // line 54
                    yield "                  ";
                    $context["btn_class"] = (((($context["timeline_btn_layout"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_ACTION_BTN_SPLITTED"))) ? ("") : ("btn-group"));
                    // line 55
                    yield "                  <div class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btn_class"] ?? null), "html", null, true);
                    yield " me-2 main-actions\">
               ";
                } else {
                    // line 57
                    yield "                  ";
                    // line 58
                    yield "                  <div class=\"main-actions\" style=\"display:inline-flex\">
               ";
                }
                // line 60
                yield "                  <button
                     class=\"btn btn-primary answer-action ";
                // line 61
                yield (((($context["default_action"] ?? null) != "answer")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("action-" . ($context["default_action"] ?? null)), "html", null, true)) : (""));
                yield "\"
                     data-bs-toggle=\"collapse\"
                     data-bs-target=\"#new-";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["default_action_data"] ?? null), "class", [], "any", false, false, false, 63), "html", null, true);
                yield "-block\"
                     type=\"button\"
                  >
                     <i class=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["default_action_data"] ?? null), "icon", [], "any", false, false, false, 66), "html", null, true);
                yield "\"></i>
                     <span>";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["default_action_data"] ?? null), "label", [], "any", false, false, false, 67), "html", null, true);
                yield "</span>
                  </button>

                  ";
                // line 70
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["main_actions_itemtypes"] ?? null)) > 1)) {
                    // line 71
                    yield "                     ";
                    if ((($context["timeline_btn_layout"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_ACTION_BTN_SPLITTED"))) {
                        // line 72
                        yield "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["main_actions_itemtypes"] ?? null));
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
                        foreach ($context['_seq'] as $context["action"] => $context["timeline_itemtype"]) {
                            // line 73
                            yield "                        ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 73) > 0)) {
                                // line 74
                                yield "                              <button class=\"ms-2 btn btn-primary answer-action action-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"], "html", null, true);
                                yield "\" data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 74), "html", null, true);
                                yield "-block\">
                                 <i class=\"";
                                // line 75
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "icon", [], "any", false, false, false, 75), "html", null, true);
                                yield "\"></i>
                                 <span>";
                                // line 76
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "short_label", [], "any", false, false, false, 76), "html", null, true);
                                yield "</span>
                              </button>
                              ";
                            }
                            // line 79
                            yield "                        ";
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
                        unset($context['_seq'], $context['action'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 80
                        yield "                     ";
                    } else {
                        // line 81
                        yield "                        <button
                           type=\"button\"
                           class=\"btn btn-primary dropdown-toggle dropdown-toggle-split ";
                        // line 83
                        yield (((($context["default_action"] ?? null) != "answer")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("action-" . ($context["default_action"] ?? null)), "html", null, true)) : (""));
                        yield "\"
                           data-bs-toggle=\"dropdown\"
                           aria-expanded=\"false\"
                        >
                           <span class=\"visually-hidden\">";
                        // line 87
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("View other actions"), "html", null, true);
                        yield "</span>
                        </button>
                        <ul class=\"dropdown-menu\">
                              ";
                        // line 90
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["main_actions_itemtypes"] ?? null));
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
                        foreach ($context['_seq'] as $context["action"] => $context["timeline_itemtype"]) {
                            // line 91
                            yield "                                 ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 91) > 0)) {
                                // line 92
                                yield "                                 <li><a class=\"dropdown-item action-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"], "html", null, true);
                                yield " answer-action\" href=\"#\"
                                    data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                                // line 93
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 93), "html", null, true);
                                yield "-block\">
                                    <i class=\"";
                                // line 94
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "icon", [], "any", false, false, false, 94), "html", null, true);
                                yield "\"></i>
                                    <span>";
                                // line 95
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "label", [], "any", false, false, false, 95), "html", null, true);
                                yield "</span>
                                 </a></li>
                                 ";
                            }
                            // line 98
                            yield "                              ";
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
                        unset($context['_seq'], $context['action'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 99
                        yield "                        </ul>
                     ";
                    }
                    // line 101
                    yield "                  ";
                }
                // line 102
                yield "               </div>
            ";
            }
            // line 104
            yield "
            <ul class=\"legacy-timeline-actions\">
               ";
            // line 106
            yield ((array_key_exists("legacy_timeline_actions", $context)) ? (Twig\Extension\CoreExtension::default(($context["legacy_timeline_actions"] ?? null), "")) : (""));
            yield "
            </ul>

            ";
            // line 109
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canSolve", [], "method", false, false, false, 109) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "checkRequiredFieldsFilled", [], "method", false, false, false, 109))) {
                // line 110
                yield "               <i class=\"ti ti-alert-triangle text-warning me-2 d-flex align-items-center\"
                  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                  title=\"";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Solving this %s is not possible as one or more mandatory field is not filled"), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 112)), "html", null, true);
                yield "\"></i>
            ";
            }
            // line 114
            yield "
            <div class=\"ms-auto\"></div>

            ";
            // line 117
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canDeleteItem", [], "method", false, false, false, 117) && ($context["is_helpdesk"] ?? null))) {
                // line 118
                yield "               <button class=\"btn btn-ghost-danger me-2\" type=\"submit\" name=\"delete\" form=\"itil-form\">
                  <i class=\"ti ti-trash me-1\"></i>
                  <span>";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel ticket"), "html", null, true);
                yield "</span>
               </button>
            ";
            }
            // line 123
            yield "
            ";
            // line 124
            if ((($tmp =  !($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 125
                yield "               ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/filter_timeline.html.twig");
                yield "
            ";
            }
            // line 127
            yield "         ";
        }
        // line 128
        yield "     </div>

      ";
        // line 130
        if ((($tmp =  !($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "         <div class=\"form-buttons ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_btns_cls"] ?? null), "html", null, true);
            yield " d-flex justify-content-between ms-auto ms-lg-0 my-n2 py-2 pe-3 card-footer border-top-0 position-relative\">
            <span class=\"d-none d-lg-block ms-n3\"
                  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Toggle panels width"), "html", null, true);
            yield "\">
               <button type=\"button\" class=\"switch-panel-width btn btn-icon btn-ghost-secondary px-0\">
                  <i class=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["switch_btn_cls"] ?? null), "html", null, true);
            yield "\"></i>
               </button>
               <button type=\"button\" class=\"collapse-panel btn btn-icon btn-ghost-secondary px-0 mr-1\">
                  <i class=\"ti ti-caret-right-filled\"></i>
               </button>
            </span>

            <span>
            ";
            // line 143
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 144
                yield "               <button class=\"btn btn-primary\" type=\"submit\" name=\"add\" form=\"itil-form\"
                     title=\"";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                yield "\">
                  <i class=\"ti ti-plus\"></i>
                  <span class=\"d-none d-lg-block\">";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                yield "</span>
               </button>
            ";
            } else {
                // line 150
                yield "               <div class=\"btn-group d-flex flex-row-reverse\" role=\"group\" id=\"right-actions\">
                  ";
                // line 151
                $context["is_locked"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "locked", [], "array", true, true, false, 151) && (($_v0 = ($context["params"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["locked"] ?? null) : null));
                // line 152
                yield "                  ";
                $context["display_save_btn"] = ( !($context["is_locked"] ?? null) && ((((($context["canupdate"] ?? null) || ($context["can_requester"] ?? null)) || ($context["canpriority"] ?? null)) || ($context["canassign"] ?? null)) || ($context["canassigntome"] ?? null)));
                // line 153
                yield "
                  ";
                // line 154
                if ((($tmp = ($context["display_save_btn"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 155
                    yield "                     <button class=\"btn btn-primary btn-square\" type=\"submit\" name=\"update\" form=\"itil-form\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                    // line 156
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                    yield "\">
                        <i class=\"ti ti-device-floppy\"></i>
                        <span class=\"d-none d-xl-block\">";
                    // line 158
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                    yield "</span>
                     </button>
                  ";
                }
                // line 161
                yield "
                   ";
                // line 162
                if ((($tmp = ($context["canupdate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 163
                    yield "                       ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/single-action.html.twig", ["onlyicon" => true]);
                    // line 165
                    yield "
                   ";
                }
                // line 167
                yield "
                  ";
                // line 168
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canDeleteItem", [], "method", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 169
                    yield "                     ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 170
                        yield "                        <button class=\"btn btn-outline-secondary btn-square\" type=\"submit\" name=\"restore\" form=\"itil-form\"
                              title=\"";
                        // line 171
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Restore"), "html", null, true);
                        yield "\">
                           <i class=\"ti ti-trash-off\"></i>
                           <span class=\"d-none d-lg-block\">";
                        // line 173
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Restore"), "html", null, true);
                        yield "</span>
                        </button>

                        <button class=\"btn btn-outline-danger btn-square\" type=\"submit\" name=\"purge\" form=\"itil-form\"
                              title=\"";
                        // line 177
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                        yield "\"
                              onclick=\"return confirm('";
                        // line 178
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "js"), "html", null, true);
                        yield "');\">
                           <i class=\"ti ti-trash\"></i>
                           <span class=\"d-none d-lg-block\">";
                        // line 180
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                        yield "</span>
                        </button>
                     ";
                    } else {
                        // line 183
                        yield "                        <button class=\"btn btn-outline-danger btn-square\" type=\"submit\" name=\"delete\" form=\"itil-form\"
                              title=\"";
                        // line 184
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Put in trashbin"), "html", null, true);
                        yield "\"
                                data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                           <i class=\"ti ti-trash\"></i>
                        </button>
                     ";
                    }
                    // line 189
                    yield "                  ";
                }
                // line 190
                yield "               </div>
            ";
            }
            // line 192
            yield "            </span>
         </div>
      ";
        }
        // line 195
        yield "
   </div>
</div>

";
        // line 199
        $context["openfollowup"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 199) &&  !(null === (($_v1 = ($context["_get"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["_openfollowup"] ?? null) : null)))) ? ((($_v2 = ($context["_get"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["_openfollowup"] ?? null) : null)) : (false));
        // line 200
        $context["is_timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 201
        yield "
<script type=\"text/javascript\">

(function(){
    ";
        // line 210
        yield "   var scrollToTimelineStart = function() {
        // scroll body to ensure we are at bottom (useful for responsive display)
        \$('html, body').animate({
        scrollTop: ";
        // line 213
        yield (((($tmp = ($context["is_timeline_reversed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("-") : (""));
        yield "\$(document).height()
        }, 0, function(){
            // scroll timeline with animation
            var timeline = \$(\"#itil-object-container .itil-left-side\");
            timeline.animate({
                scrollTop: ";
        // line 218
        yield (((($tmp = ($context["is_timeline_reversed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("-") : (""));
        yield "timeline.prop('scrollHeight')
            }, 'slow');
        });
   };

   \$(document).on(\"click\", \"#itil-footer .answer-action\", function() {
      scrollToTimelineStart();
      // hide answer button after clicking on it only for merge btn
      \$(\"#itil-footer .main-actions\").hide();
      // hide also itil object action to prevent confusion
      \$(\"#right-actions\").hide();
   });

   \$(function() {
      // when close button of new answer block is clicked, show again the new answer button (and the itil object actions)
      \$(document).on(\"click\", \"#new-itilobject-form .close-itil-answer\", function() {
         \$(\"#itil-footer .main-actions\").show();
         \$(\"#right-actions\").show();
      });

      ";
        // line 238
        if ((($tmp = ($context["openfollowup"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 239
            yield "         // trigger for reopen, show followup form in timeline
         var myCollapse = document.getElementById('new-ITILFollowup-block')
         var bsCollapse = new bootstrap.Collapse(myCollapse);
         bsCollapse.show();

         scrollToTimelineStart();
      ";
        }
        // line 246
        yield "   });
})();

</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/footer.html.twig";
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
        return array (  534 => 246,  525 => 239,  523 => 238,  500 => 218,  492 => 213,  487 => 210,  481 => 201,  479 => 200,  477 => 199,  471 => 195,  466 => 192,  462 => 190,  459 => 189,  451 => 184,  448 => 183,  442 => 180,  437 => 178,  433 => 177,  426 => 173,  421 => 171,  418 => 170,  415 => 169,  413 => 168,  410 => 167,  406 => 165,  403 => 163,  401 => 162,  398 => 161,  392 => 158,  387 => 156,  384 => 155,  382 => 154,  379 => 153,  376 => 152,  374 => 151,  371 => 150,  365 => 147,  360 => 145,  357 => 144,  355 => 143,  344 => 135,  339 => 133,  333 => 131,  331 => 130,  327 => 128,  324 => 127,  318 => 125,  316 => 124,  313 => 123,  307 => 120,  303 => 118,  301 => 117,  296 => 114,  291 => 112,  287 => 110,  285 => 109,  279 => 106,  275 => 104,  271 => 102,  268 => 101,  264 => 99,  250 => 98,  244 => 95,  240 => 94,  236 => 93,  231 => 92,  228 => 91,  211 => 90,  205 => 87,  198 => 83,  194 => 81,  191 => 80,  177 => 79,  171 => 76,  167 => 75,  160 => 74,  157 => 73,  139 => 72,  136 => 71,  134 => 70,  128 => 67,  124 => 66,  118 => 63,  113 => 61,  110 => 60,  106 => 58,  104 => 57,  98 => 55,  95 => 54,  92 => 53,  89 => 52,  86 => 51,  84 => 50,  81 => 49,  78 => 48,  76 => 47,  72 => 46,  67 => 43,  63 => 41,  60 => 40,  57 => 39,  55 => 38,  53 => 37,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/footer.html.twig", "/var/www/html/glpi/templates/components/itilobject/footer.html.twig");
    }
}
