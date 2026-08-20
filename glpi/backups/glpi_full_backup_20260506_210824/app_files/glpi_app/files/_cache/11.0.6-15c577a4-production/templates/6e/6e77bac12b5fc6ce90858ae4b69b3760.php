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

/* components/form/inventory_info.html.twig */
class __TwigTemplate_6a90206dc429a8c03352ee4dbc8c5359 extends Template
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
        if ((Session::haveRight("inventory", Twig\Extension\CoreExtension::constant("READ")) && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDynamic", [], "method", false, false, false, 33) != false))) {
            // line 34
            yield "<div class=\"card m-n2 border-0 shadow-none\">
   <div class=\"card-header\">
      <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
         <i class=\"ti ti-cloud-download fa-2x\"></i>
      </div>
      <h4 class=\"card-title ps-5\">
         ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Inventory information"), "html", null, true);
            yield "
      </h4>
      ";
            // line 42
            $context["inventory_filename"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Inventoriable")) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getInventoryFileName", [false], "method", false, false, false, 42)) : (null));
            // line 43
            yield "      ";
            if ((($tmp =  !(null === ($context["inventory_filename"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "         <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("front/document.send.php?file=_inventory/" . ($context["inventory_filename"] ?? null))), "html", null, true);
                yield "\"
            class=\"btn btn-sm btn-secondary ms-auto\" target=\"_blank\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"
            title=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Download \"%1\$s\" inventory file"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["item"] ?? null))), "html", null, true);
                yield "\">
            <i class=\"ti ti-download\"></i>
         </a>
      ";
            } else {
                // line 51
                yield "         <span class=\"ms-auto\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Inventory file missing"), "html", null, true);
                yield "\">
            <i class=\"ti ti-ban\"></i>
            <span class=\"visually-hidden\">";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Inventory file missing"), "html", null, true);
                yield "</span>
         </span>
      ";
            }
            // line 56
            yield "   </div>

   ";
            // line 58
            $context["agent"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Inventoriable")) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getInventoryAgent", [], "method", false, false, false, 58)) : (null));
            // line 59
            yield "   ";
            if ((($tmp =  !(null === ($context["agent"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 60
                yield "      <div class=\"card-body row\">
         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "getTypeName", [], "method", false, false, false, 62), "html", null, true);
                yield "</label>
            <span>
               <i class=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "getIcon", [], "method", false, false, false, 64), "html", null, true);
                yield "\"></i>
               ";
                // line 65
                yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink(($context["agent"] ?? null));
                yield "
            </span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Useragent"), "html", null, true);
                yield "</label>
            <span>";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 71)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["useragent"] ?? null) : null), "html", null, true);
                yield "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Inventory tag"), "html", null, true);
                yield "</label>
            <span>";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 76)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["tag"] ?? null) : null), "html", null, true);
                yield "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Public contact address"), "html", null, true);
                yield "</label>
            <span>";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 81)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["remote_addr"] ?? null) : null), "html", null, true);
                yield "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Last contact"), "html", null, true);
                yield "</label>
            <span>";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 86)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["last_contact"] ?? null) : null)), "html", null, true);
                yield "</span>
         </div>

         ";
                // line 89
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["last_inventory_update"], "method", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 90
                    yield "            <div class=\"mb-3 col-12 col-sm-4\">
               <label class=\"form-label\" >";
                    // line 91
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Last inventory update"), "html", null, true);
                    yield "</label>
               <span>";
                    // line 92
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 92)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["last_inventory_update"] ?? null) : null)), "html", null, true);
                    yield "</span>
            </div>
         ";
                } else {
                    // line 95
                    yield "            <div class=\"mb-3 col-12 col-sm-4\">
            </div>
         ";
                }
                // line 98
                yield "
         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >
               ";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Agent status"), "html", null, true);
                yield "
               <i id=\"update-status\" class=\"ti ti-refresh d-inline-block\" role=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Ask agent about its current status"), "html", null, true);
                yield "\"></i>
            </label>
            <span id='agent_status'>";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unknown"), "html", null, true);
                yield "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >
               ";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Request inventory"), "html", null, true);
                yield "
               <i id=\"update-inventory\" class=\"ti ti-refresh d-inline-block\" role=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Request agent to proceed an new inventory"), "html", null, true);
                yield "\"></i>
            </label>
            <span id='inventory_status'>";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unknown"), "html", null, true);
                yield "</span>
         </div>
      </div>

      <script>
      \$(function () {
         \$('#update-status').on('click', function() {
            var icon = \$(this);
            icon.addClass('icon-rotate');
            \$.ajax({
               type: 'POST',
               url: `\${CFG_GLPI.root_doc}/ajax/agent.php`,
               timeout: 30000, // 30 seconds timeout
               dataType: 'json',
               data: {
                  action: '";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Agent::ACTION_STATUS"), "js"), "html", null, true);
                yield "',
                  id: ";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "getID", [], "method", false, false, false, 128), "html", null, true);
                yield "
               },
               success: function(json) {
                  \$('#agent_status').text(json.answer);
               },
               complete: function() {
                  icon.removeClass('icon-rotate');
               }
            });
         });

         \$('#update-inventory').on('click', function() {
            var icon = \$(this);
            icon.addClass('icon-rotate');
            \$.ajax({
               type: 'POST',
               url: `\${CFG_GLPI.root_doc}/ajax/agent.php`,
               timeout: 30000, // 30 seconds timeout
               dataType: 'json',
               data: {
                  action: '";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Agent::ACTION_INVENTORY"), "js"), "html", null, true);
                yield "',
                  id: ";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "getID", [], "method", false, false, false, 149), "html", null, true);
                yield "
               },
               success: function(json) {
                  \$('#inventory_status').text(json.answer);
               },
               complete: function() {
                  icon.removeClass('icon-rotate');
               }
            });
         });
      });
      </script>
   ";
            } else {
                // line 162
                yield "   <div class=\"card-body row\">
      <div class=\"mb-3 col-12 col-sm-6\">
         ";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Agent information is not available."), "html", null, true);
                yield "
      </div>
   </div>
   ";
            }
            // line 168
            yield "
   ";
            // line 170
            yield "   ";
            // line 171
            yield "   ";
            if ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Inventoriable") && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getInventoryAgent", [], "method", false, false, false, 171) == null)) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["last_inventory_update"], "method", false, false, false, 171))) {
                // line 172
                yield "      <div class=\"card-body row\">
         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Last inventory"), "html", null, true);
                yield "</label>
            <span>";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 175)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["last_inventory_update"] ?? null) : null)), "html", null, true);
                yield "</span>
         </div>
      </div>
   ";
            }
            // line 179
            yield "
   ";
            // line 180
            if ((((($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 180)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["id"] ?? null) : null) > 0) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_dynamic"], "method", false, false, false, 180))) {
                // line 181
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::AUTOINVENTORY_INFORMATION"), ($context["item"] ?? null)), "html", null, true);
                yield "
   ";
            }
            // line 183
            yield "</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/inventory_info.html.twig";
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
        return array (  325 => 183,  319 => 181,  317 => 180,  314 => 179,  307 => 175,  303 => 174,  299 => 172,  296 => 171,  294 => 170,  291 => 168,  284 => 164,  280 => 162,  264 => 149,  260 => 148,  237 => 128,  233 => 127,  215 => 112,  210 => 110,  206 => 109,  198 => 104,  193 => 102,  189 => 101,  184 => 98,  179 => 95,  173 => 92,  169 => 91,  166 => 90,  164 => 89,  158 => 86,  154 => 85,  147 => 81,  143 => 80,  136 => 76,  132 => 75,  125 => 71,  121 => 70,  113 => 65,  109 => 64,  104 => 62,  100 => 60,  97 => 59,  95 => 58,  91 => 56,  85 => 53,  79 => 51,  72 => 47,  65 => 44,  62 => 43,  60 => 42,  55 => 40,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/inventory_info.html.twig", "/var/www/html/glpi/templates/components/form/inventory_info.html.twig");
    }
}
