<?php
global $settings;
// session_start();

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

        .title {
            background-color: yellowgreen;
            margin: 0 auto;
            padding: 10% 0px 10% 0px;
            border-radius: 5%;
            background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');
            color: white;
        }

        .title a {
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>



</head>

<body class="container">

    <div class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white" style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');">
        <nav class="navbar-light  ">
            <div class="container-md">
                <a class="navbar-brand" href="#"> Welcome to blog</a>

            </div>

        </nav>

    </div>
    <a href="http://localhost:8080/public/sample/login" type="button" class="btn btn-dark float-start m-4">go back</a>
    <a href="http://localhost:8080/public/Blog/uploadBlog" type="button" class="btn btn-warning float-start m-4">upload blog</a>
    <a href="http://localhost:8080/public/Blog/blogs" type="button" class="btn btn-warning float-none m-4">go to blog</a>
 
    <div class="">
        <a class="navbar-brand" href="#">
           <h2 width="30" height="24" class="d-inline-block align-text-top">  yours blogs</h2>
          
        </a>
        <nav class="navbar navbar-light bg-light">



            <div id="blogs" class="row">


                <?php


                $html = "";
                // echo "<pre>";
                // print_r($data['blogs']);
                foreach ($data['blogs'] as $blog) {


                    $html .= '<div class="col-6 col-md-6 col-sm-12">' .
                        '<div class="card mb-3">' .

                        '<div class="card-body">' .
                        '<div class="title text-center">' .
                        '<a><h5 class="card-title">' . substr($blog->title, 0, 50) . '</h5></a>' .
                        '</div>' .
                        '<p class="card-text">' . substr($blog->text, 0, 60) . '.</p>' .
                        '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>' .
                        '<a href=' . $settings['siteurl'] .'/blog/readmore?id='. $blog->blog_id . '" type="button" class="btn btn-warning">readmore</a>' .
                        '<a href=' . $settings['siteurl'] .'/blog/edit?id='. $blog->blog_id . '" type="button" class="btn btn-danger mx-4">edit</a>' .
                        '<a href=' . $settings['siteurl'] . '/blog/deleteBlog?id=' . $blog->blog_id . '" type="button" class="btn btn-primary float-end">delete</a>' .
                        '</div>' .
                        '</div>' .
                        '</div>';
                }
                echo $html;
                ?>


            </div>





        </nav>



    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="blog.js"></script>
</body>

</html>