@extends('layouts.app')
@section('content')

<div class="container">
<div class="row justify-content-center">
    @if(session('info'))
        <div class="alert alert-danger">
            {{ session('info') }}
        </div>
        @endif
        
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Add New Item</div>
            <div class="card-body">
                <form action="{{ url('/admin/item/add') }}" method="post" enctype="multipart/form-data">
                        @csrf 

                        <table class="table table-sm">

                        <tr>
                             <td>
                                <label class="form-control">Category</label>
                            </td>

                             <td>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">
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
                                    <input type="text" name="name" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-control">Photo</label>
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
                                    <input type="text" name="remark" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Add" class="btn btn-primary btn-sm form-control">
                                </td>                            
                            </tr>
                        </table>
                </form>
                
            </div>

            
            
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Item List</div>
            <div class="card-body">
                <table class="table table-hover table-sm">
                        <tr>
                            <th>ID</th>
                            <th>Category</th>

                            <th>Name</th>
                            <th>Photo</th>
                            <th>Remark</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                        @foreach($items as $item)
                        <tr>
                                
                            <td> {{ $item->id }}</td>
                            <td> {{ $item->category->name }}</td>
                            <td> {{ $item->name }}</td>
                            <td> 
                                <img width="50px" height="50px" src="{{ asset("images/item/$item->photo") }}"> 
                            </td>

                            <td> {{ $item->remark }}</td>
                            <td> 
                                <a href="{{ url("/admin/item/del/{$item->id}") }}" class="btn btn-danger btn-sm">
                                Delete
                                </a>
                            </td>

                            <td> 
                                <a href="{{ url("/admin/item/upd/{$item->id}") }}" class="btn btn-warning btn-sm">
                                Update
                                </a>
                            </td>
                            </tr>
                        @endforeach

                    </table>
                
            </div>

        </div>
    </div>

</div>
</div>
@endsection