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

/* components/helpdesk_forms/service_catalog_item.html.twig */
class __TwigTemplate_498c64144c62f5279621e73692ca86d6 extends Template
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
        $context["unique_dom_id"] = ("service-catalog-tree-" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
        // line 34
        $context["is_pinned"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 34), "is_pinned", [], "array", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 34)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["is_pinned"] ?? null) : null), false)) : (false));
        // line 35
        yield "
<div class=\"col-12 col-sm-6 col-md-4 d-flex\">
    <a
        class=\"card mx-1 my-2 flex-grow-1 ";
        // line 38
        yield (((($tmp = ($context["is_pinned"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-menu") : (""));
        yield "\"
        ";
        // line 39
        if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "Glpi\\Form\\ServiceCatalog\\ServiceCatalogLeafInterface")) {
            // line 40
            yield "            href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getServiceCatalogLink", [], "method", false, false, false, 40), "html", null, true);
            yield "\"
        ";
        } elseif ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(        // line 41
($context["item"] ?? null), "Glpi\\Form\\ServiceCatalog\\ServiceCatalogCompositeInterface")) {
            // line 42
            yield "            href=\"?";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getChildrenUrlParameters", [], "method", false, false, false, 42), "html", null, true);
            yield "\"
            data-children-url-parameters=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getChildrenUrlParameters", [], "method", false, false, false, 43), "html", null, true);
            yield "\"
            data-composite-item
        ";
        }
        // line 46
        yield "    >
        <section
            class=\"card-body\"
            aria-labelledby=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_dom_id"] ?? null), "html", null, true);
        yield "\"
        >
            <div class=\"d-flex\">
                ";
        // line 52
        yield $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderIllustration((((CoreExtension::getAttribute($this->env, $this->source,         // line 53
($context["item"] ?? null), "getServiceCatalogItemIllustration", [], "method", true, true, false, 53) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getServiceCatalogItemIllustration", [], "method", false, false, false, 53)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getServiceCatalogItemIllustration", [], "method", false, false, false, 53)) : ("report-issue.svg")), 100);
        // line 55
        yield "
                <div class=\"ms-4\">
                    <div class=\"d-flex mb-2 align-items-center\">
                        <h2
                            id=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_dom_id"] ?? null), "html", null, true);
        yield "\"
                            class=\"card-title mb-0\"
                        >
                            ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getServiceCatalogItemTitle", [], "method", false, false, false, 62), "html", null, true);
        yield "
                        </h2>
                        ";
        // line 64
        if ((($tmp = ($context["is_pinned"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "                            <i class=\"ti ti-pin ms-auto\"></i>
                        ";
        }
        // line 67
        yield "                    </div>
                    <div
                        class=\"text-secondary remove-last-tinymce-margin\"
                        data-testid=\"service-catalog-description\"
                    >
                        ";
        // line 72
        yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getServiceCatalogItemDescription", [], "method", false, false, false, 72));
        yield "
                    </div>
                </div>
            </div>
        </section>
    </a>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/helpdesk_forms/service_catalog_item.html.twig";
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
        return array (  122 => 72,  115 => 67,  111 => 65,  109 => 64,  104 => 62,  98 => 59,  92 => 55,  90 => 53,  89 => 52,  83 => 49,  78 => 46,  72 => 43,  67 => 42,  65 => 41,  60 => 40,  58 => 39,  54 => 38,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/helpdesk_forms/service_catalog_item.html.twig", "/var/www/html/glpi/templates/components/helpdesk_forms/service_catalog_item.html.twig");
    }
}
