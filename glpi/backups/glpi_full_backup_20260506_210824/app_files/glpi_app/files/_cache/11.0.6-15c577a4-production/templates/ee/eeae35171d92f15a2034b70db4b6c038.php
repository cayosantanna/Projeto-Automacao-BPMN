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

/* pages/setup/general/api_setup.html.twig */
class __TwigTemplate_f5ac93af71b1b22c6e167b2192bb0428 extends Template
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
        // line 35
        $macros["alerts"] = $this->macros["alerts"] = $this->load("components/alerts_macros.html.twig", 35)->unwrap();
        // line 33
        $this->parent = $this->load("pages/setup/general/base_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 38, $this->getSourceContext())->macro_largeTitle(...[__("API"), "ti ti-api-app"]);
        yield "

    ";
        // line 40
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 40, $this->getSourceContext())->macro_smallTitle(...[__("API")]);
        yield "
    ";
        // line 41
        yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 41, $this->getSourceContext())->macro_sliderField(...["enable_hlapi", CoreExtension::getAttribute($this->env, $this->source, ($context["config_object"] ?? null), "isHlApiEnabled", [], "method", false, false, false, 41), __("Enable API")]);
        yield "
    ";
        // line 42
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 42, $this->getSourceContext())->macro_nullField(...[]);
        yield "
    ";
        // line 43
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config_object"] ?? null), "isHlApiEnabled", [], "method", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "        ";
            $context["getting_started_doc"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["getting_started_doc_url"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("API Getting Started"), "html", null, true);
                yield "</a>";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            yield "        ";
            $context["endpoint_doc"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["endpoint_doc_url"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("API Endpoints"), "html", null, true);
                yield "</a>";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 46
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 46, $this->getSourceContext())->macro_htmlField(...["",             // line 48
($context["getting_started_doc"] ?? null)]);
            // line 49
            yield "
        ";
            // line 50
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 50, $this->getSourceContext())->macro_htmlField(...["",             // line 52
($context["endpoint_doc"] ?? null)]);
            // line 53
            yield "
        ";
            // line 54
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 54, $this->getSourceContext())->macro_textField(...["_url_base_api", ($context["api_url"] ?? null), __("URL of the API"), ["readonly" => true, "copyable" => true]]);
            // line 57
            yield "
    ";
        }
        // line 59
        yield "
    ";
        // line 60
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 60, $this->getSourceContext())->macro_smallTitle(...[__("Legacy API")]);
        yield "
    ";
        // line 61
        if ((($tmp = (($_v0 = ($context["config"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["enable_api"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "        ";
            yield $macros["alerts"]->getTemplateForMacro("macro_alert_warning", $context, 62, $this->getSourceContext())->macro_alert_warning(...[__("The Legacy API is enabled. It is recommended to only use the new API when possible.")]);
            yield "
    ";
        }
        // line 64
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 64, $this->getSourceContext())->macro_sliderField(...["enable_api", (($_v1 = ($context["config"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["enable_api"] ?? null) : null), __("Enable Legacy REST API"), ["additional_attributes" => ["onchange" => "confirmEnableLegacyApi(this)"]]]);
        // line 68
        yield "
    ";
        // line 69
        yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 69, $this->getSourceContext())->macro_nullField(...[]);
        yield "
    <script>
        function confirmEnableLegacyApi(element) {
            if (element.checked) {
                glpi_confirm({
                    title: \"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enable Legacy REST API"), "html", null, true);
        yield "\",
                    message: \"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to enable the Legacy API? It is recommended to only use the new API when possible."), "html", null, true);
        yield "\",
                    cancel_callback: () => element.checked = false
                });
            }
        }
    </script>
   ";
        // line 81
        if ((($tmp = (($_v2 = ($context["config"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["enable_api"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "      ";
            $context["legacy_doc"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["legacy_doc_url"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("API inline Documentation"), "html", null, true);
                yield "</a>";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 83
            yield "      ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 83, $this->getSourceContext())->macro_htmlField(...["",             // line 85
($context["legacy_doc"] ?? null)]);
            // line 86
            yield "
      ";
            // line 87
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 87, $this->getSourceContext())->macro_nullField(...[]);
            yield "
      ";
            // line 88
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 88, $this->getSourceContext())->macro_textField(...["_legacy_url_base_api", ($context["legacy_api_url"] ?? null), __("URL of the API"), ["readonly" => true, "copyable" => true]]);
            // line 91
            yield "
      ";
            // line 92
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 92, $this->getSourceContext())->macro_nullField(...[]);
            yield "
      ";
            // line 93
            yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 93, $this->getSourceContext())->macro_sliderField(...["enable_api_login_credentials", (($_v3 = ($context["config"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["enable_api_login_credentials"] ?? null) : null), __("Enable login with credentials"), ["helper" => __("Allow to login to API and get a session token with user credentials")]]);
            // line 95
            yield "
      ";
            // line 96
            yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 96, $this->getSourceContext())->macro_sliderField(...["enable_api_login_external_token", (($_v4 = ($context["config"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["enable_api_login_external_token"] ?? null) : null), __("Enable login with external token"), ["helper" => __("Allow to login to API and get a session token with user external token. See Remote access key in user Settings tab")]]);
            // line 98
            yield "
   ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/api_setup.html.twig";
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
        return array (  203 => 98,  201 => 96,  198 => 95,  196 => 93,  192 => 92,  189 => 91,  187 => 88,  183 => 87,  180 => 86,  178 => 85,  176 => 83,  166 => 82,  164 => 81,  155 => 75,  151 => 74,  143 => 69,  140 => 68,  137 => 64,  131 => 62,  129 => 61,  125 => 60,  122 => 59,  118 => 57,  116 => 54,  113 => 53,  111 => 52,  110 => 50,  107 => 49,  105 => 48,  103 => 46,  93 => 45,  83 => 44,  81 => 43,  77 => 42,  73 => 41,  69 => 40,  63 => 38,  56 => 37,  51 => 33,  49 => 35,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/api_setup.html.twig", "/var/www/html/glpi/templates/pages/setup/general/api_setup.html.twig");
    }
}
