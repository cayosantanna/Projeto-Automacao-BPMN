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

/* components/search/query_builder/criteria.html.twig */
class __TwigTemplate_679a787ee598dcd23d7b130117013a9b extends Template
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
        $context["add_padding"] = (((($tmp = ($context["from_meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("p-0") : ("p-2"));
        // line 36
        $context["add_class"] = ((array_key_exists("add_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["add_class"] ?? null), "")) : (""));
        // line 37
        $context["normalized_itemtype"] = Twig\Extension\CoreExtension::replace(($context["itemtype"] ?? null), ["\\" => ""]);
        // line 38
        yield "
";
        // line 39
        if ((($context["meta"] ?? null) &&  !($context["from_meta"] ?? null))) {
            // line 40
            yield "   ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::displayMetaCriteria", [["from_meta" => (((            // line 41
array_key_exists("from_meta", $context) &&  !(null === $context["from_meta"]))) ? ($context["from_meta"]) : (false)), "itemtype" =>             // line 42
($context["itemtype"] ?? null), "p" =>             // line 43
($context["p"] ?? null), "num" =>             // line 44
($context["num"] ?? null)]]), "html", null, true);
            // line 45
            yield "
";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["criteria"] ?? null), "criteria", [], "array", true, true, false, 46) && is_iterable((($_v0 = ($context["criteria"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["criteria"] ?? null) : null)))) {
            // line 47
            yield "   ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::displayCriteriaGroup", [["itemtype" =>             // line 48
($context["itemtype"] ?? null), "p" =>             // line 49
($context["p"] ?? null), "num" =>             // line 50
($context["num"] ?? null)]]), "html", null, true);
            // line 51
            yield "
";
        } else {
            // line 53
            yield "   <div class=\"list-group-item ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["add_padding"] ?? null), "html", null, true);
            yield " border-0 normalcriteria";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["add_class"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
            yield "\">
      <div class=\"row g-1\">
         ";
            // line 55
            if ((($tmp =  !($context["from_meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 56
                yield "            <div class=\"col-auto\">
               <button class=\"btn btn-sm btn-icon btn-ghost-secondary remove-search-criteria\" type=\"button\" data-rowid=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_id"] ?? null), "html", null, true);
                yield "\"
                       data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete a rule"), "html", null, true);
                yield "\">
                  <i class=\"ti ti-square-rounded-minus\" alt=\"-\"></i>
               </button>
            </div>
         ";
            }
            // line 63
            yield "
         ";
            // line 64
            if ((($tmp =  !($context["from_meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "            <div class=\"col-auto\">
               ";
                // line 66
                $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["criteria"] ?? null), "link", [], "array", true, true, false, 66)) ? ((($_v1 = ($context["criteria"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["link"] ?? null) : null)) : (""));
                // line 67
                yield "               ";
                $context["operators"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\SearchEngine::getLogicalOperators", [(($context["num"] ?? null) == 0)]);
                // line 68
                yield "               ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 68, $this->getSourceContext())->macro_dropdownArrayField(...[(((("criteria" . ($context["prefix"] ?? null)) . "[") . ($context["num"] ?? null)) . "][link]"), ($context["value"] ?? null), ($context["operators"] ?? null), "", ["full_width" => true, "input_class" => "col-12", "no_label" => true, "mb" => "mb-0"]]);
                // line 73
                yield "
            </div>
         ";
            }
            // line 76
            yield "
         <div class=\"col-auto\">
            ";
            // line 78
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 79
            yield "            ";
            $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["criteria"] ?? null), "field", [], "array", true, true, false, 79)) ? ((($_v2 = ($context["criteria"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["field"] ?? null) : null)) : (""));
            // line 80
            yield "            ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 80, $this->getSourceContext())->macro_dropdownArrayField(...[(((("criteria" . ($context["prefix"] ?? null)) . "[") . ($context["num"] ?? null)) . "][field]"), ($context["value"] ?? null), ($context["values"] ?? null), "", ["rand" =>             // line 81
($context["rand"] ?? null), "full_width" => true, "input_class" => "col-12", "no_label" => true, "mb" => "mb-0"]]);
            // line 86
            yield "
         </div>

         ";
            // line 89
            $context["field_id"] = ((((("dropdown_criteria" . ($context["prefix"] ?? null)) . "[") . ($context["num"] ?? null)) . "][field]") . ($context["rand"] ?? null));
            // line 90
            yield "         ";
            $context["spanid"] = ((("SearchSpan" . ($context["normalized_itemtype"] ?? null)) . Twig\Extension\CoreExtension::replace(($context["prefix"] ?? null), ["[" => "_", "]" => "_"])) . ($context["num"] ?? null));
            // line 91
            yield "         <div class=\"col-auto\">
            <div class=\"row g-1\" id=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["spanid"] ?? null), "html", null, true);
            yield "\">
               ";
            // line 93
            $context["used_itemtype"] = (((($context["itemtype"] ?? null) == "AllAssets")) ? ("Computer") : (($context["itemtype"] ?? null)));
            // line 94
            yield "               ";
            $context["searchtype"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["criteria"] ?? null), "searchtype", [], "array", true, true, false, 94)) ? (Twig\Extension\CoreExtension::default((($_v3 = ($context["criteria"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["searchtype"] ?? null) : null), "")) : (""));
            // line 95
            yield "
               ";
            // line 96
            $context["params"] = ["itemtype" =>             // line 97
($context["used_itemtype"] ?? null), "_idor_token" => Session::getNewIDORToken(            // line 98
($context["used_itemtype"] ?? null)), "field" =>             // line 99
($context["value"] ?? null), "searchtype" =>             // line 100
($context["searchtype"] ?? null), "value" =>             // line 101
($context["p_value"] ?? null), "num" =>             // line 102
($context["num"] ?? null), "p" =>             // line 103
($context["p"] ?? null), "mb" => "mb-0"];
            // line 106
            yield "               ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::displaySearchoption", [($context["params"] ?? null)]), "html", null, true);
            yield "
            </div>

            ";
            // line 109
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [            // line 110
($context["field_id"] ?? null),             // line 111
($context["spanid"] ?? null), ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/search.php"), Twig\Extension\CoreExtension::merge(            // line 113
($context["params"] ?? null), ["action" => "display_searchoption", "field" => "__VALUE__"])]);
            // line 118
            yield "         </div>
      </div>
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
        return "components/search/query_builder/criteria.html.twig";
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
        return array (  190 => 118,  188 => 113,  187 => 111,  186 => 110,  185 => 109,  178 => 106,  176 => 103,  175 => 102,  174 => 101,  173 => 100,  172 => 99,  171 => 98,  170 => 97,  169 => 96,  166 => 95,  163 => 94,  161 => 93,  157 => 92,  154 => 91,  151 => 90,  149 => 89,  144 => 86,  142 => 81,  140 => 80,  137 => 79,  135 => 78,  131 => 76,  126 => 73,  123 => 68,  120 => 67,  118 => 66,  115 => 65,  113 => 64,  110 => 63,  102 => 58,  98 => 57,  95 => 56,  93 => 55,  83 => 53,  79 => 51,  77 => 50,  76 => 49,  75 => 48,  73 => 47,  71 => 46,  68 => 45,  66 => 44,  65 => 43,  64 => 42,  63 => 41,  61 => 40,  59 => 39,  56 => 38,  54 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/query_builder/criteria.html.twig", "/var/www/html/glpi/templates/components/search/query_builder/criteria.html.twig");
    }
}
