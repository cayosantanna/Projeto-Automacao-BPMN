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

/* components/form/basic_inputs_macros.html.twig */
class __TwigTemplate_8df28fff3353bc828541d1e1728ff07a extends Template
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
        // line 121
        yield "

";
        // line 136
        yield "

";
        // line 165
        yield "

";
        // line 195
        yield "

";
        // line 200
        yield "

";
        // line 205
        yield "

";
        // line 222
        yield "

";
        // line 227
        yield "

";
        // line 341
        yield "

";
        // line 348
        yield "

";
        // line 451
        yield "

";
        // line 475
        yield "

";
        // line 498
        yield "

";
        // line 503
        yield "
";
        yield from [];
    }

    // line 33
    public function macro_input($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => null, "type" => "text", "input_addclass" => "", "additional_attributes" => [], "readonly" => false, "disabled" => false, "multiple" => false, "required" => false, "maxlength" => null, "is_disclosable" => false, "is_copyable" => false, "clearable" => false, "with_class" => true],             // line 48
($context["options"] ?? null));
            // line 49
            yield "
    ";
            // line 50
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 50), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 50), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 50), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 51
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["required" => true]);
                // line 52
                yield "    ";
            }
            // line 53
            yield "
    ";
            // line 54
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 54), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 54), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 54), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 56
                yield "    ";
            }
            // line 57
            yield "
   ";
            // line 58
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 58) || CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_copyable", [], "any", false, false, false, 58)) && (null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 58)))) {
                // line 59
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((Html::sanitizeDomId(                // line 60
($context["name"] ?? null)) . "_") . Twig\Extension\CoreExtension::random($this->env->getCharset()))]);
                // line 62
                yield "   ";
            }
            // line 63
            yield "
    ";
            // line 64
            $context["input"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 65
                yield "        <input type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 65), "html", null, true);
                yield "\" ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 65) != null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("id=" . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 65)), "html", null, true)) : (""));
                yield "
        ";
                // line 66
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "with_class", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 67
                    yield "               class=\"form-control ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 67), "html", null, true);
                    yield "\"
        ";
                }
                // line 69
                yield "               name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\"
            ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 70));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    // line 71
                    yield "               ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "\"
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                yield "               ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("maxlength=" . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 73)), "html", null, true)) : (""));
                yield "
               ";
                // line 74
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
                yield "
               ";
                // line 75
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                yield "
               ";
                // line 76
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("multiple") : (""));
                yield " ";
                // line 77
                yield "               ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
                yield "
               ";
                // line 78
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "pattern", [], "any", true, true, false, 78)) {
                    yield "pattern=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "pattern", [], "any", false, false, false, 78), "html", null, true);
                    yield "\"";
                }
                // line 79
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 79)) {
                    yield "min=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 79), "html", null, true);
                    yield "\"";
                }
                // line 80
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", true, true, false, 80)) {
                    yield "max=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", false, false, false, 80), "html", null, true);
                    yield "\"";
                }
                // line 81
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", true, true, false, 81)) {
                    yield "step=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 81), "html", null, true);
                    yield "\"";
                }
                yield " />
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 83
            yield "
    ";
            // line 84
            $context["more_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 85
                yield "        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 86
                    yield "            <div class=\"btn btn-outline-secondary\"
                 onmousedown=\"showDisclosablePasswordField('";
                    // line 87
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 87), "js"), "html", null, true);
                    yield "')\"
                 onmouseup=\"hideDisclosablePasswordField('";
                    // line 88
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 88), "js"), "html", null, true);
                    yield "')\"
                 onmouseout=\"hideDisclosablePasswordField('";
                    // line 89
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 89), "js"), "html", null, true);
                    yield "')\">
                <i class=\"ti ti-eye disclose\"></i>
            </div>
        ";
                }
                // line 93
                yield "
        ";
                // line 94
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_copyable", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 95
                    yield "            <div class=\"btn btn-outline-secondary\" onclick=\"copyDisclosablePasswordFieldToClipboard('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 95), "js"), "html", null, true);
                    yield "')\">
                <i class=\"ti ti-clipboard-copy disclose\"></i>
            </div>
        ";
                }
                // line 99
                yield "    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 100
            yield "
    ";
            // line 101
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(($context["more_html"] ?? null))) > 0)) {
                // line 102
                yield "        ";
                $context["input"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 103
                    yield "            <div class=\"btn-group btn-group-sm d-flex\">
                ";
                    // line 104
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input"] ?? null), "html", null, true);
                    yield "
                ";
                    // line 105
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["more_html"] ?? null), "html", null, true);
                    yield "
            </div>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 108
                yield "    ";
            }
            // line 109
            yield "
    ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input"] ?? null), "html", null, true);
            yield "

    ";
            // line 112
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 113
                yield "        <span class=\"d-inline-flex\">
            <input type=\"checkbox\" name=\"_blank_";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" id=\"_blank_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" class=\"ms-1\">
            <label for=\"_blank_";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" class=\"ms-1\">
                ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Clear"), "html", null, true);
                yield "
            </label>
        </span>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 123
    public function macro_text($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 124
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["copyable" => false],             // line 126
($context["options"] ?? null));
            // line 127
            yield "
    ";
            // line 128
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "copyable", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 129
                yield "        <div class=\"copy_to_clipboard_wrapper\">
    ";
            }
            // line 131
            yield "    ";
            yield $this->getTemplateForMacro("macro_input", $context, 131, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "text"])]);
            yield "
    ";
            // line 132
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "copyable", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 133
                yield "        </div>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 138
    public function macro_number($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 139
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["step" => 1],             // line 141
($context["options"] ?? null));
            // line 142
            yield "
    ";
            // line 143
            if ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "decimals", [], "any", true, true, false, 143) &&  !((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", true, true, false, 143)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 143), false)) : (false))) &&  !((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", true, true, false, 143)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 143), false)) : (false)))) {
                // line 144
                yield "        ";
                // line 145
                yield "        ";
                $context["decimals_part"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 145), ".");
                // line 146
                yield "        ";
                $context["decimals"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["decimals_part"] ?? null), 1, [], "array", true, true, false, 146)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v0 = ($context["decimals_part"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[1] ?? null) : null))) : (0));
                // line 147
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["decimals" => ($context["decimals"] ?? null)]);
                // line 148
                yield "    ";
            }
            // line 149
            yield "
    ";
            // line 150
            if ((($context["value"] ?? null) == "")) {
                // line 151
                yield "        ";
                $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 151)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 151)) : (0));
                // line 152
                yield "    ";
            }
            // line 153
            yield "
    ";
            // line 154
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 154) != "any") && (Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 154), 0, "floor") != CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 154)))) {
                // line 155
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "decimals", [], "any", true, true, false, 155)) {
                    // line 156
                    yield "            ";
                    $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [($context["value"] ?? null), true, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "decimals", [], "any", false, false, false, 156)]);
                    // line 157
                    yield "        ";
                } else {
                    // line 158
                    yield "            ";
                    // line 159
                    yield "            ";
                    $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [($context["value"] ?? null), true]);
                    // line 160
                    yield "        ";
                }
                // line 161
                yield "    ";
            }
            // line 162
            yield "
    ";
            // line 163
            yield $this->getTemplateForMacro("macro_input", $context, 163, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "number"])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 167
    public function macro_color($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 168
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ((            // line 169
($context["name"] ?? null) . "_") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", true, true, false, 169) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 169)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 169)) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))))],             // line 170
($context["options"] ?? null));
            // line 171
            yield "
    ";
            // line 172
            yield $this->getTemplateForMacro("macro_input", $context, 172, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "text", "input_addclass" => "rounded-0"])]);
            // line 175
            yield "
    <script>
        \$(function () {
            \$(\"#";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 178), "css"), "js"), "html", null, true);
            yield "\").spectrum({
                showInput: true,
                preferredFormat: \"hex\",
                type: \"text\",
                cancelText: \"";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "js"), "html", null, true);
            yield "\",
                chooseText: \"";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Validate"), "js"), "html", null, true);
            yield "\",
                change: function (color) {
                    if (color !== null && color.getAlpha() !== 1) {
                        let hex = color.toHexString();
                        hex += (\"0\" + Math.round(parseFloat(color.getAlpha()) * 255).toString(16)).slice(-2);
                        this.value = hex;
                    }
                }
            });
        });
    </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 197
    public function macro_password($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 198
            yield "    ";
            yield $this->getTemplateForMacro("macro_input", $context, 198, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "password"])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 202
    public function macro_email($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 203
            yield "    ";
            yield $this->getTemplateForMacro("macro_input", $context, 203, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "email"])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 207
    public function macro_file($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 208
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["simple" => false],             // line 210
($context["options"] ?? null));
            // line 211
            yield "
    ";
            // line 212
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "simple", [], "any", false, false, false, 212)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 213
                yield "        ";
                yield $this->getTemplateForMacro("macro_input", $context, 213, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "file"])]);
                yield "
    ";
            } else {
                // line 215
                yield "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [Twig\Extension\CoreExtension::merge(                // line 216
($context["options"] ?? null), ["name" =>                 // line 217
($context["name"] ?? null)])]);
                // line 220
                yield "    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 224
    public function macro_hidden($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 225
            yield "    ";
            yield $this->getTemplateForMacro("macro_input", $context, 225, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "hidden", "with_class" => false])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 229
    public function macro_date($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 230
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "enableTime" => false, "noCalendar" => false, "checkIsExpired" => false, "clearable" => false, "container_addclass" => "", "input_addclass" => "", "readonly" => false, "disabled" => false, "maybeempty" => false],             // line 241
($context["options"] ?? null));
            // line 242
            yield "
    ";
            // line 243
            $context["editable"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 243) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 243));
            // line 244
            yield "
    ";
            // line 245
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ((Html::sanitizeDomId(            // line 246
($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 246))],             // line 247
($context["options"] ?? null));
            // line 248
            yield "
    ";
            // line 249
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 249), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 249)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 249), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 249), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 250
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 251
                yield "    ";
            }
            // line 252
            yield "
    ";
            // line 253
            if ((($context["value"] ?? null) == "NULL")) {
                // line 254
                yield "      ";
                $context["value"] = null;
                // line 255
                yield "   ";
            }
            // line 256
            yield "
    ";
            // line 257
            $context["final_expiration_class"] = "";
            // line 258
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "checkIsExpired", [], "any", false, false, false, 258)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 259
                yield "        ";
                if (($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["value"] ?? null), "Y-m-d H:i:s") < $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d H:i:s"))) {
                    // line 260
                    yield "            ";
                    $context["final_expiration_class"] = " warn";
                    // line 261
                    yield "        ";
                }
                // line 262
                yield "    ";
            } else {
                // line 263
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", true, true, false, 263)) {
                    // line 264
                    yield "            ";
                    $context["final_expiration_class"] = (" " . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", false, false, false, 264));
                    // line 265
                    yield "        ";
                } else {
                    // line 266
                    yield "            ";
                    $context["final_expiration_class"] = "";
                    // line 267
                    yield "        ";
                }
                // line 268
                yield "    ";
            }
            // line 269
            yield "
    <div
        class=\"btn-group flex-grow-1 flatpickr d-flex ";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "container_addclass", [], "any", false, false, false, 271), "html", null, true);
            yield "\"
        id=\"";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 272), "html", null, true);
            yield "\"
        data-bs-toggle=\"tooltip\"
        data-bs-placement=\"bottom\"
        title=\"";
            // line 275
            yield (((($tmp = ($context["editable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enter or select a date"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Date", "Dates", 1), "html", null, true)));
            yield "\"
    >
        ";
            // line 277
            yield $this->getTemplateForMacro("macro_input", $context, 277, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "text", "id" => (CoreExtension::getAttribute($this->env, $this->source,             // line 279
($context["options"] ?? null), "id", [], "any", false, false, false, 279) . "_input"), "additional_attributes" => Twig\Extension\CoreExtension::merge((((CoreExtension::getAttribute($this->env, $this->source,             // line 280
($context["options"] ?? null), "additional_attributes", [], "any", true, true, false, 280) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 280)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 280)) : ([])), ["data-input" => ""]), "input_addclass" => (CoreExtension::getAttribute($this->env, $this->source,             // line 281
($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 281) . ($context["final_expiration_class"] ?? null)), "clearable" => false])]);
            // line 283
            yield "

        ";
            // line 285
            if ((($tmp = ($context["editable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 286
                yield "            ";
                $context["calendar_icon"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 286)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ti ti-calendar-time") : ("ti ti-calendar"));
                // line 287
                yield "            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" data-toggle>
                <i class=\"";
                // line 288
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["calendar_icon"] ?? null), "html", null, true);
                yield "\"></i>
                <span class=\"sr-only\">";
                // line 289
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enter or select a date"), "html", null, true);
                yield "</span>
            </button>
            ";
                // line 292
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 292) || CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maybeempty", [], "any", false, false, false, 292))) {
                    // line 293
                    yield "                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-clear title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Clear"), "html", null, true);
                    yield "\">
                    <i class=\"ti ti-circle-x\"></i>
                </button>
            ";
                }
                // line 297
                yield "        ";
            }
            // line 298
            yield "    </div>

    ";
            // line 300
            if ((($tmp = ($context["editable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 301
                yield "        ";
                $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
                // line 302
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 302) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "noCalendar", [], "any", false, false, false, 302))) {
                    // line 303
                    yield "            ";
                    $context["date_format"] = "Y-m-d H:i:S";
                    // line 304
                    yield "            ";
                    $context["alt_format"] = ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", ["js"]) . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 304)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" H:i:S") : ("")));
                    // line 305
                    yield "        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 305) && CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "noCalendar", [], "any", false, false, false, 305))) {
                    // line 306
                    yield "            ";
                    $context["date_format"] = "H:i:S";
                    // line 307
                    yield "            ";
                    $context["alt_format"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 307)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" H:i:S") : (""));
                    // line 308
                    yield "        ";
                } elseif (( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 308) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "noCalendar", [], "any", false, false, false, 308))) {
                    // line 309
                    yield "            ";
                    $context["date_format"] = "Y-m-d";
                    // line 310
                    yield "            ";
                    $context["alt_format"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", ["js"]);
                    // line 311
                    yield "        ";
                } else {
                    // line 312
                    yield "            ";
                    // line 313
                    yield "            ";
                    $context["date_format"] = "Y-m-d H:i:S";
                    // line 314
                    yield "        ";
                }
                // line 315
                yield "        <script>
            \$(function() {
                \$(\"#";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 317), "css"), "js"), "html", null, true);
                yield "\").flatpickr({
                    wrap: true,
                    altInput: true,
                    dateFormat: '";
                // line 320
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date_format"] ?? null), "js"), "html", null, true);
                yield "',
                    altFormat: '";
                // line 321
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alt_format"] ?? null), "js"), "html", null, true);
                yield "',
                    enableTime: ";
                // line 322
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 322)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield ",
                    enableSeconds: ";
                // line 323
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 323)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield ",
                    noCalendar: ";
                // line 324
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "noCalendar", [], "any", false, false, false, 324)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield ",
                    weekNumbers: true,
                    time_24hr: true,
                    allowInput: ";
                // line 327
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 327)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                yield ",
                    clickOpens: ";
                // line 328
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 328)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                yield ",
                    locale: getFlatPickerLocale(\"";
                // line 329
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["locale"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["language"] ?? null) : null), "js"), "html", null, true);
                yield "\", \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["locale"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["region"] ?? null) : null), "js"), "html", null, true);
                yield "\"),
                    onClose(dates, currentdatestring, picker) {
                        picker.setDate(picker.altInput.value, true, picker.config.altFormat)
                    },
                    plugins: [
                        CustomFlatpickrButtons()
                    ]
                });
            });
        </script>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 343
    public function macro_datetime($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 344
            yield "    ";
            yield $this->getTemplateForMacro("macro_date", $context, 344, $this->getSourceContext())->macro_date(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["enableTime" => true])]);
            // line 346
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 350
    public function macro_textarea($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 351
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => null, "rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "rows" => 3, "enable_richtext" => false, "enable_images" => true, "mention_options" => ["enabled" => (CoreExtension::getAttribute($this->env, $this->source,             // line 358
($context["options"] ?? null), "enable_mentions", [], "any", true, true, false, 358) && CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 358)), "full" => true, "users" => []], "entities_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "readonly" => false, "disabled" => false, "required" => false, "add_body_classes" => [], "toolbar" => true, "toolbar_location" => "top", "init" => true, "init_on_demand" => false, "placeholder" => "", "enable_form_tags" => false, "form_tags_form_id" => null, "aria_label" => "", "statusbar" => true, "content_style" => "", "input_addclass" => "", "additional_attributes" => [], "plugins_to_remove" => []],             // line 380
($context["options"] ?? null));
            // line 381
            yield "
    ";
            // line 382
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 382), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 382)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 382), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 382), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 383
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 384
                yield "    ";
            }
            // line 385
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 386
($context["options"] ?? null), "id", [], "any", false, false, false, 386)) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 386)) : (((($context["name"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 386))))]);
            // line 388
            yield "
    ";
            // line 390
            yield "    <textarea class=\"form-control ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 390), "html", null, true);
            yield "\"
            id=\"";
            // line 391
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 391), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" rows=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rows", [], "any", false, false, false, 391), "html", null, true);
            yield "\"
            style=\"width: 100%;\"
            ";
            // line 393
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 393));
            foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                // line 394
                yield "               ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 396
            yield "            ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "aria_label", [], "any", false, false, false, 396))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 397
                yield "                aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "aria_label", [], "any", false, false, false, 397), "html", null, true);
                yield "\"
            ";
            }
            // line 399
            yield "            ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "placeholder", [], "any", false, false, false, 399))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 400
                yield "                placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "placeholder", [], "any", false, false, false, 400), "html", null, true);
                yield "\"
            ";
            }
            // line 402
            yield "            ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 402)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "
            ";
            // line 403
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 403)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
            yield "
            ";
            // line 404
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 404)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
            yield ">";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 404)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["value"] ?? null)))) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true)));
            yield "</textarea>

    ";
            // line 406
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 406)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 407
                yield "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::initEditorSystem", [CoreExtension::getAttribute($this->env, $this->source,                 // line 408
($context["options"] ?? null), "id", [], "any", false, false, false, 408), CoreExtension::getAttribute($this->env, $this->source,                 // line 409
($context["options"] ?? null), "rand", [], "any", false, false, false, 409), true, ((CoreExtension::getAttribute($this->env, $this->source,                 // line 411
($context["options"] ?? null), "disabled", [], "any", true, true, false, 411)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 411), false)) : (false)), CoreExtension::getAttribute($this->env, $this->source,                 // line 412
($context["options"] ?? null), "enable_images", [], "any", false, false, false, 412), ((CoreExtension::getAttribute($this->env, $this->source,                 // line 413
($context["options"] ?? null), "editor_height", [], "any", true, true, false, 413)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "editor_height", [], "any", false, false, false, 413), 150)) : (150)), CoreExtension::getAttribute($this->env, $this->source,                 // line 414
($context["options"] ?? null), "add_body_classes", [], "any", false, false, false, 414), CoreExtension::getAttribute($this->env, $this->source,                 // line 415
($context["options"] ?? null), "toolbar_location", [], "any", false, false, false, 415), CoreExtension::getAttribute($this->env, $this->source,                 // line 416
($context["options"] ?? null), "init", [], "any", false, false, false, 416), CoreExtension::getAttribute($this->env, $this->source,                 // line 417
($context["options"] ?? null), "placeholder", [], "any", false, false, false, 417), CoreExtension::getAttribute($this->env, $this->source,                 // line 418
($context["options"] ?? null), "toolbar", [], "any", false, false, false, 418), CoreExtension::getAttribute($this->env, $this->source,                 // line 419
($context["options"] ?? null), "statusbar", [], "any", false, false, false, 419), CoreExtension::getAttribute($this->env, $this->source,                 // line 420
($context["options"] ?? null), "content_style", [], "any", false, false, false, 420), CoreExtension::getAttribute($this->env, $this->source,                 // line 421
($context["options"] ?? null), "init_on_demand", [], "any", false, false, false, 421), CoreExtension::getAttribute($this->env, $this->source,                 // line 422
($context["options"] ?? null), "plugins_to_remove", [], "any", false, false, false, 422)]);
                // line 424
                yield "   ";
            }
            // line 425
            yield "   ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_form_tags", [], "any", false, false, false, 425)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 426
                yield "        <script>
            \$(function() {
                const form_tags = new GLPI.RichText.FormTags(
                    tinymce.get('";
                // line 429
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 429), "js"), "html", null, true);
                yield "'),
                    ";
                // line 430
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "form_tags_form_id", [], "any", false, false, false, 430));
                yield ",
                );
                form_tags.register();
            });
        </script>
    ";
            }
            // line 436
            yield "
    ";
            // line 437
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mention_options", [], "any", false, true, false, 437), "enabled", [], "any", true, true, false, 437)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mention_options", [], "any", false, false, false, 437), "enabled", [], "any", false, false, false, 437), false)) : (false)) && $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications"))) {
                // line 438
                yield "        <script>
            \$(function() {
                const user_mention = new GLPI.RichText.UserMention(
                    tinymce.get('";
                // line 441
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 441), "js"), "html", null, true);
                yield "'),
                    ";
                // line 442
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 442));
                yield ",
                    '";
                // line 443
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewIDORToken("User", ["right" => "all", "entity_restrict" => json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 443))]), "html", null, true);
                yield "',
                    ";
                // line 444
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mention_options", [], "any", false, false, false, 444));
                yield "
                );
                user_mention.register();
            });
        </script>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 453
    public function macro_checkbox($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 454
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => null, "input_addclass" => "", "readonly" => false, "disabled" => false, "required" => false, "additional_attributes" => []],             // line 461
($context["options"] ?? null));
            // line 462
            yield "
    <input type=\"hidden\"   name=\"";
            // line 463
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"0\" />
    <input type=\"checkbox\" name=\"";
            // line 464
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"1\"
           class=\"form-check-input ";
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 465), "html", null, true);
            yield "\"
           ";
            // line 466
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 466) != null)) ? ((("id=\"" . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 466))) . "\"")) : (""));
            yield "
           ";
            // line 467
            yield (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
            yield "
           ";
            // line 468
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 468)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
            yield "
           ";
            // line 469
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 469)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
            yield "
           ";
            // line 470
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 470)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "
            ";
            // line 471
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 471));
            foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                // line 472
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 473
            yield "/>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 477
    public function macro_button($name = null, $label = "", $type = "button", $value = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "label" => $label,
            "type" => $type,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 478
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["type" => "submit", "class" => "btn btn-primary", "icon" => "", "icon_title" => "", "additional_attributes" => []],             // line 484
($context["options"] ?? null));
            // line 485
            yield "
    <button class=\"";
            // line 486
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", false, false, false, 486), "html", null, true);
            yield "\" type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"
        ";
            // line 487
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 487));
            foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                // line 488
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 489
            yield ">
        ";
            // line 490
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 490))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 491
                yield "            <i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 491), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon_title", [], "any", false, false, false, 491), "html", null, true);
                yield "\"></i>
        ";
            }
            // line 493
            yield "        ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 494
                yield "            <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
                yield "</span>
        ";
            }
            // line 496
            yield "    </button>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 500
    public function macro_submit($name = null, $label = "", $value = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "label" => $label,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 501
            yield "    ";
            yield $this->getTemplateForMacro("macro_button", $context, 501, $this->getSourceContext())->macro_button(...[($context["name"] ?? null), ($context["label"] ?? null), "submit", ($context["value"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 504
    public function macro_label($label = null, $id = null, $options = [], $class = "form-label", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "id" => $id,
            "options" => $options,
            "class" => $class,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 505
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["locked" => false, "locked_value" => null, "tpl_mark" => null, "helper" => false],             // line 510
($context["options"] ?? null));
            // line 511
            yield "
    ";
            // line 512
            $context["required_mark"] = "";
            // line 513
            yield "    ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", true, true, false, 513) && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 513), "isMandatoryField", [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 513)], "method", true, true, false, 513)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 513), "isMandatoryField", [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 513)], "method", false, false, false, 513), false)) : (false))) || (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", true, true, false, 513) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 513)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 513)) : (false)))) {
                // line 514
                yield "        ";
                $context["required_mark"] = "<span class=\"required\">*</span>";
                // line 515
                yield "    ";
            }
            // line 516
            yield "
    ";
            // line 517
            $context["helper"] = "";
            // line 518
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 518)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 519
                yield "        ";
                // line 520
                yield "        ";
                // line 521
                yield "        ";
                $context["helper_safe_text"] = Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 521)));
                // line 522
                yield "        ";
                $context["helper"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 523
                    yield "        <span class=\"form-help\"
              data-bs-toggle=\"tooltip\"
              data-bs-placement=\"top\"
              data-bs-html=\"true\"
              data-bs-title=\"";
                    // line 527
                    yield ($context["helper_safe_text"] ?? null);
                    yield "\">
            ?
        </span>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 531
                yield "    ";
            }
            // line 532
            yield "
    ";
            // line 533
            $context["locked_mark"] = "";
            // line 534
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked", [], "any", false, false, false, 534)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 535
                yield "        ";
                $context["locked_mark"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 536
                    yield "        ";
                    $context["locked_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Field will not be updated from inventory"), "html", null, true);
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 537
                    yield "        ";
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 537))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 538
                        yield "            ";
                        $context["locked_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["locked_title"] ?? null), "html", null, true);
                            yield "
            -
            ";
                            // line 540
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((__("Last inventory value was:") . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 540)), "html", null, true);
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 541
                        yield "        ";
                    }
                    // line 542
                    yield "        <i class=\"ti ti-lock\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["locked_title"] ?? null), "html", null, true);
                    yield "\" data-bs-toggle=\"tooltip\"></i>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 544
                yield "    ";
            }
            // line 545
            yield "
    <label class=\"";
            // line 546
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 547
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "
        ";
            // line 548
            yield ($context["locked_mark"] ?? null);
            yield "
        ";
            // line 549
            yield ($context["required_mark"] ?? null);
            yield "
        ";
            // line 550
            yield ($context["helper"] ?? null);
            yield "
        ";
            // line 551
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "tpl_mark", [], "any", false, false, false, 551))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 552
                yield "            ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "tpl_mark", [], "any", false, false, false, 552);
                yield "
        ";
            }
            // line 554
            yield "    </label>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/basic_inputs_macros.html.twig";
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
        return array (  1424 => 554,  1418 => 552,  1416 => 551,  1412 => 550,  1408 => 549,  1404 => 548,  1400 => 547,  1394 => 546,  1391 => 545,  1388 => 544,  1381 => 542,  1378 => 541,  1374 => 540,  1367 => 538,  1364 => 537,  1358 => 536,  1355 => 535,  1352 => 534,  1350 => 533,  1347 => 532,  1344 => 531,  1336 => 527,  1330 => 523,  1327 => 522,  1324 => 521,  1322 => 520,  1320 => 519,  1317 => 518,  1315 => 517,  1312 => 516,  1309 => 515,  1306 => 514,  1303 => 513,  1301 => 512,  1298 => 511,  1296 => 510,  1294 => 505,  1279 => 504,  1270 => 501,  1255 => 500,  1248 => 496,  1242 => 494,  1239 => 493,  1231 => 491,  1229 => 490,  1226 => 489,  1215 => 488,  1211 => 487,  1201 => 486,  1198 => 485,  1196 => 484,  1194 => 478,  1178 => 477,  1171 => 473,  1160 => 472,  1156 => 471,  1152 => 470,  1148 => 469,  1144 => 468,  1140 => 467,  1136 => 466,  1132 => 465,  1128 => 464,  1124 => 463,  1121 => 462,  1119 => 461,  1117 => 454,  1103 => 453,  1090 => 444,  1086 => 443,  1082 => 442,  1078 => 441,  1073 => 438,  1071 => 437,  1068 => 436,  1059 => 430,  1055 => 429,  1050 => 426,  1047 => 425,  1044 => 424,  1042 => 422,  1041 => 421,  1040 => 420,  1039 => 419,  1038 => 418,  1037 => 417,  1036 => 416,  1035 => 415,  1034 => 414,  1033 => 413,  1032 => 412,  1031 => 411,  1030 => 409,  1029 => 408,  1027 => 407,  1025 => 406,  1018 => 404,  1014 => 403,  1009 => 402,  1003 => 400,  1000 => 399,  994 => 397,  991 => 396,  980 => 394,  976 => 393,  967 => 391,  962 => 390,  959 => 388,  957 => 386,  955 => 385,  952 => 384,  949 => 383,  947 => 382,  944 => 381,  942 => 380,  941 => 358,  939 => 351,  925 => 350,  918 => 346,  915 => 344,  901 => 343,  881 => 329,  877 => 328,  873 => 327,  867 => 324,  863 => 323,  859 => 322,  855 => 321,  851 => 320,  845 => 317,  841 => 315,  838 => 314,  835 => 313,  833 => 312,  830 => 311,  827 => 310,  824 => 309,  821 => 308,  818 => 307,  815 => 306,  812 => 305,  809 => 304,  806 => 303,  803 => 302,  800 => 301,  798 => 300,  794 => 298,  791 => 297,  783 => 293,  780 => 292,  775 => 289,  771 => 288,  768 => 287,  765 => 286,  763 => 285,  759 => 283,  757 => 281,  756 => 280,  755 => 279,  754 => 277,  749 => 275,  743 => 272,  739 => 271,  735 => 269,  732 => 268,  729 => 267,  726 => 266,  723 => 265,  720 => 264,  717 => 263,  714 => 262,  711 => 261,  708 => 260,  705 => 259,  702 => 258,  700 => 257,  697 => 256,  694 => 255,  691 => 254,  689 => 253,  686 => 252,  683 => 251,  680 => 250,  678 => 249,  675 => 248,  673 => 247,  672 => 246,  671 => 245,  668 => 244,  666 => 243,  663 => 242,  661 => 241,  659 => 230,  645 => 229,  636 => 225,  622 => 224,  615 => 220,  613 => 217,  612 => 216,  610 => 215,  604 => 213,  602 => 212,  599 => 211,  597 => 210,  595 => 208,  581 => 207,  572 => 203,  558 => 202,  549 => 198,  535 => 197,  517 => 183,  513 => 182,  506 => 178,  501 => 175,  499 => 172,  496 => 171,  494 => 170,  493 => 169,  491 => 168,  477 => 167,  469 => 163,  466 => 162,  463 => 161,  460 => 160,  457 => 159,  455 => 158,  452 => 157,  449 => 156,  446 => 155,  444 => 154,  441 => 153,  438 => 152,  435 => 151,  433 => 150,  430 => 149,  427 => 148,  424 => 147,  421 => 146,  418 => 145,  416 => 144,  414 => 143,  411 => 142,  409 => 141,  407 => 139,  393 => 138,  385 => 133,  383 => 132,  378 => 131,  374 => 129,  372 => 128,  369 => 127,  367 => 126,  365 => 124,  351 => 123,  340 => 116,  336 => 115,  330 => 114,  327 => 113,  325 => 112,  320 => 110,  317 => 109,  314 => 108,  307 => 105,  303 => 104,  300 => 103,  297 => 102,  295 => 101,  292 => 100,  288 => 99,  280 => 95,  278 => 94,  275 => 93,  268 => 89,  264 => 88,  260 => 87,  257 => 86,  254 => 85,  252 => 84,  249 => 83,  238 => 81,  231 => 80,  224 => 79,  218 => 78,  213 => 77,  210 => 76,  206 => 75,  202 => 74,  197 => 73,  186 => 71,  182 => 70,  175 => 69,  169 => 67,  167 => 66,  160 => 65,  158 => 64,  155 => 63,  152 => 62,  150 => 60,  148 => 59,  146 => 58,  143 => 57,  140 => 56,  137 => 55,  135 => 54,  132 => 53,  129 => 52,  126 => 51,  124 => 50,  121 => 49,  119 => 48,  117 => 34,  103 => 33,  97 => 503,  93 => 498,  89 => 475,  85 => 451,  81 => 348,  77 => 341,  73 => 227,  69 => 222,  65 => 205,  61 => 200,  57 => 195,  53 => 165,  49 => 136,  45 => 121,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/basic_inputs_macros.html.twig", "/var/www/html/glpi/templates/components/form/basic_inputs_macros.html.twig");
    }
}
