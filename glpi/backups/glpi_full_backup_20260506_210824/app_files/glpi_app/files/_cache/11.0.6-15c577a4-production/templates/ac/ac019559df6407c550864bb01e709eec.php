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

/* pages/admin/user/change_other_password.html.twig */
class __TwigTemplate_25afe693f5c895805b4d69fb7ae5b769 extends Template
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
        yield "
";
        // line 35
        $context["full_width"] = ((array_key_exists("full_width", $context)) ? (Twig\Extension\CoreExtension::default(($context["full_width"] ?? null), false)) : (false));
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "    ";
            yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 37, $this->getSourceContext())->macro_checkboxField(...["_init_password", 0, __("Send an email to the user to set their own new password."), ["full_width" =>             // line 38
($context["full_width"] ?? null)]]);
            // line 39
            yield "
";
        }
        // line 41
        yield $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 41, $this->getSourceContext())->macro_passwordField(...["password", "", __("Password"), ["id" => "password", "clearable" => false, "additional_attributes" => ["autocomplete" => "off"], "full_width" =>         // line 47
($context["full_width"] ?? null)]]);
        // line 48
        yield "
";
        // line 49
        yield $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 49, $this->getSourceContext())->macro_passwordField(...["password2", "", __("Confirm password"), ["clearable" => false, "additional_attributes" => ["autocomplete" => "off"], "full_width" =>         // line 54
($context["full_width"] ?? null)]]);
        // line 55
        yield "
";
        // line 56
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_password_security")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "    ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 57, $this->getSourceContext())->macro_htmlField(...["password_checks", Twig\Extension\CoreExtension::include($this->env, $context, "components/user/password_security_checks.html.twig", ["list_view" => true]), __("Password security policy"), ["full_width" =>             // line 58
($context["full_width"] ?? null)]]);
            // line 59
            yield "
";
        }
        // line 61
        yield "<script>
    \$('input[name=_init_password]').on('change', function() {
        \$('input[name=password]').closest('.form-field')
            .toggleClass('d-none', \$(this).is(':checked'))
            .val('');
        \$('input[name=password2]').closest('.form-field')
            .toggleClass('d-none', \$(this).is(':checked'))
            .val('');
        \$('.password-security-checks').closest('.form-field').toggleClass('d-none', \$(this).is(':checked'));
    });
    ";
        // line 71
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_password_security")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "        \$('input[name=password]').on('input', passwordCheck);
    ";
        }
        // line 74
        yield "</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/user/change_other_password.html.twig";
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
        return array (  102 => 74,  98 => 72,  96 => 71,  84 => 61,  80 => 59,  78 => 58,  76 => 57,  74 => 56,  71 => 55,  69 => 54,  68 => 49,  65 => 48,  63 => 47,  62 => 41,  58 => 39,  56 => 38,  54 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/user/change_other_password.html.twig", "/var/www/html/glpi/templates/pages/admin/user/change_other_password.html.twig");
    }
}
