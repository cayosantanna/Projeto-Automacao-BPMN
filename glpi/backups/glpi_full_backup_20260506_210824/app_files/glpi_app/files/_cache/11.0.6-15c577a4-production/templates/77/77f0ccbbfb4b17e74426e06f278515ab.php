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

/* pages/setup/authentication/setup.html.twig */
class __TwigTemplate_48fad07234ed45a0cccd0ad1464777a9 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        $context["session_get_plural"] = Session::getPluralNumber();
        // line 35
        yield "
<form name=\"form\" action=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Config"), "html", null, true);
        yield "\" method=\"post\" data-track-changes=\"true\">
    <div class=\"container-xl\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h3 class=\"card-title\"><i class=\"ti ti-adjustments me-1\"></i>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Authentication setup"), "html", null, true);
        yield "</h3>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    ";
        // line 44
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 44, $this->getSourceContext())->macro_dropdownYesNo(...["is_users_auto_add", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("is_users_auto_add"), __("Automatically add users from an external authentication source")]);
        // line 48
        yield "
                    ";
        // line 49
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 49, $this->getSourceContext())->macro_dropdownYesNo(...["use_noright_users_add", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_noright_users_add"), __("Add a user without accreditation from a LDAP directory")]);
        // line 53
        yield "

                    ";
        // line 55
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 55, $this->getSourceContext())->macro_dropdownArrayField(...["user_restored_ldap", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("user_restored_ldap"),         // line 58
($context["user_restored_ldap_choices"] ?? null), __("Action when a user is restored in the LDAP directory")]);
        // line 60
        yield "
                    ";
        // line 61
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 61, $this->getSourceContext())->macro_dropdownArrayField(...["time_offset", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("time_offset"),         // line 64
($context["gmt_values"] ?? null), __("GLPI server time zone")]);
        // line 66
        yield "

                    <div class=\"hr-text\">
                        <i class=\"ti ti-trash\"></i>
                        <span>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actions when a user is deleted from the LDAP directory"), "html", null, true);
        yield "</span>
                    </div>

                    ";
        // line 73
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 73, $this->getSourceContext())->macro_dropdownArrayField(...["user_deleted_ldap_user", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("user_deleted_ldap_user"),         // line 76
($context["user_deleted_ldap_user_choices"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User")]);
        // line 78
        yield "
                    ";
        // line 79
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 79, $this->getSourceContext())->macro_dropdownArrayField(...["user_deleted_ldap_groups", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("user_deleted_ldap_groups"),         // line 82
($context["user_deleted_ldap_groups_choices"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group",         // line 83
($context["session_get_plural"] ?? null))]);
        // line 84
        yield "

                    ";
        // line 86
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 86, $this->getSourceContext())->macro_dropdownArrayField(...["user_deleted_ldap_authorizations", $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("user_deleted_ldap_authorizations"),         // line 89
($context["user_deleted_ldap_authorizations_choices"] ?? null), _n("Authorization", "Authorizations",         // line 90
($context["session_get_plural"] ?? null))]);
        // line 91
        yield "
                </div>
            </div>
            <div class=\"card-footer d-flex\">
                <input type=\"submit\" name=\"update_auth\" class=\"btn btn-primary ms-auto\" value=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
        yield "\">
            </div>
        </div>
    </div>
    <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
        yield "\">
</form>


";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/authentication/setup.html.twig";
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
        return array (  129 => 99,  122 => 95,  116 => 91,  114 => 90,  113 => 89,  112 => 86,  108 => 84,  106 => 83,  105 => 82,  104 => 79,  101 => 78,  99 => 76,  98 => 73,  92 => 70,  86 => 66,  84 => 64,  83 => 61,  80 => 60,  78 => 58,  77 => 55,  73 => 53,  71 => 49,  68 => 48,  66 => 44,  59 => 40,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/authentication/setup.html.twig", "/var/www/html/glpi/templates/pages/setup/authentication/setup.html.twig");
    }
}
