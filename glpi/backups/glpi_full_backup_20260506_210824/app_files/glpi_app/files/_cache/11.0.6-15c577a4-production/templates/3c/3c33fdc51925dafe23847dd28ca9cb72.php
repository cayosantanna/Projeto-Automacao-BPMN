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

/* __string_template__90013aad25f09320de498e56bc4882eb */
class __TwigTemplate_f1bae4e03f45537aa2323e5394ea4301 extends Template
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
        // line 1
        yield "                    ";
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "                    <div class=\"mb-3\">
                        <form method=\"post\" action=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Itil_Project"), "html", null, true);
        yield "\">
                            <div class=\"d-flex\">
                                <input type=\"hidden\" name=\"itemtype\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "html", null, true);
        yield "\"/>
                                <input type=\"hidden\" name=\"items_id\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["items_id"] ?? null), "html", null, true);
        yield "\"/>
                                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\"/>
                                <div class=\"col-auto\">
                                    ";
        // line 9
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 9, $this->getSourceContext())->macro_dropdownField(...["Project", "projects_id", "", null, ["add_field_class" => "d-inline", "no_label" => true, "used" =>         // line 12
($context["used"] ?? null), "entity" =>         // line 13
($context["entities_id"] ?? null), "condition" =>         // line 14
($context["project_conditions"] ?? null)]]);
        // line 15
        yield "
                                </div>
                                <div class=\"col-auto\">
                                    <button class=\"btn btn-primary ms-1\" type=\"submit\" name=\"add\" value=\"\">
                                        <i class=\"ti ti-link\"></i>
                                        ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btn_msg"] ?? null), "html", null, true);
        yield "
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__90013aad25f09320de498e56bc4882eb";
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
        return array (  78 => 20,  71 => 15,  69 => 14,  68 => 13,  67 => 12,  66 => 9,  61 => 7,  57 => 6,  53 => 5,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__90013aad25f09320de498e56bc4882eb", "");
    }
}
