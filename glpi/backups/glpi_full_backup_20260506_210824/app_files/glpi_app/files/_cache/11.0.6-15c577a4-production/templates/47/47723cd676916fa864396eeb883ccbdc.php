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

/* central/widget_tab.html.twig */
class __TwigTemplate_7fcf308a6feb6f090d05325e58e85c1e extends Template
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
        yield "<table class=\"tab_cadre_central\">
   ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::DISPLAY_CENTRAL")), "html", null, true);
        yield "
</table>

<div id=\"home-dashboard";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"container-fluid\">
   ";
        // line 39
        $context["grid_items"] = [];
        // line 40
        yield "   ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["cards"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 41
            yield "      ";
            $context["card_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 42
                yield "         <div class=\"card\">
            <div class=\"card-body p-0\">
              <div class=\"lazy-widget\" data-itemtype=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "itemtype", [], "any", false, false, false, 44), "html", null, true);
                yield "\" data-widget=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "widget", [], "any", false, false, false, 44), "html", null, true);
                yield "\"
                 data-params=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(((CoreExtension::getAttribute($this->env, $this->source, $context["card"], "params", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "params", [], "any", false, false, false, 45), [])) : ([]))), "html", null, true);
                yield "\">
              </div>
            </div>
         </div>
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 50
            yield "
      ";
            // line 51
            $context["grid_items"] = Twig\Extension\CoreExtension::merge(($context["grid_items"] ?? null), [            // line 52
($context["card_html"] ?? null)]);
            // line 54
            yield "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['card'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "
   ";
        // line 56
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/masonry_grid.html.twig", ["grid_items" =>         // line 57
($context["grid_items"] ?? null)], false);
        // line 58
        yield "

   <script>
   \$(function () {
      \$('#home-dashboard";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield " .lazy-widget').each(function() {
         const this_obj = \$(this);
         const params = {
            'itemtype': this_obj.data('itemtype'),
            'widget': this_obj.data('widget'),
            'params': this_obj.data('params')
         };
         this_obj.html('<span class=\"spinner-border ms-auto\" role=\"status\" aria-hidden=\"true\"></span>')
            .load(`\${CFG_GLPI.root_doc}/ajax/central.php`, params, function(response, status, xhr) {
               const parent = this_obj.closest('.grid-item').parent();

               if (status === 'error' || !response) {
                  window['msnry_' + parent.prop('id')].remove(this_obj.closest('.grid-item'));
               }

               window['msnry_' + parent.prop('id')].layout();
            });
      });
   });
   </script>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "central/widget_tab.html.twig";
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
        return array (  113 => 62,  107 => 58,  105 => 57,  104 => 56,  101 => 55,  95 => 54,  93 => 52,  92 => 51,  89 => 50,  80 => 45,  74 => 44,  70 => 42,  67 => 41,  62 => 40,  60 => 39,  56 => 38,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "central/widget_tab.html.twig", "/var/www/html/glpi/templates/central/widget_tab.html.twig");
    }
}
