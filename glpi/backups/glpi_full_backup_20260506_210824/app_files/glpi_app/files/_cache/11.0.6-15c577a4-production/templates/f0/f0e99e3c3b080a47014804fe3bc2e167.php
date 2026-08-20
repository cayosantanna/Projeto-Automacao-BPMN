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

/* pages/setup/general/systeminfo_form.html.twig */
class __TwigTemplate_81d7b0aa450b578d420957f615d82e85 extends Template
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
        // line 33
        $this->parent = $this->load("pages/setup/general/base_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 37, $this->getSourceContext())->macro_largeTitle(...[__("System"), "ti ti-adjustments"]);
        yield "
   ";
        // line 38
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 38, $this->getSourceContext())->macro_dropdownArrayField(...["event_loglevel", (($_v0 = ($context["config"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["event_loglevel"] ?? null) : null), [1 => __("1- Critical (login error only)"), 2 => __("2- Severe (not used)"), 3 => __("3- Important (successful logins)"), 4 => __("4- Notices (add, delete, tracking)"), 5 => __("5- Complete (all)")], __("Log Level")]);
        // line 44
        yield "
   ";
        // line 45
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 45, $this->getSourceContext())->macro_dropdownNumberField(...["cron_limit", (($_v1 = ($context["config"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["cron_limit"] ?? null) : null), __("Maximum number of automatic actions (run by CLI)"), ["min" => 1, "max" => 30]]);
        // line 48
        yield "
   ";
        // line 49
        yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 49, $this->getSourceContext())->macro_sliderField(...["use_log_in_files", (($_v2 = ($context["config"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["use_log_in_files"] ?? null) : null), __("Logs in files (SQL, email, automatic action...)")]);
        yield "
   ";
        // line 50
        yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 50, $this->getSourceContext())->macro_sliderField(...["_dbslave_status", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("DBConnection::isDBSlaveActive"), _n("SQL replica", "SQL replicas", 1)]);
        yield "

   ";
        // line 52
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 52, $this->getSourceContext())->macro_smallTitle(...[__("Maintenance mode")]);
        yield "
   ";
        // line 53
        yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 53, $this->getSourceContext())->macro_sliderField(...["maintenance_mode", (($_v3 = ($context["config"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["maintenance_mode"] ?? null) : null), __("Maintenance mode")]);
        yield "
   ";
        // line 54
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 54, $this->getSourceContext())->macro_textareaField(...["maintenance_text", (($_v4 = ($context["config"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["maintenance_text"] ?? null) : null), __("Maintenance text")]);
        yield "

   ";
        // line 56
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 56, $this->getSourceContext())->macro_smallTitle(...[__("Proxy configuration")]);
        yield "
   ";
        // line 57
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 57, $this->getSourceContext())->macro_textField(...["proxy_name", (($_v5 = ($context["config"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["proxy_name"] ?? null) : null), __("Server")]);
        yield "
   ";
        // line 58
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 58, $this->getSourceContext())->macro_textField(...["proxy_port", (($_v6 = ($context["config"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["proxy_port"] ?? null) : null), _n("Port", "Ports", 1)]);
        yield "
   ";
        // line 59
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 59, $this->getSourceContext())->macro_textField(...["proxy_user", (($_v7 = ($context["config"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["proxy_user"] ?? null) : null), __("Login")]);
        yield "
   ";
        // line 60
        yield $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 60, $this->getSourceContext())->macro_passwordField(...["proxy_passwd", (($_v8 = ($context["config"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["proxy_passwd"] ?? null) : null), __("Password"), ["readonly" => true, "additional_attributes" => ["autocomplete" => "off", "onfocus" => "this.removeAttribute(\"readonly\");"]]]);
        // line 66
        yield "

    ";
        // line 68
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 68, $this->getSourceContext())->macro_dropdownArrayField(...["proxy_exclusions", null, CoreExtension::getAttribute($this->env, $this->source,         // line 71
($context["possible_proxy_exclusions"] ?? null), "getDropDownValues", [], "method", false, false, false, 71), __("Proxy exclusions"), ["multiple" => true, "size" => 3, "values" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 76
($context["config"] ?? null), "proxy_exclusions", [], "array", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default((($_v9 = ($context["config"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["proxy_exclusions"] ?? null) : null), [])) : ([])), "helper" => Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["possible_proxy_exclusions"] ?? null), "getDescriptions", [], "method", false, false, false, 77), function ($__description__) use ($context, $macros) { $context["description"] = $__description__; return $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["description"] ?? null)); }), "<br />")]]);
        // line 79
        yield "

   ";
        // line 81
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 81, $this->getSourceContext())->macro_smallTitle(...[__("Telemetry data")]);
        yield "
   ";
        // line 82
        $context["telemetry_enabled"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Telemetry::isEnabled");
        // line 83
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 83, $this->getSourceContext())->macro_htmlField(...["", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($tmp = ($context["telemetry_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (__("Yes")) : (__("No")))), __("Telemetry enabled"), ["helper" => __("To enable or disable sending telemetry, please change the \"telemetry\" automatic action.")]]);
        // line 85
        yield "
   ";
        // line 86
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 86, $this->getSourceContext())->macro_htmlField(...["", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Telemetry::getViewLink"), __("Telemetry data")]);
        yield "

   ";
        // line 88
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 88, $this->getSourceContext())->macro_smallTitle(...[__("GLPI update")]);
        yield "
   ";
        // line 89
        $context["btn_check_updates"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 90
            yield "      <a class=\"btn btn-secondary\" href=\"?check_version\"><i class=\"ti ti-reload\"></i>
         <span>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Check if a new version is available"), "html", null, true);
            yield "</span>
      </a>
   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 94, $this->getSourceContext())->macro_htmlField(...["",         // line 96
($context["btn_check_updates"] ?? null), (((("GLPI " . Twig\Extension\CoreExtension::constant("GLPI_VERSION")) . " Copyright (C) 2015-") . Twig\Extension\CoreExtension::constant("GLPI_YEAR")) . " Teclib' and contributors"), ["full_width" => true]]);
        // line 101
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/systeminfo_form.html.twig";
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
        return array (  166 => 101,  164 => 96,  162 => 94,  155 => 91,  152 => 90,  150 => 89,  146 => 88,  141 => 86,  138 => 85,  135 => 83,  133 => 82,  129 => 81,  125 => 79,  123 => 77,  122 => 76,  121 => 71,  120 => 68,  116 => 66,  114 => 60,  110 => 59,  106 => 58,  102 => 57,  98 => 56,  93 => 54,  89 => 53,  85 => 52,  80 => 50,  76 => 49,  73 => 48,  71 => 45,  68 => 44,  66 => 38,  61 => 37,  54 => 36,  49 => 33,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/systeminfo_form.html.twig", "/var/www/html/glpi/templates/pages/setup/general/systeminfo_form.html.twig");
    }
}
