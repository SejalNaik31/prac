<?php
    if (isset($_POST['submit'])) {
        include "db_connect.php";

        $cid = $_POST['cid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $id_proof = $_POST['id_proof'];
        $sql = "INSERT INTO customer VALUES($cid,'$name','$email','$phone','$address','$id_proof')";

        // get the result set (set of rows)
        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html>
	<section class="container grey-text">
		<h4 class="center">Register</h4>
		<form class="white" action="index.php" method="POST">
            <label>CID</label>
			<input type="text" name="cid" value="" style="margin-top: 10px"><br>
            <label>Name</label>
			<input type="text" name="name" value="" style="margin-top: 10px"><br>
			<label>Email</label>
			<input type="text" name="email" value="" style="margin-top: 10px"><br>
            <label>Phone</label>
			<input type="text" name="phone" value="" style="margin-top: 10px"><br>
            <label>Address</label>
			<input type="text" name="address" value="" style="margin-top: 10px"><br>
            <label>Id_Proof</label>
			<input type="text" name="id_proof" value="" style="margin-top: 10px"><br>

			<div class="center">
				<input type="submit" name="submit" value="Submit" style="margin-top: 10px" class="btn brand z-depth-0">
			</div>
		</form>
	</section>
    
    <div>
        <a href="extract.php">Show details</a>
    </div>

</html>