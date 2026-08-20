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

/* __string_template__b7a5dd6d2baefa4283a539190d86eaac */
class __TwigTemplate_780f867dbdb3b64fcaf4f2082af7af91 extends Template
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
        // line 1
        yield "        <div class=\"search-container w-100 disable-overflow-y\" counter=\"0\">
            <div class=\"ajax-container search-display-data\">
                <div class=\"card card-sm mt-0 search-card\">
                    <div class=\"card-header d-flex justify-content-between search-header pe-0\">
                        <h2>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
        yield "</h2>
                    </div>
                    <ul>
                        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["no_result"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["itemtype"]) {
            // line 9
            yield "                            <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["itemtype"], "html", null, true);
            yield "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['itemtype'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "                    </ul>
                </div>
            </div>
        </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__b7a5dd6d2baefa4283a539190d86eaac";
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
        return array (  67 => 11,  58 => 9,  54 => 8,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__b7a5dd6d2baefa4283a539190d86eaac", "");
    }
}
