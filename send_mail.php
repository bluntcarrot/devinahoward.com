<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$inquiry = $_POST["inquiry"];
	$msg = "Contact email: " . $email . "\r\n" . $inquiry;
	
	mail("bluntcarrot@gmail.com",$name,$msg);
?>
<script language="javascript">
	alert("Thanks, <?php echo $name . '"'; ?>+"!");
	document.location.replace("/");
</script>