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

/* components/search/displaypreference_modal.html.twig */
class __TwigTemplate_e9c41a762cadffb1c77a8ed0ec4affbf extends Template
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
        $context["rand"] = ((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset())));
        // line 34
        yield "
<div id=\"displaypreference_modal";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"modal fade\" role=\"dialog\">
   <div class=\"modal-dialog modal-lg\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            ";
        // line 39
        $context["header"] = __("Select default items to show");
        // line 40
        yield "            ";
        if ((($context["itemtype"] ?? null) != "__VALUE__")) {
            // line 41
            yield "               ";
            $context["header"] = ((($context["header"] ?? null) . " - ") . $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype"] ?? null)));
            // line 42
            yield "            ";
        }
        // line 43
        yield "            <h4 class=\"modal-title\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["header"] ?? null), "html", null, true);
        yield "</h4>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "\"></button>
         </div>
         <div class=\"modal-body\">
            <div class=\"ratio ratio-1x1\">
               <iframe data-testid=\"display-preference-iframe\" src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/front/displaypreference.form.php?itemtype=" . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "url"))), "html", null, true);
        yield "\"></iframe>
            </div>
         </div>
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
        return "components/search/displaypreference_modal.html.twig";
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
        return array (  80 => 48,  73 => 44,  68 => 43,  65 => 42,  62 => 41,  59 => 40,  57 => 39,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/displaypreference_modal.html.twig", "/var/www/html/glpi/templates/components/search/displaypreference_modal.html.twig");
    }
}
