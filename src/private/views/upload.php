<?php
  global $settings;


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>
    <link href="../../node_modules/bootstrap/dist/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <!-- <link href="./assets/css/signin.css" rel="stylesheet"> -->
</head>

<body class="container">

    <div class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white" style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');">
        <nav class="navbar-light  ">
            <div class="container-md">
                <a class="navbar-brand" href="#"> Upload new blog</a>
            </div>
        </nav>

    </div>

    <div id="blogs">
    <a href="<?php $settings['siteurl'] ;?>/blog/blogs" type="button" class="btn btn-dark float-start m-4">go back</a>

      


        <form action='uploading' method="POST" class="row g-3">

            <div class="col-md-6">
                <div>
                    <h3 id="warning"></h3>
                </div>
                <label for="inputEmail4" class="form-label">
                    <h2> blog title</h2>
                </label>
                <input type="text" name="title" style="height: 20vh;" id="title" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">
                    <h2>content</h2>
                </label>
                <input type="text" name="content" style="height: 40vh;" id="content" class="form-control" required>
            </div>
           
            <div>

                <input type="submit" class="btn btn-warning float-end" name="uploadimg" value="Upload" name="submit">
            </div>
        </form>
    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="upload.js"></script>
</body>

</html>