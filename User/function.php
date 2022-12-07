<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

$conn = mysqli_connect("localhost", "root", "", "penjualan");

function register($data)
{
    global $conn;

    $username = stripslashes($data["username"]);
    $email = $data['email'];
    $password = mysqli_real_escape_string($conn, $data["password"]);

    $result = mysqli_query($conn, "SELECT username FROM tbl_user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah tersedia!')
            </script>";
        return false;
    }



    //enkripsi password
    $rpassword = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO tbl_user VALUES('', '$username',  '$email', '$rpassword')");

    return mysqli_affected_rows($conn);
}


