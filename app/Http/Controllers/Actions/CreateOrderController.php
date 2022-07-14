<?php

namespace App\Http\Controllers\Actions;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class CreateOrderController extends Controller
{
    /**
     * @param Request $request
     * @return Object
     */
    public function execute(Request $request): Object
    {
        return Order::create($request->validated());
    }
}
