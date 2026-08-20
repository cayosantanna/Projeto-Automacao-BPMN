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

/* components/form/header_content.html.twig */
class __TwigTemplate_04fb3b3bbf617ebe930cbdf724d305b3 extends Template
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
        $context["canedit"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 33) &&  !(null === (($_v0 = ($context["params"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["canedit"] ?? null) : null)))) ? ((($_v1 = ($context["params"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["canedit"] ?? null) : null)) : (true));
        // line 34
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 34) &&  !(null === (($_v2 = ($context["params"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["withtemplate"] ?? null) : null)))) ? ((($_v3 = ($context["params"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["withtemplate"] ?? null) : null)) : (""));
        // line 35
        $context["rand"] = ((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset())));
        // line 36
        $context["nametype"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formtitle", [], "array", true, true, false, 36) &&  !(null === (($_v4 = ($context["params"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["formtitle"] ?? null) : null)))) ? ((($_v5 = ($context["params"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["formtitle"] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 36)));
        // line 37
        $context["friendlyname"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "friendlyname", [], "array", true, true, false, 37) &&  !(null === (($_v6 = ($context["params"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["friendlyname"] ?? null) : null)))) ? ((($_v7 = ($context["params"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["friendlyname"] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getHeaderName", [], "method", false, false, false, 37)));
        // line 38
        $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 38), "id", [], "array", true, true, false, 38) &&  !(null === (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["id"] ?? null) : null)))) ? ((($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["id"] ?? null) : null)) : ( -1));
        // line 39
        $context["in_navheader"] = ((array_key_exists("in_navheader", $context)) ? (Twig\Extension\CoreExtension::default(($context["in_navheader"] ?? null), false)) : (false));
        // line 40
        $context["header_toolbar"] = ((array_key_exists("header_toolbar", $context)) ? (Twig\Extension\CoreExtension::default(($context["header_toolbar"] ?? null), [])) : ([]));
        // line 41
        $context["entity_name"] = ((array_key_exists("entity_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["entity_name"] ?? null), "")) : (""));
        // line 42
        yield "
";
        // line 43
        if ((($tmp =  !array_key_exists("entity_id", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 44) == "Entity")) {
                // line 45
                yield "        ";
                $context["entity_id"] = ((((($_v10 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["id"] ?? null) : null) == 0)) ? (null) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 45) &&  !(null === (($_v11 = ($context["params"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["entities_id"] ?? null) : null)))) ? ((($_v12 = ($context["params"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["entities_id"] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 45), "entities_id", [], "array", true, true, false, 45) &&  !(null === (($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["entities_id"] ?? null) : null)))) ? ((($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["entities_id"] ?? null) : null)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))))));
                // line 46
                yield "    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 47
                yield "        ";
                $context["entity_id"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 47) &&  !(null === (($_v15 = ($context["params"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["entities_id"] ?? null) : null)))) ? ((($_v16 = ($context["params"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["entities_id"] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", true, true, false, 47) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 47)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 47)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))));
                // line 48
                yield "    ";
            } else {
                // line 49
                yield "        ";
                $context["entity_id"] = 0;
                // line 50
                yield "    ";
            }
            // line 51
            yield "    ";
            if ((($tmp = Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "        ";
                $context["entity_name"] = (((($tmp =  !(null === ($context["entity_id"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", ($context["entity_id"] ?? null))) : (null));
                // line 53
                yield "    ";
            }
        }
        // line 55
        yield "
";
        // line 56
        if (((($context["withtemplate"] ?? null) == 2) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 56))) {
            // line 57
            yield "   ";
            $context["template_name"] = (($_v17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["template_name"] ?? null) : null);
            // line 58
            yield "   <input type=\"hidden\" name=\"template_name\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["template_name"] ?? null), "html", null, true);
            yield "\" />
   ";
            // line 59
            $context["nametype"] = Twig\Extension\CoreExtension::sprintf(__("Created from the template %s"), ($context["template_name"] ?? null));
        } elseif ((        // line 60
($context["withtemplate"] ?? null) == 1)) {
            // line 61
            yield "   ";
            $context["template_name"] = (($_v18 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["template_name"] ?? null) : null);
            // line 62
            yield "   <input type=\"hidden\" name=\"is_template\" value=\"1\" />
";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 63
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "   ";
            $context["nametype"] = Twig\Extension\CoreExtension::sprintf(__("%1\$s - %2\$s"), __("New item"), ($context["nametype"] ?? null));
        }
        // line 66
        yield "
";
        // line 67
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [(($_v19 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["id"] ?? null) : null)], "method", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "   <form name=\"massaction_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" id=\"massaction_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" method=\"post\"
         action=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
            yield "?_single_item[itemtype]=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 69), "html", null, true);
            yield "&_single_item[id]=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 69), "html", null, true);
            yield "\" data-submit-once>
      <div id=\"massive_container_";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"></div>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
   </form>
";
        }
        // line 74
        yield "
<div id=\"header_";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
     class=\"card-header main-header d-flex flex-wrap flex-md-nowrap me-2 mt-n2 align-items-stretch ";
        // line 76
        if ((($tmp = ($context["in_navheader"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " align-self-end ";
        }
        yield " flex-grow-1\" style=\"min-width: 100px;\">
   ";
        // line 77
        if (((($context["withtemplate"] ?? null) == 1) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 77))) {
            // line 78
            yield "      <input type=\"text\" class=\"form-control ms-4 mb-2\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Template name"), "html", null, true);
            yield "\"
             name=\"template_name\" id=\"textfield_template_name";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"
             value=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["template_name"] ?? null), "html", null, true);
            yield "\" />
   ";
        }
        // line 82
        yield "   <h3 class=\"card-title d-flex align-items-center ps-0 ";
        yield (((($tmp = ($context["in_navheader"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ps-sm-5") : ("ps-sm-4"));
        yield "\">
      ";
        // line 83
        $context["icon"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getIcon", [], "method", false, false, false, 83);
        // line 84
        yield "      ";
        if (( !($context["in_navheader"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null)) > 0))) {
            // line 85
            yield "         <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
            <i class=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
            yield " fa-2x\"></i>
         </div>
      ";
        }
        // line 89
        yield "      <span ";
        if ((($tmp = ($context["in_navheader"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " class=\"status rounded-1 me-1\" ";
        }
        yield ">
         ";
        // line 90
        if ((($tmp = ($context["in_navheader"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "            <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
            yield "\"></i>
         ";
        }
        // line 93
        yield "         ";
        if (((($context["withtemplate"] ?? null) == 1) && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 93) > 0))) {
            // line 94
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Template", "Templates", 1), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nametype"] ?? null), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["template_name"] ?? null), "html", null, true);
            yield "
         ";
        } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source,         // line 95
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nametype"] ?? null), "html", null, true);
            yield " - <span id=\"header-friendlyname\"> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["friendlyname"] ?? null), "html", null, true);
            yield " </span>
         ";
        } else {
            // line 98
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nametype"] ?? null), "html", null, true);
            yield "
         ";
        }
        // line 100
        yield "      </span>
      ";
        // line 101
        if (((($context["in_navheader"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_dynamic"], "method", false, false, false, 101)) && (($_v20 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 101)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["is_dynamic"] ?? null) : null))) {
            // line 102
            yield "      <span class=\"mx-1 status rounded-1\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Automatic Inventory"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
         <i class=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Agent::getIcon"), "html", null, true);
            yield "\"></i>
      </span>
      ";
        }
        // line 106
        yield "      ";
        if ((($context["in_navheader"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_deleted"], "method", false, false, false, 106))) {
            // line 107
            yield "      ";
            $context["title"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["date_mod"], "method", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::sprintf(__("Item has been deleted on %s"), (($_v21 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 107)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["date_mod"] ?? null) : null))) : (__("Deleted")));
            // line 108
            yield "      <span
         id=\"header-is-deleted\"
         class=\"mx-1 status rounded-1\"
         title=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\"
         data-bs-toggle=\"tooltip\"
      >
         <i class=\"ti ti-trash\"></i>
         ";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Deleted"), "html", null, true);
            yield "
      </span>
      ";
        }
        // line 118
        yield "
      ";
        // line 119
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["header_toolbar"] ?? null)) > 0)) {
            // line 120
            yield "         <div class=\"d-inline-block toolbar ms-2\">
            ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["header_toolbar"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["raw_element"]) {
                // line 122
                yield "               ";
                yield $context["raw_element"];
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['raw_element'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "         </div>
      ";
        }
        // line 126
        yield "   </h3>

   ";
        // line 128
        $context["single_actions_ms_auto"] = true;
        // line 129
        yield "   ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 129) && Session::isMultiEntitiesMode()) &&  !$this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "Entity"))) {
            // line 130
            yield "      ";
            $context["single_actions_ms_auto"] = false;
            // line 131
            yield "       <div class=\"badge entity-name mx-1 px-2 ms-auto align-items-center col\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_name"] ?? null), "html", null, true);
            yield "\" style=\"min-width: 100px; max-width: fit-content;\">
           <i class=\"ti ti-stack me-2\"></i>
           <div class=\"overflow-hidden text-truncate text-nowrap\">
               <span class=\"float-end ps-1\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_name"] ?? null), "html", null, true);
            yield "</span>
           </div>
       </div>

      ";
            // line 138
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maybeRecursive", [], "method", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 139
                yield "         <span class=\"badge is_recursive-toggle mx-1 px-2 align-items-center col-auto\">
            <label class=\"form-check d-flex align-items-center mb-0\">
               ";
                // line 141
                $context["disabled"] = (($context["canedit"] ?? null) == false);
                // line 142
                yield "               ";
                $context["comment"] = __("Change visibility in child entities.");
                // line 143
                yield "
               ";
                // line 144
                if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBChild")) {
                    // line 145
                    yield "                  ";
                    $context["comment"] = __("Can՛t change this attribute. It՛s inherited from its parent.");
                    // line 146
                    yield "                  ";
                    $context["disabled"] = true;
                    // line 147
                    yield "               ";
                } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canRecurs", [], "method", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 148
                    yield "                  ";
                    $context["comment"] = __("You are not allowed to change the visibility flag for child entities.");
                    // line 149
                    yield "                  ";
                    $context["disabled"] = true;
                    // line 150
                    yield "               ";
                } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canUnrecurs", [], "method", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 151
                    yield "                  ";
                    $context["comment"] = __("Flag change forbidden. Linked items found.");
                    // line 152
                    yield "                  ";
                    $context["disabled"] = true;
                    // line 153
                    yield "               ";
                }
                // line 154
                yield "
               ";
                // line 155
                if ((($tmp =  !($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<input form=\"main-form\" type=\"hidden\" name=\"is_recursive\" value=\"0\" />";
                }
                // line 156
                yield "               <input form=\"main-form\" class=\"form-check-input\" type=\"checkbox\" name=\"is_recursive\" value=\"1\"
                  ";
                // line 157
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "checked=\"checked\"";
                }
                // line 158
                yield "                  ";
                if ((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "disabled=\"disabled\"";
                }
                yield " />
               ";
                // line 159
                if ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBChild") && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 159)) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 159))) {
                    // line 160
                    yield "                  ";
                    // line 161
                    yield "                  <input form=\"main-form\" type=\"hidden\" name=\"is_recursive\" value=\"1\" />
               ";
                }
                // line 163
                yield "               <span class=\"form-check-label mb-0 mx-2\">
                  ";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Child entities"), "html", null, true);
                yield "
                  <i class=\"ti ti-info-circle ms-1\" title=\"";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["comment"] ?? null), "html", null, true);
                yield "\"></i>
               </span>
            </label>
         </span>
      ";
            }
            // line 170
            yield "   ";
        }
        // line 171
        yield "
   ";
        // line 172
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/single-action.html.twig");
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
        return "components/form/header_content.html.twig";
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
        return array (  433 => 172,  430 => 171,  427 => 170,  419 => 165,  415 => 164,  412 => 163,  408 => 161,  406 => 160,  404 => 159,  397 => 158,  393 => 157,  390 => 156,  386 => 155,  383 => 154,  380 => 153,  377 => 152,  374 => 151,  371 => 150,  368 => 149,  365 => 148,  362 => 147,  359 => 146,  356 => 145,  354 => 144,  351 => 143,  348 => 142,  346 => 141,  342 => 139,  340 => 138,  333 => 134,  326 => 131,  323 => 130,  320 => 129,  318 => 128,  314 => 126,  310 => 124,  301 => 122,  297 => 121,  294 => 120,  292 => 119,  289 => 118,  283 => 115,  276 => 111,  271 => 108,  268 => 107,  265 => 106,  259 => 103,  254 => 102,  252 => 101,  249 => 100,  243 => 98,  235 => 96,  233 => 95,  224 => 94,  221 => 93,  215 => 91,  213 => 90,  206 => 89,  200 => 86,  197 => 85,  194 => 84,  192 => 83,  187 => 82,  182 => 80,  178 => 79,  173 => 78,  171 => 77,  165 => 76,  161 => 75,  158 => 74,  152 => 71,  148 => 70,  140 => 69,  133 => 68,  131 => 67,  128 => 66,  124 => 64,  122 => 63,  119 => 62,  116 => 61,  114 => 60,  112 => 59,  107 => 58,  104 => 57,  102 => 56,  99 => 55,  95 => 53,  92 => 52,  89 => 51,  86 => 50,  83 => 49,  80 => 48,  77 => 47,  74 => 46,  71 => 45,  68 => 44,  66 => 43,  63 => 42,  61 => 41,  59 => 40,  57 => 39,  55 => 38,  53 => 37,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/header_content.html.twig", "/var/www/html/glpi/templates/components/form/header_content.html.twig");
    }
}
