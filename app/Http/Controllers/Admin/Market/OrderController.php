<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function all()
    {
        return view('admin.market.order.index');
    }
    public function newOrder()
    {
        return view('admin.market.order.index');
    }
    public function unpid()
    {
        return view('admin.market.order.index');
    }
}
