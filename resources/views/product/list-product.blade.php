<!-- //framaework for the whole browser -->

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
            <div class="card-header">Add New Product</div>
            <div class="card-body">
                <form action="{{ url('/admin/product/add') }}" method="post" enctype="multipart/form-data">
                        @csrf 

                        <table class="table table-sm">
                        <tr>
                            <td>
                                <label class="form-control">Item</label>
                            </td>
                            <td>
                                <select name="item_id" class="form-control">
                                    @foreach($items as $item)
                                    <option value="{{$item->id}}">
                                        {{ $item->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>

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
                                    <label class="form-control">Photo1</label>
                                </td>
                                <td>
                                    <input type="file" name="photo1" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-control">Photo2</label>
                                </td>
                                <td>
                                    <input type="file" name="photo2" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-control">Photo3</label>
                                </td>
                                <td>
                                    <input type="file" name="photo3" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-control">Photo4</label>
                                </td>
                                <td>
                                    <input type="file" name="photo4" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-control">Price</label>
                                </td>
                                <td>
                                    <input type="number" name="price" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-control">Qty</label>
                                </td>
                                <td>
                                    <input type="number" name="qty" class="form-control">
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
            <div class="card-header">Product List</div>
            <div class="card-body">
                <table class="table table-hover table-sm">
                        <tr>
                            <th>No</th>
                                <th>Category</th>
                                <th>Item</th>
                                <th>Name</th>                            
                                <th>Photo1</th>
                                <th>Photo2</th>
                                <th>Photo3</th>
                                <th>Photo4</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Remark</th>
                                <th>Delete</th>
                                <th>Update</th>
                        </tr>
                        @foreach($products as $product)
                        <tr>
                                
                            <td> {{ $product->id }}</td>
                                <td> {{ $product->category->name }}</td>
                                <td> {{ $product->item->name}}</td>
                                <td> {{ $product->name }}</td>
                                    <img width="50px" height="50px" src="{{ asset("images/item/$item->photo") }}"> 
                                </td>

                            <td> <img width="50px" height="50px" src="{{ asset("images/product/$product->photo1") }}"> </td>
                            <td> <img width="50px" height="50px" src="{{ asset("images/product/$product->photo2") }}"> </td>
                            <td> <img width="50px" height="50px" src="{{ asset("images/product/$product->photo3") }}"> </td>
                            <td> <img width="50px" height="50px" src="{{ asset("images/product/$product->photo4") }}"> </td>

                            <td> {{ $product->price }}</td>
                            <td> {{ $product->qty }}</td>
                            <td> {{ $product->remark }}</td>

                            <td> 
                                <a href="{{ url("/admin/product/del/{$product->id}")}}" class="btn btn-danger btn-sm">
                                Delete
                                </a>
                            </td>

                            <td> 
                                <a href="{{ url("/admin/product/upd/{$product->id}")}}" class="btn btn-warning btn-sm">
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