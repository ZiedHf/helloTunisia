<?php namespace ZiedHf\BlogSorting;

use Backend;
use System\Classes\PluginBase;

/**
 * BlogSorting Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'BlogSorting',
            'description' => 'No description provided yet...',
            'author'      => 'ZiedHf',
            'icon'        => 'icon-leaf'
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
