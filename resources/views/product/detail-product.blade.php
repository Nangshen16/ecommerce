@extends('layouts.app')
@section('content')


<div class="container-xxl">
<div class="row justify-content-center">
		
	<div class="col-md-4">

            <!-- Zoom Image -->
				<div class="container">
				<div class="exzoom hidden" id="exzoom">
				    <div class="exzoom_img_box">
				        <ul class='exzoom_img_ul'>
				            <li><img src="{{ asset("images/product/$product->photo1") }}"/></li>
				            <li><img src="{{ asset("images/product/$product->photo2") }}"/></li>
				            <li><img src="{{ asset("images/product/$product->photo3") }}"/></li>
				            <li><img src="{{ asset("images/product/$product->photo4") }}"/></li>           
				        </ul>
				    </div>
				    <div class="exzoom_nav"></div>
				    <p class="exzoom_btn">
				        <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
				        <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
				    </p>
				</div>
				</div>
			<!-- Zoom Image -->

	</div>
	

	<div class="col-md-8">
		<div class="card text-center">
			<div class="card-header">Product Details</div>
			<div class="card-body">
				<div class="card-text">Name: 	{{ $product->name }} 	</div>
				<div class="card-text">Price: 	{{ $product->price }} 	</div>
				<div class="card-text">Qty: 	{{ $product->qty }} 	</div>
			</div>
		</div>
	</div>


</div> <!-- Row -->
</div> <!-- Container -->

<script type="text/javascript">

    $('.container').imagesLoaded( function() {
  $("#exzoom").exzoom({
        autoPlay: false,
    });
  $("#exzoom").removeClass('hidden')
});

</script>



@endsection