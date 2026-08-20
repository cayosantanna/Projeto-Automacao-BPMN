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

/* layout/parts/page_header.html.twig */
class __TwigTemplate_d20569a50080b5de7e2cba2b5065b583 extends Template
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
        $context["anonymous"] = (null === $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"));
        // line 34
        yield "
";
        // line 35
        $context["is_vertical"] = ( !($context["anonymous"] ?? null) && ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getPageLayout() == "vertical"));
        // line 36
        $context["is_horizontal"] =  !($context["is_vertical"] ?? null);
        // line 37
        $context["is_helpdesk"] = (($context["anonymous"] ?? null) || ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk"));
        // line 38
        yield "
<body class=\"";
        // line 39
        yield ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("fold_menu") && ($context["is_vertical"] ?? null))) ? ("navbar-collapsed") : (""));
        yield " ";
        yield (((($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("vertical-layout") : ("horizontal-layout"));
        yield " ";
        yield (((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("debug-active") : (""));
        yield " ";
        yield (((($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("helpdesk") : ("central"));
        yield "\">
   ";
        // line 40
        if ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("DBConnection::isDbAvailable") && Twig\Extension\CoreExtension::constant("GLPI_SKIP_UPDATES", null, true)) &&  !$this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Update::isDbUpToDate"))) {
            // line 41
            yield "      <div class=\"banner-need-update\">
         ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You are bypassing a needed update"), "html", null, true);
            yield "
      </div>
   ";
        }
        // line 45
        yield "   ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/impersonate_banner.html.twig");
        yield "
   ";
        // line 46
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/messages_after_redirect_toasts.html.twig", ["display_container" => true]);
        yield "

   <div class=\"page\">

      ";
        // line 50
        if ((($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "      <aside class=\"navbar navbar-vertical navbar-expand-lg sticky-lg-top sidebar\">
         <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
               <span class=\"navbar-toggler-icon\"></span>
            </button>

            <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
            yield "\" accesskey=\"1\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Home"), "html", null, true);
            yield "\"
               class=\"navbar-brand\">
               <span class=\"glpi-logo\"></span>
            </a>

            ";
            // line 62
            if ((($tmp =  !($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "               <span class=\"d-none d-lg-inline-block\">
                   ";
                // line 64
                yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/goto_button.html.twig");
                yield "
               </span>
            ";
            }
            // line 67
            yield "
            ";
            // line 68
            if ((($tmp =  !(null === ($context["user"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 69
                yield "               ";
                // line 70
                yield "               <div class=\"d-lg-none\">
                  ";
                // line 71
                yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/user_header.html.twig");
                yield "
               </div>
            ";
            }
            // line 74
            yield "
            ";
            // line 75
            if ((($tmp =  !($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 76
                yield "               <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                   <span class=\"d-inline-block d-lg-none ms-2\">
                       ";
                // line 78
                yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/goto_button.html.twig");
                yield "
                   </span>
                   ";
                // line 80
                yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/menu.html.twig");
                yield "


                  <p class=\"text-start\">
                     <button class=\"btn btn-sm btn-ghost-secondary  ";
                // line 84
                yield (((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("mb-4") : ("mb-2"));
                yield " mx-auto reduce-menu d-none d-md-block\">
                        <span class=\"menu-label\">";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Collapse menu"), "html", null, true);
                yield "</span>
                     </button>
                  </p>
               </div>
            ";
            }
            // line 90
            yield "         </div>
      </aside>
      ";
        }
        // line 93
        yield "
      <header class=\"navbar d-print-none sticky-lg-top shadow-sm ";
        // line 94
        yield (((($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("navbar-light navbar-expand-md") : ("navbar-dark navbar-expand-xl topbar"));
        yield "\">
         ";
        // line 96
        yield "         <div class=\"header-container container-fluid flex-xl-nowrap pe-xl-0 ";
        yield (((($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("container-xl") : (""));
        yield "\">
            ";
        // line 97
        if ((($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "               ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/breadcrumbs.html.twig");
            yield "

                <div class=\"ms-lg-auto d-none d-lg-block flex-grow-1 flex-lg-grow-0\">
                     ";
            // line 101
            yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/global_search_form.html.twig");
            yield "
                </div>

            ";
        } elseif ((($tmp =         // line 104
($context["is_horizontal"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "               <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
                  <span class=\"navbar-toggler-icon\"></span>
               </button>

               <a href=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
            yield "\" accesskey=\"1\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Home"), "html", null, true);
            yield "\"
                  class=\"navbar-brand\">
                  <span class=\"glpi-logo\"></span>
               </a>

               <div class=\"d-lg-none\">
                  ";
            // line 115
            yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/user_header.html.twig");
            yield "
               </div>

               ";
            // line 118
            if (( !($context["anonymous"] ?? null) || ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["menu"] ?? null)) > 0) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "home", [], "any", true, true, false, 118)))) {
                // line 119
                yield "               <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbar-menu\">
                  ";
                // line 120
                yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/menu.html.twig");
                yield "
                  ";
                // line 121
                if ((($tmp =  !($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 122
                    yield "                  <span class=\"ms-xl-2 d-inline-block mt-2 mt-xl-2\">
                     ";
                    // line 123
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/goto_button.html.twig");
                    yield "
                  </span>
                  ";
                }
                // line 126
                yield "               </div>
               ";
            }
            // line 128
            yield "            ";
        }
        // line 129
        yield "
            <div class=\"ms-md-4 d-none d-lg-block\">
               ";
        // line 131
        yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/user_header.html.twig");
        yield "
            </div>
         </div>
      </header>

      ";
        // line 137
        yield "      ";
        if ((($context["is_horizontal"] ?? null) &&  !($context["is_helpdesk"] ?? null))) {
            // line 138
            yield "      <div class=\"navbar navbar-expand-md navbar-light secondary-bar sticky-md-top shadow-sm\">
         <div class=\"container-fluid justify-content-start\">
            ";
            // line 140
            yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/breadcrumbs.html.twig");
            yield "
            <div class=\"ms-md-auto d-none d-md-block flex-grow-1 flex-md-grow-0\">
                ";
            // line 142
            yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/global_search_form.html.twig");
            yield "
            </div>
         </div>
      </div>
      ";
        }
        // line 147
        yield "
      <div class=\"page-wrapper mb-0\">
         <div class=\"page-body container-fluid ";
        // line 149
        yield (((($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("container-xl") : (""));
        yield "\">
            <main role=\"main\" id=\"page\" class=\"legacy\">
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/page_header.html.twig";
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
        return array (  292 => 149,  288 => 147,  280 => 142,  275 => 140,  271 => 138,  268 => 137,  260 => 131,  256 => 129,  253 => 128,  249 => 126,  243 => 123,  240 => 122,  238 => 121,  234 => 120,  231 => 119,  229 => 118,  223 => 115,  212 => 109,  206 => 105,  204 => 104,  198 => 101,  191 => 98,  189 => 97,  184 => 96,  180 => 94,  177 => 93,  172 => 90,  164 => 85,  160 => 84,  153 => 80,  148 => 78,  144 => 76,  142 => 75,  139 => 74,  133 => 71,  130 => 70,  128 => 69,  126 => 68,  123 => 67,  117 => 64,  114 => 63,  112 => 62,  102 => 57,  94 => 51,  92 => 50,  85 => 46,  80 => 45,  74 => 42,  71 => 41,  69 => 40,  59 => 39,  56 => 38,  54 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/page_header.html.twig", "/var/www/html/glpi/templates/layout/parts/page_header.html.twig");
    }
}
