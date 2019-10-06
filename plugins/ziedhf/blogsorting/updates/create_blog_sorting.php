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

    const TABLE = 'rainlab_blog_categories';

    /**
     * Execute migrations
     */
    public function up()
    {
        if (PluginManager::instance()->hasPlugin('RainLab.Blog')) {
            $this->createFields();
        }
    }

    /**
     * Rollback migrations
     */
    public function down()
    {
        if (PluginManager::instance()->hasPlugin('RainLab.Blog')) {
            $this->dropFields();
        }
    }

    /**
     * Remove new fields
     */
    private function dropFields()
    {
        $this->dropColumn(Plugin::DB_PREFIX . 'order');
    }

    /**
     * Create new fields
     */
    private function createFields()
    {

        if (!Schema::hasColumn(self::TABLE, Plugin::DB_PREFIX . 'order')) {
            Schema::table(self::TABLE, function ($table) {
                $table->integer(Plugin::DB_PREFIX . 'order')->nullable();
            });
        }
    }

    /**
     * @param string $column
     */
    private function dropColumn(string $column)
    {
        if (Schema::hasColumn(self::TABLE, $column)) {
            Schema::table(self::TABLE, function ($table) use ($column) {
                $table->dropColumn($column);
            });
        }
    }
}
