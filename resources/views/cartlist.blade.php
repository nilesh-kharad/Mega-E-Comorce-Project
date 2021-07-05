@extends('master')
@section('content')
<div class="d-flex p-2 justify-content-center">
    <div class="col align-item-center">
        <div class="trending-wrapper">
            <h5>Search Results</h5>
            <hr>
            @foreach($products as $item)
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-img" src="/images/{{$item->gallary}}">
                    </a>
                </div>

                <!-- this is for description -->
                <div class="col-sm-5">
                    <h3>{{$item->name}}</h3>
                    <p>{{$item->description}}</p>
                </div>

                <!-- this is for remove from cart options -->
                <div class="col-sm-3">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove</a>
                    <a class="btn btn-success" href="/ordernow">Order Now</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- </div> -->
@endsection