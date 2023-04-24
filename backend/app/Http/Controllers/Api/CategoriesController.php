<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;

class CategoriesController extends Controller
{

    public function index()
    {
        return Categories::all();
    }

    public function store(Request $request)
    {
        Categories::create($request->all());
    }

    public function show($id)
    {
        return Categories::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $categorie = Categories::findOrFail($id);
        $categorie->update($request->all());
    }

    public function destroy($id)
    {
        $categorie = Categories::findOrFail($id);
        $categorie->delete();
    }
    
}
