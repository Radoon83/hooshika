<?php

if ($_POST['formName'] == 'adminLogin') {
    loginAdmin();
}else var_dump($_POST);

if ($_GET['req'] == 'allow') {

    $conn = mysqli_connect('localhost', 'root', '', 'radoon_blog');
    mysqli_set_charset($conn, 'utf8');

    $id = $_GET['id'];
    $query = "UPDATE post SET status = 1 WHERE id = '$id'";

    mysqli_query($conn, $query);

    header('location:/radoon-weblog/admin/posts.php');
}

elseif ($_GET['req'] == 'deny') {

    $conn = mysqli_connect('localhost', 'root', '', 'radoon_blog');
    mysqli_set_charset($conn, 'utf8');

    $id = $_GET['id'];
    $query = "UPDATE post SET status = -1 WHERE id = '$id'";

    mysqli_query($conn, $query);
    header('location:/radoon-weblog/admin/posts.php');
}


function loginAdmin()
{
    $conn = mysqli_connect('localhost', 'root', '', 'radoon_blog');
    mysqli_set_charset($conn, 'utf8');
    if ($conn) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND is_admin = 1";

        $query_result = mysqli_query($conn, $query);
        if (mysqli_num_rows($query_result) > 0) {
            header('location:../admin/userDashboard.html');
        } else {
            header('location:../admin/login.html');
//            echo 'مقادیر اشتباه است';
        }
    } else var_dump($conn);

}