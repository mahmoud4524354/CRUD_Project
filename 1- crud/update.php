<?php

include("connect.php");
$id = $_GET["updateid"];

$sql = "SELECT * FROM `crud` WHERE id =$id"; ////////////////
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$name = $row["name"];
$email = $row["email"];
$mobile = $row["mobile"];
$password = $row["password"];



if (isset($_POST["update"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $sql = "UPDATE `crud` SET `id`='$id',`name`='$name',
    `email`='$email',`mobile`='$mobile',`password`='$password' WHERE `id` ='$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("location: display.php");
    } else {
        die("Connection failed: " . mysqli_error($conn));
    }
}

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
        <h1>Update User</h1>
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control"
                    placeholder="Enter You Name" name="name" autocomplete="off" value=<?php echo $name?>>
            </div>
            <div class="mb-3">
                <label>Emali</label>
                <input type="email" class="form-control"
                    placeholder="Enter You Email" name="email" autocomplete="off" value=<?php echo $email?>>
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control"
                    placeholder="Enter You Mobile Number" name="mobile" autocomplete="off" value=<?php echo $mobile?>>
            </div>
            <div class="mb-3">
                <label>password</label>
                <input type="password" class="form-control"
                    placeholder="Enter You password" name="password" value=<?php echo $password?>>
            </div>

            <button type="submit " class="btn btn-primary" name="update">Update</button>
        </form>
    </div>

</body>

</html>