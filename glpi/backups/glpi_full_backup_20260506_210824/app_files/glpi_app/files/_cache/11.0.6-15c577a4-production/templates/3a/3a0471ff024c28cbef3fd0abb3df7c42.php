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

/* pages/setup/authentication.html.twig */
class __TwigTemplate_4041a419e3f12fe7b860814740946b3e extends Template
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
<div class=\"container\">
   <div class=\"row justify-content-evenly\">
      <div class=\"col-12 col-xxl-4\">
         <div class=\"card\">
            <div class=\"card-header\">
               <h3>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("External authentications"), "html", null, true);
        yield "</h3>
            </div>
            <div class=\"list-group list-group-flush\">
               ";
        // line 41
        if ((($tmp = Session::haveRight("config", Twig\Extension\CoreExtension::constant("UPDATE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "                  <a class=\"list-group-item list-group-item-action\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/auth.settings.php"), "html", null, true);
            yield "\">
                     <i class=\"ti ti-adjustments me-1\"></i>
                     <span>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Setup"), "html", null, true);
            yield "</span>
                  </a>
               ";
        }
        // line 47
        yield "
               ";
        // line 48
        if ((($tmp = ($context["can_use_ldap"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "                  <a class=\"list-group-item list-group-item-action\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/authldap.php"), "html", null, true);
            yield "\">
                     <i class=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("AuthLDAP::getIcon"), "html", null, true);
            yield " me-1\"></i>
                     <span>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("AuthLDAP"), "html", null, true);
            yield "</span>
                  </a>
               ";
        } else {
            // line 54
            yield "                  <div class=\"alert alert-important alert-warning m-3\">
                    <i class=\"ti ti-alert-triangle me-2\"></i>
                    ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The LDAP extension of your PHP parser isn’t installed"), "html", null, true);
            yield "
                  </div>
               ";
        }
        // line 59
        yield "
               <a class=\"list-group-item list-group-item-action\" href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/authmail.php"), "html", null, true);
        yield "\">
                  <i class=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("AuthMail::getIcon"), "html", null, true);
        yield " me-1\"></i>
                  <span>";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("AuthMail"), "html", null, true);
        yield "</span>
               </a>

               <a class=\"list-group-item list-group-item-action\" href=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/auth.others.php"), "html", null, true);
        yield "\">
                  <i class=\"ti ti-login me-1\"></i>
                  <span>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Others authentication methods"), "html", null, true);
        yield "</span>
               </a>
            </div>
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
        return "pages/setup/authentication.html.twig";
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
        return array (  122 => 67,  117 => 65,  111 => 62,  107 => 61,  103 => 60,  100 => 59,  94 => 56,  90 => 54,  84 => 51,  80 => 50,  75 => 49,  73 => 48,  70 => 47,  64 => 44,  58 => 42,  56 => 41,  50 => 38,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/authentication.html.twig", "/var/www/html/glpi/templates/pages/setup/authentication.html.twig");
    }
}
