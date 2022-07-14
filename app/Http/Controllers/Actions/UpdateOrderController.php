<?php

namespace App\Http\Controllers\Actions;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class UpdateOrderController extends Controller
{
    /**
     * @param Request $request
     * @param int $id
     * @return bool
     */
    public function execute(Request $request,  int $id): bool
    {
        return Order::findOrFail($id)->update($request->all());
    }
}
