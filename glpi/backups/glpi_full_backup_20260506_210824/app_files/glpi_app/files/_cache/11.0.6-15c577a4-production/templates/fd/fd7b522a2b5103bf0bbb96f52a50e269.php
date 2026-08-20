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

/* components/itilobject/timeline/new_form.html.twig */
class __TwigTemplate_a20517cbecc2bb6901e9744f633cbb07 extends Template
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
        $context["users_id"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID");
        // line 34
        yield "
<div class=\"itil-timeline\">
   <div class=\"timeline-item ITILContent\">
      <div class=\"row\">
         <div class=\"col-auto d-flex flex-column picture-block\">
            ";
        // line 39
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" => ($context["users_id"] ?? null)], false);
        yield "
         </div>
         <div class=\"col-12 col-sm content-block\">
            <div class=\"d-flex\">
               <div class=\"d-none d-md-block\">
                  <strong>";
        // line 44
        yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", ($context["users_id"] ?? null));
        yield "</strong>
               </div>
            </div>
            <span class=\"mt-2 timeline-content left card\">
               <div class=\"card-body\">
                  ";
        // line 49
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                     <div class=\"alert alert-info\" role=\"alert\">
                        ";
            // line 51
            $context["entitybadge"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 52
                yield "                           <span class=\"ms-1\">
                              ";
                // line 53
                yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletenameById", [(($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["entities_id"] ?? null) : null)]);
                yield "
                           </span>
                        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 56
            yield "
                        ";
            // line 57
            yield Twig\Extension\CoreExtension::sprintf(__("%1\$s will be added in entity %2\$s"), CoreExtension::getAttribute($this->env, $this->source,             // line 58
($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 58),             // line 59
($context["entitybadge"] ?? null));
            // line 60
            yield "
                     </div>
                  ";
        }
        // line 63
        yield "
                  ";
        // line 64
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/simple_form.html.twig", ["no_form" => true]);
        // line 66
        yield "
               </div>
            </span>
         </div>
      </div>
   </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/new_form.html.twig";
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
        return array (  104 => 66,  102 => 64,  99 => 63,  94 => 60,  92 => 59,  91 => 58,  90 => 57,  87 => 56,  80 => 53,  77 => 52,  75 => 51,  72 => 50,  70 => 49,  62 => 44,  54 => 39,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/new_form.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/new_form.html.twig");
    }
}
