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

/* layout/parts/goto_button.html.twig */
class __TwigTemplate_69c2443ad03dfba0db40292ac30ff6bf extends Template
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
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
            // line 34
            yield "   ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 35
            yield "   ";
            $context["shortcut"] = __("Ctrl+Alt+G");
            // line 36
            yield "   ";
            if ((($context["platform"] ?? null) == Twig\Extension\CoreExtension::constant("donatj\\UserAgent\\Platforms::MACINTOSH"))) {
                // line 37
                yield "      ";
                $context["shortcut"] = __("Option+Command+G");
                // line 38
                yield "   ";
            }
            // line 39
            yield "
   <button class=\"btn btn-sm btn-ghost-secondary trigger-fuzzy justify-content-start mb-md-2\"
           title=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["shortcut"] ?? null), "html", null, true);
            yield "\"
           data-bs-toggle=\"tooltip\"
           data-bs-placement=\"right\">
      <i class=\"ti ti-arrow-big-right me-1\"></i>
      <span class=\"menu-label ";
            // line 45
            yield (((($tmp =  !($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-block d-xl-none d-xxl-block") : (""));
            yield "\">
         ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Find menu"), "html", null, true);
            yield "
      </span>
   </button>
   <div id=\"fuzzy-search-modal\"></div>
   <script type=\"module\">
       if (document.querySelector('#fuzzy-search-modal').__vue_app__ === undefined) {
           window.Vue.createApp(window.Vue.components['FuzzySearch/Modal'].component).mount('#fuzzy-search-modal');
       }
   </script>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/goto_button.html.twig";
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
        return array (  77 => 46,  73 => 45,  66 => 41,  62 => 39,  59 => 38,  56 => 37,  53 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/goto_button.html.twig", "/var/www/html/glpi/templates/layout/parts/goto_button.html.twig");
    }
}
