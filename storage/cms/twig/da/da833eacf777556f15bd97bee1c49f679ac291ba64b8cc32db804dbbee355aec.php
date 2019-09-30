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

/* /var/www/html/helloTunisia/plugins/offline/sitesearch/components/searchinput/autocomplete.htm */
class __TwigTemplate_86e5679cde3e8d393ccaeaeeddea8a12ace0e345038434f3877375f30324a2ec extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "count", [], "any", false, false, false, 1)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["results"] ?? null), 0, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "autoCompleteResultCount", [], "any", false, false, false, 2)));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 3
                echo "        ";
                // line 4
                echo "        ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['result'] = $context["result"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::searchresult.htm")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 5
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "
    ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "searchPage", [], "any", false, false, false, 7)) {
                // line 8
                echo "        <p class=\"ss-show-all-results\">
            <a href=\"";
                // line 9
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "searchPage", [], "any", false, false, false, 9));
                echo "?q=";
                echo twig_escape_filter($this->env, twig_urlencode_filter(($context["query"] ?? null), true), "html", null, true);
                echo "\">
                Show all results &raquo;
            </a>
        </p>
    ";
            }
        } else {
            // line 15
            echo "    ";
            // line 16
            echo "    <p>Your search for ";
            echo twig_escape_filter($this->env, ($context["query"] ?? null), "html", null, true);
            echo " returned no results.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/helloTunisia/plugins/offline/sitesearch/components/searchinput/autocomplete.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  77 => 15,  66 => 9,  63 => 8,  61 => 7,  58 => 6,  52 => 5,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if results.count %}
    {% for result in results | slice(0, __SELF__.autoCompleteResultCount) %}
        {# Display results #}
        {% partial __SELF__ ~ '::searchresult.htm' result = result %}
    {% endfor %}

    {% if __SELF__.searchPage %}
        <p class=\"ss-show-all-results\">
            <a href=\"{{ __SELF__.searchPage | page }}?q={{ query | url_encode(true) }}\">
                Show all results &raquo;
            </a>
        </p>
    {% endif %}
{% else %}
    {# No results found #}
    <p>Your search for {{ query }} returned no results.</p>
{% endif %}", "/var/www/html/helloTunisia/plugins/offline/sitesearch/components/searchinput/autocomplete.htm", "");
    }
}
