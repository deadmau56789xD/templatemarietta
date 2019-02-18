<?php
$nombre = $_POST['first_name'];
$correo = $_POST['correo'];
$telefono = $_POST['phone'];
$cantidad = $_POST['cantidad'];
$fecha = $_POST['fecha'];
$mensaje = $_POST['comments'];
$destinatario = 'jsalamancaj@misena.edu.co'; // en esta línea va el mail del destinatario.
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre y apellido: " . $_POST['first_name'] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST['correo'] . "\r\n";
	$cuerpo .= "Consulta: " . $_POST['phone'] . "\r\n";
    $cuerpo .= "Consulta: " . $_POST['cantidad'] . "\r\n";
    $cuerpo .= "Consulta: " . $_POST['fecha'] . "\r\n";
    $cuerpo .= "Consulta: " . $_POST['comments'] . "\r\n";
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['first_name']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'index.html'; //se debe crear un html que confirma el envío
}
?>
