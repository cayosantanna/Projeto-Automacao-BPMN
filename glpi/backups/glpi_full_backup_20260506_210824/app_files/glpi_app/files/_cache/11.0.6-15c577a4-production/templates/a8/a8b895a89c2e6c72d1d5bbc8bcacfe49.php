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

/* install/step2.html.twig */
class __TwigTemplate_1836e1cf36b56055a0f481ca3e1669bd extends Template
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
<h3>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Database connection setup"), "html", null, true);
        yield "</h3>

<form action=\"install.php\" method=\"post\" data-submit-once>

   <div class=\"mb-3\">
      <label for=\"db_host\" class=\"form-label\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("SQL server (MariaDB or MySQL)"), "html", null, true);
        yield "</label>
      <input type=\"text\" class=\"form-control\" id=\"db_host\" name=\"db_host\">
   </div>

   <div class=\"mb-3\">
      <label for=\"db_user\" class=\"form-label\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("SQL user"), "html", null, true);
        yield "</label>
      <input type=\"text\" class=\"form-control\" id=\"db_user\" name=\"db_user\">
   </div>

   <div class=\"mb-3\">
      <label for=\"db_pass\" class=\"form-label\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("SQL password"), "html", null, true);
        yield "</label>
      <input type=\"password\" class=\"form-control\" id=\"db_pass\" name=\"db_pass\">
   </div>

   <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
      ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Continue"), "html", null, true);
        yield "
      <i class=\"ti ti-chevron-right ms-1\"></i>
   </button>

   <input type=\"hidden\" name=\"update\" value=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["update"] ?? null), "html", null, true);
        yield "\">
   <input type=\"hidden\" name=\"install\" value=\"Etape_2\">
   ";
        // line 61
        yield $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 61, $this->getSourceContext())->macro_csrfField(...[]);
        yield "
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/step2.html.twig";
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
        return array (  94 => 61,  89 => 59,  82 => 55,  74 => 50,  66 => 45,  58 => 40,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step2.html.twig", "/var/www/html/glpi/templates/install/step2.html.twig");
    }
}
