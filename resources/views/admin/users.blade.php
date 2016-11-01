
<h4> User List </h4>


	<table class="table">
		<thead>
			<tr>
				<th>Username</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Register Date</th>
			</tr>
		</thead>
		<tbody>
			@foreach(App\User::all() as $user)
				<tr>
					<td>{{ $user['username'] }}</td>
					<td>{{ $user['firstName'] }}</td>
					<td>{{ $user['lastName'] }}</td>
					<td>{{ $user['created_at'] }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>