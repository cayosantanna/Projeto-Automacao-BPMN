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

/* components/modal.html.twig */
class __TwigTemplate_fb6899a283b8ae658c1c2783e53a9ac5 extends Template
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
<div class=\"modal-dialog ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_class"] ?? null), "html", null, true);
        yield "\">
   <div class=\"modal-content\">
      <div class=\"modal-header\">
         <h5 class=\"modal-title\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h5>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\"></div>
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
        return "components/modal.html.twig";
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
        return array (  55 => 37,  51 => 36,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/modal.html.twig", "/var/www/html/glpi/templates/components/modal.html.twig");
    }
}
