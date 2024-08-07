@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        @if(session('info'))
                <div class="alert alert-success">
                    {{session('info')}}
                </div>
        @endif
        @foreach($categories as $category)
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 pr-1 pl-1">
                <div class="card text-center" >

                    <a class="card-text" href="{{ url("/product/category/view/{$category->id}") }}" >
                        <img src="images/category/{{$category->photo}}" width="100" height="100" class="card-img-top"  alt="No Image" >
                        <div class="card-body">                
                            <p class="card-text d-inline-block text-truncate" style="font-size: 90%;max-width: 95%;">
                            {{ $category->name }}                   
                            </p>
                        </div>	            
                    </a>

                </div> <!-- Card -->
            </div> <!-- Col -->
	    @endforeach



	 
</div> <!-- Row -->
</div> <!-- Container -->
        
         
@endsection
