<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductDiscountRequest;
use App\Http\Resources\ProductDiscountResource;
use App\Models\ProductDiscount;

class ProductDiscountController extends Controller
{
    public function index()
    {
        return ProductDiscountResource::collection(ProductDiscount::all());
    }

    public function store(ProductDiscountRequest $request)
    {
        return new ProductDiscountResource(ProductDiscount::create($request->validated()));
    }

    public function show(ProductDiscount $productDiscount)
    {
        return new ProductDiscountResource($productDiscount);
    }

    public function update(ProductDiscountRequest $request, ProductDiscount $productDiscount)
    {
        $productDiscount->update($request->validated());

        return new ProductDiscountResource($productDiscount);
    }

    public function destroy(ProductDiscount $productDiscount)
    {
        $productDiscount->delete();

        return response()->json();
    }
}
