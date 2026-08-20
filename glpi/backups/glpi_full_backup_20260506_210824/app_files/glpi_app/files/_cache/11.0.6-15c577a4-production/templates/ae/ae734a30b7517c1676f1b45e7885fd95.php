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

/* install/step7.html.twig */
class __TwigTemplate_cfea6fa855e53c1552dcabf772b0a6d9 extends Template
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
<h2>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("One last thing before starting"), "html", null, true);
        yield "</h2>

<p>
   ";
        // line 38
        yield ($context["glpinetwork"] ?? null);
        yield "
</p>

<hr>
<form action=\"install.php\" method=\"post\" data-submit-once>
   <p>
   <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
      ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Continue"), "html", null, true);
        yield "
      <i class=\"ti ti-chevron-right ms-1\"></i>
   </button>
   </p>

   <input type='hidden' name='install' value='Etape_6'>
   ";
        // line 51
        yield $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 51, $this->getSourceContext())->macro_csrfField(...[]);
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
        return "install/step7.html.twig";
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
        return array (  75 => 51,  66 => 45,  56 => 38,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step7.html.twig", "/var/www/html/glpi/templates/install/step7.html.twig");
    }
}
