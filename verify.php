<?php

//verify.php

include('header.php');

include('class/Appointment.php');

$object = new Appointment;

if(isset($_GET["code"]))
{
	$object->query = "
	UPDATE patient_table 
	SET email_verify = 'Yes' 
	WHERE patient_verification_code = '".$_GET["code"]."'
	";

	$object->execute();

	$_SESSION['success_message'] = '<div class="alert alert-success">Tu correo ha sido verificado, puede iniciar sesión en el sistema!</div>';

	header('location:login.php');
}

include('footer.php');

?>