<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
if(isset($_GET['del_cat'])){
    $cat_id = $_GET['del_cat'];
    $del_cat = "delete from categories where cat_id='$cat_id'";
    $run_del = mysqli_query($con,$del_cat);
    if($run_del){
        header('location: index.php?view_categories');
    }
}