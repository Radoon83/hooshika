<?php
$conn = mysqli_connect('localhost', 'root', '', 'radoon_blog');
mysqli_set_charset($conn, 'utf8');
if ($conn) {
    session_start();
    $user_id = $_SESSION['id'];
    $title = $_POST['title'];
    $disc = $_POST['disc'];
    $cat = $_POST['category'];
    $picture = $_FILES['post_image'];

    move_uploaded_file($picture['tmp_name'],'../img/posts/' . $picture['name']);
    $path = 'http://localhost/radoon-weblog/img/posts/' . $picture['name'];

    $query = "INSERT INTO post (`post_title`, `post_img`, `post_disc`,`user_id`,`category`,`status`) VALUES ('$title','$path','$disc','$user_id','$cat','0')";

    $query_result = mysqli_query($conn, $query);
    if ($query_result) {
        header('location:../user/postsList.php');
    }
}