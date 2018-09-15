<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function index()
    {
        return Category::get();
    }
    public function store(Request $request)
    {
        // Create new category
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();
        return "success";
    }
    public function destroy($id)
    {
        // Delete the Product
        if ($id != null) {
            $product = Category::find($id);
            $product->delete();    
        }
    }
    public function show($id)
    {
        // Show single product
        return Category::find($id);
    }
}

