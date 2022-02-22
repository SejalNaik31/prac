<?php
    $conn = mysqli_connect('localhost','root','','dbase');

    if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
    }
?>

<?php
    if(isset($_POST['Submit'])){
    include "db_connect.php";
        
    $cid = $_POST['cid'];
    $name = $_POST['name'];

    $sql = "INSERT INTO customer VALUES (cid, 'name')";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    }
?>