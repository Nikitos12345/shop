<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductInventoryRequest;
use App\Http\Resources\ProductInventoryResource;
use App\Models\ProductInventory;

class ProductInventoryController extends Controller
{
    public function index()
    {
        return ProductInventoryResource::collection(ProductInventory::all());
    }

    public function store(ProductInventoryRequest $request)
    {
        return new ProductInventoryResource(ProductInventory::create($request->validated()));
    }

    public function show(ProductInventory $productInventory)
    {
        return new ProductInventoryResource($productInventory);
    }

    public function update(ProductInventoryRequest $request, ProductInventory $productInventory)
    {
        $productInventory->update($request->validated());

        return new ProductInventoryResource($productInventory);
    }

    public function destroy(ProductInventory $productInventory)
    {
        $productInventory->delete();

        return response()->json();
    }
}
