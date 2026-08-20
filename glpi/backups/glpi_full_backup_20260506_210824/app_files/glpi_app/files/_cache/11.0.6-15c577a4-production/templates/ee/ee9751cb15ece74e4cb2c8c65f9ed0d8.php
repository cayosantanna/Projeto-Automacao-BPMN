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

/* components/itilobject/timeline/todo-list-summary.html.twig */
class __TwigTemplate_3f93dec30a8407e5c49ceec5f029b9fa extends Template
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
        $context["timeline_stats"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTimelineStats", [], "method", false, false, false, 33);
        // line 34
        $context["total_duration"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["timeline_stats"] ?? null), "total_duration", [], "array", true, true, false, 34) &&  !(null === (($_v0 = ($context["timeline_stats"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["total_duration"] ?? null) : null)))) ? ((($_v1 = ($context["timeline_stats"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["total_duration"] ?? null) : null)) : (0));
        // line 35
        $context["todo_percent"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["timeline_stats"] ?? null), "percent_done", [], "array", true, true, false, 35) &&  !(null === (($_v2 = ($context["timeline_stats"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["percent_done"] ?? null) : null)))) ? ((($_v3 = ($context["timeline_stats"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["percent_done"] ?? null) : null)) : (0));
        // line 36
        yield "
<div class=\"timeline-item timeline_stats pb-3\">
   <div class=\"mb-2 ms-1 text-muted\">
      ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Total duration: %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration(($context["total_duration"] ?? null))), "html", null, true);
        yield "
   </div>
   <div class=\"d-flex\">
      <span class=\"task-progress-label mx-2\">
         ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["todo_percent"] ?? null), "html", null, true);
        yield "%
      </span>
      <div class=\"progress mt-1\" style=\"max-width: 260px\">
         <div class=\"progress-bar progress-bar-striped timeline-progress\" role=\"progressbar\" style=\"width: ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["todo_percent"] ?? null), "html", null, true);
        yield "%;\"
              aria-valuenow=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["todo_percent"] ?? null), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
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
        return "components/itilobject/timeline/todo-list-summary.html.twig";
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
        return array (  73 => 47,  69 => 46,  63 => 43,  56 => 39,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/todo-list-summary.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/todo-list-summary.html.twig");
    }
}
