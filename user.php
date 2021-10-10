<?php 
	include('functions.php');
	include("admin/includes/db_conn.php");
	if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home || User</title>
</head>
<style type="text/css">
  * { margin: 0px; padding: 0px; }
  body {
  font-size: 120%;
  font-family: 'Courier New', monospace;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(img/bg.jpg);
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    color: white;
    
}
.content{
  width: 60%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: linear-gradient(to bottom, #cc6600 0%, #cc3300 100%);
  border-radius: 0px 0px 10px 10px;
}
  .header{
  width: 60%;
  margin: 50px auto 0px;
  color: white;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
    background: linear-gradient(to top, #cc6600 0%, #cc3300 100%);
  }

.profile_info div {
  display: inline-block; 
  margin: 5px;
  text-align: center;

}

  table{
    text-align: center;
    width: 100%;

  }

</style>
<body>
 <div class="header">
    <h2>Welcome <?php  

            if (isset($_SESSION['user'])) : ?>
          
              <strong><?php echo $_SESSION['user']['username']; ?>
    	<br><i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i></h2>
  </div>
  <div class="content" align="center">

    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <div class="profile_info">
      <div>
      <a href="user.php?logout='1'">Logout</a>
            

        <?php 
        endif 
        ?>
      </div>
    </div>

			        <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Products List</h4>
                <br>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter" border="2" cellspacing="5" cellpadding="5">
                    <thead class=" text-primary">
                      <tr>
                      	<th>Image</th>
                      	<th>Name</th>
                      	<th>Decription</th>
                      	<th>Price</th>

                      </tr>
                  </thead>
                   <tbody>
                      <?php 

                        $result=mysqli_query($conn,"select product_id, product_image, product_title, product_desc, product_price from products") or die ("query 1 incorrect.....");

                        while(list($product_id,$image,$product_name, $product_desc, $price)=mysqli_fetch_array($result))
                        {
                        echo "
                        <tr>
                        <td><img src='admin/product_images/$image' style='width:80px; height:80px; border:groove #000'></td>
                        <td>$product_name</td>
                        <td>$product_desc</td>
                        <td>$price</td>
                        </tr>";
                        }

                        ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

           

          </div>
	</div>
</body>
</html>