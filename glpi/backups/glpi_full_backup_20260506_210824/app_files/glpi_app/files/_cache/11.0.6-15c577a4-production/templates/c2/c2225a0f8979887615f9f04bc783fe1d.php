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

/* components/itilobject/timeline/timeline.html.twig */
class __TwigTemplate_3d244464382e244e155089bd7037e11c extends Template
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
        $context["is_timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 34
        $context["is_helpdesk"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk");
        // line 35
        yield "
<div class=\"itil-timeline d-flex flex-column align-items-start mb-auto ";
        // line 36
        yield (((($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("px-3 py-2") : (""));
        yield "\">
    ";
        // line 37
        if ((($tmp =  !($context["is_timeline_reversed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/main_description.html.twig");
            yield "
    ";
        } else {
            // line 40
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/approbation_form.html.twig");
            yield "
        ";
            // line 41
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/answer.html.twig");
            yield "
    ";
        }
        // line 43
        yield "
   ";
        // line 44
        $context["status_closed"] = CoreExtension::inFilter((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["status"] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getClosedStatusArray", [], "method", false, false, false, 44));
        // line 45
        yield "
   ";
        // line 47
        yield "   ";
        $context["user_cache"] = [];
        // line 48
        yield "
   ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["timeline"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 50
            yield "      ";
            $context["entry_i"] = (($_v1 = $context["entry"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["item"] ?? null) : null);
            // line 51
            yield "      ";
            $context["entry_object"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "object", [], "array", true, true, false, 51) &&  !(null === (($_v2 = $context["entry"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["object"] ?? null) : null)))) ? ((($_v3 = $context["entry"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["object"] ?? null) : null)) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem((($_v4 = $context["entry"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["type"] ?? null) : null), (($_v5 = ($context["entry_i"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["id"] ?? null) : null))));
            // line 52
            yield "      ";
            $context["entry_state"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "state", [], "array", true, true, false, 52) &&  !(null === (($_v6 = ($context["entry_i"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["state"] ?? null) : null)))) ? ((($_v7 = ($context["entry_i"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["state"] ?? null) : null)) : (null));
            // line 53
            yield "      ";
            $context["users_id"] = (($_v8 = ($context["entry_i"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["users_id"] ?? null) : null);
            // line 54
            yield "      ";
            $context["is_private"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "is_private", [], "array", true, true, false, 54) &&  !(null === (($_v9 = ($context["entry_i"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["is_private"] ?? null) : null)))) ? ((($_v10 = ($context["entry_i"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["is_private"] ?? null) : null)) : (false));
            // line 55
            yield "      ";
            $context["date_creation"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "date_creation", [], "array", true, true, false, 55) &&  !(null === (($_v11 = ($context["entry_i"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["date_creation"] ?? null) : null)))) ? ((($_v12 = ($context["entry_i"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["date_creation"] ?? null) : null)) : ((($_v13 = ($context["entry_i"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["date"] ?? null) : null)));
            // line 56
            yield "      ";
            $context["date_mod"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "date_mod", [], "array", true, true, false, 56) &&  !(null === (($_v14 = ($context["entry_i"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["date_mod"] ?? null) : null)))) ? ((($_v15 = ($context["entry_i"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["date_mod"] ?? null) : null)) : (($context["date_creation"] ?? null)));
            // line 57
            yield "      ";
            $context["entry_rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 58
            yield "      ";
            $context["is_current_user"] = (($context["users_id"] ?? null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
            // line 59
            yield "      ";
            $context["anonym_user"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_user"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != Twig\Extension\CoreExtension::constant("Entity::ANONYMIZE_DISABLED")));
            // line 60
            yield "
      ";
            // line 61
            $context["is_private_class"] = (((($tmp = ($context["is_private"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("private-item") : (""));
            // line 62
            yield "
      ";
            // line 63
            $context["can_edit_i"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "can_edit", [], "array", true, true, false, 63) &&  !(null === (($_v16 = ($context["entry_i"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["can_edit"] ?? null) : null)))) ? ((($_v17 = ($context["entry_i"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["can_edit"] ?? null) : null)) : (false));
            // line 64
            yield "
      ";
            // line 65
            $context["timeline_position"] = (($_v18 = ($context["entry_i"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["timeline_position"] ?? null) : null);
            // line 66
            yield "      ";
            $context["item_position"] = "t-left";
            // line 67
            yield "      ";
            if ((($context["timeline_position"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_LEFT"))) {
                // line 68
                yield "         ";
                $context["item_position"] = "t-left";
                // line 69
                yield "      ";
            } elseif ((($context["timeline_position"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_MIDLEFT"))) {
                // line 70
                yield "         ";
                $context["item_position"] = "t-left t-middle";
                // line 71
                yield "      ";
            } elseif ((($context["timeline_position"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_MIDRIGHT"))) {
                // line 72
                yield "         ";
                $context["item_position"] = "t-right t-middle";
                // line 73
                yield "      ";
            } elseif ((($context["timeline_position"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_RIGHT"))) {
                // line 74
                yield "         ";
                $context["item_position"] = "t-right";
                // line 75
                yield "      ";
            }
            // line 76
            yield "
      ";
            // line 77
            $context["itiltype"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "itiltype", [], "array", true, true, false, 77)) ? (("ITIL" . (($_v19 = $context["entry"]) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["itiltype"] ?? null) : null))) : ((($_v20 = $context["entry"]) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["type"] ?? null) : null)));
            // line 78
            yield "
      ";
            // line 79
            $context["state_class"] = "";
            // line 80
            yield "      ";
            if ((($context["entry_state"] ?? null) === constant("Planning::INFO"))) {
                // line 81
                yield "         ";
                $context["state_class"] = "info";
                // line 82
                yield "      ";
            }
            // line 83
            yield "      ";
            if ((($context["entry_state"] ?? null) === constant("Planning::TODO"))) {
                // line 84
                yield "         ";
                $context["state_class"] = "todo";
                // line 85
                yield "      ";
            }
            // line 86
            yield "      ";
            if ((($context["entry_state"] ?? null) === constant("Planning::DONE"))) {
                // line 87
                yield "         ";
                $context["state_class"] = "done";
                // line 88
                yield "      ";
            }
            // line 89
            yield "
      ";
            // line 90
            $context["solution_class"] = "";
            // line 91
            yield "      ";
            if ((((($context["itiltype"] ?? null) == "ITILSolution") || (($context["itiltype"] ?? null) == "ITILValidation")) && CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "status", [], "array", true, true, false, 91))) {
                // line 92
                yield "         ";
                $context["status"] = (((($context["itiltype"] ?? null) == "ITILSolution")) ? ((($_v21 = ($context["entry_i"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["status"] ?? null) : null)) : (Twig\Extension\CoreExtension::replace((($_v22 = ($context["entry_i"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["status"] ?? null) : null), ["status_" => ""])));
                // line 93
                yield "         ";
                if ((($context["status"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILValidation::WAITING"))) {
                    // line 94
                    yield "            ";
                    $context["solution_class"] = "waiting";
                    // line 95
                    yield "         ";
                }
                // line 96
                yield "         ";
                if ((($context["status"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILValidation::ACCEPTED"))) {
                    // line 97
                    yield "            ";
                    $context["solution_class"] = "accepted";
                    // line 98
                    yield "         ";
                }
                // line 99
                yield "         ";
                if ((($context["status"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILValidation::REFUSED"))) {
                    // line 100
                    yield "            ";
                    $context["solution_class"] = "refused";
                    // line 101
                    yield "         ";
                }
                // line 102
                yield "      ";
            }
            // line 103
            yield "
      ";
            // line 105
            yield "      ";
            // line 106
            yield "      ";
            $context["entry_user"] = (((array_key_exists("users_id", $context) &&  !(null === ($context["users_id"] ?? null)))) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["user_cache"] ?? null), ("_" . ($context["users_id"] ?? null)), [], "array", true, true, false, 106) &&  !(null === (($_v23 = ($context["user_cache"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[("_" . ($context["users_id"] ?? null))] ?? null) : null)))) ? ((($_v24 = ($context["user_cache"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[("_" . ($context["users_id"] ?? null))] ?? null) : null)) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null))))) : (null));
            // line 107
            yield "      ";
            // line 108
            yield "      ";
            $context["user_cache"] = Twig\Extension\CoreExtension::merge(($context["user_cache"] ?? null), [("_" . ($context["users_id"] ?? null)) => ($context["entry_user"] ?? null)]);
            // line 109
            yield "
      ";
            // line 110
            $context["anchor"] = (((($_v25 = $context["entry"]) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["type"] ?? null) : null) . "_") . (($_v26 = ($context["entry_i"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["id"] ?? null) : null));
            // line 111
            yield "      <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["anchor"] ?? null), "html", null, true);
            yield "\" class=\"timeline-item mb-3 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["is_private_class"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itiltype"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["state_class"] ?? null), "html", null, true);
            yield " ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "class", [], "array", true, true, false, 111) &&  !(null === (($_v27 = $context["entry"]) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["class"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v28 = $context["entry"]) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["class"] ?? null) : null), "html", null, true)) : (""));
            yield " ";
            yield ((CoreExtension::inFilter("right", ($context["item_position"] ?? null))) ? ("ms-auto") : (""));
            yield "\"
            data-itemtype=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v29 = $context["entry"]) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["type"] ?? null) : null), "html", null, true);
            yield "\" data-items-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v30 = ($context["entry_i"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["id"] ?? null) : null), "html", null, true);
            yield "\"
            ";
            // line 113
            if (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "item_action", [], "array", true, true, false, 113)) {
                yield "data-item-action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v31 = $context["entry"]) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["item_action"] ?? null) : null), "html", null, true);
                yield "\"";
            }
            yield ">

         ";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_SHOW_ITEM"), ["item" => ($context["entry_object"] ?? null), "options" => ["parent" => ($context["item"] ?? null), "rand" => ($context["entry_rand"] ?? null)]]), "html", null, true);
            yield "

         <div class=\"row\">
            <div class=\"col-auto todo-list-state ";
            // line 118
            yield ((CoreExtension::inFilter("left", ($context["item_position"] ?? null))) ? ("ms-auto order-sm-last") : (""));
            yield "\">
               ";
            // line 119
            if ((($context["entry_state"] ?? null) === constant("Planning::TODO"))) {
                // line 120
                yield "                  ";
                if ((($tmp = ($context["can_edit_i"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 121
                    yield "                     <span class=\"state state_1\" onclick=\"change_task_state(";
                    yield json_encode((($_v32 = ($context["entry_i"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["id"] ?? null) : null));
                    yield ", this)\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("To do"), "html", null, true);
                    yield "\"></span>
                  ";
                } else {
                    // line 123
                    yield "                     <span class=\"state state_1\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("To do"), "html", null, true);
                    yield "\" style=\"cursor: not-allowed;\"></span>
                  ";
                }
                // line 125
                yield "               ";
            } elseif ((($context["entry_state"] ?? null) === constant("Planning::DONE"))) {
                // line 126
                yield "                  ";
                if ((($tmp = ($context["can_edit_i"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 127
                    yield "                     <span class=\"state state_2\" onclick=\"change_task_state(";
                    yield json_encode((($_v33 = ($context["entry_i"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["id"] ?? null) : null));
                    yield ", this)\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Done"), "html", null, true);
                    yield "\"></span>
                  ";
                } else {
                    // line 129
                    yield "                     <span class=\"state state_2\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Done"), "html", null, true);
                    yield "\" style=\"cursor: not-allowed;\"></span>
                  ";
                }
                // line 131
                yield "               ";
            }
            // line 132
            yield "            </div>

            <div class=\"col-auto d-flex flex-column user-part ";
            // line 134
            yield ((CoreExtension::inFilter("right", ($context["item_position"] ?? null))) ? ("ms-auto ms-0 order-sm-last") : ("order-first"));
            yield "\">
               ";
            // line 135
            $context["avatar_rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 136
            yield "               ";
            // line 137
            yield "               ";
            if ((($tmp =  !(null === ($context["entry_user"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 138
                yield "                  ";
                $context["user_fields"] = CoreExtension::getAttribute($this->env, $this->source, ($context["entry_user"] ?? null), "fields", [], "any", false, false, false, 138);
                // line 139
                yield "                  ";
                $context["user_fields"] = Twig\Extension\CoreExtension::merge(($context["user_fields"] ?? null), ["user_name" => CoreExtension::getAttribute($this->env, $this->source, ($context["entry_user"] ?? null), "getFriendlyName", [], "method", false, false, false, 139)]);
                // line 140
                yield "                  ";
                $context["user_fields"] = Twig\Extension\CoreExtension::merge(($context["user_fields"] ?? null), ["email" => CoreExtension::getAttribute($this->env, $this->source, ($context["entry_user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 140)]);
                // line 141
                yield "                  ";
                if ((($tmp = Session::haveRight("user", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 142
                    yield "                     ";
                    $context["user_fields"] = Twig\Extension\CoreExtension::merge(($context["user_fields"] ?? null), ["login" => (($_v34 = CoreExtension::getAttribute($this->env, $this->source, ($context["entry_user"] ?? null), "fields", [], "any", false, false, false, 142)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["name"] ?? null) : null)]);
                    // line 143
                    yield "                  ";
                }
                // line 144
                yield "                  <span id=\"timeline-avatar";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar_rand"] ?? null), "html", null, true);
                yield "\">
                     ";
                // line 145
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" =>                 // line 146
($context["users_id"] ?? null), "user_object" =>                 // line 147
($context["entry_user"] ?? null), "enable_anonymization" =>                 // line 148
($context["anonym_user"] ?? null)], false);
                // line 149
                yield "
                  </span>
                  ";
                // line 151
                if (( !($context["anonym_user"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["entry_user"] ?? null), "canView", [], "method", false, false, false, 151))) {
                    // line 152
                    yield "                     ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [Twig\Extension\CoreExtension::include($this->env, $context, "components/user/info_card.html.twig", ["user" =>                     // line 154
($context["user_fields"] ?? null), "user_object" =>                     // line 155
($context["entry_user"] ?? null), "enable_anonymization" => false], false), ["applyto" => ("timeline-avatar" .                     // line 158
($context["avatar_rand"] ?? null))]]);
                    // line 160
                    yield "                  ";
                }
                // line 161
                yield "               ";
            } else {
                // line 162
                yield "                  <span id=\"timeline-avatar";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar_rand"] ?? null), "html", null, true);
                yield "\"><span class=\"avatar avatar-md rounded\"></span></span>
               ";
            }
            // line 164
            yield "            </div>
            <div class=\"col-12 col-sm d-flex flex-column content-part\">
               <div class=\"mt-2 timeline-content ";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["solution_class"] ?? null), "html", null, true);
            yield " flex-grow-1 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["item_position"] ?? null), "html", null, true);
            yield " card\">
                  <div class=\"card-body px-1 px-xxl-3\">
                     ";
            // line 168
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/timeline_item_header.html.twig", ["user_object" =>             // line 169
($context["entry_user"] ?? null)]);
            // line 170
            yield "

                     ";
            // line 172
            if (CoreExtension::inFilter(($context["itiltype"] ?? null), Twig\Extension\CoreExtension::column(($context["timeline_itemtypes"] ?? null), "type"))) {
                // line 173
                yield "                        ";
                $context["matching_types"] = Twig\Extension\CoreExtension::filter($this->env, ($context["timeline_itemtypes"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "type", [], "any", false, false, false, 173) == ($context["itiltype"] ?? null)); });
                // line 174
                yield "                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["matching_types"] ?? null)) > 0)) {
                    // line 175
                    yield "                           ";
                    $context["timeline_itemtype"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["matching_types"] ?? null));
                    // line 176
                    yield "                           ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", true, true, false, 176)) {
                        // line 177
                        yield "                              ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", false, false, false, 177), ["form_mode" => "view", "subitem" => CoreExtension::getAttribute($this->env, $this->source,                         // line 179
($context["timeline_itemtype"] ?? null), "item", [], "any", false, false, false, 179), "mention_options" =>                         // line 180
($context["mention_options"] ?? null)]);
                        // line 181
                        yield "
                           ";
                    }
                    // line 183
                    yield "                        ";
                }
                // line 184
                yield "                     ";
            } else {
                // line 185
                yield "                        <div class=\"read-only-content\">
                            ";
                // line 186
                if ((($tmp = (($_v35 = ($context["entry_i"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["is_content_safe"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 187
                    yield "                                ";
                    yield (($_v36 = ($context["entry_i"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["content"] ?? null) : null);
                    yield "
                            ";
                } else {
                    // line 189
                    yield "                                ";
                    yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml((($_v37 = ($context["entry_i"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["content"] ?? null) : null));
                    yield "
                            ";
                }
                // line 191
                yield "                        </div>
                     ";
            }
            // line 193
            yield "                     <div class=\"edit-content collapse\">
                        <div class=\"ajax-content\"></div>
                     </div>
                  </div>
               </div>

               ";
            // line 199
            if (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "documents", [], "array", true, true, false, 199)) {
                // line 200
                yield "                  ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/sub_documents.html.twig", ["item" =>                 // line 201
($context["item"] ?? null), "entry" =>                 // line 202
$context["entry"]]);
                // line 203
                yield "
               ";
            }
            // line 205
            yield "            </div>
         </div>

         ";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_SHOW_ITEM"), ["item" => ($context["entry_object"] ?? null), "options" => ["parent" => ($context["item"] ?? null), "rand" => ($context["entry_rand"] ?? null)]]), "html", null, true);
            yield "
      </div>
   ";
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
        unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        yield "
    ";
        // line 212
        if ((($tmp = ($context["is_timeline_reversed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 213
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/main_description.html.twig");
            yield "
    ";
        }
        // line 215
        yield "
    <div class=\"timeline-item tasks-title d-none\">
        <h3>";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Task", "Tasks", Session::getPluralNumber()), "html", null, true);
        yield "</h3>
    </div>

    ";
        // line 220
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/todo-list-summary.html.twig");
        yield "

    <div class=\"timeline-item validations-title d-none mt-4\">
        <h3>";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILValidation", Session::getPluralNumber()), "html", null, true);
        yield "</h3>
    </div>

    ";
        // line 226
        if ((($tmp =  !($context["is_timeline_reversed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 227
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/approbation_form.html.twig");
            yield "
        ";
            // line 228
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/answer.html.twig");
            yield "
    ";
        }
        // line 230
        yield "
   ";
        // line 231
        if ((array_key_exists("survey", $context) && ($context["survey"] ?? null))) {
            // line 232
            yield "      <form
         data-testid=\"survey\"
         class=\"mt-5 w-100 hide-form-button-separator\"
         method=\"POST\"
         action=\"";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("TicketSatisfaction"), "html", null, true);
            yield "\"
      >
         <div>
            ";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["survey"] ?? null), "showSatisactionForm", [($context["item"] ?? null), false], "method", false, false, false, 239), "html", null, true);
            yield "
      ";
            // line 241
            yield "   ";
        }
        // line 242
        yield "</div>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".edit-timeline-item\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      var content_block = timeline_item.find(\".timeline-content\");
      var itemtype      = timeline_item.data('itemtype');
      var items_id      = timeline_item.data('items-id');
      var item_action   = timeline_item.data('item-action');

      content_block.find(\".read-only-content\").hide();
      content_block.find(\".edit-content\").show()
         .find(\".ajax-content\")
         .html('<span class=\"spinner-border ms-auto\" role=\"status\" aria-hidden=\"true\"></span>')
         .load(\"";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/timeline.php"), "html", null, true);
        yield "\", {
            'action'     : 'viewsubitem',
            'type'       : itemtype,
            'parenttype' : '";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 260), "html", null, true);
        yield "',
            '";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 261), "html", null, true);
        yield "': ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v38 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 261)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["id"] ?? null) : null), "html", null, true);
        yield ",
            'id'         : items_id,
            'item_action': item_action
         });

      timeline_item.find('.timeline-item-buttons').addClass('d-none');
      timeline_item.find('.close-edit-content').removeClass('d-none');

      \$(\"#itil-footer\").find(\".main-actions\").hide();
      \$(\"#right-actions\").hide();
   });

   \$(document).on(\"click\", \".close-edit-content\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      timeline_item.find('.timeline-item-buttons').removeClass('d-none');
      timeline_item.find('.close-edit-content').addClass('d-none');

      timeline_item.find('.ajax-content').html('');
      timeline_item.find('.read-only-content').show();

      \$(\"#itil-footer .main-actions\").show();
      \$(\"#right-actions\").show();
   });
});

// Align ITILReminder
let result = document.evaluate(
   '//div[contains(@class, \"timeline-header\")][contains(@id, \"ITILReminder_\")]',
   document,
   null,
   XPathResult.ORDERED_NODE_SNAPSHOT_TYPE,
   null
);

for (let i = 0; i < result.snapshotLength; i++) {
   let node = result.snapshotItem(i);
   let width = (i > 0 ? Math.max(result.snapshotItem(i - 1).offsetWidth, node.offsetWidth) : node.offsetWidth) + 1;
   node.style.setProperty('width', 'var(--itilautobump-header-badge-width)');
   node.style.setProperty('flex-direction', 'row-reverse');
   document.documentElement.style.setProperty('--itilautobump-header-badge-width', width + 'px');
}

function toggleTimelinePrivate(checked, check_element) {
    \$(check_element).closest('.timeline-item').toggleClass('private-item', checked);
}
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/timeline.html.twig";
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
        return array (  630 => 261,  626 => 260,  620 => 257,  603 => 242,  600 => 241,  596 => 239,  590 => 236,  584 => 232,  582 => 231,  579 => 230,  574 => 228,  569 => 227,  567 => 226,  561 => 223,  555 => 220,  549 => 217,  545 => 215,  539 => 213,  537 => 212,  534 => 211,  517 => 208,  512 => 205,  508 => 203,  506 => 202,  505 => 201,  503 => 200,  501 => 199,  493 => 193,  489 => 191,  483 => 189,  477 => 187,  475 => 186,  472 => 185,  469 => 184,  466 => 183,  462 => 181,  460 => 180,  459 => 179,  457 => 177,  454 => 176,  451 => 175,  448 => 174,  445 => 173,  443 => 172,  439 => 170,  437 => 169,  436 => 168,  429 => 166,  425 => 164,  419 => 162,  416 => 161,  413 => 160,  411 => 158,  410 => 155,  409 => 154,  407 => 152,  405 => 151,  401 => 149,  399 => 148,  398 => 147,  397 => 146,  396 => 145,  391 => 144,  388 => 143,  385 => 142,  382 => 141,  379 => 140,  376 => 139,  373 => 138,  370 => 137,  368 => 136,  366 => 135,  362 => 134,  358 => 132,  355 => 131,  349 => 129,  341 => 127,  338 => 126,  335 => 125,  329 => 123,  321 => 121,  318 => 120,  316 => 119,  312 => 118,  306 => 115,  297 => 113,  291 => 112,  276 => 111,  274 => 110,  271 => 109,  268 => 108,  266 => 107,  263 => 106,  261 => 105,  258 => 103,  255 => 102,  252 => 101,  249 => 100,  246 => 99,  243 => 98,  240 => 97,  237 => 96,  234 => 95,  231 => 94,  228 => 93,  225 => 92,  222 => 91,  220 => 90,  217 => 89,  214 => 88,  211 => 87,  208 => 86,  205 => 85,  202 => 84,  199 => 83,  196 => 82,  193 => 81,  190 => 80,  188 => 79,  185 => 78,  183 => 77,  180 => 76,  177 => 75,  174 => 74,  171 => 73,  168 => 72,  165 => 71,  162 => 70,  159 => 69,  156 => 68,  153 => 67,  150 => 66,  148 => 65,  145 => 64,  143 => 63,  140 => 62,  138 => 61,  135 => 60,  132 => 59,  129 => 58,  126 => 57,  123 => 56,  120 => 55,  117 => 54,  114 => 53,  111 => 52,  108 => 51,  105 => 50,  88 => 49,  85 => 48,  82 => 47,  79 => 45,  77 => 44,  74 => 43,  69 => 41,  64 => 40,  58 => 38,  56 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/timeline.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/timeline.html.twig");
    }
}
