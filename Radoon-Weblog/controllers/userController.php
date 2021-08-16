<?php
if ($_POST['formName'] == 'register') {
    registerUsers();
} elseif ($_POST['formName'] == 'login') {
    loginUsers();
}
function registerUsers()
{
    $conn = mysqli_connect('localhost', 'root', '', 'radoon_blog');
    mysqli_set_charset($conn, 'utf8');
    if ($conn) {
        $username = $_POST['username'];
        $profile = $_FILES['profile_image'];
        $password = $_POST['password'];

        move_uploaded_file($profile['tmp_name'], '../img/profiles/' . $profile['name']);
        $path = '../img/profiles/' . $profile['name'];
        $query = "INSERT INTO users (`username`, `profile_img`, `password`) VALUES ('$username','$path','$password')";

        $query_result = mysqli_query($conn, $query);
        if ($query_result) {
            header('location:../user/login.html');
        }
    }
}

function loginUsers()
{
    $conn = mysqli_connect('localhost', 'root', '', 'radoon_blog');
    mysqli_set_charset($conn, 'utf8');
    if ($conn) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        $query_result = mysqli_query($conn, $query);
        if (mysqli_num_rows($query_result) > 0) {
            session_start();
            $user = mysqli_fetch_all($query_result);
            $_SESSION['id'] = $user[0][0];
            header('location:../user/userDashboard.html');
        } else echo 'مقادیر اشتباه است';
    } else var_dump($conn);
}
