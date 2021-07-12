
    <script src="https://code.jquery.com/jquery-3.6.0.js" 
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>       

    <?php

    include 'db.php';

    error_reporting(0);

    if (isset($_GET['Id']) && isset($_GET['id'])) {
        $userId = $_GET['id'];  
        $uniqueTaskId = $_GET['Task'];
      }  
      else  {
        $userId = $_GET['Id'];
      }   


    $query = "DELETE FROM tbl_connect_214 WHERE user_id = $userId AND id = $uniqueTaskId;";
    $result = mysqli_query($connection, $query);
  
    if(!$result) {
        echo "<script>alert('Somthing went Wrong!')</script>";
        die ("DB query failed.");

    }

    else {
        echo "<script>alert('Deleted succesfully from Timeline!');document.location=document.location='home.php?Id=" . $_GET['Id'] . "&Name=" . $_GET['Name'] ."&type=" . $_GET['type'] ."'</script>";
    }  

  

    //release returned data

    mysqli_free_result($result);

    //close DB connection

    mysqli_close($connection); 