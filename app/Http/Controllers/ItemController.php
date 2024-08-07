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
	public function deleteItem()
    {
    	$id = request()->id;

    	Item::find($id)->delete();

    	return redirect('/admin/item/list')->with('info','Item Deleted Successfully!');
    }
	public function updItem()
    {
    	$id = request()->id;

    	$item 		= Item::find($id);

    	$categories = Category::all();    	

    	return view('item.upd-item',[
    									'item' 		 => $item,
    									'categories' => $categories
    								]);
    }
	public function updateItem(Request $request)
    {
    	$validator = validator( request()->all(),
    	[
    		"category_id" 	=> "required",
    		"name"  		=> "required",
    		
    	]);

		if($validator->fails())
		{
			return back()->with('info',"Please enter Data !");
		}
		$item 				= Item::find(request()->id);

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
		
		$item->save();
		return redirect('/admin/item/list')->with('info','Item Updated Successfully!');
    }


    
}
