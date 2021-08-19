<?PHP
$data_u = date("d.m.Y");
require_once('../phpmailer/PHPMailerAutoload.php');
$email = $_POST['mail'];
$textm = $_POST['textm'];
//login odbiorcy na serwer smtp
$mail = new PHPMailer();
$mail->	isSMTP();
$mail-> SMTPAuth = true;
$mail-> SMTPSecure = 'ssl';
$mail-> Host = 'smtp.gmail.com';
$mail-> Port = '465';
$mail-> isHTML(1);
$mail-> Username = "sencsan@gmail.com";
$mail-> Password = "MonsteR1983";
$mail-> FromName = "no replay";
$mail-> Subject = "Consulta del sitio web ".$data_u;
$mail-> Body = "De: ".$email." | Fecha ".$data_u."<br>".$textm;
$mail-> AddAddress('sencsan@gmail.com'); //<-- tu wysyla
$mail-> Send();
		
header("Location: ../index.php");

?>