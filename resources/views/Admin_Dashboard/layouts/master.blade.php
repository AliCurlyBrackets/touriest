<!DOCTYPE html>
<html lang="en">

@include("Admin_Dashboard.layouts.header")

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include("Admin_Dashboard.layouts.sidebar")

        @yield('content')

    </div>
    <!-- End of Page Wrapper -->

   @include('Admin_Dashboard.layouts.footer')
</body>

</html>
