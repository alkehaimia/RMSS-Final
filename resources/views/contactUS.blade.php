@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="mb-2 text-center">Contact Us</h1>

	@if(session('success'))
	<div class='alert alert-success'>
		{{ session('success') }}
	</div>
	@endif
	<div class="col-12 col-md-6">
	{!! Form::open(['route'=>'contactus.store']) !!}
			<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
			<label for="Name">Name: </label>
			<input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
		</div>

		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
			<label for="email">Email: </label>
			<input type="text" class="form-control" id="email" placeholder="john@example.com" name="email" required>
		</div>

		<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
			<label for="message">Message: </label>
			<textarea type="text" class="form-control luna-message" id="message" placeholder="Type your messages here" name="message" required></textarea>
		</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Send</button>
			</div>
		{!! Form::close() !!}
	</div>
 </div> <!-- /container -->
@endsection
