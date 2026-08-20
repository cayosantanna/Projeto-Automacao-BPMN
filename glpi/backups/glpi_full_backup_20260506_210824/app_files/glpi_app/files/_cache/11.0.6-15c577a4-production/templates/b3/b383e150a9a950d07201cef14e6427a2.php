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

/* components/form/fields_macros.html.twig */
class __TwigTemplate_e73095c4eb60e3fb3f7a64bb6f38a149 extends Template
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
        // line 56
        yield "
";
        // line 78
        yield "
";
        // line 94
        yield "

";
        // line 108
        yield "
";
        // line 123
        yield "
";
        // line 137
        yield "

";
        // line 177
        yield "

";
        // line 191
        yield "

";
        // line 206
        yield "

";
        // line 267
        yield "

";
        // line 277
        yield "

";
        // line 287
        yield "

";
        // line 301
        yield "

";
        // line 326
        yield "

";
        // line 340
        yield "
";
        // line 353
        yield "
";
        // line 391
        yield "
";
        // line 427
        yield "
";
        // line 441
        yield "
";
        // line 445
        yield "
";
        // line 473
        yield "
";
        // line 502
        yield "
";
        // line 529
        yield "
";
        // line 554
        yield "
";
        // line 584
        yield "
";
        // line 599
        yield "
";
        // line 624
        yield "
";
        // line 643
        yield "
";
        // line 670
        yield "
";
        // line 697
        yield "
";
        // line 735
        yield "
";
        // line 773
        yield "
";
        // line 791
        yield "
";
        // line 837
        yield "
";
        // line 848
        yield "
";
        // line 858
        yield "

";
        // line 886
        yield "

";
        // line 951
        yield "

";
        // line 989
        yield "
";
        // line 994
        yield "
";
        // line 1033
        yield "
";
        yield from [];
    }

    // line 33
    public function macro_largeTitle($label = null, $icon = "", $first = false, $helper = "", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "icon" => $icon,
            "first" => $first,
            "helper" => $helper,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "   ";
            $context["margins"] = "mt-3";
            // line 35
            yield "   ";
            if ((($tmp = ($context["first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 36
                yield "      ";
                $context["margins"] = "mt-n2";
                // line 37
                yield "   ";
            }
            // line 38
            yield "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["margins"] ?? null), "html", null, true);
            yield "\">
      <div class=\"card-header mb-3 pt-2 border-top rounded-0\">
         <h4 class=\"card-title ";
            // line 41
            yield (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ms-5") : (""));
            yield "\">
            ";
            // line 42
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fs-2x ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield "\"></i>
               </div>
            ";
            }
            // line 47
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "
            ";
            // line 48
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["helper"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "               <span class=\"form-help\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-html=\"true\"
                     data-bs-title=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helper"] ?? null), "html", null, true);
                yield "\">?</span>
            ";
            }
            // line 52
            yield "         </h4>
      </div>
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 57
    public function macro_smallTitle($label = null, $icon = "", $helper = "", $id = "", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "icon" => $icon,
            "helper" => $helper,
            "id" => $id,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 58
            yield "   ";
            $context["margins"] = "mt-2 mb-2";
            // line 59
            yield "   ";
            $context["id"] = (((($context["id"] ?? null) != "")) ? (($context["id"] ?? null)) : (("formsection" . Twig\Extension\CoreExtension::random($this->env->getCharset()))));
            // line 60
            yield "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["margins"] ?? null), "html", null, true);
            yield "\">
      <div id=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\" class=\"card-header mb-1 p-0 ps-3 py-1\">
         <h4 class=\"card-subtitle ";
            // line 63
            yield (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ms-4") : (""));
            yield "\">
            ";
            // line 64
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fs-2x ";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield "\"></i>
               </div>
            ";
            }
            // line 69
            yield "             <span class=\"ms-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "</span>
            ";
            // line 70
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["helper"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 71
                yield "               <span class=\"form-help\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-html=\"true\"
                     data-bs-title=\"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helper"] ?? null), "html", null, true);
                yield "\">?</span>
            ";
            }
            // line 74
            yield "         </h4>
      </div>
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 79
    public function macro_autoNameField($name = null, $item = null, $label = "", $withtemplate = 0, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "item" => $item,
            "label" => $label,
            "withtemplate" => $withtemplate,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 80
            yield "   ";
            $context["tpl_value"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "value", [], "any", true, true, false, 80) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "value", [], "any", false, false, false, 80)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "value", [], "any", false, false, false, 80)) : (""))) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "value", [], "any", false, false, false, 80)) : ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 80)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["name"] ?? null)] ?? null) : null)));
            // line 81
            yield "   ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isTemplate", [], "method", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " ";
                // line 82
                yield "       ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["tpl_mark" => CoreExtension::getAttribute($this->env, $this->source,                 // line 83
