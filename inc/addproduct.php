<?php 

include("constant.php");
// Code for add Product in DB table 


$pname=$_POST['productname'];
$rgbazar=$_POST['rgbazar'];
$bdbazar=$_POST['bdbazar'];
$nimbazar=$_POST['nimbazar'];

if(($pname!=null) && ($rgbazar!=null) && ($bdbazar!=null)&&($nimbazar!=null)) {
$sql = "INSERT INTO prduct (product_name, rajgangBazar_price, boardmarket_price,nimshar_price)
VALUES ('$pname','$rgbazar','$bdbazar','$nimbazar')";

if ($conn->query($sql) === TRUE) {
    echo "Product Added  successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>








