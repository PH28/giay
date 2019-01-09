@extends('layouts.master')

@section('content')

    <div class="">
        <h1> Information of the bill </h1> <br>
        <table>
            <tr>
                <th> Product's Id </th>
                <th> Product's name </th>
                <th> Quantity </th>
                <th> Price </th>
                <th> Price of bill </th>
            </tr>

            <tr>
                <td> {{ $productId }}</td>
                <td> {{ $productName }}</td>
                <td> {{ $quantityOrder }}</td>
                <td> {{ $priceOrder }}</td>
                <td> {{ $totalOrder }}</td>
            </tr>
        </table>
    </div>

    <div class="">
        <h1> Customer information </h1> <br>
        <form action="{{ route('orders.store') }}" method="post">
        @csrf
            <label>Name</label>
            <input type="string" name="name" value=""><br>
            <label>Email</label>
            <input type="email" name="email" value="" placeholder="example@example.com"><br>
            <label>Phone></label>
            <input type="string" name="phone" value="" >
            <h3>Adress</h3>
            <label>City/Province</label>
            <select name="province" >
                <option value="DaNang" selected>Da Nang</option>
                <option value="QuangNam" selected>Quang Nam</option>
                <option value="Hue" selected>Hue</option>
            </select>

            <label>Address</label>
            <input type="text" name="address" value="" placeholder="number of house - street - ward - township - province ">

            <button type="submit" id="order" onclick="confirm()">Order</button>

        </form>
        
    </div>

@endsection
<script>
    function confirm(){
        alert('Thank you used to ours service! We will check bill and contact you!')
    }
</script>