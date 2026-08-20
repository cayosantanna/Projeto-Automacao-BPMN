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

/* components/itilobject/timeline/timeline_item_header.html.twig */
class __TwigTemplate_ec59362661690ff3df5b1bbc417279cf extends Template
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
<div class=\"d-flex timeline-header\">
   <div class=\"d-flex creator\">
      ";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/timeline_item_header_badges.html.twig", ["users_id" =>         // line 36
($context["users_id"] ?? null), "user_object" =>         // line 37
($context["user_object"] ?? null), "date_creation" =>         // line 38
($context["date_creation"] ?? null), "date_mod" =>         // line 39
($context["date_mod"] ?? null), "users_id_editor" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["entry_i"] ?? null), "users_id_editor", [], "array", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["entry_i"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["users_id_editor"] ?? null) : null), null)) : (null)), "anchor" => (((($_v1 =         // line 41
($context["entry"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["type"] ?? null) : null) . "_") . (($_v2 = ($context["entry_i"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null)), "anonym_user" =>         // line 42
($context["anonym_user"] ?? null), "entry" =>         // line 43
($context["entry"] ?? null)], false);
        // line 44
        yield "
   </div>

   <div class=\"d-flex ms-auto timeline-item-buttons\">
      ";
        // line 48
        $context["actions"] = [];
        // line 49
        yield "      ";
        if ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "can_edit", [], "array", true, true, false, 49) &&  !(null === (($_v3 = ($context["entry_i"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["can_edit"] ?? null) : null)))) ? ((($_v4 = ($context["entry_i"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["can_edit"] ?? null) : null)) : (false)) &&  !($context["status_closed"] ?? null)) &&  !CoreExtension::inFilter((($_v5 = ($context["entry"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["type"] ?? null) : null), ["Document_Item", "Assign"]))) {
            // line 50
            yield "         ";
            $context["edit_btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 51
                yield "            <li>
               <a class=\"dropdown-item edit-timeline-item\" href=\"#\">
                  <i class=\"ti ti-edit\"></i>
                  <span>";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit"), "html", null, true);
                yield "</span>
               </a>
            </li>
         ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 58
            yield "         ";
            $context["actions"] = Twig\Extension\CoreExtension::merge(($context["actions"] ?? null), ["edit_btn" => ($context["edit_btn"] ?? null)]);
            // line 59
            yield "      ";
        }
        // line 60
        yield "
      ";
        // line 61
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "can_promote", [], "array", true, true, false, 61) &&  !(null === (($_v6 = ($context["entry_i"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["can_promote"] ?? null) : null)))) ? ((($_v7 = ($context["entry_i"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["can_promote"] ?? null) : null)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "         ";
            if (((($_v8 = ($context["entry_i"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["sourceof_items_id"] ?? null) : null) > 0)) {
                // line 63
                yield "            ";
                $context["promoted_btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 64
                    yield "               <li>
                  <a class=\"dropdown-item text-warning\" href=\"";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket", (($_v9 = ($context["entry_i"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["sourceof_items_id"] ?? null) : null)), "html", null, true);
                    yield "\">
                     <i class=\"ti ti-git-branch\"></i>
                     <span>";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%s was already promoted"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($_v10 = ($context["entry"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["type"] ?? null) : null))), "html", null, true);
                    yield "</span>
                  </a>
               </li>
            ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 71
                yield "            ";
                $context["actions"] = Twig\Extension\CoreExtension::merge(($context["actions"] ?? null), ["promoted_btn" => ($context["promoted_btn"] ?? null)]);
                // line 72
                yield "         ";
            } else {
                // line 73
                yield "            ";
                $context["promote_url"] = ("?_promoted_fup_id=" . (($_v11 = ($context["entry_i"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["id"] ?? null) : null));
                // line 74
                yield "            ";
                if (((($_v12 = ($context["entry"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["type"] ?? null) : null) === "TicketTask")) {
                    // line 75
                    yield "               ";
                    $context["promote_url"] = ("?_promoted_task_id=" . (($_v13 = ($context["entry_i"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["id"] ?? null) : null));
                    // line 76
                    yield "            ";
                }
                // line 77
                yield "
            ";
                // line 78
                $context["promote_btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 79
                    yield "               <li>
                  <a class=\"dropdown-item\" href=\"";
                    // line 80
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket") . ($context["promote_url"] ?? null)), "html", null, true);
                    yield "\">
                     <i class=\"ti ti-git-branch\"></i>
                     <span>";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Promote to Ticket"), "html", null, true);
                    yield "</span>
                  </a>
               </li>
            ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 86
                yield "            ";
                $context["actions"] = Twig\Extension\CoreExtension::merge(($context["actions"] ?? null), ["promote_btn" => ($context["promote_btn"] ?? null)]);
                // line 87
                yield "         ";
            }
            // line 88
            yield "      ";
        }
        // line 89
        yield "
      ";
        // line 90
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["actions"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "         <div class=\"dropdown ms-2\">
            <button class=\"btn btn-sm btn-ghost-secondary timeline-more-actions\" type=\"button\" id=\"more-actions-";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_rand"] ?? null), "html", null, true);
            yield "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
               <i class=\"ti ti-dots-vertical\"></i>
            </button>
            <ul class=\"dropdown-menu\" aria-labelledby=\"more-actions-";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_rand"] ?? null), "html", null, true);
            yield "\">
               ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 97
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"], "html", null, true);
                yield "
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "            </ul>
         </div>
      ";
        }
        // line 102
        yield "
      ";
        // line 103
        if ((($tmp = ($context["is_private"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 104
            yield "         <span class=\"is-private ms-2\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This entry is \"internal\" (visible only to technicians)"), "html", null, true);
            yield "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
            <i class=\"ti ti-eye-off\" aria-label=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Private"), "html", null, true);
            yield "\"></i>
         </span>
      ";
        }
        // line 109
        yield "   </div>

   <button class=\"btn btn-sm btn-ghost-secondary close-edit-content d-none ms-auto\">
      <i class=\"ti ti-x\"></i>
   </button>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/timeline_item_header.html.twig";
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
        return array (  218 => 109,  212 => 106,  206 => 104,  204 => 103,  201 => 102,  196 => 99,  187 => 97,  183 => 96,  179 => 95,  173 => 92,  170 => 91,  168 => 90,  165 => 89,  162 => 88,  159 => 87,  156 => 86,  148 => 82,  143 => 80,  140 => 79,  138 => 78,  135 => 77,  132 => 76,  129 => 75,  126 => 74,  123 => 73,  120 => 72,  117 => 71,  109 => 67,  104 => 65,  101 => 64,  98 => 63,  95 => 62,  93 => 61,  90 => 60,  87 => 59,  84 => 58,  76 => 54,  71 => 51,  68 => 50,  65 => 49,  63 => 48,  57 => 44,  55 => 43,  54 => 42,  53 => 41,  52 => 40,  51 => 39,  50 => 38,  49 => 37,  48 => 36,  47 => 35,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/timeline_item_header.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/timeline_item_header.html.twig");
    }
}
