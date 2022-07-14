<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Actions\CreateOrderController;
use App\Http\Controllers\Actions\UpdateOrderController;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\UpdateOrdersRequest;
use App\Models\Order;
use Illuminate\Http\JsonResponse;

class OrdersController extends Controller
{
    /**
     * @param OrderRequest $request
     * @return JsonResponse
     */
    public function create(OrderRequest $request, CreateOrderController $createOrderController): JsonResponse
    {
        $createOrderController->execute($request);
        return response()->json(['message' => 'Запись успешно добавлена',
            'code' => 201]);
    }

    /**
     * @param UpdateOrdersRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(UpdateOrdersRequest $request, int $id, UpdateOrderController $updateOrderController): JsonResponse
    {
        $updateOrderController->execute($request, $id);
        return response()->json(['message' => 'Запись успешно отредактирования',
        'code' => 200]);
    }

    /**
     * @return Order[]|Object
     */
    public function show(int $id): Object
    {
        return Order::findOrFail($id);
    }
}
