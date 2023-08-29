<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('newpkg::css');
</head>

<body>
        @include('newpkg::banner');
        <!-- partial:partials/_sidebar.html -->
        @include('newpkg::sidebar');
        <!-- partial -->
        @include('newpkg::header');
        <!-- partial -->
        @include('newpkg::body');
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="vinh/newpkg/admin/assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        @include('newpkg::script');
</body>

</html>