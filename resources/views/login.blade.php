@extends("master")
@section("content")
<div class="container ">
    <div class="row custom-login">
        <div class="col-sm-6">
            <form action="login" method="POST">
            @csrf
                <div class="form-group form-row align-items-center">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">For Demo use User:- nileshk191@gmail.com</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <small id="emailHelp" class="form-text text-muted">For Demo use Pass:- 12345</small>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

@endsection