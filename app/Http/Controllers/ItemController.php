<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class ItemController extends Controller
{
    public function listItem()
	{
        $items 		= Item::all();
		$categories = Category::all();

        return view('item.list-item', [
            'items' 		=> $items,
            'categories' 	=> $categories
        ]);

		
	}
    //Method App\Http\Controllers\ItemController::createItem does not exist.
    public function createItem(Request $request)
	{

        $validator = validator( request()->all(),
    	[
    		"category_id" 	=> "required",
    		"name"  		=> "required",
    		"photo" 		=> "required",
    	]);

		if($validator->fails())
		{
			return back()->with('info',"Please enter Data !");
		}

        $item 					= new Item();

			$item->category_id 	= request()->category_id;
			$item->name 		= request()->name;
			$item->remark 		= request()->remark;

			if($request->hasfile('photo'))
			{
				$file   = $request->file('photo');
				$name   = $file->getClientOriginalName();
				$extension = $file->getClientOriginalExtension();

				$file->move('images/item/',$name);
				$item->photo=$name;

			}
			else
			{
				$item->photo='';
			}
			
		$item->save();
        return back()->with('info','Item Added Successfully!');

		
	}


    
}
