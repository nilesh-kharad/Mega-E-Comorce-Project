<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .custom-login {
            height: 500px;
            padding-left: 300px;
            padding-top: 80px;
        }

        /* #footer{
        position: fixed;
        bottom: 0;
    } */
        img.slider-img {
            height: 300px !important;
        }

        /* .custom-product{
        height: 600px;
    } */
        .slider-text {
            background-color: #35443585 !important;
        }

        .trending-img {
            height: 100px;

        }

        .trending-item {
            float: left;
            width: 20%;
        }

        .detail-img {
            height: 200px;
        }

        .search-box {
            width: 300px !important;
        }

        .custom-product {
            width: auto;
        }

        .cart-list-devider {
            border-bottom: 1px solid red;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
        *{
            font-family: 'Baloo Bhai 2', cursive;
        }
    </style>

</head>

<body>
    {{View::make('header')}}
    @yield('content')

    {{View::make('footer')}}









</body>

</html>