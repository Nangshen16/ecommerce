@extends('layouts.app')
@section('content')

<div class="container">
<div class="row justify-content-center">

    @if(session('info'))
    <div class="alert alert-danger">
        {{session('info')}}
    </div>
    @endif

	<div class="col-md-6">
		<div class="card">
	        <div class="card-header">Edit Item</div>
	            <div class="card-body">
                <form action="{{ url("/admin/item/upd/{$item->id}") }}" method="post" enctype="multipart/form-data">
                    @csrf

                        <table class="table table-sm">
                        <tr>
                            <td>
                                <label class="form-control">Category</label>
                            </td>
                            <td>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @if($category->id == $item->category_id) selected @endif>
                                        {{ $category->name }}
                                    </option>   
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                            
                            <tr>
                                <td>
                                    <label class="form-control">Name</label>
                                </td>
                                <td>
                                    <input type="text" name="name" class="form-control"  value="{{ $item->name }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-control">Old Photo</label>
                                </td>
                                <td> 
                                    <img src="{{ asset("images/item/$item->photo") }} " width='50' height='50'>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-control">New Photo</label>
                                </td>
                                <td>
                                    <input type="file" name="photo" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-control">Remark</label>
                                </td>
                                <td>
                                    <input type="text" name="remark" class="form-control" value="{{ $item->remark }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Update" class="btn btn-primary btn-sm form-control">
                                </td>
                                
                            </tr>

                            

                        </table>
                	
                </form>
                    

                    



	            </div>
	    </div>

	</div>

</div>
</div>


@endsection