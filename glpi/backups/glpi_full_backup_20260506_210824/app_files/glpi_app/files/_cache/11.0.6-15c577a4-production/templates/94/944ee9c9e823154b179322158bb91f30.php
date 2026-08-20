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

/* components/tab/addlink_block.html.twig */
class __TwigTemplate_b612f5843ab84657c09da71df2fb7e5c extends Template
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
        $context["block_class"] = (((array_key_exists("block_class", $context) &&  !(null === $context["block_class"]))) ? ($context["block_class"]) : ("d-flex mb-3"));
        // line 34
        $context["button_id"] = (((array_key_exists("button_id", $context) &&  !(null === $context["button_id"]))) ? ($context["button_id"]) : (false));
        // line 35
        $context["button_class"] = (((array_key_exists("button_class", $context) &&  !(null === $context["button_class"]))) ? ($context["button_class"]) : ("btn btn-primary ms-1"));
        // line 36
        $context["button_icon"] = (((array_key_exists("button_icon", $context) &&  !(null === $context["button_icon"]))) ? ($context["button_icon"]) : ("ti ti-link"));
        // line 37
        $context["button_label"] = (((array_key_exists("button_label", $context) &&  !(null === $context["button_label"]))) ? ($context["button_label"]) : (_x("button", "Add")));
        // line 38
        $context["button_attributes"] = (((array_key_exists("button_attributes", $context) &&  !(null === $context["button_attributes"]))) ? ($context["button_attributes"]) : ([]));
        // line 39
        $context["button_role"] = (((array_key_exists("button_role", $context) &&  !(null === $context["button_role"]))) ? ($context["button_role"]) : ("button"));
        // line 40
        yield "
<div class=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["block_class"] ?? null), "html", null, true);
        yield "\">
    <a
        role=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_role"] ?? null), "html", null, true);
        yield "\"
        class=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_class"] ?? null), "html", null, true);
        yield "\"
";
        // line 45
        if ((($tmp = ($context["button_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "        id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_id"] ?? null), "html", null, true);
            yield "\"
";
        }
        // line 48
        if ((is_string($_v0 = ($context["add_link"] ?? null)) && is_string($_v1 = "javascript:") && str_starts_with($_v0, $_v1))) {
            // line 49
            yield "        onclick=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["add_link"] ?? null), "html", null, true);
            yield "\"
";
        } else {
            // line 51
            yield "        href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["add_link"] ?? null), "html", null, true);
            yield "\"
";
        }
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["button_attributes"] ?? null));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            // line 54
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attribute'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "    >
";
        // line 57
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["button_icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "        <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_icon"] ?? null), "html", null, true);
            yield "\"></i>
";
        }
        // line 60
        yield "        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_label"] ?? null), "html", null, true);
        yield "
    </a>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/tab/addlink_block.html.twig";
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
        return array (  123 => 60,  117 => 58,  115 => 57,  112 => 56,  101 => 54,  97 => 53,  91 => 51,  85 => 49,  83 => 48,  77 => 46,  75 => 45,  71 => 44,  67 => 43,  62 => 41,  59 => 40,  57 => 39,  55 => 38,  53 => 37,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/tab/addlink_block.html.twig", "/var/www/html/glpi/templates/components/tab/addlink_block.html.twig");
    }
}
