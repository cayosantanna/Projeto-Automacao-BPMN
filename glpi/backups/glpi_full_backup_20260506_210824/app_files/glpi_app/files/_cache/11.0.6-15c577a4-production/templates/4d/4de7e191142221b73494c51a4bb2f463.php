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

/* layout/parts/context_links.html.twig */
class __TwigTemplate_5db192c83f55f51f9d1615f5f99601e8 extends Template
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
        $context["links"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 33), "content", [], "array", false, true, false, 33), ($context["item"] ?? null), [], "array", false, true, false, 33), "options", [], "array", false, true, false, 33), ($context["option"] ?? null), [], "array", false, true, false, 33), "links", [], "array", true, true, false, 33) &&  !(null === (($_v0 = (($_v1 = (($_v2 = (($_v3 = (($_v4 = (($_v5 = ($context["menu"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["content"] ?? null) : null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[($context["item"] ?? null)] ?? null) : null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["options"] ?? null) : null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["option"] ?? null)] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["links"] ?? null) : null)))) ? ((($_v6 = (($_v7 = (($_v8 = (($_v9 = (($_v10 = (($_v11 = ($context["menu"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["content"] ?? null) : null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[($context["item"] ?? null)] ?? null) : null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["options"] ?? null) : null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[($context["option"] ?? null)] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["links"] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 33), "content", [], "array", false, true, false, 33), ($context["item"] ?? null), [], "array", false, true, false, 33), "links", [], "array", true, true, false, 33) &&  !(null === (($_v12 = (($_v13 = (($_v14 = (($_v15 = ($context["menu"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["content"] ?? null) : null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[($context["item"] ?? null)] ?? null) : null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["links"] ?? null) : null)))) ? ((($_v16 = (($_v17 = (($_v18 = (($_v19 = ($context["menu"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["content"] ?? null) : null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[($context["item"] ?? null)] ?? null) : null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["links"] ?? null) : null)) : (""))));
        // line 34
        $context["lists_itemtype"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 34), "content", [], "array", false, true, false, 34), ($context["item"] ?? null), [], "array", false, true, false, 34), "options", [], "array", false, true, false, 34), ($context["option"] ?? null), [], "array", false, true, false, 34), "lists_itemtype", [], "array", true, true, false, 34) &&  !(null === (($_v20 = (($_v21 = (($_v22 = (($_v23 = (($_v24 = (($_v25 = ($context["menu"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["content"] ?? null) : null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[($context["item"] ?? null)] ?? null) : null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["options"] ?? null) : null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[($context["option"] ?? null)] ?? null) : null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["lists_itemtype"] ?? null) : null)))) ? ((($_v26 = (($_v27 = (($_v28 = (($_v29 = (($_v30 = (($_v31 = ($context["menu"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["content"] ?? null) : null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[($context["item"] ?? null)] ?? null) : null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["options"] ?? null) : null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[($context["option"] ?? null)] ?? null) : null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["lists_itemtype"] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 34), "content", [], "array", false, true, false, 34), ($context["item"] ?? null), [], "array", false, true, false, 34), "lists_itemtype", [], "array", true, true, false, 34) &&  !(null === (($_v32 = (($_v33 = (($_v34 = (($_v35 = ($context["menu"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["content"] ?? null) : null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[($context["item"] ?? null)] ?? null) : null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["lists_itemtype"] ?? null) : null)))) ? ((($_v36 = (($_v37 = (($_v38 = (($_v39 = ($context["menu"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["content"] ?? null) : null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37[($context["item"] ?? null)] ?? null) : null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["lists_itemtype"] ?? null) : null)) : (""))));
        // line 35
        if (Twig\Extension\CoreExtension::testEmpty(($context["lists_itemtype"] ?? null))) {
            // line 36
            yield "    ";
            $context["lists_itemtype"] = ($context["item"] ?? null);
        }
        // line 38
        yield "
";
        // line 39
        $context["display_divider"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "add", [], "array", true, true, false, 39) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["links"] ?? null)) > 0));
        // line 40
        yield "
";
        // line 41
        if ((($tmp = ($context["display_divider"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "   ";
            // line 43
            yield "   <ul class=\"nav navbar-nav border-start border-left ps-1 ps-sm-2 flex-row\">
";
        }
        // line 45
        yield "
";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "add", [], "array", true, true, false, 46)) {
            // line 47
            yield "<li class=\"nav-item\">
   <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($_v40 = ($context["links"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["add"] ?? null) : null)), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "\">
      <i class=\"ti ti-plus\"></i>
      <span class=\"d-none d-xxl-block\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "</span>
   </a>
</li>
";
        }
        // line 54
        yield "
";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["link"]) {
            // line 56
            yield "   ";
            if (((($context["type"] == "add") || ($context["type"] == "search")) || ($context["type"] == "lists"))) {
                // line 57
                yield "   ";
            } elseif (($context["type"] == "template")) {
                // line 58
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Manage templates..."), "html", null, true);
                yield "\">
            <i class=\"ti ti-template\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Templates"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 64
$context["type"] == "showall")) {
                // line 65
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show all"), "html", null, true);
                yield "\">
            <i class=\"ti ti-eye-check\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show all"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 71
$context["type"] == "summary")) {
                // line 72
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Summary"), "html", null, true);
                yield "\">
            <i class=\"ti ti-notes\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Summary"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 78
$context["type"] == "summary_kanban")) {
                // line 79
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Global Kanban"), "html", null, true);
                yield "\">
            <i class=\"ti ti-layout-columns\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Global Kanban"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 85
$context["type"] == "transfer_list")) {
                // line 86
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Transfer list"), "html", null, true);
                yield "\">
            <i class=\"ti ti-list-check\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Transfer list"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 92
$context["type"] == "config")) {
                // line 93
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Setup"), "html", null, true);
                yield "\">
            <i class=\"ti ti-tool\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Setup"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 99
$context["type"] == "view_form_categories")) {
                // line 100
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" role=\"button\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Glpi\\Form\\Category", Session::getPluralNumber()), "html", null, true);
                yield "\">
            <i class=\"ti ti-folder\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Glpi\\Form\\Category", Session::getPluralNumber()), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 106
$context["type"] == "import_forms")) {
                // line 107
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" role=\"button\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import forms"), "html", null, true);
                yield "\">
            <i class=\"ti ti-file-arrow-left\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import forms"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 113
$context["type"] == "Glpi\\Dropdown\\DropdownDefinition")) {
                // line 114
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" role=\"button\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Glpi\\Dropdown\\DropdownDefinition"), "html", null, true);
                yield "\">
            <i class=\"";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Glpi\\Dropdown\\DropdownDefinition"), "html", null, true);
                yield "\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Glpi\\Dropdown\\DropdownDefinition"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } else {
                // line 121
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\">
            ";
                // line 123
                yield $context["type"];
                yield "
         </a>
      </li>
   ";
            }
            // line 127
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        yield "
";
        // line 130
        if ((($tmp = ($context["display_divider"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "   </ul>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/context_links.html.twig";
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
        return array (  296 => 131,  294 => 130,  291 => 129,  284 => 127,  277 => 123,  273 => 122,  270 => 121,  263 => 117,  259 => 116,  253 => 115,  250 => 114,  248 => 113,  242 => 110,  235 => 108,  232 => 107,  230 => 106,  224 => 103,  217 => 101,  214 => 100,  212 => 99,  206 => 96,  199 => 94,  196 => 93,  194 => 92,  188 => 89,  181 => 87,  178 => 86,  176 => 85,  170 => 82,  163 => 80,  160 => 79,  158 => 78,  152 => 75,  145 => 73,  142 => 72,  140 => 71,  134 => 68,  127 => 66,  124 => 65,  122 => 64,  116 => 61,  109 => 59,  106 => 58,  103 => 57,  100 => 56,  96 => 55,  93 => 54,  86 => 50,  79 => 48,  76 => 47,  74 => 46,  71 => 45,  67 => 43,  65 => 42,  63 => 41,  60 => 40,  58 => 39,  55 => 38,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/context_links.html.twig", "/var/www/html/glpi/templates/layout/parts/context_links.html.twig");
    }
}