($context["item"] ?? null), "getAutofillMark", [($context["name"] ?? null), ["withtemplate" => ($context["withtemplate"] ?? null)], ($context["tpl_value"] ?? null)], "method", false, false, false, 83)]);
                // line 85
                yield "   ";
            }
            // line 86
            yield "   ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 86), ($context["name"] ?? null), [], "array", true, true, false, 86) &&  !(null === (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 86)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["name"] ?? null)] ?? null) : null)))) {
                // line 87
                yield "      ";
                $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("autoName", [(($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["name"] ?? null)] ?? null) : null), ($context["name"] ?? null), (($context["withtemplate"] ?? null) == 2), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 87), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 87), "entities_id", [], "array", true, true, false, 87) &&  !(null === (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["entities_id"] ?? null) : null)))) ? ((($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["entities_id"] ?? null) : null)) : (null))]);
                // line 88
                yield "   ";
            } else {
                // line 89
                yield "      ";
                $context["value"] = null;
                // line 90
                yield "   ";
            }
            // line 91
            yield "
   ";
            // line 92
            yield $this->getTemplateForMacro("macro_textField", $context, 92, $this->getSourceContext())->macro_textField(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 96
    public function macro_textField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 97
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 99
($context["options"] ?? null));
            // line 100
            yield "
   ";
            // line 101
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 102
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 102)->unwrap();
                // line 103
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_text", $context, 103, $this->getSourceContext())->macro_text(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 105
            yield "
   ";
            // line 106
            yield $this->getTemplateForMacro("macro_field", $context, 106, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 109
    public function macro_urlField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 110
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 112
($context["options"] ?? null));
            // line 113
            yield "
    ";
            // line 114
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 115
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 115)->unwrap();
                // line 116
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_input", $context, 116, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "url"])]);
                // line 118
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 120
            yield "
    ";
            // line 121
            yield $this->getTemplateForMacro("macro_field", $context, 121, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 124
    public function macro_checkboxField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 125
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%", "center" => true],             // line 128
($context["options"] ?? null));
            // line 129
            yield "
    ";
            // line 130
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 131
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 131)->unwrap();
                // line 132
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_checkbox", $context, 132, $this->getSourceContext())->macro_checkbox(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 134
            yield "
    ";
            // line 135
            yield $this->getTemplateForMacro("macro_field", $context, 135, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 139
    public function macro_sliderField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 140
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 140), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 140)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 140), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 140), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 141
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true],                 // line 143
($context["options"] ?? null));
                // line 144
                yield "   ";
            }
            // line 145
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 145), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 145)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 145), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 145), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 146
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 147
                yield "   ";
            }
            // line 148
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["no_value" => 0, "yes_value" => 1, "readonly" => false, "required" => false, "disabled" => false, "additional_attributes" => [], "label2" => ""],             // line 156
($context["options"] ?? null));
            // line 157
            yield "
   ";
            // line 158
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 159
                yield "      <label class=\"form-check form-switch mt-2\">
         <input type=\"hidden\"   name=\"";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "no_value", [], "any", false, false, false, 160), "html", null, true);
                yield "\" />
         <input type=\"checkbox\" name=\"";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "yes_value", [], "any", false, false, false, 161), "html", null, true);
                yield "\" class=\"form-check-input\" id=\"%id%\"
                ";
                // line 162
                yield (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
                yield "
                ";
                // line 163
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
                yield "
                ";
                // line 164
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
                yield "
                ";
                // line 165
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                yield "
                ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 166));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    // line 167
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "\"
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                yield " />
         ";
                // line 169
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 170
                    yield "            <span class=\"form-check-label\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 170), "html", null, true);
                    yield "</span>
         ";
                }
                // line 172
                yield "      </label>
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 174
            yield "
   ";
            // line 175
            yield $this->getTemplateForMacro("macro_field", $context, 175, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 179
    public function macro_numberField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 180
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 182
($context["options"] ?? null));
            // line 183
            yield "
    ";
            // line 184
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 185
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 185)->unwrap();
                // line 186
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_number", $context, 186, $this->getSourceContext())->macro_number(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 188
            yield "
    ";
            // line 189
            yield $this->getTemplateForMacro("macro_field", $context, 189, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 193
    public function macro_readOnlyField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 194
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
            // line 195
            yield "   ";
            $context["value"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 196
                yield "      <span class=\"form-control ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", true, true, false, 196) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 196)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 196), "html", null, true)) : (""));
                yield "\" readonly>
         ";
                // line 197
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null)) == 0)) {
                    // line 198
                    yield "            &nbsp;
         ";
                } else {
                    // line 200
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                    yield "
         ";
                }
                // line 202
                yield "      </span>
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 204
            yield "   ";
            yield $this->getTemplateForMacro("macro_field", $context, 204, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 208
    public function macro_textareaField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 209
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "enable_richtext" => false, "enable_images" => true, "enable_fileupload" => false, "mention_options" => ["enabled" => (CoreExtension::getAttribute($this->env, $this->source,             // line 215
($context["options"] ?? null), "enable_mentions", [], "any", true, true, false, 215) && CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 215)), "full" => true, "users" => []], "entities_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "uploads" => [], "rows" => 3, "readonly" => false],             // line 223
($context["options"] ?? null));
            // line 224
            yield "
   ";
            // line 225
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", true, true, false, 225)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 226
                yield "       ";
                // line 227
                yield "       ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ((Html::sanitizeDomId(($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 227))], ($context["options"] ?? null));
                // line 228
                yield "   ";
            }
            // line 229
            yield "
   ";
            // line 230
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 231
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 231)->unwrap();
                // line 232
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_textarea", $context, 232, $this->getSourceContext())->macro_textarea(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 234
            yield "
   ";
            // line 235
            $context["add_html"] = "";
            // line 236
            yield "   ";
            if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 236) && CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 236))) {
                // line 237
                yield "      ";
                $context["add_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 238
                    yield "         ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [["editor_id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 239
($context["options"] ?? null), "id", [], "any", false, false, false, 239), "multiple" => true, "uploads" => CoreExtension::getAttribute($this->env, $this->source,                     // line 241
($context["options"] ?? null), "uploads", [], "any", false, false, false, 241), "required" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 242
($context["options"] ?? null), "fields_template", [], "any", false, true, false, 242), "isMandatoryField", ["_documents_id"], "method", true, true, false, 242)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 242), "isMandatoryField", ["_documents_id"], "method", false, false, false, 242), false)) : (false))]]);
                    // line 244
                    yield "      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 245
                yield "   ";
            } elseif (((( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 245) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 245)) && CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 245)) && CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_images", [], "any", false, false, false, 245))) {
                // line 246
                yield "      ";
                $context["add_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 247
                    yield "         ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [["editor_id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 248
($context["options"] ?? null), "id", [], "any", false, false, false, 248), "name" =>                     // line 249
($context["name"] ?? null), "only_uploaded_files" => true, "uploads" => CoreExtension::getAttribute($this->env, $this->source,                     // line 251
($context["options"] ?? null), "uploads", [], "any", false, false, false, 251), "required" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 252
($context["options"] ?? null), "fields_template", [], "any", false, true, false, 252), "isMandatoryField", ["_documents_id"], "method", true, true, false, 252)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 252), "isMandatoryField", ["_documents_id"], "method", false, false, false, 252), false)) : (false)), "init" => (((CoreExtension::getAttribute($this->env, $this->source,                     // line 253
($context["options"] ?? null), "init_fileupload", [], "any", true, true, false, 253) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "init_fileupload", [], "any", false, false, false, 253)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "init_fileupload", [], "any", false, false, false, 253)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "init", [], "any", true, true, false, 253) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "init", [], "any", false, false, false, 253)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "init", [], "any", false, false, false, 253)) : (true))))]]);
                    // line 255
                    yield "      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 256
                yield "   ";
            }
            // line 257
            yield "
   ";
            // line 258
            if ((($context["add_html"] ?? null) != "")) {
                // line 259
                yield "      ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", true, true, false, 259)) {
                    // line 260
                    yield "         ";
                    $context["add_html"] = (($context["add_html"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 260));
                    // line 261
                    yield "      ";
                }
                // line 262
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["add_field_html" => ($context["add_html"] ?? null)]);
                // line 263
                yield "   ";
            }
            // line 264
            yield "
   ";
            // line 265
            yield $this->getTemplateForMacro("macro_field", $context, 265, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 269
    public function macro_dateField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 270
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 271
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 271)->unwrap();
                // line 272
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_date", $context, 272, $this->getSourceContext())->macro_date(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 274
            yield "
   ";
            // line 275
            yield $this->getTemplateForMacro("macro_field", $context, 275, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 279
    public function macro_datetimeField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 280
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 281
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 281)->unwrap();
                // line 282
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_datetime", $context, 282, $this->getSourceContext())->macro_datetime(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 284
            yield "
   ";
            // line 285
            yield $this->getTemplateForMacro("macro_field", $context, 285, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 289
    public function macro_colorField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 290
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 292
($context["options"] ?? null));
            // line 293
            yield "
    ";
            // line 294
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 295
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 295)->unwrap();
                // line 296
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_color", $context, 296, $this->getSourceContext())->macro_color(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 298
            yield "
    ";
            // line 299
            yield $this->getTemplateForMacro("macro_field", $context, 299, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 303
    public function macro_passwordField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 304
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%", "can_regenerate" => (((CoreExtension::getAttribute($this->env, $this->source,             // line 306
($context["options"] ?? null), "can_regenerate", [], "any", true, true, false, 306) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "can_regenerate", [], "any", false, false, false, 306)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "can_regenerate", [], "any", false, false, false, 306)) : (false)), "clearable" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 307
($context["options"] ?? null), "clearable", [], "any", true, true, false, 307)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 307)) : ( !(((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", true, true, false, 307) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 307)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 307)) : (false)))), "is_copyable" => (((CoreExtension::getAttribute($this->env, $this->source,             // line 308
($context["options"] ?? null), "is_disclosable", [], "any", true, true, false, 308) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 308)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 308)) : (false))],             // line 309
($context["options"] ?? null));
            // line 310
            yield "
    ";
            // line 311
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 312
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 312)->unwrap();
                // line 313
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_password", $context, 313, $this->getSourceContext())->macro_password(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 315
            yield "
   ";
            // line 317
            yield "   ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "can_regenerate", [], "any", false, false, false, 317)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 318
                yield "      ";
                $context["regenerate_chk"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 319
                    yield "         <input type=\"checkbox\" name=\"_regenerate_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\" id=\"_regenerate_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\">&nbsp;<label for=\"_regenerate_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Regenerate"), "html", null, true);
                    yield "</label>
      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 321
                yield "      ";
                $context["field"] = (($context["field"] ?? null) . ($context["regenerate_chk"] ?? null));
                // line 322
                yield "   ";
            }
            // line 323
            yield "
   ";
            // line 324
            yield $this->getTemplateForMacro("macro_field", $context, 324, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 328
    public function macro_emailField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 329
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 331
($context["options"] ?? null));
            // line 332
            yield "
    ";
            // line 333
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 334
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 334)->unwrap();
                // line 335
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_email", $context, 335, $this->getSourceContext())->macro_email(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 337
            yield "
   ";
            // line 338
            yield $this->getTemplateForMacro("macro_field", $context, 338, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 341
    public function macro_fileField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 342
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%", "rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "simple" => false],             // line 346
($context["options"] ?? null));
            // line 347
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 348
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 348)->unwrap();
                // line 349
                yield "        ";
                yield $macros["_inputs"]->getTemplateForMacro("macro_file", $context, 349, $this->getSourceContext())->macro_file(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 351
            yield "   ";
            yield $this->getTemplateForMacro("macro_field", $context, 351, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 354
    public function macro_imageField($name = null, $value = null, $label = "", $options = [], $link_options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "link_options" => $link_options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 355
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 356
                yield "      <div class=\"img-overlay-wrapper position-relative\">
         ";
                // line 357
                $context["clearable"] = (($_v5 = ($context["options"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["clearable"] ?? null) : null);
                // line 358
                yield "         ";
                $context["url"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "url", [], "array", true, true, false, 358) &&  !(null === (($_v6 = ($context["options"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["url"] ?? null) : null)))) ? ((($_v7 = ($context["options"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["url"] ?? null) : null)) : (null));
                // line 359
                yield "         ";
                $context["options"] = Twig\Extension\CoreExtension::filter($this->env, ($context["options"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ((($context["k"] ?? null) != "url") && (($context["k"] ?? null) != "clearable")); });
                // line 360
                yield "         ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 361
                    yield "            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
                    yield "\" ";
                    yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [($context["link_options"] ?? null)]);
                    yield ">
         ";
                }
                // line 363
                yield "               <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [($context["options"] ?? null)]);
                yield " />
         ";
                // line 364
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 365
                    yield "            </a>
         ";
                }
                // line 367
                yield "         ";
                if ((($tmp = ($context["clearable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 368
                    yield "            <input type=\"hidden\" name=\"_blank_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\" />";
                    // line 369
                    $context["clear_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 370
                        yield "const blank_input = \$('input[name=\\'_blank_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "css"), "js"), "html", null, true);
                        yield "\\']');
                 blank_input.val(blank_input.val() ? '' : true);
                 if (\$(this).closest('.picture_gallery_item').length) {
                    \$(this).closest('.picture_gallery_item').hide();
                    \$(this).closest('.picture_gallery').siblings('.deletion_pending').removeClass('d-none');
                 } else {
                    \$(this).closest('.img-overlay-wrapper').hide();
                 }";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 379
                    yield "<button type=\"button\" class=\"btn p-2 position-absolute top-0 start-0\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
                    yield "\"
                    onclick=\"";
                    // line 380
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["clear_js"] ?? null), "html", null, true);
                    yield "\">
               <i class=\"ti ti-x\"></i>
            </button>
         ";
                }
                // line 384
                yield "      </div>
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 386
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 386), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 386)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 386), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 386), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 387
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 388
                yield "   ";
            }
            // line 389
            yield "   ";
            yield $this->getTemplateForMacro("macro_field", $context, 389, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 392
    public function macro_imageGalleryField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 393
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 394
                yield "       <div class=\"text-warning deletion_pending d-none\">
           ";
                // line 395
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The deletion will only take effect after saving the form"), "html", null, true);
                yield "
       </div>
      <div class=\"picture_gallery d-flex flex-wrap overflow-auto p-3\">
         ";
                // line 398
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["value"] ?? null));
                foreach ($context['_seq'] as $context["i"] => $context["picture"]) {
                    // line 399
                    yield "            <div class=\"picture_gallery_item\" style=\"position: relative; width: fit-content\">
               ";
                    // line 400
                    yield $this->getTemplateForMacro("macro_imageField", $context, 400, $this->getSourceContext())->macro_imageField(...[((($context["name"] ?? null) . "_") . $context["i"]), $context["picture"], "", ["style" => "max-width: 300px; max-height: 150px", "class" => "picture_square", "clearable" => (($_v8 =                     // line 403
($context["options"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["clearable"] ?? null) : null), "no_label" => true]]);
                    // line 405
                    yield "
            </div>
         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['i'], $context['picture'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 408
                yield "      </div>
      ";
                // line 409
                yield $this->getTemplateForMacro("macro_fileField", $context, 409, $this->getSourceContext())->macro_fileField(...[($context["name"] ?? null), null, "", ["onlyimages" => true, "multiple" => true]]);
                // line 412
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 414
            yield "
   ";
            // line 415
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 415), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 415)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 415), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 415), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 416
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 417
                yield "   ";
            }
            // line 418
            yield "
   ";
            // line 419
            $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", true, true, false, 419) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 419)) > 0))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 419)) : (((Html::sanitizeDomId(($context["name"] ?? null)) . "_") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", true, true, false, 419) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 419)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 419)) : ("")))));
            // line 420
            yield "   ";
            $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 420)->unwrap();
            // line 421
            yield "   ";
            yield $macros["_inputs"]->getTemplateForMacro("macro_label", $context, 421, $this->getSourceContext())->macro_label(...[($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null)]);
            yield "
   ";
            // line 422
            yield $this->getTemplateForMacro("macro_field", $context, 422, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["full_width" => true, "no_label" => true])]);
            // line 425
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 428
    public function macro_hiddenField($name = null, $value = null, $options = [], ...$varargs): string|Markup
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
            // line 429
            yield "    ";
            if ((($tmp =  !is_iterable(($context["options"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 430
                yield "        ";
                // line 436
                yield "        ";
                $context["options"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["varargs"] ?? null), 0, [], "array", true, true, false, 436)) ? (Twig\Extension\CoreExtension::default((($_v9 = ($context["varargs"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[0] ?? null) : null), [])) : ([]));
                // line 437
                yield "    ";
            }
            // line 438
            yield "    ";
            $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 438)->unwrap();
            // line 439
            yield "    ";
            yield $macros["_inputs"]->getTemplateForMacro("macro_hidden", $context, 439, $this->getSourceContext())->macro_hidden(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 442
    public function macro_csrfField(...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 443
            yield "    ";
            yield $this->getTemplateForMacro("macro_hiddenField", $context, 443, $this->getSourceContext())->macro_hiddenField(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 446
    public function macro_dropdownNumberField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 447
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 451
($context["options"] ?? null));
            // line 452
            yield "
   ";
            // line 453
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 453), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 453)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 453), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 453), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 454
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 455
                yield "   ";
            }
            // line 456
            yield "
   ";
            // line 457
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 457)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 458
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 459
                yield "   ";
            }
            // line 460
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 460), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 460)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 460), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 460), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 461
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 462
                yield "   ";
            }
            // line 463
            yield "
   ";
            // line 464
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 465
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [($context["name"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                 // line 466
($context["value"] ?? null), "rand" => CoreExtension::getAttribute($this->env, $this->source,                 // line 467
($context["options"] ?? null), "rand", [], "any", false, false, false, 467)],                 // line 468
($context["options"] ?? null))]);
                // line 469
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 470
            yield "
   ";
            // line 471
            yield $this->getTemplateForMacro("macro_field", $context, 471, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 471))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 474
    public function macro_dropdownArrayField($name = null, $value = null, $elements = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "elements" => $elements,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 475
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "disabled" => false, "width" => "100%"],             // line 479
($context["options"] ?? null));
            // line 480
            yield "
   ";
            // line 481
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 481), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 481)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 481), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 481), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 482
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 483
                yield "   ";
            }
            // line 484
            yield "
   ";
            // line 485
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 485)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 486
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 487
                yield "   ";
            }
            // line 488
            yield "
   ";
            // line 489
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 489), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 489)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 489), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 489), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 490
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 491
                yield "   ";
            }
            // line 492
            yield "
   ";
            // line 493
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 494
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [($context["name"] ?? null), ($context["elements"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                 // line 495
($context["value"] ?? null), "rand" => CoreExtension::getAttribute($this->env, $this->source,                 // line 496
($context["options"] ?? null), "rand", [], "any", false, false, false, 496)],                 // line 497
($context["options"] ?? null))]);
                // line 498
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 499
            yield "
   ";
            // line 500
            yield $this->getTemplateForMacro("macro_field", $context, 500, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 500))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 503
    public function macro_dropdownTimestampField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 504
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 508
($context["options"] ?? null));
            // line 509
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 509), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 509)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 509), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 509), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 510
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 511
                yield "   ";
            }
            // line 512
            yield "
   ";
            // line 513
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 513), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 513)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 513), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 513), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 514
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 515
                yield "   ";
            }
            // line 516
            yield "
   ";
            // line 517
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 517)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 518
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 519
                yield "   ";
            }
            // line 520
            yield "
   ";
            // line 521
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 522
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showTimestamp", [($context["name"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                 // line 523
($context["value"] ?? null)],                 // line 524
($context["options"] ?? null))]);
                // line 525
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 526
            yield "
   ";
            // line 527
            yield $this->getTemplateForMacro("macro_field", $context, 527, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 527))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 530
    public function macro_dropdownYesNo($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 531
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 535
($context["options"] ?? null));
            // line 536
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 536), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 536)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 536), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 536), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 537
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 538
                yield "   ";
            }
            // line 539
            yield "
   ";
            // line 540
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 540), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 540)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 540), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 540), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 541
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 542
                yield "   ";
            }
            // line 543
            yield "
   ";
            // line 544
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 544)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 545
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 546
                yield "   ";
            }
            // line 547
            yield "
   ";
            // line 548
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 549
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showYesNo", [($context["name"] ?? null), ($context["value"] ?? null),  -1, ($context["options"] ?? null)]);
                // line 550
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 551
            yield "
   ";
            // line 552
            yield $this->getTemplateForMacro("macro_field", $context, 552, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 552))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 555
    public function macro_dropdownItemTypes($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 556
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 560
($context["options"] ?? null));
            // line 561
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 561), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 561)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 561), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 561), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 562
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 563
                yield "   ";
            }
            // line 564
            yield "
   ";
            // line 565
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 565), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 565)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 565), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 565), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 566
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 567
                yield "   ";
            }
            // line 568
            yield "
   ";
            // line 569
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 569)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 570
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 571
                yield "   ";
            }
            // line 572
            yield "
   ";
            // line 573
            $context["types"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "types", [], "array", true, true, false, 573)) ? (Twig\Extension\CoreExtension::default((($_v10 = ($context["options"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["types"] ?? null) : null), [])) : ([]));
            // line 574
            yield "
   ";
            // line 575
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 576
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showItemTypes", [($context["name"] ?? null), ($context["types"] ?? null), Twig\Extension\CoreExtension::merge(["rand" => CoreExtension::getAttribute($this->env, $this->source,                 // line 577
($context["options"] ?? null), "rand", [], "any", false, false, false, 577), "value" =>                 // line 578
($context["value"] ?? null)],                 // line 579
($context["options"] ?? null))]);
                // line 580
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 581
            yield "
   ";
            // line 582
            yield $this->getTemplateForMacro("macro_field", $context, 582, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 582))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 585
    public function macro_dropdownItemsFromItemtypes($name = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 586
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())],             // line 588
($context["options"] ?? null));
            // line 589
            yield "
   ";
            // line 590
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 590), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 590)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 590), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 590), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 591
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 592
                yield "   ";
            }
            // line 593
            yield "
   ";
            // line 594
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 595
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showSelectItemFromItemtypes", [($context["options"] ?? null)]);
                // line 596
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 597
            yield "   ";
            yield $this->getTemplateForMacro("macro_field", $context, 597, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 597))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 600
    public function macro_dropdownIcons($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 601
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 605
($context["options"] ?? null));
            // line 606
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 606), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 606)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 606), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 606), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 607
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 608
                yield "   ";
            }
            // line 609
            yield "
   ";
            // line 610
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 610), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 610)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 610), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 610), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 611
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 612
                yield "   ";
            }
            // line 613
            yield "
   ";
            // line 614
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 614)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 615
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 616
                yield "   ";
            }
            // line 617
            yield "
   ";
            // line 618
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 619
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::dropdownIcons", [($context["name"] ?? null), ($context["value"] ?? null), "", ($context["options"] ?? null)]);
                // line 620
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 621
            yield "
   ";
            // line 622
            yield $this->getTemplateForMacro("macro_field", $context, 622, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 622))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 625
    public function macro_dropdownWebIcons($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 626
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())], Twig\Extension\CoreExtension::merge(            // line 628
($context["options"] ?? null), ["noselect2" => true]));
            // line 631
            yield "    ";
            // line 632
            yield "    ";
            $context["value"] = Twig\Extension\CoreExtension::replace(($context["value"] ?? null), ["ti " => ""]);
            // line 633
            yield "
    ";
            // line 634
            yield $this->getTemplateForMacro("macro_dropdownArrayField", $context, 634, $this->getSourceContext())->macro_dropdownArrayField(...[($context["name"] ?? null), ($context["value"] ?? null), [ (string)($context["value"] ?? null) => ($context["value"] ?? null)], ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
    <script type=\"module\">
        import('/js/modules/Form/WebIconSelector.js').then((m) => {
            const dropdown_id = '";
            // line 637
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((("dropdown_" . ($context["name"] ?? null)) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 637)), ["[" => "_", "]" => "_"]), "js"), "html", null, true);
            yield "';
            const selector = new m.default(document.getElementById(dropdown_id));
            selector.init();
        });
    </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 644
    public function macro_dropdownHoursField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 645
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 649
($context["options"] ?? null));
            // line 650
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 650), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 650)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 650), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 650), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 651
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 652
                yield "   ";
            }
            // line 653
            yield "
   ";
            // line 654
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 654), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 654)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 654), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 654), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 655
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 656
                yield "   ";
            }
            // line 657
            yield "
   ";
            // line 658
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 658)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 659
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 660
                yield "   ";
            }
            // line 661
            yield "
   ";
            // line 662
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 663
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showHours", [($context["name"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                 // line 664
($context["value"] ?? null)],                 // line 665
($context["options"] ?? null))]);
                // line 666
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 667
            yield "
   ";
            // line 668
            yield $this->getTemplateForMacro("macro_field", $context, 668, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 668))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 671
    public function macro_dropdownFrequency($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 672
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "disabled" => false],             // line 675
($context["options"] ?? null));
            // line 676
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 676), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 676)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 676), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 676), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 677
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 678
                yield "   ";
            }
            // line 679
            yield "
   ";
            // line 680
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 680), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 680)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 680), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 680), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 681
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 682
                yield "   ";
            }
            // line 683
            yield "
   ";
            // line 684
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 684)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 685
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 686
                yield "   ";
            }
            // line 687
            yield "
   ";
            // line 688
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 689
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFrequency", [($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(["width" => "100%", "value" =>                 // line 691
($context["value"] ?? null)],                 // line 692
($context["options"] ?? null))]);
                // line 693
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 694
            yield "
   ";
            // line 695
            yield $this->getTemplateForMacro("macro_field", $context, 695, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 695))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 698
    public function macro_dropdownField($itemtype = null, $name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "itemtype" => $itemtype,
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 699
            yield "   ";
            if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", true, true, false, 699) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 699)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 699)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 700
                yield "      ";
                // line 701
                yield "      ";
                $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                // line 702
                yield "      <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defined_input_name"] ?? null), "html", null, true);
                yield "\" value=\"1\"></input>

      ";
                // line 705
                yield "      ";
                $context["name"] = (($context["name"] ?? null) . "[]");
                // line 706
                yield "   ";
            }
            // line 707
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 711
($context["options"] ?? null));
            // line 712
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 712), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 712)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 712), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 712), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 713
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 714
                yield "   ";
            }
            // line 715
            yield "
   ";
            // line 716
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 716), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 716)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 716), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 716), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 717
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 718
                yield "   ";
            }
            // line 719
            yield "
   ";
            // line 720
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 720)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 721
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 722
                yield "   ";
            }
            // line 723
            yield "
   ";
            // line 724
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 725
                yield "      ";
                yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown(($context["itemtype"] ?? null), Twig\Extension\CoreExtension::merge(["name" =>                 // line 726
($context["name"] ?? null), "value" =>                 // line 727
($context["value"] ?? null)],                 // line 728
($context["options"] ?? null)));
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 730
            yield "
   ";
            // line 731
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(($context["field"] ?? null)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 732
                yield "      ";
                yield $this->getTemplateForMacro("macro_field", $context, 732, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 732))])]);
                yield "
   ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 736
    public function macro_dropdownAjaxField($url = null, $name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 737
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 737)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 738
                yield "        ";
                // line 739
                yield "        ";
                $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                // line 740
                yield "        <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defined_input_name"] ?? null), "html", null, true);
                yield "\" value=\"1\"></input>

        ";
                // line 743
                yield "        ";
                $context["name"] = (($context["name"] ?? null) . "[]");
                // line 744
                yield "    ";
            }
            // line 745
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%"],             // line 748
($context["options"] ?? null));
            // line 749
            yield "    ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 749), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 749)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 749), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 749), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 750
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 751
                yield "    ";
            }
            // line 752
            yield "
    ";
            // line 753
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 753), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 753)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 753), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 753), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 754
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 755
                yield "    ";
            }
            // line 756
            yield "
    ";
            // line 757
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 757)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 758
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 759
                yield "    ";
            }
            // line 760
            yield "
    ";
            // line 761
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(            // line 762
($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 762))]);
            // line 764
            yield "    ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 765
                yield "        ";
                $context["ajax_opts"] = Twig\Extension\CoreExtension::filter($this->env, ($context["options"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return CoreExtension::inFilter(($context["k"] ?? null), ["templateResult", "templateSelection", "rand"]); });
                // line 766
                yield "        ";
                yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::jsAjaxDropdown", [($context["name"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 766), ($context["url"] ?? null), ($context["ajax_opts"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 768
            yield "
    ";
            // line 769
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(($context["field"] ?? null)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 770
                yield "        ";
                yield $this->getTemplateForMacro("macro_field", $context, 770, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 774
    public function macro_htmlField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 775
            yield "   ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null)) == 0)) {
                // line 776
                yield "      ";
                $context["value"] = "&nbsp;";
                // line 777
                yield "   ";
            }
            // line 778
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["wrapper_class" => "form-control-plaintext"],             // line 780
($context["options"] ?? null));
            // line 781
            yield "
   ";
            // line 782
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 782), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 782)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 782), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 782), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 783
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 784
                yield "   ";
            }
            // line 785
            yield "
   ";
            // line 786
            $context["value"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 787
                yield "      <span class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "wrapper_class", [], "any", false, false, false, 787), "html", null, true);
                yield "\">";
                yield ($context["value"] ?? null);
                yield "</span>
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 789
            yield "   ";
            yield $this->getTemplateForMacro("macro_field", $context, 789, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 792
    public function macro_field($name = null, $field = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "field" => $field,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 793
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "is_horizontal" => true, "include_field" => true, "add_field_html" => "", "locked" => false, "locked_fields" => [], "no_label" => false],             // line 801
($context["options"] ?? null));
            // line 802
            yield "
   ";
            // line 803
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, true, false, 803), ($context["name"] ?? null), [], "array", true, true, false, 803)) {
                // line 804
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["locked" => true, "locked_value" => (($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 804)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[($context["name"] ?? null)] ?? null) : null)]);
                // line 805
                yield "   ";
            } elseif (CoreExtension::inFilter(($context["name"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 805))) {
                // line 806
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["locked" => true]);
                // line 807
                yield "   ";
            }
            // line 808
            yield "
   ";
            // line 809
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 809), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 809)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 809), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 809), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 810
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 811
                yield "   ";
            }
            // line 812
            yield "
   ";
            // line 813
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "include_field", [], "any", false, false, false, 813)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 814
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["field"] ?? null), "html", null, true);
                yield "
   ";
            } else {
                // line 816
                yield "      ";
                $context["id"] = Html::sanitizeDomId(((((Twig\Extension\CoreExtension::length($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", true, true, false, 816) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 816)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 816)) : (""))) > 0) && (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 816) != "%id%"))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 816)) : (((($context["name"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 816)))));
                // line 817
                yield "      ";
                // line 818
                yield "      ";
                $context["field"] = Twig\Extension\CoreExtension::replace(($context["field"] ?? null), [$this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("%id%", "css"), "js") =>                 // line 819
($context["id"] ?? null), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("%id%", "js") =>                 // line 820
($context["id"] ?? null), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("%id%", "css") =>                 // line 821
($context["id"] ?? null), "%id%" =>                 // line 822
($context["id"] ?? null)]);
                // line 824
                yield "      ";
                $context["add_field_html"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 824)) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 824)) : (""));
                // line 825
                yield "
      ";
                // line 826
                if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 826), "isHiddenField", [($context["name"] ?? null)], "method", true, true, false, 826)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 826), "isHiddenField", [($context["name"] ?? null)], "method", false, false, false, 826), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 827
                    yield "         ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "no_label", [], "any", false, false, false, 827)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 828
                        yield "            ";
                        yield $this->getTemplateForMacro("macro_noLabelField", $context, 828, $this->getSourceContext())->macro_noLabelField(...[($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)]);
                        yield "
         ";
                    } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 829
