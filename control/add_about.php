<?php
include("core.php");
if($_POST['submit']){
    $heading=$_POST['heading'];
    $text=$_POST['desc'];
    mysqli_query($con,"INSERT INTO `about`(`heading`,`about`,`status`) VALUES ('$heading','$text',0)");
}


header("location:../add_about.php");
