<?php
include("core.php");
$id=$_GET['id'];
if($_GET['table']=="slider"){
    $data=mysqli_fetch_array(mysqli_query($con,"Select * from `slider` where `id`='$id' "));
    $file=$data['image'];
    mysqli_query($con,"delete from `slider` where `id`='$id'");
    unlink($file);
    header("location:../add_slider.php");
}
if($_GET['table']=="gallery"){
    $data=mysqli_fetch_array(mysqli_query($con,"Select * from `gallery` where `id`='$id' "));
    $file=$data['image'];
    mysqli_query($con,"delete from `gallery` where `id`='$id'");
    unlink($file);
    header("location:../add_gallery.php");
}
if($_GET['table']=="about"){
    mysqli_query($con,"delete from `about` where `id`='$id'");
    header("location:../add_about.php");

}
