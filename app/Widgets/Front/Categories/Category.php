<?php

namespace App\Widgets\Front\Categories;

/**
 *  |--------------------------------------------------------------------------
 *  |   You can use the below snippets to override the defaults.
 *  |====== Remove this doc block if you don't need it ========
 *  |--------------------------------------------------------------------------
 *  | public $contextAs = '$data'; (default : '$data')
 *  | public $controller = '\App\ClassPath\ُSomeClass@someMethod'; (optional)
 *  | public $presenter = \App\ClassPath\WidgetPresenter::class; (optional)
 *  | public $minifyOutput = true; (use it to override the default value in config file)
 *  | public $cacheTags = []; (optional) (Available for all cache driver)
 *  | public $cacheLifeTime = 0;   (use it to override the default value in config file)
 *  | public $cacheView = false; You may only cache the controller result. (default : true)
 *  | public $template; (optional) (By default it looks for the view file generated by artisan)
 *  |--------------------------------------------------------------------------
 */
class Category
{
    /**
     * You may call this widget in any blade files like this :
     * @widget('Category', ['a' => 'someVal', 'b' => 'foo'])
     * @return array
     */
	public function data()
	{
	    $categories = \App\Models\Category::select(['id','title','parent_id'])->withCount('products')->get()->groupBy('parent_id')->toArray();
        $categories['root'] = $categories[0];
        unset($categories[0]);
        debug($categories);

		return [$categories];
	}

    /**
     * If the widget output depends on query strings you should return key names.
     * otherwise you get undesired results out of the cache store. for example:
     * example.com/product?page=1 and you use the page number in your db query
     * or if you want it to be separated for each user: return auth()->id();
     * @return array
     */
	public function extraCacheKeyDependency($args)
	{
        return [/* request('page') */];
	}
}
