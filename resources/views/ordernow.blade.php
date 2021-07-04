@extends('master')
@section('content')
<div class="d-flex p-2 justify-content-center">
    <div class="col align-item-center">
        <table class="table">
            <tbody>
                <tr>
                    <th>...</th>
                    <th>Amount In Dollers</th>
                </tr>
                <tr>
                    <th>Item-Amount</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <th>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <th>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <th>Total Amount</td>
                    <td>${{$total+10}} </td>
                </tr>


            </tbody>
        </table>

        <div class="container">
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="address" id="address" cols="50" rows="5" placeholder="Enter your address"></textarea>
                </div>
                <div class="form-group">
                    <legend>Payment-Method</legend>
                    <span><input type="radio" value="upi" name="payment">UPI</span><br><br>
                    <span><input type="radio" value="card" name="payment">Credit/Debit Card</span><br><br>
                    <span><input type="radio" value="cash" name="payment">Cash on Delivery</span><br><br>
                </div>
                <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HUjg9mgTFmOcC1" async> </script>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</div>
@endsection