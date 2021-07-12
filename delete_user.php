
<script src="https://code.jquery.com/jquery-3.6.0.js" 
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>       

<?php

include 'db.php';

error_reporting(0);

$userId = $_GET['Id'];
$todelete = $_GET['id'];

$query = "DELETE FROM tbl_users_214 WHERE user_id = $todelete;";
$result = mysqli_query($connection , $query);

if(!$result) {
    echo "<script>alert('Somthing went Wrong!')</script>";
}

else {
    echo "<script>alert('Deleted succesfully from My team!');document.location='connect-list.php?Id=" . $_GET['Id'] . "&Name=" . $_GET['Name'] . "&type=" . $_GET['type'] . "'</script>"; 

}

//release returned data

mysqli_free_result($result);

//close DB connection

mysqli_close($connection);