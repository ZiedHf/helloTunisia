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

/* /var/www/html/helloTunisia/themes/responsiv-flat/pages/blog/post.htm */
class __TwigTemplate_63accb18a397a1b044fbdeaac2821ad3000ceb94d1ab1f301aa416f20ad0991a extends \Twig\Template
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
        echo "<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Blog Post</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">

            <!-- Blog Post #1 -->
            <div class=\"blog\">
                <div class=\"blog-desc\">
                    ";
        // line 14
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, false, 14);
        // line 15
        echo "                    
                    <h5>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</h5>
                    <hr />
                    <p class=\"text-muted\">
                        Posted
                        ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 20), "count", [], "any", false, false, false, 20)) {
            echo " in
                            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 21));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 22
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 22), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 22)) {
                    echo ", ";
                }
                // line 23
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                        ";
        }
        // line 25
        echo "                        on ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 25), "M d, Y"), "html", null, true);
        echo "
                    </p>
                    
                    <!--Thunbnail-->
                    ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 29), "count", [], "any", false, false, false, 29)) {
            // line 30
            echo "                        <div class=\"featured-images text-center\">
                            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 32
                echo "                                <p>
                                    <img
                                        data-src=\"";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 34), "html", null, true);
                echo "\"
                                        src=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 35), "html", null, true);
                echo "\"
                                        alt=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 36), "html", null, true);
                echo "\"
                                        class=\"img-responsive\" />
                                </p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                        </div>
                        <hr />
                    ";
        }
        // line 43
        echo "                    <!--END Thunbnail-->

                    <div class=\"content\">";
        // line 45
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 45);
        echo "</div>
                </div>
            </div>

            <!-- Pagination -->
            <ul class=\"pager pull-right\">
                <li class=\"previous\">
                    <a href=\"#\">
                        <span class=\"fui-arrow-left\"></span>
                        Previous
                    </a>
                </li>
                <li class=\"next\">
                    <a href=\"#\">
                        Next
                        <span class=\"fui-arrow-right\"></span>
                    </a>
                </li>
            </ul>
            <div class=\"clearfix\"></div>

        </div>
        <div class=\"col-sm-3\">

            ";
        // line 69
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 70
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/helloTunisia/themes/responsiv-flat/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 70,  186 => 69,  159 => 45,  155 => 43,  150 => 40,  140 => 36,  136 => 35,  132 => 34,  128 => 32,  124 => 31,  121 => 30,  119 => 29,  111 => 25,  108 => 24,  94 => 23,  85 => 22,  68 => 21,  64 => 20,  57 => 16,  54 => 15,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Blog Post</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">

            <!-- Blog Post #1 -->
            <div class=\"blog\">
                <div class=\"blog-desc\">
                    {% set post = blogPost.post %}
                    
                    <h5>{{post.title}}</h5>
                    <hr />
                    <p class=\"text-muted\">
                        Posted
                        {% if post.categories.count %} in
                            {% for category in post.categories %}
                                <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                            {% endfor %}
                        {% endif %}
                        on {{ post.published_at|date('M d, Y') }}
                    </p>
                    
                    <!--Thunbnail-->
                    {% if post.featured_images.count %}
                        <div class=\"featured-images text-center\">
                            {% for image in post.featured_images %}
                                <p>
                                    <img
                                        data-src=\"{{ image.filename }}\"
                                        src=\"{{ image.path }}\"
                                        alt=\"{{ image.description }}\"
                                        class=\"img-responsive\" />
                                </p>
                            {% endfor %}
                        </div>
                        <hr />
                    {% endif %}
                    <!--END Thunbnail-->

                    <div class=\"content\">{{ post.content_html|raw }}</div>
                </div>
            </div>

            <!-- Pagination -->
            <ul class=\"pager pull-right\">
                <li class=\"previous\">
                    <a href=\"#\">
                        <span class=\"fui-arrow-left\"></span>
                        Previous
                    </a>
                </li>
                <li class=\"next\">
                    <a href=\"#\">
                        Next
                        <span class=\"fui-arrow-right\"></span>
                    </a>
                </li>
            </ul>
            <div class=\"clearfix\"></div>

        </div>
        <div class=\"col-sm-3\">

            {% partial 'blog/sidebar' %}

        </div>
    </div>
</div>", "/var/www/html/helloTunisia/themes/responsiv-flat/pages/blog/post.htm", "");
    }
}
