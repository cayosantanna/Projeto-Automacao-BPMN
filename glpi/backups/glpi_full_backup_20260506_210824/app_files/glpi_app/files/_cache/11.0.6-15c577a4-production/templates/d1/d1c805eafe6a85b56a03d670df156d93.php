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

/* components/itilobject/timeline/knowledge_item.html.twig */
class __TwigTemplate_4616a47df486a4b8bf5328991e77d542 extends Template
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
        yield "
";
        // line 35
        $context["btn_name"] = ("search_knowbaseitem_" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
        // line 36
        yield "
";
        // line 37
        $context["search_button"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 38
            yield "    <button type=\"button\" class=\"btn btn-secondary overflow-hidden text-nowrap\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btn_name"] ?? null), "html", null, true);
            yield "\"
        title=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search in the knowledge base"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
    <i class=\"ti ti-search\"></i>
    </button>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        yield "
";
        // line 44
        yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 44, $this->getSourceContext())->macro_field(...["",         // line 46
($context["search_button"] ?? null), "", ["full_width" => true, "icon_label" => true]]);
        // line 53
        yield "

<script>
\$('button[name=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btn_name"] ?? null), "js"), "html", null, true);
        yield "\"]').on('click', () => {
    window.glpi_ajax_dialog({
        id: 'modal_search_knowbaseitem',
        modalclass: 'modal-xl',
        title: '";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search in the knowledge base"), "js"), "html", null, true);
        yield "',
        url: '";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(((("/Knowbase/KnowbaseItem/Search/" . CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 61)) . "/") . CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 61))), "js"), "html", null, true);
        yield "'
    });
    \$(document).off('click', '#modal_search_knowbaseitem button.use-knowbaseitem').on('click', '#modal_search_knowbaseitem button.use-knowbaseitem', (e) => {
        const btn = \$(e.target).closest('button.use-knowbaseitem');
        const knowbaseitems_id = btn.attr('data-knowbaseitem-id') ?? btn.closest('.list-group-item').attr('data-knowbaseitem-id');
        \$('#modal_search_knowbaseitem').modal('hide');
        if (knowbaseitems_id) {
            \$.ajax({
                url: `";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/Knowbase/KnowbaseItem/"), "html", null, true);
        yield "\${knowbaseitems_id}/Content`
            }).then((data) => {
                if (data) {
                    setRichTextEditorContent(\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["content_field_id"] ?? null), "js"), "html", null, true);
        yield "\", data);
                    const link_kb = \$('.itilobject input[type=\"checkbox\"][name=\"kb_linked_id\"]');
                    link_kb.val(knowbaseitems_id);
                    link_kb.removeAttr('disabled');
                    link_kb.closest('.form-field').find('label.col-form-label > i').attr('data-bs-original-title', __('Link to knowledge base entry #%id').replace('%id', knowbaseitems_id));
                    link_kb.closest('.form-field').removeClass('d-none');
                }
            });
        }
    })
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/knowledge_item.html.twig";
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
        return array (  109 => 72,  103 => 69,  92 => 61,  88 => 60,  81 => 56,  76 => 53,  74 => 46,  73 => 44,  70 => 43,  62 => 39,  57 => 38,  55 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/knowledge_item.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/knowledge_item.html.twig");
    }
}
