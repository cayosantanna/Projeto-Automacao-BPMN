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

/* central/messages.html.twig */
class __TwigTemplate_8d81f4a8a75b64a62b22908344683866 extends Template
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
<div class=\"message-area\">
   ";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "errors", [], "any", true, true, false, 34) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "errors", [], "any", false, false, false, 34)) > 0))) {
            // line 35
            yield "      <div class=\"alert alert-important alert-danger d-flex\" role=\"alert\">
         <i class=\"ti ti-alert-triangle fs-3x\"></i>
         <ul>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "errors", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 39
                yield "               <li>";
                yield $context["error"];
                yield "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "         </ul>
      </div>
   ";
        }
        // line 44
        yield "   ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "warnings", [], "any", true, true, false, 44) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "warnings", [], "any", false, false, false, 44)) > 0))) {
            // line 45
            yield "      <div class=\"alert alert-important alert-warning d-flex\" role=\"alert\">
         <i class=\"ti ti-alert-triangle fs-3x\"></i>
         <ul>
            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "warnings", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 49
                yield "               <li>";
                yield $context["warning"];
                yield "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['warning'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "         </ul>
      </div>
   ";
        }
        // line 54
        yield "   ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "infos", [], "any", true, true, false, 54) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "infos", [], "any", false, false, false, 54)) > 0))) {
            // line 55
            yield "      <div class=\"alert alert-important alert-info d-flex\" role=\"alert\">
         <i class=\"ti ti-info-circle fs-3x\"></i>
         <ul>
            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["messages"] ?? null), "infos", [], "any", false, false, false, 58));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 59
                yield "               <li>";
                yield $context["info"];
                yield "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['info'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "         </ul>
      </div>
   ";
        }
        // line 64
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "central/messages.html.twig";
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
        return array (  123 => 64,  118 => 61,  109 => 59,  105 => 58,  100 => 55,  97 => 54,  92 => 51,  83 => 49,  79 => 48,  74 => 45,  71 => 44,  66 => 41,  57 => 39,  53 => 38,  48 => 35,  46 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "central/messages.html.twig", "/var/www/html/glpi/templates/central/messages.html.twig");
    }
}
