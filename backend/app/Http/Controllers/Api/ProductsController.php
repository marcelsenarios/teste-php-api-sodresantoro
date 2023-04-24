<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        return Products::all();
    }

    public function store(Request $request)
    {
        Products::create($request->all());
    }

    public function show($id)
    {
        return Products::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $product->update($request->all());
    }

    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();
    }
}
