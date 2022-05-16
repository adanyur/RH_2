<?php
require_once dirname(dirname(dirname(__FILE__))).'/vendor/autoload.php';
require_once dirname(dirname(__FILE__)).'/config/database.php';

use App\models\Encuesta;
use App\models\EncuestaDetalle;


class EncuestaController {


    public function store($request){

        $encuesta = Encuesta::create($request);

        if($encuesta->save()){
            foreach ($request['data'] as $request){
                $EncuestaDetalle =   EncuestaDetalle::create([
                      'encuestaid'=>Encuesta::latest('id')->first()['id'],
                      'pregunta'=>$request['name'],
                      'respuesta'=>$request['value'],
                  ]);
                  $EncuestaDetalle->save();
              }

              return json_encode(['status'=>true,'message'=>'Estaremos en contacto']);  
        }

        return json_encode(['status'=>false,'message'=>'Tuvimos problemas']);
        
    }


}


?>