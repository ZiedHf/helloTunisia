<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/html/helloTunisia/plugins/offline/sitesearch/components/searchinput/content.htm */
class __TwigTemplate_0461694fd53c373a81b81df96b86c86e383c9eadb68a6364a970a8780aaee40f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h4 class=\"ss-autocomplete-result__title\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "url", [], "any", false, false, false, 2), "html", null, true);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "title", [], "any", false, false, false, 2);
        echo "</a>
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showProviderBadge", [], "any", false, false, false, 3)) {
            // line 4
            echo "        <span class=\"ss-autocomplete-result__badge\">
            ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "provider", [], "any", false, false, false, 5), "html", null, true);
            echo "
        </span>
    ";
        }
        // line 8
        echo "</h4>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/helloTunisia/plugins/offline/sitesearch/components/searchinput/content.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  51 => 5,  48 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h4 class=\"ss-autocomplete-result__title\">
    <a href=\"{{ result.url }}\">{{ result.title | raw }}</a>
    {% if __SELF__.showProviderBadge %}
        <span class=\"ss-autocomplete-result__badge\">
            {{ result.provider }}
        </span>
    {% endif %}
</h4>", "/var/www/html/helloTunisia/plugins/offline/sitesearch/components/searchinput/content.htm", "");
    }
}
