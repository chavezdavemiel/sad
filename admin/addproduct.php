
<?php

include('../functions.php');
include('../admin/includes/db_conn.php');

if(isset($_POST['btn_save']))
{
$product_name=$_POST['product_name'];
$details=$_POST['details'];
$price=$_POST['price'];
$product_type=$_POST['product_type'];



$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
  if($picture_size<=50000000)
  
    $pic_name=time()."_".$picture_name;
    move_uploaded_file($picture_tmp_name,"../admin/product_images/".$pic_name);
    
mysqli_query($conn,"insert into products (cat_id, product_title, product_price, product_desc, product_image) values ('$product_type','$product_name','$price','$details','$pic_name')") or die ("query incorrect");

 header("location: sumit_form.php?success=1");
}

mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Product || PHP</title>

  <style>
  	* { margin: 0px; padding: 0px; }
body {
	font-size: 120%;
	font-family: 'Courier New', monospace;
	background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(../img/bg.jpg);
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    
}
.header {
	margin: 50px auto 0px;
	color: white;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 10px;
	background: linear-gradient(to top left, #cc6600 0%, #993300 100%);
    width: 50%;
}

  	.content{
  	background: linear-gradient(to top left, #cc6600 0%, #993300 100%);
	width: 50%;
    min-height: 80px;
	margin: 0px auto;
	padding: 10px;
	border: 1px solid #B0C4DE;
	border-radius: 0px 0px 10px 10px;
}
.profile_info div {
	display: inline-block; 
	margin: 5px;
	text-align: center;

}
 
  form{
  	background: linear-gradient(to top left, #cc6600 0%, #993300 100%);
  	width: 50%;
  	color: white;
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	border-radius: 0px 0px 10px 10px;
  }
  button[name=register_btn] {
    background: #003366;
  }
  ul {
    list-style-type: none;
    margin: 5px;
    padding: 5px;
    overflow: hidden;
    background: linear-gradient(to top left, #cc6600 0%, #993300 100%);

  }

  li {
    float: right;
  }

  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  li a:hover {
    background-color: #111;
  }

  table{
    text-align: center;

  }
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=file], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: white;
}

button {
  width: 100%;
  background-color: green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: red;
}

  </style>
</head>
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
        <ul>
          		<li ><a href="home.php?logout='1'">Logout</a></li>
          		<li><a href="user.php"> User</a></li>
          		<li><a href="product.php"> Products</a></li>
          		<li><a href="home.php"> Home</a></li>
        </ul>
            

        <?php 
        endif 
        ?>
      </div>
    </div>
    <div>
          <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
          <div class="row">
          
                
         <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Add Product</h5>
              </div>
              <div class="card-body">
                <br>
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Title</label>
                        <input type="text" id="product_name" required name="product_name" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="">
                        <label for="">Add Image</label>
                        <input type="file" name="picture" required id="picture" >
                      </div>
                    </div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea rows="5" cols="43" id="details" required name="details"></textarea>
                      </div>
                    </div>
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Pricing</label>
                        <input type="text" id="price" name="price" required class="form-control" >
                      </div>
                    </div>
                  </div>
                 
                  
                
              </div>
              
            </div>
          </div>
          <div class="col-md-12">

                  <div class="row">
                    
                    <div class="col-md-12" >
                      <div class="form-group">
                        <label>Product Category</label>
                        <select class="form-select" id="product_type" name="product_type">
                                <option hidden=""></option>
                                <option value="1">Coffee</option>
                                <option value="2">Tea</option>
                            </select>
                      </div>
                    </div>
                     
                  
              </div>
              <br>
              <div class="card-footer">

                  <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">Update Product</button>
              </div>
            </div>
          </div>
          
        </div>
         </form>
          
        </div>
      </div>
      </div>
    </div>
      <br>
      <br>