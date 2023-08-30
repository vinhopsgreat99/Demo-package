<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('newpkg::css');

    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .font_size {
            font-size: 40px;
            padding-top: 40px;
        }

        .text_color {
            color: black;
            padding-bottom: 20px;
        }

        .div_design {
            padding-bottom: 15px;
        }

        label {
            display: inline-block;
            width: 200px;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body>
    @include('newpkg::banner');
    <!-- partial:partials/_sidebar.html -->
    @include('newpkg::sidebar');
    <!-- partial -->
    @include('newpkg::header');
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">



            <div class="div_center">
                <h1 class="font_size">Create Post</h1>

                <form action="{{url('/add_post')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="div_design">
                        <label>Post Title: </label>
                        <input class="text_color" type="text" name="title" required="">
                    </div>

                    <div class="div_design">
                        <label>Post Description: </label>
                        <input class="text_color" type="text" name="description">
                    </div>


                    <!-- <div class="div_design">
                        <label>Author: </label>
                        <input class="text_color" type="text"   value="{{ $user == '1' ? 'Admin' : null }}" {{ $user == '1' ? 'disabled' : '' }} name="description">
                    </div> -->

                    <div class="div_design">
                        <label>Content: </label>
                        
                        <textarea class="summernote" rows="10" cols="60" name="content"></textarea>
                    </div>

                    <!-- <div class="div_design">
                        <label>Product Image Here: </label>
                        <input type="file" name="image">
                    </div> -->

                    <div class="div_design">
                        <input class="btn btn-primary" type="submit" value="Create Post">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vinh/newpkg/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include('newpkg::script');
</body>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!-- <script>
    $('.summernote').summernote({
        placeholder: 'Content here',
        tabsize: 2,
        //   height: 100
    });
</script> -->

</html>