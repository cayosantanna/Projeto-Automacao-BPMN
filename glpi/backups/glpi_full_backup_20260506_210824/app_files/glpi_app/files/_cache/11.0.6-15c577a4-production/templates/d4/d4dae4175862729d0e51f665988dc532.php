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

/* pages/admin/user/user_picture_field.html.twig */
class __TwigTemplate_8ddd995c1a3ce3d11bf72eaa7f2d2c0e extends Template
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
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 34)->unwrap();
        // line 35
        $macros["modals"] = $this->macros["modals"] = $this->load("components/form/modals_macros.html.twig", 35)->unwrap();
        // line 36
        yield "
";
        // line 37
        $context["can_update"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canUpdate", [], "method", false, false, false, 37) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 37)) || ((array_key_exists("is_preference_form", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_preference_form"] ?? null), false)) : (false)));
        // line 38
        $context["avatar"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["user_object" =>             // line 40
($context["item"] ?? null), "with_link" => false, "avatar_size" => "avatar-xl"]);
            // line 43
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        $context["avatar_initials"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 46
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["user_object" =>             // line 47
($context["item"] ?? null), "with_link" => false, "avatar_size" => "avatar-xl", "force_initials" => true]);
            // line 51
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "
";
        // line 54
        $context["picture_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 55
            yield "    <div
        ";
            // line 56
            if ((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 57
                yield "            class=\"cursor-pointer flex-shrink-1\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change picture"), "html", null, true);
                yield "\" role=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_picture_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                yield "\"
        ";
            }
            // line 58
            yield ">
        <div data-current-avatar>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar"] ?? null), "html", null, true);
            yield "</div>
        <div data-default-avatar class=\"d-none\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar_initials"] ?? null), "html", null, true);
            yield "</div>
        <div class=\"avatar avatar-xl rounded d-none\" data-preview-avatar>
            <img src=\"\" alt=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview"), "html", null, true);
            yield "\" class=\"img-fluid\" />
        </div>
    </div>
    ";
            // line 65
            if ((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 66
                yield "        ";
                $context["modal_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 67
                    yield "            <div class=\"text-center\">
                <div data-current-avatar>";
                    // line 68
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar"] ?? null), "html", null, true);
                    yield "</div>
                <div data-default-avatar class=\"d-none\">";
                    // line 69
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar_initials"] ?? null), "html", null, true);
                    yield "</div>
                <div class=\"avatar avatar-xl rounded d-none\" data-preview-avatar>
                    <img src=\"\" alt=\"";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview"), "html", null, true);
                    yield "\" class=\"img-fluid\" />
                </div>
                ";
                    // line 73
                    yield $macros["inputs"]->getTemplateForMacro("macro_file", $context, 73, $this->getSourceContext())->macro_file(...["picture", null, ["onlyimages" => true, "multiple" => false]]);
                    // line 76
                    yield "
                ";
                    // line 77
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["picture"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 78
                        yield "                    ";
                        yield $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 78, $this->getSourceContext())->macro_checkboxField(...["_blank_picture", 0, __("Clear"), ["additional_attributes" => ["onclick" => "\$(this).closest(\".modal\").find(\"[data-current-avatar], [data-default-avatar], .fileupload\").toggleClass(\"d-none\");"]]]);
                        // line 82
                        yield "
                ";
                    }
                    // line 84
                    yield "                <script type=\"module\">
                    function updateAvatarVisibilities() {
                        // Cannot rely on 'fileuploadprocessstop' event or files property as they flat out don't work. fileupload_info content is not updated fast enough to be seen from change event.
                        const has_pending_file = \$('#modal_picture_";
                    // line 87
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield " [data-preview-avatar] img').attr('src') !== '';
                        const will_clear = \$('#modal_picture_";
                    // line 88
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield " input[name=_blank_picture]').is(':checked');

                        \$('[data-preview-avatar]').toggleClass('d-none', !has_pending_file || will_clear);
                        \$('[data-current-avatar]').toggleClass('d-none', has_pending_file || will_clear);
                        \$('[data-default-avatar]').toggleClass('d-none', !will_clear);
                    }

                    \$('#modal_picture_";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield "').on('mouseup', '.remove_file_upload', (e) => {
                        // Click handler doesn't work. Don't know. So much wasted time. Some other handler probably blocks it.
                        \$('#modal_picture_";
                    // line 97
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield " [data-preview-avatar] img').attr('src', '');
                        updateAvatarVisibilities();
                    });
                    \$('#modal_picture_";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield " input[type=file]').on('change', (e) => {
                        // fileuploadprocessstop event doesn't work on the file input or .fileupload. Maybe doesn't work at all.
                        const preview_img = URL.createObjectURL(e.target.files[0]);
                        \$('[data-preview-avatar] img').attr('src', preview_img);
                        updateAvatarVisibilities();
                    });
                    \$('#modal_picture_";
                    // line 106
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield " input[name=_blank_picture]').on('change', (e) => {
                        updateAvatarVisibilities();
                    });
                </script>
            </div>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 112
                yield "        ";
                yield $macros["modals"]->getTemplateForMacro("macro_modal", $context, 112, $this->getSourceContext())->macro_modal(...[__("Change picture"), ($context["modal_content"] ?? null), ["id" => ("modal_picture_" .                 // line 113
($context["rand_field"] ?? null))]]);
                // line 114
                yield "
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 117
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 117, $this->getSourceContext())->macro_htmlField(...["_picture", ($context["picture_field"] ?? null), _n("Picture", "Pictures", 1), ["wrapper_class" => "form-control-plaintext d-flex"]]);
        // line 119
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/user/user_picture_field.html.twig";
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
        return array (  211 => 119,  209 => 117,  203 => 114,  201 => 113,  199 => 112,  189 => 106,  180 => 100,  174 => 97,  169 => 95,  159 => 88,  155 => 87,  150 => 84,  146 => 82,  143 => 78,  141 => 77,  138 => 76,  136 => 73,  131 => 71,  126 => 69,  122 => 68,  119 => 67,  116 => 66,  114 => 65,  108 => 62,  103 => 60,  99 => 59,  96 => 58,  88 => 57,  86 => 56,  83 => 55,  81 => 54,  78 => 53,  73 => 51,  71 => 47,  69 => 46,  67 => 45,  62 => 43,  60 => 40,  58 => 39,  56 => 38,  54 => 37,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/user/user_picture_field.html.twig", "/var/www/html/glpi/templates/pages/admin/user/user_picture_field.html.twig");
    }
}
