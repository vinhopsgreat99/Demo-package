<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <base href="/public">

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
            @if(session()->has('massage'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

                {{session()->get('message')}}

            </div>

            @endif

            
            <div class="div_center">
                <h1 class="font_size">Add product</h1>

                <form action="{{url('/update_post_confirm', $post->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="div_design">
                        <label>Post Title: </label>
                        <input class="text_color" type="text" name="title" required="" value="{{$post->title}}">
                    </div>

                    <div class="div_design">
                        <label>Post Description: </label>
                        <input class="text_color" type="text" name="description"  value="{{$post->description}}">
                    </div>

                    <div class="div_design">
                        <label>Content: </label>
                        
                        <textarea class="summernote" rows="10" cols="60" name="content" >{{$post->content}}</textarea>
                    </div>

                    <div class="div_design">
                        <input class="btn btn-primary" type="submit" value="Update Product">
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

</html>