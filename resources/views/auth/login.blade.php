<form action="{{route('login')}}" method="post">
	{{csrf_field()}}
	<input type="email" name="email" placeholder="Enter email">
	<br>
	<input type="password" name="password" placeholder="Password">
	<br>
	@isset($errMsg)
		<span style="color: red; font-weight: bold;">{{$errMsg}}</span>
		<br>
	@endisset
	<button type="submit">Login</button>
</form>