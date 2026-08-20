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

/* pages/admin/add_profile_authorization.html.twig */
class __TwigTemplate_b9ea30e9001abdea419242b3c9ee62ef extends Template
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
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 33)->unwrap();
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 37
        $context["field_options"] = ["field_class" => "col-4"];
        // line 40
        yield "<div>
    <form method=\"post\" action=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Profile_User"), "html", null, true);
        yield "\" data-submit-once>
        <div class=\"card-body d-flex flex-wrap p-0 mt-n3\">
            <div class=\"col-12 flex-column\">
                <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                    <div class=\"row flex-row align-items-start flex-grow-1\">
                        <div class=\"row flex-row\">
                            ";
        // line 47
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 47, $this->getSourceContext())->macro_hidden(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
        yield "
                            ";
        // line 48
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 48, $this->getSourceContext())->macro_hidden(...[$this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey(($context["source_itemtype"] ?? null)), ($context["source_items_id"] ?? null)]);
        yield "
                            ";
        // line 49
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 49, $this->getSourceContext())->macro_largeTitle(...[__("Add an authorization to a user")]);
        yield "
                            ";
        // line 50
        if ((($context["source_itemtype"] ?? null) != "Entity")) {
            // line 51
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 51, $this->getSourceContext())->macro_dropdownField(...["Entity", "entities_id", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Entity"), Twig\Extension\CoreExtension::merge(["entity" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveentities")],             // line 53
($context["field_options"] ?? null))]);
            yield "
                            ";
        }
        // line 55
        yield "                            ";
        if ((($context["source_itemtype"] ?? null) != "Profile")) {
            // line 56
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 56, $this->getSourceContext())->macro_dropdownField(...["Profile", "profiles_id", null, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Profile"), Twig\Extension\CoreExtension::merge(["condition" => ["WHERE" => $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Profile::getUnderActiveProfileRestrictCriteria")], "display_emptychoice" => false],             // line 61
($context["field_options"] ?? null))]);
            yield "
                            ";
        }
        // line 63
        yield "                            ";
        if ((($context["source_itemtype"] ?? null) != "User")) {
            // line 64
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 64, $this->getSourceContext())->macro_dropdownField(...["User", "users_id", null, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), Twig\Extension\CoreExtension::merge(["display_emptychoice" => false, "entity" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveentities"), "right" => "all", "used" =>             // line 68
($context["used_users"] ?? null)],             // line 69
($context["field_options"] ?? null))]);
            yield "
                            ";
        }
        // line 71
        yield "                            ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 71, $this->getSourceContext())->macro_dropdownYesNo(...["is_recursive", 0, __("Recursive"), ($context["field_options"] ?? null)]);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card-body mx-n2 border-top d-flex flex-row-reverse align-items-start flex-wrap py-2\">
            ";
        // line 78
        yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 78, $this->getSourceContext())->macro_submit(...["add", _x("button", "Add")]);
        yield "
        </div>
    </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/add_profile_authorization.html.twig";
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
        return array (  121 => 78,  110 => 71,  105 => 69,  104 => 68,  102 => 64,  99 => 63,  94 => 61,  92 => 56,  89 => 55,  84 => 53,  82 => 51,  80 => 50,  76 => 49,  72 => 48,  68 => 47,  59 => 41,  56 => 40,  54 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/add_profile_authorization.html.twig", "/var/www/html/glpi/templates/pages/admin/add_profile_authorization.html.twig");
    }
}
