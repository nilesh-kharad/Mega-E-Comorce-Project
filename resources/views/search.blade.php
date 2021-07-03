@extends('master')
@section('content')
<div class="d-flex p-2 justify-content-center">
    <!-- <div class="custom-product"> -->
        <div class="col-sm-4 mt-5">
            <a href="">Filter..</a>
        </div>
        <div class="col align-item-center">
            <div class="trending-wrapper">
                <h5>Search Results</h5>
                @foreach($products as $item)
                <div class="searched-item">
                    <a href="detail/{{$item['id']}}">
                        <img class="trending-img" src="{{$item['gallary']}}">
                        <div class="">
                            <h3>{{$item['name']}}</h3>
                            <p>{{$item['description']}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
<!-- </div> -->
@endsection