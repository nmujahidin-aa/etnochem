<!DOCTYPE html>
<html>
	@include('landing-page.layouts.head')
<body>
	@include('sweetalert::alert')
	@include('landing-page.layouts.navbar')

	@yield('content')

	@include('landing-page.layouts.footer')
	@include('landing-page.layouts.script')
</body>
</html>