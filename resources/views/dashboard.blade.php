@extends('master')
@section('content')
<div class="custom-product">
    <div id="carouselExampleIndicator" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicator">
            <div class="carousel-inner">
                @foreach($products as $item)
                <div class="carousel-item {{$item['id']==1?'active':''}}">
                    <a href="detail/{{$item['id']}}">
                        <img class="d-block w-80 slider-img" src="{{$item['gallary']}}" alt="{{$item['id']}} slide">
                        <div class="carousel-caption slider-text">
                            <h3>{{$item['name']}}</h3>
                            <p>{{$item['description']}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
                <hr>
                <!-- <hr> -->
            </div>
        </ol>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<h3>Trending Products</h3>
@foreach($products as $item)
<div class="trending-item">
    <a href="detail/{{$item['id']}}">
        <img class="trending-img" src="{{$item['gallary']}}">
        <div class="">
            <h4>{{$item['name']}}</h4>
        </div>
    </a>
</div>
@endforeach
@endsection