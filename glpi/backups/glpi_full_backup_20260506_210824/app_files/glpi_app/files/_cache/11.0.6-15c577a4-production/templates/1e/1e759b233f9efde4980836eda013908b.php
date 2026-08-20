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

/* layout/parts/global_search_form.html.twig */
class __TwigTemplate_1882e8f88af334ca458c5db6c6009ac8 extends Template
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
        if ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central") && $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("allow_search_global"))) {
            // line 34
            yield "<form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/search.php"), "html", null, true);
            yield "\" role=\"search\" method=\"get\" data-submit-once>
   <div class=\"input-group input-group-flat\">
      <input type=\"text\" class=\"form-control\" name=\"globalsearch\" placeholder=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search…"), "html", null, true);
            yield "\" />
      <span class=\"input-group-text p-0\">
         <button type=\"submit\" class=\"btn btn-link p-0 m-0\" title=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search…"), "html", null, true);
            yield "\">
            <span class=\"ti ti-search\" aria-hidden=\"true\"></span>
         </button>
      </span>
   </div>
</form>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/global_search_form.html.twig";
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
        return array (  58 => 38,  53 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/global_search_form.html.twig", "/var/www/html/glpi/templates/layout/parts/global_search_form.html.twig");
    }
}
