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

/* pages/self-service/service_catalog.html.twig */
class __TwigTemplate_2258e468bfbf12651181cdf9b7a72f5f extends Template
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

        $this->blocks = [
            'content_title' => [$this, 'block_content_title'],
            'content_body' => [$this, 'block_content_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 35
        return "layout/page_without_tabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 37
        $context["container_size"] = "xl";
        // line 39
        $context["icons"] = Twig\Extension\CoreExtension::map($this->env, ($context["sort_strategies"] ?? null), function ($__value__) use ($context, $macros) { $context["value"] = $__value__; return CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "getIcon", [], "method", false, false, false, 39); });
        // line 35
        $this->parent = $this->load("layout/page_without_tabs.html.twig", 35);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "    <div class=\"d-flex\">
        <ol
            data-breadcrumbs-container
            class=\"breadcrumb breadcrumb-alternate\"
            aria-label=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Service catalog category", "Service catalog categories", Session::getPluralNumber()), "html", null, true);
        yield "\"
            role=\"navigation\"
        >
            <li class=\"breadcrumb-item text-truncate active\">
                <a
                    href=\"?category=0\"
                    data-children-url-parameters=\"category=0\"
                    data-breadcrumb-item
                >
                    ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Service catalog"), "html", null, true);
        yield "
                </a>
            </li>
        </ol>
        <div class=\"ms-auto fw-normal d-flex align-items-center\">
            <span class=\"text-muted me-2 fs-3\">
                ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sort by: "), "html", null, true);
        yield "
            </span>
            ";
        // line 63
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 63, $this->getSourceContext())->macro_dropdownArrayField(...["sort_strategy",         // line 65
($context["default_sort_strategy"] ?? null), Twig\Extension\CoreExtension::map($this->env,         // line 66
($context["sort_strategies"] ?? null), function ($__value__) use ($context, $macros) { $context["value"] = $__value__; return CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "getLabel", [], "method", false, false, false, 66); }), "", ["init" => false, "no_label" => true, "field_class" => "", "mb" => "", "aria_label" => __("Sort by"), "templateSelection" => "function(data) { return window.GlpiServiceCatalog.getTemplateForSortSelect(data); }", "templateResult" => "function(data) { return window.GlpiServiceCatalog.getTemplateForSortSelect(data); }", "add_data_attributes" => ["glpi-service-catalog-sort-strategy" => ""]]]);
        // line 80
        yield "
        </div>
        <div class=\"ms-2 input-icon\">
            <input
                class=\"h-full form-control\"
                placeholder=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search for forms..."), "html", null, true);
        yield "\"
                data-glpi-service-catalog-filter-items
            >
            <span class=\"input-icon-addon\" style=\"font-size: 18px;\">
                <i class=\"ti ti-search\"></i>
            </span>
        </div>
    </div>
";
        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 96
        yield "    <section
        aria-label=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Forms"), "html", null, true);
        yield "\"
        class=\"row mb-5\"
        data-glpi-service-catalog-items
    >
        ";
        // line 101
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/helpdesk_forms/service_catalog_items.html.twig", ["category_id" => 0, "filter" => "", "items" => CoreExtension::getAttribute($this->env, $this->source,         // line 106
($context["items"] ?? null), "items", [], "any", false, false, false, 106), "total" => CoreExtension::getAttribute($this->env, $this->source,         // line 107
($context["items"] ?? null), "total", [], "any", false, false, false, 107), "current_page" => 1, "items_per_page" => Twig\Extension\CoreExtension::constant("Glpi\\Form\\ServiceCatalog\\ServiceCatalogManager::ITEMS_PER_PAGE"), "is_default_search" => true, "expand_categories" =>         // line 111
($context["expand_categories"] ?? null)], false);
        // line 114
        yield "
    </section>

    <script>

        (async function() {
            const module = await import(\"/js/modules/Forms/ServiceCatalogController.js\");
            const icons = {};
            ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["icons"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["icon"]) {
            // line 123
            yield "                icons[\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "js"), "html", null, true);
            yield "\"] = \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["icon"], "js"), "html", null, true);
            yield "\";
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['icon'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "            window.GlpiServiceCatalog = new module.GlpiFormServiceCatalogController(icons);
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
        return "pages/self-service/service_catalog.html.twig";
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
        return array (  170 => 125,  159 => 123,  155 => 122,  145 => 114,  143 => 111,  142 => 107,  141 => 106,  140 => 101,  133 => 97,  130 => 96,  123 => 95,  109 => 85,  102 => 80,  100 => 66,  99 => 65,  98 => 63,  93 => 61,  84 => 55,  72 => 46,  66 => 42,  59 => 41,  54 => 35,  52 => 39,  50 => 37,  48 => 33,  41 => 35,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/self-service/service_catalog.html.twig", "/var/www/html/glpi/templates/pages/self-service/service_catalog.html.twig");
    }
}
