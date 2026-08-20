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

/* components/search/table.html.twig */
class __TwigTemplate_f14b142da03e6f44222c94b89117d7cc extends Template
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
        $macros["alerts"] = $this->macros["alerts"] = $this->load("components/alerts_macros.html.twig", 33)->unwrap();
        // line 34
        $context["searchform_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "searchform_id", [], "array", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["data"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["searchform_id"] ?? null) : null), ("search_" . ($context["rand"] ?? null)))) : (("search_" . ($context["rand"] ?? null))));
        // line 35
        $context["massive_action_form_id"] = (((array_key_exists("massive_action_form_id", $context) &&  !(null === $context["massive_action_form_id"]))) ? ($context["massive_action_form_id"]) : (""));
        // line 36
        $context["is_trashbin"] = (($_v1 = (($_v2 = ($context["data"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["search"] ?? null) : null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["is_deleted"] ?? null) : null);
        // line 37
        yield "
<div class=\"table-responsive-lg\">
   <table
      class=\"search-results table card-table table-hover ";
        // line 40
        yield (((($tmp = ($context["is_trashbin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("table-danger deleted-results") : ("table-striped"));
        yield "\"
      data-testid=\"";
        // line 41
        yield (((($tmp = ($context["is_trashbin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("search-results-trashbin") : ("search-results"));
        yield "\"
      id=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["searchform_id"] ?? null), "html", null, true);
        yield "\"
   >
      <thead>
         <tr ";
        // line 45
        if ((($context["count"] ?? null) == 0)) {
            yield "style=\"display: none;\"";
        }
        yield ">
            ";
        // line 46
        if ((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "            <th style=\"width: 30px;\">
               <div>
                  <input class=\"form-check-input massive_action_checkbox\" type=\"checkbox\" id=\"checkall_";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"
                        value=\"\" aria-label=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Check all as"), "html", null, true);
            yield "\"
                        onclick=\"checkAsCheckboxes(this, '";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["searchform_id"] ?? null), "js"), "html", null, true);
            yield "', '.massive_action_checkbox');\"
                        form=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["massive_action_form_id"] ?? null), "html", null, true);
            yield "\" />
               </div>
            </th>
            ";
        }
        // line 56
        yield "
            ";
        // line 57
        $context["sorts"] = (($_v3 = (($_v4 = ($context["data"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["search"] ?? null) : null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["sort"] ?? null) : null);
        // line 58
        yield "            ";
        if ((($tmp = ($context["search_was_executed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v5 = (($_v6 = ($context["data"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["data"] ?? null) : null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["cols"] ?? null) : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 60
                yield "               ";
                // line 61
                yield "               ";
                $context["linkto"] = "";
                // line 62
                yield "               ";
                $context["so_no_sort"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["col"], "searchopt", [], "array", false, true, false, 62), "nosort", [], "array", true, true, false, 62) &&  !(null === (($_v7 = (($_v8 = $context["col"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["searchopt"] ?? null) : null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["nosort"] ?? null) : null)))) ? ((($_v9 = (($_v10 = $context["col"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["searchopt"] ?? null) : null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["nosort"] ?? null) : null)) : (false));
                // line 63
                yield "               ";
                $context["meta"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "meta", [], "array", true, true, false, 63) &&  !(null === (($_v11 = $context["col"]) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["meta"] ?? null) : null)))) ? ((($_v12 = $context["col"]) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["meta"] ?? null) : null)) : (false));
                // line 64
                yield "               ";
                $context["sort_order"] = "nosort";
                // line 65
                yield "               ";
                $context["sort_num"] = "";
                // line 66
                yield "               ";
                $context["can_sort"] = (( !($context["meta"] ?? null) &&  !($context["no_sort"] ?? null)) &&  !($context["so_no_sort"] ?? null));
                // line 67
                yield "               ";
                if ((($tmp = ($context["can_sort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 68
                    yield "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["sorts"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["sort_opt"]) {
                        // line 69
                        yield "                     ";
                        if (($context["sort_opt"] == (($_v13 = $context["col"]) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["id"] ?? null) : null))) {
                            // line 70
                            yield "                        ";
                            $context["sort_order"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 70), "order", [], "array", false, true, false, 70), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 70), [], "array", true, true, false, 70)) ? (Twig\Extension\CoreExtension::default((($_v14 = (($_v15 = (($_v16 = ($context["data"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["search"] ?? null) : null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["order"] ?? null) : null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 70)] ?? null) : null), "ASC")) : ("ASC"));
                            // line 71
                            yield "                        ";
                            $context["sort_num"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 71);
                            // line 72
                            yield "                     ";
                        }
                        // line 73
                        yield "                  ";
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
                    unset($context['_seq'], $context['_key'], $context['sort_opt'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    yield "               ";
                }
                // line 75
                yield "
               ";
                // line 76
                $context["col_name"] = (($_v17 = $context["col"]) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["name"] ?? null) : null);
                // line 77
                yield "               ";
                // line 78
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["col"], "groupname", [], "array", true, true, false, 78)) {
                    // line 79
                    yield "                  ";
                    $context["groupname"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["col"], "groupname", [], "array", false, true, false, 79), "name", [], "array", true, true, false, 79) &&  !(null === (($_v18 = (($_v19 = $context["col"]) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["groupname"] ?? null) : null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["name"] ?? null) : null)))) ? ((($_v20 = (($_v21 = $context["col"]) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["groupname"] ?? null) : null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["name"] ?? null) : null)) : ((($_v22 = $context["col"]) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["groupname"] ?? null) : null)));
                    // line 80
                    yield "                  ";
                    $context["col_name"] = Twig\Extension\CoreExtension::sprintf(__("%1\$s - %2\$s"), ($context["groupname"] ?? null), (($_v23 = $context["col"]) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["name"] ?? null) : null));
                    // line 81
                    yield "               ";
                }
                // line 82
                yield "
               ";
                // line 84
                yield "               ";
                if (( !($context["itemtype"] ?? null) == (($_v24 = $context["col"]) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["itemtype"] ?? null) : null))) {
                    // line 85
                    yield "                  ";
                    $context["col_name"] = Twig\Extension\CoreExtension::sprintf(__("%1\$s - %2\$s"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($_v25 = $context["col"]) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["itemtype"] ?? null) : null)), ($context["col_name"] ?? null));
                    // line 86
                    yield "               ";
                }
                // line 87
                yield "
               <th data-searchopt-id=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v26 = $context["col"]) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["id"] ?? null) : null), "html", null, true);
                yield "\" ";
                if ((($tmp =  !($context["can_sort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-nosort=\"true\"";
                }
                yield " data-sort-order=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sort_order"] ?? null), "html", null, true);
                yield "\"
                  ";
                // line 89
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["sort_num"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-sort-num=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["sort_num"] ?? null) - 1), "html", null, true);
                    yield "\"";
                }
                yield ">
                  ";
                // line 90
                $context["sort_icon"] = (((($context["sort_order"] ?? null) == "ASC")) ? ("ti ti-caret-down-filled") : ((((($context["sort_order"] ?? null) == "DESC")) ? ("ti ti-caret-up-filled") : (""))));
                // line 91
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["col_name"] ?? null), "html", null, true);
                yield "
                  ";
                // line 92
                if ((($tmp = ($context["can_sort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 93
                    yield "                     <span class=\"sort-indicator\"><i class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sort_icon"] ?? null), "html", null, true);
                    yield "\"></i><span class=\"sort-num\">";
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["sorts"] ?? null)) > 1)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sort_num"] ?? null), "html", null, true)) : (""));
                    yield "</span></span>
                  ";
                }
                // line 95
                yield "               </th>
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
            unset($context['_seq'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "            ";
        }
        // line 98
        yield "
            ";
        // line 100
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["union_search_type"] ?? null), ($context["itemtype"] ?? null), [], "array", true, true, false, 100)) {
            // line 101
            yield "               <th>
                  ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Item type"), "html", null, true);
            yield "
               </th>
            ";
        }
        // line 105
        yield "         </tr>
      </thead>
      <tbody>

         ";
        // line 109
        if ((($context["count"] ?? null) == 0)) {
            // line 110
            yield "            ";
            if ((($tmp =  !($context["search_was_executed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 111
                yield "               ";
                // line 112
                yield "            ";
            } else {
                // line 113
                yield "               <tr>
                  <td colspan=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v27 = (($_v28 = ($context["data"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["data"] ?? null) : null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["cols"] ?? null) : null)), "html", null, true);
                yield "\">
                     ";
                // line 115
                if ((($tmp = ($context["search_error"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 116
                    yield "                        ";
                    yield $macros["alerts"]->getTemplateForMacro("macro_alert_danger", $context, 116, $this->getSourceContext())->macro_alert_danger(...[__("An error occurred during the search"), __("Consider changing the search criteria or adjusting the displayed columns.")]);
                    yield "
                     ";
                } else {
                    // line 118
                    yield "                        ";
                    yield $macros["alerts"]->getTemplateForMacro("macro_alert_info", $context, 118, $this->getSourceContext())->macro_alert_info(...[__("No results found")]);
                    yield "
                     ";
                }
                // line 120
                yield "                  </td>
               </tr>
            ";
            }
            // line 123
            yield "         ";
        } else {
            // line 124
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v29 = (($_v30 = ($context["data"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["data"] ?? null) : null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["rows"] ?? null) : null));
            foreach ($context['_seq'] as $context["rowkey"] => $context["row"]) {
                // line 125
                yield "               <tr>
                  ";
                // line 126
                if ((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 127
                    yield "                  <td>
                     <div>
                        ";
                    // line 130
                    yield "                        ";
                    if (((($context["itemtype"] ?? null) == "Entity") &&  !Session::haveAccessToEntity((($_v31 = $context["row"]) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["id"] ?? null) : null)))) {
                        // line 131
                        yield "                        ";
                    } elseif ((((($context["itemtype"] ?? null) == "User") &&  !Session::canViewAllEntities()) &&  !$this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasAccessToUserEntities((($_v32 = $context["row"]) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["id"] ?? null) : null)))) {
                        // line 132
                        yield "                        ";
                    } elseif ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBTM") && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maybeRecursive", [], "method", false, false, false, 132)) &&  !Session::haveAccessToEntity((($_v33 = $context["row"]) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["entities_id"] ?? null) : null)))) {
                        // line 133
                        yield "                        ";
                    } else {
                        // line 134
                        yield "                           ";
                        $context["row_itemtype"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "TYPE", [], "array", true, true, false, 134) &&  !(null === (($_v34 = $context["row"]) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["TYPE"] ?? null) : null)))) ? ((($_v35 = $context["row"]) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["TYPE"] ?? null) : null)) : (($context["itemtype"] ?? null)));
                        // line 135
                        yield "                           ";
                        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call((($context["row_itemtype"] ?? null) . "::isMassiveActionAllowed"), [(($_v36 = $context["row"]) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["id"] ?? null) : null)])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 136
                            yield "                              ";
                            $context["checked"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpimassiveactionselected"), ($context["row_itemtype"] ?? null), [], "array", false, true, false, 136), (($_v37 = $context["row"]) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["id"] ?? null) : null), [], "array", true, true, false, 136) &&  !(null === (($_v38 = (($_v39 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpimassiveactionselected")) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[($context["row_itemtype"] ?? null)] ?? null) : null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[(($_v40 = $context["row"]) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["id"] ?? null) : null)] ?? null) : null)))) ? ((($_v41 = (($_v42 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpimassiveactionselected")) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42[($context["row_itemtype"] ?? null)] ?? null) : null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41[(($_v43 = $context["row"]) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["id"] ?? null) : null)] ?? null) : null)) : (false));
                            // line 137
                            yield "                              <input class=\"form-check-input massive_action_checkbox\" type=\"checkbox\" data-glpicore-ma-tags=\"common\"
                                 value=\"1\" aria-label=\"";
                            // line 138
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select item"), "html", null, true);
                            yield "\" ";
                            if ((($tmp = ($context["checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "checked=\"checked\"";
                            }
                            // line 139
                            yield "                                 name=\"item[";
                            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "TYPE", [], "array", true, true, false, 139) &&  !(null === (($_v44 = $context["row"]) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44["TYPE"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v45 = $context["row"]) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45["TYPE"] ?? null) : null), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "html", null, true)));
                            yield "][";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v46 = $context["row"]) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46["id"] ?? null) : null), "html", null, true);
                            yield "]\"
                                 form=\"";
                            // line 140
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["massive_action_form_id"] ?? null), "html", null, true);
                            yield "\" />
                           ";
                        }
                        // line 142
                        yield "                        ";
                    }
                    // line 143
                    yield "                     </div>
                  </td>
                  ";
                }
                // line 146
                yield "
                  ";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v47 = (($_v48 = ($context["data"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48["data"] ?? null) : null)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47["cols"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 148
                    yield "                     ";
                    $context["colkey"] = (((($_v49 = $context["col"]) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49["itemtype"] ?? null) : null) . "_") . (($_v50 = $context["col"]) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50["id"] ?? null) : null));
                    // line 149
                    yield "                     ";
                    // line 150
                    yield "                     ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "meta", [], "array", true, true, false, 150) && (($_v51 = $context["col"]) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51["meta"] ?? null) : null))) {
                        // line 151
                        yield "                        ";
                        yield $this->extensions['Glpi\Application\View\Extension\SearchExtension']->showItem(0, (($_v52 = (($_v53 = $context["row"]) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53[($context["colkey"] ?? null)] ?? null) : null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52["displayname"] ?? null) : null), 0, 0);
                        yield "
                     ";
                    } else {
                        // line 153
                        yield "                        ";
                        // line 154
                        yield "                        ";
                        yield $this->extensions['Glpi\Application\View\Extension\SearchExtension']->showItem(0, (($_v54 = (($_v55 = $context["row"]) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55[($context["colkey"] ?? null)] ?? null) : null)) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54["displayname"] ?? null) : null), 0, 0, ((("data-searchopt-content-id=\"" . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v56 = $context["col"]) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56["id"] ?? null) : null))) . "\" ") . $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Search::displayConfigItem", [($context["itemtype"] ?? null), (($_v57 = $context["col"]) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57["id"] ?? null) : null), $context["row"]])));
                        yield "
                     ";
                    }
                    // line 156
                    yield "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['col'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                yield "
                  ";
                // line 159
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["union_search_type"] ?? null), ($context["itemtype"] ?? null), [], "array", true, true, false, 159)) {
                    // line 160
                    yield "                     <td>
                        ";
                    // line 161
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($_v58 = $context["row"]) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58["TYPE"] ?? null) : null)), "html", null, true);
                    yield "
                     </td>
                  ";
                }
                // line 164
                yield "               </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['rowkey'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            yield "         ";
        }
        // line 167
        yield "      </tbody>
   </table>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search/table.html.twig";
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
        return array (  470 => 167,  467 => 166,  460 => 164,  454 => 161,  451 => 160,  448 => 159,  445 => 157,  439 => 156,  433 => 154,  431 => 153,  425 => 151,  422 => 150,  420 => 149,  417 => 148,  413 => 147,  410 => 146,  405 => 143,  402 => 142,  397 => 140,  390 => 139,  384 => 138,  381 => 137,  378 => 136,  375 => 135,  372 => 134,  369 => 133,  366 => 132,  363 => 131,  360 => 130,  356 => 127,  354 => 126,  351 => 125,  346 => 124,  343 => 123,  338 => 120,  332 => 118,  326 => 116,  324 => 115,  320 => 114,  317 => 113,  314 => 112,  312 => 111,  309 => 110,  307 => 109,  301 => 105,  295 => 102,  292 => 101,  289 => 100,  286 => 98,  283 => 97,  268 => 95,  260 => 93,  258 => 92,  253 => 91,  251 => 90,  243 => 89,  233 => 88,  230 => 87,  227 => 86,  224 => 85,  221 => 84,  218 => 82,  215 => 81,  212 => 80,  209 => 79,  206 => 78,  204 => 77,  202 => 76,  199 => 75,  196 => 74,  182 => 73,  179 => 72,  176 => 71,  173 => 70,  170 => 69,  152 => 68,  149 => 67,  146 => 66,  143 => 65,  140 => 64,  137 => 63,  134 => 62,  131 => 61,  129 => 60,  111 => 59,  108 => 58,  106 => 57,  103 => 56,  96 => 52,  92 => 51,  88 => 50,  84 => 49,  80 => 47,  78 => 46,  72 => 45,  66 => 42,  62 => 41,  58 => 40,  53 => 37,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/table.html.twig", "/var/www/html/glpi/templates/components/search/table.html.twig");
    }
}
