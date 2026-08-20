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

/* layout/parts/breadcrumbs.html.twig */
class __TwigTemplate_b47e6d145fdf95db5c1cf98293c6490a extends Template
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
<ol class=\"breadcrumb breadcrumb-alternate pe-1 pe-sm-3\" aria-label=\"breadcrumbs\">
   <li class=\"breadcrumb-item text-truncate\">
      <a href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
        yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Home"), "html", null, true);
        yield "\">
         <i class=\"ti ti-home-2\"></i>
         ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Home"), "html", null, true);
        yield "
      </a>
   </li>

   ";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", true, true, false, 41)) {
            // line 42
            yield "   <li class=\"breadcrumb-item text-truncate\">
      <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 43), "default", [], "array", true, true, false, 43) &&  !(null === (($_v0 = (($_v1 = ($context["menu"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["default"] ?? null) : null)))) ? ((($_v2 = (($_v3 = ($context["menu"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["default"] ?? null) : null)) : ("/front/central.php"))), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = (($_v5 = ($context["menu"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["title"] ?? null) : null), "html", null, true);
            yield "\">
         <i class=\"";
            // line 44
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 44), "icon", [], "array", true, true, false, 44) &&  !(null === (($_v6 = (($_v7 = ($context["menu"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["icon"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = (($_v9 = ($context["menu"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["icon"] ?? null) : null), "html", null, true)) : (""));
            yield "\"></i>
         ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = (($_v11 = ($context["menu"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["title"] ?? null) : null), "html", null, true);
            yield "
      </a>
   </li>
   ";
        }
        // line 49
        yield "
   ";
        // line 50
        $context["with_option"] = false;
        // line 51
        yield "   ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 51), "content", [], "array", false, true, false, 51), ($context["item"] ?? null), [], "array", true, true, false, 51)) {
            // line 52
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 52), "content", [], "array", false, true, false, 52), ($context["item"] ?? null), [], "array", false, true, false, 52), "page", [], "array", true, true, false, 52)) {
                // line 53
                yield "      ";
                $context["with_option"] = (( !Twig\Extension\CoreExtension::testEmpty(($context["option"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 53), "content", [], "array", false, true, false, 53), ($context["item"] ?? null), [], "array", false, true, false, 53), "options", [], "array", false, true, false, 53), ($context["option"] ?? null), [], "array", false, true, false, 53), "title", [], "array", true, true, false, 53)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 53), "content", [], "array", false, true, false, 53), ($context["item"] ?? null), [], "array", false, true, false, 53), "options", [], "array", false, true, false, 53), ($context["option"] ?? null), [], "array", false, true, false, 53), "page", [], "array", true, true, false, 53));
                // line 54
                yield "      <li class=\"breadcrumb-item text-truncate\">
         <a href=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($_v12 = (($_v13 = (($_v14 = (($_v15 = ($context["menu"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["content"] ?? null) : null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[($context["item"] ?? null)] ?? null) : null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["page"] ?? null) : null)), "html", null, true);
                yield "\"
            class=\"";
                // line 56
                yield (((($tmp = ($context["with_option"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("here"));
                yield "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
            title=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v16 = (($_v17 = (($_v18 = (($_v19 = ($context["menu"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["content"] ?? null) : null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[($context["item"] ?? null)] ?? null) : null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["title"] ?? null) : null), "html", null, true);
                yield "\" >
            <i class=\"";
                // line 59
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 59), "content", [], "array", false, true, false, 59), ($context["item"] ?? null), [], "array", false, true, false, 59), "icon", [], "array", true, true, false, 59) &&  !(null === (($_v20 = (($_v21 = (($_v22 = (($_v23 = ($context["menu"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["content"] ?? null) : null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[($context["item"] ?? null)] ?? null) : null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["icon"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v24 = (($_v25 = (($_v26 = (($_v27 = ($context["menu"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["content"] ?? null) : null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[($context["item"] ?? null)] ?? null) : null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["icon"] ?? null) : null), "html", null, true)) : (""));
                yield "\"></i>
            ";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v28 = (($_v29 = (($_v30 = (($_v31 = ($context["menu"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["content"] ?? null) : null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[($context["item"] ?? null)] ?? null) : null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["title"] ?? null) : null), "html", null, true);
                yield "
         </a>
      </li>
      ";
            }
            // line 64
            yield "
      ";
            // line 65
            if ((($tmp = ($context["with_option"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 66
                yield "      <li class=\"breadcrumb-item text-truncate\">
         <a href=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($_v32 = (($_v33 = (($_v34 = (($_v35 = (($_v36 = (($_v37 = ($context["menu"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["content"] ?? null) : null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[($context["item"] ?? null)] ?? null) : null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["options"] ?? null) : null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[($context["option"] ?? null)] ?? null) : null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["page"] ?? null) : null)), "html", null, true);
                yield "\"
            class=\"here\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
            title=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v38 = (($_v39 = (($_v40 = (($_v41 = (($_v42 = (($_v43 = ($context["menu"] ?? null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42["content"] ?? null) : null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41[($context["item"] ?? null)] ?? null) : null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["options"] ?? null) : null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[($context["option"] ?? null)] ?? null) : null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["title"] ?? null) : null), "html", null, true);
                yield "\" >
            <i class=\"";
                // line 71
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 71), "content", [], "array", false, true, false, 71), ($context["item"] ?? null), [], "array", false, true, false, 71), "options", [], "array", false, true, false, 71), ($context["option"] ?? null), [], "array", false, true, false, 71), "icon", [], "array", true, true, false, 71) &&  !(null === (($_v44 = (($_v45 = (($_v46 = (($_v47 = (($_v48 = (($_v49 = ($context["menu"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48["content"] ?? null) : null)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47[($context["item"] ?? null)] ?? null) : null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46["options"] ?? null) : null)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45[($context["option"] ?? null)] ?? null) : null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44["icon"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v50 = (($_v51 = (($_v52 = (($_v53 = (($_v54 = (($_v55 = ($context["menu"] ?? null)) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54["content"] ?? null) : null)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53[($context["item"] ?? null)] ?? null) : null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52["options"] ?? null) : null)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51[($context["option"] ?? null)] ?? null) : null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50["icon"] ?? null) : null), "html", null, true)) : (""));
                yield "\"></i>
            ";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((($_v56 = (($_v57 = (($_v58 = (($_v59 = (($_v60 = (($_v61 = ($context["menu"] ?? null)) && is_array($_v61) || $_v61 instanceof ArrayAccess ? ($_v61[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v60) || $_v60 instanceof ArrayAccess ? ($_v60["content"] ?? null) : null)) && is_array($_v59) || $_v59 instanceof ArrayAccess ? ($_v59[($context["item"] ?? null)] ?? null) : null)) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58["options"] ?? null) : null)) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57[($context["option"] ?? null)] ?? null) : null)) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56["title"] ?? null) : null)), "truncate", [17, "..."], "method", false, false, false, 72), "html", null, true);
                yield "
         </a>
      </li>
      ";
            }
            // line 76
            yield "
   ";
        }
        // line 78
        yield "</ol>

";
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 80), "content", [], "array", false, true, false, 80), ($context["item"] ?? null), [], "array", true, true, false, 80)) {
            // line 81
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/context_links.html.twig");
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/breadcrumbs.html.twig";
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
        return array (  163 => 81,  161 => 80,  157 => 78,  153 => 76,  146 => 72,  142 => 71,  138 => 70,  132 => 67,  129 => 66,  127 => 65,  124 => 64,  117 => 60,  113 => 59,  109 => 58,  104 => 56,  100 => 55,  97 => 54,  94 => 53,  91 => 52,  88 => 51,  86 => 50,  83 => 49,  76 => 45,  72 => 44,  66 => 43,  63 => 42,  61 => 41,  54 => 37,  47 => 35,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/breadcrumbs.html.twig", "/var/www/html/glpi/templates/layout/parts/breadcrumbs.html.twig");
    }
}
