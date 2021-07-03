@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$products['gallary']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">
                <- Go Back</a>
                    <h2>{{$products['name']}}</h2>
                    <h3>{{$products['price']}}</h3>
                    <h4>{{$products['description']}}</h4>
                    <h4>Category:- {{$products['category']}}</h4>
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$products['id']}}">
                        <button class="btn btn-primary p-1 m-3">Add to Cart</button>
                    </form>
                    <button class="btn btn-success m-3">Buy Now</button>
        </div>
    </div>

</div>






@endsection