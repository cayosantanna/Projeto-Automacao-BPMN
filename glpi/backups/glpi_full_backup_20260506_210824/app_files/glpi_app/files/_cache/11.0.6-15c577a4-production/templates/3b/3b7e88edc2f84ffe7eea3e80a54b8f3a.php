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

/* layout/page_card_notlogged.html.twig */
class __TwigTemplate_9903f87f16eb7940192b41fc0a56b544 extends Template
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
            'header_block' => [$this, 'block_header_block'],
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $context["theme"] = $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->currentTheme();
        // line 34
        if ((($tmp =  !array_key_exists("css_files", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "   ";
            $context["css_files"] = [["path" => "lib/base.css"], ["path" => "lib/tabler.css"], ["path" => "css/glpi.scss"], ["path" => "css/core_palettes.scss"]];
            // line 41
            yield "
   ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->getCustomThemesPaths());
            foreach ($context['_seq'] as $context["_key"] => $context["theme_path"]) {
                // line 43
                yield "      ";
                $context["css_files"] = Twig\Extension\CoreExtension::merge(($context["css_files"] ?? null), [["path" => $context["theme_path"]]]);
                // line 44
                yield "   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['theme_path'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "
   ";
        }
        // line 48
        if ((($tmp =  !array_key_exists("js_files", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "   ";
            $context["js_files"] = [["path" => "lib/base.js"], ["path" => "js/common.js"], ["path" => "lib/fuzzy.js"]];
        }
        // line 55
        if ((($tmp =  !array_key_exists("js_modules", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "   ";
            $context["js_modules"] = [];
        }
        // line 58
        if ((($tmp =  !array_key_exists("custom_header_tags", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "   ";
            $context["custom_header_tags"] = [];
        }
        // line 61
        yield "
";
        // line 63
        $context["js_files"] = Twig\Extension\CoreExtension::merge(($context["js_files"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsScriptsFiles(true));
        // line 64
        $context["js_modules"] = Twig\Extension\CoreExtension::merge(($context["js_modules"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsModulesFiles(true));
        // line 65
        yield "
";
        // line 66
        $context["is_anonymous_page"] = true;
        // line 67
        yield "
";
        // line 68
        yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/head.html.twig");
        yield "
<body class=\"welcome-anonymous\">
   <div class=\"page-anonymous\">
      <div class=\"flex-fill d-flex flex-column justify-content-center py-4 mt-4\">
         ";
        // line 72
        $context["style"] = null;
        // line 73
        yield "         ";
        if (array_key_exists("card_md_width", $context)) {
            // line 74
            yield "            ";
            $context["style"] = "max-width: 40rem";
            // line 75
            yield "         ";
        }
        // line 76
        yield "         ";
        if (array_key_exists("card_bg_width", $context)) {
            // line 77
            yield "            ";
            $context["style"] = "max-width: 60rem";
            // line 78
            yield "         ";
        }
        // line 79
        yield "
         <div class=\"container-tight py-6\" ";
        // line 80
        if ((($tmp =  !(null === ($context["style"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "style=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["style"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
            <div class=\"text-center\">
               <div class=\"col-md\">
                  <span class=\"glpi-logo mb-4\" title=\"GLPI\"></span>
               </div>
            </div>
            <div class=\"card card-md main-content-card\">
               ";
        // line 88
        yield "               <div class=\"card-header\">";
        yield from $this->unwrap()->yieldBlock('header_block', $context, $blocks);
        yield "</div>
               <div class=\"card-body\">
                  ";
        // line 90
        yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
        // line 91
        yield "               </div>
            </div>

            <div class=\"text-center text-muted mt-3\">
               ";
        // line 95
        yield from $this->unwrap()->yieldBlock('footer_block', $context, $blocks);
        // line 96
        yield "            </div>
         </div>
      </div>
   </div>

   ";
        // line 101
        yield from $this->unwrap()->yieldBlock('javascript_block', $context, $blocks);
        // line 102
        yield "</body>
</html>
";
        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/page_card_notlogged.html.twig";
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
        return array (  215 => 101,  205 => 95,  195 => 90,  185 => 88,  178 => 102,  176 => 101,  169 => 96,  167 => 95,  161 => 91,  159 => 90,  153 => 88,  139 => 80,  136 => 79,  133 => 78,  130 => 77,  127 => 76,  124 => 75,  121 => 74,  118 => 73,  116 => 72,  109 => 68,  106 => 67,  104 => 66,  101 => 65,  99 => 64,  97 => 63,  94 => 61,  90 => 59,  88 => 58,  84 => 56,  82 => 55,  78 => 49,  76 => 48,  72 => 45,  66 => 44,  63 => 43,  59 => 42,  56 => 41,  53 => 35,  51 => 34,  49 => 33,  46 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/page_card_notlogged.html.twig", "/var/www/html/glpi/templates/layout/page_card_notlogged.html.twig");
    }
}
