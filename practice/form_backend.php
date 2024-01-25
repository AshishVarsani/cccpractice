<?php 

include("php_function.php");
include("mysql_function.php");
$conn = mysqli_connect("localhost","root","","ccc_practice");

$data=getPostData("ccc_product");
echo "<pre>";
print_r($data);
$sql=insert("ccc_product",$data);
$insert=mysqli_query($conn,$sql);
if($insert){
    echo "<script>alert('Data add successfully')</script>";
    echo "<script>location. href='form.php'</script>";
}else {
    echo "error";
}

?>