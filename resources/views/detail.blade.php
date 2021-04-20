@extends('master')
@section("content")
<div class="container">
      <div class="col-sm-12 text-center h1" style="text-shadow: 2px 2px #ff0000;"> PRODUCT <b style="color:#7eab3c;">  DETAILS</b></div>

	<div class="row detail-box">
    <div class="col-sm-6">
      <img class="detail-img" src="{{$product['gallery']}}">
    </div>
    <div class="col-sm-6">
      <a href="/" style="float: right;">Go Back</a>
      <h2>{{$product['name']}}</h2>
    <h3 class="text-warning"><b class="text-dark">Price:</b><span style="color: black;"></span> {{$product['price']}} /-</h3>
        <br>
         <h4 class="text-warning"><b class="text-dark">Details: <b style="color: black;">{{$product['description']}} </b></b></h4>
         <h4 class="text-warning"><b class="text-dark">Category: <b style="color: black;">{{$product['category']}} </b></b></h4>
                   <br><br>
<form action="/add_to_cart" method="POST">
  @csrf
  <input type="hidden" name="product_id" value="{{$product['id']}}">
  <button class="btn btn-primary ml-6" >
  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  ADD TO CART
</button>
</form>
 <button class="btn btn-success" type="button" disabled>
  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  <a href="#" style="color:white;">ORDER</a>
</button>
    </div>
	</div>
</div>
@endsection