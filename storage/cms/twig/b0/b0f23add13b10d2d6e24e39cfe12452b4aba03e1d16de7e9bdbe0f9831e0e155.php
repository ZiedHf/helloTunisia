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

/* /var/www/html/helloTunisia/themes/responsiv-flat/partials/nav.htm */
class __TwigTemplate_1b2d637a89692e2259d124bfe4a4970bc355ef183f7c0a4e10d46d9c2e302558 extends \Twig\Template
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
        // line 2
        $context["links"] = ["home" => [0 => "home", 1 => "Home"], "pages" => ["name" => "Pages", "sublinks" => ["about" => [0 => "samples/about", 1 => "About Us"], "contact" => [0 => "samples/contact", 1 => "Contact Us"], "pricing-table" => [0 => "samples/pricing-table", 1 => "Pricing Table"], "services" => [0 => "samples/services", 1 => "Services"], "signin" => [0 => "samples/signin", 1 => "Sign In"], "register" => [0 => "samples/register", 1 => "Register"], "error" => [0 => "error", 1 => "Error Page"], "404" => [0 => "404", 1 => "404 Page"]]], "portfolio" => ["name" => "Portfolio", "sublinks" => ["portfolio" => [0 => "portfolio/portfolio", 1 => "Portfolio"], "project" => [0 => "portfolio/project", 1 => "Project"]]], "blog" => ["name" => "Blog", "sublinks" => ["blog" => [0 => "blog/blog", 1 => "Blog"], "post" => [0 => "blog/post", 1 => "Blog Post"]]], "shop" => ["name" => "Shop", "sublinks" => ["shop" => [0 => "shop/shop", 1 => "Shop"], "product" => [0 => "shop/product", 1 => "Product"], "cart" => [0 => "shop/cart", 1 => "Cart"]]], "ui-elements" => [0 => "ui-elements", 1 => "UI Elements"]];
        // line 44
        echo "
";
        // line 67
        echo "
";
        // line 68
        $macros["nav"] = $this->macros["nav"] = $this;
        // line 69
        echo "
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"fa fa-bars\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Flat</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 81
        echo twig_call_macro($macros["nav"], "macro_render_menu", [($context["links"] ?? null)], 81, $context, $this->getSourceContext());
        echo "
                <li>
                    <button
                        onclick=\"window.location='";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/signin");
        echo "'\"
                        class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">
                        Sign in
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>";
    }

    // line 45
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "links" => $__links__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 46
            echo "    ";
            $macros["subnav"] = $this;
            // line 47
            echo "
    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 49
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 49)) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 51
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 51)) ? ("#") : ($this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 51)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 51)) : ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["link"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null))))));
                echo "\"
                ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 52)) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 53
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 53)) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 55
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 55)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 55)) : ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null))), "html", null, true);
                echo "
                ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 56)) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 57
                echo "            </a>
            ";
                // line 58
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 58)) {
                    // line 59
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 61
                    echo twig_call_macro($macros["subnav"], "macro_render_menu", [twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 61)], 61, $context, $this->getSourceContext());
                    echo "
                </ul>
            ";
                }
                // line 64
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/helloTunisia/themes/responsiv-flat/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 64,  145 => 61,  141 => 59,  139 => 58,  136 => 57,  132 => 56,  128 => 55,  122 => 53,  118 => 52,  114 => 51,  106 => 49,  102 => 48,  99 => 47,  96 => 46,  83 => 45,  70 => 84,  64 => 81,  57 => 77,  47 => 69,  45 => 68,  42 => 67,  39 => 44,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Note: Only one levels of sublinks are supported by Bootstrap 3 #}
{% set
    links = {
        'home': ['home', 'Home'],
        'pages': {
            name: 'Pages',
            sublinks: {
                'about':         ['samples/about', 'About Us'],
                'contact':       ['samples/contact', 'Contact Us'],
                'pricing-table': ['samples/pricing-table', 'Pricing Table'],
                'services':      ['samples/services', 'Services'],
                'signin':        ['samples/signin', 'Sign In'],
                'register':      ['samples/register', 'Register'],
                'error':         ['error', 'Error Page'],
                '404':           ['404', '404 Page'],
            },
        },
        'portfolio': {
            name: 'Portfolio',
            sublinks: {
                'portfolio': ['portfolio/portfolio', 'Portfolio'],
                'project': ['portfolio/project', 'Project'],
            },
        },
        'blog': {
            name: 'Blog',
            sublinks: {
                'blog': ['blog/blog', 'Blog'],
                'post': ['blog/post', 'Blog Post'],
            },
        },
        'shop': {
            name: 'Shop',
            sublinks: {
                'shop': ['shop/shop', 'Shop'],
                'product': ['shop/product', 'Product'],
                'cart': ['shop/cart', 'Cart'],
            },
        },
        'ui-elements': ['ui-elements', 'UI Elements'],

    }
%}

{% macro render_menu(links) %}
    {% import _self as subnav %}

    {% for code, link in links %}
        <li class=\"{{ code == currentPage ? 'active' }} {{ link.sublinks ? 'dropdown' }}\">
            <a
                href=\"{{ link.sublinks ? '#' : (link.page ?: link[0])|page }}\"
                {% if link.sublinks %}data-toggle=\"dropdown\"{% endif %}
                class=\"{{ link.sublinks ? 'dropdown-toggle' }}\"
            >
                {{ link.name ?: link[1] }}
                {% if link.sublinks %}<span class=\"caret\"></span>{% endif %}
            </a>
            {% if link.sublinks %}
                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    {{ subnav.render_menu(link.sublinks) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% import _self as nav %}

<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"fa fa-bars\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Flat</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                {{ nav.render_menu(links) }}
                <li>
                    <button
                        onclick=\"window.location='{{ 'samples/signin'|page }}'\"
                        class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">
                        Sign in
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>", "/var/www/html/helloTunisia/themes/responsiv-flat/partials/nav.htm", "");
    }
}
