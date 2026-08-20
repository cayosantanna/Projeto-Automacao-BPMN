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

/* components/itilobject/actors/main.html.twig */
class __TwigTemplate_2b3ca0f52f2bb8b7f2a6b0138ee69c83 extends Template
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
        if ((($tmp =  !array_key_exists("display_actortypes", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "   ";
            $context["display_actortypes"] = ["requester", "observer", "assign"];
        }
        // line 38
        if ((($tmp =  !array_key_exists("display_labels", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "   ";
            $context["display_labels"] = true;
        }
        // line 41
        yield "
";
        // line 42
        $context["actor_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["is_horizontal" => false, "add_field_class" => (((($tmp =         // line 44
($context["is_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("col-sm-4") : (""))]);
        // line 46
        $context["can_admin"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canAdminActors", [], "method", false, false, false, 46);
        // line 47
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "   ";
            $context["can_admin"] = true;
        }
        // line 50
        yield "
";
        // line 52
        $context["allow_auto_submit"] = (((array_key_exists("allow_auto_submit", $context) &&  !(null === $context["allow_auto_submit"]))) ? ($context["allow_auto_submit"]) : (true));
        // line 54
        yield "
";
        // line 56
        yield "
";
        // line 57
        if ((CoreExtension::inFilter("requester", ($context["display_actortypes"] ?? null)) && ( !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_users_id_requester"], "method", false, false, false, 57) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_groups_id_requester"], "method", false, false, false, 57)))) {
            // line 58
            yield "   ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 59
            yield "   ";
            $context["requester_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 60
                yield "      ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/field.html.twig", ["rand" =>                 // line 61
($context["rand"] ?? null), "item" =>                 // line 62
($context["item"] ?? null), "actortypeint" => Twig\Extension\CoreExtension::constant("CommonITILActor::REQUESTER"), "actortype" => "requester", "entities_id" =>                 // line 65
($context["entities_id"] ?? null), "itiltemplate" =>                 // line 66
($context["itiltemplate"] ?? null), "params" =>                 // line 67
($context["params"] ?? null), "canupdate" =>                 // line 68
($context["canupdate"] ?? null), "cancreateuser" => ((                // line 69
array_key_exists("cancreateuser", $context)) ? (Twig\Extension\CoreExtension::default(($context["cancreateuser"] ?? null), false)) : (false)), "canassigntome" => (((                // line 70
array_key_exists("canassigntome", $context) &&  !(null === $context["canassigntome"]))) ? ($context["canassigntome"]) : (false)), "main_rand" =>                 // line 71
($context["main_rand"] ?? null), "allow_auto_submit" =>                 // line 72
($context["allow_auto_submit"] ?? null)], false);
                // line 73
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 75
            yield "   ";
            if ((($tmp = ($context["display_labels"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 76
                yield "      ";
                yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 76, $this->getSourceContext())->macro_field(...["requester",                 // line 78
($context["requester_field"] ?? null), _n("Requester", "Requesters", 1), Twig\Extension\CoreExtension::merge(                // line 80
($context["actor_options"] ?? null), ["required" => (CoreExtension::getAttribute($this->env, $this->source,                 // line 81
($context["itiltemplate"] ?? null), "isMandatoryField", ["_users_id_requester"], "method", false, false, false, 81) || CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_groups_id_requester"], "method", false, false, false, 81)), "id" => ("actor_" .                 // line 82
($context["rand"] ?? null))])]);
                // line 84
                yield "
   ";
            } else {
                // line 86
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["requester_field"] ?? null), "html", null, true);
                yield "
   ";
            }
        }
        // line 89
        yield "
";
        // line 90
        if ((CoreExtension::inFilter("observer", ($context["display_actortypes"] ?? null)) && ( !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_users_id_observer"], "method", false, false, false, 90) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_groups_id_observer"], "method", false, false, false, 90)))) {
            // line 91
            yield "   ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 92
            yield "   ";
            $context["observer_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 93
                yield "      ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/field.html.twig", ["rand" =>                 // line 94
($context["rand"] ?? null), "item" =>                 // line 95
($context["item"] ?? null), "actortypeint" => Twig\Extension\CoreExtension::constant("CommonITILActor::OBSERVER"), "actortype" => "observer", "entities_id" =>                 // line 98
($context["entities_id"] ?? null), "itiltemplate" =>                 // line 99
($context["itiltemplate"] ?? null), "params" =>                 // line 100
($context["params"] ?? null), "canupdate" =>                 // line 101
($context["canupdate"] ?? null), "cancreateuser" => ((                // line 102
array_key_exists("cancreateuser", $context)) ? (Twig\Extension\CoreExtension::default(($context["cancreateuser"] ?? null), false)) : (false)), "canassigntome" => (((                // line 103
array_key_exists("canassigntome", $context) &&  !(null === $context["canassigntome"]))) ? ($context["canassigntome"]) : (false)), "main_rand" =>                 // line 104
($context["main_rand"] ?? null), "allow_auto_submit" =>                 // line 105
($context["allow_auto_submit"] ?? null)], false);
                // line 106
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 108
            yield "   ";
            if ((($tmp = ($context["display_labels"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 109
                yield "      ";
                yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 109, $this->getSourceContext())->macro_field(...["observer",                 // line 111
($context["observer_field"] ?? null), _n("Observer", "Observers", 1), Twig\Extension\CoreExtension::merge(                // line 113
($context["actor_options"] ?? null), ["required" => (CoreExtension::getAttribute($this->env, $this->source,                 // line 114
($context["itiltemplate"] ?? null), "isMandatoryField", ["_users_id_observer"], "method", false, false, false, 114) || CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_groups_id_observer"], "method", false, false, false, 114)), "id" => ("actor_" .                 // line 115
($context["rand"] ?? null))])]);
                // line 117
                yield "
   ";
            } else {
                // line 119
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["observer_field"] ?? null), "html", null, true);
                yield "
   ";
            }
        }
        // line 122
        yield "
";
        // line 123
        if ((CoreExtension::inFilter("assign", ($context["display_actortypes"] ?? null)) && (( !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_users_id_assign"], "method", false, false, false, 123) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_groups_id_assign"], "method", false, false, false, 123)) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_supplier_id_assign"], "method", false, false, false, 123)))) {
            // line 124
            yield "   ";
            $context["assign_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 125
                yield "      ";
                $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
                // line 126
                yield "      ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/field.html.twig", ["rand" =>                 // line 127
($context["rand"] ?? null), "item" =>                 // line 128
($context["item"] ?? null), "actortypeint" => Twig\Extension\CoreExtension::constant("CommonITILActor::ASSIGN"), "actortype" => "assign", "users_right" => "own_ticket", "entities_id" =>                 // line 132
($context["entities_id"] ?? null), "itiltemplate" =>                 // line 133
($context["itiltemplate"] ?? null), "params" =>                 // line 134
($context["params"] ?? null), "canupdate" =>                 // line 135
($context["canassign"] ?? null), "canassigntome" => (((                // line 136
array_key_exists("canassigntome", $context) &&  !(null === $context["canassigntome"]))) ? ($context["canassigntome"]) : (false)), "main_rand" =>                 // line 137
($context["main_rand"] ?? null), "allow_auto_submit" =>                 // line 138
($context["allow_auto_submit"] ?? null)], false);
                // line 139
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 141
            yield "   ";
            if ((($tmp = ($context["display_labels"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 142
                yield "      ";
                yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 142, $this->getSourceContext())->macro_field(...["assign",                 // line 144
($context["assign_field"] ?? null), __("Assigned to"), Twig\Extension\CoreExtension::merge(                // line 146
($context["actor_options"] ?? null), ["required" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 147
($context["itiltemplate"] ?? null), "isMandatoryField", ["_users_id_assign"], "method", false, false, false, 147) || CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_groups_id_assign"], "method", false, false, false, 147)) || CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_supplier_id_assign"], "method", false, false, false, 147)), "id" => ("actor_" .                 // line 148
($context["rand"] ?? null))])]);
                // line 150
                yield "
   ";
            } else {
                // line 152
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_field"] ?? null), "html", null, true);
                yield "
   ";
            }
        }
        // line 155
        yield "
<input type=\"hidden\" name=\"_actors\" id=\"_actors\" />

";
        // line 159
        yield "<div class=\"modal fade\" id=\"editActorNotifySettings\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
         <h5 class=\"modal-title\">
            <i class=\"ti ti-mail\"></i>
            &nbsp;";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit notification settings"), "html", null, true);
        yield "
         </h5>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
         <div class=\"mb-3\">
            <label class=\"form-label\" for=\"actorname\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actor"), "html", null, true);
        yield "</label>
            <input type=\"text\" class=\"form-control\" id=\"actorname\" name=\"_notifications_actorname\" />
            <input type=\"hidden\" name=\"_notifications_actortype\" value=\"\" />
            <input type=\"hidden\" name=\"_notifications_actorindex\" value=\"\" />
         </div>
         <div class=\"mb-3\">
            <label for=\"alternative_email\" class=\"form-label\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email address"), "html", null, true);
        yield "</label>
            <div class=\"form-check form-switch\">
               <input class=\"form-check-input\" type=\"checkbox\" id=\"use_notification\" name=\"_notifications_use_notification\" />
               <label class=\"form-check-label\" for=\"use_notification\">";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email followup"), "html", null, true);
        yield "</label>
            </div>
            <div id=\"alert_notification_disable\" class='alert alert-info d-flex align-items-center mb-4 d-none' role='alert'>
               <i class='ti ti-info-circle fs-2x'></i>
               <span class='ms-2'>
                  ";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notifications are disabled because:"), "html", null, true);
        yield "
                  <ul>
                     <li>";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("User does not have an email address."), "html", null, true);
        yield "</li>
                     <li>";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("User has disabled notifications from its preferences."), "html", null, true);
        yield "</li>
                     <li>";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notifications are disabled in this entity."), "html", null, true);
        yield "</li>
                  </ul>
                  ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("However, you can reactivate the notifications for this ticket."), "html", null, true);
        yield "
               </span>
            </div>
            <input type=\"email\" class=\"form-control\" id=\"alternative_email\" name=\"_notifications_alternative_email\" />
         </div>
      </div>
      <div class=\"modal-footer\">
         <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
            <i class=\"ti ti-x\"></i>
            <span>";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "</span>
         </button>
         <button type=\"button\" class=\"btn btn-primary\" id=\"saveActorNotifySettings\">
            <i class=\"ti ti-device-floppy\"></i>
            <span>";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "html", null, true);
        yield "</span>
         </button>
      </div>
    </div>
  </div>
