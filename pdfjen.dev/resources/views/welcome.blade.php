@extends('layouts.master') @section('title') Welcome! @endsection

@section('content')
<div class="row">
	<div class="col-md-6">
		<h3>Sign In</h3>
		<form action="#" method="post">
			<div class="form-group">
				<label for="email">Enter mail Id:</label> <input
					class="form-control" type="text" name="first_name" id="first_name" />
			</div>
			<div class="form-group">
				<label for="password">Enter Password:</label> <input
					class="form-control" type="password" name="password" id="password" />
			</div>
			<button type="button" class="btn  btn-primary">Sign In</button>
		</form>
	</div>
	<div class="col-md-6">
		<h3>Sign Up</h3>
		<form action="#" method="post">
			<div class="form-group">
				<label for="email">Enter mail Id:</label> <input
					class="form-control" type="text" name="first_name" id="first_name" />
			</div>
			<div class="form-group">
				<label for="password">Enter Password:</label> <input
					class="form-control" type="password" name="password" id="password" />
			</div>
			<div class="form-group">
				<label for="password">Re-Enter Password:</label> <input
					class="form-control" type="password" name="rePassword"
					id=rePassword />
			</div>
			<button type="button" class="btn  btn-primary">Sign Up</button>
		</form>
	</div>
</div>
@endsection

