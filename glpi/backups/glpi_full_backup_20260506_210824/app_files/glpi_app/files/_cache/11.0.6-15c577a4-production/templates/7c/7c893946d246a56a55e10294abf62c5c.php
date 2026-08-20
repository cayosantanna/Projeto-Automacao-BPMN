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

/* layout/parts/page_footer.html.twig */
class __TwigTemplate_d90c2114befd5a4d6ad6a1c5a1195836 extends Template
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
        // line 34
        $context["js_files"] = Twig\Extension\CoreExtension::merge(($context["js_files"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsScriptsFiles(false));
        // line 35
        $context["js_modules"] = Twig\Extension\CoreExtension::merge(($context["js_modules"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsModulesFiles(false));
        // line 36
        yield "
            </main> ";
        // line 38
        yield "         </div> ";
        // line 39
        yield "      </div> ";
        // line 40
        yield "   </div> ";
        // line 41
        yield "
   ";
        // line 42
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("maintenance_mode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "      <div id=\"maintenance-float\">
         <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/config.form.php?forcetab=Config\$5"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("MAINTENANCE MODE"), "html", null, true);
            yield "</a>
      </div>
   ";
        }
        // line 47
        yield "
   ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["js_files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 49
            yield "      <script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 49), (((CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 49) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 49)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 49)) : ([]))), "html", null, true);
            yield "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "
   ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["js_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 53
            yield "      <script type=\"module\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 53), (((CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 53) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 53)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 53)) : ([]))), "html", null, true);
            yield "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "
    ";
        // line 56
        if ((($tmp =  !(null === ($context["debug_info"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/debug/debug_toolbar.html.twig", ["debug_info" =>             // line 58
($context["debug_info"] ?? null)], false);
            // line 59
            yield "
    ";
        }
        // line 61
        yield "</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/page_footer.html.twig";
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
        return array (  119 => 61,  115 => 59,  113 => 58,  111 => 57,  109 => 56,  106 => 55,  97 => 53,  93 => 52,  90 => 51,  81 => 49,  77 => 48,  74 => 47,  66 => 44,  63 => 43,  61 => 42,  58 => 41,  56 => 40,  54 => 39,  52 => 38,  49 => 36,  47 => 35,  45 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/page_footer.html.twig", "/var/www/html/glpi/templates/layout/parts/page_footer.html.twig");
    }
}
