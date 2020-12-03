<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends AdminBaseController
{


    public function all()
    {
        $orders = Order::withTrashed()->with([
            'user' => function ($query) {
                $query->select('id', 'first_name', 'last_name')->get();
            }
        ])->orderBy('updated_at', 'desc')->paginate(4);

        return view('admin.order.list', compact('orders'));
    }


    public function details($order_id)
    {
        $order = Order::withTrashed()->with('products')->find($order_id);
        return view('admin.order.products.list' , compact('order'));
    }
}
