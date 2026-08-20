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

/* layout/parts/menu.html.twig */
class __TwigTemplate_7adc365f29d5b28bf995494f81a9f673 extends Template
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
        $context["is_vertical"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getPageLayout() == "vertical");
        // line 34
        $context["is_horizontal"] =  !($context["is_vertical"] ?? null);
        // line 35
        $context["is_menu_folded"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("fold_menu") == "1");
        // line 36
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 37
        yield "
<ul class=\"navbar-nav\" id=\"menu_";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\">
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["firstlevel"]) {
            // line 40
            yield "   ";
            $context["firstlevel_active"] = ((array_key_exists("sector", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", true, true, false, 40)) && (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 40), "title", [], "array", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default((($_v0 = (($_v1 = ($context["menu"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["sector"] ?? null)] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["title"] ?? null) : null), "")) : ("")) == (($_v2 = $context["firstlevel"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["title"] ?? null) : null)));
            // line 41
            yield "   ";
            $context["firstlevel_shown"] = ((($context["firstlevel_active"] ?? null) && ($context["is_vertical"] ?? null)) && (($context["is_menu_folded"] ?? null) == false));
            // line 42
            yield "   ";
            $context["has_subitems"] = false;
            // line 43
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "content", [], "array", true, true, false, 43)) {
                // line 44
                yield "      ";
                // line 45
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v3 = $context["firstlevel"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["content"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["secondlevel"]) {
                    // line 46
                    yield "         ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["secondlevel"], "page", [], "array", true, true, false, 46)) {
                        // line 47
                        yield "            ";
                        $context["has_subitems"] = true;
                        // line 48
                        yield "         ";
                    }
                    // line 49
                    yield "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['secondlevel'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                yield "   ";
            }
            // line 51
            yield "   ";
            if ((($tmp = ($context["has_subitems"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "   <li class=\"nav-item dropdown ";
                yield (((($tmp = ($context["firstlevel_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                yield "\" aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = $context["firstlevel"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["title"] ?? null) : null), "html", null, true);
                yield "\">
      <a class=\"nav-link dropdown-toggle ";
                // line 53
                yield (((($tmp = ($context["firstlevel_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                yield " ";
                yield (((($tmp = ($context["firstlevel_shown"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
                yield "\"
         data-bs-toggle=\"dropdown\" role=\"button\"
         aria-expanded=\"";
                // line 55
                yield (((($tmp = ($context["firstlevel_shown"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield "\">
         <i class=\"";
                // line 56
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "icon", [], "array", true, true, false, 56) &&  !(null === (($_v5 = $context["firstlevel"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["icon"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = $context["firstlevel"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["icon"] ?? null) : null), "html", null, true)) : (""));
                yield "\"></i>
         <span class=\"menu-label\">";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = $context["firstlevel"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["title"] ?? null) : null), "html", null, true);
                yield "</span>
      </a>
      <div class=\"dropdown-menu ";
                // line 59
                yield (((($context["firstlevel_active"] ?? null) && (($context["is_vertical"] ?? null) != false))) ? ("") : ("animate__animated"));
                yield " ";
                yield (((($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("animate__fadeInLeft") : ("animate__zoomIn"));
                yield " ";
                yield (((($tmp = ($context["firstlevel_shown"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
                yield "\">
         <h6 class=\"dropdown-header\">";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = $context["firstlevel"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["title"] ?? null) : null), "html", null, true);
                yield "</h6>
         <div class=\"dropdown-menu-columns\">
            <div class=\"dropdown-menu-column\">
            ";
                // line 63
                $context["has_dashboard"] = CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "default_dashboard", [], "array", true, true, false, 63);
                // line 64
                yield "            ";
                if ((($tmp = ($context["has_dashboard"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 65
                    yield "               <a class=\"dropdown-item\"
                  href=\"";
                    // line 66
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($_v9 = $context["firstlevel"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["default_dashboard"] ?? null) : null)), "html", null, true);
                    yield "\">
                  <i class=\"";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Dashboard\\Dashboard::getIcon"), "html", null, true);
                    yield "\"></i>
                  ";
                    // line 68
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dashboard"), "html", null, true);
                    yield "
               </a>
            ";
                }
                // line 71
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v10 = $context["firstlevel"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["content"] ?? null) : null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["sublevel"]) {
                    // line 72
                    yield "               ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "page", [], "array", true, true, false, 72)) {
                        // line 73
                        yield "               <a class=\"dropdown-item ";
                        yield (((($context["menu_active"] ?? null) == (($_v11 = $context["sublevel"]) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["title"] ?? null) : null))) ? ("active") : (""));
                        yield "\"
                  href=\"";
                        // line 74
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($_v12 = $context["sublevel"]) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["page"] ?? null) : null)), "html", null, true);
                        yield "\"
                  aria-label=\"";
                        // line 75
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v13 = $context["sublevel"]) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["title"] ?? null) : null), "html", null, true);
                        yield "\"
                  accesskey=\"";
                        // line 76
                        yield (((CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "shortcut", [], "array", true, true, false, 76) &&  !(null === (($_v14 = $context["sublevel"]) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["shortcut"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v15 = $context["sublevel"]) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["shortcut"] ?? null) : null), "html", null, true)) : (""));
                        yield "\">
                  <i class=\"";
                        // line 77
                        yield (((CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "icon", [], "array", true, true, false, 77) &&  !(null === (($_v16 = $context["sublevel"]) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["icon"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v17 = $context["sublevel"]) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["icon"] ?? null) : null), "html", null, true)) : (""));
                        yield "\"></i>
                  <span class='text-wrap'>
                     ";
                        // line 79
                        yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->underlineShortcutLetter((($_v18 = $context["sublevel"]) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["title"] ?? null) : null), (((CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "shortcut", [], "array", true, true, false, 79) &&  !(null === (($_v19 = $context["sublevel"]) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["shortcut"] ?? null) : null)))) ? ((($_v20 = $context["sublevel"]) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["shortcut"] ?? null) : null)) : ("")));
                        yield "
                  </span>
               </a>
               ";
                    }
                    // line 83
                    yield "
               ";
                    // line 84
                    $context["count_per_column"] = 6;
                    // line 85
                    yield "               ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 85) % ($context["count_per_column"] ?? null)) == (((($tmp = ($context["has_dashboard"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($context["count_per_column"] ?? null) - 1)) : (0))) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 85))) {
                        // line 86
                        yield "                  </div>
                  <div class=\"dropdown-menu-column\">
               ";
                    }
                    // line 89
                    yield "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['sublevel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                yield "            </div>
         </div>
      </div>
   </li>
   ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 94
$context["firstlevel"], "default", [], "array", true, true, false, 94) && ((((CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "display", [], "array", true, true, false, 94) &&  !(null === (($_v21 = $context["firstlevel"]) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["display"] ?? null) : null)))) ? ((($_v22 = $context["firstlevel"]) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["display"] ?? null) : null)) : (true)) != false))) {
                // line 95
                yield "      <li class=\"nav-item dropdown ";
                yield (((($tmp = ($context["firstlevel_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                yield "\">
         <a class=\"nav-link\" href=\"";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($_v23 = $context["firstlevel"]) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["default"] ?? null) : null)), "html", null, true);
                yield "\">
            <i class=\"";
                // line 97
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "icon", [], "array", true, true, false, 97) &&  !(null === (($_v24 = $context["firstlevel"]) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["icon"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v25 = $context["firstlevel"]) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["icon"] ?? null) : null), "html", null, true)) : (""));
                yield "\"></i>
            <span class=\"menu-label\">";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v26 = $context["firstlevel"]) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["title"] ?? null) : null), "html", null, true);
                yield "</span>
         </a>
      <li>
   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['firstlevel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "</ul>

";
        // line 105
        if ((($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "<script type=\"text/javascript\">
\$(function() {
   // below, some modifications of dropdowns menu behavior
   document.querySelectorAll('#menu_";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield " > .dropdown').forEach(function(menuDropdown) {
      // prevent menu closes
      menuDropdown.addEventListener('hide.bs.dropdown', function (event) {
         var orig_event = event.clickEvent;
         if (typeof orig_event != \"undefined\"
             && typeof orig_event.target != \"undefined\") {
            // prevent body clicking to hide menu
            if (!document.getElementById('menu_";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').contains(orig_event.target)) {
               event.preventDefault();
               return;
            }

            // prevent menu links to close menu (waiting the page redirection)
            if (orig_event.target.className.indexOf('dropdown-item') !== false) {
               for (var item of document.querySelectorAll('#menu_";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield " .dropdown-item')) {
                  item.classList.remove('active');
               }
               orig_event.target.classList.add('active');
               event.preventDefault();
            }
         }
      });

      // opening a sub menu close others
      menuDropdown.addEventListener('show.bs.dropdown', function (event) {
          if (\$('body').hasClass('navbar-collapsed')) {
              // Dropdown submenus will be shown with CSS, and shouldn't be handled by Bootstrap
              event.preventDefault();
              event.stopPropagation();
          }
         \$('#menu_";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield " .nav-link').removeClass('show active');
         \$('#menu_";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield " .nav-item').removeClass('active');
         \$('#menu_";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield " .dropdown-menu').removeClass('show');
      })
   });
});
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
        return "layout/parts/menu.html.twig";
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
        return array (  334 => 141,  330 => 140,  326 => 139,  307 => 123,  297 => 116,  287 => 109,  282 => 106,  280 => 105,  276 => 103,  265 => 98,  261 => 97,  257 => 96,  252 => 95,  250 => 94,  244 => 90,  230 => 89,  225 => 86,  222 => 85,  220 => 84,  217 => 83,  210 => 79,  205 => 77,  201 => 76,  197 => 75,  193 => 74,  188 => 73,  185 => 72,  167 => 71,  161 => 68,  157 => 67,  153 => 66,  150 => 65,  147 => 64,  145 => 63,  139 => 60,  131 => 59,  126 => 57,  122 => 56,  118 => 55,  111 => 53,  104 => 52,  101 => 51,  98 => 50,  92 => 49,  89 => 48,  86 => 47,  83 => 46,  78 => 45,  76 => 44,  73 => 43,  70 => 42,  67 => 41,  64 => 40,  60 => 39,  56 => 38,  53 => 37,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/menu.html.twig", "/var/www/html/glpi/templates/layout/parts/menu.html.twig");
    }
}
