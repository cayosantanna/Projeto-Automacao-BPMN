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

/* components/dropdown/comments.html.twig */
class __TwigTemplate_3c42bd9802dfb0102dd7e7a2bfe448b9 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["extra_rows"] ?? null)) > 0)) {
            // line 34
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["extra_rows"] ?? null));
            foreach ($context['_seq'] as $context["label"] => $context["value"]) {
                // line 35
                yield "        <span class=\"b\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s: %2\$s"), $context["label"], ""), "html", null, true);
                yield "</span>";
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true));
                yield "<br />
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "    ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["comment"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "        <span class=\"b\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s: %2\$s"), __("Comments"), ""), "html", null, true);
                yield "</span>
    ";
            }
        }
        // line 41
        yield "
";
        // line 42
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["comment"] ?? null), "html", null, true));
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/dropdown/comments.html.twig";
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
        return array (  76 => 42,  73 => 41,  66 => 38,  63 => 37,  52 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/dropdown/comments.html.twig", "/var/www/html/glpi/templates/components/dropdown/comments.html.twig");
    }
}
