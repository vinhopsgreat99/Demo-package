<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('newpkg::css');

    <style type="text/css">
        .center {
            margin: auto;
            width: 50%;
            border: 2px solid white;
            margin-top: 40px;
            background-color: white;
            color: black;
        }

        .font_size {
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }

        .img_size {
            width: 100px;
            height: 100px;
        }

        .first_row {
            background-color: skyblue;
        }

        .th_pos {
            padding: 15px;
        }

        table,
        th,
        td {
            border: 1px solid grey;
            text-align: center;
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

            <h2 class="font_size">All Products</h2>

            <table class="center">
                <tr class="first_row">
                    <th class="th_pos">Post Title</th>
                    <th class="th_pos">Desccription</th>
                    <th class="th_pos">Author</th>
                    <th class="th_pos">Content</th>
                    <th class="th_pos">Delete</th>
                    <th class="th_pos">Edit</th>
                </tr>

                @foreach($post as $post)

                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->author}}</td>
                    <td>{{$post->content}}</td>

                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This Product')" href="{{url('delete_post', $post->id)}}">Delete</a>
                    </td>

                    <td>
                        <a class="btn btn-primary" href="{{url('update_post', $post->id)}}">Edit</a>
                    </td>
                </tr>

                @endforeach

            </table>
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