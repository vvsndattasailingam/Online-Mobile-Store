
<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "store");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	
}
    
    $p_id = mysqli_real_escape_string($link, $_REQUEST['p_id']);
    $status_from_database_query="select status from users_items where p_id='$p_id'";
    $status_from_database_result=mysqli_query($con,$status_from_database_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($status_from_database_result);
    //echo $row['status'];
    if($row['status']==Confirmed){
        $update_product_quantity_query="update stock set product_quantity= product_quantity - 1 where p_id='$p_id'";
        $update_product_quantity_result=mysqli_query($con,$update_product_quantity_query) or die(mysqli_error($con));
        echo "Your order has been confirmed and will be ready to checkout shortly.";
        ?>
        <meta http-equiv="refresh" content="3;url=products.php" />
        <?php
    }else{
        ?>
        <script>
            window.alert("Booking failed!!");
        </script>
        <meta http-equiv="refresh" content="1;url=settings.php" />
        <?php
        //header('location:settings.php');
    } 
?>