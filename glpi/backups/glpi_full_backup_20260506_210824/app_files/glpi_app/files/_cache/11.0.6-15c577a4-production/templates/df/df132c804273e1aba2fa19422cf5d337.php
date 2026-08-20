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

/* pages/setup/general/systeminfo_table.html.twig */
class __TwigTemplate_7bf9d67e4a8559ba7711a8149bf7cc91 extends Template
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
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 36, $this->getSourceContext())->macro_largeTitle(...[__("Information about system installation and configuration"), "ti ti-file-info"]);
        yield "
";
        // line 37
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 37, $this->getSourceContext())->macro_htmlField(...["", $macros["inputs"]->getTemplateForMacro("macro_button", $context, 37, $this->getSourceContext())->macro_button(...["copy-sysinfo", __("Copy system information"), "button", 1, ["icon" => "ti ti-copy", "additional_attributes" => ["onclick" => "copyTextToClipboard(tableToDetails('#sysinfo_accordion'));flashIconButton(this, 'btn btn-success', 'ti ti-check', 1500);"]]]), "", ["no_label" => true]]);
        // line 44
        yield "

";
        // line 59
        yield "
";
        // line 60
        $context["status_mapping"] = [Twig\Extension\CoreExtension::constant("Glpi\\System\\Diagnostic\\SourceCodeIntegrityChecker::STATUS_ALTERED") => "M", Twig\Extension\CoreExtension::constant("Glpi\\System\\Diagnostic\\SourceCodeIntegrityChecker::STATUS_MISSING") => "D", Twig\Extension\CoreExtension::constant("Glpi\\System\\Diagnostic\\SourceCodeIntegrityChecker::STATUS_ADDED") => "A"];
        // line 65
        yield "
";
        // line 66
        $context["glpi_info_precontent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 67
            yield "    ";
            if ((($tmp =  !$this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("\\Glpi\\Toolbox\\VersionParser::isStableRelease", [Twig\Extension\CoreExtension::constant("GLPI_VERSION")])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "        <div class='alert alert-important alert-warning d-flex'>
            <strong>⚠️  ";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This version is UNSTABLE and some SECURITY FIXES may not be included."), "html", null, true);
                yield " ⚠️</strong>
        </div>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        yield "
";
        // line 74
        $context["glpi_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 75
            yield "GLPI: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ver"] ?? null), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc"), "html", null, true);
            yield " => ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GLPI_ROOT"), "html", null, true);
            yield ")
Installation mode: ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GLPI_INSTALL_MODE"), "html", null, true);
            yield "
Current language: ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["language"] ?? null), "html", null, true);
            yield "
Source Integrity: ";
            // line 78
            if ((null === ($context["code_integrity"] ?? null))) {
                yield "N/A";
            } elseif (Twig\Extension\CoreExtension::testEmpty(($context["code_integrity"] ?? null))) {
                yield "OK";
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["code_integrity"] ?? null)), "html", null, true);
                yield " files changed";
            }
            // line 79
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["code_integrity"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 80
                yield "
";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["code_integrity"] ?? null), 0, 25));
                foreach ($context['_seq'] as $context["file"] => $context["state"]) {
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((("  " . (($_v0 = ($context["status_mapping"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["state"]] ?? null) : null)) . ": ") . $context["file"]) . "
"), "html", null, true);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['file'], $context['state'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["code_integrity"] ?? null)) > 25)) {
                    // line 85
                    yield "  ...
";
                }
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        yield "
";
        // line 90
        $context["setup_init_keys"] = ["disable_functions", "max_execution_time", "max_input_vars", "memory_limit", "post_max_size", "session.cookie_secure", "session.cookie_httponly", "session.cookie_samesite", "session.save_handler", "upload_max_filesize"];
        // line 102
        $context["server_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 103
            yield "Operating system: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("php_uname"), "html", null, true);
            yield "

PHP: ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("phpversion"), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("php_sapi_name"), "html", null, true);
            yield "

PHP extensions: ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("get_loaded_extensions"), ", "), "html", null, true);
            yield "

Setup: ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["setup_init_keys"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("ini_get", [$context["k"]]), "html", null, true);
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['k'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            yield "

Web server: ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["_server"] ?? null), "SERVER_SOFTWARE", [], "array", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["_server"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["SERVER_SOFTWARE"] ?? null) : null), "")) : ("")), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["_server"] ?? null), "SERVER_SIGNATURE", [], "array", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default((($_v2 = ($context["_server"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["SERVER_SIGNATURE"] ?? null) : null), "")) : ("")))), "html", null, true);
            yield ")

User agent: ";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["_server"] ?? null), "HTTP_USER_AGENT", [], "array", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default((($_v3 = ($context["_server"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["HTTP_USER_AGENT"] ?? null) : null), "")) : ("")), "html", null, true);
            yield "

Database:
";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["db_info"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 118
                yield "   ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("
" . $context["k"]), "html", null, true);
                yield ": ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
                yield "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "
Requirements:";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["core_requirements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
                // line 123
                yield "
";
                yield "<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/pics/") . (($_v4 = $context["requirement"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["status"] ?? null) : null)) . "_min.png"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((($_v5 = $context["requirement"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["messages"] ?? null) : null), " "), "html", null, true);
                yield "\"/>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((($_v6 = $context["requirement"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["messages"] ?? null) : null), "
"), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['requirement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        yield "
";
        // line 127
        $context["constants_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("get_defined_constants"), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["k"] ?? null)), "startsWith", ["GLPI_"], "method", false, false, false, 128); }));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("
" . $context["name"]), "html", null, true);
                yield ": ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode($context["value"], Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_SLASHES")), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 132
        yield "
";
        // line 133
        $context["locale_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales_overrides"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("
" . $context["file"]), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 138
        yield "
<div class=\"accordion\" id=\"sysinfo_accordion\">
   ";
        // line 140
        yield $this->getTemplateForMacro("macro_sysinfo_section", $context, 140, $this->getSourceContext())->macro_sysinfo_section(...["GLPI information", ($context["glpi_info"] ?? null), false, ($context["glpi_info_precontent"] ?? null)]);
        yield "
   ";
        // line 141
        yield $this->getTemplateForMacro("macro_sysinfo_section", $context, 141, $this->getSourceContext())->macro_sysinfo_section(...["Server", ($context["server_info"] ?? null), true]);
        yield "
   ";
        // line 142
        yield $this->getTemplateForMacro("macro_sysinfo_section", $context, 142, $this->getSourceContext())->macro_sysinfo_section(...["GLPI constants", ($context["constants_info"] ?? null), true]);
        yield "
   ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["system_info_objs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["info_obj"]) {
            // line 144
            yield "      ";
            $context["info"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call([$context["info_obj"], "getSystemInformation"]);
            // line 145
            yield "      ";
            if (( !Twig\Extension\CoreExtension::testEmpty((($_v7 = ($context["info"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["label"] ?? null) : null)) &&  !Twig\Extension\CoreExtension::testEmpty((($_v8 = ($context["info"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["content"] ?? null) : null)))) {
                // line 146
                yield "      ";
                yield $this->getTemplateForMacro("macro_sysinfo_section", $context, 146, $this->getSourceContext())->macro_sysinfo_section(...[(($_v9 = ($context["info"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["label"] ?? null) : null), (($_v10 = ($context["info"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["content"] ?? null) : null)]);
                yield "
      ";
            }
            // line 148
            yield "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['info_obj'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "   ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["locales_overrides"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 150
            yield "      ";
            yield $this->getTemplateForMacro("macro_sysinfo_section", $context, 150, $this->getSourceContext())->macro_sysinfo_section(...["Locales overrides", ($context["locale_info"] ?? null)]);
            yield "
   ";
        }
        // line 152
        yield "</div>

<script>
   \$(() => {
       // Search all .section-content text content and Replace all instances of a '#' followed by a number so that there is a zero-width space between the # and the number
       \$('.section-content').each(function() {
           \$(this).html(\$(this).html().replace(/#(\\d+)/g, '#\\u200B\$1'));
       });
   });
</script>
";
        yield from [];
    }

    // line 46
    public function macro_sysinfo_section($label = null, $content = null, $raw = false, $raw_precontent = "", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "content" => $content,
            "raw" => $raw,
            "raw_precontent" => $raw_precontent,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 47
            yield "   ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 48
            yield "   ";
            $context["cleaned_content"] = Twig\Extension\CoreExtension::trim(($context["content"] ?? null));
            // line 49
            yield "   <div class=\"accordion-item\">
      <div class=\"accordion-header section-header\" id=\"sysinfo_header_";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">
         <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sysinfo_section_";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "</button>
      </div>
      <div id=\"sysinfo_section_";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" class=\"accordion-collapse collapse\" aria-labelledby=\"sysinfo_header_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" data-bs-parent=\"#sysinfo_accordion\">
         ";
            // line 54
            yield ($context["raw_precontent"] ?? null);
            yield "
         <pre class=\"section-content\">";
            // line 55
            yield (((($tmp = ($context["raw"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["cleaned_content"] ?? null)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cleaned_content"] ?? null))));
            yield "</pre>
      </div>
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/systeminfo_table.html.twig";
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
        return array (  380 => 55,  376 => 54,  370 => 53,  363 => 51,  359 => 50,  356 => 49,  353 => 48,  350 => 47,  335 => 46,  320 => 152,  314 => 150,  311 => 149,  305 => 148,  299 => 146,  296 => 145,  293 => 144,  289 => 143,  285 => 142,  281 => 141,  277 => 140,  273 => 138,  264 => 135,  260 => 134,  258 => 133,  255 => 132,  244 => 129,  240 => 128,  238 => 127,  235 => 126,  219 => 123,  215 => 122,  212 => 120,  200 => 118,  196 => 117,  190 => 114,  183 => 112,  179 => 110,  167 => 109,  162 => 107,  155 => 105,  149 => 103,  147 => 102,  145 => 90,  142 => 89,  135 => 85,  133 => 84,  126 => 82,  122 => 81,  119 => 80,  117 => 79,  108 => 78,  104 => 77,  100 => 76,  91 => 75,  89 => 74,  86 => 73,  78 => 69,  75 => 68,  72 => 67,  70 => 66,  67 => 65,  65 => 60,  62 => 59,  58 => 44,  56 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/systeminfo_table.html.twig", "/var/www/html/glpi/templates/pages/setup/general/systeminfo_table.html.twig");
    }
}
