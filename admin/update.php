<?php
session_start();
include("../admin/includes/db_conn.php");

$product_id=$_REQUEST['product_id'];

$result=mysqli_query($conn,"select product_id,cat_id, product_title, product_price, product_desc, product_image from products where product_id='$product_id'")or die ("query 1 incorrect.......");

list($product_id,$cat_id,$product_title,$product_price,$product_desc, $product_image)=mysqli_fetch_array($result);

if(isset($_POST['btn_save'])) 
{

$product_title=$_POST['product_title'];
$cat_id=$_POST['cat_id'];
$product_price=$_POST['product_price'];
$product_desc=$_POST['product_desc'];


mysqli_query($conn,"update products set product_title='$product_title', product_price='$product_price', product_desc='$product_desc',cat_id='$cat_id' where product_id='$product_id'")or die("Query 2 is inncorrect..........");

header("location: product.php");
mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Update || Admin</title>
</head>
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
  padding: 10px;
  border: 1px solid #B0C4DE;
  border-radius: 0px 0px 10px 10px;
  }
  button[name=register_btn] {
    background: #003366;
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
<body>
      <div class="header">
    <h2>Admin - Update Product</h2>
  </div>
  
              <form action="update.php" name="form" method="post" enctype="multipart/form-data">
              <div class="card-body">
                
                  <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id;?>" />
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" id="product_title" name="product_title"  class="form-control" value="<?php echo $product_title; ?>" >
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" id="product_price" name="product_price" class="form-control" value="<?php echo $product_price; ?>" >
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label >Product Description</label>
                        <input type="text" name="product_desc" id="product_desc" class="form-control" value="<?php echo $product_desc; ?>">
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label >Product Category</label>
                        <label>Product Category</label>
                        <select class="form-select" id="cat_id" name="cat_id" value="<?php echo $cat_id; ?>">
                                <option value="1">Coffee</option>
                                <option value="2">Tea</option>
                        </select>
                      </div>
                    </div>
              </div>
              <div class="card-footer">
                <button type="submit" id="btn_save" name="btn_save" class="btn btn-fill btn-primary">Update</button>
              </div>
              </form>    
            </div>
          </div>
         
          
        </div>
      </div>
    </body>
</html>