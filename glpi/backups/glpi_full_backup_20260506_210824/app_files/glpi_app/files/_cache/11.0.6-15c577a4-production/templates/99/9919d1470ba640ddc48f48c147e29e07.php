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

/* pages/setup/general/security_setup.html.twig */
class __TwigTemplate_1ee8041dec46605da23ac2280877c778 extends Template
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

        $this->blocks = [
            'config_fields' => [$this, 'block_config_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "pages/setup/general/base_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 36
        $context["field_options"] = ["full_width" => true, "rand" => ((        // line 38
array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset())))];
        // line 33
        $this->parent = $this->load("pages/setup/general/base_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 42, $this->getSourceContext())->macro_largeTitle(...[__("Password security policy"), "ti ti-shield-lock"]);
        yield "

   ";
        // line 44
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 44, $this->getSourceContext())->macro_smallTitle(...[__("Security policy validation")]);
        yield "
   ";
        // line 45
        yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 45, $this->getSourceContext())->macro_sliderField(...["use_password_security", (($_v0 =         // line 47
($context["config"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["use_password_security"] ?? null) : null), __("Force passwords to comply with security policy"),         // line 49
($context["field_options"] ?? null)]);
        // line 50
        yield "

   ";
        // line 52
        if ((($tmp = (($_v1 = ($context["config"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["use_password_security"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 53, $this->getSourceContext())->macro_smallTitle(...[__("Security policy configuration")]);
            yield "

      ";
            // line 55
            yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 55, $this->getSourceContext())->macro_numberField(...["password_min_length", (($_v2 =             // line 57
($context["config"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["password_min_length"] ?? null) : null), __("Password minimum length"), Twig\Extension\CoreExtension::merge(            // line 59
($context["field_options"] ?? null), ["min" => 4])]);
            // line 60
            yield "

      ";
            // line 62
            yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 62, $this->getSourceContext())->macro_sliderField(...["password_need_number", (($_v3 =             // line 64
($context["config"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["password_need_number"] ?? null) : null), __("Password need digit"),             // line 66
($context["field_options"] ?? null)]);
            // line 67
            yield "

      ";
            // line 69
            yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 69, $this->getSourceContext())->macro_sliderField(...["password_need_letter", (($_v4 =             // line 71
($context["config"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["password_need_letter"] ?? null) : null), __("Password need lowercase character"),             // line 73
($context["field_options"] ?? null)]);
            // line 74
            yield "

      ";
            // line 76
            yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 76, $this->getSourceContext())->macro_sliderField(...["password_need_caps", (($_v5 =             // line 78
($context["config"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["password_need_caps"] ?? null) : null), __("Password need uppercase character"),             // line 80
($context["field_options"] ?? null)]);
            // line 81
            yield "

      ";
            // line 83
            yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 83, $this->getSourceContext())->macro_sliderField(...["password_need_symbol", (($_v6 =             // line 85
($context["config"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["password_need_symbol"] ?? null) : null), __("Password need symbol"),             // line 87
($context["field_options"] ?? null)]);
            // line 88
            yield "
   ";
        }
        // line 90
        yield "
   ";
        // line 91
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 91, $this->getSourceContext())->macro_largeTitle(...[__("Password expiration policy"), "ti ti-calendar-time"]);
        yield "

   ";
        // line 93
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 93, $this->getSourceContext())->macro_dropdownNumberField(...["password_expiration_delay", (($_v7 =         // line 95
($context["config"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["password_expiration_delay"] ?? null) : null), __("Password expiration delay (in days)"), Twig\Extension\CoreExtension::merge(        // line 97
($context["field_options"] ?? null), ["min" => 15, "max" => 365, "step" => 5, "toadd" => ["-1" => __("Never")], "width" => "auto"])]);
        // line 104
        yield "

   ";
        // line 106
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 106, $this->getSourceContext())->macro_dropdownNumberField(...["password_expiration_notice", (($_v8 =         // line 108
($context["config"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["password_expiration_notice"] ?? null) : null), __("Password expiration notice time (in days)"), Twig\Extension\CoreExtension::merge(        // line 110
($context["field_options"] ?? null), ["min" => 0, "max" => 30, "step" => 1, "toadd" => ["-1" => __("Notification disabled")], "width" => "auto"])]);
        // line 117
        yield "

   ";
        // line 119
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 119, $this->getSourceContext())->macro_dropdownNumberField(...["password_expiration_lock_delay", (($_v9 =         // line 121
($context["config"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["password_expiration_lock_delay"] ?? null) : null), __("Delay before account deactivation (in days)"), Twig\Extension\CoreExtension::merge(        // line 123
($context["field_options"] ?? null), ["min" => 0, "max" => 30, "step" => 1, "toadd" => ["-1" => __("Do not deactivate")], "width" => "auto"])]);
        // line 130
        yield "

   ";
        // line 132
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownTimestampField", $context, 132, $this->getSourceContext())->macro_dropdownTimestampField(...["password_init_token_delay", (($_v10 =         // line 134
($context["config"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["password_init_token_delay"] ?? null) : null), __("Validity period of the password initialization token"), Twig\Extension\CoreExtension::merge(        // line 136
($context["field_options"] ?? null), ["min" => Twig\Extension\CoreExtension::constant("DAY_TIMESTAMP"), "max" => Twig\Extension\CoreExtension::constant("MONTH_TIMESTAMP"), "step" => Twig\Extension\CoreExtension::constant("DAY_TIMESTAMP"), "width" => "auto"])]);
        // line 142
        yield "

   ";
        // line 144
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 144, $this->getSourceContext())->macro_dropdownArrayField(...["non_reusable_passwords_count", (($_v11 =         // line 146
($context["config"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["non_reusable_passwords_count"] ?? null) : null), ["1" => __("Last password"), "2" => Twig\Extension\CoreExtension::sprintf(__("Last %s passwords"), 2), "3" => Twig\Extension\CoreExtension::sprintf(__("Last %s passwords"), 3), "4" => Twig\Extension\CoreExtension::sprintf(__("Last %s passwords"), 4), "5" => Twig\Extension\CoreExtension::sprintf(__("Last %s passwords"), 5)], __("Prevent users from reusing previous passwords"), Twig\Extension\CoreExtension::merge(        // line 155
($context["field_options"] ?? null), ["width" => "auto"])]);
        // line 158
        yield "

   ";
        // line 160
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 160, $this->getSourceContext())->macro_largeTitle(...[__("Two-factor authentication (2FA)"), "ti ti-2fa"]);
        yield "
    ";
        // line 161
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 161, $this->getSourceContext())->macro_textField(...["2fa_suffix", (($_v12 =         // line 163
($context["config"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["2fa_suffix"] ?? null) : null), __("2FA Suffix"), Twig\Extension\CoreExtension::merge(        // line 165
($context["field_options"] ?? null), ["helper" => __("This will be added in the issuer name for authenticator app.")])]);
        // line 168
        yield "

   ";
        // line 170
        yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 170, $this->getSourceContext())->macro_sliderField(...["2fa_enforced", (($_v13 =         // line 172
($context["config"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["2fa_enforced"] ?? null) : null), __("Enforce 2FA"),         // line 174
($context["field_options"] ?? null)]);
        // line 175
        yield "

   ";
        // line 177
        if ((($tmp = (($_v14 = ($context["config"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["2fa_enforced"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 178
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 178, $this->getSourceContext())->macro_numberField(...["2fa_grace_days", (($_v15 =             // line 180
($context["config"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["2fa_grace_days"] ?? null) : null), __("2FA grace period (in days)"), Twig\Extension\CoreExtension::merge(            // line 182
($context["field_options"] ?? null), ["min" => 0, "max" => 365])]);
            // line 186
            yield "
   ";
        }
        // line 188
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/security_setup.html.twig";
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
        return array (  209 => 188,  205 => 186,  203 => 182,  202 => 180,  200 => 178,  198 => 177,  194 => 175,  192 => 174,  191 => 172,  190 => 170,  186 => 168,  184 => 165,  183 => 163,  182 => 161,  178 => 160,  174 => 158,  172 => 155,  171 => 146,  170 => 144,  166 => 142,  164 => 136,  163 => 134,  162 => 132,  158 => 130,  156 => 123,  155 => 121,  154 => 119,  150 => 117,  148 => 110,  147 => 108,  146 => 106,  142 => 104,  140 => 97,  139 => 95,  138 => 93,  133 => 91,  130 => 90,  126 => 88,  124 => 87,  123 => 85,  122 => 83,  118 => 81,  116 => 80,  115 => 78,  114 => 76,  110 => 74,  108 => 73,  107 => 71,  106 => 69,  102 => 67,  100 => 66,  99 => 64,  98 => 62,  94 => 60,  92 => 59,  91 => 57,  90 => 55,  84 => 53,  82 => 52,  78 => 50,  76 => 49,  75 => 47,  74 => 45,  70 => 44,  64 => 42,  57 => 41,  52 => 33,  50 => 38,  49 => 36,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/security_setup.html.twig", "/var/www/html/glpi/templates/pages/setup/general/security_setup.html.twig");
    }
}
