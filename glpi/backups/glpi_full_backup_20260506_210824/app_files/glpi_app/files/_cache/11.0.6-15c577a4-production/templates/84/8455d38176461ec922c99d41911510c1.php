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

/* components/itilobject/linked_itilobjects.html.twig */
class __TwigTemplate_0f39f946e40ccac7888fb39ef280a12e extends Template
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
<input type=\"hidden\" name=\"_link[itemtype_1]\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 33), "html", null, true);
        yield "\" />
<input type=\"hidden\" name=\"_link[items_id_1]\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 34)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null), "html", null, true);
        yield "\" />

";
        // line 36
        $context["linked_itilobjects"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ([]) : ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("CommonITILObject_CommonITILObject::getAllLinkedTo", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 36), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getId", [], "method", false, false, false, 36)])));
        // line 37
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["linked_itilobjects"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "   <div class=\"card\">
      <div class=\"list-group list-group-flush list-group-hoverable\">
         ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["linked_itilobjects"] ?? null));
            foreach ($context['_seq'] as $context["id"] => $context["linked"]) {
                // line 41
                yield "            ";
                $context["new_itilobject"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem((($_v1 = $context["linked"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["itemtype"] ?? null) : null), (($_v2 = $context["linked"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["items_id"] ?? null) : null));
                // line 42
                yield "            ";
                $context["can_view_item"] = CoreExtension::getAttribute($this->env, $this->source, ($context["new_itilobject"] ?? null), "can", [(($_v3 = $context["linked"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["items_id"] ?? null) : null), Twig\Extension\CoreExtension::constant("READ")], "method", false, false, false, 42);
                // line 43
                yield "            ";
                $context["can_delete_relation"] = CoreExtension::getAttribute($this->env, $this->source, ($context["new_itilobject"] ?? null), "can", [(($_v4 = $context["linked"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["items_id"] ?? null) : null), Twig\Extension\CoreExtension::constant("DELETE")], "method", false, false, false, 43);
                // line 44
                yield "            <div class=\"list-group-item\">
               <div class=\"row\">
                  <div class=\"col-auto\">
                     ";
                // line 47
                yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("CommonITILObject_CommonITILObject::getLinkName", [(($_v5 =                 // line 48
$context["linked"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["link"] ?? null) : null), (((($_v6 =                 // line 49
$context["linked"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["itemtype_2"] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 49)) && ((($_v7 = $context["linked"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["items_id_2"] ?? null) : null) == (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 49)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["id"] ?? null) : null))), true]);
                // line 51
                yield "
                  </div>
                  <div class=\"col text-truncate\">
                     ";
                // line 54
                if ((($tmp = ($context["can_view_item"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 55
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath((($_v9 = $context["linked"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["itemtype"] ?? null) : null), (($_v10 = $context["linked"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["items_id"] ?? null) : null)), "html", null, true);
                    yield "\" class=\"col-9 overflow-hidden text-nowrap\">
                           <i class=\"";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon((($_v11 = $context["linked"]) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["itemtype"] ?? null) : null)), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($_v12 = $context["linked"]) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["itemtype"] ?? null) : null)), "html", null, true);
                    yield "\" data-bs-toggle=\"tooltip\"></i>
                           ";
                    // line 57
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["new_itilobject"] ?? null), "getStatusIcon", [(($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["new_itilobject"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["status"] ?? null) : null)], "method", false, false, false, 57);
                    yield "
                           <span title=\"";
                    // line 58
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["new_itilobject"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["name"] ?? null) : null), "html", null, true);
                    yield "\" data-bs-toggle=\"tooltip\">
                              ";
                    // line 59
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v15 = CoreExtension::getAttribute($this->env, $this->source, ($context["new_itilobject"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["name"] ?? null) : null), "html", null, true);
                    yield "
                           </span>
                           (";
                    // line 61
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v16 = CoreExtension::getAttribute($this->env, $this->source, ($context["new_itilobject"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["id"] ?? null) : null), "html", null, true);
                    yield ")
                        </a>
                     ";
                } else {
                    // line 64
                    yield "                        <span class=\"col-9 overflow-hidden text-nowrap text-muted\">
                           <i class=\"";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon((($_v17 = $context["linked"]) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["itemtype"] ?? null) : null)), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($_v18 = $context["linked"]) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["itemtype"] ?? null) : null)), "html", null, true);
                    yield "\" data-bs-toggle=\"tooltip\"></i>
                           <span title=\"";
                    // line 66
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v19 = CoreExtension::getAttribute($this->env, $this->source, ($context["new_itilobject"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["name"] ?? null) : null), "html", null, true);
                    yield "\" data-bs-toggle=\"tooltip\">
                              ";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v20 = CoreExtension::getAttribute($this->env, $this->source, ($context["new_itilobject"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["name"] ?? null) : null), "html", null, true);
                    yield "
                           </span>
                           (";
                    // line 69
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v21 = CoreExtension::getAttribute($this->env, $this->source, ($context["new_itilobject"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["id"] ?? null) : null), "html", null, true);
                    yield ")
                        </span>
                     ";
                }
                // line 72
                yield "                  </div>

                  ";
                // line 74
                if ((($tmp = ($context["can_delete_relation"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 75
                    yield "                     <div class=\"col-auto\">
                        <button type=\"submit\"
                                form=\"linked_itilobjects_";
                    // line 77
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["main_rand"] ?? null), "html", null, true);
                    yield "\"
                                name=\"id\"
                                value=\"";
                    // line 79
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
                    yield "\"
                                class=\"btn btn-sm btn-ghost-danger\"
                                title=\"";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Unlink"), "html", null, true);
                    yield "\"
                                data-bs-toggle=\"tooltip\">
                           <i class=\"ti ti-unlink\"></i>
                        </button>
                     </div>
                  ";
                }
                // line 87
                yield "               </div>
            </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['id'], $context['linked'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "      </div>
   </div>
";
        }
        // line 93
        yield "
";
        // line 94
        if ((($context["canupdate"] ?? null) &&  !(((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "template_preview", [], "array", true, true, false, 94) &&  !(null === (($_v22 = ($context["params"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["template_preview"] ?? null) : null)))) ? ((($_v23 = ($context["params"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["template_preview"] ?? null) : null)) : (false)))) {
            // line 95
            yield "   ";
            $context["has_pending_link"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 95), "items_id_2", [], "array", true, true, false, 95) &&  !(null === (($_v24 = (($_v25 = ($context["params"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["_link"] ?? null) : null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["items_id_2"] ?? null) : null)))) ? ((($_v26 = (($_v27 = ($context["params"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["_link"] ?? null) : null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["items_id_2"] ?? null) : null)) : (""))) > 0);
            // line 96
            yield "
   ";
            // line 98
            yield "   ";
            $context["used_items"] = [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 98) => [(($_v28 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["id"] ?? null) : null)]];
            // line 99
            yield "   ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["linked_itilobjects"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["linked"]) {
                // line 100
                yield "      ";
                $context["linked_type"] = (($_v29 = $context["linked"]) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["itemtype"] ?? null) : null);
                // line 101
                yield "      ";
                $context["linked_id"] = (($_v30 = $context["linked"]) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["items_id"] ?? null) : null);
                // line 102
                yield "      ";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["used_items"] ?? null), ($context["linked_type"] ?? null), [], "array", true, true, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 103
                    yield "         ";
                    $context["used_items"] = Twig\Extension\CoreExtension::merge(($context["used_items"] ?? null), [ (string)($context["linked_type"] ?? null) => []]);
                    // line 104
                    yield "      ";
                }
                // line 105
                yield "      ";
                $context["used_items"] = Twig\Extension\CoreExtension::merge(($context["used_items"] ?? null), [ (string)($context["linked_type"] ?? null) => Twig\Extension\CoreExtension::merge((($_v31 = ($context["used_items"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[($context["linked_type"] ?? null)] ?? null) : null), [($context["linked_id"] ?? null)])]);
                // line 106
                yield "   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['linked'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            yield "
   <div class=\"mt-2\">
      <button class=\"btn btn-sm btn-ghost-secondary ";
            // line 109
            yield (((($tmp = ($context["has_pending_link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "\" type=\"button\"
              data-bs-toggle=\"collapse\" data-bs-target=\"#link_itilobject_dropdowns\"
              aria-expanded=\"false\" aria-controls=\"link_itilobject_dropdowns\" onclick=\"\$(this).hide();\">
         <i class=\"ti ti-plus\"></i>
         <span>";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "</span>
      </button>

      <span class=\"collapse ";
            // line 116
            yield (((($tmp = ($context["has_pending_link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\" id=\"link_itilobject_dropdowns\">
         ";
            // line 117
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("CommonITILObject_CommonITILObject::dropdownLinks", ["_link[link]", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 119
($context["params"] ?? null), "_link", [], "array", false, true, false, 119), "link", [], "array", true, true, false, 119) &&  !(null === (($_v32 = (($_v33 = ($context["params"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["_link"] ?? null) : null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["link"] ?? null) : null)))) ? ((($_v34 = (($_v35 = ($context["params"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["_link"] ?? null) : null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["link"] ?? null) : null)) : (""))]);
            // line 121
            yield "         ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showSelectItemFromItemtypes", [["items_id_name" => "_link[items_id_2]", "itemtype_name" => "_link[itemtype_2]", "itemtypes" => ["Ticket", "Change", "Problem"], "checkright" => true, "used" =>             // line 126
($context["used_items"] ?? null), "default_itemtype" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 127
($context["params"] ?? null), "_link", [], "array", false, true, false, 127), "itemtype_2", [], "array", true, true, false, 127) &&  !(null === (($_v36 = (($_v37 = ($context["params"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["_link"] ?? null) : null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["itemtype_2"] ?? null) : null)))) ? ((($_v38 = (($_v39 = ($context["params"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39["_link"] ?? null) : null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["itemtype_2"] ?? null) : null)) : ("")), "default_items_id" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 128
($context["params"] ?? null), "_link", [], "array", false, true, false, 128), "items_id_2", [], "array", true, true, false, 128) &&  !(null === (($_v40 = (($_v41 = ($context["params"] ?? null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41["_link"] ?? null) : null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["items_id_2"] ?? null) : null)))) ? ((($_v42 = (($_v43 = ($context["params"] ?? null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["_link"] ?? null) : null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42["items_id_2"] ?? null) : null)) : (""))]]);
            // line 130
            yield "      </span>
   </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/linked_itilobjects.html.twig";
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
        return array (  260 => 130,  258 => 128,  257 => 127,  256 => 126,  254 => 121,  252 => 119,  251 => 117,  247 => 116,  241 => 113,  234 => 109,  230 => 107,  224 => 106,  221 => 105,  218 => 104,  215 => 103,  212 => 102,  209 => 101,  206 => 100,  201 => 99,  198 => 98,  195 => 96,  192 => 95,  190 => 94,  187 => 93,  182 => 90,  174 => 87,  165 => 81,  160 => 79,  155 => 77,  151 => 75,  149 => 74,  145 => 72,  139 => 69,  134 => 67,  130 => 66,  124 => 65,  121 => 64,  115 => 61,  110 => 59,  106 => 58,  102 => 57,  96 => 56,  91 => 55,  89 => 54,  84 => 51,  82 => 49,  81 => 48,  80 => 47,  75 => 44,  72 => 43,  69 => 42,  66 => 41,  62 => 40,  58 => 38,  56 => 37,  54 => 36,  49 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/linked_itilobjects.html.twig", "/var/www/html/glpi/templates/components/itilobject/linked_itilobjects.html.twig");
    }
}
