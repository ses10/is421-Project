@extends('layouts.master')

@section('content')
	<h3>Homepage for user: {{ $firstName . " " . $lastName }}</h3>

	<br>

	<h4>Sales</h4>
	{{ link_to_route('home', 'New Sale') }}

	<table class="table">
		<thead>
			<tr>
				<th>Sale ID</th>
				<th>VIN#</th>
				<th>Year</th>
				<th>Make</th>
				<th>Model</th>
				<th>Sale Status</th>
			</tr>
		</thead>
		<tbody>
			@foreach($sales as $sale)
				<tr> 
					<td>{{ $sale['id'] }}</td>
					<td>{{ $sale['vin'] }}</td>
					<td>{{ $sale->car['year'] }}</td>
					<td>{{ $sale->car['make'] }}</td>
					<td>{{ $sale->car['model'] }}</td>
					<td>{{ $sale->car['saleStatus'] }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection