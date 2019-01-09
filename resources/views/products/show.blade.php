@extends('layouts.master')

@section('header')
	<h1>Product {{$product->name}} detail</h1>
@endsection

@section('content')
	
	<table>
		<tr >
			<th > ID</th>
			<th > Name Product</th>
			<th > Introduce</th>
			<th > Price</th>
		</tr>
		<tr >

			<td >{{ $product->id }}</td>
			<td >{{ $product->name }}</td>
			<td >{{ $product->content }}</td>
			<td >{{ $product->price }}</td>
		</tr>
	</table>
	<br>
	<form action="{{ route('orders.create') }}" method="get">
		@csrf
		<select name="quantity_order">
		@for ($i = 1; $i <= $max; $i++)
			<option value="{{ $i }}">{{ $i }}</option>
		@endfor
		</select>
		<input type="hidden" name="id" value="{{ $product->id }}">
		<input type="hidden" name="name" value="{{ $product->name }}">
		<input type="hidden" name="price" value="{{ $product->price }}">
		<button type="submit">Next Step</button>
	</form>
	<a href="{{route('products.index')}}">Return list products</a>
@endsection