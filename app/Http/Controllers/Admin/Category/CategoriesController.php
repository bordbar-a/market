<?php

namespace App\Http\Controllers\Admin\Category;

use App\Helpers\FlashMessages\FlashMessages;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\Category\CategoryCreateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends AdminBaseController
{

    public function all()
    {

        $categories_groupBy_parent = Category::with('parent')->get()->groupBy('parent_id');
        $categories = Category::all();
        return view('admin.category.index', compact('categories_groupBy_parent', 'categories'));

    }

    public function category_update(Request $request)
    {

        $items = $request->all()['list'];
        $parent = 0;
        $this->handleCategory($items, $parent);
        return true;
    }

    private function handleCategory($all, $parent)
    {
        $beforeParent = $parent;
        foreach ($all as $key => $item) {
            Category::where('id', $item['id'])->update(['parent_id' => $parent]);
            if (array_key_exists('children', $item)) {
                $parent = $item['id'];
                $this->handleCategory($item['children'],$parent);
            }
            $parent = $beforeParent;
        }
    }

    public function store(CategoryCreateRequest $request)
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


        return redirect()->route('admin.category.list');

    }


    public function delete(Request $request, $category)
    {


        if ($category instanceof Category) {
            try {
                $category->children()->delete();
                $category->delete();
                FlashMessages::success('دسته‌بندی مورد نظر حذف شد');

            } catch (\Exception $exception) {
                FlashMessages::warning('دسته‌بندی مورد نظر حذف نشد');
            }
        }

        return redirect()->route('admin.category.list');
    }


    public function edit(Request $request, $category)
    {

        if ($category) {

            $category->load('parent');
            $categories = Category::cursor();
            return view('admin.category.edit', compact('category', 'categories'));
        }
        FlashMessages::error('دسته‌بندی مورد نظر پیدا نشد');
        return back();
    }


    public function update(CategoryCreateRequest $request, $category)
    {
        if ($category) {
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
