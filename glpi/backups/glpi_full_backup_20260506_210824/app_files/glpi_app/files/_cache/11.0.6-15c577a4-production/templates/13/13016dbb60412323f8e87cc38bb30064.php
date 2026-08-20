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

/* components/user/picture.html.twig */
class __TwigTemplate_51950f3fe190d7d7f744aeabfac08419 extends Template
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
        $context["enable_anonymization"] = (((array_key_exists("enable_anonymization", $context) &&  !(null === $context["enable_anonymization"]))) ? ($context["enable_anonymization"]) : (false));
        // line 34
        $context["avatar_size"] = (((array_key_exists("avatar_size", $context) &&  !(null === $context["avatar_size"]))) ? ($context["avatar_size"]) : ("avatar-md"));
        // line 35
        $context["anonymized"] = (($context["enable_anonymization"] ?? null) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != Twig\Extension\CoreExtension::constant("Entity::ANONYMIZE_DISABLED")));
        // line 36
        $context["user"] = (((array_key_exists("user_object", $context) &&  !(null === $context["user_object"]))) ? ($context["user_object"]) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null))));
        // line 37
        $context["with_link"] = (((array_key_exists("with_link", $context) &&  !(null === $context["with_link"]))) ? ($context["with_link"]) : (true));
        // line 38
        $context["force_initials"] = (((array_key_exists("force_initials", $context) &&  !(null === $context["force_initials"]))) ? ($context["force_initials"]) : (false));
        // line 39
        if ((($tmp =  !($context["force_initials"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "    ";
            $context["user_thumbnail"] = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getThumbnailPicturePath", [($context["enable_anonymization"] ?? null)], "method", false, false, false, 40);
            // line 41
            yield "    ";
            if (((($context["user_thumbnail"] ?? null) == null) &&  !$this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("display_users_initials", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))) {
                // line 42
                yield "        ";
                $context["user_thumbnail"] = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getPicturePath", [($context["enable_anonymization"] ?? null)], "method", false, false, false, 42);
                // line 43
                yield "    ";
            }
        } else {
            // line 45
            yield "    ";
            $context["user_thumbnail"] = null;
        }
        // line 47
        yield "
";
        // line 48
        if ((($context["with_link"] ?? null) &&  !($context["anonymized"] ?? null))) {
            // line 49
            yield "   <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getLinkURL", [], "method", false, false, false, 49), "html", null, true);
            yield "\" class=\"d-flex align-items-center\">
";
        }
        // line 51
        yield "
";
        // line 52
        $context["bg_color"] = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getUserInitialsBgColor", [], "method", false, false, false, 52);
        // line 53
        $context["fg_color"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getFgColor", [($context["bg_color"] ?? null), 60]);
        // line 54
        yield "<span class=\"avatar ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar_size"] ?? null), "html", null, true);
        yield " rounded\"
      style=\"";
        // line 55
        if ((($tmp =  !(null === ($context["user_thumbnail"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "background-image: url(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_thumbnail"] ?? null), "html", null, true);
            yield "); background-color: inherit; ";
        } else {
            yield " background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bg_color"] ?? null), "html", null, true);
            yield ";";
        }
        yield " aspect-ratio: 1;\">
   ";
        // line 56
        if ((null === ($context["user_thumbnail"] ?? null))) {
            // line 57
            yield "         ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getUserInitials", [($context["enable_anonymization"] ?? null)], "method", false, false, false, 57), "html", null, true);
            yield "
   ";
        }
        // line 59
        yield "</span>

";
        // line 61
        if ((($context["with_link"] ?? null) &&  !($context["anonymized"] ?? null))) {
            // line 62
            yield "   ";
            if ((($tmp = (((array_key_exists("display_login", $context) &&  !(null === $context["display_login"]))) ? ($context["display_login"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "      <span class=\"ms-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 63)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), "html", null, true);
                yield "</span>
   ";
            }
            // line 65
            yield "
   </a>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/user/picture.html.twig";
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
        return array (  134 => 65,  128 => 63,  125 => 62,  123 => 61,  119 => 59,  113 => 57,  111 => 56,  99 => 55,  94 => 54,  92 => 53,  90 => 52,  87 => 51,  81 => 49,  79 => 48,  76 => 47,  72 => 45,  68 => 43,  65 => 42,  62 => 41,  59 => 40,  57 => 39,  55 => 38,  53 => 37,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/user/picture.html.twig", "/var/www/html/glpi/templates/components/user/picture.html.twig");
    }
}
