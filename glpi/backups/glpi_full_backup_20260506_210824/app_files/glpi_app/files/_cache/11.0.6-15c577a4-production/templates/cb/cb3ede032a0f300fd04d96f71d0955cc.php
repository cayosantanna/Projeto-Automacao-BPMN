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

/* layout/parts/user_header.html.twig */
class __TwigTemplate_4211d56feca1ca9941f71e770e292f09 extends Template
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
        $context["rand_header"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        yield "
<div class=\"btn-group\">
   ";
        // line 36
        if ((($tmp =  !(null === ($context["user"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "      <div class=\"navbar-nav flex-row order-md-last user-menu\">
         <div class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link d-flex lh-1 text-reset p-1 dropdown-toggle user-menu-dropdown-toggle ";
            // line 39
            if ((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "bg-red-lt";
            }
            yield "\"
               data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\"
               aria-label=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("User menu"), "html", null, true);
            yield "\">
               ";
            // line 42
            if ((($tmp =  !($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "                  <div class=\"pe-2 d-none d-xl-block\">
                     <div>";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((((CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"), "name", [], "array", true, true, false, 44) &&  !(null === (($_v0 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null)))) ? ((($_v1 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["name"] ?? null) : null)) : (""))), "truncate", [35, "..."], "method", false, false, false, 44), "html", null, true);
                yield "</div>
                     ";
                // line 45
                $context["entity_completename"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_name");
                // line 46
                yield "                     <div class=\"mt-1 small text-muted-menu\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_completename"] ?? null), "html", null, true);
                yield "\"
                          data-testid=\"current-entity\"
                          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
                        ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->truncateLeft(($context["entity_completename"] ?? null)), "html", null, true);
                yield "
                     </div>
                  </div>

                  ";
                // line 53
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" => (($_v2 = CoreExtension::getAttribute($this->env, $this->source,                 // line 54
($context["user"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null), "with_link" => false, "avatar_size" => ""]);
                // line 57
                yield "
               ";
            }
            // line 59
            yield "            </a>
            <div class=\"dropdown-menu dropdown-menu-end mt-1 dropdown-menu-arrow animate__animated animate__fadeInRight\">
               <h6 class=\"dropdown-header\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["user"] ?? null)), "html", null, true);
            yield "</h6>

               ";
            // line 63
            if ((($tmp =  !($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 64
                yield "                  ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/profile_selector.html.twig");
                yield "

                  <div class=\"dropdown-divider\"></div>

                  ";
                // line 68
                if ((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasItemtypeRight("Config", Twig\Extension\CoreExtension::constant("UPDATE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 69
                    yield "                     <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/switchdebug.php"), "html", null, true);
                    yield "\"
                        class=\"dropdown-item ";
                    // line 70
                    if ((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "bg-red-lt";
                    }
                    yield "\"
                        title=\"";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change mode"), "html", null, true);
                    yield "\">
                        <i class=\"ti ti-bug debug\"></i>
                        ";
                    // line 73
                    yield (((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Debug mode enabled"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Debug mode disabled"), "html", null, true)));
                    yield "
                     </a>
                  ";
                }
                // line 76
                yield "               ";
            }
            // line 77
            yield "
               ";
            // line 79
            yield "
               <div class=\"dropdown-item\">
                  <i class=\"ti ti-language\"></i>
                  ";
            // line 82
            yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("User::showSwitchLangForm");
            yield "
               </div>

               <div class=\"dropdown-divider\"></div>

               <a href=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["help_url"] ?? null), "html", null, true);
            yield "\" class=\"dropdown-item\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Help"), "html", null, true);
            yield "\">
                  <i class=\"ti ti-help\"></i>
                  ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Help"), "html", null, true);
            yield "
               </a>

      ";
            // line 92
            if ((($tmp = Session::haveRight("config", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 93
                yield "               <a href=\"#\" class=\"dropdown-item\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("About"), "html", null, true);
                yield "\"
                  id=\"show_about_modal_";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_header"] ?? null), "html", null, true);
                yield "\">
                  <i class=\"ti ti-info-circle\"></i>
                  ";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("About"), "html", null, true);
                yield "
                  ";
                // line 97
                if ((($tmp =  !(null === ($context["found_new_version"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 98
                    yield "                     <span class=\"badge bg-info text-dark ms-2\">
                        1
                     </span>
                  ";
                }
                // line 102
                yield "      ";
            }
            // line 103
            yield "               </a>

               <div class=\"dropdown-divider\"></div>

               <a href=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/preference.php"), "html", null, true);
            yield "\" class=\"dropdown-item\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("My settings"), "html", null, true);
            yield "\">
                  <i class=\"ti ti-user-cog\"></i>
                  ";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("My settings"), "html", null, true);
            yield "
               </a>
               <a href=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/front/logout.php" . (((($tmp = (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiextauth")) ? ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiextauth")) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("?noAUTO=1") : ("")))), "html", null, true);
            yield "\" class=\"dropdown-item\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Logout"), "html", null, true);
            yield "\">
                  <i class=\"ti ti-logout\"></i>
                  ";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Logout"), "html", null, true);
            yield "
               </a>
            </div>
         </div>
      </div>

      ";
            // line 119
            if ((($tmp = Session::haveRight("config", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 120
                yield "      <div class=\"modal fade\" id=\"about_modal_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_header"] ?? null), "html", null, true);
                yield "\" role=\"dialog\">
         <div class=\"modal-dialog\">
            <div class=\"modal-content\">
               <div class=\"modal-header\">
                  <h4 class=\"modal-title\">";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("About"), "html", null, true);
                yield "</h4>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
                yield "\"></button>
               </div>
               <div class=\"modal-body\">
                  ";
                // line 128
                if ((($tmp =  !$this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("\\Glpi\\Toolbox\\VersionParser::isStableRelease", [Twig\Extension\CoreExtension::constant("GLPI_VERSION")])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 129
                    yield "                      <div class='alert alert-important alert-warning d-flex'>
                        <strong>⚠️  ";
                    // line 130
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This version is UNSTABLE and some SECURITY FIXES may not be included."), "html", null, true);
                    yield " ⚠️</strong>
                      </div>
                  ";
                }
                // line 133
                yield "                  <p><a href=\"http://glpi-project.org/\" title=\"Powered by Teclib and contributors\" class=\"copyright\">
                     GLPI ";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GLPI_VERSION"), "html", null, true);
                yield "
                     Copyright (C) 2015-";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GLPI_YEAR"), "html", null, true);
                yield " Teclib' and contributors
                  </a></p>
                  ";
                // line 137
                if ((($tmp =  !(null === ($context["found_new_version"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 138
                    yield "                     <p>
                        <a href=\"http://www.glpi-project.org\" target=\"_blank\"
                           title=\"";
                    // line 140
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You will find it on the GLPI-PROJECT.org site."), "html", null, true);
                    yield "\">
                           ";
                    // line 141
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("A new version is available: %s."), ($context["found_new_version"] ?? null)), "html", null, true);
                    yield "
                           <span class=\"badge bg-info text-dark\">
                              1
                           </span>
                        </a>
                     </p>
                  ";
                }
                // line 148
                yield "               </div>
            </div>
         </div>
      </div>
      ";
            }
            // line 153
            yield "   ";
        }
        // line 154
        yield "</div>

<script type=\"text/javascript\">
\$(function() {
   \$(\"#show_about_modal_";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_header"] ?? null), "html", null, true);
        yield "\").click(function(e) {
      e.preventDefault();
      \$(\"#about_modal_";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_header"] ?? null), "html", null, true);
        yield "\").remove().modal(\"show\");
   });
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
        return "layout/parts/user_header.html.twig";
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
        return array (  320 => 160,  315 => 158,  309 => 154,  306 => 153,  299 => 148,  289 => 141,  285 => 140,  281 => 138,  279 => 137,  274 => 135,  270 => 134,  267 => 133,  261 => 130,  258 => 129,  256 => 128,  250 => 125,  246 => 124,  238 => 120,  236 => 119,  227 => 113,  220 => 111,  215 => 109,  208 => 107,  202 => 103,  199 => 102,  193 => 98,  191 => 97,  187 => 96,  182 => 94,  177 => 93,  175 => 92,  169 => 89,  162 => 87,  154 => 82,  149 => 79,  146 => 77,  143 => 76,  137 => 73,  132 => 71,  126 => 70,  121 => 69,  119 => 68,  111 => 64,  109 => 63,  104 => 61,  100 => 59,  96 => 57,  94 => 54,  93 => 53,  86 => 49,  79 => 46,  77 => 45,  73 => 44,  70 => 43,  68 => 42,  64 => 41,  57 => 39,  53 => 37,  51 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/user_header.html.twig", "/var/www/html/glpi/templates/layout/parts/user_header.html.twig");
    }
}
