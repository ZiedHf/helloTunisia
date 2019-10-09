<?php
namespace ZiedHf\BlogSorting\Components;
use Log;
// use Lang;
use Cms\Classes\ComponentBase,
    Cms\Classes\Page;
use RainLab\Blog\Components\Posts as ComponentPost;
use ZiedHf\BlogSorting\Models\Post as BlogPost;
use ZiedHf\BlogSorting\Plugin;
/**
 * Class Post
 *
 * @package ZiedHf\BlogSorting\Components
 */
class Posts extends ComponentPost
{
    public $sortOrder;

    public function defineProperties()
    {
      $result = parent::defineProperties();
      $result['sortOrder']['default'] = Plugin::SORT_COLUMN . ' asc';
      return $result;
    }
    /**
     * Override the original method
     * - add the post URL to the post entity
     *
     * @return mixed
     */
    protected function listPosts()
    {
        $category = $this->category ? $this->category->id : null;

        /*
         * List all the posts, eager load their categories
         */
        $isPublished = !$this->checkEditor();

        $posts = BlogPost::with('categories')->listFrontEnd([
            'page'             => $this->property('pageNumber'),
            'sort'             => $this->property('sortOrder'),
            'perPage'          => $this->property('postsPerPage'),
            'search'           => trim(input('search')),
            'category'         => $category,
            'published'        => $isPublished,
            'exceptPost'       => is_array($this->property('exceptPost'))
                ? $this->property('exceptPost')
                : preg_split('/,\s*/', $this->property('exceptPost'), -1, PREG_SPLIT_NO_EMPTY),
            'exceptCategories' => is_array($this->property('exceptCategories'))
                ? $this->property('exceptCategories')
                : preg_split('/,\s*/', $this->property('exceptCategories'), -1, PREG_SPLIT_NO_EMPTY),
        ]);

        /*
         * Add a "url" helper attribute for linking to each post and category
         */
        $blogPostComponent = $this->getComponent('blogPost', $this->postPage);
        $blogPostsComponent = $this->getComponent('blogPosts', $this->categoryPage);

        $posts->each(function ($post) use ($blogPostComponent, $blogPostsComponent) {
            $post->setUrl(
                $this->postPage,
                $this->controller,
                [
                    'slug' => $this->urlProperty($blogPostComponent, 'slug')
                ]
            );

            $post->categories->each(function ($category) use ($blogPostsComponent) {
                $category->setUrl(
                    $this->categoryPage,
                    $this->controller,
                    [
                        'slug' => $this->urlProperty($blogPostsComponent, 'categoryFilter')
                    ]
                );
            });
        });

        return $posts;
    }

    public function getSortOrderOptions()
    {
        $options = BlogPost::$additionalSortingOptions;

        foreach ($options as $key => $value) {
            // $options[$key] = Lang::get($value);
            $options[$key] = $value;
        }

        return $options;
    }

    public function onRun()
    {
        parent::onRun();
        $this->posts = $this->page['posts'] = $this->listPosts();
    }
    /**
     * Override of original method
     * - add new setting for the post page id
     *
     * @return array
     */
    /* public function defineProperties()
    {
        $parentProps = parent::defineProperties();
        $properties = array_merge(
            $parentProps,
            [
                'postPage' => [
                    'title'       => 'rainlab.blog::lang.settings.posts_post',
                    'description' => 'rainlab.blog::lang.settings.posts_post_description',
                    'type'        => 'dropdown',
                    'default'     => 'blog/post',
                    'group'       => 'Links',
                ],
            ]
        );
        return is_array($properties) ? $properties : $parentProps;
    } */
    /**
     * Retrieve the postPage properties
     *
     * @return string
     */
    /* public function getPostPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    } */
}