<?php
namespace ZiedHf\BlogSorting\Models;
use Log;
use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use RainLab\Blog\Models\Post as PostModel;
/**
 * Class Posts
 *
 * @package ZiedHf\BlogSorting\Components
 */
class Post extends PostModel
{
    /**
     * OVERRIDE
     * The attributes on which the post list can be ordered.
     * @var array
     */
    public static $additionalSortingOptions = [
      'ziedhf_blogsorting_order asc'            => 'Order ASC',
      'ziedhf_blogsorting_order desc'            => 'Order DESC'
    ];

  public function scopeListFrontEnd($query, $options)
  {  
    /*
      * Default options
      */
    extract(array_merge([
      'page'             => 1,
      'perPage'          => 30,
      'sort'             => 'ziedhf_blogsorting_order asc',
      'categories'       => null,
      'exceptCategories' => null,
      'category'         => null,
      'search'           => '',
      'published'        => true,
      'exceptPost'       => null
    ], $options));
    /*
      * Sorting
      */
    if (in_array($sort, array_keys(static::$additionalSortingOptions))) {
      Log::info('YES');
      Log::info($sort);
      @list($sortField, $sortDirection) = explode(' ', $sort);
      if (is_null($sortDirection)) {
        $sortDirection = "desc";
      }
      Log::info($sortField);
      Log::info($sortDirection);

      // Sort the NULLs values in the last order
      $query->orderByRaw('ISNULL('. $sortField .'), ' . $sortField . ' ' . $sortDirection);
    } else {
      Log::info('NO');
      Log::info($sort);
      Log::info(static::$additionalSortingOptions);
    }

    $query = parent::scopeListFrontEnd($query, $options);
    return $query;
  }
}