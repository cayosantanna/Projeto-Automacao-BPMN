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

/* components/itilobject/timeline/timeline_item_header_badges.html.twig */
class __TwigTemplate_acc2f1c6db2dce50211d618d40412baa extends Template
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
        $context["timeline_display_date"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpitimeline_date_format");
        // line 34
        yield "
<span class=\"badge user-select-auto text-wrap d-none d-md-block\">
   ";
        // line 36
        $context["date_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 37
            yield "      <span
         ";
            // line 38
            if ((($context["timeline_display_date"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE"))) {
                // line 39
                yield "            title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_creation"] ?? null)), "html", null, true);
                yield "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
         ";
            }
            // line 42
            yield "      >
         <i class=\"ti ti-clock me-1\"></i>
         <a href=\"#";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["anchor"] ?? null), "html", null, true);
            yield "\">
            ";
            // line 45
            if ((($context["timeline_display_date"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE"))) {
                // line 46
                yield "               ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_creation"] ?? null)), "html", null, true);
                yield "
            ";
            } else {
                // line 48
                yield "               ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_creation"] ?? null)), "html", null, true);
                yield "
            ";
            }
            // line 50
            yield "         </a>
      </span>
   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "
   ";
        // line 54
        $context["is_validation_answer"] = ((array_key_exists("entry", $context) && (is_string($_v0 = (($_v2 = ($context["entry"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["type"] ?? null) : null)) && is_string($_v1 = "Validation") && str_ends_with($_v0, $_v1))) && ((($_v3 = ($context["entry"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["item_action"] ?? null) : null) == "validation-answer"));
        // line 55
        yield "   ";
        if ((($context["is_validation_answer"] ?? null) && ((($_v4 = (($_v5 = ($context["entry"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["item"] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["itemtype_target"] ?? null) : null) == "Group"))) {
            // line 56
            yield "      ";
            $context["creator_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 57
                yield "         ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>                 // line 58
($context["users_id"] ?? null), "user_object" =>                 // line 59
($context["user_object"] ?? null), "enable_anonymization" => (((                // line 60
array_key_exists("anonym_user", $context) &&  !(null === $context["anonym_user"]))) ? ($context["anonym_user"]) : (false))], false);
                // line 61
                yield "
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 63
            yield "      ";
            $context["group_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 64
                yield "         <span id=\"group_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
                yield "\">
            <i class=\"ti ti-users ms-1\"></i>
            ";
                // line 66
                yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Group", (($_v6 = (($_v7 = ($context["entry"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["item"] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["items_id_target"] ?? null) : null), ["enable_anonymization" =>                 // line 67
($context["enable_anonymization"] ?? null)]);
                // line 68
                yield "
         </span>
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 71
            yield "
      ";
            // line 72
            yield Twig\Extension\CoreExtension::sprintf(__("Created: %1\$s by %2\$s for the group %3\$s"), ($context["date_span"] ?? null), ($context["creator_span"] ?? null), ($context["group_span"] ?? null));
            yield "
   ";
        } elseif ((        // line 73
array_key_exists("entry", $context) && ((($_v8 = ($context["entry"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["type"] ?? null) : null) == "ITILReminder"))) {
            // line 74
            yield "      ";
            yield ($context["date_span"] ?? null);
            yield "
   ";
        } else {
            // line 76
            yield "      ";
            if ((($context["users_id"] ?? null) > 0)) {
                // line 77
                yield "         ";
                $context["creator_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 78
                    yield "            ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>                     // line 79
($context["users_id"] ?? null), "enable_anonymization" => (((                    // line 80
array_key_exists("anonym_user", $context) &&  !(null === $context["anonym_user"]))) ? ($context["anonym_user"]) : (false))], false);
                    // line 81
                    yield "
         ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 83
                yield "
         ";
                // line 84
                yield Twig\Extension\CoreExtension::sprintf(__("Created: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["creator_span"] ?? null));
                yield "
      ";
            } else {
                // line 86
                yield "         ";
                yield Twig\Extension\CoreExtension::sprintf(__("Created: %1\$s"), ($context["date_span"] ?? null));
                yield "
      ";
            }
            // line 88
            yield "   ";
        }
        // line 89
        yield "</span>

";
        // line 91
        if (((($context["users_id_editor"] ?? null) > 0) && (($context["date_creation"] ?? null) != ($context["date_mod"] ?? null)))) {
            // line 92
            yield "   <span class=\"badge user-select-auto text-wrap ms-1 d-none d-md-block\">
      ";
            // line 93
            $context["date_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 94
                yield "         <span
            ";
                // line 95
                if ((($context["timeline_display_date"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE"))) {
                    // line 96
                    yield "               title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_mod"] ?? null)), "html", null, true);
                    yield "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
            ";
                }
                // line 99
                yield "         >
            <i class=\"ti ti-clock me-1\"></i>
            ";
                // line 101
                if ((($context["timeline_display_date"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE"))) {
                    // line 102
                    yield "               ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_mod"] ?? null)), "html", null, true);
                    yield "
            ";
                } else {
                    // line 104
                    yield "               ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_mod"] ?? null)), "html", null, true);
                    yield "
            ";
                }
                // line 106
                yield "         </span>
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 108
            yield "
      ";
            // line 109
            $context["is_current_editor"] = (($context["users_id_editor"] ?? null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
            // line 110
            yield "      ";
            $context["anonym_editor"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_editor"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != Twig\Extension\CoreExtension::constant("Entity::ANONYMIZE_DISABLED")));
            // line 111
            yield "      ";
            $context["editor_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 112
                yield "         ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>                 // line 113
($context["users_id_editor"] ?? null), "user_object" => (((                // line 114
($context["users_id"] ?? null) == ($context["users_id_editor"] ?? null))) ? ((((array_key_exists("user_object", $context) &&  !(null === $context["user_object"]))) ? ($context["user_object"]) : (null))) : (null)), "enable_anonymization" =>                 // line 115
($context["anonym_editor"] ?? null)], false);
                // line 116
                yield "
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 118
            yield "
      ";
            // line 119
            yield Twig\Extension\CoreExtension::sprintf(__("Last update: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["editor_span"] ?? null));
            yield "
   </span>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/timeline_item_header_badges.html.twig";
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
        return array (  252 => 119,  249 => 118,  244 => 116,  242 => 115,  241 => 114,  240 => 113,  238 => 112,  235 => 111,  232 => 110,  230 => 109,  227 => 108,  222 => 106,  216 => 104,  210 => 102,  208 => 101,  204 => 99,  197 => 96,  195 => 95,  192 => 94,  190 => 93,  187 => 92,  185 => 91,  181 => 89,  178 => 88,  172 => 86,  167 => 84,  164 => 83,  159 => 81,  157 => 80,  156 => 79,  154 => 78,  151 => 77,  148 => 76,  142 => 74,  140 => 73,  136 => 72,  133 => 71,  127 => 68,  125 => 67,  124 => 66,  118 => 64,  115 => 63,  110 => 61,  108 => 60,  107 => 59,  106 => 58,  104 => 57,  101 => 56,  98 => 55,  96 => 54,  93 => 53,  87 => 50,  81 => 48,  75 => 46,  73 => 45,  69 => 44,  65 => 42,  58 => 39,  56 => 38,  53 => 37,  51 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/timeline_item_header_badges.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/timeline_item_header_badges.html.twig");
    }
}
