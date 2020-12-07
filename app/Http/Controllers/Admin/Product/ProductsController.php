<?php

namespace App\Http\Controllers\Admin\Product;

use App\Helpers\FlashMessages\FlashMessages;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\Product\ProductCreateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends AdminBaseController
{



    public function all()
    {

        $products = Product::with('categories')->get();
        return view('admin.product.list', compact('products'));

    }


    public function create()
    {

        $products = Product::all();
        $categories = Category::all();
        return view('admin.product.create', compact('products' ,'categories'));
    }


    public function store(ProductCreateRequest $request)
    {

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'discount' => $request->input('discount')?:config('product.basic_discount'),
            'user_id' => Auth::user()->id,

        ];







        try {
            $product = Product::create($data);
            $categories =$this->addNewCategoryItem($request->input('categories'));
            $product->categories()->sync($categories);
            FlashMessages::success('محصول ' . $product->title . " اضافه شد");

        } catch (\Exception $exception) {
            FlashMessages::warning("محصول مورد نظر اضافه نشد " . $exception->getMessage());
        }


        return redirect()->route('admin.product.list');

    }


    public function delete(Request $request, $product)
    {
        if ($product){
            try {
                $product->delete();
                FlashMessages::success('محصول مورد نظر حذف شد');

            } catch (\Exception $exception) {
                FlashMessages::warning('محصول مورد نظر حذف نشد');
            }
        }
        return redirect()->route('admin.product.list');
    }


    public function edit(Request $request, $product)
    {

        $product = Product::with('categories')->find($product->id);
        if($product){

            $product->load('categories');
            $categories = Category::pluck('title' , 'id')->toArray();
            $productCategories = $product->categories->pluck('id')->toArray();
            return view('admin.product.edit', compact('product', 'categories' ,'productCategories'));
        }
        FlashMessages::error('محصول مورد نظر پیدا نشد');
        return back();
    }


    public function update(ProductCreateRequest $request , $product)
    {

        if($product){
            $data = [
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'discount' => $request->input('discount')?:config('product.basic_discount'),
                'user_id' => Auth::user()->id,

            ];
            $categories =$this->addNewCategoryItem($request->input('categories'));
            $product->update($data);
            $product->categories()->sync($categories);
            FlashMessages::success('محصول مورد نظر ویرایش شد');
            return back();
        }

        FlashMessages::success('ویرایش محصول انجام نشد');
        return back();

    }



    private function addNewCategoryItem($data){
        $categories_id = array_map( function ($item){
           if((is_numeric($item))){
             return (int)$item;
           }
           return Category::create(['title'=>$item])->id;

        },$data);

        return $categories_id;
    }


}
