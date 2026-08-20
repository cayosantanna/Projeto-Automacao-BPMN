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

/* components/search/display_data.html.twig */
class __TwigTemplate_009ab30fc81a91139295d80d3e14231b extends Template
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
        $context["is_ajax"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "searchform_id", [], "array", true, true, false, 34) &&  !(null === (($_v0 = ($context["data"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["searchform_id"] ?? null) : null)));
        // line 35
        $context["fluid_search"] = ((array_key_exists("fluid_search", $context)) ? (Twig\Extension\CoreExtension::default(($context["fluid_search"] ?? null), true)) : (true));
        // line 36
        if ((($tmp =  !($context["is_ajax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "   <div class=\"ajax-container search-display-data\">
";
        }
        // line 39
        $context["push_history"] = (array_key_exists("push_history", $context) && ($context["push_history"] ?? null));
        // line 40
        $context["hide_controls"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 40), "hide_controls", [], "array", true, true, false, 40) &&  !(null === (($_v1 = (($_v2 = ($context["data"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["search"] ?? null) : null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["hide_controls"] ?? null) : null)))) ? ((($_v3 = (($_v4 = ($context["data"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["search"] ?? null) : null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["hide_controls"] ?? null) : null)) : ((((array_key_exists("hide_controls", $context) &&  !(null === $context["hide_controls"]))) ? ($context["hide_controls"]) : (false))));
        // line 41
        yield "
";
        // line 43
        $context["normalized_itemtype"] = Twig\Extension\CoreExtension::replace(($context["itemtype"] ?? null), ["\\" => ""]);
        // line 44
        $context["as_map"] = ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 44), "as_map", [], "array", true, true, false, 44) &&  !(null === (($_v5 = (($_v6 = ($context["data"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["search"] ?? null) : null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["as_map"] ?? null) : null)))) ? ((($_v7 = (($_v8 = ($context["data"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["search"] ?? null) : null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["as_map"] ?? null) : null)) : (false)) == 1);
        // line 45
        yield "
<div
    class=\"card search-card\"
    data-testid=\"search-format-";
        // line 48
        yield (((($tmp = ($context["as_map"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("map") : ("table"));
        yield "\"
>
    ";
        // line 50
        if ((($tmp =  !($context["hide_controls"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "        ";
            if (((($_v9 = ($context["data"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["display_type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Search::GLOBAL_SEARCH"))) {
                // line 52
                yield "            <div class=\"card-header d-flex justify-content-between search-header\">
                <h3>";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype"] ?? null)), "html", null, true);
                yield "</h3>

                ";
                // line 55
                if ((($context["count"] ?? null) > (($context["start"] ?? null) + Twig\Extension\CoreExtension::constant("Search::GLOBAL_DISPLAY_COUNT")))) {
                    // line 56
                    yield "                    <a class=\"btn btn-ghost-secondary\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["href"] ?? null), "html", null, true);
                    yield "\">
                        <i class=\"ti ti-eye\"></i>
                        <span>";
                    // line 58
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("View all"), "html", null, true);
                    yield "</span>
                    </a>
                ";
                }
                // line 61
                yield "            </div>
        ";
            } else {
                // line 63
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/search/controls.html.twig");
                yield "
        ";
            }
            // line 65
            yield "    ";
        }
        // line 66
        yield "
    ";
        // line 67
        $context["massive_action_form_id"] = (("massform" . ($context["normalized_itemtype"] ?? null)) . ($context["rand"] ?? null));
        // line 68
        yield "    <form id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["massive_action_form_id"] ?? null), "html", null, true);
        yield "\" method=\"get\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/massiveaction.php"), "html", null, true);
        yield "\"
          data-search-itemtype=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = ($context["data"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["itemtype"] ?? null) : null), "html", null, true);
        yield "\"
          data-start=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["start"] ?? null), "html", null, true);
        yield "\" data-count=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["count"] ?? null), "html", null, true);
        yield "\" data-limit=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["limit"] ?? null), "html", null, true);
        yield "\" data-submit-once
          class=\"masssearchform\">

        ";
        // line 73
        if ((($tmp =  !($context["as_map"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/search/table.html.twig");
            yield "
        ";
        } elseif ((        // line 75
($context["count"] ?? null) > 0)) {
            // line 76
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/search/map.html.twig");
            yield "
        ";
        }
        // line 78
        yield "        ";
        if ((($context["count"] ?? null) > 0)) {
            // line 79
            yield "            ";
            if ((((($_v11 = ($context["data"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["display_type"] ?? null) : null) != Twig\Extension\CoreExtension::constant("Search::GLOBAL_SEARCH")) &&  !($context["as_map"] ?? null))) {
                // line 80
                yield "                <div class=\"card-footer search-footer ";
                yield (((($tmp =  !$this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("search_pagination_on_top")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-block") : ("d-block d-xxl-none"));
                yield "\">
                    ";
                // line 81
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/pager.html.twig");
                yield "
                </div>
            ";
            }
            // line 84
            yield "        ";
        } elseif ((($tmp = ($context["as_map"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "            ";
            if ((($tmp = ($context["search_error"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "                ";
                yield $macros["alerts"]->getTemplateForMacro("macro_alert_danger", $context, 86, $this->getSourceContext())->macro_alert_danger(...[__("An error occurred during the search"), __("Consider changing the search criteria or adjusting the displayed columns.")]);
                yield "
            ";
            } else {
                // line 88
                yield "                ";
                yield $macros["alerts"]->getTemplateForMacro("macro_alert_info", $context, 88, $this->getSourceContext())->macro_alert_info(...[__("No results found")]);
                yield "
            ";
            }
            // line 90
            yield "        ";
        }
        // line 91
        yield "    </form>
</div>
";
        // line 93
        if ((($tmp =  !($context["is_ajax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "   </div>

   ";
            // line 96
            if ((($tmp =  !($context["as_map"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 97
                yield "      <script>
          window.initFluidSearch";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "  = () => {
             const allowed_forced_params = ['hide_controls', 'usesession', 'forcetoview', 'criteria', 'showmassiveactions'];
             let forced_params = {};
             let all_params = ";
                // line 101
                yield json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default((($_v12 = ($context["data"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["search"] ?? null) : null), [])) : ([])));
                yield ";

             \$.each(all_params, (k, v) => {
                if (allowed_forced_params.includes(k)) {
                   forced_params[k] = v;
                }
             });

             new GLPI.Search.ResultsView(
                \"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["massive_action_form_id"] ?? null), "html", null, true);
                yield "\",
                GLPI.Search.Table,
                ";
                // line 112
                yield (((($tmp = ($context["push_history"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield ",
                forced_params
             );
          };
          if (document.readyState === 'complete') {
              initFluidSearch";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "();
          } else {
              \$(document).on('ready', initFluidSearch";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield ");
          }
      </script>
   ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search/display_data.html.twig";
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
        return array (  248 => 119,  243 => 117,  235 => 112,  230 => 110,  218 => 101,  212 => 98,  209 => 97,  207 => 96,  203 => 94,  201 => 93,  197 => 91,  194 => 90,  188 => 88,  182 => 86,  179 => 85,  176 => 84,  170 => 81,  165 => 80,  162 => 79,  159 => 78,  153 => 76,  151 => 75,  146 => 74,  144 => 73,  134 => 70,  130 => 69,  123 => 68,  121 => 67,  118 => 66,  115 => 65,  109 => 63,  105 => 61,  99 => 58,  93 => 56,  91 => 55,  86 => 53,  83 => 52,  80 => 51,  78 => 50,  73 => 48,  68 => 45,  66 => 44,  64 => 43,  61 => 41,  59 => 40,  57 => 39,  53 => 37,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/display_data.html.twig", "/var/www/html/glpi/templates/components/search/display_data.html.twig");
    }
}
