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