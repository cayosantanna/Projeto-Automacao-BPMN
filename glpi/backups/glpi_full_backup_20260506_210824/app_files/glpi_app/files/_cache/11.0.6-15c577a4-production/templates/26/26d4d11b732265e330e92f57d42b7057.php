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

/* components/form/link_existing_or_new.html.twig */
class __TwigTemplate_b7e92321eb2cbcac9d3a048a0d984bae extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        $context["rand"] = ((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset())));
        // line 36
        yield "<div class=\"mb-3\">
   <form id=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["link_itemtype"] ?? null)) . "_form") . ($context["rand"] ?? null)), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["link_itemtype"] ?? null)) . "_form") . ($context["rand"] ?? null)), "html", null, true);
        yield "\" method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath(($context["link_itemtype"] ?? null)), "html", null, true);
        yield "\">
      ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_label"] ?? null), "html", null, true);
        yield "
      ";
        // line 39
        if ((($tmp = (((array_key_exists("generic_source", $context) &&  !(null === $context["generic_source"]))) ? ($context["generic_source"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "          ";
            yield $macros["fields"]->getTemplateForMacro("macro_hiddenField", $context, 40, $this->getSourceContext())->macro_hiddenField(...["itemtype", ($context["source_itemtype"] ?? null)]);
            yield "
          ";
            // line 41
            yield $macros["fields"]->getTemplateForMacro("macro_hiddenField", $context, 41, $this->getSourceContext())->macro_hiddenField(...["items_id", ($context["source_items_id"] ?? null)]);
            yield "
      ";
        } else {
            // line 43
            yield "          ";
            yield $macros["fields"]->getTemplateForMacro("macro_hiddenField", $context, 43, $this->getSourceContext())->macro_hiddenField(...[$this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey(($context["source_itemtype"] ?? null)), ($context["source_items_id"] ?? null)]);
            yield "
      ";
        }
        // line 45
        yield "      <div class=\"d-flex\">
      ";
        // line 46
        if ((($tmp = (((array_key_exists("generic_target", $context) &&  !(null === $context["generic_target"]))) ? ($context["generic_target"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "          ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemsFromItemtypes", $context, 47, $this->getSourceContext())->macro_dropdownItemsFromItemtypes(...["items_id", "", Twig\Extension\CoreExtension::merge(["itemtypes" =>             // line 48
($context["link_types"] ?? null), "used" => (((            // line 49
array_key_exists("used", $context) &&  !(null === $context["used"]))) ? ($context["used"]) : ([])), "field_class" => "d-flex", "width" => "auto", "mb" => "", "no_label" => true],             // line 54
($context["dropdown_options"] ?? null))]);
            yield "
      ";
        } else {
            // line 56
            yield "          ";
            $context["primary_dropdown_itemtype"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["dropdown_options"] ?? null), "itemtype", [], "array", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["dropdown_options"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["itemtype"] ?? null) : null), ($context["target_itemtype"] ?? null))) : (($context["target_itemtype"] ?? null)));
            // line 57
            yield "          ";
            if ((array_key_exists("link_types", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["link_types"] ?? null)))) {
                // line 58
                yield "            <div class=\"col-auto\">
               ";
                // line 59
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 59, $this->getSourceContext())->macro_dropdownArrayField(...["link", Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["link_types"] ?? null)), ($context["link_types"] ?? null), "", ["no_label" => true, "field_class" => ""]]);
                // line 62
                yield "
            </div>
         ";
            }
            // line 65
            yield "         <div class=\"col-auto\">
            ";
            // line 66
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 66, $this->getSourceContext())->macro_dropdownField(...[($context["primary_dropdown_itemtype"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey(($context["primary_dropdown_itemtype"] ?? null)), "", "", Twig\Extension\CoreExtension::merge(["no_label" => true, "field_class" => "", "rand" =>             // line 69
($context["rand"] ?? null)],             // line 70
($context["dropdown_options"] ?? null))]);
            yield "
            ";
            // line 71
            if (array_key_exists("ajax_dropdown", $context)) {
                // line 72
                yield "               ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [(($_v1 =                 // line 73
($context["ajax_dropdown"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["toobserve"] ?? null) : null), (($_v2 = (($_v3 =                 // line 74
($context["ajax_dropdown"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["toupdate"] ?? null) : null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null), (($_v4 =                 // line 75
($context["ajax_dropdown"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["url"] ?? null) : null), (($_v5 =                 // line 76
($context["ajax_dropdown"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["params"] ?? null) : null)]);
                // line 78
                yield "            ";
            }
            // line 79
            yield "            ";
            if (array_key_exists("ajax_dropdown", $context)) {
                // line 80
                yield "               <span id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = (($_v7 = ($context["ajax_dropdown"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["toupdate"] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["id"] ?? null) : null), "html", null, true);
                yield "\">
                  ";
                // line 81
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 81, $this->getSourceContext())->macro_dropdownField(...[(($_v8 = (($_v9 = ($context["ajax_dropdown"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["toupdate"] ?? null) : null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["itemtype"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey((($_v10 = (($_v11 = ($context["ajax_dropdown"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["toupdate"] ?? null) : null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["itemtype"] ?? null) : null)), "", "", Twig\Extension\CoreExtension::merge(["no_label" => true, "field_class" => "", "rand" =>                 // line 84
($context["rand"] ?? null)], (($_v12 = (($_v13 =                 // line 85
($context["ajax_dropdown"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["toupdate"] ?? null) : null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["params"] ?? null) : null))]);
                yield "
               </span>
            ";
            }
            // line 88
            yield "         </div>
      ";
        }
        // line 90
        yield "         <div class=\"col-auto\">
            <button class=\"btn btn-primary ms-1\" type=\"submit\" name=\"add\">
               <i class=\"";
        // line 92
        yield (((array_key_exists("add_button_icon", $context) &&  !(null === $context["add_button_icon"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["add_button_icon"], "html", null, true)) : ("ti ti-link"));
        yield "\"></i>
               <span>";
        // line 93
        yield (((array_key_exists("add_button_label", $context) &&  !(null === $context["add_button_label"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["add_button_label"], "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true)));
        yield "</span>
            </button>
         </div>
         ";
        // line 96
        if ((($tmp = (((array_key_exists("create_link", $context) &&  !(null === $context["create_link"]))) ? ($context["create_link"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "         <div class=\"col-auto ms-4\">
               ";
            // line 98
            $context["target_form_path"] = (((($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath(($context["target_itemtype"] ?? null)) . "?_") . $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey(($context["source_itemtype"] ?? null))) . "=") . ($context["source_items_id"] ?? null));
            // line 99
            yield "               ";
            $context["create_url"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["create_link"] ?? null), "url", [], "array", true, true, false, 99)) ? ((($_v14 = ($context["create_link"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["url"] ?? null) : null)) : (($context["target_form_path"] ?? null)));
            // line 100
            yield "               <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["create_url"] ?? null), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                  <i class=\"ti ti-plus\"></i>
                  <span>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_label"] ?? null), "html", null, true);
            yield "</span>
               </a>
         </div>
         ";
        }
        // line 106
        yield "      </div>
      ";
        // line 107
        yield $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 107, $this->getSourceContext())->macro_csrfField(...[]);
        yield "
   </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/link_existing_or_new.html.twig";
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
        return array (  196 => 107,  193 => 106,  186 => 102,  180 => 100,  177 => 99,  175 => 98,  172 => 97,  170 => 96,  164 => 93,  160 => 92,  156 => 90,  152 => 88,  146 => 85,  145 => 84,  144 => 81,  139 => 80,  136 => 79,  133 => 78,  131 => 76,  130 => 75,  129 => 74,  128 => 73,  126 => 72,  124 => 71,  120 => 70,  119 => 69,  118 => 66,  115 => 65,  110 => 62,  108 => 59,  105 => 58,  102 => 57,  99 => 56,  94 => 54,  93 => 49,  92 => 48,  90 => 47,  88 => 46,  85 => 45,  79 => 43,  74 => 41,  69 => 40,  67 => 39,  63 => 38,  55 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/link_existing_or_new.html.twig", "/var/www/html/glpi/templates/components/form/link_existing_or_new.html.twig");
    }
}
