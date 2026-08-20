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

/* install/step1.html.twig */
class __TwigTemplate_a166ba51133b47ea59041e1ca1c74789 extends Template
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
        if ((($tmp = ($context["config_write_denied"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "    <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Checking write access to configuration files"), "html", null, true);
            yield "</h3>
    <div class=\"alert alert-danger\" role=\"alert\">
        <div class=\"d-flex\">
            <div>
                <i class=\"ti ti-alert-circle me-2\"></i>
            </div>
            <div>
                <h4 class=\"alert-title\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Write access denied for configuration files"), "html", null, true);
            yield "</h4>
                <div class=\"text-secondary\">
                    ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("A temporary write access to the following files is required: %s."), (("`" . Twig\Extension\CoreExtension::join(($context["config_files_to_update"] ?? null), "`, `")) . "`")), "html", null, true);
            yield "
                    <br />
                    ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Write access to these files can be removed once the operation is finished."), "html", null, true);
            yield "
                </div>
            </div>
        </div>
    </div>
";
        } else {
            // line 53
            yield "    <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Checking of the compatibility of your environment with the execution of GLPI"), "html", null, true);
            yield "</h3>
    ";
            // line 54
            yield Twig\Extension\CoreExtension::include($this->env, $context, "install/blocks/requirements_table.html.twig", ["requirements" => ($context["requirements"] ?? null)], false);
            yield "
";
        }
        // line 56
        yield "
";
        // line 57
        $context["common_hiddens"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 58
            yield "   <input type=\"hidden\" name=\"language\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpilanguage"), "html", null, true);
            yield "\">
   <input type=\"hidden\" name=\"update\" value=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["update"] ?? null), "html", null, true);
            yield "\">
   ";
            // line 60
            yield $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 60, $this->getSourceContext())->macro_csrfField(...[]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        yield "
";
        // line 63
        $context["continue_form"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 64
            yield "   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Continue"), "html", null, true);
            yield "
         <i class=\"ti ti-chevron-right ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"install\" value=\"Etape_1\">
      ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["common_hiddens"] ?? null), "html", null, true);
            yield "
   </form>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        yield "
";
        // line 75
        $context["retry_form"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 76
            yield "   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">
         ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Try again"), "html", null, true);
            yield "
         <i class=\"ti ti-reload ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
      ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["common_hiddens"] ?? null), "html", null, true);
            yield "
   </form>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        yield "
";
        // line 87
        if ((($context["config_write_denied"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, ($context["requirements"] ?? null), "hasMissingMandatoryRequirements", [], "method", false, false, false, 87))) {
            // line 88
            yield "   <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Do you want to continue?"), "html", null, true);
            yield "</h3>
   <div class=\"text-center\">
      ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["retry_form"] ?? null), "html", null, true);
            yield "
   </div>
";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 92
($context["requirements"] ?? null), "hasMissingOptionalRequirements", [], "method", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "   <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Do you want to continue?"), "html", null, true);
            yield "</h3>
   <div class=\"text-center\">
      ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["continue_form"] ?? null), "html", null, true);
            yield "
      ";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["retry_form"] ?? null), "html", null, true);
            yield "
   </div>
";
        } else {
            // line 99
            yield "   <div class=\"text-center\">
      ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["continue_form"] ?? null), "html", null, true);
            yield "
   </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/step1.html.twig";
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
        return array (  197 => 100,  194 => 99,  188 => 96,  184 => 95,  178 => 93,  176 => 92,  171 => 90,  165 => 88,  163 => 87,  160 => 86,  153 => 83,  145 => 78,  141 => 76,  139 => 75,  136 => 74,  129 => 71,  121 => 66,  117 => 64,  115 => 63,  112 => 62,  106 => 60,  102 => 59,  97 => 58,  95 => 57,  92 => 56,  87 => 54,  82 => 53,  73 => 47,  68 => 45,  63 => 43,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step1.html.twig", "/var/www/html/glpi/templates/install/step1.html.twig");
    }
}
