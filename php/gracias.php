<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
        <title>Gracias | YAMAHA</title>
    </head>
<body class="pageFormulario gracias">
<?php 
$myemails = 'diego@nerdmedia.pe';
$name = $_POST['nombreyapellido'];
$tel = $_POST['telefono'];
$dni = $_POST['dni'];
$email = $_POST['correo'];
$departamento = $_POST['departamento'];
$distrito = $_POST['distrito'];
$tipocompra = $_POST['tipocompra'];

$tipopaquete = $_POST['yamaha_Paquete'];
$colortanque = $_POST['yamaha_Color_de_tanque'];
$colorasiento = $_POST['yamaha_Color_de_asiento'];
$tipocostura = $_POST['yamaha_Tipo_de_costura'];
$tipoespejo = $_POST['yamaha_Tipo_de_espejo'];
$tipotimon = $_POST['yamaha_Tipo_de_timon'];

$cuerpo = '
<html>  
<body>  
<h1>Hola Yamaha</h1> 
<p>Tienes un nuevo mensaje:</p>
<p> <b>Nombre completo:</b> '.$name .'</p>
<p> <b>Teléfono:</b> '.$tel .'</p>
<p> <b>Teléfono:</b> '.$tel .'</p>
<p> <b>Email:</b> '.$email .'</p>
<p> <b>Departamento:</b> '.$departamento .'</p>
<p> <b>Distrito:</b> '.$distrito .'</p>
<p> <b>Tipo de compra:</b> '.$tipocompra .'</p>
</b>
<p>Personalizó du FZX de esta manera:</p>
<p> <b>Tipo de paquete:</b> '.$tipopaquete .'</p>
<p> <b>Color del tanque:</b> '.$colortanque .'</p>
<p> <b>Color de asiento:</b> '.$colorasiento .'</p>
<p> <b>Tipo de costura:</b> '.$tipocostura .'</p>
<p> <b>Tipo de espejo:</b> '.$tipoespejo .'</p>
<p> <b>Tipo de timon:</b> '.$tipotimon .'</p>
</body> 
</html> 
';
//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

$to = $myemails;
$email_subject = "Nueva personalizacion";
$email_body = "Haz recibido un nuevo mensaje de: \n Nombre: $name \n
Celular: $tel \n Email: $email";
$headers .= "From: $name";


mail($to, $email_subject, $cuerpo, $headers);

if (mail($to, $email_subject, $cuerpo, $headers)) {
    echo 'Correo enviado exitosamente';
} else {
    echo 'Error al enviar el correo';
}
?>
    <main>
    <div class="shake">
            <img src="../img/mouse.svg" alt="">
        </div>
        <div class="circulo">            
        </div>
        <section class="sectionFormulario">
        <img src="../img/huella.webp" alt="" class="huella huellas1">
            <img src="../img/huella.webp" alt="" class="huella huellas2">
            <div class="elemento1">
                <img src="../img/elemento1.svg" alt="">
            </div>
            <div class="elemento2">
                <img src="../img/elemento1.svg" alt="">
            </div>
            <div class="elemento3">
                <img src="../img/elemento1.svg" alt="">
            </div>
            <div class="elemento4">
                <img src="../img/elemento1.svg" alt="">
            </div>
            <div class="fondo">
                <img src="../img/fondoNegro.webp" alt="">
            </div>
            <div class="header">
                <div class="navigation">
                    <div class="logo"><img src="../img/logo-negro.svg" alt=""></div>
                    <div class="logo2"><a href="../index.html"><img src="../img/logo-custom.svg" alt=""></a></div>
                </div>
            </div>
            <div class="container">
                <img src="../img/resplandor.png" alt="" class="resplandor">                
                <div class="contentFormulario">
                    <h1 data-aos-duration="1000" data-aos-offset="100" data-aos-once="true">GRACIAS POR COMUNICARTE</h1>
                    <p data-aos-duration="1000" data-aos-offset="100" data-aos-once="true">En la brevedad nos estaremos comunicando con usted.</p>
                    <a href="../index.html" class="inicio" data-aos-duration="1000" data-aos-offset="100" data-aos-once="true">VOLVER AL INICIO <img src="../img/flecha.svg" alt=""></a>
                </div>
            </div>
            <div class="pie">
                <p>YAMAHA - ©2023 Todos los derechos reservados</p>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>