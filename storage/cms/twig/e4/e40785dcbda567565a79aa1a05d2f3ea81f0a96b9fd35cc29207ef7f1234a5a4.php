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

/* /var/www/html/helloTunisia/plugins/offline/sitesearch/components/searchinput/default.htm */
class __TwigTemplate_e526300069ad5b8da94a08f98d410cc99da22597785839dfa50f7a95fd2e2816 extends \Twig\Template
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
        echo "<form action=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "searchPage", [], "any", false, false, false, 1));
        echo "?q=";
        echo twig_escape_filter($this->env, twig_urlencode_filter(($context["query"] ?? null), true), "html", null, true);
        echo "\" method=\"get\">
    <div class=\"ss-search-form\">
        <div class=\"ss-search-form__input\">
            <input name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" 
                   value=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "query", [], "any", false, false, false, 5), "html", null, true);
        echo "\"
                   autocomplete=\"off\"
                   autofocus
                    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "useAutoComplete", [], "any", false, false, false, 8)) {
            // line 9
            echo "                        data-track-input
                        data-request=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onType\"
                        data-request-before-update=\"document.getElementById('autocomplete-results').classList.add('ss-search-form__results--visible')\"
                        data-request-update=\"'";
            // line 12
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::autocomplete': '#autocomplete-results'\"
                    ";
        }
        // line 14
        echo "            >
            <button class=\"ss-search-form__submit\" type=\"submit\">Search</button>
        </div>
        <div class=\"ss-search-form__results\" id=\"autocomplete-results\"></div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/helloTunisia/plugins/offline/sitesearch/components/searchinput/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  63 => 12,  58 => 10,  55 => 9,  53 => 8,  47 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ __SELF__.searchPage | page }}?q={{ query | url_encode(true) }}\" method=\"get\">
    <div class=\"ss-search-form\">
        <div class=\"ss-search-form__input\">
            <input name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" 
                   value=\"{{ __SELF__.query }}\"
                   autocomplete=\"off\"
                   autofocus
                    {% if __SELF__.useAutoComplete %}
                        data-track-input
                        data-request=\"{{ __SELF__ }}::onType\"
                        data-request-before-update=\"document.getElementById('autocomplete-results').classList.add('ss-search-form__results--visible')\"
                        data-request-update=\"'{{ __SELF__ }}::autocomplete': '#autocomplete-results'\"
                    {% endif %}
            >
            <button class=\"ss-search-form__submit\" type=\"submit\">Search</button>
        </div>
        <div class=\"ss-search-form__results\" id=\"autocomplete-results\"></div>
    </div>
</form>
", "/var/www/html/helloTunisia/plugins/offline/sitesearch/components/searchinput/default.htm", "");
    }
}
