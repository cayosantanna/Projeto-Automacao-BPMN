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

/* pages/setup/general/base_form.html.twig */
class __TwigTemplate_83bb039f434bde01ce7413f26bf0111f extends Template
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
            'config_fields' => [$this, 'block_config_fields'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $context["form_path"] = ((array_key_exists("form_path", $context)) ? (Twig\Extension\CoreExtension::default(($context["form_path"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Config"))) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Config")));
        // line 34
        if ((($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "    <form name=\"form\"
          action=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_path"] ?? null), "html", null, true);
            yield "\"
          method=\"post\"
          data-track-changes=\"true\">
        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
";
        }
        // line 41
        yield "
<div class=\"row\">
    ";
        // line 43
        yield from $this->unwrap()->yieldBlock('config_fields', $context, $blocks);
        // line 45
        yield "</div>

";
        // line 47
        if ((($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "        <div class=\"card-footer mx-n2 d-flex\">
            <button type=\"submit\" name=\"update\" value=\"1\" class=\"ms-auto btn btn-primary\">
                <i class=\"ti ti-device-floppy\"></i>
                <span>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
            yield "</span>
            </button>
        </div>
    </form>
";
        }
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/base_form.html.twig";
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
        return array (  99 => 44,  92 => 43,  81 => 51,  76 => 48,  74 => 47,  70 => 45,  68 => 43,  64 => 41,  59 => 39,  53 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/base_form.html.twig", "/var/www/html/glpi/templates/pages/setup/general/base_form.html.twig");
    }
}
