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

/* pages/tools/search_knowbaseitem.html.twig */
class __TwigTemplate_3fce2ab9f90d82eb4da92c6d5ee1b72e extends Template
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
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        $context["container_id"] = ("container" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
        // line 36
        yield "
";
        // line 37
        if ((($tmp =  !($context["is_ajax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "    <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield "\">
";
        }
        // line 40
        yield "        <div class=\"card search-card border-0\">
            <div id=\"search_knowbaseitem_form\" class=\"d-flex mb-3 mt-3\">
                ";
        // line 42
        yield $macros["inputs"]->getTemplateForMacro("macro_text", $context, 42, $this->getSourceContext())->macro_text(...["contains", ($context["contains"] ?? null), ["additional_attributes" => ["aria-label" => __("Search…")], "input_addclass" => "me-1"]]);
        // line 47
        yield "
                ";
        // line 48
        yield $macros["inputs"]->getTemplateForMacro("macro_button", $context, 48, $this->getSourceContext())->macro_button(...["search", _x("button", "Search")]);
        yield "
                ";
        // line 49
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 49, $this->getSourceContext())->macro_hidden(...["start", ($context["start"] ?? null)]);
        yield "
            </div>
            ";
        // line 51
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["results"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "                <div class=\"list-group list-group-flush list-group-hoverable\" role=\"list\">
                    ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["results"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 54
                yield "                        <div class=\"list-group-item d-flex\" data-knowbaseitem-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "id", [], "any", false, false, false, 54), "html", null, true);
                yield "\" role=\"listitem\">
                            <div class=\"col-auto\">
                                <i class=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "icon", [], "any", false, false, false, 56), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "icon_title", [], "any", false, false, false, 56), "html", null, true);
                yield "\"></i>
                            </div>
                            <div class=\"col\">
                                <div class=\"fs-2\">";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "name", [], "any", false, false, false, 59), "html", null, true);
                yield "</div>
                                <div class=\"fs-4 knowbaseitem-content-preview\">";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "content_preview", [], "any", false, false, false, 60), "html", null, true);
                yield "</div>
                            </div>
                            <div class=\"col-auto\">
                                <button type=\"button\" class=\"btn btn-ghost-secondary btn-sm btn-icon use-knowbaseitem\" title=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Use this entry"), "html", null, true);
                yield "\">
                                    <i class=\"ti ti-check\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-ghost-secondary btn-sm btn-icon view-knowbaseitem\" title=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview"), "html", null, true);
                yield "\">
                                    <i class=\"ti ti-eye\"></i>
                                </button>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['result'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "                </div>
                ";
            // line 73
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/pager.html.twig", ["no_limit_display" => true]);
            // line 75
            yield "
            ";
        } else {
            // line 77
            yield "                <div class=\"alert alert-info\">
                    ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No results found"), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 81
        yield "
        </div>
        <div class=\"card preview-card border-0\" style=\"display: none\">
            <div class=\"d-flex\">
                <button type=\"button\" class=\"btn btn-ghost-secondary back-to-results\">
                    <i class=\"ti ti-arrow-left\"></i>
                    ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Back to results"), "html", null, true);
        yield "
                </button>
                <button type=\"button\" class=\"btn btn-primary use-knowbaseitem ms-auto\">
                    <i class=\"ti ti-check\"></i>
                    ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Use this entry"), "html", null, true);
        yield "
                </button>
            </div>
            <div class=\"kbi-form-container card-body\"></div>
        </div>
";
        // line 96
        if ((($tmp =  !($context["is_ajax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "    </div>
    <style>
       div.spinner-overlay {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: #80808033;
          z-index: 20;

          div.spinner-border {
             width: 50px;
             height: 50px;
             position: absolute;
             top: 50%;
             left: 50%;
             border-width: 4px;
          }
       }

       .knowbaseitem-content-preview {
          white-space: break-spaces;
          max-height: 150px;
          overflow: hidden;
       }

       @supports (display: -webkit-box) and (-webkit-line-clamp: 7) and (-webkit-box-orient: vertical) {
          .knowbaseitem-content-preview {
             display: -webkit-box;
             -webkit-line-clamp: 7;
             -webkit-box-orient: vertical;
             max-height: none;
          }
       }
    </style>
    <script type=\"module\">
        function showLoading() {
            const loading_overlay = \$('#";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield "').find('div.spinner-overlay');
            if (loading_overlay.length === 0) {
                \$('#";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield "').append(`
                    <div class=\"spinner-overlay text-center\">
                        <div class=\"spinner-border\" role=\"status\">
                            <span class=\"sr-only\">";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Loading..."), "html", null, true);
            yield "</span>
                        </div>
                    </div>`);
            } else {
                loading_overlay.css('visibility', 'visible');
            }
        }

        function hideLoading() {
            \$('#";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield "').find('div.spinner-overlay').css('visibility', 'hidden');
        }

        function refreshResults() {
            showLoading();
            \$.ajax({
                url: '";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(((("/Knowbase/KnowbaseItem/Search/" . ($context["itemtype"] ?? null)) . "/") . ($context["items_id"] ?? null))), "js"), "html", null, true);
            yield "',
                method: 'GET',
                data: {
                    contains: \$('#";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield " #search_knowbaseitem_form input[name=\"contains\"]').val(),
                    ajax_reload: 1,
                    start: \$('#";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield " #search_knowbaseitem_form input[name=\"start\"]').val(),
                }
            }).then((html) => {
                \$('#";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield "').html(html);
                hideLoading();
            }, () => {
                window.glpi_toast_error('";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("An error occurred while searching in the knowledge base"), "js"), "html", null, true);
            yield "');
                hideLoading();
            });
        }

        // Use itilobject button handled by whatever loads this template (form_solution.html.twig for example)
        \$('#";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield "').on('click', 'button.view-knowbaseitem', (e) => {
            const kbi_id = \$(e.target).closest('.list-group-item').attr('data-knowbaseitem-id');
            showLoading();
            \$.ajax({
                method: 'GET',
                url: '";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/Knowbase/KnowbaseItem/"), "html", null, true);
            yield "' + kbi_id + '/Full',
            }).then((html) => {
                \$('#";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield " .kbi-form-container').html(html);
                \$('#";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield " .preview-card .use-knowbaseitem').attr('data-knowbaseitem-id', kbi_id);
                hideLoading();
                \$('#";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield " .search-card').hide();
                \$('#";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield " .preview-card').show();
            }, () => {
                window.glpi_toast_error('";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("An error occurred while loading the knowledge base entry"), "js"), "html", null, true);
            yield "');
                hideLoading();
            });
        }).on('click', 'button[name=\"search\"]', () => {
            refreshResults();
        }).on('click', 'button.back-to-results', () => {
            \$('#";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield " .preview-card').hide();
            \$('#";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield " .search-card').show();
        }).on('keyup', 'input[name=\"contains\"]', (e) => {
            if (e.key === 'Enter') {
                refreshResults();
            }
        }).on('click', '.search-pager .page-link', (e) => {
            e.preventDefault();
            const clicked_link = \$(e.target).closest('.page-link');
            const new_start = clicked_link.attr('data-start');
            \$('#";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield " input[name=\"start\"]').val(new_start);
            refreshResults();
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
        return "pages/tools/search_knowbaseitem.html.twig";
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
        return array (  335 => 201,  323 => 192,  319 => 191,  310 => 185,  305 => 183,  301 => 182,  296 => 180,  292 => 179,  287 => 177,  279 => 172,  270 => 166,  264 => 163,  258 => 160,  253 => 158,  247 => 155,  238 => 149,  226 => 140,  220 => 137,  215 => 135,  175 => 97,  173 => 96,  165 => 91,  158 => 87,  150 => 81,  144 => 78,  141 => 77,  137 => 75,  135 => 73,  132 => 72,  120 => 66,  114 => 63,  108 => 60,  104 => 59,  96 => 56,  90 => 54,  86 => 53,  83 => 52,  81 => 51,  76 => 49,  72 => 48,  69 => 47,  67 => 42,  63 => 40,  57 => 38,  55 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/tools/search_knowbaseitem.html.twig", "/var/www/html/glpi/templates/pages/tools/search_knowbaseitem.html.twig");
    }
}
