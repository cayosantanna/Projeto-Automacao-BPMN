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

/* install/blocks/requirements_table.html.twig */
class __TwigTemplate_e33c4b83a8bd32de0c658c6fade2df65 extends Template
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
<table class=\"table tab_check\">
   <thead>
      <tr>
         <th>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Test done"), "html", null, true);
        yield "</th>
         <th>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Results"), "html", null, true);
        yield "</th>
      </tr>
   </thead>
   <tbody>
      ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["requirements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
            // line 42
            yield "         ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isOutOfContext", [], "method", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "            ";
                $context["is_important"] = ( !CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 43) || CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isRecommendedForSecurity", [], "method", false, false, false, 43));
                // line 44
                yield "            <tr class=\"tab_bg_1\">
               <td class=\"text-start\">
                  ";
                // line 46
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 47
                    yield "                     <span class=\"badge bg-warning-lt\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Required"), "html", null, true);
                    yield "</span>
                  ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 48
$context["requirement"], "isRecommendedForSecurity", [], "method", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 49
                    yield "                     <span class=\"badge bg-danger-lt\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Security"), "html", null, true);
                    yield "</span>
                  ";
                } else {
                    // line 51
                    yield "                     <span class=\"badge bg-secondary text-secondary-fg\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Suggested"), "html", null, true);
                    yield "</span>
                  ";
                }
                // line 53
                yield "                  <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "getTitle", [], "method", false, false, false, 53), "html", null, true);
                yield "</strong>
                  ";
                // line 54
                $context["description"] = CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "getDescription", [], "method", false, false, false, 54);
                // line 55
                yield "                  ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 56
                    yield "                      <br />
                      <em>";
                    // line 57
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "getDescription", [], "method", false, false, false, 57), "html", null, true);
                    yield "</em>
                  ";
                }
                // line 59
                yield "                  ";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isValidated", [], "method", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 60
                    yield "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "getValidationMessages", [], "method", false, false, false, 60));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 61
                        yield "                          <br />
                          <strong>
                             <em class=\"";
                        // line 63
                        yield (((($tmp = ($context["is_important"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("red") : ("missing"));
                        yield "\">
                                ";
                        // line 64
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                        yield "
                             </em>
                          </strong>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 68
                    yield "                  ";
                }
                // line 69
                yield "               </td>
               <td class=\"";
                // line 70
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isMissing", [], "method", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = ($context["is_important"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("red") : ("missing"))) : ("green"));
                yield "\">
                  <span data-bs-toggle=\"popover\"
                        data-bs-placement=\"right\"
                        data-bs-html=\"true\"
                        data-bs-custom-class=\"validation-messages\"
                        data-bs-content=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "getValidationMessages", [], "method", false, false, false, 75), "<br />"), "html", null, true);
                yield "\">
                     <i class=\"";
                // line 76
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isValidated", [], "method", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ti ti-check") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ti ti-alert-triangle") : ("ti ti-x"))));
                yield "\"></i>
                  </span>
               </td>
            </tr>
         ";
            }
            // line 81
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['requirement'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "   </tbody>
</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/blocks/requirements_table.html.twig";
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
        return array (  170 => 82,  164 => 81,  156 => 76,  152 => 75,  144 => 70,  141 => 69,  138 => 68,  128 => 64,  124 => 63,  120 => 61,  115 => 60,  112 => 59,  107 => 57,  104 => 56,  101 => 55,  99 => 54,  94 => 53,  88 => 51,  82 => 49,  80 => 48,  75 => 47,  73 => 46,  69 => 44,  66 => 43,  63 => 42,  59 => 41,  52 => 37,  48 => 36,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/blocks/requirements_table.html.twig", "/var/www/html/glpi/templates/install/blocks/requirements_table.html.twig");
    }
}
