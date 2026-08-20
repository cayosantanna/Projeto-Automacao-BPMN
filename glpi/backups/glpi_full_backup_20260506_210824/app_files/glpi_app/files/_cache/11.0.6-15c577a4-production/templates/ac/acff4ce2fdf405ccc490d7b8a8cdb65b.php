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

/* components/itilobject/mainform_open.html.twig */
class __TwigTemplate_0dd0a8cbfa8769356e3c229596201e2e extends Template
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
        $context["enctype"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("multipart/form-data") : ("application/x-www-form-urlencoded"));
        // line 34
        $context["new_cls"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("new-itil-object") : (""));
        // line 35
        yield "
";
        // line 36
        $context["form_path"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 36);
        // line 37
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "   ";
            $context["form_path"] = ((($context["form_path"] ?? null) . "?id=") . (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null));
        }
        // line 40
        yield "
";
        // line 41
        $context["track_changes"] = "true";
        // line 42
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "   ";
            $context["track_changes"] = "false";
        }
        // line 45
        yield "
<form method=\"POST\" action=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_path"] ?? null), "html", null, true);
        yield "\" enctype=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["enctype"] ?? null), "html", null, true);
        yield "\"
      data-track-changes=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["track_changes"] ?? null), "html", null, true);
        yield "\" id=\"itil-form\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["new_cls"] ?? null), "html", null, true);
        yield " needs-validation\" data-submit-once novalidate>
   ";
        // line 48
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "       <input type=\"hidden\" name=\"id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 49)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["id"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 51
        yield "   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
   <input type=\"hidden\" name=\"_skip_default_actor\" value=\"1\" />

   ";
        // line 54
        if ((array_key_exists("itiltemplate_key", $context) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 54), "id", [], "array", true, true, false, 54))) {
            // line 55
            yield "      <input type=\"hidden\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itiltemplate_key"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 57
        yield "   ";
        if (array_key_exists("predefined_fields", $context)) {
            // line 58
            yield "      <input type=\"hidden\" name=\"_predefined_fields\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["predefined_fields"] ?? null), "html", null, true);
            yield "\" />
   ";
        }
        // line 60
        yield "
   ";
        // line 61
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "tickets_id", [], "array", true, true, false, 61) || CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_tickets_id", [], "array", true, true, false, 61))) {
            // line 62
            yield "      <input type=\"hidden\" name=\"_tickets_id\" value=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "tickets_id", [], "array", true, true, false, 62) &&  !(null === (($_v3 = ($context["params"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["tickets_id"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = ($context["params"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["tickets_id"] ?? null) : null), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = ($context["params"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["_tickets_id"] ?? null) : null), "html", null, true)));
            yield "\" />
   ";
        }
        // line 64
        yield "
   ";
        // line 65
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "problems_id", [], "array", true, true, false, 65) || CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_problems_id", [], "array", true, true, false, 65))) {
            // line 66
            yield "      <input type=\"hidden\" name=\"_problems_id\" value=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "problems_id", [], "array", true, true, false, 66) &&  !(null === (($_v6 = ($context["params"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["problems_id"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = ($context["params"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["problems_id"] ?? null) : null), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = ($context["params"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["_problems_id"] ?? null) : null), "html", null, true)));
            yield "\" />
   ";
        }
        // line 68
        yield "
   ";
        // line 69
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_add_fromitem", [], "array", true, true, false, 69)) {
            // line 70
            yield "      <input type=\"hidden\" name=\"_from_items_id\" value=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_from_items_id", [], "array", true, true, false, 70) &&  !(null === (($_v9 = ($context["params"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["_from_items_id"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = ($context["params"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["_from_items_id"] ?? null) : null), "html", null, true)) : (0));
            yield "\" />
      <input type=\"hidden\" name=\"_from_itemtype\" value=\"";
            // line 71
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_from_itemtype", [], "array", true, true, false, 71) &&  !(null === (($_v11 = ($context["params"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["_from_itemtype"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v12 = ($context["params"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["_from_itemtype"] ?? null) : null), "html", null, true)) : (""));
            yield "\" />
   ";
        }
        // line 73
        yield "
   ";
        // line 74
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_promoted_fup_id", [], "array", true, true, false, 74) && ((($_v13 = ($context["params"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["_promoted_fup_id"] ?? null) : null) > 0))) {
            // line 75
            yield "      <input type=\"hidden\" name=\"_promoted_fup_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v14 = ($context["params"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["_promoted_fup_id"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 77
        yield "   ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_promoted_task_id", [], "array", true, true, false, 77) && ((($_v15 = ($context["params"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["_promoted_task_id"] ?? null) : null) > 0))) {
            // line 78
            yield "      <input type=\"hidden\" name=\"_promoted_task_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v16 = ($context["params"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["_promoted_task_id"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 80
        yield "   ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_skip_promoted_fields", [], "array", true, true, false, 80) && ((($_v17 = ($context["params"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["_skip_promoted_fields"] ?? null) : null) > 0))) {
            // line 81
            yield "      <input type=\"hidden\" name=\"_skip_promoted_fields\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v18 = ($context["params"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["_skip_promoted_fields"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 83
        yield "
   ";
        // line 85
        yield "   ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_projecttasks_id", [], "array", true, true, false, 85) && ((($_v19 = ($context["params"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["_projecttasks_id"] ?? null) : null) > 0))) {
            // line 86
            yield "      <input type=\"hidden\" name=\"_projecttasks_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v20 = ($context["params"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["_projecttasks_id"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 88
        yield "
   ";
        // line 89
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_tasktemplates_id", [], "array", true, true, false, 89) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v21 = ($context["params"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["_tasktemplates_id"] ?? null) : null)) > 0))) {
            // line 90
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v22 = ($context["params"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["_tasktemplates_id"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tasktemplate_id"]) {
                // line 91
                yield "         <input type=\"hidden\" name=\"_tasktemplates_id[]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tasktemplate_id"], "html", null, true);
                yield "\" />
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tasktemplate_id'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "   ";
        }
        // line 94
        yield "
   ";
        // line 95
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_hidden_fields", [], "array", true, true, false, 95) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v23 = ($context["params"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["_hidden_fields"] ?? null) : null)) > 0))) {
            // line 96
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v24 = ($context["params"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["_hidden_fields"] ?? null) : null));
            foreach ($context['_seq'] as $context["field_name"] => $context["field_value"]) {
                // line 97
                yield "         <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_value"], "html", null, true);
                yield "\" />
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['field_name'], $context['field_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "   ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/mainform_open.html.twig";
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
        return array (  241 => 99,  230 => 97,  225 => 96,  223 => 95,  220 => 94,  217 => 93,  208 => 91,  203 => 90,  201 => 89,  198 => 88,  192 => 86,  189 => 85,  186 => 83,  180 => 81,  177 => 80,  171 => 78,  168 => 77,  162 => 75,  160 => 74,  157 => 73,  152 => 71,  147 => 70,  145 => 69,  142 => 68,  136 => 66,  134 => 65,  131 => 64,  125 => 62,  123 => 61,  120 => 60,  114 => 58,  111 => 57,  103 => 55,  101 => 54,  94 => 51,  88 => 49,  86 => 48,  80 => 47,  74 => 46,  71 => 45,  67 => 43,  65 => 42,  63 => 41,  60 => 40,  56 => 38,  54 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/mainform_open.html.twig", "/var/www/html/glpi/templates/components/itilobject/mainform_open.html.twig");
    }
}
