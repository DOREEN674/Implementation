<?php
$connect=mysqli_connect('localhost','root','','dairy farm');
if($connect){
    echo"connected successfully";
}
else{
    echo "not connected";
}

?>