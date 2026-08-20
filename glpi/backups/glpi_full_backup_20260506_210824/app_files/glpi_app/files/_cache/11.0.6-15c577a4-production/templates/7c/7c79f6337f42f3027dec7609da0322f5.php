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

/* components/itilobject/timeline/approbation_form.html.twig */
class __TwigTemplate_c80976292ce8f2d7b6478a3baf5a458a extends Template
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
        // line 33
        yield "
";
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isSolved", [], "method", false, false, false, 36) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canApprove", [], "method", false, false, false, 36)) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isAllowedStatus", [(($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 36)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["status"] ?? null) : null), Twig\Extension\CoreExtension::constant("CommonITILObject::CLOSED")], "method", false, false, false, 36))) {
            // line 37
            yield "<div class=\"timeline-item mb-3\">
   <div class=\"row\">
      <div class=\"col-auto d-none d-md-block\">
         ";
            // line 40
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID")], false);
            yield "
      </div>
      <div class=\"col\">
         <div class=\"row timeline-content t-left card mt-4\">
            <form name=\"form\" method=\"post\" action=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("ItilFollowup"), "html", null, true);
            yield "\" data-submit-once>

               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
               <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 47), "html", null, true);
            yield "\" />
               <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["id"] ?? null) : null), "html", null, true);
            yield "\" />
               <input type=\"hidden\" name=\"requesttypes_id\" value=\"0\" />

               <div class=\"card-header\">
                  ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Approval of the solution"), "html", null, true);
            yield "
               </div>
               <div class=\"card-body\">
                  ";
            // line 55
            yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 55, $this->getSourceContext())->macro_textareaField(...["content", "", __("Comments"), ["full_width" => true, "helper" => __("Optional when approved"), "enable_richtext" => true, "enable_fileupload" => true, "entities_id" => (($_v2 = CoreExtension::getAttribute($this->env, $this->source,             // line 64
($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["entities_id"] ?? null) : null), "is_horizontal" => false]]);
            // line 67
            yield "
               </div>

               <div class=\"card-footer\">
                  <button class=\"btn btn-outline-danger me-2\" name=\"add_reopen\">
                     <i class=\"ti ti-x\"></i>
                     <span>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Refuse"), "html", null, true);
            yield "</span>
                  </button>

                  <button class=\"btn btn-outline-success\" name=\"add_close\">
                     <i class=\"ti ti-check\"></i>
                     <span>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Approve"), "html", null, true);
            yield "</span>
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
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
        return "components/itilobject/timeline/approbation_form.html.twig";
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
        return array (  109 => 78,  101 => 73,  93 => 67,  91 => 64,  90 => 55,  84 => 52,  77 => 48,  73 => 47,  69 => 46,  64 => 44,  57 => 40,  52 => 37,  50 => 36,  47 => 35,  45 => 34,  42 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/approbation_form.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/approbation_form.html.twig");
    }
}
