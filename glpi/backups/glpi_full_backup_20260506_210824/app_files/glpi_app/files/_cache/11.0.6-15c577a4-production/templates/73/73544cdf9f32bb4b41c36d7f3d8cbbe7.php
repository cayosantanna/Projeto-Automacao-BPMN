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

/* pages/tools/savedsearch/save_button.html.twig */
class __TwigTemplate_bcd8b0e95ed0b9b3266030c25dd83342 extends Template
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
        $context["params"] = ["action" => "create", "itemtype" =>         // line 35
($context["itemtype"] ?? null), "type" =>         // line 36
($context["type"] ?? null)];
        // line 38
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "savedsearches_id", [], "array", true, true, false, 38)) {
            // line 39
            yield "   ";
            $context["params"] = Twig\Extension\CoreExtension::merge(($context["params"] ?? null), ["id" => (($_v0 =             // line 40
($context["_get"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["savedsearches_id"] ?? null) : null)]);
        }
        // line 43
        yield "
<button type=\"button\" name=\"save_bookmark_record\" class=\"btn btn-sm px-2 btn-outline-secondary btn-icon\"
        title=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save current search"), "html", null, true);
        yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
   <i class=\"ti ti-bookmark-plus ";
        // line 46
        yield (((($tmp = ($context["active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active text-yellow") : (""));
        yield "\"></i>
</button>
<div id=\"savedsearch-modal\" class=\"modal\" data-params=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["params"] ?? null)), "html", null, true);
        yield "\"></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/tools/savedsearch/save_button.html.twig";
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
        return array (  69 => 48,  64 => 46,  60 => 45,  56 => 43,  53 => 40,  51 => 39,  49 => 38,  47 => 36,  46 => 35,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/tools/savedsearch/save_button.html.twig", "/var/www/html/glpi/templates/pages/tools/savedsearch/save_button.html.twig");
    }
}
