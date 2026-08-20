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

/* layout/parts/head.html.twig */
class __TwigTemplate_38ddda014ac06c8e2fc044c959cc955c extends Template
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
<!DOCTYPE html>
<html lang=\"";
        // line 34
        yield (((array_key_exists("lang", $context) &&  !(null === $context["lang"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["lang"], "html", null, true)) : ("en"));
        yield "\"
    ";
        // line 35
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiisrtl")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "        dir=\"rtl\"
    ";
        }
        // line 38
        yield "    ";
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpihighcontrast_css")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "        data-high-contrast=\"1\"
    ";
        }
        // line 41
        yield "    ";
        if (array_key_exists("theme", $context)) {
            // line 42
            yield "        data-glpi-theme=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getKey", [], "method", false, false, false, 42), "html", null, true);
            yield "\"
        data-glpi-theme-dark=\"";
            // line 43
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isDarkTheme", [], "method", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
    ";
        }
        // line 45
        yield "    ";
        if (array_key_exists("glpi_request_id", $context)) {
            // line 46
            yield "        data-glpi-request-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["glpi_request_id"] ?? null), "html", null, true);
            yield "\"
    ";
        }
        // line 48
        yield ">
<head>
   <title>";
        // line 50
        if (array_key_exists("title", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield " - ";
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("app_name"), "html", null, true);
        yield "</title>

   <meta charset=\"utf-8\" />

   ";
        // line 55
        yield "   <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

   ";
        // line 58
        yield "   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

   ";
        // line 61
        yield "   <meta name=\"robots\" content=\"noindex, nofollow\" />

    ";
        // line 64
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::merge(($context["custom_header_tags"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsHeaderTags(((array_key_exists("is_anonymous_page", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_anonymous_page"] ?? null), false)) : (false)))));
        foreach ($context['_seq'] as $context["_key"] => $context["header_tag"]) {
            // line 65
            yield "        <";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["header_tag"], "tag", [], "any", false, false, false, 65), "html", null, true);
            yield " ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["header_tag"], "properties", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['header_tag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "
   <meta property=\"glpi:csrf_token\" content=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(true), "html", null, true);
        yield "\" />

   ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::merge(($context["css_files"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsCssFiles(((array_key_exists("is_anonymous_page", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_anonymous_page"] ?? null), false)) : (false)))));
        foreach ($context['_seq'] as $context["_key"] => $context["css_file"]) {
            // line 71
            yield "      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->cssPath(CoreExtension::getAttribute($this->env, $this->source, $context["css_file"], "path", [], "any", false, false, false, 71), (((CoreExtension::getAttribute($this->env, $this->source, $context["css_file"], "options", [], "any", true, true, false, 71) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["css_file"], "options", [], "any", false, false, false, 71)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["css_file"], "options", [], "any", false, false, false, 71)) : ([]))), "html", null, true);
            yield "\" />
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['css_file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "
   ";
        // line 74
        yield $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->customCss();
        yield "

   <link rel=\"shortcut icon\" type=\"images/x-icon\" href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->assetPath("/pics/favicon.ico"), "html", null, true);
        yield "\" />

   ";
        // line 78
        yield $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->importmap();
        yield "

   ";
        // line 80
        yield $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->configJs();
        yield "

   ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["js_files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 83
            yield "      <script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 83), (((CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 83) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 83)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 83)) : ([]))), "html", null, true);
            yield "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "
   ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["js_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 87
            yield "      <script type=\"module\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 87), (((CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 87) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 87)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 87)) : ([]))), "html", null, true);
            yield "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "
   ";
        // line 90
        yield $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->localesJs();
        yield "
</head>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/head.html.twig";
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
        return array (  214 => 90,  211 => 89,  202 => 87,  198 => 86,  195 => 85,  186 => 83,  182 => 82,  177 => 80,  172 => 78,  167 => 76,  162 => 74,  159 => 73,  150 => 71,  146 => 70,  141 => 68,  138 => 67,  117 => 65,  112 => 64,  108 => 61,  104 => 58,  100 => 55,  89 => 50,  85 => 48,  79 => 46,  76 => 45,  71 => 43,  66 => 42,  63 => 41,  59 => 39,  56 => 38,  52 => 36,  50 => 35,  46 => 34,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/head.html.twig", "/var/www/html/glpi/templates/layout/parts/head.html.twig");
    }
}
