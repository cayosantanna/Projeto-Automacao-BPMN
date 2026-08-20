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

/* components/table.html.twig */
class __TwigTemplate_032bbe83e0156f3cef56e0d63c046ba2 extends Template
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
<div class=\"table-responsive card-table\">
   <table class=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("class", $context)) ? (Twig\Extension\CoreExtension::default(($context["class"] ?? null), "")) : ("")), "html", null, true);
        yield "\">
      <thead>
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["header_rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["header_row"]) {
            // line 37
            yield "         <tr>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["header_row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 39
                yield "               ";
                if ((($tmp =  !is_iterable($context["header"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 40
                    yield "                  ";
                    $context["header"] = ["content" => $context["header"]];
                    // line 41
                    yield "               ";
                }
                // line 42
                yield "               <th colspan=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["header"], "colspan", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "colspan", [], "any", false, false, false, 42), 1)) : (1)), "html", null, true);
                yield "\" style=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["header"], "style", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "style", [], "any", false, false, false, 42), "")) : ("")), "html", null, true);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 42);
                yield "</th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['header'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "         </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['header_row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "      </thead>
      <tbody>
      ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 49
            yield "         <tr class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "class", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "class", [], "any", false, false, false, 49), "")) : ("")), "html", null, true);
            yield "\">
            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "values", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 51
                yield "               ";
                if ((($tmp =  !is_iterable($context["value"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 52
                    yield "                  ";
                    $context["value"] = ["content" => $context["value"]];
                    // line 53
                    yield "               ";
                }
                // line 54
                yield "               <td colspan=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "colspan", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "colspan", [], "any", false, false, false, 54), 1)) : (1)), "html", null, true);
                yield "\" class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "class", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "class", [], "any", false, false, false, 54), "")) : ("")), "html", null, true);
                yield "\" style=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "style", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "style", [], "any", false, false, false, 54), "")) : ("")), "html", null, true);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["value"], "content", [], "any", false, false, false, 54);
                yield "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "         </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "      </tbody>
   </table>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/table.html.twig";
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
        return array (  139 => 58,  132 => 56,  117 => 54,  114 => 53,  111 => 52,  108 => 51,  104 => 50,  99 => 49,  95 => 48,  91 => 46,  84 => 44,  71 => 42,  68 => 41,  65 => 40,  62 => 39,  58 => 38,  55 => 37,  51 => 36,  46 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/table.html.twig", "/var/www/html/glpi/templates/components/table.html.twig");
    }
}
