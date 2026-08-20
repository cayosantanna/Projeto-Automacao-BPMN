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

/* components/itilobject/timeline/form_document_item.html.twig */
class __TwigTemplate_b5d279d91ed14e68cc97443467356e2e extends Template
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

        $this->blocks = [
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 33
        $this->parent = $this->load("components/itilobject/timeline/form_timeline_item.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_timeline_card(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "    ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 38
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/sub_documents.html.twig", ["entry" => ["documents" => [            // line 40
($context["entry"] ?? null)]], "item" =>             // line 42
($context["item"] ?? null)], false);
            // line 43
            yield "
    ";
        } else {
            // line 45
            yield "        <div class=\"document_item\">
            <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
                  action=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Document"), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
                <input type=\"hidden\" name=\"entities_id\" value=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 48), "html", null, true);
            yield "\" />
                <input type=\"hidden\" name=\"is_recursive\" value=\"";
            // line 49
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
            yield "\" />
                <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 50), "html", null, true);
            yield "\" />
                <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null), "html", null, true);
            yield "\" />
                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
                ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "

                ";
            // line 55
            $context["can_screenshot"] =  !Twig\Extension\CoreExtension::testEmpty($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Document::isValidDoc", [".png"]));
            // line 56
            yield "                ";
            $context["can_screenrecord"] =  !Twig\Extension\CoreExtension::testEmpty($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Document::isValidDoc", [".webm"]));
            // line 57
            yield "
                ";
            // line 58
            if ((($context["can_screenshot"] ?? null) || ($context["can_screenrecord"] ?? null))) {
                // line 59
                yield "                    <div class=\"upload-from-section d-none\">
                        <label id=\"upload_source_label\" class=\"form-label\">";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Upload from"), "html", null, true);
                yield "</label>
                        <div class=\"d-inline\" role=\"group\" aria-labelledby=\"upload_source_label\">
                            ";
                // line 62
                if ((($tmp = ($context["can_screenshot"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 63
                    yield "                                <button class=\"btn btn-sm btn-secondary me-2 d-none\" type=\"button\" name=\"add_screenshot\">
                                    <i class=\"ti ti-photo\"></i>
                                    <span>";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Screenshot"), "html", null, true);
                    yield "</span>
                                </button>
                            ";
                }
                // line 68
                yield "                            ";
                if ((($tmp = ($context["can_screenrecord"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 69
                    yield "                                <button class=\"btn btn-sm btn-secondary me-2 d-none\" type=\"button\" name=\"add_screenrecording\">
                                    <i class=\"ti ti-camera\"></i>
                                    <span>";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Screen recording"), "html", null, true);
                    yield "</span>
                                </button>
                            ";
                }
                // line 74
                yield "                        </div>
                        <div id=\"screen_capture_preview\" class=\"w-100\">
                            <div class=\"previews overflow-x-auto my-2 d-flex px-2\"></div>
                            <button type=\"button\" name=\"stop_recording\" class=\"btn btn-secondary d-none\">";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Stop recording"), "html", null, true);
                yield "</button>
                        </div>
                        <hr class=\"my-1\">
                    </div>
                ";
            }
            // line 82
            yield "                ";
            if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
                // line 83
                yield "                    ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 83, $this->getSourceContext())->macro_dropdownField(...["DocumentCategory", "documentcategories_id", null, __("Heading"), ["full_width" => true, "is_horizontal" => false]]);
                // line 92
                yield "
                ";
            }
            // line 94
            yield "
                ";
            // line 95
            yield $macros["fields"]->getTemplateForMacro("macro_fileField", $context, 95, $this->getSourceContext())->macro_fileField(...["filename", null, __("File"), ["multiple" => true, "full_width" => true, "is_horizontal" => false]]);
            // line 104
            yield "

                ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "

                <div class=\"d-flex card-footer mx-n3 mb-n3\">
                    ";
            // line 109
            if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 109), "id", [], "array", true, true, false, 109) &&  !(null === (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 109)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["id"] ?? null) : null)))) ? ((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 109)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null)) : (0)) <= 0)) {
                // line 110
                yield "                        <div class=\"input-group\">
                            <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                                <i class=\"ti ti-file-plus\"></i>
                                <span>";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add a new file"), "html", null, true);
                yield "</span>
                            </button>
                        </div>
                    ";
            }
            // line 117
            yield "                </div>
            </form>
        </div>
        <script type=\"module\">
            import('/js/modules/ITIL/Timeline/DocumentForm.js');
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
        return "components/itilobject/timeline/form_document_item.html.twig";
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
        return array (  201 => 117,  194 => 113,  189 => 110,  187 => 109,  181 => 106,  177 => 104,  175 => 95,  172 => 94,  168 => 92,  165 => 83,  162 => 82,  154 => 77,  149 => 74,  143 => 71,  139 => 69,  136 => 68,  130 => 65,  126 => 63,  124 => 62,  119 => 60,  116 => 59,  114 => 58,  111 => 57,  108 => 56,  106 => 55,  101 => 53,  97 => 52,  93 => 51,  89 => 50,  85 => 49,  81 => 48,  77 => 47,  73 => 45,  69 => 43,  67 => 42,  66 => 40,  64 => 38,  61 => 37,  54 => 36,  49 => 33,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/form_document_item.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/form_document_item.html.twig");
    }
}
