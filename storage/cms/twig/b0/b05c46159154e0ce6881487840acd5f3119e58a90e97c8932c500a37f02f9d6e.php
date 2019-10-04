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

/* /var/www/html/helloTunisia/themes/responsiv-flat/pages/home.htm */
class __TwigTemplate_474169f35a2cbb7e25b97b89c259949dc48b05bdd9cbe53b020d21752870c138 extends \Twig\Template
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
        echo "<section class=\"home-title\">
                ";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("slider"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "            <!--
            <div class=\"col-sm-7 col-sm-offset-1 player-wrapper\">
                <div class=\"player\">
                    <iframe src=\"http://player.vimeo.com/video/29568236?color=3498db\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
            -->
</section>

<br />

";
        // line 14
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("searchInput"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "
<div class=\"container\">

    <!-- Services -->
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>What we do</span></h4>
            <p>He hasn't got a freckle my mad as a middy. Trent from punchy maccas no dramas shazza got us some ripper. As dry as a bradman flamin lets throw a cut lunch commando.</p>

            ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "        </div>
    </div>
    
    <!-- Blog -->
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>Latest News</span></h4>
            <p>Follow our latest news !</p>
            ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("latestArticles"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "        </div>
    </div>

</div>

<br />";
    }

    public function getTemplateName()
    {
        return "/var/www/html/helloTunisia/themes/responsiv-flat/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 34,  86 => 33,  76 => 25,  72 => 24,  61 => 15,  57 => 14,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"home-title\">
                {% component 'slider' %}
            <!--
            <div class=\"col-sm-7 col-sm-offset-1 player-wrapper\">
                <div class=\"player\">
                    <iframe src=\"http://player.vimeo.com/video/29568236?color=3498db\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
            -->
</section>

<br />

{% component 'searchInput' %}

<div class=\"container\">

    <!-- Services -->
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>What we do</span></h4>
            <p>He hasn't got a freckle my mad as a middy. Trent from punchy maccas no dramas shazza got us some ripper. As dry as a bradman flamin lets throw a cut lunch commando.</p>

            {% partial 'services' %}
        </div>
    </div>
    
    <!-- Blog -->
    <div class=\"row our-services\">
        <div class=\"col-sm-12\">
            <h4 class=\"headline\"><span>Latest News</span></h4>
            <p>Follow our latest news !</p>
            {% partial 'latestArticles' %}
        </div>
    </div>

</div>

<br />", "/var/www/html/helloTunisia/themes/responsiv-flat/pages/home.htm", "");
    }
}
