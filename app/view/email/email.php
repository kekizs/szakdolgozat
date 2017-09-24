<?php
//email form
/*if (!isset($_POST['submit'])) {
	print '<div id="email">
		<h2>Írja meg kérdését, észrevételét! Amint tudok, válaszolok!</h2>
		<p>Az üzenetről a megadott e-mail címre másolatot fog kapni.</p><br>
		<form method ="post">
			<table>
			<tr><td>Az Ön neve: </td><td><input type="text" name="send_name"></td>
			<tr><td>Az Ön e-mail címe: </td><td><input type="email" name="send_email"></td>
			<tr><td>Üzenet tárgya: </td><td><input type="text" name="send_object"></td>
			<tr><td>Üzenet szövege: </td><td><textarea name ="send_text"></textarea></td>
			<tr><td colspan="2"><input type="hidden" name="send_time" value="'.date("Y-m-d H:m",time()).'"></td>
			<tr><td></td><td><input type="submit" name="submit" id="submit" value="Üzenet elküldése"></td>
			</table>
		</form>
		</div>
		<dic class="clear"></div>';*/
}
//send the email
if (isset($_POST['submit'])) {
	//text of email for sender
	$email="Kedves ".$_POST['send_name']."! <br><br>
		A DigitTár rendszerében elküldött üzenetének tartalma: <br><br>";
	$email.="A küldés időpontja: ".$_POST['send_time']." <br>";
	$email.="Az üzenet tárgya: ".$_POST['send_object']." <br>";
	$email.="Az üzenet szövege:<pre> ".$_POST['send_text']." </pre><br><br>";
	$email.="Üdvözlettel,<br>K.Andrea";
	//SENDING PROCESS
	require_once("email/class.phpmailer.php");
	//set mailbox
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "smtp.gmail.com"; //smtp server
	$mail->SMTPAuth = true; //smtp validate
	$mail->Port = 465; //smtp port
	$mail->Username = "csokolademanufakaktura@gmail.com";
	$mail->Password = "andika0130;
	$mail->SMTPSecure = 'ssl';
	$mail->WordWrap = 100;  //auto break
	$mail->isHTML(true); //küldés HTML e-mailként
	$mail->CharSet = "UTF-8";
	//set email
	$mail->SetFrom("csokolademanufakaktura@gmail.com", "TortaWebshop");
	$mail->Subject = "Hírlevél feliratkozás";
	$mail->Body = $email;
	$mail->AltBody = strip_tags($email);
	$mail->AddAddress($_POST['email'], $_POST['name']); //user data
	//copy
	$mail->AddBCC("csokolademanufakaktura@gmail.com", "TortaWebshop");
	//emailküldés
	if (!$mail->Send()) print "Üzenetküldési hiba".$mail->ErrorInfo;
	else { 
		print "Üzenet elküldve!";
		header("refresh:3;url=index.php");
	}
}
?>