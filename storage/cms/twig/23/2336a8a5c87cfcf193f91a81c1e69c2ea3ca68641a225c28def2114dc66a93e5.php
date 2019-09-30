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

/* /var/www/html/helloTunisia/plugins/dizoo/slider/components/slider/default.htm */
class __TwigTemplate_18b037363e81a1cc7ec34b46bec4feedadbb848a0ee50157fa1b3595b865d3ce extends \Twig\Template
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
        if (($context["slides"] ?? null)) {
            // line 2
            echo "<!-- Start Hero Area -->
<section class=\"section hero-area\">
    <div class=\"hero-slider owl-carousel owl-controls-1\" data-nav=\"true\" data-loop=\"";
            // line 4
            echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "loop"], "method", false, false, false, 4)) ? ("true") : ("false"));
            echo "\" data-autoplay=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "autoplay"], "method", false, false, false, 4)) ? ("true") : ("false"));
            echo "\" data-smart-speed=\"1000\" data-autoplay-timeout=\"10000\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 6
                echo "        <div class=\"hero-slider-item slider-bg-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "image_align", [], "any", false, false, false, 6), "html", null, true);
                echo " \" data-bg-img=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 6), "thumb", [0 => 1920, 1 => 900, 2 => ["mode" => "crop"]], "method", false, false, false, 6), "html", null, true);
                echo "\">
            <div class=\"hero-overlay\">
                <div class=\"hero-overlay-wrapper\">
                    <div class=\"pos-tb-center hero-overlay-inner\">
                        <div class=\"container\">
                            <div class=\"row row-tb-20\">
                                <div class=\"col-md-8";
                // line 12
                if ((twig_get_attribute($this->env, $this->source, $context["slide"], "text_align", [], "any", false, false, false, 12) == "center")) {
                    echo " col-md-offset-2 text-center";
                }
                echo "\">
                                    ";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["slide"], "subtitle", [], "any", false, false, false, 13)) {
                    echo "<h2 style=\"font-size: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "subtitle_size", [], "any", false, false, false, 13), "html", null, true);
                    echo "px !important;\" class=\"mb-10\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "subtitle", [], "any", false, false, false, 13), "html", null, true);
                    echo "</h2>";
                }
                // line 14
                echo "                                    <h1 style=\"font-size: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "title_size", [], "any", false, false, false, 14), "html", null, true);
                echo "px !important;\" class=\"t-uppercase mb-20\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 14), "html", null, true);
                echo "</h1>
                                    ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 15)) {
                    echo "<p class=\"mb-30 color-lighter h4\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 15), "html", null, true);
                    echo "</p>";
                }
                // line 16
                echo "                                    ";
                if (((twig_get_attribute($this->env, $this->source, $context["slide"], "button_1_active", [], "any", false, false, false, 16) && twig_get_attribute($this->env, $this->source, $context["slide"], "button_1_text", [], "any", false, false, false, 16)) && twig_get_attribute($this->env, $this->source, $context["slide"], "button_1_url", [], "any", false, false, false, 16))) {
                    // line 17
                    echo "                                    <a ";
                    if (twig_get_attribute($this->env, $this->source, $context["slide"], "button_1_color", [], "any", false, false, false, 17)) {
                        echo "style=\"background-color:";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "button_1_color", [], "any", false, false, false, 17), "html", null, true);
                        echo "; border-color:";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "button_1_color", [], "any", false, false, false, 17), "html", null, true);
                        echo ";\" ";
                    }
                    echo "href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "button_1_url", [], "any", false, false, false, 17), "html", null, true);
                    echo "\" class=\"btn btn-rounded btn-wt btn-lg mr-10 mb-20\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "button_1_text", [], "any", false, false, false, 17), "html", null, true);
                    echo "</a>
                                    ";
                }
                // line 19
                echo "                                    ";
                if (((twig_get_attribute($this->env, $this->source, $context["slide"], "button_2_active", [], "any", false, false, false, 19) && twig_get_attribute($this->env, $this->source, $context["slide"], "button_2_text", [], "any", false, false, false, 19)) && twig_get_attribute($this->env, $this->source, $context["slide"], "button_2_url", [], "any", false, false, false, 19))) {
                    // line 20
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "button_2_url", [], "any", false, false, false, 20), "html", null, true);
                    echo "\" class=\"btn btn-rev btn-rounded btn-o btn-lg mb-20\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "button_2_text", [], "any", false, false, false, 20), "html", null, true);
                    echo "</a>
                                    ";
                }
                // line 22
                echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </div>
</section>
<!-- End Hero Area -->
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/helloTunisia/plugins/dizoo/slider/components/slider/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 30,  122 => 22,  114 => 20,  111 => 19,  95 => 17,  92 => 16,  86 => 15,  79 => 14,  71 => 13,  65 => 12,  53 => 6,  49 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if slides %}
<!-- Start Hero Area -->
<section class=\"section hero-area\">
    <div class=\"hero-slider owl-carousel owl-controls-1\" data-nav=\"true\" data-loop=\"{{ __SELF__.property('loop') ? 'true':'false' }}\" data-autoplay=\"{{ __SELF__.property('autoplay') ? 'true':'false' }}\" data-smart-speed=\"1000\" data-autoplay-timeout=\"10000\">
        {% for slide in slides %}
        <div class=\"hero-slider-item slider-bg-{{ slide.image_align }} \" data-bg-img=\"{{ slide.image.thumb(1920,900,{'mode':'crop'}) }}\">
            <div class=\"hero-overlay\">
                <div class=\"hero-overlay-wrapper\">
                    <div class=\"pos-tb-center hero-overlay-inner\">
                        <div class=\"container\">
                            <div class=\"row row-tb-20\">
                                <div class=\"col-md-8{% if slide.text_align == 'center' %} col-md-offset-2 text-center{% endif %}\">
                                    {% if slide.subtitle %}<h2 style=\"font-size: {{ slide.subtitle_size }}px !important;\" class=\"mb-10\">{{ slide.subtitle }}</h2>{% endif %}
                                    <h1 style=\"font-size: {{ slide.title_size }}px !important;\" class=\"t-uppercase mb-20\">{{ slide.title }}</h1>
                                    {% if slide.description %}<p class=\"mb-30 color-lighter h4\">{{ slide.description }}</p>{% endif %}
                                    {% if slide.button_1_active and slide.button_1_text and slide.button_1_url %}
                                    <a {% if slide.button_1_color %}style=\"background-color:{{ slide.button_1_color }}; border-color:{{ slide.button_1_color }};\" {% endif %}href=\"{{ slide.button_1_url }}\" class=\"btn btn-rounded btn-wt btn-lg mr-10 mb-20\">{{ slide.button_1_text }}</a>
                                    {% endif %}
                                    {% if slide.button_2_active and slide.button_2_text and slide.button_2_url %}
                                    <a href=\"{{ slide.button_2_url }}\" class=\"btn btn-rev btn-rounded btn-o btn-lg mb-20\">{{ slide.button_2_text }}</a>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</section>
<!-- End Hero Area -->
{% endif %}", "/var/www/html/helloTunisia/plugins/dizoo/slider/components/slider/default.htm", "");
    }
}
