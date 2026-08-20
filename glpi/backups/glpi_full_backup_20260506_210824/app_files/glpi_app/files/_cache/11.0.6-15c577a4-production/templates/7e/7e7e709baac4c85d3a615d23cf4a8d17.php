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

/* components/user/link_with_tooltip.html.twig */
class __TwigTemplate_bbdd7bdee2ae619533626cc2e23a722d extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        yield "
<span id=\"user_";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\">
    <i class=\"ti ti-user ms-1\"></i>
    ";
        // line 37
        yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", ($context["users_id"] ?? null), ["enable_anonymization" => ($context["enable_anonymization"] ?? null)]);
        yield "
</span>

";
        // line 40
        if ((($tmp =  !($context["enable_anonymization"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "    ";
            $context["user"] = (((array_key_exists("user_object", $context) &&  !(null === $context["user_object"]))) ? ($context["user_object"]) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null))));
            // line 42
            yield "    ";
            if (( !(null === ($context["user"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "canView", [], "method", false, false, false, 42))) {
                // line 43
                yield "        ";
                $context["user_fields"] = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 43);
                // line 44
                yield "        ";
                $context["user_fields"] = Twig\Extension\CoreExtension::merge(($context["user_fields"] ?? null), ["user_name" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getFriendlyName", [], "method", false, false, false, 44)]);
                // line 45
                yield "        ";
                $context["user_fields"] = Twig\Extension\CoreExtension::merge(($context["user_fields"] ?? null), ["email" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 45)]);
                // line 46
                yield "        ";
                if ((($tmp = Session::haveRight("user", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 47
                    yield "            ";
                    $context["user_fields"] = Twig\Extension\CoreExtension::merge(($context["user_fields"] ?? null), ["login" => (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null)]);
                    // line 48
                    yield "        ";
                }
                // line 49
                yield "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [Twig\Extension\CoreExtension::include($this->env, $context, "components/user/info_card.html.twig", ["user" =>                 // line 55
($context["user_fields"] ?? null), "user_object" =>                 // line 56
($context["user"] ?? null)], false), ["applyto" => ("user_" .                 // line 61
($context["rand"] ?? null))]]);
                // line 65
                yield "    ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/user/link_with_tooltip.html.twig";
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
        return array (  93 => 65,  91 => 61,  90 => 56,  89 => 55,  87 => 49,  84 => 48,  81 => 47,  78 => 46,  75 => 45,  72 => 44,  69 => 43,  66 => 42,  63 => 41,  61 => 40,  55 => 37,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/user/link_with_tooltip.html.twig", "/var/www/html/glpi/templates/components/user/link_with_tooltip.html.twig");
    }
}