</div>

";
        // line 211
        $context["actortypes"] = ["requester" => Twig\Extension\CoreExtension::constant("CommonITILActor::REQUESTER"), "observer" => Twig\Extension\CoreExtension::constant("CommonITILActor::OBSERVER"), "assign" => Twig\Extension\CoreExtension::constant("CommonITILActor::ASSIGN")];
        // line 216
        yield "
<script type=\"text/javascript\">
   /* global bootstrap */
   var editActorNotifySettings_modal = null;
   \$(function () {
      editActorNotifySettings_modal = new bootstrap.Modal(document.getElementById('editActorNotifySettings'), {});
   });

   var actors = {
      ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["actortypes"] ?? null));
        foreach ($context['_seq'] as $context["actortype"] => $context["actortypeint"]) {
            // line 226
            yield "         ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["actortype"], "html", null, true);
            yield ": [
            ";
            // line 227
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getActorsForType", [$context["actortypeint"], ($context["params"] ?? null)], "method", false, false, false, 227));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 228
                yield "            {
               itemtype: \"";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = $context["actor"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["itemtype"] ?? null) : null), "js"), "html", null, true);
                yield "\",
               items_id: \"";
                // line 230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = $context["actor"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["items_id"] ?? null) : null), "js"), "html", null, true);
                yield "\",
               use_notification: ";
                // line 231
                yield (((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "use_notification", [], "array", true, true, false, 231) &&  !(null === (($_v2 = $context["actor"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["use_notification"] ?? null) : null)))) ? ((($_v3 = $context["actor"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["use_notification"] ?? null) : null)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
                yield ",
               alternative_email: \"";
                // line 232
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "alternative_email", [], "array", true, true, false, 232) &&  !(null === (($_v4 = $context["actor"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["alternative_email"] ?? null) : null)))) ? ((($_v5 = $context["actor"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["alternative_email"] ?? null) : null)) : ("")), "js"), "html", null, true);
                yield "\",
               default_email: \"";
                // line 233
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "default_email", [], "array", true, true, false, 233) &&  !(null === (($_v6 = $context["actor"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["default_email"] ?? null) : null)))) ? ((($_v7 = $context["actor"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["default_email"] ?? null) : null)) : ("")), "js"), "html", null, true);
                yield "\",
            },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['actor'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            yield "         ],
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['actortype'], $context['actortypeint'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        yield "   };

   // edit email preference when .edit-notify-user button is activated
   function openNotifyModal(event) {
      event.stopPropagation();

      var element = \$(event.target).closest('.actor_entry');
      var itemtype  = element.data('itemtype');
      var items_id  = element.data('items-id');
      var actortype = element.data('actortype');
      var text      = element.find('.actor_text').text().trim();

      actorIndex = actors[actortype].findIndex(element =>
         element.itemtype == itemtype &&
         (items_id === 0 ? element.alternative_email == text : element.items_id == items_id)
      );
      var actor = actors[actortype][actorIndex];

      var modal = \$('#editActorNotifySettings');
      modal.find(\"input[name=_notifications_actortype]\").val(actortype);
      modal.find(\"input[name=_notifications_actorindex]\").val(actorIndex);
      modal.find(\"input[name=_notifications_actorname]\").removeAttr('readonly').val(text).attr('readonly', 'true');
      modal.find(\"input[name=_notifications_use_notification]\").prop('checked', parseInt(actor.use_notification));
      modal.find(\"input[name=_notifications_alternative_email]\").attr('placeholder', actor.default_email);
      modal.find(\"input[name=_notifications_alternative_email]\").val(actor.alternative_email);
      modal.find(\"#alert_notification_disable\").toggleClass('d-none', parseInt(actor.use_notification) == true);

      editActorNotifySettings_modal.show();
   }

   // save edited actor when clicking on save button
   \$(document).on('click', '#saveActorNotifySettings', function(event) {
      saveNotificationSettings();
   });

   // prevent submit on enter key in modal (but save notification settings)
   \$(document).on('keyup keypress', '#editActorNotifySettings input', function(event) {
      var keyCode = event.keyCode || event.which;
      if (keyCode === 13) {
         event.preventDefault();
         saveNotificationSettings();
         return false;
      }
   });

   // save settings from modal (get modal data, and serialize them into input hidden)
   function saveNotificationSettings() {
      var modal = \$('#editActorNotifySettings');
      var actortype  = modal.find(\"input[name=_notifications_actortype]\").val();
      var actorIndex = modal.find(\"input[name=_notifications_actorindex]\").val();
      var use_notif  = (modal.find(\"input[name=_notifications_use_notification]\").is(\":checked\") ? 1 : 0);
      var alt_email  = modal.find(\"input[name=_notifications_alternative_email]\").val();

      var actor = actors[actortype][actorIndex];
      actor.use_notification = use_notif;
      actor.alternative_email = alt_email;

      // update notif setting icon for actor
      var fa_class = \"far\";
      if (use_notif) {
         fa_class = \"fas\";
      }

      var actor_entry = \$('.actor_entry[data-itemtype='+CSS.escape(actor.itemtype)+'][data-items-id='+parseInt(actor.items_id)+'][data-actortype='+CSS.escape(actortype)+']')
         .filter(function() {
            if(actor.items_id == 0 && actor.itemtype == \"User\") {
               return \$(this).text().trim() === actor.alternative_email;
            }
            return \$(this).text()
         });

      // toggle notify icon
      actor_entry.find('.notify-icon')
         .removeClass('fas far')
         .addClass(fa_class);

      // toggle text for direct email
      if (actor.itemtype == \"User\" && parseInt(actor.items_id) == 0) {
         actor_entry.find('.actor_text').html(alt_email);
      }


      editActorNotifySettings_modal.hide();
      saveActorsToDom();
   }

   // save actors object to dom
   function saveActorsToDom() {
      \$('#_actors').val(JSON.stringify(actors));
   }
   saveActorsToDom();
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/actors/main.html.twig";
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
        return array (  389 => 238,  382 => 236,  373 => 233,  369 => 232,  365 => 231,  361 => 230,  357 => 229,  354 => 228,  350 => 227,  345 => 226,  341 => 225,  330 => 216,  328 => 211,  318 => 204,  311 => 200,  299 => 191,  294 => 189,  290 => 188,  286 => 187,  281 => 185,  273 => 180,  267 => 177,  258 => 171,  251 => 167,  246 => 165,  238 => 159,  233 => 155,  226 => 152,  222 => 150,  220 => 148,  219 => 147,  218 => 146,  217 => 144,  215 => 142,  212 => 141,  207 => 139,  205 => 138,  204 => 137,  203 => 136,  202 => 135,  201 => 134,  200 => 133,  199 => 132,  198 => 128,  197 => 127,  195 => 126,  192 => 125,  189 => 124,  187 => 123,  184 => 122,  177 => 119,  173 => 117,  171 => 115,  170 => 114,  169 => 113,  168 => 111,  166 => 109,  163 => 108,  158 => 106,  156 => 105,  155 => 104,  154 => 103,  153 => 102,  152 => 101,  151 => 100,  150 => 99,  149 => 98,  148 => 95,  147 => 94,  145 => 93,  142 => 92,  139 => 91,  137 => 90,  134 => 89,  127 => 86,  123 => 84,  121 => 82,  120 => 81,  119 => 80,  118 => 78,  116 => 76,  113 => 75,  108 => 73,  106 => 72,  105 => 71,  104 => 70,  103 => 69,  102 => 68,  101 => 67,  100 => 66,  99 => 65,  98 => 62,  97 => 61,  95 => 60,  92 => 59,  89 => 58,  87 => 57,  84 => 56,  81 => 54,  79 => 52,  76 => 50,  72 => 48,  70 => 47,  68 => 46,  66 => 44,  65 => 42,  62 => 41,  58 => 39,  56 => 38,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/actors/main.html.twig", "/var/www/html/glpi/templates/components/itilobject/actors/main.html.twig");
    }
}
