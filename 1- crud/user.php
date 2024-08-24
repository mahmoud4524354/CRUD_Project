<?php

include("connect.php");

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";


    $sql = "INSERT INTO `crud` (`name`, `email`, `mobile`, `password`)
    VALUES ('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("location: display.php");
    } else {
        die("Connection failed: " . mysqli_error($conn));
    }
}

//  خلي بالك `` مش 
// ''
// $sql = "INSERT INTO `crud`('name','email','mobile','password')
// VALUES ('$name', '$email', '$mobile','$password') ";





?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>crud operation</title>
</head>

<body>
    <div class="container my-5">
        <h1>Add User</h1>
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control"
                    placeholder="Enter You Name" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Emali</label>
                <input type="email" class="form-control"
                    placeholder="Enter You Email" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control"
                    placeholder="Enter You Mobile Number" name="mobile" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>password</label>
                <input type="password" class="form-control"
                    placeholder="Enter You password" name="password">
            </div>

            <button type="submit " class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>