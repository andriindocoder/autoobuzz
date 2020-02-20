<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @include('layouts.frontend.head')
    @yield('styles')
</head>

<body>
    <div id="wrapper">
        @include('layouts.frontend.header')
        <div class="main-container">
            @include('layouts.frontend.breadcrumb')
            <div class="container">
                <div class="row">
                    @yield('content')

                    @include('layouts.frontend.rightbar')
                </div>
            </div>
        </div>
        <!-- /.main-container -->
        @include('layouts.frontend.footer')
    </div>
    <!-- /.wrapper -->
@include('layouts.frontend.modal')
@include('layouts.frontend.script')
@yield('scripts')
</body>

</html>