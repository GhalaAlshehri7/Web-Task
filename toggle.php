<?php
include "db.php";

if(isset($_POST['id'])){

    $id = (int)$_POST['id'];

    $sql = "UPDATE users
            SET status = IF(status=0,1,0)
            WHERE id=$id";

    if(mysqli_query($conn,$sql)){
        echo "success";
    }else{
        echo "error";
    }

}
?>
