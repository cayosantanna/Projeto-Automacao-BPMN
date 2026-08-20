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

/* components/user/info_card.html.twig */
class __TwigTemplate_2aefe93159b5fa99dfe05bf3fcbfcdf2 extends Template
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
        $context["enable_anonymization"] = (((array_key_exists("enable_anonymization", $context) &&  !(null === $context["enable_anonymization"]))) ? ($context["enable_anonymization"]) : (false));
        // line 34
        yield "
<div class=\"p-0 user-info-card\">
   <div class=\"row\">
      <div class=\"col-auto pt-1\">
         ";
        // line 38
        if ((($tmp = (($_v0 = ($context["user"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" => (($_v1 =             // line 40
($context["user"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["id"] ?? null) : null), "user_object" => (((            // line 41
array_key_exists("user_object", $context) &&  !(null === $context["user_object"]))) ? ($context["user_object"]) : (null)), "enable_anonymization" =>             // line 42
($context["enable_anonymization"] ?? null)]);
            // line 43
            yield "
         ";
        }
        // line 45
        yield "      </div>
      <div class=\"col ms-2\">
         <h4 class=\"card-title mb-1\">
            ";
        // line 48
        if ((($tmp = (($_v2 = ($context["user"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "               <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("User", (($_v3 = ($context["user"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["id"] ?? null) : null)), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = ($context["user"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["user_name"] ?? null) : null), "html", null, true);
            yield "</a>
            ";
        } else {
            // line 51
            yield "               ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = ($context["user"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["user_name"] ?? null) : null), "html", null, true);
            yield "
            ";
        }
        // line 53
        yield "         </h4>

         <div class=\"text-muted\">
            ";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "login", [], "any", true, true, false, 56) &&  !Twig\Extension\CoreExtension::testEmpty((($_v6 = ($context["user"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["login"] ?? null) : null)))) {
            // line 57
            yield "                <div>
                    <i class=\"ti ti-id-badge\"></i>
                    ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = ($context["user"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["login"] ?? null) : null), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 62
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v8 = ($context["user"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["email"] ?? null) : null)) > 0)) {
            // line 63
            yield "               <div>
                  <i class=\"ti ti-mail\"></i>
                  <a href=\"mailto:";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = ($context["user"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["email"] ?? null) : null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = ($context["user"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["email"] ?? null) : null), "html", null, true);
            yield "</a>
               </div>
            ";
        }
        // line 68
        yield "            ";
        if (( !Twig\Extension\CoreExtension::testEmpty((($_v11 = ($context["user"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["phone"] ?? null) : null)) ||  !Twig\Extension\CoreExtension::testEmpty((($_v12 = ($context["user"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["phone2"] ?? null) : null)))) {
            // line 69
            yield "               <div>
                  ";
            // line 70
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v13 = ($context["user"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["phone"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 71
                yield "                     <i class=\"ti ti-phone\"></i>
                     <a href=\"tel:";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v14 = ($context["user"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["phone"] ?? null) : null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v15 = ($context["user"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["phone"] ?? null) : null), "html", null, true);
                yield "</a>
                  ";
            }
            // line 74
            yield "                  ";
            if (( !Twig\Extension\CoreExtension::testEmpty((($_v16 = ($context["user"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["phone"] ?? null) : null)) &&  !Twig\Extension\CoreExtension::testEmpty((($_v17 = ($context["user"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["phone2"] ?? null) : null)))) {
                // line 75
                yield "                     <span> - </span>
                  ";
            }
            // line 77
            yield "                  ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v18 = ($context["user"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["phone2"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "                     <i class=\"ti ti-phone\"></i>
                     <a href=\"tel:";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v19 = ($context["user"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["phone2"] ?? null) : null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v20 = ($context["user"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["phone2"] ?? null) : null), "html", null, true);
                yield "</a>
                  ";
            }
            // line 81
            yield "               </div>
            ";
        }
        // line 83
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v21 = ($context["user"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["mobile"] ?? null) : null)) > 0)) {
            // line 84
            yield "               <div>
                  <i class=\"ti ti-device-mobile\"></i>
                  <a href=\"tel:";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v22 = ($context["user"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["mobile"] ?? null) : null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v23 = ($context["user"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["mobile"] ?? null) : null), "html", null, true);
            yield "</a>
               </div>
            ";
        }
        // line 89
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v24 = ($context["user"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["registration_number"] ?? null) : null)) > 0)) {
            // line 90
            yield "               <div>
                  <i class=\"ti ti-id-badge-2\"></i>
                  ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v25 = ($context["user"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["registration_number"] ?? null) : null), "html", null, true);
            yield "
               </div>
            ";
        }
        // line 95
        yield "            ";
        if (((($_v26 = ($context["user"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["locations_id"] ?? null) : null) > 0)) {
            // line 96
            yield "               <div title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Location"), "html", null, true);
            yield "\"></i>
                  ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Location", (($_v27 = ($context["user"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["locations_id"] ?? null) : null)), "html", null, true);
            yield "
               </div>
            ";
        }
        // line 101
        yield "            ";
        if (((($_v28 = ($context["user"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["usertitles_id"] ?? null) : null) > 0)) {
            // line 102
            yield "               <div title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("person", "Title"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("UserTitle"), "html", null, true);
            yield "\"></i>
                  ";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("UserTitle", (($_v29 = ($context["user"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["usertitles_id"] ?? null) : null)), "html", null, true);
            yield "
               </div>
            ";
        }
        // line 107
        yield "            ";
        if (((($_v30 = ($context["user"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["usercategories_id"] ?? null) : null) > 0)) {
            // line 108
            yield "               <div title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Category", "Categories", 1), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("UserCategory"), "html", null, true);
            yield "\"></i>
                  ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("UserCategory", (($_v31 = ($context["user"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["usercategories_id"] ?? null) : null)), "html", null, true);
            yield "
               </div>
            ";
        }
        // line 113
        yield "            ";
        if (((($_v32 = ($context["user"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["groups_id"] ?? null) : null) > 0)) {
            // line 114
            yield "               <div title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Default group"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Group"), "html", null, true);
            yield "\"></i>
                  ";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Group", (($_v33 = ($context["user"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["groups_id"] ?? null) : null)), "html", null, true);
            yield "
               </div>
            ";
        }
        // line 119
        yield "         </div>
      </div>

      ";
        // line 122
        if ((($tmp = (((array_key_exists("can_edit", $context) &&  !(null === $context["can_edit"]))) ? ($context["can_edit"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 123
            yield "         <div class=\"col\">
            <a class=\"btn btn-icon btn-sm btn-outline-secondary\" href=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/preference.php"), "html", null, true);
            yield "\"
               title=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\">
               <i class=\"ti ti-user-edit\"></i>
            </a>
         </div>
      ";
        }
        // line 130
        yield "   </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/user/info_card.html.twig";
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
        return array (  282 => 130,  274 => 125,  270 => 124,  267 => 123,  265 => 122,  260 => 119,  254 => 116,  250 => 115,  245 => 114,  242 => 113,  236 => 110,  232 => 109,  227 => 108,  224 => 107,  218 => 104,  214 => 103,  209 => 102,  206 => 101,  200 => 98,  196 => 97,  191 => 96,  188 => 95,  182 => 92,  178 => 90,  175 => 89,  167 => 86,  163 => 84,  160 => 83,  156 => 81,  149 => 79,  146 => 78,  143 => 77,  139 => 75,  136 => 74,  129 => 72,  126 => 71,  124 => 70,  121 => 69,  118 => 68,  110 => 65,  106 => 63,  103 => 62,  97 => 59,  93 => 57,  91 => 56,  86 => 53,  80 => 51,  72 => 49,  70 => 48,  65 => 45,  61 => 43,  59 => 42,  58 => 41,  57 => 40,  55 => 39,  53 => 38,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/user/info_card.html.twig", "/var/www/html/glpi/templates/components/user/info_card.html.twig");
    }
}
