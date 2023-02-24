<?php
include("connect.php");
if(isset($_GET["cartid"])){
    $id=$_GET["cartid"];
    $sql="select * from admin where id=$id";
    $result =mysqli_query($conn,$sql);
    if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$_GET["id"];
                    $image =$row["image"];
                    $imagename =$row["imagename"];
            
                    $shopname=$row["shopname"];
                    $address=$row["shopaddress"];
                    $shopowner=$row["shopowner"];
            
                    $foodtype=$row["foodtype"];
                    $foodname=$row["foodname"];
                    $quantity=$row['quantity'];
                    $price=$row["foodprice"];
                $query = "insert into `cart`(image,foodname,foodprice,foodtype,quantity) values ('$image','$foodname','$price','$foodtype','$quantity')";
                $fetch =mysqli_query($conn,$query);
                if($fetch){
                  header("location:displaycart.php");
                        }
            }
     }
        
}
?>
  

?>
