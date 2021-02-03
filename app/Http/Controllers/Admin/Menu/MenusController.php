<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Helpers\FlashMessages\FlashMessages;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenusController extends AdminBaseController
{
    public static $parent = 0;

    public function index()
    {
        $menus = Menu::all();

        return view('admin.menu.list', compact('menus'));
    }

    public function create()
    {
        return view('admin.menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], ['name.required' => 'وارد کردن نام منو الزامی است']);


        Menu::create(['name' => $request->name]);
        FlashMessages::success('منو اضافه شد');
        return redirect()->route('admin.menu.list');
    }

    public function submenu(Menu $menu)
    {
        $menu->load('items');

        $menu_items = $menu->items()->orderBy('order', 'asc')->get()->groupBy('parent_id');
        if (count($menu_items) > 0) {
            $menu_items['root'] = $menu_items[0];
            unset($menu_items[0]);
        }


        return view('admin.menu.submenu.index', compact('menu', 'menu_items'));
    }

    public function subStore(Request $request, Menu $menu)
    {
        $menu->items()->create([
            'title' => $request->title,
            'url' => $request->url,
        ]);


        return redirect()->route('admin.menu.sub', $menu->id);

    }

    public function menuItemEdit(MenuItem $menuItem)
    {

        $menuItem->load('menu');
        return view('admin.menu.submenu.edit', compact('menuItem'));
    }

    public function menuItemUpdate(Request $request, MenuItem $menuItem)
    {
        $request->validate([
            'title' => 'required'
        ], [
            'title.required' => 'وارد کردن عنوان الزامی است'
        ]);

        $menuItem->update([
            'title' => $request->title,
            'url' => $request->url,
        ]);
        return redirect()->route('admin.menu.sub', $menuItem->menu->id);
    }

    public function menuItemDelete(MenuItem $menuItem)
    {
        $menuItem->children()->delete();
        $menuItem->delete();
        return redirect()->route('admin.menu.sub', $menuItem->menu->id);
    }

    public function subUpdate(Request $request)
    {
        $items = $request->all()['list'];
        self::$parent = 0;
        $this->handleSubmenu($items);
        return true;
    }

    private function handleSubmenu($all)
    {
        $beforeParent = self::$parent;
        foreach ($all as $key => $item) {
            MenuItem::where('id', $item['id'])->update(['parent_id' => self::$parent, 'order' => $key]);
            if (array_key_exists('children', $item)) {
                self::$parent = $item['id'];
                $this->handleSubmenu($item['children']);
            }
            self::$parent = $beforeParent;
        }
    }

}
