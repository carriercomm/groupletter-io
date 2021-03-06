@extends('app')

@section('content')
	<div class="centeredbox">
		<h2>Reset Password</h2>

		@if (count($errors) > 0)
			<div>
				<p><strong>Whoops!</strong> There were some problems with your input.</p>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form role="form" method="POST" action="/password/reset">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="token" value="{{ $token }}">

			<label>E-Mail Address</label>
			<input type="email" name="email" value="{{ old('email') }}">

			<label>Password</label>
			<input type="password" name="password">

			<label>Confirm Password</label>
			<input type="password" name="password_confirmation">

			<button type="submit" class="btn btn-primary">Reset Password</button>
		</form>
	</div>
@endsection
