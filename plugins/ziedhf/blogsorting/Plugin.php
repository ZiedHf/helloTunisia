<?php namespace ZiedHf\BlogSorting;

use Backend;
use System\Classes\PluginBase;
use RainLab\Blog\Models\Category as CategoryModel;
use RainLab\Blog\Controllers\Categories as CategoriesController;
/**
 * BlogSorting Plugin Information File
 */
class Plugin extends PluginBase
{

    const DEFAULT_ICON = 'icon-magic';
    // const LOCALIZATION_KEY = 'ziedhf.blogsorting::lang.';
    const DB_PREFIX = 'ziedhf_blogsorting_';

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
        CategoriesController::extendFormFields(function ($form, $model) {
            if (!$model instanceof CategoryModel) {
                return;
            }

            $form->addFields([
                self::DB_PREFIX . 'order' => [
                    'label' => 'Order',
                    'type' => 'number',
                    'comment' => 'Set the order here',
                    'allowEmpty' => true,
                    'span' => 'left'
                ]
            ]);
        });
    }

    /**
     * Extend Category model
     */
    private function extendModel()
    {
        CategoryModel::extend(function ($model) {
            $model->addDynamicMethod('getBlogSortingOrderAttribute', function() use ($model) {
                return $model->{self::DB_PREFIX . 'order'};
            });
        });
    }


    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'ZiedHf\BlogSorting\Components\MyComponent' => 'myComponent',
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
