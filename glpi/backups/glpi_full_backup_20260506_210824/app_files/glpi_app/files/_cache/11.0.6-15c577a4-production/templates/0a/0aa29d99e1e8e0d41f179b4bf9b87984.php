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

/* install/step3.html.twig */
class __TwigTemplate_12dc91314d23bb1d9e34ee92f7cb1f31 extends Template
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
        $macros["alerts"] = $this->macros["alerts"] = $this->load("components/alerts_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
<h3>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Test of the connection at the database"), "html", null, true);
        yield "</h3>

";
        // line 38
        if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["host"] ?? null)) == 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["user"] ?? null)) == 0)) || CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "connect_error", [], "any", false, false, false, 38))) {
            // line 39
            yield "
   ";
            // line 40
            yield $macros["alerts"]->getTemplateForMacro("macro_alert_danger", $context, 40, $this->getSourceContext())->macro_alert_danger(...[__("Can't connect to the database"), Twig\Extension\CoreExtension::sprintf(__("The server answered: %s"), CoreExtension::getAttribute($this->env, $this->source,             // line 42
($context["link"] ?? null), "connect_error", [], "any", false, false, false, 42))]);
            // line 43
            yield "

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">
         <i class=\"ti ti-chevron-left me-1 fs-2x alert-icon\"></i>
         ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Back"), "html", null, true);
            yield "
      </button>

      <input type=\"hidden\" name=\"update\" value=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["update"] ?? null), "html", null, true);
            yield "\">
      <input type=\"hidden\" name=\"install\" value=\"Etape_1\">
      ";
            // line 53
            yield $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 53, $this->getSourceContext())->macro_csrfField(...[]);
            yield "
   </form>
";
        } else {
            // line 56
            yield "   ";
            yield $macros["alerts"]->getTemplateForMacro("macro_alert_success", $context, 56, $this->getSourceContext())->macro_alert_success(...[__("Database connection successful")]);
            // line 58
            yield "

   ";
            // line 60
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["engine_requirement"] ?? null), "isValidated", [], "method", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 61
                yield "      ";
                yield $macros["alerts"]->getTemplateForMacro("macro_alert_danger", $context, 61, $this->getSourceContext())->macro_alert_danger(...[__("Database engine is not supported."), CoreExtension::getAttribute($this->env, $this->source,                 // line 63
($context["engine_requirement"] ?? null), "getValidationMessages", [], "method", false, false, false, 63)]);
                // line 64
                yield "
   ";
            }
            // line 66
            yield "
   ";
            // line 67
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["config_requirement"] ?? null), "isValidated", [], "method", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "      ";
                yield $macros["alerts"]->getTemplateForMacro("macro_alert_danger", $context, 68, $this->getSourceContext())->macro_alert_danger(...[__("Database configuration is not supported."), CoreExtension::getAttribute($this->env, $this->source,                 // line 70
($context["config_requirement"] ?? null), "getValidationMessages", [], "method", false, false, false, 70)]);
                // line 71
                yield "
   ";
            }
            // line 73
            yield "
   ";
            // line 74
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["engine_requirement"] ?? null), "isValidated", [], "method", false, false, false, 74) && CoreExtension::getAttribute($this->env, $this->source, ($context["config_requirement"] ?? null), "isValidated", [], "method", false, false, false, 74))) {
                // line 75
                yield "      <div class=\"container mt-4\">
         <form action='install.php' method='post'>
            <div class=\"mb-3\">
                ";
                // line 78
                if ((($context["update"] ?? null) == "no")) {
                    // line 79
                    yield "                    <h3>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please select a database:"), "html", null, true);
                    yield "</h3>

                    <div class=\"hr-text text-white mt-6\">
                        ";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Create a new database:"), "html", null, true);
                    yield "
                    </div>
                    <input type=\"text\" name=\"newdatabasename\" id=\"new_db\" class=\"form-control\" autofocus>

                    <div class=\"hr-text text-white mt-6\">
                        ";
                    // line 87
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Or use an existing one:"), "html", null, true);
                    yield "
                    </div>
                ";
                } else {
                    // line 90
                    yield "                    <h3>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please select a database to update:"), "html", null, true);
                    yield "</h3>
                ";
                }
                // line 92
                yield "
                ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["databases"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["database"]) {
                    // line 94
                    yield "                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"databasename\" id=\"";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\String\StringExtension']->createSlug($context["database"]), "html", null, true);
                    yield "\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["database"], "html", null, true);
                    yield "\">
                        <label class=\"form-check-label\" for=\"";
                    // line 96
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\String\StringExtension']->createSlug($context["database"]), "html", null, true);
                    yield "\">
                            ";
                    // line 97
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["database"], "html", null, true);
                    yield "
                        </label>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['database'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                yield "            </div>

            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
               ";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Continue"), "html", null, true);
                yield "
               <i class=\"ti ti-chevron-right ms-1\"></i>
            </button>

            ";
                // line 108
                if ((($context["update"] ?? null) == "no")) {
                    // line 109
                    yield "               <input type=\"hidden\" name=\"install\" value=\"Etape_3\">
            ";
                } else {
                    // line 111
                    yield "               <input type=\"hidden\" name=\"install\" value=\"update_1\">
            ";
                }
                // line 113
                yield "
            ";
                // line 114
                yield $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 114, $this->getSourceContext())->macro_csrfField(...[]);
                yield "
         </form>
      </div>
   ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/step3.html.twig";
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
        return array (  213 => 114,  210 => 113,  206 => 111,  202 => 109,  200 => 108,  193 => 104,  188 => 101,  178 => 97,  174 => 96,  168 => 95,  165 => 94,  161 => 93,  158 => 92,  152 => 90,  146 => 87,  138 => 82,  131 => 79,  129 => 78,  124 => 75,  122 => 74,  119 => 73,  115 => 71,  113 => 70,  111 => 68,  109 => 67,  106 => 66,  102 => 64,  100 => 63,  98 => 61,  96 => 60,  92 => 58,  89 => 56,  83 => 53,  78 => 51,  72 => 48,  65 => 43,  63 => 42,  62 => 40,  59 => 39,  57 => 38,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step3.html.twig", "/var/www/html/glpi/templates/install/step3.html.twig");
    }
}
