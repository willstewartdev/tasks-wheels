<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(Category::all()->toArray());
    }
    
    public function store(Request $request)
    {
        return response()->json(['status' => true, 'message' => 'Category Created']);
    }

    public function destroy(Request $request)
    {
        return response()->json(['status' => true, 'message' => 'Category Deleted']);
    }
}
