<?php

use App\Http\Controllers\productController;

$total = 0;
if (Session()->has('user')) {
    $total = productController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">E-Commerce</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="dashboard">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About-us</a>
            </li>
        </ul>
        <form action="/search" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="search">Search</button>
        </form>
        <div class="nav navbar-nav navbar-right m-3">
            <li><a href="" style="color:aqua">Cart({{$total}})</a></li>
            @if (Session()->has('user'))
            <li class="dropdown ml-1">
                <a class="dropdown-toggle" style="color:aqua" href="" data-toggle="dropdown">
                    {{Session::get('user')['name']}}
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="logout">Logout</a></li>
                </ul>
            </li>
            @else
            <li><a href="login" style="color:aqua">Login</a></li>
            @endif
        </div>
    </div>
</nav>