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

/* __string_template__0075d21ee51a6ba930ad278e45597422 */
class __TwigTemplate_1930c08740b6e6c3ea5b7417bd88b987 extends Template
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
        // line 1
        yield "            <div class='documentation'>";
        yield ($context["md"] ?? null);
        yield "</div>
            <script type=\"module\">
                import('/js/modules/Monaco/MonacoEditor.js').then(() => {
                    const lang_elements = \$('code[class^=\"language-\"]');
                    lang_elements.each((index, element) => {
                        const el = \$(element);
                        const code = el.text();
                        let lang = el.attr('class').replace('language-', '');
                        switch (lang) {
                            case 'bash':
                                lang = 'shell';
                                break;
                            case 'json':
                                lang = 'javascript';
                                break;
                        }
                        window.GLPI.Monaco.colorizeText(code, lang).then((html) => {
                            el.html(html);
                        });
                    });
                });
            </script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__0075d21ee51a6ba930ad278e45597422";
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
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__0075d21ee51a6ba930ad278e45597422", "");
    }
}
