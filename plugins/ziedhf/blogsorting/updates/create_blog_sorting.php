<?php

namespace ZiedHf\BlogSorting\Updates;

use Schema;
use System\Classes\PluginManager;
use ZiedHf\BlogSorting\Plugin;
use October\Rain\Database\Updates\Migration;

/**
 * Class CreateBlogSorting
 *
 * @package ZiedHf\BlogSorting\Updates
 */
class CreateBlogSorting extends Migration
{

    const TABLE_CATEGORIES = 'rainlab_blog_categories';
    const TABLE_POSTS = 'rainlab_blog_posts';

    /**
     * Execute migrations
     */
    public function up()
    {
        if (PluginManager::instance()->hasPlugin('RainLab.Blog')) {
            $this->createColumn(self::TABLE_CATEGORIES, Plugin::SORT_COLUMN);
            $this->createColumn(self::TABLE_POSTS, Plugin::SORT_COLUMN);
        }
    }

    /**
     * Rollback migrations
     */
    public function down()
    {
        if (PluginManager::instance()->hasPlugin('RainLab.Blog')) {
            $this->dropColumn(self::TABLE_CATEGORIES, Plugin::SORT_COLUMN);
            $this->dropColumn(self::TABLE_POSTS, Plugin::SORT_COLUMN);
        }
    }

    private function createColumn($table, $field) {
        if (!Schema::hasColumn($table, $field)) {
            Schema::table($table, function ($table) use ($field) {
                $table->integer($field)->nullable();
            });
        }
    }

    /**
     * @param string $column
     */
    private function dropColumn(string $table, string $column)
    {
        if (Schema::hasColumn($table, $column)) {
            Schema::table($table, function ($table) use ($column) {
                $table->dropColumn($column);
            });
        }
    }
}
