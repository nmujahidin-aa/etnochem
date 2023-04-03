<!DOCTYPE html>
<html lang="en">
    @include('dashboard.layouts.head')
<body>
    @include('sweetalert::alert')
    
    @include('dashboard.layouts.topbar')
    @include('dashboard.layouts.sidebar')
    <main id="main" class="main">
        @yield('content')
    </main>
    

    @include('dashboard.layouts.script')
</body>
</html>