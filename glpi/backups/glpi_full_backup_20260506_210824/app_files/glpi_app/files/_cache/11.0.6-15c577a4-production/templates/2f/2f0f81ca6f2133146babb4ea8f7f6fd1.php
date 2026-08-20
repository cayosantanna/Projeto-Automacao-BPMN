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

/* components/form/pictures.html.twig */
class __TwigTemplate_7be23640b238c560f0f8185feabda391 extends Template
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
        $context["model_itemtype"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getModelClass", [], "method", false, false, false, 35);
        // line 36
        $context["gallery_type"] = ((array_key_exists("gallery_type", $context)) ? (Twig\Extension\CoreExtension::default(($context["gallery_type"] ?? null), "")) : (""));
        // line 37
        if (( !(null === ($context["model_itemtype"] ?? null)) || $this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\AssetImage"))) {
            // line 38
            yield "
    ";
            // line 39
            $context["picture_single"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getItemtypeOrModelPicture", ["picture"], "method", false, false, false, 39);
            // line 40
            yield "    ";
            $context["picture_front"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getItemtypeOrModelPicture", ["picture_front"], "method", false, false, false, 40);
            // line 41
            yield "    ";
            $context["picture_rear"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getItemtypeOrModelPicture", ["picture_rear"], "method", false, false, false, 41);
            // line 42
            yield "    ";
            $context["pictures_misc"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getItemtypeOrModelPicture", ["pictures"], "method", false, false, false, 42);
            // line 43
            yield "    ";
            $context["has_pictures"] = ((( !Twig\Extension\CoreExtension::testEmpty(($context["picture_single"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["picture_front"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["picture_rear"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["pictures_misc"] ?? null)));
            // line 44
            yield "    ";
            $context["has_qr"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 44) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 44), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("asset_types")));
            // line 45
            yield "
    ";
            // line 46
            if ((($context["has_pictures"] ?? null) || ($context["has_qr"] ?? null))) {
                // line 47
                yield "        <div class=\"";
                yield (((($context["gallery_type"] ?? null) == "horizontal")) ? ("col-12 me-n2") : (""));
                yield " d-flex flex-column card\">
            <div class=\"card-body\">
                ";
                // line 49
                if ((($tmp = ($context["has_pictures"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 50
                    yield "                    <h3 class=\"mb-3\">
                        ";
                    // line 51
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Picture", "Pictures", Session::getPluralNumber()), "html", null, true);
                    yield "
                    </h3>

                    <div class=\"d-flex\">
                        ";
                    // line 55
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["picture_single"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 56
                        yield "                            ";
                        $context["picture_single"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["picture_single"] ?? null));
                        // line 57
                        yield "                            ";
                        $context["imgs"] = [Twig\Extension\CoreExtension::merge(($context["picture_single"] ?? null), ["title" => _n("Picture", "Pictures", 1)])];
                        // line 58
                        yield "                        ";
                    } else {
                        // line 59
                        yield "                            ";
                        if ((( !Twig\Extension\CoreExtension::testEmpty(($context["picture_front"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["picture_rear"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["pictures_misc"] ?? null)))) {
                            // line 60
                            yield "                                ";
                            $context["imgs"] = [];
                            // line 61
                            yield "                                ";
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["picture_front"] ?? null)) >= 1)) {
                                // line 62
                                yield "                                    ";
                                $context["picture_front"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["picture_front"] ?? null));
                                // line 63
                                yield "                                    ";
                                $context["imgs"] = Twig\Extension\CoreExtension::merge(($context["imgs"] ?? null), [Twig\Extension\CoreExtension::merge(($context["picture_front"] ?? null), ["title" => __("Front picture")])]);
                                // line 64
                                yield "                                ";
                            }
                            // line 65
                            yield "                                ";
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["picture_rear"] ?? null)) >= 1)) {
                                // line 66
                                yield "                                    ";
                                $context["picture_rear"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["picture_rear"] ?? null));
                                // line 67
                                yield "                                    ";
                                $context["imgs"] = Twig\Extension\CoreExtension::merge(($context["imgs"] ?? null), [Twig\Extension\CoreExtension::merge(($context["picture_rear"] ?? null), ["title" => __("Rear picture")])]);
                                // line 68
                                yield "                                ";
                            }
                            // line 69
                            yield "                                ";
                            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["pictures_misc"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 70
                                yield "                                    ";
                                $context["imgs"] = Twig\Extension\CoreExtension::merge(($context["imgs"] ?? null), ($context["pictures_misc"] ?? null));
                                // line 71
                                yield "                                ";
                            }
                            // line 72
                            yield "                            ";
                        }
                        // line 73
                        yield "                        ";
                    }
                    // line 74
                    yield "                        ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "components/photoswipe.html.twig", ["imgs" => ($context["imgs"] ?? null), "gallery_type" => ($context["gallery_type"] ?? null)]);
                    yield "
                    </div>
                ";
                }
                // line 77
                yield "                ";
                if ((($tmp = ($context["has_qr"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 78
                    yield "                    ";
                    yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 78, $this->getSourceContext())->macro_htmlField(...["qrcode", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("BarcodeManager::renderQRCode", [                    // line 80
($context["item"] ?? null)]), __("Asset URL"), ["is_horizontal" => false, "helper" => __("Scan this QRCode to be redirected to the asset page from your mobile device")]]);
                    // line 86
                    yield "
                ";
                }
                // line 88
                yield "            </div>
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
        return "components/form/pictures.html.twig";
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
        return array (  173 => 88,  169 => 86,  167 => 80,  165 => 78,  162 => 77,  155 => 74,  152 => 73,  149 => 72,  146 => 71,  143 => 70,  140 => 69,  137 => 68,  134 => 67,  131 => 66,  128 => 65,  125 => 64,  122 => 63,  119 => 62,  116 => 61,  113 => 60,  110 => 59,  107 => 58,  104 => 57,  101 => 56,  99 => 55,  92 => 51,  89 => 50,  87 => 49,  81 => 47,  79 => 46,  76 => 45,  73 => 44,  70 => 43,  67 => 42,  64 => 41,  61 => 40,  59 => 39,  56 => 38,  54 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/pictures.html.twig", "/var/www/html/glpi/templates/components/form/pictures.html.twig");
    }
}
