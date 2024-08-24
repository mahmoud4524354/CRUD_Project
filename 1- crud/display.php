<?php

include("connect.php");

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Display_page</title>
</head>

<body>
    <div class="container">
        <a href="user.php"><button class="btn btn-primary my-5"> Add User</button></a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Password</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM `crud`";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                // $row = mysqli_fetch_assoc($result);
                // print_r($row) ;
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row["name"];
                    $email = $row["email"];
                    $mobile = $row["mobile"];
                    $password = $row["password"];

                    echo
                    '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $mobile . '</td>
                    <td>' . $password . '</td>
                    <td>
                    <a href="update.php?updateid='.$id.'"><button class="btn btn-primary">Update</button></a>
                    <a href="delete.php?deleteid='.$id.'" ><button class="btn btn-danger">Delete</button></a>
                    </td>
                    </tr>';
                }
            } ?>
            <!-- <td>
            <td> <a href="" class="btn btn-primary"><button></button></a>
            <td> <a href="" class="btn btn-primary"><button></button></a>

            </td> -->
        </tbody>
    </table>


</body>

</html>