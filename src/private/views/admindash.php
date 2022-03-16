<?php
// session_start();
// if (!isset($_SESSION['admin'])) {

// //   header("Location:./login.php");

// }
// require_once('./classes/check.php');

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
    <title>Dashboard Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <!-- Bootstrap core CSS -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">


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
    <link href="./assets/css/dashboard.css" rel="stylesheet">
</head>

<body>

    <!-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"> -->
    <div class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white" style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');">
        <nav class="navbar-light  ">
            <div class="container-md">
                <a class="navbar-brand" href="#"> Welcome to admin Dashboard</a>
            </div>
        </nav>

    </div>

    <!-- <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
    <!-- <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <form action="./controlr.php" method="POST">
                     <a class="nav-link px-3" href="#">Sign out</a> -->
    <!-- <input type="hidden" name="signout" value="true">
                    <button type="submit" class="nav-link px3">Sign out</button>
                </form>
            </div>
        </div>  -->
    <!-- </header> -->

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active btn btn-warning" aria-current="page" href="http://localhost:8080/public/Blog/blogs">
                                <span data-feather="home"></span>
                                GO TO BLOGS
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>

                <!-- <a href="./Addnewuser.php" type="button" class="btn btn-warning">ADD New User</a> -->
                <h2>Users Info</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">udername</th>
                                <th scope="col">email</th>
                                <th scope="col">role</th>
                                <!-- <th scope="col">blog_id</th> -->
                                <th scope="col">permission</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">

                            <?php
                          
                            $str = "";
                          
                            foreach ($data['users'] as $user) {

                                //     let obj=data[i];

                                $str .= "<tr><td>" . $user->user_id .
                                    "</td><td>"
                                    . $user->username .
                                    "</td><td>"
                                    . $user->email .
                                    "</td><td>"
                                    . $user->role .
                                    "</td><td>"
                                    . $user->permission .
                                    "</td><td><a href=changePermission?id=" . $user->id . "&permission=yes class='btn btn-success' >aprove</a><a href=changePermission?id=" . $user->id . "&permission=no class='btn btn-danger'>restricted</a>" .


                                    "</td></tr>";
                            }
                            echo $str;
                            ?>


                        </tbody>
                    </table>
                    <nav aria-label="...">
                        <ul class="pagination" id="paginaton">
                           
                        </ul>
                    </nav>
                </div>

                <h2>blog Info</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Blog Id</th>
                                <th scope="col">user_id</th>
                                <th scope="col">title</th>
                                <th scope="col">content</th>

                                <!-- <th scope="col">username</th> -->
                                <th scope="col">permission</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <!-- <input type="text" id="data" value="<?php print_r($data['users']); ?>"> -->
                        <tbody id="blog-table-body">

                            <?php
                            $str = "";
                            foreach ($data['blogs'] as $blog) {

                                //     let obj=data[i];

                                $str .= "<tr><td>" . $blog->blog_id .
                                    "</td><td>"
                                    . $blog->user_id .
                                    "</td><td>"
                                    . substr($blog->title, 0, 100) .
                                    "<a  href=" . $settings['siteurl'] . "/blog/readmore?id=" . $blog->id . " class='btn btn-light' >read more</a></td><td>"
                                    . substr($blog->text, 0, 100) .
                                    "<a   href=" . $settings['siteurl'] . "/blog/readmore?id=" . $blog->id . " class='btn btn-light' >read more</a></td><td>"
                                    . $blog->permission .
                                    "</td><td><a href=blogPermission?id=" . $blog->id . "&permission=yes class='btn btn-success' >aprove</a><a href=blogPermission?id=" . $blog->id . "&permission=no class='btn btn-danger'>restricted</a>" .


                                    "</td></tr>";
                            }
                            echo $str;
                            ?>






                        </tbody>
                    </table>
                    <nav aria-label="...">
                        <ul class="pagination" id="paginaton-blog">
                            <!-- <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li> -->
                        </ul>
                    </nav>
                </div>
            </main>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="dash.js"></script>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>