<?php
    include ('config.php');

    $del=$_GET['del'];
    $sqldelete="DELETE FROM cart_table2 WHERE id='$del'";
    mysqli_query($connect, $sqldelete);
    $delete= mysqli_query($connect, $sqldelete);
    
    if($delete){
        echo "<script> alert('Record Deleted')</script>";
        echo "<script> location.href='product.php'</script>";
    };
?>