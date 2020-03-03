<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @include('layouts.singlepage.head')
    @yield('styles')
</head>

<body>
    <div id="wrapper">
        @include('layouts.singlepage.header')
        <div class="main-container">
            @include('layouts.singlepage.breadcrumb')
            <div class="container">
                <div class="row">
                    @yield('content')

                    @include('layouts.singlepage.rightbar')
                </div>
            </div>
        </div>
        <!-- /.main-container -->
        @include('layouts.singlepage.footer')
    </div>
    <!-- /.wrapper -->
@include('layouts.singlepage.modal')
@include('layouts.singlepage.script')
@yield('scripts')
</body>

</html>