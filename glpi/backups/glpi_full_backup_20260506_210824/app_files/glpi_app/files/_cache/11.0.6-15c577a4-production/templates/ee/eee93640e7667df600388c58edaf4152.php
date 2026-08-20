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

/* components/form/single-action.html.twig */
class __TwigTemplate_e51a3964ade2751ea51efe6a371a1de2 extends Template
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
        if ((($tmp =  !array_key_exists("onlyicon", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "   ";
            $context["onlyicon"] = false;
        }
        // line 36
        yield "
";
        // line 37
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 37) && $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 37) . "::isMassiveActionAllowed"), [(($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null)]))) {
            // line 38
            yield "   ";
            $context["input"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getMassiveActionsForItem", [], "method", false, false, false, 38), "getInput", [], "method", false, false, false, 38);
            // line 39
            yield "   ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v1 = ($context["input"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["actions"] ?? null) : null)) > 0)) {
                // line 40
                yield "   ";
                $context["ms_auto"] = (((($tmp = (((array_key_exists("single_actions_ms_auto", $context) &&  !(null === $context["single_actions_ms_auto"]))) ? ($context["single_actions_ms_auto"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ms-auto") : (""));
                // line 41
                yield "<div class=\"d-none d-sm-block btn-group ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ms_auto"] ?? null), "html", null, true);
                yield "\" aria-labelledby=\"single-action\"
     ";
                // line 42
                if ((($tmp = ($context["onlyicon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"";
                }
                yield ">
   <button class=\"btn ";
                // line 43
                yield (((($tmp = ($context["onlyicon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-icon") : ("dropdown-toggle"));
                yield " btn-outline-secondary\" type=\"button\"
           id=\"single-action\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\"
           aria-expanded=\"false\">
      <i class=\"ti ti-dots-vertical\"></i>
      ";
                // line 47
                if ((($tmp =  !($context["onlyicon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 48
                    yield "         <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Action", "Actions", Session::getPluralNumber()), "html", null, true);
                    yield "</span>
      ";
                }
                // line 50
                yield "   </button>

   <div id=\"single-ma-action-menu\" class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow mt-2\">
      ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v2 = ($context["input"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["actions"] ?? null) : null));
                foreach ($context['_seq'] as $context["key"] => $context["action"]) {
                    // line 54
                    yield "         <a class=\"dropdown-item\" data-action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" role=\"button\" href=\"#\">";
                    yield $context["action"];
                    yield "</a>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                yield "   </div>
</div>
<script>
\$(function () {
   var ma = ";
                // line 60
                yield json_encode(($context["input"] ?? null));
                yield ";

   \$(document).on('click', '#single-ma-action-menu .moreactions', function () {
      \$('.moreactions + .dropdown-menu').toggle();
   });

   \$(document).on('click', function (event) {
      var target = \$(event.target);
      var parent = target.parent();

      if (!target.hasClass('moreactions')
         && !parent.hasClass('moreactions')) {
         \$('.moreactions + .dropdown-menu').hide();
      }
   });

   \$(document).on('click', '#single-ma-action-menu [data-action]', function () {
      \$('.moreactions + .dropdown-menu').hide();

      var current_action = \$(this).data('action');

      glpi_ajax_dialog({
         url: `\${CFG_GLPI.root_doc}/ajax/dropdownMassiveAction.php`,
         title: ma.actions[current_action],
         params: Object.assign(
            { action: current_action },
            ma
         ),
         appendTo: '#massive_container_";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "css"), "js"), "html", null, true);
                yield "',
      });
   });
});
</script>
   ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/single-action.html.twig";
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
        return array (  148 => 88,  117 => 60,  111 => 56,  100 => 54,  96 => 53,  91 => 50,  85 => 48,  83 => 47,  76 => 43,  70 => 42,  65 => 41,  62 => 40,  59 => 39,  56 => 38,  54 => 37,  51 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/single-action.html.twig", "/var/www/html/glpi/templates/components/form/single-action.html.twig");
    }
}
