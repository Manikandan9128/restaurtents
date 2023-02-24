<?php
include("connect.php");
if(isset($_GET["productid"])){
    $id=$_GET["productid"];
    $sql="select * from admin where id=$id";
    $result =mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
        $id=$row["id"];
        $image =$row["image"];
        $imagename =$row["imagename"];
        $shopname=$row["shopname"];
        $address=$row["shopaddress"];
        $shopowner=$row["shopowner"];
        $foodtype=$row["foodtype"];
        $price=$row["foodprice"];
        $quantity=$row["quantity"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
     <!-- Bootsrap css -->
    <link
      rel="stylesheet"
      href="./bootstrap-5.0.2-dist/css/bootstrap.min.css"/>
   
    <!-- Js  -->
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
    <!-- font awasome  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- CSS -->
    <link rel="stylesheet" href="./style.css" ?v=<?php echo time(); ?>/>
</head>
<body>
    <!-- Nav-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">

        <a class="navbar-brand" href="#"><i><b>RESTAURTENT</b></i></a>

        <form class="col-md-7 d-md-flex">
          <input
            class="form-control col-6 d-inline"
            type="search"

            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn" type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>
   
 
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ms-md-auto">
         
            <li class="nav-item">
              <a class="nav-link" href="displaycart.php"><i class="fa fa-bookmark" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="visited.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                href="admindashboard.php"
              
                ><i class="fa fa-user-plus" aria-hidden="true"></i></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <div class='container pt-5'>
        <div class='row'>
            <?php
            echo"
            <div class='col-md-6'>
            <img src='$image' class='figure-img img-fluid rounded content-image'  alt='$imagename'>
            <div class='d-flex justify-content-around'>
                <a href='addcart.php?cartid=$id' class='btn btn-secondary'>ADD CART</a>
                <a href='menu.php' class='btn btn-primary'>MENU</a>

            </div>
            </div>
            <div class='col-md-6 my-auto'>
                <div class='d-flex justify-content-between'>
                <h2 class='mb-3'>$shopname</h2>
                <p>Owner:$shopowner</p>
                </div>
                <h4 class='mb-3'>$address</h4>
                <div>Quanity : $quantity
                <div class='d-flex justify-content-between my-5'>
                    <a class= 'text-decoration-none'href='ratingfood.php?ratingid=$id'><i class='fa-solid fa-star'></i>RATING</i> </a>";
                    if($foodtype=="VEG"){
                        echo "<div class='bg-success text-white  px-4 my-auto py-2'>$foodtype</div>";
                      }
                      else{
                        echo "<div class='bg-danger text-white  px-4 my-auto py-2'>$foodtype</div>";
                      }
                    echo"<p class='bg-primary text-light  px-4 my-auto py-2'>RS:$price</p>
              </div>
                <a href='placeorder.php?orderid=$id' class='text-decoration-none ms-5 btn-primary col-8 px-5 py-2'>Place Order</a>
            </div>";
            ?>
        </div>
    </div>
</body>
</html>