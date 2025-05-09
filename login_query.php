<?php
	require_once 'admin/dbcon.php';
	
	if(isset($_POST['login'])){
		$idno = $_POST['idno'];
		$password = $_POST['password'];
	
		$result = $conn->query("SELECT * FROM voters WHERE id_number = '$idno' && password = '".md5($password)."' && `account` = 'active' && `status` = 'Unvoted'") or die(mysqli_errno());
		$row = $result->fetch_array();
		$voted = $conn->query("SELECT * FROM `voters` WHERE id_number = '$idno' && password = '".md5($password)."' && `status` = 'Voted'")->num_rows;
		$numberOfRows = $result->num_rows;				
		
		if ($numberOfRows > 0){
			session_start();
			$_SESSION['voters_id'] = $row['voters_id'];
			header('location:vote.php');
		} else {

			if ($voted == 1) {
				echo '<div id="error-message" style="color: red; text-align: center; font-style: italic;">Sorry, You Already Voted</div>';
			} else {
				echo '<div id="error-message" style="color: red; text-align: center; font-style: italic;">Your account is not Activated</div>';

			}
		}
	}
?>
