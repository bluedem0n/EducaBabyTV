<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mensaje enviado</title>
    <!--Etiquetas meta-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://file.myfontastic.com/7xqxiVQ99fabVQXMHSfKmK/icons.css" rel="stylesheet">
    <script>
        function reload(){
            window.location="../index.php";
        }
        setTimeout('reload()', 4000);
    </script>
</head>
<body id="sendmail">

    <section class="mensaje">
        <img src="../img/logo.jpg" alt="Logo" class="image-logo">
        <h2>
            Mensaje enviado exitosamente
            <span>Se redirecionará al sitio web en menos de 3 segundos.</span>
        </h2>
    </section>

    <?php 
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

        $to= "fcanalesarias@gmail.com";
        $subject = 'Contacto desde la web: EducaBabyTV';

        $message =
        "
            <html>
                <head>
                    <meta charset='UTF-8'>
                </head>
                <body>
                    <p><b> Nombre: </b> $nombre</p>
                    <p><b> Email: </b> $correo</p>
                    <p><b>Mensaje:</b> $mensaje <br><br><hr></p>
                </body>
            </html>
        ";

        $headers = "From: $correo\r\n" .
        $headers = "MINE-Version:  1.0\r\n".
        $headers .= "Content-type: text/html; charset=UTF-8\r\n".
        'Reply-To:'.$correo."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        $resultado=mail($to, $subject, $message, $headers);


        //Enviando auto respuesta.


        $pfw_header = "From: fcanalesarias@gmail.com\n". 
        $pfw_header = "MINE-Version:  1.0\r\n".
        $pfw_header .= "Content-type: text/html; charset=UTF-8\r\n".
        'X-Mailer: PHP/' . phpversion();

        "Reply-To: fcanalesarias@gmail.com\n";
        $pfw_subject = "Hemos recibido tu mensaje satisfactoriamente";
        $pfw_email_to = "$correo";
        $pfw_message =
        "
            <html>
                <head>
                    <meta charset='UTF-8'>
                </head>
                <body>
                    <p><b> Muchas gracias </b> $nombre, por su mensaje </p>
                    <p>Te mantendremos actualizado de nuestro contenido en el siguiente email: $correo</p>
                </body>
            </html>
        ";
        @mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header );

    ?>
    
</html>


	
		
	