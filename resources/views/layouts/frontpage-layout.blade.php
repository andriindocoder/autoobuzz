<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    @include('layouts.frontpage.head')
    @yield('styling')
</head>
<body>

<div id="wrapper">

    @include('layouts.frontpage.navbar')

    @include('layouts.frontpage.slider')

    <div class="main-container">
        <div class="container">
            @include('layouts.frontpage.logos')

            <div style="clear: both"></div>

            <div class="row">


                @include('layouts.frontpage.latest')

                @include('layouts.frontpage.rightbar')
            </div>

            @include('layouts.frontpage.lists')

        </div>
    </div>
    <!-- /.main-container -->

    @include('layouts.frontpage.prefooter')

    @include('layouts.frontpage.footer')
</div>
<!-- /.wrapper -->
@include('layouts.frontpage.modal')
@include('layouts.frontpage.script')
@yield('javascript')
</body>
</html>
