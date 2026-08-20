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

/* components/dropdown/limit.html.twig */
class __TwigTemplate_8faa73ef4d8a0df7b12c70d30abd67b7 extends Template
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
        $context["additional_attributes"] = ((array_key_exists("additional_attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["additional_attributes"] ?? null), [])) : ([]));
        // line 34
        $context["no_onchange"] = ((array_key_exists("no_onchange", $context)) ? (Twig\Extension\CoreExtension::default(($context["no_onchange"] ?? null), false)) : (false));
        // line 35
        yield "
";
        // line 36
        if ((($tmp =  !array_key_exists("additional_params", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "   ";
            $context["additional_params"] = "";
        } else {
            // line 39
            yield "   ";
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["additional_params"] ?? null)) > 0) &&  !(is_string($_v0 = ($context["additional_params"] ?? null)) && is_string($_v1 = "&") && str_starts_with($_v0, $_v1)))) {
                // line 40
                yield "      ";
                $context["additional_params"] = ("&" . ($context["additional_params"] ?? null));
                // line 41
                yield "   ";
            }
        }
        // line 43
        yield "
";
        // line 44
        if (( !array_key_exists("no_onchange", $context) ||  !($context["no_onchange"] ?? null))) {
            // line 45
            yield "   ";
            if ((array_key_exists("is_tab", $context) && (($context["is_tab"] ?? null) == true))) {
                // line 46
                yield "      ";
                $context["href"] = (("javascript:reloadTab('glpilist_limit='+this.value+'" . ($context["additional_params"] ?? null)) . "');");
                // line 47
                yield "   ";
            } elseif (array_key_exists("href", $context)) {
                // line 48
                yield "      ";
                $context["href_separator"] = ((CoreExtension::inFilter("?", ($context["href"] ?? null))) ? ("&") : ("?"));
                // line 49
                yield "      ";
                $context["href"] = ((((("location.href='" . ($context["href"] ?? null)) . ($context["href_separator"] ?? null)) . "glpilist_limit='+this.value+'") . ($context["additional_params"] ?? null)) . "'");
                // line 50
                yield "   ";
            }
        }
        // line 52
        yield "
";
        // line 53
        $context["options"] = [];
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5, 19, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 55
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(20, 49, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 58
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(50, 249, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 61
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(250, 999, 250));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 64
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1000, 4999, 1000));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 67
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5000, 10000, 5000));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 70
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [9999999]);
        // line 73
        $context["max"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->phpConfig("max_input_vars");
        // line 74
        if ((($context["max"] ?? null) > 10)) {
            // line 75
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [(($context["max"] ?? null) - 10)]);
        }
        // line 77
        if (!CoreExtension::inFilter($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("list_limit"), ($context["options"] ?? null))) {
            // line 78
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("list_limit")]);
        }
        // line 80
        $context["select_name"] = ((array_key_exists("select_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["select_name"] ?? null), "list_limit")) : ("list_limit"));
        // line 81
        yield "<select id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Html::sanitizeDomId(($context["select_name"] ?? null)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))), "html", null, true);
        yield "\" class=\"form-select form-select-sm mx-1 d-inline-block w-auto ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("select_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["select_class"] ?? null), "")) : ("")), "html", null, true);
        yield "\"
        ";
        // line 82
        if ((($tmp =  !($context["no_onchange"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "onChange=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["href"] ?? null), "html", null, true);
            yield "\"";
        }
        yield " name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["select_name"] ?? null), "html", null, true);
        yield "\"
        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["additional_attributes"] ?? null));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            // line 84
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
        // line 85
        yield ">
   ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, ($context["options"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 87
            yield "      <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            yield ((($context["value"] == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("list_limit"))) ? ("selected") : (""));
            yield ">
         ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "
      </option>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "</select>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/dropdown/limit.html.twig";
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
        return array (  237 => 91,  228 => 88,  221 => 87,  217 => 86,  214 => 85,  203 => 84,  199 => 83,  189 => 82,  181 => 81,  179 => 80,  175 => 78,  173 => 77,  169 => 75,  167 => 74,  165 => 73,  163 => 72,  156 => 70,  152 => 69,  145 => 67,  141 => 66,  134 => 64,  130 => 63,  123 => 61,  119 => 60,  112 => 58,  108 => 57,  101 => 55,  97 => 54,  95 => 53,  92 => 52,  88 => 50,  85 => 49,  82 => 48,  79 => 47,  76 => 46,  73 => 45,  71 => 44,  68 => 43,  64 => 41,  61 => 40,  58 => 39,  54 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/dropdown/limit.html.twig", "/var/www/html/glpi/templates/components/dropdown/limit.html.twig");
    }
}
