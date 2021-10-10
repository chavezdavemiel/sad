<?php
session_start();
include("../admin/includes/db_conn.php");

if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$product_id=$_GET['product_id'];

/*this is delet quer*/
mysqli_query($conn,"delete from products where product_id ='$product_id'")or die("query is incorrect...");
}
header('location: product.php ');
?>