<?php
include("connect.php");
if(isset($_GET["deleteid"])){
    $id= $_GET["deleteid"];
    $sql="delete from cart where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:displaycart.php");
    }
}?>