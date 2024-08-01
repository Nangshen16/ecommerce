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

    public function createCategory(Request $request)
    {
        $validator = validator( request()->all(),
         [
             "name"        => "required",         
             "photo"       => "required",
         ]);

         if($validator->fails())
         {
             return back()->with('info',"Please enter Data !");
         }

         $category = new Category();

            $category->name   = request()->name;
            $category->remark = request()->remark;

            if($request->hasfile('photo'))
            {
                $file       = $request->file('photo');
                $name       = $file->getClientOriginalName();
                $extension  = $file->getClientOriginalExtension();

                $file->move('images/category/',$name);

                $category->photo = $name;
            }
            else
            {
                $category->photo='';
            }

        $category->save();

        return back()->with('info','New Category added Successfully!');
    }
    public function deleteCategory()
    {
        $id = request()->id;
        
        Category::find($id) -> delete();

        return redirect('/admin/category/list')->with('info','Category Deleted Successfully!');
    }
    public function updCategory()
    {
        $id = request()->id;
        
        $category = Category::find($id);

        return view('category.upd-category', [
                                                'category' => $category
                                            ]);
    }
    public function updateCategory(Request $request)
    {

        $validator = validator( request()->all(),
        [
            "name"  => "required",        
            
        ]);

        if($validator->fails())
        {
            return back()->with('info',"Please enter Data !");
        }
        $category = Category::find(request()->id);

            $category->name     = request()->name;
            $category->remark   = request()->remark;

            if($request->hasfile('photo'))
            {
                $file       = $request->file('photo');
                $name       = $file->getClientOriginalName();
                $extension  = $file->getClientOriginalExtension();

                $file->move('images/category/',$name);

                $category->photo=$name;
            }
            

        $category->save();
        return redirect('/admin/category/list')->with('info','Category updated Successfully!');

        

    }
}
