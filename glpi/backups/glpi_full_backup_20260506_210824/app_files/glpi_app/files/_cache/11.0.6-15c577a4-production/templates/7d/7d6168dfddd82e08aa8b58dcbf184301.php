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

/* __string_template__b7041207fce1834cefd8a936ddab53f7 */
class __TwigTemplate_8775fc598bbba7327399084b8f2dffdd extends Template
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
        yield "                ";
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "                ";
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 2)->unwrap();
        // line 3
        yield "                ";
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 4
        yield "                <div class=\"mb-3\">
                    <form method=\"post\" action=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath(($context["link_class"] ?? null)), "html", null, true);
        yield "\">
                        <div class=\"d-flex w-100 flex-column\">
                            <input type=\"hidden\" name=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey(($context["itil_object"] ?? null)), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["itil_object"] ?? null), "getID", [], "method", false, false, false, 7), "html", null, true);
        yield "\">
                            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
                            ";
        // line 9
        if ((($context["requester_id"] ?? null) > 0)) {
            // line 10
            yield "                                ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call([($context["link_class"] ?? null), "dropdownMyDevices"], [($context["requester_id"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["itil_object"] ?? null), "getEntityID", [], "method", false, false, false, 10), null, 0, [$this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey(($context["itil_object"] ?? null)) => CoreExtension::getAttribute($this->env, $this->source, ($context["itil_object"] ?? null), "getID", [], "method", false, false, false, 10)]]);
            // line 11
            yield "                            ";
        }
        // line 12
        yield "                            <div>
                                ";
        // line 13
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call([($context["link_class"] ?? null), "dropdownAllDevices"], ["itemtype", null, 0, 1, ($context["requester_id"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["itil_object"] ?? null), "getEntityID", [], "method", false, false, false, 13), [$this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey(        // line 14
($context["itil_object"] ?? null)) => CoreExtension::getAttribute($this->env, $this->source, ($context["itil_object"] ?? null), "getID", [], "method", false, false, false, 14), "used" =>         // line 15
($context["used"] ?? null), "rand" =>         // line 16
($context["rand"] ?? null)]]);
        // line 18
        yield "                            </div>
                        </div>
                        <div class=\"d-flex px-3 flex-row-reverse\">
                            ";
        // line 21
        yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 21, $this->getSourceContext())->macro_submit(...["add", ($context["btn_label"] ?? null), 1]);
        yield "
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
        return "__string_template__b7041207fce1834cefd8a936ddab53f7";
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
        return array (  90 => 21,  85 => 18,  83 => 16,  82 => 15,  81 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  69 => 9,  65 => 8,  59 => 7,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__b7041207fce1834cefd8a936ddab53f7", "");
    }
}
