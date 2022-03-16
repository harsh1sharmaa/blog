<?php
// session_start();
// session_unset();
// session_destroy();
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

    <!-- Bootstrap core CSS -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
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

        html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>


    <!-- Custom styles for this template -->
    <link href="./assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">


    <main class="form-signin">
        <form action="http://localhost:8080/public/sample/registerUser" method="POST">
            <h1 class="h3 mb-3 fw-normal">Ragistor</h1>

            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">username</label>
            </div>
            <div class="form-floating">
                <input type="password" name="pswrd" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">email</label>
            </div>
            



            <!-- <button class="w-100 btn btn-lg btn-primary" name="submit" value="ragistor" type="submit">Ragistor</button> -->
            <input class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="Ragistor">
            <p class="mt-5 mb-3 text-muted">&copy; CEDCOSS Technologies</p>
        </form>
    </main>
</body>

</html>