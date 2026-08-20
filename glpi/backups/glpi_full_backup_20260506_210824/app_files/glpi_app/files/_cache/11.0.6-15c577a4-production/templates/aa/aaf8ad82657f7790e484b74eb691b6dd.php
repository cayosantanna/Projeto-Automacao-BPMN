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

/* components/search/query_builder/sort/criteria.html.twig */
class __TwigTemplate_0e9611a8c58daed10fbc50a309b5becc extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 36
        $context["dd_options"] = ["rand" =>         // line 37
($context["rand"] ?? null), "full_width" => true, "input_class" => "col-12", "no_label" => true, "mb" => "mb-0"];
        // line 43
        yield "
";
        // line 44
        $context["order_dropdown_template"] = new Markup("    (option) => {
        if (!option.id) {
            return _.escape(option.text);
        }

        let container = document.createElement('span');
        if (option.id === 'ASC') {
            container.innerHTML = '<i class=\"ti ti-sort-ascending me-1\"></i>' + _.escape(option.text);
        } else if (option.id === 'DESC') {
            container.innerHTML = '<i class=\"ti ti-sort-descending me-1\"></i>' + _.escape(option.text);
        }

        return container;
    }
", $this->env->getCharset());
        // line 60
        yield "<div class=\"list-group-item border-0 p-2\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rowid"] ?? null), "html", null, true);
        yield "\">
    <div class=\"row g-1\">
        <div class=\"col-auto\">
            <button class=\"btn btn-sm btn-icon btn-ghost-secondary remove-order-criteria\" type=\"button\" data-rowid=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rowid"] ?? null), "html", null, true);
        yield "\"
                    data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete a sort"), "html", null, true);
        yield "\">
                <i class=\"ti ti-square-rounded-minus\" alt=\"-\"></i>
            </button>
        </div>

        <div class=\"col-auto\">
            ";
        // line 70
        $context["sort_value"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "soption_id", [], "array", true, true, false, 70) &&  !(null === (($_v0 = ($context["order"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["soption_id"] ?? null) : null)))) ? ((($_v1 = ($context["order"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["soption_id"] ?? null) : null)) : (""));
        // line 71
        yield "            ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 71, $this->getSourceContext())->macro_dropdownArrayField(...[("sort" . "[]"), ($context["sort_value"] ?? null), ($context["values"] ?? null), "", Twig\Extension\CoreExtension::merge(($context["dd_options"] ?? null), ["used" => (((        // line 72
array_key_exists("used", $context) &&  !(null === $context["used"]))) ? ($context["used"]) : ([]))])]);
        // line 73
        yield "
        </div>

        <div class=\"col-auto\">
            ";
        // line 77
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 77, $this->getSourceContext())->macro_dropdownArrayField(...[("order" . "[]"), (($_v2 = ($context["order"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["order"] ?? null) : null), ["ASC" => __("ASC"), "DESC" => __("DESC")], "", Twig\Extension\CoreExtension::merge(        // line 80
($context["dd_options"] ?? null), ["templateResult" =>         // line 81
($context["order_dropdown_template"] ?? null), "templateSelection" =>         // line 82
($context["order_dropdown_template"] ?? null)])]);
        // line 83
        yield "
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search/query_builder/sort/criteria.html.twig";
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
        return array (  111 => 83,  109 => 82,  108 => 81,  107 => 80,  106 => 77,  100 => 73,  98 => 72,  96 => 71,  94 => 70,  85 => 64,  81 => 63,  74 => 60,  58 => 44,  55 => 43,  53 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/query_builder/sort/criteria.html.twig", "/var/www/html/glpi/templates/components/search/query_builder/sort/criteria.html.twig");
    }
}
