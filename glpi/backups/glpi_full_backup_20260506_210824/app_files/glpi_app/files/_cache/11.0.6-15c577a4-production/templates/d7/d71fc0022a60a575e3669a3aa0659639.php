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

/* components/dates_timeline.html.twig */
class __TwigTemplate_55a4d1bd2e59e1c7a45fad8e4fec2781 extends Template
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
<div class=\"dates_timelines\">
   ";
        // line 34
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["title"] ?? null)) > 0)) {
            // line 35
            yield "      <h2 class=\"header\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</h2>
   ";
        }
        // line 37
        yield "
   <ul>
      ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 40
            yield "         ";
            if (((($_v0 = $context["data"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["timestamp"] ?? null) : null) != 0)) {
                // line 41
                yield "            <li class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = $context["data"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["class"] ?? null) : null), "html", null, true);
                yield "\">
               &nbsp;
               <time title=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v2 = $context["data"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["date"] ?? null) : null)), "html", null, true);
                yield "\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"right\">
                  ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime((($_v3 = $context["data"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["date"] ?? null) : null)), "html", null, true);
                yield "
               </time>
               <span class=\"dot\"></span>
               <label>";
                // line 48
                yield (($_v4 = $context["data"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["label"] ?? null) : null);
                yield "</label>
            </li>
         ";
            }
            // line 51
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "   </ul>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/dates_timeline.html.twig";
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
        return array (  94 => 52,  88 => 51,  82 => 48,  76 => 45,  71 => 43,  65 => 41,  62 => 40,  58 => 39,  54 => 37,  48 => 35,  46 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/dates_timeline.html.twig", "/var/www/html/glpi/templates/components/dates_timeline.html.twig");
    }
}
