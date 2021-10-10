<?php 
include('../functions.php');
include("../admin/includes/db_conn.php");


if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Users || PHP</title>
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
    color: white;
    
}
  .header {
    width: 50%;
    margin: 50px auto 0px;
    color: white;
    background: linear-gradient(to top left, #cc6600 0%, #993300 100%);
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
    }
    

    .content{
    background: linear-gradient(to top left, #cc6600 0%, #993300 100%);
  width: 50%;
    min-height: 80px;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  border-radius: 0px 0px 10px 10px;
}
.profile_info div {
  display: inline-block; 
  margin: 5px;
  text-align: center;

}
 .btn {
  padding: 15px;
  font-size: 18px;
  color: white;
  background-color: green;
  border: none;
  border-radius: 5px;
  text-decoration: none;

}
 .btn:hover{
  padding: 15px;
  font-size: 18px;
  color: white;
 background-color: red;
  border: none;
  border-radius: 5px;

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
table{
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
    <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Users List</h4>
                <br>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                        <tr>
                          <th>ID</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th><a class=" btn btn-primary" href="create_user.php">Add New</a></th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($conn,"select * from users")or die ("query 1 incorrect.....");

                        while(list($id, $username, $email) = mysqli_fetch_array($result))
                        { 
                        echo "
                        <tr>
                        <th>$id</th>
                        <th>$username</th>
                        <th>$email</th>
                        </tr>";
                        }
                        ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
