<?php
require_once 'phpmailer/PHPMailerAutoload.php';
require_once 'inpEmail_configuraciones.php';
require_once 'variables-globales.php';

if(isset($_POST) && !empty($_POST['inpEmail'])){

   $_POST["inpNombre"] = (isset($_POST["inpNombre"]) && !empty($_POST["inpNombre"])) ? $_POST["inpNombre"] : 0;
   $_POST["inpApellidos"]  = (isset($_POST["inpApellidos"]) && !empty($_POST["inpApellidos"])) ? $_POST["inpApellidos"] : 0;
   $_POST["inpEmail"] = (isset($_POST["inpEmail"]) && !empty($_POST["inpEmail"])) ? $_POST["inpEmail"] : 0;
   $_POST["inpMensaje"] = (isset($_POST["inpMensaje"]) && !empty($_POST["inpMensaje"])) ? $_POST["inpMensaje"] : 0;

    $sql = "INSERT INTO procrea2019_contacto (nombre, apellido, correo, mensaje) VALUES ('".utf8_decode($_POST['inpNombre'])."', '".utf8_decode($_POST['inpApellidos'])."', '".$_POST['inpEmail']."', '".utf8_decode($_POST['inpMensaje'])."')";
    
    $servername = "mysql.axiskgdesarrollos.com";
    $database = "db_procreardev";
    $username = "adminprocrea";
    $password = "p4r4l3p1p3d02";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
          generarlog("No se pudo conectar a la DB",$sql,"Conexion a DB");
    }

    #echo "Connected successfully";
    

    
    if (mysqli_query($conn, $sql)) {
     
        // echo "New record created successfully";
        
    } else {
         # echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        generarlog("No se pudo registrar los datos",$sql,"Insercion a DB");
    }
    mysqli_close($conn);
    
  // // envio de inpEmail
  $mail = new PHPMailer;



  $mail->isSMTP();

  $mail->SMTPDebug = 0;
  $mail->Debugoutput = 'html';

  $mail->Host = $protocolo;

  $mail->Port = $puerto;
      
  $mail->SMTPAuth = true;

  $mail->Username = $de;

  $mail->Password = $psw_de;

  $mail->setFrom($de, $de_mascara);

  $mail->addAddress($_POST['inpEmail'],"");
  
  $mail->addBCC('soulness.works@gmail.com');


  $mail->Subject = utf8_decode($asunto1);


  $plantilla="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
  <html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' xml:lang='en'>
  <head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
      <meta name='viewport' content='width=device-width'>
      <meta name='viewport' content='width=device-width'> <!-- Forcing initial-scale shouldn't be necessary -->
      <meta http-equiv='X-UA-Compatible' content='IE=edge'> <!-- Use the latest (edge) version of IE rendering engine -->
      <meta name='x-apple-disable-message-reformatting'>  <!-- Disable auto-scale in iOS 10 Mail entirely -->
      <title></title> <!-- The title tag shows in inpEmail notifications, like Android 4.4. -->
      <style>
  
      html,
      body {
          margin: 0 auto !important;
          padding: 0 !important;
          height: 100% !important;
          width: 100% !important;
      }
  
      /* What it does: Stops inpEmail clients resizing small text. */
      * {
          -ms-text-size-adjust: 100%;
          -webkit-text-size-adjust: 100%;
      }
  
      /* What it does: Centers inpEmail on Android 4.4 */
      div[style*='margin: 16px 0'] {
          margin: 0 !important;
      }
  
      /* What it does: Stops Outlook from adding extra spacing to tables. */
      table,
      td {
          mso-table-lspace: 0pt !important;
          mso-table-rspace: 0pt !important;
      }
  
      /* What it does: Fixes webkit padding issue. */
      table {
          border-spacing: 0 !important;
          border-collapse: collapse !important;
          table-layout: fixed !important;
          margin: 0 auto !important;
      }
  
      /* What it does: Uses a better rendering method when resizing images in IE. */
      img {
          -ms-interpolation-mode:bicubic;
      }
  
      /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
      a {
          text-decoration: none;
      }
  
      ul {
        list-style-type: none; padding: 0; margin: 0;
      }
      ul li {
        margin: 0 0 6px 0; padding: 0 0 0 10px; color: #303030;
      }
  
      /* What it does: A work-around for inpEmail clients meddling in triggered links. */
      *[x-apple-data-detectors],  /* iOS */
      .unstyle-auto-detected-links *,
      .aBn {
          border-bottom: 0 !important;
          cursor: default !important;
          color: inherit !important;
          text-decoration: none !important;
          font-size: inherit !important;
          font-family: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
      }
  
      /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
      .a6S {
          display: none !important;
          opacity: 0.01 !important;
      }
  
      /* What it does: Prevents Gmail from changing the text color in conversation threads. */
      .im {
          color: inherit !important;
      }
  
      /* If the above doesn't work, add a .g-img class to any image in question. */
      img.g-img + div {
          display: none !important;
      }
  
      /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
      /* Create one of these media queries for each additional viewport size you'd like to fix */
  
      /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
      @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
          u ~ div .inpEmail-container {
              min-width: 320px !important;
          }
      }
      /* iPhone 6, 6S, 7, 8, and X */
      @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
          u ~ div .inpEmail-container {
              min-width: 375px !important;
          }
      }
      /* iPhone 6+, 7+, and 8+ */
      @media only screen and (min-device-width: 414px) {
          u ~ div .inpEmail-container {
              min-width: 414px !important;
          }
      }
      </style>
  </head>
  <body width='100%' style='margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #ffffff;'>
    <div style='max-width: 600px; margin: 0 auto;' class='inpEmail-container'>
    <table align='center' width='100%' role='presentation' cellspacing='0' cellpadding='0' border='0' style='margin: auto;max-width: 600px;'>
      <tr>
        <td height='20'></td>
      </tr>
      <tr>
       <td align='middle' align='center' bgcolor='#ffffff' style='height: auto; padding: 10px 15px;width: 100%;'>
          <table width='100%' border='0' cellpadding='5' cellspacing='0'>
            <tr>
              <td align='center'><img src='https://peibo.concepthaus.dev/wp-content/themes/peibo-child/assets/img/logos/logoHeader.png' width='200' alt='Peibo'/></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
       <td align='middle' bgcolor='#ffffff'style='height: auto; padding: 20px 15px;width: 100%;'>
          <table align='center' width='80%' border='0' cellpadding='5' cellspacing='0'>
            <tr>
                <td width='50%' style='color:#2E3649;font-weight: bold;font-size: 18px;'>Nombre:</td>
                <td style='color:#2E3649;font-weight: normal;font-size: 14px;'>".$_POST['inpNombre']."</td>
            </tr>
             <tr>
                <td width='50%' style='color:#2E3649;font-weight: bold;font-size: 18px;'>Apellido:</td>
                <td style='color:#2E3649;font-weight: normal;font-size: 14px;'>".$_POST['inpApellidos']."</td>
            </tr>
            <tr>
                <td style='color:#2E3649;font-weight: bold;font-size: 18px;'>Correo Electrónico:</td>
                <td style='color:#2E3649;font-weight: normal;font-size: 14px;'>".$_POST['inpEmail']."</td>
            </tr>
             <tr>
                <td style='color:#2E3649;font-weight: bold;font-size: 18px;'>Motivo Consulta:</td>
                <td style='color:#2E3649;font-weight: normal;font-size: 14px;'>".$_POST['inpMensaje']."</td>
            </tr>
            </table>
        </td>
      </tr>
      <tr>
       <td align='bottom' bgcolor='#2E3649' style='height: 130px; padding: 0 15px;width: 100%;'>
          <table width='100%' border='0' cellpadding='5' cellspacing='0'>
            <tr>
              <td align='center' style='color:#ffffff;font-weight: 300px;font-size: 13px;'>
                ® 2021 Copyright Peibo<br>
                <a href='mailto:info@peibo.com' target='_blank' style='color:#ffffff;font-weight: 400px;font-size: 13px;'>info@peibo.com</a> | <a href='https://peibo.com' target='_blank' style='color:#ffffff;font-weight: 400px;font-size: 13px;'>www.peibo.com</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
        <td height='20'></td>
    </table>
    </div>
  </body>
  </html>";  
  $mail->MsgHTML(utf8_decode($plantilla));
  //send the message, check for errors
  if (!$mail->send()) {
    echo "error al enviar ";
      return false;
  } else {

    echo "se envio";
      return true;
  }
}else{
  echo "no";
}

