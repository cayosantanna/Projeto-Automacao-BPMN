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

/* __string_template__035f9fc5d5f514ca83e06e8e85ee1e80 */
class __TwigTemplate_54a0b998f11049827ae76b3a4b27a4ba extends Template
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
        // line 1
        yield "                <div class='filters_toolbar m-2 ";
        yield (((($tmp = ($context["is_placeholder"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
        yield "'>
                    <span class='filters'></span>
                    <span class='filters-control'>
                        <i class=\"btn btn-sm btn-ghost-secondary ti ti-plus plus-sign add-filter\">
                            <span class='add-filter-lbl'>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["messages"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["add_filter"] ?? null) : null), "html", null, true);
        yield "</span>
                        </i>
                    </span>
                </div>
                <div class='placeholder_info ";
        // line 9
        yield (((($tmp = ($context["is_placeholder"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
        yield "' style=\"background-color: transparent; color: var(--tblr-body-color); font-size: var(--tblr-body-font-size)\">
                    <div class=\"alert alert-info\">
                        <div class=\"d-flex\">
                            <i class=\"ti ti-info-circle fs-2x me-3\"></i>
                            <div>
                                <h4 class=\"alert-title\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["messages"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["placeholder_main"] ?? null) : null), "html", null, true);
        yield "</h4>
                                <div class=\"mt-2\">
                                    <button class=\"btn btn-info btn-sm disable-dashboard-demo me-2 ";
        // line 16
        yield (((($tmp = ($context["can_disable_demo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
        yield "\" type=\"button\">
                                        <i class=\"ti ti-presentation-off\"></i>
                                        <span>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["messages"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["disable_demo_msg"] ?? null) : null), "html", null, true);
        yield "</span>
                                    </button>
                                    <script>
                                        \$('button.disable-dashboard-demo').on('click', function() {
                                            \$.post(CFG_GLPI.root_doc + '/ajax/dashboard.php', {
                                                action: 'disable_placeholders'
                                            }).then(() => {
                                                window.location.reload();
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__035f9fc5d5f514ca83e06e8e85ee1e80";
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
        return array (  75 => 18,  70 => 16,  65 => 14,  57 => 9,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__035f9fc5d5f514ca83e06e8e85ee1e80", "");
    }
}
