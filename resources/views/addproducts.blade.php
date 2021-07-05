@extends('master')
@section('content')
<div class="container ">
    <div class="row custom-addproduct">
        <div class="col-sm-6">
            <form action="addproductsdb" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Select Product Image to Upload</label>
                    <input type="file" id="fileupload" name="gallary" id="exampleFormControlInput1">

                    <label for="exampleFormControlSelect2">Product Name :-</label>
                    <input type="text" name="name" id="exampleFormControlSelect2">

                    <label for="exampleFormControlSelect3">Product Price :-</label>
                    <input type="text" name="price" id="exampleFormControlSelect3">

                    <label for="exampleFormControlSelect4">Product Description :-</label>
                    <textarea name="description" id="exampleFormControlSelect4" cols="25" rows="2"></textarea>

                    <label for="exampleFormControlSelect5">Product Category :-</label>
                    <input type="text" name="category" id="exampleFormControlSelect5">
                </div>
                <button class="btn btn-success align-item-center">Add Product</button>
            </form>
        </div>
    </div>
</div>





@endsection