<?php
require_once dirname(dirname(dirname(__FILE__))).'/vendor/autoload.php';
require_once dirname(dirname(__FILE__)).'/config/database.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;

use App\models\Encuesta;
use App\models\EncuestaDetalle;


class EncuestaController {


    public function store($request){

        /*$encuesta = Encuesta::create($request);
        if($encuesta->save()){
            foreach ($request['data'] as $request){
                $EncuestaDetalle =   EncuestaDetalle::create([
                      'encuestaid'=>Encuesta::latest('id')->first()['id'],
                      'pregunta'=>$request['name'],
                      'respuesta'=>$request['value'],
                  ]);
                  $EncuestaDetalle->save();
              }
              self::sendEmail();
              return json_encode(['status'=>true,'message'=>'Estaremos en contacto']);  
        }*/

        self::sendEmail();
        return json_encode(['status'=>true,'message'=>'Estaremos en contacto']);
        //return json_encode(['status'=>false,'message'=>'Tuvimos problemas']);
        
    }


    public static function templateEmail(){

        $cssToInlineStyles = new CssToInlineStyles();
        $html = file_get_contents(dirname(dirname(dirname(__FILE__))). '/email.html');
        $css = file_get_contents(dirname(dirname(dirname(__FILE__))) . '/css/templateStyle.css');
        return $cssToInlineStyles->convert($html,$css);

    }


    public static function sendEmail(){

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'mail.clinicasantaisabel.com';          //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                  //Enable SMTP authentication
            $mail->Port       = 25;                                     
            $mail->Username   = 'yvaldez@clinicasantaisabel.com';                     //SMTP username
            $mail->Password   = '47217397yur';                               //SMTP password
            $mail->setFrom('yvaldez@clinicasantaisabel.com', 'Mailer');
            $mail->addAddress('yvaldez@clinicasantaisabel.com', 'Joe User');
            $mail->isHTML(true);
            $mail->Subject = 'Here is the subject';
            $mail->Body = self::templateEmail();
            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


    }


}


?>