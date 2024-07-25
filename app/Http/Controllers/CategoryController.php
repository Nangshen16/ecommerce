<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function listCategory()
    {
        // dd("Hello");
        //category table 
        $categories = Category::all();
        // dd($categories);

        return view('category.list-category', [
            'categories' => $categories
    ]);
    }
}
