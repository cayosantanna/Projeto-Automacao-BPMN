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

/* central/lists/itemtype_count.html.twig */
class __TwigTemplate_fadc1e6bdfdc51a8303773f55a61ded2 extends Template
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
        // line 50
        yield "
<div class=\"card\">
   <div class=\"card-body\">
      <div class=\"card-title d-flex justify-content-between\">
         ";
        // line 54
        yield $this->getTemplateForMacro("macro_link_or_text", $context, 54, $this->getSourceContext())->macro_link_or_text(...[($context["title"] ?? null)]);
        yield "

         ";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["title"] ?? null), "button", [], "any", true, true, false, 56)) {
            // line 57
            yield "            ";
            yield $this->getTemplateForMacro("macro_link_or_text", $context, 57, $this->getSourceContext())->macro_link_or_text(...[CoreExtension::getAttribute($this->env, $this->source, ($context["title"] ?? null), "button", [], "any", false, false, false, 57), "btn btn-sm btn-outline-secondary"]);
            yield "
         ";
        }
        // line 59
        yield "      </div>

      ";
        // line 61
        if (array_key_exists("subtitle", $context)) {
            // line 62
            yield "         <div class=\"card-subtitle\">
            ";
            // line 63
            yield $this->getTemplateForMacro("macro_link_or_text", $context, 63, $this->getSourceContext())->macro_link_or_text(...[($context["subtitle"] ?? null)]);
            yield "
         </div>
      ";
        }
        // line 66
        yield "   </div>


   <ul class=\"list-group list-group-flush\">
      ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 71
            yield "         ";
            yield $this->getTemplateForMacro("macro_link_or_text", $context, 71, $this->getSourceContext())->macro_link_or_text(...[$context["item"], "list-group-item list-group-item-action d-flex justify-content-between align-items-center"]);
            yield "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "   </ul>
</div>
";
        yield from [];
    }

    // line 33
    public function macro_link_or_text($value = null, $anchor_class = "", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "value" => $value,
            "anchor_class" => $anchor_class,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "link", [], "any", true, true, false, 34)) {
                // line 35
                yield "      <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["anchor_class"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "link", [], "any", false, false, false, 35), "html", null, true);
                yield "\">
   ";
            }
            // line 37
            yield "         <span>
            ";
            // line 38
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "icon", [], "any", true, true, false, 38)) {
                // line 39
                yield "               <i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "icon", [], "any", false, false, false, 39), "html", null, true);
                yield "\"></i>
            ";
            }
            // line 41
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "text", [], "any", false, false, false, 41), "html", null, true);
            yield "
         </span>
         ";
            // line 43
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "count", [], "any", true, true, false, 43)) {
                // line 44
                yield "            <span class=\"badge bg-secondary text-secondary-fg\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "count", [], "any", false, false, false, 44), "html", null, true);
                yield "</span>
         ";
            }
            // line 46
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "link", [], "any", true, true, false, 46)) {
                // line 47
                yield "      </a>
   ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "central/lists/itemtype_count.html.twig";
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
        return array (  157 => 47,  154 => 46,  148 => 44,  146 => 43,  140 => 41,  134 => 39,  132 => 38,  129 => 37,  121 => 35,  118 => 34,  105 => 33,  98 => 73,  89 => 71,  85 => 70,  79 => 66,  73 => 63,  70 => 62,  68 => 61,  64 => 59,  58 => 57,  56 => 56,  51 => 54,  45 => 50,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "central/lists/itemtype_count.html.twig", "/var/www/html/glpi/templates/central/lists/itemtype_count.html.twig");
    }
}
