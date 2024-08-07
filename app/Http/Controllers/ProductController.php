<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Item;
use App\Models\Category;

class ProductController extends Controller
{
    public function listProduct()
    {
        $products   = Product::all();
        $items      = Item::all();
        $categories = Category::all();

        return view('product.list-product', [
            'products'   => $products,
            'items'      => $items,
            'categories' => $categories
        ]);
    }

    public function createProduct(Request $request)
    {

        $validator = validator( request()->all(),
        [
             "category_id"       => "required",
             "item_id"           => "required",
             "name"              => "required",
             "price"             => "required",
             "qty"               => "required",
                
        ]);

        if($validator->fails())
        {
            return back()->with('info',"Please enter Data !");
        }

        $product                        = new Product();

            $product->category_id       = request()->category_id;
            $product->item_id           = request()->item_id;
            $product->name              = request()->name;
            $product->price             = request()->price;
            $product->qty               = request()->qty;
            $product->remark            = request()->remark;





        if($request->hasfile('photo1'))
            {
                 $file      = $request->file('photo1');
                 $name      = $file->getClientOriginalName();
                 $extension = $file->getClientOriginalExtension();

                 $file->move('images/product/',$name);
                 $product->photo1=$name;

            }
            else
            {
                 $product->photo1='';
            }
        
        if($request->hasfile('photo2'))
        {
                 $file      = $request->file('photo2');
                 $name      = $file->getClientOriginalName();
                 $extension = $file->getClientOriginalExtension();

                 $file->move('images/product/',$name);
                 $product->photo2=$name;

        }
        else
        {
                 $product->photo2='';
        }
        
        if($request->hasfile('photo3'))
        {
                 $file      = $request->file('photo3');
                 $name      = $file->getClientOriginalName();
                 $extension = $file->getClientOriginalExtension();

                 $file->move('images/product/',$name);
                 $product->photo3=$name;

        }
        else
        {
                 $product->photo3='';
        }

        if($request->hasfile('photo4'))
        {
                 $file      = $request->file('photo4');
                 $name      = $file->getClientOriginalName();
                 $extension = $file->getClientOriginalExtension();

                 $file->move('images/product/',$name);
                 $product->photo4=$name;

        }
        else
        {
                 $product->photo4='';
        }
        
        $product->save();


        return redirect('/admin/product/list')->with('info',"New Product Added Successfully!");

        
    }
    public function deleteProduct()
    {
        Product::find(request()->id)->delete();

        return redirect('/admin/product/list')->with('info',"Product deleted Successfully!");

     
    }

    public function updProduct()
     {

        $categories      = Category::all();
        $items           = Item::all();

        $product         = Product::find(request()->id);

        return view('product.upd-product',  [
                'categories' => $categories,
                'items'      => $items,
                'product'    => $product
        ]);

          
     }

     public function updateProduct(Request $request)
     {

        $validator = validator( request()->all(),
        [
            "category_id"       => "required",
            "item_id"           => "required",
            "name"              => "required",
            "price"             => "required",
            "qty"               => "required",
          
        ]);

        if($validator->fails())
        {
            return back()->with('info',"Please enter Data !");
        }

        $product                      = Product::find(request()->id);

               $product->category_id    = request()->category_id;
               $product->item_id        = request()->item_id;
               $product->name           = request()->name;
               $product->price          = request()->price;
               $product->qty            = request()->qty;
               $product->remark         = request()->remark;

               if($request->hasfile('photo1'))
               {
                 $file   = $request->file('photo1');
                 $name   = $file->getClientOriginalName();
                 $extension = $file->getClientOriginalExtension();

                 $file->move('images/product/',$name);
                 $product->photo1=$name;

               }

               if($request->hasfile('photo2'))
               {
                 $file   = $request->file('photo2');
                 $name   = $file->getClientOriginalName();
                 $extension = $file->getClientOriginalExtension();

                 $file->move('images/product/',$name);
                 $product->photo2=$name;

               }

               if($request->hasfile('photo3'))
               {
                 $file   = $request->file('photo3');
                 $name   = $file->getClientOriginalName();
                 $extension = $file->getClientOriginalExtension();

                 $file->move('images/product/',$name);
                 $product->photo3=$name;

               }
               if($request->hasfile('photo4'))
               {
                 $file   = $request->file('photo4');
                 $name   = $file->getClientOriginalName();
                 $extension = $file->getClientOriginalExtension();

                 $file->move('images/product/',$name);
                 $product->photo4=$name;

               }


        $product->save();
        return redirect('/admin/product/list')->with('info',"Product updated Successfully !");


     }

     public function categoryView()
     {
       $category_id      = request()->id;

       $products         = Product::where("category_id","=",$category_id)->get();


       return view('product.view-product',[ 
                                             'products' => $products 
                                        ]);

     }

     public function detailView()
    {
        $product_id     = request()->id;

        $product        = Product::find($product_id);

        return view('product.detail-product',[ 
                                                'product' => $product 
                                            ]);

    }
}
