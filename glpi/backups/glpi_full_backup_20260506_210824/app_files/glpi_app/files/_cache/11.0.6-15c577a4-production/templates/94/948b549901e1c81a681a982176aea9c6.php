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

/* components/masonry_grid.html.twig */
class __TwigTemplate_0fa288e265c2b4a8938d6011d5c52609 extends Template
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
        if ((($tmp =  !array_key_exists("grid_item_class", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "   ";
            $context["grid_item_class"] = "col-xl-6";
        }
        // line 36
        yield "
";
        // line 37
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 38
        yield "<div id=\"grid_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"masonry_grid row row-cards mb-5\">
   ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["grid_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 40
            yield "      ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty($context["item"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "         <div class=\"grid-item ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["grid_item_class"] ?? null), "html", null, true);
                yield "\">
            ";
                // line 42
                yield $context["item"];
                yield "
         </div>
      ";
            }
            // line 45
            yield "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "</div>

<script type=\"text/javascript\">
\$(function() {
   window.msnry_grid_";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield " = new Masonry('#grid_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "', {
      \"percentPosition\": true,
      \"horizontalOrder\": true,
   });

   \$('#grid_";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on(\"layout:refresh\", function() {
       window.msnry_grid_";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield ".layout();
   });

   \$(document).on('masonry_grid:layout', function() {
       window.msnry_grid_";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield ".layout();
   });

   // Use MutationObserver with debouncing to detect content changes
   const observer = new MutationObserver(window._.debounce(function(mutations) {
       requestAnimationFrame(function() {
           window.msnry_grid_";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield ".layout();
       });
   }, 150));

   observer.observe(document.getElementById('grid_";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "'), {
       childList: true,
       subtree: true
   });

   // Also handle window resize with debouncing
   \$(window).on('resize', window._.debounce(function() {
       requestAnimationFrame(function() {
           window.msnry_grid_";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield ".layout();
       });
   }, 150));
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
        return "components/masonry_grid.html.twig";
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
        return array (  139 => 78,  128 => 70,  121 => 66,  112 => 60,  105 => 56,  101 => 55,  91 => 50,  85 => 46,  79 => 45,  73 => 42,  68 => 41,  65 => 40,  61 => 39,  56 => 38,  54 => 37,  51 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/masonry_grid.html.twig", "/var/www/html/glpi/templates/components/masonry_grid.html.twig");
    }
}
