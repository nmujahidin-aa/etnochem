<!DOCTYPE html>
<html>
	@include('auth.layouts.head')
<body>
	@include('sweetalert::alert')
	@yield('content')

	@include('auth.layouts.script')
</body>
</html>