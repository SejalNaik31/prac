<?php
    include "db_connect.php";
    $sql = "SELECT * FROM customer";
    // $email','$phone','$address','$id_proof
    $result = mysqli_query($conn, $sql);

    echo "<table border='1'>";
    echo "<tr>
    <th>CID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>ID_Proof</th>
    </tr>";

    while ($row = mysqli_fetch_assoc($result)){
        $cid= $row['cid'];
        $name = $row['name'];
        $phone = $row['phone'];
        $email = $row['email'];
        $address = $row['address'];
        $id_proof = $row['id_proof'];

        echo "<tr>
        <td>$cid</td>
        <td>$name</td>
        <td>$email</td>
        <td>$phone</td>
        <td>$address</td>
        <td>$id_proof</td>
        </tr>";
    }
?>