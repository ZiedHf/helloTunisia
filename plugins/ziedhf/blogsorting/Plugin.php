<?php namespace ZiedHf\BlogSorting;

use Log;
use Backend;
use Event;
use System\Classes\PluginBase;
use RainLab\Blog\Models\Category as CategoryModel;
use RainLab\Blog\Controllers\Categories as CategoriesController;
use RainLab\Blog\Models\Post as PostModel;
use RainLab\Blog\Controllers\Posts as PostsController;
/**
 * BlogSorting Plugin Information File
 */
class Plugin extends PluginBase
{

    const DEFAULT_ICON = 'icon-magic';
    // const LOCALIZATION_KEY = 'ziedhf.blogsorting::lang.';

    const SORT_COLUMN = 'ziedhf_blogsorting_order';

    public $require = [
        'RainLab.Blog'
    ];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Blog Sorting',
            'description' => 'Enhance sorting for Blog',
            'author'      => 'Zied Hf',
            'icon'        => 'icon-leaf',
            'homepage'    => 'https://github.com/ziedhf/helloTunisia'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        $this->extendController();
        $this->extendModel();
    }

    /**
     * Extend Categories controller
     */
    private function extendController()
    {
        $fieldName = self::SORT_COLUMN;
        $fieldsToAdd = [
            'label' => 'Order',
            'type' => 'number',
            'comment' => 'Set the order here',
            'allowEmpty' => true,
            'span' => 'left'
        ];

        CategoriesController::extendFormFields(function ($form, $model) use ($fieldName, $fieldsToAdd) {
            if (!$model instanceof CategoryModel) return;

            $form->addFields([$fieldName => $fieldsToAdd]);
        });

        PostsController::extendFormFields(function ($form, $model) use ($fieldName, $fieldsToAdd) {
            if (!$model instanceof PostModel) return;

            $form->addFields([$fieldName => array_merge($fieldsToAdd, ['tab' => 'rainlab.blog::lang.post.tab_manage'])], 'secondary');
        });
    }

    /**
     * Extend Category model
     */
    private function extendModel()
    {
        CategoryModel::extend(function ($model) {
            $model->addDynamicMethod('getBlogSortingOrderAttribute', function() use ($model) {
                return $model->{self::SORT_COLUMN};
            });
        });

        PostModel::extend(function ($model) {
            $model->addDynamicMethod('getBlogSortingOrderAttribute', function() use ($model) {
                return $model->{self::SORT_COLUMN};
            });

            /* $model->setAllowedSortingOptions([
                'published_at asc'  => 'rainlab.blog::lang.sorting.published_asc',
                'published_at desc' => 'rainlab.blog::lang.sorting.published_desc',
                'random'            => 'rainlab.blog::lang.sorting.random'
            ]); */

            /* $model::$setAllowedSortingOptions = [
                'published_at asc'  => 'rainlab.blog::lang.sorting.published_asc',
                'published_at desc' => 'rainlab.blog::lang.sorting.published_desc',
                'random'            => 'rainlab.blog::lang.sorting.random'
            ]; */
            /* Event::listen('backend.filter.extendQuery', function($filterWidget, $query, $scope) {
                Log::info('Scope');
                if ($scope->scopeName == 'listFrontEnd') {
                    $query->where('title', '=', '2sd Blog');
                }
            }); */
        });
    }


    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        // return []; // Remove this line to activate

        return [
            'ZiedHf\BlogSorting\Components\Posts'   => 'Posts'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'ziedhf.blogsorting.some_permission' => [
                'tab' => 'BlogSorting',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'blogsorting' => [
                'label'       => 'BlogSorting',
                'url'         => Backend::url('ziedhf/blogsorting/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['ziedhf.blogsorting.*'],
                'order'       => 500,
            ],
        ];
    }
}
