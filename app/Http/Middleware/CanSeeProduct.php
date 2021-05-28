<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use App\Models\Product;
use Closure;

class CanSeeProduct
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if($request->product->status!= Product::PUBLISHED && !(auth()->user()->hasPermission(Permission::READ_PRODUCTS)) ){
            return abort(404);
        }


        return $next($request);
    }
}
