<!DOCTYPE html>
<html lang="en">
@include('Admin::part.head')

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('Admin::part.menu')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('main-content')

            <!-- End Page-content -->

            @include('Admin::part.footer')
        </div>
        <!-- end main content-->
    </div>

    @include('Admin::part.right-sidebar')

    @include('Admin::part.vendor-scripts')
</body>

</html>
