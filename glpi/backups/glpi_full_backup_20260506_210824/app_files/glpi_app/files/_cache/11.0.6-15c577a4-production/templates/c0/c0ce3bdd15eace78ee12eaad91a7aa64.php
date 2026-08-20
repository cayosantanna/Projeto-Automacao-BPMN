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

/* layout/parts/profile_selector.html.twig */
class __TwigTemplate_d6f0ab9942d6b5eb15927af422afa15b extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        yield "
<div class=\"dropdown dropstart\">
    <button
        class=\"dropdown-item dropdown-toggle\"
        type=\"button\"
        data-bs-toggle=\"dropdown\"
        aria-haspopup=\"true\"
        aria-expanded=\"false\"
        aria-label=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change profile"), "html", null, true);
        yield "\"
    >
        <i class=\"ti ti-user-check\"></i>
        ";
        // line 45
        yield (((CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"), "name", [], "array", true, true, false, 45) &&  !(null === (($_v0 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["name"] ?? null) : null), "html", null, true)) : (""));
        yield "
    </button>
    <div class=\"dropdown-menu\" data-bs-popper=\"none\">
        <span class=\"dropdown-header\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Profiles"), "html", null, true);
        yield "</span>
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiprofiles"));
        foreach ($context['_seq'] as $context["profile_id"] => $context["profile"]) {
            // line 50
            yield "            ";
            $context["is_active"] = ($context["profile_id"] == (((CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"), "id", [], "array", true, true, false, 50) &&  !(null === (($_v2 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null)))) ? ((($_v3 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["id"] ?? null) : null)) : (0)));
            // line 51
            yield "            <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/Session/ChangeProfile"), "html", null, true);
            yield "\" method=\"POST\">
                <button
                    class=\"dropdown-item ";
            // line 53
            yield (((($tmp = ($context["is_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
            yield "\"
                    type=\"submit\"
                >
                    <i class=\"ti ti-user-check\"></i>
                    ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = $context["profile"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["name"] ?? null) : null), "html", null, true);
            yield "
                </button>
                <input type=\"hidden\" name=\"id\" value=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["profile_id"], "html", null, true);
            yield "\" />
                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
            </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['profile_id'], $context['profile'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "    </div>
</div>

";
        // line 66
        $context["current_entity"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_name");
        // line 67
        $context["current_entity_short"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_shortname");
        // line 68
        if ((($context["current_entity"] ?? null) != ($context["current_entity_short"] ?? null))) {
            // line 69
            yield "    ";
            $context["current_entity_short"] = ("... > " . ($context["current_entity_short"] ?? null));
        }
        // line 71
        if ((($tmp =  !Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "    <span class=\"dropdown-item dropdown-item-text\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_entity"] ?? null), "html", null, true);
            yield "\">
        <i class=\"ti ti-stack\"></i>
        ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["current_entity_short"] ?? null)), "truncate", [35, "..."], "method", false, false, false, 74), "html", null, true);
            yield "
    </span>
";
        } else {
            // line 77
            yield "    <div class=\"dropdown dropstart\" id=\"entity-tree-dropdown-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">
        <a href=\"#\" class=\"dropdown-item dropdown-toggle entity-dropdown-toggle\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" title=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_entity"] ?? null), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select the desired entity"), "html", null, true);
            yield "\">
            <i class=\"ti ti-stack\"></i>
            ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["current_entity_short"] ?? null)), "truncate", [35, "..."], "method", false, false, false, 80), "html", null, true);
            yield "
        </a>
        <div class=\"dropdown-menu p-3 overflow-y-auto\" style=\"max-height: calc(100vh - 8rem)\">
            <h3>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select the desired entity"), "html", null, true);
            yield "</h3>

            <div class=\"alert alert-info d-block\" role=\"alert\">
                ";
            // line 86
            $context["shortcut"] = __("Ctrl + Alt + E");
            // line 87
            yield "                ";
            if ((($context["platform"] ?? null) == Twig\Extension\CoreExtension::constant("donatj\\UserAgent\\Platforms::MACINTOSH"))) {
                // line 88
                yield "                    ";
                $context["shortcut"] = __("⌥ (option) + ⌘ (command) + E");
                // line 89
                yield "                ";
            }
            // line 90
            yield "                ";
            yield Twig\Extension\CoreExtension::sprintf(__("Tip: You can call this modal with %s keys combination"), (("<kbd>" . ($context["shortcut"] ?? null)) . "</kbd>"));
            yield "
            </div>

            ";
            // line 93
            $context["switch_to_full_structure_id"] = ("switch_to_full_structure_" . ($context["rand"] ?? null));
            // line 94
            yield "            <form
                id=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["switch_to_full_structure_id"] ?? null), "html", null, true);
            yield "\"
                method=\"POST\"
                action=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/Session/ChangeEntity"), "html", null, true);
            yield "\"
            >
                <input type=\"hidden\" name=\"full_structure\" value=\"true\">
                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
            </form>

            <form
                id=\"ch_ent_o_";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"
                method=\"POST\"
                action=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/Session/ChangeEntity"), "html", null, true);
            yield "\"
            >
                <input type=\"hidden\" name=\"is_recursive\" value=\"0\">
                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
            </form>

            <form
                id=\"ch_ent_r_";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"
                method=\"POST\"
                action=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/Session/ChangeEntity"), "html", null, true);
            yield "\"
            >
                <input type=\"hidden\" name=\"is_recursive\" value=\"1\">
                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
            </form>

            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" name=\"entsearchtext\" id=\"entsearchtext";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"
                        placeholder=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search entity"), "html", null, true);
            yield "\" autocomplete=\"off\">
                <button id=\"entsearchsubmit";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" type=\"submit\" class=\"btn btn-icon btn-primary\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search"), "html", null, true);
            yield "\"
                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                    <i class=\"ti ti-search\"></i>
                </button>
                <a class=\"btn btn-icon btn-outline-secondary\" href=\"#\" id=\"entsearchtext";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "_clear\"
                    title=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Clear search"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-x\"></i>
                </a>
                <button
                    class=\"btn btn-secondary\"
                    title=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select all"), "html", null, true);
            yield "\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"top\"
                    form=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["switch_to_full_structure_id"] ?? null), "html", null, true);
            yield "\"
                    type=\"submit\"
                >
                    <i class=\"ti ti-eye\"></i>
                </button>
            </div>

            <div class=\"fancytree-grid-container flexbox-item-grow entity_tree overflow-x-auto\">
                <table id=\"tree_entity";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Entity tree"), "html", null, true);
            yield "\">
                <colgroup>
                    <col></col>
                </colgroup>
                <thead>
                    <tr>
                        <th class=\"parent-path\"></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
                <div id=\"verticalScrollbar-";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" class=\"position-absolute overflow-auto\" style=\"height:100%; width: 16px; top: 0; right: 0;\">
                    <div class=\"fake-scrollbar-inner\" style=\"height: 100%; width: 100%;\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type=\"text/javascript\">
    \$(function() {
        let block_fake_scrollbar_event = false;
        var initTree";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield " = function() {
            if (\$.ui.fancytree.getTree(\"#tree_entity";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\") !== null) {
                return;
            }

            \$('#tree_entity";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').fancytree({
                // load plugins
                extensions: ['filter', 'glyph', 'grid'],

                // Scroll node into visible area, when focused by keyboard
                autoScroll: true,

                // enable font-awesome icons
                glyph: {
                    preset: \"awesome5\",
                    map: {}
                },

                // enable virtual dom, it requires the grid (table extension) plugin
                table: {
                    indentation: 20,       // indent 20px per node level
                    nodeColumnIdx: 0,      // render the node title into the 1st column
                    mergeStatusColumns: false,
                },
                grid: {
                    mergeStatusColumns: false,
                },
                viewport: {
                    enabled: true,
                    count: 15, // number of items to display at once
                },

                // translate strings
                strings: {
                    loading: __(\"Loading...\"),
                    loadError: __(\"Unexpected error.\"),
                    moreData: __(\"More...\"),
                    noData: __(\"No entity found\")
                },

                // load data by ajax
                source: {
                    url:  '";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/ajax/entitytreesons.php?rand=" . ($context["rand"] ?? null))), "html", null, true);
            yield "',
                    cache: false
                },

                // filter plugin options
                filter: {
                    mode: \"hide\", // remove unmatched nodes
                    autoExpand: true, // if results found in children, auto-expand parent
                    nodata: '";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No entity found"), "html", null, true);
            yield "', // message when no data found
                    highlight: false, // do not highlight matches by wrapping inside tags (when true, this strip the a tag)
                    counter: false, // do not show counters when filtering entity tree
                },

                // update scrollbar when viewport is updated
                updateViewport: function(event, data) {
                    const fake_scrollbar = \$(\"#verticalScrollbar-";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\");
                    const item_height = \$(data.tree.tbody).find('tr').height();
                    block_fake_scrollbar_event = true;
                    fake_scrollbar.find('.fake-scrollbar-inner').height(item_height * data.tree.visibleNodeList.length);
                    fake_scrollbar.scrollTop(item_height * data.tree.viewport.start);

                    initTooltips();
                },

                // update toolips on node expand
                expand: function(event, data) {
                    initTooltips();
                },
            });
        };

        //Sync viewport with fake scrollbar
        \$(\"#verticalScrollbar-";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").on('scroll', function(e) {
            if (block_fake_scrollbar_event) {
                block_fake_scrollbar_event = false;
                return;
            }
            const fake_scrollbar = \$(e.target);
            const item_height = fake_scrollbar.find('.fake-scrollbar-inner').height() / \$.ui.fancytree.getTree(\"#tree_entity";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").visibleNodeList.length;
            const new_start = Math.round(fake_scrollbar.scrollTop() / item_height);
            \$.ui.fancytree.getTree(\"#tree_entity";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").setViewport({
                start: new_start,
            });
        });

      // init Entities tree only when user ask for it (when dropdown is opened)
        document.getElementById('entity-tree-dropdown-";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "')
            .addEventListener('show.bs.dropdown', function (event) {
                initTree";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "();
            });

        var searchTree = function() {
            var search_text = \$(\"#entsearchtext";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").val();
            \$.ui.fancytree.getTree(\"#tree_entity";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").filterBranches(search_text);
        }

        \$('#entsearchsubmit";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').click(function(event) {
            // cancel submit of entity search form
            event.preventDefault();

            searchTree();
        });

        \$('#entsearchtext";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').keyup(function () {
            var inputsearch = \$(this);
            typewatch(function () {
                if (inputsearch.val().length >= 3) {
                searchTree();
                }
            }, 500);
        }).focus();

        \$('#entsearchtext";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "_clear').click(function () {
            \$('#entsearchtext";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "').val('');
            searchTree();
        });

        // when the shortcut for entity form is called
        hotkeys('ctrl+alt+e, option+command+e', async function(e) {
            e.stopPropagation();
            e.preventDefault();
            \$('.user-menu-dropdown-toggle:visible').dropdown('show');
            await new Promise(r => setTimeout(r, 100));
            \$('.user-menu-dropdown-toggle:visible').parent().find('.entity-dropdown-toggle').dropdown('show');
            \$('input[name=entsearchtext]').filter(\":visible\")[0].focus();
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
        return "layout/parts/profile_selector.html.twig";
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
        return array (  481 => 283,  477 => 282,  465 => 273,  455 => 266,  449 => 263,  445 => 262,  438 => 258,  433 => 256,  424 => 250,  419 => 248,  410 => 242,  390 => 225,  380 => 218,  369 => 210,  329 => 173,  322 => 169,  318 => 168,  304 => 157,  287 => 145,  276 => 137,  270 => 134,  262 => 129,  258 => 128,  249 => 124,  245 => 123,  241 => 122,  234 => 118,  228 => 115,  223 => 113,  216 => 109,  210 => 106,  205 => 104,  198 => 100,  192 => 97,  187 => 95,  184 => 94,  182 => 93,  175 => 90,  172 => 89,  169 => 88,  166 => 87,  164 => 86,  158 => 83,  152 => 80,  145 => 78,  140 => 77,  134 => 74,  128 => 72,  126 => 71,  122 => 69,  120 => 68,  118 => 67,  116 => 66,  111 => 63,  102 => 60,  98 => 59,  93 => 57,  86 => 53,  80 => 51,  77 => 50,  73 => 49,  69 => 48,  63 => 45,  57 => 42,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/profile_selector.html.twig", "/var/www/html/glpi/templates/layout/parts/profile_selector.html.twig");
    }
}
