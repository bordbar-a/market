<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Helpers\File\HandleFile;
use App\Helpers\FlashMessages\FlashMessages;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\File;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Slider;
use App\Models\SliderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SlidersController extends AdminBaseController
{
    public static $parent = 0;

    public function index()
    {
        $sliders = Slider::all();

        return view('admin.slider.list', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], ['name.required' => 'وارد کردن نام منو الزامی است']);


        Slider::create(['name' => $request->name]);
        FlashMessages::success('اسلایدر اضافه شد');
        return redirect()->route('admin.slider.list');
    }

    public function subSlider(Slider $slider)
    {
        $slider->load([
            'items' => function ($query) {
                $query->orderBy('order', 'asc');
            }
        ]);

        return view('admin.slider.subslider.index', compact('slider'));
    }

    public function subStore(Request $request, Slider $slider)
    {
        $sliderItem = $slider->items()->create([
            'title' => $request->title,
            'url' => $request->url,
        ]);

        if ($request->hasFile('image')) {
            $image_name = HandleFile::saveSliderPictures($request->file('image'), $slider->id);
            $sliderItem->image()->create([
                'type' => File::SliderItemImage,
                'name' => $image_name
            ]);
        }


        return redirect()->route('admin.slider.sub', $slider->id);

    }

    public function sliderItemDownload(SliderItem $sliderItem)
    {

        $imagePath = HandleFile::sliderImagePath($sliderItem);
        if(is_null($imagePath)){
            FlashMessages::warning('فایل مورد نظر پیدا نشد');
            return back();
        }
        return Response::download($imagePath);


    }

    public function sliderItemUpdate(Request $request, SliderItem $sliderItem)
    {
        $request->validate([
            'title' => 'required'
        ], [
            'title.required' => 'وارد کردن عنوان الزامی است'
        ]);

        $sliderItem->update([
            'title' => $request->title,
            'url' => $request->url,
        ]);
        return redirect()->route('admin.slider.sub', $sliderItem->slider->id);
    }

    public function sliderItemDelete(SliderItem $sliderItem)
    {
        HandleFile::deleteSliderImage($sliderItem);
        $sliderItem->delete();
        return redirect()->route('admin.slider.sub', $sliderItem->slider->id);
    }

    public function subUpdate(Request $request)
    {
        $items = $request->all()['list'];
        $this->handleSubslider($items);
        return true;
    }

    private function handleSubslider($all)
    {
        foreach ($all as $key => $item) {
            SliderItem::where('id', $item['id'])->update(['order' => $key]);
        }
    }
}
