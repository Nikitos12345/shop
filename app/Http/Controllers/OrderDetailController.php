<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderDetailRequest;
use App\Http\Resources\OrderDetailResource;
use App\Models\OrderDetail;

class OrderDetailController extends Controller
{
    public function index()
    {
        return OrderDetailResource::collection(OrderDetail::all());
    }

    public function store(OrderDetailRequest $request)
    {
        return new OrderDetailResource(OrderDetail::create($request->validated()));
    }

    public function show(OrderDetail $orderDetail)
    {
        return new OrderDetailResource($orderDetail);
    }

    public function update(OrderDetailRequest $request, OrderDetail $orderDetail)
    {
        $orderDetail->update($request->validated());

        return new OrderDetailResource($orderDetail);
    }

    public function destroy(OrderDetail $orderDetail)
    {
        $orderDetail->delete();

        return response()->json();
    }
}
