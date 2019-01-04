<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script>
</head>
<body>
	<h2> ALl Products </h2>

	<div class="container">
	<table>
		<tr>
			<th> ID</th>
			<th> Name</th>
			<th> Category id</th>
			<th> Price</th>
			<th>Show detail</th>
			
			
		</tr>
		@foreach( $products as $item)
			<tr>

				<td>{{ $item->id }}</td>

				<td>{{ $item->name }}</td>

				<td>{{ $item->category_id }}</td>

				<td>{{ $item->price }}</td>

				<td><a href="{{ route('products.show', $item->id)}}">Show Detail</a> </td>

				
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>

<!--@extends('layouts.master')

@section('header')
	<h2>All products</h2>
@endsection

 @section('content')
	
	<table>
		<tr>
			<th> ID</th>
			<th> Name</th>
			<th> Category id</th>
			<th> Price</th>
			
			
		</tr>
		@foreach( $products as $item)
			<tr>

				<td>{{ $item->id }}</td>

				<td>{{ $item->name }}</td>

				<td>{{ $item->category_id }}</td>

				<td>{{ $item->price }}</td>

				
			</tr>
			@endforeach
		</table>
@endsection 