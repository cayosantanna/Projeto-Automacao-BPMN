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

/* components/form/modals_macros.html.twig */
class __TwigTemplate_cf2c6dc720275c84065e712f606e55f5 extends Template
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
";
        yield from [];
    }

    // line 33
    public function macro_confirm($modal_title = "", $modal_body = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "modal_title" => $modal_title,
            "modal_body" => $modal_body,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["buttons" => ["cancel" => ["label" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 37
($context["options"] ?? null), "cancel_label", [], "array", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["options"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["cancel_label"] ?? null) : null), _x("button", "Cancel"))) : (_x("button", "Cancel"))), "event" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 38
($context["options"] ?? null), "cancel_event", [], "array", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["options"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["cancel_event"] ?? null) : null), "")) : (""))], "confirm" => ["label" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 41
($context["options"] ?? null), "confirm_label", [], "array", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default((($_v2 = ($context["options"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["confirm_label"] ?? null) : null), _x("button", "Ok"))) : (_x("button", "Ok"))), "event" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 42
($context["options"] ?? null), "confirm_event", [], "array", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default((($_v3 = ($context["options"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["confirm_event"] ?? null) : null), "")) : ("")), "class" => "ms-auto"]]],             // line 46
($context["options"] ?? null));
            // line 47
            yield "
   ";
            // line 48
            yield $this->getTemplateForMacro("macro_modal", $context, 48, $this->getSourceContext())->macro_modal(...[($context["modal_title"] ?? null), ($context["modal_body"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function macro_modal($modal_title = null, $modal_body = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "modal_title" => $modal_title,
            "modal_body" => $modal_body,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 52
            yield "   ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 53
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ("modal" .             // line 54
($context["rand"] ?? null)), "rand" =>             // line 55
($context["rand"] ?? null), "buttons" => [], "modal_classes" => ""],             // line 58
($context["options"] ?? null));
            // line 59
            yield "
   <div class=\"modal fade ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "modal_classes", [], "any", false, false, false, 60), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 60), "html", null, true);
            yield "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
         <div class=\"modal-content\">
            <div class=\"modal-header\">
               <h5 class=\"modal-title\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_title"] ?? null), "html", null, true);
            yield "</h5>
               <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Close"), "html", null, true);
            yield "\"></button>
            </div>
            <div class=\"modal-body overflow-auto\">
               ";
            // line 68
            yield ($context["modal_body"] ?? null);
            yield "
            </div>
            <div class=\"modal-footer\">
               ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v4 = ($context["options"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["buttons"] ?? null) : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 72
                yield "                  <button type=\"button\" class=\"btn ";
                yield (((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "primary", [], "array", true, true, false, 72) &&  !(null === (($_v5 = ($context["options"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["primary"] ?? null) : null)))) ? ((($_v6 = ($context["options"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["primary"] ?? null) : null)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-primary") : ("btn-outline-secondary"));
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "class", [], "array", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default((($_v7 = $context["button"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["class"] ?? null) : null), "")) : ("")), "html", null, true);
                yield "\"
                          id=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "id", [], "array", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default((($_v8 = $context["button"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["id"] ?? null) : null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 73) . "_btn_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 73)))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 73) . "_btn_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 73)))), "html", null, true);
                yield "\" data-bs-dismiss=\"modal\">
                     ";
                // line 74
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "label", [], "array", true, true, false, 74)) ? (Twig\Extension\CoreExtension::default((($_v9 = $context["button"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["label"] ?? null) : null), "")) : (""));
                yield "
                  </button>
               ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "            </div>
         </div>
      </div>
   </div>
   <script>
      \$(function () {
         ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v10 = ($context["options"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["buttons"] ?? null) : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 84
                yield "         \$('#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 84), "html", null, true);
                yield "').on('click', '#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "id", [], "array", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default((($_v11 = $context["button"]) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["id"] ?? null) : null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 84) . "_btn_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 84)))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 84) . "_btn_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 84)))), "html", null, true);
                yield "', function (event) {
            ";
                // line 85
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "event", [], "array", true, true, false, 85)) ? (Twig\Extension\CoreExtension::default((($_v12 = $context["button"]) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["event"] ?? null) : null), "return true;")) : ("return true;"));
                yield "
         });
         ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "      });
   </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/modals_macros.html.twig";
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
        return array (  229 => 88,  212 => 85,  205 => 84,  188 => 83,  180 => 77,  163 => 74,  159 => 73,  152 => 72,  135 => 71,  129 => 68,  123 => 65,  119 => 64,  110 => 60,  107 => 59,  105 => 58,  104 => 55,  103 => 54,  101 => 53,  98 => 52,  84 => 51,  76 => 48,  73 => 47,  71 => 46,  70 => 42,  69 => 41,  68 => 38,  67 => 37,  65 => 34,  51 => 33,  45 => 50,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/modals_macros.html.twig", "/var/www/html/glpi/templates/components/form/modals_macros.html.twig");
    }
}