($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 829)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 830
                        yield "            ";
                        yield $this->getTemplateForMacro("macro_horizontalField", $context, 830, $this->getSourceContext())->macro_horizontalField(...[($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])]);
                        yield "
         ";
                    } else {
                        // line 832
                        yield "            ";
                        yield $this->getTemplateForMacro("macro_verticalField", $context, 832, $this->getSourceContext())->macro_verticalField(...[($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])]);
                        yield "
         ";
                    }
                    // line 834
                    yield "      ";
                }
                // line 835
                yield "   ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 838
    public function macro_ajaxField($id = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "id" => $id,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 839
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 840
                yield "      <div id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
                yield "\" class=\"form-field-ajax\">
         ";
                // line 841
                if ((($tmp =  !(null === ($context["value"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 842
                    yield "            ";
                    yield ($context["value"] ?? null);
                    yield "
         ";
                }
                // line 844
                yield "      </div>
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 846
            yield "   ";
            yield $this->getTemplateForMacro("macro_field", $context, 846, $this->getSourceContext())->macro_field(...[($context["id"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((($context["id"] ?? null) . "_") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", true, true, false, 846) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 846)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 846)) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 849
    public function macro_nullField($options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 850
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["is_horizontal" => true], ($context["options"] ?? null));
            // line 851
            yield "
   ";
            // line 852
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 852)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 853
                yield "      ";
                yield $this->getTemplateForMacro("macro_horizontalField", $context, 853, $this->getSourceContext())->macro_horizontalField(...[null, null, null, null, ($context["options"] ?? null)]);
                yield "
   ";
            } else {
                // line 855
                yield "      ";
                yield $this->getTemplateForMacro("macro_verticalField", $context, 855, $this->getSourceContext())->macro_verticalField(...[null, null, null, null, ($context["options"] ?? null)]);
                yield "
   ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 860
    public function macro_noLabelField($field = null, $id = "", $add_field_html = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "id" => $id,
            "add_field_html" => $add_field_html,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 861
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["full_width" => false, "mb" => "mb-3", "add_field_class" => "", "add_field_attribs" => [], "inline_add_field_html" => false],             // line 867
($context["options"] ?? null));
            // line 868
            yield "
   ";
            // line 869
            $context["class"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", true, true, false, 869) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 869)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 869)) : ("col-12 col-sm-6"));
            // line 870
            yield "   ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 870)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 871
                yield "      ";
                $context["class"] = "col-12";
                // line 872
                yield "   ";
            }
            // line 873
            yield "   ";
            $context["class"] = ((($context["class"] ?? null) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 873));
            // line 874
            yield "
   ";
            // line 875
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 875))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 876
                yield "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 876)]);
                // line 877
                yield "   ";
            } else {
                // line 878
                yield "      ";
                $context["extra_attribs"] = "";
                // line 879
                yield "   ";
            }
            // line 880
            yield "
   <div class=\"";
            // line 881
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 881), "html", null, true);
            yield " ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "inline_add_field_html", [], "any", false, false, false, 881)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex") : (""));
            yield "\" ";
            yield ($context["extra_attribs"] ?? null);
            yield ">
      ";
            // line 882
            yield ($context["field"] ?? null);
            yield "
      ";
            // line 883
            yield ($context["add_field_html"] ?? null);
            yield "
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 888
    public function macro_horizontalField($label = null, $field = null, $id = null, $add_field_html = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "field" => $field,
            "id" => $id,
            "add_field_html" => $add_field_html,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 889
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["full_width" => false, "align_label_right" => true, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "container_id" => "", "add_field_class" => "", "add_label_class" => "", "add_field_attribs" => [], "center" => false, "label_align" => "end", "inline_add_field_html" => false, "icon_label" => false],             // line 902
($context["options"] ?? null));
            // line 903
            yield "
   ";
            // line 904
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon_label", [], "any", false, false, false, 904)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 905
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["label_class" => "col-2", "input_class" => "col-10"],                 // line 908
($context["options"] ?? null));
                // line 909
                yield "   ";
            }
            // line 910
            yield "
   ";
            // line 911
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 911)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 912
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["field_class" => "col-12 glpi-full-width"]);
                // line 915
                yield "   ";
            }
            // line 916
            yield "
   ";
            // line 917
            $context["options"] = Twig\Extension\CoreExtension::merge(["label_class" => "col-xxl-5", "input_class" => "col-xxl-7"],             // line 920
($context["options"] ?? null));
            // line 921
            yield "
   ";
            // line 922
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "align_label_right", [], "any", false, false, false, 922)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 923
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 924
($context["options"] ?? null), "label_class", [], "any", false, false, false, 924) . " text-xxl-") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label_align", [], "any", false, false, false, 924))]);
                // line 926
                yield "   ";
            }
            // line 927
            yield "
   ";
            // line 928
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 928))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 929
                yield "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 929)]);
                // line 930
                yield "   ";
            } else {
                // line 931
                yield "      ";
                $context["extra_attribs"] = "";
                // line 932
                yield "   ";
            }
            // line 933
            yield "
   ";
            // line 935
            yield "   ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "container_id", [], "any", false, false, false, 935))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 936
                yield "      ";
                $context["container_id"] = ("id=" . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "container_id", [], "any", false, false, false, 936));
                // line 937
                yield "   ";
            } else {
                // line 938
                yield "      ";
                $context["container_id"] = "";
                // line 939
                yield "   ";
            }
            // line 940
            yield "
   <div class=\"form-field row align-items-center ";
            // line 941
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 941), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 941), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 941), "html", null, true);
            yield "\" ";
            yield ($context["extra_attribs"] ?? null);
            yield ">
      ";
            // line 942
            $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 942)->unwrap();
            // line 943
            yield "      ";
            yield $macros["_inputs"]->getTemplateForMacro("macro_label", $context, 943, $this->getSourceContext())->macro_label(...[($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ((("col-form-label " . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 943)) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_label_class", [], "any", false, false, false, 943))]);
            yield "
      ";
            // line 944
            $context["flex_class"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "center", [], "any", false, false, false, 944)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex align-items-center") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "inline_add_field_html", [], "any", false, false, false, 944)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex") : (""))));
            // line 945
            yield "      <div ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield " class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 945), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["flex_class"] ?? null), "html", null, true);
            yield " field-container\">
         ";
            // line 946
            yield ($context["field"] ?? null);
            yield "
         ";
            // line 947
            yield ($context["add_field_html"] ?? null);
            yield "
      </div>
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 953
    public function macro_verticalField($label = null, $field = null, $id = null, $add_field_html = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "field" => $field,
            "id" => $id,
            "add_field_html" => $add_field_html,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 954
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["full_width" => false, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "add_field_class" => "", "add_field_attribs" => [], "insert_content_after_label" => "", "label_class" => "", "input_class" => ""],             // line 963
($context["options"] ?? null));
            // line 964
            yield "
   ";
            // line 965
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 965)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 966
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 969
                yield "   ";
            }
            // line 970
            yield "
   ";
            // line 971
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 971))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 972
                yield "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 972)]);
                // line 973
                yield "   ";
            } else {
                // line 974
                yield "      ";
                $context["extra_attribs"] = "";
                // line 975
                yield "   ";
            }
            // line 976
            yield "
   <div class=\"form-field ";
            // line 977
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 977), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 977), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 977), "html", null, true);
            yield "\" ";
            yield ($context["extra_attribs"] ?? null);
            yield ">
      ";
            // line 978
            $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 978)->unwrap();
            // line 979
            yield "      <div class=\"d-flex align-items-center\">
         ";
            // line 980
            yield $macros["_inputs"]->getTemplateForMacro("macro_label", $context, 980, $this->getSourceContext())->macro_label(...[($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 980))]);
            yield "
         ";
            // line 981
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "insert_content_after_label", [], "any", false, false, false, 981);
            yield "
      </div>
      <div class=\"";
            // line 983
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 983), "html", null, true);
            yield " field-container\">
         ";
            // line 984
            yield ($context["field"] ?? null);
            yield "
      </div>
      ";
            // line 986
            yield ($context["add_field_html"] ?? null);
            yield "
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 990
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
            // line 991
            yield "    ";
            $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 991)->unwrap();
            // line 992
            yield "    ";
            yield $macros["_inputs"]->getTemplateForMacro("macro_label", $context, 992, $this->getSourceContext())->macro_label(...[($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ($context["class"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 995
    public function macro_codeField($name = null, $value = null, $label = null, $options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 996
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["single_line" => false, "language" => "twig", "completions" => [], "helper" => Twig\Extension\CoreExtension::sprintf(__("This field accepts %s content. Press Ctrl+Space to trigger autocompletion."), "Twig")],             // line 1001
($context["options"] ?? null));
            // line 1002
            yield "
    ";
            // line 1003
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 1003))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1004
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["helper" => Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source,                 // line 1005
($context["options"] ?? null), "helper", [], "any", false, false, false, 1005), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "language", [], "any", false, false, false, 1005))]);
                // line 1007
                yield "    ";
            }
            // line 1008
            yield "
    ";
            // line 1009
            $context["code_container_id"] = ((($context["name"] ?? null) . "_") . Twig\Extension\CoreExtension::random($this->env->getCharset()));
            // line 1010
            yield "    ";
            $context["code_container"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 1011
                yield "        <div id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["code_container_id"] ?? null), "html", null, true);
                yield "\" class=\"form-control overflow-hidden text-start\" style=\"height: ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "single_line", [], "any", false, false, false, 1011)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("36px") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "height", [], "any", true, true, false, 1011)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "height", [], "any", false, false, false, 1011), "auto")) : ("auto")), "html", null, true)));
                yield ";\"></div>
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1013
            yield "    ";
            yield $this->getTemplateForMacro("macro_htmlField", $context, 1013, $this->getSourceContext())->macro_htmlField(...[($context["name"] ?? null), ($context["code_container"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(["wrapper_class" => "d-flex flex-grow-1"],             // line 1015
($context["options"] ?? null))]);
            yield "
    <script>
        \$(() => {
            const editor_options = ";
            // line 1018
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "single_line", [], "any", false, false, false, 1018)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield " ? window.GLPI.Monaco.getSingleLineEditorOptions() : {};
            window.GLPI.Monaco.createEditor('";
            // line 1019
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["code_container_id"] ?? null), "js"), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "language", [], "any", false, false, false, 1019), "js"), "html", null, true);
            yield "', \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "js"), "html", null, true);
            yield "\", ";
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "completions", [], "any", false, false, false, 1019));
            yield ", editor_options).then(() => {
                \$('#";
            // line 1020
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["code_container_id"] ?? null), "css"), "js"), "html", null, true);
            yield "').closest('form').on('formdata', (e) => {
                    const editors = window.monaco.editor.getEditors().filter((editor) => {
                        return editor._domElement.id === '";
            // line 1022
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["code_container_id"] ?? null), "js"), "html", null, true);
            yield "';
                    });
                    if (editors.length) {
                        e.originalEvent.formData.delete('";
            // line 1025
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "js"), "html", null, true);
            yield "');
                        e.originalEvent.formData.append('";
            // line 1026
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "js"), "html", null, true);
            yield "', editors[0].getValue());
                    }
                });
            });
        });
    </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 1034
    public function macro_illustrationField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 1035
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["extra_css_classes" => "", "backdrop" => true],             // line 1038
($context["options"] ?? null));
            // line 1039
            yield "    ";
            $context["custom_icon_prefix"] = Twig\Extension\CoreExtension::constant("Glpi\\UI\\IllustrationManager::CUSTOM_ILLUSTRATION_PREFIX");
            // line 1042
            yield "    ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 1043
                yield "        ";
                $context["container_id"] = ("container-" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
                // line 1044
                yield "
        <div id=\"";
                // line 1045
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
                yield "\">
            <input
                name=\"";
                // line 1047
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\"
                type=\"hidden\"
                value=\"";
                // line 1049
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\"
                data-glpi-icon-picker-value
            >

            ";
                // line 1054
                yield "            ";
                $context["modal_id"] = ("illustration-modal-" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
                // line 1055
                yield "            <div
                class=\"illustration-selector d-flex align-items-center card border-1 ";
                // line 1056
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "extra_css_classes", [], "any", false, false, false, 1056), "html", null, true);
                yield "\"
                role=\"button\"
                aria-label=\"";
                // line 1058
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select an illustration"), "html", null, true);
                yield "\"
                data-bs-toggle=\"modal\"
                data-bs-target=\"#";
                // line 1060
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_id"] ?? null), "html", null, true);
                yield "\"
                data-glpi-icon-picker-value-preview
            >
                <div class=\"card-body aspect-ratio-1\">
                    ";
                // line 1064
                $context["is_custom_file"] = (is_string($_v12 = ($context["value"] ?? null)) && is_string($_v13 = ($context["custom_icon_prefix"] ?? null)) && str_starts_with($_v12, $_v13));
                // line 1065
                yield "                    <div
                        ";
                // line 1066
                if ((($tmp = ($context["is_custom_file"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1067
                    yield "                            data-glpi-icon-picker-value-preview-custom
                        ";
                } else {
                    // line 1069
                    yield "                            data-glpi-icon-picker-value-preview-native
                        ";
                }
                // line 1071
                yield "                    >
                        ";
                // line 1072
                yield $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderIllustration(($context["value"] ?? null), 100);
                yield "
                    </div>

                    ";
                // line 1078
                yield "                    ";
                if ((($tmp = ($context["is_custom_file"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1079
                    yield "                        <div
                            class=\"d-none\"
                            data-glpi-icon-picker-value-preview-native
                        >
                           ";
                    // line 1083
                    yield $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderIllustration("", 100);
                    yield "
                        </div>
                    ";
                } else {
                    // line 1086
                    yield "                        <div
                            class=\"d-none\"
                            data-glpi-icon-picker-value-preview-custom
                        >
                           ";
                    // line 1090
                    yield $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderIllustration(($context["custom_icon_prefix"] ?? null), 100);
                    yield "
                        </div>
                    ";
                }
                // line 1093
                yield "                </div>
            </div>

            ";
                // line 1097
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/illustration/icon_picker_modal.html.twig", ["id" =>                 // line 1098
($context["modal_id"] ?? null), "backdrop" => CoreExtension::getAttribute($this->env, $this->source,                 // line 1099
($context["options"] ?? null), "backdrop", [], "any", false, false, false, 1099)], false);
                // line 1100
                yield "

            ";
                // line 1103
                yield "            <script defer type=\"module\">
                (async () => {
                    const module = await import(
                        \"/js/modules/IllustrationPicker/Controller.js\"
                    );
                    new module.GlpiIllustrationPickerController(
                        document.getElementById('";
                // line 1109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "js"), "html", null, true);
                yield "'),
                        document.getElementById('";
                // line 1110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_id"] ?? null), "js"), "html", null, true);
                yield "'),
                        \"";
                // line 1111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["custom_icon_prefix"] ?? null), "js"), "html", null, true);
                yield "\",
                    );
                })();
            </script>
        </div>
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1117
            yield "
    ";
            // line 1118
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 1120
($context["options"] ?? null));
            // line 1121
            yield "    ";
            yield $this->getTemplateForMacro("macro_field", $context, 1121, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/fields_macros.html.twig";
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
        return array (  3163 => 1121,  3161 => 1120,  3160 => 1118,  3157 => 1117,  3147 => 1111,  3143 => 1110,  3139 => 1109,  3131 => 1103,  3127 => 1100,  3125 => 1099,  3124 => 1098,  3122 => 1097,  3117 => 1093,  3111 => 1090,  3105 => 1086,  3099 => 1083,  3093 => 1079,  3090 => 1078,  3084 => 1072,  3081 => 1071,  3077 => 1069,  3073 => 1067,  3071 => 1066,  3068 => 1065,  3066 => 1064,  3059 => 1060,  3054 => 1058,  3049 => 1056,  3046 => 1055,  3043 => 1054,  3036 => 1049,  3031 => 1047,  3026 => 1045,  3023 => 1044,  3020 => 1043,  3017 => 1042,  3014 => 1039,  3012 => 1038,  3010 => 1035,  2995 => 1034,  2982 => 1026,  2978 => 1025,  2972 => 1022,  2967 => 1020,  2957 => 1019,  2953 => 1018,  2947 => 1015,  2945 => 1013,  2936 => 1011,  2933 => 1010,  2931 => 1009,  2928 => 1008,  2925 => 1007,  2923 => 1005,  2921 => 1004,  2919 => 1003,  2916 => 1002,  2914 => 1001,  2912 => 996,  2897 => 995,  2888 => 992,  2885 => 991,  2870 => 990,  2861 => 986,  2856 => 984,  2852 => 983,  2847 => 981,  2843 => 980,  2840 => 979,  2838 => 978,  2828 => 977,  2825 => 976,  2822 => 975,  2819 => 974,  2816 => 973,  2813 => 972,  2811 => 971,  2808 => 970,  2805 => 969,  2802 => 966,  2800 => 965,  2797 => 964,  2795 => 963,  2793 => 954,  2777 => 953,  2767 => 947,  2763 => 946,  2754 => 945,  2752 => 944,  2747 => 943,  2745 => 942,  2735 => 941,  2732 => 940,  2729 => 939,  2726 => 938,  2723 => 937,  2720 => 936,  2717 => 935,  2714 => 933,  2711 => 932,  2708 => 931,  2705 => 930,  2702 => 929,  2700 => 928,  2697 => 927,  2694 => 926,  2692 => 924,  2690 => 923,  2688 => 922,  2685 => 921,  2683 => 920,  2682 => 917,  2679 => 916,  2676 => 915,  2673 => 912,  2671 => 911,  2668 => 910,  2665 => 909,  2663 => 908,  2661 => 905,  2659 => 904,  2656 => 903,  2654 => 902,  2652 => 889,  2636 => 888,  2627 => 883,  2623 => 882,  2613 => 881,  2610 => 880,  2607 => 879,  2604 => 878,  2601 => 877,  2598 => 876,  2596 => 875,  2593 => 874,  2590 => 873,  2587 => 872,  2584 => 871,  2581 => 870,  2579 => 869,  2576 => 868,  2574 => 867,  2572 => 861,  2557 => 860,  2547 => 855,  2541 => 853,  2539 => 852,  2536 => 851,  2533 => 850,  2521 => 849,  2512 => 846,  2507 => 844,  2501 => 842,  2499 => 841,  2494 => 840,  2491 => 839,  2476 => 838,  2469 => 835,  2466 => 834,  2460 => 832,  2454 => 830,  2452 => 829,  2447 => 828,  2444 => 827,  2442 => 826,  2439 => 825,  2436 => 824,  2434 => 822,  2433 => 821,  2432 => 820,  2431 => 819,  2429 => 818,  2427 => 817,  2424 => 816,  2418 => 814,  2416 => 813,  2413 => 812,  2410 => 811,  2407 => 810,  2405 => 809,  2402 => 808,  2399 => 807,  2396 => 806,  2393 => 805,  2390 => 804,  2388 => 803,  2385 => 802,  2383 => 801,  2381 => 793,  2366 => 792,  2357 => 789,  2348 => 787,  2346 => 786,  2343 => 785,  2340 => 784,  2337 => 783,  2335 => 782,  2332 => 781,  2330 => 780,  2328 => 778,  2325 => 777,  2322 => 776,  2319 => 775,  2304 => 774,  2294 => 770,  2292 => 769,  2289 => 768,  2282 => 766,  2279 => 765,  2276 => 764,  2274 => 762,  2273 => 761,  2270 => 760,  2267 => 759,  2264 => 758,  2262 => 757,  2259 => 756,  2256 => 755,  2253 => 754,  2251 => 753,  2248 => 752,  2245 => 751,  2242 => 750,  2239 => 749,  2237 => 748,  2235 => 745,  2232 => 744,  2229 => 743,  2223 => 740,  2220 => 739,  2218 => 738,  2215 => 737,  2199 => 736,  2189 => 732,  2187 => 731,  2184 => 730,  2178 => 728,  2177 => 727,  2176 => 726,  2174 => 725,  2172 => 724,  2169 => 723,  2166 => 722,  2163 => 721,  2161 => 720,  2158 => 719,  2155 => 718,  2152 => 717,  2150 => 716,  2147 => 715,  2144 => 714,  2141 => 713,  2138 => 712,  2136 => 711,  2134 => 707,  2131 => 706,  2128 => 705,  2122 => 702,  2119 => 701,  2117 => 700,  2114 => 699,  2098 => 698,  2090 => 695,  2087 => 694,  2083 => 693,  2081 => 692,  2080 => 691,  2078 => 689,  2076 => 688,  2073 => 687,  2070 => 686,  2067 => 685,  2065 => 684,  2062 => 683,  2059 => 682,  2056 => 681,  2054 => 680,  2051 => 679,  2048 => 678,  2045 => 677,  2042 => 676,  2040 => 675,  2038 => 672,  2023 => 671,  2015 => 668,  2012 => 667,  2008 => 666,  2006 => 665,  2005 => 664,  2003 => 663,  2001 => 662,  1998 => 661,  1995 => 660,  1992 => 659,  1990 => 658,  1987 => 657,  1984 => 656,  1981 => 655,  1979 => 654,  1976 => 653,  1973 => 652,  1970 => 651,  1967 => 650,  1965 => 649,  1963 => 645,  1948 => 644,  1936 => 637,  1930 => 634,  1927 => 633,  1924 => 632,  1922 => 631,  1920 => 628,  1918 => 626,  1903 => 625,  1895 => 622,  1892 => 621,  1888 => 620,  1885 => 619,  1883 => 618,  1880 => 617,  1877 => 616,  1874 => 615,  1872 => 614,  1869 => 613,  1866 => 612,  1863 => 611,  1861 => 610,  1858 => 609,  1855 => 608,  1852 => 607,  1849 => 606,  1847 => 605,  1845 => 601,  1830 => 600,  1821 => 597,  1817 => 596,  1814 => 595,  1812 => 594,  1809 => 593,  1806 => 592,  1803 => 591,  1801 => 590,  1798 => 589,  1796 => 588,  1794 => 586,  1780 => 585,  1772 => 582,  1769 => 581,  1765 => 580,  1763 => 579,  1762 => 578,  1761 => 577,  1759 => 576,  1757 => 575,  1754 => 574,  1752 => 573,  1749 => 572,  1746 => 571,  1743 => 570,  1741 => 569,  1738 => 568,  1735 => 567,  1732 => 566,  1730 => 565,  1727 => 564,  1724 => 563,  1721 => 562,  1718 => 561,  1716 => 560,  1714 => 556,  1699 => 555,  1691 => 552,  1688 => 551,  1684 => 550,  1681 => 549,  1679 => 548,  1676 => 547,  1673 => 546,  1670 => 545,  1668 => 544,  1665 => 543,  1662 => 542,  1659 => 541,  1657 => 540,  1654 => 539,  1651 => 538,  1648 => 537,  1645 => 536,  1643 => 535,  1641 => 531,  1626 => 530,  1618 => 527,  1615 => 526,  1611 => 525,  1609 => 524,  1608 => 523,  1606 => 522,  1604 => 521,  1601 => 520,  1598 => 519,  1595 => 518,  1593 => 517,  1590 => 516,  1587 => 515,  1584 => 514,  1582 => 513,  1579 => 512,  1576 => 511,  1573 => 510,  1570 => 509,  1568 => 508,  1566 => 504,  1551 => 503,  1543 => 500,  1540 => 499,  1536 => 498,  1534 => 497,  1533 => 496,  1532 => 495,  1530 => 494,  1528 => 493,  1525 => 492,  1522 => 491,  1519 => 490,  1517 => 489,  1514 => 488,  1511 => 487,  1508 => 486,  1506 => 485,  1503 => 484,  1500 => 483,  1497 => 482,  1495 => 481,  1492 => 480,  1490 => 479,  1488 => 475,  1472 => 474,  1464 => 471,  1461 => 470,  1457 => 469,  1455 => 468,  1454 => 467,  1453 => 466,  1451 => 465,  1449 => 464,  1446 => 463,  1443 => 462,  1440 => 461,  1437 => 460,  1434 => 459,  1431 => 458,  1429 => 457,  1426 => 456,  1423 => 455,  1420 => 454,  1418 => 453,  1415 => 452,  1413 => 451,  1411 => 447,  1396 => 446,  1387 => 443,  1376 => 442,  1367 => 439,  1364 => 438,  1361 => 437,  1358 => 436,  1356 => 430,  1353 => 429,  1339 => 428,  1332 => 425,  1330 => 422,  1325 => 421,  1322 => 420,  1320 => 419,  1317 => 418,  1314 => 417,  1311 => 416,  1309 => 415,  1306 => 414,  1301 => 412,  1299 => 409,  1296 => 408,  1288 => 405,  1286 => 403,  1285 => 400,  1282 => 399,  1278 => 398,  1272 => 395,  1269 => 394,  1266 => 393,  1251 => 392,  1242 => 389,  1239 => 388,  1236 => 387,  1233 => 386,  1228 => 384,  1221 => 380,  1216 => 379,  1203 => 370,  1201 => 369,  1197 => 368,  1194 => 367,  1190 => 365,  1188 => 364,  1181 => 363,  1173 => 361,  1170 => 360,  1167 => 359,  1164 => 358,  1162 => 357,  1159 => 356,  1156 => 355,  1140 => 354,  1131 => 351,  1124 => 349,  1121 => 348,  1118 => 347,  1116 => 346,  1114 => 342,  1099 => 341,  1091 => 338,  1088 => 337,  1081 => 335,  1078 => 334,  1076 => 333,  1073 => 332,  1071 => 331,  1069 => 329,  1054 => 328,  1046 => 324,  1043 => 323,  1040 => 322,  1037 => 321,  1024 => 319,  1021 => 318,  1018 => 317,  1015 => 315,  1008 => 313,  1005 => 312,  1003 => 311,  1000 => 310,  998 => 309,  997 => 308,  996 => 307,  995 => 306,  993 => 304,  978 => 303,  970 => 299,  967 => 298,  960 => 296,  957 => 295,  955 => 294,  952 => 293,  950 => 292,  948 => 290,  933 => 289,  925 => 285,  922 => 284,  915 => 282,  912 => 281,  909 => 280,  894 => 279,  886 => 275,  883 => 274,  876 => 272,  873 => 271,  870 => 270,  855 => 269,  847 => 265,  844 => 264,  841 => 263,  838 => 262,  835 => 261,  832 => 260,  829 => 259,  827 => 258,  824 => 257,  821 => 256,  817 => 255,  815 => 253,  814 => 252,  813 => 251,  812 => 249,  811 => 248,  809 => 247,  806 => 246,  803 => 245,  799 => 244,  797 => 242,  796 => 241,  795 => 239,  793 => 238,  790 => 237,  787 => 236,  785 => 235,  782 => 234,  775 => 232,  772 => 231,  770 => 230,  767 => 229,  764 => 228,  761 => 227,  759 => 226,  757 => 225,  754 => 224,  752 => 223,  751 => 215,  749 => 209,  734 => 208,  725 => 204,  720 => 202,  714 => 200,  710 => 198,  708 => 197,  703 => 196,  700 => 195,  697 => 194,  682 => 193,  674 => 189,  671 => 188,  664 => 186,  661 => 185,  659 => 184,  656 => 183,  654 => 182,  652 => 180,  637 => 179,  629 => 175,  626 => 174,  621 => 172,  615 => 170,  613 => 169,  610 => 168,  599 => 167,  595 => 166,  591 => 165,  587 => 164,  583 => 163,  579 => 162,  573 => 161,  567 => 160,  564 => 159,  562 => 158,  559 => 157,  557 => 156,  555 => 148,  552 => 147,  549 => 146,  546 => 145,  543 => 144,  541 => 143,  539 => 141,  536 => 140,  521 => 139,  513 => 135,  510 => 134,  503 => 132,  500 => 131,  498 => 130,  495 => 129,  493 => 128,  491 => 125,  476 => 124,  468 => 121,  465 => 120,  460 => 118,  457 => 116,  454 => 115,  452 => 114,  449 => 113,  447 => 112,  445 => 110,  430 => 109,  422 => 106,  419 => 105,  412 => 103,  409 => 102,  407 => 101,  404 => 100,  402 => 99,  400 => 97,  385 => 96,  377 => 92,  374 => 91,  371 => 90,  368 => 89,  365 => 88,  362 => 87,  359 => 86,  356 => 85,  354 => 83,  352 => 82,  348 => 81,  345 => 80,  329 => 79,  320 => 74,  315 => 72,  312 => 71,  310 => 70,  305 => 69,  299 => 66,  296 => 65,  294 => 64,  290 => 63,  286 => 62,  282 => 61,  279 => 60,  276 => 59,  273 => 58,  258 => 57,  249 => 52,  244 => 50,  241 => 49,  239 => 48,  234 => 47,  228 => 44,  225 => 43,  223 => 42,  219 => 41,  214 => 39,  211 => 38,  208 => 37,  205 => 36,  202 => 35,  199 => 34,  184 => 33,  178 => 1033,  175 => 994,  172 => 989,  168 => 951,  164 => 886,  160 => 858,  157 => 848,  154 => 837,  151 => 791,  148 => 773,  145 => 735,  142 => 697,  139 => 670,  136 => 643,  133 => 624,  130 => 599,  127 => 584,  124 => 554,  121 => 529,  118 => 502,  115 => 473,  112 => 445,  109 => 441,  106 => 427,  103 => 391,  100 => 353,  97 => 340,  93 => 326,  89 => 301,  85 => 287,  81 => 277,  77 => 267,  73 => 206,  69 => 191,  65 => 177,  61 => 137,  58 => 123,  55 => 108,  51 => 94,  48 => 78,  45 => 56,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/fields_macros.html.twig", "/var/www/html/glpi/templates/components/form/fields_macros.html.twig");
    }
}
