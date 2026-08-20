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

/* components/search/query_builder/main.html.twig */
class __TwigTemplate_103c99c531d060f8a826be9da5a702fb extends Template
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
        $context["is_ajax"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "searchform_id", [], "array", true, true, false, 35) &&  !(null === (($_v0 = ($context["_request"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["searchform_id"] ?? null) : null)));
        // line 36
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 37
        $context["mainform"] = (((($tmp =  !array_key_exists("mainform", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (true) : (($context["mainform"] ?? null)));
        // line 38
        $context["main_block_class"] = (((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("sub_criteria"));
        // line 39
        $context["card_class"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 40
            yield "   ";
            if ((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("search-form card card-sm" . (((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("show_search_form")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" border mb-3") : (""))), "html", null, true);
                yield "
   ";
            } else {
                // line 43
                yield "      ";
                yield "border d-inline-block ms-1";
                yield "
   ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        $context["hide_criteria"] =  !(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "hide_criteria", [], "any", true, true, false, 46) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "hide_criteria", [], "any", false, false, false, 46));
        // line 47
        $context["extra_actions_templates"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "extra_actions_templates", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "extra_actions_templates", [], "any", false, false, false, 47), [])) : ([]));
        // line 48
        $context["hide_controls"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "hide_controls", [], "any", true, true, false, 48) && CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "hide_controls", [], "any", false, false, false, 48));
        // line 49
        $context["showmassiveactions"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "showmassiveactions", [], "any", true, true, false, 49) || CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "showmassiveactions", [], "any", false, false, false, 49));
        // line 50
        yield "
";
        // line 51
        if ((($context["mainform"] ?? null) && ($context["showaction"] ?? null))) {
            // line 52
            yield "   <form
      name=\"searchform";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["normalized_itemtype"] ?? null), "html", null, true);
            yield "\"
      class=\"search-form-container\"
      method=\"get\"
      action=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["p"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["target"] ?? null) : null), "html", null, true);
            yield "\"
      data-glpi-search-form
   >

   ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["additional_params"] ?? null));
            foreach ($context['_seq'] as $context["param_name"] => $context["param_value"]) {
                // line 61
                yield "       <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["param_name"], "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["param_value"], "html", null, true);
                yield "\" />
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['param_name'], $context['param_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 64
        yield "
<div class=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["card_class"] ?? null), "html", null, true);
        yield "\">
   <div id=\"searchcriteria";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["main_block_class"] ?? null), "html", null, true);
        yield "\">
      ";
        // line 68
        yield "      ";
        $context["nbsearchcountvar"] = (("nbcriteria" . ($context["normalized_itemtype"] ?? null)) . Twig\Extension\CoreExtension::random($this->env->getCharset()));
        // line 69
        yield "      <script>
         let ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " = ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["criteria"] ?? null)), "html", null, true);
        yield ";
      </script>
      <div class=\"list-group list-group-flush list-group-hoverable criteria-list pt-2\" id=\"criteriatable";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["normalized_itemtype"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\">
         ";
        // line 73
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "defaultfilter", [], "any", true, true, false, 73)) {
            // line 74
            yield "            <div class=\"p-2 b-0\">
               <label class=\"form-check form-switch btn btn-sm btn-ghost-secondary me-1 me-sm-2 px-1 mb-0 flex-column-reverse flex-sm-row\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-bs-trigger=\"hover\"
                     title=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Toggle additional default filters"), "html", null, true);
            yield "\">
                  <input type=\"checkbox\" class=\"form-check-input ms-0 me-1 mt-0 default-filter\" role=\"button\"
                        ";
            // line 79
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "nodefault", [], "any", true, true, false, 79)) ? ("") : ("checked"));
            yield " autocomplete=\"off\" ";
            yield (((($tmp = ($context["can_disablefilter"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("disabled"));
            yield " />
                  <span class=\"form-check-label mb-1 mb-sm-0\">
                     <i class=\"fs-2 ti ti-filter\"></i>
                  </span>
               </label>
               <span title=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "defaultfilter", [], "any", false, false, false, 84)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["comment"] ?? null) : null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "defaultfilter", [], "any", false, false, false, 84)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["name"] ?? null) : null), "html", null, true);
            yield "</span>
            </div>
         ";
        }
        // line 87
        yield "         ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((($_v4 = ($context["p"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["criteria"] ?? null) : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 88
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::displayCriteria", [["itemtype" =>             // line 89
($context["itemtype"] ?? null), "num" =>             // line 90
$context["i"], "p" =>             // line 91
($context["p"] ?? null)]]), "html", null, true);
            // line 92
            yield "
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "         <a id=\"more-criteria";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" role=\"button\" class=\"normalcriteria list-group-item p-2 b-0 d-none\"></a>
      </div>
      ";
        // line 96
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "savedsearches_id", [], "array", true, true, false, 96)) {
            // line 97
            yield "         <input type=\"hidden\" name=\"savedsearches_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = ($context["_get"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["savedsearches_id"] ?? null) : null), "html", null, true);
            yield "\">
      ";
        }
        // line 99
        yield "
      ";
        // line 101
        yield "      <input type=\"hidden\" name=\"params[hide_criteria]\" value=\"";
        yield (((($tmp = ($context["hide_criteria"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
        yield "\">
      <input type=\"hidden\" name=\"params[hide_controls]\" value=\"";
        // line 102
        yield (((($tmp = ($context["hide_controls"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
        yield "\">
      <input type=\"hidden\" name=\"params[showmassiveactions]\" value=\"";
        // line 103
        yield (((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
        yield "\">

      <div class=\"card-footer d-flex search_actions\">
         <button id=\"addsearchcriteria";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"btn btn-sm btn-ghost-secondary me-1\" type=\"button\">
            <i class=\"ti ti-square-plus\"></i>
            <span class=\"d-none d-sm-block\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("rule"), "html", null, true);
        yield "</span>
         </button>
         ";
        // line 110
        if ((array_key_exists("linked", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["linked"] ?? null)) > 0))) {
            // line 111
            yield "            <button id=\"addmetasearchcriteria";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" class=\"btn btn-sm btn-ghost-secondary me-1\" type=\"button\">
               <i class=\"ti ti-circle-plus\"></i>
               <span class=\"d-none d-sm-block\">";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("global rule"), "html", null, true);
            yield "</span>
            </button>
         ";
        }
        // line 116
        yield "         <button id=\"addcriteriagroup";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"btn btn-sm btn-ghost-secondary me-1\" type=\"button\">
            <i class=\"ti ti-code-plus\"></i>
            <span class=\"d-none d-sm-block\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("group"), "html", null, true);
        yield "</span>
         </button>
         ";
        // line 120
        if ((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 121
            yield "            ";
            $context["action_count"] = ((($context["showaction"] ?? null) + (($_v6 = ($context["p"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["showbookmark"] ?? null) : null)) + (($_v7 = ($context["p"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["showreset"] ?? null) : null));
            // line 122
            yield "            <span class=\"ms-3 ";
            yield (((($context["action_count"] ?? null) > 1)) ? ("btn-group") : (""));
            yield "\">
                ";
            // line 123
            if ((($tmp = ($context["showaction"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 124
                yield "                ";
                // line 125
                yield "                <button class=\"btn ";
                yield (((($tmp = (($_v8 = ($context["p"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["is_criteria_filter"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-ghost-secondary") : ("btn-sm btn-primary"));
                yield "\" type=\"button\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = ($context["p"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["actionname"] ?? null) : null), "html", null, true);
                yield "\">
                    <i class=\"ti ti-search\"></i>
                    <span class=\"d-none d-sm-block\">";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = ($context["p"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["actionvalue"] ?? null) : null), "html", null, true);
                yield "</span>
                </button>
                ";
            }
            // line 130
            yield "                ";
            if ((($tmp = (($_v11 = ($context["p"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["showbookmark"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 131
                yield "                ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/tools/savedsearch/save_button.html.twig", ["type" => Twig\Extension\CoreExtension::constant("SavedSearch::SEARCH"), "itemtype" =>                 // line 133
($context["itemtype"] ?? null), "active" => CoreExtension::getAttribute($this->env, $this->source,                 // line 134
($context["_get"] ?? null), "savedsearches_id", [], "array", true, true, false, 134)]);
                // line 135
                yield "
                ";
            }
            // line 137
            yield "                ";
            if ((($tmp = (($_v12 = ($context["p"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["showreset"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 138
                yield "                <a class=\"btn btn-sm btn-outline-secondary btn-icon px-2 search-reset\"
                   data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
                   href=\"";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($_v13 = ($context["p"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["target"] ?? null) : null) . ((CoreExtension::inFilter("?", (($_v14 = ($context["p"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["target"] ?? null) : null))) ? ("&") : ("?"))) . "reset=reset"), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Blank"), "html", null, true);
                yield "\">
                    <i class=\"ti ti-square-x\"></i>
                </a>
                ";
            } elseif ((($tmp = (($_v15 =             // line 143
($context["p"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["forcereset"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 144
                yield "                <input type=\"hidden\" name=\"reset\" value=\"reset\">
                ";
            }
            // line 146
            yield "            </span>
         ";
        }
        // line 148
        yield "         ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extra_actions_templates"] ?? null));
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
        foreach ($context['_seq'] as $context["template"] => $context["params"]) {
            // line 149
            yield "            ";
            yield from $this->load($context["template"], 149)->unwrap()->yield(CoreExtension::merge($context, $context["params"]));
            // line 150
            yield "         ";
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
        unset($context['_seq'], $context['template'], $context['params'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "      </div>

      ";
        // line 154
        yield "      ";
        $context["idor_display_criteria"] = Session::getNewIDORToken(($context["itemtype"] ?? null));
        // line 155
        yield "      ";
        $context["idor_display_meta_criteria"] = Session::getNewIDORToken(($context["itemtype"] ?? null));
        // line 156
        yield "      ";
        $context["idor_display_criteria_group"] = Session::getNewIDORToken(($context["itemtype"] ?? null));
        // line 157
        yield "      ";
        $context["itemtype_escaped"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "js");
        // line 158
        yield "
      ";
        // line 160
        yield "      ";
        $context["ajax_url"] = ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/search.php");
        // line 161
        yield "      <script>
         \$('#addsearchcriteria";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('click', function(event) {
             event.preventDefault();
             \$.post(\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ajax_url"] ?? null), "html", null, true);
        yield "\", {
                 'action': 'display_criteria',
                 'itemtype': \"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype_escaped"] ?? null), "html", null, true);
        yield "\",
                 'num': ";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield ",
                 'p': ";
        // line 168
        yield json_encode(($context["p"] ?? null));
        yield ",
                 '_idor_token': \"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["idor_display_criteria"] ?? null), "html", null, true);
        yield "\"
             }).done(function (data) {
               \$(data).insertBefore('#more-criteria";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "');
               ";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " = ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " + 1;
             });
         });
         \$('#addmetasearchcriteria";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('click', function(event) {
             event.preventDefault();
             \$.post(\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ajax_url"] ?? null), "html", null, true);
        yield "\", {
                 'action': 'display_meta_criteria',
                 'itemtype': \"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype_escaped"] ?? null), "html", null, true);
        yield "\",
                 'num': ";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield ",
                 'p': ";
        // line 181
        yield json_encode(($context["p"] ?? null));
        yield ",
                 '_idor_token': \"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["idor_display_criteria"] ?? null), "html", null, true);
        yield "\"
             }).done(function (data) {
                 \$(data).insertBefore('#more-criteria";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "');
                ";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " = ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " + 1;
             });
         });
         \$('#addcriteriagroup";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('click', function(event) {
             event.preventDefault();
             \$.post(\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ajax_url"] ?? null), "html", null, true);
        yield "\", {
                 'action': 'display_criteria_group',
                 'itemtype': \"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype_escaped"] ?? null), "html", null, true);
        yield "\",
                 'num': ";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield ",
                 'p': ";
        // line 194
        yield json_encode(($context["p"] ?? null));
        yield ",
                 '_idor_token': \"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["idor_display_criteria"] ?? null), "html", null, true);
        yield "\"
             }).done(function (data) {
                 \$(data).insertBefore('#more-criteria";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "');
                ";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " = ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " + 1;
             });
         });

         ";
        // line 202
        if ((($context["mainform"] ?? null) &&  !($context["hide_criteria"] ?? null))) {
            // line 203
            yield "            \$(document).off('click', '.remove-search-criteria').on(\"click\", \".remove-search-criteria\", function() {
                // force removal of tooltip
                const tooltip = bootstrap.Tooltip.getInstance(\$(this)[0]);
                if (tooltip !== null) {
                    tooltip.dispose();
                }

                const rowID = \$(this).data('rowid');
                \$('#' + rowID).remove();
                \$('#searchcriteria";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield " .criteria-list .list-group-item:first-child').addClass('headerRow').show();
            });
         ";
        }
        // line 215
        yield "      </script>

      ";
        // line 217
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v16 = ($context["p"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["addhidden"] ?? null) : null)) > 0)) {
            // line 218
            yield "         ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v17 = ($context["p"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["addhidden"] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 219
                yield "            <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "\">
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            yield "      ";
        }
        // line 222
        yield "
      ";
        // line 223
        if ((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 224
            yield "         <input type=\"hidden\" name=\"itemtype\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "html", null, true);
            yield "\">
         <input type=\"hidden\" name=\"start\" value=\"0\">
          ";
            // line 226
            $context["item"] = (((($context["itemtype"] ?? null) != "AllAssets")) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemForItemtype", [($context["itemtype"] ?? null)])) : (null));
            // line 227
            yield "          ";
            if (( !(null === ($context["item"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maybeDeleted", [], "method", false, false, false, 227))) {
                // line 228
                yield "              <input type=\"hidden\" id=\"is_deleted\" name=\"is_deleted\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v18 = ($context["p"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["is_deleted"] ?? null) : null), "html", null, true);
                yield "\">
          ";
            }
            // line 230
            yield "          <input type=\"hidden\" id=\"as_map\" name=\"as_map\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v19 = ($context["p"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["as_map"] ?? null) : null), "html", null, true);
            yield "\">
          <input type=\"hidden\" id=\"browse\" name=\"browse\" value=\"";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v20 = ($context["p"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["browse"] ?? null) : null), "html", null, true);
            yield "\">
          <input type=\"hidden\" id=\"unpublished\" name=\"unpublished\" value=\"";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v21 = ($context["p"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["unpublished"] ?? null) : null), "html", null, true);
            yield "\">
      ";
        }
        // line 234
        yield "   </div>
</div>

";
        // line 237
        if ((($context["mainform"] ?? null) && ($context["showaction"] ?? null))) {
            // line 238
            yield "   ";
            yield $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 238, $this->getSourceContext())->macro_csrfField(...[]);
            yield "
   </form>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search/query_builder/main.html.twig";
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
        return array (  598 => 238,  596 => 237,  591 => 234,  586 => 232,  582 => 231,  577 => 230,  571 => 228,  568 => 227,  566 => 226,  560 => 224,  558 => 223,  555 => 222,  552 => 221,  541 => 219,  536 => 218,  534 => 217,  530 => 215,  524 => 212,  513 => 203,  511 => 202,  502 => 198,  498 => 197,  493 => 195,  489 => 194,  485 => 193,  481 => 192,  476 => 190,  471 => 188,  463 => 185,  459 => 184,  454 => 182,  450 => 181,  446 => 180,  442 => 179,  437 => 177,  432 => 175,  424 => 172,  420 => 171,  415 => 169,  411 => 168,  407 => 167,  403 => 166,  398 => 164,  393 => 162,  390 => 161,  387 => 160,  384 => 158,  381 => 157,  378 => 156,  375 => 155,  372 => 154,  368 => 151,  354 => 150,  351 => 149,  333 => 148,  329 => 146,  325 => 144,  323 => 143,  315 => 140,  311 => 138,  308 => 137,  304 => 135,  302 => 134,  301 => 133,  299 => 131,  296 => 130,  290 => 127,  282 => 125,  280 => 124,  278 => 123,  273 => 122,  270 => 121,  268 => 120,  263 => 118,  257 => 116,  251 => 113,  245 => 111,  243 => 110,  238 => 108,  233 => 106,  227 => 103,  223 => 102,  218 => 101,  215 => 99,  209 => 97,  207 => 96,  201 => 94,  194 => 92,  192 => 91,  191 => 90,  190 => 89,  188 => 88,  183 => 87,  175 => 84,  165 => 79,  160 => 77,  155 => 74,  153 => 73,  148 => 72,  141 => 70,  138 => 69,  135 => 68,  129 => 66,  125 => 65,  122 => 64,  110 => 61,  106 => 60,  99 => 56,  93 => 53,  90 => 52,  88 => 51,  85 => 50,  83 => 49,  81 => 48,  79 => 47,  77 => 46,  69 => 43,  63 => 41,  60 => 40,  58 => 39,  56 => 38,  54 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/query_builder/main.html.twig", "/var/www/html/glpi/templates/components/search/query_builder/main.html.twig");
    }
}
