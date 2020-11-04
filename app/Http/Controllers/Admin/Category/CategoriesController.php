<?php

namespace App\Http\Controllers\Admin\Category;

use App\Helpers\FlashMessages\FlashMessages;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends AdminBaseController
{


    public function all()
    {

        $categories = Category::with('parent')->get();
        return view('admin.category.list', compact('categories'));

    }


    public function create()
    {

        $categories = Category::all();
        return view('admin.category.create', compact('categories'));
    }


    public function store(CreateCategoryRequest $request)
    {

        $data = [
            'title' => $request->input('title'),
            'parent_id' => $request->input('parentId'),
        ];

        try {
            $category = Category::create($data);
            FlashMessages::success('دسته‌بندی ' . $category->title . " اضافه شد");

        } catch (\Exception $exception) {
            FlashMessages::warning("دسته‌بندی مورد نظر اضافه نشد");
        }


        return redirect()->route('admin.category.create');

    }


    public function delete(Request $request, $category_id)
    {
        $category = Category::find($category_id);


        if ($category){
            try {
                $category->delete();
                FlashMessages::success('دسته‌بندی مورد نظر حذف شد');

            } catch (\Exception $exception) {
                FlashMessages::warning('دسته‌بندی مورد نظر حذف نشد');
            }
        }

        return back();
    }


    public function edit(Request $request, $category_id)
    {

        $category = Category::find($category_id);
        if($category)
            $category->load('parent');
        $categories = Category::cursor();
            return view('admin.category.edit' , compact('category' , 'categories'));

        return back();
    }


   public function update(CreateCategoryRequest $request , $category_id)
    {
        $category = Category::find($category_id);

        if($category){
            $category->title = $request->input('title');
            $category->parent_id = $request->input('parentId');
            $category->save();
            FlashMessages::success('دسته‌بندی مورد نظر ویرایش شد');
            return back();
        }

        FlashMessages::success('ویرایش دسته‌بندی ای انجام نشد');
        return back();

    }



}