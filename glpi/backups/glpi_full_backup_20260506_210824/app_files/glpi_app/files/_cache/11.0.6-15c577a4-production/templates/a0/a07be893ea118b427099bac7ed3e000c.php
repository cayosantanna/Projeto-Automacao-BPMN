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

/* components/messages_after_redirect_toasts.html.twig */
class __TwigTemplate_96f32e96c5ef7535b3955a6d11b1439d extends Template
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
        $context["messages"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->pullMessages();
        // line 34
        yield "
";
        // line 35
        $context["toasts_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 36
            yield "    ";
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["messages"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 37
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["messages"] ?? null));
                foreach ($context['_seq'] as $context["type"] => $context["message"]) {
                    // line 38
                    yield "            ";
                    $context["message"] = Twig\Extension\CoreExtension::join($context["message"], "<br />");
                    // line 39
                    yield "            ";
                    $context["class"] = "";
                    // line 40
                    yield "            ";
                    $context["title"] = "";
                    // line 41
                    yield "            ";
                    if (($context["type"] == Twig\Extension\CoreExtension::constant("ERROR"))) {
                        // line 42
                        yield "                ";
                        $context["class"] = "bg-danger text-white";
                        // line 43
                        yield "                ";
                        $context["title"] = _n("Error", "Errors", 1);
                        // line 44
                        yield "            ";
                    } elseif (($context["type"] == Twig\Extension\CoreExtension::constant("WARNING"))) {
                        // line 45
                        yield "                ";
                        $context["class"] = "bg-warning text-white";
                        // line 46
                        yield "                ";
                        $context["title"] = __("Warning");
                        // line 47
                        yield "            ";
                    } else {
                        // line 48
                        yield "                ";
                        $context["class"] = "bg-info text-white";
                        // line 49
                        yield "                ";
                        $context["title"] = _n("Information", "Information", 1);
                        // line 50
                        yield "            ";
                    }
                    // line 51
                    yield "
            <div class=\"toast animate__animated animate__tada animate__delay-2s animate__slow\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                <div class=\"toast-header ";
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
                    yield " \">
                    <strong class=\"me-auto\">";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                    yield "</strong>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                </div>
                <div class=\"toast-body\">
                    ";
                    // line 58
                    yield $context["message"];
                    yield "
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['type'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                yield "    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "
";
        // line 65
        if ((($tmp = ($context["display_container"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "    ";
            $context["toast_location"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("toast_location");
            // line 67
            yield "    ";
            if (!CoreExtension::inFilter(($context["toast_location"] ?? null), ["top-left", "top-right", "bottom-left", "bottom-right"])) {
                // line 68
                yield "        ";
                $context["toast_location"] = "bottom-right";
                // line 69
                yield "    ";
            }
            // line 70
            yield "    <div class=\"toast-container ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["toast_location"] ?? null), "html", null, true);
            yield " p-3 messages_after_redirect\" id=\"messages_after_redirect\">
        ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["toasts_html"] ?? null), "html", null, true);
            yield "

        <script type=\"text/javascript\">
        var initMessagesAfterRedirectToasts = function() {
            var toastElList = [].slice.call(document.querySelectorAll('#messages_after_redirect .toast:not(.show)'));
            var toastList = toastElList.map(function (toastEl) {
                var toast = new bootstrap.Toast(toastEl, {
                    delay: 10000,
                })
                toast.show()

                \$(toastEl).on('hidden.bs.toast', function () {
                    \$(toastEl).remove();
                });

                return toast;
            });
        }
        \$(function() {
            initMessagesAfterRedirectToasts();
        });
        </script>
    </div>
";
        } else {
            // line 95
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["toasts_html"] ?? null), "html", null, true);
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/messages_after_redirect_toasts.html.twig";
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
        return array (  178 => 95,  151 => 71,  146 => 70,  143 => 69,  140 => 68,  137 => 67,  134 => 66,  132 => 65,  129 => 64,  124 => 62,  114 => 58,  107 => 54,  103 => 53,  99 => 51,  96 => 50,  93 => 49,  90 => 48,  87 => 47,  84 => 46,  81 => 45,  78 => 44,  75 => 43,  72 => 42,  69 => 41,  66 => 40,  63 => 39,  60 => 38,  55 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/messages_after_redirect_toasts.html.twig", "/var/www/html/glpi/templates/components/messages_after_redirect_toasts.html.twig");
    }
}
