<!DOCTYPE html>
<html>
	@include('home-page.layouts.head')
<body>
	@include('sweetalert::alert')
	@include('home-page.layouts.navbar')

	@yield('content')

	@include('home-page.layouts.script')
</body>
</html>