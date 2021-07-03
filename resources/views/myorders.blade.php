@extends('master')
@section('content')
<div class="d-flex p-2 justify-content-center">
    <div class="col align-item-center">
        <div class="trending-wrapper">
            <h5>My Orders</h5>
            @foreach($orders as $item)
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-img" src="{{$item->gallary}}">
                    </a>
                </div>
                <!-- this is for description -->
                <div class="col-sm-5">
                    <h3>Name : {{$item->name}}</h3>
                    <p>Delivery Status : {{$item->status}}</p>
                    <p>Address : {{$item->Address}}</p>
                    <p>Payment_Status : {{$item->payment_status}}</p>
                    <p>Payment_Method : {{$item->payment_method}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- </div> -->
@endsection