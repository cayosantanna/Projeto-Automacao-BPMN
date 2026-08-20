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

/* components/user/create_user.html.twig */
class __TwigTemplate_54ad2d5e1ae07adf50da015cd4dd7d56 extends Template
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
<span data-bs-toggle=\"tooltip\"
      data-bs-placement=\"right\"
      title=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Create user"), "html", null, true);
        yield "\">
    <span class=\"btn btn-icon btn-sm btn-ghost-secondary ms-2\"
          id=\"create_user_";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null), "html", null, true);
        yield "\"
          data-bs-toggle=\"modal\"
          data-bs-target=\"#add_";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["id"] ?? null) : null), "html", null, true);
        yield "\">
        <i class=\"ti ti-user-plus\"></i>
    </span>
</span>
<script type=\"text/javascript\">
    \$(function() {
        const button   = \$('#create_user_";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null), "html", null, true);
        yield "');

        // Prevent toggle only if mousedown and mouseup were done on button (i.e. it is a click).
        // It is not possible to use `e.preventDefault()` on a `click` event,
        // as current handler is executed after bootstrap handlers.
        var mousedown_catched = false;
        var prevent_toggle    = false;
        button.on('mousedown', function(e) {
            mousedown_catched = true;
        });
        button.on('mouseup', function(e) {
            prevent_toggle = mousedown_catched;
        });
        const collapse = button.closest('.accordion-item').find('.accordion-collapse');
        collapse.on('show.bs.collapse hide.bs.collapse', function(e) {
            if (prevent_toggle) {
                e.preventDefault();
                prevent_toggle = false;
            }
        });
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/user/create_user.html.twig";
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
        return array (  66 => 45,  57 => 39,  52 => 37,  47 => 35,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/user/create_user.html.twig", "/var/www/html/glpi/templates/components/user/create_user.html.twig");
    }
}
