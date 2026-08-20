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

/* pages/admin/user/user.html.twig */
class __TwigTemplate_18a91d754f6d470299eefdc868e4198b extends Template
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
        $macros["modals"] = $this->macros["modals"] = $this->load("components/form/modals_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 37
        $context["rand_field"] = ((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset())));
        // line 38
        $context["field_options"] = ["rand" =>         // line 39
($context["rand_field"] ?? null)];
        // line 41
        yield "
";
        // line 42
        $context["internal_auth"] = ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["authtype"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Auth::DB_GLPI"));
        // line 43
        $context["external_auth"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 43) &&  !($context["internal_auth"] ?? null));
        // line 45
        $context["simple_form"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "simplified_form", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "simplified_form", [], "any", false, false, false, 45), false)) : (false));
        // line 46
        $context["is_my_form"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 46) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
        // line 48
        $context["is_preference_form"] = ((array_key_exists("is_preference_form", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_preference_form"] ?? null), false)) : (false));
        // line 49
        $context["target"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((((($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("/front/preference.php") : ("/front/user.form.php")));
        // line 50
        $context["higher_rights"] = ((array_key_exists("higher_rights", $context)) ? (Twig\Extension\CoreExtension::default(($context["higher_rights"] ?? null), false)) : (false));
        // line 51
        yield "
<div class=\"asset\">
    <form id=\"main-form\" name=\"asset_form\" method=\"post\" action=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target"] ?? null), "html", null, true);
        yield "\" enctype=\"multipart/form-data\" data-submit-once>
        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />

        ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]))]), "html", null, true);
        yield "

        <div class=\"card-body d-flex flex-wrap\">
            <div class=\"col-12 col-xxl-12 flex-column\">
                <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                    <div class=\"row flex-row align-items-start flex-grow-1\">
                        <div class=\"row flex-row\">
                            ";
        // line 63
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "                                <input type=\"hidden\" name=\"id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 64), "html", null, true);
            yield "\" />
                            ";
        }
        // line 66
        yield "                            ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 66) || ($context["internal_auth"] ?? null)) &&  !($context["is_preference_form"] ?? null))) {
            // line 67
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 67, $this->getSourceContext())->macro_textField(...["name", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["name"] ?? null) : null), __("Login")]);
            yield "
                            ";
        } else {
            // line 69
            yield "                                ";
            $context["login_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 70
                yield "                                    <span class=\"fw-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["name"] ?? null) : null), "html", null, true);
                yield "</span>
                                    <input type=\"hidden\" name=\"name\" value=\"";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 71)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["name"] ?? null) : null), "html", null, true);
                yield "\" />
                                ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 73
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 73, $this->getSourceContext())->macro_htmlField(...["name",             // line 75
($context["login_field"] ?? null), __("Login")]);
            // line 77
            yield "
                            ";
        }
        // line 79
        yield "
                            ";
        // line 80
        if (( !($context["simple_form"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 80))) {
            // line 81
            yield "                                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/user/user_picture_field.html.twig");
            yield "
                            ";
        } else {
            // line 83
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 83, $this->getSourceContext())->macro_nullField(...[]);
            yield "
                            ";
        }
        // line 85
        yield "
                            ";
        // line 86
        if (( !($context["is_preference_form"] ?? null) && ($context["show_sync_field"] ?? null))) {
            // line 87
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 87, $this->getSourceContext())->macro_htmlField(...["sync_field", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 89
($context["item"] ?? null), "fields", [], "any", false, true, false, 89), "sync_field", [], "array", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default((($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["sync_field"] ?? null) : null), Twig\Extension\CoreExtension::constant("Dropdown::EMPTY_VALUE"))) : (Twig\Extension\CoreExtension::constant("Dropdown::EMPTY_VALUE")))), __("Synchronization field")]);
            // line 91
            yield "
                                ";
            // line 92
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 92, $this->getSourceContext())->macro_nullField(...[]);
            yield "
                            ";
        }
        // line 94
        yield "
                            ";
        // line 95
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 95, $this->getSourceContext())->macro_textField(...["realname", (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 95)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["realname"] ?? null) : null), __("Surname"), ["readonly" =>         // line 96
($context["external_auth"] ?? null)]]);
        // line 97
        yield "
                            ";
        // line 98
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 98, $this->getSourceContext())->macro_textField(...["firstname", (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["firstname"] ?? null) : null), __("First name"), ["readonly" =>         // line 99
($context["external_auth"] ?? null)]]);
        // line 100
        yield "

                            ";
        // line 102
        if ((($tmp = ($context["use_timezones"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 103, $this->getSourceContext())->macro_dropdownArrayField(...["timezone", (($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 103)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["timezone"] ?? null) : null), ($context["timezones"] ?? null), __("Timezone"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["display_emptychoice" => true, "emptylabel" => __("Use server configuration")])]);
            // line 106
            yield "
                            ";
        } elseif ((($tmp = Session::haveRight("config", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "                                ";
            $context["tz_not_config"] = ((__("Timezone usage has not been activated.") . " ") . Twig\Extension\CoreExtension::sprintf(__("Run the \"%1\$s\" command to activate it."), "php bin/console database:enable_timezones"));
            // line 109
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 109, $this->getSourceContext())->macro_htmlField(...["", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tz_not_config"] ?? null)), __("Timezone"), ($context["field_options"] ?? null)]);
            yield "
                            ";
        }
        // line 111
        yield "
                            ";
        // line 112
        if ((($tmp =  !($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 113
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 113, $this->getSourceContext())->macro_dropdownYesNo(...["is_active", (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 113)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["is_active"] ?? null) : null), __("Active"), ["readonly" =>  !            // line 114
($context["higher_rights"] ?? null), "helper" => (((($tmp =  !            // line 115
($context["higher_rights"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (__("Not enough rights to change this field")) : (""))]]);
            // line 116
            yield "
                            ";
        }
        // line 118
        yield "
                            ";
        // line 119
        if (( !($context["simple_form"] ?? null) &&  !($context["is_preference_form"] ?? null))) {
            // line 120
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 120, $this->getSourceContext())->macro_datetimeField(...["begin_date", (($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 120)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["begin_date"] ?? null) : null), __("Valid since"), ["clearable" => true, "readonly" =>  !            // line 122
($context["higher_rights"] ?? null)]]);
            // line 123
            yield "
                                ";
            // line 124
            yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 124, $this->getSourceContext())->macro_datetimeField(...["end_date", (($_v10 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 124)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["end_date"] ?? null) : null), __("Valid until"), ["clearable" => true, "readonly" =>  !            // line 126
($context["higher_rights"] ?? null)]]);
            // line 127
            yield "
                            ";
        }
        // line 129
        yield "
                            ";
        // line 130
        if ((( !($context["is_preference_form"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 130)) && Session::haveRight("user", Twig\Extension\CoreExtension::constant("User::READAUTHENT")))) {
            // line 131
            yield "                                ";
            $context["auth_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 132
                yield "                                    ";
                yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Auth::getMethodLink", [(($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 132)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["authtype"] ?? null) : null), (($_v12 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 132)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["auths_id"] ?? null) : null)]);
                yield "
                                    ";
                // line 133
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 133)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["date_sync"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 134
                    yield "                                        <br>
                                        ";
                    // line 135
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Last synchronization on %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 135)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["date_sync"] ?? null) : null))), "html", null, true);
                    yield "
                                    ";
                }
                // line 137
                yield "                                    ";
                if ((($tmp = (($_v15 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 137)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["last_login"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 138
                    yield "                                        <br>
                                        ";
                    // line 139
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Last login on %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v16 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 139)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["last_login"] ?? null) : null))), "html", null, true);
                    yield "
                                    ";
                }
                // line 141
                yield "                                    ";
                if ((($tmp = (($_v17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 141)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["user_dn"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 142
                    yield "                                        <br>
                                        ";
                    // line 143
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s: %2\$s"), __("User DN"), (($_v18 = CoreExtension::getAttribute($this->env, $this->source,                     // line 145
($context["item"] ?? null), "fields", [], "any", false, false, false, 145)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["user_dn"] ?? null) : null)), "html", null, true);
                    // line 146
                    yield "
                                    ";
                }
                // line 148
                yield "                                    ";
                if ((($tmp = (($_v19 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 148)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["is_deleted_ldap"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 149
                    yield "                                        <br>
                                        ";
                    // line 150
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("User missing in LDAP directory"), "html", null, true);
                    yield "
                                    ";
                }
                // line 152
                yield "                                    ";
                if ((($tmp =  !((($_v20 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 152)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["2fa"] ?? null) : null) === null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 153
                    yield "                                        <br>
                                        ";
                    // line 154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("2FA enabled"), "html", null, true);
                    yield "
                                        ";
                    // line 155
                    if ((($tmp = Session::haveRight("user", Twig\Extension\CoreExtension::constant("User::UPDATEAUTHENT"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 156
                        yield "                                            <button type=\"submit\" name=\"disable_2fa\" class=\"btn btn-outline-danger btn-sm ms-1\" data-bs-toggle=\"tooltip\"
                                                    title=\"";
                        // line 157
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("If 2FA is mandatory for this user, they will be required to set it back up the next time they log in."), "html", null, true);
                        yield "\">
                                                ";
                        // line 158
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Disable"), "html", null, true);
                        yield "
                                            </button>
                                        ";
                    }
                    // line 161
                    yield "                                    ";
                }
                // line 162
                yield "                                ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 163
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 163, $this->getSourceContext())->macro_htmlField(...["_auth", ($context["auth_field"] ?? null), __("Authentication")]);
            yield "
                            ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 164
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 165
            yield "                                <input type=\"hidden\" name=\"authtype\" value=\"1\" />
                            ";
        }
        // line 167
        yield "
                            ";
        // line 168
        if (( !($context["simple_form"] ?? null) &&  !($context["is_preference_form"] ?? null))) {
            // line 169
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 169, $this->getSourceContext())->macro_dropdownField(...["UserCategory", "usercategories_id", (($_v21 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 169)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["usercategories_id"] ?? null) : null), _n("Category", "Categories", 1)]);
            yield "
                            ";
        }
        // line 171
        yield "                            ";
        if ((($tmp =  !($context["simple_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 172
            yield "                                ";
            if ((($tmp =  !($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 173
                yield "                                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 173, $this->getSourceContext())->macro_dropdownField(...["UserTitle", "usertitles_id", (($_v22 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 173)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["usertitles_id"] ?? null) : null), _x("person", "Title")]);
                yield "
                                    ";
                // line 174
                yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 174, $this->getSourceContext())->macro_textareaField(...["comment", (($_v23 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 174)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["comment"] ?? null) : null), __("Comments")]);
                yield "
                                ";
            }
            // line 176
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 176, $this->getSourceContext())->macro_textField(...["registration_number", (($_v24 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 176)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["registration_number"] ?? null) : null), __("Administrative number")]);
            yield "
                            ";
        }
        // line 178
        yield "                            ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 179
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 179, $this->getSourceContext())->macro_dropdownField(...["Location", "locations_id", (($_v25 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 179)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), ["entity" =>             // line 180
($context["entities"] ?? null)]]);
            // line 181
            yield "
                            ";
        }
        // line 183
        yield "
                            ";
        // line 184
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 185
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 185, $this->getSourceContext())->macro_smallTitle(...[_n("Authorization", "Authorizations", 1)]);
            yield "
                                ";
            // line 186
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 186, $this->getSourceContext())->macro_dropdownYesNo(...["_is_recursive", 0, __("Recursive")]);
            yield "
                                ";
            // line 187
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 187, $this->getSourceContext())->macro_dropdownField(...["Profile", "_profiles_id", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Profile::getDefault"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Profile", 1)]);
            yield "
                                ";
            // line 188
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 188, $this->getSourceContext())->macro_dropdownField(...["Entity", "_entities_id", ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "any", true, true, false, 188)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "any", false, false, false, 188), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"))) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"))), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Entity", 1), ["display_emptychoice" => false, "entity" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveentities")]]);
            // line 191
            yield "
                            ";
        } else {
            // line 193
            yield "                                ";
            if ((($context["higher_rights"] ?? null) || ($context["is_my_form"] ?? null))) {
                // line 194
                yield "                                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 194, $this->getSourceContext())->macro_dropdownArrayField(...["name" => "profiles_id", "value" => (($_v26 = CoreExtension::getAttribute($this->env, $this->source,                 // line 196
($context["item"] ?? null), "fields", [], "any", false, false, false, 196)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["profiles_id"] ?? null) : null), "elements" =>                 // line 197
($context["profiles"] ?? null), "label" => __("Default profile"), "options" => ["display_emptychoice" => true]]);
                // line 202
                yield "
                                ";
            }
            // line 204
            yield "                                ";
            if ((($context["higher_rights"] ?? null) || ($context["is_preference_form"] ?? null))) {
                // line 205
                yield "                                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 205, $this->getSourceContext())->macro_dropdownField(...["Entity", "entities_id", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 205), "entities_id", [], "array", true, true, false, 205)) ? (Twig\Extension\CoreExtension::default((($_v27 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 205)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["entities_id"] ?? null) : null),  -1)) : ( -1)), __("Default entity"), ["toadd" => ["-1" => __("Full structure")], "entity" =>                 // line 209
($context["entities"] ?? null)]]);
                // line 210
                yield "
                                ";
            }
            // line 212
            yield "                                ";
            if ((($tmp = ($context["higher_rights"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 213
                yield "                                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 213, $this->getSourceContext())->macro_dropdownArrayField(...["name" => "groups_id", "value" => (($_v28 = CoreExtension::getAttribute($this->env, $this->source,                 // line 215
($context["item"] ?? null), "fields", [], "any", false, false, false, 215)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["groups_id"] ?? null) : null), "elements" =>                 // line 216
($context["groups"] ?? null), "label" => __("Default group"), "options" => ["display_emptychoice" => true]]);
                // line 221
                yield "
                                    ";
                // line 222
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 222, $this->getSourceContext())->macro_dropdownField(...["User", "users_id_supervisor", (($_v29 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 222)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["users_id_supervisor"] ?? null) : null), __("Supervisor"), ["entity" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "entity_sons" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_recursive"), "used" => [CoreExtension::getAttribute($this->env, $this->source,                 // line 225
($context["item"] ?? null), "getID", [], "method", false, false, false, 225)], "right" => "all"]]);
                // line 227
                yield "
                                ";
            }
            // line 229
            yield "
                                ";
            // line 230
            if ((($tmp = ($context["enable_nickname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 231
                yield "                                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 231, $this->getSourceContext())->macro_textField(...["nickname", (($_v30 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 231)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["nickname"] ?? null) : null), __("Nickname")]);
                yield "
                                ";
            }
            // line 233
            yield "                            ";
        }
        // line 234
        yield "
                            ";
        // line 235
        if ((($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 236
            yield "                                ";
            $context["lang_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 237
                yield "                                    ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showLanguages", ["language", ["value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 238
($context["item"] ?? null), "fields", [], "any", false, true, false, 238), "language", [], "array", true, true, false, 238)) ? (Twig\Extension\CoreExtension::default((($_v31 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 238)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["language"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("language"))) : ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("language")))]]);
                // line 240
                yield "                                ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 241
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 241, $this->getSourceContext())->macro_htmlField(...["lang_dropdown", ($context["lang_dropdown"] ?? null), __("Language")]);
            yield "

                                ";
            // line 243
            if ((($tmp = ($context["is_administrator"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 244
                yield "                                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 244, $this->getSourceContext())->macro_dropdownArrayField(...["use_mode", (($_v32 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 244)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["use_mode"] ?? null) : null), [Twig\Extension\CoreExtension::constant("Session::NORMAL_MODE") => __("Normal"), Twig\Extension\CoreExtension::constant("Session::DEBUG_MODE") => __("Debug")], __("Use GLPI in mode")]);
                // line 247
                yield "
                                ";
            }
            // line 249
            yield "                            ";
        }
        // line 250
        yield "
                            ";
        // line 251
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 251, $this->getSourceContext())->macro_smallTitle(...[__("Contact information")]);
        yield "
                            ";
        // line 252
        $context["emails_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 253
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("UserEmail::showForUser", [($context["item"] ?? null)]), "html", null, true);
            yield "
                                ";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("UserEmail::showAddEmailButton", [($context["item"] ?? null)]), "html", null, true);
            yield "
                            ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 256
        yield "                            ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 256, $this->getSourceContext())->macro_htmlField(...["_useremails", ($context["emails_field"] ?? null), _n("Email", "Emails", Session::getPluralNumber())]);
        yield "
                            ";
        // line 257
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 257, $this->getSourceContext())->macro_textField(...["phone", (($_v33 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 257)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["phone"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone", 1)]);
        yield "
                            ";
        // line 258
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 258, $this->getSourceContext())->macro_textField(...["mobile", (($_v34 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 258)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["mobile"] ?? null) : null), __("Mobile phone")]);
        yield "
                            ";
        // line 259
        if ((($tmp =  !($context["simple_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 260
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 260, $this->getSourceContext())->macro_textField(...["phone2", (($_v35 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 260)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["phone2"] ?? null) : null), __("Phone 2")]);
            yield "
                            ";
        }
        // line 262
        yield "
                            ";
        // line 263
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 263) && ((((array_key_exists("caneditpassword", $context) &&  !(null === $context["caneditpassword"]))) ? ($context["caneditpassword"]) : (false)) || ($context["is_preference_form"] ?? null)))) {
            // line 264
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 264, $this->getSourceContext())->macro_smallTitle(...[__("Passwords and access keys")]);
            yield "
                                ";
            // line 265
            yield $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 265, $this->getSourceContext())->macro_passwordField(...["api_token", $this->extensions['Glpi\Application\View\Extension\SecurityExtension']->decrypt((($_v36 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 265)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["api_token"] ?? null) : null)), __("API token"), ["can_regenerate" => true, "is_disclosable" => true, "clearable" => false, "is_copyable" => true, "additional_attributes" => ["autocomplete" => "new-password"]]]);
            // line 273
            yield "
                                ";
            // line 274
            if ((($tmp =  !($context["external_auth"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 275
                yield "                                    ";
                $context["change_pw_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 276
                    yield "                                        ";
                    if ((($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 277
                        yield "                                            <a role=\"button\" class=\"btn btn-outline-secondary btn-sm\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/updatepassword.php"), "html", null, true);
                        yield "\">
                                                <i class=\"ti ti-lock\"></i>
                                                ";
                        // line 279
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change password"), "html", null, true);
                        yield "
                                            </a>
                                        ";
                    } else {
                        // line 282
                        yield "                                            ";
                        yield $macros["modals"]->getTemplateForMacro("macro_modal", $context, 282, $this->getSourceContext())->macro_modal(...[__("Change password"), Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/user/change_other_password.html.twig", ["full_width" => true]), ["id" => ("modal_password_" .                         // line 283
($context["rand_field"] ?? null))]]);
                        // line 284
                        yield "
                                            <script>
                                                \$('#modal_password_";
                        // line 286
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                        yield " input').on('keypress', function(e) {
                                                    // Prevent enter key in password fields in modal from submitting form
                                                    if (e.originalEvent.key === 'Enter') {
                                                        e.preventDefault();
                                                    }
                                                });
                                            </script>
                                            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_password_";
                        // line 293
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                        yield "\">
                                                <i class=\"ti ti-lock\"></i>
                                                ";
                        // line 295
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change password"), "html", null, true);
                        yield "
                                            </button>
                                            <div class=\"text-warning d-none\" data-password-change-pending>
                                                ";
                        // line 298
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Password change pending"), "html", null, true);
                        yield "
                                            </div>
                                            <script>
                                                \$('#modal_password_";
                        // line 301
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                        yield "').on('hide.bs.modal', () => {
                                                    \$('[data-password-change-pending]').toggleClass('d-none', \$('#modal_password_";
                        // line 302
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                        yield " input[name=password]').val() === '');
                                                });
                                            </script>
                                        ";
                    }
                    // line 306
                    yield "                                    ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 307
                yield "                                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 307, $this->getSourceContext())->macro_htmlField(...["_change_pw", ($context["change_pw_field"] ?? null), __("Password")]);
                yield "
                                ";
            }
            // line 309
            yield "                            ";
        }
        // line 310
        yield "                            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 310)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 311
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 311, $this->getSourceContext())->macro_smallTitle(...[__("Passwords and access keys")]);
            yield "
                                <div>
                                    ";
            // line 313
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/user/change_other_password.html.twig");
            yield "
                                </div>
                            ";
        }
        // line 316
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 321
        if ((($tmp =  !($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 322
            yield "            ";
            if (( !array_key_exists("no_form_buttons", $context) || (($context["no_form_buttons"] ?? null) == false))) {
                // line 323
                yield "                ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/buttons.html.twig");
                yield "
            ";
            } else {
                // line 325
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
                yield "
            ";
            }
            // line 327
            yield "            ";
            if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formfooter", [], "array", true, true, false, 327) &&  !(null === (($_v37 = ($context["params"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["formfooter"] ?? null) : null)))) ? ((($_v38 = ($context["params"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["formfooter"] ?? null) : null)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 328
                yield "                <div class=\"card-footer mx-n2 mb-n2\">
                    ";
                // line 329
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/dates.html.twig");
                yield "
                </div>
            ";
            }
            // line 332
            yield "        ";
        } else {
            // line 333
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "
            <div class=\"card-body mx-n2 border-top d-flex flex-row-reverse align-items-start flex-wrap\">
                <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                    <i class=\"ti ti-device-floppy\"></i>
                    <span>";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
            yield "</span>
                </button>
            </div>
        ";
        }
        // line 341
        yield "    </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/user/user.html.twig";
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
        return array (  701 => 341,  694 => 337,  686 => 333,  683 => 332,  677 => 329,  674 => 328,  671 => 327,  665 => 325,  659 => 323,  656 => 322,  654 => 321,  647 => 316,  641 => 313,  635 => 311,  632 => 310,  629 => 309,  623 => 307,  619 => 306,  612 => 302,  608 => 301,  602 => 298,  596 => 295,  591 => 293,  581 => 286,  577 => 284,  575 => 283,  573 => 282,  567 => 279,  561 => 277,  558 => 276,  555 => 275,  553 => 274,  550 => 273,  548 => 265,  543 => 264,  541 => 263,  538 => 262,  532 => 260,  530 => 259,  526 => 258,  522 => 257,  517 => 256,  511 => 254,  506 => 253,  504 => 252,  500 => 251,  497 => 250,  494 => 249,  490 => 247,  487 => 244,  485 => 243,  479 => 241,  475 => 240,  473 => 238,  471 => 237,  468 => 236,  466 => 235,  463 => 234,  460 => 233,  454 => 231,  452 => 230,  449 => 229,  445 => 227,  443 => 225,  442 => 222,  439 => 221,  437 => 216,  436 => 215,  434 => 213,  431 => 212,  427 => 210,  425 => 209,  423 => 205,  420 => 204,  416 => 202,  414 => 197,  413 => 196,  411 => 194,  408 => 193,  404 => 191,  402 => 188,  398 => 187,  394 => 186,  389 => 185,  387 => 184,  384 => 183,  380 => 181,  378 => 180,  376 => 179,  373 => 178,  367 => 176,  362 => 174,  357 => 173,  354 => 172,  351 => 171,  345 => 169,  343 => 168,  340 => 167,  336 => 165,  334 => 164,  329 => 163,  325 => 162,  322 => 161,  316 => 158,  312 => 157,  309 => 156,  307 => 155,  303 => 154,  300 => 153,  297 => 152,  292 => 150,  289 => 149,  286 => 148,  282 => 146,  280 => 145,  279 => 143,  276 => 142,  273 => 141,  268 => 139,  265 => 138,  262 => 137,  257 => 135,  254 => 134,  252 => 133,  247 => 132,  244 => 131,  242 => 130,  239 => 129,  235 => 127,  233 => 126,  232 => 124,  229 => 123,  227 => 122,  225 => 120,  223 => 119,  220 => 118,  216 => 116,  214 => 115,  213 => 114,  211 => 113,  209 => 112,  206 => 111,  200 => 109,  197 => 108,  193 => 106,  190 => 103,  188 => 102,  184 => 100,  182 => 99,  181 => 98,  178 => 97,  176 => 96,  175 => 95,  172 => 94,  167 => 92,  164 => 91,  162 => 89,  160 => 87,  158 => 86,  155 => 85,  149 => 83,  143 => 81,  141 => 80,  138 => 79,  134 => 77,  132 => 75,  130 => 73,  124 => 71,  119 => 70,  116 => 69,  110 => 67,  107 => 66,  101 => 64,  99 => 63,  89 => 56,  84 => 54,  80 => 53,  76 => 51,  74 => 50,  72 => 49,  70 => 48,  68 => 46,  66 => 45,  64 => 43,  62 => 42,  59 => 41,  57 => 39,  56 => 38,  54 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/user/user.html.twig", "/var/www/html/glpi/templates/pages/admin/user/user.html.twig");
    }
}
